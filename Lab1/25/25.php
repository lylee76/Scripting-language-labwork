<?php
$info = [
    'name' => 'Arpana Kumal',
    'address' => 'Jhapa',
    'email' => 'info@arpana.com',
    'phone' => '9809080706',
    'website' => 'www.arpana.com'
];

echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr><th>Name</th><td>{$info['name']}</td></tr>";
echo "<tr><th>Address</th><td>{$info['address']}</td></tr>";
echo "<tr><th>Email</th><td><a href='mailto:{$info['email']}'>{$info['email']}</a></td></tr>";
echo "<tr><th>Phone</th><td>{$info['phone']}</td></tr>";
echo "<tr><th>Website</th><td><a href='http://{$info['website']}' target='_blank'>{$info['website']}</a></td></tr>";
echo "</table>";
?>
