@extends("layouts.no_aside")

@section('prev_style')
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/core.css') }}" />
@endsection

@section('additional_style')
  <style>
    body {
      /* background: url('https://us.123rf.com/450wm/everyonensk/everyonensk2207/everyonensk220700012/188277033-3d-illustration-five-silver-stars-glossy-colors-achievements-for-games-customer-rating-feedback.jpg?ver=6');
      background-size: 500px 1080px; */
      /* background: url('https://thumbs.dreamstime.com/b/shooting-star-background-12071471.jpg');
      background-size: 1650px 900px; */
    }

    .rating {
      display: inline-block;
      position: relative;
      height: 25px;
      line-height: 25px;
      font-size: 25px;
      margin-top: 5px;
    }

    .rating label {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      cursor: pointer;
    }

    .rating label:last-child {
      position: static;
    }

    .rating label:nth-child(1) {
      z-index: 5;
    }

    .rating label:nth-child(2) {
      z-index: 4;
    }

    .rating label:nth-child(3) {
      z-index: 3;
    }

    .rating label:nth-child(4) {
      z-index: 2;
    }

    .rating label:nth-child(5) {
      z-index: 1;
    }

    .rating label input {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }

    .rating label .icon {
      float: left;
      color: transparent;
    }

    .rating label:last-child .icon {
      color: #BDBDBD;
    }

    .rating:not(:hover) label input:checked ~ .icon,
    .rating:hover label:hover input ~ .icon {
      color: #FFD600;
    }

    .rating label input:focus:not(:checked) ~ .icon:last-child {
      color: #000;
      text-shadow: 0 0 5px #09f;
    }
    
    .rating label .icon {
      margin-right: 7px;
    }

    .submit_btn {
      color: #30B0B0;
      background-color: #30B0B0;
    }
  </style>
@endsection

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

<?php $user = Auth::user(); ?>

@section('content')
<!-- <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/core.css') }}" /> -->

<div class="content-wrapper" style="padding-top: 4.75rem;">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section change_profile">
        <!-- 編集中の口コミ -->
        <div class="row card-section">
          <div class="card info-card sales-card">
            <div class="card-body ">
              <h3 class="card-title" style="text-align: center;">
                レビューを作成する
              </h3>
              <div class="portlet-body">
                <div class="clearfix">
                  <form class="simple_form form-horizontal margin-top-30" id="edit_user_272951"
                    enctype="multipart/form-data" action="{{ route('create_review') }}" accept-charset="UTF-8"
                    method="post">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service_id }}">
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">タイトル</label>
                      <div class="col-sm-8 flex m-l-20">
                        <input type="text" class="form-control select required w-400px" name="title" required="required" aria-required="true">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">説明</label>
                      <div class="col-sm-8 flex m-l-20">
                        <textarea class="form-control select required w-400px" name="description" required="required" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">導入後効果</label>
                      <div class="col-sm-8 flex m-l-20">
                        <textarea class="form-control select required w-400px" name="effect_after_implementation" required="required" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">スコア</label>
                      <div class="col-sm-8 flex m-l-20">
                        <div class="rating">
                          <label>
                            <input type="radio" name="score" value="1" />
                            <span class="icon">★</span>
                          </label>
                          <label>
                            <input type="radio" name="score" value="2" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                          <label>
                            <input type="radio" name="score" value="3" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>   
                          </label>
                          <label>
                            <input type="radio" name="score" value="4" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                          <label>
                            <input type="radio" name="score" value="5" />
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                            <span class="icon">★</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">良い点</label>
                      <div class="col-sm-8 flex m-l-20">
                        <textarea class="form-control select required w-400px" name="good_point" required="required" aria-required="true" placeholder="文章単位でEnter区切り入力してください。"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label select required">改善点</label>
                      <div class="col-sm-8 flex m-l-20">
                        <textarea class="form-control select required w-400px" name="bad_point" required="required" aria-required="true" placeholder="文章単位でEnter区切り入力してください。"></textarea>
                      </div>
                    </div>
                    <div class="middle-button text-center m-t-15">
                      <button type="submit" value="投稿" class="btn green-button button btn-raised btn-orange-md submit_btn">投稿</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End 編集中の口コミ -->
      </section>

    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection