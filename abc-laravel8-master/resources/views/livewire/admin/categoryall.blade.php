<div>
    <style>
        .list_sub{
            list-style: none;
        }
    </style>

    <div class="container" style="padding: 30px 0 ;">

        <div class="row">
            <div class="col-md-12">

                <div class="card" style="padding: 5px 0;font-size:large;" >
                    <b > All Category</b>
                    <div style="margin: 10px 0; display:flex; justify-content: space-between;" class="search">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" name="key" class="form-control" placeholder="Từ khóa" aria-describedby="helpId">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                        <a href="{{route('admin_category_add')}}" class="btn btn-success">Add Category</a>
                    </div>




                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Sub Category</th>

                                    <th>Updated_at</th>
                                    <th class='text-right'>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td scope="row">{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>
                                        <ul class="list_sub">
                                            @foreach ($d->subcat as $item)
                                            <li>+ {{$item->name}}</li>
                                            @endforeach

                                        </ul>
                                    </td>

                                    <td>{{$d->updated_at}}</td>

                                    <td class="text-right">
                                        <a name="" id="" class="btn btn-sm btn-primary" href="{{route('admin_category_edit',$d->slug)}}" role="button">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a name="" id="" class="btn btn-sm btn-danger btndelete" wire:click.prevent='deletecat({{$d->id}})' href="" role="button">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$data->appends(Request::all())->links()}}
                </div>
            </div>
        </div>
    </div>












</div>
