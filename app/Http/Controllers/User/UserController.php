<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\SponsorFollower;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Webpatser\Uuid\Uuid;

class UserController extends Controller
{


    /**
     * @SWG\Get(
     *   tags={"User"},
     *   path="/user",
     *   summary="Find all User",
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */
    public function index()
    {
        $user = User::all();
        return response()->json(['data' => $user], 200);
    }

    /**
     * @SWG\Get(
     *   tags={"User"},
     *   path="/user/{id}",
     *   summary="Find User",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Target User.",
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json(['data' => $user], 200);
    }

    /**
     * @SWG\Post(
     *   tags={"User"},
     *   path="/user/register",
     *   summary="Register User",
     *   @SWG\Parameter(
     *     name="Body",
     *     in="path",
     *     description=" name , middle_name ,last_name, email ,password ,password_confirmation,phone_number" ,
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function store( Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json( ['data' => $validator->errors()], 404);
        }

        $fields = $request->all();

        $fields['password'] =  bcrypt($request->password);

        $fields['full_name'] =  $request->name.' '.$request->middle_name.' '.$request->last_name;

        $fields['token_invitation'] = Uuid::generate()->string;

        $user = User::create($fields);

        return response()->json(['data' => $user], 200);


    }

    /**
     * @SWG\Post(
     *   tags={"User"},
     *   path="/user/register/{param}",
     *   summary="Register User more code Sponsor",
     *   @SWG\Parameter(
     *     name="Body",
     *     in="path",
     *     description=" name , middle_name ,last_name, email ,password ,password_confirmation,phone_number" ,
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */
    public function storeParam($token, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json( ['data' => $validator->errors()], 404);
        }

        $fields = $request->all();

        $fields['password'] =  bcrypt($request->password);

        $fields['full_name'] =  $request->name.' '.$request->middle_name.' '.$request->last_name;

        $fields['token_invitation'] = Uuid::generate()->string;

        $user = User::create($fields);

        if($token){

            $sponsor = User::where('token_invitation',$token)->first();

            SponsorFollower::create([
                'sponsor_id' =>  $sponsor->id,
                'follower_id' => $user->id,
            ]);
        }

        return response()->json(['data' => $user], 201);

    }

    /**
     * @SWG\Put(
     *   tags={"User"},
     *   path="/user/{id}",
     *   summary="Update User",
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     description="User ID" ,
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:users,email,'.$user->id,
            'password' => 'min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json( ['data' => $validator->errors()], 404);
        }

        if ($request->has('name')){
            $user->name = $request->name;
        }

        if ($request->has('middle_name')){
            $user->middle_name = $request->middle_name;
        }

        if ($request->has('last_name')){
            $user->last_name = $request->last_name;
        }

        if ($request->has('email') && $user->email != $request->email){
            $user->email = $request->email;
        }

        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }

        if(!$user->isDirty()){
            return response()->json(['data' => 'YAt least one different field must be specified to update'], 422);
        }

        $user->save();

        $user = User::findOrFail($id);

        $user->full_name = $user->name.' '.$user->middle_name.' '.$user->last_name;

        $user->save();

        return response()->json(['data' => $user], 200);
    }


    /**
     * @SWG\Get(
     *   tags={"User"},
     *   path="/user/search-sponsor/{id}",
     *   summary="Search Sponsor for User",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description=" User ID" ,
     *     required=true,
     *     type="integer"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function searchSponsor($id)
    {

        $user_one = User::where('id',$id)->first();

        $user_admin = User::create([
            'name' => 'Sponsor-'.$user_one->id,
        ]);

        $user = User::where('level_id','2')->get();

        return response()->json(['data' => array('users' => $user, 'user_admin' => $user_admin)] , 200 );

    }

    /**
     * @SWG\Get(
     *   tags={"User"},
     *   path="/user/payment-confirm/{iduser}/{param}",
     *   summary="Payment confirme",
     *   @SWG\Parameter(
     *     name="IdUser",
     *     in="path",
     *     description=" User ID" ,
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Parameter(
     *     name="param",
     *     in="path",
     *     description=" Code confirmation" ,
     *     required=true,
     *     type="string"
     *   ),
     *
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     */

    public function paymentConfirme(User $user, $param)
    {

        return response()->json(['data' => $user, 'confirmationCode' => $param], 200);

    }
    /**
     * @SWG\Delete(
     *     path="/user/{id}",
     *     summary="Deletes a User",
     *     description="",
     *     tags={"User"},
     *     @SWG\Parameter(
     *         description="User id to delete",
     *         in="path",
     *         name="UserId",
     *         required=true,
     *         type="integer",
     *     ),
     *   @SWG\Response(response=200, description="successful operation"),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json(['data' => $user], 200);

    }



}
