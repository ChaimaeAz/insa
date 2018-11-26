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
        foreach ($number as $value) 
        {
            if($this->_count >= 0)
            {
                $this->_count -= $value;

            }
            else
            {
               throw new NegativePoneysException(); 
;
               
            }
        }
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
