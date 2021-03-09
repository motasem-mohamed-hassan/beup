@extends('layouts.dashboard')
@section('content')


<div class="col-md-9">
    <form action="{{ route('dashboard.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">New Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <input type="text" class="form-control" name="title_en" placeholder="Title In EN">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="title_ar" placeholder="Title In AR">
              </div>

              <div class="form-group">
                  <textarea id="compose-textarea" name="body_en" class="form-control" placeholder="Body Content In EN" style="height: 300px"></textarea>
              </div>
              <div class="form-group">
                  <textarea id="compose-textarea" name="body_ar" class="form-control"  placeholder="Body Content In AR" style="height: 300px"></textarea>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="link" placeholder="project link">
              </div>

              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fas fa-paperclip"></i> Attachment Image
                  <input type="file" name="image">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="float-right">
                <input type="text" name="category_id" value="{{ $category_id }}" hidden>
                <input type="submit" class="btn btn-success" value="Submit">
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
    </form>
  </div>


@endsection




