 
<!-- Example 1 -->
 class Board {
    //class body
    //class body
    //class body
 } 

 class Trunks {   
    //class body
    //class body
    //class body
 }

 class Bearings {
    //class body
    //class body
    //class body
 }

<!-- Example 2 -->

$board1= new Board();
$board2 = new Board();

$trunks1= new Trunks();
$trunks2 = new Trunks();

$board1= new Board();
$board2 = new Board();

<!-- Example 3 -->

class Board {
public $name = “default name”;
public $brand = “plan b”;
public $color = “black”;
public $price = $55;
}

class Trunks {
public $name = “default name”;
public $brand = “independent”;
public $color = “blue”;
public $price = $35;
}

class Bearings {
public $name = “default name”;
public $brand = “Lucky`s”;
public $color = “green”;
public $price = $20;
}

<!-- Example 4 -->

$board1 = new Board();
print $board1­>name;
// default name

$trunks1 = new Trunks();
print $trunks1­>name;
// default name

$bearings1 = new Bearings();
print $bearings1­>name;
// default name

<!-- Example 5 -->

public function myMethod( $argument, $another) {
// stuff
}

<!-- Example 6 -->

class Board {
public $firstName = “Plan”;
public $lastName = “B”;
public $gender = “male”;
public $price = $55;

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
       }
}
$board1 = new Board();
$board1­>firstName = “Plan”;
$board1­>lastName = “B”;

print “The board’s name is {$board1­>getName()}.”;

//The board’s name is Plan B.

class Trunks {
public $firstName = “Independent”;
public $lastName = “Company”;
public $gender = “male”;
public $price = $35;

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
       }
}
$trunks1 = new Trunks();
$trunks1­>firstName = “Independent”;
$trunks1­>lastName = “Company”;

print “The trunk’s name is {$trunks1­>getName()}.”;

//The trunk’s name is Independent Company.

class bearings {
public $firstName = “Lucky”;
public $lastName = “Aces”;
public $gender = “male”;
public $price = $20;

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
       }
}
$bearings1 = new Bearings();
$bearings1­>firstName = “Lucky”;
$bearings1­>lastName = “Aces”;

print “The bearing’s name is {$bearings1­>getName()}.”;

//The bearing’s name is Lucky Aces.

class Board {
public $brand;
public $size;
public $price;

         function __construct($title, $brand, $size, $price) {
         $this­>firstName = $brand;
         $this­>lastName = $size;
         $this­>breed = $price;
         } 

         function getName() {
         return “{$this­>firstName}” .
         “{$this­>lastName}”;
         }
}

class Trunks {
public $brand;
public $size;
public $price;

         function __construct($title, $brand, $size, $price) {
         $this­>firstName = $brand;
         $this­>lastName = $size;
         $this­>breed = $price;
         } 

         function getName() {
         return “{$this­>firstName}” .
         “{$this­>lastName}”;
         }
}

class Bearings {
public $brand;
public $size;
public $price;

         function __construct($title, $brand, $size, $price) {
         $this­>firstName = $brand;
         $this­>lastName = $size;
         $this­>breed = $price;
         } 

         function getName() {
         return “{$this­>firstName}” .
         “{$this­>lastName}”;
         }
}