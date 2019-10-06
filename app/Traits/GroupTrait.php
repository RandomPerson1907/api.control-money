<?php


namespace App\Traits;


trait GroupTrait
{
    private $groupParameters;
    private $groups;

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
            "groupsIds" => $this->getGroupsIds()
        ];
    }

    public function getGroupId()
    {
        return (isset($this->groupParameters["id"])) ? $this->groupParameters["id"] : false;
    }

    public function getGroupName()
    {
        return (isset($this->groupParameters["name"])) ? $this->groupParameters["name"] : false;
    }

    public function getGroupDescription()
    {
        return (isset($this->groupParameters["description"])) ? $this->groupParameters["description"] : "";
    }

    public function getGroupsIds()
    {
        return (isset($this->groupParameters["groups"])) ? $this->groupParameters["groups"] : [];
    }
}
