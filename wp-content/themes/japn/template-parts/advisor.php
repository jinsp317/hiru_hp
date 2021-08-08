<?php /* Template Name: Advisor */?>

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
                                            <li class="breadcrumb-item"><a href="<?php echo get_site_url() ?>/about">昼ナビとは</a></li>
                                            <li class="breadcrumb-item active">アドバイザー紹介</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>アドバイザー紹介</h2>
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
                                    <div class="adviser-box-op">
                                        <div class="about-box-border-top-ip"></div>
                                        <div class="interview-box-middle-op">
                                            <div class="interview-title-op">
                                                <div class="interview-title-left-op">アドバイザーコメント</div>
                                                <div class="interview-title-right-op">Advisor Comment</div>
                                            </div>
                                            <div class="interview-info-op">
                                                <p>ここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>

                                    <div class="adviser-info-ap">
                                        <div class="common-title-hp common-title-2-hp">
                                            <h2><span>A</span>dvisor</h2>
                                            <p>アドバイザー</p>
                                        </div>
                                        <?php

                                        $args = array('post_type' => 'advisors', 'posts_per_page' => 10);
                                        $the_query = new WP_Query($args);
                                        $total_count = $the_query->found_posts;  
                                        // $total_page = ceil($total_count / 3 );
                                        ?>
                                        <div class="adviser-boxes-ap">
                                            <?php if ($the_query->have_posts()): ?>
                                            <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                            <div class="adviser-box-ap">
                                                <a href="<?php echo get_site_url() ?>/advisor">
                                                    <div class="adviser-box-img-ap">
                                                        <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                                        <img src="<?php echo esc_url($logo['url']); ?>"
                                                            alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <h3><?php the_Title() ?></h3>
                                                    <p><?php the_field('abstract') ?></p>
                                                </a>
                                            </div>
                                            <?php endwhile;
                                        wp_reset_postdata();?>
                                            <?php else: ?>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="adviser-details-ap">
                                        <div class="about-box-ip">
                                            <div class="about-box-border-top-ip"></div>
                                            <div class="about-box-middle-ip">
                                                <div class="about-box-middle-top-ip">
                                                    <div class="about-img-ip">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adviser_img4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="about-img-right-ip">
                                                        <h2>Advisor</h2>
                                                        <div class="adviser-about-title-ap">アドバイザーお名前テキスト</div>
                                                        <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="about-box-border-bottom-ip"></div>
                                        </div>
                                        <div class="adviser-details-in-ap">
                                            <h2>ここにアドバイザーコメントタイトルが入ります</h2>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-btn-ap">
                                                <a href="<?php echo get_site_url() ?>/consultation_form" class="common-btn-hp">アドバイザーに相談する</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="adviser-details-ap">
                                        <div class="about-box-ip">
                                            <div class="about-box-border-top-ip"></div>
                                            <div class="about-box-middle-ip">
                                                <div class="about-box-middle-top-ip">
                                                    <div class="about-img-ip">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/adviser_img5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="about-img-right-ip">
                                                        <h2>Advisor</h2>
                                                        <div class="adviser-about-title-ap">アドバイザーお名前テキスト</div>
                                                        <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="about-box-border-bottom-ip"></div>
                                        </div>
                                        <div class="adviser-details-in-ap">
                                            <h2>ここにアドバイザーコメントタイトルが入ります</h2>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-info-ap">
                                                <h3>ここに小見出しが入ります</h3>
                                                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテ
                                                </p>
                                            </div>
                                            <div class="adviser-details-btn-ap">
                                                <a href="<?php echo get_site_url(); ?>/consultation_form" class="common-btn-hp">アドバイザーに相談する</a>
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