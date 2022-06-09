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
    // function __destruct(){
    //     echo "The thing is that well have to play {$this->position} for {$this->duration} Minutes";
    // }
    public function instructions()
    {
        echo "This game is so sweet you'll want to play {$this->position} everyday for {$this->duration} Minutes";
    }
}

class Doggie extends Position
{
    public function __construct($position, $duration, $level)
    {
        $this->position = $position;
        $this->duration = $duration;
        $this->level = $level;
    }
    public function info()
    {
        echo "I'd love to play a game with you called {$this->position} it takes {$this->duration} minutes and we'll play on {$this->level} level.";
    }
}

$doggie = new Doggie("Doggy", 12, "Hard");
$doggie->info();
$doggie->instructions();

?>
</body>

</html>
