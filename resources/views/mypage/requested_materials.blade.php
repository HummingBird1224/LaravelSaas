@extends("layouts.main")

@php
	$user = Auth::user();
@endphp

@section('content')
<div class="content-wrapper">	
	<div class="container-xxl flex-grow-1 container-p-y">
		<main id="main" class="main">
			<section class="section downloads">

				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
							<h5 class="card-title">
							請求されたガイド
							</h5>
							@if(count($r_guides)>0)
							<div class="row">
								<div id="table-wrapper" class="col-12">
									<table class="table table-bordered" style="width: 100%;" id="item-table">
										<thead>
											<tr>
												<th style="width: 30%;">資料請求日時</th>
												<th style="width: 20%;">ツール</th>
												<th style="width: 30%;">ガイド</th>
												<th style="width: 20%;">ステータス</th>
											</tr>
										</thead>
										<tbody id="item-table-body">											
											@foreach($r_guides as $r_guide)
											<tr id="r_guide_{{$r_guide->id}}">
												<td>{{ \Carbon\Carbon::parse($r_guide->updated_at)->format('Y年m月d日 H:i')}}</td>
												<td>
													<img src="{{ asset($r_guide->image) }}" class="nitaco-logo"
														width="33px" height="33px" />
														{{$r_guide->data_title}}
												</td>
												<td>
													{{$r_guide->title}}
												</td>
												<td>
													<div class="display-flex valid">
														<div class="status-circle"></div>
														有効
													</div>
												</td>													
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							@else
							<div class="row">
								資料がございません
							</div>
							@endif
						</div>
					</div>
				</div>

				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
							<h5 class="card-title">
							請求されたサービス
							</h5>
							@if(count($r_services)>0)
							<div class="row">
								<div id="table-wrapper" class="col-12">
									<table class="table table-bordered" style="width: 100%;" id="item-table">
										<thead>
											<tr>
												<th style="width: 30%;">資料請求日時</th>
												<th style="width: 20%;">ツール</th>
												<th style="width: 30%;">サービス</th>
												<th style="width: 20%;">ステータス</th>
											</tr>
										</thead>
										<tbody id="item-table-body">											
											@foreach($r_services as $r_service)
											<tr id="r_service_{{$r_service->id}}">
												<td>{{ \Carbon\Carbon::parse($r_service->updated_at)->format('Y年m月d日 H:i')}}</td>
												<td>
													<img src="{{ asset($r_service->logo) }}" class="nitaco-logo"
														width="33px" height="33px" />
														{{$r_service->data_title}}
												</td>
												<td>
													{{$r_service->title}}
												</td>
												<td>
													<div class="display-flex valid">
														<div class="status-circle"></div>
														有効
													</div>
												</td>													
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							@else
							<div class="row">
								資料がございません
							</div>
							@endif
						</div>
					</div>
				</div>

			</section>

		</main><!-- End #main -->
	</div>
</div>
@endsection

@push('scripts')  