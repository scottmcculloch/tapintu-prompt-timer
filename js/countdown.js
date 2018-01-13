// Set the Countdown

function startTimer(min, sec)
{
	jQuery('#startSound')[0].play();
	jQuery('#countdown_dashboard').stopCountDown();
	jQuery('#countdown_dashboard').countDown(
	{
		targetOffset: {
			'day': 0,
			'month': 0,
			'year': 0,
			'hour': 0,
			'min': min,
			'sec': sec
		},
		// onComplete function
		onComplete: function ()
		{
			jQuery('#startSound')[0].play();
		}
	});
}
// Stop countdown

function stop()
{
	jQuery('#countdown_dashboard').stopCountDown();
}