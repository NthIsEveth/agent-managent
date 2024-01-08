<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\BaseAuthRequest;
use App\Utils\Constants;

class BaseController extends Controller
{
    public function login (BaseAuthRequest $request) {
        $authType = $request->get('authType');
        $credentials = Constants::getCredential($authType);
        $token = auth($authType)->attempt($credentials);
        return response()->json(compact('token'));
    }
    public function logout(BaseAuthRequest $request) {
        $authType = $request->get('authType');
        auth($authType)->logout();
        return response()->json(Constants::createSuccessData());
    }
}
