<?php

namespace App\Http\Services\book;

use App\Models\book\Book;
use App\Models\book\Author;
use App\Models\book\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function store_author_category($request)
    {
        try {
            Author::create(['name' => (string) $request->input('author')]);
            Category::create(['name' => (string) $request->input('category')]);
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
        // Remove Duplicate Rows in Laravel
       /* $duplicatedAu = DB::table('authors')
                    ->select('name', DB::raw('count(`name`) as occurences'))
                    ->groupBy('name')
                    ->having('occurences', '>', 1)
                    ->get();
        foreach ($duplicatedAu as $duplicateau) {
            Author::where('name', $duplicateau->name)->delete();
        }

        $duplicatedCa = DB::table('categories')
                    ->select('name', DB::raw('count(`name`) as occurences'))
                    ->groupBy('name')
                    ->having('occurences', '>', 1)
                    ->get();
        foreach ($duplicatedCa as $duplicateca) {
            Category::where('name', $duplicateca->name)->delete();
        }*/

        return true;
    }

    public function store($request)
    {
        try {
            $check = $this->store_author_category($request);
            Book::create([
                'name' => (string) $request->input('name'),
                'publishing_house' => (string) $request->input('publishing_house'),
                'author_id' => Author::orderBy('id', 'desc')->first()->id,
                'category_id' => Category::orderBy('id', 'desc')->first()->id,
                'number' => 0,
            ]);

            Session::flash('success', 'Thêm Sách Mới Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Book::with('authors')->orderByDesc('id')->paginate(10);
    }

}
