<?php

/*
 * 1.Отличие сортировок sort(), asort(), ksort()
*/
$capitals = array("US" => "Washington", "UK" => "London", "Austria" => "Venna");
foreach ($capitals as $item) {

    echo $item;
    echo " ";
}
echo "\r";

asort($capitals);
// $capitals = {“UK” => “London”, “Austria” => “Vienna”, “US” => “Washington”}
foreach ($capitals as $item) {

    echo $item;
    echo " ";
}
echo "\r";

ksort($capitals);
// $capitals = {“Austria” => “Vienna”, “UK” => “London”, “US” => “Washington”}
foreach ($capitals as $item) {

    echo $item;
    echo " ";
}
echo "\r";
echo "***\r";
echo "\r";

/*
 * 2.Динамические переменные
 */

$var = "first";
$$var = "second";
echo $var;
echo " ";
echo $$var;
echo "\r";
echo "***\r";
echo "\r";

//  $$var == $first == “Second”
class Warrior
{
    public $health;
    public $damage;

    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function doDamage(Warrior $warrior)
    {
        $warrior->health -= $this->damage;
    }
}

$w1 = new Warrior('Petya', 100, 10);
$w2 = new Warrior('Vasya', 80, 8);


while (true) {
    $w1->doDamage($w2);
    if ($w2->health <= 0) {
        echo $w1->name . ' WIN';
        break;
    }
    $w2->doDamage($w1);
    if ($w1->health <= 0) {
        echo $w2->name . ' WIN';
        break;
    }
}

echo "\r";
echo "***\r";
echo "\r";
/*
 * 3.Какими способами можно перенаправить страницу в PHP?
 */

//1. Используя функцию PHP header()
header('Location: ' . "");

//2. Используя JavaScript
echo '<script type="text/javascript">';
echo "\r";
echo 'window.location.href=' . "" . '";"';
echo "\r";
echo '</script>>';

echo "\r";
echo "***\r";
echo "\r";
/*
 * 4. Назови и опиши пять любых типов ошибок PHP.
 *
 *
 * E_ERROR. Этот тип ошибок возникает
 * при критичных ошибках, выполнение скрипта немедленно прерывается.
 * E_WARNING. Предупреждает программиста об ошибке, но выполнение скрипта не останавливается.
 * E_PARSE. Возникает во время компиляции, такие ошибки обычно генерируются парсером.
 * E_USER_WARNING. Некритичное предупреждение, которое генерируется пользователем.
 * Устанавливается программистом с помощью trigger_error().
 * E_COMPILE_WARNING. Генерируется скриптовым движком Zend. Некритичная ошибка компиляции.
 * Также, в PHP5 доступен новый уровень обработки ошибок – E_STRICT, сообщения
 * которого возникают при использовании устаревших возможностей PHP.
 */


/*
 * 5. В чем различия между четвертой и пятой версиями PHP?
 *
 * В пятой версии были добавлены следующие возможности:
 * – ключевое слово static
 * – Ключевое слово final
 * – Абстрактные классы
 * – Интерфейсы
 * – Магические методы
 * – Клонирование объектов
 * И многое другое.
 * Всё это благодаря использованию движка Zend Engine 2.
 */


/*
 * 6. Что такое тип данных?
 * Тип данных – это описание, определяющее свойства и порядок обработки данных. Например,
 * фраза “переменная $str имеет тип данных “строка” означает, что в этой переменной может
 * содержаться любое число символов, а операция сложения строк представляет собой последовательное
 * соединение слагаемых строк в одну.
 */


/*
 * 7. Что можешь сказать про типизацию данных в PHP?
 *
 * PHP является языком программирования с динамической типизацией, не требующим указания
 * типа при объявлении переменных, равно как и самого объявления переменных.
 *  Преобразования между скалярными типами зачастую осуществляются неявно без дополнительных усилий.
 * Впрочем, PHP предоставляет широкие возможности и для явного преобразования типов.
 */


