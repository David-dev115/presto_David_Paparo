<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        
        <a class="navbar-brand" href="#">
            <img src="/media/logo-blue.png" alt="logo" class="logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">
                    {{ __('ui.home') }}
                    </a>

                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('articles.index')}}">{{ __('ui.articles') }}</a> 
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                
                <li class="nav-item dropdown category-dropdown">
                    <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >
                    {{ __('ui.categories') }}
                </a>
                
                <ul class="dropdown-menu">
                    
                    @foreach ($categories as $category)
                    
                    <li>
                        <a
                        class="dropdown-item"
                        href="{{ route('articles.byCategory', ['category' => $category ]) }}"
                        >
                        {{ $category->name }}
                    </a>
                </li>
                
                @if (!$loop->last)
                <hr class="dropdown-divider">
                @endif
                
                @endforeach
                
            </ul>
        </li>
        
        
        
    </ul>
    
    
    
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        @auth
        @if (Auth::user()->is_revisor)
        
        <li class="nav-item">
            <a class="nav-link position-relative" href="{{ route('revisor.index') }}">
                {{ __('ui.reviewer_area') }}
                
                
                <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
                    {{ \App\Models\Article::toBeRevisedCount() }}
                </span>
            </a>
        </li>
        
        @endif
        @endauth
        
        
        {{-- cambio lingua --}}
        <x-_locale lang="it" />
        <x-_locale lang="uk" />
        <x-_locale lang="es" />
        
        
        {{-- inizio search --}}
        <form action="{{ route('article.search') }}" method="GET" class="d-flex search-form" role="search">
            <input class="form-control search-input" type="search" name="query" placeholder="{{ __('ui.search_placeholder') }}" aria-label="Cerca" required >
            
            <button class="btn search-button" type="submit">
                {{ __('ui.search') }}

            </button>
        </form>
        {{-- fine search --}}
        
        <li class="nav-item dropdown category-dropdown">
            
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                
                @guest
                {{ __('ui.login_register') }}
                @endguest
                
                @auth
                {{ __('ui.welcome') }} {{ Auth::user()->name }}
                @endauth
                
            </a>
            
            <ul class="dropdown-menu">
                
                @guest
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.register') }}</a>
                </li>
                
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('login')  }}">{{ __('ui.login') }}</a>
                </li>
                @endguest
                
                @auth
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('articles.create') }}">
                        {{ __('ui.create_articles') }}
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('articles.myArticles') }}">
                        {{ __('ui.my_articles') }}
                    </a>
                </li>
                
                <li class="dropdown-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">
                            {{ __('ui.logout') }}
                        </button>
                    </form>
                </li>
                @endauth
                
            </ul>
            
        </li>
        
    </ul>
    
</div>
</div>


</nav>

