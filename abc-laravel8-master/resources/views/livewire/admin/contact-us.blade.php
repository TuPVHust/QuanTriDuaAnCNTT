<div>

    <div class="container" style="padding: 30px 0 ;">

        <div class="row">
            <div class="col-md-12">
                <div class="card" style="padding: 5px 0;font-size:large;" >
                    <b > All contact</b>
                    <div style="margin: 10px 0; display:flex; justify-content: space-between;" class="search">
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" name="key" class="form-control" placeholder="Từ khóa" aria-describedby="helpId">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                    </div>




                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Comment</th>

                                    <th>Created_at</th>
                                    <th class='text-right'>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td scope="row">{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->email}}</td>

                                    <td>{{$d->phone}}</td>
                                    <td>{{$d->comment}}</td>

                                    <td>{{$d->created_at}}</td>

                                    <td class="text-right">
                                        <a name="" id="" class="btn btn-sm btn-primary" href="#" role="button">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a name="" id="" class="btn btn-sm btn-danger btndelete" href="" role="button">
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
