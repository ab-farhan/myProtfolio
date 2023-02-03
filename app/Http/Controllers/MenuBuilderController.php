<?php

namespace App\Http\Controllers;

use App\Models\MenuBuilder;
use Illuminate\Http\Request;

class MenuBuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = MenuBuilder::first();
        $prevMenu = '';
        if (!empty($menu)) {
            $prevMenu = $menu->menus;
            
        }
        return view('layouts.backend.menu_builder.index',compact('menu','prevMenu'));
    }


    public function update(Request $request, MenuBuilder $menuBuilder)
    {
        $prevMenu = MenuBuilder::first();
        // $prevMenu->delete();

        $prevMenu->update([
            'menus'=>$request->str
         ]);
       

        return response()->json(['status' => 'success', 'message' => 'Menu updated successfully!']);
    }


}
