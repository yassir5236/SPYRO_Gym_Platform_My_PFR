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

        // Si le panier est vide, ajoutez le premier produit
        if (!$cart) {
            $cart = [
                $product->id => [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price,
                    'image_path' => $product->image_path
                ]
            ];

            
            session()->put('cart', $cart);
            return redirect()->route('clients.product.panier')->with('success', 'Product added to cart successfully');
        }

        // Si le panier n'est pas vide, ajoutez un nouveau produit ou mettez à jour la quantité
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
            session()->put('cart', $cart);
            return redirect()->route('clients.product.panier')->with('success', 'Product added to cart successfully');
        }

        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => $quantity,
            'price' => $product->price,
            'image_path' => $product->image_path

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


    // public function update(Request $request, $id)
    // {
    //     $quantity = $request->input('quantity');
    //     $cart = session()->get('cart');

    //     if (isset($cart[$id])) {
    //         $cart[$id]['quantity'] = $quantity;
    //         session()->put('cart', $cart);
    //     }

    //     return redirect()->route('clients.product.panier')->with('success', 'Cart updated successfully');
    // }


//     public function update(Request $request, $id)
// {
//     $quantity = $request->input('quantity');
//     $cart = session()->get('cart');

//     if (isset($cart[$id])) {
//         $cart[$id]['quantity'] = $quantity;
//         session()->put('cart', $cart);
//     }

//     return redirect()->route('clients.product.panier')->with('success', 'Cart updated successfully');
// }

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
        // Calculer le total de la commande
        $total = 0;
        foreach (session('cart') as $product) {
            $total += $product['quantity'] * $product['price'];
        }

        return view('cart.checkout', compact('total'));
    }



    public function confirm(Request $request)
    {
        // Finalisez l'achat, générez un devis, etc.
        // Réinitialisez le panier après l'achat réussi

        session()->forget('cart'); // Effacer le panier après la confirmation de l'achat

        return view('cart.confirmation');
    }
}
