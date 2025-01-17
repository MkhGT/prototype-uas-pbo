<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use Flasher\Toastr\Prime\ToastrInterface;

class AdminController extends Controller
{
    //
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        toastr()->timeout(10000)->closeButton()->addSuccess('Kategori berhasil ditambahkan.');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeout(10000)->closeButton()->addSuccess('Kategori berasil dihapus');
        return redirect()->back();

    }

    public function add_product()
    {
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }

    public function upload_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->qty;
        $product->category = $request->category;
        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imageName);
            $product->image = $imageName;
        }

        $product->save();
        toastr()->timeout(10000)->closeButton()->addSuccess('Product Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function view_product()
    {
        $products = Product::paginate(1);
        return view('admin.view_product', compact('products'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $image_path = public_path('products/'.$product->image);
        if(file_exists($image_path))
        {
            
            unlink($image_path);

        }

        $product->delete();
        toastr()->timeout(10000)->closeButton()->addSuccess('Kategori berasil dihapus');
        return redirect()->back();
    }

    public function update_product($id)
    {
        $product = Product::find($id);
        return view('admin.update_page',compact('product'));
    }
    
    public function edit_product(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $image = $request->file('image');

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        toastr()->timeout(10000)->closeButton()->addSuccess('Product Berhasil Diupdate');
        return redirect()->back();
    }

    public function product_search(request $request)
    {
        $search = $request->search;
        $products = product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);
        return view('admin.view_product',compact('products'));
    }
}
