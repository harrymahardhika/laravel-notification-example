<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    /**
     * @return RedirectResponse
     */
    public function generateOrder(): RedirectResponse
    {
        $order = factory(Order::class)->create();

        event(new OrderCreated($order));

        return redirect()->route('home');
    }
}
