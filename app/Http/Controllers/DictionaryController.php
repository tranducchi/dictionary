<?php

namespace App\Http\Controllers;
use App\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    //
    public function addKey(Request $request){
        $english = $request->input('english');
        $vietnamese = $request->input('vietnamese');
        $dic = new Dictionary;

        $dic->english = $english;
        $dic->vietnamese = $vietnamese;

        $dic->save();
        return redirect('/')->with('success', 'Add Key success !');
    }
    public function checkKey(Request $request){
        $key = $request->input('english');
        if($tmp = Dictionary::where('english', $key)->first()){
            return redirect()->back()->with('mean',$tmp->vietnamese);
        }else{
            return redirect()->back()->with('error', 'Keyword not found');
        }

       
    }
}
