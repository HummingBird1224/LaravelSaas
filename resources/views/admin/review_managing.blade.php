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
										<tr>
											<th>Username</th>
											<th>Service</th>
											<th>Date</th>
											<!-- <th>Action</th> -->
										</tr>
										@foreach($reviews as $review)
										<tr id="review_{{$review->id}}"
												data-review="{{ $review }}"
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
											<!-- <td style="min-width: 90px; padding:20px;cursor:pointer">
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
											</td> -->
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
		<div class="modal-content" id="manage_modal_content">

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
		const category = {
			reject: function (id) {
				$.ajax({
					url: "{{ route('review_reject') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						id: id,
						reason: $('#reject_reason').val(),
					},
					beforeSend: function (xhr, opts) {
						if ($('#reject_reason').val() == '') {
							toastr.error('拒否の理由は必須です。');
							xhr.abort();
							return false;
						}
					},
					success: function (res) {
						$('#categoryModal').modal('hide');
						toastr.success('クライアント要求が拒否されました。');
						$('#review_' + res.id).remove();
					}
				});
			},
			permit: function (id) {
				$.ajax({
					url: "{{ route('review_permit') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						id: id
					},
					success: function (res) {
						$('#categoryModal').modal('hide');
						toastr.success('あなたのレビューは承認されました。');
						$('#review_' + res.id).remove();
					}
				});
			},
		};

		$('#categoryModal').on('shown.bs.modal', function(e) {
			let review = JSON.parse(e.relatedTarget.dataset.review);
			console.log(review);
			console.log(review.user);
			console.log(review.service);

			let service_logo	=	(review.service.logo != undefined) ? review.service.logo : "{{asset('assets/img/tsukubnobi/no_logo.png')}}";
			let user_avatar 	=	(review.user.avatar != undefined) ? review.user.avatar : "{{asset('assets/img/tsukubnobi/default.png')}}";
			let js_date = new Date(review.updated_at);
			let create_date = js_date.getFullYear() + '年' + (js_date.getMonth()+1) + '月' + js_date.getDate() + '日 ' + js_date.getHours() + ':' + js_date.getMinutes();

			var review_html = "";
			for (let i = 0; i < review.score; i++) {
				review_html += `<i class="bx bxs-star text-yellow " style="margin-right: 0px; font-size: xx-large;" aria-hidden="true"></i>`;
			} for (let j = 0; j < (5 - review.score); j++) {
				review_html += `<i class="bx bxs-star text-black-400 " style="margin-right: 0px; font-size: xx-large;" aria-hidden="true"></i>`;
			}
			review_html += `<div><p style="margin-block-start: -0.4rem;"></p><strong>&nbsp;&nbsp;&nbsp;(${review.score}/5 件)</strong></div>`;

			$('#manage_modal_content').html(`
				<!-- Modal Header -->
				<div class="modal-header bg-primary">
					<h4 class="modal-title text-white">レビュー管理</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body m-4 review-modal" style="margin-top: -15px !important; margin-bottom: 0 !important;">
					<div class="row mt-2">
						<div class="col-6 display-flex ">
							<img src="/${service_logo}" id="s_logo"/>
							<div class="info-wrapper">
								<strong id="s_name">${review.service.title}</strong>
								<p id="s_company_name">SONY</p>
							</div>
						</div>
						<div class="col-6 display-flex">
							<img src="${user_avatar}" id="u_avatar"/>
							<div class="info-wrapper">
								<strong id="u_name">${review.user.first_name} ${review.user.last_name}</strong>
								<p id="u_company_name">${review.user.company_name}</p>
							</div>
						</div>
					</div>
					<div class="row mt-2">
						<div class="i-service-details-serviceReview" style="display: flex;">
							${review_html}
							<div style="margin-left: 10%;">&nbsp;&nbsp;&nbsp;&nbsp;投稿日<br><strong>&nbsp;&nbsp;&nbsp;&nbsp;${create_date}</strong></div>
						</div>
					</div>
					<div class="container">
						<div class="row mt-2">
							<h5 style="margin-left: -7%">${review.title}</h5>
							<h6 style="max-width: 115%; width: auto; margin-left: -7%; border: 2px dotted #e5e5e5; max-height: 8rem; overflow-y: scroll;"">${review.description}</h6>
						</div>
						<!-- <div class="row mt-1">
							<h5 style="margin-left: -7%"> ㅡ 導入後効果 ㅡ </h5>
							<h6 style="max-width: 120%; width: auto; margin-left: -7%; border: 2px dotted #e5e5e5; max-height: 7rem; overflow-y: scroll;">${review.effect_after_implementation}</h6>
						</div> -->
						<div class="row mt-1">
							<div class="col-6">
								<h5 style="margin-left: -20%"> ㅡ 良いポイント ㅡ </h5>
								<h6 style="max-width: 115%; width: auto; margin-left: -20%; border: 2px dotted #e5e5e5; max-height: 7rem; overflow-y: scroll;">${review.good_point}</h6>
							</div>
							<div class="col-6">
								<h5> ㅡ 改善点 ㅡ </h5>
								<h6 style="max-width: 120%; width: auto; margin-right: -20%; border: 2px dotted #e5e5e5; max-height: 7rem; overflow-y: scroll;">${review.bad_point}</h6>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer" id="button-container" style="gap: 28%;">
					<button class="btn btn-primary col-4" onclick="category.permit(${review.id})" style="float: left">拒否</button>
					<button type="button" class="btn btn-primary col-4 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">許可</button>
					
					<div class="dropdown-menu dropdown-menu-end w-px-300">
						<form class="p-4" onsubmit="return false">
							<div class="mb-3">
								<label for="reject_reason" class="form-label">Reject Reason</label>
								<textarea class="form-control" id="reject_reason" name="reject_reason" style="height: 8rem;"></textarea>
							</div>
							<button type="button" class="btn btn-primary" onclick="category.reject(${review.id})">許可</button>
						</form>
					</div>
				</div>
			`);
		}).on('hidden.bs.modal', function(e) {

		});

	</script>
@endsection
