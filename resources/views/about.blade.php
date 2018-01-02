@extends('main')


@section('content')

<div class="about-section pa3 pa5-ns">
    <h1 class="f3 f2-m f1-l"> {{ $title }} </h1>

    <div class="about-description">
        <p class="measure lh-copy">{{ $description }}</p>
        <p class="measure lh-copy">{{ $description_2 }}</p>
    </div>
</div>


$title = 'About ';
$description = "Hi, I'm Eddie Solar, a web developer from Miami, FL. I have experience coding websites using modern HTML, CSS / Sass, JavaScript / jQuery, PHP, SQL and WordPress I have a passion for expanding my craft, building thing for the web and staying on the bleeding edge.";
$description_2 = 'You can check out some of my work on Github and Codepen';


@endsection