@extends("layouts.client")

@php
$users = App\Models\User::get();
@endphp

@section('content')
<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">
    <main id="main" class="main">
      <section class="section client-dashboard">
        <!-- 基本機能 -->
        <div class="card-section">
          <div class="row card-section">
            <div class="card info-card sales-card">
              <div class="card-body ">
                <h5 class="card-title">
                  <div class="select-all display-flex">
                    <font>メンバー一覧 </font>
                    <a href="{{route('client_members_new')}}">+ メンバー追加</a>
                  </div>
                </h5>
                <div class="row">
                  <div id="table-wrapper" class="col-12">
                    <table class="table table-bordered" style="width: 100%;" id="item-table">
                      <thead>
                        <tr>
                          <th>名前</th>
                          <th>メールアドレス</th>
                          <th>ステータス</th>
                          <th>権限</th>
                          <th>削除</th>
                        </tr>
                      </thead>

                      <tbody id="item-table-body">
                        @if(count($users)>0)
                        @foreach($users as $user)
                        <tr id={{ "user". $user->id }}>
                          <td>{{$user['first_name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>
                            認証済み
                          </td>
                          <td>{{$user['role']}}</td>
                          @if($user->role=='admin')
                          <td></td>
                          @else
                          <td>削除</td>
                          @endif
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
        </div>
        <!-- End 基本機能 -->
      </section>

    </main><!-- End #main -->
  </div>
</div>
@endsection

@section('script')
<script>
let selected_num = 0;
$("#selected_num").text(selected_num);
</script>
@endsection