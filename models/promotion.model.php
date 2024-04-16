<?php 

    function findPromotion(){

        // savefile(PATHPROMOTION, $promotion);
        $promotion = loadFile(PATHPROMOTION);
        return $promotion;
    }
        // filtrer haut de  la page champ de recherche
        function recherche($search){
            $recherches=findPromotion();
            $result=[];
        foreach($recherches as  $recherche ) {  

            if($recherche["libelle"]==trim($search)){
                $result[]=$recherche;
            }       
        }  
        return $result;
        }
        $promos = findPromotion();
        if (isset($_POST["search"])){
            $promos= recherche($_POST["search"]);
        } 



        // promotion dynamique
    function enablePromotion($idPromo){
        $promotions = findPromotion();
        foreach ($promotions as &$promo) {
            if ($promo["id_promotion"] == $idPromo) {
                $promo["status"] = 1;
            } else {
                $promo["status"] = 0;
            }
        }
        savefile(PATHPROMOTION, $promotions);
    }

    if (isset($_POST["activation"])){
        $_SESSION["id_promotion"] = $_POST["activation"];
        $idPromo = $_POST["activation"];
        enablePromotion($idPromo);
    }
?>