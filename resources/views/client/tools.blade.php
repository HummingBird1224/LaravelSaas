@extends("layouts.client")

@php
$user = Auth::user();
$guides=$user->guides;
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

          <div class="card info-card sales-card">
            <form class="card-body ">
              <div class="row">
                <div class="col-md-4">
                  <b class="card-title">
                    ステータス
                  </b>
                  <div class="search-options row">
                    @foreach($status as $key => $s)
                    <div class="col-sm-4 col-md-6 col-lg-4">
                      <label for="select_status_{{$key}}" class="display-flex">
                        <input type="checkbox" id="select_status_{{$key}}">
                        <p>{{$s}}</p>
                      </label>
                    </div>
                    @endforeach
                  </div>
                  <div class="m-t-15"></div>
                  <b class="card-title">
                    資料請求期間
                  </b>
                  <div class="search-options display-flex">
                    <input type="date" placeholder="yyyy/mm/dd">
                    <p style="font-size:20px">~</p>
                    <input type="date" placeholder="yyyy/mm/dd">
                  </div>
                </div>

                <div class="col-md-4">
                  <b class="card-title">
                    従業員規模
                  </b>
                  <div class="search-options row">
                    @foreach($employee_sizes as $key => $e_size)
                    <div class="col-sm-4 col-md-6 col-lg-4">
                      <label for="select_status_{{$key}}" class="display-flex">
                        <input type="checkbox" id="select_status_{{$key}}">
                        <p>{{$e_size}}</p>
                      </label>
                    </div>
                    @endforeach
                  </div>
                </div>

                <div class="col-md-4">
                  <b class="card-title">
                    導入予定
                  </b>
                  <div class="search-options row">
                    @foreach($schedules as $key => $schedule)
                    <div class="col-sm-4 col-md-6 col-lg-4">
                      <label for="select_status_{{$key}}" class="display-flex">
                        <input type="checkbox" id="select_status_{{$key}}">
                        <p>{{$schedule}}</p>
                      </label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="row m-t-15">
                <div class="col-md-4 align-center">
                  <button type="submit" class="btn blue-button button full-width">検索</button>
                </div>
              </div>
            </form>
          </div>

          <div class="row card-section">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title">
                  <div class="select-all display-flex">
                    <label for="select_all" class="display-flex"></label>
                    <input type="checkbox" id="select_all" />
                    <font>全選択 </font>
                    <font class="m-l-20"><span id="selected_num"></span>件選択</font>
                  </div>
                </h5>
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
                          <!-- <th>導入予定</th> -->
                          <th>備考</th>
                          <th>ステータス</th>
                        </tr>
                      </thead>

                      <tbody id="item-table-body">
                        @if(count($services)>0)
                          @foreach($services as $service)
                            @if(count($service->down_users)>0)
                              @foreach($service->down_users as $user)
                              <tr id={{ "guide". $guide->id }}>
                                <td><input type="checkbox" id="select_data_{{$guide->id}}"></td>
                                <td>{{$guide['id']}}</td>
                                <td>{{ \Carbon\Carbon::parse($guide->updated_at)->format('Y年m月d日 H:i')}}</td>
                                <td>
                                  <img src="{{ asset($guide->image) }}" class="nitaco-logo"
                                    width="33px" height="33px" />
                                  {{$guide->title}}
                                </td>
                                <td>
                                  {{$user['full_name']}}
                                  {{$user['phone_number']}}
                                  {{$user['email']}}
                                </td>
                                <td>
                                  {{$user['company_name']}}
                                  {{$user['department']}}
                                  {{$user['official_position']}}
                                </td>
                                <td>{{$user['corporation_scale']}}</td>
                                <td>できる限り早く</td>
                                <td>なし</td>
                                <td>
                                  <div class="status valid">
                                    <div class="status-circle"></div>
                                    有効
                                  </div>
                                  <span>
                                    無効申請
                                  </span>
                                </td>
                                
                              </tr>
                              @endforeach
                            @elseif
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