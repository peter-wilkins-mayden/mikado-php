<?php


class UI
{

    private $application;
    private $leeted;

    public function __construct()
    {
        $this->application = new Application();
    }

    public function leetMessage($unLeeted)
    {
        $this->application->leet($unLeeted, $this);
        return "Leeted: " . $this->leeted;
    }

    public function setLeeted($leeted)
    {
        $this->leeted = $leeted;
    }
}

//$ui = new UI();
//echo $ui->leetMessage($argv[1]);