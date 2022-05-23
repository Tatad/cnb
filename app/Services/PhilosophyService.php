<?php


namespace App\Services;


use App\Repositories\PhilosophyRepository;
use Illuminate\Http\Request;

class PhilosophyService
{
    /**
     * @var PhilosophyRepository
     */
    protected $philosophyRepository;

    /**
     * PhilosophyService constructor.
     * @param PhilosophyRepository $philosophyRepository
     */
    public function __construct(PhilosophyRepository $philosophyRepository)
    {
        $this->philosophyRepository = $philosophyRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['philosophy_banner_image'])){
            $data['philosophy_banner_image'] = getFile($data['philosophy_banner_image']);
        }
        if (isset($data['info_with_image'])){
            $data['info_with_image'] = getFile($data['info_with_image']);
        }

        return $this->philosophyRepository->create($data);

    }

    public function update(Request $request, $philosophy)
    {
        $data = $request->all();
        if (isset($data['philosophy_banner_image'])){
            $data['philosophy_banner_image'] = getFile($data['philosophy_banner_image']);
        }
        if (isset($data['info_with_image'])){
            $data['info_with_image'] = getFile($data['info_with_image']);
        }

        return $this->philosophyRepository->update($data, $philosophy);
    }


}
