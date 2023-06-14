@extends('layouts.no_aside')

@section('content')
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
                      <a href="/sc/1">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">Web会議</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc/1">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">経費精算</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc/1">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">勤怠管理</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc/1">
                        <div class="issueDetail__button">
                          <div class="issueDetail__text">給与計算</div>
                          <div class="issueDetail__icon">
                            <i class="far fa-chevron-right" aria-hidden="true"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="issueDetail__buttonArea">
                      <a href="/sc/1">
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
                    <a href="/sc/1"><div class="issueDetail__button">
                      <div class="issueDetail__text">リモートアクセスツール</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc/1">
                    <div class="issueDetail__button">
                      <div class="issueDetail__text">ビジネスチャット</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc/1">
                    <div class="issueDetail__button">
                      <div class="issueDetail__text">PBX</div>
                      <div class="issueDetail__icon">
                        <i class="far fa-chevron-right" aria-hidden="true"></i>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="issueDetail__buttonArea">
                  <a href="/sc/1">
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
@endsection