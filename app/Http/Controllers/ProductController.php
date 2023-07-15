<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use App\DeliveryGuy;
use App\Cart;
use App\Notifications\DeliveryRiderOrderNotification;

class ProductController extends Controller
{
 

    public function pass_to_rider(Request $request)
    {
    //    dd($request->all());
       $orderDetails = Cart::where('uniqid','=',$request->uniqid)->first();
       $deliveryGuy = DeliveryGuy::get();
        foreach($deliveryGuy as $guy)
        {
            $guy->notify(new DeliveryRiderOrderNotification($guy, $orderDetails));
        }
       dd($deliveryGuy);

    }
    public function add_category(Request $request)
    {
        return view('admin.add_category');
    }

    public function post_category(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:190',

        ]);

        $category = Category::Create([
            'name' => $request->name,
            'description' => $request->description,
            'uniqid' => uniqid(),
        ]);
        Log::info($category->name." Added Successfully");
        $request->session()->flash("success",$category->name." Added Successfully");
        return redirect()->back();
    }
    public function add_product(Request $request)
    {
        $categories = Category::get();
        return view('admin.add_product',compact('categories'));

    }

    public function post_product(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:190|unique:products',
            'main_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            'description' => 'required',
            'quantity' => 'required',
            'category' => 'required|',
            'price' => 'required|max:6',
        ]);
        if($request->hasfile('other_photos'))
        {
            $i=0;
            $data = [];
           foreach($request->file('other_photos') as $file)
           {
            //    $name = time().'.'.$file->extension();
            $name = $request->name.'_'.$i;
               $file->move(base_path().'/public/Other_Photos', $name = '/Other_Photos/'.str_replace(" ", "_", $request->name.'_'.$i) . "." . $file->getClientOriginalExtension());
               array_push($data,$name);
               $i++;
           }
           $other_photos = implode(',',$data);

        }
        else {
            $other_photos = null;
        }


        $main_photo = $request->file('main_photo');
        $uniqid = uniqid();
        $request->file('main_photo')->move(base_path().'/public/Product_Photos', $main_photo = '/Product_Photos/'.str_replace(" ", "_", $request->name.'_'.$uniqid) . "." . $main_photo->getClientOriginalExtension());
        $product = Product::create([
            'name' => $request->name,
            'main_photo' => $main_photo,
            'other_photos' => $other_photos,
            'price' => $request->price,
            'description' => $request->description,
            'uniqid' => uniqid(),
            'category' => $request->category,
            'quantity' => $request->quantity

        ]);
        Log::info($product->name." Added Successfully");
        $request->session()->flash("success",$product->name." Added Successfully");
        return redirect()->back();

    }

    public function all_products(Request $request)
    {
        $products = Product::get();
        return view('admin.all_products',compact('products'));
    }

    public function edit_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        $current_category = Category::find($product->category);
        $categories = Category::get();
        return view('admin.edit_product',compact('product','categories','current_category'));
    }

    public function delete_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        $product_delete = Product::find($product->id);
        $product_delete->delete();
        Log::info($product->name." Deleted Successfully");
        $request->session()->flash("success",$product->name." Deleted Successfully");
        return redirect()->back();
    }

    public function post_edit_product(Request $request)
    {
        $product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        $fields =  Schema::getColumnListing($product->getTable());
        // dd($fields[0]);

        for ($i=0;$i<sizeof($fields);$i++) {
            $this_field = $fields[$i];
            if (($product->$this_field !== null && $request->$this_field !== null) && $this_field !== 'main_photo' && $this_field !== 'other_photos') {
                Product::where('uniqid','=',$request->uniqid)->update([
                    $this_field => $request->$this_field
                ]);

               }
        }

        if($request->main_photo !== null) {
            $main_photo = $request->file('main_photo');
            $uniqid = $product->uniqid;
            $request->file('main_photo')->move(base_path().'/public/Product_Photos', $main_photo_file = '/Product_Photos/'.str_replace(" ", "_", $request->name.'_'.$uniqid) . "." . $main_photo->getClientOriginalExtension());
            Product::where('uniqid','=',$request->uniqid)->update([
                'main_photo' => $main_photo_file
            ]);
        }
        else if($request->hasfile('other_photos'))
        {
            $i=0;
            $data = [];
           foreach($request->file('other_photos') as $file)
           {
            //    $name = time().'.'.$file->extension();
            $name = $request->name.'_'.$i;
               $file->move(base_path().'/public/Other_Photos', $name = '/Other_Photos/'.str_replace(" ", "_", $request->name.'_'.$i) . "." . $file->getClientOriginalExtension());
               array_push($data,$name);
               $i++;
           }
           $other_photos = implode(',',$data);
           Product::where('uniqid','=',$request->uniqid)->update([
               'other_photos' => $other_photos
           ]);
        }

        Log::info("Update Successful");
        $request->session()->flash("success","Update Successful");
        return redirect()->back();

    }
}
