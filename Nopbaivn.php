<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.  -->
<?php
echo "Bài 1:";
function isEven($number) {
  return $number % 2 == 0;
}
$number = 9;
echo isEven($number) ? "$number là số chẵn" : "$number không phải số chẵn";
?>
<br>


<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
echo "<br>";
echo "Bài 2:";
function sum($n) {
  $total = 0;
  for ($i = 1; $i <= $n; $i++) {
    $total += $i;
  }
  return $total;
}
$n = 20;
echo sum($n);
?>
<br>
<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
echo "Bài 3:";
echo "<br>";
function printMultiplicationTable($n) {
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
      echo str_pad($i, 2, " ") . " x " . str_pad($j, 2, " ") . " = " . str_pad($i * $j, 5, " ") . "<br>";
    }
  }
}
printMultiplicationTable(10);
?>
<!-- 4.Viết chương trình PHP để kiểm tra xem một 
chuỗi có chứa một từ cụ thể hay không. -->
<?php
echo "Bài 4:";
echo "<br>";
function checkifexist($word,$my_string){
    if((strpos($my_string,$word))!==false)
    {
        echo "word exsited";}
    else {echo "word not exist";} 
    }
$word="meo";
$my_string="toi thich meo";
checkifexist($word,$my_string);
?>


<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
echo "<br>";
echo "Bài 5:";

function findMinMax($array) {
  $min = $array[0];
  $max = $array[0];
  for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $min) {
      $min = $array[$i];
    }
    if ($array[$i] > $max) {
      $max = $array[$i];
    }
  }
  return array($min, $max);
}
$array = array(3,9,7,11,47,2);
$minMax = findMinMax($array);
echo "Giá trị nhỏ nhất: $minMax[0]<br>" . PHP_EOL;
echo "Giá trị lớn nhất: $minMax[1]<br>" . PHP_EOL;
?>
<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
echo "Bài 6:";
echo "<br>";
function sortArray($array) {
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$i] > $array[$j]) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
      }
    }
  }
  return $array;
}
$array = array(6,5,8,3,2,1);
$sortedArray = sortArray($array);
print_r($sortedArray);
?>
<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
echo "<br>";
echo "Bài 7:";

function factorial($n) {
  if ($n < 0) {
    return false;
  }
  $factorial = 1;
  for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
  }
  return $factorial;
}
echo factorial(5);
echo "<br>";
?>
<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
echo "Bài 8:";
echo "<br>";
function isPrime($n) {
  if ($n < 2) {
    return false;
  }
  for ($i = 2; $i * $i <= $n; $i++) {
    if ($n % $i == 0) {
      return false;
    }
  }
  return true;
}
function findPrimes($a, $b) {
  $primes = [];
  for ($i = $a; $i <= $b; $i++) {
    if (isPrime($i)) {
      $primes[] = $i;
    }
  }
  return $primes;
}
$a = 3;
$b = 15;
$primes = findPrimes($a, $b);
echo "<br>";
echo implode(", ", $primes) . PHP_EOL;
?>


<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
echo "<br>";
echo "Bài 9:";


