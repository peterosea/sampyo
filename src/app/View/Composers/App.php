<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Walker_Nav_Menu;

class App extends Composer
{
    public $recruiter = 'https://sampyo.recruiter.co.kr';
    public $asf = 'http://chunginwookfoundation.org';
    
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteLogo' => $this->siteLogo(),
            'siteLogoWhite' => $this->siteLogo(true),
            'siteSubMenu' => $this->siteSubMenu(),
            'recruiter' => $this->recruiter,
            'asf' => $this->asf,
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo($arg = false)
    {
        if ($arg) {
            return get_theme_file_uri('resources/images/logo-white.svg');
        }
        return get_theme_file_uri('resources/images/logo.svg');
    }

    public function siteSubMenu()
    {
        $nav = wp_nav_menu([
          'items_wrap' => <<<EOD
          <ul id="%1\$s" class="%2\$s" x-data="{selected: 0}">
            %3\$s
          </ul>
EOD,
          'theme_location' => 'primary_navigation',
          'menu_class' => 'header-global-subnav',
          'container' => false,
          'echo' => false,
          'walker' => new WPDocs_Walker_Nav_Menu()
        ]);

        return $nav;
    }
}

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu
{

  /**
   * Starts the list before the elements are added.
   *
   * Adds classes to the unordered list sub-menus.
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
      $indent = ($depth > 0  ? str_repeat("\t", $depth) : ''); // code indent
      $display_depth = ($depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu',
          ($display_depth % 2  ? 'menu-odd' : 'menu-even'),
          ($display_depth >=2 ? 'sub-sub-menu' : ''),
          'menu-depth-' . $display_depth
      );
        $class_names = implode(' ', $classes);

        // depth data
        $dapth_alpinejs = $depth === 0 ? <<<EOD
              x-show="id === selected"
              x-cloak
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
          EOD : $depth;

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '"'. $dapth_alpinejs .'>' . "\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >=2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // depth data
        $dapth_alpinejs = '';
        
        if ($depth === 0) {
            $dapth_alpinejs = <<<EOD
              :class="{'open': selected === $item->ID}"
EOD;
        }
        if ($depth === 0 && in_array('current-menu-ancestor', $item->classes)) {
            $dapth_alpinejs .= <<<EOD
              x-init="selected = $item->ID"
EOD;
        }

        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        // Build HTML.
        $output .= <<<EOD
        $indent<li x-data="{id: $item->ID}" class="$depth_class_names $class_names" $dapth_alpinejs>
EOD;

        // Link attributes.
        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) .'"' : '';
        $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';

        if ($depth === 0) {
            $attributes .= <<<EOD
              @click.prevent="selected === $item->ID ? selected = 0 : selected = $item->ID" :class="{'active': selected === $item->ID}"
EOD;
        }

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
