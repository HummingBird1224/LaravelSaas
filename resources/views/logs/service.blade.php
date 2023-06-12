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
  <link rel="stylesheet" media="all" href="https://precompiled-assets.boxil.jp/assets/services/v2/show/index-917fbeceab11f4403c52451a97800f334c8e114fca697810622c201cdf535dc0.css" />
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
    .layout_v2>.container {
      padding: 0;
    }
    .v2Layout {
      display: flex;
      width: 100%;
      max-width: 1200px;
      margin-top: 32px;
      margin-bottom: 100px;
    }
    .servicesV2 .servicesV2Contents {
        width: 100%;
        max-width: 1169px;
    }
    .servicesV2 .boxil-wrappar {
      display: block;
    }
    .mainContents {
      width: 100%;
    }
    .container_overview {
      background-color: #FFFFFF;
      padding: 32px;
      width: 100%;
      border-right: 1px solid #E0E0E0;
      border-left: 1px solid #E0E0E0;
      border-top: 1px solid #E0E0E0;
    }
    .service_show_overview__description {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 16px;
      gap: 4px;
      background: #F5F5F5;
      margin-top: 24px;
    }
    .service_show_overview__header {
      margin-bottom: 0px;
      margin-left: 32px;
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100%;
    }
    .show_mobile_view {
      display: none;
    }
    .service_show_overview__header__main__content__header {
      margin-top: 0px;
      display: flex;
      align-items: baseline;
      flex-direction: column;
    }
    .service_show_overview__header__main__content__i-bottom {
      display: flex;
      align-items: flex-start;
      flex-direction: column;
    }
    .show_PC_view {
      display: flex;
    }
    .service_show_overview__header__main__content__catchphrase {
      font-weight: 400;
      font-size: 16px;
      line-height: 20px;
      letter-spacing: 0.8px;
      color: #222222;
      margin-bottom: 8px;
      margin-top: 0px;
    }
    .service_show_overview__description__title {
      font-weight: 600;
      font-size: 16px;
      line-height: 100%;
      color: #006666;
    }
    .service_show_overview__description__description {
      font-weight: 300;
      font-size: 14px;
      line-height: 150%;
      color: #222222;
      width: 100%;
    }
    .ss-tab-list {
      width: 100%;
      display: flex;
      text-align: center;
      flex-direction: row;
      border: 1px solid #E0E0E0;
      font-size: 14px;
      background-color: #FFFFFF;
      height: 64px;
    }
    .ss-tab-list .tabList__item {
      text-align: center;
      letter-spacing: 0.008em;
      width: 100%;
    }
    .ss-tab-list .tabList__item .js-tab-hover {
      padding: 0;
      width: 100%;
    }
    .ss-tab-list .tabList__item .js-tab-hover a {
      display: inline-block;
      text-decoration: none;
      width: 100%;
      color: #222222;
      padding: 20px;
    }
    .serviceShowCustomers {
      margin-top: 32px;
      border: 1px solid #E0E0E0;
      border-radius: 0;
      padding: 32px;
      background: #FFFFFF;
    }
    .servicesV2 h2.ServicesShow-main-block-title {
      font-size: 24px;
      font-weight: bold;
      color: #006666;
      letter-spacing: 0.02em;
      margin-top: 8px;
      line-height: 36px;
    }
    .ServicesShow-main-block-title {
      font-size: 22px;
      font-weight: bold;
      color: #006666;
      padding-bottom: 8px;
      border-bottom: 1px solid #E0E0E0;
    }
    .serviceShowCustomers .ServicesShow-main-block-contents {
      margin-top: 24px;
    }
    .serviceShowCustomers .customerLogosPerformance {
      width: calc(100% + 16px);
    }
    .serviceShowCustomers .customerLogosPerformance ul {
      margin-top: 16px;
      margin-bottom: 0;
    }
    .serviceShowCustomers .customerLogosPerformance li {
      width: 33.3%;
      min-width: 33.3%;
      max-width: 33.3%;
      padding-right: 16px;
      overflow: unset;
      text-overflow: unset;
      white-space: break-spaces;
      color: #222222;
      display: flex;
      margin-bottom: 4px;
      word-break: break-all;
    }
    .serviceShowCardV2 {
      margin-top: 32px;
      letter-spacing: 0.8px;
      padding: 32px;
      border: 1px solid #E0E0E0;
      background-color: #FFFFFF;
    }
    #ss-plans .ServicesShow-main-block-title {
      margin-bottom: 0;
    }
    #ss-plans .ServicesShow-main-block-contents {
      margin-bottom: 0;
    }
    .serviceShowCardV2 .servicePlansShow .serviceFreePlans {
      margin-top: 0;
      overflow: hidden;
    }
    .serviceShowCardV2 .servicePlansShow .servicePlanBox {
      margin-top: 8px;
      width: calc(100% + 20px);
    }
    .serviceShowCardV2 .servicePlansShow .servicePlanBox .servicePlan {
      min-width: auto;
      width: calc(33.33% - 16px);
      margin-top: 16px;
    }
    .serviceShowCardV2 .servicePlansShow .servicePlan__headerWrapper-content {
      font-size: 16px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      overflow: hidden;
      max-height: 60px;
      width: auto;
      text-align: center;
    }
    .serviceShowCardV2 .servicePlansShow .servicePlan__descriptionWrapper-description {
      width: 90%;
      color: #707070;
    }
    .container_feature {
      padding: 32px;
      background-color: white;
      border: 1px solid #E0E0E0;
      margin-top: 32px;
    }
    .featuresWrapper {
      display: flex;
      justify-content: space-between;
      flex-flow: wrap;
      margin-top: 20px;
      margin-bottom: 40px;
    }
    .featuresTagWrapper__innerTitle {
      width: 100%;
      border-bottom: 1px solid #E0E0E0;
      padding-bottom: 0;
      color: #006666;
      font-size: 16px;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 0px;
    }
    .featuresTagWrapper {
      display: flex;
      align-items: baseline;
      flex-flow: wrap;
      margin-top: 0;
    }
    .featuresWrapper {
      display: flex;
      justify-content: space-between;
      flex-flow: wrap;
      margin-top: 20px;
      margin-bottom: 40px;
    }
    .featuresColumn {
      width: calc(33.33% - 12px);
      min-height: 48px;
      border-bottom: 1px solid #E0E0E0;
      display: flex;
      align-items: center;
      padding: 12px 0px 12px 6px;
    }
    .featuresColumn__icon {
      margin-left: auto;
      margin-right: 7px;
      display: flex;
      align-items: center;
      font-size: 18px;
      min-width: 10%;
      justify-content: center;
      color: #F66800;
    }
    .featuresRatings .featuresRatings__title {
      color: #707070;
      font-size: 14px;
      margin-bottom: 16px;
    }
    .featuresRatings .featuresRatings__date {
      font-size: 12px;
      line-height: 18px;
      font-weight: 300;
      text-align: end;
      color: #707070;
    }
    .featuresRatings .featureRatingsItem {
      display: flex;
      align-items: baseline;
      min-width: 306px;
      width: calc(50% - 12px);
      margin-bottom: 16px;
      line-height: 150%;
      max-width: 50%;
    }
    .featuresTagWrapper__innerTitle {
      width: 100%;
      border-bottom: 1px solid #E0E0E0;
      padding-bottom: 2px;
      color: #006666;
      font-size: 16px;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 16px;
      line-height: 44px;
    }
    .featuresTagWrapper {
      display: flex;
      align-items: baseline;
      flex-flow: wrap;
      margin-top: 0;
    }
    .featuresTagWrapper__tag {
      display: flex;
      align-items: center;
      height: 30px;
      background-color: #F5F5F5;
      border-radius: 4px;
      padding: 8px 12px;
      margin-right: 16px;
      margin-bottom: 0;
      margin-top: 16px;
      color: #222222;
    }
    .featuresRatings .featuresRatings__items {
      display: flex;
      flex-wrap: wrap;
      gap: 0;
      margin-bottom: 16px;
    }
    .ss-reviews {
      letter-spacing: 0.8px;
      margin-top: 32px;
    }
    .serviceMetrics__item {
      padding: 32px;
      border: 1px solid #E0E0E0;
      background-color: #FFFFFF;
    }
    .reviewOverviewCard__contents {
      margin-top: 24px;
    }
    .serviceMetrics__item .reputationRecommendCard {
      display: flex;
      background: #F5F5F5;
      margin: 0 0 40px 0;
      padding: 16px;
      border: 1px solid #E0E0E0;
    }
    .ss-reviews .reviewOverviewCard__subTitle {
      margin-top: 48px;
      font-size: 16px;
      font-weight: bold;
      color: #006666;
      border-bottom: solid 1px #EEEEEE;
      padding-bottom: 12px;
      margin-bottom: 0;
    }
    .reputationSummariesWrapper {
      margin-bottom: 40px;
      margin-top: 16px;
    }
    .reputationSummariesWrapper {
      margin-bottom: 40px;
      margin-top: 16px;
    }
    .servicesV2 {
      width: 100%;
    }
  </style>
