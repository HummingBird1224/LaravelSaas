@extends("layouts.admin")

@section('content')
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y admin-managing">
		<div class="content" style="padding-top: 0.5rem;">
			<div class="col-12">
				<div class="card card-info card-outline">

					<div class="card-body">
						<div class="row">
							<h5>適用ユーザー</h5>
							<div id="table-wrapper" class="col-12">
								<table class="table table-bordered" style="width: 100%;" id="item-table">
									<!-- <thead>
										<tr>
											<th style="min-width: 90px;">
												<span class="text-primary"
													data-bs-toggle="modal" 
													data-bs-target="#categoryModal">
													<i class='bx bxs-plus-circle'></i>
												</span>
											</th>
											<th>カテゴリー名</th>
											<th>下落(%)</th>
											<th>目標価格</th>
											<th style="max-width: 300px;">WEB HOOK</th>
										</tr>
									</thead> -->

									<tbody id="item-table-body">
										@foreach($w_users as $w_user)
										<tr id="client_{{$w_user->id}}" >	
											<td>{{$w_user->id}}</td>								
											<td>{{$w_user->full_name}}</td>
											<td>{{$w_user->company->name}}</td>
											<td>{{$w_user->email}}</td>
											<td  class="button-wrapper">
												<span
												data-id="{{ $w_user->id}}"
												data-bs-toggle="modal" 
												data-bs-target="#confirmModal"
												class=" m-b-15"
												>
												<img src="{{asset('assets/img/tsukubnobi/hand-thumbs-up-custom.svg')}}" alt="thumbsup" width="20px"/>
												</span>
												<!-- <span class="m-l-15 m-r-15">/</span> -->
												<span
												data-id="{{ $w_user->id }}"
												data-bs-toggle="modal"
												data-bs-target="#categoryModal"
												class="m-b-15"
												>
												<img src="{{asset('assets/img/tsukubnobi/hand-thumbs-down-custom.svg')}}" alt="thumbsup" width="20px"/>
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
				<h4 class="modal-title text-white">拒否(理由)</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body m-4">
				<div class="row mt-2">
					<div class="col-4">
						<strong>理由</strong>
					</div>
					<div class="col-8">
						<textarea class="form-control" type="text" id="reason" name="reason" value="" required ></textarea>
						<input class="form-control" type="hidden" id="user_id" name="user_id" value="" />
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

				$('#user_id').val(`${e.relatedTarget.dataset.id}`);
				$('#reason').val('');

				$('#button-container').html('<button type="button" class="btn btn-primary" onclick="category.reject()">拒否</button>');
			
		}).on('hidden.bs.modal', function(e) {

		});
		
		const category = {
			reject: function () {
				$.ajax({
					url: "/admin/client_reject/"+$('#user_id').val(),
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
					url: "/admin/client_permit/" + id,
					type: "get",
					success: function (res) {
						$('#confirmModal').modal('hide');
						toastr.success('クライアントは許可されました。');
						$('#client_' + res.id).remove();
					}
				});
			},
		};

	</script>
@endsection
