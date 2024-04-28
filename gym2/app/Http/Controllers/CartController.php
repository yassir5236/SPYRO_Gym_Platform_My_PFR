<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;





class CartController extends Controller
{

   

    public function add(Request $request, Product $product)
{
    $quantity = $request->input('quantity');
    $cart = session()->get('cart');

  
    if (!$cart) {
        $cart = [
            $product->id => [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'image_path' => $product->image_path,
                'max_quantity' => $product->quantity 
            ]
        ];
       

        session()->put('cart', $cart);
        return redirect()->route('clients.product.panier')->with('success', 'Product added to cart successfully');
    }

    if (isset($cart[$product->id])) {
        if($cart[$product->id]['quantity']>= $product->quantity){
            session()->put('cart', $cart);
            return redirect()->route('clients.product.panier')->with('success', 'Product added to cart successfully');
        }else{
            $cart[$product->id]['quantity'] += $quantity;
            session()->put('cart', $cart);
            
        }

        

    }

    $cart[$product->id] = [
        'name' => $product->name,
        'quantity' => $quantity,
        'price' => $product->price,
        'image_path' => $product->image_path,
        'max_quantity' => $product->quantity  
    ];
  

    session()->put('cart', $cart);
    return redirect()->route('clients.product.panier')->with('success', 'Product added to cart successfully');
}






    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('clients.product.panier')->with('success', 'Product removed from cart successfully');
    }

    public function panier()
    {

        return view('clients.products.panier');
    }




    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found in cart']);
    }





    public function checkout()
    {
        // Récupérer les éléments du panier depuis la session
        $cartItems = session('cart');

        // Calculer le prix total des éléments du panier
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        // Passer les éléments du panier et le prix total à la vue de checkout
        return view('clients.products.chekout', compact('cartItems', 'totalPrice'));
    }



    public function confirmPurchase()
{
    $cartItems = session('cart');

    foreach ($cartItems as $id => $item) {
        $product = Product::find($id);
        if ($product) {
            $product->quantity -= $item['quantity']; 
            $product->save(); 
        }
    }

    session()->forget('cart'); 

    return redirect()->route('indexProductClient')->with('success', 'Purchase confirmed successfully');
}


}
