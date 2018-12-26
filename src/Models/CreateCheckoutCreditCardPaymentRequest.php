<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Checkout card payment request
 */
class CreateCheckoutCreditCardPaymentRequest implements JsonSerializable
{
    /**
     * Card invoice text descriptor
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Payment installment options
     * @var \MundiAPILib\Models\CreateCheckoutCardInstallmentOptionRequest[]|null $installments public property
     */
    public $installments;

    /**
     * Creates payment authentication
     * @var \MundiAPILib\Models\CreatePaymentAuthenticationRequest|null $authentication public property
     */
    public $authentication;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                             $statementDescriptor Initialization value for $this-
     *                                                                  >statementDescriptor
     * @param array                              $installments        Initialization value for $this->installments
     * @param CreatePaymentAuthenticationRequest $authentication      Initialization value for $this->authentication
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->installments        = func_get_arg(1);
            $this->authentication      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['installments']         = $this->installments;
        $json['authentication']       = $this->authentication;

        return $json;
    }
}