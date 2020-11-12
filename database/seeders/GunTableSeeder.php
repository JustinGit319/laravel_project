<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return string
     */

    public function GenerateGunName($length = 2){
        $letter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $number = "1234567890";
        $len_leter = strlen($letter);
        $len_number = strlen($number);
        $rand_let = '';
        $rand_num = '';
        for($i=0; $i<=$length; ++$i){
            $rand_let .= $letter[rand(0, $len_leter-1)];
            $rand_num .= $number[rand(0, $len_number-1)];
        }
        $rand_name = $rand_let . "-" . $rand_num;
        return $rand_name;
    }

    public function GenerateGunType(){
        $all_type = [
            "步槍",
            "手槍",
            "機槍",
            "衝鋒槍",
            "狙擊槍"
        ];
        $type = $all_type[rand(0, count($all_type)-1)];
        return $type;
    }

    public function GenerateCaliber(){
        $all_caliber = [
            "7.62x39mm",
            "9x19mm",
            "5.56x45mm",
            ".50BMG",
            ".45ACP"
        ];
        return $all_caliber[rand(0, count($all_caliber)-1)];
    }

    public function GenerateCompany(){
        return rand(1, 5);
    }


    public function run(){
        for($i=0;$i<40;$i++) {
            $gun_name=$this->GenerateGunName();
            $type=$this->GenerateGunType();
            $caliber=$this->GenerateCaliber();
            $company=$this->GenerateCompany();
            DB::table('guns')->insert([
                "gun_name" => $gun_name,
                "gun_type" => $type,
                "caliber" => $caliber,
                "company" => $company,
                "created_at" => Carbon::now()->subMinute(rand(1,58)),
                "updated_at" => Carbon::now()->subMinute(rand(1,58))
            ]);
        }
    }
}
