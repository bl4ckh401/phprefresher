<html>
    <body>
        <h2>The fruit app:</h2>
        <?php 
            class Position{
                public $position;
                public $duration;

                function __construct($position, $duration){
                    $this -> position = $position;
                    $this -> duration = $duration;
                }
                function get_position(){
                    return $this -> position;
                }
                function get_duration(){
                    return $this -> duration;
                }

            }
            
            $doggie= new Position("Doggy Style", 12);
            $cowgirl= new Position("Cow Girl", 4);


            echo $doggie->get_position() . " for " . $doggie->get_duration() . " Minutes";
            echo "<br/>";
            echo $cowgirl->get_position() . " for " . $cowgirl->get_duration() . " Minutes";

            ?>
</body>

</html>