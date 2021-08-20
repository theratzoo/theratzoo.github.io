# we need to add after  <body class="homePage" onload="loadScript()"> 
# MAKE SURE THAT NAVBAR STARTS WITH BODY!
navbar = `cat navbar.php`
line = '<body class="homePage" onload="loadScript()">'
for i in $(find . -name '*.html'); do
	sed -i "s/$line/$line/g" $i
done
