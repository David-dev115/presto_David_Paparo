
<x-layout>
    
    <div class="hero">
        
        
        
        <div class="hero-content text-center">
            
            @if (session()->has('errorMessage'))
            <div class="col-5 alert alert-danger text-center shadow rounded w-50 mx-auto mb-4">
                {{ session('errorMessage') }}
            </div>
            @endif
            
            
            <span class="hero-eyebrow">
                IL TUO MARKETPLACE
            </span>
            
            <h1>
                Presto<span>.</span>
            </h1>
            
            <p class="hero-subtitle">
                Dai una seconda vita a ciò che non usi più.
            </p>
            
            <p class="hero-description">
                Compra, vendi e trova qualcosa di speciale.
            </p>
            
            <a href="{{ route('articles.create') }}" class="hero-button">
                Inserisci annuncio
                <i class="bi bi-arrow-right"></i>
            </a>
            
        </div>
        
    </div>
    
    <section class="latest-articles">
        
        <div class="container">
            
            <div class="latest-articles-header">
                <span>ULTIMI ANNUNCI</span>
                
                <h2>
                    Scopri cosa c'è di nuovo.
                </h2>
                
                <p>
                    Gli ultimi oggetti inseriti su Presto.
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
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
                
                @endforelse
            </div>
            
        </div>
        
    </section>
    
</x-layout>