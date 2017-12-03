@extends('main')


@section('content')

<h1> {{ $title }} </h1>
<h5> {{ $group }} </h5>

<ul>

    @foreach( $sections as $section)

        <li> {{ $section }} </li>

    @endforeach

</ul>

@endsection