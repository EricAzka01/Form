<?php
// app/Http/Controllers/FormController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255', 
            'age' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
            'doubleValue' => 'required|numeric|between:2.50,99.99',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
        }

        return redirect()->route('showForm')->with('success', 'Form submitted successfully');
    }
}

