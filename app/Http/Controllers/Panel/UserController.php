<?php

namespace App\Http\Controllers\Panel {

    use App\Models\Panel\Store;
    use App\User;
    use App\Http\Controllers\Controller;
    use http\Env\Request;

    class UserController extends Controller
    {
        public function index(){
            $user = auth()->user();
            return view("panel.profile" , compact(['user']));
        }

        public function listIndex()
        {
            $users = User::where('id' , '>' , 0)->paginate(0);
            return view("panel.list",[ 'users' => $users ]);
        }

        public function userList()
        {
            $users = User::all()->limit(10)->get();

            return response()->json([
                'status' => 'OK',
                'data' => $users,
            ]);
        }

        public function search(Request $request)
        {
            $validated = $request->validate([
                'keyword' => 'required|string'
            ]);

            $user = User::where([
                [ 'username' , '=' , $validated['keyword']  ]
            ]);
            return response()->json([
                'status' => 'OK',
                'data' => $user
            ]);
        }
    }
}
