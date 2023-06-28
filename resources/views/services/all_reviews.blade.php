@extends('layouts.no_aside')

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
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
    <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/service.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/review.css') }}" />
@endsection

@section('content')

  <div class="container" style="padding-top: 4rem;">

    <div class="serviceShowWrapper" id="top" itemtype="https://schema.org/WebPage" itemid="https://boxil.jp/service/3558/" itemscope="" style="padding-bottom: 0">

    </div>
    <div class="v2Navbar">
      <div class="v2NavbarItem">
        <div class="v2NavbarItem__title"><span>{{$service->guide->category->title}}</span>の関連情報</div>
        <div class="v2NavbarItem__button">
          <form class="" target="_top" action="/downloads/confirm" accept-charset="UTF-8" method="get">
            <input type="hidden" name="type" value="category">
            <input type="hidden" name="id" value="{{$service->guide->category->id}}">
            <button name="button" type="submit" class="cvButton v2NavbarItem__button js-track js-track-cs-categoryDL-header">無料で一括資料ダウンロード</button>
          </form>
        </div>
      </div>
      <div class="v2NavbarLink">
        <div class="relatedArticleLinksWrapper">
          <!-- <ul class="relatedArticleLinksPc">
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
          </ul> -->
          <!-- <div class="relatedArticleLinksMobile">
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
          </div> -->
        </div>
      </div>
    </div>
    <div class="v2Layout">
      <div class="reviewsV2">
        <main class="serviceShow__main_contents">
          <div class="reviewsV2__item">
            <div class="reviewServiceReputation">
              <h1 class="reviewServiceReputation__title">{{$service->title}}の評判・口コミ</h1>
              <div class="recommendedServiceCard">
                <div class="recommendedServiceCard__left">
                  <div class="recommendedServiceCardIcon">
                    <a class="" target="_blank" href="{{route('service_view', $service->id)}}">
                      <img alt="{{$service->title}}" class="service-logo-image" loading="lazy" src="{{ asset($service->logo) }}">
                    </a>
                  </div>
                </div>
                <div class="recommendedServiceCard__right">
                  <div class="recommendedServiceCardService">
                    <div class="recommendedServiceCardReview">
                      <a class="recommendedServiceCardReview__serviceName" target="_blank" href="{{route('service_view', $service->id)}}">{{$service->title}}</a>
                      <div class="recommendedServiceCardReview__review">
                        <div class="recommendedServiceCardReviewRate">
                          @for ($i = 1; $i < 6; $i++)
                            @if ($i <= $service->reviews_avg_score)
                              <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            @else
                              <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            @endif
                          @endfor
                          <span class="recommendedServiceCardReview__review--number">{{$service->reviews_avg_score+0}}</span>
                        </div>
                        <span class="recommendedServiceCardReview__review--count">
                          <a class="recommendedServiceCardLink" target="_blank" href="{{route('service_view', $service->id)}}">口コミを見る（{{$service->reviews_count}}件）</a>
                        </span>
                      </div>
                      <div class="recommendedServiceCardImages"></div>
                    </div>
                  </div>
                  <div class="recommendedServiceCardTexts">
                    <span>クラウドアワード5年連続受賞｜メール配信システム市場 売上成長率4年連続１位｜次世代メール配信システム「WiLL Mail」</span>
                  </div>
                </div>
              </div>
              @if($service->data)
              <div class="v2NavbarItem__button m-t-30">
                <form class="" target="_top" action="/downloads/confirm" accept-charset="UTF-8" method="get">
                  <input type="hidden" name="type" value="document">
                  <input type="hidden" name="id" value="{{$service->id}}">
                  <button name="button" type="submit" class="cvButton v2NavbarItem__button js-track js-track-cs-categoryDL-header">無料で一括資料ダウンロード</button>
                </form>
              </div>
              @endif
            </div>
          </div>
          <div class="reviewsV2__item">
            <div class="reviewOverviewCard ">
              <h2 class="reviewOverviewCard__title">評判・口コミの概要</h2>
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
                        </div>
                        <div class="serviceReputationMetricsRateBlock"> {{ $service->reviews_avg_score != 0 ? round($service->reviews_avg_score, 2, PHP_ROUND_HALF_UP) : '0.00' }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="serviceReputationMetricsBlockV2">
                    <div class="serviceReputationMetricsBarCahrtV2">
                      <div class="serviceReputationMetricsBarContainerTop">
                        <div class="serviceReputationMetricsBarContainerText">レビュー分布</div>
                        @for ($i = 1; $i < 6; $i++)
                          <div class="serviceReputationMetricsBarBlock">
                            <div class="serviceReputationMetricsBarBlock__rate">
                              @for ($j = 0; $j < (6 - $i); $j++)
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              @endfor
                              @for ($k = 0; $k < ($i - 1); $k++)
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 1px;" aria-hidden="true"></i>
                              @endfor
                            </div>
                            <div class="serviceReputationMetricsBarBlock__bar">
                              <div class="serviceReputationMetricsBarBlock__progress bar_star_5" style="width: <?php echo ( $service->reviews_count ? ($reviews[(6 - $i)] / $service->reviews_count) * 100 : 0 ); ?>%"></div>  
                            </div>
                            <div class="serviceReputationMetricsBarBlock__count">(<a href="/service/3558/reviews/?review_rate=5">{{ $reviews[(6 - $i)] }}</a>)</div>
                          </div>
                        @endfor
                      </div>
                      <div class="serviceReputationMetricsBarContainerTop">
                        <div class="serviceReputationMetricsBarContainerText">従業員分布</div>
                        <div class="serviceReputationMetricsBarBlock">
                          <div class="serviceReputationMetricsBarBlock__rate">1~10</div>
                          <div class="serviceReputationMetricsBarBlock__bar">
                            <div class="serviceReputationMetricsBarBlock__progress bar_star_5" style="width:{{$sizes>0?$sizes[1]/count($all_reviews)*100:0}}%"></div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock__count">({{$sizes[1]}})</div>
                        </div>
                        <div class="serviceReputationMetricsBarBlock">
                          <div class="serviceReputationMetricsBarBlock__rate">11~30</div>
                          <div class="serviceReputationMetricsBarBlock__bar">
                            <div class="serviceReputationMetricsBarBlock__progress bar_star_4" style="width:{{$sizes>0?$sizes[2]/count($all_reviews)*100:0}}%"></div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock__count">({{$sizes[2]}})</div>
                        </div>
                        <div class="serviceReputationMetricsBarBlock">
                          <div class="serviceReputationMetricsBarBlock__rate">31~100</div>
                          <div class="serviceReputationMetricsBarBlock__bar">
                            <div class="serviceReputationMetricsBarBlock__progress bar_star_3" style="width:{{$sizes>0?$sizes[3]/count($all_reviews)*100:0}}%"></div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock__count">({{$sizes[3]}})</div>
                        </div>
                        <div class="serviceReputationMetricsBarBlock">
                          <div class="serviceReputationMetricsBarBlock__rate">101~500</div>
                          <div class="serviceReputationMetricsBarBlock__bar">
                            <div class="serviceReputationMetricsBarBlock__progress bar_star_2" style="width:{{$sizes>0?$sizes[4]/count($all_reviews)*100:0}}%"></div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock__count">({{$sizes[4]}})</div>
                        </div>
                        <div class="serviceReputationMetricsBarBlock">
                          <div class="serviceReputationMetricsBarBlock__rate">501~</div>
                          <div class="serviceReputationMetricsBarBlock__bar">
                            <div class="serviceReputationMetricsBarBlock__progress bar_star_1" style="width:{{$sizes>0?$sizes[5]/count($all_reviews)*100:0}}%"></div>
                          </div>
                          <div class="serviceReputationMetricsBarBlock__count">({{$sizes[5]}})</div>
                        </div>
                      </div>
                    </div>
                    <div class="serviceReputationMetricsChartContainer">
                      <div class="serviceReputationMetricsBarContainerText">口コミによる項目別評価</div>
                      <div class="serviceReputationMetricsChartBlock">
                        <div class="serviceReputationMetricsChartBlock__chart">
                          <canvas id="chart_610" style="display: block; box-sizing: border-box; height: 398px; width: 398px;" width="398" height="398"></canvas>
                          <div class="serviceReputationMetricsLabel">
                            <div class="serviceReputationMetricsLabel__service">{{$service->title}}</div>
                            <div class="serviceReputationMetricsLabel__category">カテゴリ平均</div>
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
                      <a class="serviceReputationMetricsButton fullWidth " href="{{route('add_review', $service->id)}}">このサービスの口コミを書く</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reviewsV2__item">
            <div class="reviewsV2ServiceShowCardWrapper">
              <div class="reviewsV2ServiceShowCard">
                <h2 class="reviewItems__title">ユーザーレビュー一覧</h2>
                <div class="reputationSearchFormWrapper m-b-20">
                  <form action="/service/610/reviews/#ss-reviews" accept-charset="UTF-8" data-remote="true" method="get">
                    <div class="reputationSortBlock">
                      <div class="reputationSortBlock__title">並び順</div>
                      <div class="reputationSortBlock__selectItem">
                        <select onchange="form.submit()" class="reputationSearchFormWrapper__select p-l-10 w-120px" name="sort" id="sort">
                          <option value="new">新着順</option>
                          <option value="high_rate">評価が高い</option>
                          <option value="low_rate">評価が低い</option>
                        </select>
                      </div>
                    </div>
                    <div class="reputationSearchBlock">
                      <div class="reputationSearchBlock__title">絞り込み</div>
                      <div class="reputationSearchBlock__spTitle">絞り込み
                        <i aria-hidden="true" class="fal fa-sliders-h fa-1x"></i>
                      </div>
                      <div class="reputationSearchInnerBlock">
                        <div class="reputationSearchInnerBlock__selectItem">
                          <label for="search_type_of_business">業界 |</label>
                          <select onchange="form.submit()" id="search_type_of_business" class="reputationSearchFormWrapper__select p-l-60 w-125px" name="type_of_business">
                            <option value="">すべて</option>
                            <option disabled="disabled" value="1">不動産/建設/設備系</option>
                            <option disabled="disabled" value="2">メーカー/製造系</option>
                            <option disabled="disabled" value="3">エネルギー/環境/リサイクル系</option>
                            <option value="4">IT/通信/インターネット系</option>
                            <option disabled="disabled" value="5">輸送/交通/物流/倉庫系</option>
                            <option value="6">小売/流通/商社系</option>
                            <option disabled="disabled" value="7">金融/保険系</option>
                            <option value="8">サービス/外食/レジャー系</option>
                            <option disabled="disabled" value="9">コンサルティング・専門サービス</option>
                            <option disabled="disabled" value="10">マスコミ/広告/デザイン/ゲーム/エンターテイメント系</option>
                            <option value="11">医療系</option>
                          </select>
                        </div>
                        <div class="reputationSearchInnerBlock__selectItem">
                          <label for="search_number_range_of_user_accounts_for_search">利用アカウント数 |</label>
                          <select onchange="form.submit()" id="search_number_range_of_user_accounts_for_search" class="reputationSearchFormWrapper__select p-l-150 w-260px" name="number_range_of_user_accounts_for_search">
                            <option value="">すべて</option>
                            <option value="one">1人</option>
                            <option value="more_than_two">2～10人</option>
                            <option value="more_than_eleven">11～100人</option>
                            <option value="more_than_hundred">101～1000人</option>
                            <option disabled="disabled" value="more_than_thousand">1001人以上</option>
                          </select>
                        </div>
                        <div class="reputationSearchInnerBlock__selectItem">
                          <label for="search_position">投稿者 |</label>
                          <select onchange="form.submit()" id="search_position" class="reputationSearchFormWrapper__select p-l-75 w-140px" name="position">
                            <option value="">すべて</option>
                            <option value="user">ユーザー</option>
                            <option disabled="disabled" value="system_admin">システム管理者</option>
                            <option value="intro_promoter">導入推進者</option>
                            <option disabled="disabled" value="decision_maker">導入決裁者</option>
                            <option disabled="disabled" value="consultant">コンサルタント</option>
                          </select>
                        </div>
                        <div class="reputationSearchInnerBlock__selectItem">
                          <label for="search_review_rate">評価 |</label>
                          <select onchange="form.submit()" id="search_review_rate" class="reputationSearchFormWrapper__select p-l-60  w-125px m-r-0" name="review_rate">
                            <option value="">すべて</option>
                            <option disabled="disabled" value="1">★ 1</option>
                            <option disabled="disabled" value="2">★ 2</option>
                            <option selected="selected" value="3">★ 3</option>
                            <option value="4">★ 4</option>
                            <option value="5">★ 5</option>
                          </select>
                        </div>
                        <input type="hidden" name="review_keyphrase_group_name" id="review_keyphrase_group_name">
                      </div>
                    </div>
                    <div class="reputationSelectionPointsWrapper">
                      <div class="reputationSearchFormLabel">選定のポイントから探す</div>
                      <div class="reputationSelectionPoints">
                        <a class="reputationSelectionPoint" href="/service/610/reviews/?review_keyphrase_group_name=%E4%BD%BF%E3%81%84%E3%82%84%E3%81%99%E3%81%95">
                          <div class="reputationSelectionPoint__label">使いやすさ</div>
                          <div class="reputationSelectionPoint__count">10件</div>
                        </a>
                        <a class="reputationSelectionPoint" href="/service/610/reviews/?review_keyphrase_group_name=%E3%81%8A%E5%BD%B9%E7%AB%8B%E3%81%A1%E5%BA%A6">
                          <div class="reputationSelectionPoint__label">お役立ち度</div>
                          <div class="reputationSelectionPoint__count">7件</div>
                        </a>
                        <div class="reputationSelectionPoint reputationSelectionPoint--zero">
                          <div class="reputationSelectionPoint__label">カスタマイズ性</div>
                          <div class="reputationSelectionPoint__count reputationSelectionPoint__count--zero">0件</div>
                        </div>
                        <a class="reputationSelectionPoint" href="/service/610/reviews/?review_keyphrase_group_name=%E6%A9%9F%E8%83%BD%E6%BA%80%E8%B6%B3%E5%BA%A6">
                          <div class="reputationSelectionPoint__label">機能満足度</div>
                          <div class="reputationSelectionPoint__count">2件</div>
                        </a>
                        <div class="reputationSelectionPoint reputationSelectionPoint--zero">
                          <div class="reputationSelectionPoint__label">サービスの安定性</div>
                          <div class="reputationSelectionPoint__count reputationSelectionPoint__count--zero">0件</div>
                        </div>
                        <a class="reputationSelectionPoint" href="/service/610/reviews/?review_keyphrase_group_name=%E5%88%9D%E6%9C%9F%E8%A8%AD%E5%AE%9A%E3%81%AE%E5%AE%B9%E6%98%93%E3%81%95">
                          <div class="reputationSelectionPoint__label">初期設定の容易さ</div>
                          <div class="reputationSelectionPoint__count">3件</div>
                        </a>
                        <a class="reputationSelectionPoint" href="/service/610/reviews/?review_keyphrase_group_name=%E6%96%99%E9%87%91%E3%81%AE%E5%A6%A5%E5%BD%93%E6%80%A7">
                          <div class="reputationSelectionPoint__label">料金の妥当性</div>
                          <div class="reputationSelectionPoint__count">4件</div>
                        </a>
                      </div>
                    </div>
                    <div class="reputationTopicBlock">
                      <p class="reputationTopicBlock__title">キーワードから探す</p>
                      <div class="reputationTopicBlock__radioItem">
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_0" class="reputationTopicBlock__radio" type="radio" value="設定" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_0"># 設定</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_1" class="reputationTopicBlock__radio" type="radio" value="メール" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_1"># メール</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_2" class="reputationTopicBlock__radio" type="radio" value="メール作成" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_2"># メール作成</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_3" class="reputationTopicBlock__radio" type="radio" value="メール配信" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_3"># メール配信</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_4" class="reputationTopicBlock__radio" type="radio" value="メールマーケティング" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_4"># メールマーケティング</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_5" class="reputationTopicBlock__radio" type="radio" value="顧客" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_5"># 顧客</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_6" class="reputationTopicBlock__radio" type="radio" value="htmlメール" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_6"># htmlメール</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_7" class="reputationTopicBlock__radio" type="radio" value="ダッシュボード" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_7"># ダッシュボード</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_8" class="reputationTopicBlock__radio" type="radio" value="メルマガ" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_8"># メルマガ</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_9" class="reputationTopicBlock__radio" type="radio" value="ところ" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_9"># ところ</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_10" class="reputationTopicBlock__radio" type="radio" value="時間" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_10"># 時間</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_11" class="reputationTopicBlock__radio" type="radio" value="コスト" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_11"># コスト</label>
                        <input onclick="if (this.value === '') { this.checked = false; }; form.submit();" id="reputation_topic_radio_12" class="reputationTopicBlock__radio" type="radio" value="他のツール" name="reputation_topic">
                        <label class="reputationTopicBlock__radioLabel" for="reputation_topic_radio_12"># 他のツール</label>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="ss-reviews-items">
                  @foreach($all_reviews as $review)
                  <div class="reputationAnswerItemWrap">
                    <div class="reputationAnswerItemTopBlock">
                      <div class="reputationAnswerItemTopLeftBlock">
                        <div class="reputationAnswerItemTopLeftBlock__icon">
                          @if($review->user->avatar)
                          <img src="{{asset($review->user->avatar)}}" alt="avatar" style="width:70px; height:70px; border-radius:50%"/>
                          @else
                          <i class="fa fa-user-tie" aria-hidden="true"></i>
                          @endif
                        </div>
                      </div>
                      <div class="reputationAnswerItemTopRightBlock">
                        <div class="reputationAnswerItemTopRightItemBaseInfoBlock m-b-4">
                          <div class="reputationAnswerItemTopRightItemBaseInfoBlock__username">{{$review->user->full_name}}</div>
                          <div class="reputationAnswerItemTopRightItemBaseInfoBlock__position">ユーザー</div>
                        </div>
                        <div class="reputationAnswerItemTopRightItemBlock">
                          <div class="reputationAnswerItemTopRightItemBlock__companyName">{{$review->user->company?$review->user->company->name:''}}</div>
                          <div class="reputationAnswerItemTopRightItemBlock__separator">/</div>                          
                          @foreach($data->industries as $industry)
                            @if($industry->id==$review->user->business_type)
                            <div class="reputationAnswerItemTopRightItemBlock__typeOfBusiness">
                              {{$industry->value}}
                            </div>
                            @endif
                          @endforeach                          
                        </div>
                        <!-- <div class="reputationAnswerItemTopRightItemBlock">
                          <div class="reputationAnswerItemTopRightItemBlock__usageStatus">利用状況：利用中</div>
                          <div class="reputationAnswerItemTopRightItemBlock__separator">/</div>
                          <div class="reputationAnswerItemTopRightItemBlock__separator__numberRangeOfUserAccount">利用アカウント数：1件</div>
                        </div> -->
                        <div class="reputationAnswerItemTopRightItemBlock">投稿日：{{\Carbon\Carbon::parse($review->updated_at)->format('Y/m/d')}}</div>
                      </div>
                    </div>
                    <div class="reputationAnswerItemContentsBlock">
                      <div class="reputationAnswerItemBlock">
                        <div class="reputationAnswerItemStatusBlock">
                          <div class="reputationAnswerItemStatusScoreBlock">
                            <span class="reputationAnswerItemStatusScoreBlock__stars">
                              @for ($i = 1; $i < 6; $i++)
                                @if ($i <= $review->score)
                                  <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                @else
                                  <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                                @endif
                              @endfor
                            </span>
                            <span class="reputationAnswerItemStatusScoreBlock__scoreNum">{{$review->score}}/5</span>
                          </div>
                          <!-- <div class="reputationAnswerItemStatusTagBlock review-tooltip">
                            <span class="reputationAnswerItemStatusTagBlock__title">投稿経路</span>
                            <span class="reputationAnswerItemStatusTagBlock__text">キャンペーン</span>
                            <span class="review-tooltip-text">ボクシルが口コミ投稿に謝礼をお渡ししています</span>
                          </div> -->
                        </div>
                        <div class="reputationAnswerItemBasicBlock">
                          <div class="reputationAnswerItemBasicBlock__title">
                            <a href="{{route('review_view', ['service_id'=>$service->id ,'review_id'=> $review->id])}}">{{$review->title}}</a>
                          </div>
                          <div class="reputationAnswerItemBasicBlock__description">{{$review->description}}</div>
                        </div>
                        <div class="reputationAnswerItemFirstQuestionBlock">
                          <div class="reputationAnswerItemFirstQuestionBlock__title">サービス導入後の効果・メリット・解決したことを教えてください</div>
                          <div class="reputationAnswerItemFirstQuestionBlock__answer">{{$review->effect_after_implementation}}</div>
                        </div>
                        <div id="reputation-answer-item__more-{{$review->id}}" style="display:none">
                          <div class="section-base">
                            <div class="reputationAnswerGoodPointsBlock">
                              <div class="reputationAnswerGoodPointsBlock__title">
                                <div class="first-line"></div>
                                このサービスの良いポイントはなんですか？
                              </div>
                              <!-- <ul>
                                <li class="reputationAnswerGoodPointsBlock__point">
                                  <i class="far fa-smile" aria-hidden="true"></i>
                                  <div class="reputationAnswerGoodPointsBlock__text">Googleアナリティクスとの連携</div>
                                </li>
                                <li class="reputationAnswerGoodPointsBlock__point">
                                  <i class="far fa-smile" aria-hidden="true"></i>
                                  <div class="reputationAnswerGoodPointsBlock__text">低コスト</div>
                                </li>
                              </ul> -->
                              <div>
                                {!! $review->good_point !!}
                              </div>
                            </div>
                            <div class="reputationAnswerBadPointsBlock">
                              <div class="reputationAnswerBadPointsBlock__title">このサービスの改善点はなんですか？</div>
                              <!-- <ul>
                                <li class="reputationAnswerBadPointsBlock__point">
                                  <i class="far fa-frown" aria-hidden="true"></i>
                                  <div class="reputationAnswerBadPointsBlock__text">文字化けするところ</div>
                                </li>
                              </ul> -->
                              <div>
                                {!! $review->bad_point !!}
                              </div>
                            </div>
                            <!-- <div class="reputationAnswerServicesAnswersBlock">
                              <div class="reputationAnswerServicesAnswersBlock__title-sub">どのサービスと連携して使用していますか？</div>
                              <div class="reputationAnswerServicesAnswersAnserBlock">
                                <div class="reputationAnswerServicesAnswersAnswerBlock__service">
                                  <a target="_blank" href="/service/836/">
                                    <div class="reputationAnswerServiceSimpleCard reputationAnswerServiceSimpleCard--linked">
                                      <div class="reputationAnswerServiceSimpleCard__logo">
                                        <img alt="Google アナリティクス" class="service-logo-image" loading="lazy" src="https://assets.boxil.jp/images/no_logo@2x.png">
                                      </div>
                                      <div class="reputationAnswerServiceSimpleCard__divider"></div>
                                      <div class="reputationAnswerServiceSimpleCard__serviceName">Google アナリティクス</div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="reputationAnswerItemMoreButtonBlock" id="reputation-answer-item__more-button-{{$review->id}}" onclick="onClickReputationMoreButton({{$review->id}})">
                      <span>費用感や連携サービスをくわしく見る</span>
                      <i class="far inner-icon fa-chevron-down" id="reputation-answer-item__more-button-icon-{{$review->id}}" aria-hidden="true"></i>
                    </button>
                  </div>
                  @endforeach
                  <div class="ss-reviews-pagination"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="reviewsV2__item">
            <div class="reviewServiceReputation">
              <h2 class="reviewServiceReputation__title">{{$service->title}}の概要</h2>
              <div class="recommendedServiceCard">
                <div class="recommendedServiceCard__left">
                  <div class="recommendedServiceCardIcon">
                    <a class="" target="_blank" href="/service/610/">
                      <img alt="WiLL Mail" class="service-logo-image" loading="lazy" src="/attachments/files/images/eyJpZCI6ImQ0YzEzN2ZkNzgzNjk3NTAzNzI2MTY4Y2NiM2Y5ZjIwLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMXBidnhrMi5qcGciLCJzaXplIjoxMzQ4LCJtaW1lX3R5cGUiOm51bGx9fQ">
                    </a>
                  </div>
                </div>
                <div class="recommendedServiceCard__right">
                  <div class="recommendedServiceCardService">
                    <div class="recommendedServiceCardReview">
                      <a class="recommendedServiceCardReview__serviceName" target="_blank" href="/service/610/">WiLL Mail</a>
                      <div class="recommendedServiceCardReview__review">
                        <div class="recommendedServiceCardReviewRate">
                          <i class="fa fa-yellow fa-star text-yellow " style="margin-right: 4px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow " style="margin-right: 4px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow " style="margin-right: 4px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-yellow " style="margin-right: 4px;" aria-hidden="true"></i>
                          <i class="fa fa-yellow fa-star text-black-400 " style="margin-right: 4px;" aria-hidden="true"></i>
                          <span class="recommendedServiceCardReview__review--number">4.08</span>
                        </div>
                        <span class="recommendedServiceCardReview__review--count">
                          <a class="recommendedServiceCardLink" target="_blank" href="/service/610/reviews/">口コミを見る（13件）</a>
                        </span>
                      </div>
                    </div>
                    <div class="recommendedServiceCardImages"></div>
                  </div>
                  <div class="recommendedServiceCardTexts">
                    <span>クラウドアワード5年連続受賞｜メール配信システム市場 売上成長率4年連続１位｜次世代メール配信システム「WiLL Mail」</span>
                  </div>
                </div>
              </div>
              <form class="" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
                <input type="hidden" name="type" value="services">
                <input type="hidden" name="ids[]" value="610">
                <input type="hidden" name="via" value="ri-documentDL-mainBottom">
                <input type="hidden" name="is_comparison" value="false">
                <button name="button" type="submit" class="cvButton reviewServiceReputation__button js-track js-track-ri-documentDL-mainBottom">無料で資料請求</button>
              </form>
            </div>
          </div> -->
        </main>
      </div>
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
        <!-- <div class="v2SidebarItem element_scroll js-scrolltofixed-menu" id="js-overlap-hidden" style="z-index: auto; position: static; top: auto;">
          <div class="v2Sidebar__title">
            <div class="v2Sidebar__title--text">よく比較されるサービス</div>
          </div>
          <div class="v2Sidebar__services">
            <div class="downloadAllServicesWrapper">
              <ul class="downloadAllServicesAutoWidth">
                @foreach($services as $s)
                  <li class="downloadAllService js-service-check-and-download active">
                    <label class="downloadAllService__inner">
                      <div class="boxil-checkbox checkbox">
                        <input checked="" class="boxil-checkbox-input check-service-199" name="document" type="checkbox" value="{{$s->id}}">
                        <span class="lever-sm"></span>
                      </div>
                      <div class="downloadAllService__logo">
                        <img alt="service logo" is-lazyload="true" src="{{asset($s->logo)}}">
                      </div>
                      <div class="downloadAllService__info">
                        <div class="downloadAllService__name">{{$s->title}}</div>
                        <div>
                          <span>
                            @for ($i = 1; $i < 6; $i++)
                              @if ($i <= $service->reviews_avg_score)
                              <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 4px;" aria-hidden="true"></i>
                              @else
                              <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 4px;" aria-hidden="true"></i>
                              @endif
                            @endfor
                          </span>
                          <span class="downloadAllService__number">{{$s->reviews_avg_score+0}}</span>
                        </div>
                      </div>
                    </label>
                  </li>
                @endforeach
              </ul>
              <form class="downloadButtonForm boxil-checkbox-form" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
                <input type="hidden" name="type" value="services">
                <input type="hidden" name="via" value="ri-documentAllDL-side">
                <input type="hidden" name="is_comparison" value="false">
                <button name="button" type="submit" class="cvButton downloadButton js-service-check-and-download-button js-track js-track-ri-documentAllDL-side">
                  選択中の<span class="js-service-check-and-download-button-count">{{count($services)}}</span>件を一括資料請求
                </button>
              </form>
            </div>
          </div>
        </div> -->
        <div style="display: block; width: 336px; height: 598px; float: none;"></div>
      </div>
    </div>
  </div>
  <script>
    const change_display_img = (e) => {
      // console.log(e);
      var display_img = e.target.src;
      $('#display_img').attr('src', display_img);
      $('#detail_url').attr('href', display_img);
    }
    const onClickReputationMoreButton=(id)=>{
      $('#reputation-answer-item__more-'+id).toggle();
      $('#reputation-answer-item__more-button-icon-'+id).toggleClass('fa-chevron-up');
    }
  </script>
@endsection