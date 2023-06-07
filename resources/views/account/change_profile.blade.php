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
						<li class="breadcrumb-item active">プロフィール</li>
					</ol>
				</nav>
			</div><!-- End Page Title -->
			<section class="section change_profile">
				<!-- 編集中の口コミ -->
				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
              <h5 class="card-title">
                プロフィール
              </h5>	
              <div class="portlet-body">
                <div class="clearfix">
                  <div class="tabbable-custom">
                    <ul class="nav nav-tabs">
                      <li class="active" role="presentation">
                        <a href="{{ route('change_profile') }}">アカウント情報を変更する</a>
                      </li>
                      <li role="presentation">
                        <a href="{{ route('change_email') }}">メールアドレス変更</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active">
                        <form class="simple_form form-horizontal margin-top-30" id="edit_user_272951" enctype="multipart/form-data" action="/account/edit_profile" accept-charset="UTF-8" method="post" >
                          @csrf
                          <input type="hidden" name="authenticity_token" value="LgeuzujFUlMVxzWPs26P9g8koraSjDZKRE+USK717pQ40HiHN2bvAzWCdUipB063Np91mxyCPC7frPCgdvX4rg==">
                          <input hidden  name="user[email]" id="email" value="{{$user->email}}">
                          <div class="form-group row">
                            <label class="col-md-3 control-label">メールアドレス</label>
                            <div class="col-md-4">
                              <p class="form-control-static m-l-25">{{$user->email}}</p>
                            </div>
                          </div>
                          <div class="form-inline">
                            <div class="form-group w-full row">
                              <label class="col-sm-3 control-label">名前（必須）</label>
                              <div class="col-sm-7 display-flex-sm">
                                <span class="m-l-20 ">
                                  <div class="form-group string required user_profile_last_name">
                                    <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true" placeholder="姓" type="text" value="{{$user->first_name}}" name="user[first_name]" id="user_profile_attributes_last_name">
                                  </div>
                                </span>
                                <span class="m-l-35 ">
                                  <div class="form-group string required user_profile_first_name">
                                    <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true" placeholder="名" type="text" value="{{$user->last_name}}" name="user[last_name]" id="user_profile_attributes_first_name">
                                  </div>
                                </span>
                              </div>
                            </div>
                            <div class="form-group w-full row m-t-15">
                              <label class="col-sm-3 control-label">フリガナ（必須）</label>
                              <div class="col-sm-7 display-flex-sm">
                                <span class="m-l-20">
                                  <div class="form-group string required user_profile_last_name_kana">
                                    <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true" placeholder="セイ" type="text" name="user[furigana_first]" id="user_profile_attributes_last_name_kana" value="{{$user->furigana_first}}">
                                  </div>
                                </span>
                                <span class="m-l-35">
                                  <div class="form-group string required user_profile_first_name_kana">
                                    <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true" placeholder="メイ" type="text" name="user[furigana_last]" id="user_profile_attributes_first_name_kana" value="{{$user->furigana_last}}">
                                  </div>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group tel required user_profile_phone row">
                            <label class="col-sm-3 control-label tel required" for="user_profile_attributes_phone">電話番号（必須）</label>
                            <div class="col-sm-8 m-l-20">
                              <input class="form-control string tel required w-300px" pattern="[0-9]{10,11}" title="電話番号はハイフンなしで入力してください" required="required" aria-required="true" placeholder="03xxxxxxxx（ハイフンなし）" type="tel" name="user[phone_number]" id="user_profile_attributes_phone" value="{{$user->phone_number}}">
                            </div>
                          </div>
                          <div class="form-group row last">
                            <label class="col-md-3 control-label">プロフィール画像</label>
                            <div class="col-md-4 m-l-20">
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                                  @if($user->avatar)
                                    <img width="170" height="160" src="{{ asset($user->avatar) }}" data-xblocker="passed" style="visibility: visible;" id="image_preview">
                                  @else 
                                    <img width="170" height="160" src="{{ asset('avatars/default.png') }}" data-xblocker="passed" style="visibility: visible;" id="image_preview">
                                  @endif
                                  </div>
                                <!-- <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 180px; max-height: 180px;"></div> -->
                                <span class="help-block">180px × 180px 推奨</span>
                                <div>
                                  <span class="btn btn-raised green-button btn-file">
                                    <label class="fileinput-new" for="image_upload">アップロード</label>
                                    <input accept="image/jpeg, image/png" type="file" name="avatar" id="image_upload" hidden>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <input type="hidden" value="271242" name="user[profile_attributes][id]" id="user_profile_attributes_id"> -->
                          <div class="form-group string required user_corporation_company_name">
                            <label class="col-sm-3 control-label string required" for="user_corporation_attributes_company_name">会社名（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <input 
                                class="form-control string required w-300px" 
                                required="required" 
                                aria-required="true" 
                                placeholder="スマートキャンプ株式会社" 
                                type="text" 
                                name="company[name]" 
                                id="user_corporation_attributes_company_name" 
                                <?php if($isCompany) echo 'value="'.$company->name.'"' ?> 
                              />
                            </div>
                          </div>
                          <div class="string required w-full form-group ">
                            <label class="string required col-sm-3 control-label">所在地（必須）</label>
                            <div class="col-sm-7 display-flex-sm">
                              <span class="m-l-20">
                                <div class="select required user_corporation_prefecture">
                                  <div class="flex">
                                    <select class="select required form-control w-100px form-control-for-corporations" required="required" aria-required="true" name="company[prefecture]" id="user_corporation_attributes_prefecture">
                                      <option value="">選択してください</option>
                                      @foreach($data->prefectures as $prefecture)
                                        @if($isCompany&&$prefecture->value==$company->location)
                                          <option value="{{$prefecture->value}}" selected>{{$prefecture->value}}</option>
                                        @else
                                          <option value="{{$prefecture->value}}" >{{$prefecture->value}}</option>
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
                                      required="required" 
                                      aria-required="true" 
                                      placeholder="港区三田3-13-16 三田43MTビル13F" 
                                      type="text" 
                                      name="company[address]" 
                                      id="user_corporation_attributes_address"
                                      <?php if($isCompany) echo 'value="'.$company->address.'"' ?>
                                    />
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                          <div class="m-t-15"></div>
                          <div class="form-group select required user_corporation_type_of_business">
                            <label class="col-sm-3 control-label select required" for="user_corporation_attributes_type_of_business">業種（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required" aria-required="true" name="company[industry]" id="user_corporation_attributes_type_of_business">
                                <option value="">選択してください</option>
                                @foreach($data->industries as $industry)
                                  @if($isCompany&&$industry->id==$company->industry)
                                    <option value="{{$industry->id}}" selected>{{$industry->value}}</option>
                                  @else
                                    <option value="{{$industry->id}}" >{{$industry->value}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group select required user_corporation_scale">
                            <label class="col-sm-3 control-label select required" for="user_corporation_attributes_scale">従業員規模（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required" aria-required="true" name="company[employee_number]" id="user_corporation_attributes_scale">
                                <option value="">選択してください</option>
                                @foreach($data->employee_numbers as $e_num)
                                  @if($isCompany&&$e_num->id==$company->employee_number)
                                    <option value="{{$e_num->id}}" selected>{{$e_num->value}}</option>
                                  @else
                                    <option value="{{$e_num->id}}" >{{$e_num->value}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group select required user_profile_department">
                            <label class="col-sm-3 control-label select required" for="user_profile_attributes_department">部署区分（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required" aria-required="true" name="company[department]" id="user_profile_attributes_department">
                                <option value="">選択してください</option>
                                @foreach($data->departments as $department)
                                  @if($isCompany&&$department->id==$company->department)
                                    <option value="{{$department->id}}" selected>{{$department->value}}</option>
                                  @else
                                    <option value="{{$department->id}}" >{{$department->value}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group select required user_profile_position">
                            <label class="col-sm-3 control-label select required" for="user_profile_attributes_position">役職区分（必須）</label>
                            <div class="col-sm-8 flex m-l-20">
                              <select class="form-control select required w-300px" required="required" aria-required="true" name="company[job_title]" id="user_profile_attributes_position">
                                <option value="">選択してください</option>
                                 @foreach($data->jobs as $job)
                                  @if($isCompany&&$job->id==$company->job_title)
                                    <option value="{{$job->id}}" selected>{{$job->value}}</option>
                                  @else
                                    <option value="{{$job->id}}" >{{$job->value}}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <!-- <input type="hidden" value="271242" name="user[profile_attributes][id]" id="user_profile_attributes_id"> -->
                          <div class="orange-button text-center m-t-15">
                            <button type="submit" name="commit" value="送信" class="orange-button-btn btn-raised btn-orange-md col-xs-offset-3 track-regist-db" data-disable-with="送信中...">送信</button>
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
    const imageUpload = document.getElementById('image_upload');
    const imagePreview = document.getElementById('image_preview');
    imageUpload.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener('load', function() {
          imagePreview.src = this.result;
        });
        reader.readAsDataURL(file);
      }
    });
    // const data=@json(file_get_contents(public_path('./company_profile.json')));
    // console.log(data)
  </script>
@endsection