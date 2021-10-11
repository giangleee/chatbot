<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') | KIAISOFT | ベトナム　オフショア開発</title>
  <base href="{{asset('')}}">
  <!-- Bootstrap CSS -->
  @yield('css')
</head>

<body>
  @include("header.navbar")

  @yield('content')

  @include("form.contact")

  <!-- Back to top -->
  <a href="#" title="Top Page" class="btn-top">
    <i class="fa fa-arrow-up"></i>
  </a>
  <!-- /Back to top -->

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root" style="margin-right: 20px"></div>
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

  @include('footer.footer')

  <script src="/js/jquery-3.6.0.min.js"></script>
  <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="/js/validation/jquery.validate.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/index.js"></script>
  <script src="/js/contact.js"></script>
</body>

</html>