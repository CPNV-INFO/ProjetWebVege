<?php


namespace ProjetWebVege;


class Panier
{
    public $item ;

    public function item()
    {
        $this->item = new Buyitem();
    }
}


class Buyitem
{
    public $elment;
    public $price;
    public $photo;

}
