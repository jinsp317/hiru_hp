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
<script type="text/javascript">
function job_search() {
    var base_url = "<?php echo get_site_url() ?>/job_list";
    base_url += '?district_val=' + $('#district_val').val() + '&job_type=' + $('#job_type').val() + '&job_spec=' +
        $('#job_spec').val() + '&job_keyword=' + $('#job_keyword').val();
    self.location = base_url;
    // console.log($('#job_spec').val());
    // $('#job_spec').val();
    // console.log(base_url);
}

function search_dist(kind) {
    var base_url = "<?php echo get_site_url() ?>/job_list";

    self.location = base_url;
}

function select_special(val) {
    var base_url = "<?php echo get_site_url() ?>/job_list";
    base_url += '?&job_spec=' + val;
    self.location = base_url;
}

$(document).ready(function() {
    $('img[usemap]').mapster({
        fillColor: '7B6A5F',
        stroke: true,
        strokeColor: '7B6A5F',
        clickNavigate: true,
        singleSelect: true
    });
    $("#job_spec").chosen({
        allow_single_deselect : true 
    });
});
</script>
<style>
    .active-result, .search-choice span {
        font-size:18px !important;
    }
    .chosen-choices {
        padding: .375rem 1.75rem .375rem .75rem !important;
        font-size:18px !important;
    }
    .search-choice{
        padding-top:5px !important;
        padding-bottom:5px !important;
    }
</style>
<?php
global $wpdb;
 ?>
