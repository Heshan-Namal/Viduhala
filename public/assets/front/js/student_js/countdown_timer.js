function timetoseconds(time) {
  var b = time.split(':');
  return b[0]*60*60 + +b[1]*60 + +b[2];
}

function timer(time) {

	var stts = 0;
	var remainingSeconds = timetoseconds(time);
	var countDownTimer = setInterval(() => {
	
		const second = 1;
		const minute = second * 60;
		const hour = minute * 60;

		remainingSeconds--;
		minutesLeft = Math.floor(remainingSeconds / minute);
		secondsLeft = Math.floor(remainingSeconds % minute);
		document.querySelector('#minutes').innerHTML = minutesLeft;
		document.querySelector('#seconds').innerHTML = secondsLeft;
		if (remainingSeconds <= 0) {
			clearInterval(countDownTimer);
		}else{
			document.querySelector('#output').value= ""
		}
		}, 1000);
	console.log(stts);
	return stts;		

}