<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="#ffffff" name="theme-color" />
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <meta content="on" http-equiv="x-dns-prefetch-control" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/tsukubnobi/tsukunobi_favicon.svg') }}" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <script async="" crossorigin="anonymous" src="{{ asset('assets/js/fontawesome.js') }}"></script>
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-1.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-responsive.css') }}" />
  <link rel="stylesheet" media="all" href="https://precompiled-assets.boxil.jp/assets/registration-ef0633d7de13f1a5016da11c0ebb574f54fa27765ca2cadbf1da44608f68374d.css" />
  <style>
    footer.footer--dark {
      background-color: #222222;
      color: #555555;
      width: 100%;
    }
    footer {
      font-size: 12px;
    }
    footer .simple-footer, footer footer.footer--light, footer footer.footer--dark {
      margin: 0 138px;
    }
    footer .simple-footer__top {
      padding-top: 24px;
      padding-bottom: 16px;
    }
    footer .simple-footer__divider {
      width: 100%;
      border: 1px solid #555555;
    }
    footer .simple-footer__content {
      padding-top: 14px;
      display: flex;
    }
    footer .simple-footer__bottom {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      padding-bottom: 20px;
      padding-top: 16px;
    }
    .registrationForm-footer {
      background-color: #FFFFFF;
      padding: 15px 110px 30px;
    }
    #submit-registration {
      margin: 0 auto;
    }
    .entryForm-common, .downloadByMagazine, .leadQuestion, .confirmCompleted, .entryQuestion, .emailSended, .entryProfile, .registrationForm {
      background: url(https://assets.boxil.jp/images/artem-sapeginwww.jpg);
      background-color: #fafafa !important;
    }
    .rg-input-block {
      display: flex;
      font-size: 14px;
      margin-bottom: 2px;
    }
  </style>
</head>

<body class="services index" id="">

  <header class="l-header-registration" id="boxil-navbar">
    <div class="deprecateHeader__warning" id="ie-display" style="display: none;">
      <div class="deprecateHeader__warningInner"><i class="fa fa-warning" aria-hidden="true"></i>ご利用のブラウザは2022年6月15日よりサポート終了予定です（詳細は<a href="/deprecated/ie/">こちら</a>）</div>
    </div>
    <div class="header-container-registration">
      <div class="header-mobile-inner">
        <div class="brand-logo-only">
          <a href="/"><img alt="ボクシルSaaS_ロゴ" class="brand-logo-img" src="{{ asset('assets/img/tsukubnobi/tsukunobi_logo-black.png') }}"></a>
        </div>
        <div class="header-nav">
          <div class="registration-title"></div>
        </div>
        <div class="entryProfile-buttonWrapper--login">
          <a class="btn btn-raised btn-link-primary" data-signin="false" data-target="#modal-signin" data-toggle="modal" href="#">会員の方はこちら</a>
          <div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="js-modal-signin modal fade" id="modal-signin" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-sm modal-m-t-75">
              <div class="modal-content">
                <div class="movable-wrapper">
                  <div class="movable-signin">
                    <div class="modal-header modal-header-color">
                      <button aria-label="Close" class="modal-close-button text-white close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                      <div class="modal-title moda-users-title">ログイン</div>
                    </div>
                    <div class="modal-users-block">
                      <div class="authButtonWrapper authButtonWrapper__column">
                        <div class="authButtonWrapper__block">
                          <a class="btn btn-raised authButtonWrapper__flat" rel="nofollow" data-method="get" href="{{ url('authorized/google') }}"><i class="fa fa-google authButtonWrapper__googleIcon" aria-hidden="true"></i>Googleでログイン</a>
                        </div>
                        <div class="authButtonWrapper__block">
                          <a class="btn btn-raised authButtonWrapper__flat authButtonWrapper__flat__fb js-facebook-auth-link" rel="nofollow" data-method="get" href="{{ url('redirect') }}"><i class="fa fa-facebook authButtonWrapper__fbIcon" aria-hidden="true"></i>Facebookでログイン</a>
                        </div>
                      </div>
                      <div class="m-b-10 text-center text-14 text-gray middle-line">
                        <span>または</span>
                      </div>
                      <form class="new_auth_user" id="modal-signin-form" action="/users/sign_in/" accept-charset="UTF-8" data-remote="true" method="post">
                        <input type="hidden" name="authenticity_token" id="authenticity_token" value="MkBe8d8AZ9l4WJ2a82vjZ0BEIAxo5uUwPUg4tHdatftLD0zpig5054foE66vkOaOwgVyYOcbPUR/80vEo+g+lQ==">
                        <div class="has-error modal-users-error-text" id="modal-signin-errors">
                          <div></div>
                        </div>
                        <div class="modal-users-input-form" id="modal-signin-email">
                          <input autofocus="autofocus" class="form-control placeholder-no-fix input-chic registration-initial-boxcolor" placeholder="メールアドレス" required="required" type="email" name="auth_user[email]" id="auth_user_email">
                        </div>
                        <div class="modal-users-input-form" id="modal-signin-password">
                          <input autocomplete="off" class="form-control placeholder-no-fix input-chic registration-initial-boxcolor" placeholder="パスワード" required="required" type="password" name="auth_user[password]" id="auth_user_password">
                        </div>
                        <div class="modal-users-checkbox-wrapper">
                          <label>
                            <input name="auth_user[remember_me]" type="hidden" value="0">
                            <input type="checkbox" value="1" checked="checked" name="auth_user[remember_me]" id="auth_user_remember_me">
                            <div class="modal-users-checkbox-text">ログインを記憶</div>
                          </label>
                        </div>
                        <div class="modal-users-btn-wrapper none-bt">
                          <button name="button" type="submit" class="btn btn-raised btn-orange-md btn-modal-part-signin btn-modal-part-signin-email" data-disable-with="ログイン中...">ログイン</button>
                        </div>
                        <div class="modal-part-signin-forget-password">
                          <a class="text-link" href="/users/password/new/">パスワードを忘れた方はこちら<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="margin-top-30">
                          <a class="btn-raised btn-border-orange" href="/registration/">新規会員登録はこちら</a>
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
      <div class="header-action">
        <ul class="header-menu pc-menu">
        </ul>
      </div>
    </div>
  </header>
  <div class="registrationForm">
    <div class="i-block">
      <div class="registration-title-block flex space-between align-center">
        <div>
          <div class="registration-title">無料会員登録</div>
          <div class="registration-description"></div>
        </div>
      </div>
      <div class="entryProfile-buttonWrapper--signup">
        <div class="authButtonWrapper m-b-20">
          <div class="authButtonWrapper__block">
            <a class="btn btn-raised authButtonWrapper__flat" rel="nofollow" data-method="get" href="{{ url('authorized/google') }}"><i class="fa fa-google authButtonWrapper__googleIcon" aria-hidden="true"></i>Googleで基本情報を入力</a>
          </div>
          <div class="authButtonWrapper__block">
            <a class="btn btn-raised authButtonWrapper__flat authButtonWrapper__flat__fb" rel="nofollow" data-method="get" href="{{ url('redirect') }}"><i class="fa fa-facebook authButtonWrapper__fbIcon" aria-hidden="true"></i>Facebookで基本情報を入力</a>
          </div>
        </div>
        <!-- <div class="emailRegistration-form-title">メールアドレスで登録</div> -->
        <form class="new_user" id="js-registrationForm" action="/register" accept-charset="UTF-8" method="post">
          @csrf
          <!-- <input type="hidden" name="authenticity_token" value="bXuMShj0B1Sougybu1RccHjcdokgF0N9VefVy4KbvYcUNJ5STfoUalcKgq/nr1mZ+p0k5a/qmwkXXKa7Vik26Q==">
          <input type="hidden" name="user[redirect_path]" id="user_redirect_path"> -->
          <div class="div">
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>名前(全角漢字)</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="last-name">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="名字" maxlength="200" size="200" type="text" name="first_name" id="user_profile_attributes_first_name" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
                <div class="rg-form" id="first-name">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="名前" maxlength="200" size="200" type="text" name="last_name" id="user_profile_attributes_last_name" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>名前(全角カナ)</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="last-name-kana">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="ミョウジ" maxlength="200" size="200" type="text" name="kana_last" id="user_profile_attributes_last_name_kana">
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
                <div class="rg-form" id="first-name-kana">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="ナマエ" maxlength="200" size="200" type="text" name="kana_first" id="user_profile_attributes_first_name_kana">
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>電話番号</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form full-form" id="phone">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="ビジネス利用の電話番号を入力" maxlength="13" size="13" type="text" name="phone_number" id="user_profile_attributes_phone" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <p class="tel-message">※ 日中に繋がる番号を入力してください。携帯電話を推奨しています。</p>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <!-- <input type="hidden" name="user[profile_attributes][eight_profile]" id="user_profile_attributes_eight_profile"> -->
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>メールアドレス</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form full-form" id="email">
                  <div class="flex align-center">
                    <input id="user-email-registration" class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="ビジネス利用のEmailを入力" maxlength="200" size="200" type="email" value="" name="email" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                    
                    <button id="searchConfirmCompleteCompany" type="button">会社情報検索</button>
                    <!-- <div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade" id="modalConfirmCompleteCompany" role="dialog" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-m-t-75">
                        <div class="modal-content">
                          <div class="movable-wrapper">
                            <div class="modalConfirmCompleteCompany">
                              <div id="modalConfirmCompleteCompany__body--loading">
                                <div class="modalConfirmCompleteCompany__loading">
                                  <img class="loading-icon" src="/boxil/boxil_loading.gif">
                                </div>
                              </div>
                              <div id="modalConfirmCompleteCompany__body--failure" style="display: none">
                                <div class="modalConfirmCompleteCompany__bodyHeader">
                                  <div class="modalConfirmCompleteCompany__bodyHeader__title">会社情報が見つかりませんでした。</div>
                                  <div class="modalConfirmCompleteCompany__bodyHeader__description">メールアドレスは正しく入力されてますか？会社及びビジネス用のメールアドレスを入力してください。</div>
                                </div>
                              </div>
                              <div id="modalConfirmCompleteCompany__body--success" style="display: none">
                                <div class="modalConfirmCompleteCompany__bodyHeader">
                                  <div class="modalConfirmCompleteCompany__bodyHeader__title">こちらの会社に在籍されていますか？</div>
                                  <div class="modalConfirmCompleteCompany__bodyHeader__description">『はい』を選択すると会社情報を自動入力します。入力内容は後から変更できます。</div>
                                </div>
                                <div class="modalConfirmCompleteCompany__bodyContent">
                                  <div class="modalConfirmCompleteCompany__info">
                                    <div class="modalConfirmCompleteCompany__info__label">ドメイン</div>
                                    <div class="modalConfirmCompleteCompany__info__value" id="modalConfirmCompleteCompany__domain"></div>
                                  </div>
                                  <div class="modalConfirmCompleteCompany__info">
                                    <div class="modalConfirmCompleteCompany__info__label">会社名</div>
                                    <div class="modalConfirmCompleteCompany__info__value" id="modalConfirmCompleteCompany__companyName"></div>
                                  </div>
                                  <div class="modalConfirmCompleteCompany__info">
                                    <div class="modalConfirmCompleteCompany__info__label">所在地</div>
                                    <div class="modalConfirmCompleteCompany__info__value" id="modalConfirmCompleteCompany__address"></div>
                                  </div>
                                  <div class="modalConfirmCompleteCompany__info">
                                    <div class="modalConfirmCompleteCompany__info__label">業種</div>
                                    <div class="modalConfirmCompleteCompany__info__value" id="modalConfirmCompleteCompany__typeOfBusiness"></div>
                                  </div>
                                  <div class="modalConfirmCompleteCompany__info">
                                    <div class="modalConfirmCompleteCompany__info__label">従業員規模</div>
                                    <div class="modalConfirmCompleteCompany__info__value" id="modalConfirmCompleteCompany__scale"></div>
                                  </div>
                                </div>
                                <div class="modalConfirmCompleteCompany__bodyFooter">
                                  <button id="modalConfirmCompleteCompany__yesButton" type="button">はい</button>
                                  <button aria-label="Close" data-dismiss="modal" id="modalConfirmCompleteCompany__noButton" type="button">いいえ</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
              <!-- @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif -->
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>パスワード</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form full-form" id="password">
                  <div class="flex align-center">
                    <input id="user-password-registration" class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="パスワードを8文字以上で入力（半角英数）" maxlength="200" size="200" type="password" name="password" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>パスワード確認</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form full-form" id="password">
                  <div class="flex align-center">
                    <input id="user-confirm-password-registration" class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="パスワードを8文字以上で入力（半角英数）" maxlength="200" size="200" type="password" name="password_confirmation" required>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <!-- <input value="2023-06-13 13:19:00 +0900" type="hidden" name="user[confirmed_at]" id="user_confirmed_at"> -->
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>会社名</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form full-form" id="company-name">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="所属している会社名を入力して検索" maxlength="200" autocomplete="off" size="200" type="text" name="company_name" id="user_corporation_attributes_company_name">
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-list-block">
                    <ul class="company-select-box"></ul>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>所在地</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="prefecture">
                  <div class="flex align-center">
                    <select class="form-control placeholder-no-fix registration-initial-boxcolor" name="prefecture" id="user_corporation_attributes_prefecture">
                      <option value="">選択してください</option>
                      @foreach($data->prefectures as $prefecture)

                      <option value="{{$prefecture->id}}">{{$prefecture->value}}</option>
                      
                      @endforeach
                    </select>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
                <div class="rg-form" id="company-address">
                  <div class="flex align-center">
                    <input class="form-control placeholder-no-fix registration-initial-boxcolor" placeholder="港区三田3-13-16 三田43MTビル13F" maxlength="200" size="200" type="text" name="address" id="user_corporation_attributes_address">
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>業種</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="type-of-business">
                  <div class="flex align-center">
                    <select class="form-control placeholder-no-fix registration-initial-boxcolor" name="business_type" id="user_corporation_attributes_type_of_business">
                      <option value="">選択してください</option>
                      @foreach($data->industries as $industry)

                      <option value="{{$industry->id}}">{{$industry->value}}</option>
                      
                      @endforeach
                    </select>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>従業員規模</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="scale">
                  <div class="flex align-center">
                    <select class="form-control placeholder-no-fix registration-initial-boxcolor" name="corporation_scale" id="user_corporation_attributes_scale">
                      <option value="">選択してください</option>
                      @foreach($data->employee_numbers as $employee_number)

                      <option value="{{$employee_number->id}}">{{$employee_number->value}}</option>
                      
                      @endforeach
                    </select>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
              </div>
            </div>
            <div class="form-group rg-input-block">
              <div class="rg-title-block text-left">
                <span>部署/役職</span>
              </div>
              <div class="rg-form-block">
                <div class="rg-form" id="department">
                  <div class="flex align-center">
                    <select class="form-control placeholder-no-fix registration-initial-boxcolor" name="department" id="user_profile_attributes_department">
                      <option value="">選択してください</option>
                      @foreach($data->departments as $department)

                      <option value="{{$department->id}}">{{$department->value}}</option>

                      @endforeach
                    </select>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                </div>
                <div class="rg-form" id="position">
                  <div class="flex align-center">
                    <select class="form-control placeholder-no-fix registration-initial-boxcolor" name="official_position" id="user_profile_attributes_position">
                      <option value="">選択してください</option>
                      @foreach($data->jobs as $job)

                      <option value="{{$job->id}}">{{$job->value}}</option>
                      
                      @endforeach
                    </select>
                    <div class="reg-icon-wrapper">
                      <div class="reg-success-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="reg-error-icon">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="reg-help-block"></div>
                  <!-- @if($errors)<span>{{$errors}}</span>@endif -->
                </div>
              </div>
            </div>
          </div>
          <div class="registrationForm-footer">
            <div class="registrationForm-notice">
              <!-- <input name="user[agreement]" type="hidden" value="0">
              <input class="checkbox inline" required="required" type="checkbox" value="1" name="user[agreement]" id="user_agreement"> -->
              <label for="user_agreement">「<a class="text-link-color text-none" target="_blank" href="https://smartcamp.co.jp/handling_of_privacy">個人情報の取扱いについて</a>」、及び「<a class="text-link-color text-none" target="_blank" href="/terms/">利用規約</a>」に同意の上</label>
            </div>
            <!-- <input type="submit" name="commit" value="未入力の項目があります" id="submit-registration" class="btn btn-orange-lg registrationForm-submit track-regist-db  disable" data-disable-with="送信中..." disabled="disabled"> -->
            <input type="submit" value="未入力の項目があります" id="submit-registration" class="btn btn-orange-lg registrationForm-submit track-regist-db" data-disable-with="送信中...">
          </div>
        </form>
        <label for="user_agreement"><a class="text-link-color text-none" href="/login">すでにアカウントを持っていますか?</a></label>
      </div>
    </div>
  </div>
  <footer class="footer--dark">
    <div class="simple-footer">
      <div class="simple-footer__top">
        <div class="simple-footer__contents__corporation-logo">
          <img alt="" src="{{ asset('assets/img/tsukubnobi/smartcamp_logo.svg') }}">
        </div>
      </div>
      <div class="simple-footer__divider"></div>
      <div class="simple-footer__content">
        <div class="simple-footer__info-link">
          <a href="https://smartcamp.co.jp" target="_blank">
            <p>会社概要</p>
          </a>
        </div>
        <div class="simple-footer__info-link">
          <a href="https://smartcamp.co.jp/privacy_policy" target="_blank"><p>個人情報保護方針</p></a>
        </div>
        <div class="simple-footer__info-link">
          <a href="https://smartcamp.co.jp/recruit" target="_blank"><p>採用について</p></a>
        </div>
        <div class="simple-footer__info-link">
          <a href="https://smartcamp.co.jp/contact" target="_blank"><p>お問い合わせ</p></a>
        </div>
      </div>
      <div class="simple-footer__bottom">
        <div class="simple-footer__bottom__credit">
          <div class="simple-footer__bottom__credit-description">
            <p>著作権法により認められる場合を除き、コンテンツを当社、原著作者またはその他の権利者の許諾を得ることなく、複製、公衆送信、改変、修正、転載等する行為は著作権法により禁止されています。</p>
          </div>
        </div>
        <div class="simple-footer__bottom__copyright">
          <p>Copyright ©︎ 2023 All Rights Reserved by SMARTCAMP Co., Ltd.</p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugin.trunk8.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugin.ofi.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/firebase-app.js') }}"></script>
  <script src="{{ asset('assets/js/firebase-messaging.js') }}"></script> -->
</body>

</html>

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <script>
        alert('{{ $error }}');
    </script>
  @endforeach
@endif

