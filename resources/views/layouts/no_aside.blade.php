<!DOCTYPE html>
<html lang="ja" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">

@php
$user=Auth::user();
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
  @yield('prev_style')
  <script async="" crossorigin="anonymous" src="{{ asset('assets/js/fontawesome.js') }}"></script>
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-1.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-lite.min.css') }}" />
  
  <script src="{{ asset('assets/js/dashboard-index.js') }}"></script>  
  <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('assets/summernote/summernote-lite.min.js') }}"></script>
  
  @yield('additional_style')
</head>

<body class="services index show layout_v2" id="">
  
  <div id="fb-root"></div>

  <div class="drawermenu-bg" id="drawermenu-bg"></div>
  <nav class="drawermenu-block">
    <div class="drawermenu-close">
      <div class="menubar-toggle active">
        <span class="menubar-icon"></span>
        <span class="menubar-icon"></span>
        <span class="menubar-icon"></span>
      </div>
    </div>
    <div class="block-header">MENU</div>
    <ul>
      @if(!$user)
      <li class="drawermenu-list sign">
        <a class="drawermenu-inner" href="/top">掲載希望の方</a>
      </li>
      <li class="drawermenu-list sign">
        <a class="drawermenu-inner" href="/register">無料会員登録</a>
      </li>
      <li class="drawermenu-list sign">
        <a class="drawermenu-inner"  href="/login">ログイン</a>
      </li>
      @else
      <li class="drawermenu-list sign">
        <a class="drawermenu-inner" href="/top">掲載希望の方</a>
      </li>
      <li class="drawermenu-list sign">
        <a class="drawermenu-inner" href="/logout">ログアウト</a>
      </li>
      @endif
      <li class="drawermenu-list">
        <a class="drawermenu-inner" href="/categories">カテゴリから探す</a>
      </li>
      <li class="drawermenu-list">
        <a class="drawermenu-inner" href="/issues">課題から探す</a>
      </li>
      <li class="drawermenu-list">
        <a class="drawermenu-inner" href="/category_documents">お役立ちガイド</a>
      </li>
    </ul>
  </nav>
  <header class="l-header" id="boxil-navbar">
    <div class="deprecateHeader__warning" id="ie-display">
      <div class="deprecateHeader__warningInner">
        <i class="fa fa-warning"></i>ご利用のブラウザは2022年6月15日よりサポート終了予定です
        （詳細は<a href="/deprecated/ie/">こちら</a>）
      </div>
    </div>
    <div class="container header-container">
      <div class="brand-logo-only">
        <a href="/">
          <img class="brand-logo-img" alt="BOXIL SaaS ロゴ"
            src="{{asset('assets/img/tsukubnobi/tsukunobi_logo-black.png')}}" />
        </a>
      </div>
      <div class="brand-logo">
        <a href="/">
          <img class="brand-logo-img" alt="BOXIL SaaS ロゴ"
            src="{{asset('assets/img/tsukubnobi/tsukunobi_logo-black.png')}}" />
        </a>
      </div>
      <div class="header-nav">
        <nav>
          <ul class="navigation">
            <li class="navigation-item sign">
              <a class="bn-title-menu-ele-link" href="/registration">無料会員登録</a>
            </li>
            <li class="navigation-item sign">
              <a class="bn-title-menu-ele-link" data-signin="true" href="/login">ログイン</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/categories">カテゴリから探す</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/issues">課題から探す</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/category_documents">お役立ちガイド</a>
            </li>           
          </ul>
        </nav>
      </div>
      <!-- <div class="header-search">
        <form accept-charset="utf-8" action="/search/" class="header-search-form" method="get">
          <input type="text" name="q" class="input" placeholder="サービス名・カテゴリ名 [例：Salesforce、営業支援ツール]" />
          <button aria-label="検索" class="btn-search">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div> -->
      <div class="header-introduction">
        <!-- <a class="header-menu-link header-menu-item"
          href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=boxil_header">
          <i class="fas fa-laptop item-icon"></i>
          <div class="item-text">掲載希望の方</div>
        </a> -->
      </div>
      @if($user)
      <div class="header-action">
        <ul class="header-menu pc-menu">
          <li>
            <a class="header-menu-link header-menu-item" data-signin="true" href="/top">
              <i class="fal fa-angle-double-up item-icon"></i>
              <div class="item-text">掲載希望の方</div>
            </a>
          </li>
          <li class="header-menu-item dropdown-trigger ">
            <i class="fal fa-user-circle item-icon" aria-hidden="true"></i>
            <div class="item-text">マイページ</div>
            <div class="dropdown-block dropdown-block-header">
              <ul>
                <li class="dropdown-list">
                  <a class="dropdown-inner" href="/mypage">
                    <i class="fa fa-home dropdown-icon" aria-hidden="true"></i>
                    {{$user->full_name}}マイページ
                  </a>
                </li>
                <li class="dropdown-list">
                  <a class="dropdown-inner" rel="nofollow" data-method="get" href="/logout">
                    <i class="fa fa-sign-out dropdown-icon" aria-hidden="true"></i>ログアウト</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="header-menu sp-menu">
          <li class="header-menu-item">
            <div class="menu drawermenu-trigger">
              <div class="menubar-toggle"><span class="menubar-icon"></span><span class="menubar-icon"></span><span
                  class="menubar-icon"></span></div>
            </div>
          </li>
        </ul>
      </div>
      @else
      <div class="header-action">
        <ul class="header-menu pc-menu">
          <li>
            <a class="header-menu-link header-menu-item" data-signin="true" href="/top">
              <i class="fal fa-angle-double-up item-icon"></i>
              <div class="item-text">掲載希望の方</div>
            </a>
          </li>
          <li>
            <a class="header-menu-link header-menu-item" data-signin="true" href="/login">
              <i class="fal fa-sign-in item-icon"></i>
              <div class="item-text">ログイン</div>
            </a>
          </li>
          <li>
            <a class="header-menu-link header-menu-item--dark" href="/register">
              <i class="fal fa-edit item-icon"></i>
              <div class="item-text">会員登録</div>
            </a>
          </li>
        </ul>
        <ul class="header-menu sp-menu">
          <li class="header-menu-item">
            <div class="menu drawermenu-trigger">
              <div class="menubar-toggle">
                <span class="menubar-icon"></span>
                <span class="menubar-icon"></span>
                <span class="menubar-icon"></span>
              </div>
            </div>
          </li>
        </ul>
      </div>
      @endif
    </div>
  </header>
  @yield('content')
  
  <div id="js-overlap-hidden-target">
    <div id="corporate-lp-banner">
      <div class="clb-wrappar">
        <div class="container">
          <div class="clb-title">
            <div>御社のサービスを</div>
            <div>ボクシルに掲載しませんか？</div>
          </div>
          <div class="clb-content">
            <div class="clb-content-box">
              <div class="i-element">
                <span class="i-element-star">★</span>
                <span class="i-element-unit">累計掲載実績</span>
                <span class="i-element-text">700</span>
                <span class="i-element-unit">社超</span>
              </div>
              <div class="i-element">
                <span class="i-element-star">★</span>
                <span class="i-element-unit">BOXIL会員数</span>
                <span class="i-element-text">130,000</span>
                <span class="i-element-unit">人超</span>
              </div>
            </div>
          </div>
          <div class="clb-content">見込み客獲得や認知度向上をしたいサービスをお持ちの方は是非サービスをご掲載ください。</div>
          <div class="clb-button">
            <a class="btn btn-link-special" target="_blank" rel="noopener" href="{{route('add_service')}}">サービス掲載申し込み</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer" id="boxil-footer">
      <div class="footer-contents">
        <div class="corporation">
          <div class="logo"><img alt="SMARTCAMP" class="logo-img" src="{{ asset('assets/img/tsukubnobi/smartcamp_logo.svg') }}" />
          </div>
          <div class="border"></div>
          <div class="corporation-info">
            <div class="corporation-info-links">
              <ul>
                <li class="info-links"><a class="link" href="https://smartcamp.co.jp" rel="noopener" target="_blank">
                    <p>会社概要</p>
                  </a></li>
                <li class="info-links"><a class="link" href="https://smartcamp.co.jp/privacy_policy" rel="noopener"
                    target="_blank">
                    <p>個人情報保護方針</p>
                  </a></li>
                <li class="info-links"><a class="link" href="https://smartcamp.co.jp/recruit" rel="noopener"
                    target="_blank">
                    <p>採用について</p>
                  </a></li>
                <li class="info-links"><a class="link" href="https://smartcamp.co.jp/copyright_policy" rel="noopener"
                    target="_blank">
                    <p>引用・転載について</p>
                  </a></li>
              </ul>
            </div>
            <div class="corporation-product-links">
              <ul>
                <li class="product-links"><a class="link" href="https://boxil.jp/" rel="noopener" target="_blank">
                    <p class="bold">BOXIL SaaS</p>
                    <p>- SaaS比較サイト</p>
                  </a></li>
                <li class="product-links"><a class="link"
                    href="https://boxil.jp/consultations?utm_source=footer&amp;utm_medium=boxil" rel="noopener"
                    target="_blank">
                    <p class="bold">BOXIL SaaS質問箱</p>
                    <p>- SaaS特化型Q&Aサイト</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://boxil.jp/mag/" rel="noopener" target="_blank">
                    <p class="bold">BOXIL Magazine</p>
                    <p>- SaaS情報メディア</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://expo.boxil.jp/" rel="noopener" target="_blank">
                    <p class="bold">BOXIL EXPO</p>
                    <p>- サービスと出会うオンライン展示会</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://bales.smartcamp.co.jp/" rel="noopener"
                    target="_blank">
                    <p class="bold">BALES</p>
                    <p>- インサイドセールスアウトソーシング</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://bales.smartcamp.co.jp/bales-cloud/"
                    rel="noopener" target="_blank">
                    <p class="bold">BALES CLOUD</p>
                    <p>- インサイドセールス管理クラウドサービス</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://bales.smartcamp.co.jp/bales-enablement/"
                    rel="noopener" target="_blank">
                    <p class="bold">BALES Enablement</p>
                    <p>- インサイドセールス人材育成サービス</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://column.bales.smartcamp.co.jp/" rel="noopener"
                    target="_blank">
                    <p class="bold">SALES TIMES</p>
                    <p>- 営業力を高めるセールスノウハウメディア</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://boxil.jp/beyond/" rel="noopener"
                    target="_blank">
                    <p class="bold">Beyond</p>
                    <p>- テクノロジーと人をつなぐビジネスメディア</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://boxil.jp/business_templates/" rel="noopener"
                    target="_blank">
                    <p class="bold">ビジネステンプレート</p>
                    <p>- 便利なテンプレートを無料ダウンロード</p>
                  </a></li>
                <li class="product-links"><a class="link" href="https://adxl.co.jp/" rel="noopener" target="_blank">
                    <p class="bold">ADXL</p>
                    <p>- SaaSに特化したデジタルエージェンシー</p>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="products">
          <div class="product">
            <div class="logo"><img alt="BOXIL" class="logo-img" src="{{ asset('assets/img/tsukubnobi/boxil_logo.svg') }}" /></div>
            <div class="border"></div>
            <div class="product-info">
              <div class="product-info-links">
                <ul class="info-links-inner">
                  <li class="info-links"><a class="link" href="https://boxil.jp/terms/" rel="noopener" target="_blank">
                      <p>利用規約</p>
                    </a></li>
                  <li class="info-links"><a class="link" href="https://boxil.jp/legal/" rel="noopener" target="_blank">
                      <p>特定商取引法に基づく表記</p>
                    </a></li>
                  <li class="info-links"><a class="link" href="https://smartcamp.co.jp/handling_of_privacy"
                      rel="noopener" target="_blank">
                      <p>個人情報の取扱いについて</p>
                    </a></li>
                  <li class="info-links"><a class="link" href="https://boxil.jp/faq/" rel="noopener" target="_blank">
                      <p>よくあるご質問</p>
                    </a></li>
                  <li class="info-links"><a class="link"
                      href="https://tayori.com/form/a8747ed96dddc3a3f8c17d7b4367c5a6ff15e4c9/" rel="noopener"
                      target="_blank">
                      <p>お問い合わせ</p>
                    </a></li>
                  <li class="info-links"><a class="link" href="https://boxil.jp/review_guideline/" rel="noopener"
                      target="_blank">
                      <p>口コミガイドライン</p>
                    </a></li>
                </ul>
                <ul class="sns-icons">
                  <li class="icon"><a class="link" href="https://twitter.com/BOXIL_info" rel="noopener" target="_blank"
                      title="boxil twitter"><span class="fa-stack fa-lg"><i class="fab fa-twitter"></i></span></a></li>
                  <li class="icon"><a class="link" href="https://www.facebook.com/boxiljp/" rel="noopener"
                      target="_blank" title="boxil facebook"><span class="fa-stack fa-lg"><i
                          class="fab fa-facebook-f"></i></span></a></li>
                  <li class="icon"><a class="link" href="https://www.youtube.com/channel/UCw0-UD5wPjtaVF6MACqKwSA"
                      rel="noopener" target="_blank" title="boxil youtube"><span class="fa-stack fa-lg"><i
                          class="fab fa-youtube"></i></span></a></li>
                </ul>
              </div>
              <div class="for-vendor-infos">
                <p class="title">ベンダーの方はこちら</p>
                <ul class="for-vendor-buttons">
                  <li class="vendor-button"><a class="link"
                      href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=boxil_footer&amp;_ga=2.224893466.1218641360.1589704075-amp-fgQzhj5ObiMSQV7UO0yDLgMw38DkCfjWyCjUFRFBaQW7-_JOyjyr_F9kmlK3TVdn"
                      rel="noopener" target="_blank">
                      <p>サービス掲載</p>
                    </a></li>
                  <li class="vendor-button"><a class="link"
                      href="https://boxil.smartcamp.co.jp/boxil-ads?utm_source=organic&amp;utm_medium=boxil&amp;utm_campaign=footer"
                      rel="noopener" target="_blank">
                      <p>タイアップ広告 (BOXIL Ads)</p>
                    </a></li>
                  <li class="vendor-button"><a class="link"
                      href="https://boxil.smartcamp.co.jp/boxil-biz-deep?utm_source=organic&amp;utm_medium=boxil&amp;utm_campaign=footer"
                      rel="noopener" target="_blank">
                      <p>ブランド向け広告 (BOXIL BIZ DEEP)</p>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="credit">
            <div class="freepik">
              <p>designed by freepik.com</p>
            </div>
            <div class="regist_trademark">
              <p>著作権法により認められる場合を除き、コンテンツを当社、原著作者またはその他の権利者の許諾を得ることなく、複製、公衆送信、改変、修正、転載等する行為は著作権法により禁止されています。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Copyright ©︎ 2023 All Rights Reserved by SMARTCAMP Co., Ltd.</p>
      </div>
    </div>
  </footer>
</body>
@yield('script')
</html>