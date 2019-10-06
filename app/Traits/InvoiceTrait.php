<?php


namespace App\Traits;


trait InvoiceTrait
{
    private $invoiceParameters;

    /**
     * Create a new event instance.
     *
     * @param $apiToken
     * @param $invoiceParameters
     */
    public function __construct($apiToken, $invoiceParameters = [])
    {
        parent::__construct($apiToken);
        $this->invoiceParameters = $invoiceParameters;
    }

    public function getInvoiceParameters()
    {
        return [
            "name" => $this->getInvoiceName(),
            "description" => $this->getInvoiceDescription(),
            "amount" => $this->getInvoiceAmount(),
            "groupId" => $this->getInvoiceGroupId(),
        ];
    }

    public function getInvoiceId()
    {
        return (isset($this->invoiceParameters["id"])) ? $this->invoiceParameters["id"] : false;
    }

    public function getInvoiceName()
    {
        return (isset($this->invoiceParameters["name"])) ? $this->invoiceParameters["name"] : "";
    }

    public function getInvoiceDescription()
    {
        return (isset($this->invoiceParameters["description"])) ? $this->invoiceParameters["description"] : "";
    }

    public function getInvoiceAmount()
    {
        return (isset($this->invoiceParameters["amount"])) ? $this->invoiceParameters["amount"] : 0;
    }

    public function getInvoiceGroupId()
    {
        return (isset($this->invoiceParameters["groupId"])) ? $this->invoiceParameters["groupId"] : false;
    }

    public function getInvoiceGroup()
    {
        $group = $this->getUser()->groups()->where("id", "=", $this->getInvoiceGroupId())->first();

        if ($group)
            return $group;
        else
            throw new \Exception("Group hasn`t been found");
    }
}
