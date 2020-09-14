<?php

namespace Probegin\Test;

class Test
{
    protected $helloWorld = 'Hello World!';

    /**
     * @return string
     */
    public function helloWorld()
    {
        return $this->helloWorld;
    }
}
