<?php


namespace ProjetWebVege;


class Panier
{
    public $item ;
    public $ListItem = array();


    public function AddItem($item)
    {
        $this->item = new Buyitem();
        $this->item->photo = $item['photo'];
        $this->item->elment = $item['name'];
        $this->item->price = $item['price'];
        $this->ListItem = array($this->item);
    }

    public function Count()
    {

        if(is_Null($this->ListItem))
            return '0';
        else
       return sizeof($this->ListItem);
    }
}


class Buyitem
{
    public $elment;
    public $price;
    public $photo;

}
