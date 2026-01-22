<?php
function howdy($lang) {
    if ( $lang == 'es' ) return "sursdey";
    if ( $lang == 'fr' ) return "Bonjour";
    return "Hello";
}

print howdy('es') . " Kon kla\n";
print howdy('fr') . " Sally\n";
function double($alias) {
    $alias = $alias * 2;
    return $alias;
}
$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";
?>