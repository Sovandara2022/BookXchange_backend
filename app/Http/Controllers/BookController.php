<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Book_list;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{

    public function List_book()
    {
        //  $data=book_list::orderBy('title')->get();
        // return view('book_index',compact('data'));
        $data = Book_list::orderBy('book_title', 'asc')->get();
        return view('book_index', compact('data'));
    }

   


    

    // public function List_book()
    // {
    //     $books = Book::all();

    //     return view('book_index', compact('books'));
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'posted_by' => 'required',
    //         'contact' => 'required',
    //         'image' => 'required|image|max:2048',
    //     ]);

    //     $imagePath = $request->file('image')->store('book_images', 'public');

    //     $image = Image::make(public_path("storage/{$imagePath}"))->fit(300, 300);
    //     $image->save();

    // }
}
