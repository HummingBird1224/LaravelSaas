@extends("layouts.main")

@php
	$user = Auth::user();
	$categories = App\Models\Category::where('user_id', Auth::id())->get();
	$items = App\Models\Item::where('user_id', Auth::id())->get();
@endphp

@section('content')
<div class="content-wrapper">	
	<div class="container-xxl flex-grow-1 container-p-y">
		<main id="main" class="main">
			<div class="pagetitle">
				<nav>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Yahoo</a></li>
						<li class="breadcrumb-item active">ダッシュボード</li>
					</ol>
				</nav>
			</div><!-- End Page Title -->
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

				<!-- 編集中の口コミ -->
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
                      @if(count($categories)>0)
                        @foreach($categories as $c)
                          <tr id={{ "category". $c->id }}>                       
                            <td>{{$c['created_at']}}</td>
                            <td>{{$c['name']}}</td>
                            <td>{{$c['fall_pro']}}</td>
                            <td style="min-width: 90px;">
                              <span
                                data-category={{ $c }}
                                data-bs-toggle="modal"
                                data-bs-target="#categoryModal">
                                <i class='bx bxs-edit text-primary'></i>
                              </span>
                              <span
                                data-id={{ $c->id }}
                                data-bs-toggle="modal" 
                                data-bs-target="#confirmModal">
                                <i class='bx bxs-trash text-danger'></i>
                              </span>
                            </td>
                          </tr>
                        @endforeach
                      @else 
                        <tr>データなし</tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
						</div>
					</div>
				</div>
				<!-- End 編集中の口コミ -->

        <!-- 投稿済みの口コミ -->
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
                        <th>編集</th>
                      </tr>
                    </thead>

                    <tbody id="item-table-body">
                      @if(count($categories)>0)
                        @foreach($categories as $c)
                          <tr id={{ "category". $c->id }}>                       
                            <td>{{$c['created_at']}}</td>
                            <td>{{$c['name']}}</td>
                            <td>{{$c['fall_pro']}}</td>
                            <td style="min-width: 90px;">
                              <span
                                data-category={{ $c }}
                                data-bs-toggle="modal"
                                data-bs-target="#categoryModal">
                                <i class='bx bxs-edit text-primary'></i>
                              </span>
                              <span
                                data-id={{ $c->id }}
                                data-bs-toggle="modal" 
                                data-bs-target="#confirmModal">
                                <i class='bx bxs-trash text-danger'></i>
                              </span>
                            </td>
                          </tr>
                        @endforeach
                      @else 
                        <tr>データなし</tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
						</div>
					</div>
				</div>
				<!-- End 投稿済みの口コミ -->
			</section>

		</main><!-- End #main -->
	</div>
</div>
@endsection

@push('scripts')  