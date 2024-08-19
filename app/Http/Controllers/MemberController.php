<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function user()
    {
        $data['active_class'] = 'user';
        $data['getRecord'] = Member::getRecordMember();
        return view('user.list', $data);
    }

    public function showRegistrationForm()

    {

        return view('user.register');
    }

    public function register(Request $request)
    {
        request()->validate([
            'full_name' => 'required|string|max:255',
            'place_of_birth' => 'required|string|max:255',
            'dob' => 'required|date',
            'full_address' => 'required|string',
            'nationality' => 'required|string|max:255',
            'city_country' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|string|email|max:255|unique:members',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'membership_type' => 'required|string',
        ]);

        $member = new Member;
        $member->full_name = trim($request->full_name);
        $member->place_of_birth = trim($request->place_of_birth);
        $member->dob = $request->dob;
        $member->full_address = trim($request->full_address);
        $member->nationality = trim($request->nationality);
        $member->city_country = trim($request->city_country);
        $member->gender = trim($request->gender);
        $member->email = trim($request->email);
        $member->phone_number = trim($request->phone_number);
        $member->password = Hash::make($request->password);
        $member->membership_type = trim($request->membership_type);
        $member->save();

        // Auth::login($member);

        return redirect()->route('user.userdashboard')->with('success', 'Registration successful.');
    }

    public function dashboard()
    {
        $member = Member::all();
        return view('user.userdashboard', compact('member'));
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }

    // public function showProfileForm($id)
    // {
    //     $data['getRecord'] = Member::findOrFail($id);
    //     return view('user.profile', $data);
    // }

    // public function update($id, Request $request)
    // {
    //     request()->validate([
    //         'full_name' => 'required|string|max:255',
    //         'place_of_birth' => 'required|string|max:255',
    //         'dob' => 'required|date',
    //         'full_address' => 'required|string',
    //         'nationality' => 'required|string|max:255',
    //         'city_country' => 'required|string|max:255',
    //         'gender' => 'required|string',
    //         'email' => 'required|string|email|max:255|unique:members',$id,
    //         'phone_number' => 'required|string|max:15',
    //         'password' => 'required|string|min:8',
    //         'membership_type' => 'required|string',
    //     ]);



    //         $save = Member::getSingle($id);
    //         $save->full_name = trim($request->full_name);
    //         $save->place_of_birth = trim($request->place_of_birth);
    //         $save->dob = $request->dob;
    //         $save->full_address = trim($request->full_address);
    //         $save->nationality = trim($request->nationality);
    //         $save->city_country = trim($request->city_country);
    //         $save->gender = trim($request->gender);
    //         $save->email = trim($request->email);
    //         $save->phone_number = trim($request->phone_number);
    //         if(!empty($request->password))
    //         {
    //             $save->password = Hash::make($request->password);
    //         }
    //         $save->membership_type = trim($request->membership_type);
    //         $save->save();
    //         return redirect()->route('user.userdashboard')->with('success', 'Registration successful.');
    // }

    public function delete_user($id)
    {
        $save = Member::getSingle($id);
        $save->is_deleted = 1;
        $save->save();

        return redirect()->back()->with('success', "Member successfully deleted  ");
    }


}
