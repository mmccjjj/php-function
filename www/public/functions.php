<?php
    function begruessen(){
        echo 'Hallo, Welt!';
    }

    function addieren($a, $b){

        echo $a+ $b;

    }

    function begruessenPers($name= "Gast"){

            echo 'Hallo '. htmlspecialchars($name);
    }


    function addiere($a, $b){

        if (is_numeric($a)&& is_numeric($b)){
        return $a+ $b;
        }else{
            echo "<script type='text/javascript'>
            alert('Gib Zwei Zahlen ein!');
        </script>";
        }

    }

    $resultat= addiere(7,5);

    $resultat+= 10;

    $früchte= array('Apfel', 'Birne', 'Cocos', 'Dattel', 'Orange');
    $schauspieler= array('Tom Hanks','Meryl Streep','Leonardo DiCaprio','Jennifer Lawrence ','Denzel Washington ');
    $opportunity= array('HTML', 'CSS', 'JavaScript', 'Bootstrap', 'Responsive Design', 'PHP', 'MySQL', 'API', 'Framework', 'Version Control');

    function erstelleListevonArray($array){
        $tempErgebnis= array_map(function($item){
            return '#'.strtolower($item);
        }, $array);
        $resultat= implode('<br>', $tempErgebnis);
        echo $resultat;
    }

    function arrayInCamel($array){
        for ($i= 0; $i< count($array); $i++){
            $array[$i] = strtolower($array[$i]);
            if(strpos($array[$i],' ')!== false){
                $words= explode(' ', $array[$i]);
                for ($j= 1; $j< count($words); $j++){
                    $words[$j]= ucfirst($words[$j]);
                }
                $array[$i]= implode('', $words);
            }
        }

            $resultTemp= array_map(function($item){
                return '#'.($item);
            }, $array);
            $result = implode(', ', $resultTemp);

    echo $result;
    }


    //chatgpt "einfachere Methode"
    // Auch lösung in Aufgabe berücksichtigen!

   
/*         foreach ($array as &$item) {
            $item = strtolower($item); 
            
            if (strpos($item, ' ') !== false) {
               
                $words = explode(' ', $item);
                $item = $words[0] . implode('', array_map('ucfirst', array_slice($words, 1)));
            }
            
            $item = '#' . $item; 
        }
    
        $result = implode(', ', $array); 
    
        echo $result; 
     */

     function add($a, $b){
        /* echo $a+$b; */
        return $a+$b;

     }
     function subtract($a, $b){
        /* echo $a-$b; */
        return $a- $b;
     }
     function multiply($a, $b){
        /* echo $a*$b; */
        return $a* $b;
     }
     function divide($a, $b){
        if ($b== 0){
            return 'durch null ist nicht teilbar';
        }else{

        /* echo $a/$b; */
        return $a/ $b;
        }
     }

     function performCalculation($zahl1, $zahl2, $cal){
        if(is_callable($cal)){
            return $cal($zahl1,$zahl2);
        }else{
            return 'Ungültige Eingabe';
        }
     }

     $mathAr= array('add', 'subtract', 'multiply', 'divide');
     $a1= 30;
     $a2= 10;

     function mathArray($a,$b, $array){
        foreach($array as $array1){
            if (is_callable($array1)){
                $result= $array1($a, $b);
                echo "Ergebnis von $array1($a, $b): $result";
                echo "<br>";
            }else{
                echo "$array1 ist keine gültige Funktion";
            }
        }
     };


    function multipliziere(...$zahlen){
        $ergebis= 1;
        foreach($zahlen as $zahl){
            $ergebis*= $zahl;
        };
        echo $ergebis;
        echo '<br>';
    };

    $multiply= function($zahl){
        $faktor= 2;
        echo $zahl* $faktor;
        echo '<br>';
        return $zahl* $faktor;
    };
    
/*     function multiplier($faktor){
        return function($zahl) use($faktor){
            return $faktor* $zahl;
        };
    }; */

    $multiplier2= fn($zahl)=> $zahl* 2;

    $multiplier3= fn($zahl)=> $zahl* 3;


    function rekursiv($x) {
        if ($x >= 7 && $x <= 10) {
            echo $x . " ";
        } 
        if ($x < 10) {
            rekursiv($x + 1);
        }
    }


?>