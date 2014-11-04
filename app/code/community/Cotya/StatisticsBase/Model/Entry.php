<?php


/**
 * @method string getWhen()
 * @method Melovely_Newsletter_Model_Subscriber setWhen(string $value)
 * @method string getType()
 * @method Melovely_Newsletter_Model_Subscriber setType(string $value)
 * @method string getValue()
 * @method Melovely_Newsletter_Model_Subscriber setValue(string $value)
 */
class Cotya_StatisticsBase_Model_Entry extends Mage_Core_Model_Abstract
{

    protected function _construct()
    {
        $this->_init('cotya_statisticsbase/entry');
    }

}