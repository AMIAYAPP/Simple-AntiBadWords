<?php
/*
ANTI BAD WORDS MADE BY AMIAYAPP DEVELOPPER

Version: 1.0.0 [French Detect] 
Developper: AMIAYAPP (YagamiiRoot)
Github: https://github.com/AMIAYAPP
 

Results:
 1 = true
 0 = false


Edit the array of the variable $badwords to your own langage
*/
$wordtocheck = $_GET['txt'];
$badwords = array('pute','salope','slp','tepu','sale pute','sale put','sale salope','salop','slp','salaud','bounioul','bounioule','bougnoule','sale négro','sale nègre','sale noir','sale nwar','sale nuar','sale nouar','fdp','fils de pute','fils deup','fils de put','fils deux pute','fils deu pute','fils deu put','fils deux put','enculer','enculé','enculée','t\'enculer','batard','btrd','albatard','ntm','nikomok','nique ta mère','nique ta reum','baise ta mère','bztmr','bz ta mère','ta mère la pute','sale gros shlag','sale fils de pute','jv te niquer','jvais te niquer','j\'vais te niquer');
foreach ($badwords as $badw) {
    if (strpos($wordtocheck, $badw) !== false) {
        echo "1"; 
        return true;
    }
}
echo "0";
return false;
?>