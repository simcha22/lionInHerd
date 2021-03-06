<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class User extends Model
{
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public static function getAll(){
        return self::orderBy("user_id")->get();
    }

    // public static function loginUser($request){
    //     $user = self::where('user_email', $request->email)->first();
    //     if(!$user || !Hash::check($request->password, $user->user_password)){
    //         return false;
    //     }
    //     session([
    //         'name' => $user->user_firstname. ' '. $user->user_lastname,
    //         'role' => $user->role_id,
    //         'id' => $user->user_id
    //     ]);
    //     return true;
    // }

    public static function create($request)
    {
        $user = new self();
        $user->user_id = Str::uuid();
        $user->user_firstname = $request->firstname;
        $user->user_lastname = $request->lastname;
        $user->user_email = $request->email;
        $user->user_password = bcrypt($request->password);
        $user->approval = $request->approval;
        $user->role_id = $request->role_id ?? 35;
        $user->save();
    }
    public static function login($request){

        $user = self::where('user_email', $request->email)->firstOrFail();
        if(!$user || !Hash::check($request->password, $user->user_password)){
                    return false;
                }
                session([
                    'name' => $user->user_firstname. ' '. $user->user_lastname,
                    'role' => $user->role_id,
                    'id' => $user->user_id
                ]);
                return $user;
    }
}
