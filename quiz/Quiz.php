<?php

	$question1 = $_POST["question1"];
	$question2 = $_POST["question2"];
	$question3 = $_POST["question3"];
	$question4 = $_POST["question4"];
	$question5 = $_POST["question5"];
	
	$question1Answer = "Lord of Winterfell";
	$question2Answer = "3";
	$question3Answer = "right hand";
	$question4Answer = "the direwolf";
	$question5Answer = "the Unsullied";
	
	function gradeQuiz()
	{
		global $question1, $question2, $question3, $question4, $question5;
		global $question1Answer, $question2Answer, $question3Answer, $question4Answer, $question5Answer;
		$number = 0;
		$percent = 0;
		
		if($question1 == $question1Answer)
		{
			$number++;
			$percent += 20;
		}
		if($question2 == $question2Answer)
		{
			$number++;
			$percent += 20;
		}
		if($question3 == $question3Answer)
		{
			$number++;
			$percent += 20;
		}
		if($question4 == $question4Answer)
		{
			$number++;
			$percent += 20;
		}
		if($question5 == $question5Answer)
		{
			$number++;
			$percent += 20;
		}
			
		echo "You answered <b>" . $number . "</b> out of 5 questions correctly." . "<br>";
		echo "Your score: <b>" . $percent . "<b>%";	
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Quiz Results</title>
	</head>
	<body>
		<h1>Quiz Results</h1>
		<dl>
			<dt>Question 1: Eddard Stark is also known as...</dt>
			<dd>You answered: <?php echo $question1; ?></dd>
			<dd>Correct answer: Lord of Winterfell</dd><br>
			
			<dt>Question 2: How many dragons does Daenerys have?</dt>
			<dd>You answered: <?php echo $question2; ?></dd>
			<dd>Correct answer: 3</dd><br>
			
			<dt>Question 3: Jamie Lannister loses his...</dt>
			<dd>You answered: <?php echo $question3; ?></dd>
			<dd>Correct answer: right hand</dd><br>
			
			<dt>Question 4: What is the symbol of House Stark?</dt>
			<dd>You answered: <?php echo $question4; ?></dd>
			<dd>Correct answer: the direwolf</dd><br>
			
			<dt>Question 5: The mighty army from Astapor is named...</dt>
			<dd>You answered: <?php echo $question5; ?></dd>
			<dd>Correct answer: the Unsullied</dd><br>		
		</dl>
		<?php gradeQuiz() ?>	
	</body>
</html>