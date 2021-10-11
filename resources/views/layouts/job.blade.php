<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/css/font-awesome/all.min.css">
  <link rel="stylesheet" href="/css/animate.min.css" />
  <link rel="stylesheet" href="/css/recruitment.css">
</head>

<body>

  @include("header.navbar")

  <!-- Header Slide -->
  <header id="header-slide" class="animate__animated animate__fadeInRight position-relative">
    <picture>
      <source media=" (min-width: 1024px)" srcset="/images/banners/banner_recruitment.png">
      <source media="(min-width: 641px)" srcset="/images/banners/banner_recruitment_ipad.png">
      <img src="/images/banners/banner_recruitment_mobile.png" alt="Kiaisoft">
    </picture>
  </header>
  <!-- /Header Slide -->

  @yield('content')

  <div class="container-fluid p-0" id="recruitment-detail">
    <div class="">
      <div class="card-container">
        <div class="text-center">
          <h1 class="text-center fw-bold wow animate__bounceIn d-inline-block">@yield('title')</h1>
        </div>
        <div class="recruitment-detail">
          @yield('content')
          <p></p>
          <p class="fw-bold">Ứng tuyển</p>
          <p>Các ứng viên quan tâm xin gửi CV về địa chỉ Email dưới đây:</p>
          <p>- Email: hr@kiaisoft.com</p>
          <p>- Tên công ty: Công ty TNHH Kiaisoft Việt Nam</p>
          <p>- Địa chỉ công ty: Tầng 02, Tòa nhà AC, số 3 ngõ 78 Duy Tân, Quận Cầu Giấy, Hà Nội.</p>
          <p>- Số điện thoại: 0982851486</p>
          <p> </p>
          <h4 class="fw-bold">How to Apply</h4>
          <h6 class="mb-3 fw-normal">Các ứng viên quan tâm xin gửi CV về địa chỉ Email dưới đây:</h6>
          <ul class="mb-3">
            <li>Tên công ty: Công ty TNHH Kiaisoft Việt Nam</li>
            <li>Địa chỉ công ty: Tầng 2, Tòa AC, số 3, ngõ 78 Duy Tân, Cầu Giấy, Hà Nội</li>
            <li>Email: hr@kiaisoft.com</li>
            <li>Số điện thoại: (+84) 982.851.486</li>
          </ul>
        </div>
        <div class="apply-recruitment row">
          <div class="col-6 col-sm-6">
            <a href="mailto:hr@kiaisoft.com" class="btn btn-apply">Apply</a>
          </div>
          <div class="col-6 col-sm-6 text-end">
            Share :
            <a class="social_buttons" href="https://www.facebook.com/kiaisoft" data-title="Tuyển dụng 01 Ruby"
              title="Facebook"><i class="fab fa-facebook-square ft-icon"></i></a>
            <a class="social_buttons" href="https://www.linkedin.com/company/kiaisoft-co-ltd" title="Linkedin"><i
                class="fab fa-linkedin ft-icon"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include("form.contact")

  <!-- Back to top -->
  <a href="#" title="Top Page" class="btn-top">
    <i class="fa fa-arrow-up"></i>
  </a>
  <!-- /Back to top -->

  @include('footer.footer')

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104154938703374");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

  <script src="/js/jquery-3.6.0.min.js"></script>
  <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="./js/validation/jquery.validate.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/index.js"></script>
  <script src="/js/contact.js"></script>
</body>

</html>