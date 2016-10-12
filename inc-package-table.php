<?php

include("inc-package-db.php");
$name = $attrs['name'];
switch($attrs['where']) {
case 'melpa':
$repos_link = '(in <a href="http://melpa.org/">MELPA</a>)';
break;
case 'elpa':
$repos_link = '(in <a href="https://elpa.gnu.org/">ELPA(公式リポジトリ)</a>)';
break;
case 'org':
$repos_link = '(in <a href="http://orgmode.org/">org</a>)';
break;
default:
$repos_link = '';
}

?>
<dl>
    <dt><?=$name ?>　<?=$pdb["$name.version"] ?><?=$repos_link ?></dt>
    <dd><?=$pdb["$name.desc"] ?></dd>
</dl>
