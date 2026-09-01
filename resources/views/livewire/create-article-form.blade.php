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
                    <label for="price" class="form-label">Prezzo (€)</label>
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
                
                {{-- inizio componente --}}
                
                {{-- inserimento immagini --}}
                <div class="mb-3">
                    <input type="file" wire:model.live="temporary_images" multiple
                    class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
                    @error('temporary_images.*')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                    @error('temporary_images')
                    <p class="fst-italic text-danger">{{ $message }}</p>
                    @enderror
                </div>
                
                @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>Photo preview:</p>
                        <div class="row border border-4 border-success rounded shadow py-4">
                            @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded"
                                style="background-image: url({{ $image->temporaryUrl() }});"></div>
                                
                                <button type="button" class="btn mt-1 btn-danger"
                                wire:click="removeImage({{ $key }})">X</button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                
                {{-- fine componente --}}
                
                
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

