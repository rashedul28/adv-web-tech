<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class pagesController extends Controller
{
	function home()
	{
		return view('home');
	}

	// function add_product(Request $r)
	function add_product_page()
	{
		return view('addproduct');
	}

	function add_product_submit(Request $req)
	// function add_product_submit()
	{
		$this->validate($req,
			[

				"product_name"=>"required",
				"product_quantity"=>"required",
				"manufactured_date"=>"required",
				"expired_date"=>"required"

			]



		);

		$p1 = new product();

		$p1->productname = $req->product_name;
		$p1->productquantity = $req->product_quantity;
		$p1->manufactureddate = $req->manufactured_date;
		$p1->expireddate = $req->expired_date;

		$p1->save();

		return view("addproduct");
	}

	function products_list()
	{


		$p1 = product::all();

		return view('productslist')
				->with('products', $p1);


		// return view('productslist');
	}


	function product_details($product_name)
	{
		return view('productprofile')
				->with('product_name', $product_name);
				// ->with('product_quantity', $product_name)
				// ->with('manufactured_date', $product_name)
				// ->with('expired_date', $product_name);
	}

}