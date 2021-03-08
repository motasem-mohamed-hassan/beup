@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-md-8">
        <form action="{{ route('dashboard.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">{{ $post->category->name_en }}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" class="form-control" name="title_en" value="{{ $post->title_en }}" placeholder="Title In EN">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" name="title_ar" value="{{ $post->title_ar }}" placeholder="Title In AR">
                  </div>

                  <div class="form-group">
                      <textarea id="compose-textarea" name="body_en" class="form-control" placeholder="Body Content In EN" style="height: 300px">{{ $post->body_en }}</textarea>
                  </div>
                  <div class="form-group">
                      <textarea id="compose-textarea" name="body_ar" class="form-control"  placeholder="Body Content In AR" style="height: 300px">{{ $post->body_ar }}</textarea>
                  </div>
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fas fa-paperclip"></i> Change Image
                      <input type="file" value="{{ $post->image }}" name="image">
                    </div>
                    {{-- <p class="help-block">Max. 32MB</p> --}}
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="float-right">
                    <input type="submit" class="btn btn-success" value="Edit">
                  </div>
                </div>
                <!-- /.card-footer -->
              </div>
        </form>
    </div>
    <div class="col-md-4">
        <img src="{{ asset('storage/avatars/'.$post->image) }}" style="width: 100%">
    </div>

</div>


@endsection




