<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('to_numeral'))
{
  function to_numeral($num) {

      // 1) Only return numerals between 1 and 3999
      if(0 > $num || $num > 3999 || !is_int($num)) return false;

      $numerals = [ 'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 
                    'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1 ];
      $result = '';
      
      // 2) Iterate numerals starting with largest divisor, 1000
      foreach($numerals as $key => $val) {
        
          // 3) While enumeration is possible given our current divisor:
          while ( $num >= $val ) {

              // 4) Append numeral to result
              $result .= $key;

              // 5) Decrement number until it is no longer divisible 
              $num -= $val;
          }

          // 6) Break for loop if we have reached a solution
          if($num === 0) break;
      }
      
      return $result;

  }  
}
