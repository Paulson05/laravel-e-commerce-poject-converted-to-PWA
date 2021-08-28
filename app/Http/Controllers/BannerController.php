<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners   = Banner::all();

        return view('backend.admin.banner.index')->with([
            'banners' => $banners
        ]);
    }
    public function fetchData(){
        $banners = Banner::all();
        return response([
            'banners'=>$banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'string|required',
            'description'=> 'string|nullable',
            'conditions'=>'nullable|in:banner, promo',
            'photo'=> 'required',
            'status'=>'nullable|in:active, inactive',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $data= $request->all();
            $slug=Str::slug($request->input('title'));
            $slug_count=Banner::where('slug', $slug)->count();
            if ($slug_count){
                $slug = time(). '_'. $slug;
            }
            $data['slug']=$slug;

            $status=Banner::create($data);
            if ($status){
                return response()->json([
                    'status' => 200,
                    'message' => 'banner added successfully',

                ]);
            }
            else{
                return redirect()->back();

            }
        }


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
        $banner=Banner::find($id);
        if($banner){
            return view('backend.banner.edit',compact('banner'));
        }
        else{
            return back()->with('error');
        }
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
        $this->validate($request,[
            'title' => 'string|required',
            'slug'=> 'string|required',
            'description'=> 'string|nullable',
            'conditions'=>'nullable|in:banner, promo',
            'photo'=> 'required',
            'status'=>'nullable|in:active, inactive',

        ]);

        $banner=Banner::find($id);
        if($banner){
            $data= $request->all();

            $status=Banner::update($data);
        }

        else{
            return back()->with('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Banner::find($id);
        $post->delete();
        return response()->json([
            'status' => 200,
            'message' => 'post deleted successfully',

        ]);


    }
}
