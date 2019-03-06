<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Page;

class StatusController extends Controller
{
    public function __invoke(Request $request){
        $id = $request->input('id');
        $value = $request->input('value');

        if($value)  $value = 1;
        else        $value = 0;

        $page = Page::find($id);
        $page->active = $value;

        $page->save();

        return redirect('departments');
    }
}
