@extends("layouts.no_aside_initial")

@php
$user=Auth::user();
$company=$user->company;
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<style>
  .btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: normal;
      text-align: center;
      vertical-align: middle;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      white-space: nowrap;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.428571429;
      border-radius: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }
  .download-button-wrapper button {
      width: 360px;
      height: 44px;
      line-height: 44px;
      padding: 0px;
  }

  .btn-boxil-orange, .btn-orange-xs, .btn-orange-sm, .btn-orange-md, .btn-orange-lg, .btn-orange-xl, .btn-orange-full, .btn-download-md {
      background: #F66800;
      color: white;
  }
  .user-agreement label.checkbox-large-label {
    margin-left: -44px;
    font-size: 16px;
  }
  .user-agreement label {
      font-weight: normal;
      margin-right: 10px;
      font-size: 12px;
      color: #555555;
      margin: 0;
  }
  .checkbox-large-label {
      position: relative;
      padding-left: 58px;
  }
  label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: bold;
  }
  label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: bold;
  }
  input.checkbox-large[type=checkbox]:checked+.checkbox-large-label:before {
      opacity: 1;
  }
  .checkbox-large-label:after, .checkbox-large-label:before {
      position: absolute;
      content: "";
      display: block;
      top: 50%;
  }
  .checkbox-large-label:before {
      left: 25px;
      margin-top: -13px;
      width: 10px;
      height: 20px;
      border-right: 3px solid #FFFFFF;
      border-bottom: 3px solid #FFFFFF;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      opacity: 0;
      z-index: 1;
  }
  input.checkbox-large[type=checkbox]:checked+.checkbox-large-label:after {
      background: #30B0B0;
  }
  .checkbox-large-label:after, .checkbox-large-label:before {
      position: absolute;
      content: "";
      display: block;
      top: 50%;
  }
  .checkbox-large-label:after {
      width: 28px;
      height: 28px;
      left: 16px;
      margin-top: -15px;
      border: 2px solid #30B0B0;
      border-radius: 3px;
      background-color: #FFFFFF;
  }
  .js-download-btn:disabled {
    background: #BDBDBD;
  }
