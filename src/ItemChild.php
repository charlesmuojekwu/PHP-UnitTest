<?php

/// testing mthod that are not exposed using inheritance

class ItemChild extends Item
{
    public function getID()
    {
        $num = parent::getID();

        return $num;
    }

    public function getToken()
    {
        return parent::getToken();
    }
}

