<script type="text/javascript">
    (function(){
        var now  = new Date();
        var then = new Date("December 31, 2014 00:00:00 EST");
        var gap  = then.getTime() - now.getTime();

        gap = Math.floor(gap / (1000 * 60 * 60 * 24)) + 1;
        gap = gap >= 1 ? gap : 0;

        var font   = gap >= 100 ? "small" : "large";
        var header = document.getElementById('wf_widget_header');
        header.innerHTML = "<div id='wf_countdown' class='"+ font +"'>" + gap + "</div>" +
            "<div id='wf_widget_by'>Brought to you by <span>Womensforum.com</span></div>";
    }());
</script>