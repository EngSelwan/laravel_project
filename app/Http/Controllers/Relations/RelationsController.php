<?php

namespace App\Http\Controllers\Relations;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    //
    public function hasOneRelation()
    {
        $user = User::with(['phone'=>function($q){
            $q->select('code','phone','user_id');
        }])->find('19');
        return response()->json($user);
    }
    public function hasOneRelationReverse()
    {
              $phone = Phone::with(['user'=>function($q)
              {
                  $q->select('id','name');
              }])->find(1);
          return $phone;
              /** هني حيرجع كل الاعمده عدا الي دايرلها هيدين */
            //  return $phone
            // make some column name visible which in model hidden
              $phone->makeVisible('user_id');
              /** هذه لاخفاء حقل معين عكس الاولي  */
                 //$phone->makeHidden('id')

             // return $phone->user; // retuen user of this phone

             //get all data phone+user

    }
    public function getUserhasPhone()
    {
                    return User::whereHas('phone')->get();
    }
    public function getUserNothasPhone()
    {
        return User::whereDoesntHave('phone')->get();
    }
}
