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
                    @for($i=1; $i<=6;$i++) 
                    <option value={{ "大分類名". $i }}>
                      大分類名{{$i}}
                    </option>
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
                  <div class="col-sm-6 ">
                    <div class="bottom-section-wrapper">
                      @for($i=1; $i<=6; $i++) 
                      <div> <a href="">小分類名{{$i}}</a> </div>
                      @endfor
                    </div>
                  </div>
                  <form class="col-sm-6 " action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  m-t-30" />
                    <div class="text-center">
                      <button type="submit" class="purple-button button flex-button m-t-15">追加</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section col-md-6">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5 class="text-center">課題</h5>
              </div>
              <div class="top-section">
                <div class="top-select">
                  <h6>大課題名</h6>
                  <select class="form-control m-t-15" aria-required="true" name="employee_number"
                    id="user_corporation_attributes_scale">
                    @for($i=1; $i<=6;$i++) 
                    <option value={{ "大課題名". $i }}>
                      大課題名{{$i}}
                    </option>
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
                <h6>小課題名</h6>
                <div class="row">
                  <div class="col-sm-6 ">
                    <div class="bottom-section-wrapper">
                      @for($i=1; $i<=6; $i++) 
                      <div> <a href="">小課題名{{$i}}</a> </div>
                      @endfor
                    </div>
                  </div>
                  <form class="col-sm-6 " action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  m-t-30" />
                    <div class="text-center">
                      <button type="submit" class="purple-button button flex-button m-t-15">追加</button>
                    </div>
                  </form>
                </div>
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