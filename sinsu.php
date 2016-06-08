<?php
	echo PHP_EOL."2 Binary number==>";
    $sin2  = trim(fgets(STDIN));
    $sin10 = bindec($sin2);
    $sin8  = decoct($sin10);
    $sin16 = dechex($sin10);
    echo PHP_EOL;
    echo "2  Binary number==>".$sin2.PHP_EOL;
    echo "10 Binary number==>".$sin10.PHP_EOL;
    echo "8  Binary number==>".$sin8.PHP_EOL;
    echo "16 Binary number==>".$sin16.PHP_EOL;



/*
bindec()  ２進数を１０進数に変換する
decoct()  10進数を8進数に変換する
dechex()  10進数を16進数に変換する
*/