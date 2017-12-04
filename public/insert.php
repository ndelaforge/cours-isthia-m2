<?php
include_once("../src/conf.php");
include_once("../src/mysql_connect.php");
include_once("../src/header.php");
include_once("../src/models/Document.php");

$doc = new Document(
    (isset($_POST['ref'])) ? $_POST['ref'] : "",
    (isset($_POST['type'])) ? $_POST['type'] : "",
    (isset($_POST['title'])) ? $_POST['title'] : "",
    (isset($_POST['year'])) ? $_POST['year'] : "",
    (isset($_POST['booktitle'])) ? $_POST['booktitle'] : "",
    (isset($_POST['publisher'])) ? $_POST['publisher'] : "",
    (isset($_POST['series'])) ? $_POST['series'] : "",
    (isset($_POST['url'])) ? $_POST['url'] : ""
);

//if ($result = mysqli_query($link, $sql)) {
//    if (mysqli_num_rows($result) > 0) {
//        echo "<table class=\"table\">";
//        echo "<thead>";
//        echo "<tr>";
//        echo "<th scope=\"col\">id</th>";
//        echo "<th scope=\"col\">ref</th>";
//        echo "<th scope=\"col\">title</th>";
//        echo "<th scope=\"col\">year</th>";
//        echo "</tr>";
//        echo "</thead>";
//        echo "<tbody>";
//        while ($row = mysqli_fetch_array($result)) {
//            echo "<tr>";
//            echo "<td>" . $row['id'] . "</td>";
//            echo "<td>" . $row['ref'] . "</td>";
//            echo "<td>" . $row['title'] . "</td>";
//            echo "<td>" . $row['year'] . "</td>";
//            echo "</tr>";
//        }
//        echo "</tbody>";
//        echo "</table>";
//        // Free result set
//        mysqli_free_result($result);
//    } else {
//        echo "No records matching your query were found.";
//    }
//} else {
//    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
//}
?>

    <main role="main">

        <?php
        // Attempt select query execution
        $sql = $doc->asSQLInsert();
        echo "<pre>".$sql."</pre>";

//        $doc->asTable()
        ?>
    </main>

<?php
include_once("../src/footer.php");
include_once("../src/mysql_close.php");
