<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public $setting;
    public function __construct()
    {
        $this->setting = Setting::first();
    }
    public function index()
    {
        return view('admin.pages.setting.edit',[
            'title' => 'Pengaturan Situs',
            'item' => $this->setting
        ]);
    }

    public function update()
    {
        request()->validate([
            'name' => ['required'],
            'description' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required'],
            'email' => ['required','email'],
            'logo' => ['image','mimes:jpg,jpeg,png']
        ]);

        $data = request()->all();
        if(request()->file('logo'))
        {
            if($this->setting->logo !== NULL)
            {
                Storage::disk('public')->delete($this->setting->logo);
            }
            $data['logo'] = request()->file('logo')->store('setting','public');
        }else{
            if($this->setting->logo !== NULL)
            {
                $data['logo'] = $this->setting->logo;
            }else{
                $data['logo'] = NULL;
            }
        }
        $this->setting->update($data);

        return redirect()->route('admin.setting.index')->with('success','Pengaturan Situs berhasil disimpan');
    }
}

