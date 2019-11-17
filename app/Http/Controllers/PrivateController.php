<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Mnh_post;
use App\mnh_lookup_mst;
use App\mnh_lookup_var;
use App\mnh_quote;


class PrivateController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	//dashboard
    public function index(){
        $posts = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->orderBy('a.created_at', 'desc')
                ->limit(10)
                ->get();

    	return view('private_content.index', compact('posts'));
    }

    //addPost
    public function addPost(){
        $listtypepost = mnh_lookup_var::where('id_mst', '=', 1)->get();
        $liststatus = mnh_lookup_var::where('id_mst', '=', 4)->get();
        $listplace = mnh_lookup_var::where('id_mst', '=', 5)->get();

        return view('private_content.addPost', compact('listtypepost' , 'liststatus', 'listplace'));
    }

    //addPostSubmit
    public function addPostSubmit(){

        request()->validate([
            'title' => 'required',
            'typepost' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'place' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $newpost = new Mnh_post;
        $newpost->id_var = Request('typepost');
        $newpost->title = Request('title');
        $newpost->desc = Request('desc');
        $newpost->content = Request('content');
        $newpost->place = Request('place');
        $newpost->status = Request('status');
        if ($image = request()->file('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $newpost->image = $imageName;
            $image->move(public_path('images'), $imageName);
        }
        $newpost->save();

        session()->flash('message', 'your data has been saved');
        return back();
    }

    //viewPost
    public function viewPost($mnh_post){
        $post = DB::table('mnh_post')
                ->select(DB::raw('*,mnh_post.created_at as datepost,mnh_post.title as title,mnh_post.id as postid, mnh_post.image as image,mnh_lookup_var.title as typepost'))
                ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                ->where('mnh_post.id', $mnh_post)
                ->first();

        //dd($post);
        return view('private_content.viewPost', compact('liststatus', 'listplace', 'post'));
    }

    //Edit Post
    public function editPost($mnh_post){
        $liststatus = mnh_lookup_var::where('id_mst', '=', 4)->get();
        $listplace = mnh_lookup_var::where('id_mst', '=', 5)->get();

        $posts = DB::table('mnh_post as a')
                ->select(DB::raw('a.*,b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var', '=', 'b.id')
                ->leftJoin('mnh_lookup_var as c', 'a.place', '=' , 'c.id')
                ->leftJoin('mnh_lookup_var as d', 'a.status', '=', 'd.id')
                ->where('a.id', $mnh_post)
                ->first();

        return view('private_content.editPost', compact('posts', 'liststatus', 'listplace'));
    }

    //Edit Post Submit
    public function editPostSubmit($mnh_post){
        request()->validate([
            'title' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'place' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $editpost = mnh_post::find($mnh_post);
        $editpost->title = Request('title');
        $editpost->desc = Request('desc');
        $editpost->content = Request('content');
        $editpost->place = Request('place');
        $editpost->status = Request('status');
        if ($image = request()->file('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $editpost->image = $imageName;
            $image->move(public_path('images'), $imageName);
        }
        $editpost->save();
        
        return back();
    }

    //Delete Post
    public function deletePost($mnh_post){
        $posts = Mnh_post::find($mnh_post)->delete();
        return back();
    }

    //activity
    public function activity(){
        $owner = Auth::user();
        $activity = DB::table('mnh_post')
                        ->select(DB::raw('*,mnh_post.created_at as datepost,mnh_post.title as title,mnh_post.id as postid, mnh_post.image as image'))
                        ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                        ->where('mnh_lookup_var.id', 1)
                        ->orderBy('mnh_post.created_at', 'desc')
                        ->get();

        return view('private_content.activity', compact('activity'));
    }

    //sharing
    public function sharing(){
        $sharing = DB::table('mnh_post')
                        ->select(DB::raw('*,mnh_post.created_at as datepost,mnh_post.title as title,mnh_post.id as postid, mnh_post.image as image'))
                        ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                        ->where('mnh_lookup_var.id', 2)
                        ->orderBy('mnh_post.created_at', 'desc')
                        ->get();

    	return view('private_content.sharing', compact('sharing'));
    }

    //sharing
    public function quote(){
        $liststatus = DB::table('mnh_lookup_var')->where('id_mst', 4)->get();
        $quotes = DB::table('mnh_quotes as a')
                        ->select(DB::raw('a.*, b.title as status, a.status as statuscode'))
                        ->leftJoin('mnh_lookup_var as b', 'a.status', '=', 'b.code')
                        ->orderBy('a.created_at', 'asc')
                        ->get();

        return view('private_content.quote', compact('quotes', 'liststatus'));
    }

    //quote add
    public function addQuoteSubmit(){
        request()->validate([
            'desc' => 'required',
            'from' => 'required',
            'status' => 'required'
        ]);

        $quote = new mnh_quote;
        $quote->desc = Request('desc');
        $quote->from = Request('from');
        $quote->status = Request('status');
        $quote->save();

        session()->flash('success', 'your data has been saved');
        return back();

    }

    //quote edit
    public function editQuote($mnh_quote){
        $liststatus = DB::table('mnh_lookup_var')->where('id_mst', 4)->get();
        $quote = mnh_quote::find($mnh_quote);
        return view('private_content.editQuote', compact('quote', 'liststatus'));
    }

    //quote edit
    public function editQuoteSubmit($mnh_quote){
        request()->validate([
            'desc' => 'required',
            'from' => 'required',
            'status' => 'required'
        ]);

        $quote = mnh_quote::find($mnh_quote);
        $quote->desc = Request('desc');
        $quote->from = Request('from');
        $quote->status = Request('status');
        $quote->save();

        session()->flash('success', 'your data has been saved');
        return back();
    }

    //quote delete
    public function deleteQuote($mnh_quote){

        $quotes = mnh_quote::find($mnh_quote)->delete();
        return redirect("/admin/quote")->with('success', 'your data has been deleted');

    }

    //category
    public function category(){
    	return view('private_content.category');
    }

    //form
    public function form(){
    	return view('private_content.form');
    }

    //lookup
    public function lookup(){
        $lookup = DB::table('mnh_lookup_mst')
                        ->select(DB::raw('mnh_lookup_mst.id as mstid,mnh_lookup_mst.title as title,mnh_lookup_mst.created_at as created_at, mnh_lookup_mst.updated_at as updated_at,COUNT(mnh_lookup_var.id) as totalcount'))
                        ->leftJoin('mnh_lookup_var', 'mnh_lookup_var.id_mst', '=', 'mnh_lookup_mst.id')
                        ->groupBy('mnh_lookup_mst.id')
                        ->get();
        return view('private_content.lookup', compact('lookup'));
    }

    //lookup add
    public function addLookup(){
        request()->validate([
            'title' => 'required'
        ]);

        $lookupmst = new mnh_lookup_mst;
        $lookupmst->title = Request('title');
        $lookupmst->save();

        session()->flash('success', 'your data has been saved');
        return back();

    }

    //lookup delete
    public function deleteLookup($mnh_lookup_mst){

        $lookupmst = mnh_lookup_mst::find($mnh_lookup_mst)->delete();
        return redirect("/admin/lookup")->with('success', 'your data has been deleted');

    }

    //lookup edit
    public function editLookup($mnh_lookup_mst){
        $lookupmst = mnh_lookup_mst::find($mnh_lookup_mst);
        return view('private_content.editLookup', compact('lookupmst'));
    }

    //lookup edit Submit
    public function editLookupSubmit($mnh_lookup_mst){

        request()->validate([
            'title' => 'required'
        ]);

        $lookupmst = mnh_lookup_mst::find($mnh_lookup_mst);
        $lookupmst->title = Request('title');
        $lookupmst->save();
        
        return redirect("/admin/lookup");
    }

    //lookupvar
    public function lookupvar($mnh_lookup_mst){
        $msttitle = mnh_lookup_mst::find($mnh_lookup_mst);
        $lookupvarlist = DB::table('mnh_lookup_var')
        ->select(DB::raw('mnh_lookup_var.title as vartitle, mnh_lookup_var.image as varimg, mnh_lookup_var.link as varlink,mnh_lookup_var.id as varid,mnh_lookup_mst.title as msttitle,mnh_lookup_var.created_at as created_at,mnh_lookup_var.updated_at as updated_at, mnh_lookup_var.code as code'))
        ->leftJoin('mnh_lookup_mst', 'mnh_lookup_mst.id', '=', 'mnh_lookup_var.id_mst')
        ->where('mnh_lookup_var.id_mst', '=', $mnh_lookup_mst)
        ->get();

        return view('private_content.lookupvar', compact('lookupvarlist', 'msttitle'));
    }

    public function addLookupvar(){
        request()->validate([
            'mstid' => 'required',
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg'
        ]);

        $lookupvar = new mnh_lookup_var;
        $lookupvar->id_mst = Request('mstid');
        $lookupvar->title = Request('title');
        if ($image = request()->file('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $lookupvar->image = $imageName;
            $image->move(public_path('images'), $imageName);
        }
        $lookupvar->code = (Request('code') == '') ? '' : Request('code') ;
        $lookupvar->link = (Request('link') == '') ? '#' : Request('link') ;
        $lookupvar->save();

        session()->flash('success', 'your data has been saved');
        return back();
    }

    //lookup delete
    public function deleteLookupvar($mnh_lookup_var){

        $lookupmst = mnh_lookup_var::find($mnh_lookup_var)->delete();
        return back();

    }

    //lookup edit
    public function editLookupvar($mnh_lookup_var){
        $lookupvar = mnh_lookup_var::find($mnh_lookup_var);
        return view('private_content.editLookupvar', compact('lookupvar'));
    }

    //lookup edit Submit
    public function editLookupvarSubmit($mnh_lookup_var){

        request()->validate([
            'mstid' => 'required',
            'title' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg'
        ]);

        $lookupvar = mnh_lookup_var::find($mnh_lookup_var);

        $lookupvar->id_mst = Request('mstid');
        $lookupvar->title = Request('title');
        if ($image = request()->file('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            $lookupvar->image = $imageName;
            $image->move(public_path('images'), $imageName);
        }
        $lookupvar->code = (Request('code') == '') ? '' : Request('code') ;
        $lookupvar->link = Request('link') ;
        $lookupvar->save();
        
        return back();
    }
}
