<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add Category</h4>
                <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each
                    textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                <form action="{{ route('add_category') }}" method="POST" enctype="multipart/form-data">

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-10">
                            <input class="form-control" name="title" type="text" value="Artisanal kale" id="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Description</label>
                        <div>
                            <textarea required  name="description" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Thumbnail</label>
                        <div class="col-md-10">
                            <input class="form-control" name="thumbnail" type="text" value="image" id="thumbnail">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input">
                            <label class="custom-file-label"> Choose file </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Select</label>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option>Select</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-md-2 col-form-label">Position</label>
                        <div class="col-md-10">
                            <input class="form-control" name="position" type="url" value="" id="position">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary"> Save Data</button>
                </form>


            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->