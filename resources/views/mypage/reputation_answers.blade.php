@extends("layouts.main")

@php
	$user = Auth::user();
@endphp

@section('content')
<div class="content-wrapper">	
	<div class="container-xxl flex-grow-1 container-p-y">
		<main id="main" class="main">
			<section class="section reviews">
				<!-- banner -->
				<div class=" card-section">	
					<div class="card info-card ">
						<div class=" row">
							<img src="{{asset('assets/img/tsukubnobi/users-campaign-banner_2.png')}}" alt="user_banner">
						</div>
					</div>
				</div>
				<!-- End banner -->

				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
              <h5 class="card-title">
                編集中の口コミ
              </h5>	
              <div class="row">
                <div id="table-wrapper" class="col-12">
                  <table class="table table-bordered" style="width: 100%;" id="item-table">
                    <thead>
                      <tr>
                        <th>投稿日時</th>
                        <th>サービス名</th>
                        <th>ステータス</th>
                        <th>編集</th>
                      </tr>
                    </thead>

                    <tbody id="item-table-body">
                      @if(count($publishing_reviews)>0)
                        @foreach($publishing_reviews as $p_r)
                          <tr id={{ "review". $p_r->id }}>                       
                            <td>{{ \Carbon\Carbon::parse($p_r->updated_at)->format('Y年m月d日 H:i')}}</td>
                            <td>{{$p_r->service->title}}</td>
                            <td>{{$p_r->status}}</td>
                            <td style="min-width: 90px;">
                              <span
                                data-id={{ $p_r->id }}
                                data-bs-toggle="modal" 
                                data-bs-target="#confirmModal"
                              >
                              <i class='bx bxs-trash text-danger'></i>
                              </span>
                            </td>
                          </tr>
                        @endforeach
                      @else 
                        <tr class="text-center" ><td colspan="4">データなし</td></tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
						</div>
					</div>
				</div>

				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
              <h5 class="card-title">
                投稿済みの口コミ
              </h5>	
              <div class="row">
                <div id="table-wrapper" class="col-12">
                  <table class="table table-bordered" style="width: 100%;" id="item-table">
                    <thead>
                      <tr>
                        <th>投稿日時</th>
                        <th>サービス名</th>
                        <th>ステータス</th>
                      </tr>
                    </thead>

                    <tbody id="item-table-body">
                      @if(count($approved_reviews)>0)
                        @foreach($approved_reviews as $a_r)
                          <tr id={{ "review". $a_r->id }}>                       
                            <td>{{ \Carbon\Carbon::parse($a_r->updated_at)->format('Y年m月d日 H:i')}}</td>
                            <td>{{$a_r->service->title}}</td>
                            <td>{{$a_r->status}}</td>
                          </tr>
                        @endforeach
                      @else 
                        <tr class="text-center" ><td colspan="4">データなし</td></tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
						</div>
					</div>
				</div>
			</section>

      <div class="modal fade" id="confirmModal" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12 mb-3 text-center">
                  <h4>本当にレビューを削除しますか?</h4>
                </div>
              </div>
            </div>
            <div class="modal-footer" id="btns">
            </div>
          </div>
        </div>
      </div>

		</main><!-- End #main -->
	</div>
</div>
@endsection

@section('script')
<script>
  $('#confirmModal').on('shown.bs.modal', function(e) {
    var target = e.relatedTarget.dataset;
    $('#btns').html(
      `<button type="button" class="btn btn-primary" onclick="reviews.delete(${target.id})">削除</button>
      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">キャンセル</button>`
    );
  }).on('hidden.bs.modal', function(e) {

	});
  const reviews = {
    delete: function (id) {
      $.ajax({
        url: "/reviews/delete/"+id,
        type: "get",
        success: function (res) {
          $('#confirmModal').modal('hide');
          toastr.success('レビューが正常に削除されました。');

          // location.reload();
          $('#review' + res).remove();
        }
      });
    },
  };
</script>
@endsection  