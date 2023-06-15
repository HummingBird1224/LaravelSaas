@extends("layouts.no_aside_initial")

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
<div class="">
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="content" style="padding-top: 0.5rem;">
      <div class="col-12">
        <div class="card card-info card-outline">
          <div class="card-body">
            <form class="row" method="POST" action="{{route('store_service')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="guide_id" value="{{$guide_id}}" />
              <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">サービスの作成</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body m-4">
                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>名前</strong>
                  </div>
                  <div class="col-8">
                    <input class="form-control" type="text" id="s_name" name="name" value="" required />
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>説明</strong>
                  </div>
                  <div class="col-8">
                    <textarea class="form-control" type="text" id="s_description" name="description" value=""
                      required></textarea>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>材料</strong>
                  </div>
                  <div class="col-8">
                    <input class="form-control" type="file" id="s_material" name="material" value="" required />
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>材料画像</strong>
                  </div>
                  <div class="col-8">
                    <!-- <input class="form-control" type="file" id="g_image" name="image" value="" required /> -->
                    <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                      <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                        data-xblocker="passed" style="visibility: visible;" id="image_preview">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised blue-button button btn-file">
                        <label class="fileinput-new" for="image_upload">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="m_image" id="image_upload" hidden>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>ロゴ画像</strong>
                  </div>
                  <div class="col-8">
                    <!-- <input class="form-control" type="file" id="g_image" name="image" value="" required /> -->
                    <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                      <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                        data-xblocker="passed" style="visibility: visible;" id="image_preview">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised blue-button button btn-file">
                        <label class="fileinput-new" for="image_upload">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="logo" id="image_upload" hidden>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>UI画像</strong>
                  </div>
                  <div class="col-8">
                    <!-- <input class="form-control" type="file" id="g_image" name="image" value="" required /> -->
                    <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                      <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                        data-xblocker="passed" style="visibility: visible;" id="image_preview">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised blue-button button btn-file">
                        <label class="fileinput-new" for="image_upload">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="uis[][image]" id="image_upload" hidden>
                      </span>
                    </div>
                    <div>
                      <div class="row mt-2">
                        <label class="col-md-4">UIタイトル </label>
                        <input class="form-control col-md-8 flex-width" type="text" name="uis[][title]" value=""
                          required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">UI説明 </label>
                        <textarea class="form-control col-md-8 flex-width" type="text" name="uis[][description]"
                          value="" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>プラン価格</strong>
                  </div>
                  <div class="col-8">
                    <div>
                      <div class="row mt-2">
                        <label class="col-md-4">年額/ユーザー </label>
                        <input class="form-control col-md-8 flex-width" type="number" name="prices[][year]" value="" />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">月額/ユーザー</label>
                        <input class="form-control col-md-8 flex-width" type="number" name="prices[][month]" value="">
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">初期費用 </label>
                        <input class="form-control col-md-8 flex-width" type="number" name="prices[][initial_price]"
                          value="" />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">最低利用人数</label>
                        <input class="form-control col-md-8 flex-width" type="number" name="prices[][min_user]"
                          value="">
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">最低利用期間 </label>
                        <input class="form-control col-md-8 flex-width" type="number" name="prices[][min_usage]"
                          value="" />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">説明</label>
                        <textarea class="form-control col-md-8 flex-width" type="text" name="prices[][description]"
                          value=""></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>機能ごとの評価</strong>
                  </div>
                  <div class="col-8">
                    <div class="row">
                      @foreach($data->functions as $function)
                      <label class="col-md-4">
                        <input type="checkbox" id={{ "function-". $function->id }} value="{{$function->id}}"
                          name="functions[]" />
                        {{$function->value}}
                      </label>
                      @endforeach
                    </div>
                    <input class="" type="checkbox" id="g_recommended" name="recommended" />
                  </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer " id="button-container">
                <button type="submit" class="btn btn-primary">追加</button>
                <a href="{{url()->previous()}}">
                  <button type="button" class="btn orange-button btn" style="color:white">戻る</button>
                </a>
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