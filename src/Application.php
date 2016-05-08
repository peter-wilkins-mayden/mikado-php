<?php


class Application
{
    public function leet($string, UI $ui)
    {
        $leeter = new Leeter();
        return $ui->setLeeted($leeter->leet($string));

    }
}

    