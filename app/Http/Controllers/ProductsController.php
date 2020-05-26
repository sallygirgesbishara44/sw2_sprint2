<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Auth;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function order()
    {
        return view('order');
    }
    public function addToOrder($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $order = session()->get('order');

        // if order is empty then this the first product
        if(!$order) {

            $order = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('order', $order);

            $htmlOrder = view('_header_order')->render();

            return response()->json(['msg' => 'Product added to order successfully!', 'data' => $htmlOrder]);

            //return redirect()->back()->with('success', 'Product added to order successfully!');
        }

        // if order not empty then check if this product exist then increment quantity
        if(isset($order[$id])) {

            $order[$id]['quantity']++;

            session()->put('order', $order);

            $htmlOrder = view('_header_order')->render();

            return response()->json(['msg' => 'Product added to order successfully!', 'data' => $htmlOrder]);

            //return redirect()->back()->with('success', 'Product added to order successfully!');

        }

        // if item not exist in order then add to order with quantity = 1
        $order[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('order', $order);

        $htmlOrder = view('_header_order')->render();

        return response()->json(['msg' => 'Product added to order successfully!', 'data' => $htmlOrder]);

        //return redirect()->back()->with('success', 'Product added to order successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $order = session()->get('order');

            $order[$request->id]["quantity"] = $request->quantity;

            session()->put('order', $order);

            $subTotal = $order[$request->id]['quantity'] * $order[$request->id]['price'];

            $total = $this->getOrderTotal();

            $htmlOrder = view('_header_order')->render();

            return response()->json(['msg' => 'order updated successfully', 'data' => $htmlOrder, 'total' => $total, 'subTotal' => $subTotal]);

            //session()->flash('success', 'order updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $order = session()->get('order');

            if(isset($order[$request->id])) {

                unset($order[$request->id]);

                session()->put('order', $order);
            }

            $total = $this->getOrderTotal();

            $htmlOrder = view('_header_order')->render();

            return response()->json(['msg' => 'Product removed successfully', 'data' => $htmlOrder, 'total' => $total]);

            //session()->flash('success', 'Product removed successfully');
        }
    }


    /**
     * getOrderTotal
     *
     *
     * @return float|int
     */
    private function getOrderTotal()
    {
        $total = 0;

        $order = session()->get('order');

        foreach($order as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return number_format($total, 2);
    }
    public function postChekout(Request $request)
    {

      if(! Session::has('order') ){
        return redirect()->route('/shopping');
      }
      $data = DB::select('select id from customers where user_name=? and password=?',[$username,$password]);
      $Sdata = $data[0]->id;
      $order = new Order();
      $order->user_id=$thedata;
      $order->order=serialize('oldcart');
      $order->price=$total;
      $order->location=$request->input('address1');
      $order->payment=$request->input('paymentMethod');

      Auth::customers()->orders()->save($order);

    }
}
