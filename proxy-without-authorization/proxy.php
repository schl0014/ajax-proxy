<?php

/**
 * Class to handle an AJAX call as a proxy
 */

class Proxy

{

    private $url;


    public function __construct($url)

    {

        $this->url = $url;

    }


    public function getData()

    {

        $request_url = $this->url;

        $curl = curl_init($request_url);


        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');


// curl_setopt($curl, CURLOPT_HTTPHEADER, [

// 'Content-Type: application/json',

// ]);

//API call with Authorization

//Change the key with your settings

        curl_setopt($curl, CURLOPT_HTTPHEADER, [

            'Content-Type: application/json',

            'Authorization: 886de0e5fdfc4c418e15410d188988dd'

        ]);
        $response = curl_exec($curl);

        curl_close($curl);


        return $response;

    }

}