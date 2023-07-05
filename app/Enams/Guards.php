<?php

namespace App\Enams;

enum Guards : string
{
    case USER = 'web';
    case ADMIN = 'admin';
}
