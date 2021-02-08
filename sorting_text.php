<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Coding Sample 1</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style>
      html, body {
		  display: flex;
		  justify-content: center;
		  height: 100%;
      }
      body, div, h1, form, input, p { 
		  padding: 0;
		  margin: 0;
		  outline: none;
		  font-family: Roboto, Arial, sans-serif;
		  font-size: 16px;
		  color: #666;
      }
      h1 {
		  padding: 10px 0;
		  font-size: 32px;
		  font-weight: 300;
		  text-align: center;
      }
      p {
		font-size: 12px;
      }
      hr {
		  color: #a9a9a9;
		  opacity: 0.3;
      }
      .main-block {
		  max-width: 340px; 
		  min-height: 460px; 
		  padding: 10px 0;
		  margin: auto;
		  border-radius: 5px; 
		  border: solid 1px #ccc;
		  box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
		  background: #ebebeb; 
      }
      form {
		margin: 0 30px;
      }
      label#icon {
		  margin: 0;
		  border-radius: 5px 0 0 5px;
      }
      input[type=text]{
		  width: calc(100% - 57px);
		  height: 36px;
		  margin: 13px 0 0 -5px;
		  padding-left: 10px; 
		  border-radius: 0 5px 5px 0;
		  border: solid 1px #cbc9c9; 
		  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
		  background: #fff; 
      }
      #icon {
		  display: inline-block;
		  padding: 9.3px 15px;
		  box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
		  background: #1c87c9;
		  color: #fff;
		  text-align: center;
      }
      .btn-block {
		  margin-top: 10px;
		  text-align: center;
      }
      input[type=submit] {
		  width: 100%;
		  padding: 10px 0;
		  margin: 10px auto;
		  border-radius: 5px; 
		  border: none;
		  background: #1c87c9; 
		  font-size: 14px;
		  font-weight: 600;
		  color: #fff;
      }
      input[type=text]:submit {
		background: #26a9e0;
		cursor: pointer;
      }
    </style>
  </head>
  <body>
	<div class="main-block">
		<h1>Hello There!</h1>
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
			<p>Would you be so nice as to enter the text you would like to sort below?</p>
			<hr>
			<label id="icon" for="sorted_text"><i class="fas fa-user"></i></label>
			<input type="text" name="sorted_text" id="sorted_text" placeholder="Text to sort" required/>
			<hr>
			<div class="btn-block">
				<input class="btn btn-primary" type="submit" name="submit" value="Sort">
			</div>
			<p>Thanks so much for the consideration and I look forward to hearing back from you. Sincerely, <a href="https://www.venanciogomani.net/" target="_blank">Venancio Gomani</a>.</p>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$phpVar = filter_var($_POST['sorted_text']);
				$arr = str_split(strtolower($phpVar));
				$size =count($arr);

				for($i=0; $i<$size; $i++){
						/* 
						 * Place currently selected element array[i]
						 * to its correct place.
						 */
						for($j=$i+1; $j<$size; $j++)
						{
							/* 
							 * Swap if currently selected array element
							 * is not at its correct position.
							 */
							if($arr[$i] > $arr[$j])
							{
								$temp     = $arr[$i];
								$arr[$i] = $arr[$j];
								$arr[$j] = $temp;
							}
						}
				}
				
				$sorted_text = implode("",$arr);
				echo "
					<div><strong>Sorted As:</strong> ".$sorted_text."</div>
				";
			}
		?>
    </div>
  </body>
</html>