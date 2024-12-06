<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\CategoryModel;
use App\Models\MovieImageModel;
//use App\Controllers\BaseController;
//use \CodeIgniter\Exceptions\PageNotFoundException;


class Movie extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {  $movie = new MovieModel();
        $data = [
            'movies' => $movie->asObject()->findAll(),
            //'movies'=> $movie->asObject()->paginate(3),
            //'pager'=> $movie->pager
            //comentar la primera y descomentar la 23 y 24 y la 44 de index.php para que funcione la paginacion. 
        ];
        return view('movie/index', $data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $movie = new MovieModel();
        $data = ['view' => $movie->find($id) ];
        return view('movie/ver', $data);
        
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        $movie = new MovieModel();
        return view('movie/add');
        
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {   $movie = new MovieModel();
        $movie->insert([
            'title'=> $this->request->getpost('title'),
            'category_id' => $this->request->getpost('category_id'),
            'description' => $this->request->getpost('description')
        ]);
        return redirect()->to(base_url('movie'));
        
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $movie = new MovieModel();
        $data = ['view' => $movie->find($id)];
        return view('movie/editar', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $movie = new MovieModel();
        $movie->update($id, [
            'title' => $this->request->getpost('title'),
            'category_id' => $this->request->getpost('category_id'),
            'description' => $this->request->getpost('description')
        ]);
        
        return redirect()->to(base_url('movie'));
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $movie = new MovieModel();
        $movie->delete($id);
        return redirect()->to(base_url('movie'));
    }
}
