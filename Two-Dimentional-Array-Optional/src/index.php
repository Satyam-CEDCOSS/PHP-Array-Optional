<link rel="stylesheet" href="./CSS/style.css">
<?php
// Main Data
$languages = array();
  
$languages['Python'] = array(
    "first_release" => "1991",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);

// Table Display
echo "<div class='container'><table><tr><th>Language</th><th>Release
 Date</th><th>Latest Version</th><th>Design By</th><th id ='description'>Description</th></tr>";
echo "<tr><th></th><th></th><th></th><th></th><th>Extension</th><th>Typing Discription</th><th>Licence</th></tr>";
foreach ($languages as $sublanguage => $detail) {
    print_r("<tr><td>$sublanguage</td>");
    print_r("<td>$detail[first_release]</td>");
    print_r("<td>$detail[latest_release]</td>");
    print_r("<td>$detail[designed_by]</td>");echo "<td>";
    print_r($detail["description"]["extension"]);echo "</td><td>";
    print_r($detail["description"]["typing_discipline"]);echo "</td><td>";
    print_r($detail["description"]["license"]);echo "</td></tr>";
}
echo "</table></div>";