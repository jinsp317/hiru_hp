<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Japn
 */

?>
<div class="about-right-ip">
    <div class="wishes-ip">
        <div class="about-box-border-top-ip"></div>
        <div class="wishes-middle-ip">
            <div class="wishes-title-ip">
                <h3>あなたの経験や希望に合った<br>お仕事情報をご紹介します</h3>
            </div>
            <div class="wishes-btn-ip">
                <a href="<?php echo get_site_url()?>/consultation_form" class="common-btn-hp gradiant_1">相談する</a>
            </div>
            <div class="wishes-btn-ip">
                <a href="<?php echo get_site_url() ?>/registration_form" class="common-btn-hp gradiant_2">登録する</a>
            </div>
        </div>
        <div class="about-box-border-bottom-ip"></div>
    </div>
    <div class="search-box-ip"
        style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/search_back.png) no-repeat center right; background-size:cover;">
        <a href="<?php echo get_site_url() ?>/job_list">
            <div class="search-box-border-top-ip"></div>
            <div class="search-box-middle-ip">
                <div class="search-box-title-ip"><span>S</span>earch</div>
                <div class="search-box-info-ip">お仕事情報</div>
            </div>
            <div class="search-box-border-top-ip"></div>
        </a>
    </div>
    <div class="search-box-ip"
        style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/search_back_2.png) no-repeat center right; background-size:cover;">
        <a href="<?php echo get_site_url() ?>/about">
            <div class="search-box-border-top-ip"></div>
            <div class="search-box-middle-ip">
                <div class="search-box-title-ip"><span>Hiru</span> Navi</div>
                <div class="search-box-info-ip">昼ナビとは</div>
            </div>
            <div class="search-box-border-top-ip"></div>
        </a>
    </div>
</div>