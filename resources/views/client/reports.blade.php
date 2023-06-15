@extends("layouts.client")

@php
$user = Auth::user();
$guides=$user->guides;
@endphp


@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section client-dashboard">
        <!-- 基本機能 -->
        <div class="row card-section">
          <div class=" section-title">
            <label for="logo_check" class="display-flex">
              <input type="checkbox" id="logo_check">
              <img src="{{ asset('assets/img/tsukubnobi/nitaco_logo.jpg') }}" class="nitaco-logo" width="70px"
                height="70px">
              <h5>ツクノビ</h5>
            </label>
          </div>

          <div class="row card-section">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <div class="row">
                  <div id="table-wrapper" class="col-12">
                    <table class="table table-bordered" style="width: 100%;" id="item-table">
                      <thead>
                        <tr>
                          <th>ツール</th>
                          <th>タイトル</th>
                          <th>期間</th>
                          <th>合計の資料請求数</th>
                          <th>有効の資料請求数</th>
                          <th>無効の資料請求数</th>
                          <th>発行日</th>
                          <th>ダウンロード</th>
                        </tr>
                      </thead>

                      <tbody id="item-table-body">
                        @if(count($guides)>0)
                          @foreach($guides as $guide)
                          <tr id={{ "guide". $guide->id }}>
                            <td>
                              <img src="{{ asset($guide->image) }}" class="nitaco-logo"
                                width="33px" height="33px" />
                            </td>
                            <td>2023年06月成果レポート</td>
                            <td>{{ \Carbon\Carbon::parse($guide['updated_at'])->format('Y年m月d日 H:i')}}</td>
                            <td>8</td>
                            <td>0</td>
                            <td>8</td>
                            <td>
                              2019.10.01
                            </td>
                            <td>
                              <a href="">
                                PDFダウンロード
                              </a>
                              <br>
                              ※今後実装予定
                            </td>
                          </tr>
                          @endforeach
                        @else
                        <tr>データなし</tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End 基本機能 -->
      </section>

    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
let selected_num = 0;
$("#selected_num").text(selected_num);
</script>
@endsection