<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $product = Product::latest()->paginate(10);
        
        return view('livewire.product.index', [
            'products' => $product
        ]);
    }


}
