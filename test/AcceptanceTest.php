<?php


class AcceptanceTest extends PHPUnit_Framework_TestCase
{
    public function testLeeting()
    {
        $ui = new UI();
        $this->assertEquals("Leeted: S3cr3t", $ui->leetMessage("Secret"));
    }
}
