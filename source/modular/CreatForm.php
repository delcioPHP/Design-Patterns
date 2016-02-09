<?php


namespace source\modular;


class CreatForm
{
    private $action;
    private $method;



    public function __construct($action, $method)
    {
        $this->setAction($action);
        $this->setMethod($method);

    }


    public function setAction($action)
    {
        $this->action = $action;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function openForm()
    {
        return "<form action='{$this->action}' method='{$this->method}'>"."\n";
    }

    public function closeForm()
    {
        return "</form>"."\n";
    }

}