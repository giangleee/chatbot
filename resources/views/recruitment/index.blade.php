@extends('layouts.app')

@section('title', '採用情報 ')

@section('css')
<link rel=" stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/font-awesome/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
<link rel="stylesheet" href="{{asset('/css/recruitment.css')}}">
{{-- <link rel="stylesheet" href="../../css/index.css"> --}}
@endsection

@section('content')

<!-- Header Slide -->
<header id="header-slide" class="animate__animated animate__fadeInRight">
  <a href="/recruitment">
    <picture>
      <source media="(min-width: 1024px)" srcset="/images/banners/banner_recruitment.png">
      <source media="(min-width: 641px)" srcset="/images/banners/banner_recruitment_ipad.png">
      <img src="/images/banners/banner_recruitment_mobile.png">
    </picture>
  </a>
</header>
<!-- /Header Slide -->

<!-- Recruitment -->
<div class="container-fluid box-content" id="recruitment">
  <div class="text-center">
    <h1 class="text-center fw-bold wow animate__bounceIn d-inline-block">採用情報</h1>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-6 wow animate__zoomIn">
        <div class="card">
          <div class="content">
            <div class="job-desc">
              <h2>
                <a href="/recruitment/index.html" class="text-hover-blue">Tuyển dụng 01 Ruby</a>
              </h2>
              <div class="row">
                <div class="col-6 col-sm-6">Ngày đăng: <em>29-10-2020</em></div>
                <div class="col-6 col-sm-6 text-end">Share:
                  <a href="https://www.facebook.com/kiaisoft" class="social_buttons">
                    <i class="fab fa-facebook-square ft-icon"></i>
                  </a>
                  <a href="https://www.linkedin.com/company/kiaisoft-co-ltd" class="social_buttons">
                    <i class="fab fa-linkedin ft-icon"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="job-desc">
              <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                  <span>
                    <em class="far fa-money-bill-alt" title="Up to"></em>
                    Up to:
                    <strong>1000 $</strong>
                  </span>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                  <span>
                    <em class="fa fa-bookmark" title="Loại công việc"></em>
                    Fulltime
                  </span>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                  <span>
                    <em class="fa fa-check-square" title="Lợi thế"></em>
                    <i>Ruby</i>
                  </span>
                </div>
                <div class="col-12 col-sm-12 col-lg-6">
                  <span>
                    <em class="fa fa-road" title="Level"></em>
                    Junior
                  </span>
                </div>
              </div>
              <br>
            </div>
          </div>
          <a href="/recruitment/index.html" class="btn btn-primary">Xem chi tiết job</a>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /Recruitment -->

@endsection
