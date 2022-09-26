<?php

abstract class AbstactWinkelwagen
{
    private $store;
    private $maxProducts;

    /**
     * @return mixed
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @return mixed
     */
    public function getMaxProducts()
    {
        return $this->maxProducts;
    }


}