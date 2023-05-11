<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;

class RoverPhotosManager
{
    public function getAll()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&page=3&api_key=aaw0O1BzH8D2RyndzzS5BnBJr210NetO19gzLkMt'
        );
        return $response->toArray();
    }
}
