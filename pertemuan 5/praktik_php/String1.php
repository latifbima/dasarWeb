<?php

$loremipsum = "lorem ipsum dolor dolor sit amet consectur adisposicing elit
volupatem reprehent nobis veritastis commodi fugiat molestias
impedir unde ipsum";

echo"<p>{$loremipsum}</p>";
echo"Panjang karakter:".strlen($loremipsum)."<br>";
echo"Panjang kata:".str_word_count($loremipsum)."<br>";
echo"<p>".strtoupper($loremipsum)."</p>";
echo"<p>".strtolower($loremipsum)."</p>";

?>