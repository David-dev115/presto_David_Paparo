<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{   
    use WithFileUploads;

    public $images = [];

    public$temporary_images = [];

    #[Validate('required', message: 'Titolo obbligatorio')]
    #[Validate('min:3', message: 'Il titolo deve contenere almeno 3 caratteri')]
    public $title;

    #[Validate('required', message: 'Descrizione obbligatoria')]
    #[Validate('min:3', message: 'Deve contenere almeno 3 caratteri')]
    public $description;

    #[Validate('required', message: 'Prezzo obbligatorio')]
    #[Validate('numeric', message: 'Il prezzo deve essere un numero')]
    public $price;

    #[Validate('required', message: 'Scegli una categoria')]
    public $category;

    public $article;

    public function store() {

    $this->validate();

    $this->article = Article::create([
        'title' => $this->title,
        'description' => $this->description,
        'price' => $this->price,
        'category_id' => $this->category,
        'user_id' => Auth::id()

    ]);

    // $this->reset();
        if (count($this->images) > 0) {
        foreach ($this->images as $image) {
            $this->article->images()->create([
                'path' => $image->store('images', 'public')
            ]);
        }
    }


    session()->flash('message', 'Articolo correttamente creato, attendi approvazione da un revisore.');
    $this->cleanForm();

    }

        protected function cleanForm() {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }


    public function render()
    {
        return view('livewire.create-article-form');
    }


    public function updatedTemporaryImages() {

        if($this->validate([
            'temporary_images.*'=> 'image|max:1024' ,
            'temporary_images'=> 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }  

    public function removeImage($key){

    if (in_array($key, array_keys($this->images))) {
        unset($this->images[$key]);
    }
    }

}
