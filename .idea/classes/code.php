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
foreach ($arr as $a){
    echo '<br>' .$a. '</br>';
}



?>