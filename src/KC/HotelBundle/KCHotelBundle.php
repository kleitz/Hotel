<?php

namespace KC\HotelBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KCHotelBundle extends Bundle
{
        public function getParent()
    {
        return 'FOSUserBundle';
    }
}
