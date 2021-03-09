@extends('layouts.dashboard')
@section('content')
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 40%">
                                Post Title EN
                            </th>
                            <th style="width: 20%">
                                Category name
                            </th>
                            <th style="width: 8%" class="text-center">
                                Post images
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <a>
                                        {{ $post->title_en }}
                                    </a>
                                    <br/>
                                    <small>
                                        Created {{ $post->created_at->format('Y-m-d') }}
                                    </small>
                                </td>
                                <td>
                                    <p>{{ $post->category->name_en }}</p>
                                </td>
                                <td class="project-state">
                                    <img src="{{ asset('storage/avatars/'.$post->image) }}" style="width: 100%">
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ route('dashboard.post.show', $post->id) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <form action="{{ route('dashboard.post.delete', $post->id) }}" method="POST">
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

@endsection
