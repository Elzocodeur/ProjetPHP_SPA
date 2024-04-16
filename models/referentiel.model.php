<?php 

    function findAllReferentiels(){
        $referentiel = [
                
            [ 
                "id_referentiel" => 1,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom" => 'Dev Web/mobile',
                "statut" => 'Active',
                "id_promotion" => 1
        ],
        [ 
        "id_referentiel" => 2,
        "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
        "nom" => 'Référence Digital',
        "statut" => 'Active',
        "id_promotion" => 3
        
    ],

        [ 
        "id_referentiel" => 3,
        "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
        "nom" => 'AWS',
        "statut" => 'Active',
        "id_referentiel" => 3,
        "id_promotion" => 5
        
    ],
            [ 
                "id_referentiel" => 4,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom" => 'Référence Digital',
                "statut" => 'Active',
                "id_promotion" => 4
                
            ],
            [ 
                "id_referentiel" => 5,
                "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
                "nom" => 'Dev data',
                "statut" => 'Active',
                "id_promotion" => 2
                
            ],
            [ 
            "id_referentiel" => 6,
            "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
            "nom" => 'Hackeuse',
            "statut" => 'Active',
            "id_promotion" => 6
            
        ],
        
        [
        "id_referentiel" => 7,
        "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
        "nom" => 'AWS',
        "statut" => 'Active',
        "id_promotion" => 5
        
    ],
    
    [ 
    
    "id_referentiel" => 8,
    "image" => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE0cnxfmp6qG9-nSGkKy7yQgaCNnxdgYJ-BIben91IXRQOfVXieiVHPQfEovSQ4swQuL8&usqp=CAU',
    "nom" => 'Hackeuse',
    "statut" => 'Active',
    "id_promotion" => 5
    
],


        ];


        savefile(PATHREFERENTIEL, $referentiel);

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

?>