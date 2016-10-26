<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Vraag;
use App\User;
use DB;
use App\Answers_user;
use Auth;

use App\Category;

class CatalogsController extends Controller
{

    public function index(Request $request)
    {
        $vragen = Vraag::all();

        $q = $request->get('q');
        if ($request->has('cat')) {
            $selected_category = Category::find($request->get('cat'));

            // can't use this to get selected category > child's > product
            // $products = $selected_category->products()->where('name', 'LIKE', '%'.$q.'%')->paginate(4);

            // we use this to get product from current category and its child
            $products = Product::whereIn('id', $selected_category->related_products_id)
                ->where('name', 'LIKE', '%'.$q.'%')->paginate(4);
        } else {
            $products = Product::where('name', 'LIKE', '%'.$q.'%')->paginate(4);
        }

        return view('catalogs.index', compact('products', 'q', 'cat', 'selected_category'));
    }
    
    public function show(Product $product)
    {
        if(Auth::user())
        {
            $userID = Auth::user()->id;
        }
        else
        {
            $userID = 0;
        }


        $userAnswers = DB::table('answers_users')
                    ->where('user_id', '=', $userID)
                    ->get();

        return view('catalogs.projects', compact('product', 'userAnswers'));
    }
}
