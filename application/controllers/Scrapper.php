<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Goutte\Client; 
class Scrapper extends CI_Controller {

    public $counts = []; 

    public function index(){
        $summary = $this->getSummary();
        
        var_dump($summary);
        for($i=0 ; $i<count($summary);$i++){
            $data = array(
                'date' => $summary[$i]['date'] ,
                'totalCases' => $summary[$i]['totalCases'],
                'newCases' => $summary[$i]['newCases'],
                'totalRecoveries' =>$summary[$i]['totalRecoveries'] ,
                'newRecoveries' =>$summary[$i]['newRecoveries'] ,
                'totalDeaths' => $summary[$i]['totalDeaths'],
                'newDeaths' => $summary[$i]['newDeaths'],
            );
           $this->db->insert('covid_timeline',$data);
          // var_dump($data);
        }
      
        
    }
    public function getSummary(){
        $get_data = $this->callAPI('GET', 'https://data.nepalcorona.info/api/v1/covid/timeline', false);
        $response = json_decode($get_data, true);
        return $response;
    }

public function CallAPI($method, $url)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => $method,
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}
}

?>