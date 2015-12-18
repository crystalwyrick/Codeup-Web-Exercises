<?php

require 'parks_login.php';
require 'db_connect.php';

$national_parks = [
   ['name' => 'Arches',   		'location' => 'Utah', 			  'date_established' => '1929-04-12', 	'area_in_acres' => 76518.98,  'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Badlands',   	'location' => 'South Dakota', 'date_established' => '1978-11-10', 	'area_in_acres' => 242755.94, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Big Bend',   	'location' => 'Texas', 			  'date_established' => '1944-06-12', 	'area_in_acres' => 801163.21, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Bryce Canyon', 'location' => 'Utah', 			  'date_established' => '1929-04-12', 	'area_in_acres' => 76518.98,  'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Carlsbad',   	'location' => 'South Dakota', 'date_established' => '1978-11-10', 	'area_in_acres' => 242755.94, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Crater lake',  'location' => 'Texas', 			  'date_established' => '1944-06-12', 	'area_in_acres' => 801163.21, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Death Valley', 'location' => 'Utah', 			  'date_established' => '1929-04-12', 	'area_in_acres' => 76518.98,  'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Everglades',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 	'area_in_acres' => 242755.94, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
   ['name' => 'Glacier Bay',  'location' => 'Texas', 			  'date_established' => '1944-06-12', 	'area_in_acres' => 801163.21, 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ],
];


    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
    VALUES (:name, :location, :date_established, :area_in_acres, :description) ";

    $stmt = $dbc->prepare($query);

	foreach ($national_parks as $park) {

		  $stmt->bindValue(':name',             $park['name'],             PDO::PARAM_STR);
	    $stmt->bindValue(':location',         $park['location'],         PDO::PARAM_STR);
	    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	    $stmt->bindValue(':area_in_acres',    $park['area_in_acres'],    PDO::PARAM_INT);
	    $stmt->bindValue(':description',      $park['description'],      PDO::PARAM_STR);

	    $stmt->execute();

	}















