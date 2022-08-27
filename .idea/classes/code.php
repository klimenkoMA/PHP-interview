<?php


echo "Hello world!"; // комментарий
echo '<br>' . "123" . '</br>';
var_dump('12345');
echo "\r\n";
echo "***\r\n";
/*
 * многострочный комментарий
 */
$a = 3;

echo $a;
echo " *** \r\n";
$num = 123;
echo $num;


/*
 * Возведите число 2 в 10-ю степень. Выведите результат на экран.
 */
echo " *** \r\n";
$exponent = 2 ** 10;
echo '<br>' . $exponent . '</br>';

echo " *** \r\n";

/*
 * Создайте переменную с текстом 'abc' и переменную с текстом 'def'.
 * С помощью этих переменных и операции сложения строк выведите на экран строку 'abcdef'.
 */
echo " *** \r\n";
$str = 'abc';
$str2 = "def";

echo '<br>' . $str . $str2 . '</br>';
echo " *** \r\n";

/*
 * Запишите в переменную какую-нибудь кириллическую строку.
 *  Выведите на экран длину вашей строки.
 */

echo " *** \r\n";
$str = "Там где не там будет как там, как там где нигде, где нигде вообще?";

echo mb_strlen($str);
echo " *** \r\n";

/*
 * С помощью тега <i> выведите на экран курсивный текст.
 */
$text = "Что то на программистском";

echo "<i>" . $text . "<i/>";
echo " *** \r\n";

/*
 * С помощью тега <br> выведите на экран столбец чисел от 1 до 9.
 */

for ($i = 1; $i < 10; $i++) {
    echo "<br>" . $i . "<br/>";
}
echo " *** \r\n";

$href = 'FirstPartLearning.php';
$text = 'ссылка';

echo '<br>' . '<a href="' . $href . '">' . $text . '</a>' . '</br>';

/*
 * С помощью тега <img> выведите на экран какую-нибудь картинку.
 */

$img = "C:\Users\Public\Pictures\Sample Pictures\Pingvins.jpg";

echo '<br>' . '<img src=$img alt="Pingvins" width="100"
 height="100" align="left"' . '</br>';

/*
 * С помощью тега <input> выведите на экран инпут с каким-нибудь текстом.
 */
echo '<br>' . '<input type="text" value="Какой-нибудь текст">' . '</br>';

/*
 * С помощью тега <textarea> выведите на экран многострочное
 * поле ввода с каким-нибудь текстом.
 */
echo '<br>' . '<textarea name="sometext">Comon everybody!</textarea>' . '</br>';

/*
 * Присвойте переменной значение true. Выведите эту переменную на экран.
 */
$bool = true;
var_dump($bool);
echo '<br>' . '</br>';


/*
 * Присвойте переменной значение null. Выведите эту переменную на экран.
 */
$nal = null;
var_dump($nal);
echo '<br>' . '</br>';

/*
 * Преобразуйте следующую строку в число:
 * <?php
 * 	$test = '12345';
 * ?>
 */
$test = '12345';
var_dump((int)$test);
echo '<br>' . '</br>';

/*
 * Дана строка 'abcde'.
 * Обращаясь к отдельным символам этой строки выведите на экран символ
 * 'a', символ 'c', символ 'e'.
 */
$str = 'abcde';
echo $str[0] . " ";
echo $str[2] . " ";
echo $str[4] . " ";
echo '<br>' . '</br>';

/*
 * Дана переменная со строкой 'abcde'. Обращаясь к отдельным символам
 * этой строки запишите в новую переменную символы этой строки в обратном
 *  порядке, то есть 'edcba'.
 */
$str = 'abcde';
$rts = '';
$count = 0;
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rts[$count] = $str[$i];
    $count++;
}
echo $rts;
echo '<br>' . '</br>';

/*
 * Создайте массив с ключами
 * 1, 2 и 3 и значениями 'a', 'b' и 'c'. Выведите на экран все его элементы.
 */
$arr = array(1 => 'a', 2 => 'b', 3 => 'c');
foreach ($arr as $a) {
    echo '<br>' . $a . '</br>';
}
echo '<br>' . "***" . '</br>';


