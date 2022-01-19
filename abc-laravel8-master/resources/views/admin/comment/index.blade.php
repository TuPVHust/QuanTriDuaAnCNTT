@extends('layouts.admin')
@section('title','quản lý comment')
@section('content')


<table class="table">
    <thead>
        <tr>
            <th>Nội dung </th>
            <th>Xếp hạng</th>
            <th>Sản phẩm</th>
            {{-- <th>tên ngu</th>
            <th>ID</th> --}}
            <th class='text-right'>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td scope="row">{{$d->rating}}</td>
            <td>{{$d->comment}}</td>
            <td>{{$d->product_id}}</td>
            <td class="text-right1">
                <a name="" id="" class="btn btn-sm btn-primary" href="{{route('admin.comment.edit', $d->id)}}" role="button"><i class="fa fa-edit"></i></a>
                <a name="" id="" class="btn btn-sm btn-danger btndelete" href="{{route('admin.comment.destroy',$d->id)}}" role="button"><i class="fa fa-trash"></i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$data->appends(Request::all())->links()}}

<form id='formdelete' action="" method="post">
    @csrf @method('DELETE')
</form>
@endsection

@section('js')
<script>
    $(".btndelete").click(function(ev){
        ev.preventDefault();
        let _href=$(this).attr('href');
        $("form#formdelete").attr('action',_href);
        if (confirm('Bạn muốn xóa bản ghi này không?'))
        {
            $("form#formdelete").submit();
        }
    });
</script>
@endsection
