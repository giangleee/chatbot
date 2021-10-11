@extends('layouts.app')

@section('title', 'ホーム ')

@section('css')
<link rel=" stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/font-awesome/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
{{-- <link rel="stylesheet" href="../../css/index.css"> --}}
@endsection

@section('content')
<!-- Header Slide -->
<!-- class="animate__animated animate__fadeInRight" -->
<header id="header-slide" class="animate__animated animate__fadeInRight position-relative">
  <picture>
    <source media=" (min-width: 1024px)" srcset="{{asset('/images/banners/banner_home.png')}}">
    <source media="(min-width: 641px)" srcset="{{asset('/images/banners/banner_home_ipad.png')}}">
    <img src="{{asset('/images/banners/banner_home_mobile.png')}}" alt="Kiaisoft">
  </picture>
</header>
<!-- /Header Slide -->

<!-- Section -->
<div class="container-fluid box-content" id="contract-1">
  <h1 id="title" class="wow animate__bounceIn"><strong>開発タイプ</strong></h1>
  <div class="row mx-0 justify-content-lg-center align-items-center">
    <div class="col-lg-4 col-md-6 gx-5 wow animate__zoomIn">
      <div class="card-lg-4">
        <img src="/images/hd_base.png" alt="" class="card-img-top">
        <div class="card-title"><strong>受託開発</strong></div>
        <div class="card-body">設計から開発までをプロジェクトとして契約します。プロジェクトの希望に応じて人員を配置します。要件が確定している場合は最適な開発スタイルです。</div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 gx-5 wow animate__zoomIn">
      <div class="card-lg-4">
        <img src="/images/hd_labor.png" alt="" class="card-img-top">
        <div class="card-title"><strong>ラボ開発</strong></div>
        <div class="card-body">一定期間で特定の人員を確保する契約書スタイルです。ベトナムにこのプロジェクトのための専用開発チームを準備します。これは安定且つ長期的な開発です。
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 gx-5 wow animate__zoomIn">
      <div class="card-lg-4">
        <img src="/images/hd_onsite.png" alt="" class="card-img-top">
        <div class="card-title"><strong>常駐型</strong></div>
        <div class="card-body">難易度が高いプロジェクトに対してより円滑に運営する為に一人以上のベトナム人SEが日本の会社に滞在し、リモート開発チームに指導される形です。</div>
      </div>
    </div>
  </div>
</div>
<!-- /Section -->

<!-- Section -->
<div class="container-fluid justify-content-center box-content" id="jobtype">
  <h1 id="title" class="wow animate__bounceIn"><strong>事業紹介</strong></h1>
  <div class="row " id="innerjob">
    <div class="col-lg-6 col-sm-12 col-12 g-0 red wow animate__fadeInLeft">
      <div class="container blue zoom">
        <img src="/images/service_web.png" alt="" class="f-img">
        <div class="jobdesc j-hover j-top">モバイルアプリ</div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12 g-0 red wow animate__fadeInRight">
      <div class="container blue zoom">
        <img src="/images/service_mobile.png" alt="" class="f-img">
        <div class="jobdesc j-hover j-top">WEB系システム</div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12 g-0 red wow animate__fadeInLeft">
      <div class="container blue zoom">
        <img src="/images/service_game.png" alt="" class="f-img">
        <div class="jobdesc j-hover j-top">ゲーム</div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12 g-0 red wow animate__fadeInRight">
      <div class="container blue zoom">
        <img src="/images/service_ai.png" alt="" class="f-img">
        <div class="jobdesc j-hover j-top">AI</div>
      </div>
    </div>
  </div>
</div>
<!-- /Section -->

