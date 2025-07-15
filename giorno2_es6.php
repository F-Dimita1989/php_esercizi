<?php
$linguaggi = 'html,css,php,js';
$cont_linguaggi = explode(',', $linguaggi);
$cont_linguaggi[] = 'sql';
$linguaggi_mod = implode(',', $cont_linguaggi);
echo $linguaggi_mod;
?>