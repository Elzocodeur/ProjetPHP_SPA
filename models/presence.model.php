<?php  
function listPresence(){  
    // savefile(PATHPRESENCE, $presence);
    $presence = loadFile(PATHPRESENCE);
    return $presence;
}

        // filtrer haut de  la page champ de recherche
        function recherche($search){
            $recherches=listPresence();
            $result=[];
        foreach($recherches as  $recherche ) {  
            if($recherche["matricule"]==trim($search)){
                $result[]=$recherche;
            }       
        }  
        return $result;
        }

    $presence = listPresence();
        $tabInt=array();
        foreach($presence as $student){
            if($_SESSION["id_promotion"] == $student["id_promotion"]){
                $tabInt[] = $student;
            }

        }
     $presence=$tabInt;


// filtre et pagination 
    $eleByPage=4;
    $pageEtu = $_GET['pageAff'] ?? 1;         
    $_SESSION['affichePresence'] = $_REQUEST;
function filtrerPresences($presence) {
    $sess=$_SESSION["affichePresence"];
    @$statut_filtre = $sess['status'];
    @$referentiel_filtre = $sess['referenciel'] ;
    @$date_filtre = $sess['date']; 

    return ($statut_filtre == "" || $presence["status"] == $statut_filtre) &&
    ($referentiel_filtre == "" ||  $presence["referenciel"] == $referentiel_filtre)&&($date_filtre == "" ||  $presences["date"] == $date_filtre);
}

        $listeFiltre = array_filter($presence, 'filtrerPresences');
        $totalPage=ceil(count($listeFiltre)/$eleByPage);
        if($pageEtu<1 || $pageEtu>$totalPage)
        $pageEtu= 0;
        $eleDeb = ($pageEtu-1)*$eleByPage;
        $etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage);

        // cumul  des deux fonctions
        $presence = listPresence();
        $presence = $etudiantsPage;
        if (isset($_POST["search"])){
            $presence= recherche($_POST["search"]);
        }



?>
    