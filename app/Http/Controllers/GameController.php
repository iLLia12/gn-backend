<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreGameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::with(['images', 'filters'])->orderBy('created_at', 'desc')->get();
        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        Log::info($request->all());
        $game = new Game;
        $game->fill($request->all());
        $game->save();
        if($request->filters) {
            $game->filters()->toggle(explode(".", $request->filters));
        }
        $game->attachTags(['tag4', 'tag5']);
        if($request->fileNames) {
            $fileNames = explode(".", $request->fileNames);
            $game->addMultipleMediaFromRequest($fileNames)->each(function ($fileAdder) {
                $fileAdder->toMediaCollection("images");
            });
        }
        return response()->json(["message" => "created"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return response()->json($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return response()->json(["message" => "deleted"]); 
    }
}
