<?php


namespace App\Repositories;


use App\Gallery;
use Illuminate\Http\Request;

class GalleryRepository
{

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Gallery::create($data);
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


        $query = Gallery::query();

        $query->orderBy('order', 'asc');
        $query->orderBy('id', 'asc');

        /** Search logic. */
        if (isset($search['value'])) {
            $search_key = $search['value'];
            $query->Where('title', 'LIKE', "%$search_key%");
        }
        $galleries = $query->paginate($limit, ['*'], 'page',($start/$limit)+1);
        $response = [
            'recordsTotal' => $galleries->total(),
            'recordsFiltered' => $galleries->total(),
            'data' => [],
        ];
        /** Format data. */
        foreach($galleries as $gallery) {
            $response['data'][] = [
                '<a href="/admin/galleries/' . $gallery->id . '">'. $gallery->title .'</a>' ,
                '<a href="/admin/galleries/' . $gallery->id . '"><i class="material-icons">edit</i></a>
                <a href="/admin/galleries/' . $gallery->id . '" class="delete-gallery"><i class="material-icons">delete</i></a>',
            ];
        }
        return $response;
    }

    /**
     * @param array $data
     * @param Gallery $gallery
     * @return bool
     */
    public function update(array $data, Gallery $gallery)
    {
        return $gallery->update($data);
    }
}
