
@extends('back.layouts.master')
@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li>
            <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li><a href="">Blog</a></li>
        <li class="active">Add new</li>
      </ol>
    </section>
</div>

@stop
