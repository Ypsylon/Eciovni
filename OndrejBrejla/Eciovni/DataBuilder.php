<?php

namespace OndrejBrejla\Eciovni;

use DateTime;

/**
 * DataBuilder - part of Eciovni plugin for Nette Framework.
 *
 * @copyright  Copyright (c) 2009 Ondřej Brejla
 * @license    New BSD License
 * @link       http://github.com/OndrejBrejla/Eciovni
 */
class DataBuilder {

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

  public function __construct($id, $title, Participant $supplier, Participant $customer, $expirationDate, $dateOfIssuance, array $items) {
    $this->id = $id;
    $this->title = $title;
    $this->supplier = $supplier;
    $this->customer = $customer;
    $this->expirationDate = $expirationDate;
    $this->dateOfIssuance = $dateOfIssuance;
    $this->addItems($items);
  }

  /**
   * @return string|null
   */
  public function getCaption() {
    return $this->caption;
  }

  public function setCaption(string $caption) {
    $this->caption = $caption;
  }

  /**
   * @return string|null
   */
  public function getSignatureText() {
    return $this->signatureText;
  }

  public function setSignatureText(string $signatureText) {
    $this->signatureText = $signatureText;
    return $this;
  }

  /**
   * @return string|null
   */
  public function getSignatureImgSrc() {
    return $this->signatureImgSrc;
  }

  public function setSignatureImgSrc(string $signatureImgSrc) {
    $this->signatureImgSrc = $signatureImgSrc;
    return $this;
  }

  /**
   * Adds array of items to the invoice.
   *
   * @param Item[] $items
   * @return void
   */
  private function addItems($items) {
    foreach ($items as $item) {
      $this->addItem($item);
    }
  }

  /**
   * Adds an item to the invoice.
   *
   * @param Item $item
   * @return void
   */
  private function addItem(Item $item) {
    $this->items[] = $item;
  }

  /**
   * Sets the variable symbol.
   *
   * @param int $variableSymbol
   * @return DataBuilder
   */
  public function setVariableSymbol($variableSymbol) {
    $this->variableSymbol = $variableSymbol;
    return $this;
  }

  /**
   * Sets the constant symbol.
   *
   * @param int $constantSymbol
   * @return DataBuilder
   */
  public function setConstantSymbol($constantSymbol) {
    $this->constantSymbol = $constantSymbol;
    return $this;
  }

  /**
   * Sets the specific symbol.
   *
   * @param int $specificSymbol
   * @return DataBuilder
   */
  public function setSpecificSymbol($specificSymbol) {
    $this->specificSymbol = $specificSymbol;
    return $this;
  }

  /**
   * Sets the date of VAT revenue recognition.
   *
   * @param string $dateOfTaxablePayment
   * @return DataBuilder
   */
  public function setDateOfVatRevenueRecognition($dateOfTaxablePayment) {
    $this->dateOfVatRevenueRecognition = $dateOfTaxablePayment;
    return $this;
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
   * Returns new Data.
   *
   * @return Data
   */
  public function build() {
    return new DataImpl($this);
  }

}