/*
 * Выведите на экран количество элементов в этом массиве.
 */

$arr = array('a', 'b', 'c', 'd', 'e');
echo count($arr);
echo '<br>' . "***" . '</br>';


$test = "";

if (isset($test)) {
    echo "+";
} else {
    echo "-";
}
echo '<br>' . "***" . '</br>';


/*
 * Дано число. Проверьте, что оно делится на 3.
 */

$a = 157962;

if ($a % 3 === 0) {
    echo $a . " divided by 3!";
} else {
    echo $a . " NOT divided by 3!";
}

echo '<br>' . "***" . '</br>';


/*
 * В переменной $month лежит какое-то число из интервала от 1 до 12.
 * Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
 */

$month = random_int(1, 12);

if ($month <= 2 || $month === 12) {
    echo "Winter";
} elseif ($month > 2 && $month <= 5) {
    echo "Spring";
} elseif ($month > 5 && $month <= 8) {
    echo "Summer";
} else {
    echo "Autumn";
}
echo '<br>' . "***" . '</br>';

/*
 * Переменная $num может принимать значения 1, 2, 3 или 4. Определите,
 *  в какую пору года попадает значение этой переменной.
 */

$num = random_int(1, 4);

switch ($num) {
    case 1:
        echo "Winter";
        break;
    case 2:
        echo "Spring";
        break;
    case 3:
        echo "Summer";
        break;
    default:
        echo "Autumn";
        break;
}
echo '<br>' . "***" . '</br>';

/*
 * Пусть дана переменная $num, которая может быть либо отрицательной, либо положительной.
 * Запишите в переменную $result число 1, если переменная $num больше или равна нулю,
 * и число -1, если переменная $num меньше нуля.
 */

$num = random_int(-1, 0);

$result = $num < 0 ? 1 : 0;
echo $result;
echo '<br>' . "***" . '</br>';


/*
 * Перепишите следующий код через изученный оператор:
 * <?php
 * 	$user = ['name' => 'john', 'age' => 30];
 *	if (isset($user['name'])) {
 * 		$name = $user['name'];
 * 	} else {
 * 		$name = 'unknown';
 * 	}?>
 */

$user = ['name' => 'john', 'age' => 30];
$name = $user['name'] ?? 'empty';

echo $name;
echo '<br>' . "***" . '</br>';

/*
 * Перепишите следующий код через изученный оператор:

<?php
	if (isset($user['name'])) {
		$result = $user['name'];
	} elseif (isset($user['surname'])) {
		$result = $user['surname'];
	} else {
		$result = '';
	}
?>
 */

$name = $user['name'] ?? $user['surname'] ?? '';
echo $name;
echo '<br>' . "***" . '</br>';


/*
 * Дан массив:

<?php
	$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
?>
С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый
 */


$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
foreach ($arr as $ar => $elem) {
    echo $ar . " - " . $elem . ", ";
}
echo '<br>' . "***" . '</br>';


/*
 * <?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
?>
Проверьте, что в этом массиве есть элемент 'c'. Если есть - выведите 'да',
 а если нет - выведите 'нет'.
 */

$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;

foreach ($arr as $item) {
    if ($item === 'c') {
        $flag = true;
    }
}

if ($flag) {
    echo "YES";
} else {
    echo "NO";
}
echo '<br>' . "***" . '</br>';

/*
 * Фибоначи мне запили!
 */
$hlp = 0;
$one = 1;
for ($i = 1; $i < 10; $i++) {
    $res = $hlp + $one;
    $hlp = $one;
    $one = $res;
    echo $res . " ";
}
echo '<br>' . "***" . '</br>';

/*
 * Выведите на экран следующую пирамидку:

1
333
55555
7777777
999999999
 */

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 !== 0) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
        echo '</br>';
    }
}
echo "***" . '</br>';

/*
 *Дан следующий массив:

<?php
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
?>
С помощью трех вложенных циклов найдите сумму элементов этого массива.
 */
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];
$res = 0;
foreach ($arr as $item) {
    foreach ($item as $ite) {
        foreach ($ite as $it) {
            $res += $it;
        }
    }
}
echo $res;
echo '<br>' . "***" . '</br>';


