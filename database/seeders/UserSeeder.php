<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array('id' => '1','first_name' => 'Rama','last_name' => 'Castillo','country_id' => '104','email' => 'xexefihi@mailinator.com','password' => '$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 09:58:47','updated_at' => '2023-05-25 09:58:47'),
            array('id' => '2','first_name' => 'Brenden','last_name' => 'Roberts','country_id' => '84','email' => 'xewyl@mailinator.com','password' =>'$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 09:59:07','updated_at' => '2023-05-25 09:59:07'),
            array('id' => '3','first_name' => 'Avye','last_name' => 'Quinn','country_id' => '100','email' => 'mahusezi@mailinator.com','password' =>'$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 10:05:25','updated_at' => '2023-05-25 10:05:25'),
            array('id' => '4','first_name' => 'Amal','last_name' => 'Macdonald','country_id' => '135','email' => 'rexacuqoty@mailinator.com','password' => '$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 10:06:36','updated_at' => '2023-05-25 10:06:36'),
            array('id' => '5','first_name' => 'Meredith','last_name' => 'Horne','country_id' => '108','email' => 'cewafesa@mailinator.com','password' => '$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 10:12:29','updated_at' => '2023-05-25 10:12:29'),
            array('id' => '6','first_name' => 'shaheed','last_name' => 'hafiz','country_id' => '162','email' => 'hafizshaheed@gmail.com','password' => '$2a$12$Y/n3wz0pfyvMvV.XykjMoe20gfXcWP.wz5Gnh9cVrjmyM6pbDdii6','status' => 'A','is_deleted' => 'N','remember_token' => NULL,'created_at' => '2023-05-25 10:44:08','updated_at' => '2023-05-25 10:44:08')
          );
        DB::table('users')->insert($users);

    }
}
