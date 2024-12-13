<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\MenuItem;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'menu' => $this->getMenuItems(),
        ]);
    }

    private function getMenuItems()
    {
        return [
            'catalog' => 'Каталог',
            'manufactured' => 'Производители',
            'for_who' => 'Для кого мы работаем',
            'certificates' => 'Сертификаты',
            'about' => 'О нас',
            'faq' => 'FAQ',
            'contacts' => 'Контакты',
        ];
    }
}