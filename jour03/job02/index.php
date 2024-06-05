<?php
function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }else{
        echo " 	Bonsoir ";
    }
}
bonjour(false);
echo "<br>";
bonjour(true);
echo "<br>";

?>
<?php
function Buongiorno(bool $jour) : string{
    if($jour == true){
        return "Buongiorno";
    }else{
        return " Buona sera ";
    }
}
echo (Buongiorno(false));
?>