<?php /* Template Name: Job_list */?>

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
</style>
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
                                            <li class="breadcrumb-item active">
                                                <?php 
                                                if($_GET['district_vals'] == '1') {
                                                    $condition = '北海道地方';
                                                }
                                                if($_GET['district_vals'] == '2') {
                                                    $condition .= '中部地方';
                                                }
                                                if($_GET['district_vals'] == '3') {
                                                    $condition .= '関東地方';
                                                }
                                                if($_GET['district_vals'] == '4') {
                                                    $condition .= '九州地方';
                                                }
                                                if($_GET['district_vals'] == '5') {
                                                    $condition .= '四国地方';
                                                }
                                                if($_GET['district_vals'] == '6') {
                                                    $condition .= '沖縄地方';
                                                }
                                                if($_GET['district_vals'] == '7') {
                                                    $condition .= '東北地方';
                                                }
                                                if($_GET['district_vals'] == '8') {
                                                    $condition .= '近畿地方';
                                                }
                                                if($_GET['district_vals'] == '9') {
                                                    $condition .= '中国地方';
                                                }
                                               
                                                if(!empty($_GET['district_vals']) )
                                                {
                                                    echo $condition . 'の';
                                                }                                                
                                                ?>お仕事情報
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>
                                            <?php 
                                                if(!empty($_GET['district_val']))
                                                {
                                                    echo $_GET['district_val'] . 'の';
                                                }
                                                                                           
                                                ?>
                                            お仕事情報
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 about-block-in-ip">
                            <div class="about-middle-ip">
                                <div class="about-left-ip">
                                    <div class="adviser-box-op">
                                        <div class="about-box-border-top-ip"></div>
                                        <div class="affairs-details-jlp">
                                            <div class="affairs-details-info-jlp">
                                                <div class="affairs-details-left-jlp">選択条件</div>
                                                <div class="affairs-details-right-jlp">
                                                    <div class="banner-select-hp">
                                                        <select class="custom-select border" id="district_vals">
                                                            <option value="">地方選択</option>
                                                            <option value="1"
                                                                <?php echo($_GET['district_vals'] == '1' ? 'selected' : '' ) ?>>
                                                                北海道</option>
                                                            <option value="7"
                                                                <?php echo($_GET['district_vals'] == '7' ? 'selected' : '' ) ?>>
                                                                東北地方</option>
                                                            <option value="2"
                                                                <?php echo($_GET['district_vals'] == '2' ? 'selected' : '' ) ?>>
                                                                中部地方</option>
                                                            <option value="3"
                                                                <?php echo($_GET['district_vals'] == '3' ? 'selected' : '' ) ?>>
                                                                関東地方</option>
                                                            <option value="4"
                                                                <?php echo($_GET['district_vals'] == '4' ? 'selected' : '' ) ?>>
                                                                九州地方</option>
                                                            <option value="5"
                                                                <?php echo($_GET['district_vals'] == '5' ? 'selected' : '' ) ?>>
                                                                四国地方</option>
                                                            <option value="8"
                                                                <?php echo($_GET['district_vals'] == '8' ? 'selected' : '' ) ?>>
                                                                近畿地方</option>
                                                            <option value="9"
                                                                <?php echo($_GET['district_vals'] == '9' ? 'selected' : '' ) ?>>
                                                                中国地方</option>
                                                            <option value="6"
                                                                <?php echo($_GET['district_vals'] == '6' ? 'selected' : '' ) ?>>
                                                                沖縄地方</option>

                                                        </select>
                                                    </div>
                                                    <div class="banner-select-hp">
                                                        <select class="custom-select border" id="district_val">
                                                            <option value="">都道府県</option>
                                                            <?php if(empty($_GET['district_vals'])) { ?>
                                                            <option value="東京都"
                                                                <?php echo($_GET['district_val'] == '東京都' ? 'selected' : '' ) ?>>
                                                                東京都</option>
                                                            <option value="北海道"
                                                                <?php echo($_GET['district_val'] == '北海道' ? 'selected' : '' ) ?>>
                                                                北海道</option>
                                                            <option value="青森県"
                                                                <?php echo($_GET['district_val'] == '青森県' ? 'selected' : '' ) ?>>
                                                                青森県</option>
                                                            <option value="岩手県"
                                                                <?php echo($_GET['district_val'] == '岩手県' ? 'selected' : '' ) ?>>
                                                                岩手県</option>
                                                            <option value="宮城県"
                                                                <?php echo($_GET['district_val'] == '宮城県' ? 'selected' : '' ) ?>>
                                                                宮城県</option>
                                                            <option value="秋田県"
                                                                <?php echo($_GET['district_val'] == '秋田県' ? 'selected' : '' ) ?>>
                                                                秋田県</option>
                                                            <option value="山形県"
                                                                <?php echo($_GET['district_val'] == '山形県' ? 'selected' : '' ) ?>>
                                                                山形県</option>
                                                            <option value="福島県"
                                                                <?php echo($_GET['district_val'] == '福島県' ? 'selected' : '' ) ?>>
                                                                福島県</option>
                                                            <option value="茨城県"
                                                                <?php echo($_GET['district_val'] == '茨城県' ? 'selected' : '' ) ?>>
                                                                茨城県</option>
                                                            <option value="栃木県"
                                                                <?php echo($_GET['district_val'] == '栃木県' ? 'selected' : '' ) ?>>
                                                                栃木県</option>
                                                            <option value="群馬県"
                                                                <?php echo($_GET['district_val'] == '群馬県' ? 'selected' : '' ) ?>>
                                                                群馬県</option>
                                                            <option value="埼玉県"
                                                                <?php echo($_GET['district_val'] == '埼玉県' ? 'selected' : '' ) ?>>
                                                                埼玉県</option>
                                                            <option value="千葉県"
                                                                <?php echo($_GET['district_val'] == '千葉県' ? 'selected' : '' ) ?>>
                                                                千葉県</option>
                                                            <option value="神奈川県"
                                                                <?php echo($_GET['district_val'] == '神奈川県' ? 'selected' : '' ) ?>>
                                                                神奈川県</option>
                                                            <option value="新潟県"
                                                                <?php echo($_GET['district_val'] == '新潟県' ? 'selected' : '' ) ?>>
                                                                新潟県</option>
                                                            <option value="富山県"
                                                                <?php echo($_GET['district_val'] == '富山県' ? 'selected' : '' ) ?>>
                                                                富山県</option>
                                                            <option value="石川県"
                                                                <?php echo($_GET['district_val'] == '石川県' ? 'selected' : '' ) ?>>
                                                                石川県</option>
                                                            <option value="福井県"
                                                                <?php echo($_GET['district_val'] == '福井県' ? 'selected' : '' ) ?>>
                                                                福井県</option>
                                                            <option value="山梨県"
                                                                <?php echo($_GET['district_val'] == '山梨県' ? 'selected' : '' ) ?>>
                                                                山梨県</option>
                                                            <option value="長野県"
                                                                <?php echo($_GET['district_val'] == '長野県' ? 'selected' : '' ) ?>>
                                                                長野県</option>
                                                            <option value="岐阜県"
                                                                <?php echo($_GET['district_val'] == '岐阜県' ? 'selected' : '' ) ?>>
                                                                岐阜県</option>
                                                            <option value="愛知県"
                                                                <?php echo($_GET['district_val'] == '愛知県' ? 'selected' : '' ) ?>>
                                                                愛知県</option>
                                                            <option value="三重県"
                                                                <?php echo($_GET['district_val'] == '三重県' ? 'selected' : '' ) ?>>
                                                                三重県</option>
                                                            <option value="滋賀県"
                                                                <?php echo($_GET['district_val'] == '滋賀県' ? 'selected' : '' ) ?>>
                                                                滋賀県</option>
                                                            <option value="京都府"
                                                                <?php echo($_GET['district_val'] == '京都府' ? 'selected' : '' ) ?>>
                                                                京都府</option>
                                                            <option value="大阪府"
                                                                <?php echo($_GET['district_val'] == '大阪府' ? 'selected' : '' ) ?>>
                                                                大阪府</option>
                                                            <option value="兵庫県"
                                                                <?php echo($_GET['district_val'] == '兵庫県' ? 'selected' : '' ) ?>>
                                                                兵庫県</option>
                                                            <option value="奈良県"
                                                                <?php echo($_GET['district_val'] == '奈良県' ? 'selected' : '' ) ?>>
                                                                奈良県</option>
                                                            <option value="和歌山県"
                                                                <?php echo($_GET['district_val'] == '和歌山県' ? 'selected' : '' ) ?>>
                                                                和歌山県</option>
                                                            <option value="鳥取県"
                                                                <?php echo($_GET['district_val'] == '鳥取県' ? 'selected' : '' ) ?>>
                                                                鳥取県</option>
                                                            <option value="島根県"
                                                                <?php echo($_GET['district_val'] == '島根県' ? 'selected' : '' ) ?>>
                                                                島根県</option>
                                                            <option value="岡山県"
                                                                <?php echo($_GET['district_val'] == '岡山県' ? 'selected' : '' ) ?>>
                                                                岡山県</option>
                                                            <option value="広島県"
                                                                <?php echo($_GET['district_val'] == '広島県' ? 'selected' : '' ) ?>>
                                                                広島県</option>
                                                            <option value="山口県"
                                                                <?php echo($_GET['district_val'] == '山口県' ? 'selected' : '' ) ?>>
                                                                山口県</option>
                                                            <option value="徳島県"
                                                                <?php echo($_GET['district_val'] == '徳島県' ? 'selected' : '' ) ?>>
                                                                徳島県</option>
                                                            <option value="香川県"
                                                                <?php echo($_GET['district_val'] == '香川県' ? 'selected' : '' ) ?>>
                                                                香川県</option>
                                                            <option value="愛媛県"
                                                                <?php echo($_GET['district_val'] == '愛媛県' ? 'selected' : '' ) ?>>
                                                                愛媛県</option>
                                                            <option value="高知県"
                                                                <?php echo($_GET['district_val'] == '高知県' ? 'selected' : '' ) ?>>
                                                                高知県</option>
                                                            <option value="福岡県"
                                                                <?php echo($_GET['district_val'] == '福岡県' ? 'selected' : '' ) ?>>
                                                                福岡県</option>
                                                            <option value="佐賀県"
                                                                <?php echo($_GET['district_val'] == '佐賀県' ? 'selected' : '' ) ?>>
                                                                佐賀県</option>
                                                            <option value="長崎県"
                                                                <?php echo($_GET['district_val'] == '長崎県' ? 'selected' : '' ) ?>>
                                                                長崎県</option>
                                                            <option value="熊本県"
                                                                <?php echo($_GET['district_val'] == '熊本県' ? 'selected' : '' ) ?>>
                                                                熊本県</option>
                                                            <option value="大分県"
                                                                <?php echo($_GET['district_val'] == '大分県' ? 'selected' : '' ) ?>>
                                                                大分県</option>
                                                            <option value="宮崎県"
                                                                <?php echo($_GET['district_val'] == '宮崎県' ? 'selected' : '' ) ?>>
                                                                宮崎県</option>
                                                            <option value="鹿児島県"
                                                                <?php echo($_GET['district_val'] == '鹿児島県' ? 'selected' : '' ) ?>>
                                                                鹿児島県</option>
                                                            <option value="沖縄県"
                                                                <?php echo($_GET['district_val'] == '沖縄県' ? 'selected' : '' ) ?>>
                                                                沖縄県</option>
                                                            <?php } else {
                                                                $districts = $_GET['district_vals'];
                                                                $dis_array = array();
                                                                if($districts == '1') {
                                                                    $dis_array =array('北海道');
                                                                } else if($districts == '2') {
                                                                    $dis_array = array('新潟県', '富山県', '石川県', '福井県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県' );
                                                                } else if($districts == '3') {
                                                                    $dis_array = array('茨城県', '栃木县', '群马县', '埼玉县', '千叶县', '東京都', '神奈川县');
                                                                } else if($districts == '4') {
                                                                    $dis_array = array('福岡県', '佐賀県', '長崎県', '熊本県', '大分县', '宮崎県', '鹿儿岛县');
                                                                } else if($districts == '5') {
                                                                    $dis_array = array('徳島県', '香川県', '愛媛県', '高知県');
                                                                } else if($districts == '6') {
                                                                    $dis_array = array('沖縄県');
                                                                } else if($districts == '7') {
                                                                    $dis_array = array('青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県');
                                                                }
                                                                else if($districts == '8') {
                                                                    $dis_array = array('三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県');
                                                                }
                                                                else if($districts == '9') {
                                                                    $dis_array = array('鳥取県', '島根県', '岡山県', '広島県', '山口県');
                                                                }
                                                                foreach ($dis_array as $dist) { ?>
                                                            <option value="<?php echo $dist?>"
                                                                <?php echo($dist == $_GET['district_val'] ? 'selected' : '' ) ?>>
                                                                <?php echo $dist ?></option>
                                                            <?php }
                                                            } ?>

                                                        </select>
                                                    </div>
                                                    <div class="banner-select-hp">
                                                        <select class="custom-select border" id="job_type">
                                                            <option value="">職種</option>
                                                            <?php foreach ($job_list as $key => $job_types) { ?>
                                                            <optgroup label="<?php echo $key ?>">
                                                                <?php foreach ($job_types as $job) {?>
                                                                <option value="<?php echo $job ?>"
                                                                    <?php echo($_GET['job_type'] == $job ? 'selected' : '') ?>>
                                                                    <?php echo $job ?>
                                                                </option>
                                                                <?php }?>
                                                            </optgroup>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="banner-select-hp">
                                                        <?php $job_spec = $_GET['job_spec']; ?>
                                                        <select class="custom-select border"
                                                            data-placeholder="特長コードから探す" id="job_spec" size="1"
                                                            multiple>
                                                            <option value="">特長コードから探す</option>
                                                            <option value="駅チカ"
                                                                <?php 
                                                                // echo strpos($job_spec, '駅チカ');
                                                                echo((strpos($job_spec, '駅チカ') !== false) ? 'selected' : '' ) ?>>
                                                                駅チカ</option>
                                                            <option value="朝ゆっくり出社"
                                                                <?php 
                                                                echo((strpos($job_spec, '朝ゆっくり出社')) !== false  ? 'selected' : '' ) ?>>
                                                                朝ゆっくり出社</option>
                                                            <option value="服装自由"
                                                                <?php 
                                                                echo((strpos($job_spec, '服装自由')) !== false? 'selected' : '' ) ?>>
                                                                服装自由</option>
                                                            <option value="ネイルOK"
                                                                <?php 
                                                                echo((strpos($job_spec, 'ネイルOK')) !== false ? 'selected' : '' ) ?>>
                                                                ネイルOK</option>
                                                            <option value="テレワーク可"
                                                                <?php 
                                                                echo((strpos($job_spec, 'テレワーク可')) !== false ? 'selected' : '' ) ?>>
                                                                テレワーク可</option>
                                                            <option value="残業ほぼなし"
                                                                <?php 
                                                                echo((strpos($job_spec, '残業ほぼなし')) !== false ? 'selected' : '' ) ?>>
                                                                残業ほぼなし</option>
                                                            <option value="学歴不問"
                                                                <?php 
                                                                echo((strpos($job_spec, '学歴不問')) !== false? 'selected' : '' ) ?>>
                                                                学歴不問</option>
                                                            <option value="未経験歓迎"
                                                                <?php 
                                                                echo((strpos($job_spec, '未経験歓迎')) !== false ? 'selected' : '' ) ?>>
                                                                未経験歓迎</option>
                                                            <option value="土日祝休み"
                                                                <?php 
                                                                echo((strpos($job_spec, '土日祝休み')) !== false ? 'selected' : '' ) ?>>
                                                                土日祝休み</option>
                                                            <option value="平均年齢20代"
                                                                <?php 
                                                                echo((strpos($job_spec, '平均年齢20代')) !== false ? 'selected' : '' ) ?>>
                                                                平均年齢20代</option>
                                                            <option value="産休育休制度あり"
                                                                <?php 
                                                                echo((strpos($job_spec, '産休育休制度あり')) !== false ? 'selected' : '' ) ?>>
                                                                産休育休制度あり</option>
                                                            <option value="社会保険完備"
                                                                <?php 
                                                                echo((strpos($job_spec, '社会保険完備')) !== false ? 'selected' : '' ) ?>>
                                                                社会保険完備</option>
                                                        </select>
                                                    </div>
                                                    <div class="banner-input-hp">
                                                        <input type="text" class="border" placeholder="フリーワード"
                                                            id="job_keyword" />
                                                    </div>
                                                    <?php
                                                    global $wpdb;
                                                    $job_ty = isset($_GET['job_type']) ? $_GET['job_type'] : '';
                                                    // print_r($job_list);
                                                    $job_code = '';
                                                    $condition = '';
                                                    
                                                    if($_GET['district_val']) {
                                                        $condition .= $_GET['district_val'];
                                                    } 
                                                    if($_GET['district_vals']) {
                                                        if($condition != '') {
                                                            $condition .= '・';
                                                        }
                                                        if($_GET['district_vals'] == '1') {
                                                            $condition .= '北海道地方';
                                                        }
                                                        if($_GET['district_vals'] == '2') {
                                                            $condition .= '中部地方';
                                                        }
                                                        if($_GET['district_vals'] == '3') {
                                                            $condition .= '関東地方';
                                                        }
                                                        if($_GET['district_vals'] == '4') {
                                                            $condition .= '九州地方';
                                                        }
                                                        if($_GET['district_vals'] == '5') {
                                                            $condition .= '関西地方';
                                                        }
                                                        if($_GET['district_vals'] == '6') {
                                                            $condition .= '沖縄地方';
                                                        }
                                                        if($_GET['district_vals'] == '7') {
                                                            $condition .= '東北地方';
                                                        }
                                                        if($_GET['district_vals'] == '8') {
                                                            $condition .= '近畿地方';
                                                        }
                                                        if($_GET['district_vals'] == '9') {
                                                            $condition .= '中国地方';
                                                        }
                                                    } 
                                                    if($job_ty) {
                                                      if($condition != '') {
                                                            $condition .= '・';
                                                       }
                                                       $ind = 1;
                                                       $flag = false;
                                                       foreach($job_list as $job_types) {
                                                           foreach($job_types as $item) {
                                                               if($item == $job_ty) {
                                                                $flag = true ; 
                                                                break;
                                                               }
                                                           }
                                                           if($flag) {
                                                               break;
                                                           }
                                                           $ind++;
                                                       }
                                                       $condition .= $job_ty;
                                                       $job_code = 'job_code_' . $ind;
                                                    }
                                                    
                                                    if($_GET['job_spec']) {
                                                        if($condition != '') {
                                                            $condition .= '・';
                                                        }
                                                        $condition .= $_GET['job_spec'];
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="adviser-details-btn-ap">
                                                <a href="#" id="reset_query" class="common-btn-hp">検索条件を変更</a>
                                            </div>
                                        </div>
                                        <div class="about-box-border-bottom-ip">
                                        </div>
                                    </div>
                                    <?php
                                            $pageSize = 5;
                                            $page = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
                                            $first = ($page - 1) * $pageSize + 1;
                                            $district = empty($_GET['district_val']) ? $_GET['district_val'] : '';
                                            $districts = empty($_GET['district_vals']) ? $_GET['district_vals'] : '';
                                            $job_type = empty($_GET['job_type']) ? $_GET['job_type'] : '';
                                            $job_spec = empty($_GET['job_spec']) ? $_GET['job_spec'] : '';
                                            $job_keyword = empty($_GET['job_keyword']) ? $_GET['job_keyword'] : '';
                                            $orderby = empty($_GET['orderby']) ? $_GET['orderby'] : 'date';
                                            $qry = array();
                                            $qry['relation'] = 'AND';
                                            if($districts) {
                                                // echo ;
                                                // $dists = explode(',', urldecode($districts));
                                                // print_r($dists) ;
                                                $dis_array = ('北海道');
                                                if($districts == '1') {
                                                    $dis_array =array('北海道');
                                                } else if($districts == '2') {
                                                    $dis_array = array('新潟県', '富山県', '石川県', '福井県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県' );
                                                } else if($districts == '3') {
                                                    $dis_array = array('茨城県', '栃木县', '群马县', '埼玉县', '千叶县', '東京都', '神奈川县');
                                                } else if($districts == '4') {
                                                    $dis_array = array('福岡県', '佐賀県', '長崎県', '熊本県', '大分县', '宮崎県', '鹿儿岛县');
                                                } else if($districts == '5') {
                                                    $dis_array = array('徳島県', '香川県', '愛媛県', '高知県');
                                                } else if($districts == '6') {
                                                    $dis_array = array('沖縄県');
                                                } else if($districts == '7') {
                                                    $dis_array = array('青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県');
                                                }
                                                else if($districts == '8') {
                                                    $dis_array = array('三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県');
                                                }
                                                else if($districts == '9') {
                                                    $dis_array = array('鳥取県', '島根県', '岡山県', '広島県', '山口県');
                                                }
                                                $qry[] = array(
                                                    'key'	 	=> 'addressRegion',
                                                    'value'	  	=> $dis_array,
                                                    'compare' 	=> 'IN',
                                                );
                                            }
                                            if($district) {
                                                $qry[] = array(
                                                    'key'	 	=> 'addressRegion',
                                                    'value'	  	=> $district,
                                                    'compare' 	=> '=',
                                                );
                                            }
                                            // $job_code = '';
                                            
                                            if($job_code) {
                                                // echo $job_code;
                                                // echo $job_ty;
                                                $qry[] = array(
                                                    'key'	 	=> $job_code,
                                                    'value'	  	=> $job_ty,
                                                    'compare' 	=> 'LIKE',
                                                );
                                            }
                                            
                                            if($job_spec) {
                                                $job_specs = explode(',', $job_spec);
                                                if(count($job_specs) == 1) {
                                                    $qry[] = array(
                                                        'key'	 	=> 'spec',
                                                        'value'	  	=> $job_spec,
                                                        'compare' 	=> 'LIKE',
                                                    );
                                                } else {
                                                    $opts = array('relation' => 'OR');
                                                    foreach ($job_specs as $key) {
                                                        $opts[] = array(
                                                            'key'	 	=> 'spec',
                                                            'value'	  	=> $key,
                                                            'compare' 	=> 'LIKE',
                                                        );
                                                    }
                                                    $qry[] = $opts;
                                                }                                                
                                            }
                                            $args = array(
                                                'post_type' => 'job', 
                                                'meta_query' => $qry,
                                                'paged' => $page,  
                                                'posts_per_page' => $pageSize);     
                                            if($job_keyword) {
                                                $args = array(
                                                    'post_type' => 'job', 
                                                    'meta_query' => $qry,                                                    
                                                    'paged' => $page,  
                                                    'paged' => $page,  
                                                    's' => $job_keyword,
                                                    'posts_per_page' => $pageSize
                                                );    
                                            }  
                                            if($orderby == 'date') {
                                                $args['orderby'] = 'date';
                                                $args['order'] = 'DESC';
                                            }  else {
                                                if($orderby == 'value' || $orderby == 'need_amount') {
                                                    $args['orderby'] = 'meta_value_num';
                                                    $args['meta_key'] = $orderby;
                                                    $args['order'] = 'DESC';    
                                                } else {
                                                    $args['orderby'] = 'meta_value';
                                                    $args['meta_key'] = $orderby;
                                                    $args['order'] = 'DESC';    
                                                } 
                                            }               
                                            // print_r($args);
                                            $the_query = new WP_Query($args);
                                            
                                    ?>
                                    <?php 
                                        $total_count = $the_query->found_posts;  
                                        $endpage = $page * $pageSize;
                                        $last = $endpage  > $total_count ? $total_count : $endpage;
                                        $total_page = ceil($total_count / $pageSize );
                                        ?>
                                    <div class="cases-jlp">
                                        <div class="cases-left-jlp">
                                            <span><?php echo $total_count; ?></span>件（<?php echo $first ?>〜<?php echo $last ?>件を表示中）
                                        </div>

                                        <?php if($total_page > $page) {?>
                                        <div class="cases-right-jlp">
                                            <a href="<?php echo get_pagenum_link($page + 1) ?>">次へ
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case_icon.svg"
                                                    alt="" /></a>
                                        </div>
                                        <?php } ?>
                                        <?php 
                                        global $wp;
                                        // echo $current_url =  home_url( $wp->request ); 
                                        
                                        $orderby = isset($_GET['orderby']) ? $_GET['orderby']: 'date';
                                        // print_r($wp->request);
                                       
                                        ?>

                                    </div>

                                    <div class="cast-nav-jlp">
                                        <div class="cast-nav-in-jlp"><a href="<?php 
                                        echo home_url( add_query_arg( array(
                                            'job_type' => $_GET['job_type'], 
                                            'district_val' => $_GET['district_val'], 
                                            'job_spec' => $_GET['job_spec'],
                                            'orderby' => 'date'
                                        ), $wp->request ) ); 
                                        ?>" class="<?php echo ( $orderby == 'date' ? 'active' : '' )  ?>">新着順</a></div>
                                        <div class="cast-nav-in-jlp">
                                            <a href="<?php echo home_url( add_query_arg( array(
                                            'job_type' => $_GET['job_type'], 
                                            'district_val' => $_GET['district_val'], 
                                            'job_spec' => $_GET['job_spec'],
                                            'orderby' => 'value'
                                        ), $wp->request ) ); ?>"
                                                class="<?php echo ( $orderby == 'value' ? 'active' : '' )  ?>">時給順</a>
                                        </div>
                                        <div class="cast-nav-in-jlp">
                                            <a href="<?php echo home_url( add_query_arg( array(
                                            'job_type' => $_GET['job_type'], 
                                            'district_val' => $_GET['district_val'], 
                                            'job_spec' => $_GET['job_spec'],
                                            'orderby' => 'need_amount'
                                        ), $wp->request ) ); ?>"
                                                class="<?php echo ( $orderby == 'need_amount' ? 'active' : '' )  ?>">募集人数順</a>
                                        </div>
                                        <div class="cast-nav-in-jlp">
                                            <a href="<?php echo home_url( add_query_arg( array(
                                            'job_type' => $_GET['job_type'], 
                                            'district_val' => $_GET['district_val'], 
                                            'job_spec' => $_GET['job_spec'],
                                            'orderby' => 'start_date'
                                        ), $wp->request ) ); ?>"
                                                class="<?php echo ( $orderby == 'start_date' ? 'active' : '' )  ?>">開始日順</a>
                                        </div>
                                    </div>

                                    <div class="job-list-jlp">
                                        <?php if ($the_query->have_posts()): ?>
                                        <?php while ($the_query->have_posts()): $the_query->the_post();?>
                                        <!-- <h2><?php the_field('value') ?></h2> -->
                                        <div class="entry-content">
                                            <?php the_content();?>
                                        </div>
                                        <div class="job-jlp">
                                            <!-- <div class="job-like-jlp"><a href="#" class="active"></a></div> -->
                                            <div class="job-number-jlp">ジョブNo.<?php the_ID(); ?></div>
                                            <div class="job-name-jlp">
                                                <a href="<?php echo get_site_url() ?>/job?id=<?php the_ID(); ?>">
                                                    <?php the_title();?>
                                                </a>
                                            </div>
                                            <div class="job-intro-jlp">
                                                <div class="job-intro-left-jlp">
                                                    <div class="job-intro-tags-jlp">
                                                        <?php 
                                                    $specs = get_field('spec');
                                                    // $specs = explode(',', $spec);
                                                    foreach ($specs as $item) {
                                                        echo '<div>' . $item. '</div>';
                                                    }
                                                    ?>
                                                    </div>
                                                    <div class="job-intro-desc-jlp"><?php the_field('description') ?>
                                                    </div>
                                                </div>
                                                <div class="job-intro-right-jlp">
                                                    <?php 
                                                    $logo = get_field('logo'); 
                                                    if( !empty( $logo ) ): ?>
                                                    <img src="<?php echo esc_url($logo['url']); ?>"
                                                        alt="<?php echo esc_attr($logo['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="job-feature-jlp">
                                                <div class="feature-main-jlp">
                                                    <div class="feature-in-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon1.png"
                                                                    alt="" /></div>
                                                            <div class="feature-in-left-name-jlp">職種</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp">
                                                            <?php the_field('job_title') ?></div>
                                                    </div>
                                                    <div class="feature-in-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon2.png"
                                                                    alt="" /></div>
                                                            <div class="feature-in-left-name-jlp">給与</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp">
                                                            <?php the_field('set_value')?></span></div>
                                                    </div>
                                                </div>
                                                <div class="feature-main-jlp">
                                                    <div class="feature-in-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon3.png"
                                                                    alt="" /></div>
                                                            <div class="feature-in-left-name-jlp">勤務地</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp">
                                                            <?php the_field('addressRegion')?>
                                                            <?php the_field('addressLocality')?>
                                                            <?php the_field('streetAddress')?>

                                                        </div>
                                                    </div>
                                                    <div class="feature-in-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon4.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="feature-in-left-name-jlp">就業期間</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp">
                                                            <?php the_field('validThrough') ?></div>
                                                    </div>
                                                </div>
                                                <div class="feature-main-jlp">
                                                    <div class="feature-in-jlp  feature-in-100-2-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon5.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="feature-in-left-name-jlp">休日</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp"><?php the_field('holiday') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-main-jlp">
                                                    <div class="feature-in-jlp feature-in-100-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon6.png"
                                                                    alt="" /></div>
                                                            <div class="feature-in-left-name-jlp">歓迎する経験・スキル</div>
                                                        </div>
                                                        <div class="feature-in-right-jlp">
                                                            <?php the_field('wanted_techs') ?></div>
                                                    </div>
                                                </div>
                                                <div class="feature-main-jlp environment-jlp">
                                                    <div class="feature-in-jlp feature-in-100-2-jlp">
                                                        <div class="feature-in-left-jlp">
                                                            <div class="feature-in-left-icon-jlp"><img
                                                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon7.png"
                                                                    alt="" /></div>
                                                            <div class="feature-in-left-name-jlp">職場環境</div>
                                                        </div>
                                                    </div>
                                                    <div class="environment-boxes-jlp">
                                                        <div class="environment-box-jlp">
                                                            <div class="environment-box-left-jlp">年齢層</div>
                                                            <div class="environment-box-right-jlp">
                                                                <div class="environment-text-jlp">20代</div>
                                                                <div class="environment-img-jlp">
                                                                    <?php if(get_field('age_percent') > 0 && get_field('age_percent') <= 5 ) {?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('age_percent') ?>.png"
                                                                        alt="" />
                                                                    <?php } else { ?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                        alt="" />
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="environment-text-jlp">60代</div>
                                                            </div>
                                                        </div>
                                                        <div class="environment-box-jlp">
                                                            <div class="environment-box-left-jlp">男女比</div>
                                                            <div class="environment-box-right-jlp">
                                                                <div class="environment-text-jlp">男性<br>多い</div>
                                                                <div class="environment-img-jlp">
                                                                    <?php if(get_field('gender_percent') > 0 && get_field('gender_percent') <= 5 ) {?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('gender_percent') ?>.png"
                                                                        alt="" />
                                                                    <?php } else { ?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                        alt="" />
                                                                    <?php } ?>

                                                                </div>
                                                                <div class="environment-text-jlp">女性<br>多い</div>
                                                            </div>
                                                        </div>
                                                        <div class="environment-box-jlp">
                                                            <div class="environment-box-left-jlp">業務の<br>進め方</div>
                                                            <div class="environment-box-right-jlp">
                                                                <div class="environment-text-jlp">1人で<br>進める</div>
                                                                <div class="environment-img-jlp">
                                                                    <?php if(get_field('office_exec_type') > 0 && get_field('office_exec_type') <= 5 ) {?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('office_exec_type') ?>.png"
                                                                        alt="" />
                                                                    <?php } else { ?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                        alt="" />
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="environment-text-jlp">チームで<br>進める</div>
                                                            </div>
                                                        </div>
                                                        <div class="environment-box-jlp">
                                                            <div class="environment-box-left-jlp">業務の<br>特性</div>
                                                            <div class="environment-box-right-jlp">
                                                                <div class="environment-text-jlp">定型化</div>
                                                                <div class="environment-img-jlp">
                                                                    <?php if(get_field('office_dynamic') > 0 && get_field('office_dynamic') <= 5 ) {?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress_<?php the_field('office_dynamic') ?>.png"
                                                                        alt="" />
                                                                    <?php } else { ?>
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/progress.png"
                                                                        alt="" />
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="environment-text-jlp">変化</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="feature-btns-hp">
                                                    <div class="feature-btn-hp">
                                                        <a href="#" class="common-btn-hp">応募する</a>
                                                    </div>
                                                    <div class="feature-btn-hp">
                                                        <a href="<?php echo get_site_url() ?>/job?id=<?php the_ID(); ?>"
                                                            class="common-btn-hp border-btn-hp">詳しく見る</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile;
                                        wp_reset_postdata();?>
                                        <?php else: ?>
                                        <p></p>
                                        <?php endif;?>

                                    </div>
                                    <div class="pagination-bp">

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
                                            <li class="page-item page-next-item">
                                                <a class="page-link" href="<?php echo get_pagenum_link($page + 1) ?>">
                                                    <i class="fas fa-chevron-right"></i></a>
                                            </li>
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
    <!-- The Modal -->
    <!-- CONTAIN_END -->
</main>
<?php get_footer();
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#search').on('click', function() {
        var url = "<?php  the_permalink();?>?";
        url += 'district_val=' + $('#district_val').val();
        url += '&job_type=' + $('#job_type').val();
        url += '&job_spec=' + $('#job_spec').val();
        url += '&job_keyword=' + $('#job_keyword').val();
        self.location = url;
    });
    $("#job_spec").chosen({
        allow_single_deselect: true
    });
    $('#reset_query').on('click', function() {
        var url = "<?php  the_permalink();?>?";
        url += 'district_vals=' + $('#district_vals').val();
        url += '&district_val=' + $('#district_val').val();
        url += '&job_type=' + $('#job_type').val();
        url += '&job_spec=' + $('#job_spec').val();
        url += '&job_keyword=' + $('#job_keyword').val();
        self.location = url;
    });
    $('#district_vals').on('change', function(){
        // console.log($(this).val())
        var url = "<?php  the_permalink();?>?";
        url += 'district_vals=' + $(this).val();
        // url += '&district_val=' + ;
        url += '&job_type=' + $('#job_type').val();
        url += '&job_spec=' + $('#job_spec').val();
        url += '&job_keyword=' + $('#job_keyword').val();
        self.location = url;
    })
})
</script>