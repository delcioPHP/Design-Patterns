<?php


namespace source\modular;

class Formulario implements IntFormulario
{
    private $creatInput;
    private $creatForm;
    private $creatDiv;
    public $render;

    public function __construct(CreatInput $creatInput, CreatDiv $creatDiv, CreatForm $creatForm)
    {

        $this->creatForm = $creatForm;
        $this->creatDiv = $creatDiv;
        $this->creatInput = $creatInput;
    }

    public function render()
    {
        return $this->render = $this->creatDiv->openDiv()
                                .$this->creatForm->openForm()
                                .$this->creatInput->textInput()
                                .$this->creatInput->passInput()
                                .$this->creatForm->closeForm()
                                .$this->creatDiv->closeDiv();

    }
}