@extends("layouts.admin")

@section('content')
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="content" style="padding-top: 0.5rem;">
			<div class="col-12">
				<div class="card card-info card-outline">

					<div class="card-body">
						<div class="row">
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
										@for($i=1; $i<=6; $i++)
										<tr id={{ "client". $i }} >											
											<td>client{{$i}}</td>
											<td>リード無効化申請館</td>
											<td style="min-width: 90px; padding:20px;cursor:pointer">
                        <span
                          data-id={{ $i}}
                          data-bs-toggle="modal" 
                          data-bs-target="#confirmModal"
                          class="purple-button button"
                        >
                          承認
                        </span>
                        <span class="m-l-15 m-r-15">/</span>
                        <span
                          data-id={{ $i }}
                          data-bs-toggle="modal"
                          data-bs-target="#categoryModal"
                          class="purple-button button"
                        >
                          拒否(理由)
                        </span>
											</td>
										</tr>
										@endfor
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
				`<button type="button" class="btn btn-primary" onclick="category.delete(${target.id})">承認</button>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">キャンセル</button>`
			);
		}).on('hidden.bs.modal', function(e) {

		});

		$('#categoryModal').on('shown.bs.modal', function(e) {

				$('#user_id').val(`${e.relatedTarget.dataset.id}`);
				$('#reason').val('');

				$('#button-container').html('<button type="button" class="btn btn-primary" onclick="category.add()">追加</button>');
			
		}).on('hidden.bs.modal', function(e) {

		});
		
		const category = {
			add: function () {
				var categoryData = {
					reason: $('#reason').val(),
					
				};

				$.ajax({
					url: "{{ route('add_category') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						postData: JSON.stringify(categoryData)
					},
					beforeSend: function (xhr, opts) {
						if ($('#c_name').val() == '') {
							toastr.error('カテゴリー名は必須です。');
							xhr.abort();
							return false;
						}
					},
					success: function (res) {
						$('#categoryModal').modal('hide');

						toastr.success('カテゴリーが正常に追加されました。');

						location.reload();
						let newCategory =
							`<tr id="category${res.id}">
								<td style="min-width: 90px;">
									<span class="text-primary"
										data-category=${res}
										data-bs-toggle="modal"
										data-bs-target="#categoryModal">
										<i class='bx bxs-edit'></i>
									</span>
									<span class="text-danger" onclick="category.delete(${res.id})">
										<i class='bx bxs-trash'></i>
									</span>
								</td>
								<td>${res.name}</td>
								<td>${res.fall_pro}</td>
								<td>${res.target_price}</td>
								<td style="max-width: 300px;">${res.web_hook}</td>
							</tr>`;

						$('#item-table-body').html(newCategory + $('#item-table-body').html());
					}
				});
			},
			edit: function () {
				var categoryData = {
					id: $('#category_id').val(),
					name: $('#c_name').val(),
					access_key: $('#access_key').val(),
					secret_key: $('#secret_key').val(),
					partner_tag: $('#partner_tag').val(),
					yahoo_id: $('#yahoo_id').val(),
					fall_pro: $('#fall_pro').val(),
					target_price: $('#target_price').val(),
					web_hook: $('#web_hook').val(),
				};

				$.ajax({
					url: "{{ route('edit_category') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						postData: JSON.stringify(categoryData)
					},
					beforeSend: function (xhr, opts) {
						if ($('#c_name').val() == '') {
							toastr.error('カテゴリー名は必須です。');
							xhr.abort();
							return false;
						}
					},
					success: function (res) {
						$('#categoryModal').modal('hide');

						toastr.success('カテゴリーが正常に更新されました。');
						
						location.reload();

						let editedCategory =
							`<td style="min-width: 90px;">
								<span class="text-primary"
									data-category=${res}
									data-bs-toggle="modal"
									data-bs-target="#categoryModal">
									<i class='bx bxs-edit'></i>
								</span>
								<span class="text-danger" onclick="category.delete(${res.id})">
									<i class='bx bxs-trash'></i>
								</span>
							</td>
							<td>${res.name}</td>
							<td>${res.fall_pro}</td>
							<td>${res.target_price}</td>
							<td style="max-width: 300px;">${res.web_hook}</td>`;
						$('#category' + res.id).html(editedCategory);
					}
				});
			},
			delete: function (id) {
				$.ajax({
					url: "/category/delete/" + id,
					type: "get",
					success: function (res) {
						$('#confirmModal').modal('hide');
						toastr.success('カテゴリーが正常に削除されました。');

						location.reload();
						$('#category' + res).remove();
					}
				});
			},
		};

	</script>
@endsection
