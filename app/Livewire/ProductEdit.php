<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Request;

class ProductEdit extends Component
{
    public function render()
    {
        //product edit
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('livewire.product-edit', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function update(Request $request)
    {
        $requestData = $request->all();
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;
        Product::create($requestData);
        return redirect()->route('product.index')->with('success','Product edit Successfully');
    }
}
