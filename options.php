<?php if (!defined('FW')) die('Forbidden');

/*
 * @company name : Eight25Media
 * @auther : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : Logo slider backend options implemented in array.
 */

$options = array(

    /*
     * Slides tab
     * Options in add new slide
     */
    'tab_slides' => array(
        'type' => 'tab',
        'title' => __('Slides', '{domain}'),
        'options' => array(
            'add_slide' => array( // Add new slide
                'type' => 'addable-box',
                'label' => __('Add slide', '{domain}'),
                'desc' => __('Add a additional slide to slider.', '{domain}'),
                // @TODO : Image is not previewing on the place holder.
                //'template' => '<h2>{{- slide_caption }}</h2>',
                'size' => 'large',
                'add-button-text' => __('Add Slide', '{domain}'),
                'sortable' => true,
                'box-options' => array( // Options for slide adding box
                    'slide_image' => array(
                        'type' => 'upload',
                        'label' => __('Slide Image', '{domain}'),
                        'desc' => __('Add slide image from here', '{domain}'),
                    ),
                    'slide_image_hover' => array(
                        'type' => 'upload',
                        'label' => __('Slide Hover Image', '{domain}'),
                        'desc' => __('Add image for hover from here', '{domain}'),
                    ),
                    'slide_caption' => array(
                        'type' => 'textarea',
                        'label' => __('Slide Description', '{domain}'),
                        'desc' => __('Add slide description from here', '{domain}'),
                    ),
                    'slide_link' => array(
                        'type' => 'url-picker',
                        'label' => __('Slide Link', '{domain}'),
                        'desc' => __('Add link for slide from here', '{domain}'),
                    ),
                )
            )
        )
    ),


    /*
     * Slider Settings tab
     * Apply for desktop view
     */
    'tab_slide_settings' => array(
        'type' => 'tab',
        'title' => __('Settings', '{domain}'),
        'options' => array(
            'slider_heading' => array(
                'type' => 'text',
                'label' => __('Slider heading', '{domain}'),
                'desc' => __('Add slider heading from here', '{domain}'),
            ),
            'slide_border' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'picker' => array(
                    'slide_border_choice' => array(
                        'label' => __('Slide Border', '{domain}'),
                        'type' => 'switch',
                        'desc' => __('Add border to slides', '{domain}'),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}')
                        ),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}')
                        ),
                    )
                ),
                'choices' => array(
                    'true' => array(
                        'slide_border_type' => array(
                            'type' => 'select',
                            'value' => 'none',
                            'choices'   =>  array(
                                'none' => __('None', '{domain}'),
                                'solid' => __('Solid', '{domain}'),
                                'dotted' => __('Dotted', '{domain}'),
                                'dashed' => __('Dashed', '{domain}'),
                                'double' => __('Double', '{domain}'),
                                'groove' => __('Groove', '{domain}'),
                                'ridge' => __('Ridge', '{domain}'),
                                'inset' => __('Inset', '{domain}'),
                                'outset' => __('Outset', '{domain}'),
                                'hidden' => __('Hidden', '{domain}'),
                            ),
                            'label' => __('Border Type', '{domain}'),
                            'desc' => __(' Select slide border width (px)', '{domain}')
                        ),
                        'slide_border_width' => array(
                            'type' => 'text',
                            'label' => __('Border Width', '{domain}'),
                            'desc' => __(' Select slide border width (px)', '{domain}')
                        ),
                        'slide_border_color' => array(
                            'type' => 'color-picker',
                            'value' => '#000',
                            'label' => __('Border Color', '{domain}'),
                            'desc' => __(' Select color for border', '{domain}')
                        ),
                    ),
                ),
            ),
            'slides_to_display' => array(
                'type' => 'slider',
                'value' =>  4,
                'properties' => array(
                    'min' => 1,
                    'max' => 10
                ),
                'label' => __('Slide to Display', '{domain}'),
                'desc' => __(' Select how many slides should be displayed', '{domain}')
            ),
            'slider_auto' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'picker' => array(
                    'slides_auto_choice' => array(
                        'label' => __('Auto Sliding', '{domain}'),
                        'type' => 'switch',
                        'desc' => __('Enable auto slide feature', '{domain}'),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}')
                        ),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}')
                        ),
                    )
                ),
                'choices' => array(
                    'true' => array(
                        'slides_time_duration' => array(
                            'type' => 'slider',
                            'properties' => array(
                                'min' => 1000,
                                'max' => 10000
                            ),
                            'label' => __('Sliding Duration', '{domain}'),
                            'desc' => __(' Select time duration between slides', '{domain}')
                        ),
                    ),
                ),
            ),
            'slider_arrows' => array(
                'type' => 'switch',
                'label' => __('Slider Arrows', '{domain}'),
                'desc' => __('Enable slider arrows from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_dots' => array(
                'type' => 'switch',
                'label' => __('Slider Dots', '{domain}'),
                'desc' => __('Enable slider dots from here', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_adaptive_height' => array(
                'type' => 'switch',
                'label' => __('Slider Adaptive Height', '{domain}'),
                'desc' => __('Enables adaptive height for single slide horizontal carousels.', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_css_ease' => array(
                'type' => 'select',
                'value' => 'ease',
                'label' => __('CSS Ease', '{domain}'),
                'desc' => __('Select CSS3 animation easing effect.', '{domain}'),
                'choices' => array(
                    'ease' => __('Ease', '{domain}'),
                    'linear' => __('Linear', '{domain}'),
                    'ease-in' => __('Ease-in', '{domain}'),
                    'ease-out' => __('Ease-out', '{domain}'),
                    'ease-in-out' => __('Ease-in-out', '{domain}'),
                )
            ),
            'slider_draggable' => array(
                'type' => 'switch',
                'label' => __('Slider Draggable', '{domain}'),
                'desc' => __('Enable slider mouse dragging feature', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_focus_on_select' => array(
                'type' => 'switch',
                'label' => __('Focus on Select', '{domain}'),
                'desc' => __('Enable slider focus on selected element (click)', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_jquery_easing' => array(
                'type' => 'select',
                'value' => 'linear',
                'label' => __('jQuery Easing', '{domain}'),
                'desc' => __('Add easing for jQuery animate. Use with easing libraries or default easing methods', '{domain}'),
                'choices' => array(
                    'linear' => __('Linear', '{domain}'),
                    'swing' => __('Swing', '{domain}'),

                )
            ),
            'slider_pause_on_hover' => array(
                'type' => 'switch',
                'value' => 'true',
                'label' => __('Pause on Hover', '{domain}'),
                'desc' => __('Pause autoplay on hover', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
            'slider_pause_on_focus' => array(
                'type' => 'switch',
                'value' => 'true',
                'label' => __('Pause on Focus', '{domain}'),
                'desc' => __('Pause autoplay on focus', '{domain}'),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}'),
                ),
            ),
        )
    ),


    /*
     * Slider Responsive Settings tab
     * Apply for tablets and mobile view
     */
    'tab_slide_responsive' => array(
        'type' => 'tab',
        'title' => __('Responsive', '{domain}'),
        'options' => array(
            'mobile_phones' =>  array( // Options for mobile view
                'type'  => 'popup',
                'label' => __('Mobile View', '{domain}'),
                'add-button-text' => __('Edit', '{domain}'),
                'desc'  =>  'Change slider settings in mobile devices. (screens less than 768px wide)',
                'popup-options' =>  array(
                    'slides_to_display' => array(
                        'type' => 'slider',
                        'value' =>  1,
                        'properties' => array(
                            'min' => 1,
                            'max' => 10
                        ),
                        'label' => __('Slide to Display', '{domain}'),
                        'desc' => __(' Select how many slides should be displayed on mobile view', '{domain}')
                    ),
                    'slider_auto' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'value' => true,
                        'picker' => array(
                            'slides_auto_choice' => array(
                                'label' => __('Auto Sliding', '{domain}'),
                                'type' => 'switch',
                                'desc' => __('Enable auto slide feature', '{domain}'),
                                'right-choice' => array(
                                    'value' => 'true',
                                    'label' => __('Enable', '{domain}')
                                ),
                                'left-choice' => array(
                                    'value' => 'false',
                                    'label' => __('Disable', '{domain}')
                                ),
                            )
                        ),
                        'choices' => array(
                            'true' => array(
                                'slides_time_duration' => array(
                                    'type' => 'slider',
                                    'properties' => array(
                                        'min' => 1000,
                                        'max' => 10000
                                    ),
                                    'label' => __('Sliding Duration', '{domain}'),
                                    'desc' => __(' Select time duration between slides', '{domain}')
                                ),
                            ),
                        ),
                    ),
                    'slider_arrows' => array(
                        'type' => 'switch',
                        'label' => __('Slider Arrows', '{domain}'),
                        'desc' => __('Enable slider arrows from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_dots' => array(
                        'type' => 'switch',
                        'label' => __('Slider Dots', '{domain}'),
                        'desc' => __('Enable slider dots from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_swipe' => array(
                        'type' => 'switch',
                        'label' => __('Slider Swipe', '{domain}'),
                        'value' => true,
                        'desc' => __('Enable slider swipe feature in mobile', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_touchMove' => array(
                        'type' => 'switch',
                        'label' => __('Slider Touch Move', '{domain}'),
                        'desc' => __('Enable slide motion with touch feature in mobile', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                )
            ),

            'tablets' =>  array( // Options for tablet view
                'type'  => 'popup',
                'label' => __('Tablet View', '{domain}'),
                'add-button-text' => __('Edit', '{domain}'),
                'desc'  =>  'Change slider settings in tablet devices. (screens equal to or greater than 992px wide)',
                'popup-options' =>  array(
                    'slides_to_display' => array(
                        'type' => 'slider',
                        'value' =>  2,
                        'properties' => array(
                            'min' => 1,
                            'max' => 10
                        ),
                        'label' => __('Slide to Display', '{domain}'),
                        'desc' => __(' Select how many slides should be displayed on tablet view', '{domain}')
                    ),
                    'slider_auto' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'value' => true,
                        'picker' => array(
                            'slides_auto_choice' => array(
                                'label' => __('Auto Sliding', '{domain}'),
                                'type' => 'switch',
                                'desc' => __('Enable auto slide feature', '{domain}'),
                                'right-choice' => array(
                                    'value' => 'true',
                                    'label' => __('Enable', '{domain}')
                                ),
                                'left-choice' => array(
                                    'value' => 'false',
                                    'label' => __('Disable', '{domain}')
                                ),
                            )
                        ),
                        'choices' => array(
                            'true' => array(
                                'slides_time_duration' => array(
                                    'type' => 'slider',
                                    'properties' => array(
                                        'min' => 1000,
                                        'max' => 10000
                                    ),
                                    'label' => __('Sliding Duration', '{domain}'),
                                    'desc' => __(' Select time duration between slides', '{domain}')
                                ),
                            ),
                        ),
                    ),
                    'slider_arrows' => array(
                        'type' => 'switch',
                        'label' => __('Slider Arrows', '{domain}'),
                        'desc' => __('Enable slider arrows from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_dots' => array(
                        'type' => 'switch',
                        'label' => __('Slider Dots', '{domain}'),
                        'desc' => __('Enable slider dots from here', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_swipe' => array(
                        'type' => 'switch',
                        'value' => true,
                        'label' => __('Slider Swipe', '{domain}'),
                        'desc' => __('Enable slider swipe feature in tablet', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                    'slider_touchMove' => array(
                        'type' => 'switch',
                        'label' => __('Slider Touch Move', '{domain}'),
                        'desc' => __('Enable slide motion with touch feature in tablet', '{domain}'),
                        'left-choice' => array(
                            'value' => 'false',
                            'label' => __('Disable', '{domain}'),
                        ),
                        'right-choice' => array(
                            'value' => 'true',
                            'label' => __('Enable', '{domain}'),
                        ),
                    ),
                )
            ),
        )
    )
);