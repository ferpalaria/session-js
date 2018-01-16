<!-- Testing how to include a visit counter -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style> span{color:orange}</style>
</head>
<body>
    This is your <span id="numVisits"></span> <span id="th"></span> visit<br>
    and your last visit was at <span id="lastVisited"></span>

    <script>
        var numVisits;
        var lastVisitedDate = "never";

        if(localStorage.lastVisit){
          var lastVisit = JSON.parse(localStorage.lastVisit);
          numVisits = lastVisit.numVisits;
          lastVisitedDate = lastVisit.date;
        } else {
          numVisits = 1;}

        document.getElementById("lastVisited").innerHTML = lastVisitedDate;
        document.getElementById("numVisits").innerHTML = numVisits;

        var th = document.getElementById("th");

          if ( numVisits <= 3 ){
            if (numVisits == 1){
              th.innerHTML = "st";
            }
            if (numVisits == 2){
              th.innerHTML = "nd";
            }
            if (numVisits == 3){
              th.innerHTML = "rd";
            }
          } else {
            th.innerHTML = "th";
          }

        var myLastVisit = { }
        numVisits += 1;
        myLastVisit.date = new Date();
        myLastVisit.numVisits = numVisits;
        localStorage.lastVisit = JSON.stringify(myLastVisit);

    </script>
</body>
</html>
