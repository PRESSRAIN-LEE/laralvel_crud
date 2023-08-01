<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('boards.index');       #/resources/views
        $boards = Board::all();
        return view('boards.index') -> with('lists', $boards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('boards.create');       #/resources/views
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'subject' => 'required',
            'contents' => 'required',
        ]);

        Board::create($request -> all());
        return redirect() -> route('boards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        $board = Board::where('id', $board -> id) -> first();
        //$board = Board::where('id', $board -> id) -> get();
        return view('boards.show') -> with('board', $board);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        $board = Board::where('id', $board -> id) -> first();
        //$board = Board::where('id', $board -> id) -> get();
        return view('boards.edit') -> with('board', $board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
        $request -> validate([
            'subject' => 'required',
            'contents' => 'required',
        ]);

        $board -> update($request -> all());
        return redirect() -> route('boards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
        $board -> delete();
        return redirect() -> route('boards.index');
    }
}
