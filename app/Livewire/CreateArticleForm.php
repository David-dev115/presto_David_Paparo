<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticleForm extends Component
{

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

    $this->reset();


    session()->flash('message', 'Articolo correttamente creato.');

    }



    public function render()
    {
        return view('livewire.create-article-form');
    }
}