/*
 * Сформируйте с помощью двух вложенных циклов следующий массив:

[[1, 2, 3, 4, 5], [1, 2, 3, 4, 5], [1, 2, 3, 4, 5]]
 */
$arr = array(array());
for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        $arr[$i][$j] = $j;
    }
}

foreach ($arr as $item) {
    foreach ($item as $ite) {
        echo $ite . " ";
    }
    echo "</br>";
}
echo '<br>' . "***" . '</br>';


/*
 * Дан список городов и их стран, хранящийся в следующей структуре:

[
	[
		'country' => 'Россия',
		'city' =>    'Москва',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Минск',
	],
	[
		'country' => 'Россия',
		'city' =>    'Питер',
	],
	[
		'country' => 'Россия',
		'city' =>    'Владивосток',
	],
	[
		'country' => 'Украина',
		'city' =>    'Львов',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Могилев',
	],
	[
		'country' => 'Украина',
		'city' =>    'Киев',
	],
]
Напишите код, которой переделает структуру данных вот в такую:

[
	'Россия'=> [
		'Москва', 'Питер', 'Владивосток',
	],
	'Беларусь'=> [
		'Минск', 'Могилев'
	],
	'Украина'=> [
		'Киев', 'Львов'
	],
]
 */
$countries = [
    [
        'country' => 'Россия',
        'city' => 'Москва',
    ],
    [
        'country' => 'Беларусь',
        'city' => 'Минск',
    ],
    [
        'country' => 'Россия',
        'city' => 'Питер',
    ],
    [
        'country' => 'Россия',
        'city' => 'Владивосток',
    ],
    [
        'country' => 'Украина',
        'city' => 'Львов',
    ],
    [
        'country' => 'Беларусь',
        'city' => 'Могилев',
    ],
    [
        'country' => 'Украина',
        'city' => 'Киев',
    ],
];
$result = [];
$rus = [];
$ukr = [];
$bel = [];
foreach ($countries as $coun) {

    switch ($coun['country']) {
        case 'Россия':
            $c2 = $coun['city'];
            $rus[] = $c2;
            break;
        case 'Беларусь':
            $c2 = $coun['city'];
            $bel[] = $c2;
            break;
        default:
            $c2 = $coun['city'];
            $ukr[] = $c2;
            break;
    }
}
$result[] = ['Россия' => $rus, 'Беларусь' => $bel, 'Украина' => $ukr];
var_dump($result);
echo '<br>' . "***" . '</br>';

/*
 * Возведите 2 в 10 степень.
 */

echo pow(2, 10);
echo '<br>' . "***" . '</br>';


/*
 * Найдите квадратный корень из 245.
 */
echo sqrt(245);
echo '<br>' . "***" . '</br>';


/*
 * <?php
	$arr = [4, -2, 5, 19, -130, 0, 10];
?>
Найдите минимальное и максимальное число.
 */

$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr) . " " . max($arr);
echo '<br>' . "***" . '</br>';

/*
 * Дана строка 'php'. Сделайте из нее строку 'PHP'.
 */

echo strtoupper("php");
echo '<br>' . "***" . '</br>';

/*
 * Дан массив с элементами 'html', 'css', 'php'.
 *  С помощью implode создайте строку из этих элементов, разделенных запятыми.
 */

$arr = ['html', 'css', 'php'];

echo implode(',', $arr);
echo '<br>' . "***" . '</br>';

/*
 * Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
 */

$str = '1234567890';

$arr = str_split($str, 2);
var_dump($arr);
echo '<br>' . "***" . '</br>';
echo implode(', ', $arr);
echo '<br>' . "***" . '</br>';

/*
 * Дана строка '12345'. Сделайте из нее строку '54321'.
 */

$str = '12345';
echo strrev($str);
echo '<br>' . "***" . '</br>';

/*
 * Дана строка. Перемешайте символы этой строки в случайном порядке.
 */

$str = 'some letters in this string';

