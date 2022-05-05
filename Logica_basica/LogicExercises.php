<?php

namespace Exercises;

class LogicExercises
{
    public function question1($nFactorial)
    {
        $this->statementQuestion(1, 'Fatorial');

        if($nFactorial < 0 || gettype($nFactorial) !== 'integer') {
            echo "[Error] Informe um valor inteiro positivo!" .PHP_EOL;
            return;
        }

        $factorial = $nFactorial;
        for($i = ($nFactorial - 1); $i > 0; $i--) {
            $factorial *= $i;
        }
        echo "$nFactorial! = $factorial" .PHP_EOL;
    }

    public function question2($arrayNums)
    {
        $this->statementQuestion(2, 'Soma dos maiores');
        if($this->arrayCountValidity($arrayNums, 4)) return;

        rsort($arrayNums);
        $sum = $arrayNums[0] + $arrayNums[1];
        echo "A soma dos dois maiores números informados é: $sum" .PHP_EOL;
    }

    public function question3($number)
    {
        $this->statementQuestion(3, 'Positivo, negativou ou Zero');

        $resp = '0 (ZERO)';
        if($number < 0) $resp = 'NEGATIVO';
        if ($number > 0) $resp = 'POSITIVO';
        echo "O número informado é $resp!" .PHP_EOL;
    }

    public function question4($arrayNums)
    {
        $this->statementQuestion(4, 'Média dos números');
        if($this->arrayCountValidity($arrayNums, 4)) return;

        $media = array_reduce($arrayNums, function ($acc, $curr){
            return $acc + $curr;
        }, 0) / count($arrayNums);

        echo "A média dos valores é: $media" .PHP_EOL;
    }

    public function question5($dividend, $divider)
    {
        $this->statementQuestion(5, 'Quociente e resto da divisão');

        if($divider === 0) {
            echo "[Error] O divisor não pode ser 0 (zero)!" .PHP_EOL;
            return;
        }

        $quotient = intval($dividend / $divider);
        $rest = $dividend % $divider;
        echo "O quociente inteiro dos números informados é: $quotient" .PHP_EOL;
        echo "O resto inteiro dos números informados é: $rest" .PHP_EOL;


    }

    public function question6($numberInt)
    {
        $this->statementQuestion(6, 'Palindrome');

        $numberString = strval($numberInt);
        $palindrome = strrev($numberString);
        echo "O palindrome do número $numberInt é: $palindrome" .PHP_EOL;
    }

    public function question7($numberInt)
    {
        $this->statementQuestion(6, 'Módulo de um número');

        echo "O módulo do número é: " . abs($numberInt) .PHP_EOL;
    }

    public function question8($numberInt)
    {
        $this->statementQuestion(8, 'Par ou ímpar');

        if(gettype($numberInt) !== 'integer') {
            echo "[Error] Informe um número inteiro válido!" .PHP_EOL;
            return;
        }

        $evenOrOdd = $numberInt % 2 === 0 ? 'PAR' : 'ÍMPAR';
        echo "O número informado é $evenOrOdd." .PHP_EOL;
    }

    public function question9($arrayNums)
    {
        $this->statementQuestion(9, 'Maior número');
        if($this->arrayCountValidity($arrayNums, 3)) return;

        rsort($arrayNums);
        echo "O maior número dentre os informados é: $arrayNums[0]" .PHP_EOL;
    }

    public function question10($numMonth)
    {
        $this->statementQuestion(10, 'Datas');

        if($numMonth <= 0 || $numMonth > 12 || gettype($numMonth) !== 'integer') {
            echo "[Error] Informe um valor de 1 a 12 correspondente aos meses do ano!" .PHP_EOL;
            return;
        }

        $this->dateConfig();
        $month = mktime(0, 0, 0, $numMonth);
        $lastDay = mktime(0, 0, 0, $numMonth+1, 0);
        echo strftime("O número informado equivale ao mês de %B.", $month) .PHP_EOL;
        echo strftime("Seu último dia é %d.", $lastDay);
    }

    public function question11($letter)
    {
        $this->statementQuestion(11, 'Consoante ou vogal');

        if(strlen($letter) > 1) {
            echo "[Error] Informe apenas uma letra!" .PHP_EOL;
            return;
        }

        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $consonantOrVowel = in_array($letter, $vowels) ? 'VOGAL' : 'CONSOANTE';
        echo "A letra informada é uma $consonantOrVowel." .PHP_EOL;
    }

    public function question12($year)
    {
        $this->statementQuestion(12, 'Anos bissextos');

        $isLeapYear = "O ano é bissexto (tem 366 dias)." .PHP_EOL;
        $isNotLeapYear = "O ano não é um ano bissexto (tem 365 dias)." .PHP_EOL;

        if($year % 4 !== 0) {
            echo $isNotLeapYear;
            return;
        }

        if($year % 100 !== 0 ) {
            echo $isLeapYear;
            return;
        }

        if($year % 400 !== 0 ) {
            echo $isNotLeapYear;
            return;
        }

        echo $isLeapYear;

    }

    public function question13()
    {
        $this->statementQuestion(13, 'Todos os números pares');

        for($i = 1; $i <= 100; $i++){
            if($i % 2 === 0) {
                echo $i . "\t";
            }
        }
    }

    public function question14()
    {
        $this->statementQuestion(14, 'Todos os números e a soma');

        $sum = 0;
        for($i = 1; $i <= 100; $i++) {
            echo $i . "\t";
            $sum += $i;
        }
        echo PHP_EOL . "A soma dos números de 1 a 100 é: $sum" .PHP_EOL;
    }

    public function question15($nthTerm)
    {
        $this->statementQuestion(15, 'Sequência Fibonacci');

        if($nthTerm <= 0) {
            echo "[Error] Informe um número inteiro maior que 0 (zero)!" .PHP_EOL;
            return;
        }

        $outputMsg = "A sequência Fibonacci de n$nthTerm = ";
        if($nthTerm === 1) {
            echo $outputMsg . "1" .PHP_EOL;
            return;
        }

        if ($nthTerm === 2) {
            echo $outputMsg . "1, 1" .PHP_EOL;
            return;
        }

        $fibonacci = [1, 1];
        for($i = 0; $i < $nthTerm - 2; $i++) {

            $num = $fibonacci[$i] + $fibonacci[$i+1];
            $fibonacci[$i+2] = $num;
        }
        echo $outputMsg;
        foreach($fibonacci as $num){
            echo $num . ", ";
        }
    }
    
    // Auxiliary functions
    private function statementQuestion($numberQuestion, $title)
    {
        echo "*** Questão $numberQuestion - $title ***" .PHP_EOL;
    }

    private function dateConfig()
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    }

    private function arrayCountValidity($array, $numElements){
        if(count($array) < $numElements) {
            echo "[Error] Informe ao menos $numElements valores!" .PHP_EOL;
            return true;
        }
    }
}

