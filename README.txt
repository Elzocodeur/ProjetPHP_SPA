
        
        //fonction pour faire un pagination pagination
            // $eleByPage= 4 ;
            // $pageEtu = isset($_GET['pageAff']) ? $_GET['pageAff'] : 1;
            // $totalPage=ceil(count(listPresence())/$eleByPage); //ceil() fonction qui arrondit par exee
            // // echo($pageEtu<1 || $pageEtu>$totalPage);
            // if($pageEtu<1 || $pageEtu>$totalPage)
            // header("Location:?page=$page&pageAff=1");
            // $eleDeb = ($pageEtu-1)*$eleByPage;
            // $etudiantsPage = array_slice(listPresence(), $eleDeb, $eleByPage);







// fonction pour filtrer 

//         function filteredPresence($status = 'status') {

//             $presences = listPresence();

//             if ($status == 'status') {
//                 return $presences;
//             }
//             $filtrerPresence = [];
            
//             foreach ($presences as $presence) {
//                 if ($presence['status'] == $status) {

//                     $filtrerPresence[] = $presence;
//                 }
//             }

//             return $filtrerPresence;

//  }

                                        var checkboxes = document.getElementsByName('activation');






    <form class="conteneur" method="POST">
            <?php
                        $selectedRef = isset($_POST['referenciel']) ? $_POST['referenciel'] : '';
                ?>
        <div class="contain1">
            <span>Promotion :</span>
            <span>promotion <?= $_SESSION['id_promotion']?></span>
        </div>
        <select  name="referenciel"  onchange="this.form.submit()"  class="contain2">
                    
                            <option value="">Reférenciel</option>
                            <option value="dev_web" onchange="this.form.submit()" <?= $selectedRef == 'dev_web' ? 'selected' : '' ?>>dev_web</option>
                            <option value="data" onchange="this.form.submit()" <?= $selectedRef == 'data' ? 'selected' : '' ?>>data</option>
                            <option value="ref_dig" onchange="this.form.submit()"  <?= $selectedRef == 'ref_dig' ? 'selected' : '' ?>>ref_dig</option>
                            <option value="aws" onchange="this.form.submit()" <?= $selectedRef == 'aws' ? 'selected' : '' ?>>aws</option>
                            <option value="hackeuse" onchange="this.form.submit()" <?= $selectedRef == 'hackeuse' ? 'selected' : '' ?>>hackeuse</option>
        </select>
    </form>

    <form action="" method="post" class="dropdown">
        <div class="custom-select" onclick="this.classList.toggle('active')">
            <div class="select-selected">Référenciels</div>
            <div class="select-items">
                
                <?php
                $allrefs = findAllReferentiels();
                foreach ($allrefs as $activeref) {
                    // --- select à dynamiser
                    if ($_SESSION["id_promotion"] == $activeref['id_promotion']) {
                ?>

                        <div>
                            <input type="checkbox" onchange="this.form.submit()" id="<?= $activeref['nom_referentiel'] ?>" name="referenciel" value="<?= $activeref['nom_referentiel']?>">
                            <label for="<?= $activeref['nom_referentiel'] ?>"><?= $activeref['nom_referentiel'] ?></label>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </form>






function filtrerReferentiels($apprenants)
{
    $filteredData = $apprenants;
    if(isset($_POST['referenciel']) && !empty($_POST['referenciel'])) { 
        $referentielFilter = $_POST['referenciel'];
        
        // Modification pour gérer plusieurs référentiels sélectionnés
        if (!empty($referentielFilter)) {
            $filteredData = array_filter($filteredData, function ($row) use ($referentielFilter) {
                // Vérifie si le nom du référentiel de la ligne est dans la liste des référentiels sélectionnés
                return in_array($row['nom_referentiel'], $referentielFilter);
            });
        }
    }
    return $filteredData;
}




















     <form action="" method="post" class="dropdown">
                <?php
                        $selectedRef = isset($_POST['referenciel']) ? $_POST['referenciel'] : '';
                ?>
        <div class="custom-select" onclick="this.classList.toggle('active')">
            <div class="select-selected" style="font-size: 1.8em;">Référenciels</div>
            <div class="select-items">

            <?php
                        $selectedRef = isset($_POST['referenciel']) ? $_POST['referenciel'] : '';
                ?>
                <?php
                $allrefs = findAllReferentiels();
                foreach ($allrefs as $activeref) {
                    // --- select à dynamiser
                    if ($_SESSION["id_promotion"] == $activeref['id_promotion']) {
                ?>

                        <div>
                            <input type="checkbox" onchange="this.form.submit()"<?= $selectedRef == $activeref['nom_referentiel'] ? 'checked' : '' ?>   id="<?= $activeref['nom_referentiel'] ?>" name="referenciel" value="<?= $activeref['nom_referentiel']?>">
                            <label for="<?= $activeref['nom_referentiel'] ?>"><?= $activeref['nom_referentiel'] ?></label>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
    </form>