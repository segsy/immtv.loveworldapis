
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
                                <li class="breadcrumb-item active">Edit Channel</li>
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

                            @if ($errors->any())
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


                                        <form action="{{route('update', $channels->id)}}" method="POST" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf


                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Channel</label>
                                                    <input type="text" name="channel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$channels->channel}}">

                                                </div>
                                                <div class="col-md-10">
                                                    <label for="exampleFormControlFile3">Category</label>
                                                    <div class="col-md-10">
                                                        <select name="category" class="form-control">
                                                            <option>Select category</option>
                                                            <option value="{{$channels->category}}">{{ $channels->category }}</option>
                                                            <option>Charity</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <textarea class="form-control"  name="description">{{ $channels->description }}</textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Image</label>
                                                    <input type="file" name="filename" class="form-control-file" id="exampleFormControlFile1" value="{{$channels->filename}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Url</label>
                                                    <input type="url" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$channels->url}}">

                                                </div>
                                                <div class="col-md-11">
                                                    <label for="exampleFormControlFile3">Featured</label>
                                                    <div class="col-md-10">
                                                        <select name="featured" class="form-control">
                                                            <option>Select Featured</option>
                                                            <option value="{{$channels->featured}}">0</option>
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
                                                            <option value="{{ $channels->active }}">{{ $channels->active }}</option>
                                                            <option value="0">Active</option>
                                                            <option value="1">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Position</label>
                                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $channels->position }}">

                                                </div>

                                                <div class="col-md-12">
                                                    <label for="exampleFormControlFile3">Hidden</label>
                                                    <div class="col-md-10">
                                                        <select name="hidden" class="form-control">
                                                            <option>Select</option>
                                                            <option value="{{ $channels->hidden }}">{{$channels->hidden}}</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">ChannelType</label>
                                                    <input type="text" name="channelType" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$channels->channelType}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">USERID</label>
                                                    <input type="text" name="userID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$channels->userID}}">

                                                </div>






                                                <button type="submit" class="btn btn-primary">Submit</button>



                                        </form>




                            <code></code>
                            </p>

                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



@include('layouts.footer')


