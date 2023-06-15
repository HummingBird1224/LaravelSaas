@extends("layouts.admin")

@section('css')
<style>
table th,
table td {
  text-align: center !important;
  vertical-align: middle !important;
}
</style>
@endsection

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content category-issues" style="padding-top: 0.5rem;">
      <div class="row">

        <div class="card-section col-md-6">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5 class="text-center">カテゴリ</h5>
              </div>
              <div class="top-section">
                <div class="top-select">
                  <h6>大分類名</h6>
                  <select class="form-control m-t-15" aria-required="true" name="lc_title"
                    id="lc_title">
                    @foreach($lcs as $lc) 
                    <option value="{{$lc->id }}">
                      {{$lc->title}}
                    </option>
                    @endforeach
                  </select>
                  <form class="display-flex m-t-15" action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  " />
                    <button type="submit" class="purple-button button flex-button">追加</button>
                  </form>
                </div>
              </div>
              <hr />
              <div class="bottom-section">
                <h6>小分類名</h6>
                <div class="row">
                  <div class="col-sm-6 ">
                    <div class="bottom-section-wrapper" id="lc_categories">
                      @if(count($lcs[0]->categories))
                        @foreach($lcs[0]->categories as $category) 
                        <div> <a href="">{{$category->title}}</a> </div>
                        @endforeach
                      @else
                        カテゴリなし
                      @endif
                    </div>
                  </div>
                  <form class="col-sm-6 " action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  m-t-30" />
                    <div class="text-center">
                      <button type="submit" class="purple-button button flex-button m-t-15">追加</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-section col-md-6">
          <div class="card card-info card-outline">
            <div class="card-body">
              <div class="card-title">
                <h5 class="text-center">課題</h5>
              </div>
              <div class="top-section">
                <div class="top-select">
                  <h6>大課題名</h6>
                  <select class="form-control m-t-15" aria-required="true" name="issue_title"
                    id="issue_title">
                    @foreach($issues as $issue) 
                    <option value="{{ $issue->id }}">
                      {{$issue->title}}
                    </option>
                    @endforeach
                  </select>
                  <form class="display-flex m-t-15" action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  " />
                    <button type="submit" class="purple-button button flex-button">追加</button>
                  </form>
                </div>
              </div>
              <hr />
              <div class="bottom-section">
                <h6>小課題名</h6>
                <div class="row">
                  <div class="col-sm-6 ">
                    <div class="bottom-section-wrapper" id="issue_categories">
                      @if(count($issues[0]->categories))
                        @foreach($issues[0]->categories as $category) 
                        <div> <a href="">{{$category->title}}</a> </div>
                        @endforeach
                      @else
                        カテゴリなし
                      @endif
                    </div>
                  </div>
                  <form class="col-sm-6 " action="" type="post">
                    <input type="text" placeholder="入力しましょう" class="form-control  m-t-30" />
                    <div class="text-center">
                      <button type="submit" class="purple-button button flex-button m-t-15">追加</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section("script")
<script>
  $('#lc_title').change((e)=>{
    $.ajax({
      url:'/categories/large_category_id/'+e.target.value,
      method:'get',
      success:(res)=>{
        let lc_categories='';
        if(res.length>0){
          res.map(category=>{
            lc_categories +=`<div> <a href="">${category.title}</a> </div>`;
          })        
          $('#lc_categories').html(lc_categories);
        }
        else $('#lc_categories').html('カテゴリなし');
      }
    })
  })
   $('#issue_title').change((e)=>{
    $.ajax({
      url:'/categories/issue_id/'+e.target.value,
      method:'get',
      success:(res)=>{
        let issue_categories='';
        if(res.length>0){
          res.map(category=>{
            issue_categories +=`<div> <a href="">${category.title}</a> </div>`;
          })        
          $('#issue_categories').html(issue_categories);
        }
        else $('#issue_categories').html('カテゴリなし');
      }
    })
  })
</script>
@endsection