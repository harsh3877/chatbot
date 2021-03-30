var questions = [
    'Whats your name ?',
    'Where are you from?',
    'What\'s your age?',
    'What profile you are working on?',
    'How many years of experience do you have?',
    'Do you have a zoom Id? yes or no?',
    'Please enter your zoom Id',
    'Please make a zoom Id so that we can process you further.',
    'It was nice talking you :), we will contact you shortly.'
];

var num = 0;


var inputBox = document.querySelector("#ans");
var output = document.querySelector(".body");
var p = document.createElement("P");
	p.setAttribute("class","question mt-2 py-auto");
  p.innerHTML = questions[num];
output.appendChild(p);

function typing(){
	var p = document.createElement("P");
	p.setAttribute("class","question mt-2");
	p.setAttribute("id","typing");
    p.innerHTML = "Typing <img src='image/typing.gif' class='typing' >";
    output.appendChild(p);
}


function scroll(){
	 output.scrollBy(0,output.scrollHeight);
}

function chkint(n){
	if (typeof(n)=="number"){
		if(n<100){
			return true;
		}else{
			return false;
		}
	}
}

function disableinput(){
	$('#ans').prop('disabled', true);
}
function enableinput(){
	$('#ans').prop('disabled', false);
	$("#ans").focus();
}

var me;

function showResponse() {
  var input = inputBox.value;
  
  if(inputBox.value == "") {
    
  }else {
  if(num == 0) {
	disableinput();
	me=`Hii ${input}`;
	typing();
	inputBox.value="";
    ++num;
    setTimeout(changeQuestion, 2000);
  } else if(num == 1) {
	disableinput();

    me=`${input} must be a good place`;
	typing();
	inputBox.value="";
    ++num;
    setTimeout(changeQuestion, 2000);
  } else if(num == 2) {
	disableinput();
  	if(chkint(parseInt(input))==true){
        ++num;

  		me=`So you are ${2020 - input} born`;
		inputBox.value="";
  	}else{
  		me="Please Enter proper input in digit";	
		inputBox.value="";
  	}
	typing();
    setTimeout(changeQuestion, 2000);
  } else if(num == 3) {
	disableinput();
    
    me=`Awesome ${input}`;
	typing();
	inputBox.value="";
    ++num;
    setTimeout(changeQuestion, 2000);
  }else if(num == 4) {
	disableinput();
  	if(chkint(parseInt(input))==true){
    	++num;
    	me=`It is good to hear that you have ${input} year of experience.`;
    	inputBox.value="";
    }else{
    	me="Please Enter proper input in digit";
    	inputBox.value="";
    }
	typing();
    setTimeout(changeQuestion, 2000);
  }else if(num == 5) {
	disableinput();
    
	typing();
	inputBox.value="";
	if(`${input}`=="yes" || `${input}`=="Yes" ){
		++num;
    me="Fantastic!!";
	}else if(`${input}`=="no" || `${input}`=="No" ){
		num=num+2;
    me="Oops!!";
	}else{
		me="Enter proper choise.";
	}
    setTimeout(changeQuestion, 2000);
  }else if(num == 6) {
	disableinput();
    
    me="";
	typing();
	inputBox.value="";
	num=8;
    setTimeout(changeQuestion, 2000);
  }else if(num == 7) {
	disableinput();
    
    me="";
	typing();
	inputBox.value="";
	++num;
    setTimeout(changeQuestion, 2000);
  }else if(num == 8) {
	disableinput();
    
    me="";
	typing();
	inputBox.value="";
	++num;
    setTimeout(changeQuestion, 2000);
  }

  }
}

function changeQuestion() {
	document.getElementById("typing").remove();

  inputBox.setAttribute("placeholder", "Enter your response");

  output.innerHTML+="<br>";

  var p = document.createElement("P");
  p.setAttribute("class","question");
  if(me!=""){
  p.innerHTML += me+"<br>"+ questions[num];
  }else{
  p.innerHTML += questions[num];
  }


 output.appendChild(p);

 scroll();
  if(num == 8) {
    inputBox.style.display = "none";
  }

  enableinput();
}




	$("#ans").on('keypress', function(e) {
  if(e.which == 13) {

   var res = document.getElementById('ans').value;
   if(res!=""){
    output.innerHTML+="<br>";

    var p = document.createElement("P");
     p.setAttribute("class","answer py-auto");
	  p.innerHTML = res;
	  output.appendChild(p);

     showResponse();
    scroll();
   }
  }
});


//autofocus on input box
$("#ans").focus();



introJs().start();
  introJs().addHints();