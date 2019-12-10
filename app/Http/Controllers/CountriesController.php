<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    public function create()
    {
        return view('country.create');
    }

    public function save(Request $request)
    {
        // $country_name = $request->name;
        // $country_capital = $request->capital;
        // $country_population = $request->population;
        // $country_currency = $request->currency;
        
        $country_name = request('name');
        $country_capital = request('capital');
        $country_population = request('population');
        $country_currency = request('currency');

        // $country = new Country();

        // $country->name = $country_name;
        // $country->capital = $country_capital;
        // $country->population = $country_population;
        // $country->currency = $country_currency;

        // $country->save();

        // Country::create([
        //     'name' => $country_name,
        //     'capital' => $country_capital,
        //     'population' => $country_population,
        //     'currency' => $country_currency
        // ]);

        Country::create( request()->except('_token') );

        return back();
    }

    public function list()
    {
        $country_list = Country::all(); // select * from countries;

        return view('country.list', [
            'cl' => $country_list
        ]);
        // return view('country.list')->with('un', $user_name);
        // return view('country.list', compact('user_name'));
    }
}
