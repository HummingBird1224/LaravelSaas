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
                    <option >選択してください</option>
                    @foreach($lcs as $lc) 
                    <option value="{{$lc->id }}">
                      {{$lc->title}}
                    </option>
                    @endforeach
                  </select>
                  <form class="display-flex m-t-15" action="{{route('lc_edit')}}" method="post">
                    @csrf
                    <input type="hidden" name="lc_id" id="lc_id_edit" />
                    <input type="text" placeholder="入力しましょう" name="lc_title" class="form-control  " id="lc_title_edit" />
                    <button type="submit" class="purple-button button " style="width:100%">アップデート/追加</button>
                  </form>
                </div>
              </div>
              <hr />
              <div class="bottom-section">
                <h6>小分類名</h6>
                <div class="row">
                  <div class="col-sm-6 ">
                    <div class="bottom-section-wrapper" id="lc_categories">
                      <!-- @if(count($lcs[0]->categories))
                        @foreach($lcs[0]->categories as $category) 
                        <div class="justify-content-between display-flex"> 
                          <a href="">{{$category->title}}</a> 
                          <span
                            data-category='{{$category}}'
                            data-bs-toggle="modal"
                            data-bs-target="#categoryModal"
                          >
                            <i class='bx bxs-edit text-primary'></i>
                          </span>
                        </div>
                        @endforeach
                      @else
                        カテゴリなし
                      @endif -->
                      大分類名を選択してください
                    </div>
                  </div>
                  <form class="col-sm-6 " action="route('lc_edit')" type="post">
                    @csrf
                    <input type="text" placeholder="入力しましょう" class="form-control  m-t-30" />
                    <div class="text-center">
                      <button type="submit" 
                              class="purple-button button flex-button m-t-15" 
                              data-category=''
                              data-bs-toggle="modal"
                              data-bs-target="#categoryModal">
                              追加
                      </button>
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
<div class="modal fade" id="categoryModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header bg-primary">
				<h4 class="modal-title text-white">カテゴリー編集</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body m-4">
				<div class="row mt-2">
					<div class="col-4">
						<strong>タイトル</strong>
					</div>
					<div class="col-8">
						<input class="form-control" type="text" id="c_title" name="title" value="" required />
						<input class="form-control" type="hidden" id="category_id" name="category_id" value="" />
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-4">
						<strong>説明</strong>
					</div>
					<div class="col-8">
            <textarea class="form-control" type="text" id="c_description" name="description" value="" required ></textarea>
						<!-- <input class="form-control" type="text" id="access_key" name="access_key" value="" required /> -->
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-4">
						<strong>材料</strong>
					</div>
					<div class="col-8">
						<input class="form-control" type="file" id="g_material" name="material" value="" required />
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-4">
						<strong>画像</strong>
					</div>
					<div class="col-8">
						<input class="form-control" type="file" id="g_image" name="image" value="" required />
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-4">
						<strong>カテゴリー</strong>
					</div>
					<div class="col-8">
						<select class="form-control select required w-300px" required="required" aria-required="true" name="category" id="g_category">
              <option value="">選択してください</option>
              
            </select>
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-4">
						<strong>おすすめされた</strong>
					</div>
					<div class="col-8">
						<input class="" type="checkbox" id="g_recommended" name="recommended"    />
					</div>
				</div>			
			</div>

			<!-- Modal footer -->
			<div class="modal-footer" id="button-container">
				
			</div>
		</div>
	</div>
</div>

@endsection

@section("script")
<script>
  $('#lc_title').change((e)=>{
    console.log(lc_title.options[lc_title.selectedIndex].text)
    if(lc_title.options[lc_title.selectedIndex].text!='選択してください'){
      $('#lc_id_edit').val(e.target.value);
      $('#lc_title_edit').val(lc_title.options[lc_title.selectedIndex].text);
      $.ajax({
        url:'/categories/large_category_id/'+e.target.value,
        method:'get',
        success:(res)=>{
          let lc_categories='';
          if(res.length>0){
            res.map(category=>{
              lc_categories +=`<div class="justify-content-between display-flex"> 
                                <a href="">${category.title}</a> 
                                <span
                                  data-category=''
                                  data-bs-toggle="modal"
                                  data-bs-target="#categoryModal"
                                >
                                  <i class='bx bxs-edit text-primary'></i>
                                </span>
                              </div>`;
            })        
            $('#lc_categories').html(lc_categories);
          }
          else $('#lc_categories').html('カテゴリなし');
        }
      })
    }     
    else {
      
    }
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