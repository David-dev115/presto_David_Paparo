
<footer class="footer-custom">
    <div class="container">
        
        <div class="row gy-4">
            
            {{-- Brand --}}
            <div class="col-12 col-md-5">
                <img src="/media/logo-blue.png" alt="Presto" class="footer-logo mb-3">
                
                
                <h4 class="text-white">{{ __('ui.footer_tagline') }}</h4>
                
                <p class="footer-description">
                   {{ __('ui.footer_description') }}
                </p>
            </div>
            
            {{-- Links --}}
            <div class="col-6 col-md-3">
                <h5 class="footer-title">{{ __('ui.footer_title') }} </h5>
                
                {{-- <ul class="list-unstyled footer-links">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li><a href="{{route('articles.index')}}">Articoli</a></li>
                    <li><a href="#">Link da assegnare</a></li>
                </ul> --}}
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('homepage') }}">{{ __('ui.footer_home') }}</a></li>
                    <li><a href="{{ route('articles.index') }}">{{ __('ui.footer_articles') }}</a></li>
                    <li><a href="#">Link da assegnare</a></li>
                    
                    @auth
                    @if (!Auth::user()->is_revisor)
                    <li>
                        <a href="{{ route('revisor.become') }}">
                            {{ __('ui.become_revisor') }}
                        </a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
            
            {{-- Social --}}
            <div class="col-6 col-md-4">
                <h5 class="footer-title">{{ __('ui.follow_us') }}</h5>
                
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    
                    <a href="#" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    
                    <a href="#" aria-label="Twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                </div>
            </div>
            
        </div>
        
        <hr class="footer-divider">
        
        <div class="footer-bottom">
            <p class="footer-title">{{ __('ui.footer_credits') }}   </p>
        </div>
        
    </div>
</footer>
