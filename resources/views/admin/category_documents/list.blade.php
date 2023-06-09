@extends("layouts.admin")

@section('css')
<style>
	table th, table td {
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
						<div class="row">
							<div id="table-wrapper" class="col-12">
								<table class="table table-bordered" style="width: 100%;" id="item-table">
									<thead>
										<tr>											
											<th>ID</th>
											<th>タイトル</th>
											<th style="max-width: 300px;">説明</th>
											<th >画像</th>
                      <th>おすすめされた</th>
                      <th>最終更新日</th>
                      <th>カテゴリー</th>
                      <th style="min-width: 90px;">
                        <a href="{{route('add_category_document')}}" >
                          <span 
                            class="text-primary"
                            data-bs-toggle="modal" 
                            data-bs-target="#categoryModal">
                            <i class='bx bxs-plus-circle'></i>
                          </span>
                        </a>
											</th>
										</tr>
									</thead>

									<tbody id="item-table-body">
										@foreach($guides as $guide)
										<tr id={{ "guide". $guide->id }}>											
											<td>{{$guide->id}}</td>
											<td>{{$guide->title}}</td>
											<td >{{$guide->description}}</td>
											<td >
                        <img src="{{asset($guide->image)}}" width="50px" height="50px"/>
                      </td>
                      <td>{{$guide->recommended}}</td>
                      <td>{{ \Carbon\Carbon::parse($guide->updated_at)->format('d/m/Y')}}</td>
                      <td>請求書発行</td>
                      <td style="min-width: 90px;">
												<span
													data-category={{ $guide }}
													data-bs-toggle="modal"
													data-bs-target="#categoryModal">
													<i class='bx bxs-edit text-primary'></i>
												</span>
												<span
													data-id={{ $guide->id }}
													data-bs-toggle="modal" 
													data-bs-target="#confirmModal">
													<i class='bx bxs-trash text-danger'></i>
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
				<h4 class="modal-title text-white">ガイド編集</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body m-4">
				<div class="row mt-2">
					<div class="col-4">
						<strong>タイトル</strong>
					</div>
					<div class="col-8">
						<input class="form-control" type="text" id="g_title" name="title" value="" required />
						<input class="form-control" type="hidden" id="category_id" name="category_id" value="" />
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-4">
						<strong>説明</strong>
					</div>
					<div class="col-8">
            <textarea class="form-control" type="text" id="g_description" name="description" value="" required ></textarea>
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
						<input class="form-control" type="file" id="g_image" name="image" value="" required />
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-4">
						<strong>カテゴリー</strong>
					</div>
					<div class="col-8">
						<select class="form-control select required w-300px" required="required" aria-required="true" name="category" id="g_category">
              <option value="">選択してください</option>
              @foreach($data->industries as $industry)
                <option value="{{$industry->id}}" >{{$industry->value}}</option>
              @endforeach
            </select>
					</div>
				</div>
				
				<div class="row mt-2">
					<div class="col-4">
						<strong>おすすめされた</strong>
					</div>
					<div class="col-8">
						<input class="" type="checkbox" id="g_recommended" name="recommended"    />
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
						<h4>本当にデータを削除しますか?</h4>
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
    console.log($('#g_recommended').checked)
		$('#confirmModal').on('shown.bs.modal', function(e) {
			var target = e.relatedTarget.dataset;
			$('#btns').html(
				`<button type="button" class="btn btn-primary" onclick="guide.delete(${target.id})">削除</button>
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">キャンセル</button>`
			);
		}).on('hidden.bs.modal', function(e) {

		});

		// $('#categoryModal').on('shown.bs.modal', function(e) {
		// 	if (e.relatedTarget.dataset.category !== undefined) {
		// 		let categoryData = JSON.parse(e.relatedTarget.dataset.category);
		// 		$('#category_id').val(categoryData.id);
		// 		$('#c_name').val(categoryData.name);
		// 		$('#access_key').val(categoryData.access_key);
		// 		$('#secret_key').val(categoryData.secret_key);
		// 		$('#partner_tag').val(categoryData.partner_tag);
		// 		$('#yahoo_id').val(categoryData.yahoo_id);
		// 		$('#fall_pro').val(categoryData.fall_pro),
		// 		$('#target_price').val(categoryData.target_price),
		// 		$('#web_hook').val(categoryData.web_hook),

		// 		$('#button-container').html('<button type="button" class="btn btn-primary" onclick="category.edit()">更新</button>');
		// 	} else {
		// 		$('#g_title').val('');
		// 		$('#g_description').val('');
		// 		$('#g_material').val('');
		// 		$('#g_image').val('');
		// 		$('#g_category').val('');
		// 		$('#g_recommended').val('');
		// 		$('#button-container').html('<button type="button" class="btn btn-primary" onclick="guide.add()">追加</button>');
		// 	}
		// }).on('hidden.bs.modal', function(e) {

		// });

    fileUpload=(id)=>{
      var files = $(id)[0].files;
      var name=id.substr(3);
      if(files.length > 0){
        var fd = new FormData();
        // Append data 
        fd.append(id.substr(3),files[0]);
        console.log(fd);
        return fd;
      }
    }
		
		const guide = {
			add: function () {
				var guideData = {
					title: $('#g_title').val(),
					description: $('#g_description').val(),
					material: fileUpload('#g_material'),
					image: fileUpload('#g_image'),
					category: $('#g_category').val(),
					recommended: $('#g_recommended').checked?1:0,
				};

				$.ajax({
					url: "{{ route('add_category') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						postData: JSON.stringify(guideData)
					},
					beforeSend: function (xhr, opts) {
						if ($('#g_title').val() == '') {
							toastr.error('ガイドのタイトルは必須です。');
							xhr.abort();
							return false;
						}
					},
					success: function (res) {
						$('#categoryModal').modal('hide');

						toastr.success('ガイドが正常に追加されました。');

						// location.reload();
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
					url: "/admin/category_documents/delete/" + id,
					type: "get",
					success: function (res) {
						$('#confirmModal').modal('hide');
						toastr.success('ガイドが正常に削除されました。');

						// location.reload();
						$('#guide' + res).remove();
					}
				});
			},
		};

	</script>
@endsection
