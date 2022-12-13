<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.configurations');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terminos = "";
        $client = new Client();
        $url = "https://www.savethechildren.org.bo/";
        $website = $client->request('GET', $url);
        $menu = $website->filter('section.theme_menu')->html();
        $menu_movil = $website->filter('div.mob-menu-right-panel.mobmenu')->html();

        $item = Configuration::firstOrCreate([
            'terms' => $terminos,
            'menu'=>$menu,
            'menu_movil'=> $menu_movil,
            'url'=> $url
        ]);
        $item->save();
        $item->update(
            [
                'terms' => $terminos,
                'menu'=>$menu,
                'menu_movil'=> $menu_movil,
                'url'=> $url
            ]
        );
        return redirect()->route('configurations.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(Configuration $configuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuration $configuration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        //
    }
}
