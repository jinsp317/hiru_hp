<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Japn
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- CONTAIN_START -->
	<section id="contain">
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
    	<div class="banner-block-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png) no-repeat top center; background-size:cover;">
            <div class="banner-overlay-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-block-in-hp">
                            <div class="banner-middle-hp">
                                <div class="banner-left-hp">
                                	<div class="banner-title-hp">
                                    	<div class="banner-title-left-hp">公開中のお仕事</div>
                                    	<div class="banner-title-right-hp">XXX<span>件</span></div>
                                    </div>
                                    <div class="banner-select-hp">
                                    	<select class="custom-select">
                                        	<option>東京都</option>
                                            <option>東京都</option>
                                            <option>東京都</option>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp">
                                    	<select class="custom-select">
                                        	<option>職種</option>
                                            <option>職種</option>
                                            <option>職種</option>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp">
                                    	<select class="custom-select">
                                        	<option>特長コードから探す</option>
                                            <option>特長コードから探す</option>
                                            <option>特長コードから探す</option>
                                        </select>
                                    </div>
                                    <div class="banner-input-hp">
                                    	<input type="text" placeholder="フリーワード" />
                                    </div>
                                    <div class="banner-btn-hp">
                                    	<a href="#" class="common-btn-hp">検索</a>
                                    </div>
                                </div>
                                <div class="banner-right-hp">
                                	<div class="banner-right-in-hp">
                                    	<div class="banner-right-details-hp">
                                            <h1><span>Hiru</span> Navi</h1>
                                            <p>〜最短<span>2週間</span>で昼職へ〜</p>
                                            <div class="banner-info-hp">
                                                <p>
                                                    夜職→昼職への転職専門サービス！<br>
                                                    夜職卒業を<span>完全無料</span>でサポートします！
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="daytime-block-hp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 daytime-block-in-hp">
                    	<div class="daytime-middle-hp">
                            <div class="daytime-top-hp">
                            	<div class="daytime-top-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_banner.png) no-repeat center center; background-size:cover;">
                                	<div class="daytime-left-hp">
                                    	<span>
                                        	昼ナビとは<br>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg" alt="" />
                                        </span>
                                    </div>
                                    <div class="daytime-right-hp">
                                    	<h2>Hiru Navi</h2>
                                        <p>キャバクラ・クラブ・ボーイ・黒服など夜職から昼職へ転職をお考えの方を対象に、無料で転職相談や企業紹介はもちろん、履歴書の書き方の指南・面接対策・入社後のフォローまで行なう夜職の方専門の転職支援サービスです。</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="daytime-bottom-hp">
                            	<div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img1.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    人気職種<br>
                                                    ランキング
                                                </h2>
                                                <h3>Job Ranking</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                        <div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img2.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    お仕事の種類
                                                </h2>
                                                <h3>Type of work</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                        <div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img3.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    適職診断
                                                </h2>
                                                <h3>job diagnosis</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        	<div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="search-block-hp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-block-in-hp">
                        <div class="common-title-hp">
                            <h2>Search</h2>
                            <p>お仕事検索</p>
                        </div>
                        <div class="search-middle-hp">
                        	<div class="search-part-hp">
                            	<h3>特長から探す</h3>
                                <div class="search-details-hp">	
                                	<div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon1.png" alt="" /></div>
                                            <div class="search-box-name-hp">駅チカ</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon2.png" alt="" /></div>
                                            <div class="search-box-name-hp">朝ゆっくり出社</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon3.png" alt="" /></div>
                                            <div class="search-box-name-hp">服装自由</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon4.png" alt="" /></div>
                                            <div class="search-box-name-hp">ネイルOK</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon5.png" alt="" /></div>
                                            <div class="search-box-name-hp">テレワーク可</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon6.png" alt="" /></div>
                                            <div class="search-box-name-hp">残業ほぼなし</div>
                                        </a>
                                    </div>
                                    
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon7.png" alt="" /></div>
                                            <div class="search-box-name-hp">学歴不問</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon8.png" alt="" /></div>
                                            <div class="search-box-name-hp">未経験歓迎</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon9.png" alt="" /></div>
                                            <div class="search-box-name-hp">土日祝休み</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon10.png" alt="" /></div>
                                            <div class="search-box-name-hp">平均年齢20代</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon11.png" alt="" /></div>
                                            <div class="search-box-name-hp">産休育休制度あり</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                    	<a href="#">
                                        	<div class="search-box-img-hp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon12.png" alt="" /></div>
                                            <div class="search-box-name-hp">社会保険完備</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-part-hp">
                            	<h3>勤務地からお仕事検索</h3>
                                <div class="location-details-hp">
                                	<div class="location-left-hp">
                                    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png" alt="" />
                                    </div>
                                    <div class="location-right-hp">
                                    	<div class="location-right-title-hp">地方選択</div>
                                        <div class="location-info-hp">
                                        	<div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>北海道地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>中部地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>関東地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>九州地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>関西地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                            	<a href="#">
                                                	<span>沖縄地方から探す</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="pickup-back-hp">
            <div class="pickup-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pickup-block-in-hp">
                            <div class="common-title-hp">
                                <h2>Pickup</h2>
                                <p>ピックアップ求人</p>
                            </div>
                            <div class="pickup-middle-hp">
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img1.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img2.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img3.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img4.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img1.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img2.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img3.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="pickup-box-hp">
                                	<a href="#">
                                        <div class="pickup-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pickup_img4.png" alt="" />
                                        </div>
                                        <div class="pickup-box-details-hp">
                                        	<div class="pickup-tag-main-hp">
	                                            <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp">職種名職種名職種名職種名職種職種名職種職職種名</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pickup-btn-hp">
                            	<a href="#" class="common-btn-hp more-btn-hp">More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="career-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 career-block-in-hp">
                            <div class="common-title-hp">
                                <h2>Search</h2>
                                <p>転職者インタビュー</p>
                            </div>
                            <div class="career-desc-hp">働き方にまつわるコラム、語学やExcel・PowerPointの使い方ガイドなど、キャリアやライフスタイルに役立つ情報をお届けします。</div>
                            <div class="career-middle-hp">
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img1.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img2.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img3.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pickup-btn-hp">
                            	<a href="#" class="common-btn-hp more-btn-hp">More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="career-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 career-block-in-hp">
                            <div class="common-title-hp">
                                <h2>Column</h2>
                                <p>コラム</p>
                            </div>
                            <div class="career-desc-hp">転職をお考えの方にとって有益なノウハウやポイントを記事コンテンツ形式でご紹介</div>
                            <div class="career-middle-hp">
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img1.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img2.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="career-box-hp">
                                	<a href="#">
                                        <div class="career-box-img-hp">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career_img3.png" alt="" />
                                        </div>
                                        <div class="career-box-details-hp">
                                        	<div class="career-box-name-hp">キャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチキャッチ</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pickup-btn-hp">
                            	<a href="#" class="common-btn-hp more-btn-hp">More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg" alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="search-area-block-hp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-area-block-in-hp">
                        <div class="search-area-middle-hp">
                        	<div class="search-area-top-hp">
                            	<div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img1.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    人気職種<br>
                                                    ランキング
                                                </h2>
                                                <h3>Job Ranking</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                        <div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img2.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    お仕事の種類
                                                </h2>
                                                <h3>Type of work</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                        <div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img3.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    適職診断
                                                </h2>
                                                <h3>job diagnosis</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="search-area-bottom-hp">
                            	<div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    昼ナビ利用の<br>3つのメリット
                                                </h2>
                                                <h3>Benefits.</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp white-border-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    選べる面談方法
                                                </h2>
                                                <h3>Interview</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    アドバイザー紹介
                                                </h2>
                                                <h3>Adviser</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                
                                <div class="daytime-bottom-parts-hp white-border-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                	入社までの流れ
                                                </h2>
                                                <h3 class="font180">Flow</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    アフターフォロー
                                                </h2>
                                                <h3 class="font78">Follow-up Service</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp white-border-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    よくあるご質問
                                                </h2>
                                                <h3 class="font180">Faq</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                	面接対策
                                                </h2>
                                                <h3>Counterplan</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp white-border-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    服装・オフィスカジュアル
                                                </h2>
                                                <h3>Fashion</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>
                                                    メイク・ヘアスタイル
                                                </h2>
                                                <h3>Beauty</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                            </div>
                            <div class="search-area-last-hp">
                            	<div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                		<div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/free_img1.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>無料相談</h2>
                                                <h3>free consultation</h3>
                                            </div>
                                    	</div>
                                    </a>
                                </div>
                                <div class="daytime-bottom-parts-hp">
                                	<a href="#">
                                        <div class="daytime-bottom-parts-in-hp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/free_img2.png) no-repeat center center; background-size:cover;">
                                            <div class="daytime-bottom-parts-in-details-hp">
                                                <h2>無料登録</h2>
                                                <h3>Register for free</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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
    </section>
<!-- CONTAIN_END -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
