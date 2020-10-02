<?php defined('BASEPATH') OR exit('No direct script access allowed');
class APImodel extends CI_Model {

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

    public function getSummary(){
        $get_data = $this->callAPI('GET', 'https://nepalcorona.info/api/v1/data/nepal', false);
        $response = json_decode($get_data, true);
        return $response;
    }
    public function WHORSSFEED(){
        $get_data = $this->callAPI('GET', 'https://www.who.int/rss-feeds/news-english.xml', false);
        return $get_data;
    }
}

?>