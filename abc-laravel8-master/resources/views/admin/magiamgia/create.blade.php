@extends('layouts.admin')
@section('title','tạo mã giảm giá')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Date picker</h3>
    </div>
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        <label>Tên mã:</label>
          <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
          </div>
      </div>
      <div class="form-group">
        <label>Số lượng</label>
              <input type="number" class="form-control datetimepicker-input" data-target="#reservationdate">

          </div>
      </div>
      <!-- Date and time -->
      <div class="form-group">
        <label>Date and time:</label>
          <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime">
              <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
          </div>
      </div>
      <!-- /.form group -->
      <!-- Date range -->
      <div class="form-group">
        <label>Ngày bắt đầu:</label>

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-clock"></i></span>
            </div>
            <input type="date" name="begin"
          placeholder="dd-mm-yyyy" value=""
          min="1997-01-01" max="2030-12-31">
          </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- Date and time range -->
      <div class="form-group">
        <label>Ngày hết hạn:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-clock"></i></span>
          </div>
          <input type="date" name="begin"
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31">
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

      <!-- Date and time range -->

      <!-- /.form group -->
    </div>
      <div class="card-footer">
        Visit <a href="https://getdatepicker.com/5-4/">tempusdominus </a> for more examples and information about
        the plugin.
      </div>
    <!-- /.card-body -->
  </div>

@endsection
