<?php


namespace App\Services;


use App\Repositories\TeamRepository;
use App\Team;
use Illuminate\Http\Request;

class TeamService
{
    /**
     * @var TeamRepository
     */
    protected $teamRepository;

    /**
     * TeamService constructor.
     * @param TeamRepository $teamRepository
     */
    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if (isset($data['avatar'])){
            $data['avatar'] = getFile($data['avatar']);
        }
        return $this->teamRepository->create($data);
    }

    public function getList(Request $request)
    {
        return $this->teamRepository->getList($request);
    }

    /**
     * @param Request $request
     * @param Team $team
     * @return bool
     */
    public function edit(Request $request, Team $team): bool
    {
        $data = $request->all();
        if (isset($data['avatar'])){
            $data['avatar'] = getFile($data['avatar']);
        }
        return $this->teamRepository->edit($data, $team);
    }
}
