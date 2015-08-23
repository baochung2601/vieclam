@extends('master')
@section('body')
<div class="row body">
@include('admin.left')
<div class="col-md-6 col-sm-6 col-xs-12 content">
@yield('content')		
</div>
@include('admin.right')
</div>
@stop