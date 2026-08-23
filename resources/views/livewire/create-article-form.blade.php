<div>
    {{-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius --}}
    


    <section class="row bg-blue d-flex justify-content-center align-items-center">
        

        <div class="col-12 col-md-6 col-lg-4 text-center mt-5">
            
            <h1 class="display-4 mt-5 form-title">Crea Articolo </h1>
            
            <form  wire:submit='store' class="p-4 p-md-5 login-form my-5">
                
                
                
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input wire:model.live="title" type="text" class="form-control {{--@error('title') in-invalid @enderror--}}" id="title"  >
                    {{-- @error('title')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror --}}
                    <div class="text-warning fs-5">@error('title') {{ $message }} @enderror</div>
                    
                    
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea wire:model.live="description" class="form-control {{--@error('description') in-invalid @enderror--}} "  name="description" id="description" cols="30" rows="10"></textarea>
                    {{-- @error('description')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror --}}
                    <div class="text-warning fs-5" >@error('description') {{ $message }} @enderror</div>
                    
                    
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model.live="price"  type="text" class="form-control {{--@error('price') in-invalid @enderror--}} " id="price">
                    {{-- @error('price') --}}
                    {{-- <p class="fst-italic text-danger">{{ $message }}</p> --}}
                    {{-- @enderror --}}
                    <div class="text-warning fs-5"  >@error('price') {{ $message }} @enderror</div>
                </div>
                
                <div class="mb-3">
                    <select  wire:model="category" id="category"  class="form-control">
                        <option {{--label disabled--}} value="" >Seleziona una categoria</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name}} </option>
                        @endforeach
                    </select>
                    
                    <div class="text-warning fs-5"  >@error('category') {{ $message }} @enderror</div>
                    
                    
                </div>
                
                <button type="submit" class="btn btn-login px-5 text-black">Crea</button>
            </form>
            
            {{-- messaggio di conferma creazione articolo standard --}}
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            
            


            
        </div>
    </section>
</div>


{{-- 

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

</x-layout> --}}
