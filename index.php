<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Работаем со стилями</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>



<div>

    <ul>
        <li class="c1">
            <img src="1.jpg" alt="альтернативный текст">

        </li>

        <li id="c2">

            <img src="2.jpg" alt="альтернативный текст">
        </li>

        <li id="c3">
            <img src="3.jpg" alt="альтернативный текст">

        </li>

        <li id="c4">
            <img src="4.jpg" alt="альтернативный текст">

        </li>

        <li id="c5">
            <img src="5.jpg" alt="альтернативный текст">

        </li>


    </ul>

</div>

<button onclick="myFunction()">Try it</button>

<script>
    
    var myVar;

    function myFunction() {
        myVar = setInterval(sliderd, 3000);
    }

   // function alertFunc() {
   //     alert("Hello!");
   // }

    //c1.classList.add('active');


    function sliderd() {
        alert("Hello!");


         var elements = document.querySelectorAll('ul > li');

         var i=1;

         while(i<=5)


         {

         //alert( elements[i].innerHTML ); // "тест", "пройден"

         if(i<5)
         {
             document.getElementById("c"+i).classList.add("active");
         document.getElementById("c" + (i-1)).classList.remove("active");
         i++;
         }
         else
         {
         document.getElementById("c5".classList.remove("active");
         i=0;
         }
         // alert(div.classList.contains("foo"));

i++;
         }



        alert("Hello!");
    }

</script>


</body>
</html>


