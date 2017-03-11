# PHP-RSS-Feed-Generator
PHP RSS Feed Generator With MYSQLI

Generate RSS Feed From PHP/MYSQL

- Create New Database
- Run this Below SQL Query on the Table

<pre>create table site_feed
(
  id int  not null auto_increment primary key,
  title varchar(300),
  link  varchar(300),
  description varchar(300)
)</pre>

- it creates a four rows = id, title, description, and link
- Now open db.php file and add your Database credits
- Now open feed.php  for small modification you find this below lines

```<title>YOUR SITE TITLE</title>
<link>YOUR SITE LINK</link>
<description>YOUR SITE DESCRIPTION</description>```

- replace it with your site title, site link & description
- now save the changes
- Open PHPMYADMIN and Insert the post/page, title. Link, Description on your Database table that you want to display on your RSS FEED page

<pre>RSS FEED LINK - www.example.com/feed.php</pre>


