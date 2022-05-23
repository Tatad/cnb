<?php


namespace App\Repositories;


use App\Gallery;
use App\Team;
use Illuminate\Http\Request;

class TeamRepository
{

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Team::create($data);
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getList(Request $request)
    {
        $limit = $request->get('length') ?? 10;
        $start = $request->get('start') ?? 0;
        $search = $request->get('search');


        $query = Team::query();


        /** Search logic. */
        if (isset($search['value'])) {
            $search_key = $search['value'];
            $query->Where('name', 'LIKE', "%$search_key%");
            $query->Where('position', 'LIKE', "%$search_key%");
        }
        $team = $query->paginate($limit, ['*'], 'page',($start/$limit)+1);
        $response = [
            'recordsTotal' => $team->total(),
            'recordsFiltered' => $team->total(),
            'data' => [],
        ];
        /** Format data. */
        foreach($team as $item) {
            $response['data'][] = [
                '<a href="/admin/team/' . $item->id . '">'. $item->name .'</a>' ,
                 $item->position,
                '<a href="/admin/team/' . $item->id . '"><i class="material-icons">edit</i></a>
                <a href="/admin/team/' . $item->id . '" class="delete-team"><i class="material-icons">delete</i></a>',
            ];
        }
        return $response;
    }

    /**
     * @param array $data
     * @param Team $team
     * @return bool
     */
    public function edit(array $data, Team $team): bool
    {
        return $team->update($data);
    }
}
