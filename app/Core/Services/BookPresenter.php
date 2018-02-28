<?php 

namespace App\Core\Services;
use App\Book;
use App\Publisher;
class BookPresenter 
{
	private $book, $publisher;

	public function __construct(Book $book, Publisher $publisher)
	{
		$this->book = $book;
		$this->publisher = $publisher;
	}
	public function detail($book) 
	{
		return [
			'title' => " This is title: " .$book->title ,
			'publisher' => " Publisher is: " .$book->publisher->name
		];

	}
}