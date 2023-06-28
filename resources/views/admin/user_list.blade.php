@extends("layouts.admin")

@section('content')
<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<div class="content" style="padding-top: 0.5rem;">
			<div class="col-12">
				<div class="card card-info card-outline">

					<div class="card-body">
						<div class="row">
							<h5>
								User List
								<div style="float: right;">
									<button type="button" class="btn rounded-pill btn-outline-primary" onclick="return window.location.href = `{{route('add_new_user')}}`">
										<span class="tf-icons bx bx-plus-medical"></span>&nbsp; Add New
									</button>
								</div>
							</h5>
							<div id="table-wrapper" class="col-12">
								<table class="table table-bordered" style="width: 100%;" id="item-table">
									<thead>
										<tr>
											<th>Username</th>
											<th>Email</th>
											<th>Phone Number</th>
											<th>Registered Date</th>
											<th style="text-align: center;">Change Profile</th>
										</tr>
									</thead>
									<tbody id="item-table-body">
										@foreach($users as $user)
										<tr id="user_{{ $user->id }}" data-user="{{ $user }}" style="cursor: pointer">
											<td>{{ $user->first_name }} {{$user->last_name}}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->phone_number }}</td>
											<td>{{ \Carbon\Carbon::parse($user->created_at)->format('Y年m月d日 H:i') }}</td>
											<td style="text-align: center;">
												<span><a href="{{ route('show_user_profile', $user->id) }}">
														--<i class="tf-icon bx bx-chevrons-right"></i>
													</a></span>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="card-body">
						<div class="row">
							<h5>Client List</h5>
							<div class="col-12">
								<table class="table table-bordered" style="width: 100%;" id="item-table">
									<thead>
										<tr>
											<th>Username</th>
											<th>Email</th>
											<th>Phone Number</th>
											<th>Registered Date</th>
											<th style="text-align: center;">Change Profile</th>
										</tr>
									</thead>
									<tbody id="item-table-body">
										@foreach($clients as $client)
										<tr id="user_{{ $client->id }}" data-user="{{ $client }}" style="cursor: pointer">
											<td>{{ $client->first_name }} {{$client->last_name}}</td>
											<td>{{ $client->email }}</td>
											<td>{{ $client->phone_number }}</td>
											<td>{{ \Carbon\Carbon::parse($client->created_at)->format('Y年m月d日 H:i') }}</td>
											<td style="text-align: center;">
												<span>
													<a href="{{ route('show_user_profile', $client->id) }}">
														--<i class="tf-icon bx bx-chevrons-right"></i>
													</a>
												</span>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


@endsection

@section("script")
<script>
	const add_new_profile = () => {
		
	}
</script>
@endsection