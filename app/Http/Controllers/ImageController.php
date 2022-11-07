<?php

namespace App\Http\Controllers;

use App\Category;
use App\free_issue;
use App\Http\Controllers\Controller;
use App\Product;
use App\Traits\UploadTrait;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class ImageController extends Controller
{
    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {

        //  $images = Image::all()->toArray();
        //   return view('ImageManage', compact('images'));
        $id = $request->input('id');

    }

    public function index()
    {

        $key = Input::get('field') ?: 'bar';

        $cat = Product::all()->where('id', $key)->first();

        return view('imageUpdate', compact('cat'));

    }

    public function InfoView()
    {

        $key = Input::get('field') ?: 'bar';

        $pro = DB::select("select * from products where id ='$key'");

        $cat = Category::all()->toArray();
        return view('userInfoUpdate', compact('cat'), compact('pro'));

    }

    public function OfferView()
    {

        $offerPro = Product::all();

        return view('homeView', compact('offerPro'));

    }

    public function createFreeView()
    {

        $key = Input::get('field') ?: 'bar';

        //    $pro = DB::table('products')->where('id', $key);
        $pro = DB::select("select * from products where id ='$key'");
        //   return view('productIn',['products'=>$products],['cat'=>$cat]);

        // $pro = Product::all();
        $cat = Category::all()->toArray();
        return view('free_issue_create', compact('cat'), compact('pro'));

        //  echo $pro;
    }

    public function createFreeUpdate($id)
    {

        $key = Input::get('field') ?: 'bar';

       
        $pro = DB::select("select * from products where id ='$key'");
        //   return view('productIn',['products'=>$products],['cat'=>$cat]);

        // $pro = Product::all();
        $cat = Category::all()->toArray();
        return view('free_issue_create', compact('cat'), compact('pro'));

        //  echo $pro;
    }

    public function InfoIndex()
    {

        $departmentData['data'] = Category::getCategory();
        return view('infoSearch')->with("departmentData", $departmentData);

    }

    public function specialIndex()
    {
        $departmentData['data'] = Category::getCategory();
        return view('specialIndex')->with("departmentData", $departmentData);

    }

    public function save()
    {

        $cat = Category::all()->toArray();
        return view('imageSave', compact('cat'));

    }

    public function updateSpecial(Request $request)
    {

        $id = $request->input('pid');
        $price = $request->input('txtPrice');


        $order = new free_issue([
            'type' => $request->input('txtType'),
            'product_name' => $request->input('txtName'),
            'qty' => $request->input('txtPQty'),
            'free_qty' => $request->input('txtFQty'),
            'free_product' => $request->input('txtFreePro'),
            'lower_limit' => $request->input('txtLlimit'),
            'upper_limit' => $request->input('txtUlimit'),
        ]);

        $order->save();

        DB::update('update products set sellingprice=? where id = ?', [$price, $id]);
        echo "Record updated successfully.";

        return redirect()->back()->with(['status' => 'Data updated successfully.']);

    }

    public function UpdateInfo(Request $request)
    {

        $catName = $request->input('catName');
        $id = $request->input('id');
        $pname = $request->input('txtPname');
        $expire_date = $request->input('txtExpire');

        $price = $request->input('txtPrice');

        DB::update('update products set category=?, pname=?, sellingprice=?, expire_date=? where id = ?', [$catName, $pname, $price, $expire_date, $id]);
        echo "Record updated successfully.";

        return redirect()->back()->with(['status' => 'Data updated successfully.']);

    }

    public function addPro(Request $request)
    {

        $key = Input::get('field');
       // echo $key;

        // Get current user
        $user = new Product;
        // Set user name
        $pname = $request->input('name');
        $id = $request->input('id');

        $user->pname = $request->input('txtName');
        $user->category = $request->input('name');
        $user->sellingprice = $request->input('txtPrice');
        $user->unitquantity = $request->input('txtQty');
        $user->product_code = $request->input('txtDes1');
        $user->expire_date = $request->input('txtDes2');

        // Check if a profile image has been uploaded
        // if ($request->has('profile_image')) {

        //     echo $key;

        //     $photo = $request->file('profile_image');
        //     $imagename = time() . '.' . $photo->getClientOriginalExtension();

        //     $name = str_slug($request->input('name'));

        //     $destinationPath = public_path('..public/imgs/gallery');
        //     $thumb_img = Image::make($photo->getRealPath())->resize(200, 200);
        //     $thumb_img->save($destinationPath . '/' . $imagename, 80);

        //     $destinationPath = public_path('/normal_images');
        //     $path = $photo->move($destinationPath, $imagename);

        //     $folder = '/imgs/gallery/';

        //     $user->profile_image = $folder . '' . $name . '_' . $imagename;
        // }

        $user->save();

        return redirect()->back()->with(['status' => 'Data upload successfully.']);

    }

    public function updateProfile(Request $request)
    {

        $key = Input::get('field');
        echo $key;

        // Form validation
        $request->validate([

            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get current user
        $user = new Product;
        // Set user name
        $pname = $request->input('name');
        $id = $request->input('id');

        $user->pname = $request->input('name');
        $user->category = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {

            echo $key;
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = str_slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/imgs/gallery/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }

        DB::update('update products set profile_image = ? where id = ?', [$filePath, $id]);
        echo "Record updated successfully.";

        return redirect()->back()->with(['status' => 'Image upload successfully.']);
    }


    public function UpdateIndex()
    {

        $departmentData['data'] = Category::getCategory();
        return view('UpdateSearch')->with("departmentData", $departmentData);

    }

    public function getProducts($departmentid = 0)
    {

        // Fetch Employees by Departmentid
        $userData['data'] = Product::getdepartmentEmployee($departmentid);

        echo json_encode($userData);
        exit;

    }

    public function destroy($id)
    {

        DB::delete('delete from products where id = ?', [$id]);
        return redirect()->route('/')->with('success', 'Data Deleted');

    }

}
