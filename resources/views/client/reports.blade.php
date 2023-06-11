@extends("layouts.client")

@php
$user = Auth::user();
$categories = App\Models\Category::where('user_id', Auth::id())->get();
$items = App\Models\Item::where('user_id', Auth::id())->get();
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
                          <th>#</th>
                          <th>ID</th>
                          <th>資料請求日時</th>
                          <th>ツール</th>
                          <th>請求者情報</th>
                          <th>会社・部署・役職</th>
                          <th>規模・業種</th>
                          <th>導入予定</th>
                          <th>備考</th>
                          <th>ステータス</th>
                        </tr>
                      </thead>

                      <tbody id="item-table-body">
                        @if(count($categories)>0)
                        @foreach($categories as $c)
                        <tr id={{ "category". $c->id }}>
                          <td><input type="checkbox" id="select_data_{{$c->id}}"></td>
                          <td>{{$c['id']}}</td>
                          <td>{{$c['created_at']}}</td>
                          <td>
                            <img src="{{ asset('assets/img/tsukubnobi/nitaco_logo.jpg') }}" class="nitaco-logo"
                              width="33px" height="33px" />
                            ツクノビ
                          </td>
                          @if($c->stop)
                          <td>{{$c['name']}}</td>
                          <td>{{$c['file_name']}}</td>
                          <td>{{$c['fall_pro']}}</td>
                          <td>{{$c['partner_tag']}}</td>
                          <td>{{$c['is_reg']}}</td>
                          <td>
                            <div class="status valid">
                              <div class="status-circle"></div>
                              有効
                            </div>
                            <span>
                              無効申請
                            </span>
                          </td>
                          @else
                          <td colspan="5">無効理由：月間ツール上限数を超えたため無効</td>
                          <td>
                            <div class="status invalid">
                              <div class="status-circle"></div>
                              無効
                            </div>
                          </td>
                          @endif
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