<?php


namespace ProjetWebVege;


class Panier
{
    private $item ;
    private $listItem ;
    private $count = 0;
    public function AddItem($items)
    {
        $validateAdd = true;
        $this->item = new Buyitem();
        $this->item->photo = $items['photo'];
        $this->item->element = $items['name'];
        $this->item->price = floatval($items['price']);
        $this->item->description = $items['description'];
        $this->item->variety = $items['variety'];
        foreach ($this->listItem as $item)
        {
            if($item[0]->element == $items['name']&&$item[0]->variety == $items['variety'])
            {
               $validateAdd = false;
               $item[0]->quantity++;
            }
        }
        if($validateAdd)
            $this->listItem[$this->item->element.$this->item->variety] = array($this->item);
        $this->Count();

    }
    public function getListItem()
    {
        return $this->listItem;
    }
    public function DeleteItem($item)
    {
        $list = null;
        foreach ($this->listItem as $value)
        {
            if($value[0]->element != $item['name'])
            {
                $list[$value[0]->element.$value[0]->variety] = $value;
            }
            else {
                if($value[0]->variety == $item['variety'])
                    $value[0]->quantity--;
                else
                    $list[$value[0]->element.$value[0]->variety] = $value;
            }
        }
        if( $this->listItem[$item['name'].$item['variety']][0]->quantity == 0){
            $this->listItem = $list;
        }
        $this->Count();
    }
    private function Count()
    {
         $this->count =  sizeof($this->listItem);

    }
    public function getCount()
    {
        $total = 0;
        foreach ($this->listItem as $item)
        {
           $total +=  $item[0]->quantity;
        }
        return $total;
    }
}


class Buyitem
{
    public $element;
    public $description;
    public $price;
    public $photo;
    public $variety;
    public $quantity = 1;
}
