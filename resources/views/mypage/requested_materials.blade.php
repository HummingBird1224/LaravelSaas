@extends("layouts.main")

@php
	$user = Auth::user();
@endphp

@section('content')
<div class="content-wrapper">	
	<div class="container-xxl flex-grow-1 container-p-y">
		<main id="main" class="main">
			<div class="pagetitle">
				<nav>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Yahoo</a></li>
						<li class="breadcrumb-item active">請求した資料</li>
					</ol>
				</nav>
			</div><!-- End Page Title -->
			<section class="section downloads">
				<!-- 請求した資料 -->
				<div class="row card-section">	
					<div class="card info-card sales-card">
						<div class="card-body ">
              <h5 class="card-title">
                資料がございません
              </h5>	
              <div class="row">
                資料がございません
              </div>
						</div>
					</div>
				</div>
				<!-- End 請求した資料 -->
			</section>

		</main><!-- End #main -->
	</div>
</div>
@endsection

@push('scripts')  