

{{--@if (Route::currentRouteName() !== '/')--}}
    <div class="pg-header__title">
        <p class="menu__header link dim black b f1 f-headline-ns tc db mb3 mb4-ns" href="{{url('/')}}" title="Home">Eddie Solar</p>
    </div>
    <div class="pg-header__menu">
        <nav class="menu pa3 pa4-ns">
            <div class="menu__items tc pb3">
                <a class="menu__item link gray f6 f5-ns dib mr3" href="{{url('/')}}" title="Home">Home</a>
                <a class="menu__item link gray f6 f5-ns dib mr3" href="{{url('/about')}}" title="About">About</a>
                <a class="menu__item link gray f6 f5-ns dib mr3" href="{{url('/work')}}" title="Work">Projects</a>
                <a class="menu__item link gray f6 f5-ns dib mr3" href="{{url('/speaking')}}" title="Work">Speaking</a>
                <a class="menu__item link gray f6 f5-ns dib mr3" href="{{url('/contact')}}" title="Contact">Contact</a>
            </div>
        </nav>
    </div>
{{--@else--}}

    {{--<nav class="menu menu__home">--}}
        {{--<a class="menu__item" href="{{url('/')}}" title="Home">Home</a>--}}
        {{--<a class="menu__item" href="{{url('/about')}}" title="About">About</a>--}}
        {{--<a class="menu__item" href="{{url('/work')}}" title="Work">Work</a>--}}
        {{--<a class="menu__item" href="{{url('/contact')}}" title="Contact">Contact</a>--}}
    {{--</nav>--}}

{{--@endif--}}


