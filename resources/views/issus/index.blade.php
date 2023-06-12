<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

@php
$user=Auth::user();
@endphp

<head>
  <script>
  if ("serviceWorker" in navigator) {
    try {
      navigator.serviceWorker.register("/sw.js")
    } catch (e) {
      console.log("SW faild")
    }
  }
  </script>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="#ffffff" name="theme-color" />
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <meta content="on" http-equiv="x-dns-prefetch-control" />
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.png') }}" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <script async="" crossorigin="anonymous" src="{{ asset('assets/js/fontawesome.js') }}"></script>
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-1.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/dashboard-responsive.css') }}" />
  <link rel="stylesheet" media="all" href="https://precompiled-assets.boxil.jp/assets/application-ad1c2e0774638a9874c7ce9b343d948ebe76d23a8686d7ac92f28ca8d37a87a5.css" />
  <script src="{{ asset('assets/js/dashboard-index.js') }}">
  </script> <!-- Google Tag Manager -->
  <script>
    (
      function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl +
          '&gtm_auth=cp0y_3tB8sa_v6ZzSrzPcQ&gtm_preview=env-62&gtm_cookies_win=x';
        f.parentNode.insertBefore(j, f);
      }
    )
    (window, document, 'script', 'dataLayer', 'GTM-NWHPVX');
  </script>
  <!-- End Google Tag Manager -->
  <script>
    window.gon = {};
    gon.track_event_params = {
      "controller": "services",
      "action": "index",
      "finished_experiments": null,
      "controller": "services",
      "action": "index",
      "original_url": "https://10.10.14.81:8000/",
      "referer_url": null,
      "request_method": "GET",
      "visit_token": "63a799ad-86b1-4e14-8433-015508f7615a",
      "ahoy_visitor": "d1a7375b-f6bd-458b-8513-7fd5dd70fc33",
      "request_ips": "188.43.14.13, 172.68.10.212, 10.16.1.223",
      "phase": "render",
      "request_hash": "61ba5ec401156a4805e4324e8a095a1a",
      "params": {
        "controller": "services",
        "action": "index"
      }
    };
    gon.flash = null;
    gon.category_documents = [{
        "id": 1122,
        "category_id": null,
        "title": "SaaS業界レポート2022",
        "origin_file_id": "e4c6736449243e59f6a7084e5da89799e273b9542b8fe4113eb78b3fd5c2",
        "origin_file_filename": "SaaS業界レポート2022.pdf",
        "origin_file_size": "29027810",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": null,
        "presentation_file_filename": null,
        "presentation_file_size": null,
        "presentation_file_content_type": null,
        "slidable": true,
        "pages": 115,
        "downloads_count": 2696,
        "created_at": "2022-11-11T09:43:42.000+09:00",
        "updated_at": "2023-05-25T14:20:14.000+09:00",
        "self_hosting": false,
        "origin_file_data": {
          "id": "e4c6736449243e59f6a7084e5da89799e273b9542b8fe4113eb78b3fd5c2",
          "storage": "category_store",
          "metadata": {
            "size": "29027810",
            "filename": "SaaS業界レポート2022.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": null,
        "usage_type": "other",
        "is_published_useful_guide": true
      },
      {
        "id": 42,
        "category_id": 117,
        "title": "経費精算システム選び方ガイド",
        "origin_file_id": "bada2aaad9154d2709e51219f2186aa1d53beb53bb90ae497ef14e2cdfab",
        "origin_file_filename": "新選び方ガイド：経費精算システム導入ガイド_20230406.pptx.pdf",
        "origin_file_size": "4661940",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "0f7ff425c2e964bf55bdc97fb9e7d0409fa45d70887fd8d6866849e6d0b1",
        "presentation_file_filename": "経費精算システム選び方ガイド_20210803.pptx",
        "presentation_file_size": "828357",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 25,
        "downloads_count": 16423,
        "created_at": "2016-11-22T12:25:13.000+09:00",
        "updated_at": "2023-05-25T17:30:41.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "bada2aaad9154d2709e51219f2186aa1d53beb53bb90ae497ef14e2cdfab",
          "storage": "category_store",
          "metadata": {
            "size": "4661940",
            "filename": "新選び方ガイド：経費精算システム導入ガイド_20230406.pptx.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "0f7ff425c2e964bf55bdc97fb9e7d0409fa45d70887fd8d6866849e6d0b1",
          "storage": "category_presentations",
          "metadata": {
            "size": "828357",
            "filename": "経費精算システム選び方ガイド_20210803.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 23,
        "category_id": 71,
        "title": "ERP(基幹システム)選び方ガイド",
        "origin_file_id": "0c18139e900f6d6d4287dee988cd5b8fa86e18528ee077f4824e04fcb9b9",
        "origin_file_filename": "ERP(基幹システム)選び方ガイド_20230201.pptx.pdf",
        "origin_file_size": "808045",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "964d2edc412ef6e8512b87e11bb9a10552b276c16b72af12f843e955ef27",
        "presentation_file_filename": "ERP(基幹システム)選び方ガイド_20210428.pptx",
        "presentation_file_size": "1881799",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 15,
        "downloads_count": 7326,
        "created_at": "2016-10-10T17:58:32.000+09:00",
        "updated_at": "2023-05-25T15:00:12.000+09:00",
        "self_hosting": false,
        "origin_file_data": {
          "id": "0c18139e900f6d6d4287dee988cd5b8fa86e18528ee077f4824e04fcb9b9",
          "storage": "category_store",
          "metadata": {
            "size": "808045",
            "filename": "ERP(基幹システム)選び方ガイド_20230201.pptx.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "964d2edc412ef6e8512b87e11bb9a10552b276c16b72af12f843e955ef27",
          "storage": "category_presentations",
          "metadata": {
            "size": "1881799",
            "filename": "ERP(基幹システム)選び方ガイド_20210428.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 45,
        "category_id": 115,
        "title": "請求書発行システム選び方ガイド",
        "origin_file_id": "b46d99de69064ef1bdb3d18a7816a0e5888f1a5ee9551b911485ac5f3ede",
        "origin_file_filename": "請求書発行システム_選び方ガイド_20221221.pptx (2).pdf",
        "origin_file_size": "844533",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "ae0659f2b6eb5c9b1da6ad0e5c573c9ebc05ea9e6f923dcad2e23c89ba64",
        "presentation_file_filename": "請求書発行システム_選び方ガイド_20210430.pptx",
        "presentation_file_size": "1876547",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 19,
        "downloads_count": 7651,
        "created_at": "2016-11-24T19:05:38.000+09:00",
        "updated_at": "2023-05-25T14:33:55.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "b46d99de69064ef1bdb3d18a7816a0e5888f1a5ee9551b911485ac5f3ede",
          "storage": "category_store",
          "metadata": {
            "size": "844533",
            "filename": "請求書発行システム_選び方ガイド_20221221.pptx (2).pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "ae0659f2b6eb5c9b1da6ad0e5c573c9ebc05ea9e6f923dcad2e23c89ba64",
          "storage": "category_presentations",
          "metadata": {
            "size": "1876547",
            "filename": "請求書発行システム_選び方ガイド_20210430.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 77,
        "category_id": null,
        "title": "労務管理システム選び方ガイド",
        "origin_file_id": "3ffbf17e352629e591b352d733bb956195d4778c04ff7bdf6564938a99ec",
        "origin_file_filename": "労務管理システム選び方ガイド_20221128.pptx.pdf",
        "origin_file_size": "1048368",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "4b5da32ab53ce9157ad1e08349627244daad77b1e772b354f0cd9daac2ea",
        "presentation_file_filename": "労務管理システム選び方ガイド_210607.pptx",
        "presentation_file_size": "2139856",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 18,
        "downloads_count": 2378,
        "created_at": "2017-09-21T16:52:33.000+09:00",
        "updated_at": "2023-05-25T10:01:18.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "3ffbf17e352629e591b352d733bb956195d4778c04ff7bdf6564938a99ec",
          "storage": "category_store",
          "metadata": {
            "size": "1048368",
            "filename": "労務管理システム選び方ガイド_20221128.pptx.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "4b5da32ab53ce9157ad1e08349627244daad77b1e772b354f0cd9daac2ea",
          "storage": "category_presentations",
          "metadata": {
            "size": "2139856",
            "filename": "労務管理システム選び方ガイド_210607.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 334,
        "category_id": null,
        "title": "電子契約システム選び方ガイド",
        "origin_file_id": "c80716f98969f3f81ca8fd8456bdd6d01f7335b7dd8d6bbd7573105c788d",
        "origin_file_filename": "新選び方ガイド：電子契約システム導入ガイド_20221024.pptx (4).pdf",
        "origin_file_size": "1881974",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "ee6a0af8d71fe2feb0cb733c8009d9e9e1a73be329b3d0c47d0d8afe4326",
        "presentation_file_filename": "電子契約システム選び方ガイド_210604.pptx",
        "presentation_file_size": "2703375",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 27,
        "downloads_count": 14183,
        "created_at": "2019-08-01T12:32:33.000+09:00",
        "updated_at": "2023-05-25T13:23:55.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "c80716f98969f3f81ca8fd8456bdd6d01f7335b7dd8d6bbd7573105c788d",
          "storage": "category_store",
          "metadata": {
            "size": "1881974",
            "filename": "新選び方ガイド：電子契約システム導入ガイド_20221024.pptx (4).pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "ee6a0af8d71fe2feb0cb733c8009d9e9e1a73be329b3d0c47d0d8afe4326",
          "storage": "category_presentations",
          "metadata": {
            "size": "2703375",
            "filename": "電子契約システム選び方ガイド_210604.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 67,
        "category_id": null,
        "title": "人事評価システム選び方ガイド",
        "origin_file_id": "a029147f9f31f36e8beeb458c8e6eefce42017f93615d0affe5ad0fa33fe",
        "origin_file_filename": "新選び方ガイド：人事評価システム導入ガイド_20221219.pptx.pdf",
        "origin_file_size": "3254995",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "4a38d3931269f30cf7d90249c7205a77f108e2eb062b91220a7f72b1e0de",
        "presentation_file_filename": "人事評価システム選び方ガイド_20210617.pptx",
        "presentation_file_size": "2197803",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 24,
        "downloads_count": 4293,
        "created_at": "2017-09-20T19:00:08.000+09:00",
        "updated_at": "2023-05-22T08:48:48.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "a029147f9f31f36e8beeb458c8e6eefce42017f93615d0affe5ad0fa33fe",
          "storage": "category_store",
          "metadata": {
            "size": "3254995",
            "filename": "新選び方ガイド：人事評価システム導入ガイド_20221219.pptx.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "4a38d3931269f30cf7d90249c7205a77f108e2eb062b91220a7f72b1e0de",
          "storage": "category_presentations",
          "metadata": {
            "size": "2197803",
            "filename": "人事評価システム選び方ガイド_20210617.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 17,
        "category_id": 111,
        "title": "採用管理システム選び方ガイド",
        "origin_file_id": "8a71becfb23e9fdc6615891d7dd87955a0d1670b63f8788e46bd5993c918",
        "origin_file_filename": "新選び方ガイド：採用管理システム（ATS）導入ガイド_20221026.pptx.pdf",
        "origin_file_size": "4246460",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "5751f31deaa56f3d692dd4661a4a6551711ca8bfcb2de35228fad35a0459",
        "presentation_file_filename": "採用管理システム選び方ガイド_210330 (1).pptx",
        "presentation_file_size": "2657737",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 24,
        "downloads_count": 4002,
        "created_at": "2016-10-10T17:37:49.000+09:00",
        "updated_at": "2023-05-25T10:01:09.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "e01605a07d52471db739a3b3f8c7122c.pdf",
          "storage": "category_store",
          "metadata": {
            "size": 4228362,
            "filename": "新選び方ガイド：採用管理システム（ATS）導入ガイド_20230420.pptx.pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "5751f31deaa56f3d692dd4661a4a6551711ca8bfcb2de35228fad35a0459",
          "storage": "category_presentations",
          "metadata": {
            "size": "2657737",
            "filename": "採用管理システム選び方ガイド_210330 (1).pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      },
      {
        "id": 51,
        "category_id": 469,
        "title": "文書管理システム選び方ガイド",
        "origin_file_id": "956bc8ec2e8558dc1dd8009e5e7879d31be0a7a30b9a5f5e72c8e8a0bda7",
        "origin_file_filename": "WP_文書管理_20230201.pptx (1).pdf",
        "origin_file_size": "823579",
        "origin_file_content_type": "application/pdf",
        "presentation_file_id": "18ac1a7ce689efe8638ae98505f00ac6d134af5394a99d04e8d82a936ee7",
        "presentation_file_filename": "WP_文書管理_202120210728.pptx",
        "presentation_file_size": "1794147",
        "presentation_file_content_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "slidable": true,
        "pages": 14,
        "downloads_count": 1553,
        "created_at": "2017-06-28T18:38:53.000+09:00",
        "updated_at": "2023-05-25T10:08:22.000+09:00",
        "self_hosting": true,
        "origin_file_data": {
          "id": "956bc8ec2e8558dc1dd8009e5e7879d31be0a7a30b9a5f5e72c8e8a0bda7",
          "storage": "category_store",
          "metadata": {
            "size": "823579",
            "filename": "WP_文書管理_20230201.pptx (1).pdf",
            "mime_type": "application/pdf"
          }
        },
        "presentation_file_data": {
          "id": "18ac1a7ce689efe8638ae98505f00ac6d134af5394a99d04e8d82a936ee7",
          "storage": "category_presentations",
          "metadata": {
            "size": "1794147",
            "filename": "WP_文書管理_202120210728.pptx",
            "mime_type": "application/vnd.openxmlformats-officedocument.presentationml.presentation"
          }
        },
        "usage_type": "boxil_wp",
        "is_published_useful_guide": true
      }
    ];
  </script>
  <style>
    .pagesCategories-content-childCategory {
      width: 24%;
    }
    .pagesCategories-content-childCategory a {
      color: black;
      text-decoration: none;
    }
    .pagesCategories-content-parentCategory a {
      color: black;
      text-decoration: none;
    }
  </style>
</head>

<body class="services index" id="">
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
            src="{{ asset('assets/img/tsukubnobi/tsukunobi_favicon.svg') }}" />
        </a>
      </div>
      <div class="brand-logo">
        <a href="https://boxil.jp/">
          <img class="brand-logo-img" alt="BOXIL SaaS ロゴ"
            src="https://assets.boxil.jp/images/logo/boxil-saas-yoko-color-logo.svg" />
        </a>
      </div>
      <div class="header-nav">
        <h1 class="brand-title">BOXIL SaaS（ボクシル サース）- SaaS比較サイト</h1>
        <nav>
          <ul class="navigation">
            <li class="navigation-item sign">
              <a class="bn-title-menu-ele-link" href="/registration/">無料会員登録</a>
            </li>
            <li class="navigation-item sign">
              <a class="bn-title-menu-ele-link" data-signin="true" href="/login">ログイン</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/categories/">カテゴリから探す</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/issues/">課題から探す</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/category_documents/">お役立ちガイド</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link" href="/mag/">ニュース・記事</a>
            </li>
            <li class="navigation-item navigation-introdution">
              <a class="bn-title-menu-ele-link"
                href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=boxil_header">掲載希望の方</a>
            </li>
            <li class="navigation-item">
              <a class="bn-title-menu-ele-link"
                href="/consultations/?utm_medium=boxil&utm_source=header">SaaSのQ&amp;A</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header-search">
        <form accept-charset="utf-8" action="/search/" class="header-search-form" method="get">
          <input type="text" name="q" class="input" placeholder="サービス名・カテゴリ名 [例：Salesforce、営業支援ツール]" />
          <button aria-label="検索" class="btn-search">
            <i class="fa fa-search"></i>
          </button>
        </form>
      </div>
      <div class="header-introduction">
        <a class="header-menu-link header-menu-item"
          href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=boxil_header">
          <i class="fas fa-laptop item-icon"></i>
          <div class="item-text">掲載希望の方</div>
        </a><!--  -->
      </div>
      @if($user)
      <div class="header-action">
        <ul class="header-menu pc-menu">
          <li class="header-menu-item dropdown-trigger ">
            <i class="fal fa-user-circle item-icon" aria-hidden="true"></i>
            <div class="item-text">マイページ</div>
            <div class="dropdown-block dropdown-block-header">
              <ul>
                <li class="dropdown-list">
                  <a class="dropdown-inner" href="/mypage">
                    <i class="fa fa-home dropdown-icon" aria-hidden="true"></i>
                    {{$user->fisrt_name}} {{$user->last_name}}マイページ
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
            <a class="header-menu-link header-menu-item" data-signin="true" href="/login">
              <i class="fal fa-sign-in item-icon"></i>
              <div class="item-text">ログイン</div>
            </a>
          </li>
          <li>
            <a class="header-menu-link header-menu-item--dark" href="/register/">
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
  <div class="issuesWrapper" style="padding-top: 4rem;">
    <div class="issues">
      <div class="container">
        <div class="issues__header">
          <ul class="issues__breadcrumb">
            <li class="issues__breadcrumbItem">
              <a href="/"><span class="issues__linkText">ボクシルSaaS TOP</span></a>
            </li>
            <li class="issues__breadcrumbItem">課題から探す</li>
          </ul>
          <h1 class="issues__title">課題からSaaSを探す</h1>
        </div>
        <div class="issues__main">
          <div class="issue" id="paperless">
            <h2 class="issue__header">
              <i class="fa fa-bullseye-arrow" aria-hidden="true"></i>
              <span class="m-l-12">ペーパーレス化を進めたい</span>
            </h2>
            <div class="issue__main">
              <div class="issue__mainLeft">
                <div class="issue__mainLeftInner">
                  <img alt="ペーパーレス化完全ガイド" class="issue__mainLeftImg--small" src="https://assets.boxil.jp/images/issue/wp_paperless.png">
                  <form class="" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get"><input type="hidden" name="type" value="category_document">
                    <input type="hidden" name="ids[]" value="589">
                    <input type="hidden" name="_via" value="ii-documentDL-main">
                    <input type="hidden" name="is_comparison" value="false">
                    <button name="button" type="submit" class="issue__downloadButton js-track js-track-ii-documentDL-main">
                      <div class="buttonText">ダウンロード</div>
                    </button>
                  </form>
                </div>
              </div>
              <div class="issue__mainRight">
                <div class="issueDetail">
                  <h3 class="issueDetail__header">ペーパーレス化のおすすめカテゴリ</h3>
                  <div class="issueDetail__main">
                    <div class="issueDetail__buttonArea">
                      <a href="/sc-web_conference/">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">Web会議</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc-expense/">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">経費精算</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc-attendance/">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">勤怠管理</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc-salary_calculation/">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">給与計算</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc-project/">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">プロジェクト管理</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="issues__main">
          <div class="issue" id="remoteWork">
            <h2 class="issue__header">
              <i class="fa fa-bullseye-arrow" aria-hidden="true"></i>
              <span class="m-l-12">リモートワークを進めたい</span>
            </h2>
            <div class="issue__main">
              <div class="issue__mainLeft">
                <img alt="" class="issue__mainLeftImg" src="https://assets.boxil.jp/images/issue/issue1.png">
              </div>
              <div class="issue__mainRight">
                <div class="issueDetail">
                  <h3 class="issueDetail__header">リモートワークのおすすめカテゴリ</h3>
                  <div class="issueDetail__main"><div class="issueDetail__buttonArea">
                    <a href="/sc-remote_access_tool/"><div class="issueDetail__button">
                      <div class="issueDetail__text">リモートアクセスツール</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc-business_chat/">
                    <div class="issueDetail__button">
                      <div class="issueDetail__text">ビジネスチャット</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc-pbx/">
                    <div class="issueDetail__button">
                      <div class="issueDetail__text">PBX</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc-mdm/">
                    <div class="issueDetail__button">
                      <div class="issueDetail__text">モバイルデバイス管理</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer" id="boxil-footer">
      <div class="footer-contents">
        <div class="corporation">
          <div class="logo"><img alt="SMARTCAMP" class="logo-img" src="https://boxil.jp/footer/smartcamp_logo.svg" />
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
            <div class="logo"><img alt="BOXIL" class="logo-img" src="https://boxil.jp/footer/boxil_logo.svg" /></div>
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

</html>