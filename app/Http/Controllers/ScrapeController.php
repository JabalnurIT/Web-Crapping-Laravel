<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapeController extends Controller
{

    private $info_states = [];
    private $jd_states = [];
    private $bd_states = [];

    public function get_data() {
        $client = new Client();
        
        $judul = $client->request('GET', 'https://oploverz.biz/'); 

        $judul->filter('.bsx .inf h2 a')->each(function($item) {
            array_push($this->jd_states, $item->text());
        });

        $info = $client->request('GET', 'https://oploverz.biz/'); 

        $info->filter('.inf ul li')->each(function($item) {
            array_push($this->info_states, $item->text());
        });

       
        

        $result = $this->returnResult();

        return response($result, 200);
        
    }

    function returnResult() {
        $output = [];
        $p_judul = count($this->jd_states);
        $p_info = count($this->info_states);
        for($j=0;$j<$p_judul;$j++)
        {
            $output['judul'][$j] = $this->jd_states[$j];
        }
        for($j=0;$j<$p_info;$j++)
        {
            $output['info'][$j] = $this->info_states[$j];
        }
        
        $output['p'] = $p_judul;

        return view('welcome',compact('output'));
    }
}
