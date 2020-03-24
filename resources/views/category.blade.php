
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
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


                            <button type="button" class="btn btn-primary" data-toggle="modal" id="createNewProduct" data-target="#exampleModal">
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
                                        <form id="productForm" name="productForm" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="product_id" id="product_id">
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
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputposition">Position</label>
                                                    <input type="text" name="position" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                </div>



                                                <button type="submit" class="btn btn-primary" id="saveBtn">Submit</button>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>




                            <code></code>
                            </p>



                                <table id="datatable" class="table table-bordered table-striped " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Time Created</th>
                                        <th>Position</th>
                                        <th>Urlprefix</th>
                                        <th colspan = 2>Actions</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($categories as $category)

                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                            <td>{{$category->description}}</td>
                                            <td>{{$category->status}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->position}}</td>
                                            <td>{{$category->urlprefix}}</td>
                                            <td>
                                                 <a href="{{route('update_category',$category->id)}}" class="btn btn-success">Edit</a>
                                                <!-- Button trigger modal -->
                                               {{-- <button href="{{route('update_category',$category->id)}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                                    Edit
                                                </button>--}}

                                                {{--  <button href="{{route('update',$category->id)}}" type="button" id="edit-item" data-item-id="1" class="btn btn-success" data-toggle="modal" >
                                                      Edit
                                                  </button>--}}
                                            </td>
                                            <td>
                                                <a href="{{route('delete',[ $category->id])}}" class="btn btn-danger" >
                                                    Delete
                                                </a>


                                                {{--<form action="{{route('delete',[ $category->id])}}" method="post">

                                                    @csrf
                                                    @method('DELETE')

                                                <a href="" class="btn btn-danger" type="submit">Delete</a>
                                                    --}}
                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
                                {!! $categories->links() !!}

                             {{--   @include('edit_category')--}}




                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


@include('layouts.footer')




            <script type="text/javascript">
                $(document).ready(function() {
                    var table = $('#datatable').DataTable();


                    //start edit Record
                    table.on('click', '.edit', function () {
                        $st = $(this).closest('tr');
                        if ($($tr).hasClass('child')) {
                            $tr = $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#title').val(data[1]);
                        $('#description').val(data[2]);
                        $('#thumbnail').val(data[3]);
                        $('#status').val(data[4]);
                        $('#position').val(data[5]);

                        $('#editForm').attr('action', '/update_category/' + data[0]);
                        $('#editModal').modal('show');


                    });
                });


                /* $('.editbtn').on('click', function () {
                 $('studentEditModal').modal('show');
                 $tr = $(this).closest('tr');
                 var data = $st.children("td").map(function () {
                 return $(this).text();
                 }).get();


                 $('#id').val(data[0]);
                 $('#title').val(data[1]);
                 $('#description').val(data[2]);
                 $('#thumbnail').val(data[3]);
                 $('#status').val(data[4]);
                 $('#position').val(data[5]);

                 });
                 $('editFormID').on('submit',function(e){
                 e.preventDefault();
                 var id = $('#id').val();

                 $.ajax({
                 type: "PUT",
                 url: "/update/"+id,
                 data: $('editFormID').serialize(),
                 success: function (response){
                 console.log(response);
                 $('#studentEditModal').modal('hide');
                 alert("Data Updated");
                 // window.location.reload

                 },
                 error: function(error){
                 console.log(error);
                 }
                 });
                 });
                 });*/
            </script>




