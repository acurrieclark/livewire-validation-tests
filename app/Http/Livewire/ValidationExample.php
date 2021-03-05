<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use function collect;
use Illuminate\Support\Collection;
use Livewire\Component;

class ValidationExample extends Component
{
    public Collection $references;

    protected $validationAttributes = [
        'references.*.email' => 'email',
        'references.*.name' => 'reference name',
    ];

    protected $rules = [
        'references.*.name' => ['required', 'distinct'],
        'references.*.email' => ['required', 'email', 'distinct'],
    ];

    public function mount()
    {
        $this->references = collect()->pad(3, new Reference());
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function render()
    {
        return view('livewire.validation-example');
    }
}
