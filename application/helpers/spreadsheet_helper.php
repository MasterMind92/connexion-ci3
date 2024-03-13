<?php

function load($path){

    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load($path);

    return $spreadsheet;
}


// fonction de lecture du fichier
// retourne un json
function read_to_json($path)
{
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $reader->setReadDataOnly(true);
    $spreadsheet = $reader->load($path);

    $worksheet = $spreadsheet->getActiveSheet();
    $rows = $worksheet->toArray();

    // supprimer les entetes
    array_shift($rows);

    // affichage de la response
    echo json_encode($response);
}

// fonction de lecture du fichier excel
// retourne un tableau
function read_to_register($path)
{
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $reader->setReadDataOnly(true);
    $spreadsheet = $reader->load($path);

    $worksheet = $spreadsheet->getActiveSheet();
    $rows = $worksheet->toArray();

    // supprimer les entetes
    array_shift($rows);

    // affichage de la response
    return $rows;
}


/**
 * Fonction permettant de colorier un ensemble de cellules
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $cell2
 * @param string $color  [format #000000]
 * 
 * @return boolean
 * 
 */
function set_cell_color($spreadsheet,$WorkSheetName,$cell1,$cell2,$color)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getStyle("$cell1:$cell2")->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('00a2ed');
}

/**
 * Donner une valeur à cellule sélectionnnée
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $value
 * 
 * @return void
 * 
 */
function set_cell_value($spreadsheet,$WorkSheetName,$cell,$value)
{
    $spreadsheet->getSheetByName($WorkSheetName)->setCellValue($cell, $value);
}

/**
 * fusionner un ensemble de cellule
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $cell2
 * 
 * @return void
 * 
 */
function merge_cells($spreadsheet,$WorkSheetName,$cell1,$cell2)
{
    $spreadsheet->getSheetByName($WorkSheetName)->mergeCells("$cell1:$cell2");
}

/**
 * Separer un ensemble de cellules
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $cell2
 * 
 * @return void
 * 
 */
function unmerge_cells($spreadsheet,$WorkSheetName,$cell1,$cell2)
{
    $spreadsheet->getSheetByName($WorkSheetName)->unmergeCells("$cell1:$cell2");
}

/**
 * Mettre la couleur de la police en blanc
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * 
 * @return void
 * 
 */
function set_font_color($spreadsheet,$WorkSheetName,$cell1)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getStyle("$cell1")->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
}

/**
 * Changer la couleur de la police en blanc
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $cell2
 * @param string $color  [format #000000]
 * 
 * @return void
 * 
 */
function set_font_color_range($spreadsheet,$WorkSheetName,$cell1,$cell2,$color)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getStyle("$cell1:$cell2")->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
}

/**
 * Changer la densite de la police
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $cell1
 * @param string $cell2
 * 
 * @return void
 * 
 */
function set_font_weight($spreadsheet,$WorkSheetName,$cell1,$cell2)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getStyle("$cell1:$cell2")->getFont()->setBold(true);
}

/**
 * Mettre d'une ou de plusieurs cellule en italic
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param mixed $cell1
 * @param mixed $cell2
 * 
 * @return void
 * 
 */
function set_font_style_italic($spreadsheet,$WorkSheetName,$cell1,$cell2)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getStyle("$cell1:$cell2")->getFont()->setItalic(true);
}

/**
 * Donner une largeur a la colonne sélectionnée
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $column
 * @param int $dimension
 * 
 * @return void
 * 
 */
function set_column_width($spreadsheet,$WorkSheetName,$column,$dimension)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getColumnDimension($column)->setWidth($dimension, 'pt');
}

/**
 * [Description for set_row_height]
 *
 * @param Spreadsheet $spreadsheet
 * @param mixed $WorkSheetName
 * @param mixed $row
 * @param mixed $dimension
 * 
 * @return [type]
 * 
 */
function set_row_height($spreadsheet,$WorkSheetName,$row,$dimension)
{
    $spreadsheet->getSheetByName($WorkSheetName)->getRowDimension($row)->setRowHeight($dimension, 'pt');
}

/**
 * Fonction permettant d'ajouter une formule excel
 * a une cellule désignée
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param string $formula
 * @param string $cell
 * 
 * @return void
 * 
 */
function add_formula($spreadsheet,$WorkSheetName,$formula,$cell)
{
    // Set cell A4 with a formula
    $spreadsheet->getActiveSheet()->setCellValue(
        'A4',
        '=IF(A3, CONCATENATE(A1, " ", A2), CONCATENATE(A2, " ", A1))'
    );

    $spreadsheet->getActiveSheet()->getCell('A4')
        ->getStyle()->setQuotePrefix(true);
    return true;
}

