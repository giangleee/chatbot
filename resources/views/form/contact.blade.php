<!-- Contact -->
<div class="container-fluid box-content" id="contact">
  <h1 class="text-center fw-bold">お問い合わせ</h1>
  <div class="row">
    <div class="col-12 col-xl-6 col-sm-12 p-3">
      <iframe id="gmap"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0069105309994!2d105.78089341524209!3d21.03240949302894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4b44cd1fa1%3A0x128bd46360fd9b79!2zVG_DoCBuaMOgIEFDIEJ1aWxkaW5n!5e0!3m2!1svi!2s!4v1626685001069!5m2!1svi!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-12 col-xl-6 col-sm-12 p-3 wow animate__bounceIn">
      <form action="/" method="POST" name="CONTACT" id="form-contact">
        <p>
          <input type="text" class="form-control" name="company" placeholder="貴社名 (*)">
        </p>
        <p>
          <input type="text" class="form-control" name="curator" placeholder="お名前 (*)">
        </p>
        <p class="input-half">
          <input type="email" class="form-control" name="email" placeholder="メールアドレス (*)">
        </p>
        <p class="input-half" style="padding-left: 10px">
          <input type="text" class="form-control" name="phone" placeholder="ご連絡先電話番号">
        </p>
        <p>
          <select class="form-select" name="type_advice" placeholder="" style="color: #666;">
            <option value="" disabled="" selected="">お問い合わせ種別 (*)</option>
            <option value="1">会社訪問</option>
            <option value="2">業務連携</option>
            <option value="3">開発のお見積・ご相談</option>
            <option value="4">カスタマイズ相談希望 </option>
            <option value="5">その他</option>
          </select>
        </p>
        <p>
          <textarea rows="4" class="form-control" name="content" placeholder="お問い合わせ内容を詳しくお書きください。"></textarea>
        </p>
        <p class="text-center">
          <input class="form-check-input" type="checkbox" name="confirm" value="1">
          <a href="javascript:void(0)" onClick="showPersonalInfo()" class="text-blue">個人情報取扱い同意書</a>に同意する
        </p>
        <p class="text-center">
          <button class="button btn-contact">
            <i class="fa fa-paper-plane"></i>
            同意して送信
          </button>
        </p>
        <div id="personalinfo-contact">
          <h4>個人情報の取り扱いについて</h4>
          <ul>
            <li>
              このWebサイトにご入力いただく個人情報は、お客様に対する適切なご回答、及び弊社が提供するサービスに関する情報を電子メール等でご提供するために利用いたします。
            </li>
            <li>上記以外の利用や当社以外への個人情報の提供はいたしません。</li>
            <li>お問い合わせにあたり、「(*)」は必要記入事項であり、それ以外の入力項目は、任意の入力事項となります。任意の事項についてご記入がない場合は、ご連絡方法が制限されます。</li>
          </ul>
          <h4>個人情報の開示請求について</h4>
          <ul>
            <li>株式会社キアイソフトベトナム</li>
            <li>メール：
              <a href="mailto:contact@kiaisoft.com">contact@kiaisoft.com</a>
            </li>
            <li>TEL： <a href="tel:(+84) 982 851 486 ">(+84) 982 851 486</a>
            </li>
            <li>上記を確認の上、ご同意いただける方は「同意して送信」ボタンを押してください。</li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Contact -->