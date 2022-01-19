@extends('layouts.admin')

@section('title','Cập nhật người dùng')

@section('content')
    <form action="{{route('admin.usermanagement.update',$user->id)}}" method='post'>
        @csrf @method('PUT')
        <div class="form-group">
          <label for="tenuser">Tên  người dùng</label>
          <input type="text" value="{{$user->name}}" class="form-control" name="name" id="tenuser" aria-describedby="helpId" placeholder="Tên nhóm người dùng">
          @error('ten')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>

        <div class="form-group">
            <label for="trangthai">Email</label>
            <input type="text" value="{{$user->email}}" class="form-control" name="email"  aria-describedby="helpId" placeholder="Email người dùng">
          </div>
          <div class="form-group">
            <label for="password">password</label>
            <input type="text" value="{{$user->password}}" class="form-control" name="password"  aria-describedby="helpId" placeholder="Email người dùng">
          </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
