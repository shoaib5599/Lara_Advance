<?php

namespace App\Http\Controllers;

use App\Contracts\MyInterface;
use Illuminate\Http\Request;

class MyController extends Controller
{
    protected $myService;

    public function __construct(MyInterface $myService)
    {
        $this->myService = $myService;
    }

    public function index()
    {
        $result = $this->myService->someMethod();
        return response()->json(['result' => $result]);
    }
}
