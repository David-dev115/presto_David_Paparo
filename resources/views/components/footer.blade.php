
<footer class="footer-custom">
    <div class="container">

        <div class="row gy-4">

            {{-- Brand --}}
            <div class="col-12 col-md-5">
                <img src="/media/logo-blue.png" alt="Presto" class="footer-logo mb-3">


                <h4 class="text-white">Compra. Vendi. Presto.</h4>

                <p class="footer-description">
                    Dai una seconda vita agli oggetti che non usi più
                    e trova qualcosa di speciale sulla nostra piattaforma.
                </p>
            </div>

            {{-- Links --}}
            <div class="col-6 col-md-3">
                <h5 class="footer-title">Presto</h5>

                <ul class="list-unstyled footer-links">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li><a href="{{route('articles.index')}}">Articoli</a></li>
                    <li><a href="#">Link da assegnare</a></li>
                </ul>
            </div>

            {{-- Social --}}
            <div class="col-6 col-md-4">
                <h5 class="footer-title">Seguici</h5>

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
            <p class="footer-title">Presto è un progetto di David WebDeveloper </p>
        </div>

    </div>
</footer>
