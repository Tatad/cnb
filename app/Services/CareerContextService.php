<?php


namespace App\Services;


use App\Repositories\CareerContextRepository;
use Illuminate\Http\Request;

class CareerContextService
{
    /**
     * @var CareerContextRepository
     */
    protected $careerContextRepository;

    /**
     * CareerContextService constructor.
     * @param CareerContextRepository $careerContextRepository
     */
    public function __construct(CareerContextRepository $careerContextRepository)
    {
        $this->careerContextRepository = $careerContextRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['career_banner_image'])){
            $data['career_banner_image'] = getFile($data['career_banner_image']);
        }
        return $this->careerContextRepository->create($data);
    }

    /**
     * @param Request $request
     * @param $career
     * @return mixed
     */
    public function update(Request $request, $career)
    {
        $data = $request->all();
        if (isset($data['career_banner_image'])){
            $data['career_banner_image'] = getFile($data['career_banner_image']);
        }
        return $this->careerContextRepository->update($data, $career);
    }
}
