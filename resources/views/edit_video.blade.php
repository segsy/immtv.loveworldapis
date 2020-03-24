
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

                                    <form action="{{route('updatevideo', [$videos->id])}}" method="POST">

                                        @method('PATCH')
                                        @csrf

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="recommendedFormControlFile3">Channel</label>

                                                    <select name="channel" class="form-control form-control-lg">
                                                        <option>Select</option>
                                                        <option value="{{$videos->channel}}">{{$videos->channel}}</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Ios</label>
                                                <input type="text" name="ios_url" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->ios_url}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">WindowsUrl</label>
                                                <input type="text" name="windowsurl" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->windowsurl}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Default VideoUrl</label>
                                                <input type="text" name="rawUrl" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->rawUrl}}">

                                            </div>
                                            <h4 class="card-title">Filename</h4>
                                            <div class="custom-file">
                                                <input type="file" name="filename" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>

                                            {{--<img src="{{ URL::to('/') }}/uploads/video/{{ $videos->thumbnail }}" class="img-thumbnail" width="100" />
                                            <input type="hidden" name="hidden_image" value="{{ $videos->thumbnail }}" />--}}
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Upload Time</label>
                                                <input type="text" name="uploadtime" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->uploadtime}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Video title</label>
                                                <input type="text" name="Videos_title" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->videos_title}}">

                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputdescription">Description</label>
                                                <textarea class="form-control form-control-lg"  name="description">{{$videos->description}}</textarea>

                                            </div>

                                            <div class="from-group">
                                                <label for="recommendedFormControlFile3">Recommended</label>

                                                    <select name="recommended" class="form-control form-control-lg">
                                                        <option>Select</option>
                                                        <option value="{{$videos->recommended}}">{{$videos->recommended}}</option>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="activeFormControlFile3">Active</label>

                                                    <select name="active" class="form-control form-control-lg">
                                                        <option>Select</option>
                                                        <option value="{{$videos->active}}">{{$videos->active}}</option>
                                                        <option value="0">Inactive</option>
                                                        <option value="1">Active</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile3">isLive</label>

                                                    <select name="isLive" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$videos->isLive}}">{{$videos->isLive}}</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Position</label>
                                                <input type="text" name="position" class="form-control  form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->position}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile3">HideFrom</label>

                                                    <select name="hideFrom" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$videos->hideFrom}}">{{$videos->hideFrom}}</option>
                                                        <option value="all">all</option>
                                                        <option value="mobile">mobile</option>
                                                        <option value="none">none</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile3">Downloadable</label>

                                                    <select name="isDownloadable" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$videos->isDownloadable}}">{{$videos->isDownloadable}}</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtitle1">Email</label>
                                                <input type="text" name="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$videos->email}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile3">IsPublic</label>
                                                <div class="col-md-10">
                                                    <select name="isPublic" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$videos->isPublic}}">{{$videos->isPublic}}</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>

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