<!-- Contract-2 -->
<div class="container-fluid box-content" id="contract-2">
  <h1 class="text-center fw-bold wow animate__bounceIn">開発言語</h1>
  <div class="carousel slide" id="carouselControls">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top" src="images/icons/php.svg" alt="PHP">
          <div class="card-body py-3">
            <p class="text-center fw-bold">PHP</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/swift.svg" alt="Swift">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Swift</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/js.svg" alt="Javascript">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Javascript</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/html5.svg" alt="HTML5">
          <div class="card-body py-3">
            <p class="text-center fw-bold">HTML5</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/css3.svg" alt="CSS3">
          <div class="card-body py-3">
            <p class="text-center fw-bold">CSS3</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/kotlin.svg" alt="Kotlin">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Kotlin</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/java.svg" alt="Java">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Java</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/python.svg" alt="Python">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Python</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/ruby.png" alt="Ruby">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Ruby</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/objective-c.svg" alt="Objective C">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Objective C</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-center fw-bold wow animate__bounceIn">フレームワーク</h1>
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top" src="images/icons/php.svg" alt="PHP">
          <div class="card-body py-3">
            <p class="text-center fw-bold">PHP</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/swift.svg" alt="Swift">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Swift</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/js.svg" alt="Javascript">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Javascript</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/html5.svg" alt="HTML5">
          <div class="card-body py-3">
            <p class="text-center fw-bold">HTML5</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/css3.svg" alt="CSS3">
          <div class="card-body py-3">
            <p class="text-center fw-bold">CSS3</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/kotlin.svg" alt="Kotlin">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Kotlin</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/java.svg" alt="Java">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Java</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/python.svg" alt="Python">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Python</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/ruby.png" alt="Ruby">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Ruby</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/objective-c.svg" alt="Objective C">
          <div class="card-body py-3">
            <p class="text-center fw-bold">Objective C</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-center fw-bold wow animate__bounceIn">クラウドサービス</h1>
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top" src="images/icons/aws.svg" alt="AWS">
          <div class="card-body">
            <p class="text-center fw-bold">AWS</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/firebase.svg" alt="Google Firebase">
          <div class="card-body">
            <p class="text-center fw-bold">Google Firebase</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/google.svg" alt="Google API">
          <div class="card-body">
            <p class="text-center fw-bold">Google API</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/facebook.svg" alt="Facebook SDK">
          <div class="card-body">
            <p class="text-center fw-bold">Facebook SDK</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/digitalocean.svg" alt="DigitalOcean">
          <div class="card-body">
            <p class="text-center fw-bold">DigitalOcean</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-center fw-bold wow animate__bounceIn">ストレージ＆データベース</h1>
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="card">
        <img class="card-img-top" src="images/icons/mysql.svg" alt="MySQL">
        <div class="card-body">
          <p class="text-center fw-bold">MySQL</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/icons/redis.svg" alt="Redis">
        <div class="card-body">
          <p class="text-center fw-bold">Redis</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/icons/postgresql.svg" alt="PostgreSQL">
        <div class="card-body">
          <p class="text-center fw-bold">PostgreSQL</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images/icons/sqlite.svg" alt="SQLitte">
        <div class="card-body">
          <p class="text-center fw-bold">SQLitte</p>
        </div>
      </div>
    </div>
  </div>
  <h1 class="text-center fw-bold wow animate__bounceIn">サードパーティ</h1>
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card">
          <img class="card-img-top" src="images/icons/vagrant.svg" alt="Vagrant">
          <div class="card-body">
            <p class="text-center font-weight-bold">Vagrant</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/docker.svg" alt="Docker">
          <div class="card-body">
            <p class="text-center font-weight-bold">Docker</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/slack.svg" alt="Slack">
          <div class="card-body">
            <p class="text-center font-weight-bold">Slack</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/chatwork.svg" alt="Chatwork">
          <div class="card-body">
            <p class="text-center font-weight-bold">Chatwork</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/skype.svg" alt="Skype">
          <div class="card-body">
            <p class="text-center font-weight-bold">Skype</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/trello.svg" alt="Trello">
          <div class="card-body">
            <p class="text-center font-weight-bold">Trello</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/swagger.svg" alt="Swagger">
          <div class="card-body">
            <p class="text-center font-weight-bold">Swagger</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/icons/gitlab.svg" alt="Gitlab">
          <div class="card-body">
            <p class="text-center font-weight-bold">Gitlab</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Contract-2 -->

<!-- Contract-3 -->
<div class="container-fluid box-content" id="contract-2">
  <h1 class="text-center fw-bold wow animate__bounceIn">ストレージ＆データベース</h1>
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-4">
            <img src="images/partners/insight.png" alt="insight">
            <div>
              <p class="text-center">株式会社インサイト</p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/partners/dimageshare.jpg" alt="dimageshare">
            <div>
              <p class="text-center">株式会社ディマージシェア</p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/partners/irep.png" alt="irep">
            <div>
              <p class="text-center">株式会社アイレップ</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Contract-3 -->
@endsection
