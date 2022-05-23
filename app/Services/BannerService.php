<?php


namespace App\Services;


use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class BannerService
{
    /**
     * @var BannerRepository
     */
    protected $bannerRepository;

    /**
     * BannerService constructor.
     * @param BannerRepository $bannerRepository
     */
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['banner_video'])){
            $data['banner_video'] = getFile($data['banner_video']);
        }
        if (isset($data['banner_title_logo'])){
            $data['banner_title_logo'] = getFile($data['banner_title_logo']);
        }
        if (isset($data['philosophy_image'])){
            $data['philosophy_image'] = getFile($data['philosophy_image']);
        }
        if (isset($data['our_team_background_image'])){
            $data['our_team_background_image'] = getFile($data['our_team_background_image']);
        }
        if (isset($data['galleries'])){
            foreach ($data['galleries'] as &$gallery){
                $gallery = getFile($gallery);
            }
        }
        return $this->bannerRepository->create($data);
    }

    /**
     * @param Request $request
     * @param $banner
     * @return mixed
     */
    public function update(Request $request, $banner)
    {
        $data = $request->all();

        if (isset($data['banner_video'])){
            $data['banner_video'] = getFile($data['banner_video']);
        }
        if (isset($data['banner_title_logo'])){
            $data['banner_title_logo'] = getFile($data['banner_title_logo']);
        }
        if (isset($data['philosophy_image'])){
            $data['philosophy_image'] = getFile($data['philosophy_image']);
        }
        if (isset($data['our_team_background_image'])){
            $data['our_team_background_image'] = getFile($data['our_team_background_image']);
        }
        if (isset($data['galleries'])){
            foreach ($data['galleries'] as &$gallery){
                $gallery = getFile($gallery);
            }
        }

        return $this->bannerRepository->update($data, $banner);
    }


}
