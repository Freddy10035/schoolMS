<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Staff;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $staff = Staff::factory()->create([
            'name'=> 'Fredrick Ochieng',
            'department'=>'Information Technology',
            'staffID' => 'FOIT2020',
            'password' =>'123456789'
          ]);
    
             Student::factory(6)->create([
                'staff_id' => $staff->id
             ]);    



    }
}
