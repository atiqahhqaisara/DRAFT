<html>
<!--AJAX SEARCH EXAMPLE-SEARCH FORM-->
<head>
<script>
function searchCustomer() {
   var nameToSearch = document.getElementById("name").value;
   if (nameToSearch == "") {
        document.getElementById("customerlist").innerHTML = "Not Found";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("customerlist").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","searchByName.php?nameToSearch="+nameToSearch,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<fieldset>
Enter name to search:<input type="text" id="name" oninput="searchCustomer()">
</fieldset>
</form>
<br>
<div id="customerlist">List will be here</div>

</body>
</html>