<?php

namespace App\Controller;

use App\Form\TestFlow;
use Craue\FormFlowBundle\Event\PostBindSavedDataEvent;

class Test
{
    public function foo()
    {
        $event = new PostBindSavedDataEvent(new TestFlow(), [], 1);
        /** @psalm-trace $event */
    }

}