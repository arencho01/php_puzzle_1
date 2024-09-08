<?php

// assert(true);
// assert(false);

function factorial($n)
{
   if ($n <= 0) return 1;
   return $n * factorial($n - 1);
}
assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);



function event_to_zero(int $number) {
   $numToStr = strval($number);        // преобразовываю число в строку
   $numsArr = str_split($numToStr);    // разбиваю строку на массив

   foreach($numsArr as $key => $val) {
      if($key != 0 && ($key + 1) % 2 == 0) {
         $numsArr[$key] = '0';
      }
   }
   
   $newStr = implode($numsArr); // объединяю массив в строку
   $newNum = intval($newStr);   // преобразовываю строку в число

   return $newNum;
   
}
assert(event_to_zero(12345) == 10305);



function is_palindrome(string $word) {
   $arr = mb_str_split($word);
   $arr = array_reverse($arr);
   $str = implode($arr);

   if($str == $word) {
      return true;
   }
   else {
      return false;
   }
}
assert(is_palindrome('шалаш') == true);
assert(is_palindrome('такси') == false);



function array_double($arr) {
   foreach($arr as $key => $val) {
      $arr[$key] = $val * 2;
   }
   return $arr;
}
assert(array_double([1, 2, 3]) == [2, 4, 6]);



function only_odd($arr) {
   $newArr = [];
   foreach($arr as $key => $val) {
      if($val % 2 != 0) {
         $newArr[] = $val;
      }
   }
   return $newArr;
}
assert(only_odd([1, 2, 3]) == [1, 3]);