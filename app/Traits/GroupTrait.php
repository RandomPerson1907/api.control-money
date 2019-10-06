<?php


namespace App\Traits;


trait GroupTrait
{
    private $groupParameters;

    /**
     * Create a new event instance.
     *
     * @param $apiToken
     * @param $groupParameters
     */
    public function __construct($apiToken, $groupParameters)
    {
        parent::__construct($apiToken);
        $this->groupParameters = $groupParameters;
    }

    public function getGroupParameters()
    {
        return [
            "name" => $this->getGroupName(),
            "description" => $this->getGroupDescription(),
        ];
    }

    public function getGroupId()
    {
        return (isset($this->groupParameters["id"])) ? $this->groupParameters["id"] : false;
    }

    public function getGroupName()
    {
        return $this->groupParameters["name"];
    }

    public function getGroupDescription()
    {
        return (isset($this->groupParameters["description"])) ? $this->groupParameters["description"] : "";
    }
}
