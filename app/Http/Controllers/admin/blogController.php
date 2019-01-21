<?php

namespace App\Http\Controllers\admin;

use App\blogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blogs::get();
        return view('admin.yazilar', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogekle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $veri)
    {
        $veri['blog_url']=str_slug($veri->blog_baslik);

        $ekle = blogs::create($veri->all());
        if($ekle) {
            if($veri->blog_resim){
               $res = $veri->file('blog_resim');
               $ad = $res->getClientOriginalName();
               $img =Image::make($res);
               $img->save('resimler/blog/'.$ad);
               $path = '/resimler/blog/'.$ad;
               blogs::where('id',$ekle->id)->update(['blog_resim'=>$path]);
            }
        }
        return redirect('/panel/blog');
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
        $yazi = blogs::find($id);
        return view('admin.yazi',compact('yazi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $veri, $id)
    {
        $veri['blog_url']=str_slug($veri->blog_baslik);

        $ekle = blogs::find($id)->update($veri->all());
        if($ekle) {
            if($veri->blog_resim){
                $res = $veri->file('blog_resim');
                $ad = $res->getClientOriginalName();
                $img =Image::make($res);
                $img->save('resimler/blog/'.$ad);
                $path = '/resimler/blog/'.$ad;
                blogs::find($id)->update(['blog_resim'=>$path]);
            }
        }
        return redirect('/panel/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blogs::find($id)->delete();
        return redirect('/panel/blog');
    }
}
