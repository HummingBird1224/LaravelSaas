@extends("layouts.main")

@php
$user = Auth::user();
@endphp

@section('content')
<style>
  .green-button:disabled {
    background: lightgrey;
  }
</style>
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section dashboard">
        <!-- 管理者メッセージ -->
        <div class="row card-section">
          <div class="card info-card message-card">
            <div class="card-body row">
              <div class="admin-message">
                <div class="message-date">
                  <pre><h6>2023-05-08</h6></pre>
                </div>
                <div class="message-content">
                  <p>
                    <!-- _/_/_/_/_/_/_/_/_/_/_/_/_/_/_/										 -->
                    β版では「期間限定」で上記カテゴリのみを対象に、
                    【月額料金:無料】【手数料は成約時のみの完全成果報酬】にて掲載いただけます。

                    <!-- ■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□ -->
                    一定期間をもって事前告知の後、β版は終了となる予定です。
                    また、β版終了時には上記料金の変更が発生する可能性があります。予めご容赦ください。
                    <!-- ■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□ -->

                    貴社にて上記カテゴリへの掲載のご検討をされる場合は
                    以下より担当との日程調整、もしくはまでご相談ください。

                    ▼担当者との日程調整をする
                    <!-- https://booking.receptionist.jp/boxil_ishiguro/30min -->

                    どうぞ、よろしくお願いいたします。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End 管理者メッセージ -->

        <!-- 基本機能 -->
        <div class="row card-section">
          <div class=" section-title">
            <i class="menu-icon tf-icons bx bx-cog"></i>
            <h5>基本機能</h5>
          </div>

          <div class="card info-card sales-card">
            <div class="card-body row">

              <div class="col-md-6">
                <p class="card-title">
                  <a class="text-link" href="{{ route('company_profile') }}">
                    <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                    会社情報を編集する
                  </a>
                </p>
              </div>

              <div class="col-md-6">
                <p class="card-title">
                  <a class="text-link" href="{{ route('change_profile') }}">
                    <i class="menu-icon tf-icons bx bx-chevron-right"></i>
                    アカウント情報を変更する
                  </a>
                </p>
              </div>

            </div>
          </div>
        </div>
        <!-- End 基本機能 -->

        <!-- おすすめのお役立ちガイド-->
        <div class="row card-section">
          <div class=" section-title">
            <i class="menu-icon tf-icons bx bxs-download"></i>
            <h5>おすすめのお役立ちガイド</h5>
          </div>

          <div class="card info-card sales-card">
            <div class="card-body ">
              <div class="row">
                @foreach($r_guides as $r_guide) 
                <div class="col-sm-6 col-md-3 text-center">
                  <label class="checkbox document-wrapper active">
                    <div class="guide">
                      <div class="guide-img">
                        <img alt="SaaS Industry Report 2022.pdf" src="{{asset($r_guide->image)}}"
                          data-xblocker="passed" style="visibility: visible;" width="100%">
                        <div class="guide-checkbox">
                          <div class="checker">
                            <span class="checked">
                              <input class="checkbox-input" name="category_document" type="checkbox" value="{{$r_guide->id}}"
                                style="display: inline-block;">
                            </span>
                          </div>
                          <span class="lever-sm"></span>
                        </div>
                      </div>
                      <div class="guide-name">
                        <p style="vertical-align: inherit;">{{$r_guide->title}}</p>
                      </div>
                    </div>
                  </label>
              </div>
              @endforeach
            </div>

            <div class="guide-bottom">
              <div class="middle-button">
                <button class="green-button button" onclick="downloadClick()">
                  <div class="button-text">
                    選択中のガイドをダウンロード
                  </div>
                </button>
              </div>
              <a class="guide-more" href="{{route('category_documents')}}">
                お役立ちガイドをもっと見る
                <i class="menu-icon tf-icons bx bx-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
        </div>
        <!-- End おすすめのお役立ちガイド -->

        <!-- さんにおすすめのサービス -->
        <div class="row card-section">
          <div class=" section-title">
            <i class="menu-icon tf-icons bx bxs-download"></i>
            <h5>{{$user->full_name}}さんにおすすめのサービス</h5>
          </div>

          <div class="card info-card sales-card">
            <div class="card-body ">
              <div class="row">
                @foreach($r_services as $r_service) 
                <div class="col-sm-6  service-block">
                  <div class="service-content">
                    <a class="service-logo" href="{{route('service_view', $r_service->id)}}">
                      <img alt="logo name" src="{{asset($r_service->logo)}}" data-xblocker="passed"
                        style="visibility: visible;" width="100%" height="100%">
                    </a>
                    <div class="service-info">
                      <div class="service-title">
                        <a href="{{route('service_view', $r_service->id)}}">
                          <h6> {{$r_service->title}}</h6>
                        </a>
                      </div>
                      <a class="service-description" href="{{route('service_view', $r_service->id)}}">
                        <p>
                          {{$r_service->description}}
                        </p>
                      </a>
                    </div>
                  </div>
                  <a class="middle-button " href="/downloads/confirm?type=document&&id={{$r_service->id}}">
                    <button class="green-button button service-button" >
                      <div class="button-text" >
                        資料請求
                      </div>
                    </button>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- End さんにおすすめのサービス -->

        <!-- 資料請求したサービス -->
        <!-- <div class="row card-section">
          <div class=" section-title">
            <i class="menu-icon tf-icons bx bxs-download"></i>
            <h5>資料請求したサービス</h5>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <p class="card-title text-center">
                    要求された資料
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <p class="card-title text-center">
                    自社サービスをお持ちの方、<br>
                    ボクシルにサービスを掲載しませんか？
                  </p>
                  <div class="middle-button text-center">
                    <button class="green-button button">
                      <a class="button-text text-white" href="{{ route('add_service') }}">
                        ボクシルにサービスを掲載
                      </a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- End 資料請求したサービス -->

      </section>
    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
  let checkboxes = document.getElementsByClassName("checkbox-input");
  downloadClick = () => {
    let docs = [];
    for (let i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        docs = [...docs, checkboxes[i].value];
      }
    }
    if(docs.length==0){
      toastr.error('ガイドを選択する必要があります。');
    }
    if (docs.length > 0) {
      location.href = '/downloads/confirm?type=category_documents&&id=' + docs;
    }
  }
</script>
@endsection