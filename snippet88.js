      function rotl(b, h) {
        return b << h | b >>> 32 - h
      }

      function rotr(b, h) {
        return b << 32 - h | b >>> h
      }
      
      function endian(b) {
        if (b.constructor == Number) return rotl(b, 8) & 16711935 | rotl(b, 24) & 4278255360;
        for (var h = 0; h < b.length; h++) b[h] = endian(b[h]);
        return b
      }
      
      function randomBytes(b) {
        for (var h = []; 0 < b; b--) h.push(Math.floor(256 * Math.random()));
        return h
      }

      function bytesToWords(b) {
        for (var h = [], i = 0, m = 0; i < b.length; i++, m += 8) h[m >>> 5] |= (b[i] & 255) << 24 - m % 32;
        return h
      }

      function wordsToBytes(b) {
        for (var h = [], i = 0; i < 32 * b.length; i += 8) h.push(b[i >>> 5] >>> 24 - i % 32 & 255);
        return h
      }

      function bytesToHex(b) {
        for (var h = [], i = 0; i < b.length; i++) h.push((b[i] >>> 4).toString(16)), h.push((b[i] & 15).toString(16));
        return h.join("")
      }

      function hexToBytes(b) {
        for (var h = [], i = 0; i < b.length; i += 2) h.push(parseInt(b.substr(i, 2), 16));
        return h;
      }

      function bytesToBase64(b) {
        if ("function" == typeof btoa) return btoa(k.bytesToString(b));
        for (var h = [], i = 0; i < b.length; i += 3)
          for (var m = b[i] << 16 | b[i + 1] << 8 | b[i + 2], a = 0; 4 > a; a++) 8 * i + 6 * a <= 8 * b.length ? h.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(m >>> 6 * (3 - a) & 63)) : h.push("=");
        return h.join("")
      }
      
      function base64ToBytes(b) {
        if ("function" == typeof atob) return k.stringToBytes(atob(b));
        for (var b = b.replace(/[^A-Z0-9+\/]/ig, ""), h = [], i = 0, m = 0; i < b.length; m = ++i % 4) 0 != m && h.push(("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(b.charAt(i - 1)) & Math.pow(2, -2 * m + 8) - 1) << 2 * m | "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".indexOf(b.charAt(i)) >>> 6 - 2 * m);
        return h
      }

      function s(b, l) {
        for (var k = window.encodeURIComponent(b), j = b.length; 0 < k.length && k.length > l;) j = Math.floor(j / 2), k = window.encodeURIComponent(b.substring(0, j));
        return k
      } 

      function stringToBytes_Binary(b) {
        for (var h = [], i = 0; i < b.length; i++) h.push(b.charCodeAt(i) & 255);
        return h
      }

      function bytesToString_Binary(b) {
        for (var h = [], i = 0; i < b.length; i++) h.push(String.fromCharCode(b[i]));
        return h.join("")
      }      

      function stringToBytes_UTF8(b) {
        return stringToBytes_Binary(unescape(encodeURIComponent(b)))
      }
         
      function bytesToString_UTF8(b) {
        return decodeURIComponent(escape(bytesToString_Binary(b)))
      }           

      function MD5(b) {
        var c = wordsToBytes(md5(b));
        return bytesToHex(c)
      }

      function _ff(b, a, c, d, e, f, g) {
         b = b + (a & c | ~a & d) + (e >>> 0) + g;
         return (b << f | b >>> 32 - f) + a
      }

      function _gg(b, a, c, d, e, f, g) {
         b = b + (a & d | c & ~d) + (e >>> 0) + g;
         return (b << f | b >>> 32 - f) + a
      }

      function _hh(b, a, c, d, e, f, g) {
         b = b + (a ^ c ^ d) + (e >>> 0) + g;
         return (b << f | b >>> 32 - f) + a
      }

      function _ii(b, a, c, d, e, f, g) {
         b = b + (c ^ (a | ~d)) + (e >>> 0) + g;
         return (b << f | b >>> 32 - f) + a
      }
      
      function md5(b) {
         b.constructor == String && (b = stringToBytes_UTF8(b));
         for (var a = bytesToWords(b), c = 8 * b.length, b = 1732584193, d = -271733879, e = -1732584194, f = 271733878, g = 0; g < a.length; g++) a[g] = (a[g] << 8 | a[g] >>> 24) & 16711935 | (a[g] << 24 | a[g] >>> 8) & 4278255360;
         a[c >>> 5] |= 128 << c % 32;
         a[(c + 64 >>> 9 << 4) + 14] = c;
         for (var c =
               _ff, h = _gg, o = _hh, k = _ii, g = 0; g < a.length; g += 16) var S = b,
            T = d,
            n = e,
            p = f,
            b = c(b, d, e, f, a[g + 0], 7, -680876936),
            f = c(f, b, d, e, a[g + 1], 12, -389564586),
            e = c(e, f, b, d, a[g + 2], 17, 606105819),
            d = c(d, e, f, b, a[g + 3], 22, -1044525330),
            b = c(b, d, e, f, a[g + 4], 7, -176418897),
            f = c(f, b, d, e, a[g + 5], 12, 1200080426),
            e = c(e, f, b, d, a[g + 6], 17, -1473231341),
            d = c(d, e, f, b, a[g + 7], 22, -45705983),
            b = c(b, d, e, f, a[g + 8], 7, 1770035416),
            f = c(f, b, d, e, a[g + 9], 12, -1958414417),
            e = c(e, f, b, d, a[g + 10], 17, -42063),
            d = c(d, e, f, b, a[g + 11], 22, -1990404162),
            b = c(b, d, e, f, a[g + 12], 7, 1804603682),
            f = c(f, b, d, e, a[g + 13], 12, -40341101),
            e = c(e, f, b, d, a[g + 14], 17, -1502002290),
            d = c(d, e, f, b, a[g + 15], 22, 1236535329),
            b = h(b, d, e, f, a[g + 1], 5, -165796510),
            f = h(f, b, d, e, a[g + 6], 9, -1069501632),
            e = h(e, f, b, d, a[g + 11], 14, 643717713),
            d = h(d, e, f, b, a[g + 0], 20, -373897302),
            b = h(b, d, e, f, a[g + 5], 5, -701558691),
            f = h(f, b, d, e, a[g + 10], 9, 38016083),
            e = h(e, f, b, d, a[g + 15], 14, -660478335),
            d = h(d, e, f, b, a[g + 4], 20, -405537848),
            b = h(b, d, e, f, a[g + 9], 5, 568446438),
            f = h(f, b, d, e, a[g + 14], 9, -1019803690),
            e = h(e, f, b, d, a[g + 3], 14, -187363961),
            d = h(d, e, f, b, a[g + 8], 20, 1163531501),
            b = h(b, d, e, f, a[g + 13], 5, -1444681467),
            f = h(f, b, d, e, a[g + 2], 9, -51403784),
            e = h(e, f, b, d, a[g + 7], 14, 1735328473),
            d = h(d, e, f, b, a[g + 12], 20, -1926607734),
            b = o(b, d, e, f, a[g + 5], 4, -378558),
            f = o(f, b, d, e, a[g + 8], 11, -2022574463),
            e = o(e, f, b, d, a[g + 11], 16, 1839030562),
            d = o(d, e, f, b, a[g + 14], 23, -35309556),
            b = o(b, d, e, f, a[g + 1], 4, -1530992060),
            f = o(f, b, d, e, a[g + 4], 11, 1272893353),
            e = o(e, f, b, d, a[g + 7], 16, -155497632),
            d = o(d, e, f, b, a[g + 10], 23, -1094730640),
            b = o(b, d, e, f, a[g + 13], 4, 681279174),
            f = o(f, b, d, e, a[g + 0], 11, -358537222),
            e = o(e, f, b, d, a[g + 3], 16, -722521979),
            d = o(d, e, f, b, a[g + 6], 23, 76029189),
            b = o(b, d, e, f, a[g + 9], 4, -640364487),
            f = o(f, b, d, e, a[g + 12], 11, -421815835),
            e = o(e, f, b, d, a[g + 15], 16, 530742520),
            d = o(d, e, f, b, a[g + 2], 23, -995338651),
            b = k(b, d, e, f, a[g + 0], 6, -198630844),
            f = k(f, b, d, e, a[g + 7], 10, 1126891415),
            e = k(e, f, b, d, a[g + 14], 15, -1416354905),
            d = k(d, e, f, b, a[g + 5], 21, -57434055),
            b = k(b, d, e, f, a[g + 12], 6, 1700485571),
            f = k(f, b, d, e, a[g + 3], 10, -1894986606),
            e = k(e, f, b, d, a[g + 10], 15, -1051523),
            d = k(d, e, f, b, a[g + 1], 21, -2054922799),
            b = k(b, d, e, f, a[g + 8], 6, 1873313359),
            f = k(f, b, d, e, a[g + 15], 10, -30611744),
            e = k(e, f, b, d, a[g + 6], 15, -1560198380),
            d = k(d, e, f, b, a[g + 13], 21, 1309151649),
            b = k(b, d, e, f, a[g + 4], 6, -145523070),
            f = k(f, b, d, e, a[g + 11], 10, -1120210379),
            e = k(e, f, b, d, a[g + 2], 15, 718787259),
            d = k(d, e, f, b, a[g + 9], 21, -343485551),
            b = b + S >>> 0,
            d = d + T >>> 0,
            e = e + n >>> 0,
            f = f + p >>> 0;
         return endian([b, d, e, f])
      }

var j = navigator.plugins;
var numPlugins_ =  j ? j.length : 0;
for (var j , i = "", m = 0; m < numPlugins_; m++) var a = j[m], i = i + (a.name + a.description + a.filename + a.length);
var pluginsHash_ = MD5(i)   
 
j = navigator.mimeTypes;
var numMimeTypes_ =  j ? j.length : 0;
for (var j , i = "", m = 0; m < numMimeTypes_; m++) i += j[m].type;
var mimeTypesHash_ = MD5(i);   

var platform_ = window.encodeURIComponent(navigator.platform);
var j = new Date;
var time_ = (new Date).getTime();
var timezoneOffset_ = j.getTimezoneOffset();
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

ga('set', 'dimension1', String(pluginsHash_));
ga('set', 'dimension2', String(numPlugins_));
ga('set', 'dimension3', String(platform_));
ga('set', 'dimension4', String(mimeTypesHash_));
ga('set', 'dimension5', String(numMimeTypes_));
ga('set', 'dimension6', String(time_));
ga('set', 'dimension7', String(timezoneOffset_));
ga('set', 'dimension8', String(dstOffset_));
ga('set', 'dimension9', String(cookieEnabled_));
ga('set', 'dimension10', String(doNotTrack_));
ga('set', 'dimension11', String(maxTouchPoints_));
ga('set', 'dimension12', String(product_));
ga('set', 'dimension13', String(productSub_));
ga('set', 'dimension14', String(vendor_));
ga('set', 'dimension15', String(vendorSub_));
ga('set', 'dimension16', String(hardwareConcurrency_));
ga('set', 'dimension17', String(online_));
ga('set', 'dimension18', String(new Date(unix_timestamp)));
ga('set', 'dimension19', username);

ga('send', 'pageview');