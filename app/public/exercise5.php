<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
echo "<hr/>";
$a1->foo(); // выведет 1, т.к. ++$x сначала увеличит на 1 переменную $x, а затем вернет ее значение. Во всех последующих случаях преинкремент будет работать аналогичным образом
$a2->foo(); // выведет 2, т.к. $x статическая и ее значение хранится в одном месте и не хранится в конкретном экземпляре, а $a1 и $a2 экземпляры одного и того же класса.
$a1->foo(); // выведет 3, аналогично предыдущему вызову
$a2->foo(); // выведет 4, аналогично предыдущему вызову
