<?php

namespace App\Http\Controllers;

use App\Charts\DashboardChart;
use App\Comment;
use App\Http\Requests\CreatePost;
use App\Http\Requests\UserUpdate;
use App\Post;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// All the functions written inside this AdminController function is secured by this middleware!
class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('checkRole:admin');
      $this->middleware('auth');
    }

    public function dashboard(){
        $chart = new DashboardChart;

        $days = $this->generateDateRange(Carbon::now()->subDays(30), Carbon::now());

        $comments = [];

        foreach ($days as $day){
            $comments[] = Comment::whereDate('created_at', $day)->count();
        }

        $chart->dataset('Comments', 'line', $comments);
        $chart->labels($days);

        return view('admin.dashboard', compact('chart'));
    }

    private function generateDateRange(Carbon $start_date, Carbon $end_date){
        $dates = [];

        for($date = $start_date; $date->lte($end_date); $date->addDay()){
            $dates[] = $date->format('Y-m-d');
        }

        return $dates;
    }

    public function posts(){
        $posts = Post::all();
      return view('admin.posts',compact('posts'));
    }

    public function postEdit($id){
        $post = Post::where('id',$id)->first();
        return view('admin.editPost', compact('post'));
    }

    public function postEditPost(CreatePost $request,$id){
        $post = Post::where('id',$id)->first();
        $post -> title = $request['title'];
        $post -> content = $request['content'];
        $post -> save();

        return back()->with('success','Post updated successfully');
    }

    public function deletePost($id){
        $post = Post::where('id',$id)->first();
        $post->delete();
        return back();
    }

    public function comments(){
        $comments = Comment::all();
        return view('admin.comments', compact('comments'));
    }

    public function deleteComment($id){
        $comment = Comment::where('id',$id)->first();
        $comment->delete();
        return back();
    }

    public function users(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function editUser($id){
        $user = User::where('id',$id)->first();
        return view('admin.editUser', compact('user'));
    }

    public function editUserPost(UserUpdate $request, $id){
        $user = User::where('id', $id)->first();
        $user -> name = $request['name'];
        $user -> email = $request['email'];

        if ($request['author'] == 1){
            $user->author = true;
        } elseif($request['admin'] == 1){
            $user->admin = true;
        }

        $user->save();
        return back()->with('success','User Updated Successfully');
    }

    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        return back();
    }

    //****************************shop*****************************************

    public function products(){
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function newProduct(){
        return view('admin.newProduct');
    }

    public function newProductPost(Request $request){
        $this->validate($request, [
           'title' => 'required|string',
            'thumbnail' => 'required|file',
            'description' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/'
        ]);

        $product = new Product;
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];

        $imageFile = $request->file('thumbnail');

        $imageName = $imageFile->getClientOriginalName();
        $uploadPath = '../public/product-images/';
        $imageFile->move($uploadPath, $imageName);
        $imageFullPath = '/images/'.$imageName;
        $user=Profile::find($request->user_id);
        $user->userImage=$imageFullPath;
        $user->fullName=$request->fullName;
        $user->userName=$request->userName;
        $user->location=$request->location;
        $user->age=$request->age;
        $user->website=$request->website;
        $user->about=$request->about;
        $user->update();
        return back();

        /*$thumbnail = $request->file('thumbnail');

        $fileName = $thumbnail->getClientOriginalName();
        //$fileExtension = $thumbnail->getClientOriginalExtension();

        //Image::make($thumbnail->getRealPath())->resize(468, 249)->save('public/img/products/'.$fileName);

        $thumbnail->move('product-images', $fileName);



        $product->$thumbnail = 'product-images/'.$fileName;

        $product->save();

        return back();*/

        /*
         * $path = $request->file('image_url')->store($imagePath, 'public_local');
         *
         $user = new file;
        $user->title = Input::get('name');
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/images/', $file);
            $user->name=$file->getClientoriginalName();
            $user->size=$file->getClientsize();
            $user->type=$file->getClientMimeType()
         */
    }

    public function editProduct(){

    }

    public function editProductPost(Request $request){

    }
}
