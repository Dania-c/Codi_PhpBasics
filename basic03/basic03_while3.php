<?php
function word_count($text,$word) {
    $arr = explode(' ',$word);
    $n = 0;
    foreach($arr as $value){
        if ($value == $text)
        $n = $n +1;
    }
    return $n;
}

function wc($word, $text){
    return count(explode($word,$text))-1;
}

echo "nuumb  of occ of dad is : ",word_count("dad","sdgah aj dad dfgs dad");
echo "<br>";
echo "nuumb  of occ of dad is : ",wc("dad","sdgah aj dad dfgs dad");
?>
