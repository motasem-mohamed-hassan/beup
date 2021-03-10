@extends('layouts.dashboard')
@section('content')

    <div class="container py-3">
        <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="" id="updateForm" method="">
                @csrf

                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" id="editName_en" name="name_en" class="form-control" value="Category Name in EN">
                  </div>
                  <div class="form-group">
                    <input type="text" id="editName_ar" name="name_ar" class="form-control" value="Category NAme in AR">
                  </div>
                </div>

                <div class="modal-footer">
                    <input type="text" name="id" id="currentid" class="form-control" value="" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submitToUpdate" class="btn btn-primary" data-dismiss="modal">Update</button>
                </div>
              </div>
              </form>
          </div>
        </div>

      <div class="row">
        <div class="col-md-8">

          <div class="card">
            <div class="card-header">
              <h3>Categories</h3>
            </div>
            <div class="card-body">
              <ul class="list-group" id="myTable">
                @foreach ($categories as $category)
                  <li class="list-group-item">
                    <div class="d-flex justify-content-between category_name{{ $category->id }}">
                      {{ $category->name_en }} -- {{ $category->name_ar }}
                        <form action="#" method="POST">
                            <div class="button-group d-flex">
                                <button type="button"
                                    category_name_en="{{ $category->name_en }}"
                                    category_name_ar="{{ $category->name_ar }}"
                                    category_id="{{ $category->id }}"
                                    class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">Edit</button>

                                @csrf
                                <button type="submit" category_id="{{ $category->id }}" class="delete_btn btn btn-sm ml-1 btn-danger">Delete</button>
                                <a class="btn btn-secondary" href="{{ route('dashboard.post.create', $category->id) }}">Add Post</a>
                            </div>
                        </form>
                    </div>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <!-- create -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3>Add New Category</h3>
            </div>

            <div class="card-body">
              <form action="" method="" id="createForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="name_en" id="name_en" class="form-control" value="{{ old('name_en') }}" placeholder="Name in EN" required>
                </div>
                <div class="form-group">
                  <input type="text" name="name_ar" id="name_ar" class="form-control" value="{{ old('name_ar') }}" placeholder="Nam in AR" required>
                </div>

                <div class="form-group">
                  <button  id="submitToCreate" class="btn btn-primary">انشاء</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

    @section('scripts')
    <script>
              //store data
            $(document).on('click', '#submitToCreate', function(e){
                e.preventDefault();

                var formData = new FormData($('#createForm')[0]);

                $.ajax({
                    type: "post",
                    url: "{{ route('dashboard.categories.store') }}",
                    data: formData,

                    processData: false,
                    contentType: false,
                    cache: false,


                    success: function (response) {
                    var id      = response.data.id;
                    var name_en    = response.data.name_en;
                    var name_ar     = response.data.name_ar;

                    $('#myTable').append(
                        `<li class="list-group-item">
                        <div class="d-flex justify-content-between category_name${id}">
                            ${name_en} -- ${name_ar}
                            <form action="#" method="POST">
                                <div class="button-group d-flex">
                                    <button type="button"
                                        category_name_en="${name_en}"
                                        category_name_ar="${name_ar}"
                                        category_id="${id}"
                                        class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">Edit</button>

                                    @csrf
                                    <button type="submit" category_id="${id}" class="delete_btn btn btn-sm ml-1 btn-danger">Delete</button>
                                    <a class="btn btn-secondary" href="post/create/${id}">Add Post</a>
                                </div>
                            </form>
                        </div>
                        </li>`
                    );
                    // cleare input data
                    $('#name_en').val('');
                    $('#name_ar').val('');


                    //success message
                    toastr.success(response.msg);

                    }
                });
            });

        // update data
        //     press edit
            $(document).on('click', '.editBtn', function(e){
                e.preventDefault();

                var category_id = $(this).attr('category_id');
                var category_name_en = $(this).attr('category_name_en');
                var category_name_ar = $(this).attr('category_name_ar');

                $('#editName_en').val(category_name_en);
                $('#editName_ar').val(category_name_ar);
                $('#currentid').val(category_id);


                //store update
                $(document).on('click', '#submitToUpdate', function(e){
                e.preventDefault();

                    var formData = new FormData($('#updateForm')[0]);

                    $.ajax({
                        type:   "post",
                        url:    "{{ route('dashboard.categories.update') }}",
                        data:   formData,

                        processData: false,
                        contentType: false,
                        cache: false,

                        success: function (data) {

                        location.reload();
                        //success message
                        toastr.success(data.msg);
                        },


                    });

                });

            });



            //delete
            $(document).on('click', '.delete_btn', function(e){
                e.preventDefault();

                var category_id = $(this).attr('category_id');

                $.ajax({
                    type: "delete",
                    url: "{{ route('dashboard.categories.delete') }}",
                    data: {
                      '_token': "{{ csrf_token() }}",
                      'id'    : category_id
                    },

                    success: function (response) {

                        if(response.status == 'true'){
                            location.reload();
                            toastr.success(response.msg);
                        }
                    },
                });

            });

    </script>
    @endsection

