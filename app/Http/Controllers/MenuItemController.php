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

        // Stuur de menu-items door naar de view
        return view('dashboard', ['menuItems' => $menuItems]);
    }
}
