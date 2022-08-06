<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\DataTables\CategoryDataTable;
use App\Http\Requests;
use App\Http\Requests\Admin\CreateCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Repositories\Admin\CategoryRepository;
use App\Repositories\PermissionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;

class CategoryController extends AppBaseController
{

    /** @var  CategoryRepository */
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepository = $categoryRepo;
    }

    public function index(CategoryDataTable $categoryDataTable)
    {
        // return view('admin.category.index');
        return $categoryDataTable->render('admin.category.index');

    }

    public function create()
    {
        return view('admin.category.create');

    }

    public function store(CreateCategoryRequest $request){
        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
        if ($request->hasFile('image')) {
            $file_upload = $request->file('image');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->storeAs('uploads', $name, 'public');
            $input['image'] = $filePath;
        }
        $this->categoryRepository->create($input);

        Flash::success(__('models/general.message.create_success'));

        return redirect(route('category.index'));
    }

        /**
     * Display the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('category.index'));
        }

        return view('admin.category.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('category.index'));
        }

        return view('admin.category.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param  int              $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('category.index'));
        }
        $category = $this->categoryRepository->update($request->all(), $id);
        Flash::success('Category updated successfully.');

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('category.index'));
        }

        $this->categoryRepository->delete($id);

        Flash::success('Category deleted successfully.');

        return redirect(route('category.index'));
    }
}
