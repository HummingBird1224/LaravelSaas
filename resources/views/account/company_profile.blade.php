@extends("layouts.main")

@php
if(count($user->company)){
$company=$user->company[0];
$isCompany=true;
}
else $isCompany=false;
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <div class="pagetitle">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Yahoo</a></li>
            <li class="breadcrumb-item active">企業プロフィール</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
      <section class="section change_profile">
        <!-- 編集中の口コミ -->
        <div class="row card-section">
          <div class="card info-card sales-card">
            <div class="card-body ">
              <h5 class="card-title">
                企業プロフィール
              </h5>
              <div class="portlet-body">
                <div class="clearfix">
                  <div class="tabbable-custom">
                    <ul class="nav nav-tabs">
                      <li class="active" role="presentation">
                        <a href="#">企業情報編集</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active">
                        <form class="simple_form form-horizontal margin-top-30" id="edit_user_272951"
                          enctype="multipart/form-data" action="/account/edit_company_profile/" accept-charset="UTF-8"
                          method="post">
                          @csrf
                          <input type="hidden" name="authenticity_token"
                            value="LgeuzujFUlMVxzWPs26P9g8koraSjDZKRE+USK717pQ40HiHN2bvAzWCdUipB063Np91mxyCPC7frPCgdvX4rg==">
                          <input value="true" type="hidden" name="user[first_create]" id="user_first_create">
                          <div class="form-group  user_profile_phone row">
                            <label class="col-sm-3 control-label tel required"
                              for="user_profile_attributes_phone">会社名（必須）</label>
                            <div class="col-sm-8 m-l-20">
                              <input class="form-control string tel required w-300px" required="required"
                                aria-required="true" placeholder="スマートキャンプ株式会社" type="tel" name="name"
                                id="company_profile_name" <?php if($isCompany) echo 'value="'.$company->name.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group select required user_corporation_scale">
                            <label class="col-sm-3 control-label select required"
                              for="user_corporation_attributes_scale">従業員規模（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required"
                                aria-required="true" name="employee_number" id="user_corporation_attributes_scale">
                                <option value="">選択してください</option>
                                @foreach($data->employee_numbers as $e_num)
                                @if($isCompany&&$e_num->id==$company->employee_number)
                                <option value="{{$e_num->id}}" selected>{{$e_num->value}}</option>
                                @else
                                <option value="{{$e_num->id}}">{{$e_num->value}}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group select required user_corporation_type_of_business">
                            <label class="col-sm-3 control-label select required"
                              for="user_corporation_attributes_type_of_business">業種（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required"
                                aria-required="true" name="industry" id="user_corporation_attributes_type_of_business">
                                <option value="">選択してください</option>
                                @foreach($data->industries as $industry)
                                @if($isCompany&&$industry->id==$company->industry)
                                <option value="{{$industry->id}}" selected>{{$industry->value}}</option>
                                @else
                                <option value="{{$industry->id}}">{{$industry->value}}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row last">
                            <label class="col-md-3 control-label">ロゴ画像</label>
                            <div class="col-md-4 m-l-20">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                                  @if($isCompany&&$company->logo)
                                  <img width="170" height="160" src="{{ asset($company->logo) }}" data-xblocker="passed"
                                    style="visibility: visible;" id="logo_preview">
                                  @else
                                  <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                                    data-xblocker="passed" style="visibility: visible;" id="logo_preview">
                                  @endif
                                </div>
                                <!-- <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 180px; max-height: 180px;"></div> -->
                                <span class="help-block">180px × 180px 推奨</span>
                                <div>
                                  <span class="btn btn-raised green-button button btn-file">
                                    <label class="fileinput-new" for="logo_upload">アップロード</label>
                                    <input accept="image/jpeg, image/png" type="file" name="logo" id="logo_upload"
                                      hidden>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" value="271242" name="user[profile_attributes][id]"
                            id="user_profile_attributes_id">
                          <div class="m-t-15"></div>
                          <div class="string required w-full form-group ">
                            <label class="string required col-sm-3 control-label">所在地（必須）</label>
                            <div class="col-sm-7 display-flex-sm">
                              <span class="m-l-20">
                                <div class="select required user_corporation_prefecture">
                                  <div class="flex">
                                    <select class="select required form-control w-100px form-control-for-corporations"
                                      required="required" aria-required="true" name="prefecture"
                                      id="user_corporation_attributes_prefecture">
                                      <option value="">選択してください</option>
                                      @foreach($data->prefectures as $prefecture)
                                      @if($isCompany&&$prefecture->value==$company->location)
                                      <option value="{{$prefecture->value}}" selected>{{$prefecture->value}}</option>
                                      @else
                                      <option value="{{$prefecture->value}}">{{$prefecture->value}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </span>
                              <span class="m-l-35">
                                <div class="string required user_corporation_address">
                                  <div class="flex">
                                    <input class="string required form-control w-300px form-control-for-corporations"
                                      required="required" aria-required="true" placeholder="港区三田3-13-16 三田43MTビル13F"
                                      type="text" name="address" id="user_corporation_attributes_address"
                                      <?php if($isCompany) echo 'value="'.$company->address.'"' ?> />
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">代表者名</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" required="required"
                                aria-required="true" placeholder="山田 太郎" type="text" name="representative"
                                id="user_corporation_attributes_representative_name"
                                <?php if($isCompany) echo 'value="'.$company->reperesentative.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">電話番号</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" required="required"
                                aria-required="true" placeholder="03xxxxxxxx（ハイフンなし）" type="text" name="phone_number"
                                id="user_corporation_attributes_phone_number"
                                <?php if($isCompany) echo 'value="'.$company->phone_number.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">設立年</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" required="required"
                                aria-required="true" placeholder="2015" type="number" name="founded_year"
                                id="user_corporation_attributes_founded_year"
                                <?php if($isCompany) echo 'value="'.$company->founded_year.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">設立月</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" max="12" min="1" required="required"
                                aria-required="true" placeholder="10" type="number" name="founded_month"
                                id="user_corporation_attributes_founded_month"
                                <?php if($isCompany) echo 'value="'.$company->founded_month.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">資本金</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" required="required"
                                aria-required="true" placeholder="1234万円" type="text" name="capital"
                                id="user_corporation_attributes_capital"
                                <?php if($isCompany) echo 'value="'.$company->capital.'"' ?> />
                            </div>
                          </div>
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required"
                              for="user_corporation_attributes_company_name">会社URL</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input class="form-control string required w-300px" required="required"
                                aria-required="true" placeholder="http://xxx.jp" type="text" name="company_url"
                                id="user_corporation_attributes_company_url"
                                <?php if($isCompany) echo 'value="'.$company->company_url.'"' ?> />
                            </div>
                          </div>
                          <input type="hidden" value="271242" name="user[profile_attributes].id"
                            id="user_profile_attributes_id">
                          <div class="middle-button text-center m-t-15">
                            <button type="submit" name="commit" value="更新する"
                              class="green-button button btn-raised btn-orange-md" data-disable-with="送信中...">
                              更新する
                            </button>
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
        <!-- End 編集中の口コミ -->
      </section>

    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
const logoUpload = document.getElementById('logo_upload');
const logoPreview = document.getElementById('logo_preview');
logoUpload.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', function() {
      logoPreview.src = this.result;
    });
    reader.readAsDataURL(file);
  }
});
</script>
@endsection