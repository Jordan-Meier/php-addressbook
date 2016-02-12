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

}




?>
