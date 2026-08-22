

<x-layout>


    <section class="row vh-100 bg-blue d-flex justify-content-center align-items-center">
        <div class="col-12  col-md-6 text-center">
            <h1 class="display-4 mt-5">Accedi</h1>

            <form
            class="p-4 bg-grey"
            action='{{route('login')}}'
            method='POST'
            >
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="mb-3 mt-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>

    </div>
</section>






</x-layout>
