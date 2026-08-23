
<x-layout>
    
    @if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif
    
    <livewire:create-article-form />
    
</x-layout>