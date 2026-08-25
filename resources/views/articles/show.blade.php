<x-layout>

    <section class="article-show">

        <div class="container">

            <div class="row align-items-center g-5">

                {{-- Immagini --}}
                <div class="col-12 col-lg-6">

                    <div class="article-gallery">

                        <div class="article-image">
                            <img
                                src="https://picsum.photos/600/600"
                                alt="Immagine dell'annuncio {{ $article->title }}"
                            >
                        </div>

                        <div class="article-gallery-dots">
                            <span class="active"></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                </div>


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

                            <a href="{{-- route('category', $article->category) --}}" class="btn btn-cat">
                                {{--$article->category->name --}}
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>