<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\MultiFlatShipping\Model\Carrier;

use Magento\Quote\Model\Quote\Address\RateRequest;
use Magento\Shipping\Model\Rate\Result;
use Faonni\MultiFlatShipping\Model\Carrier\FlatrateAbstract;

/**
 * Flat Rate
 */
class Flatrate3 extends FlatrateAbstract
{
    /**
     * Carrier's code
     *
     * @var string
     */
    protected $_code = 'flatrate3';
}
