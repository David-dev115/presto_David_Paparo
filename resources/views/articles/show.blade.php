<x-layout>
    
    <section class="article-show">
        
        <div class="container">
            
            <div class="row align-items-center g-5">
                
       
        {{-- inizio visualizzazione immagini --}}
        <div class="col-12 col-lg-6">
            
            <div class="article-gallery">
                
                @if ($article->images->count() > 0)
                
                <div id="articleCarousel" class="carousel slide">
                    
                    <div class="carousel-inner">
                        
                        @foreach ($article->images as $key => $image)
                        
                        <div class="carousel-item @if ($loop->first) active @endif">
                            
                            <div class="article-image">
                                
                                <img
                                src="{{ $image->getUrl(300, 300) }}"
                                alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}"
                                >
                                
                            </div>
                            
                        </div>
                        
                        @endforeach
                        
                    </div>
                    
                    @if ($article->images->count() > 1)
                    
                    <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#articleCarousel"
                    data-bs-slide="prev"
                    >
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Precedente</span>
                </button>
                
                <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#articleCarousel"
                data-bs-slide="next"
                >
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Successiva</span>
            </button>
            
            @endif
            
        </div>
        
        @else
        
        <div class="article-image">
            
            <img
            src="https://picsum.photos/600/600"
            alt="Immagine segnaposto dell'annuncio {{ $article->title }}"
            >
            
        </div>
        
        @endif
        
    </div>
    
</div>

{{-- fine visualizzazione immagini --}}

{{-- Informazioni --}}
<div class="col-12 col-lg-6">
    
    <div class="article-info">
        
        <span class="article-eyebrow">
            {{ $article->category->name }}
        </span>
        
        <h1 class="article-title">
            {{ $article->title }}
        </h1>
        
        <div class="article-price">
            € {{ $article->price }}
        </div>
        
        <div class="article-divider"></div>
        
        <div class="article-description">
            <h2>Descrizione</h2>
            
            <p>
                {{ $article->description }}
            </p>
        </div>
        
        <div class="article-meta">
            <span>
                Pubblicato il
                {{ $article->created_at->format('d/m/Y') }}
            </span>
        </div>
        
        <div class="article-actions">
            
            <a href="{{ route('articles.index') }}" class="btn btn-back">
                ← Torna agli annunci
            </a>
            
            <a href="{{route('articles.byCategory', $article->category)}}" class="btn btn-cat">
                {{$article->category->name }}
            </a>
            
        </div>
        
    </div>
    
</div>

</div>

</div>

</section>

</x-layout>