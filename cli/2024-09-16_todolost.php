<?php 

//1. while cikls
//2. izvelne 
//3. switch case nosacijumi 
//4. izveidojam testa datus

$taskList = ["izpildit majasdarbu","aiziet laicigi gulet"];

$continue = 'y';
do {
    
    echo "uzdevumu parvaldnieks => 1 \n";
    echo "apskatit visus uzdevumus => 2\n";
    echo "ievadit jaunu uzdevumu => 3 \n";
    echo "apskatit  uzdevumu => 4\n";
    echo "iziet => 5\n ";

    $choice = readline("izvelies darbibu: ");

    switch ($choice) {
        case '1':
            echo "\n";
            foreach ($taskList as $task){
                echo "";
            }
            echo "\n";

            for ($i = 0; $i < ($taskList); $i++) {
                $id = $i + 1;
                echo "$id" . " .$taskList[$i] \n";
            }
            break;
        case '2':
            addTask($createTask);
            break;
        case '3':
            viewTask($showTasks);
            break;
            case '4';
            leave($leaving);
        default:
            echo "invalid option!\n!";
        }
    }
while ($continue == 'y');

