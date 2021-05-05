<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ciao</h1>
    <?php
    /* Snack 1Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e
    punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
    */
    $basket = [
      [
        'home'=> 'teamA';
        'Opposing' => 'teamB';
        'pointsHome'=> '55';
        'pointsOpp'=> '60';
      ],
      [
        'home'=> 'teamC';
        'Opposing' => 'teamD';
        'pointsHome'=> '40';
        'pointsOpp'=> '80';
      ],
      [
        'home'=> 'teamE';
        'Opposing' => 'teamF';
        'pointsHome'=> '10';
        'pointsOpp'=> '75';
      ],
    ];

    for($i=0; $i < count($basket); $i++){
      $math = $basket[$i];
      echo $math['home'] . ' - ' . $math['Opposing'] . ' | ' . $math['pointsHome'] . ' - ' . $math['pointsOpp'];
      echo '<br>';
    }

    /* Snack 2Passare come parametri GET name, mail e age e verificare (cercando i metodi che
    non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    */

    $wordName = $_GET['name'];
    $wordMail = $_GET['mail'];
    $age = $_GET['age'];
    // echo $wordName;
    // echo '<br>';
    // echo $wordMail;
    // echo '<br>';
    // echo $age;

    $nameOk = strlen($wordName) > 3;
    // var_dump($nameOk);

    $mailOk = (strpos($wordMail, '.') != false) && (strpos($wordMail, '@') !=false);
    // var_dump($mailOk);

    $ageOk = is_numeric($age); //is_int(verifica se il numero è un intero)
    // var_dump($ageOk);

    if($nameOk==true && $mailOk==true && $ageOk==true){
      echo "Accesso riuscito";
    }else{
      echo "Accesso negato";
    }
    ?>
  </body>
</html>
