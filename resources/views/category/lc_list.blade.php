@extends("layouts.no_aside")

@section('content')
  <main style="padding-top: 4rem;" class="pagesCategoriesOrDepartment">
    <div class="container">
      <div class="breadcrumb-boxil-wrapper">
        <div class="container">
          <ul>
            <li class="p-t-7"><a href="/"><span class="m-l-5">ツクノビ</span></a></li>
            <li class="p-t-7"><i class="far fa-angle-right m-l-10" aria-hidden="true"></i></li>
            <li class="p-t-7"><span class="m-l-5">カテゴリから探す</span></li>
          </ul>
        </div>
      </div>
      <h1>カテゴリから探す</h1>
      <div class="pagesCategories-content">
        @foreach($lcs as $lc)
        <div class="pagesCategories-content-parentCategory">
          <a href="{{route('lc_view', $lc->id)}}">
            <div>
              <i class="fa fa-'square" aria-hidden="true"></i>
            </div>
            <span class="text-link">{{$lc->title}}</span>
          </a>
        </div>
        <div class="pagesCategories-content-childCategories">
          @foreach($lc->categories as $category )
          <div class="pagesCategories-content-childCategory text-overflow-ellipsis">
            <a href="{{route('category_view', $category->id)}}">
              <span class="text-link">{{$category->title}}</span>
            </a>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection