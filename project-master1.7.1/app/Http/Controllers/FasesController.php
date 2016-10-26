<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fases;


class FasesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $q = $request->get('q');
        $fases = fases::where('title', 'LIKE', '%'.$q.'%')
            ->orderBy('title')->paginate(10);
        return view('fases.index', compact('fases', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'title' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:255',
            'datum' => 'required',
        ]);
         
        $data = $request->only('title', 'beschrijving', 'datum');
        
        $fases = fases::create($data);
        $fases->products()->sync($request->get('product_lists'));

        \Flash::success('fase saved.');
        return redirect()->route('fases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
      */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fases = fases::findOrFail($id);
        return view('fases.edit', compact('fases'));
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
        $fases = fases::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:fases,title,' . $fases->id,
        ]);

           $data = $request->only('title', 'beschrijving', 'datum');
        
        $fases->update($data);
        if (count($request->get('product_lists')) > 0) {
            $fases->products()->sync($request->get('product_lists'));
        } else {
            // no category set, detach all
            $fases->products()->detach();
        }
        
        \Flash::success('fase updated.');
        return redirect()->route('fases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fases::find($id)->delete();
        \Flash::success('fase deleted.');
        return redirect()->route('fases.index');
    }
}
