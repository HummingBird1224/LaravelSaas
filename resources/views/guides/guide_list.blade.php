@extends("layouts.no_aside")

@php
	$user = Auth::user();
	$categories = App\Models\Category::where('user_id', Auth::id())->get();
	$items = App\Models\Item::where('user_id', Auth::id())->get();
@endphp

@section('content')
<div class="content-wrapper">	
	<div class=" flex-grow-1 ">
		<!-- <main id="main" class="main"> -->
			<section class="section guide-list">
				<!-- 管理者メッセージ -->
				<div class="guide-introduction card-section m-t-0">	
					<div class=" black-green-bg">
						<div class="card-body guide-introduction-wrapper">
							<div class="container-lg">
								<div class="guide-introduction-header">
									<div class="guide-introduction-header-left">
                    <h5>ダウンロード
                    <br/>
                    無料！！</h5>
                  </div>
                  <div class="guide-introduction-header-right">
                    <h2>無料ガイド一覧</h2>
                    <h6>
                      <span>
                        業務効率化やコスト削減につながるツールやその使い方などを、様々な切り口でわかりやすく<br/>
                        解説したボクシル限定「無料ガイド」をまとめました。チェックを付けた資料を一括でダウンロードできます。<br/>
                      </span>
                      <span>※ ダウンロードボタンを押すと確認画面へ遷移します。</span>
                    </h6>
                  </div>
								</div>
								<div class="guide-introduction-title text-center">
                  <h4>おすすめ無料ガイド</h4>
								</div>
                <div class="guide-introduction-border">
                  <hr>
                </div>
                <div class="guide-introduction-list-wrapper">
                  <div class="row">
                    @foreach($recommended_guides as $r_guide)
                    <div class="col-sm-6 col-lg-3 text-center">								
                      <label class="checkbox guide-img-thumbnail"  >
                        <div class="guide-img-thumbnail-wrapper">
                          <div class="guide-img">
                            <img alt="{{$r_guide->title}}" src="{{ asset($r_guide->image) }}" data-xblocker="passed" style="visibility: visible;" width="100%" onclick="imgClick(event)" >
                            <div class="guide-checkbox">
                              <div class="checker">
                                <span class="checked">
                                  <input  class="checkbox-input" id="{{$r_guide->id}}" name="category_document" type="checkbox" value="{{$r_guide->id}}" style="display: inline-block;" onclick="inputClick(event)">
                                </span>
                              </div>
                              <span class="lever-sm"></span>
                            </div>
                          </div>
                          <div class="guide-title">
                            <div>{{$r_guide->title}}</div>                            
                          </div>
                        </div>
                      </label>	
                    </div>
                    @endforeach
                  </div>
                </div>
							</div>
						</div>
					</div>
				</div>
				<!-- End 管理者メッセージ -->
        <div class="guide-common-wrapper">
          <div class="container-lg">
            <div class="guide-common-header text-center">
              <h2>無料ガイド一覧</h2>
              <hr>
            </div>
            <div class="guide-common-searchWrapper text-center">
              <div id="guide-search-form" class="guide-search-formBlock"  accept-charset="UTF-8" data-remote="true" method="get">
                <input placeholder="ガイド名・カテゴリー名 [例：経費精算システム選び方ガイド、経費精算]" class="guide-search-formBlock__inputElement" type="text" name="search" id="search">
                <button class="guide-search-formBlock__buttonElement">
                  <i class="bx bx-search bx-sm" aria-hidden="true"></i>
                </button>
            </div>
            </div>
            <div class="row" id="common-guide-list">
              @foreach($common_guides as $c_guide)
              <div class="col-sm-6 col-lg-3 text-center">								
                <label class="checkbox guide-img-thumbnail" for="{{$c_guide->id}}">
                  <div class="guide-img-thumbnail-wrapper">
                    <div class="guide-img">
                      <img alt="{{$c_guide->title}}" src="{{ asset($c_guide->image) }}" data-xblocker="passed" style="visibility: visible;" width="100%">
                      <div class="guide-checkbox">
                        <div class="checker">
                          <span class="checked">
                            <input  class="checkbox-input" id="{{$c_guide->id}}" name="category_document" type="checkbox" value="{{$c_guide->id}}" style="display: inline-block;">
                          </span>
                        </div>
                        <span class="lever-sm"></span>
                      </div>
                    </div>
                    <div class="guide-title">
                      <div>{{$c_guide->title}}</div>                            
                    </div>
                  </div>
                </label>	
              </div>
              @endforeach
            </div>
          </div>
        </div>
				<!-- 資料請求したサービス -->
				<div class="card-section m-b-10">	
          <div class="card info-card sales-card guide-download-wrapper">
            <div class="card-body">	
              <div class="orange-button text-center">
                <button class="orange-button-btn" onclick="downloadClick()">
                  <div class="button-text">
                    選択中の資料 <spin id="checked_num">0</spin>点をまとめてダウンロード
                  </div>
                </button>
              </div>
            </div>
          </div>							
				</div>
				<!-- End 資料請求したサービス -->

			</section>

		<!-- </main> -->
    <!-- End #main -->
	</div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let search_word='';
    let checked_num=0;
    let checkboxes=document.getElementsByClassName("checkbox-input");   

    $('#search').keydown(function(event){
      let key=event.which;
      search_word=$('#search').val();
      if(key==13){
        $.ajax({
          url : '/category_documents/search',
          method : 'GET',
          data : {search_word:search_word},
          success:function(response){
            var guide_list='';
            response.map(guide=>{
              guide_list += '<div class="col-sm-6 col-lg-3 text-center">\n';
              guide_list += '<label class="checkbox guide-img-thumbnail">\n';
              guide_list += '<div class="guide-img-thumbnail-wrapper">\n';
              guide_list += '<div class="guide-img">\n';
              guide_list += `<img alt="${guide.title}" src="${guide.image}" data-xblocker="passed" style="visibility: visible;" width="100%">\n`;
              guide_list += '<div class="guide-checkbox">\n';
              guide_list += '<div class="checker">\n';
              guide_list += '<span class="checked">\n';
              guide_list += `<input  class="checkbox-input" id="${guide.id}" name="category_document" type="checkbox" value="${guide.id}" style="display: inline-block;">\n`;
              guide_list += '</span>\n</div>\n';
              guide_list += '<span class="lever-sm"></span>\n';
              guide_list += ' </div>\n</div>\n';
              guide_list += '<div class="guide-title">\n';
              guide_list += `<div>${guide.title}</div>\n`;
              guide_list += ' </div>\n</div>\n';
              guide_list += '</label></div>\n';                 
            })            
            $('#common-guide-list').html(guide_list);
          }
        })     
      }
    });     

    imgClick=(event)=>{

      // event.preventDefault();
      // for(let i = 0; i<checkboxes.length; i++){
      //   if(checkboxes[i].checked){
      //     docs=[...docs, checkboxes[i].value];
      //   }
      // }
      console.log('img')
    }

    inputClick=()=>{
      console.log('input')
    }

    downloadClick=()=>{     
      let docs=[]; 
      for(let i = 0; i<checkboxes.length; i++){
        if(checkboxes[i].checked){
          docs=[...docs, checkboxes[i].value];
        }
      } 
      if(docs.length>0){
        $.ajax({
          url:'/category_documents/download/confirm',
          method:'POST',
          data:{
            checked_docs:docs,
          },
          catch:function(err){
            console.log(err);
          }
        })
      }
    } 
  </script>
@endsection