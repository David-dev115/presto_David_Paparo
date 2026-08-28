<x-layout>

    <section class="articles-index">

        <div class="container">

            <header class="articles-index-header">

                <span class="articles-eyebrow">
                    RICERCA
                </span>

                <h1>
                    Risultati per la ricerca
                    <span class="fst-italic">
                        {{ $query }}
                    </span>
                </h1>

            </header>


            <div class="row g-4 articles-grid">

                @forelse ($articles as $article)

                    <div class="col-12 col-md-6 col-lg-4">

                        <x-card :article="$article"></x-card>

                    </div>

                @empty

                    <div class="col-12 articles-empty">

                        <h3>
                            Nessun articolo corrisponde alla tua ricerca
                        </h3>

                    </div>

                @endforelse

            </div>


            <div class="articles-pagination">

                {{ $articles->links() }}

            </div>

        </div>

    </section>

</x-layout>