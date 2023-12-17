<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.product-index', [
            'products' => $products
        ]);


    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
