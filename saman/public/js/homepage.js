/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 69);
/******/ })
/************************************************************************/
/******/ ({

/***/ 1:
/***/ (function(module, exports) {

/* WEBPACK VAR INJECTION */(function(__webpack_amd_options__) {/* globals __webpack_amd_options__ */
module.exports = __webpack_amd_options__;

/* WEBPACK VAR INJECTION */}.call(exports, {}))

/***/ }),

/***/ 69:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(70);


/***/ }),

/***/ 70:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(71);
// require('./homefiles/jquery-migrate-1.2.1.js');
__webpack_require__(73);
// require('./homefiles/jquery.easing.1.3.js');
__webpack_require__(74);
// require('./homefiles/jquery.quicksand.js');
__webpack_require__(75);
// require('./homefiles/jquery.tweet.js');
__webpack_require__(76);
// require('./homefiles/Placeholders.min.js');
__webpack_require__(77);
// require('./homefiles/jquery.timer.js');
__webpack_require__(78);

/***/ }),

/***/ 71:
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*! jQuery v1.9.1 | (c) 2005, 2012 jQuery Foundation, Inc. | jquery.org/license
*/(function (e, t) {
  var n,
      r,
      i = typeof t === "undefined" ? "undefined" : _typeof(t),
      o = e.document,
      a = e.location,
      s = e.jQuery,
      u = e.$,
      l = {},
      c = [],
      p = "1.9.1",
      f = c.concat,
      d = c.push,
      h = c.slice,
      g = c.indexOf,
      m = l.toString,
      y = l.hasOwnProperty,
      v = p.trim,
      b = function b(e, t) {
    return new b.fn.init(e, t, r);
  },
      x = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
      w = /\S+/g,
      T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
      N = /^(?:(<[\w\W]+>)[^>]*|#([\w-]*))$/,
      C = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
      k = /^[\],:{}\s]*$/,
      E = /(?:^|:|,)(?:\s*\[)+/g,
      S = /\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,
      A = /"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,
      j = /^-ms-/,
      D = /-([\da-z])/gi,
      L = function L(e, t) {
    return t.toUpperCase();
  },
      H = function H(e) {
    (o.addEventListener || "load" === e.type || "complete" === o.readyState) && (q(), b.ready());
  },
      q = function q() {
    o.addEventListener ? (o.removeEventListener("DOMContentLoaded", H, !1), e.removeEventListener("load", H, !1)) : (o.detachEvent("onreadystatechange", H), e.detachEvent("onload", H));
  };b.fn = b.prototype = { jquery: p, constructor: b, init: function init(e, n, r) {
      var i, a;if (!e) return this;if ("string" == typeof e) {
        if (i = "<" === e.charAt(0) && ">" === e.charAt(e.length - 1) && e.length >= 3 ? [null, e, null] : N.exec(e), !i || !i[1] && n) return !n || n.jquery ? (n || r).find(e) : this.constructor(n).find(e);if (i[1]) {
          if (n = n instanceof b ? n[0] : n, b.merge(this, b.parseHTML(i[1], n && n.nodeType ? n.ownerDocument || n : o, !0)), C.test(i[1]) && b.isPlainObject(n)) for (i in n) {
            b.isFunction(this[i]) ? this[i](n[i]) : this.attr(i, n[i]);
          }return this;
        }if (a = o.getElementById(i[2]), a && a.parentNode) {
          if (a.id !== i[2]) return r.find(e);this.length = 1, this[0] = a;
        }return this.context = o, this.selector = e, this;
      }return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : b.isFunction(e) ? r.ready(e) : (e.selector !== t && (this.selector = e.selector, this.context = e.context), b.makeArray(e, this));
    }, selector: "", length: 0, size: function size() {
      return this.length;
    }, toArray: function toArray() {
      return h.call(this);
    }, get: function get(e) {
      return null == e ? this.toArray() : 0 > e ? this[this.length + e] : this[e];
    }, pushStack: function pushStack(e) {
      var t = b.merge(this.constructor(), e);return t.prevObject = this, t.context = this.context, t;
    }, each: function each(e, t) {
      return b.each(this, e, t);
    }, ready: function ready(e) {
      return b.ready.promise().done(e), this;
    }, slice: function slice() {
      return this.pushStack(h.apply(this, arguments));
    }, first: function first() {
      return this.eq(0);
    }, last: function last() {
      return this.eq(-1);
    }, eq: function eq(e) {
      var t = this.length,
          n = +e + (0 > e ? t : 0);return this.pushStack(n >= 0 && t > n ? [this[n]] : []);
    }, map: function map(e) {
      return this.pushStack(b.map(this, function (t, n) {
        return e.call(t, n, t);
      }));
    }, end: function end() {
      return this.prevObject || this.constructor(null);
    }, push: d, sort: [].sort, splice: [].splice }, b.fn.init.prototype = b.fn, b.extend = b.fn.extend = function () {
    var e,
        n,
        r,
        i,
        o,
        a,
        s = arguments[0] || {},
        u = 1,
        l = arguments.length,
        c = !1;for ("boolean" == typeof s && (c = s, s = arguments[1] || {}, u = 2), "object" == (typeof s === "undefined" ? "undefined" : _typeof(s)) || b.isFunction(s) || (s = {}), l === u && (s = this, --u); l > u; u++) {
      if (null != (o = arguments[u])) for (i in o) {
        e = s[i], r = o[i], s !== r && (c && r && (b.isPlainObject(r) || (n = b.isArray(r))) ? (n ? (n = !1, a = e && b.isArray(e) ? e : []) : a = e && b.isPlainObject(e) ? e : {}, s[i] = b.extend(c, a, r)) : r !== t && (s[i] = r));
      }
    }return s;
  }, b.extend({ noConflict: function noConflict(t) {
      return e.$ === b && (e.$ = u), t && e.jQuery === b && (e.jQuery = s), b;
    }, isReady: !1, readyWait: 1, holdReady: function holdReady(e) {
      e ? b.readyWait++ : b.ready(!0);
    }, ready: function ready(e) {
      if (e === !0 ? ! --b.readyWait : !b.isReady) {
        if (!o.body) return setTimeout(b.ready);b.isReady = !0, e !== !0 && --b.readyWait > 0 || (n.resolveWith(o, [b]), b.fn.trigger && b(o).trigger("ready").off("ready"));
      }
    }, isFunction: function isFunction(e) {
      return "function" === b.type(e);
    }, isArray: Array.isArray || function (e) {
      return "array" === b.type(e);
    }, isWindow: function isWindow(e) {
      return null != e && e == e.window;
    }, isNumeric: function isNumeric(e) {
      return !isNaN(parseFloat(e)) && isFinite(e);
    }, type: function type(e) {
      return null == e ? e + "" : "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) || "function" == typeof e ? l[m.call(e)] || "object" : typeof e === "undefined" ? "undefined" : _typeof(e);
    }, isPlainObject: function isPlainObject(e) {
      if (!e || "object" !== b.type(e) || e.nodeType || b.isWindow(e)) return !1;try {
        if (e.constructor && !y.call(e, "constructor") && !y.call(e.constructor.prototype, "isPrototypeOf")) return !1;
      } catch (n) {
        return !1;
      }var r;for (r in e) {}return r === t || y.call(e, r);
    }, isEmptyObject: function isEmptyObject(e) {
      var t;for (t in e) {
        return !1;
      }return !0;
    }, error: function error(e) {
      throw Error(e);
    }, parseHTML: function parseHTML(e, t, n) {
      if (!e || "string" != typeof e) return null;"boolean" == typeof t && (n = t, t = !1), t = t || o;var r = C.exec(e),
          i = !n && [];return r ? [t.createElement(r[1])] : (r = b.buildFragment([e], t, i), i && b(i).remove(), b.merge([], r.childNodes));
    }, parseJSON: function parseJSON(n) {
      return e.JSON && e.JSON.parse ? e.JSON.parse(n) : null === n ? n : "string" == typeof n && (n = b.trim(n), n && k.test(n.replace(S, "@").replace(A, "]").replace(E, ""))) ? Function("return " + n)() : (b.error("Invalid JSON: " + n), t);
    }, parseXML: function parseXML(n) {
      var r, i;if (!n || "string" != typeof n) return null;try {
        e.DOMParser ? (i = new DOMParser(), r = i.parseFromString(n, "text/xml")) : (r = new ActiveXObject("Microsoft.XMLDOM"), r.async = "false", r.loadXML(n));
      } catch (o) {
        r = t;
      }return r && r.documentElement && !r.getElementsByTagName("parsererror").length || b.error("Invalid XML: " + n), r;
    }, noop: function noop() {}, globalEval: function globalEval(t) {
      t && b.trim(t) && (e.execScript || function (t) {
        e.eval.call(e, t);
      })(t);
    }, camelCase: function camelCase(e) {
      return e.replace(j, "ms-").replace(D, L);
    }, nodeName: function nodeName(e, t) {
      return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
    }, each: function each(e, t, n) {
      var r,
          i = 0,
          o = e.length,
          a = M(e);if (n) {
        if (a) {
          for (; o > i; i++) {
            if (r = t.apply(e[i], n), r === !1) break;
          }
        } else for (i in e) {
          if (r = t.apply(e[i], n), r === !1) break;
        }
      } else if (a) {
        for (; o > i; i++) {
          if (r = t.call(e[i], i, e[i]), r === !1) break;
        }
      } else for (i in e) {
        if (r = t.call(e[i], i, e[i]), r === !1) break;
      }return e;
    }, trim: v && !v.call("\uFEFF\xA0") ? function (e) {
      return null == e ? "" : v.call(e);
    } : function (e) {
      return null == e ? "" : (e + "").replace(T, "");
    }, makeArray: function makeArray(e, t) {
      var n = t || [];return null != e && (M(Object(e)) ? b.merge(n, "string" == typeof e ? [e] : e) : d.call(n, e)), n;
    }, inArray: function inArray(e, t, n) {
      var r;if (t) {
        if (g) return g.call(t, e, n);for (r = t.length, n = n ? 0 > n ? Math.max(0, r + n) : n : 0; r > n; n++) {
          if (n in t && t[n] === e) return n;
        }
      }return -1;
    }, merge: function merge(e, n) {
      var r = n.length,
          i = e.length,
          o = 0;if ("number" == typeof r) for (; r > o; o++) {
        e[i++] = n[o];
      } else while (n[o] !== t) {
        e[i++] = n[o++];
      }return e.length = i, e;
    }, grep: function grep(e, t, n) {
      var r,
          i = [],
          o = 0,
          a = e.length;for (n = !!n; a > o; o++) {
        r = !!t(e[o], o), n !== r && i.push(e[o]);
      }return i;
    }, map: function map(e, t, n) {
      var r,
          i = 0,
          o = e.length,
          a = M(e),
          s = [];if (a) for (; o > i; i++) {
        r = t(e[i], i, n), null != r && (s[s.length] = r);
      } else for (i in e) {
        r = t(e[i], i, n), null != r && (s[s.length] = r);
      }return f.apply([], s);
    }, guid: 1, proxy: function proxy(e, n) {
      var r, i, o;return "string" == typeof n && (o = e[n], n = e, e = o), b.isFunction(e) ? (r = h.call(arguments, 2), i = function i() {
        return e.apply(n || this, r.concat(h.call(arguments)));
      }, i.guid = e.guid = e.guid || b.guid++, i) : t;
    }, access: function access(e, n, r, i, o, a, s) {
      var u = 0,
          l = e.length,
          c = null == r;if ("object" === b.type(r)) {
        o = !0;for (u in r) {
          b.access(e, n, u, r[u], !0, a, s);
        }
      } else if (i !== t && (o = !0, b.isFunction(i) || (s = !0), c && (s ? (n.call(e, i), n = null) : (c = n, n = function n(e, t, _n2) {
        return c.call(b(e), _n2);
      })), n)) for (; l > u; u++) {
        n(e[u], r, s ? i : i.call(e[u], u, n(e[u], r)));
      }return o ? e : c ? n.call(e) : l ? n(e[0], r) : a;
    }, now: function now() {
      return new Date().getTime();
    } }), b.ready.promise = function (t) {
    if (!n) if (n = b.Deferred(), "complete" === o.readyState) setTimeout(b.ready);else if (o.addEventListener) o.addEventListener("DOMContentLoaded", H, !1), e.addEventListener("load", H, !1);else {
      o.attachEvent("onreadystatechange", H), e.attachEvent("onload", H);var r = !1;try {
        r = null == e.frameElement && o.documentElement;
      } catch (i) {}r && r.doScroll && function a() {
        if (!b.isReady) {
          try {
            r.doScroll("left");
          } catch (e) {
            return setTimeout(a, 50);
          }q(), b.ready();
        }
      }();
    }return n.promise(t);
  }, b.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function (e, t) {
    l["[object " + t + "]"] = t.toLowerCase();
  });function M(e) {
    var t = e.length,
        n = b.type(e);return b.isWindow(e) ? !1 : 1 === e.nodeType && t ? !0 : "array" === n || "function" !== n && (0 === t || "number" == typeof t && t > 0 && t - 1 in e);
  }r = b(o);var _ = {};function F(e) {
    var t = _[e] = {};return b.each(e.match(w) || [], function (e, n) {
      t[n] = !0;
    }), t;
  }b.Callbacks = function (e) {
    e = "string" == typeof e ? _[e] || F(e) : b.extend({}, e);var n,
        r,
        i,
        o,
        a,
        s,
        u = [],
        l = !e.once && [],
        c = function c(t) {
      for (r = e.memory && t, i = !0, a = s || 0, s = 0, o = u.length, n = !0; u && o > a; a++) {
        if (u[a].apply(t[0], t[1]) === !1 && e.stopOnFalse) {
          r = !1;break;
        }
      }n = !1, u && (l ? l.length && c(l.shift()) : r ? u = [] : p.disable());
    },
        p = { add: function add() {
        if (u) {
          var t = u.length;(function i(t) {
            b.each(t, function (t, n) {
              var r = b.type(n);"function" === r ? e.unique && p.has(n) || u.push(n) : n && n.length && "string" !== r && i(n);
            });
          })(arguments), n ? o = u.length : r && (s = t, c(r));
        }return this;
      }, remove: function remove() {
        return u && b.each(arguments, function (e, t) {
          var r;while ((r = b.inArray(t, u, r)) > -1) {
            u.splice(r, 1), n && (o >= r && o--, a >= r && a--);
          }
        }), this;
      }, has: function has(e) {
        return e ? b.inArray(e, u) > -1 : !(!u || !u.length);
      }, empty: function empty() {
        return u = [], this;
      }, disable: function disable() {
        return u = l = r = t, this;
      }, disabled: function disabled() {
        return !u;
      }, lock: function lock() {
        return l = t, r || p.disable(), this;
      }, locked: function locked() {
        return !l;
      }, fireWith: function fireWith(e, t) {
        return t = t || [], t = [e, t.slice ? t.slice() : t], !u || i && !l || (n ? l.push(t) : c(t)), this;
      }, fire: function fire() {
        return p.fireWith(this, arguments), this;
      }, fired: function fired() {
        return !!i;
      } };return p;
  }, b.extend({ Deferred: function Deferred(e) {
      var t = [["resolve", "done", b.Callbacks("once memory"), "resolved"], ["reject", "fail", b.Callbacks("once memory"), "rejected"], ["notify", "progress", b.Callbacks("memory")]],
          n = "pending",
          r = { state: function state() {
          return n;
        }, always: function always() {
          return i.done(arguments).fail(arguments), this;
        }, then: function then() {
          var e = arguments;return b.Deferred(function (n) {
            b.each(t, function (t, o) {
              var a = o[0],
                  s = b.isFunction(e[t]) && e[t];i[o[1]](function () {
                var e = s && s.apply(this, arguments);e && b.isFunction(e.promise) ? e.promise().done(n.resolve).fail(n.reject).progress(n.notify) : n[a + "With"](this === r ? n.promise() : this, s ? [e] : arguments);
              });
            }), e = null;
          }).promise();
        }, promise: function promise(e) {
          return null != e ? b.extend(e, r) : r;
        } },
          i = {};return r.pipe = r.then, b.each(t, function (e, o) {
        var a = o[2],
            s = o[3];r[o[1]] = a.add, s && a.add(function () {
          n = s;
        }, t[1 ^ e][2].disable, t[2][2].lock), i[o[0]] = function () {
          return i[o[0] + "With"](this === i ? r : this, arguments), this;
        }, i[o[0] + "With"] = a.fireWith;
      }), r.promise(i), e && e.call(i, i), i;
    }, when: function when(e) {
      var t = 0,
          n = h.call(arguments),
          r = n.length,
          i = 1 !== r || e && b.isFunction(e.promise) ? r : 0,
          o = 1 === i ? e : b.Deferred(),
          a = function a(e, t, n) {
        return function (r) {
          t[e] = this, n[e] = arguments.length > 1 ? h.call(arguments) : r, n === s ? o.notifyWith(t, n) : --i || o.resolveWith(t, n);
        };
      },
          s,
          u,
          l;if (r > 1) for (s = Array(r), u = Array(r), l = Array(r); r > t; t++) {
        n[t] && b.isFunction(n[t].promise) ? n[t].promise().done(a(t, l, n)).fail(o.reject).progress(a(t, u, s)) : --i;
      }return i || o.resolveWith(l, n), o.promise();
    } }), b.support = function () {
    var t,
        n,
        r,
        a,
        s,
        u,
        l,
        c,
        p,
        f,
        d = o.createElement("div");if (d.setAttribute("className", "t"), d.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", n = d.getElementsByTagName("*"), r = d.getElementsByTagName("a")[0], !n || !r || !n.length) return {};s = o.createElement("select"), l = s.appendChild(o.createElement("option")), a = d.getElementsByTagName("input")[0], r.style.cssText = "top:1px;float:left;opacity:.5", t = { getSetAttribute: "t" !== d.className, leadingWhitespace: 3 === d.firstChild.nodeType, tbody: !d.getElementsByTagName("tbody").length, htmlSerialize: !!d.getElementsByTagName("link").length, style: /top/.test(r.getAttribute("style")), hrefNormalized: "/a" === r.getAttribute("href"), opacity: /^0.5/.test(r.style.opacity), cssFloat: !!r.style.cssFloat, checkOn: !!a.value, optSelected: l.selected, enctype: !!o.createElement("form").enctype, html5Clone: "<:nav></:nav>" !== o.createElement("nav").cloneNode(!0).outerHTML, boxModel: "CSS1Compat" === o.compatMode, deleteExpando: !0, noCloneEvent: !0, inlineBlockNeedsLayout: !1, shrinkWrapBlocks: !1, reliableMarginRight: !0, boxSizingReliable: !0, pixelPosition: !1 }, a.checked = !0, t.noCloneChecked = a.cloneNode(!0).checked, s.disabled = !0, t.optDisabled = !l.disabled;try {
      delete d.test;
    } catch (h) {
      t.deleteExpando = !1;
    }a = o.createElement("input"), a.setAttribute("value", ""), t.input = "" === a.getAttribute("value"), a.value = "t", a.setAttribute("type", "radio"), t.radioValue = "t" === a.value, a.setAttribute("checked", "t"), a.setAttribute("name", "t"), u = o.createDocumentFragment(), u.appendChild(a), t.appendChecked = a.checked, t.checkClone = u.cloneNode(!0).cloneNode(!0).lastChild.checked, d.attachEvent && (d.attachEvent("onclick", function () {
      t.noCloneEvent = !1;
    }), d.cloneNode(!0).click());for (f in { submit: !0, change: !0, focusin: !0 }) {
      d.setAttribute(c = "on" + f, "t"), t[f + "Bubbles"] = c in e || d.attributes[c].expando === !1;
    }return d.style.backgroundClip = "content-box", d.cloneNode(!0).style.backgroundClip = "", t.clearCloneStyle = "content-box" === d.style.backgroundClip, b(function () {
      var n,
          r,
          a,
          s = "padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",
          u = o.getElementsByTagName("body")[0];u && (n = o.createElement("div"), n.style.cssText = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px", u.appendChild(n).appendChild(d), d.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", a = d.getElementsByTagName("td"), a[0].style.cssText = "padding:0;margin:0;border:0;display:none", p = 0 === a[0].offsetHeight, a[0].style.display = "", a[1].style.display = "none", t.reliableHiddenOffsets = p && 0 === a[0].offsetHeight, d.innerHTML = "", d.style.cssText = "box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;", t.boxSizing = 4 === d.offsetWidth, t.doesNotIncludeMarginInBodyOffset = 1 !== u.offsetTop, e.getComputedStyle && (t.pixelPosition = "1%" !== (e.getComputedStyle(d, null) || {}).top, t.boxSizingReliable = "4px" === (e.getComputedStyle(d, null) || { width: "4px" }).width, r = d.appendChild(o.createElement("div")), r.style.cssText = d.style.cssText = s, r.style.marginRight = r.style.width = "0", d.style.width = "1px", t.reliableMarginRight = !parseFloat((e.getComputedStyle(r, null) || {}).marginRight)), _typeof(d.style.zoom) !== i && (d.innerHTML = "", d.style.cssText = s + "width:1px;padding:1px;display:inline;zoom:1", t.inlineBlockNeedsLayout = 3 === d.offsetWidth, d.style.display = "block", d.innerHTML = "<div></div>", d.firstChild.style.width = "5px", t.shrinkWrapBlocks = 3 !== d.offsetWidth, t.inlineBlockNeedsLayout && (u.style.zoom = 1)), u.removeChild(n), n = d = a = r = null);
    }), n = s = u = l = r = a = null, t;
  }();var O = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/,
      B = /([A-Z])/g;function P(e, n, r, i) {
    if (b.acceptData(e)) {
      var o,
          a,
          s = b.expando,
          u = "string" == typeof n,
          l = e.nodeType,
          p = l ? b.cache : e,
          f = l ? e[s] : e[s] && s;if (f && p[f] && (i || p[f].data) || !u || r !== t) return f || (l ? e[s] = f = c.pop() || b.guid++ : f = s), p[f] || (p[f] = {}, l || (p[f].toJSON = b.noop)), ("object" == (typeof n === "undefined" ? "undefined" : _typeof(n)) || "function" == typeof n) && (i ? p[f] = b.extend(p[f], n) : p[f].data = b.extend(p[f].data, n)), o = p[f], i || (o.data || (o.data = {}), o = o.data), r !== t && (o[b.camelCase(n)] = r), u ? (a = o[n], null == a && (a = o[b.camelCase(n)])) : a = o, a;
    }
  }function R(e, t, n) {
    if (b.acceptData(e)) {
      var r,
          i,
          o,
          a = e.nodeType,
          s = a ? b.cache : e,
          u = a ? e[b.expando] : b.expando;if (s[u]) {
        if (t && (o = n ? s[u] : s[u].data)) {
          b.isArray(t) ? t = t.concat(b.map(t, b.camelCase)) : t in o ? t = [t] : (t = b.camelCase(t), t = t in o ? [t] : t.split(" "));for (r = 0, i = t.length; i > r; r++) {
            delete o[t[r]];
          }if (!(n ? $ : b.isEmptyObject)(o)) return;
        }(n || (delete s[u].data, $(s[u]))) && (a ? b.cleanData([e], !0) : b.support.deleteExpando || s != s.window ? delete s[u] : s[u] = null);
      }
    }
  }b.extend({ cache: {}, expando: "jQuery" + (p + Math.random()).replace(/\D/g, ""), noData: { embed: !0, object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000", applet: !0 }, hasData: function hasData(e) {
      return e = e.nodeType ? b.cache[e[b.expando]] : e[b.expando], !!e && !$(e);
    }, data: function data(e, t, n) {
      return P(e, t, n);
    }, removeData: function removeData(e, t) {
      return R(e, t);
    }, _data: function _data(e, t, n) {
      return P(e, t, n, !0);
    }, _removeData: function _removeData(e, t) {
      return R(e, t, !0);
    }, acceptData: function acceptData(e) {
      if (e.nodeType && 1 !== e.nodeType && 9 !== e.nodeType) return !1;var t = e.nodeName && b.noData[e.nodeName.toLowerCase()];return !t || t !== !0 && e.getAttribute("classid") === t;
    } }), b.fn.extend({ data: function data(e, n) {
      var r,
          i,
          o = this[0],
          a = 0,
          s = null;if (e === t) {
        if (this.length && (s = b.data(o), 1 === o.nodeType && !b._data(o, "parsedAttrs"))) {
          for (r = o.attributes; r.length > a; a++) {
            i = r[a].name, i.indexOf("data-") || (i = b.camelCase(i.slice(5)), W(o, i, s[i]));
          }b._data(o, "parsedAttrs", !0);
        }return s;
      }return "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) ? this.each(function () {
        b.data(this, e);
      }) : b.access(this, function (n) {
        return n === t ? o ? W(o, e, b.data(o, e)) : null : (this.each(function () {
          b.data(this, e, n);
        }), t);
      }, null, n, arguments.length > 1, null, !0);
    }, removeData: function removeData(e) {
      return this.each(function () {
        b.removeData(this, e);
      });
    } });function W(e, n, r) {
    if (r === t && 1 === e.nodeType) {
      var i = "data-" + n.replace(B, "-$1").toLowerCase();if (r = e.getAttribute(i), "string" == typeof r) {
        try {
          r = "true" === r ? !0 : "false" === r ? !1 : "null" === r ? null : +r + "" === r ? +r : O.test(r) ? b.parseJSON(r) : r;
        } catch (o) {}b.data(e, n, r);
      } else r = t;
    }return r;
  }function $(e) {
    var t;for (t in e) {
      if (("data" !== t || !b.isEmptyObject(e[t])) && "toJSON" !== t) return !1;
    }return !0;
  }b.extend({ queue: function queue(e, n, r) {
      var i;return e ? (n = (n || "fx") + "queue", i = b._data(e, n), r && (!i || b.isArray(r) ? i = b._data(e, n, b.makeArray(r)) : i.push(r)), i || []) : t;
    }, dequeue: function dequeue(e, t) {
      t = t || "fx";var n = b.queue(e, t),
          r = n.length,
          i = n.shift(),
          o = b._queueHooks(e, t),
          a = function a() {
        b.dequeue(e, t);
      };"inprogress" === i && (i = n.shift(), r--), o.cur = i, i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire();
    }, _queueHooks: function _queueHooks(e, t) {
      var n = t + "queueHooks";return b._data(e, n) || b._data(e, n, { empty: b.Callbacks("once memory").add(function () {
          b._removeData(e, t + "queue"), b._removeData(e, n);
        }) });
    } }), b.fn.extend({ queue: function queue(e, n) {
      var r = 2;return "string" != typeof e && (n = e, e = "fx", r--), r > arguments.length ? b.queue(this[0], e) : n === t ? this : this.each(function () {
        var t = b.queue(this, e, n);b._queueHooks(this, e), "fx" === e && "inprogress" !== t[0] && b.dequeue(this, e);
      });
    }, dequeue: function dequeue(e) {
      return this.each(function () {
        b.dequeue(this, e);
      });
    }, delay: function delay(e, t) {
      return e = b.fx ? b.fx.speeds[e] || e : e, t = t || "fx", this.queue(t, function (t, n) {
        var r = setTimeout(t, e);n.stop = function () {
          clearTimeout(r);
        };
      });
    }, clearQueue: function clearQueue(e) {
      return this.queue(e || "fx", []);
    }, promise: function promise(e, n) {
      var r,
          i = 1,
          o = b.Deferred(),
          a = this,
          s = this.length,
          u = function u() {
        --i || o.resolveWith(a, [a]);
      };"string" != typeof e && (n = e, e = t), e = e || "fx";while (s--) {
        r = b._data(a[s], e + "queueHooks"), r && r.empty && (i++, r.empty.add(u));
      }return u(), o.promise(n);
    } });var I,
      z,
      X = /[\t\r\n]/g,
      U = /\r/g,
      V = /^(?:input|select|textarea|button|object)$/i,
      Y = /^(?:a|area)$/i,
      J = /^(?:checked|selected|autofocus|autoplay|async|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped)$/i,
      G = /^(?:checked|selected)$/i,
      Q = b.support.getSetAttribute,
      K = b.support.input;b.fn.extend({ attr: function attr(e, t) {
      return b.access(this, b.attr, e, t, arguments.length > 1);
    }, removeAttr: function removeAttr(e) {
      return this.each(function () {
        b.removeAttr(this, e);
      });
    }, prop: function prop(e, t) {
      return b.access(this, b.prop, e, t, arguments.length > 1);
    }, removeProp: function removeProp(e) {
      return e = b.propFix[e] || e, this.each(function () {
        try {
          this[e] = t, delete this[e];
        } catch (n) {}
      });
    }, addClass: function addClass(e) {
      var t,
          n,
          r,
          i,
          o,
          a = 0,
          s = this.length,
          u = "string" == typeof e && e;if (b.isFunction(e)) return this.each(function (t) {
        b(this).addClass(e.call(this, t, this.className));
      });if (u) for (t = (e || "").match(w) || []; s > a; a++) {
        if (n = this[a], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(X, " ") : " ")) {
          o = 0;while (i = t[o++]) {
            0 > r.indexOf(" " + i + " ") && (r += i + " ");
          }n.className = b.trim(r);
        }
      }return this;
    }, removeClass: function removeClass(e) {
      var t,
          n,
          r,
          i,
          o,
          a = 0,
          s = this.length,
          u = 0 === arguments.length || "string" == typeof e && e;if (b.isFunction(e)) return this.each(function (t) {
        b(this).removeClass(e.call(this, t, this.className));
      });if (u) for (t = (e || "").match(w) || []; s > a; a++) {
        if (n = this[a], r = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(X, " ") : "")) {
          o = 0;while (i = t[o++]) {
            while (r.indexOf(" " + i + " ") >= 0) {
              r = r.replace(" " + i + " ", " ");
            }
          }n.className = e ? b.trim(r) : "";
        }
      }return this;
    }, toggleClass: function toggleClass(e, t) {
      var n = typeof e === "undefined" ? "undefined" : _typeof(e),
          r = "boolean" == typeof t;return b.isFunction(e) ? this.each(function (n) {
        b(this).toggleClass(e.call(this, n, this.className, t), t);
      }) : this.each(function () {
        if ("string" === n) {
          var o,
              a = 0,
              s = b(this),
              u = t,
              l = e.match(w) || [];while (o = l[a++]) {
            u = r ? u : !s.hasClass(o), s[u ? "addClass" : "removeClass"](o);
          }
        } else (n === i || "boolean" === n) && (this.className && b._data(this, "__className__", this.className), this.className = this.className || e === !1 ? "" : b._data(this, "__className__") || "");
      });
    }, hasClass: function hasClass(e) {
      var t = " " + e + " ",
          n = 0,
          r = this.length;for (; r > n; n++) {
        if (1 === this[n].nodeType && (" " + this[n].className + " ").replace(X, " ").indexOf(t) >= 0) return !0;
      }return !1;
    }, val: function val(e) {
      var n,
          r,
          i,
          o = this[0];{
        if (arguments.length) return i = b.isFunction(e), this.each(function (n) {
          var o,
              a = b(this);1 === this.nodeType && (o = i ? e.call(this, n, a.val()) : e, null == o ? o = "" : "number" == typeof o ? o += "" : b.isArray(o) && (o = b.map(o, function (e) {
            return null == e ? "" : e + "";
          })), r = b.valHooks[this.type] || b.valHooks[this.nodeName.toLowerCase()], r && "set" in r && r.set(this, o, "value") !== t || (this.value = o));
        });if (o) return r = b.valHooks[o.type] || b.valHooks[o.nodeName.toLowerCase()], r && "get" in r && (n = r.get(o, "value")) !== t ? n : (n = o.value, "string" == typeof n ? n.replace(U, "") : null == n ? "" : n);
      }
    } }), b.extend({ valHooks: { option: { get: function get(e) {
          var t = e.attributes.value;return !t || t.specified ? e.value : e.text;
        } }, select: { get: function get(e) {
          var t,
              n,
              r = e.options,
              i = e.selectedIndex,
              o = "select-one" === e.type || 0 > i,
              a = o ? null : [],
              s = o ? i + 1 : r.length,
              u = 0 > i ? s : o ? i : 0;for (; s > u; u++) {
            if (n = r[u], !(!n.selected && u !== i || (b.support.optDisabled ? n.disabled : null !== n.getAttribute("disabled")) || n.parentNode.disabled && b.nodeName(n.parentNode, "optgroup"))) {
              if (t = b(n).val(), o) return t;a.push(t);
            }
          }return a;
        }, set: function set(e, t) {
          var n = b.makeArray(t);return b(e).find("option").each(function () {
            this.selected = b.inArray(b(this).val(), n) >= 0;
          }), n.length || (e.selectedIndex = -1), n;
        } } }, attr: function attr(e, n, r) {
      var o,
          a,
          s,
          u = e.nodeType;if (e && 3 !== u && 8 !== u && 2 !== u) return _typeof(e.getAttribute) === i ? b.prop(e, n, r) : (a = 1 !== u || !b.isXMLDoc(e), a && (n = n.toLowerCase(), o = b.attrHooks[n] || (J.test(n) ? z : I)), r === t ? o && a && "get" in o && null !== (s = o.get(e, n)) ? s : (_typeof(e.getAttribute) !== i && (s = e.getAttribute(n)), null == s ? t : s) : null !== r ? o && a && "set" in o && (s = o.set(e, r, n)) !== t ? s : (e.setAttribute(n, r + ""), r) : (b.removeAttr(e, n), t));
    }, removeAttr: function removeAttr(e, t) {
      var n,
          r,
          i = 0,
          o = t && t.match(w);if (o && 1 === e.nodeType) while (n = o[i++]) {
        r = b.propFix[n] || n, J.test(n) ? !Q && G.test(n) ? e[b.camelCase("default-" + n)] = e[r] = !1 : e[r] = !1 : b.attr(e, n, ""), e.removeAttribute(Q ? n : r);
      }
    }, attrHooks: { type: { set: function set(e, t) {
          if (!b.support.radioValue && "radio" === t && b.nodeName(e, "input")) {
            var n = e.value;return e.setAttribute("type", t), n && (e.value = n), t;
          }
        } } }, propFix: { tabindex: "tabIndex", readonly: "readOnly", "for": "htmlFor", "class": "className", maxlength: "maxLength", cellspacing: "cellSpacing", cellpadding: "cellPadding", rowspan: "rowSpan", colspan: "colSpan", usemap: "useMap", frameborder: "frameBorder", contenteditable: "contentEditable" }, prop: function prop(e, n, r) {
      var i,
          o,
          a,
          s = e.nodeType;if (e && 3 !== s && 8 !== s && 2 !== s) return a = 1 !== s || !b.isXMLDoc(e), a && (n = b.propFix[n] || n, o = b.propHooks[n]), r !== t ? o && "set" in o && (i = o.set(e, r, n)) !== t ? i : e[n] = r : o && "get" in o && null !== (i = o.get(e, n)) ? i : e[n];
    }, propHooks: { tabIndex: { get: function get(e) {
          var n = e.getAttributeNode("tabindex");return n && n.specified ? parseInt(n.value, 10) : V.test(e.nodeName) || Y.test(e.nodeName) && e.href ? 0 : t;
        } } } }), z = { get: function get(e, n) {
      var r = b.prop(e, n),
          i = "boolean" == typeof r && e.getAttribute(n),
          o = "boolean" == typeof r ? K && Q ? null != i : G.test(n) ? e[b.camelCase("default-" + n)] : !!i : e.getAttributeNode(n);return o && o.value !== !1 ? n.toLowerCase() : t;
    }, set: function set(e, t, n) {
      return t === !1 ? b.removeAttr(e, n) : K && Q || !G.test(n) ? e.setAttribute(!Q && b.propFix[n] || n, n) : e[b.camelCase("default-" + n)] = e[n] = !0, n;
    } }, K && Q || (b.attrHooks.value = { get: function get(e, n) {
      var r = e.getAttributeNode(n);return b.nodeName(e, "input") ? e.defaultValue : r && r.specified ? r.value : t;
    }, set: function set(e, n, r) {
      return b.nodeName(e, "input") ? (e.defaultValue = n, t) : I && I.set(e, n, r);
    } }), Q || (I = b.valHooks.button = { get: function get(e, n) {
      var r = e.getAttributeNode(n);return r && ("id" === n || "name" === n || "coords" === n ? "" !== r.value : r.specified) ? r.value : t;
    }, set: function set(e, n, r) {
      var i = e.getAttributeNode(r);return i || e.setAttributeNode(i = e.ownerDocument.createAttribute(r)), i.value = n += "", "value" === r || n === e.getAttribute(r) ? n : t;
    } }, b.attrHooks.contenteditable = { get: I.get, set: function set(e, t, n) {
      I.set(e, "" === t ? !1 : t, n);
    } }, b.each(["width", "height"], function (e, n) {
    b.attrHooks[n] = b.extend(b.attrHooks[n], { set: function set(e, r) {
        return "" === r ? (e.setAttribute(n, "auto"), r) : t;
      } });
  })), b.support.hrefNormalized || (b.each(["href", "src", "width", "height"], function (e, n) {
    b.attrHooks[n] = b.extend(b.attrHooks[n], { get: function get(e) {
        var r = e.getAttribute(n, 2);return null == r ? t : r;
      } });
  }), b.each(["href", "src"], function (e, t) {
    b.propHooks[t] = { get: function get(e) {
        return e.getAttribute(t, 4);
      } };
  })), b.support.style || (b.attrHooks.style = { get: function get(e) {
      return e.style.cssText || t;
    }, set: function set(e, t) {
      return e.style.cssText = t + "";
    } }), b.support.optSelected || (b.propHooks.selected = b.extend(b.propHooks.selected, { get: function get(e) {
      var t = e.parentNode;return t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex), null;
    } })), b.support.enctype || (b.propFix.enctype = "encoding"), b.support.checkOn || b.each(["radio", "checkbox"], function () {
    b.valHooks[this] = { get: function get(e) {
        return null === e.getAttribute("value") ? "on" : e.value;
      } };
  }), b.each(["radio", "checkbox"], function () {
    b.valHooks[this] = b.extend(b.valHooks[this], { set: function set(e, n) {
        return b.isArray(n) ? e.checked = b.inArray(b(e).val(), n) >= 0 : t;
      } });
  });var Z = /^(?:input|select|textarea)$/i,
      et = /^key/,
      tt = /^(?:mouse|contextmenu)|click/,
      nt = /^(?:focusinfocus|focusoutblur)$/,
      rt = /^([^.]*)(?:\.(.+)|)$/;function it() {
    return !0;
  }function ot() {
    return !1;
  }b.event = { global: {}, add: function add(e, n, r, o, a) {
      var s,
          u,
          l,
          c,
          p,
          f,
          d,
          h,
          g,
          m,
          y,
          v = b._data(e);if (v) {
        r.handler && (c = r, r = c.handler, a = c.selector), r.guid || (r.guid = b.guid++), (u = v.events) || (u = v.events = {}), (f = v.handle) || (f = v.handle = function (e) {
          return (typeof b === "undefined" ? "undefined" : _typeof(b)) === i || e && b.event.triggered === e.type ? t : b.event.dispatch.apply(f.elem, arguments);
        }, f.elem = e), n = (n || "").match(w) || [""], l = n.length;while (l--) {
          s = rt.exec(n[l]) || [], g = y = s[1], m = (s[2] || "").split(".").sort(), p = b.event.special[g] || {}, g = (a ? p.delegateType : p.bindType) || g, p = b.event.special[g] || {}, d = b.extend({ type: g, origType: y, data: o, handler: r, guid: r.guid, selector: a, needsContext: a && b.expr.match.needsContext.test(a), namespace: m.join(".") }, c), (h = u[g]) || (h = u[g] = [], h.delegateCount = 0, p.setup && p.setup.call(e, o, m, f) !== !1 || (e.addEventListener ? e.addEventListener(g, f, !1) : e.attachEvent && e.attachEvent("on" + g, f))), p.add && (p.add.call(e, d), d.handler.guid || (d.handler.guid = r.guid)), a ? h.splice(h.delegateCount++, 0, d) : h.push(d), b.event.global[g] = !0;
        }e = null;
      }
    }, remove: function remove(e, t, n, r, i) {
      var o,
          a,
          s,
          u,
          l,
          c,
          p,
          f,
          d,
          h,
          g,
          m = b.hasData(e) && b._data(e);if (m && (c = m.events)) {
        t = (t || "").match(w) || [""], l = t.length;while (l--) {
          if (s = rt.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
            p = b.event.special[d] || {}, d = (r ? p.delegateType : p.bindType) || d, f = c[d] || [], s = s[2] && RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), u = o = f.length;while (o--) {
              a = f[o], !i && g !== a.origType || n && n.guid !== a.guid || s && !s.test(a.namespace) || r && r !== a.selector && ("**" !== r || !a.selector) || (f.splice(o, 1), a.selector && f.delegateCount--, p.remove && p.remove.call(e, a));
            }u && !f.length && (p.teardown && p.teardown.call(e, h, m.handle) !== !1 || b.removeEvent(e, d, m.handle), delete c[d]);
          } else for (d in c) {
            b.event.remove(e, d + t[l], n, r, !0);
          }
        }b.isEmptyObject(c) && (delete m.handle, b._removeData(e, "events"));
      }
    }, trigger: function trigger(n, r, i, a) {
      var s,
          u,
          l,
          c,
          p,
          f,
          d,
          h = [i || o],
          g = y.call(n, "type") ? n.type : n,
          m = y.call(n, "namespace") ? n.namespace.split(".") : [];if (l = f = i = i || o, 3 !== i.nodeType && 8 !== i.nodeType && !nt.test(g + b.event.triggered) && (g.indexOf(".") >= 0 && (m = g.split("."), g = m.shift(), m.sort()), u = 0 > g.indexOf(":") && "on" + g, n = n[b.expando] ? n : new b.Event(g, "object" == (typeof n === "undefined" ? "undefined" : _typeof(n)) && n), n.isTrigger = !0, n.namespace = m.join("."), n.namespace_re = n.namespace ? RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, n.result = t, n.target || (n.target = i), r = null == r ? [n] : b.makeArray(r, [n]), p = b.event.special[g] || {}, a || !p.trigger || p.trigger.apply(i, r) !== !1)) {
        if (!a && !p.noBubble && !b.isWindow(i)) {
          for (c = p.delegateType || g, nt.test(c + g) || (l = l.parentNode); l; l = l.parentNode) {
            h.push(l), f = l;
          }f === (i.ownerDocument || o) && h.push(f.defaultView || f.parentWindow || e);
        }d = 0;while ((l = h[d++]) && !n.isPropagationStopped()) {
          n.type = d > 1 ? c : p.bindType || g, s = (b._data(l, "events") || {})[n.type] && b._data(l, "handle"), s && s.apply(l, r), s = u && l[u], s && b.acceptData(l) && s.apply && s.apply(l, r) === !1 && n.preventDefault();
        }if (n.type = g, !(a || n.isDefaultPrevented() || p._default && p._default.apply(i.ownerDocument, r) !== !1 || "click" === g && b.nodeName(i, "a") || !b.acceptData(i) || !u || !i[g] || b.isWindow(i))) {
          f = i[u], f && (i[u] = null), b.event.triggered = g;try {
            i[g]();
          } catch (v) {}b.event.triggered = t, f && (i[u] = f);
        }return n.result;
      }
    }, dispatch: function dispatch(e) {
      e = b.event.fix(e);var n,
          r,
          i,
          o,
          a,
          s = [],
          u = h.call(arguments),
          l = (b._data(this, "events") || {})[e.type] || [],
          c = b.event.special[e.type] || {};if (u[0] = e, e.delegateTarget = this, !c.preDispatch || c.preDispatch.call(this, e) !== !1) {
        s = b.event.handlers.call(this, e, l), n = 0;while ((o = s[n++]) && !e.isPropagationStopped()) {
          e.currentTarget = o.elem, a = 0;while ((i = o.handlers[a++]) && !e.isImmediatePropagationStopped()) {
            (!e.namespace_re || e.namespace_re.test(i.namespace)) && (e.handleObj = i, e.data = i.data, r = ((b.event.special[i.origType] || {}).handle || i.handler).apply(o.elem, u), r !== t && (e.result = r) === !1 && (e.preventDefault(), e.stopPropagation()));
          }
        }return c.postDispatch && c.postDispatch.call(this, e), e.result;
      }
    }, handlers: function handlers(e, n) {
      var r,
          i,
          o,
          a,
          s = [],
          u = n.delegateCount,
          l = e.target;if (u && l.nodeType && (!e.button || "click" !== e.type)) for (; l != this; l = l.parentNode || this) {
        if (1 === l.nodeType && (l.disabled !== !0 || "click" !== e.type)) {
          for (o = [], a = 0; u > a; a++) {
            i = n[a], r = i.selector + " ", o[r] === t && (o[r] = i.needsContext ? b(r, this).index(l) >= 0 : b.find(r, this, null, [l]).length), o[r] && o.push(i);
          }o.length && s.push({ elem: l, handlers: o });
        }
      }return n.length > u && s.push({ elem: this, handlers: n.slice(u) }), s;
    }, fix: function fix(e) {
      if (e[b.expando]) return e;var t,
          n,
          r,
          i = e.type,
          a = e,
          s = this.fixHooks[i];s || (this.fixHooks[i] = s = tt.test(i) ? this.mouseHooks : et.test(i) ? this.keyHooks : {}), r = s.props ? this.props.concat(s.props) : this.props, e = new b.Event(a), t = r.length;while (t--) {
        n = r[t], e[n] = a[n];
      }return e.target || (e.target = a.srcElement || o), 3 === e.target.nodeType && (e.target = e.target.parentNode), e.metaKey = !!e.metaKey, s.filter ? s.filter(e, a) : e;
    }, props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: { props: "char charCode key keyCode".split(" "), filter: function filter(e, t) {
        return null == e.which && (e.which = null != t.charCode ? t.charCode : t.keyCode), e;
      } }, mouseHooks: { props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function filter(e, n) {
        var r,
            i,
            a,
            s = n.button,
            u = n.fromElement;return null == e.pageX && null != n.clientX && (i = e.target.ownerDocument || o, a = i.documentElement, r = i.body, e.pageX = n.clientX + (a && a.scrollLeft || r && r.scrollLeft || 0) - (a && a.clientLeft || r && r.clientLeft || 0), e.pageY = n.clientY + (a && a.scrollTop || r && r.scrollTop || 0) - (a && a.clientTop || r && r.clientTop || 0)), !e.relatedTarget && u && (e.relatedTarget = u === e.target ? n.toElement : u), e.which || s === t || (e.which = 1 & s ? 1 : 2 & s ? 3 : 4 & s ? 2 : 0), e;
      } }, special: { load: { noBubble: !0 }, click: { trigger: function trigger() {
          return b.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : t;
        } }, focus: { trigger: function trigger() {
          if (this !== o.activeElement && this.focus) try {
            return this.focus(), !1;
          } catch (e) {}
        }, delegateType: "focusin" }, blur: { trigger: function trigger() {
          return this === o.activeElement && this.blur ? (this.blur(), !1) : t;
        }, delegateType: "focusout" }, beforeunload: { postDispatch: function postDispatch(e) {
          e.result !== t && (e.originalEvent.returnValue = e.result);
        } } }, simulate: function simulate(e, t, n, r) {
      var i = b.extend(new b.Event(), n, { type: e, isSimulated: !0, originalEvent: {} });r ? b.event.trigger(i, null, t) : b.event.dispatch.call(t, i), i.isDefaultPrevented() && n.preventDefault();
    } }, b.removeEvent = o.removeEventListener ? function (e, t, n) {
    e.removeEventListener && e.removeEventListener(t, n, !1);
  } : function (e, t, n) {
    var r = "on" + t;e.detachEvent && (_typeof(e[r]) === i && (e[r] = null), e.detachEvent(r, n));
  }, b.Event = function (e, n) {
    return this instanceof b.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || e.returnValue === !1 || e.getPreventDefault && e.getPreventDefault() ? it : ot) : this.type = e, n && b.extend(this, n), this.timeStamp = e && e.timeStamp || b.now(), this[b.expando] = !0, t) : new b.Event(e, n);
  }, b.Event.prototype = { isDefaultPrevented: ot, isPropagationStopped: ot, isImmediatePropagationStopped: ot, preventDefault: function preventDefault() {
      var e = this.originalEvent;this.isDefaultPrevented = it, e && (e.preventDefault ? e.preventDefault() : e.returnValue = !1);
    }, stopPropagation: function stopPropagation() {
      var e = this.originalEvent;this.isPropagationStopped = it, e && (e.stopPropagation && e.stopPropagation(), e.cancelBubble = !0);
    }, stopImmediatePropagation: function stopImmediatePropagation() {
      this.isImmediatePropagationStopped = it, this.stopPropagation();
    } }, b.each({ mouseenter: "mouseover", mouseleave: "mouseout" }, function (e, t) {
    b.event.special[e] = { delegateType: t, bindType: t, handle: function handle(e) {
        var n,
            r = this,
            i = e.relatedTarget,
            o = e.handleObj;
        return (!i || i !== r && !b.contains(r, i)) && (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n;
      } };
  }), b.support.submitBubbles || (b.event.special.submit = { setup: function setup() {
      return b.nodeName(this, "form") ? !1 : (b.event.add(this, "click._submit keypress._submit", function (e) {
        var n = e.target,
            r = b.nodeName(n, "input") || b.nodeName(n, "button") ? n.form : t;r && !b._data(r, "submitBubbles") && (b.event.add(r, "submit._submit", function (e) {
          e._submit_bubble = !0;
        }), b._data(r, "submitBubbles", !0));
      }), t);
    }, postDispatch: function postDispatch(e) {
      e._submit_bubble && (delete e._submit_bubble, this.parentNode && !e.isTrigger && b.event.simulate("submit", this.parentNode, e, !0));
    }, teardown: function teardown() {
      return b.nodeName(this, "form") ? !1 : (b.event.remove(this, "._submit"), t);
    } }), b.support.changeBubbles || (b.event.special.change = { setup: function setup() {
      return Z.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (b.event.add(this, "propertychange._change", function (e) {
        "checked" === e.originalEvent.propertyName && (this._just_changed = !0);
      }), b.event.add(this, "click._change", function (e) {
        this._just_changed && !e.isTrigger && (this._just_changed = !1), b.event.simulate("change", this, e, !0);
      })), !1) : (b.event.add(this, "beforeactivate._change", function (e) {
        var t = e.target;Z.test(t.nodeName) && !b._data(t, "changeBubbles") && (b.event.add(t, "change._change", function (e) {
          !this.parentNode || e.isSimulated || e.isTrigger || b.event.simulate("change", this.parentNode, e, !0);
        }), b._data(t, "changeBubbles", !0));
      }), t);
    }, handle: function handle(e) {
      var n = e.target;return this !== n || e.isSimulated || e.isTrigger || "radio" !== n.type && "checkbox" !== n.type ? e.handleObj.handler.apply(this, arguments) : t;
    }, teardown: function teardown() {
      return b.event.remove(this, "._change"), !Z.test(this.nodeName);
    } }), b.support.focusinBubbles || b.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
    var n = 0,
        r = function r(e) {
      b.event.simulate(t, e.target, b.event.fix(e), !0);
    };b.event.special[t] = { setup: function setup() {
        0 === n++ && o.addEventListener(e, r, !0);
      }, teardown: function teardown() {
        0 === --n && o.removeEventListener(e, r, !0);
      } };
  }), b.fn.extend({ on: function on(e, n, r, i, o) {
      var a, s;if ("object" == (typeof e === "undefined" ? "undefined" : _typeof(e))) {
        "string" != typeof n && (r = r || n, n = t);for (a in e) {
          this.on(a, n, r, e[a], o);
        }return this;
      }if (null == r && null == i ? (i = n, r = n = t) : null == i && ("string" == typeof n ? (i = r, r = t) : (i = r, r = n, n = t)), i === !1) i = ot;else if (!i) return this;return 1 === o && (s = i, i = function i(e) {
        return b().off(e), s.apply(this, arguments);
      }, i.guid = s.guid || (s.guid = b.guid++)), this.each(function () {
        b.event.add(this, e, i, r, n);
      });
    }, one: function one(e, t, n, r) {
      return this.on(e, t, n, r, 1);
    }, off: function off(e, n, r) {
      var i, o;if (e && e.preventDefault && e.handleObj) return i = e.handleObj, b(e.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;if ("object" == (typeof e === "undefined" ? "undefined" : _typeof(e))) {
        for (o in e) {
          this.off(o, n, e[o]);
        }return this;
      }return (n === !1 || "function" == typeof n) && (r = n, n = t), r === !1 && (r = ot), this.each(function () {
        b.event.remove(this, e, r, n);
      });
    }, bind: function bind(e, t, n) {
      return this.on(e, null, t, n);
    }, unbind: function unbind(e, t) {
      return this.off(e, null, t);
    }, delegate: function delegate(e, t, n, r) {
      return this.on(t, e, n, r);
    }, undelegate: function undelegate(e, t, n) {
      return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
    }, trigger: function trigger(e, t) {
      return this.each(function () {
        b.event.trigger(e, t, this);
      });
    }, triggerHandler: function triggerHandler(e, n) {
      var r = this[0];return r ? b.event.trigger(e, n, r, !0) : t;
    } }), function (e, t) {
    var n,
        r,
        i,
        o,
        a,
        s,
        u,
        l,
        c,
        p,
        f,
        d,
        h,
        g,
        m,
        y,
        v,
        x = "sizzle" + -new Date(),
        w = e.document,
        T = {},
        N = 0,
        C = 0,
        k = it(),
        E = it(),
        S = it(),
        A = typeof t === "undefined" ? "undefined" : _typeof(t),
        j = 1 << 31,
        D = [],
        L = D.pop,
        H = D.push,
        q = D.slice,
        M = D.indexOf || function (e) {
      var t = 0,
          n = this.length;for (; n > t; t++) {
        if (this[t] === e) return t;
      }return -1;
    },
        _ = "[\\x20\\t\\r\\n\\f]",
        F = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
        O = F.replace("w", "w#"),
        B = "([*^$|!~]?=)",
        P = "\\[" + _ + "*(" + F + ")" + _ + "*(?:" + B + _ + "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + O + ")|)|)" + _ + "*\\]",
        R = ":(" + F + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + P.replace(3, 8) + ")*)|.*)\\)|)",
        W = RegExp("^" + _ + "+|((?:^|[^\\\\])(?:\\\\.)*)" + _ + "+$", "g"),
        $ = RegExp("^" + _ + "*," + _ + "*"),
        I = RegExp("^" + _ + "*([\\x20\\t\\r\\n\\f>+~])" + _ + "*"),
        z = RegExp(R),
        X = RegExp("^" + O + "$"),
        U = { ID: RegExp("^#(" + F + ")"), CLASS: RegExp("^\\.(" + F + ")"), NAME: RegExp("^\\[name=['\"]?(" + F + ")['\"]?\\]"), TAG: RegExp("^(" + F.replace("w", "w*") + ")"), ATTR: RegExp("^" + P), PSEUDO: RegExp("^" + R), CHILD: RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + _ + "*(even|odd|(([+-]|)(\\d*)n|)" + _ + "*(?:([+-]|)" + _ + "*(\\d+)|))" + _ + "*\\)|)", "i"), needsContext: RegExp("^" + _ + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + _ + "*((?:-\\d)?\\d*)" + _ + "*\\)|)(?=[^-]|$)", "i") },
        V = /[\x20\t\r\n\f]*[+~]/,
        Y = /^[^{]+\{\s*\[native code/,
        J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
        G = /^(?:input|select|textarea|button)$/i,
        Q = /^h\d$/i,
        K = /'|\\/g,
        Z = /\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,
        et = /\\([\da-fA-F]{1,6}[\x20\t\r\n\f]?|.)/g,
        tt = function tt(e, t) {
      var n = "0x" + t - 65536;return n !== n ? t : 0 > n ? String.fromCharCode(n + 65536) : String.fromCharCode(55296 | n >> 10, 56320 | 1023 & n);
    };try {
      q.call(w.documentElement.childNodes, 0)[0].nodeType;
    } catch (nt) {
      q = function q(e) {
        var t,
            n = [];while (t = this[e++]) {
          n.push(t);
        }return n;
      };
    }function rt(e) {
      return Y.test(e + "");
    }function it() {
      var _e,
          t = [];return _e = function e(n, r) {
        return t.push(n += " ") > i.cacheLength && delete _e[t.shift()], _e[n] = r;
      };
    }function ot(e) {
      return e[x] = !0, e;
    }function at(e) {
      var t = p.createElement("div");try {
        return e(t);
      } catch (n) {
        return !1;
      } finally {
        t = null;
      }
    }function st(e, t, n, r) {
      var i, o, a, s, u, l, f, g, m, v;if ((t ? t.ownerDocument || t : w) !== p && c(t), t = t || p, n = n || [], !e || "string" != typeof e) return n;if (1 !== (s = t.nodeType) && 9 !== s) return [];if (!d && !r) {
        if (i = J.exec(e)) if (a = i[1]) {
          if (9 === s) {
            if (o = t.getElementById(a), !o || !o.parentNode) return n;if (o.id === a) return n.push(o), n;
          } else if (t.ownerDocument && (o = t.ownerDocument.getElementById(a)) && y(t, o) && o.id === a) return n.push(o), n;
        } else {
          if (i[2]) return H.apply(n, q.call(t.getElementsByTagName(e), 0)), n;if ((a = i[3]) && T.getByClassName && t.getElementsByClassName) return H.apply(n, q.call(t.getElementsByClassName(a), 0)), n;
        }if (T.qsa && !h.test(e)) {
          if (f = !0, g = x, m = t, v = 9 === s && e, 1 === s && "object" !== t.nodeName.toLowerCase()) {
            l = ft(e), (f = t.getAttribute("id")) ? g = f.replace(K, "\\$&") : t.setAttribute("id", g), g = "[id='" + g + "'] ", u = l.length;while (u--) {
              l[u] = g + dt(l[u]);
            }m = V.test(e) && t.parentNode || t, v = l.join(",");
          }if (v) try {
            return H.apply(n, q.call(m.querySelectorAll(v), 0)), n;
          } catch (b) {} finally {
            f || t.removeAttribute("id");
          }
        }
      }return wt(e.replace(W, "$1"), t, n, r);
    }a = st.isXML = function (e) {
      var t = e && (e.ownerDocument || e).documentElement;return t ? "HTML" !== t.nodeName : !1;
    }, c = st.setDocument = function (e) {
      var n = e ? e.ownerDocument || e : w;return n !== p && 9 === n.nodeType && n.documentElement ? (p = n, f = n.documentElement, d = a(n), T.tagNameNoComments = at(function (e) {
        return e.appendChild(n.createComment("")), !e.getElementsByTagName("*").length;
      }), T.attributes = at(function (e) {
        e.innerHTML = "<select></select>";var t = _typeof(e.lastChild.getAttribute("multiple"));return "boolean" !== t && "string" !== t;
      }), T.getByClassName = at(function (e) {
        return e.innerHTML = "<div class='hidden e'></div><div class='hidden'></div>", e.getElementsByClassName && e.getElementsByClassName("e").length ? (e.lastChild.className = "e", 2 === e.getElementsByClassName("e").length) : !1;
      }), T.getByName = at(function (e) {
        e.id = x + 0, e.innerHTML = "<a name='" + x + "'></a><div name='" + x + "'></div>", f.insertBefore(e, f.firstChild);var t = n.getElementsByName && n.getElementsByName(x).length === 2 + n.getElementsByName(x + 0).length;return T.getIdNotName = !n.getElementById(x), f.removeChild(e), t;
      }), i.attrHandle = at(function (e) {
        return e.innerHTML = "<a href='#'></a>", e.firstChild && _typeof(e.firstChild.getAttribute) !== A && "#" === e.firstChild.getAttribute("href");
      }) ? {} : { href: function href(e) {
          return e.getAttribute("href", 2);
        }, type: function type(e) {
          return e.getAttribute("type");
        } }, T.getIdNotName ? (i.find.ID = function (e, t) {
        if (_typeof(t.getElementById) !== A && !d) {
          var n = t.getElementById(e);return n && n.parentNode ? [n] : [];
        }
      }, i.filter.ID = function (e) {
        var t = e.replace(et, tt);return function (e) {
          return e.getAttribute("id") === t;
        };
      }) : (i.find.ID = function (e, n) {
        if (_typeof(n.getElementById) !== A && !d) {
          var r = n.getElementById(e);return r ? r.id === e || _typeof(r.getAttributeNode) !== A && r.getAttributeNode("id").value === e ? [r] : t : [];
        }
      }, i.filter.ID = function (e) {
        var t = e.replace(et, tt);return function (e) {
          var n = _typeof(e.getAttributeNode) !== A && e.getAttributeNode("id");return n && n.value === t;
        };
      }), i.find.TAG = T.tagNameNoComments ? function (e, n) {
        return _typeof(n.getElementsByTagName) !== A ? n.getElementsByTagName(e) : t;
      } : function (e, t) {
        var n,
            r = [],
            i = 0,
            o = t.getElementsByTagName(e);if ("*" === e) {
          while (n = o[i++]) {
            1 === n.nodeType && r.push(n);
          }return r;
        }return o;
      }, i.find.NAME = T.getByName && function (e, n) {
        return _typeof(n.getElementsByName) !== A ? n.getElementsByName(name) : t;
      }, i.find.CLASS = T.getByClassName && function (e, n) {
        return _typeof(n.getElementsByClassName) === A || d ? t : n.getElementsByClassName(e);
      }, g = [], h = [":focus"], (T.qsa = rt(n.querySelectorAll)) && (at(function (e) {
        e.innerHTML = "<select><option selected=''></option></select>", e.querySelectorAll("[selected]").length || h.push("\\[" + _ + "*(?:checked|disabled|ismap|multiple|readonly|selected|value)"), e.querySelectorAll(":checked").length || h.push(":checked");
      }), at(function (e) {
        e.innerHTML = "<input type='hidden' i=''/>", e.querySelectorAll("[i^='']").length && h.push("[*^$]=" + _ + "*(?:\"\"|'')"), e.querySelectorAll(":enabled").length || h.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), h.push(",.*:");
      })), (T.matchesSelector = rt(m = f.matchesSelector || f.mozMatchesSelector || f.webkitMatchesSelector || f.oMatchesSelector || f.msMatchesSelector)) && at(function (e) {
        T.disconnectedMatch = m.call(e, "div"), m.call(e, "[s!='']:x"), g.push("!=", R);
      }), h = RegExp(h.join("|")), g = RegExp(g.join("|")), y = rt(f.contains) || f.compareDocumentPosition ? function (e, t) {
        var n = 9 === e.nodeType ? e.documentElement : e,
            r = t && t.parentNode;return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)));
      } : function (e, t) {
        if (t) while (t = t.parentNode) {
          if (t === e) return !0;
        }return !1;
      }, v = f.compareDocumentPosition ? function (e, t) {
        var r;return e === t ? (u = !0, 0) : (r = t.compareDocumentPosition && e.compareDocumentPosition && e.compareDocumentPosition(t)) ? 1 & r || e.parentNode && 11 === e.parentNode.nodeType ? e === n || y(w, e) ? -1 : t === n || y(w, t) ? 1 : 0 : 4 & r ? -1 : 1 : e.compareDocumentPosition ? -1 : 1;
      } : function (e, t) {
        var r,
            i = 0,
            o = e.parentNode,
            a = t.parentNode,
            s = [e],
            l = [t];if (e === t) return u = !0, 0;if (!o || !a) return e === n ? -1 : t === n ? 1 : o ? -1 : a ? 1 : 0;if (o === a) return ut(e, t);r = e;while (r = r.parentNode) {
          s.unshift(r);
        }r = t;while (r = r.parentNode) {
          l.unshift(r);
        }while (s[i] === l[i]) {
          i++;
        }return i ? ut(s[i], l[i]) : s[i] === w ? -1 : l[i] === w ? 1 : 0;
      }, u = !1, [0, 0].sort(v), T.detectDuplicates = u, p) : p;
    }, st.matches = function (e, t) {
      return st(e, null, null, t);
    }, st.matchesSelector = function (e, t) {
      if ((e.ownerDocument || e) !== p && c(e), t = t.replace(Z, "='$1']"), !(!T.matchesSelector || d || g && g.test(t) || h.test(t))) try {
        var n = m.call(e, t);if (n || T.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n;
      } catch (r) {}return st(t, p, null, [e]).length > 0;
    }, st.contains = function (e, t) {
      return (e.ownerDocument || e) !== p && c(e), y(e, t);
    }, st.attr = function (e, t) {
      var n;return (e.ownerDocument || e) !== p && c(e), d || (t = t.toLowerCase()), (n = i.attrHandle[t]) ? n(e) : d || T.attributes ? e.getAttribute(t) : ((n = e.getAttributeNode(t)) || e.getAttribute(t)) && e[t] === !0 ? t : n && n.specified ? n.value : null;
    }, st.error = function (e) {
      throw Error("Syntax error, unrecognized expression: " + e);
    }, st.uniqueSort = function (e) {
      var t,
          n = [],
          r = 1,
          i = 0;if (u = !T.detectDuplicates, e.sort(v), u) {
        for (; t = e[r]; r++) {
          t === e[r - 1] && (i = n.push(r));
        }while (i--) {
          e.splice(n[i], 1);
        }
      }return e;
    };function ut(e, t) {
      var n = t && e,
          r = n && (~t.sourceIndex || j) - (~e.sourceIndex || j);if (r) return r;if (n) while (n = n.nextSibling) {
        if (n === t) return -1;
      }return e ? 1 : -1;
    }function lt(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();return "input" === n && t.type === e;
      };
    }function ct(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();return ("input" === n || "button" === n) && t.type === e;
      };
    }function pt(e) {
      return ot(function (t) {
        return t = +t, ot(function (n, r) {
          var i,
              o = e([], n.length, t),
              a = o.length;while (a--) {
            n[i = o[a]] && (n[i] = !(r[i] = n[i]));
          }
        });
      });
    }o = st.getText = function (e) {
      var t,
          n = "",
          r = 0,
          i = e.nodeType;if (i) {
        if (1 === i || 9 === i || 11 === i) {
          if ("string" == typeof e.textContent) return e.textContent;for (e = e.firstChild; e; e = e.nextSibling) {
            n += o(e);
          }
        } else if (3 === i || 4 === i) return e.nodeValue;
      } else for (; t = e[r]; r++) {
        n += o(t);
      }return n;
    }, i = st.selectors = { cacheLength: 50, createPseudo: ot, match: U, find: {}, relative: { ">": { dir: "parentNode", first: !0 }, " ": { dir: "parentNode" }, "+": { dir: "previousSibling", first: !0 }, "~": { dir: "previousSibling" } }, preFilter: { ATTR: function ATTR(e) {
          return e[1] = e[1].replace(et, tt), e[3] = (e[4] || e[5] || "").replace(et, tt), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4);
        }, CHILD: function CHILD(e) {
          return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || st.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && st.error(e[0]), e;
        }, PSEUDO: function PSEUDO(e) {
          var t,
              n = !e[5] && e[2];return U.CHILD.test(e[0]) ? null : (e[4] ? e[2] = e[4] : n && z.test(n) && (t = ft(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3));
        } }, filter: { TAG: function TAG(e) {
          return "*" === e ? function () {
            return !0;
          } : (e = e.replace(et, tt).toLowerCase(), function (t) {
            return t.nodeName && t.nodeName.toLowerCase() === e;
          });
        }, CLASS: function CLASS(e) {
          var t = k[e + " "];return t || (t = RegExp("(^|" + _ + ")" + e + "(" + _ + "|$)")) && k(e, function (e) {
            return t.test(e.className || _typeof(e.getAttribute) !== A && e.getAttribute("class") || "");
          });
        }, ATTR: function ATTR(e, t, n) {
          return function (r) {
            var i = st.attr(r, e);return null == i ? "!=" === t : t ? (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i + " ").indexOf(n) > -1 : "|=" === t ? i === n || i.slice(0, n.length + 1) === n + "-" : !1) : !0;
          };
        }, CHILD: function CHILD(e, t, n, r, i) {
          var o = "nth" !== e.slice(0, 3),
              a = "last" !== e.slice(-4),
              s = "of-type" === t;return 1 === r && 0 === i ? function (e) {
            return !!e.parentNode;
          } : function (t, n, u) {
            var l,
                c,
                p,
                f,
                d,
                h,
                g = o !== a ? "nextSibling" : "previousSibling",
                m = t.parentNode,
                y = s && t.nodeName.toLowerCase(),
                v = !u && !s;if (m) {
              if (o) {
                while (g) {
                  p = t;while (p = p[g]) {
                    if (s ? p.nodeName.toLowerCase() === y : 1 === p.nodeType) return !1;
                  }h = g = "only" === e && !h && "nextSibling";
                }return !0;
              }if (h = [a ? m.firstChild : m.lastChild], a && v) {
                c = m[x] || (m[x] = {}), l = c[e] || [], d = l[0] === N && l[1], f = l[0] === N && l[2], p = d && m.childNodes[d];while (p = ++d && p && p[g] || (f = d = 0) || h.pop()) {
                  if (1 === p.nodeType && ++f && p === t) {
                    c[e] = [N, d, f];break;
                  }
                }
              } else if (v && (l = (t[x] || (t[x] = {}))[e]) && l[0] === N) f = l[1];else while (p = ++d && p && p[g] || (f = d = 0) || h.pop()) {
                if ((s ? p.nodeName.toLowerCase() === y : 1 === p.nodeType) && ++f && (v && ((p[x] || (p[x] = {}))[e] = [N, f]), p === t)) break;
              }return f -= i, f === r || 0 === f % r && f / r >= 0;
            }
          };
        }, PSEUDO: function PSEUDO(e, t) {
          var n,
              r = i.pseudos[e] || i.setFilters[e.toLowerCase()] || st.error("unsupported pseudo: " + e);return r[x] ? r(t) : r.length > 1 ? (n = [e, e, "", t], i.setFilters.hasOwnProperty(e.toLowerCase()) ? ot(function (e, n) {
            var i,
                o = r(e, t),
                a = o.length;while (a--) {
              i = M.call(e, o[a]), e[i] = !(n[i] = o[a]);
            }
          }) : function (e) {
            return r(e, 0, n);
          }) : r;
        } }, pseudos: { not: ot(function (e) {
          var t = [],
              n = [],
              r = s(e.replace(W, "$1"));return r[x] ? ot(function (e, t, n, i) {
            var o,
                a = r(e, null, i, []),
                s = e.length;while (s--) {
              (o = a[s]) && (e[s] = !(t[s] = o));
            }
          }) : function (e, i, o) {
            return t[0] = e, r(t, null, o, n), !n.pop();
          };
        }), has: ot(function (e) {
          return function (t) {
            return st(e, t).length > 0;
          };
        }), contains: ot(function (e) {
          return function (t) {
            return (t.textContent || t.innerText || o(t)).indexOf(e) > -1;
          };
        }), lang: ot(function (e) {
          return X.test(e || "") || st.error("unsupported lang: " + e), e = e.replace(et, tt).toLowerCase(), function (t) {
            var n;do {
              if (n = d ? t.getAttribute("xml:lang") || t.getAttribute("lang") : t.lang) return n = n.toLowerCase(), n === e || 0 === n.indexOf(e + "-");
            } while ((t = t.parentNode) && 1 === t.nodeType);return !1;
          };
        }), target: function target(t) {
          var n = e.location && e.location.hash;return n && n.slice(1) === t.id;
        }, root: function root(e) {
          return e === f;
        }, focus: function focus(e) {
          return e === p.activeElement && (!p.hasFocus || p.hasFocus()) && !!(e.type || e.href || ~e.tabIndex);
        }, enabled: function enabled(e) {
          return e.disabled === !1;
        }, disabled: function disabled(e) {
          return e.disabled === !0;
        }, checked: function checked(e) {
          var t = e.nodeName.toLowerCase();return "input" === t && !!e.checked || "option" === t && !!e.selected;
        }, selected: function selected(e) {
          return e.parentNode && e.parentNode.selectedIndex, e.selected === !0;
        }, empty: function empty(e) {
          for (e = e.firstChild; e; e = e.nextSibling) {
            if (e.nodeName > "@" || 3 === e.nodeType || 4 === e.nodeType) return !1;
          }return !0;
        }, parent: function parent(e) {
          return !i.pseudos.empty(e);
        }, header: function header(e) {
          return Q.test(e.nodeName);
        }, input: function input(e) {
          return G.test(e.nodeName);
        }, button: function button(e) {
          var t = e.nodeName.toLowerCase();return "input" === t && "button" === e.type || "button" === t;
        }, text: function text(e) {
          var t;return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || t.toLowerCase() === e.type);
        }, first: pt(function () {
          return [0];
        }), last: pt(function (e, t) {
          return [t - 1];
        }), eq: pt(function (e, t, n) {
          return [0 > n ? n + t : n];
        }), even: pt(function (e, t) {
          var n = 0;for (; t > n; n += 2) {
            e.push(n);
          }return e;
        }), odd: pt(function (e, t) {
          var n = 1;for (; t > n; n += 2) {
            e.push(n);
          }return e;
        }), lt: pt(function (e, t, n) {
          var r = 0 > n ? n + t : n;for (; --r >= 0;) {
            e.push(r);
          }return e;
        }), gt: pt(function (e, t, n) {
          var r = 0 > n ? n + t : n;for (; t > ++r;) {
            e.push(r);
          }return e;
        }) } };for (n in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 }) {
      i.pseudos[n] = lt(n);
    }for (n in { submit: !0, reset: !0 }) {
      i.pseudos[n] = ct(n);
    }function ft(e, t) {
      var n,
          r,
          o,
          a,
          s,
          u,
          l,
          c = E[e + " "];if (c) return t ? 0 : c.slice(0);s = e, u = [], l = i.preFilter;while (s) {
        (!n || (r = $.exec(s))) && (r && (s = s.slice(r[0].length) || s), u.push(o = [])), n = !1, (r = I.exec(s)) && (n = r.shift(), o.push({ value: n, type: r[0].replace(W, " ") }), s = s.slice(n.length));for (a in i.filter) {
          !(r = U[a].exec(s)) || l[a] && !(r = l[a](r)) || (n = r.shift(), o.push({ value: n, type: a, matches: r }), s = s.slice(n.length));
        }if (!n) break;
      }return t ? s.length : s ? st.error(e) : E(e, u).slice(0);
    }function dt(e) {
      var t = 0,
          n = e.length,
          r = "";for (; n > t; t++) {
        r += e[t].value;
      }return r;
    }function ht(e, t, n) {
      var i = t.dir,
          o = n && "parentNode" === i,
          a = C++;return t.first ? function (t, n, r) {
        while (t = t[i]) {
          if (1 === t.nodeType || o) return e(t, n, r);
        }
      } : function (t, n, s) {
        var u,
            l,
            c,
            p = N + " " + a;if (s) {
          while (t = t[i]) {
            if ((1 === t.nodeType || o) && e(t, n, s)) return !0;
          }
        } else while (t = t[i]) {
          if (1 === t.nodeType || o) if (c = t[x] || (t[x] = {}), (l = c[i]) && l[0] === p) {
            if ((u = l[1]) === !0 || u === r) return u === !0;
          } else if (l = c[i] = [p], l[1] = e(t, n, s) || r, l[1] === !0) return !0;
        }
      };
    }function gt(e) {
      return e.length > 1 ? function (t, n, r) {
        var i = e.length;while (i--) {
          if (!e[i](t, n, r)) return !1;
        }return !0;
      } : e[0];
    }function mt(e, t, n, r, i) {
      var o,
          a = [],
          s = 0,
          u = e.length,
          l = null != t;for (; u > s; s++) {
        (o = e[s]) && (!n || n(o, r, i)) && (a.push(o), l && t.push(s));
      }return a;
    }function yt(e, t, n, r, i, o) {
      return r && !r[x] && (r = yt(r)), i && !i[x] && (i = yt(i, o)), ot(function (o, a, s, u) {
        var l,
            c,
            p,
            f = [],
            d = [],
            h = a.length,
            g = o || xt(t || "*", s.nodeType ? [s] : s, []),
            m = !e || !o && t ? g : mt(g, f, e, s, u),
            y = n ? i || (o ? e : h || r) ? [] : a : m;if (n && n(m, y, s, u), r) {
          l = mt(y, d), r(l, [], s, u), c = l.length;while (c--) {
            (p = l[c]) && (y[d[c]] = !(m[d[c]] = p));
          }
        }if (o) {
          if (i || e) {
            if (i) {
              l = [], c = y.length;while (c--) {
                (p = y[c]) && l.push(m[c] = p);
              }i(null, y = [], l, u);
            }c = y.length;while (c--) {
              (p = y[c]) && (l = i ? M.call(o, p) : f[c]) > -1 && (o[l] = !(a[l] = p));
            }
          }
        } else y = mt(y === a ? y.splice(h, y.length) : y), i ? i(null, a, y, u) : H.apply(a, y);
      });
    }function vt(e) {
      var t,
          n,
          r,
          o = e.length,
          a = i.relative[e[0].type],
          s = a || i.relative[" "],
          u = a ? 1 : 0,
          c = ht(function (e) {
        return e === t;
      }, s, !0),
          p = ht(function (e) {
        return M.call(t, e) > -1;
      }, s, !0),
          f = [function (e, n, r) {
        return !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : p(e, n, r));
      }];for (; o > u; u++) {
        if (n = i.relative[e[u].type]) f = [ht(gt(f), n)];else {
          if (n = i.filter[e[u].type].apply(null, e[u].matches), n[x]) {
            for (r = ++u; o > r; r++) {
              if (i.relative[e[r].type]) break;
            }return yt(u > 1 && gt(f), u > 1 && dt(e.slice(0, u - 1)).replace(W, "$1"), n, r > u && vt(e.slice(u, r)), o > r && vt(e = e.slice(r)), o > r && dt(e));
          }f.push(n);
        }
      }return gt(f);
    }function bt(e, t) {
      var n = 0,
          o = t.length > 0,
          a = e.length > 0,
          s = function s(_s, u, c, f, d) {
        var h,
            g,
            m,
            y = [],
            v = 0,
            b = "0",
            x = _s && [],
            w = null != d,
            T = l,
            C = _s || a && i.find.TAG("*", d && u.parentNode || u),
            k = N += null == T ? 1 : Math.random() || .1;for (w && (l = u !== p && u, r = n); null != (h = C[b]); b++) {
          if (a && h) {
            g = 0;while (m = e[g++]) {
              if (m(h, u, c)) {
                f.push(h);break;
              }
            }w && (N = k, r = ++n);
          }o && ((h = !m && h) && v--, _s && x.push(h));
        }if (v += b, o && b !== v) {
          g = 0;while (m = t[g++]) {
            m(x, y, u, c);
          }if (_s) {
            if (v > 0) while (b--) {
              x[b] || y[b] || (y[b] = L.call(f));
            }y = mt(y);
          }H.apply(f, y), w && !_s && y.length > 0 && v + t.length > 1 && st.uniqueSort(f);
        }return w && (N = k, l = T), x;
      };return o ? ot(s) : s;
    }s = st.compile = function (e, t) {
      var n,
          r = [],
          i = [],
          o = S[e + " "];if (!o) {
        t || (t = ft(e)), n = t.length;while (n--) {
          o = vt(t[n]), o[x] ? r.push(o) : i.push(o);
        }o = S(e, bt(i, r));
      }return o;
    };function xt(e, t, n) {
      var r = 0,
          i = t.length;for (; i > r; r++) {
        st(e, t[r], n);
      }return n;
    }function wt(e, t, n, r) {
      var o,
          a,
          u,
          l,
          c,
          p = ft(e);if (!r && 1 === p.length) {
        if (a = p[0] = p[0].slice(0), a.length > 2 && "ID" === (u = a[0]).type && 9 === t.nodeType && !d && i.relative[a[1].type]) {
          if (t = i.find.ID(u.matches[0].replace(et, tt), t)[0], !t) return n;e = e.slice(a.shift().value.length);
        }o = U.needsContext.test(e) ? 0 : a.length;while (o--) {
          if (u = a[o], i.relative[l = u.type]) break;if ((c = i.find[l]) && (r = c(u.matches[0].replace(et, tt), V.test(a[0].type) && t.parentNode || t))) {
            if (a.splice(o, 1), e = r.length && dt(a), !e) return H.apply(n, q.call(r, 0)), n;break;
          }
        }
      }return s(e, p)(r, t, d, n, V.test(e)), n;
    }i.pseudos.nth = i.pseudos.eq;function Tt() {}i.filters = Tt.prototype = i.pseudos, i.setFilters = new Tt(), c(), st.attr = b.attr, b.find = st, b.expr = st.selectors, b.expr[":"] = b.expr.pseudos, b.unique = st.uniqueSort, b.text = st.getText, b.isXMLDoc = st.isXML, b.contains = st.contains;
  }(e);var at = /Until$/,
      st = /^(?:parents|prev(?:Until|All))/,
      ut = /^.[^:#\[\.,]*$/,
      lt = b.expr.match.needsContext,
      ct = { children: !0, contents: !0, next: !0, prev: !0 };b.fn.extend({ find: function find(e) {
      var t,
          n,
          r,
          i = this.length;if ("string" != typeof e) return r = this, this.pushStack(b(e).filter(function () {
        for (t = 0; i > t; t++) {
          if (b.contains(r[t], this)) return !0;
        }
      }));for (n = [], t = 0; i > t; t++) {
        b.find(e, this[t], n);
      }return n = this.pushStack(i > 1 ? b.unique(n) : n), n.selector = (this.selector ? this.selector + " " : "") + e, n;
    }, has: function has(e) {
      var t,
          n = b(e, this),
          r = n.length;return this.filter(function () {
        for (t = 0; r > t; t++) {
          if (b.contains(this, n[t])) return !0;
        }
      });
    }, not: function not(e) {
      return this.pushStack(ft(this, e, !1));
    }, filter: function filter(e) {
      return this.pushStack(ft(this, e, !0));
    }, is: function is(e) {
      return !!e && ("string" == typeof e ? lt.test(e) ? b(e, this.context).index(this[0]) >= 0 : b.filter(e, this).length > 0 : this.filter(e).length > 0);
    }, closest: function closest(e, t) {
      var n,
          r = 0,
          i = this.length,
          o = [],
          a = lt.test(e) || "string" != typeof e ? b(e, t || this.context) : 0;for (; i > r; r++) {
        n = this[r];while (n && n.ownerDocument && n !== t && 11 !== n.nodeType) {
          if (a ? a.index(n) > -1 : b.find.matchesSelector(n, e)) {
            o.push(n);break;
          }n = n.parentNode;
        }
      }return this.pushStack(o.length > 1 ? b.unique(o) : o);
    }, index: function index(e) {
      return e ? "string" == typeof e ? b.inArray(this[0], b(e)) : b.inArray(e.jquery ? e[0] : e, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
    }, add: function add(e, t) {
      var n = "string" == typeof e ? b(e, t) : b.makeArray(e && e.nodeType ? [e] : e),
          r = b.merge(this.get(), n);return this.pushStack(b.unique(r));
    }, addBack: function addBack(e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
    } }), b.fn.andSelf = b.fn.addBack;function pt(e, t) {
    do {
      e = e[t];
    } while (e && 1 !== e.nodeType);return e;
  }b.each({ parent: function parent(e) {
      var t = e.parentNode;return t && 11 !== t.nodeType ? t : null;
    }, parents: function parents(e) {
      return b.dir(e, "parentNode");
    }, parentsUntil: function parentsUntil(e, t, n) {
      return b.dir(e, "parentNode", n);
    }, next: function next(e) {
      return pt(e, "nextSibling");
    }, prev: function prev(e) {
      return pt(e, "previousSibling");
    }, nextAll: function nextAll(e) {
      return b.dir(e, "nextSibling");
    }, prevAll: function prevAll(e) {
      return b.dir(e, "previousSibling");
    }, nextUntil: function nextUntil(e, t, n) {
      return b.dir(e, "nextSibling", n);
    }, prevUntil: function prevUntil(e, t, n) {
      return b.dir(e, "previousSibling", n);
    }, siblings: function siblings(e) {
      return b.sibling((e.parentNode || {}).firstChild, e);
    }, children: function children(e) {
      return b.sibling(e.firstChild);
    }, contents: function contents(e) {
      return b.nodeName(e, "iframe") ? e.contentDocument || e.contentWindow.document : b.merge([], e.childNodes);
    } }, function (e, t) {
    b.fn[e] = function (n, r) {
      var i = b.map(this, t, n);return at.test(e) || (r = n), r && "string" == typeof r && (i = b.filter(r, i)), i = this.length > 1 && !ct[e] ? b.unique(i) : i, this.length > 1 && st.test(e) && (i = i.reverse()), this.pushStack(i);
    };
  }), b.extend({ filter: function filter(e, t, n) {
      return n && (e = ":not(" + e + ")"), 1 === t.length ? b.find.matchesSelector(t[0], e) ? [t[0]] : [] : b.find.matches(e, t);
    }, dir: function dir(e, n, r) {
      var i = [],
          o = e[n];while (o && 9 !== o.nodeType && (r === t || 1 !== o.nodeType || !b(o).is(r))) {
        1 === o.nodeType && i.push(o), o = o[n];
      }return i;
    }, sibling: function sibling(e, t) {
      var n = [];for (; e; e = e.nextSibling) {
        1 === e.nodeType && e !== t && n.push(e);
      }return n;
    } });function ft(e, t, n) {
    if (t = t || 0, b.isFunction(t)) return b.grep(e, function (e, r) {
      var i = !!t.call(e, r, e);return i === n;
    });if (t.nodeType) return b.grep(e, function (e) {
      return e === t === n;
    });if ("string" == typeof t) {
      var r = b.grep(e, function (e) {
        return 1 === e.nodeType;
      });if (ut.test(t)) return b.filter(t, r, !n);t = b.filter(t, r);
    }return b.grep(e, function (e) {
      return b.inArray(e, t) >= 0 === n;
    });
  }function dt(e) {
    var t = ht.split("|"),
        n = e.createDocumentFragment();if (n.createElement) while (t.length) {
      n.createElement(t.pop());
    }return n;
  }var ht = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
      gt = / jQuery\d+="(?:null|\d+)"/g,
      mt = RegExp("<(?:" + ht + ")[\\s/>]", "i"),
      yt = /^\s+/,
      vt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
      bt = /<([\w:]+)/,
      xt = /<tbody/i,
      wt = /<|&#?\w+;/,
      Tt = /<(?:script|style|link)/i,
      Nt = /^(?:checkbox|radio)$/i,
      Ct = /checked\s*(?:[^=]|=\s*.checked.)/i,
      kt = /^$|\/(?:java|ecma)script/i,
      Et = /^true\/(.*)/,
      St = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
      At = { option: [1, "<select multiple='multiple'>", "</select>"], legend: [1, "<fieldset>", "</fieldset>"], area: [1, "<map>", "</map>"], param: [1, "<object>", "</object>"], thead: [1, "<table>", "</table>"], tr: [2, "<table><tbody>", "</tbody></table>"], col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: b.support.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"] },
      jt = dt(o),
      Dt = jt.appendChild(o.createElement("div"));At.optgroup = At.option, At.tbody = At.tfoot = At.colgroup = At.caption = At.thead, At.th = At.td, b.fn.extend({ text: function text(e) {
      return b.access(this, function (e) {
        return e === t ? b.text(this) : this.empty().append((this[0] && this[0].ownerDocument || o).createTextNode(e));
      }, null, e, arguments.length);
    }, wrapAll: function wrapAll(e) {
      if (b.isFunction(e)) return this.each(function (t) {
        b(this).wrapAll(e.call(this, t));
      });if (this[0]) {
        var t = b(e, this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
          var e = this;while (e.firstChild && 1 === e.firstChild.nodeType) {
            e = e.firstChild;
          }return e;
        }).append(this);
      }return this;
    }, wrapInner: function wrapInner(e) {
      return b.isFunction(e) ? this.each(function (t) {
        b(this).wrapInner(e.call(this, t));
      }) : this.each(function () {
        var t = b(this),
            n = t.contents();n.length ? n.wrapAll(e) : t.append(e);
      });
    }, wrap: function wrap(e) {
      var t = b.isFunction(e);return this.each(function (n) {
        b(this).wrapAll(t ? e.call(this, n) : e);
      });
    }, unwrap: function unwrap() {
      return this.parent().each(function () {
        b.nodeName(this, "body") || b(this).replaceWith(this.childNodes);
      }).end();
    }, append: function append() {
      return this.domManip(arguments, !0, function (e) {
        (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && this.appendChild(e);
      });
    }, prepend: function prepend() {
      return this.domManip(arguments, !0, function (e) {
        (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && this.insertBefore(e, this.firstChild);
      });
    }, before: function before() {
      return this.domManip(arguments, !1, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this);
      });
    }, after: function after() {
      return this.domManip(arguments, !1, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
      });
    }, remove: function remove(e, t) {
      var n,
          r = 0;for (; null != (n = this[r]); r++) {
        (!e || b.filter(e, [n]).length > 0) && (t || 1 !== n.nodeType || b.cleanData(Ot(n)), n.parentNode && (t && b.contains(n.ownerDocument, n) && Mt(Ot(n, "script")), n.parentNode.removeChild(n)));
      }return this;
    }, empty: function empty() {
      var e,
          t = 0;for (; null != (e = this[t]); t++) {
        1 === e.nodeType && b.cleanData(Ot(e, !1));while (e.firstChild) {
          e.removeChild(e.firstChild);
        }e.options && b.nodeName(e, "select") && (e.options.length = 0);
      }return this;
    }, clone: function clone(e, t) {
      return e = null == e ? !1 : e, t = null == t ? e : t, this.map(function () {
        return b.clone(this, e, t);
      });
    }, html: function html(e) {
      return b.access(this, function (e) {
        var n = this[0] || {},
            r = 0,
            i = this.length;if (e === t) return 1 === n.nodeType ? n.innerHTML.replace(gt, "") : t;if (!("string" != typeof e || Tt.test(e) || !b.support.htmlSerialize && mt.test(e) || !b.support.leadingWhitespace && yt.test(e) || At[(bt.exec(e) || ["", ""])[1].toLowerCase()])) {
          e = e.replace(vt, "<$1></$2>");try {
            for (; i > r; r++) {
              n = this[r] || {}, 1 === n.nodeType && (b.cleanData(Ot(n, !1)), n.innerHTML = e);
            }n = 0;
          } catch (o) {}
        }n && this.empty().append(e);
      }, null, e, arguments.length);
    }, replaceWith: function replaceWith(e) {
      var t = b.isFunction(e);return t || "string" == typeof e || (e = b(e).not(this).detach()), this.domManip([e], !0, function (e) {
        var t = this.nextSibling,
            n = this.parentNode;n && (b(this).remove(), n.insertBefore(e, t));
      });
    }, detach: function detach(e) {
      return this.remove(e, !0);
    }, domManip: function domManip(e, n, r) {
      e = f.apply([], e);var i,
          o,
          a,
          s,
          u,
          l,
          c = 0,
          p = this.length,
          d = this,
          h = p - 1,
          g = e[0],
          m = b.isFunction(g);if (m || !(1 >= p || "string" != typeof g || b.support.checkClone) && Ct.test(g)) return this.each(function (i) {
        var o = d.eq(i);m && (e[0] = g.call(this, i, n ? o.html() : t)), o.domManip(e, n, r);
      });if (p && (l = b.buildFragment(e, this[0].ownerDocument, !1, this), i = l.firstChild, 1 === l.childNodes.length && (l = i), i)) {
        for (n = n && b.nodeName(i, "tr"), s = b.map(Ot(l, "script"), Ht), a = s.length; p > c; c++) {
          o = l, c !== h && (o = b.clone(o, !0, !0), a && b.merge(s, Ot(o, "script"))), r.call(n && b.nodeName(this[c], "table") ? Lt(this[c], "tbody") : this[c], o, c);
        }if (a) for (u = s[s.length - 1].ownerDocument, b.map(s, qt), c = 0; a > c; c++) {
          o = s[c], kt.test(o.type || "") && !b._data(o, "globalEval") && b.contains(u, o) && (o.src ? b.ajax({ url: o.src, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0 }) : b.globalEval((o.text || o.textContent || o.innerHTML || "").replace(St, "")));
        }l = i = null;
      }return this;
    } });function Lt(e, t) {
    return e.getElementsByTagName(t)[0] || e.appendChild(e.ownerDocument.createElement(t));
  }function Ht(e) {
    var t = e.getAttributeNode("type");return e.type = (t && t.specified) + "/" + e.type, e;
  }function qt(e) {
    var t = Et.exec(e.type);return t ? e.type = t[1] : e.removeAttribute("type"), e;
  }function Mt(e, t) {
    var n,
        r = 0;for (; null != (n = e[r]); r++) {
      b._data(n, "globalEval", !t || b._data(t[r], "globalEval"));
    }
  }function _t(e, t) {
    if (1 === t.nodeType && b.hasData(e)) {
      var n,
          r,
          i,
          o = b._data(e),
          a = b._data(t, o),
          s = o.events;if (s) {
        delete a.handle, a.events = {};for (n in s) {
          for (r = 0, i = s[n].length; i > r; r++) {
            b.event.add(t, n, s[n][r]);
          }
        }
      }a.data && (a.data = b.extend({}, a.data));
    }
  }function Ft(e, t) {
    var n, r, i;if (1 === t.nodeType) {
      if (n = t.nodeName.toLowerCase(), !b.support.noCloneEvent && t[b.expando]) {
        i = b._data(t);for (r in i.events) {
          b.removeEvent(t, r, i.handle);
        }t.removeAttribute(b.expando);
      }"script" === n && t.text !== e.text ? (Ht(t).text = e.text, qt(t)) : "object" === n ? (t.parentNode && (t.outerHTML = e.outerHTML), b.support.html5Clone && e.innerHTML && !b.trim(t.innerHTML) && (t.innerHTML = e.innerHTML)) : "input" === n && Nt.test(e.type) ? (t.defaultChecked = t.checked = e.checked, t.value !== e.value && (t.value = e.value)) : "option" === n ? t.defaultSelected = t.selected = e.defaultSelected : ("input" === n || "textarea" === n) && (t.defaultValue = e.defaultValue);
    }
  }b.each({ appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith" }, function (e, t) {
    b.fn[e] = function (e) {
      var n,
          r = 0,
          i = [],
          o = b(e),
          a = o.length - 1;for (; a >= r; r++) {
        n = r === a ? this : this.clone(!0), b(o[r])[t](n), d.apply(i, n.get());
      }return this.pushStack(i);
    };
  });function Ot(e, n) {
    var r,
        o,
        a = 0,
        s = _typeof(e.getElementsByTagName) !== i ? e.getElementsByTagName(n || "*") : _typeof(e.querySelectorAll) !== i ? e.querySelectorAll(n || "*") : t;if (!s) for (s = [], r = e.childNodes || e; null != (o = r[a]); a++) {
      !n || b.nodeName(o, n) ? s.push(o) : b.merge(s, Ot(o, n));
    }return n === t || n && b.nodeName(e, n) ? b.merge([e], s) : s;
  }function Bt(e) {
    Nt.test(e.type) && (e.defaultChecked = e.checked);
  }b.extend({ clone: function clone(e, t, n) {
      var r,
          i,
          o,
          a,
          s,
          u = b.contains(e.ownerDocument, e);if (b.support.html5Clone || b.isXMLDoc(e) || !mt.test("<" + e.nodeName + ">") ? o = e.cloneNode(!0) : (Dt.innerHTML = e.outerHTML, Dt.removeChild(o = Dt.firstChild)), !(b.support.noCloneEvent && b.support.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || b.isXMLDoc(e))) for (r = Ot(o), s = Ot(e), a = 0; null != (i = s[a]); ++a) {
        r[a] && Ft(i, r[a]);
      }if (t) if (n) for (s = s || Ot(e), r = r || Ot(o), a = 0; null != (i = s[a]); a++) {
        _t(i, r[a]);
      } else _t(e, o);return r = Ot(o, "script"), r.length > 0 && Mt(r, !u && Ot(e, "script")), r = s = i = null, o;
    }, buildFragment: function buildFragment(e, t, n, r) {
      var i,
          o,
          a,
          s,
          u,
          l,
          c,
          p = e.length,
          f = dt(t),
          d = [],
          h = 0;for (; p > h; h++) {
        if (o = e[h], o || 0 === o) if ("object" === b.type(o)) b.merge(d, o.nodeType ? [o] : o);else if (wt.test(o)) {
          s = s || f.appendChild(t.createElement("div")), u = (bt.exec(o) || ["", ""])[1].toLowerCase(), c = At[u] || At._default, s.innerHTML = c[1] + o.replace(vt, "<$1></$2>") + c[2], i = c[0];while (i--) {
            s = s.lastChild;
          }if (!b.support.leadingWhitespace && yt.test(o) && d.push(t.createTextNode(yt.exec(o)[0])), !b.support.tbody) {
            o = "table" !== u || xt.test(o) ? "<table>" !== c[1] || xt.test(o) ? 0 : s : s.firstChild, i = o && o.childNodes.length;while (i--) {
              b.nodeName(l = o.childNodes[i], "tbody") && !l.childNodes.length && o.removeChild(l);
            }
          }b.merge(d, s.childNodes), s.textContent = "";while (s.firstChild) {
            s.removeChild(s.firstChild);
          }s = f.lastChild;
        } else d.push(t.createTextNode(o));
      }s && f.removeChild(s), b.support.appendChecked || b.grep(Ot(d, "input"), Bt), h = 0;while (o = d[h++]) {
        if ((!r || -1 === b.inArray(o, r)) && (a = b.contains(o.ownerDocument, o), s = Ot(f.appendChild(o), "script"), a && Mt(s), n)) {
          i = 0;while (o = s[i++]) {
            kt.test(o.type || "") && n.push(o);
          }
        }
      }return s = null, f;
    }, cleanData: function cleanData(e, t) {
      var n,
          r,
          o,
          a,
          s = 0,
          u = b.expando,
          l = b.cache,
          p = b.support.deleteExpando,
          f = b.event.special;for (; null != (n = e[s]); s++) {
        if ((t || b.acceptData(n)) && (o = n[u], a = o && l[o])) {
          if (a.events) for (r in a.events) {
            f[r] ? b.event.remove(n, r) : b.removeEvent(n, r, a.handle);
          }l[o] && (delete l[o], p ? delete n[u] : _typeof(n.removeAttribute) !== i ? n.removeAttribute(u) : n[u] = null, c.push(o));
        }
      }
    } });var Pt,
      Rt,
      Wt,
      $t = /alpha\([^)]*\)/i,
      It = /opacity\s*=\s*([^)]*)/,
      zt = /^(top|right|bottom|left)$/,
      Xt = /^(none|table(?!-c[ea]).+)/,
      Ut = /^margin/,
      Vt = RegExp("^(" + x + ")(.*)$", "i"),
      Yt = RegExp("^(" + x + ")(?!px)[a-z%]+$", "i"),
      Jt = RegExp("^([+-])=(" + x + ")", "i"),
      Gt = { BODY: "block" },
      Qt = { position: "absolute", visibility: "hidden", display: "block" },
      Kt = { letterSpacing: 0, fontWeight: 400 },
      Zt = ["Top", "Right", "Bottom", "Left"],
      en = ["Webkit", "O", "Moz", "ms"];function tn(e, t) {
    if (t in e) return t;var n = t.charAt(0).toUpperCase() + t.slice(1),
        r = t,
        i = en.length;while (i--) {
      if (t = en[i] + n, t in e) return t;
    }return r;
  }function nn(e, t) {
    return e = t || e, "none" === b.css(e, "display") || !b.contains(e.ownerDocument, e);
  }function rn(e, t) {
    var n,
        r,
        i,
        o = [],
        a = 0,
        s = e.length;for (; s > a; a++) {
      r = e[a], r.style && (o[a] = b._data(r, "olddisplay"), n = r.style.display, t ? (o[a] || "none" !== n || (r.style.display = ""), "" === r.style.display && nn(r) && (o[a] = b._data(r, "olddisplay", un(r.nodeName)))) : o[a] || (i = nn(r), (n && "none" !== n || !i) && b._data(r, "olddisplay", i ? n : b.css(r, "display"))));
    }for (a = 0; s > a; a++) {
      r = e[a], r.style && (t && "none" !== r.style.display && "" !== r.style.display || (r.style.display = t ? o[a] || "" : "none"));
    }return e;
  }b.fn.extend({ css: function css(e, n) {
      return b.access(this, function (e, n, r) {
        var i,
            o,
            a = {},
            s = 0;if (b.isArray(n)) {
          for (o = Rt(e), i = n.length; i > s; s++) {
            a[n[s]] = b.css(e, n[s], !1, o);
          }return a;
        }return r !== t ? b.style(e, n, r) : b.css(e, n);
      }, e, n, arguments.length > 1);
    }, show: function show() {
      return rn(this, !0);
    }, hide: function hide() {
      return rn(this);
    }, toggle: function toggle(e) {
      var t = "boolean" == typeof e;return this.each(function () {
        (t ? e : nn(this)) ? b(this).show() : b(this).hide();
      });
    } }), b.extend({ cssHooks: { opacity: { get: function get(e, t) {
          if (t) {
            var n = Wt(e, "opacity");return "" === n ? "1" : n;
          }
        } } }, cssNumber: { columnCount: !0, fillOpacity: !0, fontWeight: !0, lineHeight: !0, opacity: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0 }, cssProps: { "float": b.support.cssFloat ? "cssFloat" : "styleFloat" }, style: function style(e, n, r, i) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var o,
            a,
            s,
            u = b.camelCase(n),
            l = e.style;if (n = b.cssProps[u] || (b.cssProps[u] = tn(l, u)), s = b.cssHooks[n] || b.cssHooks[u], r === t) return s && "get" in s && (o = s.get(e, !1, i)) !== t ? o : l[n];if (a = typeof r === "undefined" ? "undefined" : _typeof(r), "string" === a && (o = Jt.exec(r)) && (r = (o[1] + 1) * o[2] + parseFloat(b.css(e, n)), a = "number"), !(null == r || "number" === a && isNaN(r) || ("number" !== a || b.cssNumber[u] || (r += "px"), b.support.clearCloneStyle || "" !== r || 0 !== n.indexOf("background") || (l[n] = "inherit"), s && "set" in s && (r = s.set(e, r, i)) === t))) try {
          l[n] = r;
        } catch (c) {}
      }
    }, css: function css(e, n, r, i) {
      var o,
          a,
          s,
          u = b.camelCase(n);return n = b.cssProps[u] || (b.cssProps[u] = tn(e.style, u)), s = b.cssHooks[n] || b.cssHooks[u], s && "get" in s && (a = s.get(e, !0, r)), a === t && (a = Wt(e, n, i)), "normal" === a && n in Kt && (a = Kt[n]), "" === r || r ? (o = parseFloat(a), r === !0 || b.isNumeric(o) ? o || 0 : a) : a;
    }, swap: function swap(e, t, n, r) {
      var i,
          o,
          a = {};for (o in t) {
        a[o] = e.style[o], e.style[o] = t[o];
      }i = n.apply(e, r || []);for (o in t) {
        e.style[o] = a[o];
      }return i;
    } }), e.getComputedStyle ? (Rt = function Rt(t) {
    return e.getComputedStyle(t, null);
  }, Wt = function Wt(e, n, r) {
    var i,
        o,
        a,
        s = r || Rt(e),
        u = s ? s.getPropertyValue(n) || s[n] : t,
        l = e.style;return s && ("" !== u || b.contains(e.ownerDocument, e) || (u = b.style(e, n)), Yt.test(u) && Ut.test(n) && (i = l.width, o = l.minWidth, a = l.maxWidth, l.minWidth = l.maxWidth = l.width = u, u = s.width, l.width = i, l.minWidth = o, l.maxWidth = a)), u;
  }) : o.documentElement.currentStyle && (Rt = function Rt(e) {
    return e.currentStyle;
  }, Wt = function Wt(e, n, r) {
    var i,
        o,
        a,
        s = r || Rt(e),
        u = s ? s[n] : t,
        l = e.style;return null == u && l && l[n] && (u = l[n]), Yt.test(u) && !zt.test(n) && (i = l.left, o = e.runtimeStyle, a = o && o.left, a && (o.left = e.currentStyle.left), l.left = "fontSize" === n ? "1em" : u, u = l.pixelLeft + "px", l.left = i, a && (o.left = a)), "" === u ? "auto" : u;
  });function on(e, t, n) {
    var r = Vt.exec(t);return r ? Math.max(0, r[1] - (n || 0)) + (r[2] || "px") : t;
  }function an(e, t, n, r, i) {
    var o = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0,
        a = 0;for (; 4 > o; o += 2) {
      "margin" === n && (a += b.css(e, n + Zt[o], !0, i)), r ? ("content" === n && (a -= b.css(e, "padding" + Zt[o], !0, i)), "margin" !== n && (a -= b.css(e, "border" + Zt[o] + "Width", !0, i))) : (a += b.css(e, "padding" + Zt[o], !0, i), "padding" !== n && (a += b.css(e, "border" + Zt[o] + "Width", !0, i)));
    }return a;
  }function sn(e, t, n) {
    var r = !0,
        i = "width" === t ? e.offsetWidth : e.offsetHeight,
        o = Rt(e),
        a = b.support.boxSizing && "border-box" === b.css(e, "boxSizing", !1, o);if (0 >= i || null == i) {
      if (i = Wt(e, t, o), (0 > i || null == i) && (i = e.style[t]), Yt.test(i)) return i;r = a && (b.support.boxSizingReliable || i === e.style[t]), i = parseFloat(i) || 0;
    }return i + an(e, t, n || (a ? "border" : "content"), r, o) + "px";
  }function un(e) {
    var t = o,
        n = Gt[e];return n || (n = ln(e, t), "none" !== n && n || (Pt = (Pt || b("<iframe frameborder='0' width='0' height='0'/>").css("cssText", "display:block !important")).appendTo(t.documentElement), t = (Pt[0].contentWindow || Pt[0].contentDocument).document, t.write("<!doctype html><html><body>"), t.close(), n = ln(e, t), Pt.detach()), Gt[e] = n), n;
  }function ln(e, t) {
    var n = b(t.createElement(e)).appendTo(t.body),
        r = b.css(n[0], "display");return n.remove(), r;
  }b.each(["height", "width"], function (e, n) {
    b.cssHooks[n] = { get: function get(e, r, i) {
        return r ? 0 === e.offsetWidth && Xt.test(b.css(e, "display")) ? b.swap(e, Qt, function () {
          return sn(e, n, i);
        }) : sn(e, n, i) : t;
      }, set: function set(e, t, r) {
        var i = r && Rt(e);return on(e, t, r ? an(e, n, r, b.support.boxSizing && "border-box" === b.css(e, "boxSizing", !1, i), i) : 0);
      } };
  }), b.support.opacity || (b.cssHooks.opacity = { get: function get(e, t) {
      return It.test((t && e.currentStyle ? e.currentStyle.filter : e.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : t ? "1" : "";
    }, set: function set(e, t) {
      var n = e.style,
          r = e.currentStyle,
          i = b.isNumeric(t) ? "alpha(opacity=" + 100 * t + ")" : "",
          o = r && r.filter || n.filter || "";n.zoom = 1, (t >= 1 || "" === t) && "" === b.trim(o.replace($t, "")) && n.removeAttribute && (n.removeAttribute("filter"), "" === t || r && !r.filter) || (n.filter = $t.test(o) ? o.replace($t, i) : o + " " + i);
    } }), b(function () {
    b.support.reliableMarginRight || (b.cssHooks.marginRight = { get: function get(e, n) {
        return n ? b.swap(e, { display: "inline-block" }, Wt, [e, "marginRight"]) : t;
      } }), !b.support.pixelPosition && b.fn.position && b.each(["top", "left"], function (e, n) {
      b.cssHooks[n] = { get: function get(e, r) {
          return r ? (r = Wt(e, n), Yt.test(r) ? b(e).position()[n] + "px" : r) : t;
        } };
    });
  }), b.expr && b.expr.filters && (b.expr.filters.hidden = function (e) {
    return 0 >= e.offsetWidth && 0 >= e.offsetHeight || !b.support.reliableHiddenOffsets && "none" === (e.style && e.style.display || b.css(e, "display"));
  }, b.expr.filters.visible = function (e) {
    return !b.expr.filters.hidden(e);
  }), b.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
    b.cssHooks[e + t] = { expand: function expand(n) {
        var r = 0,
            i = {},
            o = "string" == typeof n ? n.split(" ") : [n];for (; 4 > r; r++) {
          i[e + Zt[r] + t] = o[r] || o[r - 2] || o[0];
        }return i;
      } }, Ut.test(e) || (b.cssHooks[e + t].set = on);
  });var cn = /%20/g,
      pn = /\[\]$/,
      fn = /\r?\n/g,
      dn = /^(?:submit|button|image|reset|file)$/i,
      hn = /^(?:input|select|textarea|keygen)/i;b.fn.extend({ serialize: function serialize() {
      return b.param(this.serializeArray());
    }, serializeArray: function serializeArray() {
      return this.map(function () {
        var e = b.prop(this, "elements");return e ? b.makeArray(e) : this;
      }).filter(function () {
        var e = this.type;return this.name && !b(this).is(":disabled") && hn.test(this.nodeName) && !dn.test(e) && (this.checked || !Nt.test(e));
      }).map(function (e, t) {
        var n = b(this).val();return null == n ? null : b.isArray(n) ? b.map(n, function (e) {
          return { name: t.name, value: e.replace(fn, "\r\n") };
        }) : { name: t.name, value: n.replace(fn, "\r\n") };
      }).get();
    } }), b.param = function (e, n) {
    var r,
        i = [],
        o = function o(e, t) {
      t = b.isFunction(t) ? t() : null == t ? "" : t, i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t);
    };if (n === t && (n = b.ajaxSettings && b.ajaxSettings.traditional), b.isArray(e) || e.jquery && !b.isPlainObject(e)) b.each(e, function () {
      o(this.name, this.value);
    });else for (r in e) {
      gn(r, e[r], n, o);
    }return i.join("&").replace(cn, "+");
  };function gn(e, t, n, r) {
    var i;if (b.isArray(t)) b.each(t, function (t, i) {
      n || pn.test(e) ? r(e, i) : gn(e + "[" + ("object" == (typeof i === "undefined" ? "undefined" : _typeof(i)) ? t : "") + "]", i, n, r);
    });else if (n || "object" !== b.type(t)) r(e, t);else for (i in t) {
      gn(e + "[" + i + "]", t[i], n, r);
    }
  }b.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (e, t) {
    b.fn[t] = function (e, n) {
      return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
    };
  }), b.fn.hover = function (e, t) {
    return this.mouseenter(e).mouseleave(t || e);
  };var mn,
      yn,
      vn = b.now(),
      bn = /\?/,
      xn = /#.*$/,
      wn = /([?&])_=[^&]*/,
      Tn = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
      Nn = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
      Cn = /^(?:GET|HEAD)$/,
      kn = /^\/\//,
      En = /^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,
      Sn = b.fn.load,
      An = {},
      jn = {},
      Dn = "*/".concat("*");try {
    yn = a.href;
  } catch (Ln) {
    yn = o.createElement("a"), yn.href = "", yn = yn.href;
  }mn = En.exec(yn.toLowerCase()) || [];function Hn(e) {
    return function (t, n) {
      "string" != typeof t && (n = t, t = "*");var r,
          i = 0,
          o = t.toLowerCase().match(w) || [];if (b.isFunction(n)) while (r = o[i++]) {
        "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n);
      }
    };
  }function qn(e, n, r, i) {
    var o = {},
        a = e === jn;function s(u) {
      var l;return o[u] = !0, b.each(e[u] || [], function (e, u) {
        var c = u(n, r, i);return "string" != typeof c || a || o[c] ? a ? !(l = c) : t : (n.dataTypes.unshift(c), s(c), !1);
      }), l;
    }return s(n.dataTypes[0]) || !o["*"] && s("*");
  }function Mn(e, n) {
    var r,
        i,
        o = b.ajaxSettings.flatOptions || {};for (i in n) {
      n[i] !== t && ((o[i] ? e : r || (r = {}))[i] = n[i]);
    }return r && b.extend(!0, e, r), e;
  }b.fn.load = function (e, n, r) {
    if ("string" != typeof e && Sn) return Sn.apply(this, arguments);var i,
        o,
        a,
        s = this,
        u = e.indexOf(" ");return u >= 0 && (i = e.slice(u, e.length), e = e.slice(0, u)), b.isFunction(n) ? (r = n, n = t) : n && "object" == (typeof n === "undefined" ? "undefined" : _typeof(n)) && (a = "POST"), s.length > 0 && b.ajax({ url: e, type: a, dataType: "html", data: n }).done(function (e) {
      o = arguments, s.html(i ? b("<div>").append(b.parseHTML(e)).find(i) : e);
    }).complete(r && function (e, t) {
      s.each(r, o || [e.responseText, t, e]);
    }), this;
  }, b.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
    b.fn[t] = function (e) {
      return this.on(t, e);
    };
  }), b.each(["get", "post"], function (e, n) {
    b[n] = function (e, r, i, o) {
      return b.isFunction(r) && (o = o || i, i = r, r = t), b.ajax({ url: e, type: n, dataType: o, data: r, success: i });
    };
  }), b.extend({ active: 0, lastModified: {}, etag: {}, ajaxSettings: { url: yn, type: "GET", isLocal: Nn.test(mn[1]), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: { "*": Dn, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript" }, contents: { xml: /xml/, html: /html/, json: /json/ }, responseFields: { xml: "responseXML", text: "responseText" }, converters: { "* text": e.String, "text html": !0, "text json": b.parseJSON, "text xml": b.parseXML }, flatOptions: { url: !0, context: !0 } }, ajaxSetup: function ajaxSetup(e, t) {
      return t ? Mn(Mn(e, b.ajaxSettings), t) : Mn(b.ajaxSettings, e);
    }, ajaxPrefilter: Hn(An), ajaxTransport: Hn(jn), ajax: function ajax(e, n) {
      "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) && (n = e, e = t), n = n || {};var r,
          i,
          o,
          a,
          s,
          u,
          l,
          c,
          p = b.ajaxSetup({}, n),
          f = p.context || p,
          d = p.context && (f.nodeType || f.jquery) ? b(f) : b.event,
          h = b.Deferred(),
          g = b.Callbacks("once memory"),
          m = p.statusCode || {},
          y = {},
          v = {},
          x = 0,
          T = "canceled",
          N = { readyState: 0, getResponseHeader: function getResponseHeader(e) {
          var t;if (2 === x) {
            if (!c) {
              c = {};while (t = Tn.exec(a)) {
                c[t[1].toLowerCase()] = t[2];
              }
            }t = c[e.toLowerCase()];
          }return null == t ? null : t;
        }, getAllResponseHeaders: function getAllResponseHeaders() {
          return 2 === x ? a : null;
        }, setRequestHeader: function setRequestHeader(e, t) {
          var n = e.toLowerCase();return x || (e = v[n] = v[n] || e, y[e] = t), this;
        }, overrideMimeType: function overrideMimeType(e) {
          return x || (p.mimeType = e), this;
        }, statusCode: function statusCode(e) {
          var t;if (e) if (2 > x) for (t in e) {
            m[t] = [m[t], e[t]];
          } else N.always(e[N.status]);return this;
        }, abort: function abort(e) {
          var t = e || T;return l && l.abort(t), k(0, t), this;
        } };if (h.promise(N).complete = g.add, N.success = N.done, N.error = N.fail, p.url = ((e || p.url || yn) + "").replace(xn, "").replace(kn, mn[1] + "//"), p.type = n.method || n.type || p.method || p.type, p.dataTypes = b.trim(p.dataType || "*").toLowerCase().match(w) || [""], null == p.crossDomain && (r = En.exec(p.url.toLowerCase()), p.crossDomain = !(!r || r[1] === mn[1] && r[2] === mn[2] && (r[3] || ("http:" === r[1] ? 80 : 443)) == (mn[3] || ("http:" === mn[1] ? 80 : 443)))), p.data && p.processData && "string" != typeof p.data && (p.data = b.param(p.data, p.traditional)), qn(An, p, n, N), 2 === x) return N;u = p.global, u && 0 === b.active++ && b.event.trigger("ajaxStart"), p.type = p.type.toUpperCase(), p.hasContent = !Cn.test(p.type), o = p.url, p.hasContent || (p.data && (o = p.url += (bn.test(o) ? "&" : "?") + p.data, delete p.data), p.cache === !1 && (p.url = wn.test(o) ? o.replace(wn, "$1_=" + vn++) : o + (bn.test(o) ? "&" : "?") + "_=" + vn++)), p.ifModified && (b.lastModified[o] && N.setRequestHeader("If-Modified-Since", b.lastModified[o]), b.etag[o] && N.setRequestHeader("If-None-Match", b.etag[o])), (p.data && p.hasContent && p.contentType !== !1 || n.contentType) && N.setRequestHeader("Content-Type", p.contentType), N.setRequestHeader("Accept", p.dataTypes[0] && p.accepts[p.dataTypes[0]] ? p.accepts[p.dataTypes[0]] + ("*" !== p.dataTypes[0] ? ", " + Dn + "; q=0.01" : "") : p.accepts["*"]);for (i in p.headers) {
        N.setRequestHeader(i, p.headers[i]);
      }if (p.beforeSend && (p.beforeSend.call(f, N, p) === !1 || 2 === x)) return N.abort();T = "abort";for (i in { success: 1, error: 1, complete: 1 }) {
        N[i](p[i]);
      }if (l = qn(jn, p, n, N)) {
        N.readyState = 1, u && d.trigger("ajaxSend", [N, p]), p.async && p.timeout > 0 && (s = setTimeout(function () {
          N.abort("timeout");
        }, p.timeout));try {
          x = 1, l.send(y, k);
        } catch (C) {
          if (!(2 > x)) throw C;k(-1, C);
        }
      } else k(-1, "No Transport");function k(e, n, r, i) {
        var c,
            y,
            v,
            w,
            T,
            C = n;2 !== x && (x = 2, s && clearTimeout(s), l = t, a = i || "", N.readyState = e > 0 ? 4 : 0, r && (w = _n(p, N, r)), e >= 200 && 300 > e || 304 === e ? (p.ifModified && (T = N.getResponseHeader("Last-Modified"), T && (b.lastModified[o] = T), T = N.getResponseHeader("etag"), T && (b.etag[o] = T)), 204 === e ? (c = !0, C = "nocontent") : 304 === e ? (c = !0, C = "notmodified") : (c = Fn(p, w), C = c.state, y = c.data, v = c.error, c = !v)) : (v = C, (e || !C) && (C = "error", 0 > e && (e = 0))), N.status = e, N.statusText = (n || C) + "", c ? h.resolveWith(f, [y, C, N]) : h.rejectWith(f, [N, C, v]), N.statusCode(m), m = t, u && d.trigger(c ? "ajaxSuccess" : "ajaxError", [N, p, c ? y : v]), g.fireWith(f, [N, C]), u && (d.trigger("ajaxComplete", [N, p]), --b.active || b.event.trigger("ajaxStop")));
      }return N;
    }, getScript: function getScript(e, n) {
      return b.get(e, t, n, "script");
    }, getJSON: function getJSON(e, t, n) {
      return b.get(e, t, n, "json");
    } });function _n(e, n, r) {
    var i,
        o,
        a,
        s,
        u = e.contents,
        l = e.dataTypes,
        c = e.responseFields;for (s in c) {
      s in r && (n[c[s]] = r[s]);
    }while ("*" === l[0]) {
      l.shift(), o === t && (o = e.mimeType || n.getResponseHeader("Content-Type"));
    }if (o) for (s in u) {
      if (u[s] && u[s].test(o)) {
        l.unshift(s);break;
      }
    }if (l[0] in r) a = l[0];else {
      for (s in r) {
        if (!l[0] || e.converters[s + " " + l[0]]) {
          a = s;break;
        }i || (i = s);
      }a = a || i;
    }return a ? (a !== l[0] && l.unshift(a), r[a]) : t;
  }function Fn(e, t) {
    var n,
        r,
        i,
        o,
        a = {},
        s = 0,
        u = e.dataTypes.slice(),
        l = u[0];if (e.dataFilter && (t = e.dataFilter(t, e.dataType)), u[1]) for (i in e.converters) {
      a[i.toLowerCase()] = e.converters[i];
    }for (; r = u[++s];) {
      if ("*" !== r) {
        if ("*" !== l && l !== r) {
          if (i = a[l + " " + r] || a["* " + r], !i) for (n in a) {
            if (o = n.split(" "), o[1] === r && (i = a[l + " " + o[0]] || a["* " + o[0]])) {
              i === !0 ? i = a[n] : a[n] !== !0 && (r = o[0], u.splice(s--, 0, r));break;
            }
          }if (i !== !0) if (i && e["throws"]) t = i(t);else try {
            t = i(t);
          } catch (c) {
            return { state: "parsererror", error: i ? c : "No conversion from " + l + " to " + r };
          }
        }l = r;
      }
    }return { state: "success", data: t };
  }b.ajaxSetup({ accepts: { script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript" }, contents: { script: /(?:java|ecma)script/ }, converters: { "text script": function textScript(e) {
        return b.globalEval(e), e;
      } } }), b.ajaxPrefilter("script", function (e) {
    e.cache === t && (e.cache = !1), e.crossDomain && (e.type = "GET", e.global = !1);
  }), b.ajaxTransport("script", function (e) {
    if (e.crossDomain) {
      var n,
          r = o.head || b("head")[0] || o.documentElement;return { send: function send(t, i) {
          n = o.createElement("script"), n.async = !0, e.scriptCharset && (n.charset = e.scriptCharset), n.src = e.url, n.onload = n.onreadystatechange = function (e, t) {
            (t || !n.readyState || /loaded|complete/.test(n.readyState)) && (n.onload = n.onreadystatechange = null, n.parentNode && n.parentNode.removeChild(n), n = null, t || i(200, "success"));
          }, r.insertBefore(n, r.firstChild);
        }, abort: function abort() {
          n && n.onload(t, !0);
        } };
    }
  });var On = [],
      Bn = /(=)\?(?=&|$)|\?\?/;b.ajaxSetup({ jsonp: "callback", jsonpCallback: function jsonpCallback() {
      var e = On.pop() || b.expando + "_" + vn++;return this[e] = !0, e;
    } }), b.ajaxPrefilter("json jsonp", function (n, r, i) {
    var o,
        a,
        s,
        u = n.jsonp !== !1 && (Bn.test(n.url) ? "url" : "string" == typeof n.data && !(n.contentType || "").indexOf("application/x-www-form-urlencoded") && Bn.test(n.data) && "data");return u || "jsonp" === n.dataTypes[0] ? (o = n.jsonpCallback = b.isFunction(n.jsonpCallback) ? n.jsonpCallback() : n.jsonpCallback, u ? n[u] = n[u].replace(Bn, "$1" + o) : n.jsonp !== !1 && (n.url += (bn.test(n.url) ? "&" : "?") + n.jsonp + "=" + o), n.converters["script json"] = function () {
      return s || b.error(o + " was not called"), s[0];
    }, n.dataTypes[0] = "json", a = e[o], e[o] = function () {
      s = arguments;
    }, i.always(function () {
      e[o] = a, n[o] && (n.jsonpCallback = r.jsonpCallback, On.push(o)), s && b.isFunction(a) && a(s[0]), s = a = t;
    }), "script") : t;
  });var Pn,
      Rn,
      Wn = 0,
      $n = e.ActiveXObject && function () {
    var e;for (e in Pn) {
      Pn[e](t, !0);
    }
  };function In() {
    try {
      return new e.XMLHttpRequest();
    } catch (t) {}
  }function zn() {
    try {
      return new e.ActiveXObject("Microsoft.XMLHTTP");
    } catch (t) {}
  }b.ajaxSettings.xhr = e.ActiveXObject ? function () {
    return !this.isLocal && In() || zn();
  } : In, Rn = b.ajaxSettings.xhr(), b.support.cors = !!Rn && "withCredentials" in Rn, Rn = b.support.ajax = !!Rn, Rn && b.ajaxTransport(function (n) {
    if (!n.crossDomain || b.support.cors) {
      var _r;return { send: function send(i, o) {
          var a,
              s,
              u = n.xhr();if (n.username ? u.open(n.type, n.url, n.async, n.username, n.password) : u.open(n.type, n.url, n.async), n.xhrFields) for (s in n.xhrFields) {
            u[s] = n.xhrFields[s];
          }n.mimeType && u.overrideMimeType && u.overrideMimeType(n.mimeType), n.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");try {
            for (s in i) {
              u.setRequestHeader(s, i[s]);
            }
          } catch (l) {}u.send(n.hasContent && n.data || null), _r = function r(e, i) {
            var s, l, c, p;try {
              if (_r && (i || 4 === u.readyState)) if (_r = t, a && (u.onreadystatechange = b.noop, $n && delete Pn[a]), i) 4 !== u.readyState && u.abort();else {
                p = {}, s = u.status, l = u.getAllResponseHeaders(), "string" == typeof u.responseText && (p.text = u.responseText);try {
                  c = u.statusText;
                } catch (f) {
                  c = "";
                }s || !n.isLocal || n.crossDomain ? 1223 === s && (s = 204) : s = p.text ? 200 : 404;
              }
            } catch (d) {
              i || o(-1, d);
            }p && o(s, c, p, l);
          }, n.async ? 4 === u.readyState ? setTimeout(_r) : (a = ++Wn, $n && (Pn || (Pn = {}, b(e).unload($n)), Pn[a] = _r), u.onreadystatechange = _r) : _r();
        }, abort: function abort() {
          _r && _r(t, !0);
        } };
    }
  });var Xn,
      Un,
      Vn = /^(?:toggle|show|hide)$/,
      Yn = RegExp("^(?:([+-])=|)(" + x + ")([a-z%]*)$", "i"),
      Jn = /queueHooks$/,
      Gn = [nr],
      Qn = { "*": [function (e, t) {
      var n,
          r,
          i = this.createTween(e, t),
          o = Yn.exec(t),
          a = i.cur(),
          s = +a || 0,
          u = 1,
          l = 20;if (o) {
        if (n = +o[2], r = o[3] || (b.cssNumber[e] ? "" : "px"), "px" !== r && s) {
          s = b.css(i.elem, e, !0) || n || 1;do {
            u = u || ".5", s /= u, b.style(i.elem, e, s + r);
          } while (u !== (u = i.cur() / a) && 1 !== u && --l);
        }i.unit = r, i.start = s, i.end = o[1] ? s + (o[1] + 1) * n : n;
      }return i;
    }] };function Kn() {
    return setTimeout(function () {
      Xn = t;
    }), Xn = b.now();
  }function Zn(e, t) {
    b.each(t, function (t, n) {
      var r = (Qn[t] || []).concat(Qn["*"]),
          i = 0,
          o = r.length;for (; o > i; i++) {
        if (r[i].call(e, t, n)) return;
      }
    });
  }function er(e, t, n) {
    var r,
        i,
        o = 0,
        a = Gn.length,
        s = b.Deferred().always(function () {
      delete u.elem;
    }),
        u = function u() {
      if (i) return !1;var t = Xn || Kn(),
          n = Math.max(0, l.startTime + l.duration - t),
          r = n / l.duration || 0,
          o = 1 - r,
          a = 0,
          u = l.tweens.length;for (; u > a; a++) {
        l.tweens[a].run(o);
      }return s.notifyWith(e, [l, o, n]), 1 > o && u ? n : (s.resolveWith(e, [l]), !1);
    },
        l = s.promise({ elem: e, props: b.extend({}, t), opts: b.extend(!0, { specialEasing: {} }, n), originalProperties: t, originalOptions: n, startTime: Xn || Kn(), duration: n.duration, tweens: [], createTween: function createTween(t, n) {
        var r = b.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);return l.tweens.push(r), r;
      }, stop: function stop(t) {
        var n = 0,
            r = t ? l.tweens.length : 0;if (i) return this;for (i = !0; r > n; n++) {
          l.tweens[n].run(1);
        }return t ? s.resolveWith(e, [l, t]) : s.rejectWith(e, [l, t]), this;
      } }),
        c = l.props;for (tr(c, l.opts.specialEasing); a > o; o++) {
      if (r = Gn[o].call(l, e, c, l.opts)) return r;
    }return Zn(l, c), b.isFunction(l.opts.start) && l.opts.start.call(e, l), b.fx.timer(b.extend(u, { elem: e, anim: l, queue: l.opts.queue })), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always);
  }function tr(e, t) {
    var n, r, i, o, a;for (i in e) {
      if (r = b.camelCase(i), o = t[r], n = e[i], b.isArray(n) && (o = n[1], n = e[i] = n[0]), i !== r && (e[r] = n, delete e[i]), a = b.cssHooks[r], a && "expand" in a) {
        n = a.expand(n), delete e[r];for (i in n) {
          i in e || (e[i] = n[i], t[i] = o);
        }
      } else t[r] = o;
    }
  }b.Animation = b.extend(er, { tweener: function tweener(e, t) {
      b.isFunction(e) ? (t = e, e = ["*"]) : e = e.split(" ");var n,
          r = 0,
          i = e.length;for (; i > r; r++) {
        n = e[r], Qn[n] = Qn[n] || [], Qn[n].unshift(t);
      }
    }, prefilter: function prefilter(e, t) {
      t ? Gn.unshift(e) : Gn.push(e);
    } });function nr(e, t, n) {
    var r,
        i,
        o,
        a,
        s,
        u,
        l,
        c,
        p,
        f = this,
        d = e.style,
        h = {},
        g = [],
        m = e.nodeType && nn(e);n.queue || (c = b._queueHooks(e, "fx"), null == c.unqueued && (c.unqueued = 0, p = c.empty.fire, c.empty.fire = function () {
      c.unqueued || p();
    }), c.unqueued++, f.always(function () {
      f.always(function () {
        c.unqueued--, b.queue(e, "fx").length || c.empty.fire();
      });
    })), 1 === e.nodeType && ("height" in t || "width" in t) && (n.overflow = [d.overflow, d.overflowX, d.overflowY], "inline" === b.css(e, "display") && "none" === b.css(e, "float") && (b.support.inlineBlockNeedsLayout && "inline" !== un(e.nodeName) ? d.zoom = 1 : d.display = "inline-block")), n.overflow && (d.overflow = "hidden", b.support.shrinkWrapBlocks || f.always(function () {
      d.overflow = n.overflow[0], d.overflowX = n.overflow[1], d.overflowY = n.overflow[2];
    }));for (i in t) {
      if (a = t[i], Vn.exec(a)) {
        if (delete t[i], u = u || "toggle" === a, a === (m ? "hide" : "show")) continue;g.push(i);
      }
    }if (o = g.length) {
      s = b._data(e, "fxshow") || b._data(e, "fxshow", {}), "hidden" in s && (m = s.hidden), u && (s.hidden = !m), m ? b(e).show() : f.done(function () {
        b(e).hide();
      }), f.done(function () {
        var t;b._removeData(e, "fxshow");for (t in h) {
          b.style(e, t, h[t]);
        }
      });for (i = 0; o > i; i++) {
        r = g[i], l = f.createTween(r, m ? s[r] : 0), h[r] = s[r] || b.style(e, r), r in s || (s[r] = l.start, m && (l.end = l.start, l.start = "width" === r || "height" === r ? 1 : 0));
      }
    }
  }function rr(e, t, n, r, i) {
    return new rr.prototype.init(e, t, n, r, i);
  }b.Tween = rr, rr.prototype = { constructor: rr, init: function init(e, t, n, r, i, o) {
      this.elem = e, this.prop = n, this.easing = i || "swing", this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (b.cssNumber[n] ? "" : "px");
    }, cur: function cur() {
      var e = rr.propHooks[this.prop];return e && e.get ? e.get(this) : rr.propHooks._default.get(this);
    }, run: function run(e) {
      var t,
          n = rr.propHooks[this.prop];return this.pos = t = this.options.duration ? b.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : rr.propHooks._default.set(this), this;
    } }, rr.prototype.init.prototype = rr.prototype, rr.propHooks = { _default: { get: function get(e) {
        var t;return null == e.elem[e.prop] || e.elem.style && null != e.elem.style[e.prop] ? (t = b.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0) : e.elem[e.prop];
      }, set: function set(e) {
        b.fx.step[e.prop] ? b.fx.step[e.prop](e) : e.elem.style && (null != e.elem.style[b.cssProps[e.prop]] || b.cssHooks[e.prop]) ? b.style(e.elem, e.prop, e.now + e.unit) : e.elem[e.prop] = e.now;
      } } }, rr.propHooks.scrollTop = rr.propHooks.scrollLeft = { set: function set(e) {
      e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
    } }, b.each(["toggle", "show", "hide"], function (e, t) {
    var n = b.fn[t];b.fn[t] = function (e, r, i) {
      return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ir(t, !0), e, r, i);
    };
  }), b.fn.extend({ fadeTo: function fadeTo(e, t, n, r) {
      return this.filter(nn).css("opacity", 0).show().end().animate({ opacity: t }, e, n, r);
    }, animate: function animate(e, t, n, r) {
      var i = b.isEmptyObject(e),
          o = b.speed(t, n, r),
          a = function a() {
        var t = er(this, b.extend({}, e), o);a.finish = function () {
          t.stop(!0);
        }, (i || b._data(this, "finish")) && t.stop(!0);
      };return a.finish = a, i || o.queue === !1 ? this.each(a) : this.queue(o.queue, a);
    }, stop: function stop(e, n, r) {
      var i = function i(e) {
        var t = e.stop;delete e.stop, t(r);
      };return "string" != typeof e && (r = n, n = e, e = t), n && e !== !1 && this.queue(e || "fx", []), this.each(function () {
        var t = !0,
            n = null != e && e + "queueHooks",
            o = b.timers,
            a = b._data(this);if (n) a[n] && a[n].stop && i(a[n]);else for (n in a) {
          a[n] && a[n].stop && Jn.test(n) && i(a[n]);
        }for (n = o.length; n--;) {
          o[n].elem !== this || null != e && o[n].queue !== e || (o[n].anim.stop(r), t = !1, o.splice(n, 1));
        }(t || !r) && b.dequeue(this, e);
      });
    }, finish: function finish(e) {
      return e !== !1 && (e = e || "fx"), this.each(function () {
        var t,
            n = b._data(this),
            r = n[e + "queue"],
            i = n[e + "queueHooks"],
            o = b.timers,
            a = r ? r.length : 0;for (n.finish = !0, b.queue(this, e, []), i && i.cur && i.cur.finish && i.cur.finish.call(this), t = o.length; t--;) {
          o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
        }for (t = 0; a > t; t++) {
          r[t] && r[t].finish && r[t].finish.call(this);
        }delete n.finish;
      });
    } });function ir(e, t) {
    var n,
        r = { height: e },
        i = 0;for (t = t ? 1 : 0; 4 > i; i += 2 - t) {
      n = Zt[i], r["margin" + n] = r["padding" + n] = e;
    }return t && (r.opacity = r.width = e), r;
  }b.each({ slideDown: ir("show"), slideUp: ir("hide"), slideToggle: ir("toggle"), fadeIn: { opacity: "show" }, fadeOut: { opacity: "hide" }, fadeToggle: { opacity: "toggle" } }, function (e, t) {
    b.fn[e] = function (e, n, r) {
      return this.animate(t, e, n, r);
    };
  }), b.speed = function (e, t, n) {
    var r = e && "object" == (typeof e === "undefined" ? "undefined" : _typeof(e)) ? b.extend({}, e) : { complete: n || !n && t || b.isFunction(e) && e, duration: e, easing: n && t || t && !b.isFunction(t) && t };return r.duration = b.fx.off ? 0 : "number" == typeof r.duration ? r.duration : r.duration in b.fx.speeds ? b.fx.speeds[r.duration] : b.fx.speeds._default, (null == r.queue || r.queue === !0) && (r.queue = "fx"), r.old = r.complete, r.complete = function () {
      b.isFunction(r.old) && r.old.call(this), r.queue && b.dequeue(this, r.queue);
    }, r;
  }, b.easing = { linear: function linear(e) {
      return e;
    }, swing: function swing(e) {
      return .5 - Math.cos(e * Math.PI) / 2;
    } }, b.timers = [], b.fx = rr.prototype.init, b.fx.tick = function () {
    var e,
        n = b.timers,
        r = 0;for (Xn = b.now(); n.length > r; r++) {
      e = n[r], e() || n[r] !== e || n.splice(r--, 1);
    }n.length || b.fx.stop(), Xn = t;
  }, b.fx.timer = function (e) {
    e() && b.timers.push(e) && b.fx.start();
  }, b.fx.interval = 13, b.fx.start = function () {
    Un || (Un = setInterval(b.fx.tick, b.fx.interval));
  }, b.fx.stop = function () {
    clearInterval(Un), Un = null;
  }, b.fx.speeds = { slow: 600, fast: 200, _default: 400 }, b.fx.step = {}, b.expr && b.expr.filters && (b.expr.filters.animated = function (e) {
    return b.grep(b.timers, function (t) {
      return e === t.elem;
    }).length;
  }), b.fn.offset = function (e) {
    if (arguments.length) return e === t ? this : this.each(function (t) {
      b.offset.setOffset(this, e, t);
    });var n,
        r,
        o = { top: 0, left: 0 },
        a = this[0],
        s = a && a.ownerDocument;if (s) return n = s.documentElement, b.contains(n, a) ? (_typeof(a.getBoundingClientRect) !== i && (o = a.getBoundingClientRect()), r = or(s), { top: o.top + (r.pageYOffset || n.scrollTop) - (n.clientTop || 0), left: o.left + (r.pageXOffset || n.scrollLeft) - (n.clientLeft || 0) }) : o;
  }, b.offset = { setOffset: function setOffset(e, t, n) {
      var r = b.css(e, "position");"static" === r && (e.style.position = "relative");var i = b(e),
          o = i.offset(),
          a = b.css(e, "top"),
          s = b.css(e, "left"),
          u = ("absolute" === r || "fixed" === r) && b.inArray("auto", [a, s]) > -1,
          l = {},
          c = {},
          p,
          f;u ? (c = i.position(), p = c.top, f = c.left) : (p = parseFloat(a) || 0, f = parseFloat(s) || 0), b.isFunction(t) && (t = t.call(e, n, o)), null != t.top && (l.top = t.top - o.top + p), null != t.left && (l.left = t.left - o.left + f), "using" in t ? t.using.call(e, l) : i.css(l);
    } }, b.fn.extend({ position: function position() {
      if (this[0]) {
        var e,
            t,
            n = { top: 0, left: 0 },
            r = this[0];return "fixed" === b.css(r, "position") ? t = r.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), b.nodeName(e[0], "html") || (n = e.offset()), n.top += b.css(e[0], "borderTopWidth", !0), n.left += b.css(e[0], "borderLeftWidth", !0)), { top: t.top - n.top - b.css(r, "marginTop", !0), left: t.left - n.left - b.css(r, "marginLeft", !0) };
      }
    }, offsetParent: function offsetParent() {
      return this.map(function () {
        var e = this.offsetParent || o.documentElement;while (e && !b.nodeName(e, "html") && "static" === b.css(e, "position")) {
          e = e.offsetParent;
        }return e || o.documentElement;
      });
    } }), b.each({ scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function (e, n) {
    var r = /Y/.test(n);b.fn[e] = function (i) {
      return b.access(this, function (e, i, o) {
        var a = or(e);return o === t ? a ? n in a ? a[n] : a.document.documentElement[i] : e[i] : (a ? a.scrollTo(r ? b(a).scrollLeft() : o, r ? o : b(a).scrollTop()) : e[i] = o, t);
      }, e, i, arguments.length, null);
    };
  });function or(e) {
    return b.isWindow(e) ? e : 9 === e.nodeType ? e.defaultView || e.parentWindow : !1;
  }b.each({ Height: "height", Width: "width" }, function (e, n) {
    b.each({ padding: "inner" + e, content: n, "": "outer" + e }, function (r, i) {
      b.fn[i] = function (i, o) {
        var a = arguments.length && (r || "boolean" != typeof i),
            s = r || (i === !0 || o === !0 ? "margin" : "border");return b.access(this, function (n, r, i) {
          var o;return b.isWindow(n) ? n.document.documentElement["client" + e] : 9 === n.nodeType ? (o = n.documentElement, Math.max(n.body["scroll" + e], o["scroll" + e], n.body["offset" + e], o["offset" + e], o["client" + e])) : i === t ? b.css(n, r, s) : b.style(n, r, i, s);
        }, n, a ? i : t, a, null);
      };
    });
  }), e.jQuery = e.$ = b, "function" == "function" && __webpack_require__(1) && __webpack_require__(1).jQuery && !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function () {
    return b;
  }).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
})(window);

