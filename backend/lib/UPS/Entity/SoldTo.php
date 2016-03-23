<?php

namespace Ups\Entity;

use DOMDocument;
use DOMElement;
use Ups\NodeInterface;

class SoldTo implements NodeInterface
{
    /** @deprecated */
    public $LocationID;
    /** @deprecated */
    public $ReceivingAddressName;
    /** @deprecated */
    public $Bookmark;
    /** @deprecated */
    public $ShipperAssignedIdentificationNumber;
    /** @deprecated */
    public $CompanyName;
    /** @deprecated */
    public $AttentionName;
    /** @deprecated */
    public $PhoneNumber;
    /** @deprecated */
    public $TaxIdentificationNumber;
    /** @deprecated */
    public $FaxNumber;
    /** @deprecated */
    public $EMailAddress;
    /** @deprecated */
    public $Address;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $receivingAddressName;

    /**
     * @var string
     */
    private $bookmark;

    /**
     * @var string
     */
    private $shipperAssignedIdentificationNumber;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $attentionName;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $taxIdentificationNumber;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var Address
     */
    private $address;

    /**
     * @var string
     */
    private $option;

    /**
     * @param null|object $attributes
     */
    public function __construct($attributes = null)
    {
        $this->address = new Address();

        if (null != $attributes) {
            if (isset($attributes->LocationID)) {
                $this->setLocationId($attributes->LocationID);
            }
            if (isset($attributes->ReceivingAddressName)) {
                $this->setReceivingAddressName($attributes->ReceivingAddressName);
            }
            if (isset($attributes->Bookmark)) {
                $this->setBookmark($attributes->Bookmark);
            }
            if (isset($attributes->ShipperAssignedIdentificationNumber)) {
                $this->setShipperAssignedIdentificationNumber($attributes->ShipperAssignedIdentificationNumber);
            }
            if (isset($attributes->CompanyName)) {
                $this->setCompanyName($attributes->CompanyName);
            }
            if (isset($attributes->AttentionName)) {
                $this->setAttentionName($attributes->AttentionName);
            }
            if (isset($attributes->PhoneNumber)) {
                $this->setPhoneNumber($attributes->PhoneNumber);
            }
            if (isset($attributes->TaxIdentificationNumber)) {
                $this->setTaxIdentificationNumber($attributes->TaxIdentificationNumber);
            }
            if (isset($attributes->FaxNumber)) {
                $this->setFaxNumber($attributes->FaxNumber);
            }
            if (isset($attributes->EMailAddress)) {
                $this->setEmailAddress($attributes->EMailAddress);
            }
            if (isset($attributes->Address)) {
                $this->setAddress(new Address($attributes->Address));
            }
            if (isset($attributes->Option)) {
                $this->setOption($attributes->Option);
            }
        }
    }

    /**
     * @param null|DOMDocument $document
     *
     * @return DOMElement
     */
    public function toNode(DOMDocument $document = null)
    {
        if (null === $document) {
            $document = new DOMDocument();
        }

        $node = $document->createElement('ShipTo');
        $node->appendChild($document->createElement('CompanyName', $this->getCompanyName()));
        $node->appendChild($document->createElement('AttentionName', $this->getAttentionName()));

        $address = $this->getAddress();
        if (isset($address)) {
            $node->appendChild($address->toNode($document));
        }

        return $node;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return SoldTo
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttentionName()
    {
        return $this->attentionName;
    }

    /**
     * @param string $attentionName
     *
     * @return SoldTo
     */
    public function setAttentionName($attentionName)
    {
        $this->AttentionName = $attentionName;
        $this->attentionName = $attentionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookmark()
    {
        return $this->bookmark;
    }

    /**
     * @param string $bookmark
     *
     * @return SoldTo
     */
    public function setBookmark($bookmark)
    {
        $this->Bookmark = $bookmark;
        $this->bookmark = $bookmark;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return SoldTo
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     *
     * @return SoldTo
     */
    public function setEmailAddress($emailAddress)
    {
        $this->EMailAddress = $emailAddress;
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     *
     * @return SoldTo
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param string $locationId
     *
     * @return SoldTo
     */
    public function setLocationId($locationId)
    {
        $this->LocationID = $locationId;
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     *
     * @return SoldTo
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceivingAddressName()
    {
        return $this->receivingAddressName;
    }

    /**
     * @param string $receivingAddressName
     *
     * @return SoldTo
     */
    public function setReceivingAddressName($receivingAddressName)
    {
        $this->ReceivingAddressName = $receivingAddressName;
        $this->receivingAddressName = $receivingAddressName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipperAssignedIdentificationNumber()
    {
        return $this->shipperAssignedIdentificationNumber;
    }

    /**
     * @param string $shipperAssignedIdentificationNumber
     *
     * @return SoldTo
     */
    public function setShipperAssignedIdentificationNumber($shipperAssignedIdentificationNumber)
    {
        $this->ShipperAssignedIdentificationNumber = $shipperAssignedIdentificationNumber;
        $this->shipperAssignedIdentificationNumber = $shipperAssignedIdentificationNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->taxIdentificationNumber;
    }

    /**
     * @param string $taxIdentificationNumber
     *
     * @return SoldTo
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        $this->TaxIdentificationNumber = $taxIdentificationNumber;
        $this->taxIdentificationNumber = $taxIdentificationNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     *
     * @return SoldTo
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }
}
