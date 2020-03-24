
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Category</h4>

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

                            <h4 class="card-title">Note that the fields: windowurl,default url & ios url should be in this form: https://cdn.internetmultimediaonline.org/041F21/immtv/myvideo.mp4.m3u8 </h4>
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
                                Add Video
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Video</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('uploadvideos')}}" method="POST">
                                            {{csrf_field() }}
                                            <div class="modal-body">


                                                <div class="form-group">

                                                    <label for="recommendedFormControlFile3">Channel</label>

                                                    <select name="channel" class="form-control form-control-lg">
                                                        @if(isset($channel))
                                                            @foreach($channel as $channels)
                                                            <option>Select</option>
                                                            <option value="{{$channels->id}}">{{$channels->channel}}</option>
                                                            @endforeach
                                                        @endif
                                                        </select>


                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Ios</label>
                                                    <input type="text" name="ios_url" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">WindowsUrl</label>
                                                    <input type="text" name="windowsurl" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Default VideoUrl</label>
                                                    <input type="text" name="windowsurl" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <h4 class="card-title">Filename</h4>
                                                <div class="custom-file">
                                                    <input type="file" name="filename" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Upload Time:{{ time() }} </label>
                                                    <input type="text" name="uploadtime" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Video title</label>
                                                    <input type="text" name="Videos_title" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputdescription">Description</label>
                                                    <textarea class="form-control form-control-lg"  name="description"></textarea>

                                                </div>

                                                <div class="form-group">
                                                    <label for="recommendedFormControlFile3">Recommended</label>

                                                        <select name="recommended" class="form-control form-control-lg">
                                                            <option>Select</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="activeFormControlFile3">Active</label>

                                                        <select name="active" class="form-control form-control-lg">
                                                            <option>Select</option>
                                                            <option value="0">Inactive</option>
                                                            <option value="1">Active</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">isLive</label>

                                                        <select name="isLive" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Position</label>
                                                    <input type="text" name="position" class="form-control  form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">HideFrom</label>

                                                        <select name="hideFrom" class="form-control">
                                                            <option>Select</option>
                                                            <option value="all">all</option>
                                                            <option value="all">Web</option>
                                                            <option value="mobile">mobile</option>
                                                            <option value="none">none</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Downloadable</label>

                                                        <select name="isDownloadable" class="form-control">
                                                            <option>Select</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Email</label>
                                                    <input type="text" name="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">IsPublic</label>
                                                    <select name="isPublic" class="form-control">
                                                            <option>Select</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
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

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Video ID</th>
                                    <th>Channel</th>
                                    <th>Video Title</th>
                                    <th>Description</th>
                                    <th>Upload Time</th>
                                    <th>Active</th>
                                    <th colspan = 2>Actions</th>

                                </tr>
                                </thead>


                                <tbody>


                                @foreach($video as $videos)

                                    <tr>
                                        <td>{{$videos->id}}</td>
                                        <td>{{$videos->channel}}</td>
                                        <td>{{$videos->videos_title}}</td>
                                        <td>{{$videos->description}}</td>
                                        <td>{{$videos->uploadtime}}</td>
                                        <td>{{$videos->isPublic}}</td>
                                        <td>
                                            <!-- <a href="" class="btn btn-success">Edit</a> -->
                                             <a href="" class="btn btn-success">Push Android</a>
                                             <a href="" class="btn btn-success">Push IOS</a>
                                             <a href="" class="btn btn-success">Downloadble</a>
                                            {{--<button href="{{'update',$video->id}}" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                Edit
                                            </button>--}}
                                            <a href="{{route('editvideo',[$videos->id])}}" class="btn btn-success">Edit</a>

                                        </td>
                                        <td>

                                            <a href="{{route('delete_video',[ $videos->id])}}" class="btn btn-danger" >
                                                Delete
                                            </a>
                                            {{--<form action="{{'delete_video', [$video->id]}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </form>--}}
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                           {!! $video->links() !!}

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


@include('layouts.footer')


