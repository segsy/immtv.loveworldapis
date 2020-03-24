@include('layouts/header');


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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Category</li>
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

                            <h4 class="card-title">Textual inputs</h4>
                            <p class="card-title-desc"><code> </code> <code>&lt;input&gt;</code> <code>type</code>.</p>
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
                                Add Category
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('store')}}" method="POST">
                                            {{csrf_field() }}
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label for="exampleInputtitle1">Title</label>
                                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                   <textarea class="form-control"  name="description"></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Thumbnail</label>
                                                    <input type="file" name="thumbnail" class="form-control-file" id="exampleFormControlFile1">
                                                </div>
                                                <div class="col-md-10">
                                                    <label for="exampleFormControlFile3">Status</label>
                                                    <div class="col-md-10">
                                                        <select name="status" class="form-control">
                                                            <option>Select</option>
                                                            <option>0</option>
                                                            <option>1</option>
                                                        </select>
                                                    </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="exampleInputposition">Position</label>
                                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>


                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>








                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->








                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    @include('layouts/footer');