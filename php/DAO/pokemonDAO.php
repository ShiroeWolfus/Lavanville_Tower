<?php

class Combattant extends Pokemon {
    
    function EstVivant(){
        if ($pv > 0) {
            echo "le nombre de PV de " . $nom . " est de " . $pv . "." ;
            return TRUE ;
        }
    }

    function BoitPotion( $gain ) {
        addPV( $gain, $pokemon );
    }

    function addPV($gain, $pokemon) {
        $pv['pokemon'] += $gain ;
    }

    function Attaque( $pokemon ) {
        echo $pokemon . " afflige ". $damage ." points de dégâts à " . $pokemon ;

        $pv['pokemon'] -= $attk ;
    }
}