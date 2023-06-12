@extends("layouts.admin")

@section('css')
<style>
table th,
table td {
  text-align: center !important;
  vertical-align: middle !important;
}
</style>
@endsection

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content category-issues" style="padding-top: 0.5rem;">
      <div class="row">

        <div class="card-section col-md-6">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5 class="text-center">カテゴリ</h5>
              </div>
              <div class="top-section">
                <div class="top-select">
                  <h6>大分類名</h6>
                  <select class="form-control m-t-15" aria-required="true" name="employee_number"
                    id="user_corporation_attributes_scale">
                    @for($i=1; $i<=6;$i++) <a href="">
                      <option value={{ "大分類名". $i }}>大分類名{{$i}}</option>
                      </a>
                      @endfor
                  </select>
                  <form class="display-flex m-t-15" action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  " />
                    <button type="submit" class="purple-button button flex-button">追加</button>
                  </form>
                </div>
              </div>
              <hr />
              <div class="bottom-section">
                <h6>小分類名</h6>
                <div class="row">
                  <div class="col-sm-6">
                    @for($i=1; $i<=6; $i++) <a href="">小分類名{{$i}}</a>
                      @endfor
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5>XXの導入で活性化している企業様!!!</h5>
              </div>
              <div class="row">

              </div>
              <div class="display-flex justify-content-around">
                <a href="">
                  <div class="purple-button button">
                    開く
                  </div>
                </a>
                <a href="">
                  <div class="purple-button button">
                    ポートフォリオを上げる
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5>私たちに連絡するには!!!</h5>
              </div>
              <div class="row">
                <div class="display-flex">
                  <p>090-9876-5432</p>
                  <p>070-1234-5678</p>
                </div>
                <div class="">
                  東京都千代田区, 神田小川町
                </div>
                <form class="display-flex" action="" type="post">
                  <input type="text" placeholder="入力しましょう" class="form-control width-auto m-t-15" />
                  <button type="submit" class="purple-button button">追加</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5>よくある質問</h5>
              </div>
              <div class="row">
                <div class="">
                  <select class="form-control width-auto m-t-15" aria-required="true" name="employee_number"
                    id="user_corporation_attributes_scale">
                    <option value="1">よくある質問1</option>
                    <option value="2">よくある質問2</option>
                    <option value="3">よくある質問3</option>
                    <option value="4">よくある質問4</option>
                    <option value="5">よくある質問5</option>
                    <option value="6">よくある質問6</option>
                  </select>
                </div>
                <form class="display-flex" action="" type="post">
                  <input type="text" placeholder="入力しましょう" class="form-control width-auto m-t-15" />
                  <button type="submit" class="purple-button button">追加</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection

@section("script")

@endsection