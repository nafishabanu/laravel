
@extends('back.layouts.master')
@section('contents')
<section class="content-header">
  <h1>
    Update Category
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  <li><a href="{{route('category.index')}}">Category</a></li>
    <li class="active">Update Category</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-xs-9">
          <div class="box">
                          <!-- form start -->
          <form role="form" action="{{route('category.update',$category->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="box-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{$category->title}}" placeholder="Enter Title here" id="title" class="form-control">
                  </div>
                  

                <div class="box-footer">
                  <button class="btn btn-primary" type="submit">Update</button>
                  <button class="btn btn-primary" type="submit">Cancel</button>
                </div>
              </form>
            </div>
      </div>
      
    </div>
  <!-- ./row -->
</section>

@stop
