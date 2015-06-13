<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class QuestionsTableSeeder extends Seeder{
	public function run(){
		DB::table('questions')->insert(array(
			array( 'status'=> 'pending', 'to'=>'Orange Cameroon', 'content' =>  'good Why do you guys have a nice logo', 'votes' => 2, 'from' => null,  'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array( 'status'=> 'pending', 'to'=>'MTN Cameroon', 'content' =>  'bad Why do you guys have a nice logo', 'votes' => 2, 'from' => null,  'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
			array( 'status'=> 'pending', 'to'=>'Active Spaces', 'content' =>  'ugly Why do you guys have a nice logo', 'votes' => 2, 'from' => null,  'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')),
		));
	}
}