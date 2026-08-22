<x-layout>

    <section class="row vh-100 bg-blue d-flex justify-content-center align-items-center">

        <div class="col-12 col-md-6 col-lg-4 text-center">

            <h1 class="display-4 mt-5 form-title">Registrati</h1>

            <form class="p-4 p-md-5 login-form" action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-4 text-start">
                    <label for="email" class="form-label">Email</label>

                    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>

                <div class="mb-4 text-start">
                    <label for="name" class="form-label">Nome</label>

                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci il tuo nome">
                </div>

                <div class="mb-4 text-start">
                    <label for="password" class="form-label">Password</label>

                    <input type="password" name="password" class="form-control" id="password" placeholder="Inserisci una password">
                </div>

                <div class="mb-4 text-start">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>

                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Conferma la tua password">
                </div>

                <button type="submit" class="btn btn-login px-5 text-black">Registrati</button>

            </form>

        </div>

    </section>

</x-layout>
