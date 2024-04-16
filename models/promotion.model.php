<?php 

    function findPromotion(){
        $promotion = [
                [
                    'id_promotion' => 1,
                    'libelle' => 'Promotion 1',
                    'dateDebut' => '2024-02-01',
                    'dateFin' => '2024-11-01',
                    'status' => 0
        
                ],
                [
                    'id_promotion' => 2,
                    'libelle' => 'Promotion 2',
                    'dateDebut' => '2023-02-01',
                    'dateFin' => '2023-11-01',
                    'status' => 0
        
                ],
                [
                    'id_promotion' => 3,
                    'libelle' => 'Promotion 3',
                    'dateDebut' => '2022-02-01',
                    'dateFin' => '2022-11-01',
                    'status' => 0
            
                ],
                [
                    'id_promotion' => 4,
                    'libelle' => 'Promotion 4',
                    'dateDebut' => '2021-02-01',
                    'dateFin' => '2021-11-01',
                    'status' => 0
            
                ],
                [
                    
                    'id_promotion' => 5,
                    'libelle' => 'Promotion 5',
                    'dateDebut' => '2020-02-01',
                    'dateFin' => '2020-11-01',
                    'status' => 0
                
                ],
                [
                    'id_promotion' => 6,
                    'libelle' => 'Promotion 6',
                    'dateDebut' => '2019-02-01',
                    'dateFin' => '2019-11-01',
                    'status' => 1
                    
                ]
        
    ];

        savefile(PATHPROMOTION, $promotion);

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
?>