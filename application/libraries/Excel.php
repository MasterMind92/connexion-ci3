<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// require_once('PHPExcel.php');

require 'vendor/autoload.php';

/** PHPSpreadSheet root directory */
// if (!defined('SPREADSHEET_ROOT')) {
//     define('SPREADSHEET_ROOT', dirname(__FILE__) . '/');
//     require(SPREADSHEET_ROOT . 'vendor/autoload.php');
// }

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

		echo json_encode($rows);

		return $rows;
		// utiliser array_combine pour fusionner obtenir une tableau cles->valeur
		// utiliser array_walk pour parcourir le tableau et y appliquer une fonction 


		// echo '<table>' . PHP_EOL;
		// foreach ($worksheet->getRowIterator() as $row) {
		// 	echo '<tr>' . PHP_EOL;
		// 	$cellIterator = $row->getCellIterator();
		// 	$cellIterator->setIterateOnlyExistingCells(FALSE); 
		// 	// This loops through all cells,
		// 	//    even if a cell value is not set.
		// 	// For 'TRUE', we loop through cells
		// 	//    only when their value is set.
		// 	// If this method is not called,
		// 	//    the default value is 'false'.
		// 	foreach ($cellIterator as $cell) {
		// 		echo '<td>' .
		// 			$cell->getValue() .
		// 			'</td>' . PHP_EOL;
		// 	}
		// 	echo '</tr>' . PHP_EOL;
		// }
		// echo '</table>' . PHP_EOL;
	}

	public function read_to_register($path)
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

	public function write()
	{
		# code...
	}
}

?>