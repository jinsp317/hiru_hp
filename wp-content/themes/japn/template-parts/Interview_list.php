<?php /* Template Name: Interview_list */?>
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
                                            <li class="breadcrumb-item"><a
                                                    href="<?php echo get_site_url() ?>">昼ナビTOP</a></li>
                                            <li class="breadcrumb-item active">転職者インタビュー</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>転職者インタビュー</h2>
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
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/interview_img1.png"
                                                        alt="">
                                                </div>
                                                <div class="about-img-right-ip">
                                                    <h2>Interview</h2>
                                                    <p>
                                                        昼ナビで転職し活躍している方に、<br>
                                                        お仕事や職場の雰囲気などをうかがいました。
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>

                                    <div class="interview-middle-inp">
                                        <?php

                                        $args = array('post_type' => 'interview', 
                                        'meta_query' => array(
                                            array('key' => 'interview_kind', 
                                            'value' => 'オンライン', 
                                            'compare' => '=')
                                        ), 'posts_per_page' => 10);
                                        $the_query = new WP_Query($args);
                                        $total_count = $the_query->found_posts;  
                                        $total_page = ceil($total_count / 3 );
                                        ?>
                                        <?php if ($the_query->have_posts()): ?>
                                        <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                        <div class="pickup-box-hp">
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
                                    <div class="pagination-bp pagination-inp">
                                        <ul class="pagination justify-content-center">
                                            <?php $page = get_query_var('paged') ? absint(get_query_var('paged')) : 1; ?>
                                            <?php if($page > 1) { ?>
                                            <li class="page-item page-prev-item">
                                                <a class="page-link" href="<?php echo get_pagenum_link($page - 1) ?>">
                                                    <i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <?php } ?>

                                            <?php for($i = 1 ; $i <= $total_page ; $i ++) { ?>

                                            <li class="page-item">
                                                <a class="page-link <?php echo ($i == $page ? 'active' : '') ;?>"
                                                    href="<?php echo get_pagenum_link($i) ?>"><?php echo $i; ?></a>
                                            </li>
                                            <?php } ?>
                                            <?php if($page < $total_page) { ?>
                                            <li class="page-item page-next-item"><a class="page-link"
                                                    href="<?php echo get_pagenum_link($page + 1) ?>"><i
                                                        class="fas fa-chevron-right"></i></a></li>
                                            <?php } ?>
                                            <?php ?>
                                        </ul>
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