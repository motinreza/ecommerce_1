<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

use App\Notifications\SendEmailNotification;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use function League\Flysystem\move;

class AdminController extends Controller
{
    public function view_category(){
        if(Auth::id()){
            $data = Category::all();
            return view('admin.category', compact('data'));
        }else{
            return redirect('login');
        }
    }

    public function add_category(Request $request){
        if(Auth::id()){
            $data = new Category();

            $data->category_name = $request->category;
            $data->save();
            return redirect()->back()->with('message', 'Category name added successfully!');
        }else{
            return redirect('login');
        }
    }

    public function delete_category($id){
        if(Auth::id()){
            $data = Category::find($id);

            $data->delete();
            return redirect()->back()->with('message', 'Category deleted successfully!');
        }else{
            return redirect('login');
        }
    }

    public function view_product(){
        if(Auth::id()){
            $category = Category::all();

            return view('admin.product', compact('category'));
        }else{
            return redirect('login');
        }
    }

    public function add_product(Request $request){
        if(Auth::id()){
            $product = new Product();

            $product->title = $request->title;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->discount_price = $request->dis_price;
            $product->category = $request->category;

            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productimage', $imagename);
            $product->image = $imagename;

            $product->save();
            return redirect()->back()->with('message', 'Product data added successfully!');
        }else{
            return redirect('login');
        }
    }

    public function show_product(){
        if(Auth::id()){
            $data = Product::all();

            return view('admin.show_product', compact('data'));
        }else{
            return redirect('login');
        }
    }

    public function delete_product($id){
        if(Auth::id()){
            $data = Product::find($id);

            $data->delete();
            return redirect()->back()->with('message', 'Product deleted successfully!');
        }else{
            return redirect('login');
        }
    }

    public function update_product($id){
        if(Auth::id()){
            $category = Category::all();
            $product = Product::find($id);

            return view('admin.update_product', compact('product', 'category'));
        }else{
            return redirect('login');
        }
    }

    public function update_product_confirm(Request $request, $id){
        if(Auth::id()){
            $product = Product::find($id);

            $product->title = $request->title;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->discount_price = $request->dis_price;
            $product->category = $request->category;

            $image = $request->image;
            if($image){
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->image->move('productimage', $imagename);
                $product->image = $imagename;
            }

            $product->save();
            return redirect()->back()->with('message', 'Product update successfully!');
        }else{
            return redirect('login');
        }
    }

    public function order(){
        if(Auth::id()){
            $order = Order::all();

            return view('admin.order', compact('order'));
        }else{
            return redirect('login');
        }
    }

    public function delivered($id){
        if(Auth::id()){
            $order = Order::find($id);

            $order->delivery_status = "Delivered!";
            $order->payment_status = "Paid!";
            $order->save();
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function print_pdf($id){
        if(Auth::id()){
            $order = Order::find($id);
            $pdf = Pdf::loadView("admin.pdf", compact('order'));

            return $pdf->download('order_details.pdf');
        }else{
            return redirect('login');
        }
    }

    public function send_email($id){
        if(Auth::id()){
            $order = Order::find($id);

            return view("admin.email_info", compact('order'));
        }else{
            return redirect('login');
        }
    }

    public function send_user_email(Request $request, $id){
        if(Auth::id()){
            $order = Order::find($id);

            $details = [
                'one' => $request->one,
                'two' => $request->two,
                'three' => $request->three,
                'four' => $request->four,
                'five' => $request->five,
                'six' => $request->six,
            ];

            Notification::send($order, new SendEmailNotification($details));
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function search(Request $request){
        if(Auth::id()){
            $search = $request->search;

            $order = Order::where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%")->orWhere('product_title', 'LIKE', "%$search%")->get();
            return view('admin.order', compact('order'));
        }else{
            return redirect('login');
        }
    }
}
