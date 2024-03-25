@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ URL::asset('style/hw6.css') }}" />
  <script src="https://kit.fontawesome.com/e71f46c45f.js" crossorigin="anonymous"></script>
</head>
<body>
  <form action="/submit" method="post">
    <h2 class="title">Workshop #HTML - FORM</h2>
    <div class="form-container">
      <div class="form-group">
        <label for="name">ชื่อ</i></label>
        <input type="text" name="name" id="name" class="form-control" placeholder="ชื่อของคุณ" required>
      </div>
      <div class="form-group">
        <label for="surname">นามสกุล</i></label>
        <input type="text" name="surname" id="surname" class="form-control" placeholder="นามสกุลของคุณ" required>
      </div>
      <div class="form-group">
        <label for="birthday">วัน/เดือน/ปีเกิด&nbsp&nbsp;<i class="fa-solid fa-calendar-days"></i></label>
        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="วัน/เดือน/ปีเกิดของคุณ" required>
      </div>
      <div class="form-group">
        <label for="age">อายุ</label>
        <input type="number" name="age" id="age" class="form-control" placeholder="อายุของคุณ" required>
      </div>
      <div class="form-group">
        <label for="gender">เพศ</label>
        <input type="radio" name="gender" id="male" value="male" required checked>
        <label for="male">ชาย</label>
        <input type="radio" name="gender" id="female" value="female"  required>
        <label for="female">หญิง</label>
        </div>
        
      <div class="form-group">
        <label for="image">รูป</label>
        <input type="file" name="image" id="image" class="form-control" placeholder="เลือกรูปของคุณ" required>
      </div>
      <div class="form-group">
        <label for="color">สีที่ชอบ</label>
        <select name="music" id="music" class="form-control" required>
          <option value="disabled"disabled selected>-</option>
          <option value="red">สีแดง</option>
          <option value="blue">สีฟ้า</option>
          <option value="green">สีเขียว</option>
          <option value="pink">สีชมพู</option>
          <option value="purple">สีม่วง</option>
        </select>
      </div>
      <div class="form-group">
        <label for="music">แนวเพลงที่ชอบ</label>
        <select name="music" id="music" class="form-control" required>
          <option value="disabled"disabled selected>-</option>
          <option value="rock">เพื่อชีวิต</option>
          <option value="country">ลูกทุ่ง</option>
          <option value="other">อื่นๆ</option>
        </select>
      </div>
      <div class="form-group">
        <label for="Address">ที่อยู่</label>
        <textarea name="Address" id="" cols="24" rows="4" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <input type="checkbox" name="agree" id="agree" required>
        <label for="agree">ยินยอมให้เก็บข้อมูล</label>
      </div>
      <div class="form-group">
        <input type="reset" value="ล้างข้อมูล">
        <input type="submit" value="ส่งข้อมูล">
      </div>
    </div>
  </form>
</body>
</html>
    <!-- /.content -->
@endsection