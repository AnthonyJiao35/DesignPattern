<?php

require_once 'strategie.php';

$paypal = new PaypalPayment("email@exemple.com", "password");
$creditCard = new CreditCardPayment("1234567890123456", "12/22", "123");

$paymentProcessor = new PaymentProcessor($paypal); // Ou $creditCard pour payer par carte de crédit
$paymentProcessor->processPayment(100.0);