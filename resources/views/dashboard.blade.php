@extends("layouts.no_aside")

@section('content')
  <section id="serviceIndex-boxilTop">
    <div class="boxilTopWrapper">
      <div class="boxilTop">
        <div class="boxilTop__main">
          <div class="boxilTop__copy">
            <!-- <div class="boxilTop__emblem">
              <div class="boxilTop__emblemImage">
                <img alt="No.1 Site Logo" src="https://assets.boxil.jp/images/toppage/top-emblem.png" />
              </div>
            </div> -->
            <div class="boxilTop__copyMain">SaaSとの最適な出会いを。</div>
            <ul class="boxilTop__copySub">
              <li>勤怠管理・顧客管理・経費精算など煩雑な業務を自動化。</li>
              <li>売上アップや組織の見える化に貢献し、明日の生産性を向上させる。</li>
              <li>口コミ・資料から比較し最適なサービスに出会う、SaaSマーケティングプラットフォーム。</li>
              <li class="boxilTop__emblemSource">
                ※第1位・・・2020年9月実施 株式会社ショッパーズアイ「SaaS比較メディアに関するイメージ調査」より
              </li>
            </ul>
          </div>
          <div class="boxilTop__searchBox">
            <form accept-charset="utf-8" action="/search/" class="header-search-form" method="get">
              <input type="text" name="q" class="input" placeholder="サービス名・カテゴリ名 [例：Salesforce、営業支援ツール]" />
              <button aria-label="検索" class="btn-search">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
        </div>
        <div class="boxilTop__logosWrapper">
          <div class="boxilTop__logos">
            @for($i=1;$i<=50;$i++)             
            <div class="boxilTop__logoWrapper top_fv_service_4888">
              <div class="boxilTop__logo">
                <a href="/service/4888/?_via=si-fvServiceLink-main">
                  <img alt="WAN-Sign" class="service-logo-image" loading="auto"
                    src="{{asset('uploads/services/logos/logo2.png')}}" />
                </a>
              </div>
            </div>
            @endfor
          </div>
          <!-- <div class="boxilTop__logos">
            <div class="boxilTop__logoWrapper top_fv_service_4888">
              <div class="boxilTop__logo">
                <a href="/service/4888/?_via=si-fvServiceLink-main">
                  <img alt="WAN-Sign" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImUyMWVkMTE1MjBiNzNjYTE3YmIyZmYyNTU4MDViOTgwLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi1wNmlkeW4uanBnIiwic2l6ZSI6Mzk0MjEsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3558">
              <div class="boxilTop__logo">
                <a href="/service/3558/?_via=si-fvServiceLink-main">
                  <img alt="Zoom" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjI1YjhkZjZiNWQ3ZWFjN2QyNTI3ODgyNzhlYmE3YTcyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xNmZzMmsyLnBuZyIsInNpemUiOjI5MjMsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_355">
              <div class="boxilTop__logo">
                <a href="/service/355/?_via=si-fvServiceLink-main">
                  <img alt="Chatwork" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjgxOTUwMmNhYzFhYzM0YWE3NzdkYjYzN2M4YTA1MmQ0LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWF3bjNjNy5wbmciLCJzaXplIjoyMTgzLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_784">
              <div class="boxilTop__logo">
                <a href="/service/784/?_via=si-fvServiceLink-main">
                  <img alt="Slack" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjA1MDZjYTk3NTc5NWM0YWQ2NmE5ZTkwOWUxOTA3Yjk3LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWRvMThrYy5wbmciLCJzaXplIjoyMzA2LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4700">
              <div class="boxilTop__logo"><a href="/service/4700/?_via=si-fvServiceLink-main">
                  <img alt="Microsoft Teams" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjRmMmVkY2Q3N2UxNjk0MTE2ZTI0YjQ3ODM0MTJkYTdiLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi00ZHVoOTkucG5nIiwic2l6ZSI6MzMxNSwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_6852">
              <div class="boxilTop__logo">
                <a href="/service/6852/?_via=si-fvServiceLink-main">
                  <img alt="Microsoft 365 (旧称 Office 365)" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjA3N2U1OWZmZjI4ZGFjYzkyMzdkZWQwNjY5ZGY1OWM1LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy0xZ3duMmM1LnBuZyIsInNpemUiOjE1NjQsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_586">
              <div class="boxilTop__logo">
                <a href="/service/586/?_via=si-fvServiceLink-main">
                  <img alt="楽楽精算" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImYwMGQxMmM4MmEzMmYwOGU4NjE0M2VhNTMzYzU5ZGEzLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTFsYml4OS5qcGciLCJzaXplIjoxODI0OCwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_903">
              <div class="boxilTop__logo">
                <a href="/service/903/?_via=si-fvServiceLink-main">
                  <img alt="HRMOS勤怠 by IEYASU" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijk0ZDU4NjU0MzY4ZWJkNzc4MWU4MGIxOTRhMDY2Y2E2LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxOS0zMS1qbGZiM2IuanBnIiwic2l6ZSI6MzE5NiwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_197">
              <div class="boxilTop__logo">
                <a href="/service/197/?_via=si-fvServiceLink-main">
                  <img alt="Salesforce Sales Cloud" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImY2MGEzMDVlOGQ1OTRlY2Q2OGU1OTY5MmU2NjkyMmM0LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMXEwa216cS5qcGciLCJzaXplIjoyMzAxLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_644">
              <div class="boxilTop__logo">
                <a href="/service/644/?_via=si-fvServiceLink-main">
                  <img alt="ジョブカン勤怠管理" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQ1NTYwNjdhZjk1MzE5ZjI5NDc4N2U5ODc5MzI3YzQxLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWgzbWs3bi5wbmciLCJzaXplIjo0NjUxLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_199">
              <div class="boxilTop__logo">
                <a href="/service/199/?_via=si-fvServiceLink-main">
                  <img alt="Sansan" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImJlN2U0MDMxZjM5YTBhMDY3YTc0YjcyODVhMDIyMzcyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTA3MTdmcy5wbmciLCJzaXplIjoyNDAyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_611">
              <div class="boxilTop__logo"><a href="/service/611/?_via=si-fvServiceLink-main">
                  <img alt="クラウドサイン" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImZhMjMzODVkOGY3NmIzNGZmMDJlNDU0NjYzMGRjODdhLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMXd2ZjZ6ZS5qcGciLCJzaXplIjo1NTU1LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4598">
              <div class="boxilTop__logo">
                <a href="/service/4598/?_via=si-fvServiceLink-main">
                  <img alt="KING OF TIME" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImU4NjQwOTdmZTY4NDIxMjYyNGRjNDkyMjcyNDExODY4LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi1oendzNHYuanBnIiwic2l6ZSI6NTIzNywibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_463">
              <div class="boxilTop__logo">
                <a href="/service/463/?_via=si-fvServiceLink-main">
                  <img alt="Backlog" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjlmOWE4YTViOGYwMGI4MDM2YjBlNzUyYTcxMzhjNmQyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTIyNXRxdy5wbmciLCJzaXplIjoyNzk1LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_581">
              <div class="boxilTop__logo">
                <a href="/service/581/?_via=si-fvServiceLink-main">
                  <img alt="freee会計" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjAyYTg2MzhmODNmNGVjNjAwNDI2N2Y0ZWJkYTJhNGM4LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMXZjNXNwNi5wbmciLCJzaXplIjoyOTA0LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_670">
              <div class="boxilTop__logo">
                <a href="/service/670/?_via=si-fvServiceLink-main">
                  <img alt="LINE WORKS" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImY0YmVmNGJmOTMxMDZlNzNlYzYzYTlmZTU2MjJhZTRjLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtYmZlc3kuanBnIiwic2l6ZSI6MTg2NTksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1077">
              <div class="boxilTop__logo">
                <a href="/service/1077/?_via=si-fvServiceLink-main">
                  <img alt="NotePM" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjE1MTE0ZGQxMzhmZTgwYjQyMTBmNzUwN2Y1OGZhYjkwLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMWo0ZHViMy5wbmciLCJzaXplIjo3NDMxLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_201">
              <div class="boxilTop__logo">
                <a href="/service/201/?_via=si-fvServiceLink-main">
                  <img alt="サイボウズ Office" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjUwOWNiMTBhOWE1NjlmNGUwN2JkMmI0MDA1NzMyMzFiLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtdGtiMjNnLnBuZyIsInNpemUiOjk5NzYsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_108">
              <div class="boxilTop__logo">
                <a href="/service/108/?_via=si-fvServiceLink-main">
                  <img alt="カオナビ" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijk2OWQ1NTYxOWU5MzVmOWI2Y2RiMzUwNGM5YmYxMzQ0LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtYWN3OHk5LnBuZyIsInNpemUiOjQ3ODgsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_671">
              <div class="boxilTop__logo">
                <a href="/service/671/?_via=si-fvServiceLink-main">
                  <img alt="SmartHR" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjVhZjQyODlkZTQ4YTc0MDRkZjljMTJkZjgzOTY4MWNkLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtYnM3aWExLnBuZyIsInNpemUiOjYwNDksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_378">
              <div class="boxilTop__logo">
                <a href="/service/378/?_via=si-fvServiceLink-main">
                  <img alt="desknet&#39;s NEO" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjkyNWQ5NzU2NjNiYTI2MjgyMWY3NzY3ZWNlNTMwN2FjLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMW1ndG1mMS5wbmciLCJzaXplIjo3Mzc0LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1066">
              <div class="boxilTop__logo">
                <a href="/service/1066/?_via=si-fvServiceLink-main">
                  <img alt="Concur Expense" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImYyNTk1NWVmMTQxNDk5YzkxMzU1ZmJhMzJhZmUwYmQ0LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMWd3dDcyLmpwZyIsInNpemUiOjIyMDAzLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4696">
              <div class="boxilTop__logo">
                <a href="/service/4696/?_via=si-fvServiceLink-main">
                  <img alt="freeeサイン" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjIzZTQ0YTgwMzMyMjBiYTY5Yjk2ODA5NmU4N2U3M2EwLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi02dWx6dTUucG5nIiwic2l6ZSI6MTg2OCwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1003">
              <div class="boxilTop__logo">
                <a href="/service/1003/?_via=si-fvServiceLink-main">
                  <img alt="マネーフォワード クラウド経費" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjM1MTMwYzkwNTA3ZTViZTYwMDdiMGNiNjZhZTk1YzAwLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItOWQxajNpLnBuZyIsInNpemUiOjM4MjcsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_754">
              <div class="boxilTop__logo">
                <a href="/service/754/?_via=si-fvServiceLink-main">
                  <img alt="Asana" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijk1YjY3ZDBkZTZiMDk3ZWMyMWU3MDU4ZmZhNzFjMDVhLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtcW1yZ216LnBuZyIsInNpemUiOjM1NjYsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4331">
              <div class="boxilTop__logo">
                <a href="/service/4331/?_via=si-fvServiceLink-main">
                  <img alt="HRMOSタレントマネジメント" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQxODYwOWI2YWM0ZGM0NTA1NjllNTI1ZTFiNjI0OWVlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi1randweDIucG5nIiwic2l6ZSI6NTYyNSwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_897">
              <div class="boxilTop__logo">
                <a href="/service/897/?_via=si-fvServiceLink-main">
                  <img alt="Garoon" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjYwZjkyZTVmOWY2NGZjYzg1ZmVjYmJmODk2NTE5ODU3LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMW10a3liNS5wbmciLCJzaXplIjoyNjIyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3477">
              <div class="boxilTop__logo">
                <a href="/service/3477/?_via=si-fvServiceLink-main">
                  <img alt="Eight Team" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjkyYmU4YmU4MTk4MTE5NGE1ZWRjZTY1MDA2NzkzMmQyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xcnhpMWRuLnBuZyIsInNpemUiOjE2NDksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_6839">
              <div class="boxilTop__logo">
                <a href="/service/6839/?_via=si-fvServiceLink-main">
                  <img alt="RECOG" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImZhZDI0ZGUwMDFmYjY2YTAxMTA3MTNmMjY2NDY4NDEyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy1mbGQ1bjUucG5nIiwic2l6ZSI6NjA3NSwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3030">
              <div class="boxilTop__logo">
                <a href="/service/3030/?_via=si-fvServiceLink-main">
                  <img alt="BtoBプラットフォーム 請求書" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImU4MGQ3Yzc4ZDhlZjdmYTJhOGNhMjJmNTNkMGI0ZGYyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xM3hzeXQ5LnBuZyIsInNpemUiOjc5NTUsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_713">
              <div class="boxilTop__logo">
                <a href="/service/713/?_via=si-fvServiceLink-main">
                  <img alt="楽楽明細" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjI4MjQ4MzFlNTU1ZTg1ODFlZWI3MzUwZmFlZDNlOWNmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTMyaDhpay5wbmciLCJzaXplIjoxMjI2NywibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_661">
              <div class="boxilTop__logo">
                <a href="/service/661/?_via=si-fvServiceLink-main">
                  <img alt="ジョブカンワークフロー" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjU2YTI0ODlmZWU3OGFlNWFkNTdmNjczMzQ5ZWQwZDJjLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTU0ajVzZC5wbmciLCJzaXplIjo0MjExLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3393">
              <div class="boxilTop__logo">
                <a href="/service/3393/?_via=si-fvServiceLink-main">
                  <img alt="RPAロボパットDX" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImRkNmQzMzg1NjI5ZDBhNjIyZTliMGQ0ZGY3YjJlNTYzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy01NG9leTUucG5nIiwic2l6ZSI6MjIyMSwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4465">
              <div class="boxilTop__logo">
                <a href="/service/4465/?_via=si-fvServiceLink-main">
                  <img alt="電子印鑑GMOサイン" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjRlNDdiMmZhYTU4ODk0ODlhMmE5MTA5ZmRkMmUzMjljLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xdWoxbmszLnBuZyIsInNpemUiOjgzNjMsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4665">
              <div class="boxilTop__logo">
                <a href="/service/4665/?_via=si-fvServiceLink-main">
                  <img alt="ドキュサインの電子署名" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQ4MDVmYTYyOTEzZjhjMDZjNDc4Y2Q3MDExODg2Y2E1LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xaTNxdXo5LnBuZyIsInNpemUiOjM4MTUsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1041">
              <div class="boxilTop__logo">
                <a href="/service/1041/?_via=si-fvServiceLink-main">
                  <img alt="HRMOS採用" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjcyMjA4ZmQyZDZiNjdhYzUwZjNhNGNlMDAyZjRjMzY0LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMTl3eWhqby5qcGciLCJzaXplIjoxMTAwMywibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_12">
              <div class="boxilTop__logo">
                <a href="/service/12/?_via=si-fvServiceLink-main">
                  <img alt="Schoo for Business" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjUyNWZiN2JmNWJkZjZkMzBkMzM4NGM4ZTM3Mzk0ZmYzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjQta3A0OTNiLnBuZyIsInNpemUiOjU3OTksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_663">
              <div class="boxilTop__logo">
                <a href="/service/663/?_via=si-fvServiceLink-main">
                  <img alt="ジンジャー勤怠" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQ5Y2ZlMTY2NzE0YWRiYzQ1OGNkMTgyMzRiZTU0ZWFlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtank2YjNkLnBuZyIsInNpemUiOjMxNTYsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_672">
              <div class="boxilTop__logo">
                <a href="/service/672/?_via=si-fvServiceLink-main">
                  <img alt="BIZREACH" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjVmNjRhOGU2YWE2YjdiNmY2Mjk5MWY2NDc3OGVlMDMyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWEwZTl1aS5wbmciLCJzaXplIjozOTE2LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_2867">
              <div class="boxilTop__logo">
                <a href="/service/2867/?_via=si-fvServiceLink-main">
                  <img alt="Smart Boarding" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjEwMWZjZmFjODUwZTA2YmYwZDY0MTUwMjJlNzE4YTVmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC04MTE4LWdybTZvOS5wbmciLCJzaXplIjo2MTYyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_565">
              <div class="boxilTop__logo">
                <a href="/service/565/?_via=si-fvServiceLink-main">
                  <img alt="Zendesk" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjAwZmU1N2UwOGMyMzM3OGU1YTBmYTkxNGNjMDRjZTAwLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtenluZWY4LnBuZyIsInNpemUiOjQxMDYsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_2804">
              <div class="boxilTop__logo">
                <a href="/service/2804/?_via=si-fvServiceLink-main">
                  <img alt="マネーフォワード クラウド給与" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjM4NDUxZWM5ZGNjZGY5ZjU5NzEyYjY0ZmY2NDkxZWE4LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC04MTE4LXZrOTlxYy5wbmciLCJzaXplIjo0NDkzLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_649">
              <div class="boxilTop__logo">
                <a href="/service/649/?_via=si-fvServiceLink-main">
                  <img alt="Marketing Cloud Account Engagement (旧 Pardot)" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImY2OTliNjFmNzliODNmZjBlYjdjZDY5NzJkNGFkODM5LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMXAxeW85Yy5wbmciLCJzaXplIjo1ODA4LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1432">
              <div class="boxilTop__logo">
                <a href="/service/1432/?_via=si-fvServiceLink-main">
                  <img alt="タレントパレット" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImEyNjc5OWE5ZGYzNDVkNGI2ZDZkN2I3MjA3NDVmMzA1LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItamU5aDJnLmpwZyIsInNpemUiOjcxMDIsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_443">
              <div class="boxilTop__logo"><a href="/service/443/?_via=si-fvServiceLink-main">
                  <img alt="eセールスマネージャーRemix Cloud" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjMyYjMzZWQ0M2VmOGZjZjk4MmMyMzYzNDcyMzFjMzBjLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtYTRhYXV3LmpwZyIsInNpemUiOjUyNzcsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_5383">
              <div class="boxilTop__logo">
                <a href="/service/5383/?_via=si-fvServiceLink-main">
                  <img alt="freee人事労務" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjkzMjg5OGFkYjAwZmJhY2RmODFhZjYzZGQwMzdmNzhmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNjE0Ny1jN3JudTIucG5nIiwic2l6ZSI6Mjc0MywibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_8028">
              <div class="boxilTop__logo">
                <a href="/service/8028/?_via=si-fvServiceLink-main">
                  <img alt="Jira Software" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImViMzUwMzRjZTQ5MjVhNjI4NGZiYmQ3ODhkZDk3ZGYzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLTFrczE1amMucG5nIiwic2l6ZSI6MjExMywibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_128">
              <div class="boxilTop__logo">
                <a href="/service/128/?_via=si-fvServiceLink-main">
                  <img alt="Fileforce" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjI3NDI3MzBmNDY3YjZmMTQyODY5MjkyN2MyYjdjYTJmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtYmczZWVoLnBuZyIsInNpemUiOjM3MTYsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_736">
              <div class="boxilTop__logo">
                <a href="/service/736/?_via=si-fvServiceLink-main">
                  <img alt="Confluence" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjFlNTgyZDNjODg5NzIyMDUxMzJiN2JiYWRjNWY1ZWFmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMTUyZW44MS5wbmciLCJzaXplIjoyMjIwLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_1019">
              <div class="boxilTop__logo">
                <a href="/service/1019/?_via=si-fvServiceLink-main">
                  <img alt="ジョブカン経費精算" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImE0ZTliYjRhZGUzOWYyYmI3MDVkYjEwZDcwYjQ5ZGFlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMXR4MDlnMi5wbmciLCJzaXplIjo0NjQ1LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4803">
              <div class="boxilTop__logo">
                <a href="/service/4803/?_via=si-fvServiceLink-main">
                  <img alt="MiiTel" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImE0ZTliYjRhZGUzOWYyYmI3MDVkYjEwZDcwYjQ5ZGFlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMXR4MDlnMi5wbmciLCJzaXplIjo0NjQ1LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3387">
              <div class="boxilTop__logo">
                <a href="/service/3387/?_via=si-fvServiceLink-main">
                  <img alt="WowTalk" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjQxZTA2Y2FhYjdjMzY0NWIxYTA0MzllOTEyN2UxNTg5LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xZmx4aDF6LnBuZyIsInNpemUiOjY4ODQsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4599">
              <div class="boxilTop__logo">
                <a href="/service/4599/?_via=si-fvServiceLink-main">
                  <img alt="HRBrain" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImE2NjlmZDYxNDEwZGJmNDAzZmFkOWQ1ODQ1MTg5ZWY5LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xd3ZoamR3LnBuZyIsInNpemUiOjM1OTIsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_3450">
              <div class="boxilTop__logo">
                <a href="/service/3450/?_via=si-fvServiceLink-main">
                  <img alt="UPWARD" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImVlM2RiNjVlY2FmZDJjZjdiNzgyNjZiODI2ODI5NmJiLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0xM2R4Z2F1LnBuZyIsInNpemUiOjQzODUsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_855">
              <div class="boxilTop__logo">
                <a href="/service/855/?_via=si-fvServiceLink-main">
                  <img alt="配配メールBridge" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjhjNTFiYmMzODI5YWViZmNlOGM0NmI4M2YxMTJjYjljLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWN3czVmNi5wbmciLCJzaXplIjoyNzgyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_2644">
              <div class="boxilTop__logo">
                <a href="/service/2644/?_via=si-fvServiceLink-main">
                  <img alt="Zoho CRM" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjMzYmRjODVjZTNiYjA1YzQyM2NkMmVjY2Q1Mzc4Y2RlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC04MTE4LTE4dWIzaHAucG5nIiwic2l6ZSI6Nzk4OSwibWltZV90eXBlIjpudWxsfX0" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4362">
              <div class="boxilTop__logo">
                <a href="/service/4362/?_via=si-fvServiceLink-main">
                  <img alt="マネーフォワードクラウド勤怠" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjJmNTlmZmNiNThkNWM4ZDBiNGFlOGY0YzZmNjZhOWUzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xM3VyNHBpLnBuZyIsInNpemUiOjQ0NjcsIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_4682">
              <div class="boxilTop__logo">
                <a href="/service/4682/?_via=si-fvServiceLink-main">
                  <img alt="ベネフィット・ステーション" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6ImRlMzY2NWE4MTFlODQyNWU2NTFhMjk1NjE4MGUwMDcxLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xa3I5ZTRuLmpwZyIsInNpemUiOjQyMTksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_7281">
              <div class="boxilTop__logo">
                <a href="/service/7281/?_via=si-fvServiceLink-main">
                  <img alt="社労夢Company Edition" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjZmOTEyMzBjZWI0NTE3NjRkOTY2OWQ1MTQ2ZDhjNDMyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMTZtMGc2Yi5wbmciLCJzaXplIjo2MzEzLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                </a>
              </div>
            </div>
            <div class="boxilTop__logoWrapper top_fv_service_198">
              <div class="boxilTop__logo">
                <a href="/service/198/?_via=si-fvServiceLink-main">
                  <img alt="Adobe Marketo Engage" class="service-logo-image" loading="auto"
                    src="https://boxil.jp/attachments/files/images/eyJpZCI6IjY0NmE3ZDE2YjBiZTkzNGU3OGFjMzhjNDgzNjI0N2JlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtanJlMWI2LnBuZyIsInNpemUiOjIwOTksIm1pbWVfdHlwZSI6bnVsbH19" />
                </a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <div class="servicesIndex">
    <div class="container">
      <div class="boxilTopPr">
        <div class="boxilTopPrTitle">
          <i class="fas fa-lightbulb heading-2-icon">
            <span>[PR] BOXILおすすめのサービス</span>
          </i>
        </div>
        <div class="boxilTopPrImgWrapper">
          <a target="_blank" rel="noopener" class="boxilTopPrImg"
            href="https://boxil.jp/service/4965/?_via=sef-resultLink-main">
            <div class="banner">
              <div class="pr">PR</div>
              <img alt="バナー: LegalForce"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/73/thumb.jpg" />
              <div class="bannerContent">
                <div class="serviceName">LegalForce</div>
                <div class="categoryName">電子契約システム</div>
              </div>
            </div>
          </a>
          <a target="_blank" rel="noopener" class="boxilTopPrImg" href="https://boxil.smartcamp.co.jp/">
            <div class="banner">
              <img alt="バナー: BOXILへの掲載はこちら"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/74/thumb.jpg" />
              <div class="bannerContent">
                <div class="serviceName">BOXILへの掲載はこちら</div>
              </div>
            </div>
          </a>
          <a target="_blank" rel="noopener" class="boxilTopPrImg" href="https://lp.expo.boxil.jp/exhibitors">
            <div class="banner">
              <img alt="バナー: BOXIL EXPO　出展企業募集"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/76/thumb.jpg" />
              <div class="bannerContent">
                <div class="serviceName">BOXIL EXPO　出展企業募集</div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="boxil-wrappar-full-width">
        <div class="servicesIndex-categoryList">
          <div class="servicesIndex-topPageTitle">
            <h2 class="heading-2">
              <div class="heading-2-icon-wrapper">
                <i class="fas fa-pennant heading-2-icon"></i>
              </div>
              カテゴリで探す
            </h2>
            <div class="sub-text"></div>
            <div class="toCategoryIndexBtnWrapper">
              <a class="toCategoryIndexBtn" href="/categories/">
                <div class="toCategoryIndexBtnWrapper--labelPc">
                  <div class="inner-text">カテゴリ一覧へ</div>
                  <i class="far fa-chevron-double-right inner-icon"></i>
                </div>
                <div class="toCategoryIndexBtnWrapper--labelSp">
                  <div class="inner-text">一覧へ</div>
                  <i class="far fa-chevron-double-right inner-icon"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="servicesIndex-categories">
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle">
                  <i class="fas fa-bullseye-arrow titleIcon"></i>
                  営業・マーケティング
                </h3>
                <div class="categoryBoxesMoreButton js-category-more">
                  <span class="inner-text js-category-more-text">さらに表示する</span>
                  <i class="far fa-chevron-down inner-icon js-category-more-icon"></i>
                </div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle">
                    <a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-sales/?_via=si-categoryLink-mainTop">
                      営業・顧客管理
                      <i class="far fa-chevron-double-right linkIcon"></i>
                    </a>
                  </h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-sfa/?_via=si-categoryLink-mainTop">SFA(営業支援システム)</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-crm/?_via=si-categoryLink-mainTop">CRM(顧客管理システム)</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-business_card/?_via=si-categoryLink-mainTop">名刺管理ソフト</a>
                        </span>
                      </li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-webinar_tool/?_via=si-categoryLink-mainTop">ウェビナーツール</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-web_customer_service/?_via=si-categoryLink-mainTop">WEB接客</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-online_talks/?_via=si-categoryLink-mainTop">オンライン商談ツール・システム</a>
                        </span>
                      </li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-chat_system/?_via=si-categoryLink-mainTop">チャットシステム</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-email_sharing_Inquiry/?_via=si-categoryLink-mainTop">メール共有・問合せ管理システム</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cti/?_via=si-categoryLink-mainTop">CTI</a>
                        </span>
                      </li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-inbound_call_center/?_via=si-categoryLink-mainTop">コールセンターシステム（インバウンド）</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-outbound_call_center/?_via=si-categoryLink-mainTop">
                            コールセンターシステム（アウトバウンド）
                          </a>
                        </span>
                      </li>
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-deposit_management/?_via=si-categoryLink-mainTop">
                            会員管理・入金管理
                          </a>
                        </span>
                      </li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-event_management/?_via=si-categoryLink-mainTop">イベント管理</a>
                        </span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-questionnaire_system/?_via=si-categoryLink-mainTop">Webアンケートツール・システム</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-vehicle_management/?_via=si-categoryLink-mainTop">車両管理システム</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes display-show-default-sp js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-marketing/?_via=si-categoryLink-mainTop">マーケティング<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category display-show-default-sp js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-marketing_automation/?_via=si-categoryLink-mainTop">MAツール(BtoB)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-email/?_via=si-categoryLink-mainTop">メール配信システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-sms/?_via=si-categoryLink-mainTop">SMS送信サービス</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-video_distribution/?_via=si-categoryLink-mainTop">動画配信システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-lead_generation/?_via=si-categoryLink-mainTop">リードジェネレーション</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cms/?_via=si-categoryLink-mainTop">CMS・WEB制作ソフト</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-btoc_tool/?_via=si-categoryLink-mainTop">BtoCビジネスツール<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-customer_analysis/?_via=si-categoryLink-mainTop">MAツール(BtoC)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-pos_system/?_via=si-categoryLink-mainTop">POSシステム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-chat_bot/?_via=si-categoryLink-mainTop">チャットボット</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-settlement_btoc/?_via=si-categoryLink-mainTop">決済代行(BtoC)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-web_push/?_via=si-categoryLink-mainTop">Webプッシュ通知サービス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-shift_management/?_via=si-categoryLink-mainTop">シフト管理システム</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-analytics/?_via=si-categoryLink-mainTop">データ分析・管理<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-bi/?_via=si-categoryLink-mainTop">BIツール</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-backup_tool/?_via=si-categoryLink-mainTop">データバックアップ</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-text_mining/?_via=si-categoryLink-mainTop">テキストマイニングツール</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>総務・法務</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-collaboration/?_via=si-categoryLink-mainTop">コラボレーション<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-groupware/?_via=si-categoryLink-mainTop">グループウェア</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-project/?_via=si-categoryLink-mainTop">プロジェクト管理・工数管理</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-enterprise_sns/?_via=si-categoryLink-mainTop">社内SNS</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-electronic_form/?_via=si-categoryLink-mainTop">電子帳票システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-business_chat/?_via=si-categoryLink-mainTop">ビジネスチャット</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-knowledge_management/?_via=si-categoryLink-mainTop">ナレッジマネジメントツール</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-manual_preparation/?_via=si-categoryLink-mainTop">マニュアル作成</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-workflow/?_via=si-categoryLink-mainTop">ワークフローシステム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-document_management/?_via=si-categoryLink-mainTop">文書管理システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-meeting_room_reservation/?_via=si-categoryLink-mainTop">会議室予約システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-company_newsletter/?_via=si-categoryLink-mainTop">Web社内報</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-minutes_creation_tool/?_via=si-categoryLink-mainTop">議事録作成ツール・ソフト</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-virtual-office/?_via=si-categoryLink-mainTop">バーチャルオフィス（仮想オフィス）ツール</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes display-show-default-sp js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-id/?_via=si-categoryLink-mainTop">ID・アクセス管理<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category display-show-default-sp js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-id_management/?_via=si-categoryLink-mainTop">ID管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-sso/?_via=si-categoryLink-mainTop">SSO(シングルサインオン)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-otp/?_via=si-categoryLink-mainTop">ワンタイムパスワード(OTP)</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-network/?_via=si-categoryLink-mainTop">通信インフラ<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-paperless_conference/?_via=si-categoryLink-mainTop">ペーパーレス会議システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-mdm/?_via=si-categoryLink-mainTop">MDM(モバイルデバイス管理)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-vpn/?_via=si-categoryLink-mainTop">VPN</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-business_ip_phone/?_via=si-categoryLink-mainTop">ビジネスフォン・IP電話</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-pbx/?_via=si-categoryLink-mainTop">PBX</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-remote_access_tool/?_via=si-categoryLink-mainTop">リモートアクセス</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-web_conference/?_via=si-categoryLink-mainTop">WEB会議システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-tv_conference/?_via=si-categoryLink-mainTop">テレビ会議システム</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-operation/?_via=si-categoryLink-mainTop">運用管理・監視<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-servicedesk/?_via=si-categoryLink-mainTop">サービスデスク</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-it_asset_management/?_via=si-categoryLink-mainTop">IT資産管理ツール</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-safety_check_system/?_via=si-categoryLink-mainTop">安否確認システム</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-log_management/?_via=si-categoryLink-mainTop">ログ管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-server_management/?_via=si-categoryLink-mainTop">サーバー管理ツール</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-integrated_operation/?_via=si-categoryLink-mainTop">統合運用管理</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>人事・労務</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-hr_management/?_via=si-categoryLink-mainTop">人事・給与<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-attendance/?_via=si-categoryLink-mainTop">勤怠管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-e_learning_system/?_via=si-categoryLink-mainTop">eラーニング(システム)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-labor_management/?_via=si-categoryLink-mainTop">労務管理システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-organizational_diagnosis/?_via=si-categoryLink-mainTop">組織診断ツール</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-health_management/?_via=si-categoryLink-mainTop">健康管理システム（ストレスチェック）</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-salary_calculation/?_via=si-categoryLink-mainTop">給与計算ソフト</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-employee_satisfaction_survey/?_via=si-categoryLink-mainTop">従業員満足度調査</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-canteen/?_via=si-categoryLink-mainTop">オフィスコンビニ</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-reception/?_via=si-categoryLink-mainTop">受付システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-salary_prepayment_service/?_via=si-categoryLink-mainTop">給与前払いサービス・システム</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-recruitment/?_via=si-categoryLink-mainTop">採用管理システム(ATS)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-web_interview/?_via=si-categoryLink-mainTop">Web面接システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-personnel_evaluation/?_via=si-categoryLink-mainTop">人事評価システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-human_resource/?_via=si-categoryLink-mainTop">タレントマネジメントシステム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-multifaceted_evaluation/?_via=si-categoryLink-mainTop">360度評価・多面評価システム</a></span>
                      </li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-peer_bonus/?_via=si-categoryLink-mainTop">ピアボーナス</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes display-show-default-sp js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-rec_new_graduate/?_via=si-categoryLink-mainTop">新卒採用サイト・サービス<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category display-show-default-sp js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-freshman_rec_place/?_via=si-categoryLink-mainTop">新卒採用サイト(掲載型)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-freshman_rec_direct/?_via=si-categoryLink-mainTop">新卒採用サイト(ダイレクトリクルーティング)</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_engineer_new_graduate/?_via=si-categoryLink-mainTop">新卒採用(エンジニア採用)</a></span>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-rec_mid_career/?_via=si-categoryLink-mainTop">中途採用サイト・サービス<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-mid_rec_post/?_via=si-categoryLink-mainTop">中途採用サイト(掲載型)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-mid_rec_direct/?_via=si-categoryLink-mainTop">中途採用サイト(ダイレクトリクルーティング)</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_referral/?_via=si-categoryLink-mainTop">中途採用(リファラル採用)</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_engineer/?_via=si-categoryLink-mainTop">中途採用(エンジニア採用)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_foreigner/?_via=si-categoryLink-mainTop">中途採用(外国人採用)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_headhunting/?_via=si-categoryLink-mainTop">中途採用(ヘッドハンティング)</a></span></li>
                    </ul>
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-mid_rec_other/?_via=si-categoryLink-mainTop">中途採用サイト(その他)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-talent_introduction/?_via=si-categoryLink-mainTop">人材紹介サービス</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-rec_other/?_via=si-categoryLink-mainTop">その他採用サイト・サービス<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul class="childCategoryList js-category js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-haken/?_via=si-categoryLink-mainTop">人材派遣サービス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rec_site_construction/?_via=si-categoryLink-mainTop">採用サイト作成</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-recruit_branding/?_via=si-categoryLink-mainTop">採用広報・ブランディング</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>経理・会計</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-accounting/?_via=si-categoryLink-mainTop">財務・会計<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cloud_accounting/?_via=si-categoryLink-mainTop">会計ソフト(財務会計)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-electronic_contract/?_via=si-categoryLink-mainTop">電子契約システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-invoicing/?_via=si-categoryLink-mainTop">請求書発行システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-invoice-receipt/?_via=si-categoryLink-mainTop">請求書受領サービス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-expense/?_via=si-categoryLink-mainTop">経費精算システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-contract-management/?_via=si-categoryLink-mainTop">契約書管理システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-contract_review/?_via=si-categoryLink-mainTop">契約書レビュー</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-budget_management/?_via=si-categoryLink-mainTop">予算管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-settlement_btob/?_via=si-categoryLink-mainTop">決済代行(BtoB)</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-travel_management_system/?_via=si-categoryLink-mainTop">出張管理システム(BTM)</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-receivable_management/?_via=si-categoryLink-mainTop">債権管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-managerial_accounting/?_via=si-categoryLink-mainTop">管理会計システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-fixed-assets-management-system/?_via=si-categoryLink-mainTop">固定資産管理システム</a></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>生産・企画</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-operation_management/?_via=si-categoryLink-mainTop">生産・販売管理<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-production_control/?_via=si-categoryLink-mainTop">生産管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-inventory_control/?_via=si-categoryLink-mainTop">在庫管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-erp/?_via=si-categoryLink-mainTop">ERP(基幹システム)</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-order_management/?_via=si-categoryLink-mainTop">受発注管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-inventory/?_via=si-categoryLink-mainTop">販売管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cost_control/?_via=si-categoryLink-mainTop">原価管理システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-purchasing_management/?_via=si-categoryLink-mainTop">購買管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-warehouse_logistics/?_via=si-categoryLink-mainTop">倉庫管理システム(WMS)</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-process_management/?_via=si-categoryLink-mainTop">工程管理システム</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-construction_management_software/?_via=si-categoryLink-mainTop">施工管理ソフト・アプリ</a></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>セキュリティ</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-server_storage/?_via=si-categoryLink-mainTop">サーバー・ストレージ<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-online_strage/?_via=si-categoryLink-mainTop">オンラインストレージ</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-server/?_via=si-categoryLink-mainTop">レンタルサーバー</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-forward_file/?_via=si-categoryLink-mainTop">ファイル転送サービス</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cloud_server/?_via=si-categoryLink-mainTop">クラウドサーバー</a></span></li>
                    </ul>
                  </div>
                </div>
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-content_security/?_via=si-categoryLink-mainTop">コンテンツセキュリティ<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-file_encryption/?_via=si-categoryLink-mainTop">ファイル暗号化ソフト</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-antivirus/?_via=si-categoryLink-mainTop">ウイルス対策・不正アクセス対策</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-attached_file_encryption/?_via=si-categoryLink-mainTop">メールセキュリティ</a></span></li>
                    </ul>
                  </div>
                </div>
                <div
                  class="categoryBoxes js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-network_security/?_via=si-categoryLink-mainTop">ネットワークセキュリティ<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-cloud_waf/?_via=si-categoryLink-mainTop">WAF</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-firewall/?_via=si-categoryLink-mainTop">ファイアウォール</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-ids_ips/?_via=si-categoryLink-mainTop">IDS・IPS(不正侵入対策)</a></span></li>
                    </ul>
                  </div>
                </div>
                <div
                  class="categoryBoxes js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-security/?_via=si-categoryLink-mainTop">その他セキュリティ<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-security_diagnosis/?_via=si-categoryLink-mainTop">セキュリティ診断サービス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-entrance_exit_control/?_via=si-categoryLink-mainTop">入退室管理システム</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-fw_utm/?_via=si-categoryLink-mainTop">UTM(統合脅威管理)</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>BPO・コンサル</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-bpo_consulting_rpa/?_via=si-categoryLink-mainTop">BPO/コンサル/RPA<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-payroll_outsourcing/?_via=si-categoryLink-mainTop">給与計算アウトソーシング</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-sales_outsourcing/?_via=si-categoryLink-mainTop">営業代行</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-offshore/?_via=si-categoryLink-mainTop">オフショア開発</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-insidesales_outsourcing/?_via=si-categoryLink-mainTop">インサイドセールス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-accounting_outsourcing/?_via=si-categoryLink-mainTop">経理代行</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-market_research/?_via=si-categoryLink-mainTop">市場調査</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-risk_consulting/?_via=si-categoryLink-mainTop">リスクコンサル</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-rpa/?_via=si-categoryLink-mainTop">RPA</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-callcenter_outsourcing/?_via=si-categoryLink-mainTop">電話代行（コールセンターアウトソーシング）</a></span>
                      </li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-recruiting_agent/?_via=si-categoryLink-mainTop">採用代行・採用アウトソーシング(RPO)</a></span>
                      </li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-customer_success/?_via=si-categoryLink-mainTop">カスタマーサクセス</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-article_creation_agency/?_via=si-categoryLink-mainTop">記事作成代行</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-crowd_sourcing/?_via=si-categoryLink-mainTop">クラウドソーシングサービス・サイト</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-welfare_service/?_via=si-categoryLink-mainTop">福利厚生サービス・代行</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle"><i class="fas fa-bullseye-arrow titleIcon"></i>広告</h3>
                <div class="categoryBoxesMoreButton js-category-more"><span
                    class="inner-text js-category-more-text">さらに表示する</span><i
                    class="far fa-chevron-down inner-icon js-category-more-icon"></i></div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle"><a class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="/tags/lc-media_ad/?_via=si-categoryLink-mainTop">広告<i
                        class="far fa-chevron-double-right linkIcon"></i></a></h4>
                  <div class="categoryBox">
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-listing/?_via=si-categoryLink-mainTop">リスティング広告</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-ad_integration/?_via=si-categoryLink-mainTop">広告統合管理</a></span></li>
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-affiliate/?_via=si-categoryLink-mainTop">アフィリエイト広告</a></span></li>
                    </ul>
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc js-toggle-category js-category-shrinked">
                      <li class="childCategoryListItem"><span class="listMark"><a
                            class="js-track js-track-si-categoryLink-mainTop"
                            href="/sc-movie_ad/?_via=si-categoryLink-mainTop">動画広告</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="servicesIndex-categories-more">
            <div class="btn-read-more-round js-department-more"><span
                class="inner-text js-department-more-text">さらに見る</span><i
                class="far fa-chevron-down inner-icon js-department-more-icon"></i></div>
          </div>
        </div>
      </div>
      <div class="boxil-wrappar">
        <main class="bw-main">
          <div class="main-inner">
            <div id="servicesIndex-boxilRanking">
              <div class="servicesIndex-topPageTitle">
                <h2 class="heading-2">
                  <div class="heading-2-icon-wrapper"><i class="fas fa-pennant heading-2-icon"></i></div>ランキング
                </h2>
                <div class="sub-text"></div>
              </div>
              <div class="servicesIndex-boxilRankingContent">
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-inbound_call_center/?_via=si-categoryLink-mainRanking">コールセンターシステム（インバウンド）</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/4803/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="MiiTel" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijk3NGJmZjhkOWQwZDk2ODIxZmFhOWRlN2U5NzYzYWYxLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xNzlveGZwLmpwZyIsInNpemUiOjk2NiwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">MiiTel</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.31</span><span
                            class="number">（64件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">コールセンターシステム（インバウンド）
                          </div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/646/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="BIZTEL コールセンター" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjYwMzQxMWIxNTJkZjk3YTVjOTJlYzE0NjFkMWRlYWJlLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtZm5pbXM5LnBuZyIsInNpemUiOjE2MDYsIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">BIZTEL コールセンター</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.4</span><span
                            class="number">（10件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">コールセンターシステム（インバウンド）
                          </div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/7319/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="カイクラ" class="service-logo-image" loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijk2ZjhiOGE2ZWFiYjk4NjczMDg3Y2E2N2Q0NjllOWQwLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMXdhZjdmay5wbmciLCJzaXplIjoyNTQ3LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">カイクラ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">4.5</span><span
                            class="number">（14件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">コールセンターシステム（インバウンド）
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-inbound_call_center/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-workflow/?_via=si-categoryLink-mainRanking">ワークフローシステム</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/201/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="サイボウズ Office" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjAxY2YxYmU4NWJmZWMxMWU3MzllYmFiNmMwZTMyYmI4LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWlrdjhzMC5wbmciLCJzaXplIjo0ODk4LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">サイボウズ Office</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.11</span><span
                            class="number">（257件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">ワークフローシステム</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/661/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="ジョブカンワークフロー" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6ImE4Y2M5NzJjYTIxNzI2NGQ3YTAxZjU3ZjgwZTk5YjI5LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC01NzAtMWY3MzM4di5wbmciLCJzaXplIjoyMjkyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">ジョブカンワークフロー</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.09</span><span
                            class="number">（99件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">ワークフローシステム</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/2733/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="コラボフロー" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjcwMzViYmU0MGYwZGRkN2FmMTlkNjAyNGEzNmY3NzJmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC04MTE4LTF4YjY5c2wucG5nIiwic2l6ZSI6MTQxMywibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">コラボフロー</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.2</span><span
                            class="number">（15件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">ワークフローシステム</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-workflow/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-personnel_evaluation/?_via=si-categoryLink-mainRanking">人事評価システム</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/3166/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="カオナビ" class="service-logo-image" loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjIzOWEzYWM1MDgwZGY1MzBmMjFiMzdjYzIyODI0ZmRmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy1nMTZvMmoucG5nIiwic2l6ZSI6MjYwNiwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">カオナビ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">3.99</span><span
                            class="number">（226件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">人事評価システム</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/4599/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="HRBrain" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjJhY2Q2Mjk4NDk2YWMxY2E1YmQ2MjdmNTMwYTA3ODBkLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi0xMGN2aml3LnBuZyIsInNpemUiOjIxMzIsIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">HRBrain</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.23</span><span
                            class="number">（60件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">人事評価システム</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/4292/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="サイレコ" class="service-logo-image" loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQyMjYwYmRjNGQ1MzU4NjI2N2U3Yzg5Y2FmYmU1MzY5LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi04bW9iOWUuanBnIiwic2l6ZSI6MTk3NCwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">サイレコ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">3.86</span><span
                            class="number">（7件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">人事評価システム</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-personnel_evaluation/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-employee_satisfaction_survey/?_via=si-categoryLink-mainRanking">従業員満足度調査</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/1432/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="タレントパレット" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6Ijc4ZTRjOWJjZTNhNjVhZDJjMGFhNzgxYjc4NTgxOWNlLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMWtueHM0MS5qcGciLCJzaXplIjozNTA5LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">タレントパレット</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.03</span><span
                            class="number">（69件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">従業員満足度調査</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/7071/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="いっと" class="service-logo-image" loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjYwN2M5YjI5OTkwZTIwNmYxYWUwYmU3YWU3N2RiZDdhLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMXBwaTdibi5wbmciLCJzaXplIjo0MTEzLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">いっと</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">5.0</span><span
                            class="number">（1件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">従業員満足度調査</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/4354/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="ラフールサーベイ" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjFmYmU4YTE2OGE2YmZlNjJjYmZkNjI3NzBiMDMzMDUyLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi01MXdyMGkucG5nIiwic2l6ZSI6MTcxNSwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">ラフールサーベイ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.42</span><span
                            class="number">（19件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">従業員満足度調査</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-employee_satisfaction_survey/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-customer_success/?_via=si-categoryLink-mainRanking">カスタマーサクセス</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/7409/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="テックタッチ" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjIwM2ViYmRjNmYwNDQyNWNjZWQ0ODBhZTNhYmIwYzg1LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMTUtMWdxeWd2dS5qcGciLCJzaXplIjoxMDQ4LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">テックタッチ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">5.0</span><span
                            class="number">（1件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">カスタマーサクセス</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/5448/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="commmune" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjM1ODBlNjhhMmExYTI0NjQ2ZjE0OGZmYjBkMTY1NDM4LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDUxOC0yNC1yMHk0d3MucG5nIiwic2l6ZSI6NDEyMCwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">commmune</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">5.0</span><span
                            class="number">（1件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">カスタマーサクセス</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/5040/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="新ビジネス導入支援" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjMwNzIzNTI4YTExZDgyZGE2NGYwMDAyZDI2NGM5ZWE5LnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNjE0Ny0xc3dmMmVpLnBuZyIsInNpemUiOjQ5MTcsIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">新ビジネス導入支援</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">0.0</span><span
                            class="number">（0件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">カスタマーサクセス</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-customer_success/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-multifaceted_evaluation/?_via=si-categoryLink-mainRanking">360度評価・多面評価システム</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/3166/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="カオナビ" class="service-logo-image" loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjIzOWEzYWM1MDgwZGY1MzBmMjFiMzdjYzIyODI0ZmRmLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy1nMTZvMmoucG5nIiwic2l6ZSI6MjYwNiwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">カオナビ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">3.99</span><span
                            class="number">（226件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">360度評価・多面評価システム
                          </div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/1267/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="あしたのチーム" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjUwNTBmMTMxYzAwZjAwYTgwMTI0YTlhMzQ3YzY2MzUzLmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMDItMXY2NjhtZC5qcGciLCJzaXplIjoyMDE4MSwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">あしたのチーム</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">3.73</span><span
                            class="number">（22件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">360度評価・多面評価システム
                          </div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/4544/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="あしたのクラウドHR" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjVlM2JhNTg0OWM2ZGY5MDYwZmRlYmY4OTQxNzg5MjZjLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMzM5Mi04cXY5d2oucG5nIiwic2l6ZSI6NDc2OCwibWltZV90eXBlIjpudWxsfX0" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">あしたのクラウドHR</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.19</span><span
                            class="number">（37件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">360度評価・多面評価システム
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-multifaceted_evaluation/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-invoice-receipt/?_via=si-categoryLink-mainRanking">請求書受領サービス</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/6583/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="バクラク請求書" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6ImI4ZDgyYjM0MWU4ZTQzNTMxNjJiYzdmYWU3ZGViYzlhLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy0xZzlyOWlwLnBuZyIsInNpemUiOjE2NjIsIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">バクラク請求書</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">4.63</span><span
                            class="number">（8件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">請求書受領サービス</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/3548/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="Concur Invoice" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjRkNDk2ZmI2MDY4YWViMjhkNzViZjkyMGEzY2I2MTU2LmpwZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0xMjgxNy0zaGtxaHkuanBnIiwic2l6ZSI6MjAyOTksIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">Concur Invoice</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.48</span><span
                            class="number">（31件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">請求書受領サービス</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/8439/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="Oneplat" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjU1ZGMzNTRjZDM0ZjZlNWY1ZGU3ODk4NjY1ZDE4Y2ZhLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLWtscjYzdC5wbmciLCJzaXplIjoxNTEwLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">Oneplat</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">0.0</span><span
                            class="number">（0件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">請求書受領サービス</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-invoice-receipt/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
                <div class="rankingBox">
                  <div class="rankingBox-title"><a class="js-track js-track-si-categoryLink-mainRanking"
                      href="/sc-prevention-of-turnover/?_via=si-categoryLink-mainRanking">離職防止ツール</a></div><a
                    class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/8269/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-1"></i></div>
                      <div class="service-logo-top-recommend"><img alt="ラフールサーベイ" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQ0MzNkMWViMGMwMTZiNDE4ODViMGJmMjMxYzQ2M2QzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLXpjZWhsNi5wbmciLCJzaXplIjoxNzE1LCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">ラフールサーベイ</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.42</span><span
                            class="number">（19件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">離職防止ツール</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/8459/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-2"></i></div>
                      <div class="service-logo-top-recommend"><img alt="TeamUp" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6IjAyY2JjNmU5ZWE2ZTNjMzcxZTczNTI0MjVkZmJhODYxLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0zNzQwLXVoenYway5wbmciLCJzaXplIjoxODIyLCJtaW1lX3R5cGUiOm51bGx9fQ" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">TeamUp</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><span class="average">4.57</span><span
                            class="number">（7件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">離職防止ツール</div>
                        </div>
                      </div>
                    </div>
                  </a><a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                    href="/service/6932/?_via=si-serviceLink-mainRanking">
                    <div class="i-serviceBlock rankingBox-service flex">
                      <div class="rankingBox-service-top-ranking"><i class="fas fa-crown ranking-crown no-3"></i></div>
                      <div class="service-logo-top-recommend"><img alt="SmartHR" class="service-logo-image"
                          loading="lazy"
                          src="https://boxil.jp/attachments/files/images/eyJpZCI6ImQwMDVkNmNjMDIzMmMxZjRlNTRmNDMyMzdjOGJmZWIzLnBuZyIsInN0b3JhZ2UiOiJzZXJ2aWNlX2xvZ28iLCJtZXRhZGF0YSI6eyJmaWxlbmFtZSI6ImltYWdlX3Byb2Nlc3NpbmcyMDIzMDQxMC0yNzgyNy0xOThxd205LnBuZyIsInNpemUiOjIyODMsIm1pbWVfdHlwZSI6bnVsbH19" />
                      </div>
                      <div class="i-service-details">
                        <div class="i-service-details-serviceName text-overflow-ellipsis"><span
                            class="text-overflow-ellipsis">SmartHR</span></div>
                        <div class="i-service-details-serviceReview"><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-yellow "
                            style="margin-right: 0px;"></i><i class="fa fa-yellow fa-star text-black-400 "
                            style="margin-right: 0px;"></i><span class="average">4.35</span><span
                            class="number">（223件）</span></div>
                        <div class="i-service-details-serviceCategory">
                          <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">離職防止ツール</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="rankingBox-moreRanking"><a
                      class="js-track js-track-si-categoryLink-mainRanking btn-read-more-round"
                      href="/sc-prevention-of-turnover/?_via=si-categoryLink-mainRanking">
                      <div class="inner-text">続きを見る</div><i class="far fa-chevron-double-right inner-icon"></i>
                    </a></div>
                </div>
              </div>
            </div>
            <div class="servicesIndex-categoryDocument-block" id="servicesIndex-categoryDocument">
              <div class="servicesIndex-topPageTitle">
                <h2 class="heading-2">
                  <div class="heading-2-icon-wrapper"><i class="fas fa-pennant heading-2-icon"></i></div>お役立ちガイド
                </h2>
                <div class="sub-text"></div>
              </div>
              <div class="servicesIndex-categoryDocument-text">
                業務効率化やコスト削減につながるツールやその使い方などを、様々な切り口でわかりやすく解説したボクシル限定「無料ガイド」をまとめました。チェックを付けた資料を一括でダウンロードできます。
              </div>
              <div class="servicesIndex-categoryDocument-document-all">
                <a class="btn-go-to-category-documents"
                  href="/category_documents/">
                  <div class="inner-text">お役立ちガイド一覧を見る</div>
                  <i class="far fa-chevron-double-right inner-icon"></i>
                </a>
              </div>
              <div class="servicesIndex-categoryDocument-wrapper">
                <label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img">
                    <img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/e4c6736449243e59f6a7084e5da89799e273b9542b8fe4113eb78b3fd5c2/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-1122" id="category_document_1122"
                        name="category_document" type="checkbox" value="1122" /><label class="new-checkbox"
                        for="category_document_1122"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">SaaS業界レポート2022</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/bada2aaad9154d2709e51219f2186aa1d53beb53bb90ae497ef14e2cdfab/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-42" id="category_document_42"
                        name="category_document" type="checkbox" value="42" /><label class="new-checkbox"
                        for="category_document_42"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">経費精算システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/0c18139e900f6d6d4287dee988cd5b8fa86e18528ee077f4824e04fcb9b9/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-23" id="category_document_23"
                        name="category_document" type="checkbox" value="23" /><label class="new-checkbox"
                        for="category_document_23"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">ERP(基幹システム)選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/b46d99de69064ef1bdb3d18a7816a0e5888f1a5ee9551b911485ac5f3ede/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-45" id="category_document_45"
                        name="category_document" type="checkbox" value="45" /><label class="new-checkbox"
                        for="category_document_45"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">請求書発行システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/3ffbf17e352629e591b352d733bb956195d4778c04ff7bdf6564938a99ec/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-77" id="category_document_77"
                        name="category_document" type="checkbox" value="77" /><label class="new-checkbox"
                        for="category_document_77"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">労務管理システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/c80716f98969f3f81ca8fd8456bdd6d01f7335b7dd8d6bbd7573105c788d/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-334" id="category_document_334"
                        name="category_document" type="checkbox" value="334" /><label class="new-checkbox"
                        for="category_document_334"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">電子契約システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/a029147f9f31f36e8beeb458c8e6eefce42017f93615d0affe5ad0fa33fe/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-67" id="category_document_67"
                        name="category_document" type="checkbox" value="67" /><label class="new-checkbox"
                        for="category_document_67"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">人事評価システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/e01605a07d52471db739a3b3f8c7122c.pdf/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-17" id="category_document_17"
                        name="category_document" type="checkbox" value="17" /><label class="new-checkbox"
                        for="category_document_17"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">採用管理システム選び方ガイド</div>
                </label><label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img"><img alt="お役立ちガイド画像"
                      src="https://slides.boxil.jp/category/slides/956bc8ec2e8558dc1dd8009e5e7879d31be0a7a30b9a5f5e72c8e8a0bda7/s3-0.jpg" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox"><input
                        class="boxil-checkbox-input check-categoryDocument-51" id="category_document_51"
                        name="category_document" type="checkbox" value="51" /><label class="new-checkbox"
                        for="category_document_51"></label></div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">文書管理システム選び方ガイド</div>
                </label></div>
              <div class="serviceIndex-categoryDocument-download-button-wrapper">
                <div class="categoryDocument-download-button">
                  <form class="boxil-checkbox-form" target="_top" action="/downloads/confirm/" accept-charset="UTF-8"
                    method="get"><input type="hidden" name="type" value="category_document" /><input type="hidden"
                      name="_via" value="si-wpAllDL-mainTop" /><input type="hidden" name="is_comparison"
                      value="false" /><button name="button" type="submit"
                      class="btn btn-dl-document-sm btn-categoryDocument-download-all js-track js-track-si-wpAllDL-mainTop">
                      <div class="buttonText">選択中のガイドをダウンロード</div>
                    </button></form>
                </div>
              </div>
            </div>
            <div id="servicesIndex-issue">
              <div class="servicesIndex-topPageTitle">
                <h2 class="heading-2">
                  <div class="heading-2-icon-wrapper"><i class="fas fa-pennant heading-2-icon"></i></div>課題から探す
                </h2>
                <div class="sub-text"></div>
              </div>
              <div class="servicesIndex-brContent">
                <div class="issue">
                  <div class="issue__list"><a href="/issues/?_via=si-issueLink-main#paperless">
                      <div class="issue__content"># ペーパーレス化を進めたい</div>
                    </a><a href="/issues/?_via=si-issueLink-main#remoteWork">
                      <div class="issue__content"># リモートワークを進めたい</div>
                    </a><a href="/issues/?_via=si-issueLink-main#recruitment">
                      <div class="issue__content"># 採用の課題を解決したい</div>
                    </a><a href="/issues/?_via=si-issueLink-main#contractToClaim">
                      <div class="issue__content"># 契約から請求までの課題を解決したい</div>
                    </a><a href="/issues/?_via=si-issueLink-main#organizationalGrowth">
                      <div class="issue__content"># 組織の成長を促進したい</div>
                    </a></div>
                  <div class="issue__action"><a href="/issues/?_via=si-issueLink-main">
                      <div class="issue__button">
                        <div class="inner-text">課題一覧へ</div><i class="far fa-chevron-double-right inner-icon"></i>
                      </div>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <aside class="bw-sub">
          <div class="sub-inner">
            <div class="sideMenu-panel">
              <div class="sideMenuBannerMainBlock"><a
                  class="track-recommend-non js-track js-track-si-bannerLink-recommendTop" target="_blank"
                  rel="noopener" href="https://boxil.jp/eejanaika/">
                  <div><img alt="バナー: ITツール情報番組「ええじゃない課Biz」にレギュラー出演中"
                      src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/19/thumb.jpg" width="260" />
                  </div>
                  <p class="sideMenuBannerMainTitleBlock">ITツール情報番組「ええじゃない課Biz」にレギュラー出演中</p>
                </a><a class="track-recommend-non js-track js-track-si-bannerLink-recommendTop" target="_blank"
                  rel="noopener"
                  href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=boxil_banner">
                  <div><img alt="バナー: BOXIL掲載はこちら"
                      src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/26/thumb.jpg" width="260" />
                  </div>
                  <p class="sideMenuBannerMainTitleBlock">BOXIL掲載はこちら</p>
                </a><a class="track-recommend-non js-track js-track-si-bannerLink-recommendTop" target="_blank"
                  rel="noopener" href="https://boxil.jp/reputations/lps/5/?_via=top_bottom_banner">
                  <div><img alt="バナー: 口コミ投稿はこちら"
                      src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/67/thumb.jpg" width="260" />
                  </div>
                  <p class="sideMenuBannerMainTitleBlock">口コミ投稿はこちら</p>
                </a></div>
            </div>
            <div class="sideMenu-panel">
              <div class="sideMenu-panel-title">編集部のおすすめ記事</div>
              <div class="sideMenu-articles-main"><a
                  class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a172/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/44842/thumb.jpg" />
                      <div class="i-title">【2023年】勤怠管理システムを徹底比較！機能・選び方を解説</div>
                    </div>
                    <div class="i-publishTime">2023-05-19</div>
                  </div>
                </a><a class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a1420/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/52530/thumb.jpg" />
                      <div class="i-title">【2023年最新】 経費精算システムおすすめ比較！価格・機能・クラウド対応一覧</div>
                    </div>
                    <div class="i-publishTime">2023-05-11</div>
                  </div>
                </a><a class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a1487/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/44377/thumb.jpg" />
                      <div class="i-title">【2023年】見積書作成ソフト比較18選！無料あり・おすすめクラウドシステム</div>
                    </div>
                    <div class="i-publishTime">2023-05-22</div>
                  </div>
                </a><a class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a1612/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/45694/thumb.jpg" />
                      <div class="i-title">【2023年最新】人事評価システムおすすめ比較！機能や価格、導入目的別の選び方</div>
                    </div>
                    <div class="i-publishTime">2023-05-22</div>
                  </div>
                </a><a class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a70/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/44839/thumb.jpg" />
                      <div class="i-title">【2023年】BIツール比較おすすめ19選 | 機能・料金比較表</div>
                    </div>
                    <div class="i-publishTime">2023-04-25</div>
                  </div>
                </a><a class="text-link-mag js-track js-track-as-editor-recommended-boxiltop-side"
                  href="https://boxil.jp/mag/a7155/?_via=as-editor-recommended-boxiltop-side">
                  <div class="i-articleBlock">
                    <div class="flex"><img class="i-eyecatch object-fit" alt=""
                        src="https://store.boxil.jp/media/images/uploads/media_image/media_image/46642/thumb.jpg" />
                      <div class="i-title">専任担当不在でもセキュリティ確保しやすく - 総務省がテレワーク向けチェックリスト</div>
                    </div>
                    <div class="i-publishTime">2020-09-17</div>
                  </div>
                </a></div>
            </div>
          </div>
        </aside>
      </div>
      <div>
        <div class="topBannerWrapper">
          <div class="topBanner"><a target="_blank" rel="noopener" href="https://lp.boxil.jp/saasreport/2022"><img
                width="260px" height="70px" alt="バナー: SaaS業界レポート2022"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/60/thumb.jpg" /></a></div>
          <div class="topBanner"><a target="_blank" rel="noopener" href="https://boxil.jp/awards/2023-spring/"><img
                width="260px" height="70px" alt="バナー: BOXIL SaaS AWARD Spring 2023"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/65/thumb.jpg" /></a></div>
          <div class="topBanner"><a target="_blank" rel="noopener"
              href="https://boxil.jp/reputations/lps/5/?_via=top_bottom_banner"><img width="260px" height="70px"
                alt="バナー: 口コミ投稿はこちら"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/66/thumb.jpg" /></a></div>
          <div class="topBanner"><a target="_blank" rel="noopener"
              href="https://boxil.jp/awards/2023/?_via=top_bottom_banner"><img width="260px" height="70px"
                alt="バナー: BOXIL SaaS AWARD 2023"
                src="https://store.boxil.jp/boxil_banner/images/uploads/banner/image/70/thumb.jpg" /></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- <script src="https://d-cache.microad.jp/js/td_bx_access.js"></script> -->

  <!-- <script>
  (function() {
    var uid = '';
    var o = [];
    var elm = window.document.createElement('div');
    elm.innerHTML = unescape('%3C') + 'img src="//relay-dsp.ad-m.asia/dmp/sync/bizmatrix?pid=b2ceff7d7e3fda0a7b' +
      '&uid=' + encodeURIComponent(uid) + '&o=' + encodeURIComponent(o.join(',')) + '&l=' + encodeURIComponent(
        location.href) +
      '" alt=""  style="display:block; margin:0; padding:0; border:0; outline:0; width:0; height:0; line-height:0;" ' +
      unescape('%2F%3E');
    window.document.body.appendChild(elm);
  })();
  </script> -->
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
              <div class="i-element"><span class="i-element-star">★</span><span
                  class="i-element-unit">累計掲載実績</span><span class="i-element-text">700</span><span
                  class="i-element-unit">社超</span></div>
              <div class="i-element"><span class="i-element-star">★</span><span
                  class="i-element-unit">BOXIL会員数</span><span class="i-element-text">130,000</span><span
                  class="i-element-unit">人超</span></div>
            </div>
          </div>
          <div class="clb-content">見込み客獲得や認知度向上をしたいサービスをお持ちの方は是非サービスをご掲載ください。</div>
          <div class="clb-button"><a class="btn btn-link-special" target="_blank" rel="noopener"
              href="https://boxil.smartcamp.co.jp/?utm_source=boxil&amp;utm_medium=referral&amp;utm_campaign=footer_banner">サービス掲載申し込み</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection('content')
