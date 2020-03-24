
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Channel</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"></h4>
                            <p class="card-title-desc">

                            @if(count($errors) > 0)
                                <div class="alert alert-danger">

                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach

                                    </ul>
                                </div>
                            @endif
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{\Session::get('success')}}</p>
                                </div>
                        @endif

                        <!-- Button trigger modal -->


                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Channel
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Channel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('addchannel')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field() }}
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Channel</label>
                                                    <input type="text" name="channel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="col-md-10">
                                                    <label for="exampleFormControlFile3">Category</label>
                                                    <div class="col-md-10">
                                                        <select name="category" class="form-control">
                                                            <option>Select category</option>
                                                            <option>Caareer</option>
                                                            <option>Charity</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <textarea class="form-control"  name="description"></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Image</label>
                                                    <input type="file" name="filename" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Url</label>
                                                    <input type="url" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="col-md-11">
                                                    <label for="exampleFormControlFile3">Featured</label>
                                                    <div class="col-md-10">
                                                        <select name="featured" class="form-control">
                                                            <option>Select Featured</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlFile3">Active</label>
                                                    <div class="col-md-10">
                                                        <select name="active" class="form-control">
                                                            <option>Select</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Position</label>
                                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="col-md-12">
                                                    <label for="exampleFormControlFile3">Hidden</label>
                                                    <div class="col-md-10">
                                                        <select name="hidden" class="form-control">
                                                            <option>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">ChannelType</label>
                                                    <input type="text" name="channelType" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">USERID</label>
                                                    <input type="text" name="userID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>






                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>




                            <code></code>
                            </p>
                            <div class="responsive">

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        th>Channel</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Featured</th>
                                        <th>Active</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>Total Comments</th>
                                        <th>Total Views</th>
                                        <th>Hidden</th>
                                        <th>ChannelType</th>
                                        <th>UserID</th>
                                        <th colspan = 2>Actions</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($channel as $channels)

                                        <tr>
                                            <td>{{$channels->id}}</td>
                                            <td>{{$channels->channel}}</td>
                                            <td>{{$channels->cat_id}}</td>
                                            <td>{{$channels->description}}</td>
                                            <td>{{$channels->featured   }}</td>
                                            <td>{{$channels->active}}</td>
                                            <td>{{$channels->email}}</td>
                                            <td>{{$channels->position}}</td>
                                            <td>{{$channels->total_comments}}</td>
                                            <td>{{$channels->total_views}}</td>
                                            <td>{{$channels->hidden}}</td>
                                            <td>{{$channels->channelType}}</td>
                                            <td>{{$channels->UserID}}</td>
                                            <td>
                                                <!-- <a href="" class="btn btn-success">Edit</a> -->
                                                <a href="" class="btn btn-success">Push Android</a>
                                                <a href="" class="btn alert-primary">Push IOS</a>
                                                <a href="" class="btn btn-info">Downloadble</a>

                                                <a href="{{route('edit',[$channels->id])}}" class="btn btn-success">Edit</a>

                                                <a href="{{route('delete_channel',[ $channels->id])}}" class="btn btn-danger" >
                                                    Delete
                                                </a>
                                                {{--<form action="{{'destroy', $channels->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </form>--}}

                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                {!! $channel->links() !!}
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



@include('layouts.footer')


