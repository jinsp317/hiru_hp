<?php /* Template Name: Job_entry */?>

<?php 
get_header('no_transparent');
 ?>
<main id="primary" class="site-main">
    <?php get_sidebar('rightbar') ?>

    <?php
    if(isset($_POST['job_no'])) {
        $shugyo = $_POST['shugyo'];
        $kinmuchi = $_POST['kinmuchi'];
        $seinen = isset($_POST['seinen']) ? $_POST['seinen'] : '';
        $name_sei = isset($_POST['name_sei']) ? $_POST['name_sei'] : '';
        $name_mei = isset($_POST['name_mei']) ? $_POST['name_mei'] : '';
        $furigana_sei = isset($_POST['furigana_sei']) ? $_POST['furigana_sei'] : '';
        $furigana_mei = isset($_POST['furigana_mei']) ? $_POST['furigana_mei'] : '';
        $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $job_no = isset($_POST['job_no']) ? $_POST['job_no'] : '';
        // $s_kana = isset($_POST['s_kana']) ? $_POST['s_kana'] : '';
        // $s_year = isset($_POST['s_year']) ? $_POST['s_year'] : '';
        // $s_month = isset($_POST['s_month']) ? $_POST['s_month'] : '';
        // $s_day = isset($_POST['s_day']) ? $_POST['s_day'] : '';
        // $s_gender = isset($_POST['s_gender']) ? $_POST['s_gender'] : '';
        // $s_address = isset($_POST['s_address']) ? $_POST['s_address'] : '';
        // $s_phone = isset($_POST['s_phone']) ? $_POST['s_phone'] : '';
        // $s_email = isset($_POST['s_email']) ? $_POST['s_email'] : '';
        // $s_history = isset($_POST['s_history']) ? $_POST['s_history'] : '';
        // $s_content = isset($_POST['s_content']) ? $_POST['s_content'] : '';
        // $s_agree = isset($_POST['s_agree']) ? $_POST['s_agree'] : '';
        // $s_comment = isset($_POST['s_comment']) ? $_POST['s_comment'] : '';
        $to      = 'jinsp317@163.com';
    
        $message = "
        経験のある仕事 : ". join(',', $shugyo)."<br />
        希望勤務地 : ". join(',', $kinmuchi)."<br />
        生まれた年 : ".$seinen."<br />
        姓 : ".$name_sei."<br />
        名 : ".$name_mei."<br />
        セイ : ".$furigana_sei."<br />
        メイ : ".$furigana_mei."<br />
        携帯番号 : ".$tel."<br />
        ジョブNo : ".$job_no."<br />";
       
        $subject = 'RegisterData';
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        // echo $message;
        if(mail($to, $subject, $message, $headers)) {
            echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
        } else {
            echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
        }   
    }

        $id = $_GET['id'];
        $args = array(
            'post_type' => 'job',
            'post_status' => 'publish',
            'p' => $id,
            // 'posts_per_page' => 8,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()): 
            $loop->the_post(); ?>
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
                                            <li class="breadcrumb-item"><a
                                                    href="<?php echo get_site_url() ?>/job_list"><?php the_field('addressRegion') ?>のお仕事情報</a>
                                            </li>
                                            <li class="breadcrumb-item">ジョブNo.A00392014</li>
                                            <li class="breadcrumb-item active">お仕事応募</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>お仕事応募</h2>
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
                                <div class="entry-title-jep">応募するお仕事</div>
                                <div class="job-jlp">
                                    <div class="job-like-jlp"><a href="#" class="active"></a></div>
                                    <div class="job-number-jlp">ジョブNo.<?php the_ID();?></div>
                                    <div class="feature-main-jlp">
                                        <div class="feature-in-jlp feature-in-jep">
                                            <div class="feature-in-left-jlp">
                                                <div class="feature-in-left-icon-jlp"><img
                                                        src="images/features_icon13.png" alt=""></div>
                                                <div class="feature-in-left-name-jlp">会社名</div>
                                            </div>
                                            <div class="feature-in-right-jlp"><?php the_field('company_name') ?></div>
                                        </div>
                                    </div>
                                    <div class="job-details-jep">
                                        <div class="job-entry-left-jep">
                                            <div class="job-name-jlp">
                                                <a href="#">
                                                    <?php  the_field('job_title') ?>
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
                                                    <div class="job-intro-desc-jlp">
                                                        <?php the_field('description') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-entry-right-jep">
                                            <?php 											
                                                $logo = get_field('logo'); 
                                            if( !empty( $logo ) ): ?>
                                            <img src="<?php echo esc_url($logo['url']); ?>"
                                                alt="<?php echo esc_attr($logo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="job-feature-jep">
                                        <div class="feature-main-jlp">
                                            <div class="feature-in-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="images/job_icon1.png" alt=""></div>
                                                    <div class="feature-in-left-name-jlp">職種</div>
                                                </div>
                                                <div class="feature-in-right-jlp">
                                                    <?php the_field('job_code_1') ?>
                                                    <?php the_field('job_code_2') ?>
                                                    <?php the_field('job_code_3') ?>
                                                    <?php the_field('job_code_4') ?>
                                                    <?php the_field('job_code_5') ?>
                                                    <?php the_field('job_code_6') ?>
                                                    <?php the_field('job_code_7') ?>
                                                    <?php the_field('job_code_8') ?>
                                                    <?php the_field('job_code_9') ?>
                                                    <?php the_field('job_code_10') ?>
                                                </div>
                                            </div>
                                            <div class="feature-in-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon2.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">給与</div>
                                                </div>
                                                <div class="feature-in-right-jlp">1,200円～
                                                    交通費支給あり<br><span>見込み月収：194,700円（残業代を含む）</span></div>
                                            </div>
                                        </div>
                                        <div class="feature-main-jlp">
                                            <div class="feature-in-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon3.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">勤務地</div>
                                                </div>
                                                <div class="feature-in-right-jlp">
                                                    <?php the_field('addressRegion') ?>
                                                    <?php the_field('addressLocality') ?>
                                                    <?php the_field('streetAddress') ?>
                                                </div>
                                            </div>
                                            <div class="feature-in-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon4.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">就業期間</div>
                                                </div>
                                                <div class="feature-in-right-jlp"><?php the_field('validThrough') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-main-jlp">
                                            <div class="feature-in-jlp  feature-in-100-2-jlp">
                                                <div class="feature-in-left-jlp">
                                                    <div class="feature-in-left-icon-jlp"><img
                                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/job_icon5.png"
                                                            alt=""></div>
                                                    <div class="feature-in-left-name-jlp">休日</div>
                                                </div>
                                                <div class="feature-in-right-jlp">
                                                    <?php the_field('holiday') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="registered-banner-jep"
                                style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/registered_banner.png) no-repeat center center; background-size:cover;">
                                <div class="registered-banner-overlay-jep">
                                    <div class="registered-details-jep">
                                        <h2>Hiru Navi</h2>
                                        <p>登録がお済みでない方</p>
                                        <div class="registered-btn-jep">
                                            <a href="<?php echo get_site_url() ?>/registration_form"
                                                class="common-btn-hp">昼ナビに登録する</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="signup-jep">
                                <form id="regFrm" method="POST" action="">
                                    <input type="hidden" name="job_no" value="<?php the_ID();?>" />
                                    <div class="signup-in-jep">
                                        <div class="signup-title-jep">
                                            <h2><span>S</span>ign up</h2>
                                            <p>登録する</p>
                                        </div>
                                        <div class="signup-number-jep">ジョブNo.<?php the_ID();?></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-block-in-hp">
                                        <div class="form-middle-hp">
                                            <div class="form-middle-main-hp">
                                                <div class="form-middle-main-border-hp">
                                                    <div class="steps-hp">
                                                        <div class="step-hp step-1-hp active">1
                                                            <br><span>就業状況</span>
                                                        </div>
                                                        <div class="step-hp step-2-hp">2
                                                            <br><span>生年月日</span>
                                                        </div>
                                                        <div class="step-hp step-3-hp">3
                                                            <br><span>希望勤務地</span>
                                                        </div>
                                                        <div class="step-hp step-4-hp">4
                                                            <br><span>お名前</span>
                                                        </div>
                                                        <div class="step-hp step-5-hp">5
                                                            <br><span>連絡先</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-boxes-hp">
                                                        <div class="form-boxes-in-hp form-boxes-1-hp">
                                                            <div class="form-number-hp">
                                                                <span>Q1</span>
                                                            </div>
                                                            <div class="form-title-hp">
                                                                <h2>経験のある仕事を<br>教えてください<span>（複数選択可）</span>
                                                                </h2>
                                                            </div>
                                                            <div class="form-option-hp">
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="girls"
                                                                        class="q1" value="ガールズバー">
                                                                    <label for="girls" class="">ガールズバー</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="caba"
                                                                        class="q1" value="キャバクラ">
                                                                    <label for="caba" class="">キャバクラ</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="rounge"
                                                                        class="q1" value="ラウンジ">
                                                                    <label for="rounge" class="">ラウンジ</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="snack"
                                                                        class="q1" value="スナック">
                                                                    <label for="snack" class="">スナック</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="mens"
                                                                        class="q1" value="メンズエステ">
                                                                    <label for="mens" class="">メンズエステ</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="fuzoku"
                                                                        class="q1" value="風俗">
                                                                    <label for="fuzoku" class="">風俗</label>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="shugyo[]" id="other"
                                                                        class="q1" value="その他">
                                                                    <label for="other" class="">その他</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-btn-main-hp">
                                                                <button type="submit"
                                                                    class="common-btn-hp form-btn-hp submit_btn_1"
                                                                    disabled>次のステップへ</button>
                                                            </div>
                                                            <div class="guidance-hp">
                                                                <p class="comment">
                                                                    <span>まずは<br>最初のステップ！</span>
                                                                </p>
                                                                <div class="staff"><img
                                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-boxes-in-hp form-boxes-2-hp"
                                                            style="display:none;">
                                                            <div class="form-number-hp">
                                                                <span>Q2</span>
                                                            </div>
                                                            <div class="form-title-hp">
                                                                <h2>生まれた年を入力してください</h2>
                                                            </div>
                                                            <div class="form-option-hp form-option-2-hp">
                                                                <div class="form-hp form-2-hp">
                                                                    <p class="year">西暦</p>
                                                                    <div class="detail"><input required="" type="text"
                                                                            name="seinen" placeholder="生まれた年" value="">
                                                                    </div>
                                                                    <p class="year">年</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-btn-main-hp">
                                                                <button type="submit"
                                                                    class="common-btn-hp form-btn-hp submit_btn_2"
                                                                    disabled>次のステップへ</button>
                                                            </div>
                                                            <div class="back-hp">
                                                                <input type="button" class="back_btn back_btn_2"
                                                                    value="戻って修正する">
                                                            </div>
                                                            <div class="guidance-hp">
                                                                <p class="comment">
                                                                    <span>生まれた年を<br>ご記入ください</span>
                                                                </p>
                                                                <div class="staff"><img
                                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-boxes-in-hp form-boxes-3-hp"
                                                            style="display:none;">
                                                            <div class="form-number-hp">
                                                                <span>Q3</span>
                                                            </div>
                                                            <div class="form-title-hp">
                                                                <h2>希望勤務地はどこですか？</h2>
                                                            </div>
                                                            <div class="form-option-hp form-option-3-hp">
                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="tokyo" value="東京">
                                                                    <label for="tokyo">東京</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="kanagawa" value="神奈川">
                                                                    <label for="kanagawa">神奈川</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="chiba" value="千葉">
                                                                    <label for="chiba">千葉</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="saitama" value="埼玉">
                                                                    <label for="saitama">埼玉</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="osaka" value="大阪">
                                                                    <label for="osaka">大阪</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="kyoto" value="京都">
                                                                    <label for="kyoto">京都</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="hyogo" value="兵庫">
                                                                    <label for="hyogo">兵庫</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="nara" value="奈良">
                                                                    <label for="nara">奈良</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="fukuoka" value="福岡">
                                                                    <label for="fukuoka">福岡</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="aichi" value="愛知">
                                                                    <label for="aichi">愛知</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="sapporo" value="札幌">
                                                                    <label for="sapporo">札幌</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="miyagi" value="宮城">
                                                                    <label for="miyagi">宮城</label>
                                                                </div>
                                                                <!--form-->

                                                                <div class="form-hp">
                                                                    <input type="checkbox" name="kinmuchi[]" class="q3"
                                                                        id="all" value="全国">
                                                                    <label for="all">全国</label>
                                                                </div>
                                                                <!--form-->
                                                            </div>
                                                            <div class="form-btn-main-hp">
                                                                <button type="submit"
                                                                    class="common-btn-hp form-btn-hp submit_btn_3"
                                                                    disabled>次のステップへ</button>
                                                            </div>
                                                            <div class="back-hp">
                                                                <input type="button" class="back_btn back_btn_3"
                                                                    value="戻って修正する">
                                                            </div>
                                                            <div class="guidance-hp">
                                                                <p class="comment">
                                                                    <span>ご希望の勤務地を<br>教えてください</span>
                                                                </p>
                                                                <div class="staff"><img
                                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-boxes-in-hp form-boxes-4-hp"
                                                            style="display:none;">
                                                            <div class="form-number-hp">
                                                                <span>Q4</span>
                                                            </div>
                                                            <div class="form-title-hp">
                                                                <h2>お名前とフリガナを教えてください</h2>
                                                            </div>
                                                            <div class="form-option-hp form-option-4-hp">
                                                                <div class="form-hp">
                                                                    <p class="item">お名前</p>
                                                                    <div class="detail">
                                                                        <input required="" type="text" class="name1"
                                                                            name="name_sei" placeholder="姓" value="">
                                                                        <input type="text" class="name1" name="name_mei"
                                                                            placeholder="名" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-hp">
                                                                    <p class="item">フリガナ</p>
                                                                    <div class="detail">
                                                                        <input required="" type="text" class="name2"
                                                                            name="furigana_sei" placeholder="セイ"
                                                                            value="" disabled="">
                                                                        <input type="text" class="name2"
                                                                            name="furigana_mei" placeholder="メイ"
                                                                            value="" disabled="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-btn-main-hp">
                                                                <button type="submit"
                                                                    class="common-btn-hp form-btn-hp submit_btn_4"
                                                                    disabled>次のステップへ</button>
                                                            </div>
                                                            <div class="back-hp">
                                                                <input type="button" class="back_btn back_btn_4"
                                                                    value="次のステップへ">
                                                            </div>
                                                            <div class="guidance-hp">
                                                                <p class="comment"><span>あと一息です！</span>
                                                                </p>
                                                                <div class="staff"><img
                                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-boxes-in-hp form-boxes-5-hp"
                                                            style="display:none;">
                                                            <div class="form-number-hp">
                                                                <span>Q5</span>
                                                            </div>
                                                            <div class="form-title-hp">
                                                                <h2>優良企業を紹介するための<br>連絡先を教えてください</h2>
                                                            </div>
                                                            <div
                                                                class="form-option-hp form-option-4-hp form-option-5-hp">
                                                                <div class="form-hp">
                                                                    <p class="item">携帯番号</p>
                                                                    <div class="detail"><input required="" type="tel"
                                                                            class="tel" name="tel"
                                                                            placeholder="000-0000-0000" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-hp form-email-hp">
                                                                    <p class="item">メールアドレス</p>
                                                                    <div class="detail">
                                                                        <input required="" type="email" class="email"
                                                                            name="email" placeholder="xxx@xxx.xxx"
                                                                            value="" disabled="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-btn-main-hp">
                                                                <button type="submit"
                                                                    class="common-btn-hp form-btn-hp submit_btn_5"
                                                                    disabled>確認する</button>
                                                            </div>
                                                            <div class="back-hp">
                                                                <input type="button" class="back_btn back_btn_5"
                                                                    value="戻って修正する">
                                                            </div>
                                                            <div class="guidance-hp">
                                                                <p class="comment">
                                                                    <span>これが<br>最後の質問です！</span>
                                                                </p>
                                                                <div class="staff">
                                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                            </div>
                            </form>
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
    <?php
        endwhile;
        // print_r(get_post_meta(71));
        // echo "<br>";
        // echo get_post_meta(71, 'company_name', true);
        ?>
    <!-- CONTAIN_END -->
