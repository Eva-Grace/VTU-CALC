<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VTU CALCULATOR</title>
</head>
<body>
<h2>CGPA Calculator</h2>
<!-- 
    <label>SELECT YOUR SEM: </label></br>
    <label>1st Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem1"><button class="inputsidebar">/10</button></br>
    <label>2nd Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem2"><button class="inputsidebar">/10</button></br>
    <label>3rd Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem3"><button class="inputsidebar">/10</button></br>
    <label>4th Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem4"><button class="inputsidebar">/10</button></br>
    <label>5th Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem5"><button class="inputsidebar">/10</button></br>
    <label>6th Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem6"><button class="inputsidebar">/10</button></br>
    <label>7th Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem7"><button class="inputsidebar">/10</button></br>
    <label>8th Sem: </label><input type="number" min="0" max="10" placeholder="SGPA" ng-model="sem8"><button class="inputsidebar">/10</button></br>

 -->

<div class="col-md-5">
    <h5> Enter the number of semesters:</h5><input type="number" name="" id="number" class="form-control" value="0">
    <input type="button" value="Submit" onclick="textbox()" />
    <br />
    <br />
    <div id="textboxes">
    </div>
</div>

<script>
    function textbox() {
        var a = document.getElementById("number").value;
        for (i = 0; i < a; i++) {
            var textbox = document.createElement("textarea");
            textbox.name= "sgpa";
            textbox.id = "sgpa";   
            document.getElementById("textboxes").appendChild(textbox);
            document.getElementById('hidden_div').style.display = "block";
        }
    }
</script>

<div id="hidden_div" style="display:none;">
    <input type="button" value="Submit" onclick="calc()" />
</div>


<script>
    function calc(){
        let sum = 0;
        let count = 0;
        var gp = document.getElementById("sgpa").value;
                for( var j = 0; j < sgpa.length; j ++ ) {
                    var n = sgpa[j] || 0;
                    sum +=  parseInt(n.value);
                    count += 1;	
                }
            total = (sum/count);
            document.getElementById("total").innerHTML = total;
     }
</script>

<p id="total"></p>

</body>
</html>