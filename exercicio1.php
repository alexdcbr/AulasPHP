<?PHP

Function Soma( $n1,  $n2){
    $resultado = $n1 + $n2;
    return $resultado;
}

$resultado = Soma(1,10);

if ($resultado > 20) {
    $result1 = $resultado + 8;
    echo "O resultado é: ".$result1;
  } elseif ($resultado <= 20 ) {
    $result2 = $resultado - 5;
    echo "O resultado é: ".$result2;
  }









?>

