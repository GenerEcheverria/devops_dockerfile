<?php

namespace Tests\Unit;

use App\Http\Controllers\AlumnoController;
use Iluminate\Foundation\Testing\WithFaker;
use Iluminate\Foundation\Testing\RefreshDataBase;
use Tests\TestCase;

class AlumnoControllerTest extends TestCase
{

    public function testIndex()
    {
        $alumnoControllerMock = $this->getMockBuilder(AlumnoController::class)->onlyMethods(['index'])->getMock();

        $alumnoControllerMock->expects($this->once())->method('index');

        $alumnoControllerMock->getIndex();   
    }
}
