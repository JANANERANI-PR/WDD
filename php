QUESTION 1
<?php
$capital = 67;
print("Variable capital is $capital");
print("Variable CaPiTaL is $CaPiTaL");
?>

Output:
Variable capital is 67Variable CaPiTaL is

QUESTION 2
<?php
$size = 3;

echo "\t";
for ($i = 1; $i <= $size; $i++) {
    echo "$i\t";
}
echo "\n";

for ($i = 1; $i <= $size; $i++) {
    echo "$i\t";
    for ($j = 1; $j <= $size; $j++) {
        echo round($i / $j, 2) . "\t";
    }
    echo "\n";
}
?>

Output:

	1	2	3	
1	1	0.5	0.33	
2	2	1	0.67	
3	3	1.5	1	
