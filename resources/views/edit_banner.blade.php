
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Manage Banners</h4>

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

                                        <form action="{{route('update',$banners->id )}}" method="POST" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Video/Channel ID</label>
                                                    <input type="text" name="contentID" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$banners->contentID}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Banner title</label>
                                                    <input type="text" name="contentName" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$banners->contentName}}">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Banner Type</label>


                                                    <select name="bannerType" class="form-control">
                                                        <option>Select Featured</option>
                                                        <option value="{{$banners->bannerType}}">{{$banners->bannerType}}</option>

                                                        <option value="channels">channels</option>
                                                        <option value="category">Category</option>
                                                        <option value="tunes">tunes</option>
                                                        <option value="tunes_album">tunes_album</option>
                                                        <option value="tunes_artist">tunes_artist</option>
                                                        <option value="tunes_track">tunes_track</option>
                                                        <option value="tunes_radio_channel">tunes_radio_channel</option>
                                                        <option value="video">video</option>

                                                        <!--<option>Channels</option>
                                                        <option>Tunes</option> -->

                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Active</label>

                                                    <select name="active" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$banners->active}}">{{$banners->active}}</option>
                                                        <option value="0">Active</option>
                                                        <option value="1">Inactive</option>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Position</label>
                                                    <input type="text" name="position" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$banners->position}}">

                                                </div>


                                                <h4 class="card-title">Banner Image</h4>
                                                <div class="custom-file">
                                                    <input type="file" name="filename" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">isLive</label>

                                                    <select name="isLive" class="form-control">
                                                        <option>Select</option>
                                                        <option value="{{$banners->isLive}}">{{$banners->isLive}}</option>
                                                        <option value="0">No</option>
                                                        <option value="1">Yes</option>
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


