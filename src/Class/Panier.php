<?php


namespace ProjetWebVege;


class Panier
{
    private $item;
    private $listItem;
    private $count = 0;

    /**
     * @param $items
     * @param int $quantity
     */
    public function AddItem($items, $quantity = 1)
    {
        $validateAdd = true;
        $this->item = new Buyitem();
        $this->item->photo = $items['photo'];
        $this->item->element = $items['name'];
        $this->item->price = floatval($items['price']);
        $this->item->description = $items['description'];
        $this->item->variety = $items['variety'];
        $this->item->quantity = $quantity;
        if (!is_null($this->listItem)) {
            foreach ($this->listItem as $item) {
                if ($item[0]->element == $items['name'] && $item[0]->variety == $items['variety']) {
                    $validateAdd = false;
                    $item[0]->quantity++;
                }
            }
        }
        if ($validateAdd)
            $this->listItem[$this->item->element . $this->item->variety] = array($this->item);
        $this->Count();

    }

    /**
     * @return mixed
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * @param $item
     */
    public function DeleteItem($item)
    {
        $list = null;
        foreach ($this->listItem as $value) {
            if ($value[0]->element != $item['name']) {
                $list[$value[0]->element . $value[0]->variety] = $value;
            } else {
                if ($value[0]->variety == $item['variety'])
                    $value[0]->quantity--;
                else
                    $list[$value[0]->element . $value[0]->variety] = $value;
            }
        }
        if ($this->listItem[$item['name'] . $item['variety']][0]->quantity == 0) {
            $this->listItem = $list;
        }
        $this->Count();
    }

    /**
     * @param $item
     */
    public function DeleteAllItem($item)
    {
        $list = null;
        foreach ($this->listItem as $value) {
            if ($value[0]->element != $item['name']) {
                $list[$value[0]->element . $value[0]->variety] = $value;
            } else {
                if ($value[0]->variety == $item['variety'])
                    $value[0]->quantity = 0;
                else
                    $list[$value[0]->element . $value[0]->variety] = $value;
            }
        }
        if ($this->listItem[$item['name'] . $item['variety']][0]->quantity == 0) {
            $this->listItem = $list;
        }
        $this->Count();
    }

    /**
     *
     */
    private function Count()
    {
        $this->count = sizeof($this->listItem);

    }

    /**
     * @return int
     */
    public function getCount()
    {
        $total = 0;
        foreach ($this->listItem as $item) {
            $total += $item[0]->quantity;
        }
        return $total;
    }

    public function getTotalprice()
    {
        $total = 0;
        foreach ($this->listItem as $item) {
            $total += $item[0]->price * $item[0]->quantity;
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
    public $quantity;

    public function getTotal()
    {
        return $this->price * $this->quantity;
    }
}
