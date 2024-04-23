<?php

$password = readline('inserisci: ');


function ContaCaratteri($conta) {
if (strlen($conta)>=8 ){
   return true;   
} else{
    return false;
    echo 'la password deve contenere 8 caratteri'."\n";
}
};

function Numerica($numerica){
    for($i=0; $i < strlen($numerica); $i++){
       if(is_numeric($numerica[$i])){
        return true;
       }
    }
    
        echo 'la password deve contenere un numero'."\n";
        return false;
       
      
};

function LetteraMaiuscola($lettera){
    for($i=0; $i< strlen($lettera); $i++){
        if(ctype_upper($lettera[$i])){ 
            return true;
        } 
    }
    
        echo 'deve contenere almeno una lettera maiuscola'."\n";
        return false;
       
    
};

function CaratteriSpeciali($speciali){
$TuttiCaratteri =['.',',','!','?','@'];

for($i=0; $i< strlen($speciali);$i++ ){
if(in_array($speciali[$i], $TuttiCaratteri)){
return true;
} 
}

    return false;
    echo 'deve contenere almeno un carattere speciale'."\n";

};

function CheckPassword($password){
    $ContaCaratteri = ContaCaratteri($password);
    $numerica= Numerica($password);
    $LetteraMaiuscola = LetteraMaiuscola($password);
    $CaratteriSpeciali =CaratteriSpeciali($password);
    
   if($CaratteriSpeciali  && $numerica  && $LetteraMaiuscola  && $CaratteriSpeciali){
        echo 'password inserita correttamente'."\n";
    }else {
        echo ' controlla la password'."\n";
    }
};

CheckPassword($password); 
ContaCaratteri($password);
Numerica($password);
LetteraMaiuscola($password); 
CaratteriSpeciali($password);
?>


