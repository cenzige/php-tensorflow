--TEST--
TensorFlow\Tensor::getDtype method
--FILE--
<?php
for ($i = 1; $i < 21; $i++) {
    $tensor = new TensorFlow\Tensor($i, []);
    echo $tensor->getDtype(), "\n";
}

?>
--EXPECT--
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
