<?php
/**
 * This file is part of the Itabs_SalesRuleSearch module.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP version 5
 *
 * @category  Itabs
 * @package   Itabs_SalesRuleSearch
 * @author    ITABS GmbH <info@itabs.de>
 * @copyright 2015 ITABS GmbH (http://www.itabs.de)
 */

/**
 * Class Itabs_SalesRuleSearch_Model_Resolver
 */
class Itabs_SalesRuleSearch_Model_Resolver
{
    /**
     * Try to fetch the corresponding rule id for the given coupon code
     *
     * @param  string $couponCode Coupon Code
     * @return bool|string
     */
    public function resolve($couponCode)
    {
        $resource = Mage::getSingleton('core/resource');
        $adapter = $resource->getConnection('core_read');
        $table = $resource->getTableName('salesrule/coupon');

        try {
            $select = $adapter->select()
                ->from($table, array('rule_id'))
                ->where('code = ?', $couponCode);
            $result = $adapter->fetchOne($select);
        } catch (Exception $e) {
            $result = false;
        }

        return $result;
    }
}
