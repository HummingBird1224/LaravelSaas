@extends('layouts.no_aside')

@section('additional_style')
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
    .v2Layout {
      display: flex;
      width: 100%;
      max-width: 1200px;
      margin-top: 32px;
      margin-bottom: 100px;
    }
    .categoryContents .categoryV2Item {
      margin-top: 32px;
      background: #FFFFFF;
      border: 1px solid #E0E0E0;
      padding: 32px;
    }
    .categoryV2Section .categoryV2Section__title {
      min-height: 67px;
      background: #F1F8F8;
      font-weight: 700;
      font-size: 24px;
      margin: 0;
      display: flex;
      align-items: center;
      color: #006666;
      padding: 16px;
      border-left: solid 4px #006666;
      letter-spacing: 1.2px;
    }
    .categoryV2Section .categoryV2Section__content {
      margin-top: 24px;
      font-weight: 400;
      font-size: 16px;
      line-height: 24px;
      color: #222222;
    }
  </style>
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/service.css') }}" />
@endsection

@section('content')

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
                            <img alt="{{ $service->title }}" class="service-logo-image" loading="lazy" src="{{ asset($service->logo) }}">
                          </div>
                        </div>
                      </div>
                      <div class="service_show_overview__header">
                        <div class="service_show_overview__header__main">
                          <div class="service_show_overview__header__main__content">
                            <h1 class="service_show_overview__header__main__content__header">
                              <div class="service_show_overview__header__main__content__header__title-container">
                                <div class="service_show_overview__header__main__content__header__title-container-title">{{$service->title}}</div>
                              </div>
                              <div class="service_show_overview__header__main__content__catchphrase">の評判・口コミ・料金・機能・導入事例</div>
                            </h1>
                            <div class="service_show_overview__header__main__content__i-bottom">
                              <div class="service_show_overview__header__main__content__i-bottom-left">
                                <div class="service_show_overview__header__main__content__i-bottom-review">
                                  <div class="text-no-spacing">
                                    @for ($i = 1; $i < 6; $i++)
                                      @if ($i <= $service->reviews_avg_score)
                                        <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                      @else
                                        <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                      @endif
                                    @endfor
                                    <!-- <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                    <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i> -->
                                  </div>
                                  <div class="service_show_overview__header__main__content__i-bottom-review-score"></div>
                                  <div class="service_show_overview__header__main__content__i-bottom-review-count">
                                    <a class="service_show_overview__header__main__content__i-bottom-review-link" href="/service/3558/reviews/">{{ $service->reviews_count }}件の口コミ </a>
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
                            <p>{{ $service->description }}</p>
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

            <div class="mainContents__subView serviceShowCard">
              <div id="ss-screenshots">
                <h2 class="ServicesShow-main-block-title">サービス画面 / UI</h2>
                <div class="ServicesShow-main-block-contents">
                  <div class="screenShotsWrapper">
                    <div class="screenShotsWrapper__container">
                      <div class="screenShotsWrapper__leftItem">
                        <div class="screenShotLarge">
                          <img alt="{{ $service->uis[0]->description }}" is-lazyload="true" src="{{ asset($service->uis[0]->portfolio) }}">
                          <i class="fas fa-search screenShotLarge__zoomIcon" aria-hidden="true">
                            <a data-lightbox="screenshot" data-toggle="lightbox" href="/attachments/files/images/eyJpZCI6Ijc3ZTkxNDMyNjUxMWY5ODBkNDhmY2IwNTY5MGQ1NTUyMDRjODFkMjgxM2Q3M2VlN2Y3N2UyZDUwOTBlMiIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6IuOCv-ODrOODs-ODiOODkeODrOODg-ODiOODiOODg-ODl-eUuy5qcGciLCJzaXplIjo2OTY2NjEsIm1pbWVfdHlwZSI6ImltYWdlL2pwZWcifX0">
                              <div class="ScreenShotHoverBlock"></div>
                            </a>
                          </i>
                        </div>
                        <!-- <div class="screenShotLarge" style="display: none;">
                          <img alt="タレントパレットのスクリーンショット2" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6ImQzZmQwYjIwOGQyNThjY2Q4Nzg3NjZjYzc3ZTQwNDQ5LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQwNy00NDYtdmppOXk0LmpwZyIsInNpemUiOjYwOTk5LCJtaW1lX3R5cGUiOm51bGx9fQ" src="">
                          <i class="fas fa-search screenShotLarge__zoomIcon" aria-hidden="true">
                            <a data-lightbox="screenshot" data-toggle="lightbox" href="/attachments/files/images/eyJpZCI6IjliZDkyMTE3ODc3OWQ4NWMwNjk4MTAyNzRmNmExMTcwMTQyNDNhYTU4ZDY5MDJiNjk2ZmU4Zjc4OTJlZSIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6IuOCv-ODrOODs-ODiOODkeODrOODg-ODiOODiOODg-ODl-eUuzIuanBnIiwic2l6ZSI6MTY0MDI4LCJtaW1lX3R5cGUiOiJpbWFnZS9qcGVnIn19">
                              <div class="ScreenShotHoverBlock"></div>
                            </a>
                          </i>
                        </div>
                        <div class="screenShotLarge" style="display: none;">
                          <img alt="タレントパレットのスクリーンショット3" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6ImI1ODczOTk5OTM5ZTFiM2UyZTllOGQxMzFhYmE3ZjExLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQwNy00NDYtMWltYjlvNC5qcGciLCJzaXplIjo4MDg2MywibWltZV90eXBlIjpudWxsfX0" src="">
                          <i class="fas fa-search screenShotLarge__zoomIcon" aria-hidden="true">
                            <a data-lightbox="screenshot" data-toggle="lightbox" href="/attachments/files/images/eyJpZCI6ImJmZjUzNmI0NmFiOWMyZTU2ZDY5NGVjNTNkZThjYWYwMWJhZjYxM2RiYTgyNjY0ZGI0NDUzNGFlYmFjMiIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6IjIwMTgwMTI2ZGFzaGJvYXJkMXZ2LmpwZyIsInNpemUiOjIzOTMzOCwibWltZV90eXBlIjoiaW1hZ2UvanBlZyJ9fQ">
                              <div class="ScreenShotHoverBlock"></div>
                            </a>
                          </i>
                        </div>
                        <div class="screenShotLarge" style="display: none;">
                          <img alt="タレントパレットのスクリーンショット4" is-lazyload="true" data-src="/attachments/files/images/eyJpZCI6IjYxOTMwMDVhZWQxOTY3ZmNlYmZkZjE4MjRmZmI0ZTgzLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQwNy00NDYtZWpmeWJ6LmpwZyIsInNpemUiOjYyMDQxLCJtaW1lX3R5cGUiOm51bGx9fQ" src="">
                          <i class="fas fa-search screenShotLarge__zoomIcon" aria-hidden="true">
                            <a data-lightbox="screenshot" data-toggle="lightbox" href="/attachments/files/images/eyJpZCI6IjdjZjhmMTZhMDczZDBhOTA1NGJkZTI4ZDM3NDZiNWQ3YzM1NjgyMjFjOGRhYTQ3ZmRjNTExMzE3OTQwYyIsInN0b3JhZ2UiOiJzZXJ2aWNlX3NjcmVlbnNob3QiLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6IuOCv-ODrOODs-ODiOODkeODrOODg-ODiOODiOODg-ODl-eUuzMuanBnIiwic2l6ZSI6MTY5NDQ3LCJtaW1lX3R5cGUiOiJpbWFnZS9qcGVnIn19">
                              <div class="ScreenShotHoverBlock"></div>
                            </a>
                          </i>
                        </div> -->
                      </div>
                      <div class="screenShotsWrapper__leftItem-bottom">
                        <div class="screenShotTexts"></div>
                        <div class="screenShotTexts" style="display: none;"></div>
                        <div class="screenShotTexts" style="display: none;"></div>
                        <div class="screenShotTexts" style="display: none;"></div>
                      </div>
                    </div>
                    <div class="screenShotsWrapper__rightItem">
                      <div class="screenShotsWrapper__rightItem-top">
                        @foreach ( $service->uis as $u )
                        <div class="screenShotSmall" id="screenshot-{{ $u->id }}">
                          <img alt="{{ $u->description }}" is-lazyload="true" src="{{ asset($u->portfolio) }}" data-src="" style="opacity: 0.5;">
                        </div>
                        @endforeach
                      </div>
                      <div class="note">画像をクリックすると左側に表示されます</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
                      @foreach ($service->prices as $plan)
                        <div id="sep-{{ $loop->iteration }}"></div>
                        <div class="servicePlan">
                          <div class="servicePlan__headerWrapper">
                            <div class="servicePlan__center">
                              <div class="servicePlan__headerWrapper-content">{{ $plan->title }}</div>
                            </div>
                          </div>
                          <div class="servicePlan__priceWrapper">
                            <div>
                              <div class="servicePlan__texts-nomal servicePlan__priceWrapper-texts">プラン価格</div>
                              <div class="servicePlan__texts-price servicePlan__priceWrapper-texts">
                                <span class="i-num">{{ $plan->price }}</span>
                                <span class="i-unit">円-</span>
                                <span class="i-unit">/年</span>
                              </div>
                            </div>
                          </div>
                          <div class="servicePlan__rows servicePlan__rows-type1">
                            <div class="servicePlan__columns">
                              <div class="servicePlan__texts-nomal servicePlan__columns-start">月額/ユーザー</div>
                              <div class="servicePlan__texts-bold servicePlan__columns-end">{{ $plan->monthly }}<span class="unit">円-</span></div>
                            </div>
                          </div>
                          <div class="servicePlan__rows servicePlan__rows-type2">
                            <div class="servicePlan__columns">
                              <div class="servicePlan__texts-nomal servicePlan__columns-start">初期費用</div>
                              <div class="servicePlan__texts-bold servicePlan__columns-end">
                                <span class="text-gray">{{ $plan->initial }}</span>
                              </div>
                            </div>
                          </div>
                          <div class="servicePlan__rows servicePlan__rows-type1">
                            <div class="servicePlan__columns">
                              <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用人数</div>
                              <div class="servicePlan__texts-bold servicePlan__columns-end">
                                <span class="text-gray">{{ $plan->min_user }}</span>
                              </div>
                            </div>
                          </div>
                          <div class="servicePlan__rows servicePlan__rows-type2">
                            <div class="servicePlan__columns">
                              <div class="servicePlan__texts-nomal servicePlan__columns-start">最低利用期間</div>
                              <div class="servicePlan__texts-bold servicePlan__columns-end"><span class="text-gray">{{ $plan->min_usage }}</span></div>
                            </div>
                          </div>
                          <div class="servicePlan__descriptionWrapper m-t-16">
                            <div class="servicePlan__descriptionWrapper-description">
                              <p>※{{ $plan->description }}</p>
                            </div>
                          </div>
                        </div>
                      @endforeach

                      <!-- <div id="sep-0"></div>
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
                      </div> -->

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="ss-features">
              <div class="container_feature">
                <h2 class="ServicesShow-main-block-title">機能ごとの評価</h2>
                <div class="ServicesShow-main-block-contents">
                  <!-- <div class="featuresWrapper">
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
                  </div> -->
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

                <h2 class="ServicesShow-main-block-title">{{ $service->title }}の口コミ・評判</h2>
                <div class="reviewOverviewCard__contents">
                  <div class="serviceReputationMetricsContainerV2">
                    <div class="serviceReputationMetricsReputationBlock">
                      <div class="serviceReputationMetricsStarTextBlock">
                        <div class="serviceReputationMetricsStarBlock">
                          <div class="serviceReputationMetricsStarBlock__star">
                            @for ($i = 1; $i < 6; $i++)
                              @if ($i <= $service->reviews_avg_score)
                              <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                              @else
                              <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                              @endif
                            @endfor
                            <!-- <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i> -->
                          </div>
                          <div class="serviceReputationMetricsRateBlock"> {{ $service->reviews_avg_score != 0 ? round($service->reviews_avg_score, 2, PHP_ROUND_HALF_UP) : '0.00' }}</div>
                        </div>
                      </div>
                    </div>
                    <div class="serviceReputationMetricsBlockV2">
                      <div class="serviceReputationMetricsBarCahrtV2">
                        <div class="serviceReputationMetricsBarContainerTop bar_first">
                          <div class="serviceReputationMetricsBarContainerText">レビュー分布</div>
                          @for ($i = 1; $i < 6; $i++)
                            <div class="serviceReputationMetricsBarBlock">
                              <div class="serviceReputationMetricsBarBlock__rate">
                                @if ($i == 1)
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                @elseif ($i == 2)
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                @elseif ($i == 3)
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                @elseif ($i == 4)
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                @else
                                <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                                @endif
                              </div>
                              <div class="serviceReputationMetricsBarBlock__bar">
                                <div class="serviceReputationMetricsBarBlock__progress bar_star_5" style="width: {{ ($reviews[$i] / $service->reviews_count) * 100 }}%"></div>
                              </div>
                              <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=5">{{ $reviews[$i] }}</a>)</div>
                            </div>
                          @endfor
                          <!-- <div class="serviceReputationMetricsBarBlock">
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
                          </div> -->
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
                      <a class="serviceReputationMetricsButton fullWidth " href="{{ route('add_review', $service->id)}}">このサービスの口コミを書く</a>
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
              <a class="serviceReputationMetricsButton fullWidth " href="{{ route('add_review', $service->id)}}">このサービスの口コミを書く</a>
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
@endsection