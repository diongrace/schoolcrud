<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produit;

class CartController extends Controller
{
    public function AddToCart($id)
    {
        $produit = Produit::find($id);
 
      
        session(['cart' => $produit]);
 
        return redirect()->route('front.cart'); 
    }
}
