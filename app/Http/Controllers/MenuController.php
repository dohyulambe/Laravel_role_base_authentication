<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Menu;

 
class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = menu::all();
        return view('menu.list', compact('menus','menus'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menu.create');
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
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required'
        ]);
 
        $menu = new menu([
            'first_name' => $request->get('txtFirstName'),
            'last_name'=> $request->get('txtLastName'),
            'address'=> $request->get('txtAddress')
        ]);
 
        $menu->save();
        return redirect('/menu')->with('success', 'menu has been added');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
        return view('menu.view', compact('menu'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        //
        return view('menu.edit',compact('menu'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
 
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required'
        ]);
 
 
        $menu = menu::find($id);
        $menu->first_name = $request->get('txtFirstName');
        $menu->last_name = $request->get('txtLastName');
        $menu->address = $request->get('txtAddress');
 
        $menu->update();
 
        return redirect('/menu')->with('success', 'menu updated successfully');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        //
        $menu->delete();
        return redirect('/menu')->with('success', 'User deleted successfully');
    }
}
?>