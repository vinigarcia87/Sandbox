(function(){var a=Function.prototype.call,i=Object.prototype,l=Array.prototype.slice,j,m;if(!Function.prototype.bind)Function.prototype.bind=function(a){var f=this;if("function"!=typeof f)throw new TypeError;var e=l.call(arguments,1),c=function(){if(this instanceof c){var b=function(){};b.prototype=f.prototype;var b=new b,d=f.apply(b,e.concat(l.call(arguments)));return null!==d&&Object(d)===d?d:b}return f.apply(a,e.concat(l.call(arguments)))};return c};m=a.bind(i.toString);j=a.bind(i.hasOwnProperty);
if(!Array.isArray)Array.isArray=function(a){return"[object Array]"==m(a)};if(!Array.prototype.forEach)Array.prototype.forEach=function(a,f){var e=s(this),c=0,b=e.length>>>0;if("[object Function]"!=m(a))throw new TypeError;for(;c<b;)c in e&&a.call(f,e[c],c,e),c++};if(!Array.prototype.map)Array.prototype.map=function(a,f){var e=s(this),c=e.length>>>0,b=Array(c);if("[object Function]"!=m(a))throw new TypeError;for(var d=0;d<c;d++)d in e&&(b[d]=a.call(f,e[d],d,e));return b};if(!Array.prototype.filter)Array.prototype.filter=
function(a,f){var e=s(this),c=e.length>>>0,b=[];if("[object Function]"!=m(a))throw new TypeError;for(var d=0;d<c;d++)d in e&&a.call(f,e[d],d,e)&&b.push(e[d]);return b};if(!Array.prototype.every)Array.prototype.every=function(a,f){var e=s(this),c=e.length>>>0;if("[object Function]"!=m(a))throw new TypeError;for(var b=0;b<c;b++)if(b in e&&!a.call(f,e[b],b,e))return!1;return!0};if(!Array.prototype.some)Array.prototype.some=function(a,f){var e=s(this),c=e.length>>>0;if("[object Function]"!=m(a))throw new TypeError;
for(var b=0;b<c;b++)if(b in e&&a.call(f,e[b],b,e))return!0;return!1};if(!Array.prototype.reduce)Array.prototype.reduce=function(a){var f=s(this),e=f.length>>>0;if("[object Function]"!=m(a))throw new TypeError;if(!e&&1==arguments.length)throw new TypeError;var c=0,b;if(2<=arguments.length)b=arguments[1];else{do{if(c in f){b=f[c++];break}if(++c>=e)throw new TypeError;}while(1)}for(;c<e;c++)c in f&&(b=a.call(void 0,b,f[c],c,f));return b};if(!Array.prototype.reduceRight)Array.prototype.reduceRight=function(a){var f=
s(this),e=f.length>>>0;if("[object Function]"!=m(a))throw new TypeError;if(!e&&1==arguments.length)throw new TypeError;var c,e=e-1;if(2<=arguments.length)c=arguments[1];else{do{if(e in f){c=f[e--];break}if(0>--e)throw new TypeError;}while(1)}do e in this&&(c=a.call(void 0,c,f[e],e,f));while(e--);return c};if(!Array.prototype.indexOf)Array.prototype.indexOf=function(a){var f=s(this),e=f.length>>>0;if(!e)return-1;var c=0;1<arguments.length&&(c=p(arguments[1]));for(c=0<=c?c:e-Math.abs(c);c<e;c++)if(c in
f&&f[c]===a)return c;return-1};if(!Array.prototype.lastIndexOf)Array.prototype.lastIndexOf=function(a){var f=s(this),e=f.length>>>0;if(!e)return-1;var c=e-1;1<arguments.length&&(c=p(arguments[1]));for(c=0<=c?c:e-Math.abs(c);0<=c;c--)if(c in f&&a===f[c])return c;return-1};if(2!=[1,2].splice(0).length){var r=Array.prototype.splice;Array.prototype.splice=function(a,f){return!arguments.length?[]:r.apply(this,[void 0===a?0:a,void 0===f?this.length-a:f].concat(l.call(arguments,2)))}}if(!Object.keys){var h=
!0,q="toString,toLocaleString,valueOf,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,constructor".split(","),k=q.length,n;for(n in{toString:null})h=!1;Object.keys=function(a){if("object"!=typeof a&&"function"!=typeof a||null===a)throw new TypeError("Object.keys called on a non-object");var f=[],e;for(e in a)j(a,e)&&f.push(e);if(h)for(e=0;e<k;e++){var c=q[e];j(a,c)&&f.push(c)}return f}}if(!Date.prototype.toISOString)Date.prototype.toISOString=function(){var a,f,e;if(!isFinite(this))throw new RangeError;
a=[this.getUTCFullYear(),this.getUTCMonth()+1,this.getUTCDate(),this.getUTCHours(),this.getUTCMinutes(),this.getUTCSeconds()];for(f=a.length;f--;)e=a[f],10>e&&(a[f]="0"+e);return a.slice(0,3).join("-")+"T"+a.slice(3).join(":")+"."+("000"+this.getUTCMilliseconds()).slice(-3)+"Z"};if(!Date.now)Date.now=function(){return(new Date).getTime()};if(!Date.prototype.toJSON)Date.prototype.toJSON=function(){if("function"!=typeof this.toISOString)throw new TypeError;return this.toISOString()};a="\t\n\u000b\u000c\r \u00a0\u1680\u180e\u2000\u2001\u2002\u2003\u2004\u2005\u2006\u2007\u2008\u2009\u200a\u202f\u205f\u3000\u2028\u2029\ufeff";
if(!String.prototype.trim||a.trim()){var a="["+a+"]",x=RegExp("^"+a+a+"*"),t=RegExp(a+a+"*$");String.prototype.trim=function(){return(""+this).replace(x,"").replace(t,"")}}if("0".split(void 0,0).length){var v=String.prototype.split;String.prototype.split=function(a,f){return void 0===a&&0===f?[]:v.apply(this,arguments)}}if("".substr&&"b"!=="0b".substr(-1)){var y=String.prototype.substr;String.prototype.substr=function(a,f){return y.call(this,0>a?0>(a=this.length+a)?0:a:a,f)}}var p=function(a){a=+a;
a!==a?a=-1:0!==a&&a!==1/0&&a!==-(1/0)&&(a=(0<a||-1)*Math.floor(Math.abs(a)));return a},u="a"!="a"[0],s=function(a){if(null==a)throw new TypeError;return u&&"string"==typeof a&&a?a.split(""):Object(a)}})();
(function(a,i){var l=!(!Object.create||!Object.defineProperties||!Object.getOwnPropertyDescriptor);l&&!a.browser.msie&&Object.defineProperty&&Object.prototype.__defineGetter__&&function(){try{var a=document.createElement("foo");Object.defineProperty(a,"bar",{get:function(){return!0}});l=!!a.bar}catch(i){l=!1}a=null}();Modernizr.objectAccessor=!(!(l||Object.prototype.__defineGetter__&&Object.prototype.__lookupSetter__)||a.browser.opera&&!(11<=i.browserVersion));Modernizr.advancedObjectProperties=l;
if(!l||!Object.create||!Object.defineProperties||!Object.getOwnPropertyDescriptor||!Object.defineProperty){var j=Function.prototype.call.bind(Object.prototype.hasOwnProperty);i.objectCreate=function(a,r,h,j){var k;k=function(){};k.prototype=a;k=new k;if(!j&&!("__proto__"in k)&&!Modernizr.objectAccessor)k.__proto__=a;r&&i.defineProperties(k,r);if(h)k.options=jQuery.extend(!0,{},k.options||{},h),h=k.options;k._create&&jQuery.isFunction(k._create)&&k._create(h);return k};i.defineProperties=function(a,
r){for(var h in r)j(r,h)&&i.defineProperty(a,h,r[h]);return a};i.defineProperty=function(a,i,h){if("object"!=typeof h||null===h)return a;if(j(h,"value"))return a[i]=h.value,a;a.__defineGetter__&&("function"==typeof h.get&&a.__defineGetter__(i,h.get),"function"==typeof h.set&&a.__defineSetter__(i,h.set));return a};i.getPrototypeOf=function(a){return Object.getPrototypeOf&&Object.getPrototypeOf(a)||a.__proto__||a.constructor&&a.constructor.prototype};i.getOwnPropertyDescriptor=function(a,i){if("object"!==
typeof a&&"function"!==typeof a||null===a)throw new TypeError("Object.getOwnPropertyDescriptor called on a non-object");var h;if(Object.defineProperty&&Object.getOwnPropertyDescriptor)try{return h=Object.getOwnPropertyDescriptor(a,i)}catch(l){}h={configurable:!0,enumerable:!0,writable:!0,value:void 0};var k=a.__lookupGetter__&&a.__lookupGetter__(i),n=a.__lookupSetter__&&a.__lookupSetter__(i);if(!k&&!n){if(!j(a,i))return;h.value=a[i];return h}delete h.writable;delete h.value;h.get=h.set=void 0;if(k)h.get=
k;if(n)h.set=n;return h}}})(jQuery,jQuery.webshims);
jQuery.webshims.register("dom-extend",function(a,i,l,j,m){var r=i.modules,h=/\s*,\s*/,q={},k={},n={},x={},t={},v=a.fn.val,y=function(c,b,d,g,o){return o?v.call(a(c)):v.call(a(c),d)};a.fn.val=function(c){var b=this[0];arguments.length&&null==c&&(c="");if(!arguments.length)return!b||1!==b.nodeType?v.call(this):a.prop(b,"value",c,"val",!0);if(a.isArray(c))return v.apply(this,arguments);var d=a.isFunction(c);return this.each(function(g){b=this;1===b.nodeType&&(d?(g=c.call(b,g,a.prop(b,"value",m,"val",
!0)),null==g&&(g=""),a.prop(b,"value",g,"val")):a.prop(b,"value",c,"val"))})};var p="_webshimsLib"+Math.round(1E3*Math.random()),u=function(c,b,d){c=c.jquery?c[0]:c;if(!c)return d||{};var g=a.data(c,p);d!==m&&(g||(g=a.data(c,p,{})),b&&(g[b]=d));return b?g&&g[b]:g};[{name:"getNativeElement",prop:"nativeElement"},{name:"getShadowElement",prop:"shadowElement"},{name:"getShadowFocusElement",prop:"shadowFocusElement"}].forEach(function(c){a.fn[c.name]=function(){return this.map(function(){var a=u(this,
"shadowData");return a&&a[c.prop]||this})}});["removeAttr","prop","attr"].forEach(function(c){q[c]=a[c];a[c]=function(b,d,g,o,e){var f="val"==o,i=!f?q[c]:y;if(!b||!k[d]||1!==b.nodeType||!f&&o&&"attr"==c&&a.attrFn[d])return i(b,d,g,o,e);var A=(b.nodeName||"").toLowerCase(),h=n[A],w="attr"==c&&(!1===g||null===g)?"removeAttr":c,j,l,r;h||(h=n["*"]);h&&(h=h[d]);h&&(j=h[w]);if(j){if("value"==d)l=j.isVal,j.isVal=f;if("removeAttr"===w)return j.value.call(b);if(g===m)return j.get?j.get.call(b):j.value;j.set&&
("attr"==c&&!0===g&&(g=d),r=j.set.call(b,g));if("value"==d)j.isVal=l}else r=i(b,d,g,o,e);if((g!==m||"removeAttr"===w)&&t[A]&&t[A][d]){var p;p="removeAttr"==w?!1:"prop"==w?!!g:!0;t[A][d].forEach(function(a){if(!a.only||(a.only="prop"==c)||"attr"==a.only&&"prop"!=c)a.call(b,g,p,f?"val":w,c)})}return r};x[c]=function(b,d,g){n[b]||(n[b]={});n[b][d]||(n[b][d]={});var o=n[b][d][c],e=function(a,b,o){return b&&b[a]?b[a]:o&&o[a]?o[a]:"prop"==c&&"value"==d?function(a){return g.isVal?y(this,d,a,!1,0===arguments.length):
q[c](this,d,a)}:"prop"==c&&"value"==a&&g.value.apply?function(a){var b=q[c](this,d);b&&b.apply&&(b=b.apply(this,arguments));return b}:function(a){return q[c](this,d,a)}};n[b][d][c]=g;if(g.value===m){if(!g.set)g.set=g.writeable?e("set",g,o):i.cfg.useStrict&&"prop"==d?function(){throw d+" is readonly on "+b;}:a.noop;if(!g.get)g.get=e("get",g,o)}["value","get","set"].forEach(function(a){g[a]&&(g["_sup"+a]=e(a,o))})}});var s=!a.browser.msie||8<parseInt(a.browser.version,10),B=function(){var a=i.getPrototypeOf(j.createElement("foobar")),
b=Object.prototype.hasOwnProperty;return function(d,g,o){var e=j.createElement(d),h=i.getPrototypeOf(e);if(s&&h&&a!==h&&(!e[g]||!b.call(e,g))){var z=e[g];o._supvalue=function(){return z&&z.apply?z.apply(this,arguments):z};h[g]=o.value}else o._supvalue=function(){var a=u(this,"propValue");return a&&a[g]&&a[g].apply?a[g].apply(this,arguments):a&&a[g]},f.extendValue(d,g,o.value);o.value._supvalue=o._supvalue}}(),f=function(){var c={};i.addReady(function(b,d){var g={},e=function(c){g[c]||(g[c]=a(b.getElementsByTagName(c)),
d[0]&&a.nodeName(d[0],c)&&(g[c]=g[c].add(d)))};a.each(c,function(a,c){e(a);!c||!c.forEach?i.warn("Error: with "+a+"-property. methods: "+c):c.forEach(function(c){g[a].each(c)})});g=null});var b,d=a([]),g=function(d,g){c[d]?c[d].push(g):c[d]=[g];a.isDOMReady&&(b||a(j.getElementsByTagName(d))).each(g)};return{createTmpCache:function(c){a.isDOMReady&&(b=b||a(j.getElementsByTagName(c)));return b||d},flushTmpCache:function(){b=null},content:function(c,b){g(c,function(){var c=a.attr(this,b);null!=c&&a.attr(this,
b,c)})},createElement:function(a,c){g(a,c)},extendValue:function(c,b,d){g(c,function(){a(this).each(function(){u(this,"propValue",{})[b]=this[b];this[b]=d})})}}}(),e=function(a,b){if(a.defaultValue===m)a.defaultValue="";if(!a.removeAttr)a.removeAttr={value:function(){a[b||"prop"].set.call(this,a.defaultValue);a.removeAttr._supvalue.call(this)}};if(!a.attr)a.attr={}};a.extend(i,{getID:function(){var c=(new Date).getTime();return function(b){var b=a(b),d=b.attr("id");d||(c++,d="ID-"+c,b.attr("id",d));
return d}}(),extendUNDEFProp:function(c,b){a.each(b,function(a,b){a in c||(c[a]=b)})},createPropDefault:e,data:u,moveToFirstEvent:function(){var c=a._data?"_data":"data";return function(b,d,g){if((b=(a[c](b,"events")||{})[d])&&1<b.length)d=b.pop(),g||(g="bind"),"bind"==g&&b.delegateCount?b.splice(b.delegateCount,0,d):b.unshift(d)}}(),addShadowDom:function(){var c,b,d,g,e={init:!1,start:function(){if(!this.init)this.init=!0,this.height=a(j).height(),this.width=a(j).width(),setInterval(function(){var c=
a(j).height(),b=a(j).width();if(c!=e.height||b!=e.width)e.height=c,e.width=b,g({type:"docresize"})},400)}};g=function(g){clearTimeout(c);c=setTimeout(function(){if("resize"==g.type){var c=a(l).width(),f=a(l).width();if(f==b&&c==d)return;b=f;d=c;e.height=a(j).height();e.width=a(j).width()}a.event.trigger("updateshadowdom")},40)};a(l).bind("resize",g);a.event.customEvent.updateshadowdom=!0;return function(c,b,d){d=d||{};c.jquery&&(c=c[0]);b.jquery&&(b=b[0]);var g=a.data(c,p)||a.data(c,p,{}),f=a.data(b,
p)||a.data(b,p,{}),h={};if(d.shadowFocusElement){if(d.shadowFocusElement){if(d.shadowFocusElement.jquery)d.shadowFocusElement=d.shadowFocusElement[0];h=a.data(d.shadowFocusElement,p)||a.data(d.shadowFocusElement,p,h)}}else d.shadowFocusElement=b;g.hasShadow=b;h.nativeElement=f.nativeElement=c;h.shadowData=f.shadowData=g.shadowData={nativeElement:c,shadowElement:b,shadowFocusElement:d.shadowFocusElement};d.shadowChilds&&d.shadowChilds.each(function(){u(this,"shadowData",f.shadowData)});if(d.data)h.shadowData.data=
f.shadowData.data=g.shadowData.data=d.data;d=null;e.start()}}(),propTypes:{standard:function(a){e(a);if(!a.prop)a.prop={set:function(b){a.attr.set.call(this,""+b)},get:function(){return a.attr.get.call(this)||a.defaultValue}}},"boolean":function(a){e(a);if(!a.prop)a.prop={set:function(b){b?a.attr.set.call(this,""):a.removeAttr.value.call(this)},get:function(){return null!=a.attr.get.call(this)}}},src:function(){var c=j.createElement("a");c.style.display="none";return function(b,d){e(b);if(!b.prop)b.prop=
{set:function(a){b.attr.set.call(this,a)},get:function(){var b=this.getAttribute(d),e;if(null==b)return"";c.setAttribute("href",b+"");if(!a.support.hrefNormalized){try{a(c).insertAfter(this),e=c.getAttribute("href",4)}catch(f){e=c.getAttribute("href",4)}a(c).detach()}return e||c.href}}}}(),enumarated:function(a){e(a);if(!a.prop)a.prop={set:function(b){a.attr.set.call(this,b)},get:function(){var b=(a.attr.get.call(this)||"").toLowerCase();if(!b||-1==a.limitedTo.indexOf(b))b=a.defaultValue;return b}}}},
reflectProperties:function(c,b){"string"==typeof b&&(b=b.split(h));b.forEach(function(b){i.defineNodeNamesProperty(c,b,{prop:{set:function(c){a.attr(this,b,c)},get:function(){return a.attr(this,b)||""}}})})},defineNodeNameProperty:function(c,b,d){k[b]=!0;if(d.reflect)i.propTypes[d.propType||"standard"](d,b);["prop","attr","removeAttr"].forEach(function(g){var e=d[g];e&&(e="prop"===g?a.extend({writeable:!0},e):a.extend({},e,{writeable:!0}),x[g](c,b,e),"*"!=c&&i.cfg.extendNative&&"prop"==g&&e.value&&
a.isFunction(e.value)&&B(c,b,e),d[g]=e)});d.initAttr&&f.content(c,b);return d},defineNodeNameProperties:function(a,b,d,g){for(var e in b)!g&&b[e].initAttr&&f.createTmpCache(a),d&&(b[e][d]?i.log("override: "+a+"["+e+"] for "+d):(b[e][d]={},["value","set","get"].forEach(function(a){a in b[e]&&(b[e][d][a]=b[e][a],delete b[e][a])}))),b[e]=i.defineNodeNameProperty(a,e,b[e]);g||f.flushTmpCache();return b},createElement:function(c,b,d){var e;a.isFunction(b)&&(b={after:b});f.createTmpCache(c);b.before&&f.createElement(c,
b.before);d&&(e=i.defineNodeNameProperties(c,d,!1,!0));b.after&&f.createElement(c,b.after);f.flushTmpCache();return e},onNodeNamesPropertyModify:function(c,b,d,e){"string"==typeof c&&(c=c.split(h));a.isFunction(d)&&(d={set:d});c.forEach(function(a){t[a]||(t[a]={});"string"==typeof b&&(b=b.split(h));d.initAttr&&f.createTmpCache(a);b.forEach(function(b){t[a][b]||(t[a][b]=[],k[b]=!0);if(d.set){if(e)d.set.only=e;t[a][b].push(d.set)}d.initAttr&&f.content(a,b)});f.flushTmpCache()})},defineNodeNamesBooleanProperty:function(c,
b,d){d||(d={});if(a.isFunction(d))d.set=d;i.defineNodeNamesProperty(c,b,{attr:{set:function(a){this.setAttribute(b,a);d.set&&d.set.call(this,!0)},get:function(){return null==this.getAttribute(b)?m:b}},removeAttr:{value:function(){this.removeAttribute(b);d.set&&d.set.call(this,!1)}},reflect:!0,propType:"boolean",initAttr:d.initAttr||!1})},contentAttr:function(a,b,d){if(a.nodeName){if(d===m)return a=a.attributes[b]||{},d=a.specified?a.value:null,null==d?m:d;"boolean"==typeof d?d?a.setAttribute(b,b):
a.removeAttribute(b):a.setAttribute(b,d)}},activeLang:function(){var c=[],b={},d,e,f=/:\/\/|^\.*\//,h=function(b,c,d){return c&&d&&-1!==a.inArray(c,d.availabeLangs||[])?(b.loading=!0,d=d.langSrc,f.test(d)||(d=i.cfg.basePath+d),i.loader.loadScript(d+c+".js",function(){b.langObj[c]?(b.loading=!1,k(b,!0)):a(function(){b.langObj[c]&&k(b,!0);b.loading=!1})}),!0):!1},j=function(a){b[a]&&b[a].forEach(function(a){a.callback()})},k=function(a,b){if(a.activeLang!=d&&a.activeLang!==e){var c=r[a.module].options;
if(a.langObj[d]||e&&a.langObj[e])a.activeLang=d,a.callback(a.langObj[d]||a.langObj[e],d),j(a.module);else if(!b&&!h(a,d,c)&&!h(a,e,c)&&a.langObj[""]&&""!==a.activeLang)a.activeLang="",a.callback(a.langObj[""],d),j(a.module)}};return function(f){if("string"==typeof f&&f!==d)d=f,e=d.split("-")[0],d==e&&(e=!1),a.each(c,function(a,b){k(b)});else if("object"==typeof f)if(f.register)b[f.register]||(b[f.register]=[]),b[f.register].push(f),f.callback();else{if(!f.activeLang)f.activeLang="";c.push(f);k(f)}return d}}()});
a.each({defineNodeNamesProperty:"defineNodeNameProperty",defineNodeNamesProperties:"defineNodeNameProperties",createElements:"createElement"},function(a,b){i[a]=function(a,c,e,f){"string"==typeof a&&(a=a.split(h));var j={};a.forEach(function(a){j[a]=i[b](a,c,e,f)});return j}});i.isReady("webshimLocalization",!0)});
(function(a,i){var l=a.webshims.browserVersion;if(!(a.browser.mozilla&&5<l)&&(!a.browser.msie||12>l&&7<l)){var j={article:"article",aside:"complementary",section:"region",nav:"navigation",address:"contentinfo"},m=function(a,h){a.getAttribute("role")||a.setAttribute("role",h)};a.webshims.addReady(function(l,h){a.each(j,function(i,j){for(var k=a(i,l).add(h.filter(i)),n=0,p=k.length;n<p;n++)m(k[n],j)});if(l===i){var q=i.getElementsByTagName("header")[0],k=i.getElementsByTagName("footer"),n=k.length;
q&&!a(q).closest("section, article")[0]&&m(q,"banner");n&&(q=k[n-1],a(q).closest("section, article")[0]||m(q,"contentinfo"))}})}})(jQuery,document);
