<?php

use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * We can seed specific data directly!
         * This /can/ be good for testing, but can
         * be cumbersome.
         * Great for default configurations if you
         * have an application "options" or "settings"
         * table!
         */

        // First Tweet.
        DB::table( 'tweets' )->insert( array(
            'author' => 'Bob',
            'message' => 'My first Tweet!'
        ) );
        // Second Tweet.
        DB::table( 'tweets' )->insert( array(
            'author' => 'Sarah',
            'message' => 'Hello, world!'
        ) );
        // Third Tweet.
        DB::table( 'tweets' )->insert( array(
            'author' => 'Sam',
            'message' => '\'Sup, yo!?'
        ) );
    }
}
