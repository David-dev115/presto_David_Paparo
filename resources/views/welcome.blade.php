
<x-layout>
    
    
    
    <div class="hero">
        
        
        
        <div class="hero-content text-center">
            
            {{-- conferma richiesta per diventare revisore --}}
            @if (session()->has('message'))
            <div class="col-5 alert alert-success text-center shadow rounded w-50 mx-auto">
                {{ session('message') }}
            </div>
            @endif
            
            @if (session()->has('errorMessage'))
            <div class="col-5 alert alert-danger text-center shadow rounded w-50 mx-auto mb-4">
                {{ session('errorMessage') }}
            </div>
            @endif
            
            
            <span class="hero-eyebrow">
                {{ __('ui.marketplace') }}
            </span>
            
            <h1>
                Presto<span>.</span>
            </h1>
            
            <p class="hero-subtitle">
               {{ __('ui.hero_subtitle') }}
            </p>
            
            <p class="hero-description">
              {{ __('ui.hero_description') }}
            </p>
            
            <a href="{{ route('articles.create') }}" class="hero-button">
                {{ __('ui.insert_ad') }}
                <i class="bi bi-arrow-right"></i>
            </a>
            
        </div>
        
    </div>
    
    <section class="latest-articles">
        
        <div class="container">
            
            <div class="latest-articles-header">
                <span>{{ __('ui.latest_ads') }} </span>
                
                <h2>
                    {{ __('ui.discover_new') }}
                </h2>
                
                <p>
                    {{ __('ui.latest_items') }}
                </p>
            </div>
            
            <div class="row g-4">
                @forelse ($articles as $article)
                
                <div class="col-12 col-md-6 col-lg-4">
                    <x-card :article="$article"></x-card>
                </div>
                
                @empty
                
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.no_articles') }}
                    </h3>
                </div>
                
                @endforelse
            </div>
            
        </div>
        
    </section>
    
</x-layout>