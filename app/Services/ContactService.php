<?php


namespace App\Services;


use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['contact_banner_image'])){
            $data['contact_banner_image'] = getFile($data['contact_banner_image']);
        }
        if (isset($data['map_image'])){
            $data['map_image'] = getFile($data['map_image']);
        }
        if (isset($data['call_back_form_image'])){
            $data['call_back_form_image'] = getFile($data['call_back_form_image']);
        }
        if (isset($data['call_back_form_video'])){
            $data['call_back_form_video'] = getFile($data['call_back_form_video']);
        }

        return $this->contactRepository->create($data);
    }

    public function update(Request $request, $contact)
    {
        $data = $request->all();
        if (isset($data['contact_banner_image'])){
            $data['contact_banner_image'] = getFile($data['contact_banner_image']);
        }
        if (isset($data['map_image'])){
            $data['map_image'] = getFile($data['map_image']);
        }
        if (isset($data['call_back_form_image'])){
            $data['call_back_form_image'] = getFile($data['call_back_form_image']);
        }
        if (isset($data['call_back_form_video'])){
            $data['call_back_form_video'] = getFile($data['call_back_form_video']);
        }

        return $this->contactRepository->update($data, $contact);
    }


}
