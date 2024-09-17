<?php

// assert(true);
// assert(false);



//function event_to_zero(int $number) {
   // $numToStr = strval($number);        // преобразовываю число в строку
   // $numsArr = str_split($numToStr);    // разбиваю строку на массив

//   foreach($numsArr as $key => $val) {
//      if($key != 0 && ($key + 1) % 2 == 0) {
//         $numsArr[$key] = '0';
//      }
//   }

   // $newStr = implode($numsArr); // объединяю массив в строку
   // $newNum = intval($newStr);   // преобразовываю строку в число

   // return $newNum;
   
//}
//assert(event_to_zero(12345) == 10305);



// function even_to_zero() level 2
function even_to_zero($number)
{
    return intval(implode(array_map(fn($var) => $var % 2 == 0? $var * 0 : $var, str_split(strval($number)))));
}
assert(even_to_zero(12345));
// print_r(even_to_zero(12345));     (для проверки раскомментировать)




//function is_palindrome(string $word) {
//   $arr = mb_str_split($word);
//   $arr = array_reverse($arr);
//   $str = implode($arr);
//
//   if($str == $word) {
//      return true;
//   }
//   else {
//      return false;
//   }
//}
//assert(is_palindrome('шалаш') == true);
//assert(is_palindrome('такси') == false);



// function is_palindrome() level 2
function is_palindrome(string $str) : bool
{
    return implode(array_reverse(mb_str_split($str))) == $str;
}
assert(is_palindrome('шалаш') == true);
assert(is_palindrome('такси') == false);

//echo(is_palindrome('шалаш'));     (для проверки раскоментировать)
//echo(is_palindrome('такси'));




//function array_double($arr) {
//   foreach($arr as $key => $val) {
//      $arr[$key] = $val * 2;
//   }
//   return $arr;
//}
//assert(array_double([1, 2, 3]) == [2, 4, 6]);



//function array_double() level 2
function array_double($arr) {
    return $newArr = array_map(fn($item) => $item * 2, $arr);
}
assert(array_double([1, 2, 3]) == [2, 4, 6]);

//print_r(array_double([1, 2, 3]));     // (для проверки раскомментировать)




//function only_odd($arr) {
//   $newArr = [];
//   foreach($arr as $key => $val) {
//      if($val % 2 != 0) {
//         $newArr[] = $val;
//      }
//   }
//   return $newArr;
//}
//assert(only_odd([1, 2, 3]) == [1, 3]);



function only_odd($arr)
{
    return str_split(implode(array_filter($arr, fn($item) => $item & 1)));
}
assert(only_odd([1, 2, 3]) == [1, 3]);

//print_r(only_odd([1, 2, 3]));      // (для проверки раскомментировать)