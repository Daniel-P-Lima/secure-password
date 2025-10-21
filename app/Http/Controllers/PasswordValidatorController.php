<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use PasswordValidatorService;
use phpDocumentor\Reflection\Types\AbstractList;

class PasswordValidatorController extends Controller
{
    public function validatePassword(Request $request) {
        $userPassword = $request->input('password');

        if (strlen($userPassword) < 8) {
            return response()->json(["Password length need to be greater than 8"]);
        }

        if (!preg_match("/^.*[A-Z].*$/", $userPassword)) {
            return response()->json(["Password must have a capitalized letter"]);
        }

        if (!preg_match("/^.*[a-z].*$/", $userPassword)) {
            return response()->json(["Password must have a lower letter"]);
        }

        if (!preg_match("/^.*[0-9].*$/", $userPassword)) {
            return response()->json(["Password must have a number"]);
        }

        if (!preg_match("/^.*[$&+,:;=?@#|'<>._^*()%!].*$/", $userPassword)) {
            return response()->json(["Password must have one special character"]);
        }

        return response()->noContent();
    }
}
