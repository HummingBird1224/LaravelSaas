@extends("layouts.main")

@php
$user = Auth::user();
$categories = App\Models\Category::where('user_id', Auth::id())->get();
$items = App\Models\Item::where('user_id', Auth::id())->get();
@endphp

@section('content')
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
                @for($i=1; $i<=4; $i++) <div class="col-sm-6 col-md-3 text-center">
                  <label class="checkbox document-wrapper active">
                    <div class="guide">
                      <div class="guide-img">
                        <img alt="SaaS Industry Report 2022.pdf" src="{{asset('assets/img/tsukubnobi/guide1.png')}}"
                          data-xblocker="passed" style="visibility: visible;" width="100%">
                        <div class="guide-checkbox">
                          <div class="checker">
                            <span class="checked">
                              <input class="checkbox-input" name="category_document" type="checkbox" value="1122"
                                style="display: inline-block;">
                            </span>
                          </div>
                          <span class="lever-sm"></span>
                        </div>
                      </div>
                      <div class="guide-name">
                        <p style="vertical-align: inherit;">SaaS業界レポート2022</p>
                      </div>
                    </div>
                  </label>
              </div>
              @endfor
            </div>

            <div class="guide-bottom">
              <div class="middle-button">
                <button class="green-button button" onclick="downloadConfirm()">
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
      <h5>{{$user->name}}さんにおすすめのサービス</h5>
    </div>

    <div class="card info-card sales-card">
      <div class="card-body ">
        <div class="row">
          @for($i=1; $i<=6; $i++) <div class="col-sm-6  service-block">
            <div class="service-content">
              <a class="service-logo" href="#">
                <img alt="logo name" src="{{asset('assets/img/tsukubnobi/service1.png')}}" data-xblocker="passed"
                  style="visibility: visible;" width="100%" height="100%">
              </a>
              <div class="service-info">
                <div class="service-title">
                  <a href="#">
                    <h6> Sansan</h6>
                  </a>
                </div>
                <div class="service-description">
                  <p>
                    名刺管理から、働き方を変える
                    Sansanは社内の名刺を一括管理することで、
                    企業の成長を後押しす…
                  </p>
                </div>
              </div>
            </div>
            <div class="middle-button service-button">
              <button class="green-button button">
                <div class="button-text">
                  資料請求
                </div>
              </button>
            </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>
<!-- End さんにおすすめのサービス -->

<!-- 資料請求したサービス -->
<div class="row card-section">
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
              <div class="button-text">
                ボクシルにサービスを掲載
              </div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End 資料請求したサービス -->

</section>

</main><!-- End #main -->
</div>
</div>
@endsection

@section('script')
<script>
downloadConfirm = () => {
  location.href = "/download/confirm";
}
</script>
@endsection