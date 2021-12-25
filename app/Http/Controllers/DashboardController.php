<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksiObat;
use App\Models\FkStok;
use App\Models\MasterObat;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use Stelin\OVOID;

class DashboardController extends Controller
{

    private $http;

    public function __construct()
    {
        $this->http = new Client();
    }

    public function dashboard()
    {
        $data['state'] = 'Dashboard';
        // $data['obat'] = MasterObat::all();
        $data['obat'] = FkStok::where('id_user', session('user')['id_user'])->get();
        $data['count']['total_obat'] = FkStok::where('id_user', session('user')['id_user'])->count();
        $data['count']['total_obat_masuk'] = DetailTransaksiObat::where('id_user', session('user')['id_user'])->where('tipe_transaksi', 'masuk')->sum('jumlah');
        $data['count']['total_obat_kedaluwarsa'] = DetailTransaksiObat::where('id_user', session('user')['id_user'])->where('tipe_transaksi', 'masuk')->where('kadaluarsa', '<=', date('Y-m'))->sum('jumlah');
        // dd($data);
        return view('dashboard.dashboard', $data);
    }


    // public function ovoConnect()
    // {
    //     $ovo = new OVOID(null, "contoh-device-id");
    //     echo $ovo->OTP("+6285155248865")->getData()->getOtp()->getOtpRefId();
    //     // echo $ovo->OTPValidation("+6285155248865", "6766e4c5-506c-4636-a581-102da6c4991d", "32193ac16315836f7e309775019a041601d4b32ff64fbbaaa9728392b85ee247")->getData()->getOtp()->getOtpToken();
    //     // echo $ovo->OTPValidation("+6285155248865", "otp-ref-id", "otp")->getData()->getOtp()->getOtpToken();
    //     // echo $ovo->accountLogin("+6285155248865", '6766e4c5-506c-4636-a581-102da6c4991d', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb2RlaGFzaCI6Ik4ySTFaRGswWmpSa05qbGtOR0kxTkdJeVl6VmxPVE0yTXpZd016TXhPVE0iLCJyYW5kb20iOiJNelV6TWpNM01qazIiLCJ2ZXJzaW9uIjoxfQ.N-Zri5ZalQFb_CJGR0gzlack-yQjOtyrHIjmz5mOlBU', '300400')->getData()->getAuth()->getAccessToken();
    //     // $authToken = 'eyJhbGciOiJSUzI1NiJ9.eyJleHBpcnlJbk1pbGxpU2Vjb25kcyI6NjA0ODAwMDAwLCJjcmVhdGVUaW1lIjoxNjM5MzgzODY0Mzc2LCJzZWNyZXQiOiJod3Y3ZHFtdWMrekQ1MjBaRGVBemZrVzhYRVh4U3hvNmordCs1SWhJWjlvOWU1YmszTCtSN1hLaHlFa3ZjamUzR21GNVlyQlgyN3VjNDYzYXUvODBObXAxa0FlbGtGR0pLR1hzLzd6Q1F3aVBMd3RrT09NcEVZcEticFBRZTA3c1J5YTVxTkdYdVJxUjA2QWlwNm9nVXN0b1A0YmZsS0E5MzRDT1VDeDRLc1l6V2NmVnpIS01DUFJ2UG9DSVFUQXpqUndmT2NzR0ViR2RHK1BmRzBFZ01HMUU5YThNTFkycytsS0JoNlYyREp1UnRKMVZKYXd4ckZvY2VZQVV6VnRFOVRrcW55MmNLSExGdG5FZUJZT3doanRaZHY1UTJJSlJSa2dvblRoa09reUNSOG5idDZLcTNWdlBQbW1OeThjeiJ9.hd4sWGYOwtTEaeOy1__0d4WcOxMrD6uuXWHBASdF4xSkh9mvpz-_eH6lhUC7vCGPPDJFj6_xSlFvyk43G01XwjODW-dKF50ZfGaOOs6k9fieT5WMylaP4vaU0t95K-_1N5i7ddrmQFlAZbWpTbvTZ17kU9oUjtrdaM5ypObn-cK7bjNLL8oxMxyRyUWHzkf7t_-myxYZa5Hrk9AwvueTpzSGWjxi5zccejihPfTZ4i9hO1OLgpLOBksg5wF2yOinlbsrZTyqT68D2aqHAdBJPi5lv2yoYbQJptsHtjI0MmpO25HPIuMq64Atl7x2tC2hlbMLiv9JEVx02ATuVRRdyg';
    //     // $ovo = new OVOID($authToken, "id_device");
    //     // dd($ovo->balanceModel());
    // }

    public function ovoConnect(Request $request)
    {
        $path = $request->path;
        // $number = $this->input->post('number');

        $clientId = 'MCH-0620-1639978105427';
        $requestId = gen_uuid();
        $requestDate = date('Y-m-d\TH:i:s\Z');
        $targetPath = $path;
        $secretKey = 'SK-F4TeCikC1N4PD8Mlw1yx';
        $requestBody = [
            'customer' => [
                'id' => 'CUSTOMER_OVOxDOKU',
                'name' => 'TESTINGQA',
                'phone' => '6285155248865',
                'email' => 'testing@gmail.com',
                'additional_info' => 'None'
            ],
            'ovo_account' => [
                'account_mobile_phone' => '6285155248865',
                'success_registration_url' => 'http://localhost/mediaarraihan',
                'failed_registration_url' => 'http://localhost/mediaarraihan',
            ],
        ];

        $digestValue = base64_encode(hash('sha256', json_encode($requestBody), true));

        $componentSignature = "Client-Id:" . $clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $requestDate . "\n" .
            "Request-Target:" . $targetPath . "\n" .
            "Digest:" . $digestValue;

        $signature = base64_encode(hash_hmac('sha256', $componentSignature, $secretKey, true));

        $headerSignature = "Client-Id:" . $clientId . "\n" .
            "Request-Id:" . $requestId . "\n" .
            "Request-Timestamp:" . $requestDate . "\n" .
            // Prepend encoded result with algorithm info HMACSHA256=
            "Signature:" . "HMACSHA256=" . $signature;

        // var_dump($requestId);die;

        $response = Http::withHeaders([
            'Client-Id' => $clientId,
            'Request-Id' => $requestId,
            'Request-Timestamp' => $requestDate,
            'Signature' => "HMACSHA256=" . $signature,
            'Content-Type' => 'application/json',
        ])->post('https://api-sandbox.doku.com' . $path, $requestBody);

        return $response;
    }
}
