@extends('layout.frontend')

@section('content')
<h1>This is demo</h1>
<p>{{config('app.url')}}</p>
   @foreach ($content as $content)
    <p>Name: {{$content['name']}}<br>Number:
        @foreach ($content['phones'] as $phone)
            {{$phone['number']}},
        @endforeach
    </p>
   @endforeach
@endsection
@section('js')
<script type="module" src="{{asset('public/js/project/demo.js')}}"></script>
@endsection
