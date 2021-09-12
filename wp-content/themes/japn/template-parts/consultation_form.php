<?php /* Template Name: Consultation_form */ ?>

<?php
get_header('no_transparent');
?>
<?php
$send_flag = false;
if (isset($_POST['contact_flag'])) {
    $s_name = isset($_POST['s_name']) ? $_POST['s_name'] : '';
    $s_kana = isset($_POST['s_kana']) ? $_POST['s_kana'] : '';
    $district_val = isset($_POST['district_val']) ? $_POST['district_val'] : '';

    $s_phone = isset($_POST['s_phone']) ? $_POST['s_phone'] : '';
    $s_email = isset($_POST['s_email']) ? $_POST['s_email'] : '';
    $detail_ch = $_POST['detail_ch'];
    $s_content = isset($_POST['s_content']) ? $_POST['s_content'] : '';
    $s_agree = isset($_POST['s_agree']) ? $_POST['s_agree'] : '';
    $to      = 'agent@rc-group.co.jp';
    $subject = '昼ナビのサイトよりご相談の依頼がありました。';
    $time = date('Y-m-d H:i:s');
    $message = "
    昼ナビのサイトからの送信です。<br/>
    ご対応をお願いいたします。<br />
    ---------------------------------------------------------------- <br />
    氏名 : " . $s_name . "<br />
    カナ : " . $s_kana . "<br />    
    電話番号 : " . $s_phone . "<br />
    希望勤務地 : " . $district_val . "<br />    
    メールアドレス : " . $s_email . "<br />
    相談内容 : " . join(',', $detail_ch) . "<br />
    相談内容（詳細） : " . $s_content . "<br />
    ---------------------------------------------------------------- <br />
    送信時刻　　　　：" . $time . " <br />
    送信者情報 ：" . $s_email . " <br />
    ";
    $headers = "From: " . $s_email . "\r\n";
    $headers .= "Reply-To: " . $s_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    // if(mail($to, $subject, $message, $headers)) {
    mail($to, $subject, $message, $headers);
    //     echo '<script>alert("Success!"); location.href="'.home_url().'"</script>';
    // } else {
    //     echo '<script>alert("Failed!"); location.href="'.home_url().'"</script>';
    // }   

    $headers = "From: " . $to . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $subject = "ご相談のご連絡ありがとうございます。";
    $message = "
    この度は、昼ナビにご相談のご依頼をいただき <br />
    ありがとうございます。<br />

    以下の内容にて、ご登録を受け付けましたので <br />
    ご確認くださいませ。<br />
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ <br />
    氏名 : " . $s_name . "<br />
    カナ : " . $s_kana . "<br />    
    電話番号 : " . $s_phone . "<br />
    メールアドレス : " . $s_email . "<br />
    希望勤務地 : " . $district_val . "<br />        
    相談内容 : " . join(',', $detail_ch) . "<br />
    相談内容（詳細） : " . $s_content . "<br />
    ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ <br />
    内容を確認させていただいた上で、専任の担当よりご連絡をいたします。<br />
    以下の電話番号にてご連絡をいたしますので、ご連絡があった際は <br />
    お手数ではございますが、ご対応のほどよろしくお願い申し上げます。 <br />
    休日・祝日等をのぞき、2営業日以内にご連絡をいたしますので <br />
    もし、連絡がなかった場合はご一報をいただけますと幸いです。<br />
    ★*…ーーーーー…*★ <br />
    昼ナビ 運営事務局 <br />
    TEL :0120-560-562 <br />
    　　 03-4405-3120 <br />
    <br />
    ★*…ーーーーー…*★ <br />
    ";
    mail($s_email, $subject, $message, $headers);
    $send_flag = true;
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
                                            <li class="breadcrumb-item"><a
                                                    href="<?php echo get_site_url() ?>">昼ナビTOP</a></li>
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
                                <input type="hidden" name="contact_flag" value="1" />
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
                                            <?php if(!$send_flag) : ?>
                                            <div class="edit_form" id="edit_frm">
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
                                                    <div class="form-field-lable-cop">希望勤務地</div>
                                                    <div class="form-field-input-cop">
                                                        <select class="custom-select" name="district_val"
                                                            id="district_val">
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
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-field-cop">
                                                    <div class="form-field-lable-cop form-field-label-top-cop">
                                                        相談内容
                                                    </div>
                                                    <div class="form-field-input-cop form-inline ">
                                                        <div class="form-check" style="justify-content:left;">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="detail_ch[]"
                                                                    value="求人を紹介してほしい" />求人を紹介してほしい</label>
                                                        </div>
                                                        <div class="form-check mt-1" style="justify-content:left;">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="detail_ch[]"
                                                                    value="お昼の仕事について教えてほしい" />お昼の仕事について教えてほしい</label>
                                                        </div>
                                                        <div class="form-check mt-1" style="justify-content:left;">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="detail_ch[]"
                                                                    value="適職を提案してほしい" />適職を提案してほしい</label>
                                                        </div>
                                                        <div class="form-check mt-1" style="justify-content:left;">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="detail_ch[]"
                                                                    value="履歴書の書き方を教えてほしい" />履歴書の書き方を教えてほしい</label>
                                                        </div>
                                                        <div class="form-check mt-1" style="justify-content:left;">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="detail_ch[]" value="その他" />その他</label>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-field-cop">
                                                    <div class="form-field-lable-cop form-field-label-top-cop">
                                                        相談内容（詳細）
                                                    </div>
                                                    <div class="form-field-input-cop"><textarea placeholder="入力してください"
                                                            name="s_content"></textarea></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-field-radio-main-cop">
                                                    <div class="form-field-radio-cop">
                                                        <label class="radio-container-cop">
                                                            <a
                                                                href="<?php echo get_site_url() ?>/privacy_policy">個人情報の取扱いについて同意して登録する</a>
                                                            <input type="checkbox" name="s_agree">
                                                            <span class="checkmark-cop"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-btn-cop">
                                                    <button id="regBtn" name="contact-option" type="button"
                                                        class="common-btn-hp">送信内容を確認する</button>
                                                </div>
                                            </div>                                            
                                            <div id="confirm_frm"
                                                class="confirm_form border border-light form-middle-main-hp rounded-sm p-2 d-none">
                                                <div class="form-boxes-in-hp">
                                                    <p class="check_p4 text-center h1">CHECK</p>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">氏名：</div>
                                                            <div class="col" id="name_i"></div>
                                                        </div>
                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">カナ：</div>
                                                            <div class="col" id="name_s"></div>
                                                        </div>
                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">電話番号：</div>
                                                            <div class="col" id="name_phone"></div>
                                                        </div>
                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">メールアドレス：</div>
                                                            <div class="col" id="name_email"></div>
                                                        </div>

                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">希望勤務地：</div>
                                                            <div class="col" id="name_district"></div>
                                                        </div>

                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">相談内容：</div>
                                                            <div class="col" id="name_content_kind"></div>
                                                        </div>

                                                    </div>
                                                    <div class="forms container mt-2">
                                                        <div class="form-row form-item">
                                                            <div class="col-3 text-muted">相談内容（詳細）：</div>
                                                            <div class="col" id="name_content_detail"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-btn-main-hp mt-5 d-flex justify-content-around">
                                                        <input type="button" class="back_btn back_btn_4" id="back_btn"
                                                            value="戻って修正する" />
                                                        <button type="button" class="common-btn-hp "
                                                            id="send_btn">送信する</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php else : ?>
                                            <div class="form-boxes-in-hp border border-light rounded-sm form-boxes-7-hp text-center form-middle-main-hp">
                                                <h2 class="text-center">送信完了</h2>
                                                <div class="forms container mt-2">
                                                    <p class="py-4 h5">
                                                        昼ナビへのエントリーを受け付けました。<br />
                                                        確認メールをお送りさせていただいております。<br />
                                                        内容確認後、担当者よりご連絡させていただきます。<br />
                                                    </p>
                                                    <p class="text-danger py-4">
                                                        自動返信メールが届かない場合は、<br />
                                                        フォーム内容が送信出来ていない可能性がございます。<br />
                                                        お手数をおかけいたしますが、再度ご入力いただくか、<br />
                                                        直接お電話にてお問い合わせください。<br />
                                                    </p>
                                                </div>
                                                <div class="form-btn-main-hp">
                                                    <button type="button"
                                                        class="common-btn-hp form-btn-hp go_form">ホームへ戻る</button>
                                                </div>                                                
                                            </div>
                                            <?php endif; ?>
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
            s_phone: {
                required: true
            },
            s_email: {
                required: true,
                email: true
            }
        },
        messages: {
            s_name: 'このフィールドは必須です',
            s_kana: 'このフィールドは必須です',
            s_phone: 'このフィールドは必須です',
            s_email: 'このフィールドは必須です',
        }
    });
    $('#regBtn').on('click', function() {
        var form = $('#cosultFrm');
        var formData = form.serializeArray();
        console.log(formData);
        var name_i = formData.filter(it => it.name == 's_name')[0].value;
        $('#name_i').html(name_i);
        var name_s = formData.filter(it => it.name == 's_kana')[0].value;
        $('#name_s').html(name_s);
        var name_phone = formData.filter(it => it.name == 's_phone')[0].value;
        $('#name_phone').html(name_phone);
        var name_email = formData.filter(it => it.name == 's_email')[0].value;
        $('#name_email').html(name_email);
        var name_district = formData.filter(it => it.name == 'district_val')[0].value;
        $('#name_district').html(name_district);
        var content_kind = formData.filter(it => it.name == 'detail_ch[]');

        var content_kd = content_kind.map(it => it.value).join(',');

        $('#name_content_kind').html(content_kd);
        var name_content_detail = formData.filter(it => it.name == 's_content')[0].value;
        $('#name_content_detail').html(name_content_detail.replace(/\n/g, "<br />"));
        $('#name_i').html(name_i);
        $('#edit_frm').addClass('d-none');
        $('#confirm_frm').removeClass('d-none');

        //// $('#cosultFrm').submit();
    })
    $('#back_btn').on('click', function() {
        $('#confirm_frm').addClass('d-none');
        $('#edit_frm').removeClass('d-none');
    })
    $('#send_btn').on('click', function() {
        $('#cosultFrm').submit();
    });
    $('.go_form').on('click', function(){
        self.location = './';
    })
})
</script>