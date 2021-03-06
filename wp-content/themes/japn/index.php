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
    var reg_array_1 = ['hokkai', 'area_1'];
    var reg_array_2 = ['aomori', 'akita', 'iwate', 'yamagata', 'miyagi', 'fukushima', 'area_2'];
    var reg_array_3 = ['gunma', 'tochigi', 'ibaraki', 'saitama', 'chiba', 'tokyo', 'kanagawa', 'area_4']; //gand
    var reg_array_4 = ['niigata', 'toyama', 'ishikawa', 'fukui', 'nagano', 'gifu', 'yamanashi', 'shizuoka',
        'aichi', 'area_3'
    ];
    var reg_array_5 = ['osaka', 'kyoto', 'hyogo', 'nara', 'shiga', 'mie', 'wakayama', 'area_5'];
    var reg_array_6 = ['shimane', 'hiroshima', 'yamaguchi', 'tottori', 'okayama', 'area_6'];
    var reg_array_7 = ['kagawa', 'tokushima', 'kochi', 'ehime', 'area_7'];
    var reg_array_8 = ['fukuoka', 'saga', 'nagasaki', 'oita', 'kumamoto', 'miyazaki', 'kagoshima', 'okinawa',
        'area_8'
    ];
    var reg_array_9 = ['area_9'];

    function buildAreas() {
        var items = $('img[usemap]').find('area');
        var areaArray = [];

        items.each(function() {
            var areaName = $(this).attr('joint');
            var fullName = $(this).attr('full');
            areaArray.push({
                key: areaName
            });
        });
        return areaArray;
    }
    // var jpMap = $('img[usemap]');
    $('img[usemap]').mapster({
        fillOpacity: 0.8,
        render_highlight: {
            fillColor: '7B6A5F',
            fill: false,
            stroke: false
        },
        render_select: {
            // fillColor: '7B6A5F',
            altImage: '<?php echo get_stylesheet_directory_uri(); ?>/images/location_alt.png',
            stroke: false
        },
        // fillColor: '7B6A5F',
        stroke: true,
        // strokeColor: '7B6A5F',
        showToolTip: true,
        mapKey: 'joint',
        isSelectable: false,
        singleSelect: false,
        clickNavigate: true,
        onMouseout: function(ev) {
            var selectArea;
            // if (reg_array_1.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_1;
            // }
            // if (reg_array_2.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_2;
            // }
            // if (reg_array_3.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_3;
            // }
            // if (reg_array_4.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_4;
            // }
            // if (reg_array_5.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_5;
            // }
            // if (reg_array_6.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_6;
            // }
            // if (reg_array_7.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_7;
            // }
            // if (reg_array_8.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_8;
            // }
            // if (reg_array_9.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_9;
            // }
            if (/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(window.navigator
                    .userAgent) || /Windows Phone/i.test(window.navigator.userAgent) ||
                /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window.navigator
                    .userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent)) {
                return;
            }
            $('img[usemap]').mapster('set', false, ev.key);
            // $('img[usemap]').mapster('set', false, selectArea.join(','));
        },
        onMouseover: function(ev) {
            // var selectArea;
            // if (reg_array_1.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_1;
            // }
            // if (reg_array_2.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_2;
            // }
            // if (reg_array_3.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_3;
            // }
            // if (reg_array_4.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_4;
            // }
            // if (reg_array_5.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_5;
            // }
            // if (reg_array_6.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_6;
            // }
            // if (reg_array_7.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_7;
            // }
            // if (reg_array_8.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_8;
            // }
            // if (reg_array_9.findIndex(it => it == ev.key) > -1) {
            //     selectArea = reg_array_9;
            // }
            // // $('img[usemap]').mapster('set', false);
            if (/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(window.navigator
                    .userAgent) || /Windows Phone/i.test(window.navigator.userAgent) ||
                /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window.navigator
                    .userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent)) {
                return;
            }
            $('img[usemap]').mapster('set', true, ev.key);
            // $('img[usemap]').mapster('set', true, selectArea.join(','));
            // console.log(selectArea.join(','));
            // console.log(ev.key)

        }
    });
    $('map').imageMapResize();

    window.addEventListener('resize', function(event) {
        $('img[usemap]').mapster({
            fillOpacity: 0.8,
            render_highlight: {
                fillColor: '7B6A5F',
                fill: false,
                stroke: false
            },
            render_select: {
                // fillColor: '7B6A5F',
                altImage: '<?php echo get_stylesheet_directory_uri(); ?>/images/location_alt.png',
                stroke: false
            },
            // fillColor: '7B6A5F',
            stroke: true,
            // strokeColor: '7B6A5F',
            showToolTip: true,
            mapKey: 'joint',
            isSelectable: false,
            singleSelect: false,
            clickNavigate: true,
            onMouseout: function(ev) {
                var selectArea;
                // if (reg_array_1.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_1;
                // }
                // if (reg_array_2.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_2;
                // }
                // if (reg_array_3.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_3;
                // }
                // if (reg_array_4.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_4;
                // }
                // if (reg_array_5.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_5;
                // }
                // if (reg_array_6.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_6;
                // }
                // if (reg_array_7.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_7;
                // }
                // if (reg_array_8.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_8;
                // }
                // if (reg_array_9.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_9;
                // }
                if (/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(
                        window.navigator
                        .userAgent) || /Windows Phone/i.test(window.navigator.userAgent) ||
                    /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window
                        .navigator
                        .userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent)
                    ) {
                    return;
                }
                $('img[usemap]').mapster('set', false, ev.key);
                // $('img[usemap]').mapster('set', false, selectArea.join(','));
            },
            onMouseover: function(ev) {
                // var selectArea;
                // if (reg_array_1.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_1;
                // }
                // if (reg_array_2.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_2;
                // }
                // if (reg_array_3.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_3;
                // }
                // if (reg_array_4.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_4;
                // }
                // if (reg_array_5.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_5;
                // }
                // if (reg_array_6.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_6;
                // }
                // if (reg_array_7.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_7;
                // }
                // if (reg_array_8.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_8;
                // }
                // if (reg_array_9.findIndex(it => it == ev.key) > -1) {
                //     selectArea = reg_array_9;
                // }
                // // $('img[usemap]').mapster('set', false);
                if (/iP(od|hone)/i.test(window.navigator.userAgent) || /IEMobile/i.test(
                        window.navigator
                        .userAgent) || /Windows Phone/i.test(window.navigator.userAgent) ||
                    /BlackBerry/i.test(window.navigator.userAgent) || /BB10/i.test(window
                        .navigator
                        .userAgent) || /Android.*Mobile/i.test(window.navigator.userAgent)
                    ) {
                    return;
                }
                $('img[usemap]').mapster('set', true, ev.key);
                // $('img[usemap]').mapster('set', true, selectArea.join(','));
                // console.log(selectArea.join(','));
                // console.log(ev.key)

            }
        });
        $('map').imageMapResize();
    }, true);

    // AbstractChosen.browser_is_supported = function() { return true; }
    <?php if(!wp_is_mobile()) { ?>
    $("#job_spec").chosen({
        allow_single_deselect: true,
        disable_search_threshold: 0
    });
    <?php } else { ?>
    // $("#job_spec").selectmenu();
    <?php } ?>

    // // if ($('.chosen-container').length > 0) {
    //   $('.chosen-container').on('touchstart', function(e){
    //     e.stopPropagation(); e.preventDefault();
    //     // Trigger the mousedown event.
    //     $(this).trigger('mousedown');
    //   });
    // }
});
</script>
<style>
.active-result,
.search-choice span {
    font-size: 18px !important;
}

