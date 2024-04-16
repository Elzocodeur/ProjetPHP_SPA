<?php 

    function findAllReferentiels(){

        // savefile(PATHREFERENTIEL, $referentiel);

        $referentiel = loadFile(PATHREFERENTIEL);
        

        return $referentiel;
    }



        // filtrer haut de  la page champ de recherche
        function recherche($search){
            $recherches=findAllReferentiels();
            $result=[];
        foreach($recherches as  $recherche ) {  

            if($recherche["nom"]==trim($search)){
                $result[]=$recherche;
            }       
        }  
        return $result;
        }
    $refDig = findAllReferentiels();
    if (isset($_POST["search"])){
        $refDig= recherche($_POST["search"]);
    }

?>