<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Address;
use DB;
use App\Http\Requests\AddressRequest;
class AddressController extends Controller
{

     public function __construct()
    {
       $this -> middleware('sys');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = session('users');
        $users_id = $user_id['user_id'];
        $data = Address::where('user_id',$users_id) -> get();
        return view('home.address.index',['users_address' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_id = session('users');
        $users_id = $user_id['user_id'];
        $data = Address::where('user_id',$users_id) -> get();
        return view('home.address.create',['users_address' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        //
        $data = $request -> except('_token');
        //dump($data);
        $addr = new Address;
        // dump($addr);
        $user_id = session('users');
        if ($user_id['user_id']) {
            $addr -> user_id = $user_id['user_id'];
        }
        if($data['df'] == 1){
                DB::table('address') -> where('df','=',1) -> update(['df' => 0]);
                $addr -> df = 1;
            }else{
                $addr -> df = 0;
            }
        $addr -> uname = $data['uname'];
        $addr -> address = $data['address'];
        $addr -> tel = $data['phone'];
        $res = $addr -> save();
        if ($res) {
            return redirect('/address') -> with('success','添加成功!');
        }else{
            return back() -> with('error','添加失败!');
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
        $user_id = session('users');
        $users_id = $user_id['user_id'];
        $users_data = Address::where('user_id',$users_id) -> get();
        $data = Address::find($id);
        return view('home.address.edit',['v' => $data,'users_data' => $users_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request, $id)
    {
        //
        $new_data = $request -> except('_token','_method');
        $old_date = Address::find($id);
        if ($request -> df == 1) {
            Address::where('df',1) -> update(['df' => 0]);
            $old_date -> df = 1;
        }else{
            $old_date -> df = 0;
        }
        
        
        $old_date -> uname = $new_data['uname'];
        $old_date -> address = $new_data['address'];
        $old_date -> tel = $new_data['phone'];
        $res = $old_date -> save();

        if ($res) {
            return redirect('/address') -> with('success','修改成功!');
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
