<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            "Comilla",
            "Feni",
            "Brahmanbaria",
            "Rangamati",
            "Noakhali",
            "Chandpur",
            "Lakshmipur",
            "Chattogram",
            "Coxsbazar",
            "Khagrachhari",
            "Bandarban",
            "Sirajganj",
            "Pabna",
            "Bogura",
            "Rajshahi",
            "Natore",
            "Joypurhat",
            "Chapainawabganj",
            "Naogaon",
            "Jashore",
            "Satkhira",
            "Meherpur",
            "Narail",
            "Chuadanga",
            "Kushtia",
            "Magura",
            "Khulna",
            "Bagerhat",
            "Jhenaidah",
            "Jhalakathi",
            "Patuakhali",
            "Pirojpur",
            "Barisal",
            "Bhola",
            "Barguna",
            "Sylhet",
            "Moulvibazar",
            "Habiganj",
            "Sunamganj",
            "Narsingdi",
            "Gazipur",
            "Shariatpur",
            "Narayanganj",
            "Tangail",
            "Kishoreganj",
            "Manikganj",
            "Dhaka",
            "Munshiganj",
            "Rajbari",
            "Madaripur",
            "Gopalganj",
            "Faridpur",
            "Panchagarh",
            "Dinajpur",
            "Lalmonirhat",
            "Nilphamari",
            "Gaibandha",
            "Thakurgaon",
            "Rangpur",
            "Kurigram",
            "Sherpur",
            "Mymensingh",
            "Jamalpur",
            "Netrokona",
        ];

        foreach ($districts as $district) {
            DB::table('districts')->insert([
                'name' => $district,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
