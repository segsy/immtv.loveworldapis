
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">WatchLive</h4>

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
                                Add Live Event
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Live Event</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('addevent')}}" method="POST">
                                            {{csrf_field() }}
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">StreamID</label>
                                                    <input type="text" name="streamID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">EventName</label>
                                                    <input type="text" name="eventName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">VideoID</label>
                                                    <input type="text" name="eventID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Description</label>
                                                    <textarea class="form-control"  name="description"></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Stream URL</label>
                                                    <input type="url" name="stream_url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Status</label>

                                                        <select name="status" class="form-control ">
                                                            <option>Select status</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">fmsURL</label>
                                                    <input type="url" name="streamerURL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>



                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">BBURL</label>
                                                    <input type="url" name="bbURL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Token</label>
                                                    <input type="text" name="token" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
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
                                    <th>StreamID</th>
                                    <th>EventName</th>
                                    <th>VideoID</th>
                                    <th>Description</th>
                                    <th>Stream URL</th>
                                    <th>Status</th>
                                    <th>fmsURL</th>
                                    <th>BBURL</th>
                                    <th>Token</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach($watchlive as $watchlives)

                                    <tr>
                                        <td>{{$watchlives->streamID}}</td>
                                        <td>{{$watchlives->eventName}}</td>
                                        <td>{{$watchlives->eventID}}</td>
                                        <td>{{$watchlives->description	}}</td>
                                        <td>{{$watchlives->stream_url}}</td>
                                        <td>{{$watchlives->status}}</td>
                                        <td>{{$watchlives->streamURL}}</td>
                                        <td>{{$watchlives->bbURL}}</td>
                                        <td>{{$watchlives->token}}</td>

                                        <td>
                                            <!-- <a href="" class="btn btn-success">Edit</a> -->

                                            <a href="{{route('edit_watchlive',[$watchlives->id])}}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{route('delete_watchlive',[ $watchlives->id])}}" class="btn btn-danger" >
                                                Delete
                                            </a>

                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


@include('layouts.footer')


