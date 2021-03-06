<?php

namespace OndrejBrejla\Eciovni;

/**
 * DataImpl - part of Eciovni plugin for Nette Framework.
 *
 * @copyright  Copyright (c) 2009 Ondřej Brejla
 * @license    New BSD License
 * @link       http://github.com/OndrejBrejla/Eciovni
 */
class DataImpl implements Data {

  /** @var string */
  private $title;

  /** @var string */
  private $caption;

  /** @var string */
  private $signatureText;

  /** @var string */
  private $signatureImgSrc;

  /** @var string */
  private $id;

  /** @var Participant */
  private $supplier;

  /** @var Participant */
  private $customer;

  /** @var int */
  private $variableSymbol = 0;

  /** @var int */
  private $constantSymbol = 0;

  /** @var int */
  private $specificSymbol = 0;

  /** @var string */
  private $expirationDate;

  /** @var string */
  private $dateOfIssuance;

  /** @var string */
  private $dateOfVatRevenueRecognition;

  /** @var Item[] */
  private $items = array();

  /** @var string */
  private $bankAccount;

  /** @var string */
  private $bankIban;

  /** @var string */
  private $bankName;

  /** @var string */
  private $bankSwift;

  /** @var string */
  private $paymentMethod;

  /** @var string */
  private $supplierText;

  /** @var string */
  private $supplierLogoImgSrc;

  public function __construct(DataBuilder $dataBuilder) {
    $this->title = $dataBuilder->getTitle();
    $this->caption = $dataBuilder->getCaption();
    $this->signatureText = $dataBuilder->getSignatureText();
    $this->signatureImgSrc = $dataBuilder->getSignatureImgSrc();
    $this->bankAccount = $dataBuilder->getBankAccount();
    $this->bankName = $dataBuilder->getBankName();
    $this->bankIban = $dataBuilder->getBankIban();
    $this->bankSwift = $dataBuilder->getBankSwift();
    $this->paymentMethod = $dataBuilder->getPaymentMethod();
    $this->supplierText = $dataBuilder->getSupplierText();
    $this->supplierLogoImgSrc = $dataBuilder->getSupplierLogoImgSrc();
    $this->id = $dataBuilder->getId();
    $this->supplier = $dataBuilder->getSupplier();
    $this->customer = $dataBuilder->getCustomer();
    $this->variableSymbol = $dataBuilder->getVariableSymbol();
    $this->constantSymbol = $dataBuilder->getConstantSymbol();
    $this->specificSymbol = $dataBuilder->getSpecificSymbol();
    $this->expirationDate = $dataBuilder->getExpirationDate();
    $this->dateOfIssuance = $dataBuilder->getDateOfIssuance();
    $this->dateOfVatRevenueRecognition = $dataBuilder->getDateOfVatRevenueRecognition();
    $this->items = $dataBuilder->getItems();
  }

  /**
   * Returns the invoice title.
   *
   * @return string
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @return string|null
   */
  public function getCaption() {
    return $this->caption;
  }

  /**
   * @return string|null
   */
  public function getSignatureText() {
    return $this->signatureText;
  }

  /**
   * Signature image
   * 
   * @return string
   */
  public function getSignatureImgSrc() {
    return $this->signatureImgSrc;
  }

  /**
   * Returns the invoice id.
   *
   * @return string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Returns the invoice supplier.
   *
   * @return Participant
   */
  public function getSupplier() {
    return $this->supplier;
  }

  /**
   * Returns the invoice customer.
   *
   * @return Participant
   */
  public function getCustomer() {
    return $this->customer;
  }

  /**
   * Returns the variable symbol.
   *
   * @return int
   */
  public function getVariableSymbol() {
    return $this->variableSymbol;
  }

  /**
   * Returns the constant symbol.
   *
   * @return int
   */
  public function getConstantSymbol() {
    return $this->constantSymbol;
  }

  /**
   * Returns the specific symbol.
   *
   * @return int
   */
  public function getSpecificSymbol() {
    return $this->specificSymbol;
  }

  /**
   * Returns the expiration date in defined format.
   *
   * @return string
   */
  public function getExpirationDate() {
    return $this->expirationDate;
  }

  /**
   * Returns the date of issuance in defined format.
   *
   * @return string
   */
  public function getDateOfIssuance() {
    return $this->dateOfIssuance;
  }

  /**
   * Returns the date of VAT revenue recognition in defined format.
   *
   * @return string
   */
  public function getDateOfVatRevenueRecognition() {
    return $this->dateOfVatRevenueRecognition;
  }

  /**
   * Returns the array of items.
   *
   * @return Item[]
   */
  public function getItems() {
    return $this->items;
  }

  /**
   * Returns the bank account
   * 
   * @return string|null
   */
  public function getBankAccount() {
    return $this->bankAccount;
  }

  /**
   * Returns the bank IBAN
   * 
   * @return string|null
   */
  public function getBankIban() {
    return $this->bankIban;
  }

  /**
   * Return the bank name
   * 
   * @return string|null
   */
  public function getBankName() {
    return $this->bankName;
  }

  /**
   * Returns the bank SWIFT
   * 
   * @return string|null
   */
  public function getBankSwift() {
    return $this->bankSwift;
  }

  /**
   * Returns the payment method
   * 
   * @return string|null
   */
  public function getPaymentMethod() {
    return $this->paymentMethod;
  }

  /**
   * Return the supplier text
   * 
   * @return string|null
   */
  public function getSupplierText() {
    return $this->supplierText;
  }

  /**
   * Return the supplier logo image
   *
   * @return string|null
   */
  public function getSupplierLogoImgSrc() {
    return $this->supplierLogoImgSrc;
  }

}
