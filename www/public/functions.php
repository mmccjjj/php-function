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

   /*  function arrayInCamel($array){ */
        foreach ($array as &$item) {
            $item = strtolower($item); // Alle Einträge in Kleinbuchstaben umwandeln
            
            if (strpos($item, ' ') !== false) {
                // Falls ein Leerzeichen gefunden wird, Wörter in CamelCase umwandeln
                $words = explode(' ', $item);
                $item = $words[0] . implode('', array_map('ucfirst', array_slice($words, 1)));
            }
            
            $item = '#' . $item; // Jeden Eintrag mit '#' voranstellen
        }
    
        $result = implode(', ', $array); // Array in eine kommagetrennte Zeichenfolge umwandeln
    
        echo $result; // Ausgabe der Zeichenfolge
    }
?>