function sumArray($array) {
  $sum = 0;
  for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
  }
  return $sum;
}
$array = array(2,3,4,5,6,7,8);
$sum = sumArray($array);
echo "<br>";
echo $sum;
?>
<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
echo "<br>";
echo "Bài 10:";
function fibonacci($n) {
  if ($n == 0 || $n == 1) {
    return $n;
  }
  return fibonacci($n - 1) + fibonacci($n - 2);
}
function printFibonacci($a, $b) {
  for ($i = $a; $i <= $b; $i++) {
    echo fibonacci($i) . " ";
  }
}
$a = 0;
$b = 10;
echo "<br>";
printFibonacci($a, $b);
?>
<!-- 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
echo "<br>";
echo "Bài 11:";
function isArmstrong($n) {
  $digits = str_split($n);
  $sum = 0;
  foreach ($digits as $digit) {
    $sum += pow($digit, count($digits));
  }
  return $sum == $n;
}
echo "<br>";
echo isArmstrong(45) ? "45 là số Armstrong" : "45 không phải là số Armstrong";
?>
<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
echo "<br>";
echo "Bài 12:";
function insertElement($array, $element, $position) {
  $array = array_slice($array, 0, $position);
  $array[] = $element;
  $array = array_slice($array, $position);
  return $array;
}
$array = array(1, 2, 3, 4, 5);
$array = insertElement($array, 10, 2);
echo "<br>";
print_r($array);
?>
<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
echo "<br>";
echo "Bài 13:";
function removeDuplicates($array) {
  $unique = array_unique($array);
  return $unique;
}
$array = array(1, 2, 3, 1, 2, 3);
$unique = removeDuplicates($array);
echo "<br>";
print_r($unique);
?>
<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
echo "<br>";
echo "Bài 14:";
function findPosition($array, $element) {
  $position = array_search($element, $array);
  return $position === false ? -1 : $position;
}
$array = array(1, 2, 3, 4, 5);
$position = findPosition($array, 3);
echo "<br>";
echo $position;
?>
<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
echo "<br>";
echo "Bài 15:";
function reverseString($string) {
  $reversed = "";
  for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
  }
  return $reversed;
}
$string = "Good night";
$reversed = reverseString($string);
echo "<br>";
echo $reversed;
?>
<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
echo "<br>";
echo "Bài 16:";
function countElements($array) {
  return count($array);
}
$array = array(1, 2, 3, 4, 5);
$count
?>
<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
echo "<br>";
echo "Bài 17:";
function isPalindrome($string) {
  $reversed = strrev($string);
  return $string === $reversed;
}
$string = "Hello";
$isPalindrome = isPalindrome($string);
echo "<br>";
echo $isPalindrome ? "'Hello' là chuỗi Palindrome" : "'Hello' không phải là chuỗi Palindrome";
?>
<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
echo "<br>";
echo "Bài 18:";
function countOccurrences($array, $element) {
  $count = 0;
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] === $element) {
      $count++;
    }
  }
  return $count;
}
$array = array(1, 2, 3, 1, 2, 3);
$count = countOccurrences($array, 1);
echo "<br>";
echo $count;
?>
<!-- 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
echo "<br>";
echo "Bài 19:";
function sortArrayDesc($array) {
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
      if ($array[$i] < $array[$j]) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
      }
    }
  }
  return $array;
}
$array = array(1, 5, 3, 2, 4);
$sortedArray = sortArrayDesc($array);
echo "<br>";
print_r($sortedArray);
?>
<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
echo "<br>";
echo "Bài 20:";
function addElementToStart($array, $element) {
  array_unshift($array, $element);
  return $array;
}
function addElementToEnd($array, $element) {
  array_push($array, $element);
  return $array;
}
$array = array(1, 2, 3, 4, 5);
$array = addElementToStart($array, 10);
echo "<br>";
echo implode(", ", $array);

$array = addElementToEnd($array, 11);
echo "<br>";
echo implode(", ", $array);
?>

<!-- 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
echo "<br>";
echo "Bài 21:";
function findSecondLargest($array) {
    $largest = $array[0];
    $secondLargest = null;
    
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $array[$i];
        } elseif ($array[$i] != $largest && ($secondLargest == null || $array[$i] > $secondLargest)) {
            $secondLargest = $array[$i];
        }
    }
    
    return $secondLargest;
}

$array = array(1, 2, 3, 4);
$secondLargest = findSecondLargest($array);

echo "Số lớn thứ hai là: " . $secondLargest;
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
echo "<br>";
echo "Bài 22:";
function findGCDAndLCM($a, $b) {
  $gcd = $a;
  $b = min($a, $b);
  while ($b > 0) {
    $gcd = $b;
    $b = $a % $b;
    $a = $gcd;
  }

  $lcm = $a * $b / $gcd;
  return array($gcd, $lcm);
}

$a = 8;
$b = 10;

