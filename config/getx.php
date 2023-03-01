<?php
// WEB Settings //
$qstg = "SELECT * FROM tb_stg where status = '1'  limit 1" or die('Cannot Get Web Settings!' . pg_last_error());
$resstg = pg_query($konek2, $qstg);
$arrset = pg_fetch_assoc($resstg);

if (!empty($resstg)) {
    $rwstg['webname'] = $arrset['webname'];
    $rwstg['slogan'] = $arrset['slogan'];
    $rwstg['weburl'] = $arrset['weburl'];
    $rwstg['kota'] = $arrset['kota'];
    $rwstg['street'] = $arrset['street'];
    $rwstg['provinsi'] = $arrset['provinsi'];
    $rwstg['kodepos'] = $arrset['kodepos'];
    $rwstg['webfooter'] = $arrset['webfooter'];
    $rwstg['email'] = $arrset['email'];
    return $arrset;

}else {
    die('Failed!, Check Your Database Setting');
}
// 

?>