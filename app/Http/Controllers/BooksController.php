<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BooksModel;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=request('btitle');
        $author=request('bauthor');
        $desc=request('bdesc');
        $dist=request('bdist');
        $price=request('bprice');

        echo "<br>";
        echo $title;
        echo "<br>";
        echo $author;
        echo "<br>";
        echo $desc;
        echo "<br>";
        echo $dist;
        echo "<br>";
        echo $price;

        $book =new BooksModel();

        $book->btitle=$title;
        $book->bauthor=$author;
        $book->bdescription=$desc;
        $book->bdistributor=$dist;
        $book->bprice=$price;

        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
