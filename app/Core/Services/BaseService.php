<?php

namespace App\Core\Services;


use App\Book;
class BaseService {
	
	private $model;

	public function __construct($model){

		$this->model = $model;
	}

	public function getbyId($id)
	{	
		return $this->model->findOrFail($id);
	}

	public function destroy($id)
	{
		$this->model->destroy($id);
	}

	public function paginate($numb)
	{
		return $this->model->paginate($numb);
	}

}

