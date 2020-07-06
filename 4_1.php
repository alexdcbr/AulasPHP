<?PHP
$data = "1970-03-28";
$diaSemana = date("w", strtotime(date($data)));

$semana = array(
    0 => 'Domingo',
    1 => 'Segunda-Feira',
    2 => 'Terca-Feira',
    3 => 'Quarta-Feira',
    4 => 'Quinta-Feira',
    5 => 'Sexta-Feira',
    6 => 'Sábado'
);

$time = strtotime($data);

echo date('d.m.Y', $time)." - ".$semana["$diaSemana"];



?>