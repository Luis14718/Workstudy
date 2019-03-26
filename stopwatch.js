<<<<<<< HEAD
var ss = document.getElementsByClassName('stopwatch');

[].forEach.call(ss, function (s) {
    var currentTimer = 0,
        interval = 0,
        lastUpdateTime = new Date().getTime(),
        start = s.querySelector('button.start'),
        stop = s.querySelector('button.stop'),
        reset = s.querySelector('button.reset'),
		hours = s.querySelector ('span.hours'),
        mins = s.querySelector('span.minutes'),
        secs = s.querySelector('span.seconds'),
        cents = s.querySelector('span.centiseconds');

    start.addEventListener('click', startTimer);
    stop.addEventListener('click', stopTimer);
    reset.addEventListener('click', resetTimer);

    function pad (n) {
        return ('036' + n).substr(-4);
    }

    function update () {
        var now = new Date().getTime(),
            dt = now - lastUpdateTime;

        currentTimer += dt;

        var time = new Date(currentTimer);
		
        hours.innerHTML = Math.trunc(pad(time.getMinutes()/60));
        mins.innerHTML = pad(time.getMinutes());
        secs.innerHTML = pad(time.getSeconds());
        cents.innerHTML = pad(Math.floor(time.getMilliseconds() / 10));

        lastUpdateTime = now;
    }

    function startTimer () {
        if (!interval) {
            lastUpdateTime = new Date().getTime();
            interval = setInterval(update, 1);
=======
var h1 = document.getElementsByTagName('h1')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    reset = document.getElementById('reset'),
    seconds = 0, minutes = 0, hours = 0,
    t;

function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
>>>>>>> 9fabaaa3f28bf5e3aa01e029bda729331604d816
        }
    }
    
    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}
timer();


/* Start button */
start.onclick = timer;

/* Stop button */
stop.onclick = function() {
    clearTimeout(t);
}

/* Clear button */
reset.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0; minutes = 0; hours = 0;
}