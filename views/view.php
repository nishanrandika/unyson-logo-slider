<?php
if (!defined('FW')) die('Forbidden');

/*
 * Variables for unique logo slider
 */

//Unique id for slider
$slider_id = uniqid('usc-logo-slider-');

//Desktop View Variable
$slide_auto_rotate = fw_akg('slider_auto/true', $atts);
$slide_auto_rotate_status = fw_akg('slider_auto/slides_auto_choice', $atts);
$slide_border = fw_akg('slide_border/true', $atts);
$slide_border_status = fw_akg('slide_border/slide_border_choice', $atts);

//Mobile View Variable
$mobile_view = fw_akg('mobile_phones', $atts);
$mobile_auto_rotate = $atts['mobile_phones']['slider_auto']['true'];
$mobile_auto_rotate_status = $atts['mobile_phones']['slider_auto']['slides_auto_choice'];

//Tablet View Variable
$tablet_view = $atts['tablets'];
$tablet_auto_rotate = $atts['tablets']['slider_auto']['true'];
$tablet_auto_rotate_status = $atts['tablets']['slider_auto']['slides_auto_choice'];
?>

<section class="usc-logo-slider">
    <?php echo get_permalink(2); ?>
    <?php echo wp_get_attachment_url( 22 ); ?>
    <h2 class="usc-logo-slider__heading"><?php echo $atts['slider_heading'] ?></h2>
    <div class="usc-logo-slider__inner" id="<?php echo $slider_id; ?>">
        <?php $slide_id = 1; ?>
        <?php foreach (fw_akg('add_slide', $atts, array()) as $slide) : ?>
            <?php
            $slide_img = $slide['slide_image'];
            $slide_hover_img = $slide['slide_image_hover'];
            ?>
        <a href="/<?php echo $slide['slide_link']; ?>">
            <div data-eql-height="logo-slider-slide" class="usc-logo-slider__inner__slide">
                <?php if ($slide_img != "") : ?>
                    <img src="<?php echo $slide_img['url']; ?>"
                         data-hover-src="<?php echo $slide_hover_img['url']; ?>"
                         data-default-src="<?php echo $slide_img['url']; ?>"
                         class="usc-logo-slider__inner__slide__image"/>
                <?php endif; ?>
                    <h3 class="usc-logo-slider__inner__slide__caption"><?php echo $slide['slide_caption']; ?></h3>
            </div>
        </a>

        <?php $slide_id++; ?>
        <?php endforeach; ?>
    </div>
</section>

    <style>
        .usc-logo-slider__inner__slide{
        <?php if($slide_border_status == "true") : ?>
            border: <?php echo $slide_border['slide_border_width']; ?>px <?php echo $slide_border['slide_border_type']; ?> <?php echo $slide_border['slide_border_color']; ?>;
        <?php endif; ?>
        }
    </style>

    <script>
        (function($, window, document){
            'use strict';
            $(function() {
                //Slick Slider
                $('#<?php echo $slider_id; ?>').slick({
                    autoplay: <?php echo $slide_auto_rotate_status; ?>,
                    <?php if($slide_auto_rotate != "" && $slide_auto_rotate_status == 'true') :?>
                        autoplaySpeed: <?php echo $slide_auto_rotate['slides_time_duration']; ?>,
                    <?php endif; ?>
                    centerMode: false,
                    slidesToShow: <?php echo $atts['slides_to_display']; ?>,
                    slidesToScroll: 1,
                    arrows: <?php echo $atts['slider_arrows']; ?>,
                    dots: <?php echo $atts['slider_dots'] ?>,
                    cssEase: '<?php echo $atts['slider_css_ease']; ?>',
                    draggable: <?php echo $atts['slider_draggable']; ?>,
                    focusOnSelect: <?php echo $atts['slider_focus_on_select']; ?>,
                    easing: '<?php echo $atts['slider_jquery_easing']; ?>',
                    pauseOnFocus: '<?php echo $atts['slider_pause_on_hover']; ?>',
                    pauseOnHover: '<?php echo $atts['slider_pause_on_focus']; ?>',

                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: <?php echo $mobile_view ['slides_to_display']; ?>,
                                autoplay: <?php echo $mobile_auto_rotate_status; ?>,
                                <?php if($mobile_auto_rotate != "" && $mobile_auto_rotate_status == 'true') :?>
                                autoplaySpeed: <?php echo $mobile_auto_rotate['slides_time_duration']; ?>,
                                <?php endif; ?>
                                arrows: <?php echo $mobile_view ['slider_arrows']; ?>,
                                dots: <?php echo $mobile_view ['slider_dots'] ?>,
                                swipe:  <?php echo $mobile_view ['slider_swipe']; ?>,
                                touchMove: <?php echo $mobile_view ['slider_touchMove']; ?>,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: <?php echo $tablet_view['slides_to_display']; ?>,
                                autoplay: <?php echo $tablet_auto_rotate_status; ?>,
                                <?php if($tablet_auto_rotate != "" && $tablet_auto_rotate_status == 'true') :?>
                                autoplaySpeed: <?php echo $tablet_auto_rotate['slides_time_duration']; ?>,
                                <?php endif; ?>
                                arrows: <?php echo $tablet_view ['slider_arrows']; ?>,
                                dots: <?php echo $tablet_view ['slider_dots'] ?>,
                                swipe:  <?php echo $tablet_view ['slider_swipe']; ?>,
                                touchMove: <?php echo $tablet_view ['slider_touchMove']; ?>,
                            }
                        }
                    ]
                });
            });
        })(window.jQuery, window, document);
    </script>

<?php
fw_print($atts);