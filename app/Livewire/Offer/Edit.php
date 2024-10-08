<?php

namespace App\Livewire\Offer;

use App\Models\Offer;
use Livewire\Component;

class Edit extends Component
{
    public Offer $offer;

    public function mount(Offer $offer)
    {
        $this->offer = $offer;
    }

    public function render()
    {
        return view('livewire.offer.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->offer->save();

        return redirect()->route('offers.index');
    }

    protected function rules(): array
    {
        return [
            'offer.title' => [
                'string',
                'required',
            ],
        ];
    }
}
