
<div class="card card-w" style="width: 18rem;">

    <img
        src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
        class="card-img-top"
        alt="immagine articolo"
    >

    <div class="card-body">

        <h4 class="card-title">
            {{ $article->title }}
        </h4>

        <h6 class="card-subtitle">
            {{ $article->price }}
        </h6>

        <div class="d-flex justify-content-evenly align-items-center mt-5">

            <a
                href="{{ route('articles.show', compact('article')) }}"
                class="btn btn-det"
            >
                {{ __('ui.details') }}
            </a>

            <a
                href="{{ route('articles.byCategory', $article->category) }}"
                class="btn btn-cat"
            >
                {{ __('ui.category') }}
            </a>

        </div>

    </div>

</div>