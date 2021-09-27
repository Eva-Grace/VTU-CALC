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
<br /><br />

<div class="container">
    <h5> Enter the number of semesters:</h5>
</div>
<div class="container">
    <select name="" id="number">
        <option value="0">--SEM--</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>
    </select>
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
        document.getElementById("textboxes").innerHTML="";   
        var a = document.getElementById("number").value;
        if(a>=1 && a<=8){
            for (i = 0; i < a; i++) {
                var textbox = document.createElement("input");
                textbox.setAttribute("type","number");
                textbox.name= "cgpa";
                textbox.id = "cgpa"; 
                textbox.placeholder="SEM "+(i+1);  
                document.getElementById("textboxes").appendChild(textbox);
                document.getElementById('hidden_div').style.display = "block";
                document.getElementById('hiddenn_div').style.display = "block"; 

            }
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
        var flag=0;
        let sum = 0;
        let count = 0;
        var gp = document.getElementById("cgpa").value;
            for( var j = 0; j < cgpa.length; j ++ ) {
                if(cgpa[j].value==""){
                    flag=1;
                }
                else if(cgpa[j].value>10)
                {
                   flag=2;
                }
                else{
                        var n = cgpa[j] || 0;
                        sum +=  parseFloat(n.value);
                        count += 1;	
                }
           }
           if (flag==1){
            alert("All Fields are Required");
           }
           else if (flag==2){
            alert("Enter all values less than 10");
           }
           else{
                total = parseFloat(sum/count).toFixed(2);
                document.getElementById("total").innerHTML = "CGPA: " + total;
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