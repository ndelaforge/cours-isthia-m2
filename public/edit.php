<?php
include_once("../src/header.php");
?>
    <main role="main">
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="docReference">Reference</label>
                <input type="text" class="form-control form-control-sm" id="docReference" name="ref" placeholder="Reference">
            </div>
            <div class="form-group">
                <label for="docType">Example select</label>
                <select class="form-control form-control-sm" name="type" id="docType">
                    <option>Article</option>
                    <option>Book</option>
                    <option>Phd</option>
                </select>
            </div>
            <div class="form-group">
                <label for="docTitle">Title</label>
                <input type="text" class="form-control form-control-sm" id="docTitle" name="title" placeholder="Document title">
            </div>
            <div class="form-group">
                <label for="docYear">Year</label>
                <input type="number" class="form-control form-control-sm" id="docYear" name="year" placeholder="Document publication year">
            </div>
            <div class="form-group">
                <label for="docURL">Link</label>
                <input type="url" class="form-control form-control-sm" id="docURL" name="url" placeholder="Link to the document (optionnal)">
            </div>
            <div class="form-group">
                <label for="docBookTitle">Book Title</label>
                <input type="text" class="form-control form-control-sm" id="docBookTitle" name="booktitle" placeholder="Title of the book (optionnal)">
            </div>
            <div class="form-group">
                <label for="docPublisher">Publisher</label>
                <input type="text" class="form-control form-control-sm" id="docPublisher" name="publisher" placeholder="Name of the publisher (optionnal)">
            </div>
            <div class="form-group">
                <label for="docSeries">Series</label>
                <input type="text" class="form-control form-control-sm" id="docSeries" name="series" placeholder="Name of the serie (optionnal)">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
<?php
include_once("../src/footer.php");
