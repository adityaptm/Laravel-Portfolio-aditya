<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class AdminController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if ($request->username === 'admin' && $request->password === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }

        $messages = Message::orderBy('id', 'desc')->get();
        return view('admin.dashboard', compact('messages'));
    }

    public function edit($id)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }

        $message = Message::findOrFail($id);
        return view('admin.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $message = Message::findOrFail($id);
        $message->update($request->all());

        return redirect('/admin/dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }

        Message::findOrFail($id)->delete();
        return redirect('/admin/dashboard')->with('success', 'Pesan berhasil dihapus!');
    }
}
