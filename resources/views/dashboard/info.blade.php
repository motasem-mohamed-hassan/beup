@extends('layouts.dashboard')
@section('content')
<div class="row">
    <div class="col-md-6 offset-2">
        <form action="{{ route('dashboard.info.update') }}" method="post">
            @csrf
            @method('put')

            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Input masks</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <div class="input-group col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $info->phone }}" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group col-md-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $info->email }}" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Location EN</label>
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $info->location_en }}" name="location_en">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Location AR</label>
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $info->location_ar }}" name="location_ar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>WhatsApp Link</label>
                        <div class="input-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-whatsapp""></i></span>
                            </div>
                            <input type="text" class="form-control" value="{{ $info->whatsapp_link }}" name="whatsapp_link">
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

