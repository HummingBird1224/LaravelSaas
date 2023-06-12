@extends("layouts.no_aside")

@php
$user=Auth::user();
if($user&&count($user->company)){
$company=$user->company[0];
$isCompany=true;
}
else $isCompany=false;
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<div class="">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section change_profile">
        <!-- 編集中の口コミ -->
        <div class="row">
          <div class="col-lg-8">
            @if(is_null($user))
            <div class="card-section m-b-10">
              <div class="card info-card sales-card guide-download-wrapper">
                <div class="card-body">
                  <h2 class="card-title">会員の方はこちら</h2>
                  <div class="green-button text-center">
                    <button class="orange-button button" onclick="loginClick()">
                      <div class="button-text">
                        会員の方はこちら
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @else
            <div class="card-section">
              <div class="card info-card sales-card">
                <div class="card-body ">
                  <h2 class="card-title">
                    お客様情報の確認
                  </h2>
                  <h5>
                    以下の情報で資料請求が完了します
                  </h5>
                  <div class="portlet-body">
                    <div class="clearfix">
                      <div class="tabbable-custom">
                        <ul class="nav nav-tabs">
                          <li class="active" role="presentation">
                            <a href="#">お客様情報</a>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active">
                            <form class="simple_form form-horizontal margin-top-30" id="edit_user_272951"
                              enctype="multipart/form-data" action="/account/edit_company_profile/"
                              accept-charset="UTF-8" method="post">
                              @csrf
                              <input type="hidden" name="authenticity_token"
                                value="LgeuzujFUlMVxzWPs26P9g8koraSjDZKRE+USK717pQ40HiHN2bvAzWCdUipB063Np91mxyCPC7frPCgdvX4rg==">
                              <input value="true" type="hidden" name="user[first_create]" id="user_first_create">

                              <div class="form-group  user_profile_phone row">
                                <label class="col-sm-3 control-label tel required">お名前</label>
                                <div class="col-sm-8 display-flex-sm">
                                  <span class="m-l-20">
                                    <div class="string required user_corporation_address">
                                      <div class="flex">
                                        <input
                                          class="string required form-control w-300px form-control-for-corporations"
                                          required="required" aria-required="true" placeholder="名字" type="text"
                                          name="first_name" id="first_name" value="{{$user->first_name}}" />
                                      </div>
                                    </div>
                                  </span>
                                  <span class="m-l-35">
                                    <div class="string required user_corporation_address">
                                      <div class="flex">
                                        <input
                                          class="string required form-control w-300px form-control-for-corporations"
                                          required="required" aria-required="true" placeholder="名前" type="text"
                                          name="last_name" id="last_name" value="{{$user->last_name}}" />
                                      </div>
                                    </div>
                                  </span>
                                </div>
                              </div>

                              <div class="form-group  user_profile_phone row">
                                <label class="col-sm-3 control-label tel required">お名前（カナ）</label>
                                <div class="col-sm-8 display-flex-sm">
                                  <span class="m-l-20">
                                    <div class="string required user_corporation_address">
                                      <div class="flex">
                                        <input
                                          class="string required form-control w-300px form-control-for-corporations"
                                          required="required" aria-required="true" placeholder="ミョウジ" type="text"
                                          name="furigana_first" id="furigana_first" value="{{$user->furigana_first}}" />
                                      </div>
                                    </div>
                                  </span>
                                  <span class="m-l-35">
                                    <div class="string required user_corporation_address">
                                      <div class="flex">
                                        <input
                                          class="string required form-control w-300px form-control-for-corporations"
                                          required="required" aria-required="true" placeholder="ナマエ" type="text"
                                          name="furigana_last" id="furigana_last" value="{{$user->furigana_last}}" />
                                      </div>
                                    </div>
                                  </span>
                                </div>
                              </div>

                              <div class="form-group string required user_corporation_company_name">
                                <label class="col-sm-3 control-label string required">電話番号</label>
                                <div class="col-sm-8 flex m-l-20">
                                  <input class="form-control string required w-300px" required="required"
                                    aria-required="true" placeholder="ビジネス利用の電話番号を入力" type="text" name="phone_number"
                                    id="email" value="{{$user->phone_number}}" />
                                  <p>※ 日中に繋がる番号を入力してください</p>
                                </div>
                              </div>

                              <div class="form-group string required user_corporation_company_name">
                                <label class="col-sm-3 control-label string required">メールアドレス</label>
                                <div class="col-sm-8 flex m-l-20">
                                  <input class="form-control string required w-300px" required="required"
                                    aria-required="true" placeholder="ビジネス利用の電話番号を入力" type="text" name="email"
                                    id="email" value="{{$user->email}}" />
                                </div>
                              </div>
                              <div class="middle-button text-center m-t-15">
                                <button type="submit" name="commit" value="更新する"
                                  class="orange-button button btn-raised btn-orange-md" data-disable-with="送信中...">
                                  会社情報検索
                                </button>
                              </div>

                              <div class="form-group select required user_profile_department">
                                <label class="col-sm-3 control-label select required"
                                  for="user_profile_attributes_department">部署 / 役職</label>
                                <div class="col-sm-8 display-flex-sm">
                                  <spin class=" m-l-20">
                                    <select class="form-control select required w-300px" required="required"
                                      aria-required="true" name="department" id="department">
                                      <option value="">選択してください</option>
                                      @foreach($data->departments as $department)
                                      @if($isCompany&&$department->id==$company->department)
                                      <option value="{{$department->id}}" selected>{{$department->value}}</option>
                                      @else
                                      <option value="{{$department->id}}">{{$department->value}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </spin>
                                  <spin class="m-l-35">
                                    <select class="form-control select required w-300px" required="required"
                                      aria-required="true" name="job_title" id="job_title">
                                      <option value="">選択してください</option>
                                      @foreach($data->jobs as $job)
                                      @if($isCompany&&$job->id==$company->job_title)
                                      <option value="{{$job->id}}" selected>{{$job->value}}</option>
                                      @else
                                      <option value="{{$job->id}}">{{$job->value}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </spin>
                                </div>
                              </div>

                              <div class="m-t-15"></div>

                              <div class="form-group string required user_corporation_company_name">
                                <label class="col-sm-3 control-label string required">会社名（必須）</label>
                                <div class="col-sm-8 flex m-l-20">
                                  <input class="form-control string required w-300px" required="required"
                                    aria-required="true" placeholder="所属している会社名を入力して検索" type="text" name="company_name"
                                    id="company_name" <?php if($isCompany) echo 'value="'.$company->name.'"' ?> />
                                </div>
                              </div>

                              <div class="string required w-full form-group ">
                                <label class="string required col-sm-3 control-label">所在地</label>
                                <div class="col-sm-7 display-flex-sm">
                                  <span class="m-l-20">
                                    <div class="select required user_corporation_prefecture">
                                      <div class="flex">
                                        <select
                                          class="select required form-control w-100px form-control-for-corporations"
                                          required="required" aria-required="true" name="prefecture"
                                          id="user_corporation_attributes_prefecture">
                                          <option value="">選択してください</option>
                                          @foreach($data->prefectures as $prefecture)
                                          @if($isCompany&&$prefecture->value==$company->location)
                                          <option value="{{$prefecture->value}}" selected>{{$prefecture->value}}
                                          </option>
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
                                        <input
                                          class="string required form-control w-300px form-control-for-corporations"
                                          required="required" aria-required="true" placeholder="港区三田3-13-16 三田43MTビル13F"
                                          type="text" name="address" id="user_corporation_attributes_address"
                                          <?php if($isCompany) echo 'value="'.$company->address.'"' ?> />
                                      </div>
                                    </div>
                                  </span>
                                </div>
                              </div>

                              <div class="form-group select required user_corporation_type_of_business">
                                <label class="col-sm-3 control-label select required"
                                  for="user_corporation_attributes_type_of_business">業種</label>
                                <div class="col-sm-8 flex m-l-20">
                                  <select class="form-control select required w-300px" required="required"
                                    aria-required="true" name="industry"
                                    id="user_corporation_attributes_type_of_business">
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

                              <div class="form-group select required user_corporation_scale">
                                <label class="col-sm-3 control-label select required"
                                  for="user_corporation_attributes_scale">従業員規模</label>
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

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>

          <div class="col-lg-4">
            <div class="card-section">
              <div class="card info-card sales-card">
                <div class="card-body ">
                  <h2 class="card-title">
                    請求資料一覧
                  </h2>
                  <div class="selected-docs">
                    <div class="selected_num float-right">資料数 <spin> {{count($requested_guides)}} </spin> 件</div>
                    <div class="m-t-30 ">
                      @foreach($requested_guides as $r_guide)
                      <div class="m-t-15 selected-doc">
                        <div class="display-flex ">
                          <input type="checkbox" checked />
                          <img src="{{ asset($r_guide->image) }}" alt="{{$r_guide->title}}" width="52px"
                            height="52px" />
                          <p>{{$r_guide->title}}</p>
                        </div>
                        <div class="related-services">
                          <p>資料には以下のサービス情報が含まれます（2件）</p>
                        </div>
                        <a class="text-center service-add-button" href="{{route('add_service', $r_guide->id)}}">
                          <div class="middle-button" style="width:50%">
                            <div class="orange-button button">
                              サービスの追加
                            </div>
                          </div>
                        </a>
                      </div>
                      @endforeach
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
loginClick = () => {
  $.ajax({
    url: '/login',
    method: 'GET',
  })
}
</script>
@endsection