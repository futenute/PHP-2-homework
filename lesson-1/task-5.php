<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); //выведет 1, тк при использовании инкремента в префиксной форме сначала присваивается переменной значение, увеличенное на 1, а затем выводится новое значение.
$a2->foo(); //выведет 2, тк при использовании ключевого слова static значение переменной изменяется внутри класса. Далее при запуске метода этого класса $x будет увеличиваться на 1.
$a1->foo(); //3
$a2->foo(); //4