<?php /* Template Name: Informations */?>
<?php
get_header('no_transparent');
?>
<main id="primary" class="site-main">
    <!-- CONTAIN_START -->
    <section id="contain">
        <?php get_sidebar('rightbar') ?>

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
                                            <li class="breadcrumb-item active">コラム</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>コラム</h2>
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
                                    <div class="about-box-ip about-box-align-inp">
                                        <div class="about-box-border-top-ip"></div>
                                        <div class="about-box-middle-ip">
                                            <div class="about-box-middle-top-ip">
                                                <div class="about-img-ip">
                                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/interview_details_img.png"
                                                        alt="">
                                                </div>
                                                <div class="about-img-right-ip">
                                                    <h2>Column</h2>
                                                    <p>
                                                        キャリアやライフスタイルに役立つ情報をお届けします。毎日のお仕事がより充実するためのスキルアップ情報や、「働く」に関するさまざまな情報、生活を豊かにするためのライフハック情報、著名人によるインタビューなど、あなたらしく働くためのヒントがいっぱいです。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>
                                    <?php 
                                    $args = array('post_type' => 'column', 'posts_per_page' => 1);
                                    $qry = array();
                                    $qry['relation'] = 'AND';
                                    if(isset($_GET['branch'])) {
                                        $qry[] = array(
                                            'key'	 	=> 'branch',
                                            'value'	  	=> $_GET['branch'],
                                            'compare' 	=> 'LIKE',
                                        );
                                        $args['meta_query'] = $qry;
                                    }
                                    $the_query = new WP_Query($args);
                                    ?>
                                    <?php if ($the_query->have_posts()): ?>
                                    <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                    <div class="pickup-box-inp">
                                        <div class="pickup-title-inp">ピックアップ情報</div>
                                        <div class="pickup-details-inp">
                                            <div class="pickup-details-left-inp">
                                                <div class="pickup-list-inp">
                                                    <a href="<?php echo get_site_url() ?>/information_details?id=<?php the_ID() ?>"
                                                        class="active">
                                                        <?php the_title() ?>
                                                        紹介
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pickup-details-right-inp">
                                                <div class="pickup-img-inp">
                                                    <?php 
                                                        $logo = get_field('main_image'); 
                                                        if( !empty( $logo ) ): ?>
                                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="pickup-info-inp">
                                                    <div class="pickup-info-tag-inp">働き方</div>
                                                    <p>
                                                        <a href="<?php echo get_site_url() ?>/information_details?id=<?php the_ID() ?>">
                                                        <?php echo the_field('abstraction') ?>
                                                    </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                                wp_reset_postdata();?>
                                    <?php else: ?>
                                    <?php endif;?>
                                    <div class="pickup-menu-inp">
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?"
                                                class="<?php echo (isset($_GET['branch']) ? '' : 'active' ) ?>">すべて</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=働き方"
                                                class="<?php echo ($_GET['branch'] == '働き方' ? 'active' : '' ) ?>">働き方</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=仕事術"
                                                class="<?php echo ($_GET['branch'] == '仕事術' ? 'active' : '' ) ?>">仕事術</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=語学"
                                                class="<?php echo ($_GET['branch'] == '語学' ? 'active' : '' ) ?>">語学</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=経理"
                                                class="<?php echo ($_GET['branch'] == '経理' ? 'active' : '' ) ?>">経理</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=人事（労務）"
                                                class="<?php echo ($_GET['branch'] == '人事（労務）' ? 'active' : '' ) ?>">人事（労務）</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=未経験IT"
                                                class="<?php echo ($_GET['branch'] == '未経験IT' ? 'active' : '' ) ?>">未経験IT</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=Excel"
                                                class="<?php echo ($_GET['branch'] == 'Excel' ? 'active' : '' ) ?>">Excel</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=Power point"
                                                class="<?php echo ($_GET['branch'] == 'Power point' ? 'active' : '' ) ?>">Power
                                                point</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=ライフハック"
                                                class="<?php echo ($_GET['branch'] == 'ライフハック' ? 'active' : '' ) ?>">ライフハック</a>
                                        </div>
                                    </div>
                                    <div class="pickup-product-inp">
                                        <div class="interview-middle-inp pt-0">
                                            <?php

                                        $args = array('post_type' => 'column', 'posts_per_page' => 3);
                                        $qry = array();
                                        $qry['relation'] = 'AND';
                                        if(isset($_GET['branch'])) {
                                            $qry[] = array(
                                                'key'	 	=> 'branch',
                                                'value'	  	=> $_GET['branch'],
                                                'compare' 	=> 'LIKE',
                                            );
                                            $args['meta_query'] = $qry;
                                        }
                                        $the_query = new WP_Query($args);
                                        
                                        ?>
                                            <?php if ($the_query->have_posts()): ?>
                                            <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                            <div class="pickup-box-hp">
                                                <a
                                                    href="<?php echo get_site_url() ?>/information_details?id=<?php the_ID() ?>">
                                                    <div class="pickup-box-img-hp">
                                                        <?php 
                                                        $logo = get_field('main_image'); 
                                                        if( !empty( $logo ) ): ?>
                                                        <img src="<?php echo esc_url($logo['url']); ?>"
                                                            alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="pickup-box-details-hp">
                                                        <div class="pickup-tag-main-hp">
                                                            <div class="pickup-tag-hp">働き方</div>
                                                        </div>
                                                        <div class="pickup-box-name-hp">
                                                            <?php the_title() ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php endwhile;
                                                wp_reset_postdata();?>
                                            <?php else: ?>
                                            <?php endif;?>
                                        </div>
                                        <div class="more-inertview-idp"><a href="<?php echo get_site_url()?>/interview_list">もっとみる＞</a></div>
                                    </div>
                                    <div class="pickup-menu-inp">
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?"
                                                class="<?php echo (isset($_GET['branch']) ? '' : 'active' ) ?>">すべて</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=働き方"
                                                class="<?php echo ($_GET['branch'] == '働き方' ? 'active' : '' ) ?>">働き方</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=仕事術"
                                                class="<?php echo ($_GET['branch'] == '仕事術' ? 'active' : '' ) ?>">仕事術</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=語学"
                                                class="<?php echo ($_GET['branch'] == '語学' ? 'active' : '' ) ?>">語学</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=経理"
                                                class="<?php echo ($_GET['branch'] == '経理' ? 'active' : '' ) ?>">経理</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=人事（労務）"
                                                class="<?php echo ($_GET['branch'] == '人事（労務）' ? 'active' : '' ) ?>">人事（労務）</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=未経験IT"
                                                class="<?php echo ($_GET['branch'] == '未経験IT' ? 'active' : '' ) ?>">未経験IT</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=Excel"
                                                class="<?php echo ($_GET['branch'] == 'Excel' ? 'active' : '' ) ?>">Excel</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=Power point"
                                                class="<?php echo ($_GET['branch'] == 'Power point' ? 'active' : '' ) ?>">Power
                                                point</a>
                                        </div>
                                        <div class="pickup-menu-item-inp">
                                            <a href="<?php echo get_site_url() ?>/informations?branch=ライフハック"
                                                class="<?php echo ($_GET['branch'] == 'ライフハック' ? 'active' : '' ) ?>">ライフハック</a>
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


        <?php get_footer('search'); ?>
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
    </section>
    <!-- CONTAIN_END -->
</main>
<?php get_footer();
?>