/***/ }),

/***/ 73:
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*
 * jQuery FlexSlider v2.1
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 */
(function (d) {
  d.flexslider = function (j, l) {
    var a = d(j),
        c = d.extend({}, d.flexslider.defaults, l),
        e = c.namespace,
        q = "ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch,
        u = q ? "touchend" : "click",
        m = "vertical" === c.direction,
        n = c.reverse,
        h = 0 < c.itemWidth,
        s = "fade" === c.animation,
        t = "" !== c.asNavFor,
        f = {};d.data(j, "flexslider", a);f = { init: function init() {
        a.animating = !1;a.currentSlide = c.startAt;a.animatingTo = a.currentSlide;a.atEnd = 0 === a.currentSlide || a.currentSlide === a.last;a.containerSelector = c.selector.substr(0, c.selector.search(" "));a.slides = d(c.selector, a);a.container = d(a.containerSelector, a);a.count = a.slides.length;a.syncExists = 0 < d(c.sync).length;"slide" === c.animation && (c.animation = "swing");a.prop = m ? "top" : "marginLeft";a.args = {};a.manualPause = !1;var b = a,
            g;if (g = !c.video) if (g = !s) if (g = c.useCSS) a: {
          g = document.createElement("div");var p = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"],
              e;for (e in p) {
            if (void 0 !== g.style[p[e]]) {
              a.pfx = p[e].replace("Perspective", "").toLowerCase();
              a.prop = "-" + a.pfx + "-transform";g = !0;break a;
            }
          }g = !1;
        }b.transitions = g;"" !== c.controlsContainer && (a.controlsContainer = 0 < d(c.controlsContainer).length && d(c.controlsContainer));"" !== c.manualControls && (a.manualControls = 0 < d(c.manualControls).length && d(c.manualControls));c.randomize && (a.slides.sort(function () {
          return Math.round(Math.random()) - 0.5;
        }), a.container.empty().append(a.slides));a.doMath();t && f.asNav.setup();a.setup("init");c.controlNav && f.controlNav.setup();c.directionNav && f.directionNav.setup();c.keyboard && (1 === d(a.containerSelector).length || c.multipleKeyboard) && d(document).bind("keyup", function (b) {
          b = b.keyCode;if (!a.animating && (39 === b || 37 === b)) b = 39 === b ? a.getTarget("next") : 37 === b ? a.getTarget("prev") : !1, a.flexAnimate(b, c.pauseOnAction);
        });c.mousewheel && a.bind("mousewheel", function (b, g) {
          b.preventDefault();var d = 0 > g ? a.getTarget("next") : a.getTarget("prev");a.flexAnimate(d, c.pauseOnAction);
        });c.pausePlay && f.pausePlay.setup();c.slideshow && (c.pauseOnHover && a.hover(function () {
          !a.manualPlay && !a.manualPause && a.pause();
        }, function () {
          !a.manualPause && !a.manualPlay && a.play();
        }), 0 < c.initDelay ? setTimeout(a.play, c.initDelay) : a.play());q && c.touch && f.touch();(!s || s && c.smoothHeight) && d(window).bind("resize focus", f.resize);setTimeout(function () {
          c.start(a);
        }, 200);
      }, asNav: { setup: function setup() {
          a.asNav = !0;a.animatingTo = Math.floor(a.currentSlide / a.move);a.currentItem = a.currentSlide;a.slides.removeClass(e + "active-slide").eq(a.currentItem).addClass(e + "active-slide");a.slides.click(function (b) {
            b.preventDefault();b = d(this);var g = b.index();
            !d(c.asNavFor).data("flexslider").animating && !b.hasClass("active") && (a.direction = a.currentItem < g ? "next" : "prev", a.flexAnimate(g, c.pauseOnAction, !1, !0, !0));
          });
        } }, controlNav: { setup: function setup() {
          a.manualControls ? f.controlNav.setupManual() : f.controlNav.setupPaging();
        }, setupPaging: function setupPaging() {
          var b = 1,
              g;a.controlNavScaffold = d('<ol class="' + e + "control-nav " + e + ("thumbnails" === c.controlNav ? "control-thumbs" : "control-paging") + '"></ol>');if (1 < a.pagingCount) for (var p = 0; p < a.pagingCount; p++) {
            g = "thumbnails" === c.controlNav ? '<img src="' + a.slides.eq(p).attr("data-thumb") + '"/>' : "<a>" + b + "</a>", a.controlNavScaffold.append("<li>" + g + "</li>"), b++;
          }a.controlsContainer ? d(a.controlsContainer).append(a.controlNavScaffold) : a.append(a.controlNavScaffold);f.controlNav.set();f.controlNav.active();a.controlNavScaffold.delegate("a, img", u, function (b) {
            b.preventDefault();b = d(this);var g = a.controlNav.index(b);b.hasClass(e + "active") || (a.direction = g > a.currentSlide ? "next" : "prev", a.flexAnimate(g, c.pauseOnAction));
          });q && a.controlNavScaffold.delegate("a", "click touchstart", function (a) {
            a.preventDefault();
          });
        }, setupManual: function setupManual() {
          a.controlNav = a.manualControls;f.controlNav.active();a.controlNav.live(u, function (b) {
            b.preventDefault();b = d(this);var g = a.controlNav.index(b);b.hasClass(e + "active") || (g > a.currentSlide ? a.direction = "next" : a.direction = "prev", a.flexAnimate(g, c.pauseOnAction));
          });q && a.controlNav.live("click touchstart", function (a) {
            a.preventDefault();
          });
        }, set: function set() {
          a.controlNav = d("." + e + "control-nav li " + ("thumbnails" === c.controlNav ? "img" : "a"), a.controlsContainer ? a.controlsContainer : a);
        }, active: function active() {
          a.controlNav.removeClass(e + "active").eq(a.animatingTo).addClass(e + "active");
        }, update: function update(b, c) {
          1 < a.pagingCount && "add" === b ? a.controlNavScaffold.append(d("<li><a>" + a.count + "</a></li>")) : 1 === a.pagingCount ? a.controlNavScaffold.find("li").remove() : a.controlNav.eq(c).closest("li").remove();f.controlNav.set();1 < a.pagingCount && a.pagingCount !== a.controlNav.length ? a.update(c, b) : f.controlNav.active();
        } }, directionNav: { setup: function setup() {
          var b = d('<ul class="' + e + 'direction-nav"><li><a class="' + e + 'prev " href="#">' + c.prevText + '<i class="icon-left-thin"></i>' + '</a></li><li><a class="' + e + 'next" href="#">' + c.nextText + '<i class="icon-right-thin"></i>' + "</a></li></ul>");a.controlsContainer ? (d(a.controlsContainer).append(b), a.directionNav = d("." + e + "direction-nav li a", a.controlsContainer)) : (a.append(b), a.directionNav = d("." + e + "direction-nav li a", a));f.directionNav.update();a.directionNav.bind(u, function (b) {
            b.preventDefault();b = d(this).hasClass(e + "next") ? a.getTarget("next") : a.getTarget("prev");a.flexAnimate(b, c.pauseOnAction);
          });
          q && a.directionNav.bind("click touchstart", function (a) {
            a.preventDefault();
          });
        }, update: function update() {
          var b = e + "disabled";1 === a.pagingCount ? a.directionNav.addClass(b) : c.animationLoop ? a.directionNav.removeClass(b) : 0 === a.animatingTo ? a.directionNav.removeClass(b).filter("." + e + "prev").addClass(b) : a.animatingTo === a.last ? a.directionNav.removeClass(b).filter("." + e + "next").addClass(b) : a.directionNav.removeClass(b);
        } }, pausePlay: { setup: function setup() {
          var b = d('<div class="' + e + 'pauseplay"><a></a></div>');a.controlsContainer ? (a.controlsContainer.append(b), a.pausePlay = d("." + e + "pauseplay a", a.controlsContainer)) : (a.append(b), a.pausePlay = d("." + e + "pauseplay a", a));f.pausePlay.update(c.slideshow ? e + "pause" : e + "play");a.pausePlay.bind(u, function (b) {
            b.preventDefault();d(this).hasClass(e + "pause") ? (a.manualPause = !0, a.manualPlay = !1, a.pause()) : (a.manualPause = !1, a.manualPlay = !0, a.play());
          });q && a.pausePlay.bind("click touchstart", function (a) {
            a.preventDefault();
          });
        }, update: function update(b) {
          "play" === b ? a.pausePlay.removeClass(e + "pause").addClass(e + "play").text(c.playText) : a.pausePlay.removeClass(e + "play").addClass(e + "pause").text(c.pauseText);
        } }, touch: function touch() {
        function b(b) {
          k = m ? d - b.touches[0].pageY : d - b.touches[0].pageX;q = m ? Math.abs(k) < Math.abs(b.touches[0].pageX - e) : Math.abs(k) < Math.abs(b.touches[0].pageY - e);if (!q || 500 < Number(new Date()) - l) b.preventDefault(), !s && a.transitions && (c.animationLoop || (k /= 0 === a.currentSlide && 0 > k || a.currentSlide === a.last && 0 < k ? Math.abs(k) / r + 2 : 1), a.setProps(f + k, "setTouch"));
        }function g() {
          j.removeEventListener("touchmove", b, !1);if (a.animatingTo === a.currentSlide && !q && null !== k) {
            var h = n ? -k : k,
                m = 0 < h ? a.getTarget("next") : a.getTarget("prev");a.canAdvance(m) && (550 > Number(new Date()) - l && 50 < Math.abs(h) || Math.abs(h) > r / 2) ? a.flexAnimate(m, c.pauseOnAction) : s || a.flexAnimate(a.currentSlide, c.pauseOnAction, !0);
          }j.removeEventListener("touchend", g, !1);f = k = e = d = null;
        }var d,
            e,
            f,
            r,
            k,
            l,
            q = !1;j.addEventListener("touchstart", function (k) {
          a.animating ? k.preventDefault() : 1 === k.touches.length && (a.pause(), r = m ? a.h : a.w, l = Number(new Date()), f = h && n && a.animatingTo === a.last ? 0 : h && n ? a.limit - (a.itemW + c.itemMargin) * a.move * a.animatingTo : h && a.currentSlide === a.last ? a.limit : h ? (a.itemW + c.itemMargin) * a.move * a.currentSlide : n ? (a.last - a.currentSlide + a.cloneOffset) * r : (a.currentSlide + a.cloneOffset) * r, d = m ? k.touches[0].pageY : k.touches[0].pageX, e = m ? k.touches[0].pageX : k.touches[0].pageY, j.addEventListener("touchmove", b, !1), j.addEventListener("touchend", g, !1));
        }, !1);
      }, resize: function resize() {
        !a.animating && a.is(":visible") && (h || a.doMath(), s ? f.smoothHeight() : h ? (a.slides.width(a.computedW), a.update(a.pagingCount), a.setProps()) : m ? (a.viewport.height(a.h), a.setProps(a.h, "setTotal")) : (c.smoothHeight && f.smoothHeight(), a.newSlides.width(a.computedW), a.setProps(a.computedW, "setTotal")));
      }, smoothHeight: function smoothHeight(b) {
        if (!m || s) {
          var c = s ? a : a.viewport;b ? c.animate({ height: a.slides.eq(a.animatingTo).height() }, b) : c.height(a.slides.eq(a.animatingTo).height());
        }
      }, sync: function sync(b) {
        var g = d(c.sync).data("flexslider"),
            e = a.animatingTo;switch (b) {case "animate":
            g.flexAnimate(e, c.pauseOnAction, !1, !0);break;case "play":
            !g.playing && !g.asNav && g.play();break;case "pause":
            g.pause();}
      } };a.flexAnimate = function (b, g, p, j, l) {
      t && 1 === a.pagingCount && (a.direction = a.currentItem < b ? "next" : "prev");if (!a.animating && (a.canAdvance(b, l) || p) && a.is(":visible")) {
        if (t && j) if (p = d(c.asNavFor).data("flexslider"), a.atEnd = 0 === b || b === a.count - 1, p.flexAnimate(b, !0, !1, !0, l), a.direction = a.currentItem < b ? "next" : "prev", p.direction = a.direction, Math.ceil((b + 1) / a.visible) - 1 !== a.currentSlide && 0 !== b) a.currentItem = b, a.slides.removeClass(e + "active-slide").eq(b).addClass(e + "active-slide"), b = Math.floor(b / a.visible);else return a.currentItem = b, a.slides.removeClass(e + "active-slide").eq(b).addClass(e + "active-slide"), !1;a.animating = !0;a.animatingTo = b;c.before(a);g && a.pause();a.syncExists && !l && f.sync("animate");c.controlNav && f.controlNav.active();h || a.slides.removeClass(e + "active-slide").eq(b).addClass(e + "active-slide");a.atEnd = 0 === b || b === a.last;c.directionNav && f.directionNav.update();b === a.last && (c.end(a), c.animationLoop || a.pause());if (s) q ? (a.slides.eq(a.currentSlide).css({ opacity: 0,
          zIndex: 1 }), a.slides.eq(b).css({ opacity: 1, zIndex: 2 }), a.slides.unbind("webkitTransitionEnd transitionend"), a.slides.eq(a.currentSlide).bind("webkitTransitionEnd transitionend", function () {
          c.after(a);
        }), a.animating = !1, a.currentSlide = a.animatingTo) : (a.slides.eq(a.currentSlide).fadeOut(c.animationSpeed, c.easing), a.slides.eq(b).fadeIn(c.animationSpeed, c.easing, a.wrapup));else {
          var r = m ? a.slides.filter(":first").height() : a.computedW;h ? (b = c.itemWidth > a.w ? 2 * c.itemMargin : c.itemMargin, b = (a.itemW + b) * a.move * a.animatingTo, b = b > a.limit && 1 !== a.visible ? a.limit : b) : b = 0 === a.currentSlide && b === a.count - 1 && c.animationLoop && "next" !== a.direction ? n ? (a.count + a.cloneOffset) * r : 0 : a.currentSlide === a.last && 0 === b && c.animationLoop && "prev" !== a.direction ? n ? 0 : (a.count + 1) * r : n ? (a.count - 1 - b + a.cloneOffset) * r : (b + a.cloneOffset) * r;a.setProps(b, "", c.animationSpeed);if (a.transitions) {
            if (!c.animationLoop || !a.atEnd) a.animating = !1, a.currentSlide = a.animatingTo;a.container.unbind("webkitTransitionEnd transitionend");a.container.bind("webkitTransitionEnd transitionend", function () {
              a.wrapup(r);
            });
          } else a.container.animate(a.args, c.animationSpeed, c.easing, function () {
            a.wrapup(r);
          });
        }c.smoothHeight && f.smoothHeight(c.animationSpeed);
      }
    };a.wrapup = function (b) {
      !s && !h && (0 === a.currentSlide && a.animatingTo === a.last && c.animationLoop ? a.setProps(b, "jumpEnd") : a.currentSlide === a.last && 0 === a.animatingTo && c.animationLoop && a.setProps(b, "jumpStart"));a.animating = !1;a.currentSlide = a.animatingTo;c.after(a);
    };a.animateSlides = function () {
      a.animating || a.flexAnimate(a.getTarget("next"));
    };a.pause = function () {
      clearInterval(a.animatedSlides);a.playing = !1;c.pausePlay && f.pausePlay.update("play");a.syncExists && f.sync("pause");
    };a.play = function () {
      a.animatedSlides = setInterval(a.animateSlides, c.slideshowSpeed);a.playing = !0;c.pausePlay && f.pausePlay.update("pause");a.syncExists && f.sync("play");
    };a.canAdvance = function (b, g) {
      var d = t ? a.pagingCount - 1 : a.last;return g ? !0 : t && a.currentItem === a.count - 1 && 0 === b && "prev" === a.direction ? !0 : t && 0 === a.currentItem && b === a.pagingCount - 1 && "next" !== a.direction ? !1 : b === a.currentSlide && !t ? !1 : c.animationLoop ? !0 : a.atEnd && 0 === a.currentSlide && b === d && "next" !== a.direction ? !1 : a.atEnd && a.currentSlide === d && 0 === b && "next" === a.direction ? !1 : !0;
    };a.getTarget = function (b) {
      a.direction = b;return "next" === b ? a.currentSlide === a.last ? 0 : a.currentSlide + 1 : 0 === a.currentSlide ? a.last : a.currentSlide - 1;
    };a.setProps = function (b, g, d) {
      var e,
          f = b ? b : (a.itemW + c.itemMargin) * a.move * a.animatingTo;e = -1 * function () {
        if (h) return "setTouch" === g ? b : n && a.animatingTo === a.last ? 0 : n ? a.limit - (a.itemW + c.itemMargin) * a.move * a.animatingTo : a.animatingTo === a.last ? a.limit : f;switch (g) {case "setTotal":
            return n ? (a.count - 1 - a.currentSlide + a.cloneOffset) * b : (a.currentSlide + a.cloneOffset) * b;case "setTouch":
            return b;case "jumpEnd":
            return n ? b : a.count * b;case "jumpStart":
            return n ? a.count * b : b;default:
            return b;}
      }() + "px";a.transitions && (e = m ? "translate3d(0," + e + ",0)" : "translate3d(" + e + ",0,0)", d = void 0 !== d ? d / 1E3 + "s" : "0s", a.container.css("-" + a.pfx + "-transition-duration", d));a.args[a.prop] = e;(a.transitions || void 0 === d) && a.container.css(a.args);
    };a.setup = function (b) {
      if (s) a.slides.css({ width: "100%",
        "float": "left", marginRight: "-100%", position: "relative" }), "init" === b && (q ? a.slides.css({ opacity: 0, display: "block", webkitTransition: "opacity " + c.animationSpeed / 1E3 + "s ease", zIndex: 1 }).eq(a.currentSlide).css({ opacity: 1, zIndex: 2 }) : a.slides.eq(a.currentSlide).fadeIn(c.animationSpeed, c.easing)), c.smoothHeight && f.smoothHeight();else {
        var g, p;"init" === b && (a.viewport = d('<div class="' + e + 'viewport"></div>').css({ overflow: "hidden", position: "relative" }).appendTo(a).append(a.container), a.cloneCount = 0, a.cloneOffset = 0, n && (p = d.makeArray(a.slides).reverse(), a.slides = d(p), a.container.empty().append(a.slides)));c.animationLoop && !h && (a.cloneCount = 2, a.cloneOffset = 1, "init" !== b && a.container.find(".clone").remove(), a.container.append(a.slides.first().clone().addClass("clone")).prepend(a.slides.last().clone().addClass("clone")));a.newSlides = d(c.selector, a);g = n ? a.count - 1 - a.currentSlide + a.cloneOffset : a.currentSlide + a.cloneOffset;m && !h ? (a.container.height(200 * (a.count + a.cloneCount) + "%").css("position", "absolute").width("100%"), setTimeout(function () {
          a.newSlides.css({ display: "block" });a.doMath();a.viewport.height(a.h);a.setProps(g * a.h, "init");
        }, "init" === b ? 100 : 0)) : (a.container.width(200 * (a.count + a.cloneCount) + "%"), a.setProps(g * a.computedW, "init"), setTimeout(function () {
          a.doMath();a.newSlides.css({ width: a.computedW, "float": "left", display: "block" });c.smoothHeight && f.smoothHeight();
        }, "init" === b ? 100 : 0));
      }h || a.slides.removeClass(e + "active-slide").eq(a.currentSlide).addClass(e + "active-slide");
    };a.doMath = function () {
      var b = a.slides.first(),
          d = c.itemMargin,
          e = c.minItems,
          f = c.maxItems;a.w = a.width();a.h = b.height();a.boxPadding = b.outerWidth() - b.width();h ? (a.itemT = c.itemWidth + d, a.minW = e ? e * a.itemT : a.w, a.maxW = f ? f * a.itemT : a.w, a.itemW = a.minW > a.w ? (a.w - d * e) / e : a.maxW < a.w ? (a.w - d * f) / f : c.itemWidth > a.w ? a.w : c.itemWidth, a.visible = Math.floor(a.w / (a.itemW + d)), a.move = 0 < c.move && c.move < a.visible ? c.move : a.visible, a.pagingCount = Math.ceil((a.count - a.visible) / a.move + 1), a.last = a.pagingCount - 1, a.limit = 1 === a.pagingCount ? 0 : c.itemWidth > a.w ? (a.itemW + 2 * d) * a.count - a.w - d : (a.itemW + d) * a.count - a.w - d) : (a.itemW = a.w, a.pagingCount = a.count, a.last = a.count - 1);a.computedW = a.itemW - a.boxPadding;
    };a.update = function (b, d) {
      a.doMath();h || (b < a.currentSlide ? a.currentSlide += 1 : b <= a.currentSlide && 0 !== b && (a.currentSlide -= 1), a.animatingTo = a.currentSlide);if (c.controlNav && !a.manualControls) if ("add" === d && !h || a.pagingCount > a.controlNav.length) f.controlNav.update("add");else if ("remove" === d && !h || a.pagingCount < a.controlNav.length) h && a.currentSlide > a.last && (a.currentSlide -= 1, a.animatingTo -= 1), f.controlNav.update("remove", a.last);c.directionNav && f.directionNav.update();
    };a.addSlide = function (b, e) {
      var f = d(b);a.count += 1;a.last = a.count - 1;m && n ? void 0 !== e ? a.slides.eq(a.count - e).after(f) : a.container.prepend(f) : void 0 !== e ? a.slides.eq(e).before(f) : a.container.append(f);a.update(e, "add");a.slides = d(c.selector + ":not(.clone)", a);a.setup();c.added(a);
    };a.removeSlide = function (b) {
      var e = isNaN(b) ? a.slides.index(d(b)) : b;a.count -= 1;a.last = a.count - 1;isNaN(b) ? d(b, a.slides).remove() : m && n ? a.slides.eq(a.last).remove() : a.slides.eq(b).remove();a.doMath();a.update(e, "remove");a.slides = d(c.selector + ":not(.clone)", a);a.setup();c.removed(a);
    };f.init();
  };d.flexslider.defaults = { namespace: "flex-", selector: ".slides > li", animation: "fade", easing: "swing", direction: "horizontal", reverse: !1, animationLoop: !0, smoothHeight: !1, startAt: 0, slideshow: !0, slideshowSpeed: 7E3, animationSpeed: 600, initDelay: 0, randomize: !1, pauseOnAction: !0, pauseOnHover: !1, useCSS: !0, touch: !0, video: !1, controlNav: !0, directionNav: !0, prevText: "", nextText: "",
    keyboard: !0, multipleKeyboard: !1, mousewheel: !1, pausePlay: !1, pauseText: "Pause", playText: "Play", controlsContainer: "", manualControls: "", sync: "", asNavFor: "", itemWidth: 0, itemMargin: 0, minItems: 0, maxItems: 0, move: 0, start: function start() {}, before: function before() {}, after: function after() {}, end: function end() {}, added: function added() {}, removed: function removed() {} };d.fn.flexslider = function (j) {
    void 0 === j && (j = {});if ("object" === (typeof j === "undefined" ? "undefined" : _typeof(j))) return this.each(function () {
      var a = d(this),
          c = a.find(j.selector ? j.selector : ".slides > li");1 === c.length ? (c.fadeIn(400), j.start && j.start(a)) : void 0 == a.data("flexslider") && new d.flexslider(this, j);
    });var l = d(this).data("flexslider");switch (j) {case "play":
        l.play();break;case "pause":
        l.pause();break;case "next":
        l.flexAnimate(l.getTarget("next"), !0);break;case "prev":case "previous":
        l.flexAnimate(l.getTarget("prev"), !0);break;default:
        "number" === typeof j && l.flexAnimate(j, !0);}
  };
})(jQuery);