/*
 * 8. Сколько типов данных в РНР?
 *
 * PHP поддерживает 8 базовых типов данных.
 * 4 скалярных типа:
 * boolean. Логический тип данных, переменные данного типа могут принимать значения true
 * или false.
 * integer. Целочисленный тип данных, переменные могут принимать целые значения (...-2, -1, 0, 1,
 * 2...) в диапазоне от -2^31 до +2^31. Если значение превышает данный порог – оно автоматически
 *  переводится в тип float.
 * float. Числовой тип данных с плавающей точкой, может содержать как целые, так и дробные
 * величины.
 * string. Строковый тип данных. Содержит нефиксированное количество различных символов.
 * PHP не накладывает никаких ограничений на длину строки, поэтому можно смело работать
 * даже с ОЧЕНЬ большими строками.
 * 2 комплексных (составных) типа:
 * array. Массив, содержит упорядоченный список элементов.
 * object. Объект, содержит некий объект (экземпляр класса).
 * 2 специальных типа:
 * resource. Ссылка на абстрактный элемент, т.н. внешний ресурс. Примеры внешних ресурсов -
 * ссылка на файл и ссылка на результат выполнения запроса.
 * NULL. Пустой тип данных, обозначающий отсутствие какого-либо значения. О таких значениях
 * обычно говорят “не определено”. Пустым значением можно инициализировать переменные любого другого типа.
 */


/*
 * 9. Что такое static функция и чем она отличается от “обычной” (не static)?
 * Static принадлежит классу, а не экземпляру класса. И вызывается у класса, а не у объекта, т.е.
 * напрямую.
 * Объявление свойств и методов класса статическими позволяет обращаться к ним без создания
 * экземпляра класса. Атрибут класса, объявленный статическим, не может быть доступен посредством
 *  экземпляра класса (но статический метод может быть вызван). Так как статические
 * методы вызываются без создания экземпляра класса, то псевдопеременная $this не доступна
 * внутри метода, объявленного статическим.
 * Доступ к статическим свойствам класса не может быть получен через оператор ->.
 */


/*
 * 10. Есть ли разница между self и this в php?
 * self используется для статических функций и членов класса, а this наоборот для нестатических.
 */


/*
 * 11. Что такое конструктор?
 * В PHP (начиная с версии 5) конструктор – это метод __construct(), который автоматически
 * вызывается ключевым словом new после создания объекта. Обычно он используется для выполнения
 * различных автоматических инициализаций, как например, инициализация свойств. Конструкторы
 * также могут принимать аргументы, в этом случае, когда указано выражение new, необходимо
 * передать конструктору формальные параметры в круглых скобках
 */


/*
 * 12. Приведи пример конструктора.
 */

class MyClass
{

    public function __construct()
    {
        echo "Hello from constructor!";
    }

}

$myObject = new MyClass();
echo "\r";
echo "***\r";
echo "\r";


/*
 * 13. Обязательно ли писать ?> в конце скрипта?
 *
 * Нет
 */


/*
 * 14. В каких случаях это не стоит писать?
 * Для файлов, содержащих только PHP-код, закрывающий тег ?> лучше не использовать. Он не
 * требуется синтаксисом PHP и его пропуск предотвращает случайное включение в вывод конечных пробелов
 *
 */


/*
 * 15. Поддерживает ли РНР множественное наследование?
 *
 * Нет, PHP не поддерживает множественное наследование. То есть у производного класса может
 * быть только один родительский. Но с помощью “магической” функции __call() его можно эмулировать.
 */


/*
 * 16. Какая разница между require(), require_once(), include() и include_once()?
 *
 * require() включает в страницу заданный файл, в то время как require_once() делает это только в
 * том случае, если этот файл не был включен ранее (на одной и той же странице).
 * Таким образом, require_once() лучше использовать, если нужно включить файл с большим количеством функций.
 *  Тогда можно быть уверенным, что файл не будет включен многократно и не
 * возникнет ошибка “объявление функции дублируется”.
 * Отличие между require() и include() следущее: require() возвращает FATAL ERROR, если файл не
 * найден, include() же возвращает только WARNING.
 * Функция include_once() работает почти так же, как и include(), а отличия те же, что и между
 * require() и require_once().
 */


