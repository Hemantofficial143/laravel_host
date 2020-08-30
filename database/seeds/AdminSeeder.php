<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $admin[0] = array(
                'name' => "Hemant Jangid",
                'email' => "hemant@admin.com",
                'password' => Hash::make("hemant"),
                'gender' => "M",
                'profile_img' => "profile_dp_HemantJangid_1597262625.PNG",
                'status' => "1",
            );
            $admin[1] = array(
                'name' => "Urvashi Khatri",
                'email' => "urvashi@admin.com",
                'password' => Hash::make("urvashi"),
                'gender' => "F",
                'profile_img' => "profile_dp_UrvashiKhatri_1597262677.PNG",
                'status' => "1",
            );
           // <img src="https://ui-avatars.com/api/?name=Yash+Daiya&amp;rounded=true" alt="Image" class="img-circle">
            $admin[2] = array(
                'name' => "Mohit Prajapati",
                'email' => "mohit@admin.com",
                'password' => Hash::make("mohit"),
                'gender' => "M",
                'profile_img' => "profile_dp_MohitPrajapati_1597262650.PNG",
                'status' => "1",
            );

            $i = 0;
            foreach ($admin as $key => $value) {
                Admin::create([
                    'name' => $admin[$i]['name'],
                    'email' => $admin[$i]['email'],
                    'password' => $admin[$i]['password'],
                    'gender' => $admin[$i]['gender'],
                    'profile_img' => $admin[$i]['profile_img'],
                    'status' => '1',
                ]);
                $i++;
            }
                
            
        
    }
}
