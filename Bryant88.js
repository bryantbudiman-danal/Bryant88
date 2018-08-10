var j = n.plugins;
var numPlugins_ =  j ? j.length : 0;
for (var j , i = "", m = 0; m < numPlugins_; m++) var a = j[m], i = i + (a.name + a.description + a.filename + a.length);
var pluginsHash_ = MD5(i)   
 
j = n.mimeTypes;
var numMimeTypes_ =  j ? j.length : 0;
for (var j , i = "", m = 0; m < numMimeTypes__; m++) i += j[m].type;
var mimeTypesHash_ = MD5(i);   

var platform_ = window.encodeURIComponent(navigator.platform);
var j = new Date;
var time_ = (new Date).getTime() - Q;
var timezoneOffset_ = j.getTimezoneOffset();;
j.setDate(1);
j.setMonth(6);
var h = j.getTimezoneOffset();
j.setMonth(12);
j = j.getTimezoneOffset();
var dstOffset_ = Math.abs(Math.abs(j) - Math.abs(h));      
var cookieEnabled_ = navigator.cookieEnabled;
var doNotTrack_ = navigator.doNotTrack || "Unknown";
var maxTouchPoints_ = navigator.maxTouchPoints;
var product_ = navigator.product;
var productSub_ = navigator.productSub;
var vendor_ = navigator.vendor;
var vendorSub_ = navigator.vendorSub;
var hardwareConcurrency_ = navigator.hardwareConcurrency;
var online_ = navigator.onLine;

ga('create', 'UA-123580463-1', 'auto');
ga('set', 'pluginsHash_', pluginsHash_);
ga('set', 'numPlugins_', numPlugins_);
ga('set', 'platform_', platform_);
ga('set', 'mimeTypesHash_', mimeTypesHash_);
ga('set', 'numMimeTypes_', numMimeTypes_);
ga('set', 'time_', time_);
ga('set', 'timezoneOffset_', timezoneOffset_);
ga('set', 'dstOffset_', dstOffset_);
ga('set', 'cookieEnabled_', cookieEnabled_);
ga('set', 'doNotTrack_', doNotTrack_);
ga('set', 'maxTouchPoints_', maxTouchPoints_);
ga('set', 'product_', product_);
ga('set', 'productSub_', productSub_);
ga('set', 'vendor_', vendor_);
ga('set', 'vendorSub_', vendorSub_);
ga('set', 'hardwareConcurrency_', hardwareConcurrency_);
ga('set', 'online_', online_);
ga('send', 'pageview');