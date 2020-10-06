<?php

$faqs = [
   [
     "domanda" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
     "risposta" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.",
   ],

   [
     "domanda" => "Testo domanda",
     "risposta" => "Testo risposta",
   ],

   [
     "domanda" => "Testo domanda",
     "risposta" => "Testo risposta",
   ]

];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($faqs as $faq) { ?>
    <h2><?php echo $faq["domanda"]; ?></h2>
    <h2><?php echo $faq["risposta"]; ?></h2>
    <?php } ?>
  </body>
</html>
