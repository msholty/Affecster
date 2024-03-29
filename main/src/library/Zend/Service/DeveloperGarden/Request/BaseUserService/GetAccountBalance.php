<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Service
 * @subpackage DeveloperGarden
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: //p4-wdpro/Projects/NGE/Shared/zend-framework/1.11.7/src/Zend/Service/DeveloperGarden/Request/BaseUserService/GetAccountBalance.php#1 $
 */

/**
 * @category   Zend
 * @package    Zend_Service
 * @subpackage DeveloperGarden
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @author     Marco Kaiser
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Service_DeveloperGarden_Request_BaseUserService_GetAccountBalance
{
    /**
     * array of accounts
     *
     * @var array
     */
    public $Account = array();

    /**
     * constructor give them the account ids or an empty array
     *
     * @param array $Account
     * @return Zend_Service_DeveloperGarden_Request_GetAccountBalance
     */
    public function __construct(array $Account = array())
    {
        $this->setAccount($Account);
    }

    /**
     * sets a new Account array
     *
     * @param array $Account
     * @return Zend_Service_DeveloperGarden_Request_BaseUserService
     */
    public function setAccount(array $Account = array())
    {
        $this->Account = $Account;
        return $this;
    }

    /**
     * returns the moduleId
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->Account;
    }
}
