
<?php require_once('cnx.php'); ?>

<?php

function AffDate($datetime) {
            $now = time();
            $created = strtotime($datetime);
            // La différence est en seconde
            $diff = $now-$created;
            $m = ($diff)/(60); // on obtient des minutes
            $h = ($diff)/(60*60); // ici des heures
            $j = ($diff)/(60*60*24); // jours
            $s = ($diff)/(60*60*24*7); // et semaines
            if ($diff < 60) { // "il y a x secondes"
                return 'Il y a '.$diff.' secondes';
            }
            elseif ($m < 60) { // "il y a x minutes"
                $minute = (floor($m) == 1) ? 'minute' : 'minutes';
                return 'Il y a '.floor($m).' '.$minute;
            }
            elseif ($h < 24) { // " il y a x heures, x minutes"
                $heure = (floor($h) <= 1) ? 'heure' : 'heures';
                $dateFormated = 'Il y a '.floor($h).' '.$heure;
                if (floor($m-(floor($h))*60) != 0) {
                    $minute = (floor($m) == 1) ? 'minute' : 'minutes';
                    $dateFormated .= ' et '.floor($m-(floor($h))*60).' '.$minute;
                }
                return $dateFormated;
            }
            elseif ($j < 7) { // " il y a x jours, x heures"
                $jour = (floor($j) <= 1) ? 'jour' : 'jours';
                $dateFormated = 'Il y a '.floor($j).' '.$jour;
                if (floor($h-(floor($j))*24) != 0) {
                    $heure = (floor($h) <= 1) ? 'heure' : 'heures';
                    $dateFormated .= ' et '.floor($h-(floor($j))*24).' '.$heure;
                }
                return $dateFormated;
            }
            elseif ($s < 5) { // " il y a x semaines, x jours"
                $semaine = (floor($s) <= 1) ? 'semaine' : 'semaines';
                $dateFormated = 'Il y a '.floor($s).' '.$semaine;
                if (floor($j-(floor($s))*7) != 0) {
                    $jour = (floor($j) <= 1) ? 'jour' : 'jours';
                    $dateFormated .= ' et '.floor($j-(floor($s))*7).' '.$jour;
                }
                return $dateFormated;
            }
            else { // on affiche la date normalement
				setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.UTF8');
                return utf8_encode(strftime("%d %B %Y a %Hh%M", $created));
            }
        }


?>

<?php

function AffDate2($date){
 if(!ctype_digit($date))
  $date = strtotime($date);
 if(date('Ymd', $date) == date('Ymd')){
  $diff = time()-$date;
  if($diff < 60) /* moins de 60 secondes */
   return ''.date('H:i', $date);
  else if($diff < 3600) /* moins d'une heure */
   return ''.date('H:i', $date);
  else if($diff < 10800) /* moins de 3 heures */
   return ''.date('H:i', $date);
  else /*  plus de 3 heures ont affiche ajourd'hui à HH:MM:SS */
   return ''.date('H:i', $date);
 }
 else if(date('Ymd', $date) == date('Ymd', strtotime('- 1 DAY')))
  return ''.date('d/m', $date);
 else if(date('Ymd', $date) == date('Ymd', strtotime('- 2 DAY')))
  return ' '.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 3 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 4 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 5 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 6 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 7 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 8 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 9 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 10 DAY')))
  return ''.date('d/m', $date);
    else if(date('Ymd', $date) == date('Ymd', strtotime('- 11 DAY')))
  return ''.date('d/m', $date);
    else if(date('Ymd', $date) == date('Ymd', strtotime('- 12 DAY')))
  return ''.date('d/m', $date);
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 13 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 14 DAY')))
  return ''.date('d/m', $date);
  else if(date('Ymd', $date) == date('Ymd', strtotime('- 15 DAY')))
  return ''.date('d/m', $date);
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 16 DAY')))
  return ''.date('d/m', $date);
  
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 17 DAY')))
  return ''.date('d/m', $date);
  
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 18 DAY')))
  return ''.date('d/m', $date);
  
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 19 DAY')))
  return ''.date('d/m', $date);
  
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 20 DAY')))
  return ''.date('d/m', $date);
  
   else if(date('Ymd', $date) == date('Ymd', strtotime('- 21 DAY')))
  return ''.date('d/m', $date);

else if(date('Ymd', $date) < date('Ymd', strtotime('- 21 DAY')))
  return ''.date('d/m', $date);
  
   else
  return 'Le '.date('Y-m-d à H:i:s', $date);
}

?>
