
@extends('back.layouts.master')
@section('contents')
<section class="content-header">
  <h1>
    Show Post
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li><a href="{{route('post.index')}}">Post</a></li>
    <li class="active">Edit Post</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <table class="table table-bordered table-condesed">
        <thead>
            <tr>
            
              <th>Title</th>
              <th>Description</th>
            </tr>
        </thead>
        <tbody>
        
              <td>{{ $post->title}}</td>
              <td>{{ $post->description}}</td>
            
        </tbody>
      </table>
  <!-- ./row -->
</section>

@stop
