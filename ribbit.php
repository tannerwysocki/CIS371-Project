<input type="text" id="inputField" value="Type here.s">
<p id="test">
    </p>
</p>
<button onClick="submit()">submit</button>

</button>
<script>
    function submit(){
         document.getElementById("test").innerHTML = "oh hai mark";
        var x = document.getElementById("inputField").value;
        var newString = "";
        for(i = 0; i < x.length; i++){
            if (x[i] == "."){
                newString = x.substring(0,i);
                i = x.length;
            }
        }
        document.getElementById("test").innerHTML = newString;
    }
</script>