<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;


use App\Cron\BuscarDocumentos;

class BuscarDocumentosTest extends TestCase
{
    public function testExecute()
    {
        $buscarDocumentos = new BuscarDocumentos();

        // Ejecutar la lógica que deseas probar
        $result = $buscarDocumentos->execute();

        // Realizar afirmaciones para verificar el resultado
        $this->assertTrue($result); // Por ejemplo, verifica si el resultado es verdadero
    }
}