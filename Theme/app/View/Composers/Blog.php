<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function DeliciousBrains\WPMDB\Container\DI\object;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-newsroom',
        'partials.content-single-blog',
        'partials.header-archive-newsroom',
        'partials.nav-fixed',
        'taxonomy-blog*'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'categories' => $this->categories(),
            'like' => $this->like(),
            'category_label' => $this->category_label(),
            'fixedMenu' => $this->fixedMenu(),
            'fixedMenuLabel' => $this->getFixedMenuLabel(),
            'selected' => $this->selected(),
            'title' => $this->title(),
        ];
    }

    public function categories()
    {
        return wp_get_post_terms(get_the_ID(), get_post_type(). '_category');
    }

    public function like()
    {
        return do_shortcode('[wp_ulike]');
    }

    public function category_label()
    {
        if (isset(get_queried_object()->taxonomy) && !empty($title = get_queried_object()->taxonomy)) {
            return $title;
        }
        return get_post_type().'_category';
    }

    public function nameToObject($name)
    {
        $result = get_post_type_object($name);
        $result->term_taxonomy_id = 0;
        $result->permalink = get_post_type_archive_link($name);
        $result->children = Newsroom::get_category($name);
        return $result;
    }
    
    public function fixedMenu()
    {
        $menu = [
          'blog' => $this->nameToObject('blog'),
          'media' => $this->nameToObject('media'),
        ];
        return $menu;
    }

    public function getFixedMenuLabel()
    {
        return get_the_archive_title();
    }

    public function selected()
    {
        $post = get_post();
        if ($terms = get_the_terms($post->ID, get_post_type().'_category')) {
            return $terms[0]->term_id;
        }
        return 0;
    }
    
    public static function title()
    {
        if (is_archive()) {
            return get_the_archive_title();
        }
        return get_post_type_object(get_post_type())->labels->singular_name;
    }
}