$gcdAndLcm = findGCDAndLCM($a, $b);
echo "<br>";
echo "Ước số chung lớn nhất của $a và $b là $gcdAndLcm[0]" . PHP_EOL;
echo "<br>";
echo "Bội số chung nhỏ nhất của $a và $b là $gcdAndLcm[1]" . PHP_EOL;
echo "<br>";
?>
<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
echo "<br>";
echo "Bài 23:";
function isPerfectNumber($n) {
  $sumOfDivisors = 1;
  for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) {
      $sumOfDivisors += $i;
      if ($i != $n / $i) {
        $sumOfDivisors += $n / $i;
      }
    }
  }
  return $sumOfDivisors == $n;
}
$n = 11;
$isPerfectNumber = isPerfectNumber($n);
echo $isPerfectNumber ? "11 là số hoàn hảo" : "11 không phải là số hoàn hảo";
echo "<br>";
?>
<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
echo "<br>";
echo "Bài 24:";
function findLargestOddNumber($array) {
  $largestOddNumber = array_filter($array, function ($number) {
    return $number % 2 != 0;
  });
  return max($largestOddNumber);
}

$array = array(3,5,7,9,11,13,15);

$largestOddNumber = findLargestOddNumber($array);

echo $largestOddNumber;

?>
<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
echo "<br>";
echo "Bài 25:";
function isPrimeNumber($n) {
  if ($n < 2) {
    return false;
  }
  for ($i = 2; $i * $i <= $n; $i++) {
    if ($n % $i == 0) {
      return false;
    }
  }
  return true;
}
$n = 11;
$isPrimeNumber = isPrimeNumber($n);
echo $isPrimeNumber ? "11 là số nguyên tố" : "11 không phải là số nguyên tố";
echo "<br>";
?>
<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
echo "<br>";
echo "Bài 26:";
function findLargestPositiveNumber($array) {
  $largestPositiveNumber = -INF;
  foreach ($array as $number) {
    if ($number >= 0 && $number > $largestPositiveNumber) {
      $largestPositiveNumber = $number;
    }
  }
  return $largestPositiveNumber;
}
$array = array(-2,-3,-4,2,3,4);
$largestPositiveNumber = findLargestPositiveNumber($array);
echo $largestPositiveNumber;
echo "<br>";
?>
<!-- 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
echo "<br>";
echo "Bài 27:";
function findLargestNegativeNumber($array) {
  $largestNegativeNumber = INF;
  foreach ($array as $number) {
    if ($number < 0 && $number < $largestNegativeNumber) {
      $largestNegativeNumber = $number;
    }
  }
  return $largestNegativeNumber;
}
$array = array(-2,-3,-4,2,3,4);
$largestNegativeNumber = findLargestNegativeNumber($array);
echo $largestNegativeNumber;
echo "<br>";
?>
<!-- 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
echo "<br>";
echo "Bài 28:";
function sumOddNumbers($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i += 2) {
    $sum += $i;
  }
  return $sum;
}
$n = 10;
$sumOddNumbers = sumOddNumbers($n);
echo $sumOddNumbers;
echo "<br>";
?>
<!-- 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
echo "<br>";
echo "Bài 29:";
function findPerfectSquares($a, $b) {
  $perfectSquares = array();
  for ($i = 1; $i <= $b; $i++) {
    if (pow($i, 2) <= $b) {
      $perfectSquares[] = pow($i, 2);
    }
  }
  return $perfectSquares;
}
$a = 1;
$b = 50;
$perfectSquares = findPerfectSquares($a, $b);
print_r($perfectSquares);
echo "<br>";
?>
<!-- 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
echo "<br>";
echo "Bài 30:";
function isSubstring($haystack, $needle) {
  return strpos($haystack, $needle) !== false;
}

$haystack = "Xin chao cac ban!";
$needle = "Xin";

$isSubstring = isSubstring($haystack, $needle);

echo $isSubstring ? "'Xin' là chuỗi con của 'Xin chao cac ban!'" : "'world' không phải là chuỗi con của 'Xin chao cac ban!'";

?>