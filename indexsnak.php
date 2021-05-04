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

    echo $basket;
    var_dump($basket);

    /* Snack 2Passare come parametri GET name, mail e age e verificare (cercando i metodi che
    non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
    */
    ?>
  </body>
</html>
