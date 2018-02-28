<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;
use App\Http\Requests\PublisherRequest;
use App\Core\Services\PublisherService;
class PublisherController extends Controller
{
    
    private $publisherService;

    public function __construct(PublisherService $publisherService)
    {
        $this->publisherService = $publisherService;
    }
   
    public function index()
    {   
        return view('publishers.index',['data'=> $this->publisherService->paginate(4)]);
    }

    public function create()
    {
        return view('publishers.create');
    }
  
    public function store(PublisherRequest $request)
    {
        $data = request()->only('publisher');
        $this->publisherService->store($data);
        return redirect()->route('publisher.index')->with('status', 'Add was successful!'); 
    }

    public function edit($id)
    {   
        return view('publishers.edit',['data'=> $this->publisherService->getById($id)]);
    }

    public function update(PublisherRequest $request, $id)
    {
         $data = request()->only('publisher');
         $this->publisherService->update($data,$id);
         return redirect()->route('publisher.index')->with('status', 'Update was successful!');
    }
    
    public function destroy($id)
    {
        $this->publisherService->destroy($id);
        return redirect()->back();
    }
}
