<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\brand;
use App\Models\order;
use App\Models\comment;
use App\Models\product;
use App\Models\category;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = user::find(session()->get("loginId"))->get_product;

        return view('showproduct', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {

        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'color' => 'required',
            'description' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required'

        ]);

        $imageName = time() . "." . $request->image->extension();
        $request->image->move(public_path('assets/images/product'), $imageName);
        $imagePath = 'assets/images/product/' . $imageName;
        $data["image_url"] = $imagePath;
        unset($data["image"]);
        $data["user_id"] = session()->get("loginId");
        $product = new product($data);
        $product->save();

        return redirect("/user/" . session()->get("loginId"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        $orders = order::get();
        $product["flag_available"] = true;
        foreach ($orders as $order) {
            if ($order["product_id"] == $product["id"]) {
                $product["flag_available"] == false;
            }
        }

        $categories = category::get();
        $product["flag_is_appeal"] = false;
        $brands = brand::get();
        $randomProducts = product::inRandomOrder()->limit(3)->get();
        $comments = product::find($product["id"])->get_comment;
        $appeals = user::find(session()->get("loginId"))->get_appeal;
        foreach ($appeals as $appeal) {
            if ($appeal["product_id"] == $product["id"]) {
                $product["flag_is_appeal"] = true;
            }
        }

        foreach ($comments as $comment) {
            $user = user::find($comment["user_id"]);
            $comment["user_name"] = $user["firstname"] . ' ' . $user["lastname"];
        }

        return view('item', ["product" => $product, "categories" => $categories, "brands" => $brands, "randomProducts" => $randomProducts, "comments" => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view("editproduct", ["product" => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $form = $request->validate([
            "name" => "required",
            "color" => "required",
            "price" => "required",
            "description" => "required"
        ]);

        $request["image"];


        if ($request["image"] != null) {
            $imageName = time() . "." . $request->image->extension();
            $request->image->move(public_path('assets/images/product'), $imageName);
            $imagePath = 'assets/images/product/' . $imageName;
            $form["image_url"] = $imagePath;
        }

        $product->update($form);

        return redirect("/product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect("/product");
    }
}
