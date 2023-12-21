<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;

class WebController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){
        $rules =[
            'email' => ['required','min:5'],
            'password' => ['required'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }

        if($request->remember){
            Cookie::queue('mycookie',$request->email,5);
            Cookie::queue('mycookiepassword',$request->password,5);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
            FacadesSession::put('mysession',$request->email,$request->password);
            return redirect('/home');
        }
        return back()->withErrors("Email or Password Invalid");
    }

    public function signupPage(){
        return view('signup');
    }

    public function signup(Request $request){
        $rules = [
            'name'=>['required','min:5','max:20','unique:users,name'],
            'email'=>['required','unique:users,email','email'],
            'password'=>['required','min:5','max:20'],
            'phone'=>['required','min:10','max:13',],
            'address'=>['required','min:5'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('message', 'Sign Up Successfull!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function home(Request $request){
        $product = product::where('name','LIKE',"%$request->search%")->paginate(10)->appends(["search"=>$request->search]);
        $category = Category::all();
        return view('home',['product'=>$product, 'categories'=>$category]);
    }

    public function detailPage($id){
        $product = product::find($id);
        return view('detail',['product'=>$product]);
    }

    public function categoryPage($id){
        $product = product::where('category_id','=', $id)->paginate(10);
        $category = Category::all();
        $speCategory = Category::find($id);
        return view('category',['product'=>$product,'categories'=>$category,'speCategory'=>$speCategory]);
    }

    public function cartPage(Request $request){
        $user = auth()->id();
        $cart = DB::table('products')->join('carts','carts.product_id','=','products.id')
                ->where('carts.user_id','=', $user)->get();
        $user = DB::table('users')->where('id','=',$user)->first();
        return view('cart')->with(compact('cart','user'));
    }

    public function addToCart(Request $request,$id){
        $qty = $request->Quantity;
        $rules = [
            'Quantity'=>['required','numeric','gt:0']
        ];
        $cart = Cart::where('user_id',auth()->id())->where('product_id',$id)->first();
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        if($cart == null){
            $cart = new Cart();
            $cart->user_id = auth()->id();
            $cart->product_id = $id;
        }
        $cart->quantity = $qty;
        $cart->save();
        // return redirect()->back()->with('message', 'Add to Cart Successfully!');
        return redirect()->action([WebController::class, 'home']);
    }

    public function editCartPage($id){
        $cart = DB::table('products')->join('carts','carts.product_id','=','products.id')
                ->where('carts.id','=', $id)->first();
        return view('editCartPage',['cart'=>$cart]);
    }

    public function editCart(Request $request, $id){
        $cart = Cart::find($id);
        $qty = $request->Quantity;
        $rules = [
            'Quantity'=>['required','numeric','gt:0']
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $cart->quantity = $qty;
        $cart->save();
        // return redirect()->back()->with('message', 'Cart Updated');
        return redirect()->action([WebController::class, 'cartPage']);

    }

    public function deleteCart($id){
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('message', 'Successfully Removed from cart');
    }

    public function deleteProduct($id){
        $product = product::find($id);

        if(isset($product)){
            $product->delete();
        }
        return redirect()->action([WebController::class, 'home']);
    }

    public function checkout(Request $request){
        $total = $request->total;
        $date = date('Y-m-d H:i:s');
        $userID = auth()->id();

        $transaction = new Transaction();
        $transaction->user_id = $userID;
        $transaction->tanggal_transaksi = $date;
        $transaction->total = $total;
        $transaction->save();

        $cart = Cart::where('user_id',$userID)->get();
        foreach($cart as $c){
            $transactionDetail = new TransactionDetail();
            $transactionDetail->product_id= $c->product_id;
            $transactionDetail->transaction_id = $transaction->id;
            $transactionDetail->quantity = $c->quantity;
            $transactionDetail->save();
            $c->delete();
        }
        return redirect()->back()->with('message', 'Checkout Successfully!');
    }

    public function historyPage(){
        $user = auth()->id();
        $transaction = Transaction::where('user_id','=',$user)->get();

        return view('history',['transaction'=>$transaction]);
    }

    public function profilePage(){
        return view('profile');
    }

    public function editProfilePage(){
        return view('editprofile');
    }

    public function editPasswordPage(){
        return view('editpassword');
    }


    public function editProfile(Request $request){
        $userID = auth()->id();
        $user = User::where('id','=',$userID)->first();
        $rules = [
            'name'=>['required','min:5','max:20','unique:users,name'],
            'email'=>['required','unique:users,email','email'],
            'phone'=>['required','min:10','max:13',],
            'address'=>['required','min:5'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }else{
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return redirect()->action([WebController::class, 'profilePage']);
        }
    }

    public function editPassword(Request $request){
        $userID = auth()->id();
        $user = User::where('id','=',$userID)->first();
        $rules = [
            'New_Password'=>['required','min:5','max:20','different:Old_Password'],
            'Old_Password'=>['required'],
        ];
        $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return back()->withErrors($validator);
            }else{
                if (Hash::check($request->Old_Password, $user->password)) {
                    $user->password = $request->New_Password;
                    $user->save();
                    return redirect()->action([WebController::class, 'profilePage']);
                 }else{
                    return back()->withErrors('Old Password Invalid');
                 }
            }
    }
    public function addItemPage(){
        return view('additem');
    }

    public function addItem(Request $request){
        $rules = [
            'image'=>['required','image','mimes:jpg,jpeg,png'],
            'name'=>['required','min:5','max:20','unique:products,name'],
            'description'=>['required','min:5'],
            'price'=>['required','numeric','min:1000'],
            'stock'=>['required','min:1'],
        ];
        $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return back()->withErrors($validator);
            }else{
            $image = $request->image->getClientOriginalName('image');
            $path = $request->image->move('images/',$image);
            $path = './images/'.$image;
            $product = new product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->image = $path;
            $product->save();

            }
            return redirect()->action([WebController::class, 'home']);
    }

    public function searchPage(Request $request){
        $product = product::where('name','LIKE',"%$request->search%")->paginate(10)->appends(["search"=>$request->search]);
        $category = Category::all();
        return view('home',['product'=>$product, 'categories'=>$category]);
    }
}
