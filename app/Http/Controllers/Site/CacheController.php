<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use App\Item;
use App\Relationship;

class CacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate(Request $request, $site)
    {
	    $items = DB::select('select * from prenatal_Items where active = 1');
	    $unsorted = DB::select('select * from prenatal_Relationships');
	    
	    $relationships = array();
	    foreach($unsorted as $relationship){
		    $child = $relationship->child;
		    $parent = $relationship->parent;
		    
		    if(!isset($relationships[$child])) $relationships[$child] = array('parents' => array());
		    if(!isset($relationships[$parent])) $relationships[$parent] = array('children' => array());
		    
		    $relationships[$child]['parents'][$parent] = $this->formatParent($relationship);
		    $relationships[$parent]['children'][$child] = $this->formatChild($relationship);
		    
	    }
	    $return = array();
	    foreach($items as $item){
		    $return[] = $this->formatItem($item, $relationship);
	    }
	    return response()->json($return,200);
        $collection = $site. '_Items';
        DB::connection('mongodb')->createCollection($collection);
        foreach($items as $item){
	        //$mongo = DB::connection('mongodb')->collection($collection)->set();
        }
        
        return view('dev');
    }

}
