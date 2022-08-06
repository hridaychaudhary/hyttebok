<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\DataTables\HomeSliderImageDataTable;
use App\Http\Requests;
use App\Http\Requests\Admin\HomeSliderImageRequest;
use App\Repositories\Admin\HomeSliderImageRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeSliderImageController extends AppBaseController
{

    /** @var  HomeSliderImageRepository */
    private $homeSliderImageRepository;

    public function __construct(HomeSliderImageRepository $homeSliderRepo)
    {
        $this->homeSliderImageRepository = $homeSliderRepo;
    }

    public function index(HomeSliderImageDataTable $homeSliderImageDataTable)
    {
        
        // return view('admin.homeSliderImage.index');
        return $homeSliderImageDataTable->render('admin.homeSliderImage.index');

    }

    public function create()
    {
        // return view('admin.homeSliderImage.create');

    }

    public function store(HomeSliderImageRequest $request){
        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
        if ($request->hasFile('image')) {
            $file_upload = $request->file('image');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->storeAs('uploads', $name, 'public');
            $input['image'] = $filePath;
        }
        $this->homeSliderImageRepository->create($input);

        Flash::success(__('models/general.message.create_success'));

        return redirect(route('homeSliderImage.index'));
    }

        /**
     * Display the specified homeSliderImage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $homeSliderImage = $this->homeSliderImageRepository->find($id);

        if (empty($homeSliderImage)) {
            Flash::error('Image not found');

            return redirect(route('homeSliderImage.index'));
        }

        return view('admin.homeSliderImage.show')->with('homeSliderImage', $homeSliderImage);
    }

    /**
     * Show the form for editing the specified homeSliderImage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $homeSliderImage = $this->homeSliderImageRepository->find($id);

        if (empty($homeSliderImage)) {
            Flash::error('Image not found');

            return redirect(route('homeSliderImage.index'));
        }
        
        return view('admin.homeSliderImage.edit')->with('homeSliderImage', $homeSliderImage);
    }

    /**
     * Update the specified homeSliderImage in storage.
     *
     * @param  int              $id
     * @param HomeSliderImageRequest $request
     *
     * @return Response
     */
    public function update($id, HomeSliderImageRequest $request)
    {
        $homeSliderImage = $this->homeSliderImageRepository->find($id);

        if (empty($homeSliderImage)) {
            Flash::error('Image not found');

            return redirect(route('homeSliderImage.index'));
        }
        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
      
        if ($request->hasFile('image')) {

            $preImage = config('fast.home_slider_image') . '/' . $homeSliderImage->image;
            if(File::exists($preImage)) {
                File::delete($preImage);
            }
            $file_upload = $request->file('image');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->move(config('fast.home_slider_image'), $name);
            $input['image'] = $name;
        }
        $input['status'] = (!empty($input['status'])) ? 1 : 0;
        $homeSliderImage = $this->homeSliderImageRepository->update($input, $id);
        Flash::success('Image updated successfully.');

        return redirect(route('homeSliderImage.index'));
    }

    /**
     * Remove the specified homeSliderImage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        // $homeSliderImage = $this->homeSliderImageRepository->find($id);

        // if (empty($homeSliderImage)) {
        //     Flash::error('Image not found');

        //     return redirect(route('category.index'));
        // }

        // $this->homeSliderImageRepository->delete($id);

        // Flash::success('Image deleted successfully.');

        // return redirect(route('homeSliderImage.index'));
    }
}
