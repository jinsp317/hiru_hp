<?php /* Template Name: Interview_details */?>
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
                                            <li class="breadcrumb-item"><a href="<?php echo get_site_url() ?>/interview_list">転職者インタビュー</a></li>
                                            <li class="breadcrumb-item active"><?php the_field('title') ?></li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>転職者インタビュー：XXXX株式会社でのお仕事</h2>
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
                            <?php
                            $args = array('p' => $_GET['id'], 'post_type' => 'interview');
                            $the_query = new WP_Query($args);
        
                            if ($the_query->have_posts()) {
                                 $the_query->the_post();?>
                            <div class="about-middle-ip">
                                <div class="about-left-ip">
                                    <div class="about-box-ip interview-box-idp">
                                        <div class="about-box-border-top-ip"></div>
                                        <div class="about-box-middle-ip">
                                            <div class="about-box-middle-top-ip">
                                                <div class="about-img-ip">
                                                    <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="about-img-right-ip">
                                                    <h2>Profile</h2>
                                                    <div class="adviser-about-title-ap">
                                                        <?php the_field('interview_hoster') ?>
                                                    </div>
                                                    <p>
                                                        <?php the_field('abstraction') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>
                                    <div class="adviser-details-in-ap interview-details-in-idp">
                                        <h2>コールセンターやサポートセンターでのオペレーターを経験し、<br>現在はリーダーに！</h2>
                                        <?php the_field('content') ?>
                                    </div>
                                    <?php }
                                    $args = array(
                                     'post_status' => 'publish',
                                     'orderby' => 'publish_date',
                                     'post_type' => 'interview' , 
                                     'posts_per_page' => 3
                                    );
                                    $the_query = new WP_Query($args); ?>
                                    <div class="adviser-details-in-ap latest-interview-idp">
                                        <h2>最新インタビュー</h2>

                                        <div class="interview-middle-inp pt-0">
                                            <?php if ($the_query->have_posts()): ?>
                                            <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                            <div class="pickup-box-hp">
                                                <a
                                                    href="<?php echo get_site_url() ?>/interview_detail?id=<?php the_ID() ?>">
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
                                                            <div class="pickup-tag-hp">未経験</div>
                                                            <div class="pickup-tag-hp">外資系</div>
                                                        </div>
                                                        <div class="pickup-box-name-hp">
                                                            <?php the_field('abstraction') ?>
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