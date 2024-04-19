<?php
namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function show()
    {
        // Haal de menu-items uit de database op (in dit geval alle menu-items)
        $menuItems = MenuItem::all();

        // Stuur de menu-items door naar de dashboard view
        return view('dashboard', ['menuItems' => $menuItems]);
    }

    public function showAdminPanel()
    {
        return view('admin-panel');
    }

    public function edit(MenuItem $menuItem)
{
    return view('menu.edit', compact('menuItem'));
}

    /**
     * Verwijder een menu-item.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return redirect()->back()->with('success', 'Menu item successfully deleted.');
    }

    public function create()
    {
        return view('menu.create');
    }

    // In MenuItemController.php

    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload de afbeelding
        $imagePath = $request->file('image')->store('menu_images');

        // Maak een nieuw menu-item aan
        MenuItem::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        // Redirect terug naar het admin paneel met een succesbericht
        return redirect()->route('admin.panel')->with('success', 'Menu item successfully added.');
    }



}
