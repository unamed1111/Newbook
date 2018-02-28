<?php

namespace App\Core\Services;
use App\Publisher;

class PublisherService extends BaseService {

	private $publisher;

	public function __construct(Publisher $publisher)
	 {
	 	parent::__construct($publisher);
	 	$this->publisher = $publisher;
	 	
	 }

	public function showPublisher()
	{
		return $this->publisher->pluck('name','id');
	}

	public function store($data)
	{
		$publiser = new Publisher;
        $publiser->name = $data['publisher'];
        $publiser->save();
        // Publisher::create($data);
	}
	public function update($data,$id)
	{
		 $publisher = $this->getById($id);
         $publisher->name = $data['publisher'];
         $publisher->save();
	}
}