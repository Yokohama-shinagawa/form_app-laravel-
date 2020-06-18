@extends('layouts')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><b style="font-size: 16px;">採用応募フォーム</b></p>
        </div>

        <div class="col-md-12">
            <p class="text-center"><span class="color-red">[必須]</span> の部分は入力必須項目です。必ず入力または選択して下さい。</p>
        </div>
    </div>

    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal mb" enctype="multipart/form-data">

        <div class="row m3">
            <div class="panel panel-default col-md-10 col-md-offset-1" style="padding: 40px 20px 20px">

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red">[必須] </span>採用区分
                    </label>
                    <div class="col-md-6">
                        <div class="panel panel-default radio-box">
                            <div class="panel-body">
                                <div class="radio-inline">
                                    <label>
                                        <input name="recruit_type"  class="recruit" type="radio" value="新卒採用">新卒採用
                                    </label>
                                </div>

                                <div class="radio-inline">
                                    <label>
                                        <input name="recruit_type"  class="recruit" type="radio" value="中途採用" >中途採用
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red">[必須] </span>ご希望職種
                    </label>
                    <div class="col-md-6">
                        <div class="panel panel-default radio-box">
                            <div class="panel-body">
                                <div class="radio-inline">
                                    <label>
                                        <input name="job_type" type="radio" value="営業">営業
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input name="job_type"  type="radio" value="サービス">サービス
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input name="job_type"  type="radio" value="管理事務">管理事務
                                     </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 col-xs-12 control-label">
                        <span class="pull-left color-red">[必須] </span>お名前
                    </label>

                    <div class="col-md-3 col-xs-6">
                        <input class="form-control" placeholder="姓" name="name01" type="text" value="">
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <input class="form-control" placeholder="名" name="name02" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 col-xs-12 control-label">
                        <span class="pull-left color-red">[必須] </span>ふりがな
                    </label>

                    <div class="col-md-3 col-xs-6">
                        <input class="form-control" placeholder="せい" name="furigana01" type="text" value="">
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <input class="form-control" placeholder="めい" name="furigana02" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red">[必須] </span>　性別
                    </label>
                    <div class="col-md-6">
                        <div class="panel panel-default radio-box">
                            <div class="panel-body">
                                <div class="radio-inline">
                                    <label>
                                        <input name="gender"  type="radio" value="男性">男性
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input name="gender"  type="radio" value="女性">女性
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="color-red pull-left">[必須]　</span>生年月日
                    </label>
                    <div class="col-md-6">
                        <select class="form-control inline-block" style="width: 93px" name="birthday_year" >
                            <option value="" selected></option>
                            <option value="平成1">平成1</option>
                            <option value="平成2">平成2</option>
                            <option value="平成3">平成3</option>
                            <option value="平成4">平成4</option>
                            <option value="平成5">平成5</option>
                            <option value="平成6">平成6</option>
                            <option value="平成7">平成7</option>
                            <option value="平成8">平成8</option>
                            <option value="平成9">平成9</option>
                            <option value="平成10">平成10</option>
                            <option value="平成11">平成11</option>
                            <option value="平成12">平成12</option>
                            <option value="平成13">平成13</option>
                            <option value="平成14">平成14</option>
                            <option value="平成15">平成15</option>
                            <option value="平成16">平成16</option>
                            <option value="平成17">平成17</option>
                            <option value="平成18">平成18</option>
                            <option value="平成19">平成19</option>
                            <option value="平成20">平成20</option>
                            <option value="平成21">平成21</option>
                            <option value="平成22">平成22</option>
                            <option value="平成23">平成23</option>
                            <option value="平成24">平成24</option>
                            <option value="平成25">平成25</option>
                            <option value="平成26">平成26</option>
                            <option value="平成27">平成27</option>
                            <option value="平成28">平成28</option>
                            <option value="平成29">平成29</option>
                            <option value="平成30">平成30</option>
                        </select>
                        <span style="margin: 0 2px">年</span>

                        <select class="form-control inline-block" style="width: 65px" name="birthday_month" >
                            <option value="" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <span style="margin: 0 2px">月</span>

                        <select class="form-control inline-block" style="width: 65px" name="birthday_day" >
                            <option value="" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <span style="margin: 0 2px">日</span>

                        <input class="form-control inline-block" style="width: 45px" placeholder="" name="age" type="text" value="">
                        <span style="margin: 0 2px">歳</span>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red"> [必須] </span>学校名/学部/学科<br>※最終学歴
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" placeholder="学校名/学部/学科" name="school" type="text" value="">
                    </div>
                </div>

                <div class="form-group recruit_type_1">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red"> [必須] </span>卒業(予定)年月
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" placeholder="年/月" name="graduate" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red">[必須] </span>住所
                    </label>

                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">〒</span>
                            <input class="form-control p-postal-code" placeholder="000" size="3" maxlength="3" name="zip01" type="number" value="">
                            <span class="input-group-addon bgc-w">-</span>
                            <input class="form-control p-postal-code" placeholder="0000" size="4" maxlength="4" name="zip02" type="number" value="" onkeyup="AjaxZip3.zip2addr('order[zip01]','order[zip02]','order[pref01]','order[addr01]','order[strt01]');">
                        </div>

                        <p class="help-block">
                            <span class="color-red">●半角数字のみの入力となります。</span>
                            <br>
                            <span class="color-blue nowrap">●郵便番号を入力すると住所の一部が自動的に入力されます。</span>
                        </p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>

                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">都道府県</span>

                            <select name="pref01" id="pref01" class="form-control inline-block">
                                <option value=""></option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
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
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>

                    <div class="col-md-6">
                        <input class="form-control" placeholder="市区町村" name="addr01" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>

                    <div class="col-md-6">
                        <input class="form-control" placeholder="丁目・番地" name="addr02" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>

                    <div class="col-md-6">
                        <input class="form-control" placeholder="マンション・アパート名" name="addr03" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="color-red pull-left">[必須] </span>E-mail(携帯)
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" placeholder="メールアドレス" name="mail01" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        E-mail(PC)
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" name="mail02" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="pull-left color-red">[必須] </span>携帯電話
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" placeholder="000-0000-0000" name="tel01" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                    自宅電話
                    </label>

                    <div class="col-md-6">
                        <input class="form-control" max="!max!" min="!min!" maxlength="!maxl!" name="tel02" type="text" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label pull-left">
                        <div>当社を志望する理由を教えてください<br>（200字以内）</div>
                    </label>

                    <div class="col-md-6">
                        <textarea class="form-control" placeholder="" rows="7" maxlength="200" name="shibodoki" cols="50"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-10 control-label">
                        <font color="">
                            入力していただいた情報は、本サービスの提供の他に、当社からの情報提供に利用させていただく場合があります。<br/>
                            その他、当社における個人情報の取り扱いについては、当社<a href="http://google.com" target="_blank">プライバシーポリシー</a>をご覧下さい。
                        </font>
                    </label>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">
                        <span class="color-red pull-left">[必須] </span>個人情報についての同意
                    </label>

                    <div class="col-md-6">
                        <div class="panel panel-default radio-box">
                            <div class="panel-body">
                                <div class="radio-inline">
                                    <label>
                                        <input name="syonin_flg" type="checkbox" value="1">同意
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /panel -->
        </div><!-- /main row -->

        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding:10px;">
                    <p>

                    </p>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-3">
                <div style="padding:10px;">
                    <p>
                        ※受信拒否の設定をされている場合には返信メールが届きませんので、下記アドレスからの受信拒否設定の解除をお願いいたします。
                        <input type="text" value="@secure.ne.jp" style="width:130px;" readonly="">
                    </p>
                </div>
            </div>

            <!-- submit button -->
            <div class="row">
                <div class="col-md-4 col-md-offset-4 mb30">
                    <input class="btn btn-info btn-block btn-lg" type="submit" value="内容確認ページへ">
                </div>
            </div>
        </div>

    </form>

</div><!-- /container -->

@endsection('content')