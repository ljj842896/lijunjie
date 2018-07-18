<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Address;
use DB;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
        return view('home.address.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request -> except('_token');
        //dump($data);
        $addr = new Address;
        // dump($addr);
        $addr -> address = $data['address'];
        $addr -> user_id = 2;
        $addr -> tel = $data['phone'];
        $addr -> uname = $data['uname'];
        $df = $addr -> df = $data['df'];
        if ($df == 1) {
            $res = DB::table('address') -> where('df','=',1) -> update(['df' => 0]);
            $addr -> save();
            return redirect('/address') -> with('success','添加成功!');
        }else{
            $addr -> save();
            return redirect('/address') -> with('success','添加成功!');
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
        //
        $data = Address::find($id);
        return view('home.address.edit',['v' => $data]);
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
        //
        $new_data = $request -> except('_token','_method');
        $old_date = Address::find($id);
        Address::where('df',1) -> update(['df' => 0]);
        $old_date -> df = $new_data['df'];
        $old_date -> uname = $new_data['uname'];
        $old_date -> address = $new_data['address'];
        $old_date -> tel = $new_data['phone'];
        $res = $old_date -> save();
        $data = Address::all();
        if ($res) {
            return view('home.address.index',['data' => $data]) -> with('success','修改成功!');
        }else{
            return back() -> with('error','修改失败!');
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
        //
        $address = Address::find($id);
        if ($address) {
            $address -> delete();
            return back() -> with('success','删除成功');
        }else{
            return back() -> with('error','删除失败');
        }
        
    }
}
