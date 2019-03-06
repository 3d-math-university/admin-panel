<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id')->paginate(5);
        return view('departments')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|nullable|required'
        ]);
        $imageName = '';
        if($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $ext = $request->file('image')->getClientOriginalExtension();
            $imageName = $name . '_' . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('public/uploads/images', $imageName);
        }

        $page = new Page;
        $page->title = $request->input('title');
        $page->image = $imageName;
        $page->active = false;
        $page->save();
        return redirect('departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);

        if($page == null) return redirect('404');
        
        return view('editpage')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);
        if($request->hasFile('image')) {
            $name = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $imageName = $name . '_' . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('public/uploads/images', $imageName);
        }
        else
            $imageName = Page::find($id)->image;
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->image = $imageName;
        $page->active = false;
        $page->save();
        return redirect('departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $page = Page::find($id);
        if($page == null) return redirect('404');
        $page->delete();

        return redirect('departments');
    }
}
