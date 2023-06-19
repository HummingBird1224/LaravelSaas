@extends("layouts.no_aside_initial")

@php
$user=Auth::user();
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
  <div class="container small-container flex-grow-1 container-p-y">
    <main id="main" class="main">

      <section class="section documents">
        @if(is_null($user))
        <div class="card-section m-b-10">
          <div class="card info-card sales-card guide-download-wrapper">
            <div class="card-body">
              <h4 class="card-title">会員の方はこちら</h4>
              <div class=" text-center">
                <button class="green-button button" onclick="loginClick()">
                  <div class="button-text">
                    会員の方はこちら
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
        @endif
        <form id="download-form" action="{{ route('post_mail') }}" accept-charset="UTF-8" method="post">
          @csrf
          <div class="row">
            <div class="col-lg-7">              
              <div class="card-section">
                <div class="card info-card sales-card">
                  <div class="card-body ">
                    <h4 class="card-title">
                      お客様情報の確認
                    </h4>
                    <h6>
                      以下の情報で資料請求が完了します
                    </h6>
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

                                <div class="form-group row m-b-30">
                                  <label class="col-sm-3 control-label tel required">お名前</label>
                                  <div class="col-sm-8 display-flex-sm">
                                    <span class="m-l-20">
                                      <div class="string required user_corporation_address">
                                        <div class="flex">
                                          <input
                                            class="string required form-control w-300px form-control-for-corporations"
                                            required="required" aria-required="true" placeholder="名字" type="text"
                                            name="first_name" id="first_name" value="{{$user?$user->first_name:''}}" />
                                        </div>
                                      </div>
                                    </span>
                                    <span class="m-l-35">
                                      <div class="string required user_corporation_address">
                                        <div class="flex">
                                          <input
                                            class="string required form-control w-300px form-control-for-corporations"
                                            required="required" aria-required="true" placeholder="名前" type="text"
                                            name="last_name" id="last_name" value="{{$user?$user->last_name:''}}" />
                                        </div>
                                      </div>
                                    </span>
                                  </div>
                                </div>

                                <div class="form-group  m-b-30 row">
                                  <label class="col-sm-3 control-label tel required">お名前（カナ）</label>
                                  <div class="col-sm-8 display-flex-sm">
                                    <span class="m-l-20">
                                      <div class="string required user_corporation_address">
                                        <div class="flex">
                                          <input
                                            class="string required form-control w-300px form-control-for-corporations"
                                            required="required" aria-required="true" placeholder="ミョウジ" type="text"
                                            name="kana_first" id="kana_first" value="{{$user?$user->kana_first:''}}" />
                                        </div>
                                      </div>
                                    </span>
                                    <span class="m-l-35">
                                      <div class="string required user_corporation_address">
                                        <div class="flex">
                                          <input
                                            class="string required form-control w-300px form-control-for-corporations"
                                            required="required" aria-required="true" placeholder="ナマエ" type="text"
                                            name="kana_last" id="kana_last" value="{{$user?$user->kana_last:''}}" />
                                        </div>
                                      </div>
                                    </span>
                                  </div>
                                </div>

                                <div class="form-group string required m-b-30">
                                  <label class="col-sm-3 control-label string required">電話番号</label>
                                  <div class="col-sm-8 flex m-l-20">
                                    <input class="form-control string required w-300px" required="required"
                                      aria-required="true" placeholder="ビジネス利用の電話番号を入力" type="text" name="phone_number"
                                      id="phone_number" value="{{$user?$user->phone_number:''}}" />
                                    <p>※ 日中に繋がる番号を入力してください</p>
                                  </div>
                                </div>

                                <div class="form-group string required m-b-30">
                                  <label class="col-sm-3 control-label string required">メールアドレス</label>
                                  <div class="col-sm-6 flex m-l-20">
                                    <input class="form-control string required w-300px" required="required"
                                      aria-required="true" placeholder="ビジネス利用の電話番号を入力" type="text" name="email"
                                      id="email" value="{{$user?$user->email:''}}" />
                                  </div>
                                  <button type="button" name="commit" value="更新する"
                                    class="btn orange-button button btn-raised btn-orange-md" data-disable-with="送信中...">
                                    会社情報検索
                                  </button>
                                </div>
                                <!-- <div class="middle-button text-center m-t-15">
                                  
                                </div> -->

                                <div class="form-group select required m-b-30">
                                  <label class="col-sm-3 control-label select required"
                                    for="user_profile_attributes_department">部署 / 役職</label>
                                  <div class="col-sm-8 display-flex-sm">
                                    <spin class=" m-l-20">
                                      <select class="form-control select required w-300px" required="required"
                                        aria-required="true" name="department" id="department">
                                        <option value="">選択してください</option>
                                        @foreach($data->departments as $department)
                                          @if($user&&$department->id==$user->department)
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
                                          @if($user&&$job->id==$user->official_position)
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

                                <div class="form-group string required m-b-30">
                                  <label class="col-sm-3 control-label string required">会社名（必須）</label>
                                  <div class="col-sm-8 flex m-l-20">
                                    <input class="form-control string required w-300px" required="required"
                                      aria-required="true" placeholder="所属している会社名を入力して検索" type="text" name="company_name"
                                      id="company_name"value="{{$user?$user->company_name:''}}"/>
                                  </div>
                                </div>

                                <div class="string required w-full form-group m-b-30">
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
                                              @if($user&&$prefecture->id==$user->prefecture)
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
                                            value="{{$user?$user->address:''}}" />
                                        </div>
                                      </div>
                                    </span>
                                  </div>
                                </div>

                                <div class="form-group select required m-b-30">
                                  <label class="col-sm-3 control-label select required"
                                    for="user_corporation_attributes_type_of_business">業種</label>
                                  <div class="col-sm-8 flex m-l-20">
                                    <select class="form-control select required w-300px" required="required"
                                      aria-required="true" name="industry"
                                      id="user_corporation_attributes_type_of_business">
                                      <option value="">選択してください</option>
                                      @foreach($data->industries as $industry)
                                        @if($user&&$industry->id==$user->business_type)
                                        <option value="{{$industry->id}}" selected>{{$industry->value}}</option>
                                        @else
                                        <option value="{{$industry->id}}">{{$industry->value}}</option>
                                        @endif
                                      @endforeach
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group select required m-b-30">
                                  <label class="col-sm-3 control-label select required"
                                    for="user_corporation_attributes_scale">従業員規模</label>
                                  <div class="col-sm-8 flex m-l-20">
                                    <select class="form-control select required w-300px" required="required"
                                      aria-required="true" name="employee_number" id="user_corporation_attributes_scale">
                                      <option value="">選択してください</option>
                                      @foreach($data->employee_numbers as $e_num)
                                        @if($user&&$e_num->id==$user->corporation_scale)
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
            </div>

            <div class="col-lg-5">
              <div class="card-section">
                <div class="card info-card sales-card">
                  <div class="card-body ">
                    <h4 class="card-title">
                      請求資料一覧
                    </h4>
                    @if($type=='document')
                    <div class="selected-docs">
                      <div class="selected_num float-right">資料数 <span class="number"> 1 </span> 件</div>
                      <div class="selected-services" id="selected_services">
                        <div class="m-t-30 ">
                          <div class="m-t-15 selected-doc display-flex">
                            <input type="checkbox" checked />
                            <div class="display-flex service-info-wrapper">
                              <div class="service-logo-wrapper">
                                <img src="{{ asset($service->logo) }}" alt="{{$service->data_title}}" width="52px"
                                    height="52px" />
                              </div>
                              <div class="service-info">
                                <h6><b>{{$service->data_title?$service->data_title:$service->title}}</b></h6>
                                <p>{{$service->up_user[0]->company_name}}</p>
                                <div class="i-service-details-serviceReview">
                                  @if((int)$service->reviews_avg_score != 0)
                                    @for ($i = 0; $i < ((int)$service->reviews_avg_score); $i++)
                                      <i class="bx bxs-star text-yellow "  style="margin-right: 0px;"></i>
                                    @endfor
                                    @for ($i = 0; $i < (5-(int)$service->reviews_avg_score); $i++)
                                      <i class="bx bxs-star  text-black-400 "  style="margin-right: 0px;"></i>
                                    @endfor
                                    <span><?php echo $service->reviews_avg_score+0 ?></span><span><?php echo $service->reviews_avg_score+0 ?></span>
                                  @endif
                                  <span >(口コミ{{$service->reviews_count?$service->reviews_count:0}}件)</span>
                                  <p>{{$service->description}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="divider">
                        このサービスとよく比較される製品
                      </div>
                      <div class="compared-services">
                        @foreach($c_services as $c_service)
                        <div class="m-t-30 display-flex" id="c_service_{{$c_service->id}}">
                          <div class="m-t-15 selected-doc display-flex">
                            <div class="display-flex service-info-wrapper">
                              <div class="service-logo-wrapper">
                                <img src="{{ asset($c_service->logo) }}" alt="{{$c_service->data_title}}" width="52px"
                                    height="52px" />
                              </div>
                              <div class="service-info">
                                <h6><b>{{$c_service->data_title?$c_service->data_title:$c_service->title}}</b></h6>
                                <p>{{$c_service->up_user[0]->company_name}}</p>
                                <div class="i-service-details-serviceReview">
                                  @if((int)$c_service->reviews_avg_score != 0)
                                    @for ($i = 0; $i < ((int)$c_service->reviews_avg_score); $i++)
                                      <i class="bx bxs-star text-yellow "  style="margin-right: 0px;"></i>
                                    @endfor
                                    @for ($i = 0; $i < (5-(int)$c_service->reviews_avg_score); $i++)
                                      <i class="bx bxs-star  text-black-400 "  style="margin-right: 0px;"></i>
                                    @endfor
                                    <span><?php echo $c_service->reviews_avg_score+0 ?></span>
                                  @endif
                                  <span >(口コミ{{$c_service->reviews_count?$c_service->reviews_count:0}}件)</span>
                                  <p>{{$c_service->description}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="sevice-button-wrapper">
                            <button type="button" onclick="serviceAdd({{$c_service->id}}, 'document')" class="button green-border-button">
                              追加
                            </button>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                    @elseif($type='category_document')
                    <div class="selected-docs">
                      <div class="selected_num float-right">資料数 <span class="number"> {{count($requested_guides)}} </span> 件</div>
                      <div class="m-t-30 " id="selected_guides">
                        @foreach($requested_guides as $r_guide)
                        <div class="m-t-15 selected-doc display-flex" >
                          <input type="checkbox" checked />
                          <div class=" service-info">
                            <div class="display-flex">
                              <div class="service-logo-wrapper">
                                <img src="{{ asset($r_guide->image) }}" alt="{{$r_guide->title}}" width="52px"
                                    height="52px" />
                              </div>
                              <div class="service-info">
                                <h6><b>{{$r_guide->title}}</b></h6>                                
                              </div>
                            </div>
                            <p class="m-t-15"> 資料には以下のサービス情報が含まれます（{{count($r_guide->services)}}件) </p>
                            <div class="guide-services-wrapper m-t-15">
                              @foreach($r_guide->services as $service)
                                <p class="">{{$service->title}}|{{$service->up_user[0]->company_name}}</p>
                              @endforeach
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="divider">
                        同じカテゴリの製品
                      </div>
                      <div class="compared-services">
                        @foreach($requested_guides as $r_guide)
                          @foreach($r_guide->services as $g_service)
                          <div class="m-t-30 display-flex justify-content-between" id="g_service_{{$g_service->id}}">
                            <div class="m-t-15 selected-doc display-flex">
                              <div class="display-flex">
                                <div class="service-logo-wrapper">
                                  <img src="{{ asset($g_service->logo) }}" alt="{{$g_service->data_title}}" width="52px"
                                      height="52px" />
                                </div>
                                <div class="service-info">
                                  <h6><b>{{$g_service->data_title?$g_service->data_title:$g_service->title}}</b></h6>
                                  <p>{{$g_service->up_user[0]->company_name}}</p>
                                </div>
                              </div>
                            </div>
                            <div class="sevice-button-wrapper">
                              <button type="button" onclick="serviceAdd({{$g_service->id}}, 'category_document')" class="button green-border-button">
                                追加
                              </button>
                            </div>
                          </div>
                          @endforeach
                        @endforeach
                      </div>
                    </div>
                    @endif
                    
                  </div>
                </div>
              </div>
            </div>
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
    location.href='/login';
  }

  serviceAdd=(id, type)=>{
    $.ajax({
      url:'/downloads/service_add/'+id,
      method:'get',
      success:function(service){
        if(type=='document'){
          var add_service=`<div class="m-t-30 ">
                            <div class="m-t-15 selected-doc display-flex">
                              <input type="checkbox" checked />
                              <div class="display-flex service-info-wrapper">
                                <div class="service-logo-wrapper">
                                  <img src="/${service.logo}" alt="${service.data_title}" width="52px"
                                      height="52px" />
                                </div>
                                <div class="service-info">
                                  <h6><b>${service.data_title?service.data_title:service.title}</b></h6>
                                  <p>${service.up_user[0].company_name}</p>
                                  <div class="i-service-details-serviceReview">`;
          if(parseInt(service.reviews_avg_score) != 0){for (var i = 0; i < parseInt(service.reviews_avg_score); i++){
            add_service+= `<i class="bx bxs-star text-yellow "  style="margin-right: 0px;"></i>`;
          };
          for (var j = 0; j < (5-parseInt(service.reviews_avg_score)); j++){
            add_service+=`<i class="bx bxs-star  text-black-400 "  style="margin-right: 0px;"></i>`;
          }};
          add_service+=`<span >(口コミ${service.reviews_count?service.reviews_count:0}件)</span>
                                  <p>${service.description}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>`;
          $('#selected_services').append(add_service);
          $(`#c_service_${service.id}`).remove();
        }
        else if(type=='category_document'){
          var add_guide=`<div class="m-t-30 display-flex justify-content-between" >
                            <div class="m-t-15 selected-doc display-flex">
                              <input type="checkbox" checked />
                              <div class="display-flex">
                                <div class="service-logo-wrapper">
                                  <img src="/${service.logo}" alt="${service.data_title}" width="52px"
                                      height="52px" />
                                </div>
                                <div class="service-info">
                                  <h6><b>${service.data_title?service.data_title:service.title}}</b></h6>
                                  <p>${service.up_user[0].company_name}</p>
                                </div>
                              </div>
                            </div>
                          </div>`;
          $('#selected_guides').append(add_guide);
          $(`#g_service_${service.id}`).remove();
        }
      }
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