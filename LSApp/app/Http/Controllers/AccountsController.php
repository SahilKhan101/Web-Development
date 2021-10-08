<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Account;

// function updateDotEnv($key, $newValue, $delim='')
// {

//     $path = base_path('.env');
//     // get old value from current env
//     $oldValue = env($key);

//     // was there any change?
//     if ($oldValue === $newValue) {
//         return;
//     }

//     // rewrite file content with changed data
//     if (file_exists($path)) {
//         // replace current value with new value 
//         file_put_contents(
//             $path, str_replace(
//                 $key.'='.$delim.$oldValue.$delim, 
//                 $key.'='.$delim.$newValue.$delim, 
//                 file_get_contents($path)
//             )
//         );
//     }
// }

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.techfest.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' =>'required|same:password'
        ]);

        $account = new Account;
        $account->name = $request->input('name');
        $account->email = $request->input('email');
        $account->password = $request->input('password');
        $account->user_id = auth()->user()->id;
        $account->save();

        // updateDotEnv('GlobalAccount', $account);

        return redirect('/tf')->with('success', 'Account Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::find($id);
        return View('pages.techfest.AccountsIndex')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
