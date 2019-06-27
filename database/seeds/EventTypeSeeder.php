<?php

use App\EventType;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->types() as $type) {
        	if(! EventType::where(['name'=> $type['name']])->first()){
        		EventType::create($type);
        	}
        }
    }

    private function types(){
    	return [
    		['name' => 'FireSide'],
    		['name' => 'Hackathon'],
    		['name' => 'iDeyaHack'],
    		['name' => 'iDeyaBrew'],
    		['name' => 'StartUp Weekend'],
    		['name' => '20/20 TechCommunity'],
    	];
    }
}
