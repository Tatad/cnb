<?php


namespace App\Services;


use App\Repositories\CallBackRepository;
use Illuminate\Http\Request;


class CallBackService
{
    private $repository;

    /**
     * CallBackRepository constructor.
     * @param CallBackRepository $repository
     */

    public function __construct(CallBackRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * CallBackRepository constructor.
     * @param Request $request
     * @return
     */
    public function getList(Request $request)
    {
        return $this->repository->getList($request);
    }
}
