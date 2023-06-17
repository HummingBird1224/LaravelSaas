@extends("layouts.no_aside")

@section('content')
  <section id="serviceIndex-boxilTop">
    <div class="boxilTopWrapper">
      <div class="boxilTop">
        <div class="boxilTop__main">
          <div class="boxilTop__copy">
            <div class="boxilTop__copyMain">建設業界に100万人分の労働力を創る</div>
            <ul class="boxilTop__copySub">
              <li>私たちが日々取り組んでいることの全ては、「建設業界に100万人分の労働力を創る」に通じています。</li>
              <li>それは、労働力不足が顕著な課題となっている建設業界に人的労働力を増やすだけでなく、人的労働力に変わる新たな価値を創造することです。</li>
              <li>自分たちが行っている取り組みが正しいと信じて、追求していくことで、建設業界の繁栄に貢献していきます。</li>
            </ul>
          </div>
          <!-- <div class="boxilTop__searchBox">
            <form accept-charset="utf-8" action="/search/" class="header-search-form" method="get">
              <input type="text" name="q" class="input" placeholder="サービス名・カテゴリ名 [例：Salesforce、営業支援ツール]" />
              <button aria-label="検索" class="btn-search">
                <i class="fa fa-search"></i>
              </button>
            </form>
          </div> -->
        </div>
        <div class="boxilTop__logosWrapper">
          <div class="boxilTop__logos">
            @for($i=1;$i<=4;$i++)   
              @foreach($services as $service)          
              <div class="boxilTop__logoWrapper top_fv_service_4888">
                <div class="boxilTop__logo">
                  <a href="{{route('service_view', $service->id)}}">
                    <img alt="WAN-Sign" class="service-logo-image" loading="auto"
                      src="{{asset($service->logo)}}" />
                  </a>
                </div>
              </div>
              @endforeach
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
            <span>[PR] ツクノビおすすめのサービス</span>
          </i>
        </div>
        <div class="boxilTopPrImgWrapper">
          @foreach($r_services as $r_service)
          <a target="_blank" rel="noopener" class="boxilTopPrImg"
            href="{{route('service_view', $r_service->id)}}">
            <div class="banner">
              <div class="pr">PR</div>
              <img alt="{{$r_service->guide->title}}"
                src="{{asset($r_service->guide->image)}}" />
              <div class="bannerContent">
                <div class="serviceName">{{$r_service->title}}</div>
                <div class="categoryName">{{$r_service->category->title}}</div>
              </div>
            </div>
          </a>
          @endforeach
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
              <a class="toCategoryIndexBtn" href="{{route('categories')}}">
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
            @foreach($lcs as $lc)
            <div class="departmentCategoryGroups js-department-category-groups js-department-shrinked">
              <div class="header">
                <h3 class="departmentTitle">
                  <i class="fas fa-bullseye-arrow titleIcon"></i>
                  {{$lc->title}}
                </h3>
                <div class="categoryBoxesMoreButton js-category-more">
                  <span class="inner-text js-category-more-text">さらに表示する</span>
                  <i class="far fa-chevron-down inner-icon js-category-more-icon"></i>
                </div>
              </div>
              <div class="categoryBoxWrapper">
                <div class="categoryBoxes js-sp-toggle-category display-show-default-pc display-show-default-sp">
                  <h4 class="parentCategoryTitle">
                    <div class="js-track js-track-si-categoryLink-mainTop titleText"
                      href="{{route('lc_view',$lc->id)}}">
                      {{$lc->title}}
                      <i class="far fa-chevron-double-right linkIcon"></i>
                    </div>
                  </h4>
                  <div class="categoryBox">
                    @foreach($lc->categories as $category)
                    <ul
                      class="childCategoryList js-category js-sp-toggle-category display-show-default-pc display-show-default-sp">
                      <li class="childCategoryListItem">
                        <span class="listMark">
                          <a class="js-track js-track-si-categoryLink-mainTop"
                            href="{{route('category_view', $category->id)}}">{{$category->title}}</a>
                        </span>
                      </li>
                    </ul>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="servicesIndex-categories-more">
            <div class="btn-read-more-round js-department-more"><span
                class="inner-text js-department-more-text">さらに見る</span><i
                class="far fa-chevron-down inner-icon js-department-more-icon"></i></div>
          </div>
        </div>
      </div>
      <div class="boxil-wrappar">
        <main class="bw-main" style="width:100%; padding-right:0">
          <div class="main-inner">
            <div id="servicesIndex-boxilRanking">
              <div class="servicesIndex-topPageTitle">
                <h2 class="heading-2">
                  <div class="heading-2-icon-wrapper">
                    <i class="fas fa-pennant heading-2-icon"></i>
                  </div>
                  ランキング
                </h2>
                <div class="sub-text"></div>
              </div>
              <div class="servicesIndex-boxilRankingContent">
                @foreach($categories as $category)
                  @if(count($category->services)>0)
                    <div class="rankingBox">
                      <div class="rankingBox-title">
                        <a class="js-track js-track-si-categoryLink-mainRanking"
                          href="{{route('category_view', $category->id)}}">
                          {{$category->title}}
                        </a>
                      </div>
                      @foreach($category->services as $service)
                    <a class="rankingBox-service-wrapper js-track js-track-si-serviceLink-mainRanking"
                      href="{{route('service_view', $service->id)}}">
                      <div class="i-serviceBlock rankingBox-service flex">
                        <div class="rankingBox-service-top-ranking">
                          <i class="fas fa-crown ranking-crown no-1"></i>
                        </div>
                        <div class="service-logo-top-recommend">
                          <img alt="{{$service->title}}" class="service-logo-image" loading="lazy"
                            src="{{asset($service->logo)}}" />
                        </div>
                        <div class="i-service-details">
                          <div class="i-service-details-serviceName text-overflow-ellipsis">
                            <span class="text-overflow-ellipsis">{{$service->title}}</span>
                          </div>
                          <div class="i-service-details-serviceReview">
                            @if((int)$service->reviews_avg_score != 0)
                              @for ($i = 0; $i < ((int)$service->reviews_avg_score); $i++)
                                <i class="fa fa-yellow fa-star text-yellow "  style="margin-right: 0px;"></i>
                              @endfor
                              @for ($i = 0; $i < (5-(int)$service->reviews_avg_score); $i++)
                                <i class="fa fa-yellow fa-star text-black-400 "  style="margin-right: 0px;"></i>
                              @endfor
                            @endif
                            <span class="average">{{$service->reviews_avg_score?(int)$service->reviews_avg_score:'レビューはありません'}}</span>
                            <span class="number">({{$service->reviews_count?$service->reviews_count:0}}件)</span>
                          </div>
                          <div class="i-service-details-serviceCategory">
                            <div class="i-service-details-serviceCategory-tag text-overflow-ellipsis">
                              {{$category->title}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach 
                    </div>
                    
                  @endif
                @endforeach
              </div>
            </div>
            <div class="servicesIndex-categoryDocument-block" id="servicesIndex-categoryDocument">
              <div class="servicesIndex-topPageTitle">
                <h2 class="heading-2">
                  <div class="heading-2-icon-wrapper">
                    <i class="fas fa-pennant heading-2-icon"></i>
                  </div>
                  お役立ちガイド
                </h2>
                <div class="sub-text"></div>
              </div>
              <div class="servicesIndex-categoryDocument-text">
                業務効率化やコスト削減につながるツールやその使い方などを、様々な切り口でわかりやすく解説したボクシル限定「無料ガイド」をまとめました。チェックを付けた資料を一括でダウンロードできます。
              </div>
              <div class="servicesIndex-categoryDocument-document-all">
                <a class="btn-go-to-category-documents"
                  href="{{route('category_documents')}}">
                  <div class="inner-text">お役立ちガイド一覧を見る</div>
                  <i class="far fa-chevron-double-right inner-icon"></i>
                </a>
              </div>
              <div class="servicesIndex-categoryDocument-wrapper">
                @foreach($guides as $guide)
                <label class="checkbox servicesIndex-categoryDocument">
                  <div class="servicesIndex-categoryDocument-block-img">
                    <img alt="{{$guide->title}}" src="{{asset($guide->image)}}" />
                    <div class="servicesIndex-categoryDocument-checkbox new-checkbox-input-filled boxil-checkbox">
                      <input class="checkbox-input check-categoryDocument-1122" id="{{$guide->id}}"
                        name="category_document" type="checkbox" value="{{$guide->id}}" />
                      <label class="new-checkbox"  for="{{$guide->id}}"></label>
                    </div>
                  </div>
                  <div class="servicesIndex-categoryDocument-block-title">{{$guide->title}}</div>
                </label>
                @endforeach
              </div>
              <div class="serviceIndex-categoryDocument-download-button-wrapper">
                <div class="categoryDocument-download-button">
                  <form class="boxil-checkbox-form" target="_top" action="/downloads/confirm/" accept-charset="UTF-8" method="get" onclick="downloadClick(event)">
                    <input type="hidden" name="type" value="category_document" />
                    <input type="hidden" name="_via" value="si-wpAllDL-mainTop" />
                    <input type="hidden" name="is_comparison" value="false" />
                    <button name="button" type="submit" class="btn btn-dl-document-sm btn-categoryDocument-download-all js-track js-track-si-wpAllDL-mainTop">
                      <div class="buttonText">選択中のガイドをダウンロード</div>
                    </button>
                  </form>
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
                  <div class="issue__list">
                    @foreach($issues as $issue)
                    <a href="/issues/">
                      <div class="issue__content"># {{$issue->title}}</div>
                    </a>
                    @endforeach
                  </div>
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

@section('additional_script')
  <script>
    $(document).ready(function () {
      $('.js-department-more').on('click', function() {
        if ($('.departmentCategoryGroups').hasClass('js-department-shrinked')) {
          $('.departmentCategoryGroups').removeClass('js-department-shrinked');
        } else {
          $('.departmentCategoryGroups').addClass('js-department-shrinked');
        }
      })
      let checkboxes = document.getElementsByClassName("checkbox-input");
      downloadClick = (event) => {
        event.preventDefault();
        let docs = [];
        for (let i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
            docs = [...docs, checkboxes[i].value];
          }
        }
        if(docs.length==0){
          toastr.error('ガイドを選択する必要があります。');
        }
        if (docs.length > 0) {
          location.href = '/downloads/confirm?checked_docs=' + docs;
        }
      }
    });
  </script>
@endsection
