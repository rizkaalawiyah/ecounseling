<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
// impor model file
use App\Bahagia;
use Illuminate\Http\RedirectResponse;
class BahagiaController extends Controller
{
  
    public function form(): View
    {
        return view('blog.bahagia');
    }

    public function upload(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'title' => 'nullable|max:100',
            'file' => 'required|file|max:2000'
        ]);

        $uploadedFile = $request->file('file');        

        $path = $uploadedFile->store('public/bahagias');

        $file = Bahagia::create([
            'title' => $request->title ?? $uploadedFile->getClientOriginalName(),
            'filename' => $path,
            'id_user' => auth()->id()
        ]);

            session()->flash('status', 'Konfirmasi Berhasil!');

        return redirect()
            ->back()
            ->withSuccess(sprintf('File %s has been uploaded.', $file->title));        
    }
}
