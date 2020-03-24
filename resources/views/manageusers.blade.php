
@include('layouts.header')



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Manage Accounts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Manage Accounts</li>
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


                            <code></code>
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap data-table " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Active</th>
                                    <th>Fname</th>
                                    <th>Lname</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>Gender</th>
                                    <th>Group</th>
                                    <th>Profile pic</th>
                                    <th>Datecr</th>
                                    <th colspan = 2>Actions</th>

                                </tr>
                                </thead>


                                <tbody>
                                @foreach($user as $users)

                                    <tr>
                                        <td>{{$users->email}}</td>
                                        <td>{{$users->password}}</td>
                                        <td>{{$users->active}}</td>
                                        <td>{{$users->firstname}}</td>
                                        <td>{{$users->lastname}}</td>
                                        <td>{{$users->phone}}</td>
                                        <td>{{$users->country}}</td>
                                        <td>{{$users->gender}}</td>
                                        <td>{{$users->group}}</td>
                                        <td>{{$users->profile_pic}}</td>
                                        <td>{{$users->date}}</td>
                                        <td>
                                            <!-- <a href="" class="btn btn-success">Edit</a> -->
                                            <button href="{{'categoryitem.edit',$users->id}}" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{'categoryitem.destroy', $users->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="" class="btn btn-danger" type="submit">Delete</a>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>








                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->



            @include('layouts.footer')


            <script type="text/javascript">
                $(function () {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var table = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('categoryitem.index') }}",
                        columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'name', name: 'name'},
                            {data: 'detail', name: 'detail'},
                            {data: 'action', name: 'action', orderable: false, searchable: false},
                        ]
                    });

                    $('#createNewProduct').click(function () {
                        $('#saveBtn').val("create-product");
                        $('#product_id').val('');
                        $('#productForm').trigger("reset");
                        $('#exampleModalLabel').html("Create New Product");
                        $('#exampleModal').modal('show');
                    });

                    $('body').on('click', '.editProduct', function () {
                        var product_id = $(this).data('id');
                        $.get("{{ route('categoryitem.index') }}" +'/' + product_id +'/update', function (data) {
                            $('#exampleModalLabel').html("Edit Product");
                            $('#saveBtn').val("edit-user");
                            $('#exampleModal').modal('show');
                            $('#product_id').val(data.id);
                            $('#name').val(data.name);
                            $('#detail').val(data.detail);
                        })
                    });

                    $('#saveBtn').click(function (e) {
                        e.preventDefault();
                        $(this).html('Sending..');

                        $.ajax({
                            data: $('#productForm').serialize(),
                            url: "{{ route('store') }}",
                            type: "POST",
                            dataType: 'json',
                            success: function (data) {

                                $('#productForm').trigger("reset");
                                $('#ajaxModel').modal('hide');
                                table.draw();

                            },
                            error: function (data) {
                                console.log('Error:', data);
                                $('#saveBtn').html('Save Changes');
                            }
                        });
                    });

                    $('body').on('click', '.deleteProduct', function () {

                        var product_id = $(this).data("id");
                        confirm("Are You sure want to delete !");

                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('store') }}"+'/'+product_id,
                            success: function (data) {
                                table.draw();
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                    });

                });
            </script>


