<?php


namespace App\Services;


use App\Http\Requests\CareerRequest;
use App\Jobs\SendEmailJob;
use App\Repositories\CareerRepository;
use Illuminate\Http\Request;
use Exception;

class CareerService
{
    private $repository;

    /**
     * CareerRepository constructor.
     * @param CareerRepository $repository
     */

    public function __construct(CareerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param CareerRequest $request
     * @return int
     */
    public function createCareer(CareerRequest $request)
    {
        try {
            $career = $this->repository->create($request->all());
            $this->sendMailToCareerAdmin($career);
            return 1;
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    private function sendMailToCareerAdmin($career)
    {
        $details = [
            'user' => $career,
            'to' => config('app.career_admin'),
            'view' => 'email.career_request_user',
            'subject' => 'CNB Career Request'
        ];
        dispatch(new SendEmailJob($details))->onQueue('email');
    }
}
