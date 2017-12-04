<?php

class Document
{

    protected $id = "";
    protected $ref = "";
    protected $type = "";
    protected $title = "";
    protected $year = "";
    protected $booktitle = "";
    protected $publisher = "";
    protected $series = "";
    protected $url = "";
    protected $authorNames = "";

    public function __construct($id, $ref, $type, $title, $year, $booktitle, $publisher, $series, $url, $authorNames)
    {
        $this->id = $id;
        $this->ref = $ref;
        $this->type = $type;
        $this->title = $title;
        $this->year = $year;
        $this->booktitle = $booktitle;
        $this->publisher = $publisher;
        $this->series = $series;
        $this->url = $url;
        $this->authorNames = $authorNames;
    }

    public static function withRow(array $row)
    {
        $instance = new self(
            $row['id'],
            $row['ref'],
            $row['type'],
            $row['title'],
            $row['year'],
            $row['booktitle'],
            $row['publisher'],
            $row['series'],
            $row['url'],
            $row['authorNames']
        );
        return $instance;
    }

    function asSQLInsert()
    {
        return "INSERT INTO Document (`id`, `ref`, `type`, `title`, `year`, `booktitle`, `publisher`, `series`, `url`) VALUES
        (null, 
        \"" . $this->ref . "\", 
        \"" . $this->type . "\", 
        \"" . $this->title . "\", 
        " . $this->year . ", 
        \"" . $this->booktitle . "\", 
        \"" . $this->publisher . "\", 
        \"" . $this->series . "\", 
        \"" . $this->url . "\"
        )";
    }

    function asTable()
    {
        echo "<table class=\"table\">";
        echo "<tbody>";
        echo "<tr><th>ID</th><td>" . $this->id . "</td></tr>";
        echo "<tr><th>Ref</th><td>" . $this->ref . "</td></tr>";
        echo "<tr><th>Type</th><td>" . $this->type . "</td></tr>";
        echo "<tr><th>Title</th><td>" . $this->title . "</td></tr>";
        echo "<tr><th>Year</th><td>" . $this->year . "</td></tr>";
        echo "<tr><th>Book</th><td>" . $this->booktitle . "</td></tr>";
        echo "<tr><th>Publisher</th><td>" . $this->publisher . "</td></tr>";
        echo "<tr><th>Series</th><td>" . $this->series . "</td></tr>";
        echo "<tr><th>URL</th><td><a>" . $this->url . "</a></td></tr>";
        echo "</tbody>";
        echo "</table>";
    }

    function asRow()
    {
        echo "<tr>";
        echo "<td>" . $this->id . "</td>";
        echo "<td><a target=\"_blank\" href=\"http://dblp.uni-trier.de/" . $this->url . "\">" . $this->title . "</a></td>";
        echo "<td>" . $this->year . "</td>";
        echo "<td>" . $this->type . "</td>";
        echo "<td>" . $this->booktitle . "</td>";
        echo "<td>" . $this->authorNames . "</td>";
        echo "</tr>";
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getBooktitle()
    {
        return $this->booktitle;
    }

    /**
     * @param string $booktitle
     */
    public function setBooktitle($booktitle)
    {
        $this->booktitle = $booktitle;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}