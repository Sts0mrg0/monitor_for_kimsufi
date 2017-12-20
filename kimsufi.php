<?php
if(checkKimsufi("1804sk932"))
{
  $desp =
        "正常订单地址：https://www.kimsufi.com/en/order/kimsufi.cgi?hard=1804sk932
        欧元配置页面地址：https://www.kimsufi.com/fr/commande/kimsufi.xml?reference=1804sk932
        美元英文配置页面地址：https://www.kimsufi.com/us/en/order/kimsufi.xml?reference=1804sk932
        美元法文配置页面地址：https://www.kimsufi.com/us/fr/commande/kimsufi.xml?reference=1804sk932
        加元英文配置页面地址：https://www.kimsufi.com/ca/en/order/kimsufi.xml?reference=1804sk932
        加元法文配置页面地址：https://www.kimsufi.com/ca/fr/commande/kimsufi.xml?reference=1804sk932";

    send("KS-3C 特价有货", $desp);
}

if(checkKimsufi("174sk94"))
{
    send("新版ks4a特价有货", $desp = 'https://www.kimsufi.com/en/order/kimsufi.cgi?hard=174sk94');
}
if(checkKimsufi("174sk942"))
{
    send("新版ks4c特价有货", $desp = 'https://www.kimsufi.com/en/order/kimsufi.cgi?hard=174sk942');
}



#send("脚本升级，新增新版ks4c监控", $desp = '现起ks4c共有2个网址监控。');
function checkKimsufi($id){
        $resp = file_get_contents( "https://www.kimsufi.com/en/order/kimsufi.cgi?hard=" . $id);
        return strpos($resp , 'icon-availability')  !== false ? true: false;
}

function send($title, $desp ) {
        $title =urlencode($title)."_".rand(0,99999);
        $desp =urlencode($desp);
   file_get_contents("https://pushbear.ftqq.com/sub?sendkey=1410-dfe93ab971cc199ed74b961822b92f13&text=$title&desp=$desp");
}
