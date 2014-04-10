<?php if ($app->config('debug')) : ?>
    var host  = '<?php echo $app->config('base_url'); ?>';
    var model = namespace('com.womensforum.widgets');

    model.load = function(widget_hash, element_id, options)
    {
        var width  = options === undefined ? 300 : options.width
        var height = options === undefined ? 600 : options.height

        var frame = "<iframe src=\"" + host + "/widgets/" + widget_hash + "\" allowtransparency=\"false\" style=\"border: 1px solid #8c8b8b; z-index:10;\" width=\"" + width + "\" height=\"" + height + "\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
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
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('1 5=\'N\';1 7=l(\'x.D.k\');7.M=j(a,b,c){1 d=c===6?p:c.h;1 e=c===6?I:c.8;1 f="<9 m=\\""+5+"/k/"+a+"\\" n=\\"o\\" O=\\"q: r s #t; z-u:v;\\" h=\\""+d+"\\" 8=\\""+e+"\\" w=\\"0\\" y=\\"0\\" A=\\"0\\" B=\\"C\\"></9>";1 g=E.F(b);g.G=f};j l(a){1 b=a.H(\'.\'),2=J,3=\'\';L(1 i=0,4=b.4;i<4;i++){3=b[i];2[3]=2[3]||{};2=2[3]}K 2}',51,51,'|var|parent|currentPart|length|host|undefined|model|height|iframe||||||||width||function|widgets|namespace|src|allowtransparency|false|300|border|1px|solid|8c8b8b|index|10|marginwidth|com|marginheight||frameborder|scrolling|no|womensforum|document|getElementById|innerHTML|split|600|window|return|for|load|<?php echo $app->config('base_url'); ?>|style'.split('|'),0,{}))
<?php endif  ?>
