<?php



function listPresence()
{
    // savefile(PATHPRESENCE, $presence);

    $presence = loadFile(PATHPRESENCE);
    return $presence;
}
// dd($getPresence);




// filtrer haut de  la page champ de recherche
function recherche($search)
{
    $recherches = listPresence();
    $result = [];
    foreach ($recherches as  $recherche) {
        if ($recherche["matricule"] == trim($search)) {
            $result[] = $recherche;
        }
    }
    return $result;
}


// filtre et pagination 
$presences = listPresence();
$eleByPage = 6;
$pageEtu = $_GET['pageAff'] ?? 1;
$_SESSION['affichePresence'] = $_REQUEST;
// var_dump($_SESSION['affichePresence']);


// function filtrerPresences($presences) {

//     $sess=$_SESSION["affichePresence"];
//     @$statut_filtre = $sess['status'];
//     @$referentiel_filtre = $sess['referenciel'];
//     @$date_filtre = $sess['date'];
//         return ($statut_filtre == "" || $presences["status"] == $statut_filtre) &&
//         ($referentiel_filtre == "" ||  $presences["referenciel"] == $referentiel_filtre)&&
//         ($date_filtre == "" || $presences["date"] == $date_filtre);
// }

// $listeFiltre = array_filter($presences, 'filtrerPresences');

// $totalPage=ceil(count($listeFiltre)/$eleByPage);

// if($pageEtu<1 || $pageEtu>$totalPage)
// $pageEtu= 0;
// $eleDeb = ($pageEtu-1)*$eleByPage;
// $etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage);




$listeFiltre = array_filter($presences, 'filtrerPresences');

$totalPage = ceil(count($listeFiltre) / $eleByPage);

if ($pageEtu < 1 || $pageEtu > $totalPage)
    $pageEtu = 0;
$eleDeb = ($pageEtu - 1) * $eleByPage;
$etudiantsPage = array_slice($listeFiltre, $eleDeb, $eleByPage);


$presence = listPresence();
$presence = $etudiantsPage;
if (isset($_POST["search"])) {
    $presence = recherche($_POST["search"]);
}



$presence = listPresence();
$tabApp = array();
foreach ($presence as $student) {
    if ($_SESSION["id_promotion"] == $student["id_promotion"]) {
        $tabApp[] = $student;
    }
}
$presence = $tabApp;
