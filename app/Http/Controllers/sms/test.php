<?php

namespace App\Http\Controllers\sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use IPPanel\Client;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;
use IPPanel\Errors\ResponseCodes;
use vendor\autoload;
use SoapClient;
use Illuminate\Support\Facades\Http;
// use App\Http\Controllers\sms\SoapClient;
// use SoapClient;
//  require_once __DIR__ . '/../vendor/autoload.php';

class test extends Controller
{

    public function testsend()
    {
        $name = 'zahra';

    $response = Http::withHeaders([

        'Authorization' => 'sSMk61V2l8H_aj4spFfHH1ENPOc9vOe1euVVpoJHS_I='

    ])->post("http://rest.ippanel.com/v1/messages/patterns/send", [

        'pattern_code' => '4gcf6mcttn',

        'originator' => '+983000505',

        'recipient' => '+989158089383',

        'values' => [

            'domainName' => $name

        ]

    ]);

    return ($response);
//         $client = new SoapClient("http://188.0.240.110/class/sms/wsdlservice/server.php?wsdl");
// $user = "09153163346";
// $pass = "faraz0942919297";
// $fromNum = "+98100009";
// $toNum = array("9158089383");
// $pattern_code = "4gcf6mcttn";
// $input_data = array(
// "validation_code" => "12588",
// "login_code" => "rewwwe14",
// "tracking_code" => "qxq3ecv"
// );
// echo $client ->sendPatternSms($fromNum, $toNum, $user, $pass, $pattern_code, $input_data);
        // $url = "https://ippanel.com/services.jspd";

		// $rcpt_nm = array('9121111111','9122222222');
		// $param = array
		// 			(
		// 				'uname'=>'',
		// 				'pass'=>'',
		// 				'from'=>'',
		// 				'message'=>'تست',
		// 				'to'=>json_encode($rcpt_nm),
		// 				'op'=>'send'
		// 			);

		// $handler = curl_init($url);
		// curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
		// curl_setopt($handler, CURLOPT_POSTFIELDS, $param);
		// curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
		// $response2 = curl_exec($handler);

		// $response2 = json_decode($response2);
		// $res_code = $response2[0];
		// $res_data = $response2[1];


		// echo $res_data;
        // $patternValues = [
        //     "name" => "IPPANEL",
        // ];

        // $bulkID = $client->sendPattern(
        //     "t2cfmnyo0c",    // pattern code
        //     "+9810001",      // originator
        //     "98912xxxxxxx",  // recipient
        //     $patternValues,  // pattern values
        // );


//     $client = new Client("sSMk61V2l8H_aj4spFfHH1ENPOc9vOe1euVVpoJHS_I=");

// //    var_dump($client);
// //    echo 'ok';

// try {
//     $pattern = $client->sendPattern("4gcf6mcttn", "989158089383", "", ['name' => "zahra"]);
//   //  var_dump($pattern);
//   echo 'oattern';
// } catch (Error $e) {
//     echo 'error1';
//     // var_dump($e->unwrap());
//     // echo $e->getCode();

//     if ($e->code() == ResponseCodes::ErrUnprocessableEntity) {
//        // echo "Unprocessable entity";
//        echo 'error3';
//     }
// } catch (HttpException $e) {
//     echo 'error2';
//     // var_dump($e->getMessage());
//     // echo $e->getCode();
// }

// }
}
}
