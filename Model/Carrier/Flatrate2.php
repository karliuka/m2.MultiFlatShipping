<?php
/**
 * Copyright © 2011-2017 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\MultiFlatShipping\Model\Carrier;

use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Shipping\Model\Rate\Result;

/**
 * Flat rate shipping model
 */
class Flatrate2 
	extends \Faonni\MultiFlatShipping\Model\Carrier\FlatrateAbstract
{
    /**
     * @var string
     */
    protected $_code = 'flatrate2';
}
