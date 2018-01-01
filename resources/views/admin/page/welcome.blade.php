@extends('admin.layout.master')
@section('title', 'Admin')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Chào mừng bạn {{$user->username}}</b>
                      </div>
                      <div class="panel-body">
                      
                      <div class="col-md-4">
                        <img src="adminAssets/img/photos/{{ Auth::user()->image }}" height="200px" style="margin-top: 50px !important; border-radius: 100%">
                      </div>
                      <div class="col-md-8">
                        <table class="table">
                        <h2 class="text-center">Thông tin cá nhân</h2>
                        <tbody>
                          <tr>
                            <td>Họ và tên</td>
                            <td>{{ Auth::user()->fullname }}</td>
                          </tr>
                          <tr>
                            <td>Ngày sinh</td>
                            <td>{{ date('d/m/Y', strtotime(Auth::user()->birthdate)) }}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                          </tr>
                          <tr>
                            <td>Địa chỉ</td>
                            <td>{{ Auth::user()->address }}</td>
                          </tr>
                          <tr>
                            <td>Số điện thoại</td>
                            <td>{{ Auth::user()->phone }}</td>
                          </tr>
                          
                        </tbody>
                      </table>
                      </div>
                      
                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection