<?php 

namespace App\Core\Services;

use App\Book;

class BookService extends BaseService
{
	private $book;

	public function __construct(Book $book) 
	{			parent::__construct($book);

		$this->book = $book;
	}

	public function store($data) 
	{	
		$this->book = new Book;
		$this->book->title = $data['title'];
		$this->book->author = $data['author'];
		$this->book->publisher_id = $data['publisher'];
		$this->book->save();
		// $this->book = Book::create($data);
		return $this->book;
	}
	
    public function update($data,$id)
    {
    	$this->getById($id);
    	$this->book->title = $data['title'];
		$this->book->author = $data['author'];
		$this->book->publisher_id = $data['publisher'];
		$this->book->save();
    }
    public function getData()
    {
    	Return Book::with('publisher')->orderBy('id','DESC')->paginate(4);
    }

   }