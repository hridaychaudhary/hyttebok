<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\DataTables\PostDataTable;
use App\Http\Requests;
use App\Http\Requests\Admin\CreatePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Repositories\Admin\PostRepository;
use App\Repositories\PermissionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;

class PostController extends AppBaseController
{

    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    public function index(PostDataTable $postDataTable)
    {
        // return view('admin.post.index');
        return $postDataTable->render('admin.post.index');

    }

    public function create()
    {
        return view('admin.post.create');

    }

    public function store(CreatePostRequest $request){
        $input = $request->all();
        $input['created_by'] = Auth::user()->id;
        if ($request->hasFile('image')) {
            $file_upload = $request->file('image');
            $name = time() . '_' . $file_upload->getClientOriginalName();
            $filePath = $file_upload->storeAs('uploads', $name, 'public');
            $input['image'] = $filePath;
        }
        $this->postRepository->create($input);

        Flash::success(__('models/general.message.create_success'));

        return redirect(route('post.index'));
    }

        /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('post.index'));
        }

        return view('admin.post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('post.index'));
        }

        return view('admin.post.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('post.index'));
        }
        $post = $this->postRepository->update($request->all(), $id);
        Flash::success('Post updated successfully.');

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('post.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('post.index'));
    }
}
