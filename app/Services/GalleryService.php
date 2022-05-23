<?php


namespace App\Services;


use App\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;

class GalleryService
{
    /**
     * @var GalleryRepository
     */
    protected $galleryRepository;

    /**
     * GalleryService constructor.
     * @param GalleryRepository $galleryRepository
     */
    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['galleries'])){
            foreach ($data['galleries'] as &$gallery){
                $gallery = getFile($gallery);
            }
        }
        return $this->galleryRepository->create($data);
    }


    /**
     * @param Request $request
     * @return array
     */
    public function getList(Request $request)
    {
        return $this->galleryRepository->getList($request);
    }


    /**
     * @param Request $request
     * @param Gallery $gallery
     * @return bool
     */
    public function edit(Request $request, Gallery $gallery)
    {
        $data = $request->all();
        if (isset($data['galleries'])){
            foreach ($data['galleries'] as &$item){
                $item = getFile($item);
            }
        }
        return $this->galleryRepository->update($data, $gallery);
    }
}
