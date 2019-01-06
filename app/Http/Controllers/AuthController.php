<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

use Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    private $request;
   
    public function __construct(Request $request) {
        $this->request = $request;
    }
   
    protected function jwt(User $user) {
        $payload = [
            'iss' => "eagroshop-store", // Issuer of the token
            'sub' => $user->id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + 60*60 // Expiration time
            ,'user' => $user
        ];

        return JWT::encode($payload, env('JWT_SECRET'));
    }

    public function register(Request $r)
    {        
        $v = Validator::make($r->all(), [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password'=> 'required',
                    'confirm_password' => 'required|same:password'
        ]);

        if ( $v->fails() ) 
                    return [ 'error' => $v->errors()->first() ];
        
            $r->merge( ['password' => app('hash')->make($r->password) ]);
        
        User::create($r->only([
            'email','name','password'
        ]));

        return  [ 'msg' => 'User Succefully Registered'];
    }


    public function login(User $user) {
        $this->validate($this->request, [
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        
        $user = User::where('email', $this->request->input('email'))->first();
        if (!$user) {
          
            return response()->json([
                'error' => 'Email does not exist.'
            ], 400);
        }
       
        if (Hash::check($this->request->input('password'), $user->password)) {
            return response()->json([
                'token' => $this->jwt($user)
            ], 200);
        }
        
        return response()->json([
            'error' => 'Email or password is wrong.'
        ], 400);
    }
}
