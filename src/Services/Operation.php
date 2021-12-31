<?php
/*
 * The responsability of this class is implement the necesary 
 * operations to calculate a result.
 */

namespace App\Services;

class Operation implements IOperation
{
    public function calculate( string $operation, float $operatorA, float $operatorB ): float
    {
        switch( $operation ){
            case 'add':
                $result = $this->add( $operatorA, $operatorB );
            break;
            case 'subtract':
                $result = $this->subtract( $operatorA, $operatorB );
            break;
            case 'divide':
                $result = $this->divide( $operatorA, $operatorB );
            break;
            case 'multiply':
                $result = $this->multiply( $operatorA, $operatorB );
            break;
            default:
                throw new \Exception('Operation not allowed.');
        }
        return $result;
    }

    /**
     * Add operations eg. (5 + 6 = 11)
     * 
     * @param $operatorA float First operator
     * @param $operatorB float Second operator
     * 
     * @return float The result of operation
     */
    private function add( float $operatorA, float $operatorB): float
    {
        $result = ( $operatorA + $operatorB );
        return $result;
    }

    /**
     * Subtract operations eg. (6 - 5 = 1)
     * 
     * @param $operatorA float First operator
     * @param $operatorB float Second operator
     * 
     * @return float The result of operation
     */
    private function subtract( float $operatorA, float $operatorB): float
    {
        $result = ( $operatorA - $operatorB );
        return $result;
    }
    
    /**
     * Divide operations eg. (10 / 2 = 5)
     * 
     * @param $operatorA float First operator
     * @param $operatorB float Second operator
     * 
     * @return float The result of operation or Exception
     */
    private function divide( float $operatorA, float $operatorB): float
    {
        $result = ( $operatorA / $operatorB );
        try {
            $result = ( $operatorA / $operatorB );
        } catch( \DivisionByZeroError $e ){
            echo "Divide by zero";
        }

        $result = ( $operatorA / $operatorB );
        return $result;
    }

    /**
     * Multiply operations eg. (10 * 2 = 20)
     * 
     * @param $operatorA float First operator
     * @param $operatorB float Second operator
     * 
     * @return float The result of operation
     */
    private function multiply( float $operatorA, float $operatorB): float
    {
        $result = ( $operatorA * $operatorB );
        return $result;
    }
}