/**
 * Fonction permettant de convertir un tableau associatif en 
 * un tableau a index numerique
 *
 * @param array $donnees
 * 
 * @return array
 * ok
 */
function obj_to_numeric_array($donnees)
{
    $list = [];

    foreach ($donnees as $key => $value) {
        
        // pour chaque ligne separer les cle-valeur
        $row = array_values((array) $value);
        $list[] = $row;

    }

    return $list;
}


/**
 * Fonction permettant de faire la somme des chiffres dans situes
 * a une position index dans un ensemble de tableaux
 *
 * @param int $index_row
 * @param array $row_set
 * 
 * @return array
 *  ok
 */
function get_sum_per_row($index_row, &$row_set, $nom_colonne)
{   
    $somme = 0;

    for ($index=0; $index < count($row_set); $index++) { 
        
        $current = $row_set[$index];

        $somme += (int) $current[$index_row];

    }

    return [
        "lib"=> $nom_colonne,
        "total" => $somme
    ];
}


function set_table_header($spreadsheet, $operateur)
{
    // presets de la fiche excel
    set_cell_color($spreadsheet,$operateur,"E2","G2","#f1c40f");
    set_cell_value($spreadsheet,$operateur,"E2","Etat de paiement du ". date("d-m-Y"));
    merge_cells($spreadsheet,$operateur,"E2","G2");

    set_cell_color($spreadsheet,$operateur,"D6","K6","#f1c40f");
    set_font_color($spreadsheet,$operateur,"D6","K6");
    set_font_weight($spreadsheet,$operateur,"D6","K6","#f1c40f");

    // Formatage des en-tetes
    set_cell_color($spreadsheet,$operateur,"D6","K6","#f1c40f");
    set_font_color_range($spreadsheet,$operateur,"D6","K6","#ffffff");
    set_font_style_italic($spreadsheet,$operateur,"D6","K6","#ffffff");

    set_column_width($spreadsheet,$operateur,"D",120);
    set_column_width($spreadsheet,$operateur,"E",120);
    set_column_width($spreadsheet,$operateur,"F",120);
    set_column_width($spreadsheet,$operateur,"G",120);
    set_column_width($spreadsheet,$operateur,"H",120);
    set_column_width($spreadsheet,$operateur,"I",120);
    set_column_width($spreadsheet,$operateur,"J",120);
    set_column_width($spreadsheet,$operateur,"K",120);

    set_row_height($spreadsheet,$operateur,6,35);

    set_cell_value($spreadsheet,$operateur,"D6","Client");
    set_cell_value($spreadsheet,$operateur,"E6","Date_Transaction");
    set_cell_value($spreadsheet,$operateur,"F6","Service/TID");
    set_cell_value($spreadsheet,$operateur,"G6","Montant");
    set_cell_value($spreadsheet,$operateur,"H6","Moyen de collecte");
    set_cell_value($spreadsheet,$operateur,"I6","Taux de commission");
    set_cell_value($spreadsheet,$operateur,"J6","Montant Commission");
    set_cell_value($spreadsheet,$operateur,"K6","Montant à reverser");
}

function add_calculated_com($row_set)
{
    // var_dump((array) $row_set[0]);
    // exit();

    $list = [];



    for ($index=0; $index < count($row_set); $index++) { 
        
        $current = $row_set[$index];

        if ($current->tauxbranch == NULL) {
            $current->tauxbranch = 0;
        }

        $list['montant_com'] = (float) $current->transaction_amount * (float) $current->tauxbranch;

        // $row_set->montant_a_reverser = $current->transaction_amount - $montant_com;

        $list['montant_a_reverser'] = $current->transaction_amount - $list['montant_com'];
    }


}

/**
 * Ecrire une fonction qui permet de creer un classeur excel
 *
 * @return Spreadsheet
 * ok
 */
function creer_classeur()
{
    /** Create a new Spreadsheet Object **/
    $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
    
    return $spreadsheet;
}

/**
 * Ecrire une fonction qui permet de creer une feuille dans un classeur excel
 *
 * @param string $nom_feuille
 * @param Spreadsheet $spreadsheet
 * @param int $index [default = 0]
 * 
 * @return $myWorkSheet
 * ok
 */
function creer_feuille_classeur($nom_feuille, $spreadsheet, $index=0)
{
    // Create a new worksheet called "My Data"
    $myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, $nom_feuille);

    // Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object
    $spreadsheet->addSheet($myWorkSheet, $index);

    return $myWorkSheet;
}


/**
 * Ecrire une fonction qui ecrit les donnees dans un format de tableau
 * dans une feuille excel
 *
 * @param Spreadsheet $spreadsheet
 * @param string $WorkSheetName
 * @param array $donnees
 * 
 * @return void
 * ok
 */

