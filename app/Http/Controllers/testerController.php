<?php

namespace App\Http\Controllers;

use App\DataTables\testerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatetesterRequest;
use App\Http\Requests\UpdatetesterRequest;
use App\Repositories\testerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class testerController extends AppBaseController
{
    /** @var  testerRepository */
    private $testerRepository;

    public function __construct(testerRepository $testerRepo)
    {
        $this->testerRepository = $testerRepo;
    }

    /**
     * Display a listing of the tester.
     *
     * @param testerDataTable $testerDataTable
     * @return Response
     */
    public function index(testerDataTable $testerDataTable)
    {
        return $testerDataTable->render('testers.index');
    }

    /**
     * Show the form for creating a new tester.
     *
     * @return Response
     */
    public function create()
    {
        return view('testers.create');
    }

    /**
     * Store a newly created tester in storage.
     *
     * @param CreatetesterRequest $request
     *
     * @return Response
     */
    public function store(CreatetesterRequest $request)
    {
        $input = $request->all();

        $tester = $this->testerRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/testers.singular')]));

        return redirect(route('testers.index'));
    }

    /**
     * Display the specified tester.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tester = $this->testerRepository->find($id);

        if (empty($tester)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testers.singular')]));

            return redirect(route('testers.index'));
        }

        return view('testers.show')->with('tester', $tester);
    }

    /**
     * Show the form for editing the specified tester.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tester = $this->testerRepository->find($id);

        if (empty($tester)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testers.singular')]));

            return redirect(route('testers.index'));
        }

        return view('testers.edit')->with('tester', $tester);
    }

    /**
     * Update the specified tester in storage.
     *
     * @param  int              $id
     * @param UpdatetesterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetesterRequest $request)
    {
        $tester = $this->testerRepository->find($id);

        if (empty($tester)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testers.singular')]));

            return redirect(route('testers.index'));
        }

        $tester = $this->testerRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/testers.singular')]));

        return redirect(route('testers.index'));
    }

    /**
     * Remove the specified tester from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tester = $this->testerRepository->find($id);

        if (empty($tester)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testers.singular')]));

            return redirect(route('testers.index'));
        }

        $this->testerRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/testers.singular')]));

        return redirect(route('testers.index'));
    }
}
