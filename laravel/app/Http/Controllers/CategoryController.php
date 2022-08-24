<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.catagory.index', compact('category'));
    }

    public function delete($id)
    {
        $products = Product::where('category_id', $id)->get();
        foreach ($products as $item) {
            $item->category_id = 4;
            $item->save();
        }
        Category::destroy($id);
        return redirect()->back();
    }

    public function create()
    {
        $categorys = Category::select('id', 'name')->get();

        return view('admin.catagory.create', ['category_id' => $categorys]);
    }
    public function store(Request $request)
    {
        $data = new Category();
        $data->fill($request->all());
        $data->save();

        return  redirect()->route('admin.category.index');
    }
    public function edit(Category $id)
    {

        return view('admin.catagory.edit', [
            'category' => $id
        ]);
    }
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.category.index');
    }
}
