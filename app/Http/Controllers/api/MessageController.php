<?php

namespace App\Http\Controllers\api;

use App\Events\Chat\SendMessage;
use App\Http\Controllers\Controller;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{

    public function lisMessages(User $user)
    {
        $userFrom = Auth::id();
        $userTo = $user->id;
        $messages = Message::where(
            function ($query) use ($userFrom, $userTo){
                $query->where([
                    'from' => $userFrom,
                    'to' => $userTo
                ]);
            }
        )->orWhere(
            function ($query) use ($userFrom, $userTo){
                $query->where([
                    'from' => $userTo,
                    'to' =>  $userFrom
                ]);
            }
        )->orderby('created_at', 'ASC')->get();
        return response()->json(['messages' => $messages], Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     */
    public function index($toId)
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->from = Auth::id();
        $message->to = $request->to;
        $message->content = $request->content;
        $message->save();
        Event::dispatch(new SendMessage($message, $request->to));

    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
