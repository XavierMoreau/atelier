<?php

namespace AtelierBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AtelierBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
