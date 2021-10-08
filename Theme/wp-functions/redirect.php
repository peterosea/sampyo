<?php

function my_homeexternal_template_redirect()
{
    $slug = get_post_field('post_name', get_the_ID());
    if ($slug === 'job-opportunities') {
        $external_link = 'https://sampyo.recruiter.co.kr';
        wp_redirect($external_link);
        exit();
    }
}
add_action('template_redirect', 'my_homeexternal_template_redirect');
