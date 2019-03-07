@extends('back.layouts.master')

@section('contents')

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="pull-left">
                <a id="add-button" title="Add New" class="btn btn-success" href="{{route('post.create')}}"><i class="fa fa-plus-circle"></i> Add New</a>
                </div>
                <div class="pull-right">
                    <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="#">
                        <div class="input-group">
                            <input type="hidden" name="search">
                            <input type="text" name="keywords" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search..." value="">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table class="table table-bordered table-condesed">
              <thead>
                  <tr>
                    <th>Action</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Date</th>
                  </tr>
              </thead>
              <tbody>


                @forelse($posts as $post)
                  <tr>
                    <td width="70">
                    <a title="Edit" class="btn btn-xs btn-default edit-row" 
                    href="{{route('post.edit', $post -> id)}}">
                            <i class="fa fa-edit"></i>
                        </a>
                      <form action="{{route('post.destroy',$post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete" class="btn btn-xs btn-danger delete-row">
                                                  <i class="fa fa-times"></i>
                        </button>
                      </form>
                      
                    </td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->description}}</td>
                    <td>Nafisha Banu</td>
                    <td>{{ $post->category->title}}</td>
                    <td><abbr title="{{$post->created_at}}">{{$post->created_at}} </abbr>| <span class="label label-info">Schedule</span></td>
                  </tr>
                  @empty
                <tr>
                  <td colspan="6">
                    <p class="text-info text-center">No records found</p>
                  </td>
                </tr>                      
                  @endforelse

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-left">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
        </div>
        <!-- /.box -->
      </div>
    </div>
  <!-- ./row -->
</section>

@endsection