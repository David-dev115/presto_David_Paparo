<x-layout>
    
    <section class="py-5" style="background-color: var(--blue); min-height: calc(100vh - 80px);">
        
        <div class="container py-5">
            
            {{-- Titolo pagina --}}
            <div class="text-center mb-5"> 
                
                <span class="d-block mb-2" style="color: var(--orange); font-size: 0.8rem; font-weight: 700; letter-spacing: 3px; text-transform: uppercase;">
                    AREA REVISORE
                </span>
                
                <h1 class="mb-3" style="color: var(--black); font-family: 'Space Grotesk', sans-serif; font-weight: 700;">
                    Annuncio da revisionare
                </h1>
                
                <p class="mb-0" style="color: var(--grey);">
                    Controlla l'annuncio e scegli se accettarlo o rifiutarlo.
                </p>
                
            </div>
            
            @if (session()->has('message'))
            <div class="col-5 alert alert-success text-center shadow rounded w-50 mx-auto mb-4">
                {{ session('message') }}
            </div>
            @endif
            
            @if ($article_to_check)
            
            <div class="row g-5 align-items-center">
                
                {{-- Galleria immagini --}}
                <div class="col-12 col-lg-6">
                    
                    <div class="row g-3">
                        
                        @if ($article_to_check->images->count() > 0)
                        @foreach ($article_to_check->images as $key => $image)
                        
                        <div class="col-12">
                            
                            <div class="card mb-3">
                                
                                <div class="row g-0">
                                    
                                    <div class="col-md-4">
                                        
                                        <img src="{{ $image->getUrl(300, 300) }}"
                                        class="img-fluid rounded-start"
                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                        
                                    </div>
                                    
                                    <div class="col-md-4 ps-3">
                                        
                                        <div class="card-body">
                                            
                                            <h5>Labels</h5>
                                            
                                            @if ($image->labels)
                                            
                                            @foreach ($image->labels as $label)
                                            
                                            <p>{{ $label }}</p>
                                            
                                            @endforeach
                                            
                                            @else
                                            
                                            <p class="fst-italic">No labels</p>
                                            
                                            @endif
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-4">
                                        
                                        <div class="card-body">
                                            
                                            <h5>Ratings</h5>
                                            
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-2">
                                                    
                                                    <div class="text-center mx-auto {{ $image->adult }}">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-10">adult</div>
                                                
                                            </div>
                                            
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-2">
                                                    
                                                    <div class="text-center mx-auto {{ $image->violence }}">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-10">violence</div>
                                                
                                            </div>
                                            
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-2">
                                                    
                                                    <div class="text-center mx-auto {{ $image->spoof }}">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-10">spoof</div>
                                                
                                            </div>
                                            
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-2">
                                                    
                                                    <div class="text-center mx-auto {{ $image->racy }}">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-10">racy</div>
                                                
                                            </div>
                                            
                                            <div class="row justify-content-center">
                                                
                                                <div class="col-2">
                                                    
                                                    <div class="text-center mx-auto {{ $image->medical }}">
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-10">medical</div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        @endforeach
                        
                        {{-- come da US7 --}}
                        
                        @else
                        
                        <div class="col-6">
                            
                            <div class="bg-white overflow-hidden" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);">
                                
                                <img src="https://picsum.photos/500/500?random=1"
                                alt="Immagine segnaposto dell'annuncio {{ $article_to_check->title }}"
                                class="w-100"
                                style="aspect-ratio: 1 / 1; object-fit: cover; display: block;">
                                
                            </div>
                            
                        </div>
                        
                        @endif
                        
                        
                        
                    </div>
                    
                </div>
                
                {{-- Informazioni articolo --}}
                <div class="col-12 col-lg-6">
                    
                    <div class="article-info">
                        
                        <span class="article-eyebrow">
                            {{ $article_to_check->category->name }}
                        </span>
                        
                        <h2 class="article-title">
                            {{ $article_to_check->title }}
                        </h2>
                        
                        <div class="article-price">
                            € {{ $article_to_check->price }}
                        </div>
                        
                        <div class="article-divider"></div>
                        
                        <div class="article-description">
                            
                            <h2>
                                Descrizione
                            </h2>
                            
                            <p>
                                {{ $article_to_check->description }}
                            </p>
                            
                        </div>
                        
                        <div class="article-meta">
                            
                            <span>
                                Pubblicato il {{ $article_to_check->created_at->format('d/m/Y') }}
                            </span>
                            
                        </div>
                        
                        {{-- Azioni revisore --}}
                        <div class="article-actions">
                            
                            {{-- Accetta articolo --}}
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                
                                @csrf
                                @method('PATCH')
                                
                                <button type="submit" class="btn" style="padding: 11px 18px; border-radius: 8px; background-color: var(--orange); border: 2px solid var(--orange); color: var(--black); font-size: 0.85rem; font-weight: 700;">
                                    Accetta annuncio
                                </button>
                                
                            </form>
                            
                            {{-- Rifiuta articolo --}}
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                
                                @csrf
                                @method('PATCH')
                                
                                <button type="submit" class="btn" style="padding: 11px 18px; border-radius: 8px; background-color: transparent; border: 2px solid var(--black); color: var(--black); font-size: 0.85rem; font-weight: 700;">
                                    Rifiuta annuncio
                                </button>
                                
                            </form>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            @else
            
            {{-- Nessun articolo da revisionare --}}
            <div class="text-center py-5">
                
                <div class="bg-white mx-auto p-5" style="max-width: 650px; border-radius: 20px; box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);">
                    
                    <span style="display: block; font-size: 3rem; margin-bottom: 20px;">
                        ✓
                    </span>
                    
                    <h2 style="color: var(--black); font-family: 'Space Grotesk', sans-serif; font-weight: 700;">
                        Nessun articolo da revisionare
                    </h2>
                    
                    <p class="mb-4" style="color: var(--grey);">
                        Al momento non ci sono annunci in attesa di revisione.
                    </p>
                    
                    <a href="{{ route('homepage') }}" class="btn" style="padding: 11px 18px; border-radius: 8px; background-color: var(--orange); border: 2px solid var(--orange); color: var(--black); font-weight: 700;">
                        Torna alla homepage
                    </a>
                    
                </div>
                
            </div>
            
            @endif
            
            
            
        </div>
        
    </section>
    
</x-layout>