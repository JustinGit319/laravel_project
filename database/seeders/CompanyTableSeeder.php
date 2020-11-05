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
            'COLT-柯爾特',
            'Kalashnikov-卡拉什尼科夫',
            'H&K-黑克勒-科赫',
            'Glock-克拉克',
            'SIG Sauer-西格&紹爾'
        ];
        return $all_company[rand(0, count($all_company)-1)];
    }
    public function GenerateCountry(){
        $all_country = [
            '美國',
            '英國',
            '俄羅斯',
            '中國',
            '印度'
        ];
        return $all_country[rand(0, count($all_country)-1)];
    }
    public function run()
    {
        for($i=0; $i<5; ++$i){
            $company = $this->GenerateCompanyName();
            $country = $this->GenerateCountry();
            DB::table('companys')->insert([
                "company_name" => $company,
                "country" => $country,
                "created_at" => Carbon::now()->subMinute(rand(1,58)),
                "updated_at" => Carbon::now()->subMinute(rand(1,58))
            ]);
        }
    }
}
