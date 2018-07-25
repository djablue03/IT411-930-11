<h1> Welcome to my Basic Arithmetic</h1>



@if($basica == "add")
	<h3> Operation: Addition</h3>
	<h4> Addend: {{$number1}} <br/>
		 Addend: {{$number2}} <br/>
		 Sum: {{$number1 + $number2}}
	</h4>
@elseif($basica == "sub")	
	<h3> Operation: Subtraction</h3>
	<h4> Minuend: {{$number1}} <br/>
		 Subtrahend: {{$number2}} <br/>
		 Difference: {{$number1 - $number2}}

	</h4>
@elseif($basica == "mul")
	<h3> Operation: Multiplication</h3>
	<h4> Factor: {{$number1}} <br/>
		 Factor: {{$number2}} <br/>
		 Product: {{$number1 * $number2}}
	</h4>
@elseif($basica == "div")
	<h3> Operation: Division</h3>
	<h4> Dividend: {{$number1}} <br/>
		 Divisor: {{$number2}} <br/>
		 Quotient: {{$number1 / $number2}}
	</h4>
@else
	<h3> Out of choice!</h3>
@endif			



