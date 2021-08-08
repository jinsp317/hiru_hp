<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Japn
 */

get_header('no_transparent');
?>
<main id="primary" class="site-main">
    <div class="line-fixed-hp">
        <div class="line-link-hp">
            <a href="#" class="gradiant_1">
                <span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line_icon.svg" alt="" /><br>
                    で<br>登<br>録
                </span>
            </a>
        </div>
        <div class="line-link-hp">
            <a href="#" class="gradiant_2">
                <span>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pc_icon.svg" alt="" /><br>
                    入<br>力<br>登<br>録
                </span>
            </a>
        </div>
    </div>
    <?php while ( have_posts() ) :	the_post();	?>
    <div class="inner-page-main-ip">
        <div class="banner-block-ip">
            <div class="banner-block-overlay-ip">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-block-in-ip">
                            <div class="banner-middle-ip">
                                <div class="breadcrumb-ip">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">昼ナビTOP</a></li>
                                        <li class="breadcrumb-item"><a href="#">福岡県のお仕事情報</a></li>
                                        <li class="breadcrumb-item active">ジョブNo.<?php the_ID();?></li>
                                    </ol>
                                </div>
                                <div class="inner-title-ip">
                                    <h2><span><?php the_title();?></h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="about-block-ip interview-block-op">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-block-in-ip">
                        <div class="about-middle-ip">
                            <div class="about-left-ip">
                                <div class="job-jlp job-details-jdp">
                                    <div class="job-like-jlp"><a href="#" class="active"></a></div>
                                    <div class="job-number-jlp">ジョブNo.<?php the_ID();?></div>
                                    <div class="job-name-jlp">
                                        <a href="#">
                                            <?php the_title();?>
                                        </a>
                                    </div>
                                    <div class="job-intro-jlp">
                                        <div class="job-intro-left-jlp">                                            
                                            <div class="job-intro-desc-jlp">
                                                <?php the_field('content') ?>
                                            </div>
                                        </div>
                                        <div class="job-intro-right-jlp">
                                            <?php 
											$logo = get_field('main_image'); 
                                            if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>                                                            
                            </div>
                            <?php get_sidebar('wishes') ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <?php endwhile;
    wp_reset_postdata();?>

</main><!-- #main -->

<?php  get_footer(); ?>