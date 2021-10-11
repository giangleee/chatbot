@extends('layouts.app')

@section('title', '会社概要 ')

@section('css')
<link rel=" stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/font-awesome/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
<link rel="stylesheet" href="{{asset('/css/company.css')}}">
{{-- <link rel="stylesheet" href="../../css/index.css"> --}}
@endsection

@section('content')

<!-- Header Slide -->
<header id="header-slide" class="animate__animated animate__bounceIn">
  <a href="/company">
    <picture>
      <source media="(min-width: 1024px)" srcset="/images/banners/banner_company.png">
      <source media="(min-width: 641px)" srcset="/images/banners/banner_company_ipad.png">
      <img src="/images/banners/banner_company_mobile.png">
    </picture>
  </a>
</header>
<!-- /Header Slide -->

<!-- Info Company -->
<div class="container-fluid box-content" id="company-info">
  <div class="company-content">
    <div class="card">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7 info wow animate__zoomIn">
          <h1>会社概要</h1>
          <div class="info-wapper">
            <div class="info-label">会社名</div>
            <div class="info-content">株式会社キアイソフトベトナムKiaisoft Co., Ltd</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">設立年月日</div>
            <div class="info-content">2019年2月20日</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">資本金</div>
            <div class="info-content">10億VND</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">代表者</div>
            <div class="info-content">CEO: TRAN NGOC DIEN(チャン・ゴック・ジエン)</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">従業員数</div>
            <div class="info-content">42名 ( 2020年12月現在 )</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">所在地</div>
            <div class="info-content">2F, AC building, No 3/78 Duy Tan Street, Cau Giay District, Ha Noi</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">TEL</div>
            <div class="info-content">(+84) 982 851 486</div>
          </div>
          <div class="info-wapper">
            <div class="info-label">Ｅメール</div>
            <div class="info-content">contact@kiaisoft.com</div>
          </div>
        </div>
        <div class="col-lg-5 d-none d-lg-block wow animate__zoomIn">
          <img src="/images/anh_company1.jpg" alt="">
          <img src="/images/anh_company2.jpg" class="pt-3" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Inf Company -->

<!-- About us -->
<div class="container-fluid box-content" id="aboutus">
  <h1 class="text-center fw-bold wow animate__bounceIn">我々のチーム</h1>
  <div class="row">
    <div class="col-12 col-sm-6 col-lg-3 mb-4 wow animate__zoomIn">
      <div class="card">
        <img src="/images/members/dientn.jpg" alt="">
        <div class="text-center info flex-grow-1">
          <strong class="info-name">Tran Ngoc Dien</strong>
          <br>
          <strong class="info-name">チャン・ゴック・ジエン</strong>
          <div class="info-pos">CEO & Co-Founder</div>
          <div class="info-basic text-left">
            <p>- 2012年6月: ハノイ工科大学卒業</p>
            <p>- 2012年08月: 株式会社ディマージシェア入社</p>
            <p>- 2015年01月: 株式会社オルトプラス入社</p>
            <p>- 2018年3月: 株式会社フジテック入社</p>
            <p>- 2019年2月: 当社入社、CEO就任</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-4 wow animate__zoomIn">
      <div class="card">
        <img src="/images/members/dungvq.jpg" alt="">
        <div class="text-center info">
          <strong class="info-name">Vu Quang Dung</strong>
          <br>
          <strong class="info-name">ヴー・クアン・ズン</strong>
          <div class="info-pos">COO & Co-Founder</div>
          <div class="info-basic text-left">
            <p>- 2008年9月: ハノイ工科大学入学</p>
            <p>- 2011年4月: ハノイ工科大学から立命館大学へ転入</p>
            <p>- 2013年3月: 立命館大学卒業</p>
            <p>- 2013年6月: 株式会社FPTソフトウェア入社</p>
            <p>- 2015年12月: オルトプラス入社</p>
            <p>- 2017年9月: 株式会社VTI入社</p>
            <p>- 2019年2月: 当社入社、COO就任</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-4 wow animate__zoomIn">
      <div class="card">
        <img src="/images/members/hienbv.jpg" alt="">
        <div class="text-center info">
          <strong class="info-name">Bui Van Hien</strong>
          <br>
          <strong class="info-name">ブイ．ヴァン．ヒエン</strong>
          <div class="info-pos">CTO & Co-Founder</div>
          <div class="info-basic text-left">
            <p>- 2012年6月: ハノイ工科大学卒業</p>
            <p>- 2012年07月: 株式会社Rikkeisoft入社</p>
            <p>- 2019年2月: 当社入社、CTO就任</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3 mb-4 wow animate__zoomIn">
      <div class="card">
        <img src="/images/members/tunglv.jpg" alt="">
        <div class="text-center info">
          <strong class="info-name">Le Van Tung</strong>
          <br>
          <strong class="info-name">レ・ヴァン・トゥン</strong>
          <div class="info-pos">AI Leader & Co-Founder</div>
          <div class="info-basic text-left">
            <p>- 2010年9月: ハノイ工科大学入学</p>
            <p>- 2015年5月: ハノイ工科大学卒業</p>
            <p>- 2015年6月: 株式会社東芝入社</p>
            <p>- 2019年2月: 当社入社、AIチームリーダ就任</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /About us -->

<!-- Advisory-->
<div class="container-fluid box-content" id="advisory">
  <h1 class="text-center fw-bold wow animate__bounceIn">アドバイザリー</h1>
  <div class="row text-center py-5 info">
    <div class="text-center col-12 col-sm-6 col-lg-4 m-auto wow animate__zoomIn">
      <div class="card bg-white">
        <img class="rounded-circle" src="/images/members/haind.jpg" alt="">
        <div class="text-center info">
          <strong class="info-name">Nguyen Dai Hai</strong>
          <br>
          <strong class="info-name">グエン・ダイ・ハイ</strong>
          <div class="info-pos">AI Consultant <br> (Machine Learning, Bioinformatics)</div>
          <div class="info-basic text-left">
            <p>- 2008年9月: ハノイ工科大学入学</p>
            <p>- 2014年4月: 東京農工大学入学（マスター）</p>
            <p>- 2017年10月: 京都大学（PhD)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Advisory-->

<!-- Gallery -->
<div class="container-fluid" id="gallery">
  <h1 class="text-center fw-bold wow animate__bounceIn">ギャラリー</h1>
  <div class="gallery">
    @for($i = 1; $i <= 21; $i++) <div class="zoomImg">
      <img class="img-fluid" src="/images/gallery/{{$i}}.jpg" alt="Card image cap">
  </div>
  @endfor
</div>
</div>
<!-- /Gallery -->

@endsection
