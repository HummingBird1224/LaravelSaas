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

@php
$data=json_decode(file_get_contents(
public_path('company_profile.json')
));
@endphp

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content" style="padding-top: 0.5rem;">
      <div class="col-12">
        <div class="card card-info card-outline">
          <div class="card-body">
            <form class="row" method="POST" action="{{route('store_category_document')}}" enctype="multipart/form-data">
              @csrf
              <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">ガイド編集</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body m-4">
                <div class="row mt-2">
                  <div class="col-4">
                    <strong>タイトル</strong>
                  </div>
                  <div class="col-8">
                    <input class="form-control" type="text" id="g_title" name="title" value="" required />
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-4">
                    <strong>説明</strong>
                  </div>
                  <div class="col-8">
                    <textarea class="form-control" type="text" id="g_description" name="description" value=""
                      required></textarea>
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
                    <!-- <input class="form-control" type="file" id="g_image" name="image" value="" required /> -->
                    <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                      <img width="170" height="160" src="{{ asset('avatars/default.png') }}" data-xblocker="passed"
                        style="visibility: visible;" id="image_preview">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised purple-button button btn-file">
                        <label class="fileinput-new" for="image_upload">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="image" id="image_upload" hidden>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-4">
                    <strong>カテゴリー</strong>
                  </div>
                  <div class="col-8">
                    <select class="form-control select required w-300px" required="required" aria-required="true"
                      name="category" id="g_category">
                      <option value="">選択してください</option>
                      @foreach($data->industries as $industry)
                      <option value="{{$industry->id}}">{{$industry->value}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-4">
                    <strong>おすすめされた</strong>
                  </div>
                  <div class="col-8">
                    <input class="" type="checkbox" id="g_recommended" name="recommended" />
                  </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer" id="button-container">
                <button type="submit" class="btn btn-primary">追加</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section("script")
<script>
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
</script>
@endsection