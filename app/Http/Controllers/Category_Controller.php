<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category_Controller extends Controller
{
    public function Cpu_Category_Route(){
        return view('Categories.Processor');
    }

    public function Ram_Category_Route(){
        return view('Categories.Ram');
    }

    public function SSD_Category_Route(){
        return view('Categories.SSD');
    }

    public function Gpu_Category_Route(){
        return view('Categories.Gpu');
    }

    public function HDD_Category_Route(){
        return view('Categories.HDD');
    }

    public function PSU_Category_Route(){
        return view('Categories.PSU');
    }

    public function Chassis_Category_Route(){
        return view('Categories.Chassis');
    }

    public function Monitor_Category_Route(){
        return view('Categories.Monitor');
    }

    public function Motherboard_Category_Route(){
        return view('Categories.Motherboard');
    }

    public function PreBuilt_Category_Route(){
        return view('Categories.Pre-Built');
    }
}
