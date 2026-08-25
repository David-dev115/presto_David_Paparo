<x-layout>

    <section class="articles-category">

        <div class="container">

            <header class="articles-category-header">

                <span class="articles-eyebrow">
                    CATEGORIA
                </span>

                <h1>
                    {{ $category->name }}
                </h1>

                <p>
                    Scopri tutti gli annunci disponibili in questa categoria.
                </p>

            </header>


            <div class="row g-4 articles-category-grid">

                @forelse ($articles as $article)

                    <div class="col-12 col-md-6 col-lg-4">
                        <x-card :article="$article"></x-card>
                    </div>

                @empty

                    <div class="col-12 articles-category-empty">

                        <h3>
                            Non ci sono ancora annunci in questa categoria.
                        </h3>

                    </div>

                @endforelse

            </div>

        </div>

    </section>

</x-layout>