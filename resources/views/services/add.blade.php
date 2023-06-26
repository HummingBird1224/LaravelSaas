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
              <!-- <input type="hidden" name="guide_id" value="" /> -->
              <div class="modal-header bg-primary">
                <h4 class="modal-title text-white">サービスの作成</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body m-4">
                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>ガイドセレクト</strong>
                  </div>
                  <div class="col-8">
                    <select class="form-control placeholder-no-fix" name="guide_id">
                      <option value="">選択してください</option>
                      @php
                        $guides = App\Models\Guide::get();
                      @endphp
                      @foreach($guides as $g)

                      <option value="{{$g->id}}">{{$g->title}}</option>

                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>名前</strong>
                  </div>
                  <div class="col-8">
                    <input class="form-control" type="text" id="s_title" name="title" value="" required />
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
                    <strong>サービス資料</strong>
                  </div>
                  <div class="col-8">
                    <input class="form-control" type="file" id="s_data" name="data" value="" required />
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
                        data-xblocker="passed" style="visibility: visible;" id="logo_preview">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised blue-button button btn-file">
                        <label class="fileinput-new" for="logo_upload">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="logo_img" id="logo_upload" hidden>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15" id="ui_images">
                  <div class="col-4">
                    <strong>UI画像</strong>
                    <span class="text-primary">
                      <i class='bx bxs-plus-circle' id="add_image"></i>
                    </span>
                  </div>
                  <div class="col-8 row">
                    <!-- <input class="form-control" type="file" id="g_image" name="image" value="" required /> -->
                    <div class="col-4">
                      <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                        <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                          data-xblocker="passed" style="visibility: visible;" class="ui_preview" data-id="0">
                      </div>
                      <span class="help-block">180px × 180px 推奨</span>
                      <div>
                        <span class="btn btn-raised blue-button button btn-file">
                          <label class="fileinput-new" for="image_upload0">アップロード</label>
                          <input accept="image/jpeg, image/png" type="file" name="uis[0][img]" id="image_upload0" class="ui_upload" onchange="image_show(event)" data-id="0" hidden>
                        </span>
                      </div>
                    </div>
                    <div class="col-8">
                      <!-- <div class="row mt-2">
                        <label class="col-md-4">UIタイトル </label>
                        <input class="form-control col-md-8 flex-width" type="text" name="uis[0][title]" value="" required />
                      </div> -->
                      <div class="row mt-2">
                        <label class="col-md-4">UI説明 </label>
                        <textarea class="form-control col-md-8 flex-width" type="text" name="uis[0][description]" style="height: 180px;" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row m-t-15">
                  <div class="col-4">
                    <strong>プラン価格</strong>
                    <span class="text-primary">
                      <i class='bx bxs-plus-circle' id="add_plan"></i>
                    </span>
                  </div>
                  <div class="col-8" id="first_plan">
                    <div>
                      <div class="row mt-2">
                        <label class="col-md-4">タイトル</label>
                        <input class="form-control col-md-8 flex-width" type="text" name="plans[0][title]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">年額/ユーザー</label>
                        <input class="form-control col-md-8 flex-width" type="number" name="plans[0][year]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">月額/ユーザー</label>
                        <input class="form-control col-md-8 flex-width" type="number" name="plans[0][month]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">初期費用 </label>
                        <input class="form-control col-md-8 flex-width" type="number" name="plans[0][initial_price]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">最低利用人数</label>
                        <input class="form-control col-md-8 flex-width" type="number" name="plans[0][min_user]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">最低利用期間 </label>
                        <input class="form-control col-md-8 flex-width" type="number" name="plans[0][min_usage]" required />
                      </div>
                      <div class="row mt-2">
                        <label class="col-md-4">説明</label>
                        <textarea class="form-control col-md-8 flex-width" type="text" name="plans[0][description]" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="row m-t-15">
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
                </div> -->
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
  const imageUpload = () => {
    const logoUpload = document.getElementById('logo_upload');
    const logoPreview = document.getElementById('logo_preview');
    
    logoUpload.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener('load', function() {
          logoPreview.src = this.result;
        });
        reader.readAsDataURL(file);
      }
    });
  }

  const image_show = (e) => {
    let uiImgPreview = document.getElementsByClassName('ui_preview');
    var img_id = e.target.dataset.id;

    var file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.addEventListener('load', function(e) {
        uiImgPreview[img_id].src = e.target.result;
      });
      reader.readAsDataURL(file);
    }
  }

  const add_image = () => {
    $('#add_image').click(function () {
      imgId += 1;
      var _html = '';
      _html += `<div class="col-4"></div>
                <div class="col-8 row">
                  <div class="col-4">
                    <div class="fileinput-new thumbnail" style="max-width: 180px; max-height: 180px;">
                      <img width="170" height="160" src="{{ asset('assets/img/tsukubnobi/no_logo.png') }}"
                        data-xblocker="passed" style="visibility: visible;" class="ui_preview" data-id="${imgId}">
                    </div>
                    <span class="help-block">180px × 180px 推奨</span>
                    <div>
                      <span class="btn btn-raised blue-button button btn-file">
                        <label class="fileinput-new" for="image_upload` + imgId + `">アップロード</label>
                        <input accept="image/jpeg, image/png" type="file" name="uis[${imgId}][img]" id="image_upload` + imgId + `" class="ui_upload" onchange="image_show(event)" data-id="${imgId}" hidden required>
                      </span>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="row mt-2">
                      <label class="col-md-4">UI説明 </label>
                      <textarea class="form-control col-md-8 flex-width" type="text" name="uis[` + imgId + `][description]" style="height: 180px;" required></textarea>
                    </div>
                  </div>
                </div>`;
      $('#ui_images').append(_html);
    });
  }

  const add_plan = () => {
    $('#add_plan').click(function () {
      planId += 1;
      var _html = '';
      _html += `<div style="margin-top: 20px; padding-top: 16px; border-top: 3px dotted #ededed;">
                  <div class="row mt-2">
                    <label class="col-md-4">タイトル</label>
                    <input class="form-control col-md-8 flex-width" type="text" name="plans[` + planId + `][title]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">年額/ユーザー</label>
                    <input class="form-control col-md-8 flex-width" type="number" name="plans[` + planId + `][year]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">月額/ユーザー</label>
                    <input class="form-control col-md-8 flex-width" type="number" name="plans[` + planId + `][month]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">初期費用 </label>
                    <input class="form-control col-md-8 flex-width" type="number" name="plans[` + planId + `][initial_price]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">最低利用人数</label>
                    <input class="form-control col-md-8 flex-width" type="number" name="plans[` + planId + `][min_user]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">最低利用期間 </label>
                    <input class="form-control col-md-8 flex-width" type="number" name="plans[` + planId + `][min_usage]" required />
                  </div>
                  <div class="row mt-2">
                    <label class="col-md-4">説明</label>
                    <textarea class="form-control col-md-8 flex-width" type="text" name="plans[` + planId + `][description]" required></textarea>
                  </div>
                </div>`;
      $('#first_plan').append(_html);
    });
  }

  $(document).ready(function() {
    imgId = 0;
    planId = 0;
    imageUpload();
    // image_show(e);
    add_image(imgId);
    add_plan(planId);
  });
</script>
@endsection