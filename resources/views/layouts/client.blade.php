<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/tsukubnobi/tsukunobi_favicon.svg') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/loader-4.css') }}" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

  @yield('css')

  <!-- <div class="loader-wrapper" id="loader-4"
    style="display: inherit; width: 100%; height: 100%; background: lightgrey; position:fixed; top: 0; left: 0; z-index: 10000;">
    <div id="loader">少</div>
    <div id="loader">々</div>
    <div id="loader">お</div>
    <div id="loader">待</div>
    <div id="loader">ち</div>
    <div id="loader">く</div>
    <div id="loader">だ</div>
    <div id="loader">さ</div>
    <div id="loader">い</div>
    <div id="loader">。</div>
  </div> -->
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container client">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="{{ asset('assets/img/tsukubnobi/tsukunobi_logo.png') }}" alt="logo" width="200px">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li <?php if (url()->current() == env('APP_URL')) echo 'class="menu-item active"';
								else echo 'class="menu-item"'; ?>>
            <a href="/" class="menu-link">
              <i class="menu-icon tf-icons bx bx-reply"></i>
              <div>トップへ</div>
            </a>
          </li>

          <li <?php if (strpos(url()->current(), "client/client_tools")) echo 'class="menu-item active"';
								else echo 'class="menu-item"'; ?>>
            <a href="{{route('client_tools')}}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div>資料請求</div>
            </a>
          </li>

          <li <?php if (strpos(url()->current(), "client/client_reports")) echo 'class="menu-item active "';
								else echo 'class="menu-item"'; ?>>
            <a href="{{ route('client_reports') }}" class="menu-link ">
              <i class='menu-icon tf-icons bx bx-message-rounded'></i>
              <div>成果レポート</div>
            </a>
          </li>

          <li <?php if (strrpos(url()->current(), "client/client_invalid_condition")) echo 'class="menu-item active "';
								else echo 'class="menu-item"'; ?>>
            <a href="{{ route('client_invalid_condition') }}" class="menu-link">
              <i class='menu-icon tf-icons bx bx-download'></i>
              <div style="font-size:14px">リード無効条件について</div>
            </a>
          </li>

          <li <?php if (strpos(url()->current(), "client/client_account_change")) echo 'class="menu-item active"';
								else echo 'class="menu-item"'; ?>>
            <a href="{{ route('client_account_change') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-cog"></i>
              <div>アカウント情報</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
              <i class='menu-icon tf-icons bx bx-log-out'></i>
              <div>ログアウト</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
          </a>
        </div>
        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->
          @yield('content')
          <!-- / Content -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

  <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  @yield('script')
  <script type="text/javascript">
  $(document).ready(function() {
    setTimeout(removeSpinner, 1000); //wait for page load PLUS time.

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
      },
    });
  });

  function removeSpinner() {
    $("#loader-4").fadeOut(70, function() { // fadeOut complete. Remove the loadingSpinner
      $("#loader-4").hide(); //makes page more lightweight 
    });
  }
  </script>
</body>

</html>