</head>

<body class="services show layout_v2" id="">
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

  <div class="container" style="padding-top: 4rem;">

    <div class="serviceShowWrapper" id="top" itemtype="https://schema.org/WebPage" itemid="https://boxil.jp/service/3558/" itemscope="" style="padding-bottom: 0">
      <div class="pageHeader breadcrumb-v2">
        <div class="breadcrumb-boxil-wrapper">
          <div>
            <ul>
              <li class="p-t-7"><a href="https://boxil.jp/"><span class="m-l-5">BOXIL</span></a></li>
              <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
              <li class="p-t-7"><a href="https://boxil.jp/mag/a208/"><span class="m-l-5">【2023年】Web会議システム比較21選！選び方・テレワークにおすすめのツール</span></a></li>
              <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
              <li class="p-t-7"><a href="https://boxil.jp/sc-web_conference/"><span class="m-l-5">WEB会議システム</span></a></li>
              <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
              <li class="p-t-7"><span class="m-l-5">Zoom</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="v2Navbar">
      <div class="v2NavbarItem">
        <div class="v2NavbarItem__title"><span>WEB会議システム</span>の関連情報</div>
        <div class="v2NavbarItem__button">
          <form class="" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
            <input type="hidden" name="type" value="category">
            <input type="hidden" name="ids[]" value="467">
            <input type="hidden" name="_via" value="cs-categoryDL-header">
            <input type="hidden" name="is_comparison" value="false">
            <button name="button" type="submit" class="cvButton v2NavbarItem__button js-track js-track-cs-categoryDL-header">無料で一括資料ダウンロード</button>
          </form>
        </div>
      </div>
      <div class="v2NavbarLink">
        <div class="relatedArticleLinksWrapper">
          <ul class="relatedArticleLinksPc">
            <li class="relatedArticleLinks__item">
              <div class="relatedArticleLinks__link"><a href="https://boxil.jp/mag/a208/">おすすめ比較</a></div>
            </li>
            <li class="relatedArticleLinks__item">
              <div class="relatedArticleLinks__link"><a href="https://boxil.jp/sc-web_conference/">人気ランキング</a></div>
            </li>
            <li class="relatedArticleLinks__item">
              <div class="relatedArticleLinks__link"><a href="https://boxil.jp/mag/a7726/">導入事例</a></div>
            </li>
            <li class="relatedArticleLinks__item">
              <div class="relatedArticleLinks__link"><a href="https://boxil.jp/mag/a865/">無料サービス</a></div>
            </li>
          </ul>
          <div class="relatedArticleLinksMobile">
            <table class="relatedArticleLinks--mobile">
              <tbody>
                <tr>
                  <td><a href="https://boxil.jp/mag/a208/">おすすめ比較</a></td>
                  <td><a href="https://boxil.jp/sc-web_conference/">人気ランキング</a></td>
                  <td><a href="https://boxil.jp/mag/a7726/">導入事例</a></td>
                </tr>
                <tr>
                  <td><a href="https://boxil.jp/mag/a865/">無料サービス</a></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="v2Layout">

      <script type="application/ld+json">{"@context":"http://schema.org","@id":"https://boxil.jp/service/3558/","@type":"WebPage","dateModified":"2023-04-30T20:42:19+09:00","mainEntityOfPage":{"@type":"WebPage","@id":"https://boxil.jp/service/3558/"}}</script>
      <script type="application/ld+json">{"@context":"https://schema.org/","@type":"Product","@id":"Zoom","name":"Zoom","description":"Zoomは、クラウドのビデオ会議とウェブ会議、およびグループメッセージングを使いやすく統合したプラットフォーム。Windows、Mac、iOS、Android、Blackberry、Zoom Rooms、およびH.323 / SIPルームシステムで最高のビデオ、オーディオ、およびスクリーン共有体験を提供。","logo":"/attachments/files/images/eyJpZCI6IjYzNGExYmFiN2E2YmE3NGM3NDRmY2Q0MTJlZGI5MjgzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xdDBva3IyLnBuZyIsInNpemUiOjU4NjUsIm1pbWVfdHlwZSI6bnVsbH19","image":"/attachments/files/images/eyJpZCI6IjYzNGExYmFiN2E2YmE3NGM3NDRmY2Q0MTJlZGI5MjgzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xdDBva3IyLnBuZyIsInNpemUiOjU4NjUsIm1pbWVfdHlwZSI6bnVsbH19","brand":{"@type":"Brand","name":"企業情報未登録"},"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":0,"ratingValue":"4.43","ratingCount":1591}}</script>
      <script type="application/ld+json">{"@context":"http://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"BOXIL","item":"https://boxil.jp/"},{"@type":"ListItem","position":2,"name":"【2023年】Web会議システム比較21選！選び方・テレワークにおすすめのツール","item":"https://boxil.jp/mag/a208/"},{"@type":"ListItem","position":3,"name":"WEB会議システム","item":"https://boxil.jp/sc-web_conference/"},{"@type":"ListItem","position":4,"name":"Zoom","item":"https://boxil.jp/service/3558/"}]}</script>
      <div class="servicesV2">

        <div class="servicesV2Contents">
          <div class="boxil-wrappar">
            <main class="mainContents">
              <div class="mainContents__firstView container_overview">
                <div id="ss-overview">
                  <div class="service_show_overview__download_wrapper">
                    <div class="service_show_overview__download_wrapper__main">
                      <div class="service-content-left">
                        <div class="service_show_overview__download_wrapper__logoService">
                          <div class="serviceLogo">
                            <img alt="Zoom" class="service-logo-image" loading="lazy" src="/attachments/files/images/eyJpZCI6ImE0MDlmZTc0N2UyOWQ3OGRmMDQ5YzQ1NjM3MmQxMjAzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy16OWhtM2kucG5nIiwic2l6ZSI6NDI1MiwibWltZV90eXBlIjpudWxsfX0">
                          </div>
                        </div>
                      </div>
                      <div class="service_show_overview__header">
                        <div class="service_show_overview__header__main">
                          <div class="service_show_overview__header__main__content">
                            <h1 class="service_show_overview__header__main__content__header">
                              <div class="service_show_overview__header__main__content__header__title-container">
                                <div class="service_show_overview__header__main__content__header__title-container-title">Zoom</div>
                              </div>
                              <div class="service_show_overview__header__main__content__catchphrase">の評判・口コミ・料金・機能・導入事例</div>
                            </h1>
                            <div class="service_show_overview__header__main__content__i-bottom">
                              <div class="service_show_overview__header__main__content__i-bottom-left">
                                <div class="service_show_overview__header__main__content__i-bottom-review">
                                  <div class="text-no-spacing">
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                  </div>
                                  <div class="service_show_overview__header__main__content__i-bottom-review-score">4.43</div>
                                  <div class="service_show_overview__header__main__content__i-bottom-review-count">
                                    <a class="service_show_overview__header__main__content__i-bottom-review-link" href="/service/3558/reviews/">1593件の口コミ </a>
                                  </div>
                                </div>
                              </div>
                              <div class="service_show_overview__header__main__content__i-bottom-right">
                                <div class="service_show_overview__header__main__content__i-bottom-updatedAt">最終更新日 : 2023年04月30日 20:42<time datetime="2023-04-30T20:42:19+09:00" itemprop="dateModified"></time></div>
                              </div>
                            </div>
                            <div class="show_PC_view"></div>
                          </div>
                        </div>
                      </div>
                      <div class="show_mobile_view"></div>
                    </div>
                  </div>
                </div>
                <div>
                  <div id="ss-content">
                    <div class="service_show_overview__description">
                      <div class="service_show_overview__description__title">
                        <i class="far fa-file-alt m-r-8" aria-hidden="true"></i>サービスの説明
                      </div>
                      <div class="service_show_overview__description__description">
                        <div class="servicesShowContentWrapper">
                          <div class="servicesShowContentWrapper__detailHidden servicesShowContentWrapper__detailText">
                            <p>Zoomは、クラウドのビデオ会議とウェブ会議、およびグループメッセージングを使いやすく統合したプラットフォーム。Windows、Mac、iOS、Android、Blackberry、Zoom Rooms、およびH.323 / SIPルームシステムで最高のビデオ、オーディオ、およびスクリーン共有体験を提供。</p>
                          </div>
                        </div>
                        <div class="serviceShowCard__footer" id="ss-content-readmore" style="display: none;">
                          <div class="btn-read-more">
                            <div class="m-r-8">もっと説明を読む</div>
                            <i class="far fa-chevron-double-down" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>

        <div class="servicesV2Contents tab-position-sticky" style="top: 0px;">
          <ul class="ss-tab-list js-tab-items">
            <li class="tabList__item" style="width: 25.0%; display: flex">
              <div class="js-tab-hover menuTab__hover">
                <a class="js-tab-link menuTab__link text-overflow-ellipsis" href="#ss-documents">サービス資料<i class="far fa-chevron-down m-l-8" aria-hidden="true"></i></a>
              </div>
            </li>
            <li class="tabList__item" style="width: 25.0%; display: flex">
              <div class="tab-border-left"></div>
              <div class="js-tab-hover menuTab__hover">
                <a class="js-tab-link menuTab__link text-overflow-ellipsis" href="#ss-plans">料金プラン<i class="far fa-chevron-down m-l-8" aria-hidden="true"></i></a>
              </div>
            </li>
            <li class="tabList__item" style="width: 25.0%; display: flex">
              <div class="tab-border-left"></div>
              <div class="js-tab-hover menuTab__hover">
                <a class="js-tab-link menuTab__link text-overflow-ellipsis" href="#ss-features">機能一覧<i class="far fa-chevron-down m-l-8" aria-hidden="true"></i></a>
              </div>
            </li>
            <li class="tabList__item" style="width: 25.0%; display: flex">
              <div class="tab-border-left"></div>
              <div class="js-tab-hover menuTab__hover">
                <a class="js-tab-link menuTab__link text-overflow-ellipsis" href="#ss-basic-info-tabs">口コミ・評判<i class="far fa-chevron-down m-l-8" aria-hidden="true"></i></a>
              </div>
            </li>
          </ul>
        </div>

        <div class="servicesV2Contents">
          <div class="boxil-wrappar">

            <div class="mainContents__subView serviceShowCustomers">
              <div id="ss-customerLogos">
                <h2 class="ServicesShow-main-block-title">導入実績</h2>
                <div class="ServicesShow-main-block-contents">
                  <div class="customerLogosPerformance">
                    <ul>
                      <li><div>・</div><div>楽天株式会社</div></li>
                      <li><div>・</div><div>日本電気株式会社</div></li>
                      <li><div>・</div><div>サイボウズ株式会社</div></li>
                      <li><div>・</div><div>経済産業省</div></li>
                      <li><div>・</div><div>全日本空輸株式会社</div></li>
                      <li><div>・</div><div>日本航空株式会社</div></li>
                      <li><div>・</div><div>株式会社ディー・エヌ・エー</div></li>
                      <li><div>・</div><div>株式会社サイバーエージェント</div></li>
                      <li><div>・</div><div>大同生命保険株式会社</div></li>
                      <li><div>・</div><div>クックパッド株式会社</div></li>
                      <li><div>・</div><div>株式会社LIXIL</div></li>
                      <li><div>・</div><div>株式会社野村総合研究所</div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="serviceShowCardV2">
              <div id="ss-plans">
                <h2 class="ServicesShow-main-block-title">料金プラン一覧</h2>
                <div class="servicePlansShow servicePlansShowV2">
                  <div class="ServicesShow-main-block-contents">
                    <div class="serviceFreePlans"></div>
                    <div class="servicePlanBox">

                      <div id="sep-0"></div>
                      <div class="servicePlan">
                        <div class="servicePlan__headerWrapper">
                          <div class="servicePlan__center">
                            <div class="servicePlan__headerWrapper-content">Pro</div>
                          </div>
                        </div>
                        <div class="servicePlan__priceWrapper">
                          <div>
                            <div class="servicePlan__texts-nomal servicePlan__priceWrapper-texts">プラン価格</div>
                            <div class="servicePlan__texts-price servicePlan__priceWrapper-texts">
                              <span class="i-num">24,000</span>
                              <span class="i-unit">円-</span>
                              <span class="i-unit">/年</span>
                            </div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">月額/ユーザー</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end">2,000<span class="unit">円-</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">初期費用</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end">
                              <span class="text-gray">−</span>
                            </div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用人数</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end">
                              <span class="text-gray">−</span>
                            </div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用期間</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__descriptionWrapper m-t-16">
                          <div class="servicePlan__descriptionWrapper-description">
                            <p>※初年度は20%OFFにてご提供<br>※こちらはZoom社ではなく、弊社（スマートキャンプ）独自のキャンペーンとなります</p>
                          </div>
                        </div>
                      </div>
                      <div id="sep-1"></div>
                      <div class="servicePlan">
                        <div class="servicePlan__headerWrapper">
                          <div class="servicePlan__center">
                            <div class="servicePlan__headerWrapper-content">Business</div>
                          </div>
                        </div>
                        <div class="servicePlan__priceWrapper">
                          <div>
                            <div class="servicePlan__texts-nomal servicePlan__priceWrapper-texts">プラン価格</div>
                            <div class="servicePlan__texts-price servicePlan__priceWrapper-texts">
                              <span class="i-num">32,400</span>
                              <span class="i-unit">円-</span>
                              <span class="i-unit">/年</span>
                            </div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">月額/ユーザー</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end">2,700<span class="unit">円-</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">初期費用</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用人数</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用期間</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__descriptionWrapper m-t-16">
                          <div class="servicePlan__descriptionWrapper-description">
                            <p>※初年度20%OFFにてご提供<br>※こちらはZoom社ではなく、弊社（スマートキャンプ）独自のキャンペーンとなります</p>
                          </div>
                        </div>
                      </div>
                      <div id="sep-2"></div>
                      <div class="servicePlan">
                        <div class="servicePlan__headerWrapper">
                          <div class="servicePlan__center">
                            <div class="servicePlan__headerWrapper-content">Enterprise</div>
                          </div>
                        </div>
                        <div class="servicePlan__priceWrapper">
                          <div>
                            <div class="servicePlan__texts-nomal servicePlan__priceWrapper-texts">プラン価格</div>
                            <div class="servicePlan__texts-price servicePlan__priceWrapper-texts">
                              <span class="i-num">38,400</span>
                              <span class="i-unit">円-</span>
                              <span class="i-unit">/年</span>
                            </div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">月額/ユーザー</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end">3,200<span class="unit">円-</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">初期費用</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type1">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用人数</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__rows servicePlan__rows-type2">
                          <div class="servicePlan__columns">
                            <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用期間</div>
                            <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">−</span></div>
                          </div>
                        </div>
                        <div class="servicePlan__descriptionWrapper m-t-16">
                          <div class="servicePlan__descriptionWrapper-description">
                            <p>※初年度20%OFFにてご提供<br>※こちらはZoom社ではなく、弊社（スマートキャンプ）独自のキャンペーンとなります</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="ss-features">
              <div class="container_feature">
                <h2 class="ServicesShow-main-block-title">機能ごとの評価</h2>
                <div class="ServicesShow-main-block-contents">
                  <div class="featuresWrapper">
                    <div class="featuresColumn">
                      <div class="featuresColumn__text">iPhone</div>
                      <i class="far fa-circle featuresColumn__icon" aria-hidden="true"></i>
                    </div>
                    <div class="featuresColumn">
                      <div class="featuresColumn__text">Android</div>
                      <i class="far fa-circle featuresColumn__icon" aria-hidden="true"></i>
                    </div>
                    <div class="featuresColumn">
                      <div class="featuresColumn__text">スマホブラウザ</div>
                      <i class="far fa-circle featuresColumn__icon" aria-hidden="true"></i>
                    </div>
                    <div class="featuresColumn">
                      <div class="featuresColumn__text">日本語対応</div>
                      <i class="far fa-circle featuresColumn__icon" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="featuresRatings">
                    <h3 class="featuresRatings__innerTitle">機能ごとの口コミ評価</h3>
                    <div class="featuresRatings__title">
                      <span>※ 口コミの平均評価を表示しています。</span>
                      <br>サービスの実態とは異なり、搭載されていない機能に関する評価が表示されている可能性がございますのでご注意ください。<br>
                    </div>
                    <div class="featuresRatings__legend">
                      <div class="featuresRatings__legend__item">
                        <div class="featuresRatings__legend__block featuresRatings__legend__block--service"></div>
                        <div class="featuresRatings__legend__text">Zoom</div>
                      </div>
                      <div class="featuresRatings__legend__item">
                        <div class="featuresRatings__legend__block featuresRatings__legend__block--category"></div>
                        <div class="featuresRatings__legend__text">WEB会議システムの平均点</div>
                      </div>
                    </div>
                    <div class="featuresRatings__items">
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">画面共有</div>
                          <div class="featureRatingsItem__count">評価件数：1538</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.6</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:92.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.4</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:88.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">招待URLの共有</div>
                          <div class="featureRatingsItem__count">評価件数：1513</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.4</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:88.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.3</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:86.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">録画・録音</div>
                          <div class="featureRatingsItem__count">評価件数：1228</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.3</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:86.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:84.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">資料共有</div>
                          <div class="featureRatingsItem__count">評価件数：1408</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.4</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:88.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.3</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:86.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">チャット</div>
                          <div class="featureRatingsItem__count">評価件数：1422</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:82.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">通話品質</div>
                          <div class="featureRatingsItem__count">評価件数：1549</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:84.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">発言者の切替</div>
                          <div class="featureRatingsItem__count">評価件数：1369</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:84.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:80.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">カレンダー連携</div>
                          <div class="featureRatingsItem__count">評価件数：769</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:80.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">ホワイトボード</div>
                          <div class="featureRatingsItem__count">評価件数：583</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">3.8</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:76.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">3.7</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:74.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">参加者の限定</div>
                          <div class="featureRatingsItem__count">評価件数：990</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:82.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">ワンクリック参加</div>
                          <div class="featureRatingsItem__count">評価件数：1057</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.3</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:86.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:84.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">通知</div>
                          <div class="featureRatingsItem__count">評価件数：1085</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:82.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">ストリーミング配信</div>
                          <div class="featureRatingsItem__count">評価件数：512</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:80.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">3.9</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:78.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">出席ログ</div>
                          <div class="featureRatingsItem__count">評価件数：557</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:80.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">3.9</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:78.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">スマホアプリ</div>
                          <div class="featureRatingsItem__count">評価件数：1197</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:84.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.1</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:82.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-l-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">多言語対応</div>
                          <div class="featureRatingsItem__count">評価件数：377</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:80.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.0</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:80.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="featureRatingsItem m-r-12">
                        <div class="featureRatingsItem__left">
                          <div class="featureRatingsItem__title">バーチャル背景</div>
                          <div class="featureRatingsItem__count">評価件数：1287</div>
                        </div>
                        <div class="featureRatingsItem__right">
                          <div class="featureRatingsItem__service">
                            <div class="featureRatingsItem__rating">4.3</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--service" style="width:86.0%"></div>
                            </div>
                          </div>
                          <div class="featureRatingsItem__category">
                            <div class="featureRatingsItem__rating__number">4.2</div>
                            <div class="featureRatingsItemBar">
                              <div class="featureRatingsItemBar__progress featureRatingsItemBar__star--category" style="width:84.0%"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="featuresRatings__date">機能の実装有無に関する情報は: 2023-04-30 20:42 時点のものです。</div>
                    <div class="feturesRatings__footer"></div>
                  </div>
                  <h3 class="featuresTagWrapper__innerTitle">連携サービス</h3>
                  <div class="featuresTagWrapper">
                    <div class="featuresTagWrapper__tag">Slack</div>
                    <div class="featuresTagWrapper__tag">Salesforce</div>
                    <div class="featuresTagWrapper__tag">Box</div>
                    <div class="featuresTagWrapper__tag">Dropbox Business</div>
                    <div class="featuresTagWrapper__tag">Google Drive</div>
                    <div class="featuresTagWrapper__tag">Marketo Engage</div>
                    <div class="featuresTagWrapper__tag">HubSpot</div>
                    <div class="featuresTagWrapper__tag">Google カレンダー</div>
                    <div class="featuresTagWrapper__tag">Outlook</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="ss-reviews" id="ss-basic-info-tabs">
              <div class="serviceMetrics__item">

                <h2 class="ServicesShow-main-block-title">Zoomの口コミ・評判</h2>
                <div class="reviewOverviewCard__contents">
                  <div class="serviceReputationMetricsContainerV2">
                    <div class="serviceReputationMetricsReputationBlock">
                      <div class="serviceReputationMetricsStarTextBlock">
                        <div class="serviceReputationMetricsStarBlock">
                          <div class="serviceReputationMetricsStarBlock__star">
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                          </div>
                          <div class="serviceReputationMetricsRateBlock">      4.43</div>
                        </div>
                      </div>
                    </div>
                    <div class="serviceReputationMetricsBlockV2">
                      <div class="serviceReputationMetricsBarCahrtV2">
                        <div class="serviceReputationMetricsBarContainerTop bar_first">
                          <div class="serviceReputationMetricsBarContainerText">レビュー分布</div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_5" style="width:50.21998742928976%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=5">799</a>)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_4" style="width:42.74041483343809%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=4">680</a>)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_3" style="width:6.536769327467002%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=3">104</a>)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_2" style="width:0.43997485857950974%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=2">7</a>)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_1" style="width:0.06285355122564425%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=1">1</a>)</div>
                          </div>
                        </div>
                        <div class="serviceReputationMetricsBarContainerTop bar_second">
                          <div class="serviceReputationMetricsBarContainerText">従業員規模</div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">1~10</div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_5" style="width:15.2%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(228)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">11~30</div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_4" style="width:9.666666666666666%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(145)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">31~100</div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_3" style="width:16.733333333333334%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(251)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">101~500</div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_2" style="width:21.266666666666666%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(319)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">501~</div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_1" style="width:11.799999999999999%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(177)</div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate"></div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_0" style="width:25.333333333333336%"></div>
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(380)</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="reputationRecommendCard">
                  <div class="recomendReputation">
                    <div class="title">
                      <p>レビューを書いてみませんか？</p>
                    </div>
                    <div class="merit">
                      <p>製品に関するあなたの意見や感想を自由に公開できます。サービス向上に役立つ、さまざまな意見や感想を投稿してください。</p>
                    </div>
                  </div>
                  <div class="reveiwButton">
                    <div class="ss-post-review">
                      <a class="serviceReputationMetricsButton fullWidth " href="/registration/?redirect_path_after_sign_in=%2Freputations%2F%3Fservice_id%3D3558&amp;redirect_path_after_sign_up=%2Fconfirm_completed%2F%3Flink_to%3D%252Freputations%252F%253Fservice_id%253D3558">このサービスの口コミを書く</a>
                    </div>
                  </div>
                </div>
                <h3 class="reviewOverviewCard__subTitle">口コミサマリー</h3>
                <div class="reputationSummariesWrapper">
                  <div class="reputationSummaries">
                    <div class="reputationSummary">
                      <div class="reputationSummary__title">Zoomの良い評判・口コミ</div>
                      <div class="reputationSummary__items">
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--smile">
                            <i class="far fa-smile" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            無料版でも十分な機能が提供されており、業務利用でも有料版にすれば十分にニーズを満たしてくれます
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/11263/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--smile">
                            <i class="far fa-smile" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            UI分かりやすいです。発言のマイクオフや動画のオフも、チャットも、双方向でやり取りできる感じがとても良いです。
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/7338/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--smile">
                            <i class="far fa-smile" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            chromeの拡張機能との連携で、Googleカレンダーで予定作成したときに1クリックでzoomリンクも予定に入れることができる
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/28289/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="reputationSummary">
                      <div class="reputationSummary__title">Zoomの改善点</div>
                      <div class="reputationSummary__items">
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--frown">
                            <i class="far fa-frown" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            参加を承認制にした場合、一人一人ぽちぽち「承認」ボタンを押していく必要がありますが、そのエリアが小さく3名程度しか表示されないため、大人数の承認が大変。
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/3090/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--frown">
                            <i class="far fa-frown" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            googleカレンダー連携したときに両方のタイムゾーンが日本なのにも関わらずアメリカ時間で発行されて原因がわからなくて困りました・・（いまはなおりました）
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/251/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                        <div class="reputationSummaryItem">
                          <div class="reputationSummary__icon reputationSummary__icon--frown">
                            <i class="far fa-frown" aria-hidden="true"></i>
                          </div>
                          <div class="reputationSummary__text">
                            接続時には、必ずミュートで参加する設定にしてほしい。接続画面で選択できるが、そこをチェックせずに参加する人が、自分の声が周りに聞こえてる事に気付かない場面がある
                            <div class="reputationSummary__link">
                              <a href="https://boxil.jp/service/3558/reviews/19079/">この口コミを読む</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="ss-reviews-footer">
                  <a class="serviceReputationMetricsButton" target="_blank" href="/service/3558/reviews/">すべての口コミ・評判を見る</a>
                </div>

              </div>
            </div>


          </div>
        </div>

      </div>
      <script src="https://d-cache.microad.jp/js/td_bx_access.js"></script>
      <script>microadTd.BX.start({"service_category_large":"通信インフラ","service_category_small":"WEB会議システム"});</script>
      <script>
          (function(){
            var uid = '';
            var o = [];
            var elm = window.document.createElement('div');
            elm.innerHTML = unescape('%3C') + 'img src="//relay-dsp.ad-m.asia/dmp/sync/bizmatrix?pid=b2ceff7d7e3fda0a7b' + '&uid=' + encodeURIComponent(uid) + '&o=' + encodeURIComponent(o.join(',')) + '&l=' + encodeURIComponent(location.href) + '" alt=""  style="display:block; margin:0; padding:0; border:0; outline:0; width:0; height:0; line-height:0;" ' + unescape('%2F%3E');
            window.document.body.appendChild(elm);
          })();
      </script>
      <div class="v2Sidebar">
        <div class="v2Sidebar__title">レビューを書いてみませんか？</div>
        <div class="v2Sidebar__content">
          <div class="v2Sidebar__text">
            <p>製品に関するあなたの意見や感想を自由に公開できます。</p>
            <p>サービス向上に役立つ、さまざまな意見や感想を投稿してください。</p>
          </div>
          <div class="v2Sidebar__buttons">
            <div class="ss-post-review">
              <a class="serviceReputationMetricsButton fullWidth " href="/registration/?redirect_path_after_sign_in=%2Freputations%2F%3Fservice_id%3D3558&amp;redirect_path_after_sign_up=%2Fconfirm_completed%2F%3Flink_to%3D%252Freputations%252F%253Fservice_id%253D3558">このサービスの口コミを書く</a>
            </div>
          </div>
        </div>
        <div class="v2Sidebar__title">プロが教える後悔しない選び方</div>
        <div class="v2Sidebar__content">
          <div class="v2Sidebar__wp--thumb">
            <div class="wpThumb">
              <img alt="" width="300" height="232" src="https://assets.boxil.jp/images/article-whitepaper-bg.svg">
              <img class="wp_thumb__image" alt="WEB会議システム選び方ガイド_20230420.pptx.pdf" src="https://slides.boxil.jp/category/slides/778742c6dfc46af7c527838e11256ee6.pdf/s3-0.jpg">
            </div>
          </div>
          <div class="v2Sidebar__buttons">
            <form class="" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
              <input type="hidden" name="type" value="category_document">
              <input type="hidden" name="ids[]" value="416">
              <input type="hidden" name="_via" value="ss-wpDL-side">
              <input type="hidden" name="is_comparison" value="false">
              <button name="button" type="submit" class="cvButton v2Sidebar__button js-track js-track-ss-wpDL-side">無料で資料ダウンロード</button>
            </form>
          </div>
        </div>
        <div class="v2SidebarItem element_scroll js-scrolltofixed-menu" id="js-overlap-hidden" style="z-index: auto; top: 94px; position: sticky;">
          <div class="v2Sidebar__title">
            <div class="v2Sidebar__title--text">かんたん30秒！一括資料請求</div>
          </div>
          <div class="v2Sidebar__services">
            <div class="downloadAllServicesWrapper">
              <ul class="downloadAllServicesAutoWidth">
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-3558" name="document" type="checkbox" value="3558">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="Zoom" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjYzNGExYmFiN2E2YmE3NGM3NDRmY2Q0MTJlZGI5MjgzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xdDBva3IyLnBuZyIsInNpemUiOjU4NjUsIm1pbWVfdHlwZSI6bnVsbH19" src="/attachments/files/images/eyJpZCI6IjYzNGExYmFiN2E2YmE3NGM3NDRmY2Q0MTJlZGI5MjgzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xdDBva3IyLnBuZyIsInNpemUiOjU4NjUsIm1pbWVfdHlwZSI6bnVsbH19">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">Zoom</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.43</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-4644" name="document" type="checkbox" value="4644">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="LoopGate" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjcyNGVmZDQ4MDFlODJmN2M5MmZjM2IzNWNkOGQxNjUxLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi10MWV2b2cuanBnIiwic2l6ZSI6MzA0MzUsIm1pbWVfdHlwZSI6bnVsbH19" src="/attachments/files/images/eyJpZCI6IjcyNGVmZDQ4MDFlODJmN2M5MmZjM2IzNWNkOGQxNjUxLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi10MWV2b2cuanBnIiwic2l6ZSI6MzA0MzUsIm1pbWVfdHlwZSI6bnVsbH19">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">LoopGate</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.38</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-4652" name="document" type="checkbox" value="4652">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="ビデオトーク " is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6ImUwMTZmOGQxNDk0MTE2OWJmMGFlYTI3ZDlkOTc3NzEzLmdpZiIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi10aGVvMXEuZ2lmIiwic2l6ZSI6NDQzOCwibWltZV90eXBlIjpudWxsfX0" src="/attachments/files/images/eyJpZCI6ImUwMTZmOGQxNDk0MTE2OWJmMGFlYTI3ZDlkOTc3NzEzLmdpZiIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi10aGVvMXEuZ2lmIiwic2l6ZSI6NDQzOCwibWltZV90eXBlIjpudWxsfX0">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">ビデオトーク </div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.18</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-6854" name="document" type="checkbox" value="6854">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="Microsoft 365 (旧称 Office 365)" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6ImVhZWNlYzg0Y2E4MmZjYjNmNGQwMDY1ZTJlYTcxOTE1LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy0xbjZ1MW40LnBuZyIsInNpemUiOjMwNjAsIm1pbWVfdHlwZSI6bnVsbH19" src="/attachments/files/images/eyJpZCI6ImVhZWNlYzg0Y2E4MmZjYjNmNGQwMDY1ZTJlYTcxOTE1LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy0xbjZ1MW40LnBuZyIsInNpemUiOjMwNjAsIm1pbWVfdHlwZSI6bnVsbH19">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">Microsoft 365 (旧称 Office 365)</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.29</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-7233" name="document" type="checkbox" value="7233">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="ACES Meet" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjI3M2NlM2IxMTA3ZGIxZGI2NjdmNmIxMDZjYzUwYjkwLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtNWppNjF1LmpwZyIsInNpemUiOjQxMTMsIm1pbWVfdHlwZSI6bnVsbH19" src="/attachments/files/images/eyJpZCI6IjI3M2NlM2IxMTA3ZGIxZGI2NjdmNmIxMDZjYzUwYjkwLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtNWppNjF1LmpwZyIsInNpemUiOjQxMTMsIm1pbWVfdHlwZSI6bnVsbH19">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">ACES Meet</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.67</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-7794" name="document" type="checkbox" value="7794">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="Lark（ラーク）" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjY5OWNmZWZiYTUxY2ZkMjUxMGU4YmJlZjk0NDQxZjAzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMXIyeHhtai5wbmciLCJzaXplIjoyNjk4LCJtaW1lX3R5cGUiOm51bGx9fQ" src="/attachments/files/images/eyJpZCI6IjY5OWNmZWZiYTUxY2ZkMjUxMGU4YmJlZjk0NDQxZjAzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMXIyeHhtai5wbmciLCJzaXplIjoyNjk4LCJtaW1lX3R5cGUiOm51bGx9fQ">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">Lark（ラーク）</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.33</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-7974" name="document" type="checkbox" value="7974">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="oVice" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjBmYmVmYWU4NWMxNjRmMmZiNTM0M2ZjNzJlYmUwMGYyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMWJpeGo1OC5wbmciLCJzaXplIjo1MzczLCJtaW1lX3R5cGUiOm51bGx9fQ" src="/attachments/files/images/eyJpZCI6IjBmYmVmYWU4NWMxNjRmMmZiNTM0M2ZjNzJlYmUwMGYyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMWJpeGo1OC5wbmciLCJzaXplIjo1MzczLCJtaW1lX3R5cGUiOm51bGx9fQ">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">oVice</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.35</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-8546" name="document" type="checkbox" value="8546">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="amptalk" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjgyOWQ4NzI1Y2Y2YzgyM2I0ZGE1N2ZiMDUxZDIzOTljLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLTFtdW1nN3YuanBnIiwic2l6ZSI6NTMyMDAsIm1pbWVfdHlwZSI6bnVsbH19" src="/attachments/files/images/eyJpZCI6IjgyOWQ4NzI1Y2Y2YzgyM2I0ZGE1N2ZiMDUxZDIzOTljLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLTFtdW1nN3YuanBnIiwic2l6ZSI6NTMyMDAsIm1pbWVfdHlwZSI6bnVsbH19">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">amptalk</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">4.8</span>
                      </div>
                    </div>
                  </label>
                </li>
                <li class="downloadAllService js-service-check-and-download active">
                  <label class="downloadAllService__inner">
                    <div class="boxil-checkbox checkbox">
                      <input checked="" class="boxil-checkbox-input check-service-9358" name="document" type="checkbox" value="9358">
                      <span class="lever-sm"></span>
                    </div>
                    <div class="downloadAllService__logo">
                      <img alt="VISITS forms" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6ImU4YzZhM2QyZjlhOWIyYzA3MjhlNmMyMWU2NjIwM2I4LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQyNC0yMi0xazMzOHN0LnBuZyIsInNpemUiOjI4NTUsIm1pbWVfdHlwZSI6bnVsbH19" src="">
                    </div>
                    <div class="downloadAllService__info">
                      <div class="downloadAllService__name">VISITS forms</div>
                      <div>
                        <span>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 2px;" aria-hidden="true"></i>
                        </span>
                        <span class="downloadAllService__number">0.0</span>
                      </div>
                    </div>
                  </label>
                </li>
              </ul>
              <form class="downloadButtonForm boxil-checkbox-form" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
                <input type="hidden" name="type" value="services">
                <input type="hidden" name="_via" value="ss-documentAllDL-side">
                <input type="hidden" name="is_comparison" value="false">
                <button name="button" type="submit" class="cvButton downloadButton js-service-check-and-download-button js-track js-track-ss-documentAllDL-side">選択中の<span class="js-service-check-and-download-button-count">9</span>件を一括資料請求</button>
              </form>
            </div>
          </div>
        </div>
        <div style="display: block; width: 336px; height: 598px; float: none;"></div>
      </div>

    </div>

  </div>

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
            <a class="btn btn-link-special" target="_blank" rel="noopener" href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=footer_banner">サービス掲載申し込み</a>
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
  <script src="{{ asset('assets/js/jquery.lazyload.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugin.trunk8.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugin.ofi.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/firebase-app.js') }}"></script>
  <script src="{{ asset('assets/js/firebase-messaging.js') }}"></script>
</html>