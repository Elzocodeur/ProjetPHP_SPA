<?php 

function findAllStudents(){
    $student = [
        [ 
        "id"=> 1,
        "image" => 'img1.png',
        "nom" => 'elimane',
        "prenom" => 'nging',
        "email" => 'elimane@nging',
        "genre" => 'M',
        "telephone" => '777777777',
        "id_promotion"=> 1,
        "action" => false
        
    ],
        [ 
            "id"=> 2,
            "image" => 'img1.png',
            "nom" => 'seydina',
            "prenom" => 'mhd',
            "email" => 'moussa',
            "genre" => 'M',
            "telephone" => '777777777',
            "id_promotion"=> 1,
            "action" => false
            
        ],
        [ 
            "id"=> 3,
            "image" => 'img1.png',
            "nom" => 'pathe',
            "prenom" => 'pathe',
            "email" => 'pathe',
            "genre" => 'M',
            "telephone" => '777120777',
            "id_promotion"=> 2,
            "action" => true
            
        ], 
        [ 
            "id"=> 4,
            "image" => 'img1.png',
            "nom" => 'modou',
            "prenom" => 'modou',
            "email" => 'modou',
            "genre" => 'M',
            "telephone" => '777347977',
            "id_promotion"=> 2,
            "action" => false
            
        ],
        [ 
            "id"=> 5,
            "image" => 'img1.png',
            "nom" => 'andaw',
            "prenom" => 'andaw',
            "email" => 'andaw',
            "genre" => 'M',
            "telephone" => '777729777',
            "id_promotion"=> 2, 
            "action" => true
            
        ],
        [ 
            "id"=> 6,
            "image" => 'img1.png',
            "nom" => 'issa',
            "prenom" => 'issa',
            "email" => 'issa',
            "genre" => 'M',
            "telephone" => '777987777',
            "id_promotion"=> 3,
            "action" => false
            
    ],
    
    [ 
        "id"=> 7,
    "image" => 'img1.png',
    "nom" => 'modou',
    "prenom" => 'ndiaye',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '777864799',
    "id_promotion"=> 3,
    "action" => false
    
],
[ 
"id"=> 8,
"image" => 'img1.png',
"nom" => 'modou',
"prenom" => 'ndiaye',
"email" => 'modou@gmail?com',
"genre" => 'M',
"telephone" => '777573799',
"id_promotion"=> 3,
"action" => true

],
[ 
"id"=> 9,
"image" => 'img1.png',
"nom" => 'modou',
"prenom" => 'ndiaye',
"email" => 'modou@gmail?com',
"genre" => 'M',
"telephone" => '772387799',
"id_promotion"=> 4,
"action" => false

],

[ 
    "id"=> 10,
    "image" => 'img1.png',
    "nom" => 'modou',
    "prenom" => 'ndiaye',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 5,
    "action" => false
    
],

[ 
    "id"=> 11,
    "image" => 'img1.png',
    "nom" => 'modou',
    "prenom" => 'ndiaye',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 6,
    "action" => true
    
],

[ 
    "id"=> 12,
    "image" => 'img1.png',
    "nom" => 'modou',
    "prenom" => 'ndiaye',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 6,
    "action" => false
    
],
[ 
    "id"=> 13,
    "image" => 'img1.png',
    "nom" => 'modou',
    "prenom" => 'ndiaye',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 6,
    "action" => false
    
],
[ 
    "id"=> 14,
    "image" => 'img1.png',
    "nom" => 'Daouda',
    "prenom" => 'Diop',
    "email" => 'modou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 1,
    "action" => false
    
],
[ 
    "id"=> 15,
    "image" => 'img1.png',
    "nom" => 'Awa',
    "prenom" => 'ndiaye',
    "email" => 'awa@gmail?com',
    "genre" => 'F',
    "telephone" => '772387799',
    "id_promotion"=> 2,
    "action" => true
    
],
[ 
    "id"=> 16,
    "image" => 'img1.png',
    "nom" => 'Diuma',
    "prenom" => 'ndiaye',
    "email" => 'diou@gmail?com',
    "genre" => 'F',
    "telephone" => '772387799',
    "id_promotion"=> 2,
    "action" => true
    
],
[ 
    "id"=> 17,
    "image" => 'img1.png',
    "nom" => 'omar',
    "prenom" => 'ndiaye',
    "email" => 'omaru@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 4,
    "action" => true
    
],
[ 
    "id"=> 19,
    "image" => 'img1.png',
    "nom" => 'abou',
    "prenom" => 'sy',
    "email" => 'abou@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 3,
    "action" => false
    
],
[ 
    "id"=> 20,
    "image" => 'img1.png',
    "nom" => 'saliou',
    "prenom" => 'diouf',
    "email" => 'sdiouf@gmail?com',
    "genre" => 'M',
    "telephone" => '772387799',
    "id_promotion"=> 1,
    "action" => false
    
    ]


    ];

    savefile(PATHAPRENANT, $student);

    $student = loadFile(PATHAPRENANT);

return $student;

}


//  filtrer  par email  
function recherche($filtrer){
    $recherches=findAllStudents();
    $result=[];
foreach($recherches as  $recherche ) {  

    if($recherche["email"]==trim($filtrer)){
        $result[]=$recherche;
    }       
}  
return $result;
}


$apprenants = findAllStudents(); 
$tabApp=array();
foreach($apprenants as $student){
    if($_SESSION["id_promotion"] == $student["id_promotion"]){
        $tabApp[] = $student;
    }
}
$apprenants=$tabApp;
// fonction pagination
$count = $tabApp;
$eleByPage= 4;
$pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
$totalPage=ceil(count($count)/$eleByPage); //ceil() fonction qui arrondit par exee
// echo($pageEtu<1 || $pageEtu>$totalPage);
if($pageEtu<1 || $pageEtu>$totalPage)
header("Location:?page=$page&pageAff=1");
$eleDeb = ($pageEtu-1)*$eleByPage;
$etudiantsPage = array_slice($count, $eleDeb, $eleByPage);


$apprenants =findAllStudents();
$apprenants = $etudiantsPage;
if (isset($_POST["search"])){
    $apprenants= recherche($_POST["search"]);
}





        

        // function findStudents($page = 1, $perPage = 4, $filterEmail = null) {
        //     $students = findAllStudents(); // Remplacez cette ligne par la logique pour obtenir tous les étudiants depuis la source de données
        
        //     // Filtrer par email si un filtre est spécifié
        //     if ($filterEmail !== null) {
        //         $filteredStudents = array_filter($students, function($student) use ($filterEmail) {
        //             return $student['email'] == trim($filterEmail);
        //         });
        //     } else {
        //         $filteredStudents = $students;
        //     }
        //     // Pagination
        //     $totalStudents = count($filteredStudents);
        //     $totalPages = ceil($totalStudents / $perPage);
        //     $start = ($page - 1) * $perPage;
        //     $paginatedStudents = array_slice($filteredStudents, $start, $perPage);
        
        //     return [
        //         'students' => $paginatedStudents,
        //         'totalPages' => $totalPages
        //     ];
        // }



?>



