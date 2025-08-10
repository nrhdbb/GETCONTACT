<?php
system("clear");

// Color codes untuk terminal
$k = "\033[33;1m";
$h = "\033[32;1m";
$p = "\033[37;1m";
$m = "\033[31;1m";
$c = "\033[35;1m";
$o = "\033[30;1m";
$b = "\033[34;1m";

// Banner yang lebih menarik
echo $p."
\033[1;36m╔══════════════════════════════════════════════════════════════╗
║                    \033[1;33m🔍 GETCONTACT CHECKER 🔍\033[1;36m                    ║
║                \033[1;32mCek Nomor Yang Di Save di GetContact\033[1;36m            ║
║                                                                  ║
║  \033[1;35mAuthor: NRHDXBABYBOT\033[1;36m                                    ║
╚══════════════════════════════════════════════════════════════╝\033[0m\n";

// Get IP Info
$pi = shell_exec("curl -s https://ipapi.co/json/");
$json = json_decode($pi);
$ip = $json->ip;
$krt = $json->org;
$krt = explode("Internet",$krt)[0];

echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;33m 🔸\033[0m Internet\033[1;31m:\033[1;33m ".$krt."\033[0m\n";
echo $p."\033[1;36m║\033[1;33m 🔸\033[0m IP Address\033[1;31m:\033[1;33m ".$ip."\033[0m\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

// Menu utama
echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m [01]\033[1;33m Join Group Telegram\033[0m                           ║\n";
echo $p."\033[1;36m║\033[1;32m [02]\033[1;33m Update Script\033[0m                                ║\n";
echo $p."\033[1;36m║\033[1;32m [03]\033[1;33m Web Claim Crypto Free\033[0m                        ║\n";
echo $p."\033[1;36m║\033[1;32m [04]\033[1;32m 🚀 Mulai Bot GetContact\033[0m                      ║\n";
echo $p."\033[1;36m║\033[1;32m [05]\033[1;33m Chat Admin\033[0m                                   ║\n";
echo $p."\033[1;36m║\033[1;32m [06]\033[1;35m Kumpulan Script\033[0m                              ║\n";
echo $p."\033[1;36m║\033[1;31m [00]\033[1;31m Exit\033[0m                                         ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

$pil = readline($p."\n\033[1;32m[🔸]\033[0m Pilih Menu\033[1;31m: \033[1;33m");

if($pil == "1"){
    system("xdg-open https://t.me/config_geratis");
    sleep(1);
    echo $p."\033[1;31m[!]\033[0m Run lagi dengan ketik\033[1;33m php terminal.php\033[0m\n\n";
    exit();
}elseif($pil == "2"){
    system("xdg-open https://youtube.com/@Inject1D?feature=shared");
    sleep(1);
    echo $p."\033[1;31m[!]\033[0m Run lagi dengan ketik\033[1;33m php terminal.php\033[0m\n\n";
    exit();
}elseif($pil == "3"){
    system("xdg-open https://quizdana.com/dgb");
    sleep(1);
    echo $p."\033[1;31m[!]\033[0m Run lagi dengan ketik\033[1;33m php terminal.php\033[0m\n\n";
    exit();
}elseif($pil == "5"){
    system("xdg-open https://wa.me/6283879017166");
    sleep(1);
    echo $p."\033[1;31m[!]\033[0m Run lagi dengan ketik\033[1;33m php terminal.php\033[0m\n\n";
    exit();
}elseif($pil == "6"){
    system("xdg-open https://scfaucet.site");
    sleep(1);
    echo $p."\033[1;31m[!]\033[0m Run lagi dengan ketik\033[1;33m php terminal.php\033[0m\n\n";
    exit();
}elseif($pil == "0"){
    echo $p."\033[1;32m[✓]\033[0m Terima kasih telah menggunakan script ini!\n\n";
    exit();
}elseif($pil == "4"){

// Clear screen dan tampilkan banner lagi
system("clear");

echo $p."
\033[1;36m╔══════════════════════════════════════════════════════════════╗
║                    \033[1;33m🔍 GETCONTACT CHECKER 🔍\033[1;36m                    ║
║                \033[1;32mCek Nomor Yang Di Save di GetContact\033[1;36m            ║
║                                                                  ║
║  \033[1;35mAuthor: NRHDXBABYBOT\033[1;36m               
╚══════════════════════════════════════════════════════════════╝\033[0m\n";

// Input nomor WhatsApp
echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m 🔸\033[0m Masukkan Nomor WhatsApp (Contoh: 08123456789)\033[0m        ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

$no = readline($p."\n\033[1;32m[🔸]\033[0m Nomor WhatsApp\033[1;31m: \033[1;33m");

// Validasi nomor
$ck = preg_match("/^08[0-9]{8,11}$/",$no);
if($ck != "1"){
    echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
    echo $p."\033[1;36m║\033[1;31m ❌ Format nomor tidak valid! Gunakan format: 08123456789\033[0m ║\n";
    echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";
    exit();
}

echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m 🔸\033[0m Memulai proses cek GetContact...\033[0m                    ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

// Get access token dari GetContact
$chl = curl_init();
curl_setopt($chl, CURLOPT_URL, "https://getcontact.com/id/manage");
curl_setopt($chl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($chl, CURLOPT_RETURNTRANSFER, 1);
$ua=array(
    'sec-ch-ua-mobile: ?1',
    'sec-ch-ua-platform: "Android"',
    'upgrade-insecure-requests: 1',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36'
);
curl_setopt($chl, CURLOPT_HTTPHEADER, $ua);
curl_setopt($chl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($chl, CURLOPT_HEADER, 1);
$res = curl_exec($chl);

$aks = explode("accessToken=",$res)[1];
$aks = explode(";",$aks)[0];
$tkn = explode('token=',$res)[1];
$tkn = explode('&',$tkn)[0];
$hash = explode('"hash":',$res)[1];
$hash = explode("'",$hash)[1];
$hash = explode("',",$hash)[0];

// Mulai verifikasi WhatsApp
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://widget.verifykit.com/v3.0/start");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua=array(
    'sec-ch-ua-platform: "Android"',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36',
    'accept: application/json, text/plain, */*',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'content-type: application/json',
    'sec-ch-ua-mobile: ?1',
    'origin: https://gtc-manage-widget.verifykit.com',
    'sec-fetch-site: same-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://gtc-manage-widget.verifykit.com/'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data=('{"lang":"id","token":"'.$tkn.'","clientHost":"https://getcontact.com","validationType":"whatsapp","countryCode":"id","phoneNumber":"'.$no.'","deeplink":true}');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$res = curl_exec($ch);
$json = json_decode($res);

$ck = preg_match("/Anda memasukkan nomor telepon yang tidak sah/i",$res);
if($ck == "1"){
    echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
    echo $p."\033[1;36m║\033[1;31m ❌ Nomor WhatsApp tidak valid!\033[0m                            ║\n";
    echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";
    exit();
}

echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m 🔸\033[0m Silahkan kirim pesan verifikasi melalui WhatsApp\033[0m     ║\n";
echo $p."\033[1;36m║\033[1;32m 🔸\033[0m Link WhatsApp akan terbuka otomatis\033[0m                ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

$wa = $json->result->validation->link;
$no = $json->result->phoneNumber->phoneNumber;
system("xdg-open ".$wa);

echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;33m ⏰\033[0m Menunggu verifikasi...\033[0m                              ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

// Countdown timer
for ($i = 10; $i >= 0; $i--) {
    sleep(1);
    echo $p."\r\033[1;32m[🔸]\033[0m Berakhir dalam\033[1;33m ".$i."\033[0m detik! ";
}
echo $p."\n";

// Cek status verifikasi
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://widget.verifykit.com/v3.0/check");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua=array(
    'sec-ch-ua-platform: "Android"',
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36',
    'accept: application/json, text/plain, */*',
    'sec-ch-ua: "Google Chrome";v="131", "Chromium";v="131", "Not_A Brand";v="24"',
    'content-type: application/json',
    'sec-ch-ua-mobile: ?1',
    'origin: https://gtc-manage-widget.verifykit.com',
    'sec-fetch-site: same-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://gtc-manage-widget.verifykit.com/'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data=('{"lang":"id","token":"'.$tkn.'","clientHost":"https://getcontact.com","phoneNumber":"'.$no.'","validationType":"whatsapp"}');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$res = curl_exec($ch);
$json = json_decode($res);

$suc = preg_match("/success/i",$res);
if($suc == "1"){
    $ses = $json->result->validation->sessionId;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://getcontact.com/validation-verifykit-check");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $ua=array(
        'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36',
        'referer: https://getcontact.com/id/manage',
        'cookie: lang=id',
        'cookie: cookieInform=accept',
        'cookie: accessToken='.$aks,
        'priority: u=1, i'
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $data=('hash='.$hash.'&sessionId='.$ses);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $res = curl_exec($ch);
    $json = json_decode($res);

    $suc = preg_match("/success/i",$res);
    if($suc == "1"){
        echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
        echo $p."\033[1;36m║\033[1;32m ✅ Verifikasi berhasil!\033[0m                               ║\n";
        echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";
    }
}else{
    echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
    echo $p."\033[1;36m║\033[1;31m ❌ Verifikasi gagal! Silakan coba lagi.\033[0m                    ║\n";
    echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";
    exit();
}

// Ambil data kontak yang disave
$url = "https://getcontact.com/id/manage/profile";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$ua=array(
    'user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36',
    'cookie: lang=id',
    'cookie: _ga=GA1.1.1588411107.1733331413',
    'cookie: cookieInform=accept',
    'cookie: accessToken='.$aks
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$res = curl_exec($ch);
$hsl = explode('<div class="pt-text">',$res);
$cek = count($hsl);
$krg = $cek -1;

echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m 🔸\033[0m Ditemukan\033[1;33m ".$krg."\033[0m kontak yang disave\033[0m                ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";

// Tampilkan daftar kontak
echo $p."\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m 📋\033[0m Daftar Kontak yang Disave:\033[0m                          ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n";

for ($l = 1; $l <= $krg; $l++) {
    $usr = explode('<div class="pt-text">',$res)[$l];
    $usr = explode('</div>',$usr)[0];
    echo $p."\033[1;36m[\033[1;32m".$l."\033[1;36m]\033[1;35m Di Save\033[1;33m -> \033[0m".$usr."\n";
    sleep(0.5);
}

echo $p."\n\033[1;36m╔══════════════════════════════════════════════════════════════╗\033[0m\n";
echo $p."\033[1;36m║\033[1;32m ✅\033[0m Proses selesai! Terima kasih telah menggunakan script ini\033[0m ║\n";
echo $p."\033[1;36m╚══════════════════════════════════════════════════════════════╝\033[0m\n\n";

}

?> 