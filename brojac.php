<?php
 include 'ip.php';
  date_default_timezone_set('Europe/Belgrade');
  $today = date("m.d.y"); 
  $ip=$_SERVER['REMOTE_ADDR'];
  $sati=date("H:i:s");
  $uredjaj=$_SERVER['HTTP_USER_AGENT'];        
try {
   
   $db = new PDO("sqlite:baza/brojac.db");
   
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    
    
   if (!isset($_COOKIE['brojac'])) {
       
   $query = "SELECT uneseno from users 
   where ip='".$ip."'"; // ostaje samo zbog toga ako neko ugasi cookie
   $broj = $db->query($query);
foreach ($broj as $value) {
      $broj=$value[0];
      
}

$geoip=geoCheckIP($ip);
$country=$geoip['country'];
$state=$geoip['state'];
$town=$geoip['town'];

if($broj!=='da'){
    $brojac='postavljeno';
    setcookie('brojac', $brojac, time() + (3600 * 24 * 30));
     $query =
            "INSERT INTO users
                 ( ip, datum,sati, uredjaj, uneseno, country, state, town)
             VALUES
                 ( '$ip', '$today', '$sati', '$uredjaj', 'da','$country','$state','$town')";
       
        $row_count = $db->exec($query);
   }
   
}

$broj="SELECT count(*) from users";
$ukupan = $db->query($broj);
foreach ($ukupan as $value) {
    $ukupan=$value[0];
}