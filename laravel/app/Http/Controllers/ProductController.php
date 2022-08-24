<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAdminRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // $product = Product::find(23);
        //  //Gọi phương thức quan hệ đến room
        // // dd($user, $room);
        // $category = Category::find(1);

        //     $product = Product::Select('*')
        //     ->where('id') //(tên trường, toán tử điều kiện, giá trị)
        //    ->with('category'); //Truy vấn thêm quan hệ trước khi trả kết quả ra view
        // ->where('id', '<=', 7)
        //    ->paginate(5);
        $product = Product::paginate(5);

        //  ->get();

        // ->cursorPaginate(5); //Truy vấn where id > 5 limit 5
        // dd($users);
        return view('admin.productAdmin.index', compact('product'));
    }
    public function status(Product $product)
    {
        if ($product->status == 1) {
            $product->status = 0;
        } else {
            $product->status = 1;
        }
        $product->save();
        return back();
    }
    public function delete($id)
    {
        if ($id) {
            if (Product::destroy($id)) {
                return redirect()->back();
            }
        }
    }
    public function create()
    {
        $categorys = Category::select('id', 'name')->get();

        return view('admin.productAdmin.create', ['category_id' => $categorys]);
    }
    public function postCreate(ProductAdminRequest $request)
    {
        $data = new Product();
        $data->fill($request->all());
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $data->images = $avatar->storeAs('images/products', $avatarName);
        } else {
            $data->images = '';
        }
        $data->save();
        return  redirect()->route('admin.product.index');
    }
    public function edit(Product $id)
    {
        $id->birthday = date('Y-m-d', strtotime($id->birthday));
        $categorys = Category::select('id', 'name')->get();
        return view('admin.productAdmin.edit', [
            // 'rooms'=> $room
            'product' => $id,
            'category_id' => $categorys
        ]);
    }
    public function update(ProductAdminRequest $request)
    {
        $product = Product::find($request->id);
        if ($request->hasFile('avatar_up')) {
            $avatar = $request->avatar_up;
            $avatarName = $avatar->hashName();
            $avatar_up = $avatar->storeAs('images/products', $avatarName);
        } else {
            $avatar_up = $request->avatar;
        }

        $product->update([
            'nameProduct' => $request->nameProduct,
            'price'  => $request->price,
            'status' => $request->status,
            'images' => $avatar_up,
            'describe' => $request->describe,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('admin.product.index');
    }
}
