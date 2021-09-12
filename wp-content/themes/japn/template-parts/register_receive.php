<?php /* Template Name: Register_receive */?>
<?php 
if(isset($_POST['contact_kind'])) {
    $shugyo = $_POST['shugyo'];
    $kinmuchi = $_POST['kinmuchi'];
    $seinen = isset($_POST['seinen']) ? $_POST['seinen'] : '';
    $name_sei = isset($_POST['name_sei']) ? $_POST['name_sei'] : '';
    $name_mei = isset($_POST['name_mei']) ? $_POST['name_mei'] : '';
    $furigana_sei = isset($_POST['furigana_sei']) ? $_POST['furigana_sei'] : '';
    $furigana_mei = isset($_POST['furigana_mei']) ? $_POST['furigana_mei'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
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
    $to      = 'agent@rc-group.co.jp';

    $message = "
    経験のある仕事 : ". join(',', $shugyo)."<br />
    希望勤務地 : ". join(',', $kinmuchi)."<br />
    生まれた年 : ".$seinen."<br />
    姓 : ".$name_sei."<br />
    名 : ".$name_mei."<br />
    セイ : ".$furigana_sei."<br />
    メイ : ".$furigana_mei."<br />
    携帯番号 : ".$tel."<br />
    携帯番号 : ".$tel."<br />";
   
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
 ?>
<?php
get_header('no_transparent');
?>
<main id="primary" class="site-main">
    <!-- CONTAIN_START -->
    <section id="contain">
        <?php get_sidebar('rightbar') ?>
        <div class="about-block-ip interview-block-op">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 offset-md-2 col-lg-8 col-md-8 col-sm-8 col-xs-12 form-block-in-hp">
                        <div class="form-middle-hp">
                            <div class="form-middle-main-hp">
                                <div class="form-middle-main-border-hp text-center py-3">
                                    <h3>送信完了</h3>
                                    <p class="mt-3">
                                        昼ナビへのエントリーを受け付けました。<br />
                                        確認メールをお送りさせていただいております。<br />
                                        内容確認後、担当者よりご連絡させていただきます。
                                    </p>
                                    <p class="mt-5 text-danger">
                                        自動返信メールが届かない場合は、<br />
                                        フォーム内容が送信出来ていない可能性がございます。<br />
                                        お手数をおかけいたしますが、再度ご入力いただくか、<br />
                                        直接お電話にてお問い合わせください。
                                    </p>
                                </div>
                                <div class="guidance-hp">
                                    <p class="comment">
                                        <span>生まれた年を<br>ご記入ください</span>
                                    </p>
                                    <div class="staff"><img
                                            src="<?php echo get_stylesheet_directory_uri(); ?>/images/staff.png" alt="">
                                    </div>
                                </div>>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="inner-page-main-ip">
            <div class="company-block-hp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company-block-in-hp">
                            <div class="company-middle-hp">
                                <div class="company-middle-in-hp">
                                    <div class="company-img-hp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"
                                            alt="" />
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

        </div>
    </section>
    <!-- CONTAIN_END -->

</main>
<?php get_footer();
?>