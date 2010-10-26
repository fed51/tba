
<!--
	MENU BAR BEGIN
-->
<div class="sidebar">
<div class="search">
<form class="search">
<input class="search" type="text" name="search" value="Search" onFocus="if(this.value=='Search')this.value='';" onBlur="if(this.value=='')this.value='Search';"  />
<input class="go" id="go" type="submit" name="go" value="Go!" />
</form>
</div>

<div class="block">
<!--
	MENU ITEM BEGIN
	some of these item will be static, some should only diplay
	if the condition of authorization is met (ie admin, registered user, etc)
-->
<?php echo Templater::Navigation(array('Item 1', 'Item 2', 'Item 3', 'Item 4')); ?>
<!--
	MENU ITEM END
-->
</div>

<div class="block">
  <div>
  facebook badge
  </div>
  <div>
  twitter badge
  </div>
  <div>
  rss badge
  </div>
</div>
</div>
<!--
	MENU BAR END
-->
<div class="main">
<div class="news">
<?php include 'news.php'; ?>
</div>