@extends("layouts.no_aside")

@section('content')
  <main style="padding-top: 4rem;" class="pagesCategoriesOrDepartment">
    <div class="container">
      <div class="breadcrumb-boxil-wrapper">
        <div class="container">
          <ul>
            <li class="p-t-7"><a href="https://boxil.jp/"><span class="m-l-5">BOXIL</span></a></li>
            <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
            <li class="p-t-7"><span class="m-l-5">カテゴリから探す</span></li>
          </ul>
        </div>
      </div>
      <h1>カテゴリから探す</h1>
      <div class="pagesCategories-content">
        @for($j=1; $j<=3; $j++)
        <div class="pagesCategories-content-parentCategory">
          <a href="/tags/lc-accounting/">
            <div>
              <i class="fa fa-'square" aria-hidden="true"></i>
            </div>
            <span class="text-link">通信インフラ</span>
          </a>
        </div>
        <div class="pagesCategories-content-childCategories">
          @for($i=1; $i<=15; $i++ )
          <div class="pagesCategories-content-childCategory text-overflow-ellipsis">
            <a href="/sc/1">
              <span class="text-link">WEB会議システム</span>
            </a>
          </div>
          @endfor
        </div>
        @endfor
      </div>
    </div>
  </main>
@endsection