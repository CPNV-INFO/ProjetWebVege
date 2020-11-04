<?php


namespace ProjetWebVege;


class User
{
    private $name;
    private $phone;
    private $delivery ;
    private $mail;

    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
}
class Delivery
{
    public $name;
    public $lastname;
    public $country;
    public $address;
    public $NLP;
    public $town;

}