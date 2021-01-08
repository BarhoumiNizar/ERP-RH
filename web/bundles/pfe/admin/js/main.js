$(function() {
    $('#maincontent').cycle({
        fx:     'scrollHorz', // You can choose effect do you like, for reference : http://www.malsup.com/jquery/cycle/browser.html
        speed:  'slow',
        timeout: 0,
        pager:  '#nav',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#nav li:eq(' + (idx) + ') a';
        }
    });
});