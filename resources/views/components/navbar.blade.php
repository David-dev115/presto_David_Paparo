```html
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        
        <a class="navbar-brand" href="#">
            <img src="/media/logo-blue.png" alt="logo" class="logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            {{-- <ul class="navbar-nav position-absolute start-50 translate-middle-x menu-centrale"> --}}
                <ul class="navbar-nav menu-centrale mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    
                </ul>
                
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            
                            @guest
                            Accedi/Registrati
                            @endguest
                            
                            @auth
                            Benvenuto {{ Auth::user()->name }}
                            @endauth
                            
                        </a>
                        
                        <ul class="dropdown-menu">
                            
                            @guest
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ 'register' }}">Registrati</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ 'login' }}">Accedi</a>
                            </li>
                            @endguest
                            
                            @auth
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('articles.create') }}">
                                    Crea Articoli
                                </a>
                            </li>
                            
                            <li class="dropdown-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        Esci
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
    
    