<?php

namespace App\Http\Controllers;

abstract class Controller

public function index()
{
    return view('index'); // اینجا می‌تونید ویو رو فراخوانی کنید
}

// ذخیره داده‌ها
public function store(Request $request)
{
    // اعتبارسنجی داده‌ها
    $validated = $request->validate([
        'name' => 'required|max:255',
    ]);

    // ذخیره داده‌ها در دیتابیس
    // Model::create([...]);

    return redirect()->route('index');