<?php
include_once("../src/mysql_connect.php");
include_once("../src/header.php");
include_once("../src/models/Document.php");

$offset = (isset($_GET['offset'])) ? intval($_GET['offset']) : 0;
$limit = (isset($_GET['limit'])) ? intval($_GET['limit']) : 10;
$end = $offset + $limit;
$previous = ($offset - $limit<0) ? 0 : $offset - $limit;
$next = $end + $limit;

?>

    <main role="main">
        <nav class="d-flex flex-row-reverse">
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="/documents.php?offset=<?php echo $previous;?>&limit=<?php echo $limit ?>">Previous</a></li>
                <li class="page-item"><a class="page-link" href="/documents.php?offset=<?php echo $end;?>&limit=<?php echo $next ?>">Next</a></li>
            </ul>
        </nav>
        <?php
        // Attempt select query execution
        $sql = "SELECT t1.*, 
        GROUP_CONCAT(t3.fullName) as `authorNames`
        FROM Document AS t1 
        INNER JOIN Document_has_Author AS t2 ON t2.Document_id = t1.id
        INNER JOIN Person AS t3 ON t2.Person_id = t3.id
        GROUP BY t1.id
        LIMIT " . $offset . "," . $end . ";";

        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table class=\"table\">";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope=\"col\">Id</th>";
//                echo "<th scope=\"col\">Ref</th>";
                echo "<th scope=\"col\">Title</th>";
                echo "<th scope=\"col\">Year</th>";
                echo "<th scope=\"col\">Type</th>";
                echo "<th scope=\"col\">Book</th>";
                echo "<th scope=\"col\">Authors</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_array($result)) {
                    $doc = Document::withRow($row);
                    $doc->asRow();
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
        <nav class="d-flex flex-row-reverse">
            <ul class="pagination pagination-sm">
                <li class="page-item"><a class="page-link" href="/documents.php?offset=<?php $previous;?>&limit=<?php $limit ?>">Previous</a></li>
                <li class="page-item"><a class="page-link" href="/documents.php?offset=<?php $end;?>&limit=<?php $next ?>">Next</a></li>
            </ul>
        </nav>
    </main>

<?php
include_once("../src/footer.php");
include_once("../src/mysql_close.php");
