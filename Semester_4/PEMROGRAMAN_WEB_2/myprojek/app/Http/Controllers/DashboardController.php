<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showDataPengguna()
    {
        
        $data['users'] = DB::select('SELECT * FROM users');
 return view('data_pengguna', $data);
    }

    public function createUser()
    {
        return view('tambahPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $nimInput = $request->input('nimInput');
        $namaInput = $request->input('namaInput');
        $prodiInput = $request->input('prodiInput');

        // dd($request->input(''));

        $query = DB::table('mahasiswa')->insert([
            'nim' => $nimInput,
            'nama' => $namaInput,
            'prodi' => $prodiInput
        ]);

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function showUser(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser(string $id)
    {
        $data['users'] = DB::table('users')->where('id', $id)->first();

        return view('editPengguna', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUsers(Request $request, string $id)
    {
        $nimInput = $request->input('nimInput');
        $namaInput = $request->input('namaInput');
        $prodiInput = $request->input('prodiInput');

        $query = DB::table('users')->where('id', $id)->update([
            'nim' => $nimInput,
            'nama' => $namaInput,
            'prodi' => $prodiInput
        ]);

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Diupdate');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyUser(string $id)
    {
        $query = DB::table('users')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Dihapus');
        }

    }

    
    public function showPost()
    {
        $data['posts'] = DB::select('SELECT * FROM posts');
 return view('data_post', $data);

    }

    public function create()
    {
        return view('tambahPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $titleInput = $request->input('titleInput');
        $authorInput = $request->input('authorInput');
        $imageInput = $request->input('imageInput');
        $bodyInput = $request->input('bodyInput');

        // dd($request->input(''));

        $query = DB::table('posts')->insert([
            'title' => $titleInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'body' => $bodyInput
        ]);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Ditambahkan');
        }
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
        $data['posts'] = DB::table('posts')->where('id', $id)->first();

        return view('editPost', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $titleInput = $request->input('titleInput');
        $authorInput = $request->input('authorInput');
        $bodyInput = $request->input('bodyInput');

        $query = DB::table('posts')->where('id', $id)->update([
            'title' => $titleInput,
            'author' => $authorInput,
            'body' => $bodyInput
        ]);

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Diupdate');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('dashboard')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard')->with('failed', 'Data Gagal Dihapus');
        }

    }
}