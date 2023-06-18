@extends('layouts.no_aside')

@php
$user=Auth::user();
@endphp

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
@endsection

@section('content')
  <div class="container" style="padding-top: 4rem;">

    <div class="breadcrumb-boxil-wrapper">
      <div>
        <ul>
          <li class="p-t-7"><a href="https://boxil.jp/"><span class="m-l-5">BOXIL</span></a></li>
          <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
          <li class="p-t-7"><a href="https://boxil.jp/mag/a208/"><span class="m-l-5">【2023年】Web会議システム比較21選！選び方・テレワークにおすすめのツール</span></a></li>
          <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
          <li class="p-t-7"><span class="m-l-5">WEB会議システム</span></li>
        </ul>
      </div>
    </div>
    <div class="v2Navbar">
      <div class="v2NavbarItem">
        <div class="v2NavbarItem__title"><span>{{$category->title}}システム</span>の関連情報</div>
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
      <!-- <div class="v2NavbarLink">
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
      </div> -->
    </div>
    <div class="v2Layout">
      <div class="categoryV2">
        <div class="categoryContents" id="CategoriesShow">
          <div class="categoryMainContent js-scrolltofixed-content">

            <div class="categoryV2Item"><div id="categoryV2App"></div></div>
            <div class="categoryV2Item">

              <div class="categoryV2BasicKnowledge">
                <!-- <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">どうやって{{$category->title}}システムを選べばいいの？</h2>
                  <div class="categoryV2Section__content">
                    WEB会議システムを選定するために、まず必要な要件を洗い出す必要があります。その後比較表でサービスを絞り込んで、試験的に導入する流れがおすすめです。具体的な比較方法は、こちらの記事にまとめています。
                    <div class="categoryV2BasicKnowledge__card">
                      <div class="articleCard">
                        <div class="articleCardFlexInner">
                          <a class="articleCardEyecatch " href="https://boxil.jp/mag/a208/">
                            <img class="articleCardEyecatch__image" alt="" is-lazyload="true" data-src="https://store.boxil.jp/media/images/uploads/media_image/media_image/44843/thumb.jpg" src="https://store.boxil.jp/media/images/uploads/media_image/media_image/44843/thumb.jpg">
                          </a>
                          <div class="articleCardContent">
                            <a class="articleCardContent__title " href="https://boxil.jp/mag/a208/">【2023年】Web会議システム比較21選！選び方・テレワークにおすすめのツール</a>
                          </div>
                        </div>
                        <div class="articleCard__info">
                          <a class="articleCategoryTag" href="/mag/tags/compares/">サービス比較</a>
                          <a class="articleCategoryTag" href="/sc-web_conference/articles/">WEB会議システム</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システムとは</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->description ?>
                  </div>
                </div>
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システムはなぜ必要か？</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->necessary_points ?>
                  </div>
                </div>
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システムを導入するメリット</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->good_points ?>
                  </div>
                </div>
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システム導入するデメリット</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->bad_points ?>
                  </div>
                </div>
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システムの比較ポイント</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->comparison_points ?>
                  </div>
                </div>
                <div class="categoryV2Section">
                  <h2 class="categoryV2Section__title">{{$category->title}}システムの導入に失敗しない方法は？成功するためのポイント</h2>
                  <div class="categoryV2Section__content">
                    <?php echo $category->success_method ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="v2Sidebar">
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
              <input type="hidden" name="_via" value="cs-wpDL-side">
              <input type="hidden" name="is_comparison" value="false">
              <button name="button" type="submit" class="cvButton v2Sidebar__button js-track js-track-cs-wpDL-side">無料で資料ダウンロード</button>
            </form>
          </div>
        </div>
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
