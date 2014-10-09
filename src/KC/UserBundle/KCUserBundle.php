<?php

namespace KC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KCUserBundle extends Bundle
{
        public function getParent()
    {
        return 'FOSUserBundle';
    }
}
