@extends('layouts.dashboard')
@section('content')
        <!-- Main content -->
        <div class="row">
            <section class="content col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Team</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    #
                                </th>
                                <th style="width: 15%">
                                    Name EN
                                </th>
                                <th style="width: 15%">
                                    Name AR
                                </th>
                                <th style="width: 15%">
                                    Position EN
                                </th>
                                <th style="width: 15%">
                                    Position AR
                                </th>
                                <th style="width: 10%" class="text-center">
                                    Image
                                </th>
                                <th style="width: 25%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $member)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $member->name_en }}
                                    </td>
                                    <td>
                                        {{ $member->name_ar }}
                                    </td>
                                    <td>
                                        {{ $member->position_en }}
                                    </td>
                                    <td>
                                        {{ $member->position_ar }}
                                    </td>

                                    <td class="project-state">
                                        <img src="{{ asset('storage/avatars/'.$member->image) }}" style="width: 100%">
                                    </td>
                                    <td class="project-actions text-right">
                                        <form action="" method="POST">
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
                    <h3>Ad Member</h3>
                  </div>

                  <div class="card-body">
                    <form action="{{ route('dashboard.teams.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}" placeholder="Member name EN" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') }}" placeholder="Mmber name AR" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="position_en" class="form-control" value="{{ old('position_en') }}" placeholder="Position EN" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="position_ar" class="form-control" value="{{ old('position_ar') }}" placeholder="Position AR" required>
                      </div>

                      <div class="form-group">
                        <div class="btn btn-info btn-file">
                          <i class="fas fa-paperclip"></i> Attachment Image
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
