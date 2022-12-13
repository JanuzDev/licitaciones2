<?php

namespace App\Console\Commands;

use App\Models\Configuration;
use Illuminate\Console\Command;
use Goutte\Client;

class getMenu extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getmenu:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $menus = Configuration::get();
        $terminos = "";
        $url = "https://www.savethechildren.org.bo/";
    /*   $url = "https://www.savethechildrenbolivia.org.bo/"; */

        if(!empty($menus)){
            $client = new Client();
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

        }else{
            return "No se encontro la pagina de origen";
        }




    }
}