</main>
<?php get_footer(); ?>
<script type="text/javascript">
const to = "<?php echo get_bloginfo('admin_email') ?>";
$(document).ready(function() {
    $(function() {
        $(".submit_btn_1").prop("disabled", true);
        $(".q1").click(function() {
            submitCheck();
        });
        submitCheck();

        function submitCheck() {
            if ($('input[name=\'shugyo[]\']:checked').length == 0) {
                $(".submit_btn_1").prop("disabled", true);
            } else {
                $(".submit_btn_1").prop("disabled", false);
            }
        }
        $(".submit_btn_1").click(function() {
            $(".form-boxes-1-hp").css("display", "none");
            $(".form-boxes-2-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-2-hp").addClass("active");
        });
    });

    /*--2--*/
    $(function() {
        $(".submit_btn_2").prop("disabled", true);

        $('.form-option-2-hp input:required').keyup(function() {
            submitCheck_2();
        });
        submitCheck_2();

        function submitCheck_2() {
            let flag = true;
            $('.form-option-2-hp input:required').each(function(e) {
                if ($('.form-option-2-hp input:required').eq(e).val() === "") {
                    flag = false;
                }
            });
            if (flag) {
                $('.submit_btn_2').prop("disabled", false);
            } else {
                $('.submit_btn_2').prop("disabled", true);
            }
        }

        $(".submit_btn_2").click(function() {
            $(".form-boxes-2-hp").css("display", "none");
            $(".form-boxes-3-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-3-hp").addClass("active");
        });

        $(".back_btn_2").click(function() {
            $(".form-boxes-2-hp").css("display", "none");
            $(".form-boxes-1-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-1-hp").addClass("active");
        });
    });

    /*--3--*/
    $(function() {
        $(".submit_btn_3").prop("disabled", true);
        $(".q3").click(function() {
            submitCheck_3();
        });
        submitCheck_3();

        function submitCheck_3() {
            if ($('input[name=\'kinmuchi[]\']:checked').length == 0) {
                $(".submit_btn_3").prop("disabled", true);
            } else {
                $(".submit_btn_3").prop("disabled", false);
            }
        }

        $(".submit_btn_3").click(function() {
            $(".form-boxes-3-hp").css("display", "none");
            $(".form-boxes-4-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-4-hp").addClass("active");
        });

        $(".back_btn_3").click(function() {
            $(".form-boxes-3-hp").css("display", "none");
            $(".form-boxes-2-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-2-hp").addClass("active");
        });
    });

    /*--4--*/
    $(function() {
        $(".submit_btn_4").prop("disabled", true);
        $(".name2").prop("disabled", true);

        $('.name1').keyup(function() {
            name1Check();
        });

        $('.name2').keyup(function() {
            name2Check();
        });
        name1Check();
        name2Check();

        function name1Check() {
            let flag = true;
            $('.name1').each(function(e) {
                if ($('.name1').eq(e).val() === "") {
                    flag = false;
                }
            });
            if (flag) {
                $('.name2').prop("disabled", false);
            } else {
                $('.name2').prop("disabled", true);
            }
        }

        function name2Check() {
            let flag = true;
            $('.name2').each(function(e) {
                if ($('.name2').eq(e).val() === "") {
                    flag = false;
                }
            });
            if (flag) {
                $('.submit_btn_4').prop("disabled", false);
            } else {
                $('.submit_btn_4').prop("disabled", true);
            }
        }

        $(".submit_btn_4").click(function() {
            $(".form-boxes-4-hp").css("display", "none");
            $(".form-boxes-5-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-5-hp").addClass("active");
        });

        $(".back_btn_4").click(function() {
            $(".form-boxes-4-hp").css("display", "none");
            $(".form-boxes-3-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-3-hp").addClass("active");
        });
    });

    /*--5--*/
    $(function() {
        $(".submit_btn_5").prop("disabled", true);
        $(".email").prop("disabled", true);

        $('.tel').keyup(function() {
            telCheck();
        });

        $('.email').keyup(function() {
            emailCheck();
        });
        telCheck();
        emailCheck();

        function telCheck() {
            let flag = true;
            $('.tel').each(function(e) {
                if ($('.tel').eq(e).val() === "") {
                    flag = false;
                }
            });
            if (flag) {
                $('.email').prop("disabled", false);
            } else {
                $('.email').prop("disabled", true);
            }
        }

        function emailCheck() {
            let flag = true;
            $('.email').each(function(e) {
                if ($('.email').eq(e).val() === "") {
                    flag = false;
                }
            });
            if (flag) {
                $('.submit_btn_5').prop("disabled", false);
            } else {
                $('.submit_btn_5').prop("disabled", true);
            }
        }
        $('.submit_btn_5').on('click', function(e) {
            $('#reservation').submit();
        })
        $(".back_btn_5").click(function() {
            $(".form-boxes-5-hp").css("display", "none");
            $(".form-boxes-4-hp").fadeIn();
            $(".step-hp").removeClass("active");
            $(".step-4-hp").addClass("active");
        });
    });
})
</script>