<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
   
    public function redirect(){
        
        $usertype = Auth::user()->usertype;

        if($usertype=='1'){
            $data = User::all();
            return view('admin.home', compact('data'));
        }

        else{
            $data = Product::paginate(3);
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function index(){
        $data = Product::all();


        if(Auth::check()){
           
            return redirect('redirect');
        }
        else{

           
            $data = Product::paginate(3);
            return view('user.home',compact('data'));
        }
        
    }

    public function search(Request $request){
        $search= $request->search;

        if($search==''){
            $data = Product::paginate(3);
            return view('user.home',compact('data'));
        }

        $data=product::where('title','Like','%'.$search.'%')->get();

        return view('user.home', compact('data','search'));
    }

    public function addcart(Request $request,$id){
        if(Auth::id()){
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;

            $cart->product_title=$product->title;
            $cart->harga=$product->harga;
            $cart->jumlah=$request->jumlah;
            $cart->save();

            return redirect()->back()->with('message','Product Berhasil Di order Cek di Keranjang :)');
        }else{
            return redirect('login');
        }
    }


    public function showcart(){
        $user=auth()->user();
        $cart=cart::where('phone',$user->phone)->get();
        $count=cart::where('phone',$user->phone)->count();
        return view('user.showcart',compact('count','cart','user'));
    }

    public function deletecart($id){
        $data=cart::find($id);
        $data->delete();
        return redirect()->back()->with('message','Pesanan Telah Dihapus');
    }

    public function confirmorder(Request $request){
        $user=auth()->user();

        $name=$user->name;
        $phone=$user->phone;
        $address=$user->address;

        foreach($request->namaproduk as $key=>$namaproduk)
        {
            $order=new order;

            $order->nama_produk=$request->namaproduk[$key];
            $order->harga=$request->harga[$key];
            $order->jumlah=$request->jumlah[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;

            $order->status='belum dikirim';

            $order->save();
        }
        DB::table('carts')->where('phone',$phone)->delete();

        return redirect()->back()->with('message','Product Berhasil Di order :)');
    }

    public function allproduk(Request $request){
        $data = Product::all();
        $search= $request->search;
            $user=auth()->user();
            
            if($search==''){
                $data = Product::all();
                return view('user.allproduk',compact('data'))->with('message','Product Berhasil Di order Cek di Keranjang :)');
            }
    
            $data=product::where('title','Like','%'.$search.'%')->get()->with('message','Product Berhasil Di order Cek di Keranjang :)');
    
            return view('user.allproduk', compact('data','search','count'))->with('message','Product Berhasil Di order Cek di Keranjang :)');
    }


    public function contact(){
        return view('user.contact');
    }


    
    public function about(){
        return view('user.about');
    }
}
