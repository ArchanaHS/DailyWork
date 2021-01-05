<!DOCTYPE html>
<html>
<head>
	<title>First Php program</title>
</head>
<body>

	<h2>php tutorial!</h2>
	<?php
	//php is case sensitive.
	//but keywords(if,else,while.echo etc),classes,function,user-defined function are not case-sensitive.
	echo "Hello India<br>";
	Echo "Hi hello <br>";

	$color="red";
	echo "hi".$color."<br>";
	//echo "Hello".$cOlor."<br>"; ---> all variable names are case sensitive.

	//->single line comment
	#->this also single line comment. 
	/* multiple line comment*/



	// PHP variables  -> variables are container for storing information.
	$text="php";
	$p=2.6;
	$q=6;

	echo $text;
	echo "<br>";
	echo $p;
	echo "<br>";
	echo $q;
	echo "<br>";
	echo "hello $text! <br>";

	echo $p+$q;


//variablescopes :-
	// 1.local variable, 2. Global variable, 3. Static variable.


	//Global Variable-> variable declared outside a function is global variable and only be accessed outside a function.

	$x="myphp"; # Global variable.

	function mytest(){
		# echo $x;// global variable cannot acces the inside the function.
	}
	mytest();
	echo "<br>";

	echo $x;


	//Local variable -> variable declared within a function is Local variable and only ba accessed within a function.

	function mytest1(){
		$y=56676;

		echo "number is $y <br>";
	}
	mytest1();
	#echo $y; // local variable connot access the outside the funaction.




	//if we want to access global variable within a function , we can use global keyword within a function to access the global variable.
	#global keyword.

	$a=56;
	$b=67;
	function my(){
		global $a, $b;

		$b= $a + $b;

	}
	my();
	echo $b; 
	echo "<br>";

	//Static Keyword-> while using static keyword we can't change and delete the variable and its value (local variable).

	function mytest2(){
		static $d=0;
		echo $d;
		$d++;

	}
	mytest2();
	echo "<br>";
	mytest2();
	echo "<br>";
	mytest2();
	echo "<br>";


	//Php Data types.
	//php supports different data types
	//Strings,Integer,Float/Double, Boolean, Array, NULL, Object,Resource.


	$txt="hi";//string
	$m=56;//integer
	$n=67.8;//float
	$cars=array("a","b","c");
	var_dump($cars);//var_dump -> includes the structured information of one or more expression that includes its type and value and output the array values.

	echo "<br><br>";

	//class and oblects

   class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {//If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";

//null datatype
//Null is a special data type which can have only one value: NULL.
$i=56;
$i=null;
var_dump($i);
echo "<br>";

//string
//string length ->strlen->return the string length,
echo strlen("hello horld!");

//word count->str_word_count-> count the number of words in a sentence.
echo "<br>";
echo str_word_count("Hello world! how are you!! ");
//string reverse->strrev->to feverse a string
echo "<br>";
echo  strrev("hello");

//strpos()-> function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

echo "<br>";
echo strpos("Hello world!", "world");

//str_replace() ->function replaces some characters with some other characters in a string.
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");


//php numbers


	?>



</body>
</html>