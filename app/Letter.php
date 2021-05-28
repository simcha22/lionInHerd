<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public static function getAll(){
        return self::orderBy('created_at')->get();
    }

    public static function create($request){
        $letter = new self();
        $letter->letter_id = Str::uuid();
        $letter->letter_sender = $request->sender;
        $letter->letter_getting = $request->getting;
        $letter->letter_title = $request->title;
        $letter->letter_information = $request->information;
        $letter->user_id = $request->user;
        $letter->rabbi_id = $request->rabbi;
        $letter->save();
    }

    public static function getLetter($id){
        return self::where('letter_id', $id)->firstOrFail();
    }
}
