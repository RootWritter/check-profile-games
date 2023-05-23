<?php

namespace Rw;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * [RootWritter@root]:~$
 * Check Nickname Game PHP Class
 * Author : RootWritter <https://github.com/RootWritter>
 * Created at : 23 May 2023 13:47:22
 * Last Modfied at 23 May 2023 
 */

class Init
{
    private $sessionId;

    public function __construct()
    {
        $this->sessionId = "ZHVzdHdvcmsuaWRAZ21haWwuY29t";
    }

    private function setupPayload($data)
    {
        $newData = [
            'voucherPricePoint.id' => $data['id'],
            'voucherPricePoint.price' => $data['price'],
            'voucherPricePoint.variablePrice' => 0,
            'email' => 'hahahjsd@gmail.com',
            'userVariablePrice' => 0,
            'order.data.profile' => 'eyJuYW1lIjoiICIsImRhdGVvZmJpcnRoIjoiIiwiaWRfbm8iOiIifQ%3D%3D',
            'user.userId' => $data['userId'],
            'user.zoneId' => $data['zoneId'],
            'msisdn' => '',
            'voucherTypeName' => $data['voucherTypeName'],
            'voucherTypeId' => $data['voucherTypeId'],
            'gvtId' => $data['gvtId'],
            'shopLang' => 'id_ID',
            'checkoutId' => '03f24ab4-4a08-44ed-bdc6-520090a8551a',
            'affiliateTrackingId' => '',
            'impactClickId' => '',
            'anonymousId' => '',
            'fullUrl' => $data['fullUrl'],
            'userSessionId' => $this->sessionId,
            'userEmailConsent' => false,
            'userMobileConsent' => false,
            'verifiedMsisdn' => '',
            'promoId' => '',
            'promoCode' => '',
            'clevertapId' => '',
            'promotionReferralCode' => ''
        ];
        return http_build_query($newData);
    }

    private function initcall($data)
    {
        $client = new Client();
        $headers = [
            'authority' => 'order-sg.codashop.com',
            'accept' => 'application/json, text/plain, */*',
            'accept-language' => 'id-ID',
            'cache-control' => 'no-cache',
            'content-type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'origin' => 'https://www.codashop.com',
            'pragma' => 'no-cache',
            'referer' => 'https://www.codashop.com/',
            'sec-ch-ua' => '"Google Chrome";v="113", "Chromium";v="113", "Not-A.Brand";v="24"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"macOS"',
            'sec-fetch-dest' => 'empty',
            'sec-fetch-mode' => 'cors',
            'sec-fetch-site' => 'same-site',
            'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36',
            'x-session-country2name' => 'ID',
            'x-session-key' => '',
            'x-xsrf-token' => 'null',
            'Cookie' => '__cf_bm=alz8U2JjwwRIrvZgGe7.vrj6FgjFhd7D1gTNZBvA8jg-1684848583-0-AWXGSGx54C8gOtcRlApX6WN/suoraxSdfmH98+2tmVfPxuv+oiVzi1l0RMsNL0r5CbYXOIvZNZ7axUyoQi6cHLs='
        ];
        $request = new Request('POST', 'https://order-sg.codashop.com/initPayment.action', $headers, $data);
        $res = $client->sendAsync($request)->wait();
        return $res->getBody();
    }
    public function initCheck($games, $data)
    {
        if ($games == "MOBILE_LEGENDS") {
            $initData = [
                'id' => '395917',
                'price' => 32190.0,
                'userId' => $data['userId'],
                'zoneId' => $data['zoneId'],
                'voucherTypeName' => 'MOBILE_LEGENDS',
                'gvtId' => 19,
                'voucherTypeId' => 5,
                'fullUrl' => 'https://www.codashop.com/id-id/mobile-legends'
            ];
        }

        $payload = $this->setupPayload($initData);
        $call = $this->initcall($payload);
        return $call;
    }
}
