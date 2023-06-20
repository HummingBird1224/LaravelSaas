@extends("layouts.admin")

@section('content')
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="content" style="padding-top: 0.5rem;">
			<div class="col-12">
				<div class="card card-info card-outline">

					<div class="card-body">
						<div class="row">
							<h5>編集中の口コミ</h5>
							<div id="table-wrapper" class="col-12">
								<table class="table table-bordered" style="width: 100%;" id="item-table">
									<tbody id="item-table-body">
										@foreach($reviews as $review)
										<tr id="review_{{$review->id}}"
												data-review="{{$review}}"
												data-bs-toggle="modal"
												data-bs-target="#categoryModal"
												style="cursor:pointer"
										>											
											@if($review->user->company)
											<td>{{$review->user->company->name}}</td>
											@else
											<td>{{$review->user->full_name}}</td>
											@endif
											<td>{{$review->service->title}}</td>
											<td>{{\Carbon\Carbon::parse($review->updated_at)->format('Y年m月d日 H:i')}}</td>
											<td style="min-width: 90px; padding:20px;cursor:pointer">
                        <span
                          data-id="{{ $review->id}}"
                          data-bs-toggle="modal" 
                          data-bs-target="#confirmModal"
                          class="purple-button button"
                        >
                          承認
                        </span>
                        <span class="m-l-15 m-r-15">/</span>
                        <span
                          data-id="{{ $review->id }}"
                          data-bs-toggle="modal"
                          data-bs-target="#categoryModal"
                          class="purple-button button"
                        >
                          拒否(理由)
                        </span>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
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
				<h4 class="modal-title text-white">レビュー管理</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body m-4 review-modal">
				<div class="row mt-2">
					<div class="col-6 display-flex ">
						<img src="{{asset('assets/img/tsukubnobi/no_logo.png')}}" id="s_logo"/>
						<div class="info-wrapper">
							<strong id="s_name"></strong>
							<p id="s_company_name"></p>
						</div>						
					</div>
					<div class="col-6 display-flex">
						<img src="{{asset('assets/img/tsukubnobi/default.png')}}" id="u_avatar"/>
						<div class="info-wrapper">
							<strong id="u_name"></strong>
							<p id="u_company_name"></p>
						</div>						
					</div>
				</div>	
			</div>

			<!-- Modal footer -->
			<div class="modal-footer" id="button-container">
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 mb-3 text-center">
						<h4>本当承認しますか?</h4>
					</div>
				</div>
			</div>
			<div class="modal-footer" id="btns">
				<!-- <button type="button" class="btn btn-primary">削除</button>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">キャンセル</button> -->
			</div>
		</div>
	</div>
</div>
@endsection
	
@section("script")
	<script>
		$('#confirmModal').on('shown.bs.modal', function(e) {
			var target = e.relatedTarget.dataset;
			$('#btns').html(
				`<button type="button" class="btn btn-primary" onclick="category.permit(${target.id})">承認</button>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">キャンセル</button>`
			);
		}).on('hidden.bs.modal', function(e) {

		});

		$('#categoryModal').on('shown.bs.modal', function(e) {
			let review=e.relatedTarget.dataset.review;
			console.log(review.user);
			$('#')

				$('#button-container').html('<button type="button" class="btn btn-primary" onclick="category.reject()">拒否</button>');
			
		}).on('hidden.bs.modal', function(e) {

		});
		
		const category = {
			reject: function () {
				$.ajax({
					url: "/admin/review_reject/"+$('#user_id').val(),
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						reason: $('#reason').val(),
					},
					beforeSend: function (xhr, opts) {
						if ($('#reason').val() == '') {
							toastr.error('拒否の理由は必須です。');
							xhr.abort();
							return false;
						}
					},
					success: function (res) {
						$('#categoryModal').modal('hide');
						toastr.success('クライアント要求が拒否されました。');
						$('#client_' + res.id).remove();
					}
				});
			},
			permit: function (id) {
				$.ajax({
					url: "/admin/review_permit/" + id,
					type: "get",
					success: function (res) {
						$('#confirmModal').modal('hide');
						toastr.success('あなたのレビューは承認されました。');
						$('#review_' + res.id).remove();
					}
				});
			},
		};

	</script>
@endsection
