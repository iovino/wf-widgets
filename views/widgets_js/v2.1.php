/* Asynchronously write javascript, even with document.write., v1.2.0 https://krux.github.io/postscribe
Copyright (c) 2014 Derek Brans, MIT license https://github.com/krux/postscribe/blob/master/LICENSE */!function(){function a(a,h){a=a||"",h=h||{};for(var i in b)b.hasOwnProperty(i)&&(h.autoFix&&(h["fix_"+i]=!0),h.fix=h.fix||h["fix_"+i]);var j=[],k=function(b){a+=b},l=function(b){a=b+a},m={comment:/^<!--/,endTag:/^<\//,atomicTag:/^<\s*(script|style|noscript|iframe|textarea)[\s>]/i,startTag:/^</,chars:/^[^<]/},n={comment:function(){var b=a.indexOf("-->");return b>=0?{content:a.substr(4,b),length:b+3}:void 0},endTag:function(){var b=a.match(d);return b?{tagName:b[1],length:b[0].length}:void 0},atomicTag:function(){var b=n.startTag();if(b){var c=a.slice(b.length);if(c.match(new RegExp("</\\s*"+b.tagName+"\\s*>","i"))){var d=c.match(new RegExp("([\\s\\S]*?)</\\s*"+b.tagName+"\\s*>","i"));if(d)return{tagName:b.tagName,attrs:b.attrs,content:d[1],length:d[0].length+b.length}}}},startTag:function(){var b=a.match(c);if(b){var d={};return b[2].replace(e,function(a,b){var c=arguments[2]||arguments[3]||arguments[4]||f.test(b)&&b||null;d[b]=c}),{tagName:b[1],attrs:d,unary:!!b[3],length:b[0].length}}},chars:function(){var b=a.indexOf("<");return{length:b>=0?b:a.length}}},o=function(){for(var b in m)if(m[b].test(a)){g&&console.log("suspected "+b);var c=n[b]();return c?(g&&console.log("parsed "+b,c),c.type=c.type||b,c.text=a.substr(0,c.length),a=a.slice(c.length),c):null}},p=function(a){for(var b;b=o();)if(a[b.type]&&a[b.type](b)===!1)return},q=function(){var b=a;return a="",b},r=function(){return a};return h.fix&&!function(){var b=/^(AREA|BASE|BASEFONT|BR|COL|FRAME|HR|IMG|INPUT|ISINDEX|LINK|META|PARAM|EMBED)$/i,c=/^(COLGROUP|DD|DT|LI|OPTIONS|P|TD|TFOOT|TH|THEAD|TR)$/i,d=[];d.last=function(){return this[this.length-1]},d.lastTagNameEq=function(a){var b=this.last();return b&&b.tagName&&b.tagName.toUpperCase()===a.toUpperCase()},d.containsTagName=function(a){for(var b,c=0;b=this[c];c++)if(b.tagName===a)return!0;return!1};var e=function(a){return a&&"startTag"===a.type&&(a.unary=b.test(a.tagName)||a.unary),a},f=o,g=function(){var b=a,c=e(f());return a=b,c},i=function(){var a=d.pop();l("</"+a.tagName+">")},j={startTag:function(a){var b=a.tagName;"TR"===b.toUpperCase()&&d.lastTagNameEq("TABLE")?(l("<TBODY>"),m()):h.fix_selfClose&&c.test(b)&&d.containsTagName(b)?d.lastTagNameEq(b)?i():(l("</"+a.tagName+">"),m()):a.unary||d.push(a)},endTag:function(a){var b=d.last();b?h.fix_tagSoup&&!d.lastTagNameEq(a.tagName)?i():d.pop():h.fix_tagSoup&&k()}},k=function(){f(),m()},m=function(){var a=g();a&&j[a.type]&&j[a.type](a)};o=function(){return m(),e(f())}}(),{append:k,readToken:o,readTokens:p,clear:q,rest:r,stack:j}}var b=function(){var a,b={},c=this.document.createElement("div");return a="<P><I></P></I>",c.innerHTML=a,b.tagSoup=c.innerHTML!==a,c.innerHTML="<P><i><P></P></i></P>",b.selfClose=2===c.childNodes.length,b}(),c=/^<([\-A-Za-z0-9_]+)((?:\s+[\w\-]+(?:\s*=\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)>/,d=/^<\/([\-A-Za-z0-9_]+)[^>]*>/,e=/([\-A-Za-z0-9_]+)(?:\s*=\s*(?:(?:"((?:\\.|[^"])*)")|(?:'((?:\\.|[^'])*)')|([^>\s]+)))?/g,f=/^(checked|compact|declare|defer|disabled|ismap|multiple|nohref|noresize|noshade|nowrap|readonly|selected)$/i,g=!1;a.supports=b,a.tokenToString=function(a){var b={comment:function(a){return"<--"+a.content+"-->"},endTag:function(a){return"</"+a.tagName+">"},atomicTag:function(a){return console.log(a),b.startTag(a)+a.content+b.endTag(a)},startTag:function(a){var b="<"+a.tagName;for(var c in a.attrs){var d=a.attrs[c];b+=" "+c+'="'+(d?d.replace(/(^|[^\\])"/g,'$1\\"'):"")+'"'}return b+(a.unary?"/>":">")},chars:function(a){return a.text}};return b[a.type](a)},a.escapeAttributes=function(a){var b={};for(var c in a){var d=a[c];b[c]=d&&d.replace(/(^|[^\\])"/g,'$1\\"')}return b};for(var h in b)a.browserHasFlaw=a.browserHasFlaw||!b[h]&&h;this.htmlParser=a}(),function(){function a(){}function b(a){return"function"==typeof a}function c(a,b,c){var d,e=a&&a.length||0;for(d=0;e>d;d++)b.call(c,a[d],d)}function d(a,b,c){var d;for(d in a)a.hasOwnProperty(d)&&b.call(c,d,a[d])}function e(a,b){return d(b,function(b,c){a[b]=c}),a}function f(a,b){return a=a||{},d(b,function(b,c){null==a[b]&&(a[b]=c)}),a}function g(a){try{return k.call(a)}catch(b){var d=[];return c(a,function(a){d.push(a)}),d}}function h(a){return/^script$/i.test(a.tagName)}var i=this;if(!i.postscribe){var j=!1,k=Array.prototype.slice,l=function(){function a(a,b,c){var d=k+b;if(2===arguments.length){var e=a.getAttribute(d);return null==e?e:String(e)}null!=c&&""!==c?a.setAttribute(d,c):a.removeAttribute(d)}function f(b,c){var d=b.ownerDocument;e(this,{root:b,options:c,win:d.defaultView||d.parentWindow,doc:d,parser:i.htmlParser("",{autoFix:!0}),actuals:[b],proxyHistory:"",proxyRoot:d.createElement(b.nodeName),scriptStack:[],writeQueue:[]}),a(this.proxyRoot,"proxyof",0)}var k="data-ps-";return f.prototype.write=function(){[].push.apply(this.writeQueue,arguments);for(var a;!this.deferredRemote&&this.writeQueue.length;)a=this.writeQueue.shift(),b(a)?this.callFunction(a):this.writeImpl(a)},f.prototype.callFunction=function(a){var b={type:"function",value:a.name||a.toString()};this.onScriptStart(b),a.call(this.win,this.doc),this.onScriptDone(b)},f.prototype.writeImpl=function(a){this.parser.append(a);for(var b,c=[];(b=this.parser.readToken())&&!h(b);)c.push(b);this.writeStaticTokens(c),b&&this.handleScriptToken(b)},f.prototype.writeStaticTokens=function(a){var b=this.buildChunk(a);if(b.actual)return b.html=this.proxyHistory+b.actual,this.proxyHistory+=b.proxy,this.proxyRoot.innerHTML=b.html,j&&(b.proxyInnerHTML=this.proxyRoot.innerHTML),this.walkChunk(),j&&(b.actualInnerHTML=this.root.innerHTML),b},f.prototype.buildChunk=function(a){var b=this.actuals.length,d=[],e=[],f=[];return c(a,function(a){if(d.push(a.text),a.attrs){if(!/^noscript$/i.test(a.tagName)){var c=b++;e.push(a.text.replace(/(\/?>)/," "+k+"id="+c+" $1")),"ps-script"!==a.attrs.id&&f.push("atomicTag"===a.type?"":"<"+a.tagName+" "+k+"proxyof="+c+(a.unary?" />":">"))}}else e.push(a.text),f.push("endTag"===a.type?a.text:"")}),{tokens:a,raw:d.join(""),actual:e.join(""),proxy:f.join("")}},f.prototype.walkChunk=function(){for(var b,c=[this.proxyRoot];null!=(b=c.shift());){var d=1===b.nodeType,e=d&&a(b,"proxyof");if(!e){d&&(this.actuals[a(b,"id")]=b,a(b,"id",null));var f=b.parentNode&&a(b.parentNode,"proxyof");f&&this.actuals[f].appendChild(b)}c.unshift.apply(c,g(b.childNodes))}},f.prototype.handleScriptToken=function(a){var b=this.parser.clear();b&&this.writeQueue.unshift(b),a.src=a.attrs.src||a.attrs.SRC,a.src&&this.scriptStack.length?this.deferredRemote=a:this.onScriptStart(a);var c=this;this.writeScriptToken(a,function(){c.onScriptDone(a)})},f.prototype.onScriptStart=function(a){a.outerWrites=this.writeQueue,this.writeQueue=[],this.scriptStack.unshift(a)},f.prototype.onScriptDone=function(a){return a!==this.scriptStack[0]?void this.options.error({message:"Bad script nesting or script finished twice"}):(this.scriptStack.shift(),this.write.apply(this,a.outerWrites),void(!this.scriptStack.length&&this.deferredRemote&&(this.onScriptStart(this.deferredRemote),this.deferredRemote=null)))},f.prototype.writeScriptToken=function(a,b){var c=this.buildScript(a),d=this.shouldRelease(c),e=this.options.afterAsync;a.src&&(c.src=a.src,this.scriptLoadHandler(c,d?e:function(){b(),e()}));try{this.insertScript(c),(!a.src||d)&&b()}catch(f){this.options.error(f),b()}},f.prototype.buildScript=function(a){var b=this.doc.createElement(a.tagName);return d(a.attrs,function(a,c){b.setAttribute(a,c)}),a.content&&(b.text=a.content),b},f.prototype.insertScript=function(a){this.writeImpl('<span id="ps-script"/>');var b=this.doc.getElementById("ps-script");b.parentNode.replaceChild(a,b)},f.prototype.scriptLoadHandler=function(a,b){function c(){a=a.onload=a.onreadystatechange=a.onerror=null,b()}var d=this.options.error;e(a,{onload:function(){c()},onreadystatechange:function(){/^(loaded|complete)$/.test(a.readyState)&&c()},onerror:function(){d({message:"remote script failed "+a.src}),c()}})},f.prototype.shouldRelease=function(a){var b=/^script$/i.test(a.nodeName);return!b||!!(this.options.releaseAsync&&a.src&&a.hasAttribute("async"))},f}(),m=function(){function c(){var a=k.shift();a&&(a.stream=d.apply(null,a))}function d(b,d,f){function i(a){a=f.beforeWrite(a),m.write(a),f.afterWrite(a)}m=new l(b,f),m.id=j++,m.name=f.name||m.id,h.streams[m.name]=m;var k=b.ownerDocument,n={write:k.write,writeln:k.writeln};e(k,{write:function(){return i(g(arguments).join(""))},writeln:function(){return i(g(arguments).join("")+"\n")}});var o=m.win.onerror||a;return m.win.onerror=function(a,b,c){f.error({msg:a+" - "+b+":"+c}),o.apply(m.win,arguments)},m.write(d,function(){e(k,n),m.win.onerror=o,f.done(),m=null,c()}),m}function h(d,e,g){b(g)&&(g={done:g}),g=f(g,{releaseAsync:!1,afterAsync:a,done:a,error:function(a){throw a},beforeWrite:function(a){return a},afterWrite:a}),d=/^#/.test(d)?i.document.getElementById(d.substr(1)):d.jquery?d[0]:d;var h=[d,e,g];return d.postscribe={cancel:function(){h.stream?h.stream.abort():h[1]=a}},k.push(h),m||c(),d.postscribe}var j=0,k=[],m=null;return e(h,{streams:{},queue:k,WriteStream:l})}();i.postscribe=m}}();

<?php if ($app->config('debug')) : ?>
    var host  = '<?php echo $app->config('base_url'); ?>';
    var model = namespace('com.womensforum.widgets');

    model.load = function(widget_hash, element_id, options)
    {
        // build the url
        var widget_url = host + "/widgets/" + widget_hash + "?";

        // set default height and widths
        var width  = options === undefined || options.width  === undefined  ? 300 : options.width;
        var height = options === undefined || options.height === undefined  ? 600 : options.height;

        // creative urls and trackers
        var track_url    = options === undefined ? undefined : options.track_url;
        var click_url    = options === undefined ? undefined : options.click_url;
        var creative_url = options === undefined ? undefined : options.creative_url;

        // the html to render to the page
        var html = "";

        // build creatives and trackers html
        if (click_url && creative_url && track_url) {
            html  = "<div style=\"border: 1px solid #8c8b8b; width:"+ width +"px; height:"+ height +"px;\">";
            html += "<iframe src=\"" + widget_url + "\" allowtransparency=\"false\" style=\"z-index:10;\" width=\"" + width + "\" height=\"350\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
            html += "<a target=\"_blank\" href=\""+ click_url +"\"><img src=\""+ creative_url +"\"></a>";
            html += "<img src=\""+ track_url +"\" width=\"1\" height=\"1\">";
            html += "</div>";
        } else {
            html = "<iframe src=\"" + widget_url + "\" allowtransparency=\"false\" style=\"border: 1px solid #8c8b8b; z-index:10;\" width=\"" + width + "\" height=\"" + height + "\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
        }

        // widget specific codes
        if (widget_hash == 'bb5daf62200742ee966acceaf19d5efe') { // silk cdu
            html  = "<div style=\"border: 1px solid #8c8b8b; width:"+ width +"px; height:"+ height +"px;\">";
            html += "<iframe src=\"" + widget_url + "\" allowtransparency=\"false\" style=\"z-index:10;\" width=\"" + width + "\" height=\"350\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe>";
            html += '<script src="http://bs.serving-sys.com/BurstingPipe/adServer.bs?cn=rsb&c=28&pli=9855107&PluID=0&w=300&h=250&ord=[timestamp]&ucm=true"></script>';
            html += "<img src=\""+ track_url +"\" width=\"1\" height=\"1\">";
            html += "</div>";
            postscribe('#' + element_id, html);
        }

        // insert the html to the page
        else {
            // insert the html to the page
            var div = document.getElementById(element_id);
            div.innerHTML = html;
        }

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
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('2 G=\'1o\';2 P=O(\'E.R.J\');P.X=I(a,b,c){2 d=G+"/J/"+a+"?";2 e=c===3||c.5===3?H:c.5;2 f=c===3||c.4===3?S:c.4;2 g=c===3?3:c.T;2 h=c===3?3:c.1f;2 i=c===3?3:c.12;2 j="";F(h&&i&&g){j="<m l=\\"v: x y #A; 5:"+e+"n; 4:"+f+"n;\\">";j+="<8 6=\\""+d+"\\" D=\\"s\\" l=\\"z-p:10;\\" 5=\\""+e+"\\" 4=\\"K\\" t=\\"0\\" r=\\"0\\" o=\\"0\\" C=\\"B\\"></8>";j+="<a 1k=\\"1m\\" Q=\\""+h+"\\"><u 6=\\""+i+"\\"></a>";j+="<u 6=\\""+g+"\\" 5=\\"1\\" 4=\\"1\\">";j+="</m>"}L{j="<8 6=\\""+d+"\\" D=\\"s\\" l=\\"v: x y #A; z-p:10;\\" 5=\\""+e+"\\" 4=\\""+f+"\\" t=\\"0\\" r=\\"0\\" o=\\"0\\" C=\\"B\\"></8>"}F(a==\'U\'){j="<m l=\\"v: x y #A; 5:"+e+"n; 4:"+f+"n;\\">";j+="<8 6=\\""+d+"\\" D=\\"s\\" l=\\"z-p:10;\\" 5=\\""+e+"\\" 4=\\"K\\" t=\\"0\\" r=\\"0\\" o=\\"0\\" C=\\"B\\"></8>";j+=\'<M 6="W://N.Y-Z.E/11/1p.N?13=14&c=15&16=17&18=0&w=H&h=19&1a=[1b]&1c=1d"></M>\';j+="<u 6=\\""+g+"\\" 5=\\"1\\" 4=\\"1\\">";j+="</m>";1e(\'#\'+b,j)}L{2 k=1g.1h(b);k.1i=j}};I O(a){2 b=a.1j(\'.\'),7=1l,9=\'\';1n(2 i=0,q=b.q;i<q;i++){9=b[i];7[9]=7[9]||{};7=7[9]}V 7}',62,88,'||var|undefined|height|width|src|parent|iframe|currentPart||||||||||||style|div|px|frameborder|index|length|marginheight|false|marginwidth|img|border||1px|solid||8c8b8b|no|scrolling|allowtransparency|com|if|host|300|function|widgets|350|else|script|bs|namespace|model|href|womensforum|600|track_url|bb5daf62200742ee966acceaf19d5efe|return|http|load|serving|sys||BurstingPipe|creative_url|cn|rsb|28|pli|9855107|PluID|250|ord|timestamp|ucm|true|postscribe|click_url|document|getElementById|innerHTML|split|target|window|_blank|for|<?php echo $app->config('base_url'); ?>|adServer'.split('|'),0,{}))
<?php endif  ?>



