<!-- Partendo da questa stringa $string = "c,i,n,q,u,e"; 
trasforma la stringa in un array con un elemento per carattere,

	$array = ['c','i','n','q','u','e'];

infine crea un array associativo della forma:
	
	$result = [
		'c' => 'c',
		'i' => 'i',
		'n' => 'n',
		'q' => 'q',
		'u' => 'u',
		'e' => 'e'
	]; -->

<?php 
    $string = "c,i,n,q,u,e";
    $stringArray = explode(',', $string);
    var_dump($stringArray);
    $result = [];
	foreach ($stringArray as $item) {
		$result[$item] = $item;
	}
    var_dump($result);
?>