echo str_shuffle($str);
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = [1, 2, 3, 4, 5];
?>
Проверьте, что в нем есть элемент со значением 3.
 */
$arr = [1, 2, 3, 4, 5];
$res = in_array(3, $arr);
echo $res . '</br>';
var_dump($res);
echo '<br>' . "***" . '</br>';


/*
 * Создайте массив, заполненный буквами от 'a' до 'z'.
 */

$arr = range('a', 'z');
foreach ($arr as $item) {
    echo $item . " ";
}
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = [1, 2, 3, 4, 5];
?>
С помощью функции array_slice сделайте из него следующий массив:

<?php
	[2, 3, 4]
?>
 */

$arr = [1, 2, 3, 4, 5];
$res = array_slice($arr, 1, 3);
foreach ($res as $re) {
    echo $re . ", ";
}
echo '<br>' . "***" . '</br>';

/*
 * <?php
	$arr = [1, 2, 3, 4, 5];
?>
С помощью функции array_splice сделайте из него следующий массив:

<?php
	[1, 4, 5]
?>
 */

$res = array_splice($arr, 1, 2);
foreach ($arr as $re) {
    echo $re . ", ";
}
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
Запишите в массив $keys ключи из этого массива, а в $values – значения.
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);

foreach ($keys as $key) {
    echo $key . ", ";
}
echo 'KEYS.';
echo '<br>' . '</br>';
foreach ($values as $value) {
    echo $value . ', ';
}
echo 'VALUES.';
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = ['a', 'b', 'c', 'b', 'a'];
?>
Удалите из этого массива повторяющиеся элементы.
 */
$arr = ['a', 'b', 'c', 'b', 'a'];


var_dump(array_unique($arr));

echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = ['a', 'b', 'c'];
?>
Сделайте из него следующий массив:

<?php
	['a', 'b', 'c', '-', '-', '-']
 */
$arr = ['a', 'b', 'c'];
var_dump(array_pad($arr, 6, '-'));
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = [1, 2, 3, 4, 5];
?>
Создайте новый массив, в котором будут лежать квадратные корни данных элементов.
 */
$arr = [1, 2, 3, 4, 5];
var_dump(array_map('sqrt', $arr));

echo '<br>' . "***" . '</br>';

/*
 * Выведите текущее время в формате timestamp.
 */

echo time();
echo '<br>' . "***" . '</br>';

/*
 * Выведите 31 декабря текущего года в формате timestamp.
 * Скрипт должен работать независимо от года, в котором он запущен
 */

echo mktime(0, 0, 0, 12, 31, 2023);
echo '<br>' . "***" . '</br>';

/*
 * Выведите на экран текущий год, месяц, день, час, минуту, секунду.
 */

echo date('Y-m-d H:i:s');
echo '<br>' . "***" . '</br>';

/*
 * Дана дата в формате 2025-12-31. С помощью функции strtotime и
 *  функции date преобразуйте ее в формат 31-12-2025.
 */

echo strtotime('2555-10-27');
echo '<br>' . "***" . '</br>';

/*
 * Дан массив с числами. Найдите среднее арифметическое его элементов.
 */
$arr = [1, 2, 3, 4, 5];
echo(array_sum($arr) / count($arr));
echo '<br>' . "***" . '</br>';

/*
 *Дана строка '1234567890'. Найдите сумму цифр из этой строки.
 */

$string = '1234567890';
echo array_sum(str_split($string));
echo '<br>' . "***" . '</br>';

/*
 * Сделайте функцию, выводящую на экран ваше имя.
 */

function name()
{
    echo 'Mikl';
}

name();
echo '<br>' . "***" . '</br>';

/*
 * Сделайте функцию, которая параметром принимает число и выводит на экран куб этого числа.
 */

function square($num)
{

    echo $num * $num * $num;
}

square(78);
echo '<br>' . "***" . '</br>';


/*
 * Сделайте функцию, которая параметром принимает число, а возвращает куб этого числа.
 * С помощью этой функции найдите куб числа 3 и запишите его в переменную $result.
 */

