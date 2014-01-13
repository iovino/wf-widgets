var host   = '<?php echo $app->config('base_url'); ?>';
var Widget = {
    Load: function(widget_hash, element_id) {
        var frame = "<iframe src=\"" + host + "/widgets/" + widget_hash + "\" allowtransparency=\"false\" style=\"border: 1px solid #8c8b8b; z-index:10;\" width=\"300\" height=\"600\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        var div   = document.getElementById(element_id);
        div.innerHTML = frame;
    }
};