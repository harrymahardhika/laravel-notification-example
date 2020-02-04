<?php

namespace App\Http\Controllers;

use App\Notifications\OrderCreatedNotification;
use App\Order;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;
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

        Notification::send(User::all(), new OrderCreatedNotification($order));

        return redirect()->route('home');
    }
}
