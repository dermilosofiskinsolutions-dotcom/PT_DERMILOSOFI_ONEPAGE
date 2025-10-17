<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Profile;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::all();
        $products = Product::latest()->take(4)->get();
        $blogs = Blog::latest()->take(3)->get();
        $profiles = Profile::where('is_active', true)->latest()->take(2)->get();
        $reports = Report::where('is_active', true)->latest()->take(2)->get();

        return view('dashboard', compact('applicants', 'products', 'blogs', 'profiles', 'reports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        Applicant::create([
            'name' => $request->name,
            'email' => $request->email,
            'position' => $request->position,
            'cv_path' => $cvPath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
