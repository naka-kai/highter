
<?php wp_head(); ?>

  <section class="mainvisual">
    <h3 class="mainvisual_text">お問い合わせ・資料請求</h3>
  </section>

  <section class="breadcrumb">
    <div class="breadcrumb-list-box">
      <div class="container">
        <ul class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
          <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a class="item" href="https://kaiblo.com/portfolio/heighter/"><small>ホーム</small></a>
            <meta itemprop="position" content="1" />
          </li>
          <li class="breadcrumb-item">
            <small>お知らせ</small>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="contact_main">
    <div class="container">
      <div class="contact_main-container">
        <form action="" method="POST" class="contact_form">
          <p class="contact_form-title">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
          <!-- <div class="contact_form-companyName"> -->
          <label class="companyname-label db p" for="companyname">会社名</label>
          <input class="companyname-area db" type="text" name="companyname" id="companyname" placeholder="Engress">
          <!-- </div> -->
          <!-- <div class="contact_form-yourName"> -->
          <label class="yourname-label db p" for="yourname">氏名</label>
          <input class="yourname-area db" type="text" name="yourname" id="yourname" placeholder="田中　太郎">
          <!-- </div> -->
          <!-- <div class="contact_form-mail"> -->
          <label class="mail-label db p" for="mail">メールアドレス</label>
          <input class="mail-area db" type="email" name="mail" id="mail" placeholder="example@example.com">
          <!-- </div> -->
          <!-- <div class="contact_form-num"> -->
          <label class="num-label db p" for="nam">電話番号</label>
          <input class="num-area db" type="number" name="num" id="num" placeholder="01-2345-6789">
          <!-- </div> -->
          <!-- <div class="contact_form-type"> -->
          <p class="contact_form-type-text">お問い合わせの種類を選択してください（<strong
              class="contact_form-type-strong">資料請求の方は資料請求を選択ください</strong>）</p>
          <div class="business-wrapper">
            <input class="business-btn" type="radio" name="type" id="business" value="business"><label
              class="business-label p" for="business">商談のご相談</label>
          </div>
          <div class="type-btn-wrapper">
            <input class="type-btn" type="radio" name="type" id="service" value="service"><label class="type-label p"
              for="service">サービスに関するお問い合わせ</label>
          </div>
          <div class="document-btn-wrapper">
            <input class="document-btn" type="radio" name="type" id="document" value="document"><label
              class="document-label p" for="document">資料請求</label>
          </div>
          <div class="other-btn-wrapper">
            <input class="other-btn" type="radio" name="type" id="other" value="other"><label class="other-label p"
              for="other">その他</label>
          </div>
          <!-- </div> -->
          <!-- <div class="contact_form-content"> -->
          <p class="content-text">お問い合わせ内容</p>
          <textarea class="content-area db" name="content" id="content" cols="30" rows="10"
            placeholder="入力して下さい"></textarea>
          <!-- </div> -->
          <p class="privacy-text"><a href="">プライバシーポリシー</a>に同意の上、送信ください。</p>
          <div class="contact_form-privacy">
            <input class="privacy-check" type="checkbox" id="check" name="check" value="check">
            <p class="privacy-agree">プライバシーポリシーに同意する</pcl>
          </div>
          <!-- <div class="contact_form-submit"> -->
          <input class="submit-btn db" type="submit" name="submit" id="submit" value="送信する">
          <!-- </div> -->
        </form>
      </div>
    </div>
  </section>

<?php wp_footer(); ?>
