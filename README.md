# Reddit-CopyStatsBot

This is a Bot Wrapper system for all your Scripted Bots.

## How to use?

Rename BOTNAME (*everywhere*) with the name of your bot. This includes filenames and code.

Add your bots personal details to BOTNAME/BOTNAME_Config.json

If you have already made a bot, you can get it's details [here](https://www.reddit.com/prefs/apps/), you can also use that link to make a bot!

Once that's all done, add you will need to set up a mysql server, it isn't too difficult. If your on Windows, I suggest using [Cygwin](https://cygwin.com/install.html). You can find out how to set it up [here](https://www.rafaelhart.com/2014/08/setting-up-mysql-on-cygwin/).

You will need a sql table to hold your ProcessedPosts. You can make your table with this:

`CREATE TABLE CopyStatsBot_ProcessedPosts (`
`  'post_id' varchar(10) NOT NULL,`
`  'post_timestamp' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,`
`  'post_author' varchar(64) NOT NULL,`
`  PRIMARY KEY ('post_id')`
`) ENGINE=InnoDB DEFAULT CHARSET=latin1;`

The purpose of this table is to make sure you dont waste time and resources by checking already checked posts.

Once your mysql server is up, add its details to Db.php.

##

## RedditBotClass - PHP API

This was made by [creesch](https://github.com/creesch/PHP-script-wrapper-for-reddit), I have not made it, only slightly modified it.

You can view his GitHub to see how to use it. In my Bot Wrapper, you can use it like this:

`$myComments = $this->RedditBot->getRaw("/user/BOTNAME/comments/");`
`var_dump($myComments);`
