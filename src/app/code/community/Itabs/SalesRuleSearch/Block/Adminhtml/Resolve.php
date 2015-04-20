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
 * Class Itabs_SalesRuleSearch_Block_Adminhtml_Resolve
 */
class Itabs_SalesRuleSearch_Block_Adminhtml_Resolve extends Mage_Adminhtml_Block_Template
{
    /**
     * Set the template
     */
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('itabs/salesrulesearch/resolve.phtml');
    }

    /**
     * Retrieve the form action url
     *
     * @return string
     */
    public function getFormActionUrl()
    {
        return $this->getUrl('*/salesrulesearch/resolve');
    }
}
