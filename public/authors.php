<?php
include_once("../src/mysql_connect.php");
include_once("../src/header.php");
?>

    <main role="main">
        <?php
        // Attempt select query execution
        $sql = "SELECT * FROM Person LIMIT 0,100";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table class=\"table\">";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope=\"col\">fullName</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['fullName'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
        ?>
    </main>

<?php
include_once("../src/footer.php");
include_once("../src/mysql_close.php");
