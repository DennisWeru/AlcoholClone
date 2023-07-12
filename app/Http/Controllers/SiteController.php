<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Porfolio;
use \App\Product;
use \App\Category;
use \App\Contact;
use \App\Location;
use \App\Cart;
use \App\Admin;
use \App\Newsletter;
use \App\Subscriber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use App\Notifications\OrderReceivedSuccessfully;
use App\Notifications\ConfirmOrder;
use App\Notifications\ContactUs;
use App\Notifications\NewsletterSent;

class SiteController extends Controller
{
    public function welcome(Request $request)
    {
        $popular_drinks = Product::orderBy('tally', 'desc')->limit(3)->get();
        $category = Category::get();
        return view('site.home',compact('popular_drinks','category'));
    }

    public function add_portfolio(Request $request)
    {
        return view('admin.add_portfolio');
    }

    public function post_portfolio(Request $request)
    {
        $this->validate($request, [
            'about' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',

        ]);

        $portfolio = Porfolio::create([
            'about_us' => $request->about,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'uniqid' => uniqid()
        ]);

        Log::info("Portfolio Added Successfully");
        $request->session()->flash("success","Portfolio Added Successfully");
        return redirect()->back();
    }

    public function all_products(Request $request)
    {
        $products = Product::get();
        return response()->json($products);
    }

    public function single_product(Request $request)
    {
        $single_product = Product::where('uniqid','=',$request->uniqid)->get()->first();
        return response()->json($single_product);
    }

    public function about_us(Request $request)
    {
        return view('site.about_us');
    }

    public function shop(Request $request)
    {
        $products = Product::get();
        return view('site.shop',compact('products'));
    }

    public function single_category(Request $request)
    {
        $category  = Category::where('uniqid','=',$request->uniqid)->get()->first();
        $products  = Product::where('category','=',$category->id)->get();
        return view('site.single_category',compact('category','products'));
    }


    public function cart_page(Request $request)
    {
        if ($request->session()->get('cart_uniqid') == null) {
            Log::info("Sorry, There are no products in your cart");
            $request->session()->flash("error","Sorry, There are no products in your cart");
            return redirect()->back();

        }

        else
        {
            $cart = Cart::where('uniqid','=',$request->session()->get('cart_uniqid'))->get()->first();
            if($cart->product_array == null)
            {
                Log::info("Sorry, There are no products in your cart");
                $request->session()->flash("error","Sorry, There are no products in your cart");
                return redirect()->back();
            }
            else {
                $product_array = explode(',',$cart->product_array);
                $all_products = [];
                $total_price = 0;
                for($i=0;$i<sizeof($product_array);$i++)
                {
                    $product = Product::find($product_array[$i]);
                    if(!in_array($product,$all_products))
                    {
                        array_push($all_products,$product);
                    }

                    $total_price = $total_price + (int) $product->price;

                }
                $cart_uniqid = $request->session()->get('cart_uniqid');
               $locations = Location::get();
                return view('site.cart_page',compact('all_products','total_price','locations','cart_uniqid'));
            }

        }
    }

    public function order_drink(Request $request)
    {
    //  return $request->session()->get('cart_uniqid');
        if ($request->session()->get('cart_uniqid') == null) {
            // return 'this';
            $uniqid = $_GET['uniqid'];
            $cart_uniqid = uniqid();
            $request->session()->put('cart_uniqid', $cart_uniqid);
            $product = Product::where('uniqid', '=', $uniqid)->get()->first();
            $cart = Cart::create([
            'uniqid' => $cart_uniqid,
            'product_array' => $product->id,
            'total_price' => $product->price,

        ]);
                return 1;

        }
        else {
            $uniqid = $_GET['uniqid'];
            $cart_uniqid = $request->session()->get('cart_uniqid');
            // return $cart_uniqid;
            $product = Product::where('uniqid', '=', $uniqid)->get()->first();
            $cart = Cart::where('uniqid','=',$cart_uniqid)->get()->first();
            // dd($cart);
            $cart_products = explode(',',$cart->product_array);
            if($cart_products[0] == '')
            {
               $cart_products =  array_diff($cart_products, array($cart_products[0]));
            }
            // return $uniqid;
            if(!in_array($product->id,$cart_products))
            {
                array_push($cart_products, $product->id);
                // print_r($cart_products);
                // return
                $product_array = implode(',',$cart_products);

                Cart::where('uniqid','=',$cart_uniqid)->update([
                    'product_array' => $product_array
                ]);
            }


            return sizeof($cart_products);

        }

    }

    public function add_location(Request $request)
    {
            return view('admin.add_locations');

    }

