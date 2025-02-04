<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    // Teste para soma de números
    public function testSoma()
    {
        // Ação: somar dois números
        $resultado = 2 + 3;

        // Verificação: o resultado da soma deve ser 5
        $this->assertEquals(2, $resultado, 'A soma de 2 + 3 deveria ser 5');
    }

    // Teste para multiplicação de números
    public function testMultiplicacao()
    {
        // Ação: multiplicar dois números
        $resultado = 2 * 4;

        // Verificação: o resultado da multiplicação deve ser 8
        $this->assertEquals(8, $resultado, 'A multiplicação de 2 * 4 deveria ser 8');
    }
}
