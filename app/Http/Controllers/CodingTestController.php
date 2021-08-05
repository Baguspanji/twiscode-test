<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodingTestController extends Controller
{
    public function convert(Request $request)
    {
        // bin2dec
        if ($request->tobin || $request->todec == 0) {
            $bin = str_split($request->tobin);
            $bin = array_reverse($bin);

            $i = 0;
            $dec = 0;

            foreach ($bin as $values) {
                $ans = $values * pow(2, $i);
                $dec += $ans;
                $i++;
            }

            return $dec;
        }
        //dec2bin
        else if ($request->todec || $request->tobin == 0) {
            $n = $request->todec;
            $binaryNum[] = [];
            $i = 0;
            while ($n > 0) {
                $binaryNum[$i] = $n % 2;
                $n = (int)($n / 2);
                $i++;
            }

            for ($j = $i - 1; $j >= 0; $j--)
                echo $binaryNum[$j];
        } else {
            return 'Tidak Valid';
        }
    }

    public function palindrome(Request $request)
    {
        $string = $request->palindrome;
        $string = str_replace(' ', '', $string);

        //remove special characters
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        //change case to lower
        $string = strtolower($string);

        //reverse the string
        $reverse = strrev($string);

        if ($string == $reverse) {
            echo "<p>It is Palindrome</p>";
        } else {
            echo "</p>Not Palindrome</p>";
        }
    }
}
