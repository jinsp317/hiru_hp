<?php /* Template Name: Job_detail */?>
<?php
get_header('no_transparent');
?>
<main id="primary" class="site-main">
    <!-- CONTAIN_START -->
    <section id="contain">

        <?php get_sidebar('rightbar') ?>
        <?php
        $id = $_GET['id'];
        $args = array(
            'post_type' => 'job',
            'post_status' => 'publish',
            'p' => $id,
            // 'posts_per_page' => 8,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()): 
            $loop->the_post(); ?>
        <div class="inner-page-main-ip">
            <div class="banner-block-ip">
                <div class="banner-block-overlay-ip">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-block-in-ip">
                                <div class="banner-middle-ip">
                                    <div class="breadcrumb-ip">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo get_site_url() ?>">昼ナビTOP</a></li>
                                            <li class="breadcrumb-item"><a href="<?php echo get_site_url()?>/job_list"><?php the_field('addressRegion') ?>のお仕事情報</a></li>
                                            <li class="breadcrumb-item active">ジョブNo.<?php the_ID() ?></li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2><?php the_field('job_title') ?></h2>
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
                                        <div class="job-number-jlp">ジョブNo.<?php the_ID() ?></div>
                                        <div class="job-name-jlp">
                                            <a href="<?php echo get_site_url() ?>/job?id=<?php the_ID() ?>">
                                                <?php the_title() ?>
                                            </a>
                                        </div>
                                        <div class="job-intro-jlp">
                                            <div class="job-intro-left-jlp">
                                                <div class="job-intro-tags-jlp">
                                                    <?php 
                                                    $specs = get_field('spec');
                                                    // $specs = explode(',', $spec);
                                                    foreach ($specs as $item) {
                                                        echo '<div>' . $item. '</div>';
                                                    }
                                                    ?>

                                                </div>
                                                <div class="job-intro-desc-jlp">
                                                    <?php get_field('description') ?>
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
                                                    <?php the_field('job_code_1') ?>
                                                    <?php the_field('job_code_2') ?>
                                                    <?php the_field('job_code_3') ?>
                                                    <?php the_field('job_code_4') ?>
                                                    <?php the_field('job_code_5') ?>
                                                    <?php the_field('job_code_6') ?>
                                                    <?php the_field('job_code_7') ?>
                                                    <?php the_field('job_code_8') ?>
                                                    <?php the_field('job_code_9') ?>
                                                    <?php the_field('job_code_10') ?>
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
                                                    <?php $pay = get_field('pay_amount');
                                                        // $pay = 
                                                        echo substr((str_replace('■', '<br/> ■', $pay)), 5) ;
                                                    ?>
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
                                                    <?php $pay = get_field('validThrough');
                                                        // $pay = 
                                                        echo str_replace('・', '<br/>・', $pay) ;
                                                    ?>

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
                                                    <?php the_field('duty_time')?>
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
                                                    <?php 
                                                        $days =  get_field('holiday_');
                                                        echo (str_replace('■', '<br/> ■', $days));
                                                    ?>
                                                </div>
                                            </div>
                                            <!-- <div class="job-box-list-jdp">
                                                <div class="job-box-list-left-jdp">
                                                    <div class="feature-in-left-jlp">
                                                        <div class="feature-in-left-icon-jlp"><img
                                                                src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon5.png"
                                                                alt=""></div>
                                                        <div class="feature-in-left-name-jlp">残業</div>
                                                    </div>
                                                </div>
                                                <div class="job-box-list-right-jdp">
                                                    <div class="environment-box-jlp">                                                        
                                                        <div class="environment-box-right-jlp">
                                                            <div class="environment-text-jlp">多い</div>
                                                            <div class="environment-img-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt=""></div>
                                                            <div class="environment-text-jlp">少ない</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
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
                                                    <?php the_field('wanted_skills') ?>
                                                </div>
                                            </div>
                                            <div class="job-box-list-jdp">
                                                <div class="job-box-list-left-jdp">
                                                    <div class="feature-in-left-jlp">
                                                        <div class="feature-in-left-name-jlp">その他の経験・スキル</div>
                                                    </div>
                                                </div>
                                                <div class="job-box-list-right-jdp">
                                                    <?php the_field('other_skills') ?>
                                                </div>
                                            </div>
                                            <div class="job-box-list-jdp">
                                                <div class="job-box-list-left-jdp">
                                                    <div class="feature-in-left-jlp">
                                                        <div class="feature-in-left-name-jlp">OAスキル</div>
                                                    </div>
                                                </div>
                                                <div class="job-box-list-right-jdp">
                                                    <?php the_field('oa_skill') ?>
                                                </div>
                                            </div>
                                            <div class="job-box-list-jdp">
                                                <div class="job-box-list-left-jdp">
                                                    <div class="feature-in-left-jlp">
                                                        <div class="feature-in-left-name-jlp">外国語スキル</div>
                                                    </div>
                                                </div>
                                                <div class="job-box-list-right-jdp">
                                                    <?php the_field('fore_lang_skills') ?>
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
                                                            <div class="environment-img-jlp">
                                                                <?php if(get_field('age_percent') >=  1 && get_field('age_percent') <= 5 ) { ?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('age_percent')?>.png"
                                                                    alt="">
                                                                <?php } else {?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt="">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="environment-text-jlp">60代</div>
                                                        </div>
                                                    </div>
                                                    <div class="environment-box-jlp">
                                                        <div class="environment-box-left-jlp">男女比</div>
                                                        <div class="environment-box-right-jlp">
                                                            <div class="environment-text-jlp">男性<br>多い</div>
                                                            <div class="environment-img-jlp">
                                                                <?php if(get_field('gender_percent') >=  1 && get_field('gender_percent') <= 5 ) { ?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('gender_percent')?>.png"
                                                                    alt="">
                                                                <?php } else {?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt="">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="environment-text-jlp">女性<br>多い</div>
                                                        </div>
                                                    </div>
                                                    <div class="environment-box-jlp">
                                                        <div class="environment-box-left-jlp">業務の<br>進め方</div>
                                                        <div class="environment-box-right-jlp">
                                                            <div class="environment-text-jlp">1人で<br>進める</div>
                                                            <div class="environment-img-jlp">
                                                                <?php if(get_field('office_exec_type') >=  1 && get_field('office_exec_type') <= 5 ) { ?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('office_exec_type')?>.png"
                                                                    alt="">
                                                                <?php } else {?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt="">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="environment-text-jlp">チームで<br>進める</div>
                                                        </div>
                                                    </div>
                                                    <div class="environment-box-jlp">
                                                        <div class="environment-box-left-jlp">業務の<br>特性</div>
                                                        <div class="environment-box-right-jlp">
                                                            <div class="environment-text-jlp">定型化</div>
                                                            <div class="environment-img-jlp">
                                                                <?php if(get_field('office_dynamic') >=  1 && get_field('office_dynamic') <= 5 ) { ?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('office_dynamic')?>.png"
                                                                    alt="">
                                                                <?php } else {?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt="">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="environment-text-jlp">変化</div>
                                                        </div>
                                                    </div>
                                                    <div class="environment-box-jlp">
                                                        <div class="environment-box-left-jlp">残業の<br>特性</div>
                                                        <div class="environment-box-right-jlp">
                                                            <div class="environment-text-jlp">多い</div>
                                                            <div class="environment-img-jlp">
                                                                <?php if(get_field('other_work') >=  1 && get_field('other_work') <= 5 ) { ?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('other_work')?>.png"
                                                                    alt="">
                                                                <?php } else {?>
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                    alt="">
                                                                <?php } ?>
                                                            </div>
                                                            <div class="environment-text-jlp">少ない</div>
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
                                                    <?php the_field('office_members') ?>
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
                                            <a href="<?php echo get_site_url('') ?>/job_entry?id=<?php the_ID() ?>" class="common-btn-hp">応募する</a>
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
        <div class="company-block-hp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company-block-in-hp">
                        <div class="company-middle-hp">
                            <div class="company-middle-in-hp">
                                <div class="company-img-hp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" />
                                </div>
                                <div class="company-info-hp">
                                    昼ナビは、キャバクラ・クラブ・ボーイ・黒服などのナイトワークの方々が昼職に転職に転職したいと考えた時に感じる「履歴書の書き方が分からない」・「自分にあった仕事が分からない」・「昼職の実情が分からない」といったお悩みをアドバイザーが一人ひとりに真剣に向き合い、お話しした上で全て解消し、希望や適正に応じたお仕事をご紹介します。
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <?php
        endwhile;
        // print_r(get_post_meta(71));
        // echo "<br>";
        // echo get_post_meta(71, 'company_name', true);
        ?>

    </section>
    <!-- CONTAIN_END -->
</main>
<?php get_footer();
?>