function generation_tableau($spreadsheet,$WorkSheetName, array $donnees)
{
    // creer les en-tetes a la premiere ligne

    // Set cell A1 with a string value
    $worksheet = $spreadsheet->getSheetByName($WorkSheetName);

    // ecrire le reste des donnees
    // $spreadsheet->getSheetByName($WorkSheetName);

    foreach ($donnees as $key => $value) {

        foreach ($value as $clef => $valeur) {

            foreach ($worksheet->getRowIterator() as $row) {
                
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE); 
                
                // This loops through all cells,
                //    even if a cell value is not set.
                // For 'TRUE', we loop through cells
                //    only when their value is set.
                // If this method is not called,
                //    the default value is 'false'.
            
                foreach ($cellIterator as $cell) {
                    // var_dump($cell);
                    $cell->setValue($valeur);
                }
                
                // var_dump($valeur);
            
            }
        }
    }
}

function generation_table($spreadsheet,$WorkSheetName, array $donnees, $cell_depart)
{   
    // Set cell A1 with a string value
    $worksheet = $spreadsheet->getSheetByName($WorkSheetName);

    $list = [];

    // var_dump($worksheet);
    // exit();
    $somme_1 = $somme_2 = $somme_3 = 0;

    foreach ($donnees as $key => $value) {
        
        // pour chaque ligne separer les cle-valeur
        $row = array_values((array) $value);
        $list[] = $row;

        $somme_1 += (int) $row[3];
        $somme_2 += (int) $row[6];
        $somme_3 += (int) $row[7];

    }

    // constituer la derniere la ligne du tableau
    // et l'ajouter a la variable list
    $last_row = ['Total',NULL,NULL,$somme_1,NULL,NULL,$somme_2,$somme_3];

    array_push($list,$last_row);
    // var_dump($list);
    // exit();

    $worksheet->fromArray(
        $list,  // The data to set
        NULL,   // Array values with this value will not be set
        $cell_depart    // Top left coordinate of the worksheet range where
                //    we want to set these values (default is A1)
    );
}



/**
 * Ecrire une fonction qui permet de sauvegarder un classeur excel
 *
 * @param Spreadsheet $spreadsheet
 * @param string $nom_classeur
 * @param string $chemin
 * 
 * @return void
 * ok
 */
function save_excel($spreadsheet, $nom_classeur, $chemin)
{
    $path = $chemin.$nom_classeur;

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save($path.".xlsx");

    return $path;
}

/**
 * Retrouver la piece jointe
 *
 * @param resource $nom_piece_jointe
 * 
 * @return [type]
 * 
 */
function get_piece_jointe($chemin_piece_jointe,$nom)
{
    $piece_jointe = file_get_contents($chemin_piece_jointe);

    return [
        'nom'=>$nom,
        'contenu' => base64_encode($piece_jointe)
    ];
    // 'contenu' => $piece_jointe
}

/**
 * Ajouter la piece jointe a une liste
 *
 * @param array $liste_piece_jointe
 * @param array $piece_jointe
 * 
 * @return 
 * ok
 */
function add_piece_jointe(array &$liste_piece_jointe, array $piece_jointe)
{
    // Attachment
    // "ContentType"=> "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
    $fichier = (object) [
        "ContentType"=> "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "Filename"=> $piece_jointe['nom'],
        "Base64Content"=> $piece_jointe['contenu']
    ];

    array_push($liste_piece_jointe,$fichier);

    return $piece_jointe;
}

/**
 * Constituer l'objet de mail
 *
 * @param mixed $sujet
 * @param mixed $message
 * @param mixed $adresse_mail
 * @param mixed $piece_jointe
 * 
 * @return array
 * ok
 */
function make_mail($sujet,$message,$destinataire, $liste_piece_jointe)
{
    $array = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "developer@sycapay.com",
                    'Name' => "Etats transactions"
                ],
                'To' => [
                    [
                        'Email' => $destinataire,
                    ]
                ],
                "Attachments"=> 
                    $liste_piece_jointe 
                ,
                'Subject' => $sujet,
                'TextPart' => $message,
                'HTMLPart' => $message,
            ]
        ]
    ];

    return $array;
}


/**
 * Envoyer le mail
 *
 * @param array $mail
 * 
 * @return array
 * 
 */
function send_mail(array $mail)
{
    $messageid = FALSE;
    $headers = array ('Content-Type: application/json');

    $url = "https://api.mailjet.com/v3.1/send";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_USERPWD, "a6be9ae172aebc0bcea021cf75d5a9cf:4f8d8ed39af0aa99ac63fa5a52e8f0bc");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($mail));
    $response = json_decode(curl_exec($ch));
    $err = curl_error($ch);
    curl_close ($ch);

    return $response;
}