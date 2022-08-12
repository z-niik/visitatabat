<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IPPanel\Errors\HttpException;
use Illuminate\Support\Carbon;
use App\Models\Sms;


class SmsController extends Controller
{
    private $_baseURL = "";
    private $_timeout = 30;
    private $_headers = [];
    private $_supportedStatusCodes = [200, 201, 204, 405, 400, 404, 401, 422];

    public function getBasedURL($uri, $params = null)
    {
        if (!$uri && !$params) {
            throw new \InvalidArgumentException("function needs at least one argument");
        }

        $url = rtrim($this->_baseURL, '/');

        $url .= '/' . ltrim($uri, '/');

        if ($params) {
            $query = http_build_query($params);
            $url .= "?" . $query;
        }

        return $url;
    }
    protected function GetUrl($APIurl,$token,$pattern){

    }
    public function SendSms($mobile_number,$id,$pid){


        $code=rand(10000,99999);

        $url="http://ippanel.com:8080/?apikey=sSMk61V2l8H_aj4spFfHH1ENPOc9vOe1euVVpoJHS_I=&pid=$pid&fnum=3000505&tnum=$mobile_number&p1=verification-code&v1=$code";

        $method = "GET";
        $data = null;
        $params = null;
        $headers = null;

        $curl = curl_init();

        // if (!$headers || count($headers) < 1) {
        //     $headers = ['Accept: application/json', 'Content-Type: application/json'];
        // }
        $headers = ['Accept: application/json', 'Content-Type: application/json'];

        $headers = array_merge($headers, $this->_headers);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // no need in php 5.1.3+.
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->_timeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->_timeout);

        switch ($method) {
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            default:
                curl_setopt($curl, CURLOPT_HTTPGET, true);
        }

        $response = curl_exec($curl);
        if($response){
            Sms::create([
                'user_id' => $id,
                'code'=>$code ,
                'phone_number'=>$mobile_number ,
                'created_at' => Carbon::now(),
            ]);

        }
// dd($response);
        if ($response === false) {
            throw new HttpException(curl_error($curl), curl_errno($curl));
        }

        // get http status
        $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

    }
    public function SendOkSms($mobile_number,$id,$pid){


        $code=rand(10000,99999);

        $url="http://ippanel.com:8080/?apikey=sSMk61V2l8H_aj4spFfHH1ENPOc9vOe1euVVpoJHS_I=&pid=$pid&fnum=3000505&tnum=$mobile_number&p1=melli-code&v1=$mobile_number";

        $method = "GET";
        $data = null;
        $params = null;
        $headers = null;

        $curl = curl_init();

        // if (!$headers || count($headers) < 1) {
        //     $headers = ['Accept: application/json', 'Content-Type: application/json'];
        // }
        $headers = ['Accept: application/json', 'Content-Type: application/json'];

        $headers = array_merge($headers, $this->_headers);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // no need in php 5.1.3+.
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->_timeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->_timeout);

        switch ($method) {
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            default:
                curl_setopt($curl, CURLOPT_HTTPGET, true);
        }

        $response = curl_exec($curl);
        if($response){
            Sms::Create([
                'user_id' => $id,
                'code'=>$code ,
                'phone_number'=>$mobile_number ,
                'created_at' => Carbon::now(),
            ]);

        }
// dd($response);
        if ($response === false) {
            throw new HttpException(curl_error($curl), curl_errno($curl));
        }

        // get http status
        $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

    }

    public function SendAdminSms($mobile_number,$id,$pid){


        // $code=rand(10000,99999);
        $mobile='09151151389';
        $url="http://ippanel.com:8080/?apikey=sSMk61V2l8H_aj4spFfHH1ENPOc9vOe1euVVpoJHS_I=&pid=$pid&fnum=3000505&tnum=$mobile&p1=mellecode&v1=$mobile_number";

        $method = "GET";
        $data = null;
        $params = null;
        $headers = null;

        $curl = curl_init();

        // if (!$headers || count($headers) < 1) {
        //     $headers = ['Accept: application/json', 'Content-Type: application/json'];
        // }
        $headers = ['Accept: application/json', 'Content-Type: application/json'];

        $headers = array_merge($headers, $this->_headers);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // no need in php 5.1.3+.
        curl_setopt($curl, CURLOPT_TIMEOUT, $this->_timeout);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $this->_timeout);

        switch ($method) {
            case 'GET':
                curl_setopt($curl, CURLOPT_HTTPGET, true);
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, @json_encode($data));
                break;
            default:
                curl_setopt($curl, CURLOPT_HTTPGET, true);
        }

        $response = curl_exec($curl);
        // if($response){
        //     Sms::Create([
        //         'user_id' => $id,
        //         'code'=>$code ,
        //         'phone_number'=>$mobile_number ,
        //         'created_at' => Carbon::now(),
        //     ]);

        // }
// dd($response);
        if ($response === false) {
            throw new HttpException(curl_error($curl), curl_errno($curl));
        }

        // get http status
        $status = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

    }


}
