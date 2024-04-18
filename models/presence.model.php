<?php



function listPresence()
{


    $presence = [
            [
                "id" => 1,
                "matricule" => "12345",
                "nom" => "nging",
                "date"=>date("Y-m-d"),
                "heure"=>date("H:i:s"),
                "status"=>"present",
            ]

    ];
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


// FUNCTION FILTER

$presences = listPresence();

$tabApp = array();
foreach ($presences as $student) {
    if ($_SESSION["id_promotion"] == $student["id_promotion"]) {
        $tabApp[] = $student;
    }
}
$presences = $tabApp;
 $data_filter = $presences;
 
function filtrerPresences($presences)
{
    $filteredData = $presences;
    if (isset($_POST['refresh'])) { 
        $statusFilter = $_POST['status'];
        $referentielFilter = $_POST['referenciel'];
        $dateFilter = $_POST['date']; 
        // dd($statusFilter, $referentielFilter, $dateFilter);
        // var_dump($statusFilter, $referentielFilter, $dateFilter);
        if ($statusFilter === 'present' || $statusFilter === 'absent') {
            $filteredData = array_filter($filteredData, function ($row) use ($statusFilter) {
                return $row['status'] === $statusFilter;
            });
        }

        if ($referentielFilter !== ''){
                $filteredData = array_filter($filteredData, function ($row) use ($referentielFilter){
                return $row['referenciel'] === $referentielFilter;
            });
        }
        if($dateFilter !== '') {
            $formattedDateFilter = date('Y-m-d', strtotime($dateFilter));
            // on filtre la date formater stocker dans la variable $formattedDateFilter
            $filteredData = array_filter($filteredData, function ($row) use ($formattedDateFilter) {
                $rowDate = DateTime::createFromFormat('m-d-Y', $row['date']);
                if (!$rowDate) {
                    $rowDate = new DateTime($row['date']);
                }
                return $rowDate->format('Y-m-d') === $formattedDateFilter;
            });
        }
    }
    return $filteredData;
}





// -------- PAGINATION---------

$data_filter = filtrerPresences($presences);
$eleByPage = 4;
$pageEtu = $_GET['pageAff'] ?? 1;
$_SESSION['affichePresence'] = $_REQUEST;


$totalPage = ceil(count($data_filter) / $eleByPage);

if ($pageEtu < 1 || $pageEtu > $totalPage)
    $pageEtu = 0;
$eleDeb = ($pageEtu - 1) * $eleByPage;
$data_filter = array_slice($data_filter, $eleDeb, $eleByPage);








// -----------BAR SEARCH ALL ------------

$presence = $data_filter;
if (isset($_POST["search"])) {
    $presence = recherche($_POST["search"]);
}



