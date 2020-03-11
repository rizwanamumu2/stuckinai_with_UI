<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;


class ProfileImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function upload_avatar(\App\User $user)
    {
    return view('image', compact('user'));
    }

    public function update_avatar(Request $request, \APP\User $user)
    
    {
        

            // $avatar=$request->file('avatar');
            // $imageName = $avatar->getClientOriginalName();
            // $fileName = "profile_". $imageName;
            // $directory = public_path('/uploads/avatars/');
            // $imageUrl = $directory.$fileName;
            // Image::make($image)->resize(300, 300)->save($imageUrl);
            // $user = Auth::user();
            // $user->avatar = $fileName;
            //$filename= time() . '.' . $avatar->getClientOriginalExtension();
            //Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'. $filename)) ;
            
            //$user->avatar= $filename;
          
            //$user_id=auth()->user()->id;
            //$avatar= $request->file('avatar')->store('/public/uploads/avatars');

            
            //     if($request->hasFile('avatar')){
            //     $file = Input::file('avatar');
            // $img = Image::make($file);
            // Response::make($img->encode('jpeg'))->store('/public/uploads/avatars/'. $filename);

            // $user = Auth::user();
            // //$user->name = $request->get('name');
            // $user->avatar = $request->post($img);
            
            
            $user_id=auth()->user()->id;
            if($request->hasFile('avatar')){
                $file=$request->file('avatar');
                $text=$file->getClientOriginalExtension();
                $filename=time().'.'.$text;
                $file->move('uploads/avatars',$filename);
                User::where('id',$user_id)->update([
                    'avatar'=> $filename,
                ]);
            }
            return redirect()->route('profile.show', ['auth()->user()->id' => $user_id]);
    }

    
}



