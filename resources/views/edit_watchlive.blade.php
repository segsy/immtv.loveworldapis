
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


                                        <form action="{{route('update_watchlive',$watchlive->id)}}" method="POST">
                                            @method('PATCH')
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">StreamID</label>
                                                    <input type="text" name="streamID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$watchlive->streamID}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">EventName</label>
                                                    <input type="text" name="eventName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$watchlive->eventName}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">VideoID</label>
                                                    <input type="text" name="eventID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $watchlive->eventID }}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Description</label>

                                                    <textarea class="form-control"  name="description"> {{$watchlive->description}}</textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Stream URL</label>
                                                    <input type="url" name="stream_url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$watchlive->stream_url}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Status</label>

                                                        <select name="status" class="form-control">
                                                            <option>Select status</option>
                                                            <option value="{{$watchlive->status}}">{{$watchlive->status}}</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">fmsURL</label>
                                                    <input type="url" name="streamerURL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$watchlive->streamerURL}}">

                                                </div>



                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">BBURL</label>
                                                    <input type="url" name="bbURL" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $watchlive->bbURL}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Token</label>
                                                    <input type="text" name="token" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$watchlive->token}}">

                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>




                            <code></code>
                            </p>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


@include('layouts.footer')


