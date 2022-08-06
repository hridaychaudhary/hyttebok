<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// use App\Repositories\DashboardRepository;

class HomeController extends Controller
{
    /** @var  DashboardRepository */
    private $dashboardRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct(DashboardRepository $dashboardRepo)
    // {
    //     // $this->dashboardRepository = $dashboardRepo;
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = $this->dashboardRepository->GetData();
        return view('home.index');
    }
}
