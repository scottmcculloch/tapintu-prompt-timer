	<div class="uk-grid-margin uk-grid uk-grid-stack">
	<div class="uk-width-1-2@m">
		<div id="journalPrompt">
			<p>Not sure what to write about? Use the button below to randomly select a writing prompt from a list of over 30 possibilities.</p><!-- roadmap: turn this into a variable that can be set in the plugin admin -->
			<div id="promptArea" class="uk-box-shadow-small uk-border-rounded">
				<p class="promptPhrase">&nbsp;</p>
			</div>
			<div>
				<button id="changePrompt" data-role="button" onclick="newPrompt();" class="uk-button uk-button-small">New Prompt</button>
			</div>
		</div>
	</div>
	<div class="uk-width-1-2@m">
		<div id="countdown_dashboard" class="uk-box-shadow-small uk-border-rounded">
			<div class="dash minutes_dash">
				<span class="dash_title">minutes</span>
				<div class="digit">
					<div class="top" style="display: none;">0</div>
					<div class="bottom" style="display: block;">0</div>
				</div>
				<div class="digit">
					<div class="top" style="display: none;">0</div>
					<div class="bottom" style="display: block;">0</div>
				</div>
			</div>
			<div class="dash seconds_dash">
				<span class="dash_title">seconds</span>
				<div class="digit">
					<div class="top" style="display: none;">0</div>
					<div class="bottom" style="display: block;">0</div>
				</div>
				<div class="digit">
					<div class="top" style="display: block; overflow: hidden; margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px;">0</div>
					<div class="bottom" style="display: block; overflow: hidden; height: 0px;">0</div>
				</div>
			</div>
		</div>
		<div class="countdown_controls">
			<!-- roadmap: ability to choose sound files in admin -->
			<audio id="startSound" preload="preload">
				<source src=<?php echo TAPINTU_JORUNAL_URL.'/media/sound-bowl-head-top-a3.m4a';?> type="audio/x-m4a" />
				<source src=<?php echo TAPINTU_JORUNAL_URL.'/media/sound-bowl-head-top-a3.wav';?> type="audio/wav" />
				<source src=<?php echo TAPINTU_JORUNAL_URL.'/media/sound-bowl-head-top-a3.mp3';?> type="audio/mpeg" />
			</audio>
			<!--<input type="button" value="30 Seconds" onclick="startTimer(0,30);">-->
			<!-- roadmap: have ability to set different time options -- perhaps add an option to set one's own time in minutes -->
			<button onclick="startTimer(2,0);" data-role="button" id="2min" class="uk-button uk-button-small">2 Minutes</button>
			<button onclick="startTimer(5,0);" data-role="button" id="5min" class="uk-button uk-button-small">5 Minutes</button>
			<button onclick="startTimer(10,0);" data-role="button" id="10min" class="uk-button uk-button-small">10 Minutes</button>
			<button onclick="stop()" class="uk-button-small">Stop</button>
			<p class="footnote">(A sound will signal the beginning and the end of the time.<br />You can also use the timer for pre-journaling meditation/reflection.)</p>
		</div>
	</div>
</div>
<div id="bottom">
			<p>Start by spending a couple of minutes just sitting. Just sit, breathe, and notice whatever you notice. You can then hit the button to generate a writing prompt, and spend <em>at least</em> 5 minutes writing (you can use the timer)... even if you run out of things to write, just keep writing, anything. <em>Your journal is a grammar police free zone - so just let it flow as it comes.</em></p>
			<p>I tend to prefer journaling by hand in a physical journal rather than typing... for me, it just seems to flow a little easier. However, if you don't have a journal, or an app you wouold use for this, you can use the form below to type your entry and have it emailed to you.</p>
</div>