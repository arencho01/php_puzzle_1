<?php
   include_once('test.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>tasks</title>
</head>
<body>
   <div class="task">
      <h3 class="task__title">Напишите функцию рассчета факториала числа n.</h3>
      <p class="task__res">
         Результат выполнения функции factorial($n), где $n - 4:
         <br>
         <? echo factorial(4) ?>
      </p>
   </div>
   <div class="task">
      <h3 class="task__title">Создать функцию even_to_zero(int $number) Которая цифры на четных ПОЗИЦИЯХ занулит. Например, из 12345 получается число 10305. Внимание! Важна позиция цифры, а не значение.</h3>
      <p class="task__res">
         Результат выполнения функции event_to_zero(int $number), где $number - 12345:
         <br>
         <? echo event_to_zero(12345) ?>
      </p>
   </div>
   <div class="task">
      <h3 class="task__title">Создать функцию is_palindrome(string $word) которая выведет true если строка является палиндромом(читается одинаково в зад и вперед, например: шалаш) и иначе false. Внимание! Обязательно включите в проверки русские слова "шалаш" и "такси".</h3>
      <p class="task__res">
         Результат выполнения функции is_palindrome(string $word),
         <br>где $word - 'шалаш':
         <br>
         <? echo is_palindrome('шалаш') == 1 ? "<span class='task__res-true'>true</span>" : "<span class='task__res-false'>false</span>" ?>
         <br>
         где $word - 'такси':
         <br>
         <? echo is_palindrome('такси') == 1 ? "<span class='task__res-true'>true</span>" : "<span class='task__res-false'>false</span>" ?>
      </p>
   </div>
   <div class="task">
      <h3 class="task__title">Написать функцию array_double, которая принимает на вход массив чисел, например [1,2,3] и возвращает массив, в котором все числа умножены на 2, например [2, 4, 6]</h3>
      <p class="task__res">
         Результат выполнения функции array_double($arr), где $arr - [1, 2, 3]:
         <br>
         <? print_r(array_double([1, 2, 3])) ?>
      </p>
   </div>
   <div class="task">
      <h3 class="task__title">Написать функцию only_odd, которая принимает массив [1, 2, 3] и возвращает массив только нечетных [1, 3]</h3>
      <p class="task__res">
         Результат выполнения функции only_odd($arr), где $arr - [1, 2, 3]:
         <br>
         <? print_r(only_odd([1, 2, 3])) ?>
      </p>
   </div>
</body>
</html>