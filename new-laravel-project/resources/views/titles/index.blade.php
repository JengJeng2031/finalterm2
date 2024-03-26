@extends('layouts.default')

@section('title', 'Titles')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">SE CAMP</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Titles</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลคำนำหน้าชื่อ (Title)</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ isset($title_id) ? '/titles/' . $title_id->tit_id : '/titles' }}" method="post">
                            @csrf
                            @if(isset($title_id))
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">คำนำหน้าชื่อ</label>
                                    <input type="text" name="tit_name" value="{{ isset($title_id) ? $title_id->tit_name : old('tit_name') }}" class="form-control" id="exampleInputEmail1" placeholder="เช่น นาย นาง นางสาว ฯลฯ">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="tit_is_active" {{ isset($title_id) && $title_id->tit_is_active == 1 ? 'checked' : '' }} class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">ใช้งาน</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">บันทึก</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ผลลัพธ์</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>สถานะการใช้งาน</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($titles as $index => $title)
                                        <tr>
                                            <td>{{ $index + 1 }}.</td>
                                            <td>{{ $title->tit_name }}</td>
                                            <td>{{ $title->tit_is_active ? 'Active' : 'Inactive' }}</td>
                                            <td>
                                                <a href="{{ url('/titles/' . $title->tit_id) }}" class="btn btn-warning">แก้ไข</a>
                                                <form method="post" action="/titles/{{ $title->tit_id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
