<?php

namespace Database\Seeders;

use App\Models\SuperAdmmin\Tenants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenants::insert([
            [
                'name'=> 'Kfc',
                'domain'=>'kfc.test',
                'ApiKey'=>'kfc'
            ],
            [
                'name'=> 'Mackdonaled',
                'domain'=>'mac.test',
                'ApiKey'=>'mac'
            ],
            [
                'name'=> 'BuregerKing',
                'domain'=>'BuregerKing.test',
                'ApiKey'=>'BuregerKing'
            ],
            [
                'name'=> 'crepeyano',
                'domain'=>'crepeyano.test',
                'ApiKey'=>'crepeyano'
            ],
            [
                'name'=> 'pizza Hut',
                'domain'=>'pizza.test',
                'ApiKey'=>'pizzahut'
            ],
            [
                'name'=> 'Bafflo Buerger',
                'domain'=>'Bafflo.test',
                'ApiKey'=>'Bafflo'
            ],
            [
                'name'=> 'test1',
                'domain'=>'test1.test',
                'ApiKey'=>'test1'
            ],
            [
                'name'=> 'test2',
                'domain'=>'test2.test',
                'ApiKey'=>'test2'
            ],
            [
                'name'=> 'test3',
                'domain'=>'test3.test',
                'ApiKey'=>'test3'
            ],

            [
                'name'=> 'test4',
                'domain'=>'test4.test',
                'ApiKey'=>'test4'
            ],
            [
                'name'=> 'test5',
                'domain'=>'test5.test',
                'ApiKey'=>'test5'
            ], [
                'name'=> 'test6',
                'domain'=>'test6.test',
                'ApiKey'=>'test6'
            ], [
                'name'=> 'test7',
                'domain'=>'test7.test',
                'ApiKey'=>'test7'
            ], [
                'name'=> 'test8',
                'domain'=>'test8.test',
                'ApiKey'=>'test8'
            ], [
                'name'=> 'test9',
                'domain'=>'test9.test',
                'ApiKey'=>'test9'
            ], [
                'name'=> 'test10',
                'domain'=>'test10.test',
                'ApiKey'=>'test10'
            ], [
                'name'=> 'test11',
                'domain'=>'test11.test',
                'ApiKey'=>'test11'
            ], [
                'name'=> 'test12',
                'domain'=>'test12.test',
                'ApiKey'=>'test12'
            ], [
                'name'=> 'test13',
                'domain'=>'test13.test',
                'ApiKey'=>'test13'
            ], [
                'name'=> 'test14',
                'domain'=>'test14.test',
                'ApiKey'=>'test14'
            ], [
                'name'=> 'test15',
                'domain'=>'test15.test',
                'ApiKey'=>'test15'
            ], [
                'name'=> 'test16',
                'domain'=>'test16.test',
                'ApiKey'=>'test16'
            ], [
                'name'=> 'test17',
                'domain'=>'test17.test',
                'ApiKey'=>'test17'
            ], [
                'name'=> 'test18',
                'domain'=>'test18.test',
                'ApiKey'=>'test18'
            ], [
                'name'=> 'test19',
                'domain'=>'test19.test',
                'ApiKey'=>'test19'
            ], [
                'name'=> 'test20',
                'domain'=>'test20.test',
                'ApiKey'=>'test20'
            ], [
                'name'=> 'test21',
                'domain'=>'test21.test',
                'ApiKey'=>'test21'
            ], [
                'name'=> 'test22',
                'domain'=>'test22.test',
                'ApiKey'=>'test22'
            ], [
                'name'=> 'test23',
                'domain'=>'test23.test',
                'ApiKey'=>'test23'
            ], [
                'name'=> 'test24',
                'domain'=>'test24.test',
                'ApiKey'=>'test24'
            ], [
                'name'=> 'test25',
                'domain'=>'test25.test',
                'ApiKey'=>'test25'
            ],
        ]);
    }
}
