var x;
var startstop = 0;
var lapreset = 0;
var srnum = 1;

function addRow(){

    var table = document.getElementsByTagName('table')[0];

    var newRow = table.insertRow(1);

    var cel1 = newRow.insertCell(0);
    var cel2 = newRow.insertCell(1);
    var cel3 = newRow.insertCell(2);

    cel1.innerHTML = srnum;
    cel2.innerHTML = lhourOut + ":" + lminOut + ":" + lsecOut + ":" + lmiliSecOut;
    cel3.innerHTML = hourOut + ":" + minOut + ":" + secOut + ":" + miliSecOut;
}


function StartStopResume() { /* Toggle StartStop */

    startstop = startstop + 1;

  if (startstop === 1) {
    start();
    document.getElementById("B1").innerHTML = "Stop";
    document.getElementById("B2").innerHTML = "Lap";
  } else if (startstop === 2) {
    document.getElementById("B1").innerHTML = "Resume";
    document.getElementById("B2").innerHTML = "Reset";
    startstop = 0;
    stop();
  } 

}


function start() {
  x = setInterval(timer, 10);
} /* Start */

function stop() {
  clearInterval(x);
} /* Stop */

var milisec = 0;
var sec = 0; /* holds incrementing value */
var min = 0;
var hour = 0;

var lmilisec = 0;
var lsec = 0; /* holds incrementing value */
var lmin = 0;
var lhour = 0;

/* Contains and outputs returned value of  function checkTime */

var miliSecOut = 0;
var secOut = 0;
var minOut = 0;
var hourOut = 0;

/* Output variable End */
var lmiliSecOut = 0;
var lsecOut = 0;
var lminOut = 0;
var lhourOut = 0;


function timer() {
  /* Main Timer */


  miliSecOut = checkTime(milisec);
  secOut = checkTime(sec);
  minOut = checkTime(min);
  hourOut = checkTime(hour);

  lmiliSecOut = checkTime(lmilisec);
  lsecOut = checkTime(lsec);
  lminOut = checkTime(lmin);
  lhourOut = checkTime(lhour);

  milisec = ++milisec;
  lmilisec = ++lmilisec;

  if (milisec === 100) {
    milisec = 0;
    sec = ++sec;
  }

  if (sec == 60) {
    min = ++min;
    sec = 0;
  }

  if (min == 60) {
    min = 0;
    hour = ++hour;
  }

  if (lmilisec === 100) {
    lmilisec = 0;
    lsec = ++lsec;
  }

  if (lsec == 60) {
    lmin = ++lmin;
    lsec = 0;
  }

  if (lmin == 60) {
    lmin = 0;
    lhour = ++lhour;

  }


  document.getElementById("milisec").innerHTML = miliSecOut;
  document.getElementById("sec").innerHTML = secOut;
  document.getElementById("min").innerHTML = minOut;
  document.getElementById("hour").innerHTML = hourOut;

}


/* Adds 0 when value is <10 */


function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function LAP(){
    addRow();
}

function LapReset() {

    if (startstop === 1) {
      LAP();
      lmilisec = 1;
      lsec = 0;
      lmin = 0;
      lhour = 0;
      srnum = ++srnum;
    } else if (startstop === 0) {
      document.getElementById("B1").innerHTML = "Start";
      document.getElementById("B2").innerHTML = ".......";
      startstop = 0;
      len = srnum;
      srnum = 1;

      milisec = 0;
      sec = 0;
      min = 0
      hour = 0;

      document.getElementById("milisec").innerHTML = "00";
      document.getElementById("sec").innerHTML = "00";
      document.getElementById("min").innerHTML = "00";
      document.getElementById("hour").innerHTML = "00";
      
      for(var i=1;i<=len;i++){
          document.getElementById("myTable").deleteRow(1);
      }

      stop();

    } 
  
}
