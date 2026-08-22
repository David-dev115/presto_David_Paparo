
<x-layout>

    <section class="row vh-100 bg-blue d-flex justify-content-center align-items-center">

        <div class="col-12 col-md-6 col-lg-4 text-center">

            <h1 class="display-4 mt-5 form-title">Accedi</h1>

            <form
                class="p-4 p-md-5 login-form"
                action="{{ route('login') }}"
                method="POST"
            >
                @csrf

                <div class="mb-4 text-start">
                    <label for="email" class="form-label">Email</label>

                    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci la tua email">
                </div>

                <div class="mb-4 text-start">
                    <label for="password" class="form-label">Password</label>

                    <input type="password" name="password" class="form-control" id="password" placeholder="Inserisci la tua password">
                </div>

                <button type="submit" class="btn btn-login px-5 text-black">Accedi</button>

            </form>

        </div>

    </section>

</x-layout>
