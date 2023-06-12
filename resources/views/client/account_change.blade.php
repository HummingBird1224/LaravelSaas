@extends("layouts.client")

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section">
        <form action="" method="post">
          <!-- 基本機能 -->
          <div class="card-section">
            <div class="row card-section">
              <div class="card info-card sales-card">
                <div class="card-body ">
                  <h3 class="card-title">
                    登録情報変更フォーム
                  </h3>
                  <p>
                    登録情報の変更がありましたら、各項目にご入力の上、送信ください。
                    ※送信したとしてもすぐに反映される訳ではなく、タイムラグがあることはご了承ください。
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    Email<spin style="color:red">*</spin>
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your email" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    会社名<spin style="color:red">*</spin>
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your email" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    担当者名<spin style="color:red">*</spin>
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    貴社サービス名<spin style="color:red">*</spin>
                    <p>
                      ※複数のサービスのお取り扱いがある場合は、変更に該当するサービス名をすべて記載お願いいたします。
                      <br />※サービス名を変更された場合は、変更前のサービス名を記載お願いいたします。
                    </p>
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    変更項目<spin style="color:red">*</spin>
                  </h5>
                  <div class="">
                    <label class="">
                      <input type="checkbox" />
                      請求書送付先
                    </label>
                    <br />
                    <label class="">
                      <input type="checkbox" />
                      社名
                    </label>
                    <br />
                    <label class="">
                      <input type="checkbox" />
                      住所
                    </label>
                    <br />
                    <label class="">
                      <input type="checkbox" />
                      サービス名
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    請求書送付先（To） ※送付先を変更されたい場合はこちらにメールアドレスをご入力ください。お間違えのないようにお願いいたします。（最大3つまで登録可能です）
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    請求書送付先（CC）　※送付先を変更されたい場合はこちらにメールアドレスをご入力ください。お間違えのないようにお願いいたします。（最大3つまで登録可能です）
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    請求書送付先（CC）　※送付先を変更されたい場合はこちらにメールアドレスをご入力ください。お間違えのないようにお願いいたします。（最大3つまで登録可能です）
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    社名　※社名を変更された場合はこちらに新しい社名をご入力ください。お間違えのないように、正式名称でご入力お願いいたします
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    住所　※移転された場合はこちらに新しい社名をご入力ください。お間違えのないように、正式名称でご入力お願いいたします。
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-section">
            <div class="row card-section">
              <div class="card client-account-change">
                <div class="card-body ">
                  <h5 class="card-title">
                    サービス名　※サービス名を変更された場合はこちらに新しいサービス名をご入力ください。お間違えのないように、正式名称でご入力お願いいたします。
                  </h5>
                  <div class="">
                    <div class="col-sm-6">
                      <input type="text" placeholder="Your answer" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="account-change m-t-30">
            <button type="submit" class="blue-button button"> Submit </button>
          </div>

        </form>
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