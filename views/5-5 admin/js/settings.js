! function (t) {
    var e = {};

    function n(r) {
        if (e[r]) return e[r].exports;
        var o = e[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return t[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
    }
    n.m = t, n.c = e, n.d = function (t, e, r) {
        n.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: r
        })
    }, n.r = function (t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, n.t = function (t, e) {
        if (1 & e && (t = n(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var r = Object.create(null);
        if (n.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var o in t) n.d(r, o, function (e) {
                return t[e]
            }.bind(null, o));
        return r
    }, n.n = function (t) {
        var e = t && t.__esModule ? function () {
            return t.default
        } : function () {
            return t
        };
        return n.d(e, "a", e), e
    }, n.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, n.p = "", n(n.s = 220)
}([, , function (t, e) {
    var n;
    n = function () {
        return this
    }();
    try {
        n = n || new Function("return this")()
    } catch (t) {
        "object" == typeof window && (n = window)
    }
    t.exports = n
}, , , , , , , , , , function (t, e) {
    var n = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
    "number" == typeof __g && (__g = n)
}, , , , function (t, e, n) {
    var r = n(47),
        o = n(96);
    t.exports = n(26) ? function (t, e, n) {
        return r.f(t, e, o(1, n))
    } : function (t, e, n) {
        return t[e] = n, t
    }
}, , , , , function (t, e, n) {
    var r = n(44)("wks"),
        o = n(46),
        i = n(12).Symbol,
        c = "function" == typeof i;
    (t.exports = function (t) {
        return r[t] || (r[t] = c && i[t] || (c ? i : o)("Symbol." + t))
    }).store = r
}, , , , , function (t, e, n) {
    t.exports = !n(94)((function () {
        return 7 != Object.defineProperty({}, "a", {
            get: function () {
                return 7
            }
        }).a
    }))
}, function (t, e) {
    var n = {}.hasOwnProperty;
    t.exports = function (t, e) {
        return n.call(t, e)
    }
}, , function (t, e) {
    var n, r, o = t.exports = {};

    function i() {
        throw new Error("setTimeout has not been defined")
    }

    function c() {
        throw new Error("clearTimeout has not been defined")
    }

    function a(t) {
        if (n === setTimeout) return setTimeout(t, 0);
        if ((n === i || !n) && setTimeout) return n = setTimeout, setTimeout(t, 0);
        try {
            return n(t, 0)
        } catch (e) {
            try {
                return n.call(null, t, 0)
            } catch (e) {
                return n.call(this, t, 0)
            }
        }
    }! function () {
        try {
            n = "function" == typeof setTimeout ? setTimeout : i
        } catch (t) {
            n = i
        }
        try {
            r = "function" == typeof clearTimeout ? clearTimeout : c
        } catch (t) {
            r = c
        }
    }();
    var s, u = [],
        l = !1,
        f = -1;

    function p() {
        l && s && (l = !1, s.length ? u = s.concat(u) : f = -1, u.length && h())
    }

    function h() {
        if (!l) {
            var t = a(p);
            l = !0;
            for (var e = u.length; e;) {
                for (s = u, u = []; ++f < e;) s && s[f].run();
                f = -1, e = u.length
            }
            s = null, l = !1,
                function (t) {
                    if (r === clearTimeout) return clearTimeout(t);
                    if ((r === c || !r) && clearTimeout) return r = clearTimeout, clearTimeout(t);
                    try {
                        r(t)
                    } catch (e) {
                        try {
                            return r.call(null, t)
                        } catch (e) {
                            return r.call(this, t)
                        }
                    }
                }(t)
        }
    }

    function d(t, e) {
        this.fun = t, this.array = e
    }

    function m() {}
    o.nextTick = function (t) {
        var e = new Array(arguments.length - 1);
        if (arguments.length > 1)
            for (var n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
        u.push(new d(t, e)), 1 !== u.length || l || a(h)
    }, d.prototype.run = function () {
        this.fun.apply(null, this.array)
    }, o.title = "browser", o.browser = !0, o.env = {}, o.argv = [], o.version = "", o.versions = {}, o.on = m, o.addListener = m, o.once = m, o.off = m, o.removeListener = m, o.removeAllListeners = m, o.emit = m, o.prependListener = m, o.prependOnceListener = m, o.listeners = function (t) {
        return []
    }, o.binding = function (t) {
        throw new Error("process.binding is not supported")
    }, o.cwd = function () {
        return "/"
    }, o.chdir = function (t) {
        throw new Error("process.chdir is not supported")
    }, o.umask = function () {
        return 0
    }
}, , , , , , , , , , , , , , function (t, e) {
    t.exports = function (t) {
        return t.webpackPolyfill || (t.deprecate = function () {}, t.paths = [], t.children || (t.children = []), Object.defineProperty(t, "loaded", {
            enumerable: !0,
            get: function () {
                return t.l
            }
        }), Object.defineProperty(t, "id", {
            enumerable: !0,
            get: function () {
                return t.i
            }
        }), t.webpackPolyfill = 1), t
    }
}, function (t, e, n) {
    var r = n(45),
        o = n(12),
        i = "__core-js_shared__",
        c = o[i] || (o[i] = {});
    (t.exports = function (t, e) {
        return c[t] || (c[t] = void 0 !== e ? e : {})
    })("versions", []).push({
        version: r.version,
        mode: n(93) ? "pure" : "global",
        copyright: "© 2020 Denis Pushkarev (zloirock.ru)"
    })
}, function (t, e) {
    var n = t.exports = {
        version: "2.6.12"
    };
    "number" == typeof __e && (__e = n)
}, function (t, e) {
    var n = 0,
        r = Math.random();
    t.exports = function (t) {
        return "Symbol(".concat(void 0 === t ? "" : t, ")_", (++n + r).toString(36))
    }
}, function (t, e, n) {
    var r = n(48),
        o = n(179),
        i = n(180),
        c = Object.defineProperty;
    e.f = n(26) ? Object.defineProperty : function (t, e, n) {
        if (r(t), e = i(e, !0), r(n), o) try {
            return c(t, e, n)
        } catch (t) {}
        if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
        return "value" in n && (t[e] = n.value), t
    }
}, function (t, e, n) {
    var r = n(49);
    t.exports = function (t) {
        if (!r(t)) throw TypeError(t + " is not an object!");
        return t
    }
}, function (t, e) {
    t.exports = function (t) {
        return "object" == typeof t ? null !== t : "function" == typeof t
    }
}, function (t, e) {
    t.exports = {}
}, function (t, e, n) {
    var r = n(182),
        o = n(97);
    t.exports = function (t) {
        return r(o(t))
    }
}, function (t, e, n) {
    var r = n(12),
        o = n(16),
        i = n(27),
        c = n(46)("src"),
        a = n(186),
        s = "toString",
        u = ("" + a).split(s);
    n(45).inspectSource = function (t) {
        return a.call(t)
    }, (t.exports = function (t, e, n, a) {
        var s = "function" == typeof n;
        s && (i(n, "name") || o(n, "name", e)), t[e] !== n && (s && (i(n, c) || o(n, c, t[e] ? "" + t[e] : u.join(String(e)))), t === r ? t[e] = n : a ? t[e] ? t[e] = n : o(t, e, n) : (delete t[e], o(t, e, n)))
    })(Function.prototype, s, (function () {
        return "function" == typeof this && this[c] || a.call(this)
    }))
}, function (t, e, n) {
    var r = n(44)("keys"),
        o = n(46);
    t.exports = function (t) {
        return r[t] || (r[t] = o(t))
    }
}, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , function (t, e) {
    t.exports = !1
}, function (t, e) {
    t.exports = function (t) {
        try {
            return !!t()
        } catch (t) {
            return !0
        }
    }
}, function (t, e, n) {
    var r = n(49),
        o = n(12).document,
        i = r(o) && r(o.createElement);
    t.exports = function (t) {
        return i ? o.createElement(t) : {}
    }
}, function (t, e) {
    t.exports = function (t, e) {
        return {
            enumerable: !(1 & t),
            configurable: !(2 & t),
            writable: !(4 & t),
            value: e
        }
    }
}, function (t, e) {
    t.exports = function (t) {
        if (null == t) throw TypeError("Can't call method on  " + t);
        return t
    }
}, function (t, e, n) {
    var r = n(192),
        o = n(100);
    t.exports = Object.keys || function (t) {
        return r(t, o)
    }
}, function (t, e) {
    var n = Math.ceil,
        r = Math.floor;
    t.exports = function (t) {
        return isNaN(t = +t) ? 0 : (t > 0 ? r : n)(t)
    }
}, function (t, e) {
    t.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")
}, function (t, e, n) {
    var r = n(47).f,
        o = n(27),
        i = n(21)("toStringTag");
    t.exports = function (t, e, n) {
        t && !o(t = n ? t : t.prototype, i) && r(t, i, {
            configurable: !0,
            value: e
        })
    }
}, , , , , , , function (t, e, n) {
    (function (t, e, n) {
        ! function (t) {
            "use strict";
            var r, o = /^[a-z]+:/,
                i = /[-a-z0-9]+(\.[-a-z0-9])*:\d+/i,
                c = /\/\/(.*?)(?::(.*?))?@/,
                a = /^win/i,
                s = /:$/,
                u = /^\?/,
                l = /^#/,
                f = /(.*\/)/,
                p = /^\/{2,}/,
                h = /(^\/?)/,
                d = /'/g,
                m = /%([ef][0-9a-f])%([89ab][0-9a-f])%([89ab][0-9a-f])/gi,
                v = /%([cd][0-9a-f])%([89ab][0-9a-f])/gi,
                y = /%([0-7][0-9a-f])/gi,
                g = /\+/g,
                b = /^\w:$/,
                x = /[^/#?]/,
                w = "undefined" == typeof window && void 0 !== e && !0,
                k = !w && t.navigator && t.navigator.userAgent && ~t.navigator.userAgent.indexOf("MSIE"),
                S = w ? t.require : null,
                L = {
                    protocol: "protocol",
                    host: "hostname",
                    port: "port",
                    path: "pathname",
                    query: "search",
                    hash: "hash"
                },
                O = {
                    ftp: 21,
                    gopher: 70,
                    http: 80,
                    https: 443,
                    ws: 80,
                    wss: 443
                };

            function j() {
                return w ? r = r || "file://" + (n.platform.match(a) ? "/" : "") + S("fs").realpathSync(".") : "about:srcdoc" === document.location.href ? self.parent.document.location.href : document.location.href
            }

            function T(t) {
                return encodeURIComponent(t).replace(d, "%27")
            }

            function _(t) {
                return (t = (t = (t = t.replace(g, " ")).replace(m, (function (t, e, n, r) {
                    var o = parseInt(e, 16) - 224,
                        i = parseInt(n, 16) - 128;
                    if (0 == o && i < 32) return t;
                    var c = (o << 12) + (i << 6) + (parseInt(r, 16) - 128);
                    return 65535 < c ? t : String.fromCharCode(c)
                }))).replace(v, (function (t, e, n) {
                    var r = parseInt(e, 16) - 192;
                    if (r < 2) return t;
                    var o = parseInt(n, 16) - 128;
                    return String.fromCharCode((r << 6) + o)
                }))).replace(y, (function (t, e) {
                    return String.fromCharCode(parseInt(e, 16))
                }))
            }

            function P(t) {
                for (var e = t.split("&"), n = 0, r = e.length; n < r; n++) {
                    var o = e[n].split("="),
                        i = decodeURIComponent(o[0].replace(g, " "));
                    if (i) {
                        var c = void 0 !== o[1] ? _(o[1]) : null;
                        void 0 === this[i] ? this[i] = c : (this[i] instanceof Array || (this[i] = [this[i]]), this[i].push(c))
                    }
                }
            }

            function E(t, e) {
                ! function (t, e, n) {
                    var r, a, d;
                    e = e || j(), w ? r = S("url").parse(e) : (r = document.createElement("a")).href = e;
                    var m, v, y = (v = {
                        path: !0,
                        query: !0,
                        hash: !0
                    }, (m = e) && o.test(m) && (v.protocol = !0, v.host = !0, i.test(m) && (v.port = !0), c.test(m) && (v.user = !0, v.pass = !0)), v);
                    for (a in d = e.match(c) || [], L) y[a] ? t[a] = r[L[a]] || "" : t[a] = "";
                    if (t.protocol = t.protocol.replace(s, ""), t.query = t.query.replace(u, ""), t.hash = _(t.hash.replace(l, "")), t.user = _(d[1] || ""), t.pass = _(d[2] || ""), t.port = O[t.protocol] == t.port || 0 == t.port ? "" : t.port, !y.protocol && x.test(e.charAt(0)) && (t.path = e.split("?")[0].split("#")[0]), !y.protocol && n) {
                        var g = new E(j().match(f)[0]),
                            b = g.path.split("/"),
                            T = t.path.split("/"),
                            M = ["protocol", "user", "pass", "host", "port"],
                            q = M.length;
                        for (b.pop(), a = 0; a < q; a++) t[M[a]] = g[M[a]];
                        for (;
                            ".." === T[0];) b.pop(), T.shift();
                        t.path = ("/" !== e.charAt(0) ? b.join("/") : "") + "/" + T.join("/")
                    }
                    t.path = t.path.replace(p, "/"), k && (t.path = t.path.replace(h, "/")), t.paths(t.paths()), t.query = new P(t.query)
                }(this, t, !e)
            }
            P.prototype.toString = function () {
                var t, e, n = "",
                    r = T;
                for (t in this) {
                    var o = this[t];
                    if (!(o instanceof Function || void 0 === o))
                        if (o instanceof Array) {
                            var i = o.length;
                            if (!i) {
                                n += (n ? "&" : "") + r(t) + "=";
                                continue
                            }
                            for (e = 0; e < i; e++) {
                                var c = o[e];
                                void 0 !== c && (n += n ? "&" : "", n += r(t) + (null === c ? "" : "=" + r(c)))
                            }
                        } else n += n ? "&" : "", n += r(t) + (null === o ? "" : "=" + r(o))
                }
                return n
            }, E.prototype.clearQuery = function () {
                for (var t in this.query) this.query[t] instanceof Function || delete this.query[t];
                return this
            }, E.prototype.queryLength = function () {
                var t = 0;
                for (var e in this.query) this.query[e] instanceof Function || t++;
                return t
            }, E.prototype.isEmptyQuery = function () {
                return 0 === this.queryLength()
            }, E.prototype.paths = function (t) {
                var e, n = "",
                    r = 0;
                if (t && t.length && t + "" !== t) {
                    for (this.isAbsolute() && (n = "/"), e = t.length; r < e; r++) t[r] = !r && b.test(t[r]) ? t[r] : T(t[r]);
                    this.path = n + t.join("/")
                }
                for (r = 0, e = (t = ("/" === this.path.charAt(0) ? this.path.slice(1) : this.path).split("/")).length; r < e; r++) t[r] = _(t[r]);
                return t
            }, E.prototype.encode = T, E.prototype.decode = _, E.prototype.isAbsolute = function () {
                return this.protocol || "/" === this.path.charAt(0)
            }, E.prototype.toString = function () {
                return (this.protocol && this.protocol + "://") + (this.user && T(this.user) + (this.pass && ":" + T(this.pass)) + "@") + (this.host && this.host) + (this.port && ":" + this.port) + (this.path && this.path) + (this.query.toString() && "?" + this.query) + (this.hash && "#" + T(this.hash))
            }, t[t.exports ? "exports" : "Url"] = E
        }(t.exports ? t : window)
    }).call(this, n(43)(t), n(2), n(29))
}, , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , , function (t, e, n) {
    for (var r = n(177), o = n(98), i = n(52), c = n(12), a = n(16), s = n(50), u = n(21), l = u("iterator"), f = u("toStringTag"), p = s.Array, h = {
            CSSRuleList: !0,
            CSSStyleDeclaration: !1,
            CSSValueList: !1,
            ClientRectList: !1,
            DOMRectList: !1,
            DOMStringList: !1,
            DOMTokenList: !0,
            DataTransferItemList: !1,
            FileList: !1,
            HTMLAllCollection: !1,
            HTMLCollection: !1,
            HTMLFormElement: !1,
            HTMLSelectElement: !1,
            MediaList: !0,
            MimeTypeArray: !1,
            NamedNodeMap: !1,
            NodeList: !0,
            PaintRequestList: !1,
            Plugin: !1,
            PluginArray: !1,
            SVGLengthList: !1,
            SVGNumberList: !1,
            SVGPathSegList: !1,
            SVGPointList: !1,
            SVGStringList: !1,
            SVGTransformList: !1,
            SourceBufferList: !1,
            StyleSheetList: !0,
            TextTrackCueList: !1,
            TextTrackList: !1,
            TouchList: !1
        }, d = o(h), m = 0; m < d.length; m++) {
        var v, y = d[m],
            g = h[y],
            b = c[y],
            x = b && b.prototype;
        if (x && (x[l] || a(x, l, p), x[f] || a(x, f, y), s[y] = p, g))
            for (v in r) x[v] || i(x, v, r[v], !0)
    }
}, function (t, e, n) {
    "use strict";
    var r = n(178),
        o = n(181),
        i = n(50),
        c = n(51);
    t.exports = n(184)(Array, "Array", (function (t, e) {
        this._t = c(t), this._i = 0, this._k = e
    }), (function () {
        var t = this._t,
            e = this._k,
            n = this._i++;
        return !t || n >= t.length ? (this._t = void 0, o(1)) : o(0, "keys" == e ? n : "values" == e ? t[n] : [n, t[n]])
    }), "values"), i.Arguments = i.Array, r("keys"), r("values"), r("entries")
}, function (t, e, n) {
    var r = n(21)("unscopables"),
        o = Array.prototype;
    null == o[r] && n(16)(o, r, {}), t.exports = function (t) {
        o[r][t] = !0
    }
}, function (t, e, n) {
    t.exports = !n(26) && !n(94)((function () {
        return 7 != Object.defineProperty(n(95)("div"), "a", {
            get: function () {
                return 7
            }
        }).a
    }))
}, function (t, e, n) {
    var r = n(49);
    t.exports = function (t, e) {
        if (!r(t)) return t;
        var n, o;
        if (e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
        if ("function" == typeof (n = t.valueOf) && !r(o = n.call(t))) return o;
        if (!e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
        throw TypeError("Can't convert object to primitive value")
    }
}, function (t, e) {
    t.exports = function (t, e) {
        return {
            value: e,
            done: !!t
        }
    }
}, function (t, e, n) {
    var r = n(183);
    t.exports = Object("z").propertyIsEnumerable(0) ? Object : function (t) {
        return "String" == r(t) ? t.split("") : Object(t)
    }
}, function (t, e) {
    var n = {}.toString;
    t.exports = function (t) {
        return n.call(t).slice(8, -1)
    }
}, function (t, e, n) {
    "use strict";
    var r = n(93),
        o = n(185),
        i = n(52),
        c = n(16),
        a = n(50),
        s = n(189),
        u = n(101),
        l = n(197),
        f = n(21)("iterator"),
        p = !([].keys && "next" in [].keys()),
        h = "keys",
        d = "values",
        m = function () {
            return this
        };
    t.exports = function (t, e, n, v, y, g, b) {
        s(n, e, v);
        var x, w, k, S = function (t) {
                if (!p && t in T) return T[t];
                switch (t) {
                    case h:
                    case d:
                        return function () {
                            return new n(this, t)
                        }
                }
                return function () {
                    return new n(this, t)
                }
            },
            L = e + " Iterator",
            O = y == d,
            j = !1,
            T = t.prototype,
            _ = T[f] || T["@@iterator"] || y && T[y],
            P = _ || S(y),
            E = y ? O ? S("entries") : P : void 0,
            M = "Array" == e && T.entries || _;
        if (M && (k = l(M.call(new t))) !== Object.prototype && k.next && (u(k, L, !0), r || "function" == typeof k[f] || c(k, f, m)), O && _ && _.name !== d && (j = !0, P = function () {
                return _.call(this)
            }), r && !b || !p && !j && T[f] || c(T, f, P), a[e] = P, a[L] = m, y)
            if (x = {
                    values: O ? P : S(d),
                    keys: g ? P : S(h),
                    entries: E
                }, b)
                for (w in x) w in T || i(T, w, x[w]);
            else o(o.P + o.F * (p || j), e, x);
        return x
    }
}, function (t, e, n) {
    var r = n(12),
        o = n(45),
        i = n(16),
        c = n(52),
        a = n(187),
        s = function (t, e, n) {
            var u, l, f, p, h = t & s.F,
                d = t & s.G,
                m = t & s.S,
                v = t & s.P,
                y = t & s.B,
                g = d ? r : m ? r[e] || (r[e] = {}) : (r[e] || {}).prototype,
                b = d ? o : o[e] || (o[e] = {}),
                x = b.prototype || (b.prototype = {});
            for (u in d && (n = e), n) f = ((l = !h && g && void 0 !== g[u]) ? g : n)[u], p = y && l ? a(f, r) : v && "function" == typeof f ? a(Function.call, f) : f, g && c(g, u, f, t & s.U), b[u] != f && i(b, u, p), v && x[u] != f && (x[u] = f)
        };
    r.core = o, s.F = 1, s.G = 2, s.S = 4, s.P = 8, s.B = 16, s.W = 32, s.U = 64, s.R = 128, t.exports = s
}, function (t, e, n) {
    t.exports = n(44)("native-function-to-string", Function.toString)
}, function (t, e, n) {
    var r = n(188);
    t.exports = function (t, e, n) {
        if (r(t), void 0 === e) return t;
        switch (n) {
            case 1:
                return function (n) {
                    return t.call(e, n)
                };
            case 2:
                return function (n, r) {
                    return t.call(e, n, r)
                };
            case 3:
                return function (n, r, o) {
                    return t.call(e, n, r, o)
                }
        }
        return function () {
            return t.apply(e, arguments)
        }
    }
}, function (t, e) {
    t.exports = function (t) {
        if ("function" != typeof t) throw TypeError(t + " is not a function!");
        return t
    }
}, function (t, e, n) {
    "use strict";
    var r = n(190),
        o = n(96),
        i = n(101),
        c = {};
    n(16)(c, n(21)("iterator"), (function () {
        return this
    })), t.exports = function (t, e, n) {
        t.prototype = r(c, {
            next: o(1, n)
        }), i(t, e + " Iterator")
    }
}, function (t, e, n) {
    var r = n(48),
        o = n(191),
        i = n(100),
        c = n(53)("IE_PROTO"),
        a = function () {},
        s = function () {
            var t, e = n(95)("iframe"),
                r = i.length;
            for (e.style.display = "none", n(196).appendChild(e), e.src = "javascript:", (t = e.contentWindow.document).open(), t.write("<script>document.F=Object<\/script>"), t.close(), s = t.F; r--;) delete s.prototype[i[r]];
            return s()
        };
    t.exports = Object.create || function (t, e) {
        var n;
        return null !== t ? (a.prototype = r(t), n = new a, a.prototype = null, n[c] = t) : n = s(), void 0 === e ? n : o(n, e)
    }
}, function (t, e, n) {
    var r = n(47),
        o = n(48),
        i = n(98);
    t.exports = n(26) ? Object.defineProperties : function (t, e) {
        o(t);
        for (var n, c = i(e), a = c.length, s = 0; a > s;) r.f(t, n = c[s++], e[n]);
        return t
    }
}, function (t, e, n) {
    var r = n(27),
        o = n(51),
        i = n(193)(!1),
        c = n(53)("IE_PROTO");
    t.exports = function (t, e) {
        var n, a = o(t),
            s = 0,
            u = [];
        for (n in a) n != c && r(a, n) && u.push(n);
        for (; e.length > s;) r(a, n = e[s++]) && (~i(u, n) || u.push(n));
        return u
    }
}, function (t, e, n) {
    var r = n(51),
        o = n(194),
        i = n(195);
    t.exports = function (t) {
        return function (e, n, c) {
            var a, s = r(e),
                u = o(s.length),
                l = i(c, u);
            if (t && n != n) {
                for (; u > l;)
                    if ((a = s[l++]) != a) return !0
            } else
                for (; u > l; l++)
                    if ((t || l in s) && s[l] === n) return t || l || 0;
            return !t && -1
        }
    }
}, function (t, e, n) {
    var r = n(99),
        o = Math.min;
    t.exports = function (t) {
        return t > 0 ? o(r(t), 9007199254740991) : 0
    }
}, function (t, e, n) {
    var r = n(99),
        o = Math.max,
        i = Math.min;
    t.exports = function (t, e) {
        return (t = r(t)) < 0 ? o(t + e, 0) : i(t, e)
    }
}, function (t, e, n) {
    var r = n(12).document;
    t.exports = r && r.documentElement
}, function (t, e, n) {
    var r = n(27),
        o = n(198),
        i = n(53)("IE_PROTO"),
        c = Object.prototype;
    t.exports = Object.getPrototypeOf || function (t) {
        return t = o(t), r(t, i) ? t[i] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? c : null
    }
}, function (t, e, n) {
    var r = n(97);
    t.exports = function (t) {
        return Object(r(t))
    }
}, , , , , , , , , , , , , , , , , , , , , , function (t, e, n) {
    "use strict";
    n.r(e);
    n(176);
    var r = n(108);
    const o = new(n.n(r).a),
        i = "adminkit_config_",
        c = ".js-settings",
        a = {
            theme: "default",
            sidebar: "left",
            layout: "fluid"
        },
        s = {
            theme: ["default", "dark", "light"],
            layout: ["fluid", "boxed"],
            sidebar: ["left", "right"]
        },
        u = () => {
            document.body.appendChild((t => {
                const e = document.createElement("template");
                return e.innerHTML = t, e.content.firstChild
            // })('<div class="settings js-settings">\n    <div class="settings-icons">\n      <div class="settings-icon js-settings-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings & Demos">\n        <i class="align-middle" data-feather="settings"></i>\n      </div>\n      <a class="settings-icon" data-bs-toggle="tooltip" data-bs-placement="left" title="Documentation" href="https://adminkit.io/docs" target="_blank">\n        <i class="align-middle" data-feather="book-open"></i>\n      </a>\n    </div>\n\n    <div class="settings-panel">\n      <div class="settings-content">\n        <div class="settings-title">\n          <button type="button" class="btn-close btn-close-white float-end js-settings-toggle" aria-label="Close"></button>\n\n          <h4 class="text-white mb-0 d-inline-block">Settings</h4>\n          <span class="badge bg-light ms-2">Pro</span>\n        </div>\n\n        <div class="settings-options">\n\n          <div class="alert alert-warning" role="alert">\n            <div class="alert-message">\n              <strong>Customize</strong> sidebar position, color scheme and layout type.\n            </div>\n          </div>\n\n          <div class="mb-3">\n            <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Color scheme</small>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="theme" value="default" id="themeDefault" checked>\n              <label class="form-check-label" for="themeDefault">Default</label>\n            </div>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="theme" value="dark" id="themeDark">\n              <label class="form-check-label" for="themeDark">Dark</label>\n            </div>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="theme" value="light" id="themeLight">\n              <label class="form-check-label" for="themeLight">Light</label>\n            </div>\n          </div>\n          \n          <hr />\n\n          <div class="mb-3">\n            <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Sidebar</small>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="sidebar" value="left" id="sidebarLeft" checked>\n              <label class="form-check-label" for="sidebarLeft">Left</label>\n            </div>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="sidebar" value="right" id="sidebarRight">\n              <label class="form-check-label" for="sidebarRight">Right</label>\n            </div>\n          </div>\n\n          <hr />\n          \n          <div class="mb-3">\n            <small class="d-block text-uppercase font-weight-bold text-muted mb-2">Layout</small>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="layout" value="fluid" id="layoutFluid" checked>\n              <label class="form-check-label" for="layoutFluid">Fluid</label>\n            </div>\n            <div class="form-check form-switch mb-1">\n              <input type="radio" class="form-check-input" name="layout" value="boxed" id="layoutBoxed">\n              <label class="form-check-label" for="layoutBoxed">Boxed</label>\n            </div>\n          </div>\n\n          <div class="d-grid gap-2 mb-3">\n            <a href="#" class="btn btn-outline-primary btn-lg js-settings-reset">Reset to Default</a>\n            <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary btn-lg">Purchase Now</a>\n          </div>\n        </div>\n\n      </div>\n    </div>\n  </div>')), l(), f(), p(), h(), d()
        },
        l = () => {
            const t = document.querySelector(c);
            document.querySelectorAll(".js-settings-toggle").forEach((e => {
                e.onclick = e => {
                    e.preventDefault(), t.classList.toggle("open")
                }
            })), document.body.onclick = e => {
                t.contains(e.target) || t.classList.remove("open")
            }
        },
        f = () => {
            document.querySelector(c).querySelectorAll("input[type=radio]").forEach((t => {
                t.addEventListener("change", (t => {
                    v(t.target.name, t.target.value), x(t.target.name, t.target.value)
                }))
            }))
        },
        p = () => {
            document.querySelector(".js-settings-reset").addEventListener("click", (() => {
                g(), h(), m()
            }))
        },
        h = () => {
            for (let [t, e] of Object.entries(y())) {
                const n = e || a[t];
                document.querySelector('input[name="'.concat(t, '"][value="').concat(n, '"]')).checked = !0
            }
        },
        d = () => {
            setTimeout((() => {
                if (!b("visited")) {
                    document.querySelector(c).classList.toggle("open"), x("visited", !0)
                }
            }), 1e3)
        },
        m = () => {
            for (let [t, e] of Object.entries(y())) {
                v(t, e || a[t])
            }
        },
        v = (t, e) => {
            document.body.dataset[t] = e
        },
        y = () => ({
            theme: b("theme"),
            sidebar: b("sidebar"),
            layout: b("layout")
        }),
        g = () => {
            w("theme"), w("sidebar"), w("layout")
        },
        b = t => localStorage.getItem("".concat(i).concat(t)),
        x = (t, e) => {
            localStorage.setItem("".concat(i).concat(t), e)
        },
        w = t => {
            localStorage.removeItem("".concat(i).concat(t))
        };
    document.addEventListener("DOMContentLoaded", (() => u()));
    const k = new MutationObserver((function () {
        document.body && (Object.keys(o.query).length > 0 ? (g(), Object.entries(o.query).forEach((([t, e]) => {
            s[t] && s[t].includes(e) && (v(t, e), x(t, e))
        }))) : m(), k.disconnect())
    }));
    k.observe(document.documentElement, {
        childList: !0
    })
}]);
//# sourceMappingURL=settings.js.map