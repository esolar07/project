@extends('main')


@section('content')

<div class="about-section pa3 pa5-ns">
    <h1 class="f3 f2-m f1-l"> {{ $title }} </h1>

    <div class="about-description">
        <p class="measure lh-copy">{{ $description }}</p>
        <p class="measure lh-copy">{{ $description_2 }}</p>
    </div>
</div>



@endsection