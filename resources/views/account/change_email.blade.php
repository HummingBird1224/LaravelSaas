@extends("layouts.main")

@php
$user = Auth::user();
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
                      <li role="presentation">
                        <a href="{{ route('change_profile') }}">アカウント情報を変更する</a>
                      </li>
                      <li role="presentation" class="active">
                        <a href="{{ route('change_email') }}">メールアドレス変更</a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active">
                        <!-- <form class="simple_form form-horizontal " id="edit_user_272951" enctype="multipart/form-data" action="{{route('login')}}" accept-charset="UTF-8" method="post"> -->
                        <!-- <input type="hidden" name="authenticity_token" value="LgeuzujFUlMVxzWPs26P9g8koraSjDZKRE+USK717pQ40HiHN2bvAzWCdUipB063Np91mxyCPC7frPCgdvX4rg==">
                          <input value="true" type="hidden" name="user[first_create]" id="user_first_create">
                          <div class="form-group row">
                            <label class="col-md-3 control-label">新しいメールアドレス</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true" placeholder="姓" type="text" value="{{$user->email}}" name="email-" id="user_profile_email">
                              </div>
                            </div>                            
                          </div>  
                          <div class="form-group row">
                            <label class="col-md-3 control-label">新しいパスワード</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true"  type="password" value="" name="password" id="user_profile_password">
                              </div>
                            </div>                            
                          </div>   
                          <div class="form-group row">
                            <label class="col-md-3 control-label">新しいパスワード（確認）</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block" required="required" aria-required="true"  type="password" value="" name="confirm_password" id="user_profile_confirm_password">
                              </div>
                              <div class="orange-button text-center m-t-15">
                                <input type="submit" name="commit" value="変更する" class="orange-button-btn btn-raised btn-orange-md col-xs-offset-3 track-regist-db" data-disable-with="送信中...">
                              </div>
                            </div>                            
                          </div>                        
                        </form> -->
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          {{__('messages.auth.email_or_password_error')}}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        {{ isset($error) ? $error : '' }}
                        <form id="formAuthentication" class="mb-3" method="POST" action="/account/edit_email">
                          @csrf
                          <!-- <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                          </div> -->
                          <div class="form-group row">
                            <label class="col-md-3 control-label label-center">新しいメールアドレス</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block"
                                  required="required" aria-required="true" placeholder="姓" type="text"
                                  value="{{$user->email}}" name="email" id="user_profile_email">
                              </div>
                            </div>
                          </div>
                          @error('email')
                          <small class="text-danger text-xs">{{ $message }}</small>
                          @enderror
                          <!-- <div class="mb-2 form-password-toggle">
                            <label class="form-label" for="password">{{__('messages.profile.password')}}</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div> -->
                          <div class="form-group form-password-toggle row">
                            <label class="col-md-3 control-label label-center" for="password">新しいパスワード</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block"
                                  required="required" aria-required="true" type="password" name="password"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  id="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                              </div>
                            </div>
                          </div>
                          @error('password')
                          <small class="text-danger text-xs">{{ $message }}</small>
                          @enderror
                          <!-- <div class="mb-2 form-password-toggle">
                            <label class="form-label" for="password">パスワード（確認）</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password_confirmation"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div> -->
                          <div class="form-group form-password-toggle row">
                            <label class="col-md-3 control-label" for="password">新しいパスワード（確認）</label>
                            <div class="col-md-4 m-l-20">
                              <div class="form-group string required user_profile_last_name">
                                <input class="form-control string required form-control w-50px inline-block"
                                  required="required" aria-required="true" type="password" name="password_confirmation"
                                  id="password"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                              </div>

                            </div>
                          </div>
                          @error('password_confirmation')
                          <small class="text-danger text-xs">{{ $message }}</small>
                          @enderror
                          <!-- <button type="submit" class="btn btn-primary d-grid w-100">{{__('messages.action.register')}}</button> -->
                          <div class="middle-button text-center m-t-15">
                            <button type="submit" name="commit" value="変更する"
                              class="green-button button btn-raised btn-orange-md col-xs-offset-3 track-regist-db"
                              data-disable-with="送信中...">
                              変更する
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
