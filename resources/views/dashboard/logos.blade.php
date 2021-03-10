@extends('layouts.dashboard')
@section('content')

        <!-- Main content -->
        <div class="row">
            <section class="content col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Logos</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    #
                                </th>
                                <th style="width: 20%">
                                    Name
                                </th>
                                <th style="width: 20%">
                                    Words EN
                                </th>
                                <th style="width: 20%">
                                    Words AR
                                </th>

                                <th style="width: 10%" class="text-center">
                                    Image
                                </th>
                                <th style="width: 25%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logos as $logo)
                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        {{ $logo->name }}
                                    </td>
                                    <td>
                                        {{ $logo->words_en }}
                                    </td>
                                    <td>
                                        {{ $logo->words_ar }}
                                    </td>
                                    <td class="project-state">
                                        <img src="{{ asset('storage/logos/'.$logo->image) }}" style="width: 100%">
                                    </td>
                                    <td class="project-actions text-right">
                                        <form action="{{ route('dashboard.logo.delete', $logo->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
              <!-- /.content -->
            <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h3>Add Logo</h3>
                  </div>

                  <div class="card-body">
                    <form action="{{ route('dashboard.logo.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <textarea name="words_en" class="form-control" value="{{ old('words_en') }}" placeholder="Words in EN" required></textarea>
                      </div>
                      <div class="form-group">
                        <textarea name="words_ar" class="form-control" value="{{ old('words_ar') }}" placeholder="Words in AR" required></textarea>
                      </div>
                      <div class="form-group">
                        <div class="btn btn-info btn-file">
                          <i class="fas fa-paperclip"></i> Attachment Logo
                          <input type="file" name="image">
                        </div>
                      </div>
                      <input class="brn btn-success" type="submit" value="Submit">
                    </form>
                  </div>
                </div>
            </div>
        </div>


@endsection
