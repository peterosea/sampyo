<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Newsroom extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-newsroom',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'pin_blog' => $this->get_pin_post("blog")
        ];
    }

    private function get_pin_post($postType)
    {
        $pintpost = get_posts(
            array(
              'post_type' => $postType,
              'numberposts' => 1,
              'meta_query' => array(
                  array(
                      'key' => 'pin',
                      'value' => true
                  )
              )
          )
        );
        if (count($pintpost) === 0) {
            $pintpost = get_posts(
                array(
                'post_type' => $postType,
                'numberposts' => 1,
            )
            );
        }

        $post = $pintpost[0];
        $post->permalink = get_the_permalink($post->ID);
        $post->thumbnail = get_the_post_thumbnail_url($post->ID);
        $post->excerpt = get_the_excerpt($post->ID);
        // 카테고리 추가
        $cats = get_the_terms($post->ID, $postType."_category");
        $post->category = array_map(function ($cat) use ($postType) {
            $cat->link = "/{$postType}/category/".$cat->slug;
            return $cat;
        }, $cats);

        return $post;
    }
}
