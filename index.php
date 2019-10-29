<?php
// Config Change
echo "<h2>Config Settings</h2>";
// System Change

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

// Module Install
echo "<h2>Module Install</h2>";
try {
    //$im = ssh2_connect("localhost", 22);
    echo "SSH2 Module installed.";
} catch (Exception $e) {
    echo "SSH2 Module is not installed.";
}

// Startup Script (apache headers)
echo "<h2>Apache Headers</h2>";
print_r(apache_get_modules());
?>