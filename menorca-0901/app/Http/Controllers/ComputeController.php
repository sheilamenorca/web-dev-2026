<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComputeController extends Controller
{
    public function index() {
        Log::info('======= START INDEX =======');
        Log::debug('======= DEBUG INDEX ======='); 
        return view('compute.calculate');
    }

    public function compute(Request $request) {
        Log::info('======= START COMPUTE =======');
        $firstNumber = $request->input('firstnumber');
        $secondNumber = $request->input('secondnumber');

        $sum = $this->sumOfNumbers($firstNumber, $secondNumber);
        Log::info('SUM = '.$sum);

        $difference = $this->differenceOfNumbers($firstNumber, $secondNumber);
        Log::info('DIFFERENCE = '.$difference);

        $product = $this->productOfNumbers($firstNumber, $secondNumber);
        Log::info('PRODUCT = '.$product);
        //dd($product);

        $quotient = $this->quotientOfNumbers($firstNumber, $secondNumber);
        Log::info('QUOTIENT = '.$quotient);
        
        Log::info('======= END COMPUTE =======');
        return "Sum: ".$sum."
                <br>Difference: ".$difference.
               "<br>Product: ".$product.
               "<br>Quotient: ".$quotient;
    }

    public function sumOfNumbers($firstNumber, $secondNumber) {
        return $firstNumber + $secondNumber;
    }

    public function differenceOfNumbers($firstNumber, $secondNumber) {
        return $firstNumber - $secondNumber;
    }

    public function productOfNumbers($firstNumber, $secondNumber) {
        return $firstNumber * $secondNumber;
    }

    public function quotientOfNumbers($firstNumber, $secondNumber) {
        if ($secondNumber == 0) {
            return 'Cannot divide by zero';
        }

        return $firstNumber / $secondNumber;
    }
}