/*
 * 17. Какая разница между функциями echo и print в PHP?
 *
 *  Во-первых, echo может принимать и выводить любое количество аргументов, а print - только
 * один. Во-вторых, print всегда возвращает 1, поэтому может быть использован в контексте выражения.
 */


/*
 * 18. Что делает функция eval() ?
 *
 * eval() вычисляет строку как PHP-код.
 */


/*
 * 19. Чем отличается цикл while от do while?
 *
 * do-while всегда выполняет тело цикла хотя бы один раз, поскольку его
 * условное выражение проверяется в конце цикла
 */


/*
 * 20. Как перевернуть массив? Есть массив array(‘h’, ‘e’, ‘l’, ‘l’, ‘o’),
 * как из него получить array(‘o’, ‘l’, ‘l’, ‘e’, ‘h’)?
 *
 * Для этого в PHP есть функция array_reverse().
 */


/*
 * 21. А как перевернуть массив без нее?
 */

$arr = array('h', 'e', 'i', 'i', 'o');
$reversed = array();

for ($i = 0; $i < count($arr); $i++) {
    array_unshift($reversed, $arr[$i]);
}

for ($i = 0; $i < count($reversed); $i++) {
    echo $reversed[$i];
}
echo "\r";
echo "***\r";
echo "\r";


/*
 * 22. Как перевернуть строку?
 */

$str = "Turn me baby";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rev = array($str[$i]);
    $revstr = implode("", $rev);
    echo $revstr;
}
echo "\r\n";
echo "\r\n";
echo "\r\n";

//If it too easy - go like this
$str2 = "Turn me again!";

function myrev($src)
{
    $lenght = strlen($src);
    for ($i = 0; $i < $lenght / 2; $i++) {
        $a = $src[$i];
        $src[$i] = $src[$lenght - $i - 1];
        $src[$lenght - $i - 1] = $a;
    }
    return $src;
}

echo myrev($str2);
echo "\r\n";
echo "\r\n";
echo "\r\n";

$str3 = "Turn me please third time in a row";
$b = '';
for ($i = strlen($str3) - 1; $i >= 0; $i--) {
    $b .= $str3[$i];
}
$str3 = $b;
echo $str3;
echo "\r\n";
echo "\r\n";
echo "***\r\n";


/*
 * 23. Что такое рекурсия?
 * Рекурсия – это вызов функции из неё же самой, непосредственно (простая рекурсия) или через
 * другие функции (сложная или косвенная рекурсия), например, функция A вызывает функцию B,
 * а функция B – функцию A. Количество вложенных вызовов функции или процедуры называется
 * глубиной рекурсии
 */


/*
 *24. Напиши пример рекурсивной функции, которая вычисляет факториал
 * числа.
 */

function factorial($x)
{
    if ($x === 0) {
        return 1;
    } else {
        return $x * factorial($x - 1);
    }
}

echo "Factorial 4 is ";
echo factorial(4);

echo "\r\n";
echo "\r\n";
echo "***\r\n";


/*
 * 25. Как вывести на экран ряд чисел Фибоначчи?
 */

function fibonacci($x)
{

    if ($x < 3) {
        return 1;
    } else {
        return fibonacci($x - 1) + fibonacci($x - 2);
    }
}
for ($i = 1; $i <= 16; $i++ ){
    echo (fibonacci($i).", ");
}
echo (",,,\n");
echo "\r\n";
echo "***\r\n";


/*
 * 26. Сложение в PHP и JavaScript. ”123” + “abc”. Что будет? А если 123 + ”abc”?
 * В JavaScript “+” это конкатенация, т.е. строки просто соединятся. В PHP в обоих случая результат
 * будет 123. А если в PHP сложить, например, 10 + ”20”, то, несмотря на кавычки результат будет
 * 30.
 */


/*
 *27. Есть ли разница между одинарными и двойными кавычками в PHP?
 * В двойных кавычках данные “парсятся”, а в одинарных – нет.
 *  Двойные кавычки в данном случае
 * приведут к результату Chimay, а одинарные к $beer
 */

$beer = 'Chimay';
echo "$beer";
echo "\r\n";
echo "\r\n";
echo "***\r\n";

?>

