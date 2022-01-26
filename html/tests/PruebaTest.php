<?php

class StrTest
{
    public function test_studly_method_convert_strings()
    {
        $this->assertSame('Name', "Name", "El valor esperado era otro");
    }
}