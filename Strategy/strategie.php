<?php

interface PaymentMethod {
    public function processPayment($amount);
}

class PaypalPayment implements PaymentMethod {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function processPayment($amount) {
        // Code pour traiter le paiement via Paypal
    }
}

class CreditCardPayment implements PaymentMethod {
    private $cardNumber;
    private $expirationDate;
    private $cvv;

    public function __construct($cardNumber, $expirationDate, $cvv) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }

    public function processPayment($amount) {
        // Code pour traiter le paiement par carte de crédit
    }
}

class PaymentProcessor {
    private $paymentMethod;

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment($amount) {
        $this->paymentMethod->processPayment($amount);
    }
}