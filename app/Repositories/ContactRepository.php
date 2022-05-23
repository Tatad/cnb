<?php


namespace App\Repositories;


use App\Contact;

class ContactRepository
{

    public function create(array $data)
    {
        return Contact::create($data);
    }

    public function update(array $data, $contact)
    {
        return $contact->update($data);
    }
}
