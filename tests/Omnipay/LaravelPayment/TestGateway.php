<?php

/*
 * This file is part of the hinet/laravel-payment.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Omnipay\LaravelPayment;

use Omnipay\Common\AbstractGateway;

/**
 * Class TestGateway.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @method \Omnipay\Common\Message\RequestInterface authorize(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface capture(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface purchase(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface completePurchase(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface refund(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface void(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface createCard(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = [])
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = [])
 */
class TestGateway extends AbstractGateway
{
    /**
     * Get gateway display name.
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'LaravelPayment_Test';
    }

    public function setUsername($username)
    {
        $this->setParameter('username', $username);
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }
}
