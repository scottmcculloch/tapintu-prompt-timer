// roadmap: change from hard-coded to a list created in admin so can add and sort as many phrases as desired
var prompts = new Array();
prompts[0] = 'Love is...';
prompts[1] = 'I believe...';
prompts[2] = 'I love it when...';
prompts[3] = 'I hate it when...';
prompts[4] = 'I wish I had...';
prompts[5] = 'What inspires me most is...';
prompts[6] = 'I know...';
prompts[7] = 'I am...';
prompts[8] = 'Other people...';
prompts[9] = 'I think...';
prompts[10] = 'When I pay attention I...';
prompts[11] = 'I\'m most happy when...';
prompts[12] = 'Who am I <em>really</em>?...';
prompts[13] = 'What I am feeling now is...';
prompts[14] = 'Joy is...';
prompts[15] = 'I experience peace when...';
prompts[16] = 'Creativity...';
prompts[17] = 'Peace of mind...';
prompts[18] = 'My future is...';
prompts[19] = 'If I could do <em>anything</em> for the rest of today, I would...';
prompts[20] = 'The best things in life...';
prompts[21] = 'Things that give me pleasure are...';
prompts[22] = 'Once upon a time...';
prompts[23] = 'Nature...';
prompts[24] = 'My best friend...';
prompts[25] = 'One of my favorite memories...';
prompts[26] = 'I am grateful for/to...';
prompts[27] = 'I would like to imporove...';
prompts[28] = 'I know I could do better at...';
prompts[29] = 'My greatest strength is...';
prompts[30] = 'The gift I bring to the world is...';
prompts[31] = 'If only...';
prompts[32] = 'I always laugh when (or at, or about)...';

function newPrompt() {
    jQuery('p.promptPhrase').fadeOut(500, function() {
        var phraseNumber = Math.floor(Math.random() * prompts.length);
        jQuery('p.promptPhrase').html('<span class="prompt">'+prompts[phraseNumber]+'</span>').fadeIn(500);
    });
}