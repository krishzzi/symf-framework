<?php

namespace App\Http\Controllers;

use App\Models\TestYear;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestingController extends Controller
{


    public function index(Request $request, $year)
    {
        $leapYear = new TestYear();
        if ($leapYear->isLeapYear($year)) {
            return new Response( 'Yep, this is a leap year! ');
        }

        return new Response( 'Nope, this is not a leap year.');
    }



}