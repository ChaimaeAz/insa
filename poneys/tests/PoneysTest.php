<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());
    }

    /**
     * tester l'ajout d'un poney function
     *
     * @return void
     */

    public function testAddPoneyFromField()
    {

        $Poneys = new Poneys();

        $Poneys->addPoneyFromField(3);

        $this->assertEquals(11, $Poneys->getCount());
    }

    /**
     * Exception test  function
     *
     * @return void
     */

    public function testRemovePoneyFromFieldExcetption(){

        $this->expectException(NegativePoneysException::class);

        $Poneys = new Poneys();

        $Poneys->removePoneysFromField(24);
    }
}
?>














