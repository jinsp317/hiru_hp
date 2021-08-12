<?php /* Template Name: On_off_line */?>
<?php
get_header('no_transparent'); ?>
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
                                            <li class="breadcrumb-item"><a href="#">昼ナビTOP</a></li>
                                            <li class="breadcrumb-item"><a href="#">昼ナビとは</a></li>
                                            <li class="breadcrumb-item active">面談について</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>面談について</h2>
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
                                    <div class="interview-box-op">
                                        <div class="about-box-border-top-ip"></div>
                                        <div class="interview-box-middle-op">
                                            <div class="interview-title-op">
                                                <div class="interview-title-left-op">選べるオフライン・オンライン面談</div>
                                                <div class="interview-title-right-op">Follow-up Service</div>
                                            </div>
                                            <div class="interview-info-op">
                                                <p>ここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここに説明テキストが入りますここ
                                                </p>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>
                                    <div class="interview-list-main-op">
                                        <h3>オフライン面談の場合</h3>
                                        <?php
                                         $args = array('post_type' => 'interview', 
                                         'meta_query' => array(
                                             array('key' => 'interview_kind', 
                                             'value' => 'オフライン', 
                                             'compare' => '=')
                                         ), 'posts_per_page' => 10);
                                         $the_query = new WP_Query($args);
                                         
                                          ?>
                                        <div class="interview-list-in-op">
                                            <?php if ($the_query->have_posts()): ?>
                                            <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                            <div class="interview-list-op">
                                            <a
                                                href="<?php echo get_site_url() ?>/interview_details?id=<?php the_ID() ?>">
                                                <div class="pickup-box-img-hp">
                                                    <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                    <?php endif; ?>
                                                    </div>
                                                    <div class="interview-list-right-op">
                                                        <h4><?php the_title() ?></h4>
                                                        <p><?php the_field('abstraction')?>
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php endwhile;
                                        wp_reset_postdata();?>
                                            <?php else: ?>
                                            <?php endif;?>
                                        </div>
                                    </div>

                                    <div class="interview-btn-op">
                                        <a href="<?php echo get_site_url() ?>/registration_form"
                                            class="common-btn-hp">登録する</a>
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