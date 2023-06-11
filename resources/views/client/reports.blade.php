@extends("layouts.client")

@php
$user = Auth::user();
$categories = App\Models\Category::where('user_id', Auth::id())->get();
$items = App\Models\Item::where('user_id', Auth::id())->get();
@endphp

@php
$status=['有効', '無効', '無効申請中', '申請非承認'];
$employee_sizes=['1人', '2人〜10人', '11人〜30人', '31人〜50人', '51人〜100人', '101人〜250人', '251人〜500人', '501人〜1000人', '1001人以上'];
$schedules=['できる限り早く', '1ヶ月以内', '3ヶ月以内', '半年以内', '1年以内', '3年以内', '未定'];
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
                        @if(count($categories)>0)
                        @foreach($categories as $c)
                        <tr id={{ "category". $c->id }}>
                          <td>
                            <img src="{{ asset('assets/img/tsukubnobi/nitaco_logo.jpg') }}" class="nitaco-logo"
                              width="33px" height="33px" />
                          </td>
                          <td>2023年05月成果レポート</td>
                          <td>{{ \Carbon\Carbon::parse($c['updated_at'])->format('d/m/Y')}}</td>
                          <td>{{$c['fall_pro']}}</td>
                          <td>{{$c['trk_num']}}</td>
                          <td>{{$c['reg_num']}}</td>
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