function cubing($num)
{
    return $num * $num * $num;
}

$result = cubing(3);
echo $result;
echo '<br>' . "***" . '</br>';

/*
 * Сделайте функцию, которая параметром принимает число, а возвращает квадратный корень из этого числа.
 *  С помощью этой функции найдите корень числа 3, затем найдите корень числа 4. Просуммируйте
 * полученные результаты и выведите их на экран.
 */

function sqr($num)
{
    return $num * $num;
}

$result1 = sqr(3);
$result2 = sqr(4);

echo $result1 + $result2;
echo '<br>' . "***" . '</br>';

/*
 * Напишите функцию, которая параметром будет принимать число и делить его на 2 столько раз,
 *  пока результат не станет меньше 10. Пусть функция возвращает количество итераций, которое
 *  потребовалось для достижения результата.
 */

function mathFunction($num)
{
    $res = $num;
    $count = 0;
    while ($res >= 10) {
        $res /= 2;
        $count++;
    }
    return $count;
}

$number = 25987;
$res = mathFunction($number);

echo "Need " . $res . " iterations for number " . $number;
echo '<br>' . "***" . '</br>';

/*
 * Напишите функцию, которая будет находить сумму квадратных корней элементов массива.
 */

function arraySqr($arr)
{

    $res = 0;

    foreach ($arr as $item) {
        $res += sqrt($item);
    }
    return $res;
}

$arr = [1, 3, 56, 78, 90909, 5, 55];
echo 'Sum of square roots of array $arr is ' . arraySqr($arr);
echo '<br>' . "***" . '</br>';

/*
 * Сделайте функцию, которая параметром будет принимать массив с числами,
 *  и проверять, что все элементы в этом массиве являются четными числами.
 */
$arr1 = [2, 4, 56, 78, 90900, 6, 56];

function evenFunc($arr)
{

    foreach ($arr as $item) {
        if ($item % 2 !== 0) {
            return false;
        }
    }
    return true;
}

if (evenFunc($arr1)) {
    $result = 'TRUE';
} else {
    $result = 'FALSE';
}

echo 'Do array $arr1 have not even elements? ' . $result;
echo '<br>' . "***" . '</br>';

/*
 * Дана функция, которая параметром принимает целое число и возвращает сумму его цифр:

<?php
	function getDigitsSum($num) {
		return array_sum(str_split($num));
	}
?>
С помощью приведенной функции найдите все года от 1 до 2030, сумма цифр которых равна 13.
 */
function getDigitsSum($num)
{
    return array_sum(str_split($num));
}

$res = [];
for ($i = 1; $i < 2031; $i++) {

    if (getDigitsSum($i) === 13) {
        $res[] = $i;
    }
}

var_dump($res);
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
?>
С помощью рекурсии выведите элементы этого массива на экран.
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function recurcive($arr)
{
    var_dump(array_shift($arr));

    if (0 < count($arr)) {

        recurcive($arr);
    }

}

recurcive($arr);
echo '<br>' . "***" . '</br>';

/*
 * Дан массив:

<?php
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
?>
С помощью рекурсии найдите сумму элементов этого массива.
 */

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function recurs($arr)
{

    $summ = array_shift($arr);
    if (0 < count($arr)) {
        $summ += recurs($arr);
    }
    return $summ;

}

echo recurs($arr);
echo '<br>' . "***" . '</br>';

/*
 * Дан многомерный массив произвольного уровня вложенности, например, такой:

<?php
	$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
?>
С помощью рекурсии выведите все примитивные элементы этого массива на экран.
 */

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

function moreRecurs($arr)
{
    foreach ($arr as $item) {

        if (is_array($item)) {
            moreRecurs($item);
        } else {
            echo $item . " ";
        }
    }
}

moreRecurs($arr);
echo '<br>' . "***" . '</br>';

/*
 * Сделайте функцию, которая будет принимать число, а возвращать это число прописью.
 * Пусть функция работает с числами до 999. Смотрите пример:

<?php
	func(123); // выведет 'сто двадцать три'
?>
 */

