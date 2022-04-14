// data finale
var countDownDate = new Date("May 1, 2022 15:37:25").getTime();

// conteggio ogni secondo
var x = setInterval(function() {

  // data odierna
  var now = new Date().getTime();
    
  // distanza tra date
  var distance = countDownDate - now;
    
  // calcolo giorni ore minuti secondi
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // cerca ID nel DOM per assegnare valori
  document.getElementById("timer-days").innerHTML = days;
  document.getElementById("timer-hours").innerHTML = hours;
  document.getElementById("timer-minutes").innerHTML = minutes;
  document.getElementById("timer-seconds").innerHTML = seconds;

}, 1000);
