<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stelin\OVOID;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['state'] = 'Dashboard';
        return view('dashboard.dashboard', $data);
    }

    // public function ovoConnect()
    // {
    //     $ovo = new OVOID(null, "id_device");
    //     echo $ovo->OTP("+6285155248865")->getData()->getOtp()->getOtpRefId();
    //     // echo $ovo->OTPValidation("+6285155248865", "6766e4c5-506c-4636-a581-102da6c4991d", "32193ac16315836f7e309775019a041601d4b32ff64fbbaaa9728392b85ee247")->getData()->getOtp()->getOtpToken();
    //     // echo $ovo->OTPValidation("+6285155248865", "otp-ref-id", "otp")->getData()->getOtp()->getOtpToken();
    //     // echo $ovo->accountLogin("+6285155248865", '6766e4c5-506c-4636-a581-102da6c4991d', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb2RlaGFzaCI6Ik4ySTFaRGswWmpSa05qbGtOR0kxTkdJeVl6VmxPVE0yTXpZd016TXhPVE0iLCJyYW5kb20iOiJNelV6TWpNM01qazIiLCJ2ZXJzaW9uIjoxfQ.N-Zri5ZalQFb_CJGR0gzlack-yQjOtyrHIjmz5mOlBU', '300400')->getData()->getAuth()->getAccessToken();
    //     // $authToken = 'eyJhbGciOiJSUzI1NiJ9.eyJleHBpcnlJbk1pbGxpU2Vjb25kcyI6NjA0ODAwMDAwLCJjcmVhdGVUaW1lIjoxNjM5MzgzODY0Mzc2LCJzZWNyZXQiOiJod3Y3ZHFtdWMrekQ1MjBaRGVBemZrVzhYRVh4U3hvNmordCs1SWhJWjlvOWU1YmszTCtSN1hLaHlFa3ZjamUzR21GNVlyQlgyN3VjNDYzYXUvODBObXAxa0FlbGtGR0pLR1hzLzd6Q1F3aVBMd3RrT09NcEVZcEticFBRZTA3c1J5YTVxTkdYdVJxUjA2QWlwNm9nVXN0b1A0YmZsS0E5MzRDT1VDeDRLc1l6V2NmVnpIS01DUFJ2UG9DSVFUQXpqUndmT2NzR0ViR2RHK1BmRzBFZ01HMUU5YThNTFkycytsS0JoNlYyREp1UnRKMVZKYXd4ckZvY2VZQVV6VnRFOVRrcW55MmNLSExGdG5FZUJZT3doanRaZHY1UTJJSlJSa2dvblRoa09reUNSOG5idDZLcTNWdlBQbW1OeThjeiJ9.hd4sWGYOwtTEaeOy1__0d4WcOxMrD6uuXWHBASdF4xSkh9mvpz-_eH6lhUC7vCGPPDJFj6_xSlFvyk43G01XwjODW-dKF50ZfGaOOs6k9fieT5WMylaP4vaU0t95K-_1N5i7ddrmQFlAZbWpTbvTZ17kU9oUjtrdaM5ypObn-cK7bjNLL8oxMxyRyUWHzkf7t_-myxYZa5Hrk9AwvueTpzSGWjxi5zccejihPfTZ4i9hO1OLgpLOBksg5wF2yOinlbsrZTyqT68D2aqHAdBJPi5lv2yoYbQJptsHtjI0MmpO25HPIuMq64Atl7x2tC2hlbMLiv9JEVx02ATuVRRdyg';
    //     // $ovo = new OVOID($authToken, "id_device");
    //     // dd($ovo->balanceModel());
    // }
}