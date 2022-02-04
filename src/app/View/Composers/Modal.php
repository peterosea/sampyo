<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use \Carbon\Carbon;


class Modal extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.modal',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'popups' => $this->popups,
            'isPopupShowState' => $this->isPopupShowState,
            'popupForceClose' => $this->popupForceClose,
        ];
    }

    public $isPopupShowState;
    public $popupForceClose;

    public function __construct()
    {
        $this->getPopup();

        if (empty($this->popups)) return;
        $this->getPopupIdList();
        $this->isPopupShowState = implode(' || ', $this->popupIdList);
        $this->popupForceClose = ' || ' . implode(' || ', array_map(function ($popupId) {
            return '$event.target === document.querySelector(\'#' . $popupId . '\')';
        }, $this->popupIdList));
    }

    public function setPopup($post)
    {
        $howtoinput = get_field('howtoinput', $post->ID);
        $post->isImage = false;
        if ($howtoinput == "image") {
            $post->isImage = true;
            $getImage = get_field('popup_image', $post->ID); //이미지 경로
            $post->content = "<img src='" . $getImage . "'>";
        } else {
            $popup_content = get_field('popup_html', $post->ID);
            $post->content = $popup_content;
        }

        $post->visibility = true;
        if (get_field('timer_check', $post->ID)) {
            $date_start = get_field('timer_start', $post->ID);
            $timer_end = get_field('timer_end', $post->ID);

            $startDate = Carbon::createFromFormat('YmdH', $date_start);
            $endDate = Carbon::createFromFormat('YmdH', $timer_end);
            $check = Carbon::now()->between($startDate, $endDate);

            $post->visibility = $check;
        }
        return $post;
    }

    public $popups;

    public function getPopup()
    {
        $posts = get_posts(array(
            'post_type' => 'popup',
            'post_status' => 'publish',
            'numberposts' => 3,
        ));
        if (empty($posts)) return;

        $posts = array_map(function ($post) {
            $post = $this->setPopup($post);
            return $post;
        }, $posts);

        $this->popups = $posts;
    }

    public $popupIdList;
    public function getPopupIdList()
    {
        $popupIdList = [];
        foreach ($this->popups as $popup) {
            array_push($popupIdList, 'popup_' . $popup->ID);
        }
        $this->popupIdList = $popupIdList;
    }
}
