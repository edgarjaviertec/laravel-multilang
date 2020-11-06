@php
    $current_language =  App::getLocale();
    $available_languages = \App\Models\Language::getAvailableLanguages();
@endphp
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('blog.home') }}">{{__('Laravel Multi-Language')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-white" href="{{route('blog.home')}}">{{__('Homepage')}}</a>
                <a class="nav-item nav-link text-white" href="{{route('page.contact_us')}}">{{__('Contact Us')}}</a>
                <div class="nav-item dropdown">
                    @foreach($available_languages as $language)
                        @if($language->locale == $current_language)
                            <a class="nav-link dropdown-toggle text-white"
                               href="#"
                               id="dropdown04"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">{{ strtoupper($language->locale) }}</a>
                        @endif
                    @endforeach
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown04">
                        @foreach($available_languages  as $language)
                            @if($language->locale  != $current_language)
                                <a class="dropdown-item"
                                   href="{{ get_language_switcher_url( $language->locale ) }}">{{ strtoupper($language->locale) }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>