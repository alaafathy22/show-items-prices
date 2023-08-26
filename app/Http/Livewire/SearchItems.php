<?php

namespace App\Http\Livewire;

use App\Models\groups;
use App\Models\items_and_prices;
use Livewire\Component;

class SearchItems extends Component
{
    public $search_input = '';
    public $button_id = 'id_item';
    public $button_direction = 'ASC';
    public function render()
    {
        sleep(1);
        $items_and_prices = items_and_prices::orderBy($this->button_id, $this->button_direction)->where('name', 'like', '%' . $this->search_input . '%')->get();
        $Groups = groups::get();
        // return view('home',['items_and_prices'=>$items_and_prices,'Groups'=>$Groups]);
        return view('livewire.search-items', ['items_and_prices' => $items_and_prices, 'Groups' => $Groups]);
    }
    public function sort_by_direction()
    {
        if ($this->button_direction == "ASC") {
            $this->button_direction = 'DESC';
        } else {
            $this->button_direction = 'ASC';
        }
    }

    public function sort_by($type)
    {
        $this->button_id = $type;
        $this->sort_by_direction();
    }

}
