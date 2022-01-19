<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time()."___".$file->getClientOriginalName();
            $file->move('admin_r/images/', $image);
            $data['image']=$image;
        }

        
        Service::create($data);

            return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $service=Service::where('slug', $slug)->first();
        return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $service=Service::where('slug', $slug)->first();
        return view('admin.service.edit', compact('service'));
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
        $service=Service::findOrFail($id);

        $service->name=$request->name;
        $service->description=$request->description;
        $service->icon=$request->icon;
        $service->body=$request->body;
        $service->meta_title=$request->meta_title;
        $service->meta_description=$request->meta_description;
        $service->meta_keywords=$request->meta_keywords;

        $service['slug'] = Str::slug($request->name);
        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time()."___".$file->getClientOriginalName();
            $file->move('admin_r/images/', $image);
            $service->image=$image;
        }

        $service->save();

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        
        return back();

    }
}
