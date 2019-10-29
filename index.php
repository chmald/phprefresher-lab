<?php
// Config Change
echo "<h2>Config Settings</h2>";
// System Change
echo "expose_php: ";
if (ini_get("expose_php"))
    echo "<b>true</b><br/>";
else
    echo "<b>false</b><br/>";

// App Change
echo "post_max_size > 8M: ";
if (ini_get("post_max_size")>8)
    echo "<b>true</b><br/>";
else
    echo "<b>false</b><br/>";

echo "max_execution_time > 30: ";
if (ini_get("max_execution_time")>30)
    echo "<b>true</b><br/>";
else
    echo "<b>false</b><br/>";

echo "upload_max_filesize > 2M: ";
if (ini_get("upload_max_filesize")>2)
    echo "<b>true</b><br/>";
else
    echo "<b>false</b><br/>";

// Startup Script (apache headers)
echo "<h2>Apache Proxy</h2>";
$in_array = in_array("mod_proxy", apache_get_modules());
echo "mod_proxy enabled: ";
if($in_array)
    echo "<b>true</b><br/>";
else
    echo "<b>false</b><br/>";
?>