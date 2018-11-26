<?php
/**
 * Gestion de poneys
 */

include_once 'NegativePoneysException.php';
class Poneys
{
    private $_count = 8;

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        $this->_count -= $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */

    public function addPoneyFromField(int $number): void
    {
        $this->_count += $number;
    }

    /**
     * Retire des poneys du champ
     *
     * @param int[] $number tableau des Nombres des poneys à retirer
     *
     * @return void
     */
    public function removePoneysFromField(int $number): void
    {

        if($this->_count - $number < 0)
            throw new NegativePoneysCountException(); 
        else
            $this->_count -= $number;
    }
    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }
}
?>
