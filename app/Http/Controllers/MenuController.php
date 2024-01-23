<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SubMenu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function Menu(){
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    public function AddMenu(){
        return view('admin.menu.create');
    }

    public function StoreMenu(Request $request){
        Menu::insert([
            'menu' => $request->menu,
            'link' => $request->link,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('home.menu')->with('success','Menu Inserted Successfully');
    }

    public function EditMenu($id){
        $menus = Menu::find($id);
        return view('admin.menu.edit', compact('menus'));
    }

    public function UpdateMenu(Request $request, $id){
        Menu::find($id)->update([
            'menu' => $request->menu,
            'link' => $request->link,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('home.menu')->with('success','Menu Updated Successfully');
    }

    public function DeleteMenu($id){
        Menu::find($id)->delete();

        return redirect()->back()->with('success', 'Menu Deleted Successfully');

    }


//Sub menu
    public function SubMenu(){
        $submenus = SubMenu::all();
        return view('admin.submenu.index', compact('submenus'));
    }

    public function AddSubMenu(){
    $menus = Menu::all();

        return view('admin.submenu.create', compact('menus'));
    }

    public function StoreSubMenu(Request $request){

        
        SubMenu::insert([
            'menu_id' => $request->menu_id,
            'name' => $request->name,
            'link' => $request->link,
        ]);
        return Redirect()->route('home.submenu')->with('success','Sub Menu Inserted Successfully');
    }

    public function EditSubMenu($id){
        $menus = Menu::all();

        $submenu = SubMenu::find($id);
        return view('admin.submenu.edit', compact('submenu', 'menus'));
    }

    public function UpdateSubMenu(Request $request, $id){
        SubMenu::find($id)->update([
            'menu_id' => $request->menu_id,
            'name' => $request->name,
            'link' => $request->link,
        ]);
        return Redirect()->route('home.submenu')->with('success','SubMenu Updated Successfully');
    }

    public function DeleteSubMenu($id){
        SubMenu::find($id)->delete();

        return redirect()->back()->with('success', 'Sub Menu Deleted Successfully');

    }
}
