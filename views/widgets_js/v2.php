<?php if ($app->config('debug')) : ?>
var host   = '<?php echo $app->config('base_url'); ?>';
var Widget = {
    Load: function(widget_hash, element_id) {
        var frame = "<iframe src=\"" + host + "/widgets/" + widget_hash + "\" allowtransparency=\"false\" style=\"border: 1px solid #8c8b8b; z-index:10;\" width=\"300\" height=\"600\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        var div   = document.getElementById(element_id);
        div.innerHTML = frame;
    }
};
<?php else : ?>
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1 3=\'v\';1 4={5:i(a,b){1 c="<2 6=\\""+3+"/7/"+a+"\\" 8=\\"9\\" e=\\"f: g h #y; z-j:k;\\" l=\\"m\\" n=\\"o\\" p=\\"0\\" r=\\"0\\" s=\\"0\\" t=\\"u\\"></2>";1 d=w.x(b);d.q=c}};',36,36,'|var|iframe|host|Widget|Load|src|widgets|allowtransparency|false|||||style|border|1px|solid|function|index|10|width|300|height|600|marginwidth|innerHTML|marginheight|frameborder|scrolling|no|<?php echo $app->config('base_url'); ?>|document|getElementById|8c8b8b|'.split('|'),0,{}))
<?php endif ?>
