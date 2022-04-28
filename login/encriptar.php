<?php
function encriptar($password)
{
    $txtEncriptado= "";
    $Array = str_split($password,1);
    $longitud = count($Array);

    for($i=0; $i<$longitud; $i++)
    {
        $temp[$i] = ord($Array[$i]);
        $temp[$i] += 20;

        if($temp[$i] < 100)
        {
            $temp[$i]= '0' . $temp[$i];
        }
        $txtEncriptado .= $temp[$i]; 
    }

}
?>
<?php
 $temp;
?>