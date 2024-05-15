<!-- <H1> -->
    <!-- Hello {{$name}} -->
<!-- </H1> -->
<!-- @for($i=0;$i<5;$i++) -->

    <!-- {{ $i }} -->

<!-- @endfor -->

@extends('master')

@section('title')
    Greet
@endsection

@section('content')
Hello{{$name}}
@endsection


