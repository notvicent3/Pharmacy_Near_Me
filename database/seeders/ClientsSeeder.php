<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $filePathName='D:\refernce_osama\names\users.txt';
        $filePathEmail='D:\refernce_osama\names\client_email.txt';
        $fileName = fopen($filePathName, "r");
        $fileEmail = fopen($filePathEmail, "r");
        
        $x=0;
        while (($line = fgets($fileName)) !== false) 
        {
            $user = new User();
            $user->password = Hash::make('123456789');
            $user->is_active = 1;
             $user->name = $line;
            $user->email =fgets($fileEmail);
                   
       
        if ($user->save()) {
            $user->attachRole('client');
            Client::create([
                'user_id' => $user->id
            ]); 
     }
    }
  
        // for ($i = 1; $i <= 10; $i++) {
 
        //     $user = new User();
        //     $user->name = Str::random(8);
        //     $user->email = Str::random(12) . '@gmail.com';
        //     $user->password = Hash::make('123456789');
        //     $user->is_active = 1;
        //     if ($user->save()) {
        //         $user->attachRole('client');
        //         Client::create([
        //             'user_id' => $user->id
        //         ]);
        //     }
        // }
    }
}
