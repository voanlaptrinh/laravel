<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        // dd($products);
        return view('list.index', ['products' => $products]);
    }
    public function ProductHome()
    {
        $products = Product::paginate(6);
        $category = Category::all();

        return view(
            'list.category',
            [
                'products' => $products,
                'category' => $category,

            ]

        );
    }
    public function categoryProducts($id)
    {
        $products = DB::table('products')->join('categorys', 'products.category_id', '=', 'categorys.id')->select('products.*')
            ->where('products.category_id', '=', $id)
            ->paginate(12);
        $category = Category::select('id', 'name')->get();
        // dd($category);
        return view('list.category', [
            'products' => $products,
            'category' => $category,

        ]);
    }
    public function single_product($id)
    {
        $comment = Comment::select('*')->where('product_id', $id)->with('user')->orderBy('id', 'desc')->with('product')->get();
        $product = Product::find($id);
        $addCart = Product::find($id);
        return view('list.single-product', [
            'single_product' => $product,
            'addCart' => $addCart,
            'comment' => $comment,
        ]);
    }

    public function searchProduct(Request $requests)
    {
        $product = Product::where('nameProduct', 'like', '%' . $requests->name . '%')->paginate(12);
        $category = Category::select('id', 'name')->get();
        return view('list.category', [
            'products' => $product,
            'category' => $category
        ]);
    }
    public function Cart()
    {
     
        $cart = Cart::where('User_id', Auth::user()->id)->with('product')->get();


        return view('list.cart', [
            'cart' => $cart
        ]);
    }
    public function addCart($id)
    {
       
      $product = Product::find($id);
    //   dd($product);
        $cart = Cart::where('User_id', Auth::user()->id)->where('product_id', $id)->first();
        
    
       
        
        if($cart && $cart->product_id==$id){
            
            $cart['amount'] += 1;
            $cart->total= $cart['amount'] * $cart['price'];
            $cart->save();
         return redirect()->route('client.cart');

        }
        $data['price'] = $product['price'];
        $data['product_id'] = $id;
        $data['amount'] = 1;
        $data['total'] = $product['price'];
        $data['User_id'] = Auth::user()->id;
        Cart::create($data);
   
    
    return redirect()->route('client.cart');
    }
    public function delete(Cart $id)
    {
        if ($id->delete()) {
            return redirect()->back();
        }
    }
}
