<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputeController extends Controller
{
    public function index()
    {
        return view('compute.calculate');
    }

    public function compute(Request $request)
    {
        $firstNumber = $request->input('firstnumber');
        $secondNumber = $request->input('secondnumber');

        $sum = $this->sumOfNumbers($firstNumber, $secondNumber);
        $difference = $this->differenceOfNumbers($firstNumber, $secondNumber);
        $product = $this->productOfNumbers($firstNumber, $secondNumber);
        $quotient = $this->quotientOfNumbers($firstNumber, $secondNumber);
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
