<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'district_id' => 47,
            'name' => "Banani",
            'created_at' => Carbon::now()
        ]);
        DB::table('locations')->insert([
            'district_id' => 47,
            'name' => "Dhanmondi",
            'created_at' => Carbon::now()
        ]);
        DB::table('locations')->insert([
            'district_id' => 47,
            'name' => "Mirpur",
            'created_at' => Carbon::now()
        ]);
    }
}
