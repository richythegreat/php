<?php

echo "This is my first CLI script in php!";

//1.uzd izveido ciklu lai izvaditu skaitlus 1-10
 
for ($x = 1; $x <= 10; $x++){
    echo "number; $x <br>";
}
for ($x = 10; $x <= 1; $x++){
    echo "number; $x <br>";
}
//2. uzd izveidot asociativu masivu, kura ir dati par e personam (vards un vecums) ar cikla palidzibu izvadit katras personas datus
//sekojosa formata: "vards: janis, vecums: 19" 

  
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'Janis',
      'age' => 20,

    ],
    [
      'first_name' => 'Emils',
      'age' => 30,

    ],
    [
        'first_name' => 'Dinars',
        'age' => 40,
  
      ]
  ];
  //3.uzd 