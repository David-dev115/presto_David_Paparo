

<x-layout>
    
    
    <section class="row vh-100 bg-blue d-flex justify-content-center align-items-center">
        <div class="col-12  col-md-6 text-center">
            <h1 class="display-4 mt-5">Registrati</h1>
            
            <form
            class="p-4 bg-grey"
            action='{{route('register')}}'
            method='POST'
            >
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
                
            </div>
            <div class="mb-3 mt-5">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name='name' class="form-control" id="name">
            </div>
            <div class="mb-3 mt-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name='password' class="form-control" id="password">
            </div>
            <div class="mb-3 mt-5">
                <label for="password_confirmation" class="form-label">conferma Password</label>
                <input type="password" name='password_confirmation' class="form-control" id="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
        
    </div>
</section>






</x-layout>
