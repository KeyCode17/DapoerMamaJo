<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(About $about)
    {
        return redirect('/dashboard/about/about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (About::all()->first()->icon != 'public/index/icon.png') {
            Storage::delete(About::all()->first()->icon);
        }
        if (About::all()->first()->index != 'public/index/index.png') {
            Storage::delete(About::all()->first()->index);
        }

        About::truncate();

        About::create([
            'title' => "About",
            'slug' => "about",
            'icon' => "public/index/icon.png",
            'index' => "public/index/index.png",
            'body' => "<div>Kami menyediakan layanan catering Sego Mangkok di Malang sejak tahun 2010. Kami spesialis dalam menyajikan makanan nasi kotak dan tumpeng yang lezat. Khusus untuk catering Lebaran, kami juga memiliki menu paket Lebaran yang istimewa.<br><br></div><div>Kami mengutamakan kualitas makanan dan kepuasan pelanggan kami. Semua hidangan yang kami sediakan tidak mengandung MSG (Monosodium Glutamate) dan terjamin kehalalannya. Kami menggunakan bahan-bahan berkualitas tinggi dan proses masak yang higienis untuk memberikan makanan yang lezat dan aman dikonsumsi.<br><br></div><div>Lokasi kami berada di Malang, dan kami siap melayani pesanan catering untuk berbagai acara, seperti perayaan Lebaran, acara keluarga, pernikahan, rapat, dan lainnya. Kami memiliki paket catering yang fleksibel dan dapat disesuaikan dengan kebutuhan Anda. Kami berkomitmen untuk memberikan pengalaman kuliner yang nikmat dan memuaskan bagi setiap pelanggan kami.<br><br></div><div>Untuk informasi lebih lanjut atau untuk memesan catering, silakan hubungi kami di nomor kontak yang tertera di bawah ini:<br><br></div><div><br><strong>Dapoer Mama Jo</strong><br>Lokasi: Malang<br>Telepon: +62 812-3484-2454<br>Instagram: <a href='https://www.instagram.com/dapoermamajo/'>Dapoer Mama Jo</a><br><br></div><div>Terima kasih atas minat dan kepercayaan Anda kepada kami. Kami siap memberikan pengalaman kuliner yang istimewa dan memuaskan untuk acara Anda.</div>"
            ]);

        return redirect('/dashboard/about/about')->with('success', 'About has been reset!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:abouts',
            'icon' => 'image|required',
            'index' => 'image|required',
            'body' => 'required',
        ]);

        if ($request->file('icon')) {
            $Data['icon'] = $request->file('icon')->store('public/index');
        }
        if ($request->file('index')) {
            $Data['index'] = $request->file('index')->store('public/index');
        }

        About::Create($Data);
        Artisan::call('storage:link');
        return redirect('/dashboard/about/about')->with('success', 'New about has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show', [
            'title' => 'About',
            'about' => $about,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', [
            'title' => 'Form Edit || ',
            'about' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $rules = [
            'body' => 'required',
        ];

        $Data = $request->validate($rules);

        if ($request->file('icon') != '') {
            if ($request->oldIcon != 'public/index/icon.png') {
                Storage::delete($request->oldIcon);
            }
            $Data['icon'] = $request->file('icon')->store('public/index');
            Artisan::call('storage:link');
        }

        if ($request->file('index') != '') {
            if ($request->oldIndex != 'public/index/index.png') {
                Storage::delete($request->oldIndex);
            }
            $Data['index'] = $request->file('index')->store('public/index');

            Artisan::call('storage:link');
        }

        About::where('id', $about->id)->update($Data);
        return redirect('/dashboard/about/about')->with('success', 'About has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        Storage::delete($about->image);
        About::destroy($about->id);
        Picture::destroy($about->id);
        return redirect('/dashboard/about/about')->with('success', 'About has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(About::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
