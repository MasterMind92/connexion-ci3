<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// require_once('PHPExcel.php');

// require 'vendor/autoload.php';

/** PHPSpreadSheet root directory */
if (!defined('SPREADSHEET_ROOT')) {
    define('SPREADSHEET_ROOT', dirname(__FILE__) . '/spreadsheet/');
    require(SPREADSHEET_ROOT . 'vendor/autoload.php');
}

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel 
{
	 
	public function read($path)
	{
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$reader->setReadDataOnly(true);
		$spreadsheet = $reader->load($path);


		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$rows = $worksheet->toArray();
		// supprimer les entetes
		array_shift($rows);

		// echo json_encode($rows);

		return $rows;
	
	}
	

	public function load($path){

		$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
		$spreadsheet = $reader->load($path);

		return $spreadsheet;
	}

	/**
	* Ecrire une fonction qui permet de creer un classeur excel
	*
	* @return Spreadsheet
	* ok
	*/
	public function creer_classeur()
	{
		/** Create a new Spreadsheet Object **/
		$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

		$spreadsheet->getActiveSheet();

		return $spreadsheet;
	}

	/**
	 * positionner le curseur sur 
	 * la feuille de classeur active
	 *
	 * @param Spreadsheet $spreadsheet
	 * 
	 * @return  $spreadsheet
	 * 
	 */
	public function get_active_sheet($spreadsheet){

		$spreadsheet->getActiveSheet();

		return $spreadsheet;
	}

	public function set_active_sheet_by_name($spreadsheet, $WorkSheetName){
		
		$spreadsheet->setActiveSheetIndexByName($WorkSheetName);


	}

	public function set_active_sheet_by_index($spreadsheet, $index){

		$spreadsheet->setActiveSheetIndex($index);
	
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
	public function creer_feuille_classeur($nom_feuille, $spreadsheet, $index=0)
	{
		// Create a new worksheet called "My Data"
		$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, $nom_feuille);

		// Attach the "My Data" worksheet as the first worksheet in the Spreadsheet object
		$spreadsheet->addSheet($myWorkSheet, $index);

		return $myWorkSheet;
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
	public function set_cell_color($spreadsheet,$WorkSheetName,$cell1,$cell2,$color)
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
	public function set_cell_value($spreadsheet,$WorkSheetName,$cell,$value)
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
	public function merge_cells($spreadsheet,$WorkSheetName,$cell1,$cell2)
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
	public function unmerge_cells($spreadsheet,$WorkSheetName,$cell1,$cell2)
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
	public function set_font_color($spreadsheet,$WorkSheetName,$cell1)
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
	public function set_font_color_range($spreadsheet,$WorkSheetName,$cell1,$cell2,$color)
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
	public function set_font_weight($spreadsheet,$WorkSheetName,$cell1,$cell2)
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
	public function set_font_style_italic($spreadsheet,$WorkSheetName,$cell1,$cell2)
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
	public function set_column_width($spreadsheet,$WorkSheetName,$column,$dimension)
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
	public function set_row_height($spreadsheet,$WorkSheetName,$row,$dimension)
	{
		$spreadsheet->getSheetByName($WorkSheetName)->getRowDimension($row)->setRowHeight($dimension, 'pt');
	}

	public function set_table_header($spreadsheet, $operateur)
	{
		// presets de la fiche excel
		merge_cells($spreadsheet,$WorkSheetName,"A1","M1");
		set_cell_value($spreadsheet,$WorkSheetName,"A1",$description);


		set_cell_value($spreadsheet,$WorkSheetName,"A2","ID_Transaction");
		set_cell_value($spreadsheet,$WorkSheetName,"B2","Marchand_ID");
		set_cell_value($spreadsheet,$WorkSheetName,"C2","Montant");
		set_cell_value($spreadsheet,$WorkSheetName,"D2","Currency");
		set_cell_value($spreadsheet,$WorkSheetName,"E2","Type");
		set_cell_value($spreadsheet,$WorkSheetName,"F2","Service");
		set_cell_value($spreadsheet,$WorkSheetName,"G2","Reference_ID");
		set_cell_value($spreadsheet,$WorkSheetName,"H2","Numcommande");
		set_cell_value($spreadsheet,$WorkSheetName,"I2","Date_Transaction");
		set_cell_value($spreadsheet,$WorkSheetName,"J2","Status_LibelleFR");
		set_cell_value($spreadsheet,$WorkSheetName,"K2","Contact");
		set_cell_value($spreadsheet,$WorkSheetName,"L2","Transaction_ID");
		set_cell_value($spreadsheet,$WorkSheetName,"M2","Customer_name");

		$rowCount = 3;
		foreach ($empInfo as $element) {

			set_cell_value($spreadsheet,$WorkSheetName,"A". $rowCount,$element['transaction_id']);
			set_cell_value($spreadsheet,$WorkSheetName,"B". $rowCount,$element['transaction_marchand_id']);

			$transaction_montant = number_format($element['transaction_amount'], 0, '.', ' ');
			set_cell_value($spreadsheet,$WorkSheetName,"C". $rowCount,$transaction_montant);

			set_cell_value($spreadsheet,$WorkSheetName,"D". $rowCount,$element['transaction_currency_code']);
			set_cell_value($spreadsheet,$WorkSheetName,"E". $rowCount,$element['transaction_type']);
			set_cell_value($spreadsheet,$WorkSheetName,"F". $rowCount,$element['transaction_method']);
			set_cell_value($spreadsheet,$WorkSheetName,"G". $rowCount,$element['transaction_reference']);
			set_cell_value($spreadsheet,$WorkSheetName,"H". $rowCount,$element['transaction_id_order']);

			$transaction_date = date("d/m/Y H:i:s", strtotime($element['transaction_date']));
			set_cell_value($spreadsheet,$WorkSheetName,"I". $rowCount,$transaction_date);

			if ($element['transaction_status'] == '2')
			{
				$trans_status =  "Succès";
			}
			elseif($element['transaction_status'] == '1')
			{ 
				$trans_status =  "En attente";
			}
			elseif($element['transaction_status'] == '3')
			{ 
				$trans_status =  "Echec";
			}
			else
			{
				$trans_status =  "Supprimé";
			}
			
			set_cell_value($spreadsheet,$WorkSheetName,"J". $rowCount,$trans_status);
			set_cell_value($spreadsheet,$WorkSheetName,"K". $rowCount,$element['transaction_Sender_Mobile']);
			set_cell_value($spreadsheet,$WorkSheetName,"L". $rowCount,$element['transaction_sendoperator']);
			set_cell_value($spreadsheet,$WorkSheetName,"M". $rowCount,$element['customer_name']);
		
			$rowCount++;
		}

		//header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="'. $fileName .'.xlsx"'); 
		//header('Cache-Control: max-age=0');
		

		save_excel($spreadsheet, $WorkSheetName, "");
		 
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
	public function save_excel($spreadsheet, $nom_classeur, $chemin)
	{
		$path = $chemin.$nom_classeur;
		
		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

		//$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

		//header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="'. $fileName .'.xlsx"'); 
		//header('Cache-Control: max-age=0');
		//$writer->save($path.".xlsx");
		$writer->save('php://output');

		//'php://output'

		return $path;
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
	public function save_csv($spreadsheet, $nom_classeur, $chemin)
	{
		$path = $chemin.$nom_classeur;
		
		//$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');

		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);

		//header('Content-Type: application/vnd.ms-excel');
		//header('Content-Disposition: attachment;filename="'. $fileName .'.xlsx"'); 
		//header('Cache-Control: max-age=0');
		//$writer->save($path.".xlsx");
		$writer->save('php://output');

		//'php://output'

		return $path;
	}


	public function generation_tableau($spreadsheet,$WorkSheetName, array $donnees)
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

	
}

?>