<?php /* Template Name: Information_details */?>
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
                                            <li class="breadcrumb-item"><a href="<?php echo get_site_url()?>/informations">コラム</a></li>
                                            <li class="breadcrumb-item active">ここにコラムタイトルが入ります</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>
                                            <div class="inner-title-tag-indp">働き方</div>ここにコラムタイトルが入ります
                                        </h2>
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
                <?php
                            $args = array('p' => $_GET['id'], 'post_type' => 'column');
                            $the_query = new WP_Query($args);
        
                            if ($the_query->have_posts()) {
                                 $the_query->the_post();?>
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
                                                    <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="about-img-right-ip">
                                                    <h2>Column</h2>
                                                    <p>
                                                        <?php the_field('abstraction') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip"></div>
                                    </div>
                                    <div class="adviser-details-in-ap interview-details-in-indp">
                                        <?php the_field('content') ?>
                                        <?php } ?>
                                        <div class="adviser-details-btn-ap">
                                            <a href="#" class="common-btn-hp">この会社の求人情報を見る</a>
                                        </div>
                                    </div>
                                    <div class="adviser-details-in-ap latest-interview-idp">
                                        <div class="information-title-idnp">
                                            <h2>関連記事</h2>
                                            <p>働き方にまつわるコラム、語学やExcel・PowerPointの使い方ガイドなど、キャリアやライフスタイルに役立つ情報をお届けします。</p>
                                        </div>
                                        <div class="interview-middle-inp pt-0">
                                            <?php
                                            $args = array('post_type' => 'interview', 'posts_per_page' => 3);
                                            $the_query = new WP_Query($args);
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
                                                            <div class="pickup-tag-hp">働き方</div>
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
                                        <div class="more-inertview-idp"><a href="<?php echo get_site_url() ?>/interview_list">もっとみる＞</a></div>
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
                                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" />
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