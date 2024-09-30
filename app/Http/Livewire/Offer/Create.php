<?php

namespace App\Http\Livewire\Offer;

use App\Models\Offer;
use Livewire\Component;

class Create extends Component
{
    public Offer $offer;

    public function mount(Offer $offer)
    {
        $this->offer = $offer;
    }

    public function render()
    {
        return view('livewire.offer.create');
    }

    public function submit()
    {
        $this->validate();

        $this->offer->save();

        return redirect()->route('admin.offers.index');
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
