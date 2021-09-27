<!DOCTYPE html>
<?php include("header.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTU CALCULATOR</title>
</head>
<link rel="stylesheet" href="externalStyle.css">
<body>
<h2>CGPA Calculator</h2>
<br /><br /><br /><br />

<div class="container">
    <h5> Enter the number of semesters:</h5>
</div>
<div class="container">
    <input type="number" name="" id="number" placeholder="sem" size="4" min="1" max="8" >
</div>
<br />
<div class="container">
    <input type="button" value="Submit" onclick="textbox()" />
</div>
    <br />
    <br />
<div id="textboxes" class ="container">
    
</div>

<script>
    function textbox(event) {    
        var a = document.getElementById("number").value;
        if(a>=1 && a<=8){
            for (i = 0; i < a; i++) {
                var textbox = document.createElement("textarea");
                textbox.name= "cgpa";
                textbox.id = "cgpa";   
                document.getElementById("textboxes").appendChild(textbox);
                document.getElementById('hidden_div').style.display = "block";
                document.getElementById('hiddenn_div').style.display = "block"; 

            }
        }
        else{
            alert("Enter value less than 8");
            
        }
        
}
</script>
<br/>
<div class ="container" >
<div id="hidden_div" style="display:none;" >
    <input type="button" value="Submit" onclick="calc()" />
</div>
</div>

<script>
    function calc(){
        let sum = 0;
        let count = 0;
        var gp = document.getElementById("cgpa").value;
        if(gp<=10){
                for( var j = 0; j < cgpa.length; j ++ ) {
                    var n = cgpa[j] || 0;
                    sum +=  parseInt(n.value);
                    count += 1;	
                }
            total = (sum/count);
            document.getElementById("total").innerHTML = "CGPA: " + total;
        }
        else{
            alert("Enter all values less than 10");

        }
     }
</script>

<h2 id="total"></h2>
<div class = "container" >
<div id="hiddenn_div" style="display:none;">
	<button onclick = "window.print()" >
			Print
	</button>
</div>
    </div>

</body>
</html>