<?php
$avtosalone = array(
//BMW
	array('brand' => 'BMW', 'model' => array(
			array('X1', 'Age' => array (1998, 2001, 2005)),
			array('X2', 'Age' => array (2000, 2003, 2007)),
			array('X3', 'Age' => array (2005, 2006, 2010)),
		)
	),
//Honda
	array('brand' => 'Honda', 'model' => array(
			array('Civic', 'Age' => array (1998, 2007, 2013)),
			array('Accord', 'Age' => array (1998, 2001, 2005)),
			array('CRV', 'Age' => array (1998, 2001, 2005)),
		)
	)
);
echo "В нашем автосалоне Вы сможете приобрести автомобили следеующих мировых брендов:";
//BMB
//X1
echo "\n";
echo $avtosalone[0]['brand'];
echo " ".$avtosalone[0]['model'][0][0];
echo " ".$avtosalone[0]['model'][0]['Age'][0].",";
echo " ".$avtosalone[0]['model'][0]['Age'][1].",";
echo " ".$avtosalone[0]['model'][0]['Age'][2]." годов выпуска;";
//X2
echo "\n";
echo $avtosalone[0]['brand'];
echo " ".$avtosalone[0]['model'][1][0];
echo " ".$avtosalone[0]['model'][1]['Age'][0].",";
echo " ".$avtosalone[0]['model'][1]['Age'][1].",";
echo " ".$avtosalone[0]['model'][1]['Age'][2]." годов выпуска;";
//X3
echo "\n";
echo $avtosalone[0]['brand'];
echo " ".$avtosalone[0]['model'][2][0];
echo " ".$avtosalone[0]['model'][2]['Age'][0].",";
echo " ".$avtosalone[0]['model'][2]['Age'][1].",";
echo " ".$avtosalone[0]['model'][2]['Age'][2]." годов выпуска;";
//Honda
//Civic
echo "\n";
echo $avtosalone[1]['brand'];
echo " ".$avtosalone[1]['model'][0][0];
echo " ".$avtosalone[1]['model'][0]['Age'][0].",";
echo " ".$avtosalone[1]['model'][0]['Age'][1].",";
echo " ".$avtosalone[1]['model'][0]['Age'][2]." годов выпуска;";
//Accord
echo "\n";
echo $avtosalone[1]['brand'];
echo " ".$avtosalone[1]['model'][1][0];
echo " ".$avtosalone[1]['model'][1]['Age'][0].",";
echo " ".$avtosalone[1]['model'][1]['Age'][1].",";
echo " ".$avtosalone[1]['model'][1]['Age'][2]." годов выпуска;";
//BMW
echo "\n";
echo $avtosalone[1]['brand'];
echo " ".$avtosalone[1]['model'][2][0];
echo " ".$avtosalone[1]['model'][2]['Age'][0].",";
echo " ".$avtosalone[1]['model'][2]['Age'][1].",";
echo " ".$avtosalone[1]['model'][2]['Age'][2]." годов выпуска.";