.chosen-choices {
    padding: .375rem 1.75rem .375rem .75rem !important;
    font-size: 18px !important;
}

.search-choice {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

@media(min-width:0px) and (max-width:575px) {

    .active-result,
    .search-choice span {
        font-size: 14px !important;
    }

    .chosen-choices {
        font-size: 14px !important;
    }
}
</style>
<?php
global $wpdb;
 ?>
<main id="primary" class="site-main">
    <!-- CONTAIN_START -->
    <section id="contain">
        <?php get_sidebar('rightbar') ?>
        <div class="banner-block-hp">
            <div class="banner-overlay-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-block-in-hp">
                            <div class="banner-middle-hp">
                                <div class="banner-left-hp">
                                    <div class="banner-title-hp">
                                        <div class="banner-title-left-hp">?????????????????????</div>
                                        <!-- <div class="banner-title-right-hp">XXX<span>???</span></div> -->
                                    </div>
                                    <div class="banner-select-hp ui-field-contain">
                                        <select class="custom-select" id="district_val">
                                            <option value="">????????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="?????????">?????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="?????????">?????????</option>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp ui-field-contain">
                                        <select class="custom-select" id="job_type">
                                            <option value="">??????</option>
                                            <?php foreach ($job_list as $key => $job_types) { ?>
                                            <optgroup label="<?php echo $key ?>">
                                                <?php foreach ($job_types as $job) {?>
                                                <option value="<?php echo $job ?>"><?php echo $job ?></option>
                                                <?php }?>
                                            </optgroup>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="banner-select-hp ui-field-contain">
                                        <select class="custom-select" id="job_spec" <?php if(!wp_is_mobile()) { echo 'data-placeholder="???????????????"'; }
                                            else { echo 'data-placeholder="true"'; }?> multiple="multiple"
                                            data-native-menu="false">
                                            <?php if(wp_is_mobile()) { ?>
                                            <option value="" selected="selected" disabled="disabled">???????????????</option>
                                            <?php }?>

                                            <option value="?????????">?????????</option>
                                            <option value="?????????????????????">?????????????????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="?????????OK">?????????OK</option>
                                            <option value="??????????????????">??????????????????</option>
                                            <option value="??????????????????">??????????????????</option>
                                            <option value="????????????">????????????</option>
                                            <option value="???????????????">???????????????</option>
                                            <option value="???????????????">???????????????</option>
                                            <option value="????????????20???">????????????20???</option>
                                            <option value="????????????????????????">????????????????????????</option>
                                            <option value="??????????????????">??????????????????</option>
                                        </select>
                                    </div>
                                    <div class="banner-input-hp">
                                        <input type="text" placeholder="??????????????????" id="job_keyword" />
                                    </div>
                                    <div class="banner-btn-hp">
                                        <a href="javascript:job_search();" class="common-btn-hp">??????</a>
                                    </div>
                                </div>
                                <div class="banner-right-hp">
                                    <div class="banner-right-in-hp">
                                        <div class="banner-right-details-hp">
                                            <?php if(wp_is_mobile()) { ?>
                                            <h1 class="text-left mb-1"><span>Hiru</span> <br /> &nbsp;&nbsp;Navi
                                            </h1>
                                            <?php } else { ?>
                                            <h1><span>Hiru</span> Navi</h1>
                                            <?php } ?>
                                            <p>?????????<span>2??????</span>???????????????</p>
                                            <div class="banner-info-hp">
                                                <p>
                                                    ????????????????????????????????????????????????<br>
                                                    ???????????????<span>????????????</span>???????????????????????????
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
                                                ???????????????<br>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button_arrow.svg"
                                                    alt="" />
                                            </span>
                                        </div>
                                    </a>

                                    <div class="daytime-right-hp">
                                        <h2>Hiru Navi</h2>
                                        <p>?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
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
                                                    ????????????<br>
                                                    ???????????????
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
                                                    ??????????????????
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
                                                    ????????????
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
                            <p>???????????????</p>
                        </div>
                        <div class="search-middle-hp">
                            <div class="search-part-hp">
                                <h3>??????????????????</h3>
                                <div class="search-details-hp">
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('?????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon1.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">?????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('?????????????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon2.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">?????????????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon3.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('?????????OK')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon4.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">?????????OK</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('??????????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon5.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">??????????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('??????????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon6.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">??????????????????</div>
                                        </a>
                                    </div>

                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon7.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('???????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon8.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">???????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('???????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon9.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">???????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('????????????20???')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon10.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">????????????20???</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('????????????????????????')">
                                            <div class="search-box-img-hp"><img
                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon11.png"
                                                    alt="" /></div>
                                            <div class="search-box-name-hp">????????????????????????</div>
                                        </a>
                                    </div>
                                    <div class="search-box-hp">
                                        <a href="javascript:select_special('??????????????????')">
                                            <div class="search-box-img-hp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/features_icon12.png"
                                                    alt="" />
                                            </div>
                                            <div class="search-box-name-hp">??????????????????</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-part-hp">
                                <h3>??????????????????????????????</h3>
                                <div class="location-details-hp">
                                    <div class="location-left-hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png"
                                            alt="" usemap="#image-map" />
                                        <map name="image-map">
                                            <area alt="?????????" title="?????????" joint="hokkai"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="522,40,451,40,437,96,508,96" shape="poly">
                                            <area alt="?????????" title="?????????" joint="aomori"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="433,110,429,126,486,126,490,110" shape="poly">
                                            <area alt="?????????" title="?????????" joint="akita"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="429,127,425,142,453,142,456,127" shape="poly">
                                            <area alt="?????????" title="?????????" joint="iwate"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="458,127,454,142,482,142,486,127" shape="poly">
                                            <area alt="?????????" title="?????????" joint="yamagata"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="425,144,421,159,448,159,453,144" shape="poly">
                                            <area alt="?????????" title="?????????" joint="miyagi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="454,144,450,159,477,159,481,144" shape="poly">
                                            <area alt="?????????" title="?????????" joint="ishikawa"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="364,151,358,178,378,178,385,151" shape="poly">
                                            <area alt="?????????" title="?????????" joint="toyama"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="384,161,380,176,411,176,415,161" shape="poly">
                                            <area alt="?????????" title="?????????" joint="fukushima"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="449,161,446,176,473,176,477,161" shape="poly">
                                            <area alt="?????????" title="?????????" joint="niigata"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="417,161,413,176,444,176,448,161" shape="poly">
                                            <area alt="?????????" title="?????????" joint="yamaguchi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="211,178,203,210,221,210,229,178" shape="poly">
                                            <area alt="?????????" title="?????????" joint="shimane"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="231,179,227,193,254,193,258,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="hiroshima"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="227,196,223,210,250,210,253,196" shape="poly">
                                            <area alt="?????????" title="?????????" joint="tottori"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="260,179,256,193,283,193,287,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="okayama"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="256,196,252,210,279,210,283,196" shape="poly">
                                            <area alt="?????????" title="?????????" joint="fukui"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="357,179,349,210,369,210,375,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="gifu"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="377,179,369,210,387,210,395,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="nagano"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="392,196,389,210,415,210,419,196" shape="poly">
                                            <area alt="?????????" title="?????????" joint="gunma"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="396,179,393,193,420,193,424,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="tochigi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="425,178,422,198,448,198,452,178" shape="poly">
                                            <area alt="?????????" title="?????????" joint="ibaraki"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="454,179,447,206,465,206,472,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="saitama"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="421,196,418,210,444,210,448,196" shape="poly">
                                            <area alt="????????????" title="????????????" joint="kanagawa"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=????????????"
                                                coords="396,212,388,245,407,245,415,212" shape="poly">
                                            <area alt="?????????" title="?????????" joint="tokyo"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="418,213,414,228,440,228,445,213" shape="poly">
                                            <area alt="?????????" title="?????????" joint="chiba"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="447,211,440,240,457,240,464,211" shape="poly">
                                            <area alt="?????????" title="?????????" joint="shizuoka"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="376,213,368,245,386,245,395,213" shape="poly">
                                            <area alt="?????????" title="?????????" joint="yamanashi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="355,213,374,213,366,245,347,245" shape="poly">
                                            <area alt="?????????" title="?????????" joint="aichi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="337,213,327,250,344,250,354,213" shape="poly">
                                            <area alt="?????????" title="?????????" joint="hyogo"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="289,179,281,210,299,210,307,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="kyoto"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="309,179,301,210,318,210,326,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="shiga"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="328,179,325,193,352,193,355,179" shape="poly">
                                            <area alt="?????????" title="?????????" joint="mie"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="324,196,321,210,347,210,351,196" shape="poly">
                                            <area alt="?????????" title="?????????" joint="osaka"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="300,213,295,232,312,232,317,213" shape="poly">
                                            <area alt="?????????" title="?????????" joint="nara"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="318,213,314,232,330,232,335,213" shape="poly">
                                            <area alt="????????????" title="????????????" joint="wakayama"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=????????????"
                                                coords="294,235,291,250,326,250,329,235" shape="poly">
                                            <area alt="?????????" title="?????????" joint="ehime"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="206,223,202,240,238,240,243,223" shape="poly">
                                            <area alt="?????????" title="?????????" joint="kagawa"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="245,223,240,240,277,240,281,223" shape="poly">
                                            <area alt="?????????" title="?????????" joint="kochi"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="201,243,197,260,233,260,238,243" shape="poly">
                                            <area alt="?????????" title="?????????" joint="tokushima"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="240,243,235,260,272,260,276,243" shape="poly">
                                            <area alt="?????????" title="?????????" joint="saga"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="114,182,104,222,121,222,131,182" shape="poly">
                                            <area alt="?????????" title="?????????" joint="fukuoka"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="133,182,126,211,142,211,150,182" shape="poly">
                                            <area alt="?????????" title="?????????" joint="oita"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="152,182,148,197,193,197,196,182" shape="poly">
                                            <area alt="?????????" title="?????????" joint="nagasaki"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="147,200,136,243,158,243,169,200" shape="poly">
                                            <area alt="?????????" title="?????????" joint="kumamoto"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="171,200,166,220,187,220,192,200" shape="poly">
                                            <area alt="?????????" title="?????????" joint="miyazaki"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="165,222,160,243,181,243,186,222" shape="poly">
                                            <area alt="????????????" title="????????????" joint="kagoshima"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=????????????"
                                                coords="135,246,131,261,177,261,180,246" shape="poly">
                                            <area alt="?????????" title="?????????" joint="okinawa"
                                                href="<?php echo get_site_url() ?>/job_list?district_val=?????????"
                                                coords="73,258,63,297,81,297,91,258" shape="poly">
                                            <area joint="area_1" alt="???????????????" title="???????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=1"
                                                coords="533,55, 605,77" shape="rect">
                                            <area joint="area_2" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=7"
                                                coords="500,132, 564,152" shape="rect">
                                            <area joint="area_3" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=2"
                                                coords="328,106, 400,134" shape="rect">
                                            <area joint="area_4" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=3"
                                                coords="478,200, 548,221" shape="rect">
                                            <area joint="area_5" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=8"
                                                coords="274,266, 340,293" shape="rect">
                                            <area joint="area_6" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=9"
                                                coords="217,134, 290,165" shape="rect">
                                            <area joint="area_7" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=5"
                                                coords="184,277, 253,299" shape="rect">
                                            <area joint="area_8" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=4"
                                                coords="128,135, 193,162" shape="rect">
                                            <area joint="area_9" alt="????????????" title="????????????"
                                                href="<?php echo get_site_url() ?>/job_list?district_vals=6"
                                                coords="39,307, 108,332" shape="rect">
                                        </map>
                                    </div>
                                    <div class="location-right-hp">
                                        <div class="location-right-title-hp">????????????</div>
                                        <div class="location-info-hp">
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=1">
                                                    <span>???????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=7">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=3">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=2">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=8">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=9">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=5">
                                                    <span>????????????????????????</span>
                                                </a>
                                            </div>
                                            <div class="location-info-in-hp">
                                                <a href="<?php echo get_site_url() ?>/job_list?district_vals=4">
                                                    <span>????????????????????????</span>
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
                                <p>????????????????????????</p>
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
                                                <div class="pickup-tag-hp">?????????</div>
                                                <div class="pickup-tag-hp text-white pickup-address_bg">
                                                    <?php the_field('addressRegion') ?></div>
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
                                <p>???????????????????????????</p>
                            </div>
                            <div class="career-desc-hp">
                                ?????????????????????????????????????????????Excel???PowerPoint????????????????????????????????????????????????????????????????????????????????????????????????????????????</div>
                            <div class="career-middle-hp">
                                <?php

                                        $args = array('post_type' => 'interview', 'posts_per_page' => 3);
                                        $the_query = new WP_Query($args);
                                        
                                        ?>
                                <?php if ($the_query->have_posts()): ?>
                                <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                <div class="career-box-hp">
                                    <a href="<?php echo get_site_url() ?>/interview_details?id=<?php the_ID() ?>">
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
                                <p>?????????</p>
                            </div>
                            <div class="career-desc-hp">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</div>
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
                                    ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
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