<main id="primary" class="site-main">
    <!-- CONTAIN_START -->
    <section id="contain">
        <?php get_sidebar('rightbar') ?>
        <div class="banner-block-hp"
            style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png) no-repeat top center; background-size:cover;">
            <div class="banner-overlay-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-block-in-hp">
                            <div class="banner-middle-hp">
                                <div class="banner-left-hp">
                                    <div class="banner-title-hp">
                                        <div class="banner-title-left-hp">公開中のお仕事</div>
                                        <!-- <div class="banner-title-right-hp">XXX<span>件</span></div> -->
                                    </div>
                                    <div class="banner-select-hp">
                                        <select class="custom-select" id="district_val">
                                            <option value="">都道府県</option>
                                            <option value="東京都">東京都</option>
                                            <option value="北海道">北海道</option>
                                            <option value="青森県">青森県</option>
                                            <option value="岩手県">岩手県</option>
                                            <option value="岩手県">宮城県</option>
                                            <option value="秋田県">秋田県</option>
                                            <option value="山形県">山形県</option>
                                            <option value="福島県">福島県</option>
                                            <option value="茨城県">茨城県</option>
                                            <option value="栃木県">栃木県</option>
                                            <option value="群馬県">群馬県</option>
                                            <option value="埼玉県">埼玉県</option>
                                            <option value="千葉県">千葉県</option>
                                            <option value="神奈川県">神奈川県</option>
                                            <option value="新潟県">新潟県</option>
                                            <option value="富山県">富山県</option>
                                            <option value="石川県">石川県</option>
                                            <option value="福井県">福井県</option>
                                            <option value="山梨県">山梨県</option>
                                            <option value="長野県">長野県</option>
                                            <option value="岐阜県">岐阜県</option>
                                            <option value="愛知県">愛知県</option>
                                            <option value="三重県">三重県</option>
                                            <option value="滋賀県">滋賀県</option>
                                            <option value="京都府">京都府</option>
                                            <option value="大阪府">大阪府</option>
                                            <option value="兵庫県">兵庫県</option>
                                            <option value="奈良県">奈良県</option>
                                            <option value="和歌山県">和歌山県</option>
                                            <option value="鳥取県">鳥取県</option>
                                            <option value="島根県">島根県</option>
                                            <option value="岡山県">岡山県</option>
                                            <option value="広島県">広島県</option>
                                            <option value="山口県">山口県</option>
                                            <option value="徳島県">徳島県</option>
                                            <option value="香川県">香川県</option>
                                            <option value="愛媛県">愛媛県</option>
                                            <option value="高知県">高知県</option>
                                            <option value="福岡県">福岡県</option>
                                            <option value="佐賀県">佐賀県</option>
                                            <option value="長崎県">長崎県</option>
                                            <option value="熊本県">熊本県</option>
                                            <option value="大分県">大分県</option>
                                            <option value="宮崎県">宮崎県</option>
                                            <option value="鹿児島県">鹿児島県</option>
                                            <option value="沖縄県">沖縄県</option>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp">
                                        <select class="custom-select" id="job_type">
                                            <option value="">職種</option>
                                            <?php foreach ($job_list as $key => $job_types) { ?>
                                            <optgroup label="<?php echo $key ?>">
                                                <?php foreach ($job_types as $job) {?>
                                                <option value="<?php echo $job ?>"><?php echo $job ?></option>
                                                <?php }?>
                                            </optgroup>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp">
                                        <select class="custom-select" data-placeholder="特長コードから探す" id="job_spec" size="1" multiple>
                                            <option value="">特長コードから探す</option>
                                            <option value="駅チカ">駅チカ</option>
                                            <option value="朝ゆっくり出社">朝ゆっくり出社</option>
                                            <option value="服装自由">服装自由</option>
                                            <option value="ネイルOK">ネイルOK</option>
                                            <option value="テレワーク可">テレワーク可</option>
                                            <option value="残業ほぼなし">残業ほぼなし</option>
                                            <option value="学歴不問">学歴不問</option>
                                            <option value="未経験歓迎">未経験歓迎</option>
                                            <option value="土日祝休み">土日祝休み</option>
                                            <option value="平均年齢20代">平均年齢20代</option>
                                            <option value="産休育休制度あり">産休育休制度あり</option>
                                            <option value="社会保険完備">社会保険完備</option>
                                        </select>
                                    </div>
                                    <div class="banner-input-hp">
                                        <input type="text" placeholder="フリーワード" id="job_keyword" />
                                    </div>
                                    <div class="banner-btn-hp">
                                        <a href="javascript:job_search();" class="common-btn-hp">検索</a>
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
                                <div class="daytime-top-in-hp"
                                    style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_banner.png) no-repeat center center; background-size:cover;">
                                    <a href="<?php echo get_site_url() ?>/about">
                                        <div class="daytime-left-hp">
                                            <span>
                                                昼ナビとは<br>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg"
                                                    alt="" />
                                            </span>
                                        </div>
                                    </a>

                                    <div class="daytime-right-hp">
                                        <h2>Hiru Navi</h2>
                                        <p>キャバクラ・クラブ・ボーイ・黒服など夜職から昼職へ転職をお考えの方を対象に、無料で転職相談や企業紹介はもちろん、履歴書の書き方の指南・面接対策・入社後のフォローまで行なう夜職の方専門の転職支援サービスです。
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="daytime-bottom-hp">
                                <div class="daytime-bottom-parts-hp">
                                    <a href="<?php echo get_site_url() ?>/job_ranking">
                                        <div class="daytime-bottom-parts-in-hp"
                                            style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img1.png) no-repeat center center; background-size:cover;">
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
                                    <a href="<?php echo get_site_url() ?>/work">
                                        <div class="daytime-bottom-parts-in-hp"
                                            style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img2.png) no-repeat center center; background-size:cover;">
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
                                    <a href="<?php echo get_site_url() ?>/job_diagnosis">
                                        <div class="daytime-bottom-parts-in-hp"
                                            style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/daytime_img3.png) no-repeat center center; background-size:cover;">
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
                                        <a href="javascript:select_special('駅チカ')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon1.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">駅チカ</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('朝ゆっくり出社')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon2.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">朝ゆっくり出社</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('服装自由')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon3.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">服装自由</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('ネイルOK')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon4.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">ネイルOK</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('テレワーク可')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon5.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">テレワーク可</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('残業ほぼなし')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon6.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">残業ほぼなし</div>
                                        </a>
                                    </div>

                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('学歴不問')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon7.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">学歴不問</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('未経験歓迎')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon8.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">未経験歓迎</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('土日祝休み')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon9.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">土日祝休み</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('平均年齢20代')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon10.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">平均年齢20代</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('産休育休制度あり')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon11.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">産休育休制度あり</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('社会保険完備')">
                                            <div class="search-box-img-hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon12.png"
                                                    alt="" />
                                            </div>
                                            <div class="search-box-name-hp">社会保険完備</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-part-hp">
                                <h3>勤務地からお仕事検索</h3>
                                <div class="location-details-hp">
                                    <div class="location-left-hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png"
                                            alt="" usemap="#image-map" />
                                        <map name="image-map">
                                            <area alt="北海道" title="北海道"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=北海道"
                                                coords="522,38,452,39,437,95,510,94,515,68" shape="poly">
                                            <area alt="青森県" title="青森県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=青森県"
                                                coords="436,109,429,124,486,124,492,109" shape="poly">
                                            <area alt="秋田県" title="秋田県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=秋田県"
                                                coords="429,127,425,141,453,142,456,127" shape="poly">
                                            <area alt="岩手県" title="岩手県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=岩手県"
                                                coords="458,126,456,142,481,142,485,126" shape="poly">
                                            <area alt="山形県" title="山形県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=山形県"
                                                coords="425,144,421,157,447,157,451,144" shape="poly">
                                            <area alt="宮城県" title="宮城県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=宮城県"
                                                coords="454,143,450,159,478,159,481,144" shape="poly">
                                            <area alt="石川県" title="石川県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=石川県"
                                                coords="363,150,356,177,377,177,385,150" shape="poly">
                                            <area alt="富山県" title="富山県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=富山県"
                                                coords="383,160,380,175,410,175,415,160" shape="poly">
                                            <area alt="福島県" title="福島県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=福島県"
                                                coords="450,160,446,176,473,176,478,161" shape="poly">
                                            <area alt="新潟県" title="新潟県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=新潟県"
                                                coords="416,160,412,176,444,176,448,161" shape="poly">
                                            <area alt="山口県" title="山口県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=山口県"
                                                coords="208,178,201,209,219,209,227,178" shape="poly">
                                            <area alt="島根県" title="島根県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=島根県"
                                                coords="230,178,226,194,252,194,257,178" shape="poly">
                                            <area alt="広島県" title="広島県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=広島県"
                                                coords="225,196,221,212,248,212,252,196" shape="poly">
                                            <area alt="鳥取県" title="鳥取県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=鳥取県"
                                                coords="259,177,254,193,282,193,286,178" shape="poly">
                                            <area alt="岡山県" title="岡山県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=岡山県"
                                                coords="254,196,251,211,278,212,282,196" shape="poly">
                                            <area alt="福井県" title="福井県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=福井県"
                                                coords="356,178,347,211,366,211,374,180" shape="poly">
                                            <area alt="岐阜県" title="岐阜県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=岐阜県"
                                                coords="376,177,367,210,387,209,393,179" shape="poly">
                                            <area alt="長野県" title="長野県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=長野県"
                                                coords="392,196,389,211,416,210,418,196" shape="poly">
                                            <area alt="群馬県" title="群馬県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=群馬県"
                                                coords="397,177,393,194,421,194,423,178" shape="poly">
                                            <area alt="栃木県" title="栃木県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=栃木県"
                                                coords="425,178,422,192,448,192,452,178" shape="poly">
                                            <area alt="茨城県" title="茨城県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=茨城県"
                                                coords="454,179,447,206,465,206,472,180" shape="poly">
                                            <area alt="埼玉県" title="埼玉県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=埼玉県"
                                                coords="420,196,418,209,444,209,445,196" shape="poly">
                                            <area alt="東京都" title="東京都"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=東京都"
                                                coords="397,212,388,244,406,245,414,214" shape="poly">
                                            <area alt="神奈川県" title="神奈川県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=神奈川県"
                                                coords="418,213,414,226,438,226,442,214" shape="poly">
                                            <area alt="千葉県" title="千葉県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=千葉県"
                                                coords="447,211,439,240,457,240,464,211" shape="poly">
                                            <area alt="静岡県" title="静岡県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=静岡県"
                                                coords="375,212,367,244,385,245,393,213" shape="poly">
                                            <area alt="山梨県" title="山梨県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=山梨県"
                                                coords="355,213,372,212,365,245,348,244" shape="poly">
                                            <area alt="愛知県" title="愛知県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=愛知県"
                                                coords="336,213,327,249,346,249,353,214" shape="poly">
                                            <area alt="兵庫県" title="兵庫県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=兵庫県"
                                                coords="288,178,280,210,297,211,305,178" shape="poly">
                                            <area alt="京都府" title="京都府"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=京都府"
                                                coords="308,177,300,208,316,209,325,178" shape="poly">
                                            <area alt="滋賀県" title="滋賀県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=滋賀県"
                                                coords="327,177,323,192,350,193,356,178" shape="poly">
                                            <area alt="三重県" title="三重県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=三重県"
                                                coords="324,195,320,210,346,210,350,196" shape="poly">
                                            <area alt="大阪府" title="大阪府"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=大阪府"
                                                coords="298,214,293,232,309,232,314,213" shape="poly">
                                            <area alt="奈良県" title="奈良県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=奈良県"
                                                coords="317,213,313,231,328,231,334,213" shape="poly">
                                            <area alt="和歌山県" title="和歌山県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=和歌山県"
                                                coords="294,234,290,250,326,251,327,234" shape="poly">
                                            <area alt="愛媛県" title="愛媛県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=愛媛県"
                                                coords="205,224,201,240,237,240,240,224" shape="poly">
                                            <area alt="香川県" title="香川県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=香川県"
                                                coords="243,223,239,240,274,240,279,224" shape="poly">
                                            <area alt="高知県" title="高知県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=高知県"
                                                coords="199,244,195,262,230,262,236,243" shape="poly">
                                            <area alt="徳島県" title="徳島県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=徳島県"
                                                coords="238,242,234,261,270,261,274,243" shape="poly">
                                            <area alt="佐賀県" title="佐賀県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=佐賀県"
                                                coords="111,180,101,222,122,222,130,180" shape="poly">
                                            <area alt="福岡県" title="福岡県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=福岡県"
                                                coords="131,181,123,209,141,210,148,181" shape="poly">
                                            <area alt="大分県" title="大分県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=大分県"
                                                coords="150,181,146,198,190,198,194,180" shape="poly">
                                            <area alt="長崎県" title="長崎県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=長崎県"
                                                coords="145,201,133,243,157,243,166,200" shape="poly">
                                            <area alt="熊本県" title="熊本県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=熊本県"
                                                coords="167,198,163,220,186,219,190,199" shape="poly">
                                            <area alt="宮崎県" title="宮崎県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=宮崎県"
                                                coords="162,222,158,241,179,242,184,224" shape="poly">
                                            <area alt="鹿児島県" title="鹿児島県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=鹿児島県"
                                                coords="132,247,130,261,176,261,181,246" shape="poly">
                                            <area alt="沖縄県" title="沖縄県"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=沖縄県"
                                                coords="68,260,58,299,77,299,90,258" shape="poly">
                                        </map>
                                    </div>
                                    <div class="location-right-hp">
                                        <div class="location-right-title-hp">地方選択</div>
                                        <div class="location-info-hp">
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=1">
                                                    <span>北海道地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=2">
                                                    <span>中部地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=3">
                                                    <span>関東地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=4">
                                                    <span>九州地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=5">
                                                    <span>関西地方から探す</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=6">
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
                                <?php
                                 $args = array(
                                                'post_type' => 'job',                                                 
                                                'paged' => $page,  
                                                'posts_per_page' => 8);                                            

                                $the_query = new WP_Query($args); 
                                ?>
                                <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                <div class="pickup-box-hp">
                                    <a href="<?php echo get_site_url() ?>/job?id=<?php the_ID() ?>">
                                        <div class="pickup-box-img-hp">
                                            <?php 
                                                    $logo = get_field('logo'); 
                                                    if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="pickup-box-details-hp">
                                            <div class="pickup-tag-main-hp">
                                                <div class="pickup-tag-hp">勤務地</div>
                                            </div>
                                            <div class="pickup-box-name-hp"><?php the_title() ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile;
                                        wp_reset_postdata();?>
                                <?php else: ?>
                                <p><?php _e('Sorry, no posts matched your criteria.');?></p>
                                <?php endif;?>

                            </div>
                            <div class="pickup-btn-hp">
                                <a href="<?php echo get_site_url() ?>/job_list" class="common-btn-hp more-btn-hp">More
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg"
                                        alt="" /></a>
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
                            <div class="career-desc-hp">
                                働き方にまつわるコラム、語学やExcel・PowerPointの使い方ガイドなど、キャリアやライフスタイルに役立つ情報をお届けします。</div>
                            <div class="career-middle-hp">
                                <?php

                                        $args = array('post_type' => 'interview', 'posts_per_page' => 3);
                                        $the_query = new WP_Query($args);
                                        
                                        ?>
                                <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                <div class="career-box-hp">
                                    <a href="<?php echo get_site_url() ?>/interview_detail?id=<?php the_ID() ?>">
                                        <div class="career-box-img-hp">
                                            <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="career-box-details-hp">
                                            <div class="career-box-name-hp"><?php the_title() ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile;
                                        wp_reset_postdata();?>
                                <?php else: ?>
                                <?php endif;?>


                            </div>
                            <div class="pickup-btn-hp">
                                <a href="<?php echo get_site_url() ?>/interview_list"
                                    class="common-btn-hp more-btn-hp">More <img
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg"
                                        alt="" /></a>
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
                                <?php

                                        $args = array('post_type' => 'column', 'posts_per_page' => 3);
                                        $the_query = new WP_Query($args);
                                        
                                        ?>
                                <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                <div class="career-box-hp">
                                    <a href="<?php echo get_site_url() ?>/information_details?id=<?php the_ID() ?>">
                                        <div class="career-box-img-hp">
                                            <?php 
                                                    $logo = get_field('main_image'); 
                                                    if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="career-box-details-hp">
                                            <div class="career-box-name-hp"><?php the_title() ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile;
                                        wp_reset_postdata();?>
                                <?php else: ?>
                                <?php endif;?>
                            </div>
                            <div class="pickup-btn-hp">
                                <a href="<?php echo get_site_url()?>/informations"
                                    class="common-btn-hp more-btn-hp">More <img
                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg"
                                        alt="" /></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php get_footer('search') ?>
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