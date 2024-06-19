<?php

namespace App\Livewire;

use App\Models\Pair;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RefreshPairs extends Component
{
    public Pair $pair;
    public int $pairId = 0;

    public function mount(): void
    {
        $this->regeneratePairs();
    }

    public function regeneratePairs(): void
    {
        $this->pair = Pair::query()
            ->with(['second', 'first'])
            ->whereNot('id', $this->pairId)
            ->inRandomOrder()
            ->first();

        $this->pairId = $this->pair->id;
    }

    public function render(): View|Factory
    {
        return view('livewire.refresh-pairs', [
            'first' => $this->pair->first,
            'second' => $this->pair->second,
        ]);
    }
}
