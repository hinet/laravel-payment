<?php

/*
 * This file is part of the hinet/laravel-payment.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hinet\LaravelPayment\Tests;

use Omnipay\Common\GatewayInterface;
use Hinet\LaravelPayment\Factory;

/**
 * Class FactoryTest.
 *
 * @author overtrue <i@overtrue.me>
 */
class FactoryTest extends TestCase
{
    public function testMake()
    {
        $gateway = Factory::make('LaravelPayment_Test', []);

        $this->assertInstanceOf(GatewayInterface::class, $gateway);
        $this->assertEmpty($gateway->getParameters());

        // snake case
        $gateway = Factory::make('LaravelPayment_Test', [
            'test_mode' => true,
            'username' => 'hinet',
        ]);

        $this->assertSame([
            'testMode' => true,
            'username' => 'hinet',
        ], $gateway->getParameters());

        // snake case
        $gateway = Factory::make('LaravelPayment_Test', [
            'testMode' => true,
        ]);

        $this->assertSame(['testMode' => true], $gateway->getParameters());
    }
}
