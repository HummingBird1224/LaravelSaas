@extends("layouts.client")

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section">
        <!-- 基本機能 -->
        <div class="card-section">
          <div class="row card-section">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title invalid-condition">
                  リード無効条件について
                </h5>
                <div class="">
                  <div class="col-12">
                    <ul class="conditions">
                      <li>
                        明らかに虚偽の氏名（例：「あああ」）と思われるもの
                      </li>
                      <li>
                        虚偽の電話番号（例：「0120-000-000 , 123-456」）
                      </li>
                      <li>
                        電話番号が以下の理由により不通であるもの
                        <ul>
                          <li>
                            電話番号自体が存在しない（呼出音が鳴らない等）
                          </li>
                          <li>
                            別の会社に繋がる
                          </li>
                          <li>
                            資料請求した名前の社員が存在しない
                          </li>
                          <li>
                            電話番号にFAX番号が登録されている
                          </li>
                        </ul>
                      </li>
                      <li>
                        申込者の既存顧客(*1)であることが客観的に証明できるもの
                      </li>
                      <li>
                        3ヶ月以内にプロトスター株式会社が申込者に提供したリード情報と重複するもの(*2)
                      </li>
                      <li>
                        競合調査目的とした申込者の同業種企業からの問い合わせといえるもの(*3)
                      </li>
                      <li>
                        プロトスター株式会社の役員又は従業員からの問い合わせ
                      </li>
                      <li>
                        法人登記をしていない個人からの問い合わせ
                      </li>
                    </ul>
                    <ul class="additional-conditions">
                      <li>
                        (*1)申込者と資料請求企業とのご契約関係がわかる証憑（捺印済契約書一部のスクリーンショット等）のご提出が必要となります。
                      </li>
                      <li>
                        (*2)重複の判断は過去3ヶ月以内の提供リード情報内のメールアドレスの一致をもって行います。
                      </li>
                      <li>
                        (*3)事前のドメイン登録（上限20件）が必要です。
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section">
          <div class="row card-section">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title invalid-condition">
                  ※無効対象とならないリード（前項にかかわらず、無効申請の対象とならないもの)
                </h5>
                <div class="">
                  <div class="col-12">
                    <ul class="conditions">
                      <li>
                        SIer / コンサルティング会社に関するリード情報
                      </li>
                      <li>
                        プロトスター株式会社以外から既に提供又は知得している企業に関するリード情報<br />
                        (自社HPから既に問い合わせを受けている企業との重複やプロトスター株式会社以外のリード情報提供サービスから情報提供を受けている企業等)
                      </li>
                      <li>
                        誤って資料請求してしまったとの申告があったリード情報
                      </li>
                      <li>
                        「ニーズが異なる」「リサーチのみしている」等との申告のあったリード情報
                      </li>
                      <li>
                        過去ご提供したリード情報と同一企業だが、担当者名又はユーザーのメールアドレスが異なるユーザーに関するリード情報
                      </li>
                      <li>
                        HPが存在しない企業に関するリード情報
                      </li>
                      <li>
                        既に申込者と商談化済みの企業に関するリード情報
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End 基本機能 -->
      </section>

    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
let selected_num = 0;
$("#selected_num").text(selected_num);
</script>
@endsection