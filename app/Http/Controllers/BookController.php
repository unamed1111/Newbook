<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Book;
use App\Publisher;
use App\Http\Requests\BookRequest;
use App\Core\Services\BookService;
use App\Core\Services\BookPresenter;
use App\Core\Services\PublisherService;
use App\Core\Services\Test;
use App\Core\Events\BookCreatedEvent;
use Illuminate\Support\Facades\Auth;



class BookController extends Controller
{
    private $bookService;
    private $bookPresenter;
    private $publisherService;
   

    public function __construct(BookService $bookService,BookPresenter $bookPresenter, PublisherService $publisherService)
    {
        $this->bookService = $bookService;
        $this->bookPresenter = $bookPresenter;
        $this->publisherService = $publisherService;
       
    }

    public function index()
    {   
        
        return view('books.index',['data'=> $this->bookService->getData()]);
    }

    public function show($id)
    {   
        return view('books.show');
    }
    
    public function create()
    {   
        return view('books.create',['data'=> $this->publisherService->showPublisher()]);
    }

  
    public function store(BookRequest $request)
    {
       
        $data = request()->only("title", "author","publisher");
        $book = $this->bookService->store($data);
        event( new BookCreatedEvent($book));
        // return view('books.show',['book'=> $this->bookPresenter->detail($book)]);
        return redirect()->route('book.index')->with('status', 'Add was successful!'); 

        
        // Validate --> request

        // Check permission --> ACL laravel / Laravel-permission

        // Bind data from request --> request()->get();
        // Check ClientType --> User::find(client_id)->type

        // Process data base on client type if (type === ...) {} else { if { } .. else {}}

        // Format collection collect->thankYou = ..., ....

        // Email thankyou / confirm / invoice --
        // Increase client_point user->point += > 500 : 50, 30

        // Render view
    }
   
    public function edit(Book $book) 
    {  
        return view('books.edit',['data'=>$book,'publisher' => $this->publisherService->showPublisher()]);
    }

    
    public function update(BookRequest $request, $id)
    {
        $data = request()->only("title", "author","publisher");
        $this->bookService->update($data,$id);
        return redirect()->route('book.index')->with('status','Update was successful!');;
    }

    public function destroy($id)
    {   
        $this->bookService->destroy($id);
        return redirect()->back();
    }
}
