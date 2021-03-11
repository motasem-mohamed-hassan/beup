@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('dashboard.about.update') }}" method="post">
            @csrf
            @method('put')

            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">About section</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="offset-2">vieo link</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->video }}" name="video">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Head title EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->head_title_en }}" name="head_title_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Head title AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->head_title_ar }}" name="head_title_ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Head description EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="head_description_en">{{ $about->head_description_en }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Head description AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="head_description_ar">{{ $about->head_description_ar }}</textarea>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label class="offset-2">Body title 1 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_1_en }}" name="body_title_1_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Body title 1 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_1_ar }}" name="body_title_1_ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Body description 1 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" value="" name="body_description_1_en">{{ $about->body_description_1_en }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">Body description 1 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" value="" name="body_description_1_ar">{{ $about->body_description_1_ar }}</textarea>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label class="offset-2">body title 2 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_2_en }}" name="body_title_2_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body title 2 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_2_ar }}" name="body_title_2_ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body description 2 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="body_description_2_en">{{ $about->body_description_2_en }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body description 2 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="body_description_2_ar">{{ $about->body_description_2_ar }}</textarea>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <label class="offset-2">body title 3 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_3_en }}" name="body_title_3_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body title 3 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <input type="text" class="form-control" value="{{ $about->body_title_3_ar }}" name="body_title_3_ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body description 3 EN</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="body_description_3_en">{{ $about->body_description_3_en }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="offset-2">body description 3 AR</label>
                        <div class="input-group col-md-10 offset-2">
                            <textarea rows="5" type="text" class="form-control" name="body_description_3_ar">{{ $about->body_description_3_ar }}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>

@endsection

