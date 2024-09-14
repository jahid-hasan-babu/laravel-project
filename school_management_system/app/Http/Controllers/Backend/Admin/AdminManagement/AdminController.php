<?php

namespace App\Http\Controllers\Backend\Admin\AdminManagement;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    

    {
        $data['admins'] = User::latest()->get();
        return view('backend.admin.admin_management.admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('backend.admin.admin_management.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request):RedirectResponse
    {

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('am.admin.index');
        // $admin = new Admin();
        // if ($req->hasFile('image')) {
        //     $image = $req->file('image');
        //     $imageName = $req->name . '_' . time() . '.' . $image->getClientOriginalExtension();
        //     $folderName = 'admins/';
        //     $path = $image->storeAs($folderName, $imageName, 'public');
        //     $admin->image = $path;
        // }
        // $admin->name = $req->name;
        // $admin->email = $req->email;
        // $admin->password = $req->password;
        // $admin->created_by = auth()->guard('admin')->user()->id;
        // $admin->save();
        // return redirect()->route('am.admin.index')->withStatus(__('Admin updated successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}