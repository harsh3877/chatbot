<!DOCTYPE html>
<html>
<head>
	<title>My custom chatbot</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/intro.js/3.1.0/introjs.min.css" />
	<style type="text/css">

		#ans{
			width: 100%;
    border: 1px solid black;
    border-radius: 5px;
		}
		.body{
			/*background: #d2d2d2;*/
			background: rgb(2,0,36);
			background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(0,128,128,1) 68%, rgba(0,212,255,1) 100%);
			height: 400px;
			max-height: 400px;
			overflow-y: auto;
			position: relative;
			scroll-behavior: smooth;
		}

				/* width */
		.body::-webkit-scrollbar {
		  width: 5px;
		}

		/* Track */
		.body::-webkit-scrollbar-track {
		  box-shadow: inset 0 0 5px grey; 
		  border-radius: 10px;
		}
		 
		/* Handle */
		.body::-webkit-scrollbar-thumb {
		  background: red; 
		  border-radius: 10px;
		}

		/* Handle on hover */
		.body::-webkit-scrollbar-thumb:hover {
		  background: #b30000; 
		}

		.outercontainer{
			border-radius: 10px;
			border: 1px solid #fff;
			width: 40%;
			box-shadow: 2px 2px 14px 0px rgba(0,0,0,0.7);
			 }

		.container{
			 display: flex;
			  justify-content: center;
			  flex-flow: column;
			  align-items: center;
			 }
		.heading{
			background-color: rgba(2,0,36,1);
			color: #fff;
			text-transform: capitalize;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
		}

		.inmsg{
			background-color: rgba(0,212,255,1);
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}

		.question{
			background: #ff0038;
			padding: 2px 5px;
			margin-left: 5px;
			border-radius: 10px;
			display: inline-block;
			margin-bottom: 40px;
			max-width: 70%;
			color: #fff;
		}
		.auto{
			margin-bottom: 5px !important; 
		}
		.answer{
			background: #ca2c92;
			color: #fff;
			padding: 2px 5px;
			border-radius: 10px;
			display: inline-block;
			float: right;
			margin-top: -20px;
			max-width: 70%;
			margin-right: 5px;
		}

		.overlay{
			background: rgba(0,0,0,0.2);
		    width: 100%;
		    height: 100%;
		    z-index: 100;
		    position: absolute;
		    display: none;
		}

		.overlay img{
			width: 100px;
			margin-top: 35%;
		}

		.typing{
			width: 20px;
		}

		@media screen and (max-width: 768px) {
		 .outercontainer{
			width: 80% !important;
			 }
		}
		@media screen and (max-width: 435px) {
		 .outercontainer{
		 	margin-top: 10px !important;
			width: 100% !important;
			 }
		}
	</style>
</head>
<body>
	<div class="container ">
		<div class="outercontainer mt-5" data-title="Disclaimer" data-intro="Anything you type here will not be recorded anywhere">
			<div class="heading p-2 text-center">
				<h5 class="my-auto py-1">Welcome to my chatbot</h5>
			</div>
			<div class="body" id="body">
				<div class="overlay text-center" id="overlay">
					<img src="image/loader_chat.gif" class="">
				</div>
			</div>
			<div class="inmsg p-2" data-title="Response" data-intro="Type your responce here">
				<input type="text" id="ans" data-hint="Hit enter after writing text" data-hintPosition="middle-right" placeholder="Enter your response" class="py-1 px-2" required/>
			</div>
		</div>
		<br>
		 <p>
		      <span class="text-danger">
		        *
		      </span>
		    <a href="https://harsh-sharma.herokuapp.com" target="_blank">
		    Click here for more visit 
		  </a>
		</p>
	</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/intro.js/3.1.0/intro.min.js" ></script>
<script src="js.js" ></script>

</body>
</html>