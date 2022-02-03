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
            'popup' => $this->popup,
        ];
    }

    public function __construct()
    {
        $this->getPopup();
    }

    public $popup;

    public function getPopup()
    {
        $post = get_posts(array(
            'post_type' => 'popup',
            'post_status' => 'publish',
            'numberposts' => 1,
        ));
        if (empty($post)) return;

        $post = $post[0];

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

        $this->popup = $post;
    }
}
