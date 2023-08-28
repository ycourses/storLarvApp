@extends('Layout.master')

@section('content')
    <h2>categorys page </h2>

    <H1>categorys {{$id}}  </H1>
    <ul>
        @for($i=1;$i<10;$i++ )
            <li> {{$i}}</li>
        @endfor
    </ul>

@endsection
