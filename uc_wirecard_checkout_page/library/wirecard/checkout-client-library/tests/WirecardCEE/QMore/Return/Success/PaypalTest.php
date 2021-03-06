<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Wirecard Central Eastern Europe GmbH
 * (abbreviated to Wirecard CEE) and are explicitly not part of the Wirecard CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Wirecard CEE does not guarantee their full
 * functionality neither does Wirecard CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Wirecard CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

/**
 * Test class for WirecardCEE_Client_QMore_Return_Success_Paypal.
 * Generated by PHPUnit on 2011-06-24 at 13:26:05.
 */
class WirecardCEE_QMore_Return_Success_PaypalTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var WirecardCEE_QMore_Return_Success_PayPal
     */
    protected $object;
    protected $_returnData = Array(
        'amount'                    => '1',
        'currency'                  => 'EUR',
        'paymentType'               => 'PAYPAL',
        'financialInstitution'      => 'PayPal',
        'language'                  => 'de',
        'orderNumber'               => '16727331',
        'paymentState'              => 'SUCCESS',
        'paypalPayerID'             => 'PAYER123456ID',
        'paypalPayerEmail'          => 'buyer@paypal.com',
        'paypalPayerFirstName'      => 'Test',
        'paypalPayerLastName'       => 'Consumer',
        'paypalPayerAddressName'    => 'Consumer Test',
        'paypalPayerAddressCountry' => 'US',
        'paypalPayerAddressCity'    => 'New York',
        'paypalPayerAddressState'   => 'NY',
        'paypalPayerAddressStreet1' => 'Park Row',
        'paypalPayerAddressStreet2' => '2',
        'paypalPayerAddressZIP'     => '10038',
        'gatewayReferenceNumber'    => 'DGW_16727331_RN',
        'gatewayContractNumber'     => 'DemoContractNumber123',
        'avsResponseCode'           => 'X',
        'avsResponseMessage'        => 'Demo AVS ResultMessage',
        'responseFingerprintOrder'  => 'amount,currency,paymentType,financialInstitution,language,orderNumber,paymentState,paypalPayerID,paypalPayerEmail,paypalPayerLastName,paypalPayerFirstName,paypalPayerAddressName,paypalPayerAddressCountry,paypalPayerAddressCity,paypalPayerAddressState,paypalPayerAddressStreet1,paypalPayerAddressStreet2,paypalPayerAddressZIP,gatewayReferenceNumber,gatewayContractNumber,avsResponseCode,avsResponseMessage,secret,responseFingerprintOrder',
        'responseFingerprint'       => '0f1782894fdcd747255aa6fa2f47189913d2fa727e5d515f84b63dff01b1dc532545378e3a7a87fc93c81813b5f90380ddca4160af853f2ff2076df091543f72'
    );

    protected $_secret = 'B8AKTPWBRMNBV455FG6M2DANE99WU2';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

        $this->object = new WirecardCEE_QMore_Return_Success_PayPal($this->_returnData, $this->_secret);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    public function testGetPayerID()
    {
        $this->assertEquals('PAYER123456ID', $this->object->getPayerID());
    }

    public function testGetPayerEmail()
    {
        $this->assertEquals('buyer@paypal.com', $this->object->getPayerEmail());
    }

    public function testGetPayerLastName()
    {
        $this->assertEquals('Consumer', $this->object->getPayerLastName());
    }

    public function testGetPayerFirstName()
    {
        $this->assertEquals('Test', $this->object->getPayerFirstName());
    }

    public function testGetPayerAddressName()
    {
        $this->assertEquals('Consumer Test', $this->object->getPayerAddressName());
    }

    public function testGetPayerAddressCountry()
    {
        $this->assertEquals('US', $this->object->getPayerAddressCountry());
    }

    public function testGetPayerAddressCity()
    {
        $this->assertEquals('New York', $this->object->getPayerAddressCity());
    }

    public function testGetPayerAddressState()
    {
        $this->assertEquals('NY', $this->object->getPayerAddressState());
    }

    public function testGetPayerAddressStreet1()
    {
        $this->assertEquals('Park Row', $this->object->getPayerAddressStreet1());
    }

    public function testGetPayerAddressStreet2()
    {
        $this->assertEquals('2', $this->object->getPayerAddressStreet2());
    }

    public function testGetPayerAddressZip()
    {
        $this->assertEquals('10038', $this->object->getPayerAddressZip());
    }

    public function testValidate()
    {
        $this->assertTrue($this->object->validate());
    }
}

?>
