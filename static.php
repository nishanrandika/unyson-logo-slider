<?php if (!defined('FW')) die('Forbidden');

// base urls
$base_statics = '/shortcodes/logo-slider/static/';
$base_nodemodules = '/shortcodes/logo-slider/node_modules/';
$shortcodes_extension = fw()->extensions->get('logo-slider');

wp_enqueue_style(
    'fw-shortcode-logo-slider-slick',
    $shortcodes_extension->get_uri($base_nodemodules . 'slick-carousel/slick/slick.css')
);

wp_enqueue_style(
    'fw-shortcode-logo-slider-slick-theme',
    $shortcodes_extension->get_uri($base_statics. 'css/logo-slider.css')
);

wp_enqueue_style(
    'fw-shortcode-logo-slider-style',
    $shortcodes_extension->get_uri($base_nodemodules . 'slick-carousel/slick/slick-theme.css')
);

wp_enqueue_script(
    'fw-slick',
    $shortcodes_extension->get_uri($base_nodemodules . 'slick-carousel/slick/slick.js')
);

wp_enqueue_script(
    'fw-shortcode-logo-slider-js',
    $shortcodes_extension->get_uri($base_statics . 'js/logo-slider.js')
);


//if (!function_exists('_action_theme_shortcode_logo_slider_enqueue_dynamic_css')):
//
//    /**
//     * @internal
//     * @param array $data
//     */
//   function _action_theme_shortcode_logo_slider_enqueue_dynamic_css($data)
//    {
//        $shortcode = 'logo-slider';
//        $atts = shortcode_parse_atts($data['atts_string']);
//        $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
//
//        wp_add_inline_style(
//            'theme-shortcode-' . $shortcode,
//            '#shortcode-' . $atts['tablets']['slider_auto']['true'] . ' { ' .
//            'color: ' . $atts['color'] . ';' .
//            ' } '
//        );
//    }
//
//    add_action(
//        'fw_ext_shortcodes_enqueue_static:logo_slider',
//        '_action_theme_shortcode_logo_slider_enqueue_dynamic_css'
//    );
//
//endif;