/***/ }),

/***/ 74:
/***/ (function(module, exports) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*!
 * Smooth Scroll - v1.4.13 - 2013-11-02
 * https://github.com/kswedberg/jquery-smooth-scroll
 * Copyright (c) 2013 Karl Swedberg
 * Licensed MIT (https://github.com/kswedberg/jquery-smooth-scroll/blob/master/LICENSE-MIT)
 */

(function ($) {
  var version = '1.4.13',
      optionOverrides = {},
      defaults = {
    exclude: [],
    excludeWithin: [],
    offset: 0,

    // one of 'top' or 'left'
    direction: 'top',

    // jQuery set of elements you wish to scroll (for $.smoothScroll).
    //  if null (default), $('html, body').firstScrollable() is used.
    scrollElement: null,

    // only use if you want to override default behavior
    scrollTarget: null,

    // fn(opts) function to be called before scrolling occurs.
    // `this` is the element(s) being scrolled
    beforeScroll: function beforeScroll() {},

    // fn(opts) function to be called after scrolling occurs.
    // `this` is the triggering element
    afterScroll: function afterScroll() {},
    easing: 'swing',
    speed: 400,

    // coefficient for "auto" speed
    autoCoefficent: 2,

    // $.fn.smoothScroll only: whether to prevent the default click action
    preventDefault: true
  },
      getScrollable = function getScrollable(opts) {
    var scrollable = [],
        scrolled = false,
        dir = opts.dir && opts.dir == 'left' ? 'scrollLeft' : 'scrollTop';

    this.each(function () {

      if (this == document || this == window) {
        return;
      }
      var el = $(this);
      if (el[dir]() > 0) {
        scrollable.push(this);
      } else {
        // if scroll(Top|Left) === 0, nudge the element 1px and see if it moves
        el[dir](1);
        scrolled = el[dir]() > 0;
        if (scrolled) {
          scrollable.push(this);
        }
        // then put it back, of course
        el[dir](0);
      }
    });

    // If no scrollable elements, fall back to <body>,
    // if it's in the jQuery collection
    // (doing this because Safari sets scrollTop async,
    // so can't set it to 1 and immediately get the value.)
    if (!scrollable.length) {
      this.each(function (index) {
        if (this.nodeName === 'BODY') {
          scrollable = [this];
        }
      });
    }

    // Use the first scrollable element if we're calling firstScrollable()
    if (opts.el === 'first' && scrollable.length > 1) {
      scrollable = [scrollable[0]];
    }

    return scrollable;
  },
      isTouch = 'ontouchend' in document;

  $.fn.extend({
    scrollable: function scrollable(dir) {
      var scrl = getScrollable.call(this, { dir: dir });
      return this.pushStack(scrl);
    },
    firstScrollable: function firstScrollable(dir) {
      var scrl = getScrollable.call(this, { el: 'first', dir: dir });
      return this.pushStack(scrl);
    },

    smoothScroll: function smoothScroll(options, extra) {
      options = options || {};

      if (options === 'options') {
        if (!extra) {
          return this.first().data('ssOpts');
        }
        return this.each(function () {
          var $this = $(this),
              opts = $.extend($this.data('ssOpts') || {}, extra);

          $(this).data('ssOpts', opts);
        });
      }

      var opts = $.extend({}, $.fn.smoothScroll.defaults, options),
          locationPath = $.smoothScroll.filterPath(location.pathname);

      this.unbind('click.smoothscroll').bind('click.smoothscroll', function (event) {
        var link = this,
            $link = $(this),
            thisOpts = $.extend({}, opts, $link.data('ssOpts') || {}),
            exclude = opts.exclude,
            excludeWithin = thisOpts.excludeWithin,
            elCounter = 0,
            ewlCounter = 0,
            include = true,
            clickOpts = {},
            hostMatch = location.hostname === link.hostname || !link.hostname,
            pathMatch = thisOpts.scrollTarget || ($.smoothScroll.filterPath(link.pathname) || locationPath) === locationPath,
            thisHash = escapeSelector(link.hash);

        if (!thisOpts.scrollTarget && (!hostMatch || !pathMatch || !thisHash)) {
          include = false;
        } else {
          while (include && elCounter < exclude.length) {
            if ($link.is(escapeSelector(exclude[elCounter++]))) {
              include = false;
            }
          }
          while (include && ewlCounter < excludeWithin.length) {
            if ($link.closest(excludeWithin[ewlCounter++]).length) {
              include = false;
            }
          }
        }

        if (include) {

          if (thisOpts.preventDefault) {
            event.preventDefault();
          }

          $.extend(clickOpts, thisOpts, {
            scrollTarget: thisOpts.scrollTarget || thisHash,
            link: link
          });
          $.smoothScroll(clickOpts);
        }
      });

      return this;
    }
  });

  $.smoothScroll = function (options, px) {
    if (options === 'options' && (typeof px === 'undefined' ? 'undefined' : _typeof(px)) === 'object') {
      return $.extend(optionOverrides, px);
    }
    var opts,
        $scroller,
        scrollTargetOffset,
        speed,
        scrollerOffset = 0,
        offPos = 'offset',
        scrollDir = 'scrollTop',
        aniProps = {},
        aniOpts = {},
        scrollprops = [];

    if (typeof options === 'number') {
      opts = $.extend({ link: null }, $.fn.smoothScroll.defaults, optionOverrides);
      scrollTargetOffset = options;
    } else {
      opts = $.extend({ link: null }, $.fn.smoothScroll.defaults, options || {}, optionOverrides);
      if (opts.scrollElement) {
        offPos = 'position';
        if (opts.scrollElement.css('position') == 'static') {
          opts.scrollElement.css('position', 'relative');
        }
      }
    }

    scrollDir = opts.direction == 'left' ? 'scrollLeft' : scrollDir;

    if (opts.scrollElement) {
      $scroller = opts.scrollElement;
      if (!/^(?:HTML|BODY)$/.test($scroller[0].nodeName)) {
        scrollerOffset = $scroller[scrollDir]();
      }
    } else {
      $scroller = $('html, body').firstScrollable(opts.direction);
    }

    // beforeScroll callback function must fire before calculating offset
    opts.beforeScroll.call($scroller, opts);

    scrollTargetOffset = typeof options === 'number' ? options : px || $(opts.scrollTarget)[offPos]() && $(opts.scrollTarget)[offPos]()[opts.direction] || 0;

    aniProps[scrollDir] = scrollTargetOffset + scrollerOffset + opts.offset;
    speed = opts.speed;

    // automatically calculate the speed of the scroll based on distance / coefficient
    if (speed === 'auto') {

      // if aniProps[scrollDir] == 0 then we'll use scrollTop() value instead
      speed = aniProps[scrollDir] || $scroller.scrollTop();

      // divide the speed by the coefficient
      speed = speed / opts.autoCoefficent;
    }

    aniOpts = {
      duration: speed,
      easing: opts.easing,
      complete: function complete() {
        opts.afterScroll.call(opts.link, opts);
      }
    };

    if (opts.step) {
      aniOpts.step = opts.step;
    }

    if ($scroller.length) {
      $scroller.stop().animate(aniProps, aniOpts);
    } else {
      opts.afterScroll.call(opts.link, opts);
    }
  };

  $.smoothScroll.version = version;
  $.smoothScroll.filterPath = function (string) {
    return string.replace(/^\//, '').replace(/(?:index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '');
  };

  // default options
  $.fn.smoothScroll.defaults = defaults;

  function escapeSelector(str) {
    return str.replace(/(:|\.)/g, '\\$1');
  }
})(jQuery);

/***/ }),

/***/ 75:
/***/ (function(module, exports) {

/*
 * jQuery.appear
 * http://code.google.com/p/jquery-appear/
 *
 * Copyright (c) 2009 Michael Hixson
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
*/
(function ($) {
  $.fn.appear = function (f, o) {
    var s = $.extend({ one: true }, o);return this.each(function () {
      var t = $(this);t.appeared = false;if (!f) {
        t.trigger('appear', s.data);return;
      }var w = $(window);var c = function c() {
        if (!t.is(':visible')) {
          t.appeared = false;return;
        }var a = w.scrollLeft();var b = w.scrollTop();var o = t.offset();var x = o.left;var y = o.top;if (y + t.height() >= b && y <= b + w.height() && x + t.width() >= a && x <= a + w.width()) {
          if (!t.appeared) t.trigger('appear', s.data);
        } else {
          t.appeared = false;
        }
      };var m = function m() {
        t.appeared = true;if (s.one) {
          w.unbind('scroll', c);var i = $.inArray(c, $.fn.appear.checks);if (i >= 0) $.fn.appear.checks.splice(i, 1);
        }f.apply(this, arguments);
      };if (s.one) t.one('appear', s.data, m);else t.bind('appear', s.data, m);w.scroll(c);$.fn.appear.checks.push(c);c();
    });
  };$.extend($.fn.appear, { checks: [], timeout: null, checkAll: function checkAll() {
      var l = $.fn.appear.checks.length;if (l > 0) while (l--) {
        $.fn.appear.checks[l]();
      }
    }, run: function run() {
      if ($.fn.appear.timeout) clearTimeout($.fn.appear.timeout);$.fn.appear.timeout = setTimeout($.fn.appear.checkAll, 20);
    } });$.each(['append', 'prepend', 'after', 'before', 'attr', 'removeAttr', 'addClass', 'removeClass', 'toggleClass', 'remove', 'css', 'show', 'hide'], function (i, n) {
    var u = $.fn[n];if (u) {
      $.fn[n] = function () {
        var r = u.apply(this, arguments);$.fn.appear.run();return r;
      };
    }
  });
})(jQuery);

/***/ }),

/***/ 76:
/***/ (function(module, exports) {

!function (a, b, c, d) {
  function e(b, c) {
    this.settings = null, this.options = a.extend({}, e.Defaults, c), this.$element = a(b), this.drag = a.extend({}, m), this.state = a.extend({}, n), this.e = a.extend({}, o), this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._invalidated = {}, this._pipe = [], a.each(e.Plugins, a.proxy(function (a, b) {
      this._plugins[a[0].toLowerCase() + a.slice(1)] = new b(this);
    }, this)), a.each(e.Pipe, a.proxy(function (b, c) {
      this._pipe.push({ filter: c.filter, run: a.proxy(c.run, this) });
    }, this)), this.setup(), this.initialize();
  }function f(a) {
    if (a.touches !== d) return { x: a.touches[0].pageX, y: a.touches[0].pageY };if (a.touches === d) {
      if (a.pageX !== d) return { x: a.pageX, y: a.pageY };if (a.pageX === d) return { x: a.clientX, y: a.clientY };
    }
  }function g(a) {
    var b,
        d,
        e = c.createElement("div"),
        f = a;for (b in f) {
      if (d = f[b], "undefined" != typeof e.style[d]) return e = null, [d, b];
    }return [!1];
  }function h() {
    return g(["transition", "WebkitTransition", "MozTransition", "OTransition"])[1];
  }function i() {
    return g(["transform", "WebkitTransform", "MozTransform", "OTransform", "msTransform"])[0];
  }function j() {
    return g(["perspective", "webkitPerspective", "MozPerspective", "OPerspective", "MsPerspective"])[0];
  }function k() {
    return "ontouchstart" in b || !!navigator.msMaxTouchPoints;
  }function l() {
    return b.navigator.msPointerEnabled;
  }var m, n, o;m = { start: 0, startX: 0, startY: 0, current: 0, currentX: 0, currentY: 0, offsetX: 0, offsetY: 0, distance: null, startTime: 0, endTime: 0, updatedX: 0, targetEl: null }, n = { isTouch: !1, isScrolling: !1, isSwiping: !1, direction: !1, inMotion: !1 }, o = { _onDragStart: null, _onDragMove: null, _onDragEnd: null, _transitionEnd: null, _resizer: null, _responsiveCall: null, _goToLoop: null, _checkVisibile: null }, e.Defaults = { items: 3, loop: !1, center: !1, mouseDrag: !0, touchDrag: !0, pullDrag: !0, freeDrag: !1, margin: 0, stagePadding: 0, merge: !1, mergeFit: !0, autoWidth: !1, startPosition: 0, rtl: !1, smartSpeed: 250, fluidSpeed: !1, dragEndSpeed: !1, responsive: {}, responsiveRefreshRate: 200, responsiveBaseElement: b, responsiveClass: !1, fallbackEasing: "swing", info: !1, nestedItemSelector: !1, itemElement: "div", stageElement: "div", themeClass: "owl-theme", baseClass: "owl-carousel", itemClass: "owl-item", centerClass: "center", activeClass: "active" }, e.Width = { Default: "default", Inner: "inner", Outer: "outer" }, e.Plugins = {}, e.Pipe = [{ filter: ["width", "items", "settings"], run: function run(a) {
      a.current = this._items && this._items[this.relative(this._current)];
    } }, { filter: ["items", "settings"], run: function run() {
      var a = this._clones,
          b = this.$stage.children(".cloned");(b.length !== a.length || !this.settings.loop && a.length > 0) && (this.$stage.children(".cloned").remove(), this._clones = []);
    } }, { filter: ["items", "settings"], run: function run() {
      var a,
          b,
          c = this._clones,
          d = this._items,
          e = this.settings.loop ? c.length - Math.max(2 * this.settings.items, 4) : 0;for (a = 0, b = Math.abs(e / 2); b > a; a++) {
        e > 0 ? (this.$stage.children().eq(d.length + c.length - 1).remove(), c.pop(), this.$stage.children().eq(0).remove(), c.pop()) : (c.push(c.length / 2), this.$stage.append(d[c[c.length - 1]].clone().addClass("cloned")), c.push(d.length - 1 - (c.length - 1) / 2), this.$stage.prepend(d[c[c.length - 1]].clone().addClass("cloned")));
      }
    } }, { filter: ["width", "items", "settings"], run: function run() {
      var a,
          b,
          c,
          d = this.settings.rtl ? 1 : -1,
          e = (this.width() / this.settings.items).toFixed(3),
          f = 0;for (this._coordinates = [], b = 0, c = this._clones.length + this._items.length; c > b; b++) {
        a = this._mergers[this.relative(b)], a = this.settings.mergeFit && Math.min(a, this.settings.items) || a, f += (this.settings.autoWidth ? this._items[this.relative(b)].width() + this.settings.margin : e * a) * d, this._coordinates.push(f);
      }
    } }, { filter: ["width", "items", "settings"], run: function run() {
      var b,
          c,
          d = (this.width() / this.settings.items).toFixed(3),
          e = { width: Math.abs(this._coordinates[this._coordinates.length - 1]) + 2 * this.settings.stagePadding, "padding-left": this.settings.stagePadding || "", "padding-right": this.settings.stagePadding || "" };if (this.$stage.css(e), e = { width: this.settings.autoWidth ? "auto" : d - this.settings.margin }, e[this.settings.rtl ? "margin-left" : "margin-right"] = this.settings.margin, !this.settings.autoWidth && a.grep(this._mergers, function (a) {
        return a > 1;
      }).length > 0) for (b = 0, c = this._coordinates.length; c > b; b++) {
        e.width = Math.abs(this._coordinates[b]) - Math.abs(this._coordinates[b - 1] || 0) - this.settings.margin, this.$stage.children().eq(b).css(e);
      } else this.$stage.children().css(e);
    } }, { filter: ["width", "items", "settings"], run: function run(a) {
      a.current && this.reset(this.$stage.children().index(a.current));
    } }, { filter: ["position"], run: function run() {
      this.animate(this.coordinates(this._current));
    } }, { filter: ["width", "position", "items", "settings"], run: function run() {
      var a,
          b,
          c,
          d,
          e = this.settings.rtl ? 1 : -1,
          f = 2 * this.settings.stagePadding,
          g = this.coordinates(this.current()) + f,
          h = g + this.width() * e,
          i = [];for (c = 0, d = this._coordinates.length; d > c; c++) {
        a = this._coordinates[c - 1] || 0, b = Math.abs(this._coordinates[c]) + f * e, (this.op(a, "<=", g) && this.op(a, ">", h) || this.op(b, "<", g) && this.op(b, ">", h)) && i.push(c);
      }this.$stage.children("." + this.settings.activeClass).removeClass(this.settings.activeClass), this.$stage.children(":eq(" + i.join("), :eq(") + ")").addClass(this.settings.activeClass), this.settings.center && (this.$stage.children("." + this.settings.centerClass).removeClass(this.settings.centerClass), this.$stage.children().eq(this.current()).addClass(this.settings.centerClass));
    } }], e.prototype.initialize = function () {
    if (this.trigger("initialize"), this.$element.addClass(this.settings.baseClass).addClass(this.settings.themeClass).toggleClass("owl-rtl", this.settings.rtl), this.browserSupport(), this.settings.autoWidth && this.state.imagesLoaded !== !0) {
      var b, c, e;if (b = this.$element.find("img"), c = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : d, e = this.$element.children(c).width(), b.length && 0 >= e) return this.preloadAutoWidthImages(b), !1;
    }this.$element.addClass("owl-loading"), this.$stage = a("<" + this.settings.stageElement + ' class="owl-stage"/>').wrap('<div class="owl-stage-outer">'), this.$element.append(this.$stage.parent()), this.replace(this.$element.children().not(this.$stage.parent())), this._width = this.$element.width(), this.refresh(), this.$element.removeClass("owl-loading").addClass("owl-loaded"), this.eventsCall(), this.internalEvents(), this.addTriggerableEvents(), this.trigger("initialized");
  }, e.prototype.setup = function () {
    var b = this.viewport(),
        c = this.options.responsive,
        d = -1,
        e = null;c ? (a.each(c, function (a) {
      b >= a && a > d && (d = Number(a));
    }), e = a.extend({}, this.options, c[d]), delete e.responsive, e.responsiveClass && this.$element.attr("class", function (a, b) {
      return b.replace(/\b owl-responsive-\S+/g, "");
    }).addClass("owl-responsive-" + d)) : e = a.extend({}, this.options), (null === this.settings || this._breakpoint !== d) && (this.trigger("change", { property: { name: "settings", value: e } }), this._breakpoint = d, this.settings = e, this.invalidate("settings"), this.trigger("changed", { property: { name: "settings", value: this.settings } }));
  }, e.prototype.optionsLogic = function () {
    this.$element.toggleClass("owl-center", this.settings.center), this.settings.loop && this._items.length < this.settings.items && (this.settings.loop = !1), this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1);
  }, e.prototype.prepare = function (b) {
    var c = this.trigger("prepare", { content: b });return c.data || (c.data = a("<" + this.settings.itemElement + "/>").addClass(this.settings.itemClass).append(b)), this.trigger("prepared", { content: c.data }), c.data;
  }, e.prototype.update = function () {
    for (var b = 0, c = this._pipe.length, d = a.proxy(function (a) {
      return this[a];
    }, this._invalidated), e = {}; c > b;) {
      (this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) && this._pipe[b].run(e), b++;
    }this._invalidated = {};
  }, e.prototype.width = function (a) {
    switch (a = a || e.Width.Default) {case e.Width.Inner:case e.Width.Outer:
        return this._width;default:
        return this._width - 2 * this.settings.stagePadding + this.settings.margin;}
  }, e.prototype.refresh = function () {
    if (0 === this._items.length) return !1;new Date().getTime();this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$stage.addClass("owl-refresh"), this.update(), this.$stage.removeClass("owl-refresh"), this.state.orientation = b.orientation, this.watchVisibility(), this.trigger("refreshed");
  }, e.prototype.eventsCall = function () {
    this.e._onDragStart = a.proxy(function (a) {
      this.onDragStart(a);
    }, this), this.e._onDragMove = a.proxy(function (a) {
      this.onDragMove(a);
    }, this), this.e._onDragEnd = a.proxy(function (a) {
      this.onDragEnd(a);
    }, this), this.e._onResize = a.proxy(function (a) {
      this.onResize(a);
    }, this), this.e._transitionEnd = a.proxy(function (a) {
      this.transitionEnd(a);
    }, this), this.e._preventClick = a.proxy(function (a) {
      this.preventClick(a);
    }, this);
  }, e.prototype.onThrottledResize = function () {
    b.clearTimeout(this.resizeTimer), this.resizeTimer = b.setTimeout(this.e._onResize, this.settings.responsiveRefreshRate);
  }, e.prototype.onResize = function () {
    return this._items.length ? this._width === this.$element.width() ? !1 : this.trigger("resize").isDefaultPrevented() ? !1 : (this._width = this.$element.width(), this.invalidate("width"), this.refresh(), void this.trigger("resized")) : !1;
  }, e.prototype.eventsRouter = function (a) {
    var b = a.type;"mousedown" === b || "touchstart" === b ? this.onDragStart(a) : "mousemove" === b || "touchmove" === b ? this.onDragMove(a) : "mouseup" === b || "touchend" === b ? this.onDragEnd(a) : "touchcancel" === b && this.onDragEnd(a);
  }, e.prototype.internalEvents = function () {
    var c = (k(), l());this.settings.mouseDrag ? (this.$stage.on("mousedown", a.proxy(function (a) {
      this.eventsRouter(a);
    }, this)), this.$stage.on("dragstart", function () {
      return !1;
    }), this.$stage.get(0).onselectstart = function () {
      return !1;
    }) : this.$element.addClass("owl-text-select-on"), this.settings.touchDrag && !c && this.$stage.on("touchstart touchcancel", a.proxy(function (a) {
      this.eventsRouter(a);
    }, this)), this.transitionEndVendor && this.on(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd, !1), this.settings.responsive !== !1 && this.on(b, "resize", a.proxy(this.onThrottledResize, this));
  }, e.prototype.onDragStart = function (d) {
    var e, g, h, i;if (e = d.originalEvent || d || b.event, 3 === e.which || this.state.isTouch) return !1;if ("mousedown" === e.type && this.$stage.addClass("owl-grab"), this.trigger("drag"), this.drag.startTime = new Date().getTime(), this.speed(0), this.state.isTouch = !0, this.state.isScrolling = !1, this.state.isSwiping = !1, this.drag.distance = 0, g = f(e).x, h = f(e).y, this.drag.offsetX = this.$stage.position().left, this.drag.offsetY = this.$stage.position().top, this.settings.rtl && (this.drag.offsetX = this.$stage.position().left + this.$stage.width() - this.width() + this.settings.margin), this.state.inMotion && this.support3d) i = this.getTransformProperty(), this.drag.offsetX = i, this.animate(i), this.state.inMotion = !0;else if (this.state.inMotion && !this.support3d) return this.state.inMotion = !1, !1;this.drag.startX = g - this.drag.offsetX, this.drag.startY = h - this.drag.offsetY, this.drag.start = g - this.drag.startX, this.drag.targetEl = e.target || e.srcElement, this.drag.updatedX = this.drag.start, ("IMG" === this.drag.targetEl.tagName || "A" === this.drag.targetEl.tagName) && (this.drag.targetEl.draggable = !1), a(c).on("mousemove.owl.dragEvents mouseup.owl.dragEvents touchmove.owl.dragEvents touchend.owl.dragEvents", a.proxy(function (a) {
      this.eventsRouter(a);
    }, this));
  }, e.prototype.onDragMove = function (a) {
    var c, e, g, h, i, j;this.state.isTouch && (this.state.isScrolling || (c = a.originalEvent || a || b.event, e = f(c).x, g = f(c).y, this.drag.currentX = e - this.drag.startX, this.drag.currentY = g - this.drag.startY, this.drag.distance = this.drag.currentX - this.drag.offsetX, this.drag.distance < 0 ? this.state.direction = this.settings.rtl ? "right" : "left" : this.drag.distance > 0 && (this.state.direction = this.settings.rtl ? "left" : "right"), this.settings.loop ? this.op(this.drag.currentX, ">", this.coordinates(this.minimum())) && "right" === this.state.direction ? this.drag.currentX -= (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length) : this.op(this.drag.currentX, "<", this.coordinates(this.maximum())) && "left" === this.state.direction && (this.drag.currentX += (this.settings.center && this.coordinates(0)) - this.coordinates(this._items.length)) : (h = this.coordinates(this.settings.rtl ? this.maximum() : this.minimum()), i = this.coordinates(this.settings.rtl ? this.minimum() : this.maximum()), j = this.settings.pullDrag ? this.drag.distance / 5 : 0, this.drag.currentX = Math.max(Math.min(this.drag.currentX, h + j), i + j)), (this.drag.distance > 8 || this.drag.distance < -8) && (c.preventDefault !== d ? c.preventDefault() : c.returnValue = !1, this.state.isSwiping = !0), this.drag.updatedX = this.drag.currentX, (this.drag.currentY > 16 || this.drag.currentY < -16) && this.state.isSwiping === !1 && (this.state.isScrolling = !0, this.drag.updatedX = this.drag.start), this.animate(this.drag.updatedX)));
  }, e.prototype.onDragEnd = function (b) {
    var d, e, f;if (this.state.isTouch) {
      if ("mouseup" === b.type && this.$stage.removeClass("owl-grab"), this.trigger("dragged"), this.drag.targetEl.removeAttribute("draggable"), this.state.isTouch = !1, this.state.isScrolling = !1, this.state.isSwiping = !1, 0 === this.drag.distance && this.state.inMotion !== !0) return this.state.inMotion = !1, !1;this.drag.endTime = new Date().getTime(), d = this.drag.endTime - this.drag.startTime, e = Math.abs(this.drag.distance), (e > 3 || d > 300) && this.removeClick(this.drag.targetEl), f = this.closest(this.drag.updatedX), this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(f), this.invalidate("position"), this.update(), this.settings.pullDrag || this.drag.updatedX !== this.coordinates(f) || this.transitionEnd(), this.drag.distance = 0, a(c).off(".owl.dragEvents");
    }
  }, e.prototype.removeClick = function (c) {
    this.drag.targetEl = c, a(c).on("click.preventClick", this.e._preventClick), b.setTimeout(function () {
      a(c).off("click.preventClick");
    }, 300);
  }, e.prototype.preventClick = function (b) {
    b.preventDefault ? b.preventDefault() : b.returnValue = !1, b.stopPropagation && b.stopPropagation(), a(b.target).off("click.preventClick");
  }, e.prototype.getTransformProperty = function () {
    var a, c;return a = b.getComputedStyle(this.$stage.get(0), null).getPropertyValue(this.vendorName + "transform"), a = a.replace(/matrix(3d)?\(|\)/g, "").split(","), c = 16 === a.length, c !== !0 ? a[4] : a[12];
  }, e.prototype.closest = function (b) {
    var c = -1,
        d = 30,
        e = this.width(),
        f = this.coordinates();return this.settings.freeDrag || a.each(f, a.proxy(function (a, g) {
      return b > g - d && g + d > b ? c = a : this.op(b, "<", g) && this.op(b, ">", f[a + 1] || g - e) && (c = "left" === this.state.direction ? a + 1 : a), -1 === c;
    }, this)), this.settings.loop || (this.op(b, ">", f[this.minimum()]) ? c = b = this.minimum() : this.op(b, "<", f[this.maximum()]) && (c = b = this.maximum())), c;
  }, e.prototype.animate = function (b) {
    this.trigger("translate"), this.state.inMotion = this.speed() > 0, this.support3d ? this.$stage.css({ transform: "translate3d(" + b + "px,0px, 0px)", transition: this.speed() / 1e3 + "s" }) : this.state.isTouch ? this.$stage.css({ left: b + "px" }) : this.$stage.animate({ left: b }, this.speed() / 1e3, this.settings.fallbackEasing, a.proxy(function () {
      this.state.inMotion && this.transitionEnd();
    }, this));
  }, e.prototype.current = function (a) {
    if (a === d) return this._current;if (0 === this._items.length) return d;if (a = this.normalize(a), this._current !== a) {
      var b = this.trigger("change", { property: { name: "position", value: a } });b.data !== d && (a = this.normalize(b.data)), this._current = a, this.invalidate("position"), this.trigger("changed", { property: { name: "position", value: this._current } });
    }return this._current;
  }, e.prototype.invalidate = function (a) {
    this._invalidated[a] = !0;
  }, e.prototype.reset = function (a) {
    a = this.normalize(a), a !== d && (this._speed = 0, this._current = a, this.suppress(["translate", "translated"]), this.animate(this.coordinates(a)), this.release(["translate", "translated"]));
  }, e.prototype.normalize = function (b, c) {
    var e = c ? this._items.length : this._items.length + this._clones.length;return !a.isNumeric(b) || 1 > e ? d : b = this._clones.length ? (b % e + e) % e : Math.max(this.minimum(c), Math.min(this.maximum(c), b));
  }, e.prototype.relative = function (a) {
    return a = this.normalize(a), a -= this._clones.length / 2, this.normalize(a, !0);
  }, e.prototype.maximum = function (a) {
    var b,
        c,
        d,
        e = 0,
        f = this.settings;if (a) return this._items.length - 1;if (!f.loop && f.center) b = this._items.length - 1;else if (f.loop || f.center) {
      if (f.loop || f.center) b = this._items.length + f.items;else {
        if (!f.autoWidth && !f.merge) throw "Can not detect maximum absolute position.";for (revert = f.rtl ? 1 : -1, c = this.$stage.width() - this.$element.width(); (d = this.coordinates(e)) && !(d * revert >= c);) {
          b = ++e;
        }
      }
    } else b = this._items.length - f.items;return b;
  }, e.prototype.minimum = function (a) {
    return a ? 0 : this._clones.length / 2;
  }, e.prototype.items = function (a) {
    return a === d ? this._items.slice() : (a = this.normalize(a, !0), this._items[a]);
  }, e.prototype.mergers = function (a) {
    return a === d ? this._mergers.slice() : (a = this.normalize(a, !0), this._mergers[a]);
  }, e.prototype.clones = function (b) {
    var c = this._clones.length / 2,
        e = c + this._items.length,
        f = function f(a) {
      return a % 2 === 0 ? e + a / 2 : c - (a + 1) / 2;
    };return b === d ? a.map(this._clones, function (a, b) {
      return f(b);
    }) : a.map(this._clones, function (a, c) {
      return a === b ? f(c) : null;
    });
  }, e.prototype.speed = function (a) {
    return a !== d && (this._speed = a), this._speed;
  }, e.prototype.coordinates = function (b) {
    var c = null;return b === d ? a.map(this._coordinates, a.proxy(function (a, b) {
      return this.coordinates(b);
    }, this)) : (this.settings.center ? (c = this._coordinates[b], c += (this.width() - c + (this._coordinates[b - 1] || 0)) / 2 * (this.settings.rtl ? -1 : 1)) : c = this._coordinates[b - 1] || 0, c);
  }, e.prototype.duration = function (a, b, c) {
    return Math.min(Math.max(Math.abs(b - a), 1), 6) * Math.abs(c || this.settings.smartSpeed);
  }, e.prototype.to = function (c, d) {
    if (this.settings.loop) {
      var e = c - this.relative(this.current()),
          f = this.current(),
          g = this.current(),
          h = this.current() + e,
          i = 0 > g - h ? !0 : !1,
          j = this._clones.length + this._items.length;h < this.settings.items && i === !1 ? (f = g + this._items.length, this.reset(f)) : h >= j - this.settings.items && i === !0 && (f = g - this._items.length, this.reset(f)), b.clearTimeout(this.e._goToLoop), this.e._goToLoop = b.setTimeout(a.proxy(function () {
        this.speed(this.duration(this.current(), f + e, d)), this.current(f + e), this.update();
      }, this), 30);
    } else this.speed(this.duration(this.current(), c, d)), this.current(c), this.update();
  }, e.prototype.next = function (a) {
    a = a || !1, this.to(this.relative(this.current()) + 1, a);
  }, e.prototype.prev = function (a) {
    a = a || !1, this.to(this.relative(this.current()) - 1, a);
  }, e.prototype.transitionEnd = function (a) {
    return a !== d && (a.stopPropagation(), (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0)) ? !1 : (this.state.inMotion = !1, void this.trigger("translated"));
  }, e.prototype.viewport = function () {
    var d;if (this.options.responsiveBaseElement !== b) d = a(this.options.responsiveBaseElement).width();else if (b.innerWidth) d = b.innerWidth;else {
      if (!c.documentElement || !c.documentElement.clientWidth) throw "Can not detect viewport width.";d = c.documentElement.clientWidth;
    }return d;
  }, e.prototype.replace = function (b) {
    this.$stage.empty(), this._items = [], b && (b = b instanceof jQuery ? b : a(b)), this.settings.nestedItemSelector && (b = b.find("." + this.settings.nestedItemSelector)), b.filter(function () {
      return 1 === this.nodeType;
    }).each(a.proxy(function (a, b) {
      b = this.prepare(b), this.$stage.append(b), this._items.push(b), this._mergers.push(1 * b.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1);
    }, this)), this.reset(a.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items");
  }, e.prototype.add = function (a, b) {
    b = b === d ? this._items.length : this.normalize(b, !0), this.trigger("add", { content: a, position: b }), 0 === this._items.length || b === this._items.length ? (this.$stage.append(a), this._items.push(a), this._mergers.push(1 * a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1)) : (this._items[b].before(a), this._items.splice(b, 0, a), this._mergers.splice(b, 0, 1 * a.find("[data-merge]").andSelf("[data-merge]").attr("data-merge") || 1)), this.invalidate("items"), this.trigger("added", { content: a, position: b });
  }, e.prototype.remove = function (a) {
    a = this.normalize(a, !0), a !== d && (this.trigger("remove", { content: this._items[a], position: a }), this._items[a].remove(), this._items.splice(a, 1), this._mergers.splice(a, 1), this.invalidate("items"), this.trigger("removed", { content: null, position: a }));
  }, e.prototype.addTriggerableEvents = function () {
    var b = a.proxy(function (b, c) {
      return a.proxy(function (a) {
        a.relatedTarget !== this && (this.suppress([c]), b.apply(this, [].slice.call(arguments, 1)), this.release([c]));
      }, this);
    }, this);a.each({ next: this.next, prev: this.prev, to: this.to, destroy: this.destroy, refresh: this.refresh, replace: this.replace, add: this.add, remove: this.remove }, a.proxy(function (a, c) {
      this.$element.on(a + ".owl.carousel", b(c, a + ".owl.carousel"));
    }, this));
  }, e.prototype.watchVisibility = function () {
    function c(a) {
      return a.offsetWidth > 0 && a.offsetHeight > 0;
    }function d() {
      c(this.$element.get(0)) && (this.$element.removeClass("owl-hidden"), this.refresh(), b.clearInterval(this.e._checkVisibile));
    }c(this.$element.get(0)) || (this.$element.addClass("owl-hidden"), b.clearInterval(this.e._checkVisibile), this.e._checkVisibile = b.setInterval(a.proxy(d, this), 500));
  }, e.prototype.preloadAutoWidthImages = function (b) {
    var c, d, e, f;c = 0, d = this, b.each(function (g, h) {
      e = a(h), f = new Image(), f.onload = function () {
        c++, e.attr("src", f.src), e.css("opacity", 1), c >= b.length && (d.state.imagesLoaded = !0, d.initialize());
      }, f.src = e.attr("src") || e.attr("data-src") || e.attr("data-src-retina");
    });
  }, e.prototype.destroy = function () {
    this.$element.hasClass(this.settings.themeClass) && this.$element.removeClass(this.settings.themeClass), this.settings.responsive !== !1 && a(b).off("resize.owl.carousel"), this.transitionEndVendor && this.off(this.$stage.get(0), this.transitionEndVendor, this.e._transitionEnd);for (var d in this._plugins) {
      this._plugins[d].destroy();
    }(this.settings.mouseDrag || this.settings.touchDrag) && (this.$stage.off("mousedown touchstart touchcancel"), a(c).off(".owl.dragEvents"), this.$stage.get(0).onselectstart = function () {}, this.$stage.off("dragstart", function () {
      return !1;
    })), this.$element.off(".owl"), this.$stage.children(".cloned").remove(), this.e = null, this.$element.removeData("owlCarousel"), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$stage.unwrap();
  }, e.prototype.op = function (a, b, c) {
    var d = this.settings.rtl;switch (b) {case "<":
        return d ? a > c : c > a;case ">":
        return d ? c > a : a > c;case ">=":
        return d ? c >= a : a >= c;case "<=":
        return d ? a >= c : c >= a;}
  }, e.prototype.on = function (a, b, c, d) {
    a.addEventListener ? a.addEventListener(b, c, d) : a.attachEvent && a.attachEvent("on" + b, c);
  }, e.prototype.off = function (a, b, c, d) {
    a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c);
  }, e.prototype.trigger = function (b, c, d) {
    var e = { item: { count: this._items.length, index: this.current() } },
        f = a.camelCase(a.grep(["on", b, d], function (a) {
      return a;
    }).join("-").toLowerCase()),
        g = a.Event([b, "owl", d || "carousel"].join(".").toLowerCase(), a.extend({ relatedTarget: this }, e, c));return this._supress[b] || (a.each(this._plugins, function (a, b) {
      b.onTrigger && b.onTrigger(g);
    }), this.$element.trigger(g), this.settings && "function" == typeof this.settings[f] && this.settings[f].apply(this, g)), g;
  }, e.prototype.suppress = function (b) {
    a.each(b, a.proxy(function (a, b) {
      this._supress[b] = !0;
    }, this));
  }, e.prototype.release = function (b) {
    a.each(b, a.proxy(function (a, b) {
      delete this._supress[b];
    }, this));
  }, e.prototype.browserSupport = function () {
    if (this.support3d = j(), this.support3d) {
      this.transformVendor = i();var a = ["transitionend", "webkitTransitionEnd", "transitionend", "oTransitionEnd"];this.transitionEndVendor = a[h()], this.vendorName = this.transformVendor.replace(/Transform/i, ""), this.vendorName = "" !== this.vendorName ? "-" + this.vendorName.toLowerCase() + "-" : "";
    }this.state.orientation = b.orientation;
  }, a.fn.owlCarousel = function (b) {
    return this.each(function () {
      a(this).data("owlCarousel") || a(this).data("owlCarousel", new e(this, b));
    });
  }, a.fn.owlCarousel.Constructor = e;
}(window.Zepto || window.jQuery, window, document), function (a, b) {
  var c = function c(b) {
    this._core = b, this._loaded = [], this._handlers = { "initialized.owl.carousel change.owl.carousel": a.proxy(function (b) {
        if (b.namespace && this._core.settings && this._core.settings.lazyLoad && (b.property && "position" == b.property.name || "initialized" == b.type)) for (var c = this._core.settings, d = c.center && Math.ceil(c.items / 2) || c.items, e = c.center && -1 * d || 0, f = (b.property && b.property.value || this._core.current()) + e, g = this._core.clones().length, h = a.proxy(function (a, b) {
          this.load(b);
        }, this); e++ < d;) {
          this.load(g / 2 + this._core.relative(f)), g && a.each(this._core.clones(this._core.relative(f++)), h);
        }
      }, this) }, this._core.options = a.extend({}, c.Defaults, this._core.options), this._core.$element.on(this._handlers);
  };c.Defaults = { lazyLoad: !1 }, c.prototype.load = function (c) {
    var d = this._core.$stage.children().eq(c),
        e = d && d.find(".owl-lazy");!e || a.inArray(d.get(0), this._loaded) > -1 || (e.each(a.proxy(function (c, d) {
      var e,
          f = a(d),
          g = b.devicePixelRatio > 1 && f.attr("data-src-retina") || f.attr("data-src");this._core.trigger("load", { element: f, url: g }, "lazy"), f.is("img") ? f.one("load.owl.lazy", a.proxy(function () {
        f.css("opacity", 1), this._core.trigger("loaded", { element: f, url: g }, "lazy");
      }, this)).attr("src", g) : (e = new Image(), e.onload = a.proxy(function () {
        f.css({ "background-image": "url(" + g + ")", opacity: "1" }), this._core.trigger("loaded", { element: f, url: g }, "lazy");
      }, this), e.src = g);
    }, this)), this._loaded.push(d.get(0)));
  }, c.prototype.destroy = function () {
    var a, b;for (a in this.handlers) {
      this._core.$element.off(a, this.handlers[a]);
    }for (b in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[b] && (this[b] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.Lazy = c;
}(window.Zepto || window.jQuery, window, document), function (a) {
  var b = function b(c) {
    this._core = c, this._handlers = { "initialized.owl.carousel": a.proxy(function () {
        this._core.settings.autoHeight && this.update();
      }, this), "changed.owl.carousel": a.proxy(function (a) {
        this._core.settings.autoHeight && "position" == a.property.name && this.update();
      }, this), "loaded.owl.lazy": a.proxy(function (a) {
        this._core.settings.autoHeight && a.element.closest("." + this._core.settings.itemClass) === this._core.$stage.children().eq(this._core.current()) && this.update();
      }, this) }, this._core.options = a.extend({}, b.Defaults, this._core.options), this._core.$element.on(this._handlers);
  };b.Defaults = { autoHeight: !1, autoHeightClass: "owl-height" }, b.prototype.update = function () {
    this._core.$stage.parent().height(this._core.$stage.children().eq(this._core.current()).height()).addClass(this._core.settings.autoHeightClass);
  }, b.prototype.destroy = function () {
    var a, b;for (a in this._handlers) {
      this._core.$element.off(a, this._handlers[a]);
    }for (b in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[b] && (this[b] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.AutoHeight = b;
}(window.Zepto || window.jQuery, window, document), function (a, b, c) {
  var d = function d(b) {
    this._core = b, this._videos = {}, this._playing = null, this._fullscreen = !1, this._handlers = { "resize.owl.carousel": a.proxy(function (a) {
        this._core.settings.video && !this.isInFullScreen() && a.preventDefault();
      }, this), "refresh.owl.carousel changed.owl.carousel": a.proxy(function () {
        this._playing && this.stop();
      }, this), "prepared.owl.carousel": a.proxy(function (b) {
        var c = a(b.content).find(".owl-video");c.length && (c.css("display", "none"), this.fetch(c, a(b.content)));
      }, this) }, this._core.options = a.extend({}, d.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", a.proxy(function (a) {
      this.play(a);
    }, this));
  };d.Defaults = { video: !1, videoHeight: !1, videoWidth: !1 }, d.prototype.fetch = function (a, b) {
    var c = a.attr("data-vimeo-id") ? "vimeo" : "youtube",
        d = a.attr("data-vimeo-id") || a.attr("data-youtube-id"),
        e = a.attr("data-width") || this._core.settings.videoWidth,
        f = a.attr("data-height") || this._core.settings.videoHeight,
        g = a.attr("href");if (!g) throw new Error("Missing video URL.");if (d = g.match(/(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/), d[3].indexOf("youtu") > -1) c = "youtube";else {
      if (!(d[3].indexOf("vimeo") > -1)) throw new Error("Video URL not supported.");c = "vimeo";
    }d = d[6], this._videos[g] = { type: c, id: d, width: e, height: f }, b.attr("data-video", g), this.thumbnail(a, this._videos[g]);
  }, d.prototype.thumbnail = function (b, c) {
    var d,
        e,
        f,
        g = c.width && c.height ? 'style="width:' + c.width + "px;height:" + c.height + 'px;"' : "",
        h = b.find("img"),
        i = "src",
        j = "",
        k = this._core.settings,
        l = function l(a) {
      e = '<div class="owl-video-play-icon"></div>', d = k.lazyLoad ? '<div class="owl-video-tn ' + j + '" ' + i + '="' + a + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + a + ')"></div>', b.after(d), b.after(e);
    };return b.wrap('<div class="owl-video-wrapper"' + g + "></div>"), this._core.settings.lazyLoad && (i = "data-src", j = "owl-lazy"), h.length ? (l(h.attr(i)), h.remove(), !1) : void ("youtube" === c.type ? (f = "http://img.youtube.com/vi/" + c.id + "/hqdefault.jpg", l(f)) : "vimeo" === c.type && a.ajax({ type: "GET", url: "http://vimeo.com/api/v2/video/" + c.id + ".json", jsonp: "callback", dataType: "jsonp", success: function success(a) {
        f = a[0].thumbnail_large, l(f);
      } }));
  }, d.prototype.stop = function () {
    this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null;
  }, d.prototype.play = function (b) {
    this._core.trigger("play", null, "video"), this._playing && this.stop();var c,
        d,
        e = a(b.target || b.srcElement),
        f = e.closest("." + this._core.settings.itemClass),
        g = this._videos[f.attr("data-video")],
        h = g.width || "100%",
        i = g.height || this._core.$stage.height();"youtube" === g.type ? c = '<iframe width="' + h + '" height="' + i + '" src="http://www.youtube.com/embed/' + g.id + "?autoplay=1&v=" + g.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === g.type && (c = '<iframe src="http://player.vimeo.com/video/' + g.id + '?autoplay=1" width="' + h + '" height="' + i + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'), f.addClass("owl-video-playing"), this._playing = f, d = a('<div style="height:' + i + "px; width:" + h + 'px" class="owl-video-frame">' + c + "</div>"), e.after(d);
  }, d.prototype.isInFullScreen = function () {
    var d = c.fullscreenElement || c.mozFullScreenElement || c.webkitFullscreenElement;return d && a(d).parent().hasClass("owl-video-frame") && (this._core.speed(0), this._fullscreen = !0), d && this._fullscreen && this._playing ? !1 : this._fullscreen ? (this._fullscreen = !1, !1) : this._playing && this._core.state.orientation !== b.orientation ? (this._core.state.orientation = b.orientation, !1) : !0;
  }, d.prototype.destroy = function () {
    var a, b;this._core.$element.off("click.owl.video");for (a in this._handlers) {
      this._core.$element.off(a, this._handlers[a]);
    }for (b in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[b] && (this[b] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.Video = d;
}(window.Zepto || window.jQuery, window, document), function (a, b, c, d) {
  var e = function e(b) {
    this.core = b, this.core.options = a.extend({}, e.Defaults, this.core.options), this.swapping = !0, this.previous = d, this.next = d, this.handlers = { "change.owl.carousel": a.proxy(function (a) {
        "position" == a.property.name && (this.previous = this.core.current(), this.next = a.property.value);
      }, this), "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": a.proxy(function (a) {
        this.swapping = "translated" == a.type;
      }, this), "translate.owl.carousel": a.proxy(function () {
        this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap();
      }, this) }, this.core.$element.on(this.handlers);
  };e.Defaults = { animateOut: !1, animateIn: !1 }, e.prototype.swap = function () {
    if (1 === this.core.settings.items && this.core.support3d) {
      this.core.speed(0);var b,
          c = a.proxy(this.clear, this),
          d = this.core.$stage.children().eq(this.previous),
          e = this.core.$stage.children().eq(this.next),
          f = this.core.settings.animateIn,
          g = this.core.settings.animateOut;this.core.current() !== this.previous && (g && (b = this.core.coordinates(this.previous) - this.core.coordinates(this.next), d.css({ left: b + "px" }).addClass("animated owl-animated-out").addClass(g).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", c)), f && e.addClass("animated owl-animated-in").addClass(f).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", c));
    }
  }, e.prototype.clear = function (b) {
    a(b.target).css({ left: "" }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.transitionEnd();
  }, e.prototype.destroy = function () {
    var a, b;for (a in this.handlers) {
      this.core.$element.off(a, this.handlers[a]);
    }for (b in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[b] && (this[b] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.Animate = e;
}(window.Zepto || window.jQuery, window, document), function (a, b, c) {
  var d = function d(b) {
    this.core = b, this.core.options = a.extend({}, d.Defaults, this.core.options), this.handlers = { "translated.owl.carousel refreshed.owl.carousel": a.proxy(function () {
        this.autoplay();
      }, this), "play.owl.autoplay": a.proxy(function (a, b, c) {
        this.play(b, c);
      }, this), "stop.owl.autoplay": a.proxy(function () {
        this.stop();
      }, this), "mouseover.owl.autoplay": a.proxy(function () {
        this.core.settings.autoplayHoverPause && this.pause();
      }, this), "mouseleave.owl.autoplay": a.proxy(function () {
        this.core.settings.autoplayHoverPause && this.autoplay();
      }, this) }, this.core.$element.on(this.handlers);
  };d.Defaults = { autoplay: !1, autoplayTimeout: 5e3, autoplayHoverPause: !1, autoplaySpeed: !1 }, d.prototype.autoplay = function () {
    this.core.settings.autoplay && !this.core.state.videoPlay ? (b.clearInterval(this.interval), this.interval = b.setInterval(a.proxy(function () {
      this.play();
    }, this), this.core.settings.autoplayTimeout)) : b.clearInterval(this.interval);
  }, d.prototype.play = function () {
    return c.hidden === !0 || this.core.state.isTouch || this.core.state.isScrolling || this.core.state.isSwiping || this.core.state.inMotion ? void 0 : this.core.settings.autoplay === !1 ? void b.clearInterval(this.interval) : void this.core.next(this.core.settings.autoplaySpeed);
  }, d.prototype.stop = function () {
    b.clearInterval(this.interval);
  }, d.prototype.pause = function () {
    b.clearInterval(this.interval);
  }, d.prototype.destroy = function () {
    var a, c;b.clearInterval(this.interval);for (a in this.handlers) {
      this.core.$element.off(a, this.handlers[a]);
    }for (c in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[c] && (this[c] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.autoplay = d;
}(window.Zepto || window.jQuery, window, document), function (a) {
  "use strict";
  var b = function b(c) {
    this._core = c, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = { next: this._core.next, prev: this._core.prev, to: this._core.to }, this._handlers = { "prepared.owl.carousel": a.proxy(function (b) {
        this._core.settings.dotsData && this._templates.push(a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"));
      }, this), "add.owl.carousel": a.proxy(function (b) {
        this._core.settings.dotsData && this._templates.splice(b.position, 0, a(b.content).find("[data-dot]").andSelf("[data-dot]").attr("data-dot"));
      }, this), "remove.owl.carousel prepared.owl.carousel": a.proxy(function (a) {
        this._core.settings.dotsData && this._templates.splice(a.position, 1);
      }, this), "change.owl.carousel": a.proxy(function (a) {
        if ("position" == a.property.name && !this._core.state.revert && !this._core.settings.loop && this._core.settings.navRewind) {
          var b = this._core.current(),
              c = this._core.maximum(),
              d = this._core.minimum();a.data = a.property.value > c ? b >= c ? d : c : a.property.value < d ? c : a.property.value;
        }
      }, this), "changed.owl.carousel": a.proxy(function (a) {
        "position" == a.property.name && this.draw();
      }, this), "refreshed.owl.carousel": a.proxy(function () {
        this._initialized || (this.initialize(), this._initialized = !0), this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation");
      }, this) }, this._core.options = a.extend({}, b.Defaults, this._core.options), this.$element.on(this._handlers);
  };b.Defaults = { nav: !1, navRewind: !0, navText: ["prev", "next"], navSpeed: !1, navElement: "div", navContainer: !1, navContainerClass: "owl-nav", navClass: ["owl-prev", "owl-next"], slideBy: 1, dotClass: "owl-dot", dotsClass: "owl-dots", dots: !0, dotsEach: !1, dotData: !1, dotsSpeed: !1, dotsContainer: !1, controlsClass: "owl-controls" }, b.prototype.initialize = function () {
    var b,
        c,
        d = this._core.settings;d.dotsData || (this._templates = [a("<div>").addClass(d.dotClass).append(a("<span>")).prop("outerHTML")]), d.navContainer && d.dotsContainer || (this._controls.$container = a("<div>").addClass(d.controlsClass).appendTo(this.$element)), this._controls.$indicators = d.dotsContainer ? a(d.dotsContainer) : a("<div>").hide().addClass(d.dotsClass).appendTo(this._controls.$container), this._controls.$indicators.on("click", "div", a.proxy(function (b) {
      var c = a(b.target).parent().is(this._controls.$indicators) ? a(b.target).index() : a(b.target).parent().index();b.preventDefault(), this.to(c, d.dotsSpeed);
    }, this)), b = d.navContainer ? a(d.navContainer) : a("<div>").addClass(d.navContainerClass).prependTo(this._controls.$container), this._controls.$next = a("<" + d.navElement + ">"), this._controls.$previous = this._controls.$next.clone(), this._controls.$previous.addClass(d.navClass[0]).html(d.navText[0]).hide().prependTo(b).on("click", a.proxy(function () {
      this.prev(d.navSpeed);
    }, this)), this._controls.$next.addClass(d.navClass[1]).html(d.navText[1]).hide().appendTo(b).on("click", a.proxy(function () {
      this.next(d.navSpeed);
    }, this));for (c in this._overrides) {
      this._core[c] = a.proxy(this[c], this);
    }
  }, b.prototype.destroy = function () {
    var a, b, c, d;for (a in this._handlers) {
      this.$element.off(a, this._handlers[a]);
    }for (b in this._controls) {
      this._controls[b].remove();
    }for (d in this.overides) {
      this._core[d] = this._overrides[d];
    }for (c in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[c] && (this[c] = null);
    }
  }, b.prototype.update = function () {
    var a,
        b,
        c,
        d = this._core.settings,
        e = this._core.clones().length / 2,
        f = e + this._core.items().length,
        g = d.center || d.autoWidth || d.dotData ? 1 : d.dotsEach || d.items;if ("page" !== d.slideBy && (d.slideBy = Math.min(d.slideBy, d.items)), d.dots || "page" == d.slideBy) for (this._pages = [], a = e, b = 0, c = 0; f > a; a++) {
      (b >= g || 0 === b) && (this._pages.push({ start: a - e, end: a - e + g - 1 }), b = 0, ++c), b += this._core.mergers(this._core.relative(a));
    }
  }, b.prototype.draw = function () {
    var b,
        c,
        d = "",
        e = this._core.settings,
        f = (this._core.$stage.children(), this._core.relative(this._core.current()));if (!e.nav || e.loop || e.navRewind || (this._controls.$previous.toggleClass("disabled", 0 >= f), this._controls.$next.toggleClass("disabled", f >= this._core.maximum())), this._controls.$previous.toggle(e.nav), this._controls.$next.toggle(e.nav), e.dots) {
      if (b = this._pages.length - this._controls.$indicators.children().length, e.dotData && 0 !== b) {
        for (c = 0; c < this._controls.$indicators.children().length; c++) {
          d += this._templates[this._core.relative(c)];
        }this._controls.$indicators.html(d);
      } else b > 0 ? (d = new Array(b + 1).join(this._templates[0]), this._controls.$indicators.append(d)) : 0 > b && this._controls.$indicators.children().slice(b).remove();this._controls.$indicators.find(".active").removeClass("active"), this._controls.$indicators.children().eq(a.inArray(this.current(), this._pages)).addClass("active");
    }this._controls.$indicators.toggle(e.dots);
  }, b.prototype.onTrigger = function (b) {
    var c = this._core.settings;b.page = { index: a.inArray(this.current(), this._pages), count: this._pages.length, size: c && (c.center || c.autoWidth || c.dotData ? 1 : c.dotsEach || c.items) };
  }, b.prototype.current = function () {
    var b = this._core.relative(this._core.current());return a.grep(this._pages, function (a) {
      return a.start <= b && a.end >= b;
    }).pop();
  }, b.prototype.getPosition = function (b) {
    var c,
        d,
        e = this._core.settings;return "page" == e.slideBy ? (c = a.inArray(this.current(), this._pages), d = this._pages.length, b ? ++c : --c, c = this._pages[(c % d + d) % d].start) : (c = this._core.relative(this._core.current()), d = this._core.items().length, b ? c += e.slideBy : c -= e.slideBy), c;
  }, b.prototype.next = function (b) {
    a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b);
  }, b.prototype.prev = function (b) {
    a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b);
  }, b.prototype.to = function (b, c, d) {
    var e;d ? a.proxy(this._overrides.to, this._core)(b, c) : (e = this._pages.length, a.proxy(this._overrides.to, this._core)(this._pages[(b % e + e) % e].start, c));
  }, a.fn.owlCarousel.Constructor.Plugins.Navigation = b;
}(window.Zepto || window.jQuery, window, document), function (a, b) {
  "use strict";
  var c = function c(d) {
    this._core = d, this._hashes = {}, this.$element = this._core.$element, this._handlers = { "initialized.owl.carousel": a.proxy(function () {
        "URLHash" == this._core.settings.startPosition && a(b).trigger("hashchange.owl.navigation");
      }, this), "prepared.owl.carousel": a.proxy(function (b) {
        var c = a(b.content).find("[data-hash]").andSelf("[data-hash]").attr("data-hash");this._hashes[c] = b.content;
      }, this) }, this._core.options = a.extend({}, c.Defaults, this._core.options), this.$element.on(this._handlers), a(b).on("hashchange.owl.navigation", a.proxy(function () {
      var a = b.location.hash.substring(1),
          c = this._core.$stage.children(),
          d = this._hashes[a] && c.index(this._hashes[a]) || 0;return a ? void this._core.to(d, !1, !0) : !1;
    }, this));
  };c.Defaults = { URLhashListener: !1 }, c.prototype.destroy = function () {
    var c, d;a(b).off("hashchange.owl.navigation");for (c in this._handlers) {
      this._core.$element.off(c, this._handlers[c]);
    }for (d in Object.getOwnPropertyNames(this)) {
      "function" != typeof this[d] && (this[d] = null);
    }
  }, a.fn.owlCarousel.Constructor.Plugins.Hash = c;
}(window.Zepto || window.jQuery, window, document);

/***/ }),

/***/ 77:
/***/ (function(module, exports) {

/*
Plugin: jQuery Parallax
Version 1.1.3
Author: Ian Lunn
Twitter: @IanLunn
Author URL: http://www.ianlunn.co.uk/
Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

(function ($) {
	var $window = $(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});

	$.fn.parallax = function (xpos, speedFactor, outerHeight) {
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;

		//get the starting position of each element to have parallax applied to it		
		$this.each(function () {
			firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function getHeight(jqo) {
				return jqo.outerHeight(true);
			};
		} else {
			getHeight = function getHeight(jqo) {
				return jqo.height();
			};
		}

		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;

		// function to be called whenever the window is scrolled or resized
		function update() {
			var pos = $window.scrollTop();

			$this.each(function () {
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}

				$this.css('backgroundPosition', xpos + " " + Math.round((firstTop - pos) * speedFactor) + "px");
			});
		}

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);

/***/ }),

/***/ 78:
/***/ (function(module, exports) {

(function ($) {
	"use strict";

	//------------------------------------- Waiting for the entire site to load ------------------------------------------------//

	jQuery(window).load(function () {
		jQuery("#loaderInner").fadeOut();
		jQuery("#loader").delay(400).fadeOut("slow");
	});

	$(document).ready(function () {

		//------------------------------------- Navigation setup ------------------------------------------------//

		$('a.scroll').smoothScroll({
			speed: 800,
			offset: -78
		});

		//------------------------------------- End navigation setup ------------------------------------------------//


		//---------------------------------- Main slider setup-----------------------------------------//

		$('.mainSlider').flexslider({
			animation: "fade",
			slideshow: true,
			directionNav: false,
			controlNav: true,
			animationSpeed: 1500
		});

		$('.mainSlider .slides li').css('height', $(window).height());

		for (var i = 0; i < $('.mainSlider .slides li').length; i++) {

			var path = $('.mainSlider .slides li').eq(i).find('img.slide').attr('src');
			$('.mainSlider .slides li').eq(i).addClass('parallax');
			$('.mainSlider .slides li').eq(i).css('backgroundImage', 'url("' + path + '")');
			$('.mainSlider .slides li').eq(i).find('img.slide').detach();
		}

		$(document).scroll(function () {

			var treshhold = Math.round($(window).scrollTop() / 5);
			$('li.parallax').css('backgroundPosition', '100% ' + treshhold + 'px');
		});

		//---------------------------------- End main slider setup-----------------------------------------//


		//---------------------------------- Site slider-----------------------------------------//


		$('.testiSlider').flexslider({
			animation: "slide",
			slideshow: true,
			directionNav: false,
			controlNav: true
		});

		$('.postSlider, .postSliderLarge, .projectSlider').flexslider({
			animation: "slide",
			slideshow: true,
			directionNav: false,
			controlNav: true
		});

		$('.owl-slider').owlCarousel({
			loop: true,
			nav: false,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					loop: true
				}
			}
		});

		//---------------------------------- End site slider-----------------------------------------//


		//---------------------------------- Parallax-----------------------------------------//

		$(".testimonials, .process").parallax("100%", 0.3);
		$(".facts").parallax("100%", 0.3);

		//---------------------------------- End parallax -----------------------------------------//


		//---------------------------------- Facts animation-----------------------------------------//

		$('.facts').appear(function () {
			$(".count").each(function () {
				var counter = $(this).html();
				$(this).countTo({
					from: 0,
					to: counter,
					speed: 2000,
					refreshInterval: 10
				});
			});
		});

		//----------------------------------  End facts animations -----------------------------------------//


		//---------------------------------- Portfolio -----------------------------------------//

		$(".itemDesc, .latestDesc, .teamDesc, .prjLink").css({ opacity: 0 });

		$('.teamDesc').hover(function () {
			$(this).stop().animate({ opacity: 1 }, 'slow');
			$('.teamDescL').stop().animate({ opacity: 0 }, 'slow');
		}, function () {
			$(this).stop().animate({ opacity: 0 }, 'slow');
			$('.teamDescL').stop().animate({ opacity: 1 }, 'slow');
		});

		//--------------------------------- Hover animation for the elements of the portfolio --------------------------------//


		$('.itemDesc, .latestDesc, .prjLink').hover(function () {
			$(this).stop().animate({ opacity: 1 }, 'slow');
		}, function () {
			$(this).stop().animate({ opacity: 0 }, 'slow');
		});

		$('.itemDesc, .latestDesc, .prjLink').hover(function () {
			var projDesc = $(this).find('.itemDesc, .latestDesc, .prjLink');
			var offset = $(this).height() / 2 - projDesc.height() / 2;
			$(this).find('.itemDescInner, .latestDescInner, .prjLinkInner').css('padding-top', offset - 100);
		});

		//--------------------------------- End hover animation for the elements of the portfolio --------------------------------//

		//-----------------------------------Initilaizing magnificPopup for the portfolio-------------------------------------------------//
		$('.folio').magnificPopup({
			type: 'image'
		});

		$('.popup-youtube, .popup-vimeo').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false
		});

		//-----------------------------------End initilaizing fancybox for the portfolio-------------------------------------------------//

		//--------------------------------- Sorting portfolio elements with quicksand plugin  --------------------------------//

		var $portfolioClone = $('.portfolio').clone();

		$('.filter a').click(function (e) {
			$('.filter li').removeClass('current');
			var $filterClass = $(this).parent().attr('class');
			if ($filterClass == 'all') {
				var $filteredPortfolio = $portfolioClone.find('li');
			} else {
				var $filteredPortfolio = $portfolioClone.find('li[data-type~=' + $filterClass + ']');
			}
			$('.portfolio').quicksand($filteredPortfolio, {
				duration: 800,
				easing: 'easeInOutQuad'
			}, function () {
				$('.itemDesc').hover(function () {
					$(this).stop().animate({ opacity: 1 }, 'slow');
				}, function () {
					$(this).stop().animate({ opacity: 0 }, 'slow');
				});

				$('.itemDesc').hover(function () {
					var projDesc = $(this).find('.itemDesc');
					var offset = $(this).height() / 2 - projDesc.height() / 2;
					$(this).find('.itemDescInner').css('padding-top', offset - 30);
				});

				//------------------------------ Reinitilaizing fancybox for the new cloned elements of the portfolio----------------------------//


				$('.folio').magnificPopup({
					type: 'image'
				});

				$('.popup-youtube, .popup-vimeo').magnificPopup({
					disableOn: 700,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,

					fixedContentPos: false
				});

				//-------------------------- End reinitilaizing fancybox for the new cloned elements of the portfolio ----------------------------//
			});

			$(this).parent().addClass('current');
			e.preventDefault();
		});

		//--------------------------------- End sorting portfolio elements with quicksand plugin--------------------------------//


		//---------------------------------- End portfolio-----------------------------------------//


		//---------------------------------- Form validation-----------------------------------------//


		$('#submit').click(function () {

			$('input#name').removeClass("errorForm");
			$('textarea#message').removeClass("errorForm");
			$('input#email').removeClass("errorForm");

			var error = false;
			var name = $('input#name').val();
			if (name == "" || name == " ") {
				error = true;
				$('input#name').addClass("errorForm");
			}

			var msg = $('textarea#message').val();
			if (msg == "" || msg == " ") {
				error = true;
				$('textarea#message').addClass("errorForm");
			}

			var email_compare = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
			var email = $('input#email').val();
			if (email == "" || email == " ") {
				$('input#email').addClass("errorForm");
				error = true;
			} else if (!email_compare.test(email)) {
				$('input#email').addClass("errorForm");
				error = true;
			}

			if (error == true) {
				return false;
			}

			var data_string = $('.contactForm form, .replyForm form').serialize();

			$.ajax({
				type: "POST",
				url: $('.contactForm form, .replyForm form').attr('action'),
				data: data_string,

				success: function success(message) {
					if (message == 'SENDING') {
						$('#success').fadeIn('slow');
					} else {
						$('#error').fadeIn('slow');
					}
				}

			});

			return false;
		});

		//---------------------------------- End form validation-----------------------------------------//


		//--------------------------------- Mobile menu --------------------------------//


		var mobileBtn = $('.mobileBtn');
		var nav = $('.mainNav');
		var navHeight = nav.height();

		$(mobileBtn).click(function (e) {
			e.preventDefault();
			nav.slideToggle();
			$('.mainNav li a').addClass('mobile');
		});

		$(window).resize(function () {
			var w = $(window).width();
			if (w > 320 && nav.is(':hidden')) {
				nav.removeAttr('style');
				$('.mainNav li a').removeClass('mobile');
			}
		});

		$('.mainNav li a').click(function () {
			if ($(this).hasClass('mobile')) {
				nav.slideToggle();
			}
		});

		//--------------------------------- End mobile menu --------------------------------//


		//--------------------------------- Twitter feed --------------------------------//


		jQuery(".tweets").tweet({
			join_text: false,
			username: "BenaissaGhrib", // Change username here
			modpath: './twitter/',
			avatar_size: false,
			count: 1,
			auto_join_text_default: ' we said, ',
			auto_join_text_ed: ' we ',
			auto_join_text_ing: ' we were ',
			auto_join_text_reply: ' we replied to ',
			auto_join_text_url: ' we were checking out ',
			loading_text: 'Loading tweets...'

		});

		//--------------------------------- End twitter feed --------------------------------//


		//--------------------------------- Prevent default--------------------------------//

		$('.logoSingle a').click(function (e) {
			e.preventDefault();
		});

		//--------------------------------- End prevent default --------------------------------//


		//--------------------------------- Random images-------------------------------//

		$(function () {
			var randomImg = ['r1.jpg', 'r2.jpg', 'r3.jpg', 'r4.jpg', 'r5.jpg', 'r6.jpg'];
			$('.imgTS').css({ 'background-image': 'url(images/teaserImages/' + randomImg[Math.floor(Math.random() * randomImg.length)] + ')' });
		});

		//--------------------------------- End random images--------------------------------//

	});
})(jQuery);

$("#ravabe-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed5", "vahed05");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed05", "vahed5");
	});
});

$("#edu-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed4", "vahed04");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed04", "vahed4");
	});
});

$("#research-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed3", "vahed03");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed03", "vahed3");
	});
});

$("#finan-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed2", "vahed02");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed02", "vahed2");
	});
});

$("#manager-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed1", "vahed01");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed01", "vahed1");
	});
});
$("#international-icon").hover(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed6", "vahed06");
	});
}).mouseleave(function () {
	$(this).attr("src", function (index, attr) {
		return attr.replace("vahed06", "vahed6");
	});
});

/***/ })

/******/ });