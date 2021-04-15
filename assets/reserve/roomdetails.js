<script>

            function GetSelectedValue(){
                var e = document.getElementById("ocean");
                var result = e.options[e.selectedIndex].value;
                
                document.getElementById("result").innerHTML = result;
            }

            function GetSelectedText(){
                var e = document.getElementById("ocean");
                var result = e.options[e.selectedIndex].text;
                
                document.getElementById("result").innerHTML = result;
            }
</script>