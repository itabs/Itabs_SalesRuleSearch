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
 * Class Itabs_SalesRuleSearch_Adminhtml_SalesrulesearchController
 */
class Itabs_SalesRuleSearch_Adminhtml_SalesrulesearchController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Resolve the posted coupon code and redirect to salesrule if applicable
     */
    public function resolveAction()
    {
        if ($this->getRequest()->isPost()) {
            $couponCode = trim($this->getRequest()->getPost('coupon_code'));
            if ($couponCode) {
                /* @var $resolver Itabs_SalesRuleSearch_Model_Resolver */
                $resolver = Mage::getModel('itabs_salesrulesearch/resolver');
                $ruleId = $resolver->resolve($couponCode);
                if ($ruleId) {
                    $this->_redirect('*/promo_quote/edit', array('id' => $ruleId));

                    return;
                } else {
                    $this->_getSession()->addError($this->__('There is no salesrule for the given coupon code.'));
                }
            } else {
                $this->_getSession()->addError($this->__('Please enter a coupon code.'));
            }
        }

        $this->_redirect('*/promo_quote');
    }
}
