@extends('layouts.no_aside')

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('additional_style')
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/service.css') }}" />
  <link rel="stylesheet" media="all" href="{{ asset('assets/vendor/css/review.css') }}" />
@endsection

@section('content')

  <div class="container" style="padding-top: 4rem;">
    <div class="boxil-wrappar">
      <main class="service_show__main_contents">
        <div class="service_show__main_contents__first_view service_show_card">
          <div class="serviceShowCard">
            <div class="service_show_overview__header">
              <div class="service_show_overview__header__main">
                <div class="service_show_overview__header__main__content">
                  <div class="service_show_overview__header__main__content__header">
                    <div class="service_show_overview__header__main__content__header__title-container">
                      <div class="service_show_overview__header__main__content__header__title-container-subtitle">{{mb_convert_kana($service->title, 'KVC')}}</div>
                      <h1 class="service_show_overview__header__main__content__header__title-container-title">{{$service->title}}</h1>
                    </div>
                  </div>
                  <div class="service_show_overview__header__main__content__i-bottom">
                    <div class="service_show_overview__header__main__content__i-bottom-left">
                      <div class="service_show_overview__header__main__content__i-bottom-review">
                        <div class="text-no-spacing">
                          @for ($i = 1; $i < 6; $i++)
                            @if ($i <= $review->score)
                            <i class="fa fa-yellow fa-star text-yellow fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            @else
                            <i class="fa fa-yellow fa-star text-black-400 fa-lg" style="margin-right: 4px;" aria-hidden="true"></i>
                            @endif
                          @endfor
                        </div>
                        <div class="service_show_overview__header__main__content__i-bottom-review-score">{{$review->score}}</div>
                        <div class="service_show_overview__header__main__content__i-bottom-review-count">
                          <a class="service_show_overview__header__main__content__i-bottom-review-link" href="{{route('service_reviews', $service->id)}}">{{$service->reviews_count}}件の口コミ 
                            <i aria-hidden="true" class="fal fa-chevron-down fa-1x"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="service_show_overview__header__main__content__i-bottom-right">
                      <div class="service_show_overview__header__main__content__i-bottom-updatedAt">
                        更新日 {{\Carbon\Carbon::parse($review->updated_at)->format('Y/m/d')}}
                        <time datetime="2023-06-23T17:17:11+09:00" itemprop="dateModified"></time>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service_show__main_contents__sub_wrapper">
          <div class="service_show__main_contents__sub_wrapper__contents">
            <div class="service_show__main_contents__sub_wrapper__contents__main service_show_card">
              <div class="serviceShowCard">
                <div id="ss-service-summary" >
                  <div class="reputationAnswerItemWrap "  >
                    <div class="reputationAnswerItemTopBlock">
                      <div class="reputationAnswerItemTopLeftBlock">
                        <div class="reputationAnswerItemTopLeftBlock__icon reputationAnswerItemTopLeftBlock__icon--anonymous">
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
                          <div class="reputationAnswerItemTopRightItemBlock__separator__numberRangeOfUserAccount">利用アカウント数：11件〜30件</div>
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
                          <!-- <div class="reputationAnswerItemStatusTagsBlock">
                            <div class="reputationAnswerItemStatusTagBlock review-tooltip">
                              <span class="reputationAnswerItemStatusTagBlock__title">投稿経路</span>
                              <span class="reputationAnswerItemStatusTagBlock__text">キャンペーン</span>
                              <span class="review-tooltip-text">ボクシルが口コミ投稿に謝礼をお渡ししています</span>
                            </div>
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
                        <div id="reputation-answer-item__more-{{$review->id}}" >
                          <div class="section-base">
                            <div class="reputationAnswerGoodPointsBlock">
                              <div class="reputationAnswerGoodPointsBlock__title">
                                <div class="first-line"></div>
                                このサービスの良いポイントはなんですか？
                              </div>
                              <!-- <ul>
                                <li class="reputationAnswerGoodPointsBlock__point">
                                  <i class="far fa-smile" aria-hidden="true"></i>
                                  <div class="reputationAnswerGoodPointsBlock__text">初心者にも使いやすい。</div>
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
                                  <div class="reputationAnswerBadPointsBlock__text">マニュアルが少しわかりにくい。</div>
                                </li>
                              </ul> -->
                              <div>
                                {!! $review->bad_point !!}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ss-reviews-footer m-t-20">
                <a class="btn btn-raised btn-green-lg ss-reviews-footer-btn" href="{{route('service_reviews', $service->id)}}">口コミ一覧へ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service_show__main_contents__sub_wrapper service_show_card">
          <div class="serviceShowCard">
            <div id="ss-category-service">
              <h2 class="ServicesShow-main-block-title">同じカテゴリのサービスと比較</h2>
              <div class="ServicesShow-main-block-subtitle">{{$service->title}}と気になるサービスの2社比較や、複数のサービスを選択して比較・資料請求できます</div>
              <div class="compared-service">
                <div class="compared-service__top compared-service__top-checked">
                  <div class="compared-service__top-left">すべて選択({{count($services)}}件)</div>
                  <div class="new-checkbox-input-middle compared-service__top-right">
                    <input id="download-all-checkbox-input" type="checkbox" checked>
                    <label class="new-checkbox" id="download-all-checkbox" for="download-all-checkbox-input"></label>
                  </div>
                </div>                
                <div class="compared-service__items m-t-8">
                  @foreach($services as $s)
                  <div class="compared-service-item">
                    <div class="compared-service-item__label checked" id="check-label-0"></div>
                    <div class="compared-service-item__checkbox">
                      <div class="new-checkbox-input-small">
                        <input class="new-checkbox-input compared-checkbox-input" id="check-{{$s->id}}" type="checkbox" value="{{$s->id}}" checked>
                        <label class="new-checkbox" for="check-{{$s->id}}"></label>
                      </div>
                    </div>
                    <div class="compared-service-item__service">
                      <div>
                        <div class="compared-service-item__service-logo">
                          <a href="{{route('service_view', $s->id)}}">
                            <img alt="{{$s->title}}" class="service-logo-image" loading="lazy" src="{{asset($s->logo)}}">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="compared-service-item__service-name text-overflow-ellipsis">
                      <a href="{{route('service_view', $s->id)}}">{{$s->title}}</a>
                    </div>
                    <div class="compared-service-item__sub">
                      <div class="text-no-spacing text-nowrap">
                        @for ($i = 1; $i < 6; $i++)
                          @if ($i <= $s->reviews_avg_score)
                          <i class="fa fa-yellow fa-star text-yellow fa-sm" style="margin-right: 4px;" aria-hidden="true"></i>
                          @else
                          <i class="fa fa-yellow fa-star text-black-400 fa-sm" style="margin-right: 4px;" aria-hidden="true"></i>
                          @endif
                        @endfor
                      </div>
                      <div class="m-l-4 text-nowrap">{{$s->reviews_avg_score+0}}</div>
                      <div class="m-l-8 text-nowrap">({{$s->reviews_count}}件)</div>
                    </div>
                    <div class="compared-service-item__sub">
                      <div class="two-service-comparison">
                        <div class="two-service-comparison__button two-service-comparison__button--full">
                          <a class="outline-link-button" href="/sc-business_card/comparison/199-vs-3477/">2サービスで比較</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>                
                <div class="compared-service__bottom">
                  <div class="compared-service__bottom-button">
                    <a id="js-service-comparison-button" class="btn-service-comparison" data-service-comparison-base-url="/sc-business_card/comparison/" data-service-id="199" href="/sc-business_card/comparison/199-vs-106-vs-460-vs-2812-vs-3477-vs-4107-vs-6899">
                      選択中の<span id="js-checked-service-count">{{count($services)}}</span>件と比較表を作成
                    </a>
                  </div>
                  <div class="compared-service__bottom-button">
                    <form class="text-center" id="request-form" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get">
                      <input type="hidden" name="type" value="services">
                      <input type="hidden" name="via" value="rs-documentAllDL-bottom">
                      <input type="hidden" name="is_comparison" value="true">
                      <button name="button" type="submit" class="btn-claim request-button js-track js-track-rs-documentAllDL-bottom">
                        <div class="buttonText">選択したサービスを資料請求</div>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script>
    $('#download-all-checkbox').click(function(){
      $('.compared-service__top').toggleClass('compared-service__top-checked');
      $('.compared-service-item__label').toggleClass('notChecked checked');   
      $('.new-checkbox-input').click();        
    })
    $('.new-checkbox-input').click(function(){
      $('.compared-service__top').toggleClass('compared-service__top-checked');
      $(this).toggleClass('notChecked checked');   
      $('#download-all-checkbox-input').click();        
    })
  </script>
@endsection