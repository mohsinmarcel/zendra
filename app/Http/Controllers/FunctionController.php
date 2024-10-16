<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Category;
use App\Models\Mobile;
use App\Models\Product;
use App\Models\ProductAttachment;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class FunctionController extends Controller
{

    public function website()
    {
        $sale = Product::where('is_on_sale',1)->where('is_featured',0)->orderBy('created_at','DESC')->get();
        $featured = Product::where('is_featured',1)->where('is_on_sale',0)->orderBy('created_at','DESC')->get();
        $mobiles = Mobile::orderBy('created_at','DESC')->get();
        $categories = Category::with('products')->whereHas('products')->get();
        return view ('website.pages.index',compact('categories','sale','featured','mobiles'));
    }

    public function productsByCategory($category)
    {
        $category = Category::where('slug',$category)->first();
        $products = Product::with('productAttachments')->where('category_id',$category->id)->whereHas('productAttachments')->get();
        return view ('website.pages.products_by_category',compact('category','products'));
    }

    public function productDetail($slug)
    {
        $product = Product::with('productAttachments')->whereHas('productAttachments')->where('slug',$slug)->first();
        return view ('website.pages.product_detail',compact('product'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view ('admin.pages.category.list',compact('categories'));
    }

    public function products()
    {
        $products = Product::all();
        return view ('admin.pages.products.list',compact('products'));
    }

    public function createCategory()
    {
        return view ('admin.pages.category.create');
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view ('admin.pages.products.create',compact('categories'));
    }

    public function saveCategory(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'file' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error' , 'errors' => $validator->errors()],422);
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $logoPath = Helper::UploadSingleImage($request,'file','category_images');
        }

        $user = session('admin');
        // dd($user);
        $cat = Category::create([
            'admin_id' => $user->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $logoPath,
            'description' => $request->description,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'categroy Created Successfully',
        ], 200);
    }

    public function saveProduct(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required',
            'in_stock' => 'required',
            'is_available' => 'required',
            'price' => 'required',
            'discounted_price' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error' , 'errors' => $validator->errors()],422);
        }
        $attachments = [];
        if ($request->hasFile('attachments')) {
            $attachments = Helper::UploadMultipleImages($request, 'attachments', 'attachments');
        }
        $user = session('admin');
        $product = Product::create([
            'admin_id' => $user->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'in_stock' => $request->in_stock,
            'is_available' => $request->is_available,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'is_on_sale' => $request->is_on_sale,
            'is_featured' => $request->is_featured,
            'description' => $request->description,

        ]);
        if (!empty($attachments)) {
            foreach ($attachments as $attachment) {
                $extension = pathinfo($attachment, PATHINFO_EXTENSION);
                ProductAttachment::create([
                    'product_id' => $product->id,
                    'attachment' => $attachment,
                    'attachment_type' => $extension,
                ]);
            }
        }
        return response()->json([
            'status' => 'success',
            'message' => 'categroy Created Successfully',
        ], 200);
    }

    public function updateCategory($id)
    {
        $category = Category::find($id);
        return view ('admin.pages.category.update',compact('category'));
    }

    public function editCategory(Request $request,$id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error' , 'errors' => $validator->errors()],422);
        }
        $user = session('admin');
        $cat = Category::find($id)->update([
            'user_id' => $user->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'categroy Created Successfully',
        ], 200);
    }

    public function deleteCategory($id)
    {
        $user = session('admin');
        $cat = Category::find($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'categroy Deleted Successfully',
        ], 200);
    }

    public function deleteProduct($id)
    {
        $user = session('admin');
        $attachment = ProductAttachment::where('product_id',$id)->delete();
        $cat = Product::find($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Product  Deleted Successfully',
        ], 200);
    }

    public function createUpdateSettings()
    {
        return view ('admin.pages.settings.create_update');
    }

    public function saveUpdateSettings(Request $request)
    {
        // dd($request->all());
        $requestData = $request->all();
        foreach ($requestData as $key => $value) {
            if ($key === 'banner_image' && $request->hasFile('banner_image')) {
                $file = $request->file('banner_image');
                $logoPath = Helper::UploadSingleImage($request,'banner_image','setting_images');
                $value = $logoPath;
            }

            if ($key === 'shop_logo' && $request->hasFile('shop_logo')) {
                $file = $request->file('shop_logo');
                $logoPath = Helper::UploadSingleImage($request,'shop_logo','setting_images');
                $value = $logoPath;
            }

            $setting = Setting::where('key', $key)->first();

            if ($setting) {
                $setting->update(['value' => $value]);
            } else {
                Setting::create([
                    'key' => $key,
                    'value' => $value,
                ]);
            }
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Settings Updated Successfully',
        ], 200);
    }

    public function mobiles()
    {
        $mobiles = Mobile::all();
        return view ('admin.pages.mobiles.list',compact('mobiles'));
    }


    public function createmobile()
    {
        return view ('admin.pages.mobiles.create');
    }

    public function savemobile(Request $request)
    {
        // dd(request()->all());
        $validator = Validator::make($request->all(), [
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'price' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 'error' , 'errors' => $validator->errors()],422);
        }
        $attachments = [];
        if ($request->hasFile('file')) {
            $attachments = Helper::UploadMultipleImages($request, 'file', 'mobile_attachments');
        }
        $user = session('admin');
        $product = Mobile::create([
            'admin_id' => $user->id,
            'brand' => $request->brand,
            'model' => $request->model,
            'slug' => Str::slug($request->brand),
            'color' => $request->color,
            'price' => $request->price,
            'description' => $request->description,
            'images' => json_encode($attachments),
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Phone Added Successfully',
        ], 200);
    }

    public function deletemobile($id)
    {
        $mobile = Mobile::find($id)->Delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Phone Deleted Successfully',
        ], 200);
    }
}