    public function post_location(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:190|unique:locations',
            'logistical_price' => 'required|max:190',

        ]);

        $location = Location::create([
            'name' => $request->name,
            'logistical_price' => $request->logistical_price,
            'uniqid' => uniqid()
        ]);
        Log::info($location->name." Added Successfully");
        $request->session()->flash("success",$location->name." Added Successfully");
        return redirect()->back();
    }

    public function post_user_details(Request $request)
    {
        $uniqid = $request->cart_uniqid;
        $cart  = Cart::where('uniqid','=',$uniqid)->update([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'contact' => $request->contact,
            'location' => $request->location

        ]);
        Log::info("Please confirm your details and press the finish button to complete order");
        $request->session()->flash("success","Please confirm your details and press the finish button to complete order");
        return redirect()->route('checkout.final',[$uniqid]);

    }

    public function checkout_final(Request $request)
    {
        $cart = Cart::where('uniqid','=',$request->uniqid)->get()->first();
        $product_array = explode(',',$cart->product_array);
        $all_products = [];
        $total_price = 0;
        for($i=0;$i<sizeof($product_array);$i++)
        {
            $product = Product::find($product_array[$i]);
            if(!in_array($product,$all_products))
            {
                array_push($all_products,$product);
            }
            $tally = (int) $product->tally + 1;
            $product->update([
                'tally' => $tally
            ]);
            $total_price = $total_price + (int) $product->price;

        }
        $cart_uniqid = $request->session()->get('cart_uniqid');
        $location = Location::where('uniqid','=',$cart->location)->get()->first();
        $final_price = $total_price + (int) $location->logistical_price;
        return view('site.checkout_final',compact('cart','location','all_products','total_price','final_price'));
    }

    public function finish_order(Request $request)
    {
        $cart = Cart::where('uniqid','=',$request->uniqid)->get()->first();
        Cart::where('uniqid','=',$request->uniqid)->update([
            'status' => 1
        ]);
        $cart_hhh = Cart::find($cart->id);
        // dd($cart_hhh);
        $cart_hhh->notify(new OrderReceivedSuccessfully($cart_hhh));
        $all_admin = Admin::get();
        for($i=0;$i<$all_admin->count();$i++)
        {
            $admin = $all_admin[$i];
            $admin->notify(new ConfirmOrder($admin,$cart));
        }
        Log::info("Order Successful");
        $request->session()->flash("success","Order Successful");
        return redirect()->route('home.page');

    }

    public function view_details(Request $request)
    {
        $cart = Cart::where('uniqid','=',$request->uniqid)->get()->first();
        $product_array = explode(',',$cart->product_array);
        $all_products = [];
        $total_price = 0;
        for($i=0;$i<sizeof($product_array);$i++)
        {
            $product = Product::find($product_array[$i]);
            if(!in_array($product,$all_products))
            {
                array_push($all_products,$product);
            }


            $total_price = $total_price + (int) $product->price;

        }
        $location = Location::where('uniqid','=',$cart->location)->get()->first();
        $final_price = $total_price + (int) $location->logistical_price;
        return view('admin.view_details',compact('cart','all_products','location','final_price'));
    }

    public function contact_us(Request $request)
    {
        return view('site.contact');
    }

    public function post_contact_us(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:190',
            'email' => 'required|max:190',
            'message' => 'required',


        ]);
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'uniqid' => uniqid()
        ]);
        $subscriber_exists = Subscriber::where('email','=',$request->email)->get()->count();
        if($subscriber_exists == 0)
        {
            $subscriber = Subscriber::create([
                'email' => $request->email,
                'uniqid' => uniqid()
            ]);
        }

        $all_admin = Admin::get();
        for($i=0;$i<$all_admin->count();$i++)
        {
            $admin = $all_admin[$i];
            $admin->notify(new ContactUs($admin,$contact));
        }
        Log::info("Message Sent Successfully");
        $request->session()->flash("success","Message Sent Successfully");
        return redirect()->back();
    }

    public function subscribe_newsletter(Request $request)
    {
        $subscriber_exists = Subscriber::where('email','=',$_GET['email'])->get()->count();
        // return $subscriber_exists;
        if ($subscriber_exists == 0) {
            $subscriber = Subscriber::create([
            'email' => $_GET['email'],
            'uniqid' => uniqid()
        ]);
        return 'Subscription Successful';
        }
        else {
            return 'Already Subscribed';
        }


    }

    public function send_newsletter(Request $request)
    {

        return view('admin.send_newsletter');
    }

    public function post_newsletter(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'message' => 'required|min:500',


        ]);

        // dd($request->message);
        $newsletter = Newsletter::create([
            'title' => $request->title,
            'message' => $request->message,
            'uniqid' => uniqid()
        ]);
        $all_subscribers = Subscriber::get();
        for($i=0;$i<$all_subscribers->count();$i++)
        {
            $subscriber = $all_subscribers[$i];
            $subscriber->notify(new NewsletterSent($subscriber,$newsletter));
        }

        Log::info("Newsletter Sent Successful");
        $request->session()->flash("success","Newsletter Sent Successful");
        return redirect()->route('home.page');

    }

    public function product_details(Request $request)
    {
        $product = Product::where('uniqid','=',$_GET['uniqid'])->get()->first();
        return $product->name.'#'.$product->description.'#'.$product->price.'#'.$product->main_photo.'#'.$product->uniqid.'#'.$product->quantity;
    }

    public function remove_product(Request $request)
    {
        $product = Product::where('uniqid','=',$_GET['uniqid'])->get()->first();
        $cart = Cart::where('uniqid','=',$request->session()->get('cart_uniqid'))->get()->first();
        $cart_array = explode(',',$cart->product_array);
        $arr = implode(',',array_diff($cart_array, array($product->id)));

        Cart::where('uniqid','=',$request->session()->get('cart_uniqid'))->update([
            'product_array' => $arr
        ]);

        $total_price = 0;
        for($i=0;$i<sizeof(array_diff($cart_array, array($product->id)));$i++)
        {
            $product = Product::find($arr[$i]);

            $total_price = $total_price + (int) $product->price;

        }

        return sizeof(array_diff($cart_array, array($product->id))).'#'.$total_price;

    }

    public function set_cookie(Request $request){
        $minutes = 60;
        $response =  new Response('Hello World');
        // return $response;

        // return $value;
     }

     public function get_cookie(Request $request)
     {
        return $request->cookie();
        //
     }
}
