@extends('layouts.app')

@section('title', 'サービス ')

@section('css')
<link rel=" stylesheet" href="{{asset('/css/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/font-awesome/all.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
{{-- <link rel="stylesheet" href="../../css/index.css"> --}}
@endsection

@section('content')
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
@endsection
