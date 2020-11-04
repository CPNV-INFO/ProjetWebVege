<?php


namespace ProjetWebVege;

Class Checkout
{
    private $subtotal;
    private $delivery;
    private $discount;
    private $total;
    private $checkoutitem;

    public function Checkout( Panier $cart ,User $user)
    {
        $this->discount;
        $this->delivery;
        $this->subtotal =  $cart->getCount();
        $this->checkoutitem = $cart->getListItem();
        $this->delivery = $user->getDelivery();
    }

    /* @return mixed
     */
    public function getTotal()
    {
        $this->total =  $this->subtotal + $this->delivery - $this->discount;
        return $this->total;
    }


}
