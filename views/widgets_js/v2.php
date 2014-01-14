<?php if ($app->config('debug')) : ?>
    var host  = '<?php echo $app->config('base_url'); ?>';
    var model = namespace('com.womensforum.widgets');

    model.load = function(widget_hash, element_id){
        var frame = "<iframe src=\"" + host + "/widgets/" + widget_hash + "\" allowtransparency=\"false\" style=\"border: 1px solid #8c8b8b; z-index:10;\" width=\"300\" height=\"600\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        var div   = document.getElementById(element_id);
        div.innerHTML = frame;
    };

    function namespace(namespaceString) {
        var parts       = namespaceString.split('.'),
            parent      = window,
            currentPart = '';    

        for(var i = 0, length = parts.length; i < length; i++) {
            currentPart = parts[i];
            parent[currentPart] = parent[currentPart] || {};
            parent = parent[currentPart];
        }

        return parent;
    }
<?php else : ?>
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1 6=\'m\';1 5=9(\'t.y.8\');5.G=7(a,b){1 c="<e I=\\""+6+"/8/"+a+"\\" J=\\"f\\" g=\\"h: j k #l; z-K:n;\\" o=\\"p\\" q=\\"r\\" s=\\"0\\" u=\\"0\\" v=\\"0\\" w=\\"x\\"></e>";1 d=A.B(b);d.C=c};7 9(a){1 b=a.D(\'.\'),2=F,3=\'\';H(1 i=0,4=b.4;i<4;i++){3=b[i];2[3]=2[3]||{};2=2[3]}E 2}',47,47,'|var|parent|currentPart|length|model|host|function|widgets|namespace|||||iframe|false|style|border||1px|solid|8c8b8b|<?php echo $app->config('base_url'); ?>|10|width|300|height|600|marginwidth|com|marginheight|frameborder|scrolling|no|womensforum||document|getElementById|innerHTML|split|return|window|load|for|src|allowtransparency|index'.split('|'),0,{}))
<?php endif  ?>
