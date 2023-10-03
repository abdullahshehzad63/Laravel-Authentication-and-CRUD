<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Command\EditCommand;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));

    }

    
    public function create()
    {
        return view('products.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'img/';
            $productImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$productImage);
            $input['image'] = "$productImage";

        }
        Product::create($input);
        return redirect()->route('products.index')
        ->with('success','Product is created Successfully');
    }
 
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

     
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $input = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'img/';
            $productImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath,$productImage);
            $input['image'] = "$productImage";

        }
        else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('products.index')
        ->with('success','Product is created Successfully');
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Product Deleted Successfully');
    }
}
