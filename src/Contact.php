<?php
class Contact
{
    private $name;
    private $photo;
    private $phone;
    private $address;
    private $email;

    function __construct($contact_name, $contact_photo, $contact_phone, $contact_address, $contact_email)
    {
        $this->name = $contact_name;
        $this->photo = $contact_photo;
        $this->phone = $contact_phone;
        $this->address = $contact_address;
        $this->email = $contact_email;
    }

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPhoto($new_photo)
    {
        $this->photo = (string) $new_photo;
    }

    function getPhoto()
    {
        return $this->photo;
    }

    function setPhone($new_phone)
    {
        $this->phone = (string) $new_phone;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setAddress($new_address)
    {
        $this->address = (string) $new_address;
    }

    function getAddress()
    {
        return $this->address;
    }

    function setEmail($new_email)
    {
        $this->email = (string) $new_email;
    }

    function getEmail()
    {
        return $this->email;
    }

}




?>
