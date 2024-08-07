<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\Tag;
use Livewire\Component;

class GlobalSearch extends Component
{
    public $search = '';
    public $results = [
        'orders' => [],
        'categories' => [],
        'tags' => []
    ];

    public function mount()
    {
        $this->load_all_data();
    }

    public function updatedSearch()
    {
        if ($this->search) {
            // search on model 
            $this->results = [
                'orders' => Order::search($this->search)->get(),
                'categories' => Category::search($this->search)->get(),
                'tags' => Tag::search($this->search)->get(),
            ];
        } else {
            $this->load_all_data();
        }
    }

    public function load_all_data()
    {
        // load all data
        $this->results['orders'] = Order::all();
        $this->results['categories'] = Category::all();
        $this->results['tags'] = Tag::all();
    }

    public function render()
    {
        // render global search view
        return view('livewire.global-search');
    }
}
