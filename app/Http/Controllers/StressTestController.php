<?php namespace Votemike\Http\Controllers;

class StressTestController extends Controller
{
    public function index()
    {
        return redirect('https://votemike.github.io/stress-test/', 301);
    }
}
