@extends('layout.frontend')
<?php $title='Demo2 Page';?>
@section('content')
<h1>This is demo2</h1>
    <p id="demo">We are in demo2</p>
@endsection

@section('js')
<script type="module" src="{{asset('js/project/demo2.js')}}"></script>
@endsection
