Timed Release Shortcode
=======================

A timed release shortcode for wordpress.

Basic functionally to specify a section of your post to not display until a certain time.

Tags
----
<strong>Tag</strong>  
[timed-release date="" time=""] [/timed-release]

<strong>Default</strong>  
[timed-release] Lorem Ipsum ... [/timed-release]

<strong>Example</strong>  
[timed-release date="1-1-2016" time="00:01"]Happy New Year![/timed-release]  
This will show "Happy New Year!" at 12:01AM on the 1/1/2016.  
  
The format for the date is <em>"dd-mm-yyyy"</em> or a variation thereof.  
The format for the time is <em>"HH:MM"</em> in 24 hour notation (Hours from 0-23)

Not specifying a date or time will cause the tag to default to 24 hours of the time the post was made.

####NOTE THAT THIS SHORTCODE ADJUSTS FOR THE GMT OFFSET BASED OFF YOUR WORDPRESS SETTINGS SO MAKE SURE YOUR TIMEZONE IS CORRECT



