@extends('layouts.dashboard')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <!-- /.col -->
            <div class="col-md-8 offset-2">
            <div class="card card-primary card-outline">
                <div class="card-header">
                <h3 class="card-title">Read Mail</h3>

                <div class="card-tools">
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5>{{ $mail->subject }}</h5>
                    <h6>From: {{ $mail->email }}
                    <span class="mailbox-read-time float-right">{{ $mail->created_at }}</span></h6>
                </div>
                <div class="mailbox-read-message">
                    {{$mail->message}}
                </div>
                <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-footer -->
                <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('dashboard.mail') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                </div>
                <form action="{{ route('dashboard.mail.delete', $mail->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                </form>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
  </div>

@endsection