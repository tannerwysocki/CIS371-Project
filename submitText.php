<input type="text" id="inputField" value="Type here.s">
<p id="test">
    </p>
</p>
<button onClick="submit()">submit</button>

</button>
<script>
       function submit(){
        var x = document.getElementById("inputField").value;
        var newString = "";
        var finSentence = 0;
        for(i = 0; i < x.length; i++){
            if (x[i] == "." || x[i] == ":" && finSentence == 0){
                newString = x.substring(0,i+1);
                i = x.length;
                finSentence = 1;
            }
        }
   //     Send newstring (which contains the message) to the database here.

        document.getElementById("test").innerHTML = newString;
    }
</script>