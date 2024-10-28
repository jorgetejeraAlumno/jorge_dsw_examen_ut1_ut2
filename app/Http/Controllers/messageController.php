<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class messageController extends Controller
{
    public function edit_message($id){
        $message=Message::findOrFail($id);
        return view('edit_message')->with('messageID',$message['id']);
    }
    public function change_message(Request $request,$id){
        $message=Message::find($id);
        $validateMessage = $request->validate([
            'text'=>'required',
            'subrayado'=>'required|in:0,1',
            'negrita'=>'required|in:0,1'
        ]);
        $message=$request->input('text');
        $subrayado=$request->input('subrayado');
        $negrita=$request->input('negrita');

        $Messaget = Message::create([
            'text'=>$message,
            'subrayado'=>$subrayado,
            'negrita'=>$negrita
        ]);
    }
}
