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
                                    <!-- <div class="job-like-jlp"><a href="#" class="active"></a></div> -->
                                    <div class="job-number-jlp">ジョブNo.<?php the_ID();?></div>
                                    <div class="job-name-jlp">
                                        <a href="#">
                                            <?php the_title();?>
                                        </a>
                                    </div>
                                    <div class="job-intro-jlp">
                                        <div class="job-intro-left-jlp">
                                            <div class="job-intro-tags-jlp">
                                                <div>紹介予定派遣</div>
                                                <div>残業多め（月10時間以上）</div>
                                                <div>週5日</div>
                                                <div>土日休み</div>
                                                <div>1日7時間以上</div>
                                                <div>大手企業</div>
                                                <div>きれいなオフィス</div>
                                                <div>派遣社員が就業中</div>
                                                <div>服装自由・カジュアル可</div>
                                                <div>英語力不要</div>
                                                <div>一部在宅勤務</div>
                                                <div>20代活躍中</div>
                                                <div>30代活躍中</div>
                                                <div>金融</div>
                                                <div>職種未経験歓迎</div>
                                            </div>
                                            <div class="job-intro-desc-jlp">
                                                <?php the_field('description') ?>
                                            </div>
                                        </div>
                                        <div class="job-intro-right-jlp">
                                            <?php 
											$logo = get_field('logo'); 
                                            if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-box-jdp">
                                    <h3>勤務条件</h3>
                                    <div class="job-box-details-jdp">
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon1.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">職種</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('job_title') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon2.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">給与</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('value') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon3.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">勤務地</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('addressRegion') ?>
                                                <?php the_field('addressLocality') ?>
                                                <?php the_field('streetAddress') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon4.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">就業期間・契約更新</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('validThrough') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon4.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">勤務時間</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('duty_time') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon5.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">休日</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('holiday') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon5.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">残業</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('other_work') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-box-jdp skills-jdp">
                                    <h3>歓迎する経験・スキル</h3>
                                    <div class="job-box-details-jdp">
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">歓迎する業界・職種経験</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('wanted_techs') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">その他の経験・スキル</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('other_techs') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">OAスキル</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('oa_techs') ?>

                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">外国語スキル</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('fore_lang_techs') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-box-jdp skills-jdp">
                                    <h3>職場環境</h3>
                                    <div class="job-box-details-jdp">
                                        <div class="feature-main-jlp job-details-info-jdp">
                                            <div class="feature-in-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon7.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">雰囲気チェック</div>
                                                </div>
                                            </div>
                                            <div class="environment-boxes-jlp">
                                                <div class="environment-box-jlp">
                                                    <div class="environment-box-left-jlp">年齢層</div>
                                                    <div class="environment-box-right-jlp">
                                                        <div class="environment-text-jlp">20代</div>
                                                        <div class="environment-img-jlp"><img
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                alt=""></div>
                                                        <div class="environment-text-jlp">60代</div>
                                                    </div>
                                                </div>
                                                <div class="environment-box-jlp">
                                                    <div class="environment-box-left-jlp">男女比</div>
                                                    <div class="environment-box-right-jlp">
                                                        <div class="environment-text-jlp">男性<br>多い</div>
                                                        <div class="environment-img-jlp"><img
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                alt=""></div>
                                                        <div class="environment-text-jlp">女性<br>多い</div>
                                                    </div>
                                                </div>
                                                <div class="environment-box-jlp">
                                                    <div class="environment-box-left-jlp">業務の<br>進め方</div>
                                                    <div class="environment-box-right-jlp">
                                                        <div class="environment-text-jlp">1人で<br>進める</div>
                                                        <div class="environment-img-jlp"><img
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                alt=""></div>
                                                        <div class="environment-text-jlp">チームで<br>進める</div>
                                                    </div>
                                                </div>
                                                <div class="environment-box-jlp">
                                                    <div class="environment-box-left-jlp">業務の<br>特性</div>
                                                    <div class="environment-box-right-jlp">
                                                        <div class="environment-text-jlp">定型化</div>
                                                        <div class="environment-img-jlp"><img
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                alt=""></div>
                                                        <div class="environment-text-jlp">変化</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">事業所人数</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('office_members') ?>人
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">同じ仕事をする人</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('is_samework_member') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">就業先部署の業務内容</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('main_office_content') ?>
                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">施設・周辺情報</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('office_enviroment') ?>

                                            </div>
                                        </div>
                                        <div class="job-box-list-jdp">
                                            <div class="job-box-list-left-jdp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-name-jlp">ビル内喫煙スペース</div>
                                                </div>
                                            </div>
                                            <div class="job-box-list-right-jdp">
                                                <?php the_field('smoking_condition') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="feature-btns-hp details-btns-hp">
                                    <div class="feature-btn-hp">
                                        <a href="#" class="common-btn-hp">応募する</a>
                                    </div>
                                    <div class="feature-btn-hp">
                                        <a href="#" class="common-btn-hp border-btn-hp">詳しく見る</a>
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