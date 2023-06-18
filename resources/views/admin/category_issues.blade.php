@extends("layouts.admin")

@section('css')
<style>
table th,table td {
    text-align : center !important;
    vertical-align : middle !important;
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
                                <h5 class="text-center">カテゴリ</h5 > 
                            </div> 
                            <div class = "top-section" > 
                                <div class="top-select">
                                    <h6>大分類名</h6>
                                    <select class="form-control m-t-15" aria-required="true"  name="lc_title" id="lc_title" >
                                        <option >選択してください</option>
                                        @foreach($lcs as $lc)
                                        <option value="{{$lc->id}}">
                                            {{$lc -> title}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <form  class="display-flex m-t-15" action="{{route('lc_edit')}}"   method="post">
                                        @csrf
                                        <input type="hidden" name="lc_id" id="lc_id_edit"/>
                                        <input
                                            type="text"
                                            placeholder="入力しましょう"
                                            name="lc_title"
                                            class="form-control  "
                                            id="lc_title_edit"
                                            required
                                        />
                                        <button type="submit" class="purple-button button " style="width:100%">更新 / 追加</button>
                                    </form>
                                </div> 
                            </div>
                            <hr/>
                            <div class="bottom-section ">
                                <div class=" display-flex justify-content-between m-b-15">
                                    <h6 style="margin-bottom:0">小分類名</h6>
                                    <div class="text-center">
                                        <button
                                            type="submit"
                                            class="purple-button button flex-button"
                                            data-bs-toggle="modal"
                                            data-parent="lc"
                                            data-bs-target="#categoryModal">
                                            追加
                                        </button>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <div class="bottom-section-wrapper" id="lc_categories">
                                            大分類名を選択してください
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div > 
                <div class="card-section col-md-6">
                    <div class="card card-info card-outline">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="text-center">課題</h5>
                            </div>
                            <div class="top-section">
                                <div class="top-select">
                                    <h6>大課題名</h6>
                                    <select class="form-control m-t-15" aria-required="true"
                                        name="issue_title" id="issue_title">
                                        <option >選択してください</option>
                                        @foreach($issues as $issue)
                                        <option
                                            value="{{ $issue }}">
                                            {{ $issue -> title }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <div  class="display-flex m-t-15" >
                                        <input
                                            type="text"
                                            placeholder="入力しましょう"
                                            name="issue_title"
                                            class="form-control  "
                                            id="issue_title_edit"
                                        />
                                        <button type="button" class="purple-button button flex-button " data-bs-toggle="modal"
                                        data-bs-target="#issueModal" data-purpose="update">更新 </button>
                                        <button type="button" class="purple-button button flex-button m-l-15" data-bs-toggle="modal"
                                        data-bs-target="#issueModal" data-purpose="add"> 追加</button>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="bottom-section">
                                <div class=" display-flex justify-content-between m-b-15">
                                    <h6 style="margin-bottom:0">小分類名</h6>
                                    <div class="text-center">
                                        <button
                                            type="submit"
                                            class="purple-button button flex-button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#categoryModal"
                                            data-parent="issue"
                                        >
                                            追加
                                        </button>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <div class="bottom-section-wrapper" id="issue_categories">
                                            大課題名を選択してください
                                        </div>
                                    </div>
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
    <div class="modal-dialog c-i">
        <form class="modal-content" method="post" id="categoryForm" enctype="multipart/form-data" > 

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">カテゴリー編集</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body m-4" >
                @csrf
                <h5 class="text-center m-b-15">カテゴリー</h5>
                <div class="row mt-2">
                    <div class="col-4">
                        <strong>タイトル</strong>
                    </div>
                    <div class="col-8">
                        <input
                            class="form-control"
                            type="text"
                            id="c_title"
                            name="c_title"
                            value=""
                            required/>
                        <input
                            cleass="form-control"
                            typ="hidden"
                            id="c_id"
                            name="c_id"
                            value=""
                            hidden/>
                        <input
                            cleass="form-control"
                            typ="hidden"
                            id="lc_id"
                            name="lc_id"
                            value=""
                            hidden/>
                        <input
                            cleass="form-control"
                            typ="hidden"
                            id="i_id"
                            name="i_id"
                            value=""
                            hidden/>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>説明</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control"
                            type="text"
                            id="c_description"
                            name="c_description"
                            value=""
                            required></textarea>
                    </div>
                </div>
                
                <div class="row mt-2">
                    <div class="col-4">
                        <strong>必要なポイント</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control summernote"
                            type="text"
                            id="n_point"
                            name="n_point"
                            value=""
                            required></textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>メリット</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control summernote"
                            type="text"
                            id="g_point"
                            name="g_point"
                            value=""
                            required></textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>デメリット</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control summernote"
                            type="text"
                            id="b_point"
                            name="b_point"
                            value=""
                            required></textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>比較ポイント</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control summernote"
                            type="text"
                            id="c_point"
                            name="c_point"
                            value=""
                            required></textarea>
                    </div>
                </div>      
                
                <div class="row mt-2">
                    <div class="col-4">
                        <strong>成功するためのポイント</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control summernote"
                            type="text"
                            id="s_point"
                            name="s_point"
                            value=""
                            required></textarea>
                    </div>
                </div>                                
                <hr/>
                <h5 class="text-center m-b-15">ガイド</h5>
                <div class="row mt-2">
                    <div class="col-4">
                        <strong>タイトル</strong>
                    </div>
                    <div class="col-8">
                        <input
                            class="form-control"
                            type="text"
                            id="g_title"
                            name="g_title"
                            value=""
                            required/>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>説明</strong>
                    </div>
                    <div class="col-8">
                        <textarea
                            class="form-control"
                            type="text"
                            name="g_description"
                            id="g_description"
                            value=""
                            required>
                        </textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>データ</strong>
                    </div>
                    <div class="col-8">
                        <input
                            class="form-control"
                            type="file"
                            id="g_data"
                            name="g_data"
                            value=""
                            />
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>データ画像</strong>
                    </div>
                    <div class="col-8">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                                <img width="170" height="160" src="{{ asset('avatars/default.png') }}" data-xblocker="passed" style="visibility: visible;" id="image_preview">
                            </div>
                            <span class="help-block">180px × 180px 推奨</span>
                            <div>
                                <span class="btn btn-raised button purple-button btn-file">
                                    <label class="fileinput-new" for="image_upload">アップロード</label>
                                    <input accept="image/jpeg, image/png" type="file" name="g_image" id="image_upload" hidden>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6 row">
                        <div class="col-8">
                            <strong>おすすめされた</strong>
                        </div>
                        <div class="col-4">
                            <input class="" type="checkbox" id="g_recommended" name="g_recommended"/>
                        </div>
                    </div>
                    <div class="col-6 row">
                        <div class="col-8">
                            <strong>無料</strong>
                        </div>
                        <div class="col-4">
                            <input class="" type="checkbox" id="g_free" name="g_free"/>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer" id="button-container"></div>
        </form>
    </div>
</div>

<div class="modal fade" id="issueModal">
    <div class="modal-dialog c-i">
        <form class="modal-content" method="post" id="issueForm" enctype="multipart/form-data" > 

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">課題編集</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body m-4" >
                @csrf
                <div class="row mt-2">
                    <div class="col-4">
                        <strong>タイトル</strong>
                    </div>
                    <div class="col-8">
                        <input
                            class="form-control"
                            type="text"
                            id="i_title"
                            name="i_title"
                            value=""
                            required/>
                        <input
                            cleass="form-control"
                            typ="hidden"
                            id="i_id"
                            name="i_id"
                            value=""
                            hidden/>
                    </div>
                </div>   

                <div class="row mt-2">
                    <div class="col-4">
                        <strong>課題画像</strong>
                    </div>
                    <div class="col-8">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                                <img width="170" height="160" src="{{ asset('avatars/default.png') }}" data-xblocker="passed" style="visibility: visible;" id="image_preview_issue">
                            </div>
                            <span class="help-block">180px × 180px 推奨</span>
                            <div>
                                <span class="btn btn-raised button purple-button btn-file">
                                    <label class="fileinput-new" for="image_upload_issue">アップロード</label>
                                    <input accept="image/jpeg, image/png" type="file" name="i_image" id="image_upload_issue" hidden>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer" id="button-container-issue"></div>
        </form>
    </div>
</div>

@endsection 

@section("script")
<script>
    $(".summernote").summernote({ 
        height:200
    });
    var lc_id,  issue;
    $('#lc_title').change((e) => {
        if (lc_title.options[lc_title.selectedIndex].text != '選択してください') {
            lc_id=e.target.value;
            $('#lc_id_edit').val(e.target.value);
            $('#lc_title_edit').val(lc_title.options[lc_title.selectedIndex].text);
            $.ajax({
                url: '/categories/large_category_id/' + e.target.value,
                method: 'get',
                success: (res) => {
                    let lc_categories = '';
                    if (res.length > 0) {
                        res.map(category => {
                            lc_categories += `<div class="justify-content-between display-flex"> 
                                    <a href="/categories/${category.id}">${category.title}</a> 
                                    <span
                                    data-category='${JSON.stringify({category})}'
                                    data-bs-toggle="modal"
                                    data-parent="lc"
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
        } else {
            $('#lc_id_edit').val('');
            $('#lc_title_edit').val('');
            $('#lc_categories').html('大分類名を選択してください');
        }
    })

    $('#issue_title').change((e) => {
        if (issue_title.options[issue_title.selectedIndex].text != '選択してください') {
            issue=JSON.parse(e.target.value);
            $('#issue_title_edit').val(issue_title.options[issue_title.selectedIndex].text);
            $.ajax({
                url: '/categories/issue_id/' + issue.id,
                method: 'get',
                success: (res) => {
                    if (res.length > 0) {
                        let issue_categories='';
                        res.map(category => {
                            issue_categories += 
                                `<div class="justify-content-between display-flex"> 
                                    <a href="/categories/${category.id}">${category.title}</a> 
                                    <span
                                    data-category='${JSON.stringify({category})}'
                                    data-bs-toggle="modal"
                                    data-bs-target="#categoryModal"
                                    data-parent="issue"
                                    >
                                    <i class='bx bxs-edit text-primary'></i>
                                    </span>
                                </div>`; 
                        })
                        $('#issue_categories').html(issue_categories);
                    } else 
                        $('#issue_categories').html('カテゴリなし');
                    }
                })
        } else {
            issue=undefined;
            $('#issue_title_edit').val('');
            $('#issue_categories').html('大分類名を選択してください');
        }
    })

    $('#categoryModal').on('shown.bs.modal', function (e) {
        const parent=e.relatedTarget.dataset.parent;
        if(parent=='lc'&&!lc_id){
            toastr.error('大分類名を選択してください');
            $('#categoryModal').modal('hide');
        }
        else if(parent=='issue'&&!issue){
            toastr.error('大分類名を選択してください');
            $('#categoryModal').modal('hide');
        }
        else if (e.relatedTarget.dataset.category !== undefined) {
            let categoryData = JSON.parse(e.relatedTarget.dataset.category).category;
            $('#categoryForm').attr('action', '/admin/category_edit');
            $('#c_id').val(categoryData.id);
            $('#c_title').val(categoryData.title);
            $('#c_description').val(categoryData.description);
            $('#n_point').summernote('code',categoryData.necessary_points);
            $('#g_point').summernote('code',categoryData.good_points);
            $('#b_point').summernote('code',categoryData.bad_points);
            $('#c_point').summernote('code',categoryData.comparison_points);
            $('#s_point').summernote('code',categoryData.success_method);
            $('#g_title').val(categoryData.guide.title);
            $('#g_description').val(categoryData.guide.description);
            $('#image_preview')[0].src='/'+categoryData.guide.image;
            $('#g_recommended')[0].checked=categoryData.guide.recommended;
            $('#g_free')[0].checked=categoryData.guide.free;
            
            if(parent=='lc'&&lc_id) $('#lc_id').val(lc_id);
            else if(parent='issue'&&issue) $('#i_id').val(issue.id);
            
            $('#button-container').html('<button type="submit" class="btn btn-primary">更新</button>');
        } 
        else {
            $('#lc_id').val(lc_id);
            $('#categoryForm').attr('action', '/admin/category_add');
            $('#button-container').html('<button type="submit" class="btn btn-primary" >追加</button>');
        }
        // }
        // else{
		// 	toastr.error('大分類名を選択してください');
        //     $('#categoryModal').modal('hide');toastr.error('大分類名を選択してください');
        //     $('#categoryModal').modal('hide');
        // }
    })
    .on('hidden.bs.modal', function (e) {}
    );

    $('#issueModal').on('shown.bs.modal', function (e) {
        // if(issue){
        if (e.relatedTarget.dataset.purpose == 'update') {
            if(issue){
                $('#issueForm').attr('action', '/admin/issue_edit');
                $('#i_id').val(issue.id);
                $('#i_title').val(issue.title);
                $('#image_preview_issue')[0].src='/'+issue.image;
                
                $('#button-container-issue').html('<button type="submit" class="btn btn-primary">更新</button>');
            }        
            else {
                toastr.error('大課題名を選択してください');
                $('#issueModal').modal('hide');
            }    
        } 
        else {
            $('#issueForm').attr('action', '/admin/issue_edit');
            $('#button-container-issue').html('<button type="submit" class="btn btn-primary" >追加</button>');
        }
    })
    .on('hidden.bs.modal', function (e) {}
    );

    const imageUpload = document.getElementById('image_upload');
    const imagePreview = document.getElementById('image_preview');
    imageUpload.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function() {
                imagePreview.src = this.result;
            });
            reader.readAsDataURL(file);
        }
    });
    const imageUploadIssue = document.getElementById('image_upload_issue');
    const imagePreviewIssue = document.getElementById('image_preview_issue');
    imageUploadIssue.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function() {
                imagePreviewIssue.src = this.result;
            });
            reader.readAsDataURL(file);
        }
    });

</script>
@endsection