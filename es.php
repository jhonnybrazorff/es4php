
<?php
define("SCONTO", 0.15);

// 1)
$prodotto = [

"nome"=> "FUNGO",
"prezzo"=> 1.50,
"marca"=> "BANTI",
"disponibile"=> false

];




// 2)
stampa();



// 3) 
$prodotto["prezzo"] -= $prodotto["prezzo"] * SCONTO;

// 4)
$prodotto["rating"] = 4.2;

// 5)
if(!array_key_exists("codice_a_barre",$prodotto)){
    $prodotto["codice_a_barre"] = "=OIHASYDFHNADE#";
}

if($prodotto["prezzo"] < 10){
    $prodotto["disponibile"] = false;
}



function stampa(){
    global $prodotto;
    foreach($prodotto as $chiave => $valore){
        if($chiave == "disponibile"){
            $valore = $valore ? "SI" : "NO";
        }
        echo $chiave . " : " . $valore . "<br>";
    }
}
// 6)
stampa();

?>
