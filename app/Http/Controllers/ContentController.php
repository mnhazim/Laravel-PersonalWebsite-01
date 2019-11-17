<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\mnh_lookup_var;
use App\mnh_post;

class ContentController extends Controller
{
    public function index(){
        $extlink = DB::table('mnh_lookup_var')->where('id_mst', 2)->get();
        $quote = DB::table('mnh_quotes')->where('status', 1)->get();
        $owner = DB::table('mnh_owner')->first();
        $activity = DB::table('mnh_post')
                        ->select(DB::raw('*,mnh_post.created_at as datepost,mnh_post.title as title, mnh_post.image as image, mnh_post.id as postid'))
                        ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                        ->where('mnh_lookup_var.id', 1)
                        ->orderBy('mnh_post.created_at', 'desc')
                        ->limit(4)
                        ->get();

        $sharings = DB::table('mnh_post')
                        ->select(DB::raw('*,mnh_post.created_at as datepost,mnh_post.title as title, mnh_post.image as image, mnh_post.id as postid'))
                        ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                        ->where('mnh_lookup_var.id', 2)
                        ->orderBy('mnh_post.created_at', 'desc')
                        ->limit(3)
                        ->get();
                        
        $portfolios = DB::table('mnh_post')
                        ->select(DB::raw('*,mnh_post.created_at as datepost'))
                        ->leftJoin('mnh_lookup_var', 'mnh_post.id_var', '=', 'mnh_lookup_var.id')
                        ->where('mnh_lookup_var.id', 3)
                        ->orderBy('mnh_post.created_at', 'desc')
                        ->limit(4)
                        ->get();

        $categories = DB::table('mnh_lookup_var as a')
                        ->select(DB::raw('a.*,COUNT(b.id) as totalcount,SUM(b.visitor) AS visitor'))
                        ->leftJoin('mnh_post as b', 'a.id', '=', 'b.id_var')
                        ->whereIn('a.id', array(4,5,6,7,8))
                        ->groupBy('a.id')
                        ->get();

        return view('public_content.index', compact('quote' , 'owner', 'activity', 'sharings', 'portfolios', 'extlink', 'categories'));
    }

    public function category($code){
        $detailCategory = mnh_lookup_var::
                where('code', $code)->firstOrFail();

        $getCategory = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->where('b.code', $code)
                ->orderBy('a.created_at', 'desc')
                ->paginate(3);

        $randomCat  = $this->getRanCategory(4,array(4,5,6,7,8));
        $topHit     = $this->getTopHit($detailCategory->id, 2);
        $listTagCat = $this->getLookupVar(array(4,5,6,7,8));

        return view('public_content.category' , compact('getCategory', 'detailCategory', 'randomCat', 'topHit', 'listTagCat'));
    }

    public function activity(){
        $detailActivity = mnh_lookup_var::where('id', 1)->firstOrFail();
        $getActivity = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->where('b.id', 1)
                ->orderBy('a.created_at', 'desc')
                ->paginate(3);

         $randomAct  = $this->getRanCategory(4,array(1,2));
         $topHit     = $this->getTopHit($detailActivity->id, 2);
         $listTagAct = $this->getLookupVar(array(1,2));

        return view('public_content.activity', compact('getActivity', 'detailActivity', 'topHit', 'listTagAct','randomAct'));
    }

    public function postActivity($id){
        $detailActivity = mnh_lookup_var::where('id', 1)->firstOrFail();
        $getPost = mnh_post::findorfail($id);
        $topHit     = $this->getTopHit($detailActivity->id, 2);
        $randomAct  = $this->getRanCategory(3,array(1,2));
        $listTagAct = $this->getLookupVar(array(1,2));

        return view('public_content.postActivity', compact('detailActivity', 'getPost', 'topHit', 'randomAct', 'listTagAct'));
    }

    public function sharing(){
        $detailSharing = mnh_lookup_var::where('id', 2)->firstOrFail();
        $getSharing = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->where('b.id', 1)
                ->orderBy('a.created_at', 'desc')
                ->paginate(3);

         $randomAct  = $this->getRanCategory(4,array(1,2));
         $topHit     = $this->getTopHit($detailSharing->id, 2);
         $listTagAct = $this->getLookupVar(array(1,2));

        return view('public_content.sharing', compact('getSharing', 'detailSharing', 'topHit', 'listTagAct','randomAct'));
    }

    public function postSharing($id){
        $detailSharing = mnh_lookup_var::where('id', 1)->firstOrFail();
        $getPost = mnh_post::findorfail($id);
        $topHit     = $this->getTopHit($detailSharing->id, 2);
        $randomAct  = $this->getRanCategory(3,array(1,2));
        $listTagAct = $this->getLookupVar(array(1,2));

        return view('public_content.postSharing', compact('detailSharing', 'getPost', 'topHit', 'randomAct', 'listTagAct'));
    }

    //get random all category
    private function getRanCategory($limit = 10, $idmst){
        $data = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost, b.code as code'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->whereIn('a.id_var', $idmst)
                ->get()
                ->random($limit);
        if ($data) {
            return $data;
        } else {
            return 0;
        }
    }

    //getTopHit catetegory > limit
    private function getTopHit($category = false, $limit = 10){
        $data = DB::table('mnh_post as a')
                ->select(DB::raw('a.*, b.title as typepost'))
                ->leftJoin('mnh_lookup_var as b', 'a.id_var' , 'b.id')
                ->whereIn('a.id_var', array($category))
                ->orderBy('a.visitor', 'desc')
                ->limit($limit)
                ->get();
        if ($data) {
            return $data;
        } else {
            return 0;
        }
    }

    //getLookupVar
    private function getLookupVar($idmst){
        $data = DB::table('mnh_lookup_var as a')
            ->whereIn('a.id', $idmst)
            ->get();

        if ($data) {
            return $data;
        } else {
            return 0;
        }

    }
}
