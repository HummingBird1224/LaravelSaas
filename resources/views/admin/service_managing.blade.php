@extends("layouts.admin")

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content" style="padding-top: 0.5rem;">
      <div class="col-12">

        <div class="card-section">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5>サービス依頼件数管理</h5>
              </div>
              <div class="row">

              </div>
            </div>
          </div>
        </div>

        <div class="card-section">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5>請求(サービス支払金額管理)</h5>
              </div>
              <div class="row">

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