</style>
<div class="">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">

      <section class="section change_profile">
        <form id="download-form" action="{{ route('post_mail') }}" accept-charset="UTF-8" method="post">
          @csrf
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
                              <!-- <form class="simple_form form-horizontal margin-top-30" id="edit_user_272951" enctype="multipart/form-data" action="/account/edit_company_profile/" accept-charset="UTF-8" method="post">
                                @csrf -->
                                <input type="hidden" name="authenticity_token" value="LgeuzujFUlMVxzWPs26P9g8koraSjDZKRE+USK717pQ40HiHN2bvAzWCdUipB063Np91mxyCPC7frPCgdvX4rg==">
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
                                            name="kana_first" id="kana_first" value="{{$user->kana_first}}" />
                                        </div>
                                      </div>
                                    </span>
                                    <span class="m-l-35">
                                      <div class="string required user_corporation_address">
                                        <div class="flex">
                                          <input
                                            class="string required form-control w-300px form-control-for-corporations"
                                            required="required" aria-required="true" placeholder="ナマエ" type="text"
                                            name="kana_last" id="kana_last" value="{{$user->kana_last}}" />
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
                                      id="phone_number" value="{{$user->phone_number}}" />
                                    <p>※ 日中に繋がる番号を入力してください</p>
                                  </div>
                                </div>

                                <div class="form-group string required user_corporation_company_name">
                                  <label class="col-sm-3 control-label string required">メールアドレス</label>
                                  <div class="col-sm-6 flex m-l-20">
                                    <input class="form-control string required w-300px" required="required"
                                      aria-required="true" placeholder="ビジネス利用の電話番号を入力" type="text" name="email"
                                      id="email" value="{{$user->email}}" />
                                  </div>
                                  <button type="button" name="commit" value="更新する"
                                    class="btn orange-button button btn-raised btn-orange-md" data-disable-with="送信中...">
                                    会社情報検索
                                  </button>
                                </div>
                                <!-- <div class="middle-button text-center m-t-15">
                                  
                                </div> -->

                                <div class="form-group select required user_profile_department">
                                  <label class="col-sm-3 control-label select required"
                                    for="user_profile_attributes_department">部署 / 役職</label>
                                  <div class="col-sm-8 display-flex-sm">
                                    <spin class=" m-l-20">
                                      <select class="form-control select required w-300px" required="required"
                                        aria-required="true" name="department" id="department">
                                        <option value="">選択してください</option>
                                        @foreach($data->departments as $department)
                                        @if($company&&$department->id==$user->department)
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
                                        @if($company&&$job->id==$user->official_position)
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
                                      id="company_name" <?php if($company) echo 'value="'.$company->name.'"' ?> />
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
                                            @if($company&&$prefecture->id==$user->prefecture)
                                            <option value="{{$prefecture->id}}" selected>{{$prefecture->value}}
                                            </option>
                                            @else
                                            <option value="{{$prefecture->id}}">{{$prefecture->value}}</option>
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
                                            <?php if($company) echo 'value="'.$company->address.'"' ?> />
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
                                      @if($company&&$industry->id==$user->business_type)
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
                                      @if($company&&$e_num->id==$user->corporation_scale)
                                      <option value="{{$e_num->id}}" selected>{{$e_num->value}}</option>
                                      @else
                                      <option value="{{$e_num->id}}">{{$e_num->value}}</option>
                                      @endif
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              <!-- </form> -->
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

          <div class="row">
            <!-- <div class="col-lg-2"></div> -->
            <div class="col-lg-12">
              <div class="card-section">
                <div class="card info-card sales-card">
                  <div class="card-body container">
                    <!-- <h5 class="card-title" style="text-align: center;">
                      請求資料一覧
                    </h5> -->
                    <!-- <div class="selected-docs">
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
                    </div> -->
                    <div class="agreement-wrapper" style="width: 70%; margin: 0 auto;">
                      <div class="title">
                        <h5 class="card-title" style="text-align: center;">請求資料一覧</h5>
                      </div>
                      <div class="separator" style="border-bottom: 3px solid #30B0B0; width: 70px; margin: auto; margin-bottom: 5%;"></div>
                      <div class="list">
                        <ol><li>より良いご提案のため、資料ダウンロード後に、当該資料に含まれるSaaS提供会社（以下「SaaS提供会社」）からご案内を差し上げる場合があります。</li><li>上記ご案内のため、BOXILにご登録いただいた会員情報を、当社からSaaS提供会社に対して電子ファイルにて提供いたします。</li><li>競合調査やいたずらでの資料請求はご遠慮ください。</li></ol>
                      </div>
                      <div class="user-agreement"style=" text-align: center;">
                        <!-- <input name="user[agreement]" type="hidden" value="0"> -->
                        <input required="required" class="checkbox-large js-user-agreement" type="checkbox" value="1" name="user[agreement]" id="user_agreement">
                        <label class="checkbox-large-label" for="user_agreement">「<a class="text-link" target="_blank" href="https://smartcamp.co.jp/handling_of_privacy">個人情報の取扱いについて</a>」、「<a class="text-link" target="_blank" href="/terms/">利用規約</a>」、及び上記確認事項に同意の上</label>
                      </div>
                      <div id="tooltip-wrapper">
                        <!-- <div class="tooltip hide" id="tooltip-block">
                          <div class="user-agreement-tooltip hide">
                            <div class="user-agreement-tooltip__inner">
                              <p class="user-agreement-tooltip__inner__user-aggrement">お客様情報をご入力の上、同意のチェックを入れてください</p>
                              <p class="user-agreement-tooltip__inner__checked-count hide">請求する資料を少なくとも1つ選択して下さい</p>
                            </div>
                          </div>
                        </div> -->
                        <div class="download-button-wrapper" style="text-align: center; padding-top: 3%;">
                          <!-- <form id="download-form" action="/downloads/post_mail/" accept-charset="UTF-8" method="post"> -->
                            <!-- <input type="hidden" name="authenticity_token" value="tJ8ImqDXRL1ru+A/92dhjCFm0xYA9DeLtHMlttvJezPUdxxsEsk8iIcAjCa96Xctini9wKqYXE87a3p9EP9oqQ=="> -->
                            <button type="submit" class="btn js-download-btn btn-raised btn-orange-lg" data-disable-with="ダウンロード中" disabled="disabled">資料をダウンロード</button>
                          <!-- </form> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-2"></div> -->
          </div>

        </form>
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

  $(document).ready(function() {
    $('.checkbox-large-label').click(function (e) {
      var btn_check = $('#user_agreement')[0].checked;
      if (btn_check == true) {
        $('.js-download-btn').attr('disabled', 'disabled');
      } else {
        $('.js-download-btn').removeAttr('disabled');
      }
      console.log(btn_check);
    });
  });
</script>
@endsection