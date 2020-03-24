





@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
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

                       {{-- <!-- Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>--}}
                                        <form  action="{{route('update_category', [$category->id])}}" method="POST" enctype="multipart/form-data">
                                            @method('PATCH')
                                            @csrf


                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Title</label>
                                                    <input type="text" name="title" class="form-control"  aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <textarea class="form-control"  name="description" >{{$category->description}}</textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Thumbnail</label>
                                                    <input type="file" name="thumbnail" class="form-control-file">
                                                </div>
                                                <div class="col-md-10">
                                                    <label for="exampleFormControlFile3">Status</label>
                                                    <div class="col-md-10">
                                                        <select name="status" class="form-control" >
                                                            <option>Select</option>
                                                            <option value="{{$category->status}}">{{$category->status}}</option>
                                                            <option value="0"></option>
                                                            <option value="1"></option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputposition">Position</label>
                                                    <input type="text" name="position" class="form-control"  aria-describedby="emailHelp" value="{{$category->position}}">

                                                </div>



                                                <button type="submit" class="btn btn-primary" id="saveBtn">Submit</button>

                                            </div>
                                            {{--<div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>--}}
                                        </form>
                                   {{-- </div>
                                </div>
                            </div>--}}



                            <code></code>
                            </p>





                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


            @include('layouts.footer')




