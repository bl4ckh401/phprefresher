<html>
    <body>
        <h2>The fruit app:</h2>
        <?php
class Position
{
    public $position;
    public $duration;

    public function __construct($position, $duration)
    {
        $this->position = $position;
        $this->duration = $duration;
    }
    public function __destruct()
    {
        echo "The thing is that well have to play {$this->position} for {$this->duration} Minutes";
    }

}

$doggie = new Position("Doggy", 12);

?>
</body>

</html>