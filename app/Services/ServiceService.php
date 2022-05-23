<?php


namespace App\Services;


use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceService
{
    /**
     * @var ServiceRepository
     */
    protected $serviceRepository;

    /**
     * ServiceService constructor.
     * @param ServiceRepository $serviceRepository
     */
    public function __construct(ServiceRepository $serviceRepository){
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if(isset($data['service_banner_image'])){
            $data['service_banner_image'] = getFile($data['service_banner_image']);
        }
        if(isset($data['info_with_image'])){
            foreach ($data['info_with_image'] as &$info){
                $info['image'] = getFile($info['image']);
            }
        }

        return $this->serviceRepository->create($data);
    }


    /**
     * @param Request $request
     * @param $service
     * @return mixed
     */
    public function update(Request $request, $service)
    {
        $data = $request->all();
        if(isset($data['service_banner_image'])){
            $data['service_banner_image'] = getFile($data['service_banner_image']);
        }
        if(isset($data['info_with_image'])){
            foreach ($data['info_with_image'] as &$info){
                $info['image'] = getFile($info['image']);
            }
        }

        return $this->serviceRepository->update($data, $service);
    }
}
