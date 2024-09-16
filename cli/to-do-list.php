<?php

$tasklist = ["first task", "second task"];

function showTask($inputTasks){
    foreach($inputTasks as $tasks){
        echo $task . "\n";
    }

}
function addTask($inputTasks){
    echo "to be implemented";
}
//1.uzd uzttaisit  do while ciklu ko var apstadinat ar n



//Do While Loop Syntax
  do 
  {
  echo "uzdevumu parvaldnieks1 \n";
  echo "apskatit  uzdevumu => 2\n";
  echo "ievadit jaunu uzdevumu => 3 \n";
  $choice = readline("izvelies darbibu: ");


    switch ($choice) {
    case '1':
        showTask($tasklist);
        break;
    case '2':
        $addTask;
        break;
    case '3':
        echo "to be implemented! ";
        break;
    default:
        echo "invalid option!\n!";
    }


  { $continue = readline("Vai velaties turpinat? ");
  // code to be executed
  } while ($continue $i = "N");
  }
  //2.uzd izveidot switch case konstrukciju lai apstradatu lietotaja ievades