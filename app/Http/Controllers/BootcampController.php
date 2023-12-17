<?php

namespace App\Http\Controllers;

use App\Models\bootcamp;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnSelf;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = bootcamp::all();
        // dd($data);
        return view('bootcamp',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-bootcamp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'pesan' => 'required',
        ]);
        $data = bootcamp::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('dashboard_bootcamp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
    public function show(bootcamp $bootcamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = bootcamp::find($id);
        return view('edit-bootcamp',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'nim' => 'required',
        //     'pesan' => 'required',
        // ]);
        $data = bootcamp::find($id);

        if(!$data){
            return redirect()->route('dashboard_bootcamp');
        }

        $data->nama =  $request->nama;
        $data->nim = $request->nim;
        $data->pesan = $request->pesan;
        $data->save();
      
        return redirect()->route('dashboard_bootcamp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bootcamp  $bootcamp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('bootcamps')->where('id',$id)->delete();
        return redirect()->route('dashboard_bootcamp');
    }
}
