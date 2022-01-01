<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function general(){
        return view('setting.general');
    }
    public function database(){
        return view('setting.database');
    }
    public function databaseupdate(Request $request){
        foreach ($request->except('_token') as $key => $value) {
            $this->setEnvironmentValue(Str::upper($key), $value);
        }
        return back()->with('database_setting_success', 'Database setting changed successfully!');
    }
    public function email(){
        return view('setting.email');
    }
    public function emailupdate(Request $request){
        foreach ($request->except('_token') as $key => $value) {
            $this->setEnvironmentValue(Str::upper($key), $value);
        }
        return back()->with('email_setting_success', 'Email setting changed successfully!');
    }
    public function setEnvironmentValue($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        $oldValue = env($envKey);

        $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}", $str);

        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
    }
}
