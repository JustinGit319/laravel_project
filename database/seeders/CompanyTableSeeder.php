<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return string
     */
    public function GenerateCompanyName(){
        $all_company = [
            'COLT',
            'Kalashnikov',
            'H&K',
            'Glock',
            'SIG Sauer'
        ];
        return $all_company;
    }
    public function GenerateCountry(){
        $all_country = [
            '美國',
            '英國',
            '俄羅斯',
            '中國',
            '印度'
        ];
        return $all_country;
    }
    public function run()
    {
        for($i=0; $i<5; ++$i){
            $company = $this->GenerateCompanyName();
            $country = $this->GenerateCountry();
            DB::table('companies')->insert([
                "company_name" => $company[$i],
                "country" => $country[$i],
                "created_at" => Carbon::now()->subMinute(rand(1,58)),
                "updated_at" => Carbon::now()->subMinute(rand(1,58))
            ]);
        }
    }
}
