<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('people')->get();
        // DB::select('select * from prople where id = ?', [1])
        return view('list')-> with('people', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'fname' => 'required|min:3|max:10',
            'lname'=> 'required|min:3|max:10',
            'age'=>'required|numeric',
        ]);

        DB::table('people')->insert ([
            'fname'=> $request->fname,
            'lname' => $request->lname,
            'age'=> $request->age,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // dd($data);
        return redirect('people');
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
        $data = DB::table('people')->find($id);
        // dd($data);
        return view('edit')->with('people', $data);
        // Session::flash('message', '');
            // echo $id;
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
        $request->validate([ 
            'fname' => 'required|min:3|max:10',
            'lname'=> 'required|min:3|max:10',
            'age'=>'required|numeric',
        ]);
        DB::table('people')->where('id','=' ,$id)->update ([
            'fname'=> $request->fname,
            'lname' => $request->lname,
            'age'=> $request->age,
            'created_at' => now('Asia/Bangkok'),
            'updated_at' => now('Asia/Bangkok')
        ]);
        $request->session()->flash('messges', 'Create Success' );
            return redirect ('people');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('people')->where('id','=' ,$id)->delete();
        return redirect ('people');
    }
}
