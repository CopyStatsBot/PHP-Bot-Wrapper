<?php

/*
This class was built FROM SCRATCH by https://github.com/CopyStatsBot/
For information please email CopyStatsBot@googlemail.com 
or message https://www.reddit.com/user/CopyStatsBot/

Feel free to use this, but leave this header in.

I have removed all bot-specific functions
*/


require('RedditBotClass.php');
require('string_compare.php');
require('Db.php');

class RedditBot_CopyStatsBot
{
    public  $RedditBot;             // The PHP API Wrapper made by Creesch
    public  $subReddit;             // The subreddits your bot crawls
    private $RedditDB;              // Connection to the local DB
    public  $startTime;             // When this script was first called
    
    public function __construct() // Initial
    {
        $this->screenwidth = exec('tput cols');
        $this->startTime = microtime(true);
        $this->RedditBot = new Reddit('*BOTNAME*');
        
        $this->subReddit = 'r/all/';
        $this->RedditDB  = new Db();
        $this->main();
        $this->done();
    }

    private function main()
    {
        $allPosts = $this->RedditBot->getRaw($this->subReddit); // Get All Posts
        // Your code here!
    }

    private function done()
    {
        $timeTaken = $this->timePretty((microtime(true) - $this->startTime));
        echo "Finished! - Time Taken: $timeTaken";
    }
    private function timePretty($seconds)
    {
        $t = round($seconds);
        return sprintf('%02d:%02d:%02d', ($t / 3600), ($t / 60 % 60), $t % 60);
    }

}