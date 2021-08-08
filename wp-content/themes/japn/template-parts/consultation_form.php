<?php /* Template Name: Consultation_form */?>

<?php
get_header('no_transparent');
?>
<?php 
if(isset($_POST['contact-option'])) {
    $s_name = isset($_POST['s_name']) ? $_POST['s_name'] : '';
    $s_kana = isset($_POST['s_kana']) ? $_POST['s_kana'] : '';
    $s_year = isset($_POST['s_year']) ? $_POST['s_year'] : '';
    $s_month = isset($_POST['s_month']) ? $_POST['s_month'] : '';
    $s_day = isset($_POST['s_day']) ? $_POST['s_day'] : '';
    $s_gender = isset($_POST['s_gender']) ? $_POST['s_gender'] : '';
    $s_address = isset($_POST['s_address']) ? $_POST['s_address'] : '';
    $s_phone = isset($_POST['s_phone']) ? $_POST['s_phone'] : '';
    $s_email = isset($_POST['s_email']) ? $_POST['s_email'] : '';
    $s_content = isset($_POST['s_content']) ? $_POST['s_content'] : '';
    $s_agree = isset($_POST['s_agree']) ? $_POST['s_agree'] : '';
    $to      = 'jinsp317@163.com';

    $message = "
    氏名 : ".$s_name."<br />
    カナ : ".$s_kana."<br />
    生年月日 : ".$s_year."-" . $s_month . "-" .  $s_day . "<br />
    性別 : ".($s_gender == 1 ? '女性' : '男性') ."<br>
    住所 : ".$s_address."<br />
    電話番号 : ".$s_phone."<br />
    メールアドレス : ".$s_email."<br />
    相談内容 : ".$s_content."<br />
    ";
    $subject = 'ConsultData';
    $headers = "From: " . $s_email . "\r\n";
    $headers .= "Reply-To: " . $s_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if(mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    } else {
        echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    }   
}

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
                                            <li class="breadcrumb-item active">相談する</li>
                                        </ol>
                                    </div>
                                    <div class="inner-title-ip">
                                        <h2>相談する</h2>
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
                            <form method="POST" action="" id="cosultFrm">
                                <div class="signup-jep signup-cfp">
                                    <div class="signup-in-jep">
                                        <div class="signup-title-jep">
                                            <h2><span>C</span>onsultation</h2>
                                            <p>相談する</p>
                                        </div>
                                        <div class="signup-number-jep">
                                            当社のお仕事情報にご興味をお待ちいただきありがとうございます。<br>
                                            お仕事に関するご相談やお問い合わせは、下記フォームをご入力の上、ご連絡ください。<br>
                                            確認後、 担当スタッフより折り返しご連絡させていただきます。<br>
                                            下記の「個人情報の取扱いについて」に同意の上、ご入力ください。<br>
                                            求職者様からいただく「よくあるご質問」はこちらよりご確認いただけます。
                                        </div>
                                        <div class="signup-form-jep">
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> 氏名</div>
                                                <div class="form-field-input-cop"><input type="text" name="s_name"
                                                        placeholder="例：昼　花子" /></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> カナ</div>
                                                <div class="form-field-input-cop"><input type="text" name="s_kana"
                                                        placeholder="例：ヒル　ハナコ" /></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> 生年月日</div>
                                                <div class="form-field-input-cop">
                                                    <div class="form-field-select-cop">
                                                        <div class="select-cop">
                                                            <select class="custom-select" name="s_year">
                                                                <?php for($i = 1950; $i < date('Y') - 13; $i ++) { ?>
                                                                <option value="<?php echo $i; ?>"><?php echo $i ?>
                                                                </option>
                                                                <?php } ?>
                                                            </select>
                                                            <div class="select-text-cop">年</div>
                                                        </div>
                                                        <div class="select-cop">
                                                            <select class="custom-select" name="s_month">
                                                                <?php for($i = 1; $i <= 12 ; $i++) {?>
                                                                <option value="<?php echo $i ?>"><?php echo $i; ?>
                                                                </option>
                                                                <?php } ?>
                                                            </select>
                                                            <div class="select-text-cop">月</div>
                                                        </div>
                                                        <div class="select-cop">
                                                            <select class="custom-select" name="s_day">
                                                                <?php for($i = 1; $i < 32; $i++) { ?>
                                                                <option value="<?php echo $i ?>"><?php echo $i ?>
                                                                </option>

                                                                <?php } ?>
                                                            </select>
                                                            <div class="select-text-cop">日</div>
                                                        </div>
                                                        <div class="select-days-cop">（30歳）</div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> 性別</div>
                                                <div class="form-field-input-cop">
                                                    <div class="form-radio-cop">
                                                        <div class="form-field-radio-cop">
                                                            <label class="radio-container-cop">女性
                                                                <input type="radio" checked="checked" value="1"
                                                                    name="s_gender">
                                                                <span class="checkmark-cop"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-radio-cop">
                                                        <div class="form-field-radio-cop">
                                                            <label class="radio-container-cop">男性
                                                                <input type="radio" checked="checked" value="2"
                                                                    name="s_gender">
                                                                <span class="checkmark-cop"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> 住所</div>
                                                <div class="form-field-input-cop"><input type="text" name="s_address"
                                                        placeholder="例：XXX県XX市XX町1234" /></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> 電話番号</div>
                                                <div class="form-field-input-cop"><input type="text" name="s_phone"
                                                        placeholder="例：09012345678" /></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span> メールアドレス</div>
                                                <div class="form-field-input-cop"><input type="text" name="s_email"
                                                        placeholder="例：sample@hirunavi.com" /></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-cop">
                                                <div class="form-field-lable-cop form-field-label-top-cop">
                                                    <span>必須</span> 相談内容
                                                </div>
                                                <div class="form-field-input-cop"><textarea placeholder="入力してください"
                                                        name="s_content"></textarea></div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-field-radio-main-cop">
                                                <div class="form-field-radio-cop">
                                                    <label class="radio-container-cop">
                                                        <a href="<?php echo get_site_url()?>/privacy_policy">個人情報の取扱いについて同意して登録する</a>
                                                        <input type="checkbox" name="s_agree">
                                                        <span class="checkmark-cop"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-btn-cop">
                                                <button id="regBtn" name="contact-option"
                                                    class="common-btn-hp">送信内容を確認する</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <!-- CONTAIN_END -->

</main>
<?php get_footer();
?>
<script type="text/javascript">
const to = "<?php echo get_bloginfo('admin_email') ?>";
$(document).ready(function() {
    $('#cosultFrm').validate({
        rules: {
            s_name: {
                required: true
            },
            s_kana: {
                required: true
            },
            s_year: {
                required: true
            },
            s_month: {
                required: true
            },
            s_day: {
                required: true
            },
            s_address: {
                required: true
            },
            s_phone: {
                required: true
            },
            s_email: {
                required: true,
                email: true
            },
            s_content: {
                required: true
            }

        }
    });
    $('#regBtn').on('click', function() {
        if ($('#cosultFrm').validate()) {
            console.log('object')
        } else {
            // console.log('error')
        }
    })
})
</script>