function num2String($num)
{
    if ($num === 0) {
        return 'ноль';
    }

    $numMill = array('один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять');
    $numTh = array('одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять');
    $numTeen = array('одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать',
        'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать');
    $numTy = array('', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
    $numHund = array('сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
    $digitName = array(
        $billions = array('миллиард', 'миллиарда', 'миллиардов'),
        $millions = array('миллион', 'миллиона', 'миллионов'),
        $thousands = array('тысяча', 'тысячи', 'тысяч'),
    );

    for ($i = 1000000000, $j = 0; $j <= 3; $j++, $i = $i / 1000) {

        $digit = false;
        $number = floor($num / $i);
        if ($i === 1000) {
            $digit = true;
        }

        $str = $numHund[floor($number / 100) - 1];
        if ($number % 100 === 10) {
            $str .= ' десять';
        } elseif (($n = $number % 100) > 10 and $n < 20) {
            $str .= ' ' . $numTeen[$n % 10 - 1];
        }else{
            $str .= ' ' . $numTy[$n/10 - 1];
            if ($digit){
                $str .= ' ' . $numTh[$number%10 - 1];
            }else{
                $str .= ' ' . $numMill[$number%10  - 1];
            }
        }
        if ($number){
            $n10 = $number%100;
            $n1 = $number %10;

            if ($n10 > 10 and $n10 < 20){
                $secondStr = $digitName[$j][2];
            }elseif ($n1 === 1){
                $secondStr = $digitName[$j][0];
            } elseif ($n1 > 1 and $n1 < 5){
                $secondStr = $digitName[$j][1];
            }else {
                $secondStr = $digitName[$j][2];
            }
        }
        $finalStr .= $str . ' ' . $secondStr . ' ';

        $num = $num % $i;
    }
    return $finalStr;
}

echo num2String(123456789);
echo '<br>' . "***" . '</br>';


/*
 * Дана строка:

<?php
	$str = 'ahb acb aeb aeeb adcb axeb';
?>
Напишите регулярку, которая найдет строки 'ahb', 'acb', 'aeb' по шаблону: буква 'a', любой символ, буква 'b'.
 */
$str = 'ahb acb aeb aeeb adcb axeb';
$res = preg_replace('#a.b#', '^^', $str);

echo $res;
echo '<br>' . "***" . '</br>';

/*
 * <?php
	$str = 'ahb acb aeb aeeb adcb axeb';
?>
Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea' по шаблону: буква 'a', два любых символа, буква 'b'.
 */
$str = 'ahb acb aeb aeeb adcb axeb';
$result = preg_replace('#a..b#', 'om', $str);

echo $result;
echo '<br>' . "***" . '</br>';

/*
 * Дана строка:

<?php
	$str = 'aa aba abba abbba abca abea';
?>
Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' один или более раз, буква 'a'.
 */
$str = 'aa aba abba abbba abca abea';
$result = preg_replace('#ab+a#', 'om', $str);
echo $result;
echo '<br>' . "***" . '</br>';

/*
 * Дана строка:

<?php
	$str = 'aa aba abba abbba abca abea';
?>
Напишите регулярку, которая найдет строки по шаблону: буква 'a', буква 'b' ноль или более раз, буква 'a'.
 */
$str = 'aa aba abba abbba abca abea';
$result = preg_replace('#ab*a#', 'yeehaa', $str);
echo $result;
echo '<br>' . "***" . '</br>';

/*
 * <?php
	$str = 'ab abab abab abababab abea';
?>
Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз.
 */

$str = 'ab abab abab abababab abea';
$result = preg_replace('#(ab)+#', 'bbBBbb', $str);
echo $result;
echo '<br>' . "***" . '</br>';

/*
 * Дана строка:

<?php
	$str = 'aa aba abba abbba abbbba abbbbba';
?>
Напишите регулярку, которая найдет строки 'abba', 'abbba', 'abbbba' и только их.
 */
$str = 'aa aba abba abbba abbbba abbbbba';
$result = preg_replace('#ab{2,4}a#', 'yo-ho-ho!', $str);
echo $result;
echo '<br>' . "***" . '</br>';
?>