<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller
{
    public function inscrire(Request $request) {
        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->telephone = $request->telephone;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $datetime = new DateTime();
        $date=date_format($datetime,"Yms");
        $num=rand(1, 999);
        $twoFirstLetterName =\strtoupper(\substr($request->firstName,0,2));
        $matricule = $date.$twoFirstLetterName.$num;
        $user->matricule = $matricule;
        $user->statut = 'normal';

        $roleId = Role::findOrFail($request->role_id);
        $idParent = Parents::findOrFail($request->parent_id);
        dd($idParent);
        $user->save();
        $roleId->users()->attach($user);

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'success' => true,
            'data' => $user
        ], Response::HTTP_OK);
    }
}
