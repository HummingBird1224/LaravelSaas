<!-- @extends("layouts.auth") -->
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

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
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <script async="" crossorigin="anonymous" src="{{ asset('assets/js/fontawesome.js') }}"></script>
    <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-1.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-responsive.css') }}" />
    <link rel="stylesheet" media="all" href="https://precompiled-assets.boxil.jp/assets/application-ad1c2e0774638a9874c7ce9b343d948ebe76d23a8686d7ac92f28ca8d37a87a5.css" />
    <style>
        /* .moda-users-title {
            padding: 10px 0;
        }
        .modal-title {
            color: #FFFFFF;
            text-align: center;
            font-size: 22px;
            font-weight: normal;
        } */
        .moda-users-title {
            margin: 0 auto;
        }
        .modal-header.modal-header-color {
            background-color: #006666;
        }
        .modal-header {
            border-radius: 0 0 0 0 !important;
            padding: 5px;
            border-bottom: 1px solid #e5e5e5;
            min-height: 16.428571429px;
        }
        .modal-header-color {
            padding: 2px 10px !important;
        }
        .btn-md, .btn-orange-md, .btn-green-md, .btn-indigo-md, .btn-gray-md, .btn-light-gray-md, .btn-blue-md, .btn-red-md {
            width: 120px;
            padding: 15px 0;
            font-size: 14px;
        }
        .modal-users-btn-wrapper .btn-modal-part-signin {
            width: 100%;
        }
        .btn-boxil-orange, .btn-orange-xs, .btn-orange-sm, .btn-orange-md, .btn-orange-lg, .btn-orange-xl, .btn-orange-full, .btn-download-md {
            background: #F66800 !important;
        }
        /* #modal-signup .middle-line:before, #modal-signin .middle-line:before, #modal-signup-request .middle-line:before {
            content: "";
            display: block;
            border-top: solid 1px #969a97;
            width: 80%;
            height: 1px;
            position: absolute;
            top: 50%;
            left: 10%;
            z-index: 1;
        } */
    </style>

</head>

@section("content")
<div class="card auth_card">
	<div class="card-body">
        <div class="movable-wrapper">
            <div class="movable-signin">
                <div class="modal-header modal-header-color">
                    <div class="modal-title moda-users-title">ログイン</div>
                </div>
                <div class="modal-users-block">
                    <div class="authButtonWrapper authButtonWrapper__column">
                        <div class="authButtonWrapper__block">
                            <a class="btn btn-raised authButtonWrapper__flat" rel="nofollow" data-method="post" href="/users/auth/google_oauth2/"><i class="fa fa-google authButtonWrapper__googleIcon" aria-hidden="true"></i>Googleでログイン</a>
                        </div>
                        <div class="authButtonWrapper__block">
                            <a class="btn btn-raised authButtonWrapper__flat authButtonWrapper__flat__fb js-facebook-auth-link" rel="nofollow" data-method="post" href="/users/auth/facebook/"><i class="fa fa-facebook authButtonWrapper__fbIcon" aria-hidden="true"></i>Facebookでログイン</a>
                        </div>
                    </div>
                    <div class="m-b-10 text-center text-14 text-gray middle-line" style="padding-top: 15px;"><span>または</span></div>
                    <form class="new_auth_user" id="modal-signin-form" action="/login" accept-charset="UTF-8" data-remote="true" method="post">
                        @csrf
                        <!-- <input type="hidden" name="authenticity_token" id="authenticity_token" value="ltIIq4jfCxXF4uNGZ+6ywHWAiyEyq4PiVNgt4yEZHw/vnRqz3dEYKzpSbXI7Fbcp98HZTb1WW5YWY16T9auUYQ=="> -->
                        <div class="has-error modal-users-error-text" id="modal-signin-errors">
                            <div></div>
                        </div>
                        <div class="modal-users-input-form" id="modal-signin-email">
                            <input autofocus="autofocus" class="form-control placeholder-no-fix input-chic" placeholder="メールアドレス" required="required" type="email" name="email" id="email">
                        </div>
                        <div class="modal-users-input-form" id="modal-signin-password">
                            <input autocomplete="off" class="form-control placeholder-no-fix input-chic" placeholder="パスワード" required="required" type="password" name="password" id="password">
                        </div>
                        <!-- <div class="modal-users-checkbox-wrapper">
                            <label>
                                <input name="auth_user[remember_me]" type="hidden" value="0">
                                <input type="checkbox" value="1" checked="checked" name="auth_user[remember_me]" id="auth_user_remember_me">
                                <div class="modal-users-checkbox-text">ログインを記憶</div>
                            </label>
                        </div> -->
                        <div class="modal-users-btn-wrapper none-bt">
                            <button type="submit" class="btn btn-raised btn-orange-md btn-modal-part-signin btn-modal-part-signin-email" data-disable-with="ログイン中...">ログイン</button>
                        </div>
                        <div class="modal-part-signin-forget-password">
                            <a class="text-link" href="/users/password/new/">パスワードを忘れた方はこちら<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="margin-top-30">
                            <a class="btn-raised btn-border-orange" href="/register/">新規会員登録はこちら</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection

@section('script')
<script>
	// $(document).ready(function() {        
	// 	$("#pass-show").on('click', function(event) {
	// 		event.preventDefault();

	// 		if ($('#password').attr("type") == "text") {
	// 			$('#password').attr('type', 'password');
	// 			$('#pass-show').removeClass( "fas fa-unlock" );
	// 			$('#pass-show').addClass("fas fa-lock"); 
	// 		} else if ($('#password').attr("type") == "password") {
	// 			$('#password').attr('type', 'text');
	// 			$('#pass-show').removeClass( "fas fa-lock" );
	// 			$('#pass-show').addClass("fas fa-unlock");  
	// 		}
	// 	});
	// });
</script>
@endsection
