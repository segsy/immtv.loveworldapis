
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

                        <!-- Button trigger modal -->


                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add Banner
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('addbanner')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field() }}
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Video/Channel ID</label>
                                                    <input type="text" name="contentID" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Banner title</label>
                                                    <input type="text" name="contentName" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Url</label>
                                                    <input type="text" name="url" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile3">Banner Type</label>


                                                        <select name="bannerType" class="form-control">
                                                            <option>Select Featured</option>

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
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Position</label>
                                                    <input type="text" name="position" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">

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
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>

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

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Video ID/ Channel ID</th>
                                    <th>Banner Title</th>
                                    <th>BannerType</th>
                                    <th>Active</th>
                                    <th>Position</th>
                                    <th>Banner Image</th>
                                    <th>isLive</th>
                                    <th colspan = 2>Actions</th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach($banner as $banners)

                                    <tr>
                                        <td>{{$banners->id}}</td>
                                        <td>{{$banners->contentName}}</td>
                                        <td>{{$banners->bannerType}}</td>
                                        <td>{{$banners->active }}</td>
                                        <td>{{$banners->position}}</td>
                                        <td>{{$banners->filename}}</td>
                                        <td>{{$banners->isLive}}</td>

                                        <td>
                                             <a href="{{route('edit',[$banners->id])}}" class="btn btn-success">Edit</a>


                                        </td>
                                        <td>
                                            <a href="{{route('delete',[ $banners->id])}}" class="btn btn-danger" >
                                                Delete
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                            {!! $banner->links() !!}

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


@include('layouts.footer')


