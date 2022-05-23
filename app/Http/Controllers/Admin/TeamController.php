<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TeamService;
use App\Team;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TeamController extends Controller
{

    /**
     * @var TeamService
     */
    protected $teamService;

    /**
     * TeamController constructor.
     * @param TeamService $teamService
     */
    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        return view('admin.pages.team');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('admin.pages.team_inner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $this->teamService->create($request);
        return redirect('admin/team');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getList(Request $request){
        return $this->teamService->getList($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Team $team
     * @return Application|Factory|Response|View
     */
    public function show(Team $team)
    {
        return view('admin.pages.team_inner', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Team $team
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Team $team)
    {
        $this->teamService->edit($request, $team);
        return redirect('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Team $team
     * @return bool
     * @throws Exception
     */
    public function destroy(Team $team): bool
    {
        return $team->delete();
    }
}
