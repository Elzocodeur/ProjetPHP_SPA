<?php 

    function findAllReferentiels(){

        $referentiel = [
            [
                "id_referentiel" => 1,
                "id_promotion" => 1,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom_referentiel" => 'dev_web',
                "statut" => 'Actif',
                
            ],
            [
                "id_referentiel" => 2,
                "id_promotion" => 5,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom_referentiel" => "dev_data",
                "statut" => "Actif",
            ],  
            [
                "id_referentiel" => 3,
                "id_promotion" => 5,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom_referentiel" => 'dev_web',
                "statut" => 'Actif',
            ],
            [
                "id_referentiel" => 4,
                "id_promotion"=> 5,
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => 'ref_dig',
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 5,
                "id_promotion"=> 6,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom_referentiel" => 'dev_web',
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 6,
                "id_promotion"=> 6,
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => "aws",
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 7,
                "id_promotion"=> 6,
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => "dev_web",
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 8,
                "id_promotion"=> 6,
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => "ref_dig",
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 9,
                "id_promotion"=> 6,
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => "hackeuse",
                "statut" => "Actif",
            ],
            [
                "id_referentiel" => 10,
                "id_promotion"=> 6,
                "image"=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU",
                "nom_referentiel" => "dev_data",
                "statut" => "Actif",
            ]
       
            
          
            
        ];

        savefile(PATHREFERENTIEL, $referentiel);
        $referentiels = loadFile(PATHREFERENTIEL);
        return $referentiels;
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


    // if(isset($_POST["classe"])&&($_POST["referentiel"])){
    //     $id_promotion = $_POST["classe"];
    //     $id_referentiel = $_POST["referentiel"];
    //     // $_SESSION["id_promotion"] = $id_promotion;
    //     $_SESSION["id_promotion"] = $id_referentiel;
    //     $referentiel = $tabInt;
    // }



    

?>