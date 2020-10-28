<?php


namespace ProjetWebVege;


class Panier
{
    private $item ;
    private $listItem ;
    private $count = 0;
    private $Item_Exist = 0;

    public function AddItem($items)
    {
        $validateAdd = true;
        $this->item = new Buyitem();
        $this->item->photo = $items['photo'];
        $this->item->element = $items['name'];
        $this->item->price = floatval($items['price']);
        $this->item->description = $items['description'];
        foreach ($this->listItem as $item)
        {
            if($item[0]->element == $items['name'])
            {
               $validateAdd = false;
               $this->Item_Exist++;
               $item[0]->quantity++;
            }
        }
        if($validateAdd)
            $this->listItem[$this->item->element] = array($this->item);
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
            if($value[0]->element != $item['name'] )
            {
                $list[$value[0]->element] = $value;
            }
            else {
                $value[0]->quantity--;
            }
        }
        if( $this->listItem[$item['name']][0]->quantity == 0){
            $this->listItem = $list;
        }
            else{
                $this->Item_Exist--;
            }


        $this->Count();
    }

    public function Count()
    {
         $this->count =  sizeof($this->listItem);
    }
    public function getCount()
    {
        return $this->count + $this->Item_Exist;
    }
}


class Buyitem
{
    public $element;
    public $description;
    public $price;
    public $photo;
    public $quantity = 1;

}
