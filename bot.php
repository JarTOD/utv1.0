<?php

$res = "\033[0m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";

require_once('useragent.php');
$config = require_once('config.php');

$agent = new userAgent();
$ua = $agent->generate('mobile');

function get($url, $header)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
function post($url, $header, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip deflate');
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
system('xdg-open https://youtube.com/channel/UCL0cnWCI8eB0FrIHKViykvg');
function verify($ua, $curr, $address)
{
    $url = 'http://uptocoin.tk/fp/verify.php';
    $header = [
        'Host: uptocoin.tk',
        'Origin: http://uptocoin.tk',
        'Content-Type: application/x-www-form-urlencoded',
        'User-Agent: ' . $ua,
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Referer: http://uptocoin.tk/fp/',
        'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'Cookie: '
    ];
    $data = 'address=' . $address . '&currency=' . $curr;

    return post($url, $header, $data);

}
system('clear');

function back($ua)
{
    $url = 'http://uptocoin.tk/fp/';
    $header = [
        'Host: uptocoin.tk',
        'Origin: http://uptocoin.tk',
        'Content-Type: application/x-www-form-urlencoded',
        'User-Agent: ' . $ua,
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'Cookie: '
    ];

    return get($url, $header);
}
$banner;
echo "\n\n \033[1;35mWELCOME TO MY SCRIPT\n⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️⬇️
\033[1;33m
 _   _       _         ____      _
| | | |_ __ | |_ ___  / ___|___ (_)_ __
| | | | '_ \| __/ _ \| |   / _ \| | '_ \
| |_| | |_) | || (_) | |__| (_) | | | | |
 \___/| .__/ \__\___/ \____\___/|_|_| |_|
      |_|                               v1.0
\033[1;37m
=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷=÷
{$green2}Author{$purple2}       ==>{$blue2} jToN
{$yellow2}Created by{$purple2}   ==>{$red2} Terbit
{$blue2}Github{$purple2}       ==>{$green2} https://github.com/JarTOD
{$red2}You{$putih2}Tube{$purple2}      ==>{$yellow2} https://controlc.com/d6622e86{$putih2}
=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×=×
";

///TIMER TO ADD START///

echo "\n \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [+]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [\033[1;31m×\033[1;32m]\r";
sleep(1);
echo " \033[1;30mWait... Procesing Sctipt...\033[1;32m [✓]\r";
sleep(5);





////////
echo "\n \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[+]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[{$red2}×\033[1;32m]\r";
sleep(1);
echo " \033[1;33mGeting Your Wallet Address  \033[1;32m[✓]\r";
sleep(4);
///END TIMER TO ADD///
echo "\033[1;35m
•••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
\033[1;31m ____  _____ _        _    __  __    _  _____
/ ___|| ____| |      / \  |  \/  |  / \|_   _|
\033[1;33m\___ \|  _| | |     / _ \ | |\/| | / _ \ | |
 ___) | |___| |___ / ___ \| |  | |/ ___ \| |
\033[1;32m|____/|_____|_____/_/   \_\_|  |_/_/   \_\_|

 ____  _____ ____  _  _______ ____     _   _
| __ )| ____|  _ \| |/ / ____|  _ \   | | / \
\033[1;33m|  _ \|  _| | |_) | ' /|  _| | |_) |  | |/ _ \
| |_) | |___|  _ <| . \| |___|  _ < |_| / ___ \
\033[1;31m|____/|_____|_| \_\_|\_\_____|_| \_\___/_/   \_\
\033[1;35m
•••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
\033[1;30m
";
sleep(3);


$iteration = 1;
while (true) {
    echo "\n$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ $iteration\n";
    foreach ($config['wallets'] as $wallet) {
        $verify = verify($ua, $config['currency'], $wallet);
        $msg = explode('<div class="alert alert-success">', $verify);
        if (isset($msg[1])) {
            $msg = $msg[1];
            $msg = explode('<a', $msg)[0];
            $msg2 = explode('href="https://faucetpay.io/page/balance/?address=', $verify)[1];
            $msg2 = explode('">your', $msg2)[0];
            echo "$green2" . $msg . "$yellow2" . $msg2 . "\n";
        } else {
            echo "Failed: $wallet\n";
            sleep(1);
        }
    }

    for ($i = 60; $i >= 0; $i--) {
        echo "\r";
        echo "{$red2}===>Wait... {$purple2}$i {$green2}Second";
        sleep(1);
    }
    echo "\r";

    $back = back($ua);

    sleep(1);
    $iteration++;
}
