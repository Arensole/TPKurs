<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
    public $name;
    public $category;
    public $price;
    public $quantity;

    public function create()
    {
        \App\Models\Product::create([
            'name' => $this->name,
            'user_id' => Auth::id(),
            'category' => $this->category,
            'price' => $this->price,
            'quantity' => $this->quantity
        ]);

    }

    public function delete($product_id)
    {
        $product = \App\Models\Product::where('id', $product_id)->first();
        $product->delete();
    }
    public function render()
    {
        $products = \App\Models\Product::where('user_id', Auth::id())->get();
        return view('livewire.product', [
            'products' => $products,
        ]);
    }
}
