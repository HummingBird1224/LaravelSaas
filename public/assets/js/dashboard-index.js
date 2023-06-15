/*!
 * jQuery JavaScript Library v1.12.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-05-20T17:17Z
 */
/*!
 * Bootstrap v3.3.5 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under the MIT license
 */
if (function(t, e) {
    "object" == typeof module && "object" == typeof module.exports ? module.exports = t.document ? e(t, !0) : function(t) {
        if (!t.document)
            throw new Error("jQuery requires a window with a document");
        return e(t)
    }
    : e(t)
}("undefined" != typeof window ? window : this, function(t, e) {
    function n(t) {
        var e = !!t && "length"in t && t.length
          , n = pt.type(t);
        return "function" !== n && !pt.isWindow(t) && ("array" === n || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
    }
    function i(t, e, n) {
        if (pt.isFunction(e))
            return pt.grep(t, function(t, i) {
                return !!e.call(t, i, t) !== n
            });
        if (e.nodeType)
            return pt.grep(t, function(t) {
                return t === e !== n
            });
        if ("string" == typeof e) {
            if (Tt.test(e))
                return pt.filter(e, t, n);
            e = pt.filter(e, t)
        }
        return pt.grep(t, function(t) {
            return pt.inArray(t, e) > -1 !== n
        })
    }
    function o(t, e) {
        do {
            t = t[e]
        } while (t && 1 !== t.nodeType);
        return t
    }
    function r(t) {
        var e = {};
        return pt.each(t.match(jt) || [], function(t, n) {
            e[n] = !0
        }),
        e
    }
    function a() {
        it.addEventListener ? (it.removeEventListener("DOMContentLoaded", s),
        t.removeEventListener("load", s)) : (it.detachEvent("onreadystatechange", s),
        t.detachEvent("onload", s))
    }
    function s() {
        (it.addEventListener || "load" === t.event.type || "complete" === it.readyState) && (a(),
        pt.ready())
    }
    function l(t, e, n) {
        if (n === undefined && 1 === t.nodeType) {
            var i = "data-" + e.replace(It, "-$1").toLowerCase();
            if ("string" == typeof (n = t.getAttribute(i))) {
                try {
                    n = "true" === n || "false" !== n && ("null" === n ? null : +n + "" === n ? +n : Ot.test(n) ? pt.parseJSON(n) : n)
                } catch (o) {}
                pt.data(t, e, n)
            } else
                n = undefined
        }
        return n
    }
    function c(t) {
        var e;
        for (e in t)
            if (("data" !== e || !pt.isEmptyObject(t[e])) && "toJSON" !== e)
                return !1;
        return !0
    }
    function u(t, e, n, i) {
        if (_t(t)) {
            var o, r, a = pt.expando, s = t.nodeType, l = s ? pt.cache : t, c = s ? t[a] : t[a] && a;
            if (c && l[c] && (i || l[c].data) || n !== undefined || "string" != typeof e)
                return c || (c = s ? t[a] = nt.pop() || pt.guid++ : a),
                l[c] || (l[c] = s ? {} : {
                    toJSON: pt.noop
                }),
                "object" != typeof e && "function" != typeof e || (i ? l[c] = pt.extend(l[c], e) : l[c].data = pt.extend(l[c].data, e)),
                r = l[c],
                i || (r.data || (r.data = {}),
                r = r.data),
                n !== undefined && (r[pt.camelCase(e)] = n),
                "string" == typeof e ? null == (o = r[e]) && (o = r[pt.camelCase(e)]) : o = r,
                o
        }
    }
    function d(t, e, n) {
        if (_t(t)) {
            var i, o, r = t.nodeType, a = r ? pt.cache : t, s = r ? t[pt.expando] : pt.expando;
            if (a[s]) {
                if (e && (i = n ? a[s] : a[s].data)) {
                    o = (e = pt.isArray(e) ? e.concat(pt.map(e, pt.camelCase)) : e in i ? [e] : (e = pt.camelCase(e))in i ? [e] : e.split(" ")).length;
                    for (; o--; )
                        delete i[e[o]];
                    if (n ? !c(i) : !pt.isEmptyObject(i))
                        return
                }
                (n || (delete a[s].data,
                c(a[s]))) && (r ? pt.cleanData([t], !0) : dt.deleteExpando || a != a.window ? delete a[s] : a[s] = undefined)
            }
        }
    }
    function f(t, e, n, i) {
        var o, r = 1, a = 20, s = i ? function() {
            return i.cur()
        }
        : function() {
            return pt.css(t, e, "")
        }
        , l = s(), c = n && n[3] || (pt.cssNumber[e] ? "" : "px"), u = (pt.cssNumber[e] || "px" !== c && +l) && Pt.exec(pt.css(t, e));
        if (u && u[3] !== c) {
            c = c || u[3],
            n = n || [],
            u = +l || 1;
            do {
                u /= r = r || ".5",
                pt.style(t, e, u + c)
            } while (r !== (r = s() / l) && 1 !== r && --a)
        }
        return n && (u = +u || +l || 0,
        o = n[1] ? u + (n[1] + 1) * n[2] : +n[2],
        i && (i.unit = c,
        i.start = u,
        i.end = o)),
        o
    }
    function p(t) {
        var e = Xt.split("|")
          , n = t.createDocumentFragment();
        if (n.createElement)
            for (; e.length; )
                n.createElement(e.pop());
        return n
    }
    function h(t, e) {
        var n, i, o = 0, r = "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e || "*") : "undefined" != typeof t.querySelectorAll ? t.querySelectorAll(e || "*") : undefined;
        if (!r)
            for (r = [],
            n = t.childNodes || t; null != (i = n[o]); o++)
                !e || pt.nodeName(i, e) ? r.push(i) : pt.merge(r, h(i, e));
        return e === undefined || e && pt.nodeName(t, e) ? pt.merge([t], r) : r
    }
    function m(t, e) {
        for (var n, i = 0; null != (n = t[i]); i++)
            pt._data(n, "globalEval", !e || pt._data(e[i], "globalEval"))
    }
    function g(t) {
        Wt.test(t.type) && (t.defaultChecked = t.checked)
    }
    function v(t, e, n, i, o) {
        for (var r, a, s, l, c, u, d, f = t.length, v = p(e), y = [], b = 0; b < f; b++)
            if ((a = t[b]) || 0 === a)
                if ("object" === pt.type(a))
                    pt.merge(y, a.nodeType ? [a] : a);
                else if (Jt.test(a)) {
                    for (l = l || v.appendChild(e.createElement("div")),
                    c = (Ut.exec(a) || ["", ""])[1].toLowerCase(),
                    d = Qt[c] || Qt._default,
                    l.innerHTML = d[1] + pt.htmlPrefilter(a) + d[2],
                    r = d[0]; r--; )
                        l = l.lastChild;
                    if (!dt.leadingWhitespace && Vt.test(a) && y.push(e.createTextNode(Vt.exec(a)[0])),
                    !dt.tbody)
                        for (r = (a = "table" !== c || Gt.test(a) ? "<table>" !== d[1] || Gt.test(a) ? 0 : l : l.firstChild) && a.childNodes.length; r--; )
                            pt.nodeName(u = a.childNodes[r], "tbody") && !u.childNodes.length && a.removeChild(u);
                    for (pt.merge(y, l.childNodes),
                    l.textContent = ""; l.firstChild; )
                        l.removeChild(l.firstChild);
                    l = v.lastChild
                } else
                    y.push(e.createTextNode(a));
        for (l && v.removeChild(l),
        dt.appendChecked || pt.grep(h(y, "input"), g),
        b = 0; a = y[b++]; )
            if (i && pt.inArray(a, i) > -1)
                o && o.push(a);
            else if (s = pt.contains(a.ownerDocument, a),
            l = h(v.appendChild(a), "script"),
            s && m(l),
            n)
                for (r = 0; a = l[r++]; )
                    zt.test(a.type || "") && n.push(a);
        return l = null,
        v
    }
    function y() {
        return !0
    }
    function b() {
        return !1
    }
    function w() {
        try {
            return it.activeElement
        } catch (t) {}
    }
    function x(t, e, n, i, o, r) {
        var a, s;
        if ("object" == typeof e) {
            for (s in "string" != typeof n && (i = i || n,
            n = undefined),
            e)
                x(t, s, n, i, e[s], r);
            return t
        }
        if (null == i && null == o ? (o = n,
        i = n = undefined) : null == o && ("string" == typeof n ? (o = i,
        i = undefined) : (o = i,
        i = n,
        n = undefined)),
        !1 === o)
            o = b;
        else if (!o)
            return t;
        return 1 === r && (a = o,
        (o = function(t) {
            return pt().off(t),
            a.apply(this, arguments)
        }
        ).guid = a.guid || (a.guid = pt.guid++)),
        t.each(function() {
            pt.event.add(this, e, o, i, n)
        })
    }
    function C(t, e) {
        return pt.nodeName(t, "table") && pt.nodeName(11 !== e.nodeType ? e : e.firstChild, "tr") ? t.getElementsByTagName("tbody")[0] || t.appendChild(t.ownerDocument.createElement("tbody")) : t
    }
    function T(t) {
        return t.type = (null !== pt.find.attr(t, "type")) + "/" + t.type,
        t
    }
    function k(t) {
        var e = se.exec(t.type);
        return e ? t.type = e[1] : t.removeAttribute("type"),
        t
    }
    function S(t, e) {
        if (1 === e.nodeType && pt.hasData(t)) {
            var n, i, o, r = pt._data(t), a = pt._data(e, r), s = r.events;
            if (s)
                for (n in delete a.handle,
                a.events = {},
                s)
                    for (i = 0,
                    o = s[n].length; i < o; i++)
                        pt.event.add(e, n, s[n][i]);
            a.data && (a.data = pt.extend({}, a.data))
        }
    }
    function E(t, e) {
        var n, i, o;
        if (1 === e.nodeType) {
            if (n = e.nodeName.toLowerCase(),
            !dt.noCloneEvent && e[pt.expando]) {
                for (i in (o = pt._data(e)).events)
                    pt.removeEvent(e, i, o.handle);
                e.removeAttribute(pt.expando)
            }
            "script" === n && e.text !== t.text ? (T(e).text = t.text,
            k(e)) : "object" === n ? (e.parentNode && (e.outerHTML = t.outerHTML),
            dt.html5Clone && t.innerHTML && !pt.trim(e.innerHTML) && (e.innerHTML = t.innerHTML)) : "input" === n && Wt.test(t.type) ? (e.defaultChecked = e.checked = t.checked,
            e.value !== t.value && (e.value = t.value)) : "option" === n ? e.defaultSelected = e.selected = t.defaultSelected : "input" !== n && "textarea" !== n || (e.defaultValue = t.defaultValue)
        }
    }
    function $(t, e, n, i) {
        e = rt.apply([], e);
        var o, r, a, s, l, c, u = 0, d = t.length, f = d - 1, p = e[0], m = pt.isFunction(p);
        if (m || d > 1 && "string" == typeof p && !dt.checkClone && ae.test(p))
            return t.each(function(o) {
                var r = t.eq(o);
                m && (e[0] = p.call(this, o, r.html())),
                $(r, e, n, i)
            });
        if (d && (o = (c = v(e, t[0].ownerDocument, !1, t, i)).firstChild,
        1 === c.childNodes.length && (c = o),
        o || i)) {
            for (a = (s = pt.map(h(c, "script"), T)).length; u < d; u++)
                r = c,
                u !== f && (r = pt.clone(r, !0, !0),
                a && pt.merge(s, h(r, "script"))),
                n.call(t[u], r, u);
            if (a)
                for (l = s[s.length - 1].ownerDocument,
                pt.map(s, k),
                u = 0; u < a; u++)
                    r = s[u],
                    zt.test(r.type || "") && !pt._data(r, "globalEval") && pt.contains(l, r) && (r.src ? pt._evalUrl && pt._evalUrl(r.src) : pt.globalEval((r.text || r.textContent || r.innerHTML || "").replace(le, "")));
            c = o = null
        }
        return t
    }
    function N(t, e, n) {
        for (var i, o = e ? pt.filter(e, t) : t, r = 0; null != (i = o[r]); r++)
            n || 1 !== i.nodeType || pt.cleanData(h(i)),
            i.parentNode && (n && pt.contains(i.ownerDocument, i) && m(h(i, "script")),
            i.parentNode.removeChild(i));
        return t
    }
    function D(t, e) {
        var n = pt(e.createElement(t)).appendTo(e.body)
          , i = pt.css(n[0], "display");
        return n.detach(),
        i
    }
    function j(t) {
        var e = it
          , n = de[t];
        return n || ("none" !== (n = D(t, e)) && n || ((e = ((ue = (ue || pt("<iframe frameborder='0' width='0' height='0'/>")).appendTo(e.documentElement))[0].contentWindow || ue[0].contentDocument).document).write(),
        e.close(),
        n = D(t, e),
        ue.detach()),
        de[t] = n),
        n
    }
    function A(t, e) {
        return {
            get: function() {
                if (!t())
                    return (this.get = e).apply(this, arguments);
                delete this.get
            }
        }
    }
    function _(t) {
        if (t in Ee)
            return t;
        for (var e = t.charAt(0).toUpperCase() + t.slice(1), n = Se.length; n--; )
            if ((t = Se[n] + e)in Ee)
                return t
    }
    function O(t, e) {
        for (var n, i, o, r = [], a = 0, s = t.length; a < s; a++)
            (i = t[a]).style && (r[a] = pt._data(i, "olddisplay"),
            n = i.style.display,
            e ? (r[a] || "none" !== n || (i.style.display = ""),
            "" === i.style.display && Bt(i) && (r[a] = pt._data(i, "olddisplay", j(i.nodeName)))) : (o = Bt(i),
            (n && "none" !== n || !o) && pt._data(i, "olddisplay", o ? n : pt.css(i, "display"))));
        for (a = 0; a < s; a++)
            (i = t[a]).style && (e && "none" !== i.style.display && "" !== i.style.display || (i.style.display = e ? r[a] || "" : "none"));
        return t
    }
    function I(t, e, n) {
        var i = Ce.exec(e);
        return i ? Math.max(0, i[1] - (n || 0)) + (i[2] || "px") : e
    }
    function L(t, e, n, i, o) {
        for (var r = n === (i ? "border" : "content") ? 4 : "width" === e ? 1 : 0, a = 0; r < 4; r += 2)
            "margin" === n && (a += pt.css(t, n + qt[r], !0, o)),
            i ? ("content" === n && (a -= pt.css(t, "padding" + qt[r], !0, o)),
            "margin" !== n && (a -= pt.css(t, "border" + qt[r] + "Width", !0, o))) : (a += pt.css(t, "padding" + qt[r], !0, o),
            "padding" !== n && (a += pt.css(t, "border" + qt[r] + "Width", !0, o)));
        return a
    }
    function R(t, e, n) {
        var i = !0
          , o = "width" === e ? t.offsetWidth : t.offsetHeight
          , r = ge(t)
          , a = dt.boxSizing && "border-box" === pt.css(t, "boxSizing", !1, r);
        if (o <= 0 || null == o) {
            if (((o = ve(t, e, r)) < 0 || null == o) && (o = t.style[e]),
            pe.test(o))
                return o;
            i = a && (dt.boxSizingReliable() || o === t.style[e]),
            o = parseFloat(o) || 0
        }
        return o + L(t, e, n || (a ? "border" : "content"), i, r) + "px"
    }
    function H(t, e, n, i, o) {
        return new H.prototype.init(t,e,n,i,o)
    }
    function F() {
        return t.setTimeout(function() {
            $e = undefined
        }),
        $e = pt.now()
    }
    function P(t, e) {
        var n, i = {
            height: t
        }, o = 0;
        for (e = e ? 1 : 0; o < 4; o += 2 - e)
            i["margin" + (n = qt[o])] = i["padding" + n] = t;
        return e && (i.opacity = i.width = t),
        i
    }
    function q(t, e, n) {
        for (var i, o = (W.tweeners[e] || []).concat(W.tweeners["*"]), r = 0, a = o.length; r < a; r++)
            if (i = o[r].call(n, e, t))
                return i
    }
    function B(t, e, n) {
        var i, o, r, a, s, l, c, u = this, d = {}, f = t.style, p = t.nodeType && Bt(t), h = pt._data(t, "fxshow");
        for (i in n.queue || (null == (s = pt._queueHooks(t, "fx")).unqueued && (s.unqueued = 0,
        l = s.empty.fire,
        s.empty.fire = function() {
            s.unqueued || l()
        }
        ),
        s.unqueued++,
        u.always(function() {
            u.always(function() {
                s.unqueued--,
                pt.queue(t, "fx").length || s.empty.fire()
            })
        })),
        1 === t.nodeType && ("height"in e || "width"in e) && (n.overflow = [f.overflow, f.overflowX, f.overflowY],
        "inline" === ("none" === (c = pt.css(t, "display")) ? pt._data(t, "olddisplay") || j(t.nodeName) : c) && "none" === pt.css(t, "float") && (dt.inlineBlockNeedsLayout && "inline" !== j(t.nodeName) ? f.zoom = 1 : f.display = "inline-block")),
        n.overflow && (f.overflow = "hidden",
        dt.shrinkWrapBlocks() || u.always(function() {
            f.overflow = n.overflow[0],
            f.overflowX = n.overflow[1],
            f.overflowY = n.overflow[2]
        })),
        e)
            if (o = e[i],
            De.exec(o)) {
                if (delete e[i],
                r = r || "toggle" === o,
                o === (p ? "hide" : "show")) {
                    if ("show" !== o || !h || h[i] === undefined)
                        continue;
                    p = !0
                }
                d[i] = h && h[i] || pt.style(t, i)
            } else
                c = undefined;
        if (pt.isEmptyObject(d))
            "inline" === ("none" === c ? j(t.nodeName) : c) && (f.display = c);
        else
            for (i in h ? "hidden"in h && (p = h.hidden) : h = pt._data(t, "fxshow", {}),
            r && (h.hidden = !p),
            p ? pt(t).show() : u.done(function() {
                pt(t).hide()
            }),
            u.done(function() {
                var e;
                for (e in pt._removeData(t, "fxshow"),
                d)
                    pt.style(t, e, d[e])
            }),
            d)
                a = q(p ? h[i] : 0, i, u),
                i in h || (h[i] = a.start,
                p && (a.end = a.start,
                a.start = "width" === i || "height" === i ? 1 : 0))
    }
    function M(t, e) {
        var n, i, o, r, a;
        for (n in t)
            if (o = e[i = pt.camelCase(n)],
            r = t[n],
            pt.isArray(r) && (o = r[1],
            r = t[n] = r[0]),
            n !== i && (t[i] = r,
            delete t[n]),
            (a = pt.cssHooks[i]) && "expand"in a)
                for (n in r = a.expand(r),
                delete t[i],
                r)
                    n in t || (t[n] = r[n],
                    e[n] = o);
            else
                e[i] = o
    }
    function W(t, e, n) {
        var i, o, r = 0, a = W.prefilters.length, s = pt.Deferred().always(function() {
            delete l.elem
        }), l = function() {
            if (o)
                return !1;
            for (var e = $e || F(), n = Math.max(0, c.startTime + c.duration - e), i = 1 - (n / c.duration || 0), r = 0, a = c.tweens.length; r < a; r++)
                c.tweens[r].run(i);
            return s.notifyWith(t, [c, i, n]),
            i < 1 && a ? n : (s.resolveWith(t, [c]),
            !1)
        }, c = s.promise({
            elem: t,
            props: pt.extend({}, e),
            opts: pt.extend(!0, {
                specialEasing: {},
                easing: pt.easing._default
            }, n),
            originalProperties: e,
            originalOptions: n,
            startTime: $e || F(),
            duration: n.duration,
            tweens: [],
            createTween: function(e, n) {
                var i = pt.Tween(t, c.opts, e, n, c.opts.specialEasing[e] || c.opts.easing);
                return c.tweens.push(i),
                i
            },
            stop: function(e) {
                var n = 0
                  , i = e ? c.tweens.length : 0;
                if (o)
                    return this;
                for (o = !0; n < i; n++)
                    c.tweens[n].run(1);
                return e ? (s.notifyWith(t, [c, 1, 0]),
                s.resolveWith(t, [c, e])) : s.rejectWith(t, [c, e]),
                this
            }
        }), u = c.props;
        for (M(u, c.opts.specialEasing); r < a; r++)
            if (i = W.prefilters[r].call(c, t, u, c.opts))
                return pt.isFunction(i.stop) && (pt._queueHooks(c.elem, c.opts.queue).stop = pt.proxy(i.stop, i)),
                i;
        return pt.map(u, q, c),
        pt.isFunction(c.opts.start) && c.opts.start.call(t, c),
        pt.fx.timer(pt.extend(l, {
            elem: t,
            anim: c,
            queue: c.opts.queue
        })),
        c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always)
    }
    function U(t) {
        return pt.attr(t, "class") || ""
    }
    function z(t) {
        return function(e, n) {
            "string" != typeof e && (n = e,
            e = "*");
            var i, o = 0, r = e.toLowerCase().match(jt) || [];
            if (pt.isFunction(n))
                for (; i = r[o++]; )
                    "+" === i.charAt(0) ? (i = i.slice(1) || "*",
                    (t[i] = t[i] || []).unshift(n)) : (t[i] = t[i] || []).push(n)
        }
    }
    function V(t, e, n, i) {
        function o(s) {
            var l;
            return r[s] = !0,
            pt.each(t[s] || [], function(t, s) {
                var c = s(e, n, i);
                return "string" != typeof c || a || r[c] ? a ? !(l = c) : void 0 : (e.dataTypes.unshift(c),
                o(c),
                !1)
            }),
            l
        }
        var r = {}
          , a = t === tn;
        return o(e.dataTypes[0]) || !r["*"] && o("*")
    }
    function X(t, e) {
        var n, i, o = pt.ajaxSettings.flatOptions || {};
        for (i in e)
            e[i] !== undefined && ((o[i] ? t : n || (n = {}))[i] = e[i]);
        return n && pt.extend(!0, t, n),
        t
    }
    function Q(t, e, n) {
        for (var i, o, r, a, s = t.contents, l = t.dataTypes; "*" === l[0]; )
            l.shift(),
            o === undefined && (o = t.mimeType || e.getResponseHeader("Content-Type"));
        if (o)
            for (a in s)
                if (s[a] && s[a].test(o)) {
                    l.unshift(a);
                    break
                }
        if (l[0]in n)
            r = l[0];
        else {
            for (a in n) {
                if (!l[0] || t.converters[a + " " + l[0]]) {
                    r = a;
                    break
                }
                i || (i = a)
            }
            r = r || i
        }
        if (r)
            return r !== l[0] && l.unshift(r),
            n[r]
    }
    function J(t, e, n, i) {
        var o, r, a, s, l, c = {}, u = t.dataTypes.slice();
        if (u[1])
            for (a in t.converters)
                c[a.toLowerCase()] = t.converters[a];
        for (r = u.shift(); r; )
            if (t.responseFields[r] && (n[t.responseFields[r]] = e),
            !l && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)),
            l = r,
            r = u.shift())
                if ("*" === r)
                    r = l;
                else if ("*" !== l && l !== r) {
                    if (!(a = c[l + " " + r] || c["* " + r]))
                        for (o in c)
                            if ((s = o.split(" "))[1] === r && (a = c[l + " " + s[0]] || c["* " + s[0]])) {
                                !0 === a ? a = c[o] : !0 !== c[o] && (r = s[0],
                                u.unshift(s[1]));
                                break
                            }
                    if (!0 !== a)
                        if (a && t.throws)
                            e = a(e);
                        else
                            try {
                                e = a(e)
                            } catch (d) {
                                return {
                                    state: "parsererror",
                                    error: a ? d : "No conversion from " + l + " to " + r
                                }
                            }
                }
        return {
            state: "success",
            data: e
        }
    }
    function G(t) {
        return t.style && t.style.display || pt.css(t, "display")
    }
    function Y(t) {
        if (!pt.contains(t.ownerDocument || it, t))
            return !0;
        for (; t && 1 === t.nodeType; ) {
            if ("none" === G(t) || "hidden" === t.type)
                return !0;
            t = t.parentNode
        }
        return !1
    }
    function K(t, e, n, i) {
        var o;
        if (pt.isArray(e))
            pt.each(e, function(e, o) {
                n || an.test(t) ? i(t, o) : K(t + "[" + ("object" == typeof o && null != o ? e : "") + "]", o, n, i)
            });
        else if (n || "object" !== pt.type(e))
            i(t, e);
        else
            for (o in e)
                K(t + "[" + o + "]", e[o], n, i)
    }
    function Z() {
        try {
            return new t.XMLHttpRequest
        } catch (e) {}
    }
    function tt() {
        try {
            return new t.ActiveXObject("Microsoft.XMLHTTP")
        } catch (e) {}
    }
    function et(t) {
        return pt.isWindow(t) ? t : 9 === t.nodeType && (t.defaultView || t.parentWindow)
    }
    var nt = []
      , it = t.document
      , ot = nt.slice
      , rt = nt.concat
      , at = nt.push
      , st = nt.indexOf
      , lt = {}
      , ct = lt.toString
      , ut = lt.hasOwnProperty
      , dt = {}
      , ft = "1.12.4"
      , pt = function(t, e) {
        return new pt.fn.init(t,e)
    }
      , ht = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g
      , mt = /^-ms-/
      , gt = /-([\da-z])/gi
      , vt = function(t, e) {
        return e.toUpperCase()
    };
    pt.fn = pt.prototype = {
        jquery: ft,
        constructor: pt,
        selector: "",
        length: 0,
        toArray: function() {
            return ot.call(this)
        },
        get: function(t) {
            return null != t ? t < 0 ? this[t + this.length] : this[t] : ot.call(this)
        },
        pushStack: function(t) {
            var e = pt.merge(this.constructor(), t);
            return e.prevObject = this,
            e.context = this.context,
            e
        },
        each: function(t) {
            return pt.each(this, t)
        },
        map: function(t) {
            return this.pushStack(pt.map(this, function(e, n) {
                return t.call(e, n, e)
            }))
        },
        slice: function() {
            return this.pushStack(ot.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(t) {
            var e = this.length
              , n = +t + (t < 0 ? e : 0);
            return this.pushStack(n >= 0 && n < e ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: at,
        sort: nt.sort,
        splice: nt.splice
    },
    pt.extend = pt.fn.extend = function() {
        var t, e, n, i, o, r, a = arguments[0] || {}, s = 1, l = arguments.length, c = !1;
        for ("boolean" == typeof a && (c = a,
        a = arguments[s] || {},
        s++),
        "object" == typeof a || pt.isFunction(a) || (a = {}),
        s === l && (a = this,
        s--); s < l; s++)
            if (null != (o = arguments[s]))
                for (i in o)
                    t = a[i],
                    a !== (n = o[i]) && (c && n && (pt.isPlainObject(n) || (e = pt.isArray(n))) ? (e ? (e = !1,
                    r = t && pt.isArray(t) ? t : []) : r = t && pt.isPlainObject(t) ? t : {},
                    a[i] = pt.extend(c, r, n)) : n !== undefined && (a[i] = n));
        return a
    }
    ,
    pt.extend({
        expando: "jQuery" + (ft + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(t) {
            throw new Error(t)
        },
        noop: function() {},
        isFunction: function(t) {
            return "function" === pt.type(t)
        },
        isArray: Array.isArray || function(t) {
            return "array" === pt.type(t)
        }
        ,
        isWindow: function(t) {
            return null != t && t == t.window
        },
        isNumeric: function(t) {
            var e = t && t.toString();
            return !pt.isArray(t) && e - parseFloat(e) + 1 >= 0
        },
        isEmptyObject: function(t) {
            var e;
            for (e in t)
                return !1;
            return !0
        },
        isPlainObject: function(t) {
            var e;
            if (!t || "object" !== pt.type(t) || t.nodeType || pt.isWindow(t))
                return !1;
            try {
                if (t.constructor && !ut.call(t, "constructor") && !ut.call(t.constructor.prototype, "isPrototypeOf"))
                    return !1
            } catch (n) {
                return !1
            }
            if (!dt.ownFirst)
                for (e in t)
                    return ut.call(t, e);
            for (e in t)
                ;
            return e === undefined || ut.call(t, e)
        },
        type: function(t) {
            return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? lt[ct.call(t)] || "object" : typeof t
        },
        globalEval: function(e) {
            e && pt.trim(e) && (t.execScript || function(e) {
                t.eval.call(t, e)
            }
            )(e)
        },
        camelCase: function(t) {
            return t.replace(mt, "ms-").replace(gt, vt)
        },
        nodeName: function(t, e) {
            return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
        },
        each: function(t, e) {
            var i, o = 0;
            if (n(t))
                for (i = t.length; o < i && !1 !== e.call(t[o], o, t[o]); o++)
                    ;
            else
                for (o in t)
                    if (!1 === e.call(t[o], o, t[o]))
                        break;
            return t
        },
        trim: function(t) {
            return null == t ? "" : (t + "").replace(ht, "")
        },
        makeArray: function(t, e) {
            var i = e || [];
            return null != t && (n(Object(t)) ? pt.merge(i, "string" == typeof t ? [t] : t) : at.call(i, t)),
            i
        },
        inArray: function(t, e, n) {
            var i;
            if (e) {
                if (st)
                    return st.call(e, t, n);
                for (i = e.length,
                n = n ? n < 0 ? Math.max(0, i + n) : n : 0; n < i; n++)
                    if (n in e && e[n] === t)
                        return n
            }
            return -1
        },
        merge: function(t, e) {
            for (var n = +e.length, i = 0, o = t.length; i < n; )
                t[o++] = e[i++];
            if (n != n)
                for (; e[i] !== undefined; )
                    t[o++] = e[i++];
            return t.length = o,
            t
        },
        grep: function(t, e, n) {
            for (var i = [], o = 0, r = t.length, a = !n; o < r; o++)
                !e(t[o], o) !== a && i.push(t[o]);
            return i
        },
        map: function(t, e, i) {
            var o, r, a = 0, s = [];
            if (n(t))
                for (o = t.length; a < o; a++)
                    null != (r = e(t[a], a, i)) && s.push(r);
            else
                for (a in t)
                    null != (r = e(t[a], a, i)) && s.push(r);
            return rt.apply([], s)
        },
        guid: 1,
        proxy: function(t, e) {
            var n, i, o;
            return "string" == typeof e && (o = t[e],
            e = t,
            t = o),
            pt.isFunction(t) ? (n = ot.call(arguments, 2),
            (i = function() {
                return t.apply(e || this, n.concat(ot.call(arguments)))
            }
            ).guid = t.guid = t.guid || pt.guid++,
            i) : undefined
        },
        now: function() {
            return +new Date
        },
        support: dt
    }),
    "function" == typeof Symbol && (pt.fn[Symbol.iterator] = nt[Symbol.iterator]),
    pt.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(t, e) {
        lt["[object " + e + "]"] = e.toLowerCase()
    });
    var yt = /*!
 * Sizzle CSS Selector Engine v2.2.1
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-10-17
 */
    function(t) {
        function e(t, e, n, i) {
            var o, r, a, s, l, c, d, p, h = e && e.ownerDocument, m = e ? e.nodeType : 9;
            if (n = n || [],
            "string" != typeof t || !t || 1 !== m && 9 !== m && 11 !== m)
                return n;
            if (!i && ((e ? e.ownerDocument || e : q) !== _ && A(e),
            e = e || _,
            I)) {
                if (11 !== m && (c = vt.exec(t)))
                    if (o = c[1]) {
                        if (9 === m) {
                            if (!(a = e.getElementById(o)))
                                return n;
                            if (a.id === o)
                                return n.push(a),
                                n
                        } else if (h && (a = h.getElementById(o)) && F(e, a) && a.id === o)
                            return n.push(a),
                            n
                    } else {
                        if (c[2])
                            return K.apply(n, e.getElementsByTagName(t)),
                            n;
                        if ((o = c[3]) && x.getElementsByClassName && e.getElementsByClassName)
                            return K.apply(n, e.getElementsByClassName(o)),
                            n
                    }
                if (x.qsa && !z[t + " "] && (!L || !L.test(t))) {
                    if (1 !== m)
                        h = e,
                        p = t;
                    else if ("object" !== e.nodeName.toLowerCase()) {
                        for ((s = e.getAttribute("id")) ? s = s.replace(bt, "\\$&") : e.setAttribute("id", s = P),
                        r = (d = S(t)).length,
                        l = ft.test(s) ? "#" + s : "[id='" + s + "']"; r--; )
                            d[r] = l + " " + f(d[r]);
                        p = d.join(","),
                        h = yt.test(t) && u(e.parentNode) || e
                    }
                    if (p)
                        try {
                            return K.apply(n, h.querySelectorAll(p)),
                            n
                        } catch (g) {} finally {
                            s === P && e.removeAttribute("id")
                        }
                }
            }
            return $(t.replace(st, "$1"), e, n, i)
        }
        function n() {
            function t(n, i) {
                return e.push(n + " ") > C.cacheLength && delete t[e.shift()],
                t[n + " "] = i
            }
            var e = [];
            return t
        }
        function i(t) {
            return t[P] = !0,
            t
        }
        function o(t) {
            var e = _.createElement("div");
            try {
                return !!t(e)
            } catch (n) {
                return !1
            } finally {
                e.parentNode && e.parentNode.removeChild(e),
                e = null
            }
        }
        function r(t, e) {
            for (var n = t.split("|"), i = n.length; i--; )
                C.attrHandle[n[i]] = e
        }
        function a(t, e) {
            var n = e && t
              , i = n && 1 === t.nodeType && 1 === e.nodeType && (~e.sourceIndex || X) - (~t.sourceIndex || X);
            if (i)
                return i;
            if (n)
                for (; n = n.nextSibling; )
                    if (n === e)
                        return -1;
            return t ? 1 : -1
        }
        function s(t) {
            return function(e) {
                return "input" === e.nodeName.toLowerCase() && e.type === t
            }
        }
        function l(t) {
            return function(e) {
                var n = e.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && e.type === t
            }
        }
        function c(t) {
            return i(function(e) {
                return e = +e,
                i(function(n, i) {
                    for (var o, r = t([], n.length, e), a = r.length; a--; )
                        n[o = r[a]] && (n[o] = !(i[o] = n[o]))
                })
            })
        }
        function u(t) {
            return t && "undefined" != typeof t.getElementsByTagName && t
        }
        function d() {}
        function f(t) {
            for (var e = 0, n = t.length, i = ""; e < n; e++)
                i += t[e].value;
            return i
        }
        function p(t, e, n) {
            var i = e.dir
              , o = n && "parentNode" === i
              , r = M++;
            return e.first ? function(e, n, r) {
                for (; e = e[i]; )
                    if (1 === e.nodeType || o)
                        return t(e, n, r)
            }
            : function(e, n, a) {
                var s, l, c, u = [B, r];
                if (a) {
                    for (; e = e[i]; )
                        if ((1 === e.nodeType || o) && t(e, n, a))
                            return !0
                } else
                    for (; e = e[i]; )
                        if (1 === e.nodeType || o) {
                            if ((s = (l = (c = e[P] || (e[P] = {}))[e.uniqueID] || (c[e.uniqueID] = {}))[i]) && s[0] === B && s[1] === r)
                                return u[2] = s[2];
                            if (l[i] = u,
                            u[2] = t(e, n, a))
                                return !0
                        }
            }
        }
        function h(t) {
            return t.length > 1 ? function(e, n, i) {
                for (var o = t.length; o--; )
                    if (!t[o](e, n, i))
                        return !1;
                return !0
            }
            : t[0]
        }
        function m(t, n, i) {
            for (var o = 0, r = n.length; o < r; o++)
                e(t, n[o], i);
            return i
        }
        function g(t, e, n, i, o) {
            for (var r, a = [], s = 0, l = t.length, c = null != e; s < l; s++)
                (r = t[s]) && (n && !n(r, i, o) || (a.push(r),
                c && e.push(s)));
            return a
        }
        function v(t, e, n, o, r, a) {
            return o && !o[P] && (o = v(o)),
            r && !r[P] && (r = v(r, a)),
            i(function(i, a, s, l) {
                var c, u, d, f = [], p = [], h = a.length, v = i || m(e || "*", s.nodeType ? [s] : s, []), y = !t || !i && e ? v : g(v, f, t, s, l), b = n ? r || (i ? t : h || o) ? [] : a : y;
                if (n && n(y, b, s, l),
                o)
                    for (c = g(b, p),
                    o(c, [], s, l),
                    u = c.length; u--; )
                        (d = c[u]) && (b[p[u]] = !(y[p[u]] = d));
                if (i) {
                    if (r || t) {
                        if (r) {
                            for (c = [],
                            u = b.length; u--; )
                                (d = b[u]) && c.push(y[u] = d);
                            r(null, b = [], c, l)
                        }
                        for (u = b.length; u--; )
                            (d = b[u]) && (c = r ? tt(i, d) : f[u]) > -1 && (i[c] = !(a[c] = d))
                    }
                } else
                    b = g(b === a ? b.splice(h, b.length) : b),
                    r ? r(null, a, b, l) : K.apply(a, b)
            })
        }
        function y(t) {
            for (var e, n, i, o = t.length, r = C.relative[t[0].type], a = r || C.relative[" "], s = r ? 1 : 0, l = p(function(t) {
                return t === e
            }, a, !0), c = p(function(t) {
                return tt(e, t) > -1
            }, a, !0), u = [function(t, n, i) {
                var o = !r && (i || n !== N) || ((e = n).nodeType ? l(t, n, i) : c(t, n, i));
                return e = null,
                o
            }
            ]; s < o; s++)
                if (n = C.relative[t[s].type])
                    u = [p(h(u), n)];
                else {
                    if ((n = C.filter[t[s].type].apply(null, t[s].matches))[P]) {
                        for (i = ++s; i < o && !C.relative[t[i].type]; i++)
                            ;
                        return v(s > 1 && h(u), s > 1 && f(t.slice(0, s - 1).concat({
                            value: " " === t[s - 2].type ? "*" : ""
                        })).replace(st, "$1"), n, s < i && y(t.slice(s, i)), i < o && y(t = t.slice(i)), i < o && f(t))
                    }
                    u.push(n)
                }
            return h(u)
        }
        function b(t, n) {
            var o = n.length > 0
              , r = t.length > 0
              , a = function(i, a, s, l, c) {
                var u, d, f, p = 0, h = "0", m = i && [], v = [], y = N, b = i || r && C.find.TAG("*", c), w = B += null == y ? 1 : Math.random() || .1, x = b.length;
                for (c && (N = a === _ || a || c); h !== x && null != (u = b[h]); h++) {
                    if (r && u) {
                        for (d = 0,
                        a || u.ownerDocument === _ || (A(u),
                        s = !I); f = t[d++]; )
                            if (f(u, a || _, s)) {
                                l.push(u);
                                break
                            }
                        c && (B = w)
                    }
                    o && ((u = !f && u) && p--,
                    i && m.push(u))
                }
                if (p += h,
                o && h !== p) {
                    for (d = 0; f = n[d++]; )
                        f(m, v, a, s);
                    if (i) {
                        if (p > 0)
                            for (; h--; )
                                m[h] || v[h] || (v[h] = G.call(l));
                        v = g(v)
                    }
                    K.apply(l, v),
                    c && !i && v.length > 0 && p + n.length > 1 && e.uniqueSort(l)
                }
                return c && (B = w,
                N = y),
                m
            };
            return o ? i(a) : a
        }
        var w, x, C, T, k, S, E, $, N, D, j, A, _, O, I, L, R, H, F, P = "sizzle" + 1 * new Date, q = t.document, B = 0, M = 0, W = n(), U = n(), z = n(), V = function(t, e) {
            return t === e && (j = !0),
            0
        }, X = 1 << 31, Q = {}.hasOwnProperty, J = [], G = J.pop, Y = J.push, K = J.push, Z = J.slice, tt = function(t, e) {
            for (var n = 0, i = t.length; n < i; n++)
                if (t[n] === e)
                    return n;
            return -1
        }, et = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", nt = "[\\x20\\t\\r\\n\\f]", it = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", ot = "\\[" + nt + "*(" + it + ")(?:" + nt + "*([*^$|!~]?=)" + nt + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + it + "))|)" + nt + "*\\]", rt = ":(" + it + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ot + ")*)|.*)\\)|)", at = new RegExp(nt + "+","g"), st = new RegExp("^" + nt + "+|((?:^|[^\\\\])(?:\\\\.)*)" + nt + "+$","g"), lt = new RegExp("^" + nt + "*," + nt + "*"), ct = new RegExp("^" + nt + "*([>+~]|" + nt + ")" + nt + "*"), ut = new RegExp("=" + nt + "*([^\\]'\"]*?)" + nt + "*\\]","g"), dt = new RegExp(rt), ft = new RegExp("^" + it + "$"), pt = {
            ID: new RegExp("^#(" + it + ")"),
            CLASS: new RegExp("^\\.(" + it + ")"),
            TAG: new RegExp("^(" + it + "|[*])"),
            ATTR: new RegExp("^" + ot),
            PSEUDO: new RegExp("^" + rt),
            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + nt + "*(even|odd|(([+-]|)(\\d*)n|)" + nt + "*(?:([+-]|)" + nt + "*(\\d+)|))" + nt + "*\\)|)","i"),
            bool: new RegExp("^(?:" + et + ")$","i"),
            needsContext: new RegExp("^" + nt + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + nt + "*((?:-\\d)?\\d*)" + nt + "*\\)|)(?=[^-]|$)","i")
        }, ht = /^(?:input|select|textarea|button)$/i, mt = /^h\d$/i, gt = /^[^{]+\{\s*\[native \w/, vt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, yt = /[+~]/, bt = /'|\\/g, wt = new RegExp("\\\\([\\da-f]{1,6}" + nt + "?|(" + nt + ")|.)","ig"), xt = function(t, e, n) {
            var i = "0x" + e - 65536;
            return i != i || n ? e : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
        }, Ct = function() {
            A()
        };
        try {
            K.apply(J = Z.call(q.childNodes), q.childNodes),
            J[q.childNodes.length].nodeType
        } catch (Tt) {
            K = {
                apply: J.length ? function(t, e) {
                    Y.apply(t, Z.call(e))
                }
                : function(t, e) {
                    for (var n = t.length, i = 0; t[n++] = e[i++]; )
                        ;
                    t.length = n - 1
                }
            }
        }
        for (w in x = e.support = {},
        k = e.isXML = function(t) {
            var e = t && (t.ownerDocument || t).documentElement;
            return !!e && "HTML" !== e.nodeName
        }
        ,
        A = e.setDocument = function(t) {
            var e, n, i = t ? t.ownerDocument || t : q;
            return i !== _ && 9 === i.nodeType && i.documentElement ? (O = (_ = i).documentElement,
            I = !k(_),
            (n = _.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", Ct, !1) : n.attachEvent && n.attachEvent("onunload", Ct)),
            x.attributes = o(function(t) {
                return t.className = "i",
                !t.getAttribute("className")
            }),
            x.getElementsByTagName = o(function(t) {
                return t.appendChild(_.createComment("")),
                !t.getElementsByTagName("*").length
            }),
            x.getElementsByClassName = gt.test(_.getElementsByClassName),
            x.getById = o(function(t) {
                return O.appendChild(t).id = P,
                !_.getElementsByName || !_.getElementsByName(P).length
            }),
            x.getById ? (C.find.ID = function(t, e) {
                if ("undefined" != typeof e.getElementById && I) {
                    var n = e.getElementById(t);
                    return n ? [n] : []
                }
            }
            ,
            C.filter.ID = function(t) {
                var e = t.replace(wt, xt);
                return function(t) {
                    return t.getAttribute("id") === e
                }
            }
            ) : (delete C.find.ID,
            C.filter.ID = function(t) {
                var e = t.replace(wt, xt);
                return function(t) {
                    var n = "undefined" != typeof t.getAttributeNode && t.getAttributeNode("id");
                    return n && n.value === e
                }
            }
            ),
            C.find.TAG = x.getElementsByTagName ? function(t, e) {
                return "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t) : x.qsa ? e.querySelectorAll(t) : void 0
            }
            : function(t, e) {
                var n, i = [], o = 0, r = e.getElementsByTagName(t);
                if ("*" === t) {
                    for (; n = r[o++]; )
                        1 === n.nodeType && i.push(n);
                    return i
                }
                return r
            }
            ,
            C.find.CLASS = x.getElementsByClassName && function(t, e) {
                if ("undefined" != typeof e.getElementsByClassName && I)
                    return e.getElementsByClassName(t)
            }
            ,
            R = [],
            L = [],
            (x.qsa = gt.test(_.querySelectorAll)) && (o(function(t) {
                O.appendChild(t).innerHTML = "<a id='" + P + "'></a><select id='" + P + "-\r\\' msallowcapture=''><option selected=''></option></select>",
                t.querySelectorAll("[msallowcapture^='']").length && L.push("[*^$]=" + nt + "*(?:''|\"\")"),
                t.querySelectorAll("[selected]").length || L.push("\\[" + nt + "*(?:value|" + et + ")"),
                t.querySelectorAll("[id~=" + P + "-]").length || L.push("~="),
                t.querySelectorAll(":checked").length || L.push(":checked"),
                t.querySelectorAll("a#" + P + "+*").length || L.push(".#.+[+~]")
            }),
            o(function(t) {
                var e = _.createElement("input");
                e.setAttribute("type", "hidden"),
                t.appendChild(e).setAttribute("name", "D"),
                t.querySelectorAll("[name=d]").length && L.push("name" + nt + "*[*^$|!~]?="),
                t.querySelectorAll(":enabled").length || L.push(":enabled", ":disabled"),
                t.querySelectorAll("*,:x"),
                L.push(",.*:")
            })),
            (x.matchesSelector = gt.test(H = O.matches || O.webkitMatchesSelector || O.mozMatchesSelector || O.oMatchesSelector || O.msMatchesSelector)) && o(function(t) {
                x.disconnectedMatch = H.call(t, "div"),
                H.call(t, "[s!='']:x"),
                R.push("!=", rt)
            }),
            L = L.length && new RegExp(L.join("|")),
            R = R.length && new RegExp(R.join("|")),
            e = gt.test(O.compareDocumentPosition),
            F = e || gt.test(O.contains) ? function(t, e) {
                var n = 9 === t.nodeType ? t.documentElement : t
                  , i = e && e.parentNode;
                return t === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(i)))
            }
            : function(t, e) {
                if (e)
                    for (; e = e.parentNode; )
                        if (e === t)
                            return !0;
                return !1
            }
            ,
            V = e ? function(t, e) {
                if (t === e)
                    return j = !0,
                    0;
                var n = !t.compareDocumentPosition - !e.compareDocumentPosition;
                return n || (1 & (n = (t.ownerDocument || t) === (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1) || !x.sortDetached && e.compareDocumentPosition(t) === n ? t === _ || t.ownerDocument === q && F(q, t) ? -1 : e === _ || e.ownerDocument === q && F(q, e) ? 1 : D ? tt(D, t) - tt(D, e) : 0 : 4 & n ? -1 : 1)
            }
            : function(t, e) {
                if (t === e)
                    return j = !0,
                    0;
                var n, i = 0, o = t.parentNode, r = e.parentNode, s = [t], l = [e];
                if (!o || !r)
                    return t === _ ? -1 : e === _ ? 1 : o ? -1 : r ? 1 : D ? tt(D, t) - tt(D, e) : 0;
                if (o === r)
                    return a(t, e);
                for (n = t; n = n.parentNode; )
                    s.unshift(n);
                for (n = e; n = n.parentNode; )
                    l.unshift(n);
                for (; s[i] === l[i]; )
                    i++;
                return i ? a(s[i], l[i]) : s[i] === q ? -1 : l[i] === q ? 1 : 0
            }
            ,
            _) : _
        }
        ,
        e.matches = function(t, n) {
            return e(t, null, null, n)
        }
        ,
        e.matchesSelector = function(t, n) {
            if ((t.ownerDocument || t) !== _ && A(t),
            n = n.replace(ut, "='$1']"),
            x.matchesSelector && I && !z[n + " "] && (!R || !R.test(n)) && (!L || !L.test(n)))
                try {
                    var i = H.call(t, n);
                    if (i || x.disconnectedMatch || t.document && 11 !== t.document.nodeType)
                        return i
                } catch (Tt) {}
            return e(n, _, null, [t]).length > 0
        }
        ,
        e.contains = function(t, e) {
            return (t.ownerDocument || t) !== _ && A(t),
            F(t, e)
        }
        ,
        e.attr = function(t, e) {
            (t.ownerDocument || t) !== _ && A(t);
            var n = C.attrHandle[e.toLowerCase()]
              , i = n && Q.call(C.attrHandle, e.toLowerCase()) ? n(t, e, !I) : undefined;
            return i !== undefined ? i : x.attributes || !I ? t.getAttribute(e) : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
        }
        ,
        e.error = function(t) {
            throw new Error("Syntax error, unrecognized expression: " + t)
        }
        ,
        e.uniqueSort = function(t) {
            var e, n = [], i = 0, o = 0;
            if (j = !x.detectDuplicates,
            D = !x.sortStable && t.slice(0),
            t.sort(V),
            j) {
                for (; e = t[o++]; )
                    e === t[o] && (i = n.push(o));
                for (; i--; )
                    t.splice(n[i], 1)
            }
            return D = null,
            t
        }
        ,
        T = e.getText = function(t) {
            var e, n = "", i = 0, o = t.nodeType;
            if (o) {
                if (1 === o || 9 === o || 11 === o) {
                    if ("string" == typeof t.textContent)
                        return t.textContent;
                    for (t = t.firstChild; t; t = t.nextSibling)
                        n += T(t)
                } else if (3 === o || 4 === o)
                    return t.nodeValue
            } else
                for (; e = t[i++]; )
                    n += T(e);
            return n
        }
        ,
        (C = e.selectors = {
            cacheLength: 50,
            createPseudo: i,
            match: pt,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(t) {
                    return t[1] = t[1].replace(wt, xt),
                    t[3] = (t[3] || t[4] || t[5] || "").replace(wt, xt),
                    "~=" === t[2] && (t[3] = " " + t[3] + " "),
                    t.slice(0, 4)
                },
                CHILD: function(t) {
                    return t[1] = t[1].toLowerCase(),
                    "nth" === t[1].slice(0, 3) ? (t[3] || e.error(t[0]),
                    t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])),
                    t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && e.error(t[0]),
                    t
                },
                PSEUDO: function(t) {
                    var e, n = !t[6] && t[2];
                    return pt.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : n && dt.test(n) && (e = S(n, !0)) && (e = n.indexOf(")", n.length - e) - n.length) && (t[0] = t[0].slice(0, e),
                    t[2] = n.slice(0, e)),
                    t.slice(0, 3))
                }
            },
            filter: {
                TAG: function(t) {
                    var e = t.replace(wt, xt).toLowerCase();
                    return "*" === t ? function() {
                        return !0
                    }
                    : function(t) {
                        return t.nodeName && t.nodeName.toLowerCase() === e
                    }
                },
                CLASS: function(t) {
                    var e = W[t + " "];
                    return e || (e = new RegExp("(^|" + nt + ")" + t + "(" + nt + "|$)")) && W(t, function(t) {
                        return e.test("string" == typeof t.className && t.className || "undefined" != typeof t.getAttribute && t.getAttribute("class") || "")
                    })
                },
                ATTR: function(t, n, i) {
                    return function(o) {
                        var r = e.attr(o, t);
                        return null == r ? "!=" === n : !n || (r += "",
                        "=" === n ? r === i : "!=" === n ? r !== i : "^=" === n ? i && 0 === r.indexOf(i) : "*=" === n ? i && r.indexOf(i) > -1 : "$=" === n ? i && r.slice(-i.length) === i : "~=" === n ? (" " + r.replace(at, " ") + " ").indexOf(i) > -1 : "|=" === n && (r === i || r.slice(0, i.length + 1) === i + "-"))
                    }
                },
                CHILD: function(t, e, n, i, o) {
                    var r = "nth" !== t.slice(0, 3)
                      , a = "last" !== t.slice(-4)
                      , s = "of-type" === e;
                    return 1 === i && 0 === o ? function(t) {
                        return !!t.parentNode
                    }
                    : function(e, n, l) {
                        var c, u, d, f, p, h, m = r !== a ? "nextSibling" : "previousSibling", g = e.parentNode, v = s && e.nodeName.toLowerCase(), y = !l && !s, b = !1;
                        if (g) {
                            if (r) {
                                for (; m; ) {
                                    for (f = e; f = f[m]; )
                                        if (s ? f.nodeName.toLowerCase() === v : 1 === f.nodeType)
                                            return !1;
                                    h = m = "only" === t && !h && "nextSibling"
                                }
                                return !0
                            }
                            if (h = [a ? g.firstChild : g.lastChild],
                            a && y) {
                                for (b = (p = (c = (u = (d = (f = g)[P] || (f[P] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[t] || [])[0] === B && c[1]) && c[2],
                                f = p && g.childNodes[p]; f = ++p && f && f[m] || (b = p = 0) || h.pop(); )
                                    if (1 === f.nodeType && ++b && f === e) {
                                        u[t] = [B, p, b];
                                        break
                                    }
                            } else if (y && (b = p = (c = (u = (d = (f = e)[P] || (f[P] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[t] || [])[0] === B && c[1]),
                            !1 === b)
                                for (; (f = ++p && f && f[m] || (b = p = 0) || h.pop()) && ((s ? f.nodeName.toLowerCase() !== v : 1 !== f.nodeType) || !++b || (y && ((u = (d = f[P] || (f[P] = {}))[f.uniqueID] || (d[f.uniqueID] = {}))[t] = [B, b]),
                                f !== e)); )
                                    ;
                            return (b -= o) === i || b % i == 0 && b / i >= 0
                        }
                    }
                },
                PSEUDO: function(t, n) {
                    var o, r = C.pseudos[t] || C.setFilters[t.toLowerCase()] || e.error("unsupported pseudo: " + t);
                    return r[P] ? r(n) : r.length > 1 ? (o = [t, t, "", n],
                    C.setFilters.hasOwnProperty(t.toLowerCase()) ? i(function(t, e) {
                        for (var i, o = r(t, n), a = o.length; a--; )
                            t[i = tt(t, o[a])] = !(e[i] = o[a])
                    }) : function(t) {
                        return r(t, 0, o)
                    }
                    ) : r
                }
            },
            pseudos: {
                not: i(function(t) {
                    var e = []
                      , n = []
                      , o = E(t.replace(st, "$1"));
                    return o[P] ? i(function(t, e, n, i) {
                        for (var r, a = o(t, null, i, []), s = t.length; s--; )
                            (r = a[s]) && (t[s] = !(e[s] = r))
                    }) : function(t, i, r) {
                        return e[0] = t,
                        o(e, null, r, n),
                        e[0] = null,
                        !n.pop()
                    }
                }),
                has: i(function(t) {
                    return function(n) {
                        return e(t, n).length > 0
                    }
                }),
                contains: i(function(t) {
                    return t = t.replace(wt, xt),
                    function(e) {
                        return (e.textContent || e.innerText || T(e)).indexOf(t) > -1
                    }
                }),
                lang: i(function(t) {
                    return ft.test(t || "") || e.error("unsupported lang: " + t),
                    t = t.replace(wt, xt).toLowerCase(),
                    function(e) {
                        var n;
                        do {
                            if (n = I ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang"))
                                return (n = n.toLowerCase()) === t || 0 === n.indexOf(t + "-")
                        } while ((e = e.parentNode) && 1 === e.nodeType);
                        return !1
                    }
                }),
                target: function(e) {
                    var n = t.location && t.location.hash;
                    return n && n.slice(1) === e.id
                },
                root: function(t) {
                    return t === O
                },
                focus: function(t) {
                    return t === _.activeElement && (!_.hasFocus || _.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                },
                enabled: function(t) {
                    return !1 === t.disabled
                },
                disabled: function(t) {
                    return !0 === t.disabled
                },
                checked: function(t) {
                    var e = t.nodeName.toLowerCase();
                    return "input" === e && !!t.checked || "option" === e && !!t.selected
                },
                selected: function(t) {
                    return t.parentNode && t.parentNode.selectedIndex,
                    !0 === t.selected
                },
                empty: function(t) {
                    for (t = t.firstChild; t; t = t.nextSibling)
                        if (t.nodeType < 6)
                            return !1;
                    return !0
                },
                parent: function(t) {
                    return !C.pseudos.empty(t)
                },
                header: function(t) {
                    return mt.test(t.nodeName)
                },
                input: function(t) {
                    return ht.test(t.nodeName)
                },
                button: function(t) {
                    var e = t.nodeName.toLowerCase();
                    return "input" === e && "button" === t.type || "button" === e
                },
                text: function(t) {
                    var e;
                    return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
                },
                first: c(function() {
                    return [0]
                }),
                last: c(function(t, e) {
                    return [e - 1]
                }),
                eq: c(function(t, e, n) {
                    return [n < 0 ? n + e : n]
                }),
                even: c(function(t, e) {
                    for (var n = 0; n < e; n += 2)
                        t.push(n);
                    return t
                }),
                odd: c(function(t, e) {
                    for (var n = 1; n < e; n += 2)
                        t.push(n);
                    return t
                }),
                lt: c(function(t, e, n) {
                    for (var i = n < 0 ? n + e : n; --i >= 0; )
                        t.push(i);
                    return t
                }),
                gt: c(function(t, e, n) {
                    for (var i = n < 0 ? n + e : n; ++i < e; )
                        t.push(i);
                    return t
                })
            }
        }).pseudos.nth = C.pseudos.eq,
        {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        })
            C.pseudos[w] = s(w);
        for (w in {
            submit: !0,
            reset: !0
        })
            C.pseudos[w] = l(w);
        return d.prototype = C.filters = C.pseudos,
        C.setFilters = new d,
        S = e.tokenize = function(t, n) {
            var i, o, r, a, s, l, c, u = U[t + " "];
            if (u)
                return n ? 0 : u.slice(0);
            for (s = t,
            l = [],
            c = C.preFilter; s; ) {
                for (a in i && !(o = lt.exec(s)) || (o && (s = s.slice(o[0].length) || s),
                l.push(r = [])),
                i = !1,
                (o = ct.exec(s)) && (i = o.shift(),
                r.push({
                    value: i,
                    type: o[0].replace(st, " ")
                }),
                s = s.slice(i.length)),
                C.filter)
                    !(o = pt[a].exec(s)) || c[a] && !(o = c[a](o)) || (i = o.shift(),
                    r.push({
                        value: i,
                        type: a,
                        matches: o
                    }),
                    s = s.slice(i.length));
                if (!i)
                    break
            }
            return n ? s.length : s ? e.error(t) : U(t, l).slice(0)
        }
        ,
        E = e.compile = function(t, e) {
            var n, i = [], o = [], r = z[t + " "];
            if (!r) {
                for (e || (e = S(t)),
                n = e.length; n--; )
                    (r = y(e[n]))[P] ? i.push(r) : o.push(r);
                (r = z(t, b(o, i))).selector = t
            }
            return r
        }
        ,
        $ = e.select = function(t, e, n, i) {
            var o, r, a, s, l, c = "function" == typeof t && t, d = !i && S(t = c.selector || t);
            if (n = n || [],
            1 === d.length) {
                if ((r = d[0] = d[0].slice(0)).length > 2 && "ID" === (a = r[0]).type && x.getById && 9 === e.nodeType && I && C.relative[r[1].type]) {
                    if (!(e = (C.find.ID(a.matches[0].replace(wt, xt), e) || [])[0]))
                        return n;
                    c && (e = e.parentNode),
                    t = t.slice(r.shift().value.length)
                }
                for (o = pt.needsContext.test(t) ? 0 : r.length; o-- && (a = r[o],
                !C.relative[s = a.type]); )
                    if ((l = C.find[s]) && (i = l(a.matches[0].replace(wt, xt), yt.test(r[0].type) && u(e.parentNode) || e))) {
                        if (r.splice(o, 1),
                        !(t = i.length && f(r)))
                            return K.apply(n, i),
                            n;
                        break
                    }
            }
            return (c || E(t, d))(i, e, !I, n, !e || yt.test(t) && u(e.parentNode) || e),
            n
        }
        ,
        x.sortStable = P.split("").sort(V).join("") === P,
        x.detectDuplicates = !!j,
        A(),
        x.sortDetached = o(function(t) {
            return 1 & t.compareDocumentPosition(_.createElement("div"))
        }),
        o(function(t) {
            return t.innerHTML = "<a href='#'></a>",
            "#" === t.firstChild.getAttribute("href")
        }) || r("type|href|height|width", function(t, e, n) {
            if (!n)
                return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
        }),
        x.attributes && o(function(t) {
            return t.innerHTML = "<input/>",
            t.firstChild.setAttribute("value", ""),
            "" === t.firstChild.getAttribute("value")
        }) || r("value", function(t, e, n) {
            if (!n && "input" === t.nodeName.toLowerCase())
                return t.defaultValue
        }),
        o(function(t) {
            return null == t.getAttribute("disabled")
        }) || r(et, function(t, e, n) {
            var i;
            if (!n)
                return !0 === t[e] ? e.toLowerCase() : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
        }),
        e
    }(t);
    pt.find = yt,
    pt.expr = yt.selectors,
    pt.expr[":"] = pt.expr.pseudos,
    pt.uniqueSort = pt.unique = yt.uniqueSort,
    pt.text = yt.getText,
    pt.isXMLDoc = yt.isXML,
    pt.contains = yt.contains;
    var bt = function(t, e, n) {
        for (var i = [], o = n !== undefined; (t = t[e]) && 9 !== t.nodeType; )
            if (1 === t.nodeType) {
                if (o && pt(t).is(n))
                    break;
                i.push(t)
            }
        return i
    }
      , wt = function(t, e) {
        for (var n = []; t; t = t.nextSibling)
            1 === t.nodeType && t !== e && n.push(t);
        return n
    }
      , xt = pt.expr.match.needsContext
      , Ct = /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/
      , Tt = /^.[^:#\[\.,]*$/;
    pt.filter = function(t, e, n) {
        var i = e[0];
        return n && (t = ":not(" + t + ")"),
        1 === e.length && 1 === i.nodeType ? pt.find.matchesSelector(i, t) ? [i] : [] : pt.find.matches(t, pt.grep(e, function(t) {
            return 1 === t.nodeType
        }))
    }
    ,
    pt.fn.extend({
        find: function(t) {
            var e, n = [], i = this, o = i.length;
            if ("string" != typeof t)
                return this.pushStack(pt(t).filter(function() {
                    for (e = 0; e < o; e++)
                        if (pt.contains(i[e], this))
                            return !0
                }));
            for (e = 0; e < o; e++)
                pt.find(t, i[e], n);
            return (n = this.pushStack(o > 1 ? pt.unique(n) : n)).selector = this.selector ? this.selector + " " + t : t,
            n
        },
        filter: function(t) {
            return this.pushStack(i(this, t || [], !1))
        },
        not: function(t) {
            return this.pushStack(i(this, t || [], !0))
        },
        is: function(t) {
            return !!i(this, "string" == typeof t && xt.test(t) ? pt(t) : t || [], !1).length
        }
    });
    var kt, St = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
    (pt.fn.init = function(t, e, n) {
        var i, o;
        if (!t)
            return this;
        if (n = n || kt,
        "string" == typeof t) {
            if (!(i = "<" === t.charAt(0) && ">" === t.charAt(t.length - 1) && t.length >= 3 ? [null, t, null] : St.exec(t)) || !i[1] && e)
                return !e || e.jquery ? (e || n).find(t) : this.constructor(e).find(t);
            if (i[1]) {
                if (e = e instanceof pt ? e[0] : e,
                pt.merge(this, pt.parseHTML(i[1], e && e.nodeType ? e.ownerDocument || e : it, !0)),
                Ct.test(i[1]) && pt.isPlainObject(e))
                    for (i in e)
                        pt.isFunction(this[i]) ? this[i](e[i]) : this.attr(i, e[i]);
                return this
            }
            if ((o = it.getElementById(i[2])) && o.parentNode) {
                if (o.id !== i[2])
                    return kt.find(t);
                this.length = 1,
                this[0] = o
            }
            return this.context = it,
            this.selector = t,
            this
        }
        return t.nodeType ? (this.context = this[0] = t,
        this.length = 1,
        this) : pt.isFunction(t) ? "undefined" != typeof n.ready ? n.ready(t) : t(pt) : (t.selector !== undefined && (this.selector = t.selector,
        this.context = t.context),
        pt.makeArray(t, this))
    }
    ).prototype = pt.fn,
    kt = pt(it);
    var Et = /^(?:parents|prev(?:Until|All))/
      , $t = {
        children: !0,
        contents: !0,
        next: !0,
        prev: !0
    };
    pt.fn.extend({
        has: function(t) {
            var e, n = pt(t, this), i = n.length;
            return this.filter(function() {
                for (e = 0; e < i; e++)
                    if (pt.contains(this, n[e]))
                        return !0
            })
        },
        closest: function(t, e) {
            for (var n, i = 0, o = this.length, r = [], a = xt.test(t) || "string" != typeof t ? pt(t, e || this.context) : 0; i < o; i++)
                for (n = this[i]; n && n !== e; n = n.parentNode)
                    if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && pt.find.matchesSelector(n, t))) {
                        r.push(n);
                        break
                    }
            return this.pushStack(r.length > 1 ? pt.uniqueSort(r) : r)
        },
        index: function(t) {
            return t ? "string" == typeof t ? pt.inArray(this[0], pt(t)) : pt.inArray(t.jquery ? t[0] : t, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(t, e) {
            return this.pushStack(pt.uniqueSort(pt.merge(this.get(), pt(t, e))))
        },
        addBack: function(t) {
            return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
        }
    }),
    pt.each({
        parent: function(t) {
            var e = t.parentNode;
            return e && 11 !== e.nodeType ? e : null
        },
        parents: function(t) {
            return bt(t, "parentNode")
        },
        parentsUntil: function(t, e, n) {
            return bt(t, "parentNode", n)
        },
        next: function(t) {
            return o(t, "nextSibling")
        },
        prev: function(t) {
            return o(t, "previousSibling")
        },
        nextAll: function(t) {
            return bt(t, "nextSibling")
        },
        prevAll: function(t) {
            return bt(t, "previousSibling")
        },
        nextUntil: function(t, e, n) {
            return bt(t, "nextSibling", n)
        },
        prevUntil: function(t, e, n) {
            return bt(t, "previousSibling", n)
        },
        siblings: function(t) {
            return wt((t.parentNode || {}).firstChild, t)
        },
        children: function(t) {
            return wt(t.firstChild)
        },
        contents: function(t) {
            return pt.nodeName(t, "iframe") ? t.contentDocument || t.contentWindow.document : pt.merge([], t.childNodes)
        }
    }, function(t, e) {
        pt.fn[t] = function(n, i) {
            var o = pt.map(this, e, n);
            return "Until" !== t.slice(-5) && (i = n),
            i && "string" == typeof i && (o = pt.filter(i, o)),
            this.length > 1 && ($t[t] || (o = pt.uniqueSort(o)),
            Et.test(t) && (o = o.reverse())),
            this.pushStack(o)
        }
    });
    var Nt, Dt, jt = /\S+/g;
    for (Dt in pt.Callbacks = function(t) {
        t = "string" == typeof t ? r(t) : pt.extend({}, t);
        var e, n, i, o, a = [], s = [], l = -1, c = function() {
            for (o = t.once,
            i = e = !0; s.length; l = -1)
                for (n = s.shift(); ++l < a.length; )
                    !1 === a[l].apply(n[0], n[1]) && t.stopOnFalse && (l = a.length,
                    n = !1);
            t.memory || (n = !1),
            e = !1,
            o && (a = n ? [] : "")
        }, u = {
            add: function() {
                return a && (n && !e && (l = a.length - 1,
                s.push(n)),
                function i(e) {
                    pt.each(e, function(e, n) {
                        pt.isFunction(n) ? t.unique && u.has(n) || a.push(n) : n && n.length && "string" !== pt.type(n) && i(n)
                    })
                }(arguments),
                n && !e && c()),
                this
            },
            remove: function() {
                return pt.each(arguments, function(t, e) {
                    for (var n; (n = pt.inArray(e, a, n)) > -1; )
                        a.splice(n, 1),
                        n <= l && l--
                }),
                this
            },
            has: function(t) {
                return t ? pt.inArray(t, a) > -1 : a.length > 0
            },
            empty: function() {
                return a && (a = []),
                this
            },
            disable: function() {
                return o = s = [],
                a = n = "",
                this
            },
            disabled: function() {
                return !a
            },
            lock: function() {
                return o = !0,
                n || u.disable(),
                this
            },
            locked: function() {
                return !!o
            },
            fireWith: function(t, n) {
                return o || (n = [t, (n = n || []).slice ? n.slice() : n],
                s.push(n),
                e || c()),
                this
            },
            fire: function() {
                return u.fireWith(this, arguments),
                this
            },
            fired: function() {
                return !!i
            }
        };
        return u
    }
    ,
    pt.extend({
        Deferred: function(t) {
            var e = [["resolve", "done", pt.Callbacks("once memory"), "resolved"], ["reject", "fail", pt.Callbacks("once memory"), "rejected"], ["notify", "progress", pt.Callbacks("memory")]]
              , n = "pending"
              , i = {
                state: function() {
                    return n
                },
                always: function() {
                    return o.done(arguments).fail(arguments),
                    this
                },
                then: function() {
                    var t = arguments;
                    return pt.Deferred(function(n) {
                        pt.each(e, function(e, r) {
                            var a = pt.isFunction(t[e]) && t[e];
                            o[r[1]](function() {
                                var t = a && a.apply(this, arguments);
                                t && pt.isFunction(t.promise) ? t.promise().progress(n.notify).done(n.resolve).fail(n.reject) : n[r[0] + "With"](this === i ? n.promise() : this, a ? [t] : arguments)
                            })
                        }),
                        t = null
                    }).promise()
                },
                promise: function(t) {
                    return null != t ? pt.extend(t, i) : i
                }
            }
              , o = {};
            return i.pipe = i.then,
            pt.each(e, function(t, r) {
                var a = r[2]
                  , s = r[3];
                i[r[1]] = a.add,
                s && a.add(function() {
                    n = s
                }, e[1 ^ t][2].disable, e[2][2].lock),
                o[r[0]] = function() {
                    return o[r[0] + "With"](this === o ? i : this, arguments),
                    this
                }
                ,
                o[r[0] + "With"] = a.fireWith
            }),
            i.promise(o),
            t && t.call(o, o),
            o
        },
        when: function(t) {
            var e, n, i, o = 0, r = ot.call(arguments), a = r.length, s = 1 !== a || t && pt.isFunction(t.promise) ? a : 0, l = 1 === s ? t : pt.Deferred(), c = function(t, n, i) {
                return function(o) {
                    n[t] = this,
                    i[t] = arguments.length > 1 ? ot.call(arguments) : o,
                    i === e ? l.notifyWith(n, i) : --s || l.resolveWith(n, i)
                }
            };
            if (a > 1)
                for (e = new Array(a),
                n = new Array(a),
                i = new Array(a); o < a; o++)
                    r[o] && pt.isFunction(r[o].promise) ? r[o].promise().progress(c(o, n, e)).done(c(o, i, r)).fail(l.reject) : --s;
            return s || l.resolveWith(i, r),
            l.promise()
        }
    }),
    pt.fn.ready = function(t) {
        return pt.ready.promise().done(t),
        this
    }
    ,
    pt.extend({
        isReady: !1,
        readyWait: 1,
        holdReady: function(t) {
            t ? pt.readyWait++ : pt.ready(!0)
        },
        ready: function(t) {
            (!0 === t ? --pt.readyWait : pt.isReady) || (pt.isReady = !0,
            !0 !== t && --pt.readyWait > 0 || (Nt.resolveWith(it, [pt]),
            pt.fn.triggerHandler && (pt(it).triggerHandler("ready"),
            pt(it).off("ready"))))
        }
    }),
    pt.ready.promise = function(e) {
        if (!Nt)
            if (Nt = pt.Deferred(),
            "complete" === it.readyState || "loading" !== it.readyState && !it.documentElement.doScroll)
                t.setTimeout(pt.ready);
            else if (it.addEventListener)
                it.addEventListener("DOMContentLoaded", s),
                t.addEventListener("load", s);
            else {
                it.attachEvent("onreadystatechange", s),
                t.attachEvent("onload", s);
                var n = !1;
                try {
                    n = null == t.frameElement && it.documentElement
                } catch (i) {}
                n && n.doScroll && function e() {
                    if (!pt.isReady) {
                        try {
                            n.doScroll("left")
                        } catch (i) {
                            return t.setTimeout(e, 50)
                        }
                        a(),
                        pt.ready()
                    }
                }()
            }
        return Nt.promise(e)
    }
    ,
    pt.ready.promise(),
    pt(dt))
        break;
    dt.ownFirst = "0" === Dt,
    dt.inlineBlockNeedsLayout = !1,
    pt(function() {
        var t, e, n, i;
        (n = it.getElementsByTagName("body")[0]) && n.style && (e = it.createElement("div"),
        (i = it.createElement("div")).style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px",
        n.appendChild(i).appendChild(e),
        "undefined" != typeof e.style.zoom && (e.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1",
        dt.inlineBlockNeedsLayout = t = 3 === e.offsetWidth,
        t && (n.style.zoom = 1)),
        n.removeChild(i))
    }),
    function() {
        var t = it.createElement("div");
        dt.deleteExpando = !0;
        try {
            delete t.test
        } catch (e) {
            dt.deleteExpando = !1
        }
        t = null
    }();
    var At, _t = function(t) {
        var e = pt.noData[(t.nodeName + " ").toLowerCase()]
          , n = +t.nodeType || 1;
        return (1 === n || 9 === n) && (!e || !0 !== e && t.getAttribute("classid") === e)
    }, Ot = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, It = /([A-Z])/g;
    pt.extend({
        cache: {},
        noData: {
            "applet ": !0,
            "embed ": !0,
            "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
        },
        hasData: function(t) {
            return !!(t = t.nodeType ? pt.cache[t[pt.expando]] : t[pt.expando]) && !c(t)
        },
        data: function(t, e, n) {
            return u(t, e, n)
        },
        removeData: function(t, e) {
            return d(t, e)
        },
        _data: function(t, e, n) {
            return u(t, e, n, !0)
        },
        _removeData: function(t, e) {
            return d(t, e, !0)
        }
    }),
    pt.fn.extend({
        data: function(t, e) {
            var n, i, o, r = this[0], a = r && r.attributes;
            if (t === undefined) {
                if (this.length && (o = pt.data(r),
                1 === r.nodeType && !pt._data(r, "parsedAttrs"))) {
                    for (n = a.length; n--; )
                        a[n] && 0 === (i = a[n].name).indexOf("data-") && l(r, i = pt.camelCase(i.slice(5)), o[i]);
                    pt._data(r, "parsedAttrs", !0)
                }
                return o
            }
            return "object" == typeof t ? this.each(function() {
                pt.data(this, t)
            }) : arguments.length > 1 ? this.each(function() {
                pt.data(this, t, e)
            }) : r ? l(r, t, pt.data(r, t)) : undefined
        },
        removeData: function(t) {
            return this.each(function() {
                pt.removeData(this, t)
            })
        }
    }),
    pt.extend({
        queue: function(t, e, n) {
            var i;
            if (t)
                return e = (e || "fx") + "queue",
                i = pt._data(t, e),
                n && (!i || pt.isArray(n) ? i = pt._data(t, e, pt.makeArray(n)) : i.push(n)),
                i || []
        },
        dequeue: function(t, e) {
            e = e || "fx";
            var n = pt.queue(t, e)
              , i = n.length
              , o = n.shift()
              , r = pt._queueHooks(t, e)
              , a = function() {
                pt.dequeue(t, e)
            };
            "inprogress" === o && (o = n.shift(),
            i--),
            o && ("fx" === e && n.unshift("inprogress"),
            delete r.stop,
            o.call(t, a, r)),
            !i && r && r.empty.fire()
        },
        _queueHooks: function(t, e) {
            var n = e + "queueHooks";
            return pt._data(t, n) || pt._data(t, n, {
                empty: pt.Callbacks("once memory").add(function() {
                    pt._removeData(t, e + "queue"),
                    pt._removeData(t, n)
                })
            })
        }
    }),
    pt.fn.extend({
        queue: function(t, e) {
            var n = 2;
            return "string" != typeof t && (e = t,
            t = "fx",
            n--),
            arguments.length < n ? pt.queue(this[0], t) : e === undefined ? this : this.each(function() {
                var n = pt.queue(this, t, e);
                pt._queueHooks(this, t),
                "fx" === t && "inprogress" !== n[0] && pt.dequeue(this, t)
            })
        },
        dequeue: function(t) {
            return this.each(function() {
                pt.dequeue(this, t)
            })
        },
        clearQueue: function(t) {
            return this.queue(t || "fx", [])
        },
        promise: function(t, e) {
            var n, i = 1, o = pt.Deferred(), r = this, a = this.length, s = function() {
                --i || o.resolveWith(r, [r])
            };
            for ("string" != typeof t && (e = t,
            t = undefined),
            t = t || "fx"; a--; )
                (n = pt._data(r[a], t + "queueHooks")) && n.empty && (i++,
                n.empty.add(s));
            return s(),
            o.promise(e)
        }
    }),
    dt.shrinkWrapBlocks = function() {
        return null != At ? At : (At = !1,
        (e = it.getElementsByTagName("body")[0]) && e.style ? (t = it.createElement("div"),
        (n = it.createElement("div")).style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px",
        e.appendChild(n).appendChild(t),
        "undefined" != typeof t.style.zoom && (t.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1",
        t.appendChild(it.createElement("div")).style.width = "5px",
        At = 3 !== t.offsetWidth),
        e.removeChild(n),
        At) : void 0);
        var t, e, n
    }
    ;
    var Lt, Rt, Ht, Ft = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, Pt = new RegExp("^(?:([+-])=|)(" + Ft + ")([a-z%]*)$","i"), qt = ["Top", "Right", "Bottom", "Left"], Bt = function(t, e) {
        return t = e || t,
        "none" === pt.css(t, "display") || !pt.contains(t.ownerDocument, t)
    }, Mt = function(t, e, n, i, o, r, a) {
        var s = 0
          , l = t.length
          , c = null == n;
        if ("object" === pt.type(n))
            for (s in o = !0,
            n)
                Mt(t, e, s, n[s], !0, r, a);
        else if (i !== undefined && (o = !0,
        pt.isFunction(i) || (a = !0),
        c && (a ? (e.call(t, i),
        e = null) : (c = e,
        e = function(t, e, n) {
            return c.call(pt(t), n)
        }
        )),
        e))
            for (; s < l; s++)
                e(t[s], n, a ? i : i.call(t[s], s, e(t[s], n)));
        return o ? t : c ? e.call(t) : l ? e(t[0], n) : r
    }, Wt = /^(?:checkbox|radio)$/i, Ut = /<([\w:-]+)/, zt = /^$|\/(?:java|ecma)script/i, Vt = /^\s+/, Xt = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";
    Lt = it.createElement("div"),
    Rt = it.createDocumentFragment(),
    Ht = it.createElement("input"),
    Lt.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",
    dt.leadingWhitespace = 3 === Lt.firstChild.nodeType,
    dt.tbody = !Lt.getElementsByTagName("tbody").length,
    dt.htmlSerialize = !!Lt.getElementsByTagName("link").length,
    dt.html5Clone = "<:nav></:nav>" !== it.createElement("nav").cloneNode(!0).outerHTML,
    Ht.type = "checkbox",
    Ht.checked = !0,
    Rt.appendChild(Ht),
    dt.appendChecked = Ht.checked,
    Lt.innerHTML = "<textarea>x</textarea>",
    dt.noCloneChecked = !!Lt.cloneNode(!0).lastChild.defaultValue,
    Rt.appendChild(Lt),
    (Ht = it.createElement("input")).setAttribute("type", "radio"),
    Ht.setAttribute("checked", "checked"),
    Ht.setAttribute("name", "t"),
    Lt.appendChild(Ht),
    dt.checkClone = Lt.cloneNode(!0).cloneNode(!0).lastChild.checked,
    dt.noCloneEvent = !!Lt.addEventListener,
    Lt[pt.expando] = 1,
    dt.attributes = !Lt.getAttribute(pt.expando);
    var Qt = {
        option: [1, "<select multiple='multiple'>", "</select>"],
        legend: [1, "<fieldset>", "</fieldset>"],
        area: [1, "<map>", "</map>"],
        param: [1, "<object>", "</object>"],
        thead: [1, "<table>", "</table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: dt.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
    };
    Qt.optgroup = Qt.option,
    Qt.tbody = Qt.tfoot = Qt.colgroup = Qt.caption = Qt.thead,
    Qt.th = Qt.td;
    var Jt = /<|&#?\w+;/
      , Gt = /<tbody/i;
    !function() {
        var e, n, i = it.createElement("div");
        for (e in {
            submit: !0,
            change: !0,
            focusin: !0
        })
            n = "on" + e,
            (dt[e] = n in t) || (i.setAttribute(n, "t"),
            dt[e] = !1 === i.attributes[n].expando);
        i = null
    }();
    var Yt = /^(?:input|select|textarea)$/i
      , Kt = /^key/
      , Zt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/
      , te = /^(?:focusinfocus|focusoutblur)$/
      , ee = /^([^.]*)(?:\.(.+)|)/;
    pt.event = {
        global: {},
        add: function(t, e, n, i, o) {
            var r, a, s, l, c, u, d, f, p, h, m, g = pt._data(t);
            if (g) {
                for (n.handler && (n = (l = n).handler,
                o = l.selector),
                n.guid || (n.guid = pt.guid++),
                (a = g.events) || (a = g.events = {}),
                (u = g.handle) || ((u = g.handle = function(t) {
                    return void 0 === pt || t && pt.event.triggered === t.type ? undefined : pt.event.dispatch.apply(u.elem, arguments)
                }
                ).elem = t),
                s = (e = (e || "").match(jt) || [""]).length; s--; )
                    p = m = (r = ee.exec(e[s]) || [])[1],
                    h = (r[2] || "").split(".").sort(),
                    p && (c = pt.event.special[p] || {},
                    p = (o ? c.delegateType : c.bindType) || p,
                    c = pt.event.special[p] || {},
                    d = pt.extend({
                        type: p,
                        origType: m,
                        data: i,
                        handler: n,
                        guid: n.guid,
                        selector: o,
                        needsContext: o && pt.expr.match.needsContext.test(o),
                        namespace: h.join(".")
                    }, l),
                    (f = a[p]) || ((f = a[p] = []).delegateCount = 0,
                    c.setup && !1 !== c.setup.call(t, i, h, u) || (t.addEventListener ? t.addEventListener(p, u, !1) : t.attachEvent && t.attachEvent("on" + p, u))),
                    c.add && (c.add.call(t, d),
                    d.handler.guid || (d.handler.guid = n.guid)),
                    o ? f.splice(f.delegateCount++, 0, d) : f.push(d),
                    pt.event.global[p] = !0);
                t = null
            }
        },
        remove: function(t, e, n, i, o) {
            var r, a, s, l, c, u, d, f, p, h, m, g = pt.hasData(t) && pt._data(t);
            if (g && (u = g.events)) {
                for (c = (e = (e || "").match(jt) || [""]).length; c--; )
                    if (p = m = (s = ee.exec(e[c]) || [])[1],
                    h = (s[2] || "").split(".").sort(),
                    p) {
                        for (d = pt.event.special[p] || {},
                        f = u[p = (i ? d.delegateType : d.bindType) || p] || [],
                        s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"),
                        l = r = f.length; r--; )
                            a = f[r],
                            !o && m !== a.origType || n && n.guid !== a.guid || s && !s.test(a.namespace) || i && i !== a.selector && ("**" !== i || !a.selector) || (f.splice(r, 1),
                            a.selector && f.delegateCount--,
                            d.remove && d.remove.call(t, a));
                        l && !f.length && (d.teardown && !1 !== d.teardown.call(t, h, g.handle) || pt.removeEvent(t, p, g.handle),
                        delete u[p])
                    } else
                        for (p in u)
                            pt.event.remove(t, p + e[c], n, i, !0);
                pt.isEmptyObject(u) && (delete g.handle,
                pt._removeData(t, "events"))
            }
        },
        trigger: function(e, n, i, o) {
            var r, a, s, l, c, u, d, f = [i || it], p = ut.call(e, "type") ? e.type : e, h = ut.call(e, "namespace") ? e.namespace.split(".") : [];
            if (s = u = i = i || it,
            3 !== i.nodeType && 8 !== i.nodeType && !te.test(p + pt.event.triggered) && (p.indexOf(".") > -1 && (p = (h = p.split(".")).shift(),
            h.sort()),
            a = p.indexOf(":") < 0 && "on" + p,
            (e = e[pt.expando] ? e : new pt.Event(p,"object" == typeof e && e)).isTrigger = o ? 2 : 3,
            e.namespace = h.join("."),
            e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null,
            e.result = undefined,
            e.target || (e.target = i),
            n = null == n ? [e] : pt.makeArray(n, [e]),
            c = pt.event.special[p] || {},
            o || !c.trigger || !1 !== c.trigger.apply(i, n))) {
                if (!o && !c.noBubble && !pt.isWindow(i)) {
                    for (l = c.delegateType || p,
                    te.test(l + p) || (s = s.parentNode); s; s = s.parentNode)
                        f.push(s),
                        u = s;
                    u === (i.ownerDocument || it) && f.push(u.defaultView || u.parentWindow || t)
                }
                for (d = 0; (s = f[d++]) && !e.isPropagationStopped(); )
                    e.type = d > 1 ? l : c.bindType || p,
                    (r = (pt._data(s, "events") || {})[e.type] && pt._data(s, "handle")) && r.apply(s, n),
                    (r = a && s[a]) && r.apply && _t(s) && (e.result = r.apply(s, n),
                    !1 === e.result && e.preventDefault());
                if (e.type = p,
                !o && !e.isDefaultPrevented() && (!c._default || !1 === c._default.apply(f.pop(), n)) && _t(i) && a && i[p] && !pt.isWindow(i)) {
                    (u = i[a]) && (i[a] = null),
                    pt.event.triggered = p;
                    try {
                        i[p]()
                    } catch (m) {}
                    pt.event.triggered = undefined,
                    u && (i[a] = u)
                }
                return e.result
            }
        },
        dispatch: function(t) {
            t = pt.event.fix(t);
            var e, n, i, o, r, a = [], s = ot.call(arguments), l = (pt._data(this, "events") || {})[t.type] || [], c = pt.event.special[t.type] || {};
            if (s[0] = t,
            t.delegateTarget = this,
            !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
                for (a = pt.event.handlers.call(this, t, l),
                e = 0; (o = a[e++]) && !t.isPropagationStopped(); )
                    for (t.currentTarget = o.elem,
                    n = 0; (r = o.handlers[n++]) && !t.isImmediatePropagationStopped(); )
                        t.rnamespace && !t.rnamespace.test(r.namespace) || (t.handleObj = r,
                        t.data = r.data,
                        (i = ((pt.event.special[r.origType] || {}).handle || r.handler).apply(o.elem, s)) !== undefined && !1 === (t.result = i) && (t.preventDefault(),
                        t.stopPropagation()));
                return c.postDispatch && c.postDispatch.call(this, t),
                t.result
            }
        },
        handlers: function(t, e) {
            var n, i, o, r, a = [], s = e.delegateCount, l = t.target;
            if (s && l.nodeType && ("click" !== t.type || isNaN(t.button) || t.button < 1))
                for (; l != this; l = l.parentNode || this)
                    if (1 === l.nodeType && (!0 !== l.disabled || "click" !== t.type)) {
                        for (i = [],
                        n = 0; n < s; n++)
                            i[o = (r = e[n]).selector + " "] === undefined && (i[o] = r.needsContext ? pt(o, this).index(l) > -1 : pt.find(o, this, null, [l]).length),
                            i[o] && i.push(r);
                        i.length && a.push({
                            elem: l,
                            handlers: i
                        })
                    }
            return s < e.length && a.push({
                elem: this,
                handlers: e.slice(s)
            }),
            a
        },
        fix: function(t) {
            if (t[pt.expando])
                return t;
            var e, n, i, o = t.type, r = t, a = this.fixHooks[o];
            for (a || (this.fixHooks[o] = a = Zt.test(o) ? this.mouseHooks : Kt.test(o) ? this.keyHooks : {}),
            i = a.props ? this.props.concat(a.props) : this.props,
            t = new pt.Event(r),
            e = i.length; e--; )
                t[n = i[e]] = r[n];
            return t.target || (t.target = r.srcElement || it),
            3 === t.target.nodeType && (t.target = t.target.parentNode),
            t.metaKey = !!t.metaKey,
            a.filter ? a.filter(t, r) : t
        },
        props: "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
        fixHooks: {},
        keyHooks: {
            props: "char charCode key keyCode".split(" "),
            filter: function(t, e) {
                return null == t.which && (t.which = null != e.charCode ? e.charCode : e.keyCode),
                t
            }
        },
        mouseHooks: {
            props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
            filter: function(t, e) {
                var n, i, o, r = e.button, a = e.fromElement;
                return null == t.pageX && null != e.clientX && (o = (i = t.target.ownerDocument || it).documentElement,
                n = i.body,
                t.pageX = e.clientX + (o && o.scrollLeft || n && n.scrollLeft || 0) - (o && o.clientLeft || n && n.clientLeft || 0),
                t.pageY = e.clientY + (o && o.scrollTop || n && n.scrollTop || 0) - (o && o.clientTop || n && n.clientTop || 0)),
                !t.relatedTarget && a && (t.relatedTarget = a === t.target ? e.toElement : a),
                t.which || r === undefined || (t.which = 1 & r ? 1 : 2 & r ? 3 : 4 & r ? 2 : 0),
                t
            }
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== w() && this.focus)
                        try {
                            return this.focus(),
                            !1
                        } catch (t) {}
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    if (this === w() && this.blur)
                        return this.blur(),
                        !1
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    if (pt.nodeName(this, "input") && "checkbox" === this.type && this.click)
                        return this.click(),
                        !1
                },
                _default: function(t) {
                    return pt.nodeName(t.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(t) {
                    t.result !== undefined && t.originalEvent && (t.originalEvent.returnValue = t.result)
                }
            }
        },
        simulate: function(t, e, n) {
            var i = pt.extend(new pt.Event, n, {
                type: t,
                isSimulated: !0
            });
            pt.event.trigger(i, null, e),
            i.isDefaultPrevented() && n.preventDefault()
        }
    },
    pt.removeEvent = it.removeEventListener ? function(t, e, n) {
        t.removeEventListener && t.removeEventListener(e, n)
    }
    : function(t, e, n) {
        var i = "on" + e;
        t.detachEvent && ("undefined" == typeof t[i] && (t[i] = null),
        t.detachEvent(i, n))
    }
    ,
    pt.Event = function(t, e) {
        if (!(this instanceof pt.Event))
            return new pt.Event(t,e);
        t && t.type ? (this.originalEvent = t,
        this.type = t.type,
        this.isDefaultPrevented = t.defaultPrevented || t.defaultPrevented === undefined && !1 === t.returnValue ? y : b) : this.type = t,
        e && pt.extend(this, e),
        this.timeStamp = t && t.timeStamp || pt.now(),
        this[pt.expando] = !0
    }
    ,
    pt.Event.prototype = {
        constructor: pt.Event,
        isDefaultPrevented: b,
        isPropagationStopped: b,
        isImmediatePropagationStopped: b,
        preventDefault: function() {
            var t = this.originalEvent;
            this.isDefaultPrevented = y,
            t && (t.preventDefault ? t.preventDefault() : t.returnValue = !1)
        },
        stopPropagation: function() {
            var t = this.originalEvent;
            this.isPropagationStopped = y,
            t && !this.isSimulated && (t.stopPropagation && t.stopPropagation(),
            t.cancelBubble = !0)
        },
        stopImmediatePropagation: function() {
            var t = this.originalEvent;
            this.isImmediatePropagationStopped = y,
            t && t.stopImmediatePropagation && t.stopImmediatePropagation(),
            this.stopPropagation()
        }
    },
    pt.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(t, e) {
        pt.event.special[t] = {
            delegateType: e,
            bindType: e,
            handle: function(t) {
                var n, i = this, o = t.relatedTarget, r = t.handleObj;
                return o && (o === i || pt.contains(i, o)) || (t.type = r.origType,
                n = r.handler.apply(this, arguments),
                t.type = e),
                n
            }
        }
    }),
    dt.submit || (pt.event.special.submit = {
        setup: function() {
            if (pt.nodeName(this, "form"))
                return !1;
            pt.event.add(this, "click._submit keypress._submit", function(t) {
                var e = t.target
                  , n = pt.nodeName(e, "input") || pt.nodeName(e, "button") ? pt.prop(e, "form") : undefined;
                n && !pt._data(n, "submit") && (pt.event.add(n, "submit._submit", function(t) {
                    t._submitBubble = !0
                }),
                pt._data(n, "submit", !0))
            })
        },
        postDispatch: function(t) {
            t._submitBubble && (delete t._submitBubble,
            this.parentNode && !t.isTrigger && pt.event.simulate("submit", this.parentNode, t))
        },
        teardown: function() {
            if (pt.nodeName(this, "form"))
                return !1;
            pt.event.remove(this, "._submit")
        }
    }),
    dt.change || (pt.event.special.change = {
        setup: function() {
            if (Yt.test(this.nodeName))
                return "checkbox" !== this.type && "radio" !== this.type || (pt.event.add(this, "propertychange._change", function(t) {
                    "checked" === t.originalEvent.propertyName && (this._justChanged = !0)
                }),
                pt.event.add(this, "click._change", function(t) {
                    this._justChanged && !t.isTrigger && (this._justChanged = !1),
                    pt.event.simulate("change", this, t)
                })),
                !1;
            pt.event.add(this, "beforeactivate._change", function(t) {
                var e = t.target;
                Yt.test(e.nodeName) && !pt._data(e, "change") && (pt.event.add(e, "change._change", function(t) {
                    !this.parentNode || t.isSimulated || t.isTrigger || pt.event.simulate("change", this.parentNode, t)
                }),
                pt._data(e, "change", !0))
            })
        },
        handle: function(t) {
            var e = t.target;
            if (this !== e || t.isSimulated || t.isTrigger || "radio" !== e.type && "checkbox" !== e.type)
                return t.handleObj.handler.apply(this, arguments)
        },
        teardown: function() {
            return pt.event.remove(this, "._change"),
            !Yt.test(this.nodeName)
        }
    }),
    dt.focusin || pt.each({
        focus: "focusin",
        blur: "focusout"
    }, function(t, e) {
        var n = function(t) {
            pt.event.simulate(e, t.target, pt.event.fix(t))
        };
        pt.event.special[e] = {
            setup: function() {
                var i = this.ownerDocument || this
                  , o = pt._data(i, e);
                o || i.addEventListener(t, n, !0),
                pt._data(i, e, (o || 0) + 1)
            },
            teardown: function() {
                var i = this.ownerDocument || this
                  , o = pt._data(i, e) - 1;
                o ? pt._data(i, e, o) : (i.removeEventListener(t, n, !0),
                pt._removeData(i, e))
            }
        }
    }),
    pt.fn.extend({
        on: function(t, e, n, i) {
            return x(this, t, e, n, i)
        },
        one: function(t, e, n, i) {
            return x(this, t, e, n, i, 1)
        },
        off: function(t, e, n) {
            var i, o;
            if (t && t.preventDefault && t.handleObj)
                return i = t.handleObj,
                pt(t.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler),
                this;
            if ("object" == typeof t) {
                for (o in t)
                    this.off(o, e, t[o]);
                return this
            }
            return !1 !== e && "function" != typeof e || (n = e,
            e = undefined),
            !1 === n && (n = b),
            this.each(function() {
                pt.event.remove(this, t, n, e)
            })
        },
        trigger: function(t, e) {
            return this.each(function() {
                pt.event.trigger(t, e, this)
            })
        },
        triggerHandler: function(t, e) {
            var n = this[0];
            if (n)
                return pt.event.trigger(t, e, n, !0)
        }
    });
    var ne = / jQuery\d+="(?:null|\d+)"/g
      , ie = new RegExp("<(?:" + Xt + ")[\\s/>]","i")
      , oe = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi
      , re = /<script|<style|<link/i
      , ae = /checked\s*(?:[^=]|=\s*.checked.)/i
      , se = /^true\/(.*)/
      , le = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g
      , ce = p(it).appendChild(it.createElement("div"));
    pt.extend({
        htmlPrefilter: function(t) {
            return t.replace(oe, "<$1></$2>")
        },
        clone: function(t, e, n) {
            var i, o, r, a, s, l = pt.contains(t.ownerDocument, t);
            if (dt.html5Clone || pt.isXMLDoc(t) || !ie.test("<" + t.nodeName + ">") ? r = t.cloneNode(!0) : (ce.innerHTML = t.outerHTML,
            ce.removeChild(r = ce.firstChild)),
            !(dt.noCloneEvent && dt.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || pt.isXMLDoc(t)))
                for (i = h(r),
                s = h(t),
                a = 0; null != (o = s[a]); ++a)
                    i[a] && E(o, i[a]);
            if (e)
                if (n)
                    for (s = s || h(t),
                    i = i || h(r),
                    a = 0; null != (o = s[a]); a++)
                        S(o, i[a]);
                else
                    S(t, r);
            return (i = h(r, "script")).length > 0 && m(i, !l && h(t, "script")),
            i = s = o = null,
            r
        },
        cleanData: function(t, e) {
            for (var n, i, o, r, a = 0, s = pt.expando, l = pt.cache, c = dt.attributes, u = pt.event.special; null != (n = t[a]); a++)
                if ((e || _t(n)) && (r = (o = n[s]) && l[o])) {
                    if (r.events)
                        for (i in r.events)
                            u[i] ? pt.event.remove(n, i) : pt.removeEvent(n, i, r.handle);
                    l[o] && (delete l[o],
                    c || "undefined" == typeof n.removeAttribute ? n[s] = undefined : n.removeAttribute(s),
                    nt.push(o))
                }
        }
    }),
    pt.fn.extend({
        domManip: $,
        detach: function(t) {
            return N(this, t, !0)
        },
        remove: function(t) {
            return N(this, t)
        },
        text: function(t) {
            return Mt(this, function(t) {
                return t === undefined ? pt.text(this) : this.empty().append((this[0] && this[0].ownerDocument || it).createTextNode(t))
            }, null, t, arguments.length)
        },
        append: function() {
            return $(this, arguments, function(t) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || C(this, t).appendChild(t)
            })
        },
        prepend: function() {
            return $(this, arguments, function(t) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var e = C(this, t);
                    e.insertBefore(t, e.firstChild)
                }
            })
        },
        before: function() {
            return $(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this)
            })
        },
        after: function() {
            return $(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
            })
        },
        empty: function() {
            for (var t, e = 0; null != (t = this[e]); e++) {
                for (1 === t.nodeType && pt.cleanData(h(t, !1)); t.firstChild; )
                    t.removeChild(t.firstChild);
                t.options && pt.nodeName(t, "select") && (t.options.length = 0)
            }
            return this
        },
        clone: function(t, e) {
            return t = null != t && t,
            e = null == e ? t : e,
            this.map(function() {
                return pt.clone(this, t, e)
            })
        },
        html: function(t) {
            return Mt(this, function(t) {
                var e = this[0] || {}
                  , n = 0
                  , i = this.length;
                if (t === undefined)
                    return 1 === e.nodeType ? e.innerHTML.replace(ne, "") : undefined;
                if ("string" == typeof t && !re.test(t) && (dt.htmlSerialize || !ie.test(t)) && (dt.leadingWhitespace || !Vt.test(t)) && !Qt[(Ut.exec(t) || ["", ""])[1].toLowerCase()]) {
                    t = pt.htmlPrefilter(t);
                    try {
                        for (; n < i; n++)
                            1 === (e = this[n] || {}).nodeType && (pt.cleanData(h(e, !1)),
                            e.innerHTML = t);
                        e = 0
                    } catch (o) {}
                }
                e && this.empty().append(t)
            }, null, t, arguments.length)
        },
        replaceWith: function() {
            var t = [];
            return $(this, arguments, function(e) {
                var n = this.parentNode;
                pt.inArray(this, t) < 0 && (pt.cleanData(h(this)),
                n && n.replaceChild(e, this))
            }, t)
        }
    }),
    pt.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(t, e) {
        pt.fn[t] = function(t) {
            for (var n, i = 0, o = [], r = pt(t), a = r.length - 1; i <= a; i++)
                n = i === a ? this : this.clone(!0),
                pt(r[i])[e](n),
                at.apply(o, n.get());
            return this.pushStack(o)
        }
    });
    var ue, de = {
        HTML: "block",
        BODY: "block"
    }, fe = /^margin/, pe = new RegExp("^(" + Ft + ")(?!px)[a-z%]+$","i"), he = function(t, e, n, i) {
        var o, r, a = {};
        for (r in e)
            a[r] = t.style[r],
            t.style[r] = e[r];
        for (r in o = n.apply(t, i || []),
        e)
            t.style[r] = a[r];
        return o
    }, me = it.documentElement;
    !function() {
        function e() {
            var e, u, d = it.documentElement;
            d.appendChild(l),
            c.style.cssText = "-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",
            n = o = s = !1,
            i = a = !0,
            t.getComputedStyle && (u = t.getComputedStyle(c),
            n = "1%" !== (u || {}).top,
            s = "2px" === (u || {}).marginLeft,
            o = "4px" === (u || {
                width: "4px"
            }).width,
            c.style.marginRight = "50%",
            i = "4px" === (u || {
                marginRight: "4px"
            }).marginRight,
            (e = c.appendChild(it.createElement("div"))).style.cssText = c.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",
            e.style.marginRight = e.style.width = "0",
            c.style.width = "1px",
            a = !parseFloat((t.getComputedStyle(e) || {}).marginRight),
            c.removeChild(e)),
            c.style.display = "none",
            (r = 0 === c.getClientRects().length) && (c.style.display = "",
            c.innerHTML = "<table><tr><td></td><td>t</td></tr></table>",
            c.childNodes[0].style.borderCollapse = "separate",
            (e = c.getElementsByTagName("td"))[0].style.cssText = "margin:0;border:0;padding:0;display:none",
            (r = 0 === e[0].offsetHeight) && (e[0].style.display = "",
            e[1].style.display = "none",
            r = 0 === e[0].offsetHeight)),
            d.removeChild(l)
        }
        var n, i, o, r, a, s, l = it.createElement("div"), c = it.createElement("div");
        c.style && (c.style.cssText = "float:left;opacity:.5",
        dt.opacity = "0.5" === c.style.opacity,
        dt.cssFloat = !!c.style.cssFloat,
        c.style.backgroundClip = "content-box",
        c.cloneNode(!0).style.backgroundClip = "",
        dt.clearCloneStyle = "content-box" === c.style.backgroundClip,
        (l = it.createElement("div")).style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",
        c.innerHTML = "",
        l.appendChild(c),
        dt.boxSizing = "" === c.style.boxSizing || "" === c.style.MozBoxSizing || "" === c.style.WebkitBoxSizing,
        pt.extend(dt, {
            reliableHiddenOffsets: function() {
                return null == n && e(),
                r
            },
            boxSizingReliable: function() {
                return null == n && e(),
                o
            },
            pixelMarginRight: function() {
                return null == n && e(),
                i
            },
            pixelPosition: function() {
                return null == n && e(),
                n
            },
            reliableMarginRight: function() {
                return null == n && e(),
                a
            },
            reliableMarginLeft: function() {
                return null == n && e(),
                s
            }
        }))
    }();
    var ge, ve, ye = /^(top|right|bottom|left)$/;
    t.getComputedStyle ? (ge = function(e) {
        var n = e.ownerDocument.defaultView;
        return n && n.opener || (n = t),
        n.getComputedStyle(e)
    }
    ,
    ve = function(t, e, n) {
        var i, o, r, a, s = t.style;
        return "" !== (a = (n = n || ge(t)) ? n.getPropertyValue(e) || n[e] : undefined) && a !== undefined || pt.contains(t.ownerDocument, t) || (a = pt.style(t, e)),
        n && !dt.pixelMarginRight() && pe.test(a) && fe.test(e) && (i = s.width,
        o = s.minWidth,
        r = s.maxWidth,
        s.minWidth = s.maxWidth = s.width = a,
        a = n.width,
        s.width = i,
        s.minWidth = o,
        s.maxWidth = r),
        a === undefined ? a : a + ""
    }
    ) : me.currentStyle && (ge = function(t) {
        return t.currentStyle
    }
    ,
    ve = function(t, e, n) {
        var i, o, r, a, s = t.style;
        return null == (a = (n = n || ge(t)) ? n[e] : undefined) && s && s[e] && (a = s[e]),
        pe.test(a) && !ye.test(e) && (i = s.left,
        (r = (o = t.runtimeStyle) && o.left) && (o.left = t.currentStyle.left),
        s.left = "fontSize" === e ? "1em" : a,
        a = s.pixelLeft + "px",
        s.left = i,
        r && (o.left = r)),
        a === undefined ? a : a + "" || "auto"
    }
    );
    var be = /alpha\([^)]*\)/i
      , we = /opacity\s*=\s*([^)]*)/i
      , xe = /^(none|table(?!-c[ea]).+)/
      , Ce = new RegExp("^(" + Ft + ")(.*)$","i")
      , Te = {
        position: "absolute",
        visibility: "hidden",
        display: "block"
    }
      , ke = {
        letterSpacing: "0",
        fontWeight: "400"
    }
      , Se = ["Webkit", "O", "Moz", "ms"]
      , Ee = it.createElement("div").style;
    pt.extend({
        cssHooks: {
            opacity: {
                get: function(t, e) {
                    if (e) {
                        var n = ve(t, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            float: dt.cssFloat ? "cssFloat" : "styleFloat"
        },
        style: function(t, e, n, i) {
            if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                var o, r, a, s = pt.camelCase(e), l = t.style;
                if (e = pt.cssProps[s] || (pt.cssProps[s] = _(s) || s),
                a = pt.cssHooks[e] || pt.cssHooks[s],
                n === undefined)
                    return a && "get"in a && (o = a.get(t, !1, i)) !== undefined ? o : l[e];
                if ("string" === (r = typeof n) && (o = Pt.exec(n)) && o[1] && (n = f(t, e, o),
                r = "number"),
                null != n && n == n && ("number" === r && (n += o && o[3] || (pt.cssNumber[s] ? "" : "px")),
                dt.clearCloneStyle || "" !== n || 0 !== e.indexOf("background") || (l[e] = "inherit"),
                !(a && "set"in a && (n = a.set(t, n, i)) === undefined)))
                    try {
                        l[e] = n
                    } catch (c) {}
            }
        },
        css: function(t, e, n, i) {
            var o, r, a, s = pt.camelCase(e);
            return e = pt.cssProps[s] || (pt.cssProps[s] = _(s) || s),
            (a = pt.cssHooks[e] || pt.cssHooks[s]) && "get"in a && (r = a.get(t, !0, n)),
            r === undefined && (r = ve(t, e, i)),
            "normal" === r && e in ke && (r = ke[e]),
            "" === n || n ? (o = parseFloat(r),
            !0 === n || isFinite(o) ? o || 0 : r) : r
        }
    }),
    pt.each(["height", "width"], function(t, e) {
        pt.cssHooks[e] = {
            get: function(t, n, i) {
                if (n)
                    return xe.test(pt.css(t, "display")) && 0 === t.offsetWidth ? he(t, Te, function() {
                        return R(t, e, i)
                    }) : R(t, e, i)
            },
            set: function(t, n, i) {
                var o = i && ge(t);
                return I(t, n, i ? L(t, e, i, dt.boxSizing && "border-box" === pt.css(t, "boxSizing", !1, o), o) : 0)
            }
        }
    }),
    dt.opacity || (pt.cssHooks.opacity = {
        get: function(t, e) {
            return we.test((e && t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : e ? "1" : ""
        },
        set: function(t, e) {
            var n = t.style
              , i = t.currentStyle
              , o = pt.isNumeric(e) ? "alpha(opacity=" + 100 * e + ")" : ""
              , r = i && i.filter || n.filter || "";
            n.zoom = 1,
            (e >= 1 || "" === e) && "" === pt.trim(r.replace(be, "")) && n.removeAttribute && (n.removeAttribute("filter"),
            "" === e || i && !i.filter) || (n.filter = be.test(r) ? r.replace(be, o) : r + " " + o)
        }
    }),
    pt.cssHooks.marginRight = A(dt.reliableMarginRight, function(t, e) {
        if (e)
            return he(t, {
                display: "inline-block"
            }, ve, [t, "marginRight"])
    }),
    pt.cssHooks.marginLeft = A(dt.reliableMarginLeft, function(t, e) {
        if (e)
            return (parseFloat(ve(t, "marginLeft")) || (pt.contains(t.ownerDocument, t) ? t.getBoundingClientRect().left - he(t, {
                marginLeft: 0
            }, function() {
                return t.getBoundingClientRect().left
            }) : 0)) + "px"
    }),
    pt.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(t, e) {
        pt.cssHooks[t + e] = {
            expand: function(n) {
                for (var i = 0, o = {}, r = "string" == typeof n ? n.split(" ") : [n]; i < 4; i++)
                    o[t + qt[i] + e] = r[i] || r[i - 2] || r[0];
                return o
            }
        },
        fe.test(t) || (pt.cssHooks[t + e].set = I)
    }),
    pt.fn.extend({
        css: function(t, e) {
            return Mt(this, function(t, e, n) {
                var i, o, r = {}, a = 0;
                if (pt.isArray(e)) {
                    for (i = ge(t),
                    o = e.length; a < o; a++)
                        r[e[a]] = pt.css(t, e[a], !1, i);
                    return r
                }
                return n !== undefined ? pt.style(t, e, n) : pt.css(t, e)
            }, t, e, arguments.length > 1)
        },
        show: function() {
            return O(this, !0)
        },
        hide: function() {
            return O(this)
        },
        toggle: function(t) {
            return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each(function() {
                Bt(this) ? pt(this).show() : pt(this).hide()
            })
        }
    }),
    pt.Tween = H,
    H.prototype = {
        constructor: H,
        init: function(t, e, n, i, o, r) {
            this.elem = t,
            this.prop = n,
            this.easing = o || pt.easing._default,
            this.options = e,
            this.start = this.now = this.cur(),
            this.end = i,
            this.unit = r || (pt.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var t = H.propHooks[this.prop];
            return t && t.get ? t.get(this) : H.propHooks._default.get(this)
        },
        run: function(t) {
            var e, n = H.propHooks[this.prop];
            return this.options.duration ? this.pos = e = pt.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t,
            this.now = (this.end - this.start) * e + this.start,
            this.options.step && this.options.step.call(this.elem, this.now, this),
            n && n.set ? n.set(this) : H.propHooks._default.set(this),
            this
        }
    },
    H.prototype.init.prototype = H.prototype,
    H.propHooks = {
        _default: {
            get: function(t) {
                var e;
                return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = pt.css(t.elem, t.prop, "")) && "auto" !== e ? e : 0
            },
            set: function(t) {
                pt.fx.step[t.prop] ? pt.fx.step[t.prop](t) : 1 !== t.elem.nodeType || null == t.elem.style[pt.cssProps[t.prop]] && !pt.cssHooks[t.prop] ? t.elem[t.prop] = t.now : pt.style(t.elem, t.prop, t.now + t.unit)
            }
        }
    },
    H.propHooks.scrollTop = H.propHooks.scrollLeft = {
        set: function(t) {
            t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
        }
    },
    pt.easing = {
        linear: function(t) {
            return t
        },
        swing: function(t) {
            return .5 - Math.cos(t * Math.PI) / 2
        },
        _default: "swing"
    },
    pt.fx = H.prototype.init,
    pt.fx.step = {};
    var $e, Ne, De = /^(?:toggle|show|hide)$/, je = /queueHooks$/;
    pt.Animation = pt.extend(W, {
        tweeners: {
            "*": [function(t, e) {
                var n = this.createTween(t, e);
                return f(n.elem, t, Pt.exec(e), n),
                n
            }
            ]
        },
        tweener: function(t, e) {
            pt.isFunction(t) ? (e = t,
            t = ["*"]) : t = t.match(jt);
            for (var n, i = 0, o = t.length; i < o; i++)
                n = t[i],
                W.tweeners[n] = W.tweeners[n] || [],
                W.tweeners[n].unshift(e)
        },
        prefilters: [B],
        prefilter: function(t, e) {
            e ? W.prefilters.unshift(t) : W.prefilters.push(t)
        }
    }),
    pt.speed = function(t, e, n) {
        var i = t && "object" == typeof t ? pt.extend({}, t) : {
            complete: n || !n && e || pt.isFunction(t) && t,
            duration: t,
            easing: n && e || e && !pt.isFunction(e) && e
        };
        return i.duration = pt.fx.off ? 0 : "number" == typeof i.duration ? i.duration : i.duration in pt.fx.speeds ? pt.fx.speeds[i.duration] : pt.fx.speeds._default,
        null != i.queue && !0 !== i.queue || (i.queue = "fx"),
        i.old = i.complete,
        i.complete = function() {
            pt.isFunction(i.old) && i.old.call(this),
            i.queue && pt.dequeue(this, i.queue)
        }
        ,
        i
    }
    ,
    pt.fn.extend({
        fadeTo: function(t, e, n, i) {
            return this.filter(Bt).css("opacity", 0).show().end().animate({
                opacity: e
            }, t, n, i)
        },
        animate: function(t, e, n, i) {
            var o = pt.isEmptyObject(t)
              , r = pt.speed(e, n, i)
              , a = function() {
                var e = W(this, pt.extend({}, t), r);
                (o || pt._data(this, "finish")) && e.stop(!0)
            };
            return a.finish = a,
            o || !1 === r.queue ? this.each(a) : this.queue(r.queue, a)
        },
        stop: function(t, e, n) {
            var i = function(t) {
                var e = t.stop;
                delete t.stop,
                e(n)
            };
            return "string" != typeof t && (n = e,
            e = t,
            t = undefined),
            e && !1 !== t && this.queue(t || "fx", []),
            this.each(function() {
                var e = !0
                  , o = null != t && t + "queueHooks"
                  , r = pt.timers
                  , a = pt._data(this);
                if (o)
                    a[o] && a[o].stop && i(a[o]);
                else
                    for (o in a)
                        a[o] && a[o].stop && je.test(o) && i(a[o]);
                for (o = r.length; o--; )
                    r[o].elem !== this || null != t && r[o].queue !== t || (r[o].anim.stop(n),
                    e = !1,
                    r.splice(o, 1));
                !e && n || pt.dequeue(this, t)
            })
        },
        finish: function(t) {
            return !1 !== t && (t = t || "fx"),
            this.each(function() {
                var e, n = pt._data(this), i = n[t + "queue"], o = n[t + "queueHooks"], r = pt.timers, a = i ? i.length : 0;
                for (n.finish = !0,
                pt.queue(this, t, []),
                o && o.stop && o.stop.call(this, !0),
                e = r.length; e--; )
                    r[e].elem === this && r[e].queue === t && (r[e].anim.stop(!0),
                    r.splice(e, 1));
                for (e = 0; e < a; e++)
                    i[e] && i[e].finish && i[e].finish.call(this);
                delete n.finish
            })
        }
    }),
    pt.each(["toggle", "show", "hide"], function(t, e) {
        var n = pt.fn[e];
        pt.fn[e] = function(t, i, o) {
            return null == t || "boolean" == typeof t ? n.apply(this, arguments) : this.animate(P(e, !0), t, i, o)
        }
    }),
    pt.each({
        slideDown: P("show"),
        slideUp: P("hide"),
        slideToggle: P("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(t, e) {
        pt.fn[t] = function(t, n, i) {
            return this.animate(e, t, n, i)
        }
    }),
    pt.timers = [],
    pt.fx.tick = function() {
        var t, e = pt.timers, n = 0;
        for ($e = pt.now(); n < e.length; n++)
            (t = e[n])() || e[n] !== t || e.splice(n--, 1);
        e.length || pt.fx.stop(),
        $e = undefined
    }
    ,
    pt.fx.timer = function(t) {
        pt.timers.push(t),
        t() ? pt.fx.start() : pt.timers.pop()
    }
    ,
    pt.fx.interval = 13,
    pt.fx.start = function() {
        Ne || (Ne = t.setInterval(pt.fx.tick, pt.fx.interval))
    }
    ,
    pt.fx.stop = function() {
        t.clearInterval(Ne),
        Ne = null
    }
    ,
    pt.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    },
    pt.fn.delay = function(e, n) {
        return e = pt.fx && pt.fx.speeds[e] || e,
        n = n || "fx",
        this.queue(n, function(n, i) {
            var o = t.setTimeout(n, e);
            i.stop = function() {
                t.clearTimeout(o)
            }
        })
    }
    ,
    function() {
        var t, e = it.createElement("input"), n = it.createElement("div"), i = it.createElement("select"), o = i.appendChild(it.createElement("option"));
        (n = it.createElement("div")).setAttribute("className", "t"),
        n.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",
        t = n.getElementsByTagName("a")[0],
        e.setAttribute("type", "checkbox"),
        n.appendChild(e),
        (t = n.getElementsByTagName("a")[0]).style.cssText = "top:1px",
        dt.getSetAttribute = "t" !== n.className,
        dt.style = /top/.test(t.getAttribute("style")),
        dt.hrefNormalized = "/a" === t.getAttribute("href"),
        dt.checkOn = !!e.value,
        dt.optSelected = o.selected,
        dt.enctype = !!it.createElement("form").enctype,
        i.disabled = !0,
        dt.optDisabled = !o.disabled,
        (e = it.createElement("input")).setAttribute("value", ""),
        dt.input = "" === e.getAttribute("value"),
        e.value = "t",
        e.setAttribute("type", "radio"),
        dt.radioValue = "t" === e.value
    }();
    var Ae = /\r/g
      , _e = /[\x20\t\r\n\f]+/g;
    pt.fn.extend({
        val: function(t) {
            var e, n, i, o = this[0];
            return arguments.length ? (i = pt.isFunction(t),
            this.each(function(n) {
                var o;
                1 === this.nodeType && (null == (o = i ? t.call(this, n, pt(this).val()) : t) ? o = "" : "number" == typeof o ? o += "" : pt.isArray(o) && (o = pt.map(o, function(t) {
                    return null == t ? "" : t + ""
                })),
                (e = pt.valHooks[this.type] || pt.valHooks[this.nodeName.toLowerCase()]) && "set"in e && e.set(this, o, "value") !== undefined || (this.value = o))
            })) : o ? (e = pt.valHooks[o.type] || pt.valHooks[o.nodeName.toLowerCase()]) && "get"in e && (n = e.get(o, "value")) !== undefined ? n : "string" == typeof (n = o.value) ? n.replace(Ae, "") : null == n ? "" : n : void 0
        }
    }),
    pt.extend({
        valHooks: {
            option: {
                get: function(t) {
                    var e = pt.find.attr(t, "value");
                    return null != e ? e : pt.trim(pt.text(t)).replace(_e, " ")
                }
            },
            select: {
                get: function(t) {
                    for (var e, n, i = t.options, o = t.selectedIndex, r = "select-one" === t.type || o < 0, a = r ? null : [], s = r ? o + 1 : i.length, l = o < 0 ? s : r ? o : 0; l < s; l++)
                        if (((n = i[l]).selected || l === o) && (dt.optDisabled ? !n.disabled : null === n.getAttribute("disabled")) && (!n.parentNode.disabled || !pt.nodeName(n.parentNode, "optgroup"))) {
                            if (e = pt(n).val(),
                            r)
                                return e;
                            a.push(e)
                        }
                    return a
                },
                set: function(t, e) {
                    for (var n, i, o = t.options, r = pt.makeArray(e), a = o.length; a--; )
                        if (i = o[a],
                        pt.inArray(pt.valHooks.option.get(i), r) > -1)
                            try {
                                i.selected = n = !0
                            } catch (s) {
                                i.scrollHeight
                            }
                        else
                            i.selected = !1;
                    return n || (t.selectedIndex = -1),
                    o
                }
            }
        }
    }),
    pt.each(["radio", "checkbox"], function() {
        pt.valHooks[this] = {
            set: function(t, e) {
                if (pt.isArray(e))
                    return t.checked = pt.inArray(pt(t).val(), e) > -1
            }
        },
        dt.checkOn || (pt.valHooks[this].get = function(t) {
            return null === t.getAttribute("value") ? "on" : t.value
        }
        )
    });
    var Oe, Ie, Le = pt.expr.attrHandle, Re = /^(?:checked|selected)$/i, He = dt.getSetAttribute, Fe = dt.input;
    pt.fn.extend({
        attr: function(t, e) {
            return Mt(this, pt.attr, t, e, arguments.length > 1)
        },
        removeAttr: function(t) {
            return this.each(function() {
                pt.removeAttr(this, t)
            })
        }
    }),
    pt.extend({
        attr: function(t, e, n) {
            var i, o, r = t.nodeType;
            if (3 !== r && 8 !== r && 2 !== r)
                return "undefined" == typeof t.getAttribute ? pt.prop(t, e, n) : (1 === r && pt.isXMLDoc(t) || (e = e.toLowerCase(),
                o = pt.attrHooks[e] || (pt.expr.match.bool.test(e) ? Ie : Oe)),
                n !== undefined ? null === n ? void pt.removeAttr(t, e) : o && "set"in o && (i = o.set(t, n, e)) !== undefined ? i : (t.setAttribute(e, n + ""),
                n) : o && "get"in o && null !== (i = o.get(t, e)) ? i : null == (i = pt.find.attr(t, e)) ? undefined : i)
        },
        attrHooks: {
            type: {
                set: function(t, e) {
                    if (!dt.radioValue && "radio" === e && pt.nodeName(t, "input")) {
                        var n = t.value;
                        return t.setAttribute("type", e),
                        n && (t.value = n),
                        e
                    }
                }
            }
        },
        removeAttr: function(t, e) {
            var n, i, o = 0, r = e && e.match(jt);
            if (r && 1 === t.nodeType)
                for (; n = r[o++]; )
                    i = pt.propFix[n] || n,
                    pt.expr.match.bool.test(n) ? Fe && He || !Re.test(n) ? t[i] = !1 : t[pt.camelCase("default-" + n)] = t[i] = !1 : pt.attr(t, n, ""),
                    t.removeAttribute(He ? n : i)
        }
    }),
    Ie = {
        set: function(t, e, n) {
            return !1 === e ? pt.removeAttr(t, n) : Fe && He || !Re.test(n) ? t.setAttribute(!He && pt.propFix[n] || n, n) : t[pt.camelCase("default-" + n)] = t[n] = !0,
            n
        }
    },
    pt.each(pt.expr.match.bool.source.match(/\w+/g), function(t, e) {
        var n = Le[e] || pt.find.attr;
        Fe && He || !Re.test(e) ? Le[e] = function(t, e, i) {
            var o, r;
            return i || (r = Le[e],
            Le[e] = o,
            o = null != n(t, e, i) ? e.toLowerCase() : null,
            Le[e] = r),
            o
        }
        : Le[e] = function(t, e, n) {
            if (!n)
                return t[pt.camelCase("default-" + e)] ? e.toLowerCase() : null
        }
    }),
    Fe && He || (pt.attrHooks.value = {
        set: function(t, e, n) {
            if (!pt.nodeName(t, "input"))
                return Oe && Oe.set(t, e, n);
            t.defaultValue = e
        }
    }),
    He || (Oe = {
        set: function(t, e, n) {
            var i = t.getAttributeNode(n);
            if (i || t.setAttributeNode(i = t.ownerDocument.createAttribute(n)),
            i.value = e += "",
            "value" === n || e === t.getAttribute(n))
                return e
        }
    },
    Le.id = Le.name = Le.coords = function(t, e, n) {
        var i;
        if (!n)
            return (i = t.getAttributeNode(e)) && "" !== i.value ? i.value : null
    }
    ,
    pt.valHooks.button = {
        get: function(t, e) {
            var n = t.getAttributeNode(e);
            if (n && n.specified)
                return n.value
        },
        set: Oe.set
    },
    pt.attrHooks.contenteditable = {
        set: function(t, e, n) {
            Oe.set(t, "" !== e && e, n)
        }
    },
    pt.each(["width", "height"], function(t, e) {
        pt.attrHooks[e] = {
            set: function(t, n) {
                if ("" === n)
                    return t.setAttribute(e, "auto"),
                    n
            }
        }
    })),
    dt.style || (pt.attrHooks.style = {
        get: function(t) {
            return t.style.cssText || undefined
        },
        set: function(t, e) {
            return t.style.cssText = e + ""
        }
    });
    var Pe = /^(?:input|select|textarea|button|object)$/i
      , qe = /^(?:a|area)$/i;
    pt.fn.extend({
        prop: function(t, e) {
            return Mt(this, pt.prop, t, e, arguments.length > 1)
        },
        removeProp: function(t) {
            return t = pt.propFix[t] || t,
            this.each(function() {
                try {
                    this[t] = undefined,
                    delete this[t]
                } catch (e) {}
            })
        }
    }),
    pt.extend({
        prop: function(t, e, n) {
            var i, o, r = t.nodeType;
            if (3 !== r && 8 !== r && 2 !== r)
                return 1 === r && pt.isXMLDoc(t) || (e = pt.propFix[e] || e,
                o = pt.propHooks[e]),
                n !== undefined ? o && "set"in o && (i = o.set(t, n, e)) !== undefined ? i : t[e] = n : o && "get"in o && null !== (i = o.get(t, e)) ? i : t[e]
        },
        propHooks: {
            tabIndex: {
                get: function(t) {
                    var e = pt.find.attr(t, "tabindex");
                    return e ? parseInt(e, 10) : Pe.test(t.nodeName) || qe.test(t.nodeName) && t.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    }),
    dt.hrefNormalized || pt.each(["href", "src"], function(t, e) {
        pt.propHooks[e] = {
            get: function(t) {
                return t.getAttribute(e, 4)
            }
        }
    }),
    dt.optSelected || (pt.propHooks.selected = {
        get: function(t) {
            var e = t.parentNode;
            return e && (e.selectedIndex,
            e.parentNode && e.parentNode.selectedIndex),
            null
        },
        set: function(t) {
            var e = t.parentNode;
            e && (e.selectedIndex,
            e.parentNode && e.parentNode.selectedIndex)
        }
    }),
    pt.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        pt.propFix[this.toLowerCase()] = this
    }),
    dt.enctype || (pt.propFix.enctype = "encoding");
    var Be = /[\t\r\n\f]/g;
    pt.fn.extend({
        addClass: function(t) {
            var e, n, i, o, r, a, s, l = 0;
            if (pt.isFunction(t))
                return this.each(function(e) {
                    pt(this).addClass(t.call(this, e, U(this)))
                });
            if ("string" == typeof t && t)
                for (e = t.match(jt) || []; n = this[l++]; )
                    if (o = U(n),
                    i = 1 === n.nodeType && (" " + o + " ").replace(Be, " ")) {
                        for (a = 0; r = e[a++]; )
                            i.indexOf(" " + r + " ") < 0 && (i += r + " ");
                        o !== (s = pt.trim(i)) && pt.attr(n, "class", s)
                    }
            return this
        },
        removeClass: function(t) {
            var e, n, i, o, r, a, s, l = 0;
            if (pt.isFunction(t))
                return this.each(function(e) {
                    pt(this).removeClass(t.call(this, e, U(this)))
                });
            if (!arguments.length)
                return this.attr("class", "");
            if ("string" == typeof t && t)
                for (e = t.match(jt) || []; n = this[l++]; )
                    if (o = U(n),
                    i = 1 === n.nodeType && (" " + o + " ").replace(Be, " ")) {
                        for (a = 0; r = e[a++]; )
                            for (; i.indexOf(" " + r + " ") > -1; )
                                i = i.replace(" " + r + " ", " ");
                        o !== (s = pt.trim(i)) && pt.attr(n, "class", s)
                    }
            return this
        },
        toggleClass: function(t, e) {
            var n = typeof t;
            return "boolean" == typeof e && "string" === n ? e ? this.addClass(t) : this.removeClass(t) : pt.isFunction(t) ? this.each(function(n) {
                pt(this).toggleClass(t.call(this, n, U(this), e), e)
            }) : this.each(function() {
                var e, i, o, r;
                if ("string" === n)
                    for (i = 0,
                    o = pt(this),
                    r = t.match(jt) || []; e = r[i++]; )
                        o.hasClass(e) ? o.removeClass(e) : o.addClass(e);
                else
                    t !== undefined && "boolean" !== n || ((e = U(this)) && pt._data(this, "__className__", e),
                    pt.attr(this, "class", e || !1 === t ? "" : pt._data(this, "__className__") || ""))
            })
        },
        hasClass: function(t) {
            var e, n, i = 0;
            for (e = " " + t + " "; n = this[i++]; )
                if (1 === n.nodeType && (" " + U(n) + " ").replace(Be, " ").indexOf(e) > -1)
                    return !0;
            return !1
        }
    }),
    pt.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(t, e) {
        pt.fn[e] = function(t, n) {
            return arguments.length > 0 ? this.on(e, null, t, n) : this.trigger(e)
        }
    }),
    pt.fn.extend({
        hover: function(t, e) {
            return this.mouseenter(t).mouseleave(e || t)
        }
    });
    var Me = t.location
      , We = pt.now()
      , Ue = /\?/
      , ze = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
    pt.parseJSON = function(e) {
        if (t.JSON && t.JSON.parse)
            return t.JSON.parse(e + "");
        var n, i = null, o = pt.trim(e + "");
        return o && !pt.trim(o.replace(ze, function(t, e, o, r) {
            return n && e && (i = 0),
            0 === i ? t : (n = o || e,
            i += !r - !o,
            "")
        })) ? Function("return " + o)() : pt.error("Invalid JSON: " + e)
    }
    ,
    pt.parseXML = function(e) {
        var n;
        if (!e || "string" != typeof e)
            return null;
        try {
            t.DOMParser ? n = (new t.DOMParser).parseFromString(e, "text/xml") : ((n = new t.ActiveXObject("Microsoft.XMLDOM")).async = "false",
            n.loadXML(e))
        } catch (i) {
            n = undefined
        }
        return n && n.documentElement && !n.getElementsByTagName("parsererror").length || pt.error("Invalid XML: " + e),
        n
    }
    ;
    var Ve = /#.*$/
      , Xe = /([?&])_=[^&]*/
      , Qe = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm
      , Je = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/
      , Ge = /^(?:GET|HEAD)$/
      , Ye = /^\/\//
      , Ke = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/
      , Ze = {}
      , tn = {}
      , en = "*/".concat("*")
      , nn = Me.href
      , on = Ke.exec(nn.toLowerCase()) || [];
    pt.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: nn,
            type: "GET",
            isLocal: Je.test(on[1]),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": en,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": pt.parseJSON,
                "text xml": pt.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(t, e) {
            return e ? X(X(t, pt.ajaxSettings), e) : X(pt.ajaxSettings, t)
        },
        ajaxPrefilter: z(Ze),
        ajaxTransport: z(tn),
        ajax: function(e, n) {
            function i(e, n, i, o) {
                var r, d, y, b, x, T = n;
                2 !== w && (w = 2,
                l && t.clearTimeout(l),
                u = undefined,
                s = o || "",
                C.readyState = e > 0 ? 4 : 0,
                r = e >= 200 && e < 300 || 304 === e,
                i && (b = Q(f, C, i)),
                b = J(f, b, C, r),
                r ? (f.ifModified && ((x = C.getResponseHeader("Last-Modified")) && (pt.lastModified[a] = x),
                (x = C.getResponseHeader("etag")) && (pt.etag[a] = x)),
                204 === e || "HEAD" === f.type ? T = "nocontent" : 304 === e ? T = "notmodified" : (T = b.state,
                d = b.data,
                r = !(y = b.error))) : (y = T,
                !e && T || (T = "error",
                e < 0 && (e = 0))),
                C.status = e,
                C.statusText = (n || T) + "",
                r ? m.resolveWith(p, [d, T, C]) : m.rejectWith(p, [C, T, y]),
                C.statusCode(v),
                v = undefined,
                c && h.trigger(r ? "ajaxSuccess" : "ajaxError", [C, f, r ? d : y]),
                g.fireWith(p, [C, T]),
                c && (h.trigger("ajaxComplete", [C, f]),
                --pt.active || pt.event.trigger("ajaxStop")))
            }
            "object" == typeof e && (n = e,
            e = undefined),
            n = n || {};
            var o, r, a, s, l, c, u, d, f = pt.ajaxSetup({}, n), p = f.context || f, h = f.context && (p.nodeType || p.jquery) ? pt(p) : pt.event, m = pt.Deferred(), g = pt.Callbacks("once memory"), v = f.statusCode || {}, y = {}, b = {}, w = 0, x = "canceled", C = {
                readyState: 0,
                getResponseHeader: function(t) {
                    var e;
                    if (2 === w) {
                        if (!d)
                            for (d = {}; e = Qe.exec(s); )
                                d[e[1].toLowerCase()] = e[2];
                        e = d[t.toLowerCase()]
                    }
                    return null == e ? null : e
                },
                getAllResponseHeaders: function() {
                    return 2 === w ? s : null
                },
                setRequestHeader: function(t, e) {
                    var n = t.toLowerCase();
                    return w || (t = b[n] = b[n] || t,
                    y[t] = e),
                    this
                },
                overrideMimeType: function(t) {
                    return w || (f.mimeType = t),
                    this
                },
                statusCode: function(t) {
                    var e;
                    if (t)
                        if (w < 2)
                            for (e in t)
                                v[e] = [v[e], t[e]];
                        else
                            C.always(t[C.status]);
                    return this
                },
                abort: function(t) {
                    var e = t || x;
                    return u && u.abort(e),
                    i(0, e),
                    this
                }
            };
            if (m.promise(C).complete = g.add,
            C.success = C.done,
            C.error = C.fail,
            f.url = ((e || f.url || nn) + "").replace(Ve, "").replace(Ye, on[1] + "//"),
            f.type = n.method || n.type || f.method || f.type,
            f.dataTypes = pt.trim(f.dataType || "*").toLowerCase().match(jt) || [""],
            null == f.crossDomain && (o = Ke.exec(f.url.toLowerCase()),
            f.crossDomain = !(!o || o[1] === on[1] && o[2] === on[2] && (o[3] || ("http:" === o[1] ? "80" : "443")) === (on[3] || ("http:" === on[1] ? "80" : "443")))),
            f.data && f.processData && "string" != typeof f.data && (f.data = pt.param(f.data, f.traditional)),
            V(Ze, f, n, C),
            2 === w)
                return C;
            for (r in (c = pt.event && f.global) && 0 == pt.active++ && pt.event.trigger("ajaxStart"),
            f.type = f.type.toUpperCase(),
            f.hasContent = !Ge.test(f.type),
            a = f.url,
            f.hasContent || (f.data && (a = f.url += (Ue.test(a) ? "&" : "?") + f.data,
            delete f.data),
            !1 === f.cache && (f.url = Xe.test(a) ? a.replace(Xe, "$1_=" + We++) : a + (Ue.test(a) ? "&" : "?") + "_=" + We++)),
            f.ifModified && (pt.lastModified[a] && C.setRequestHeader("If-Modified-Since", pt.lastModified[a]),
            pt.etag[a] && C.setRequestHeader("If-None-Match", pt.etag[a])),
            (f.data && f.hasContent && !1 !== f.contentType || n.contentType) && C.setRequestHeader("Content-Type", f.contentType),
            C.setRequestHeader("Accept", f.dataTypes[0] && f.accepts[f.dataTypes[0]] ? f.accepts[f.dataTypes[0]] + ("*" !== f.dataTypes[0] ? ", " + en + "; q=0.01" : "") : f.accepts["*"]),
            f.headers)
                C.setRequestHeader(r, f.headers[r]);
            if (f.beforeSend && (!1 === f.beforeSend.call(p, C, f) || 2 === w))
                return C.abort();
            for (r in x = "abort",
            {
                success: 1,
                error: 1,
                complete: 1
            })
                C[r](f[r]);
            if (u = V(tn, f, n, C)) {
                if (C.readyState = 1,
                c && h.trigger("ajaxSend", [C, f]),
                2 === w)
                    return C;
                f.async && f.timeout > 0 && (l = t.setTimeout(function() {
                    C.abort("timeout")
                }, f.timeout));
                try {
                    w = 1,
                    u.send(y, i)
                } catch (T) {
                    if (!(w < 2))
                        throw T;
                    i(-1, T)
                }
            } else
                i(-1, "No Transport");
            return C
        },
        getJSON: function(t, e, n) {
            return pt.get(t, e, n, "json")
        },
        getScript: function(t, e) {
            return pt.get(t, undefined, e, "script")
        }
    }),
    pt.each(["get", "post"], function(t, e) {
        pt[e] = function(t, n, i, o) {
            return pt.isFunction(n) && (o = o || i,
            i = n,
            n = undefined),
            pt.ajax(pt.extend({
                url: t,
                type: e,
                dataType: o,
                data: n,
                success: i
            }, pt.isPlainObject(t) && t))
        }
    }),
    pt._evalUrl = function(t) {
        return pt.ajax({
            url: t,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            throws: !0
        })
    }
    ,
    pt.fn.extend({
        wrapAll: function(t) {
            if (pt.isFunction(t))
                return this.each(function(e) {
                    pt(this).wrapAll(t.call(this, e))
                });
            if (this[0]) {
                var e = pt(t, this[0].ownerDocument).eq(0).clone(!0);
                this[0].parentNode && e.insertBefore(this[0]),
                e.map(function() {
                    for (var t = this; t.firstChild && 1 === t.firstChild.nodeType; )
                        t = t.firstChild;
                    return t
                }).append(this)
            }
            return this
        },
        wrapInner: function(t) {
            return pt.isFunction(t) ? this.each(function(e) {
                pt(this).wrapInner(t.call(this, e))
            }) : this.each(function() {
                var e = pt(this)
                  , n = e.contents();
                n.length ? n.wrapAll(t) : e.append(t)
            })
        },
        wrap: function(t) {
            var e = pt.isFunction(t);
            return this.each(function(n) {
                pt(this).wrapAll(e ? t.call(this, n) : t)
            })
        },
        unwrap: function() {
            return this.parent().each(function() {
                pt.nodeName(this, "body") || pt(this).replaceWith(this.childNodes)
            }).end()
        }
    }),
    pt.expr.filters.hidden = function(t) {
        return dt.reliableHiddenOffsets() ? t.offsetWidth <= 0 && t.offsetHeight <= 0 && !t.getClientRects().length : Y(t)
    }
    ,
    pt.expr.filters.visible = function(t) {
        return !pt.expr.filters.hidden(t)
    }
    ;
    var rn = /%20/g
      , an = /\[\]$/
      , sn = /\r?\n/g
      , ln = /^(?:submit|button|image|reset|file)$/i
      , cn = /^(?:input|select|textarea|keygen)/i;
    pt.param = function(t, e) {
        var n, i = [], o = function(t, e) {
            e = pt.isFunction(e) ? e() : null == e ? "" : e,
            i[i.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
        };
        if (e === undefined && (e = pt.ajaxSettings && pt.ajaxSettings.traditional),
        pt.isArray(t) || t.jquery && !pt.isPlainObject(t))
            pt.each(t, function() {
                o(this.name, this.value)
            });
        else
            for (n in t)
                K(n, t[n], e, o);
        return i.join("&").replace(rn, "+")
    }
    ,
    pt.fn.extend({
        serialize: function() {
            return pt.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var t = pt.prop(this, "elements");
                return t ? pt.makeArray(t) : this
            }).filter(function() {
                var t = this.type;
                return this.name && !pt(this).is(":disabled") && cn.test(this.nodeName) && !ln.test(t) && (this.checked || !Wt.test(t))
            }).map(function(t, e) {
                var n = pt(this).val();
                return null == n ? null : pt.isArray(n) ? pt.map(n, function(t) {
                    return {
                        name: e.name,
                        value: t.replace(sn, "\r\n")
                    }
                }) : {
                    name: e.name,
                    value: n.replace(sn, "\r\n")
                }
            }).get()
        }
    }),
    pt.ajaxSettings.xhr = t.ActiveXObject !== undefined ? function() {
        return this.isLocal ? tt() : it.documentMode > 8 ? Z() : /^(get|post|head|put|delete|options)$/i.test(this.type) && Z() || tt()
    }
    : Z;
    var un = 0
      , dn = {}
      , fn = pt.ajaxSettings.xhr();
    t.attachEvent && t.attachEvent("onunload", function() {
        for (var t in dn)
            dn[t](undefined, !0)
    }),
    dt.cors = !!fn && "withCredentials"in fn,
    (fn = dt.ajax = !!fn) && pt.ajaxTransport(function(e) {
        var n;
        if (!e.crossDomain || dt.cors)
            return {
                send: function(i, o) {
                    var r, a = e.xhr(), s = ++un;
                    if (a.open(e.type, e.url, e.async, e.username, e.password),
                    e.xhrFields)
                        for (r in e.xhrFields)
                            a[r] = e.xhrFields[r];
                    for (r in e.mimeType && a.overrideMimeType && a.overrideMimeType(e.mimeType),
                    e.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest"),
                    i)
                        i[r] !== undefined && a.setRequestHeader(r, i[r] + "");
                    a.send(e.hasContent && e.data || null),
                    n = function(t, i) {
                        var r, l, c;
                        if (n && (i || 4 === a.readyState))
                            if (delete dn[s],
                            n = undefined,
                            a.onreadystatechange = pt.noop,
                            i)
                                4 !== a.readyState && a.abort();
                            else {
                                c = {},
                                r = a.status,
                                "string" == typeof a.responseText && (c.text = a.responseText);
                                try {
                                    l = a.statusText
                                } catch (u) {
                                    l = ""
                                }
                                r || !e.isLocal || e.crossDomain ? 1223 === r && (r = 204) : r = c.text ? 200 : 404
                            }
                        c && o(r, l, c, a.getAllResponseHeaders())
                    }
                    ,
                    e.async ? 4 === a.readyState ? t.setTimeout(n) : a.onreadystatechange = dn[s] = n : n()
                },
                abort: function() {
                    n && n(undefined, !0)
                }
            }
    }),
    pt.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(t) {
                return pt.globalEval(t),
                t
            }
        }
    }),
    pt.ajaxPrefilter("script", function(t) {
        t.cache === undefined && (t.cache = !1),
        t.crossDomain && (t.type = "GET",
        t.global = !1)
    }),
    pt.ajaxTransport("script", function(t) {
        if (t.crossDomain) {
            var e, n = it.head || pt("head")[0] || it.documentElement;
            return {
                send: function(i, o) {
                    (e = it.createElement("script")).async = !0,
                    t.scriptCharset && (e.charset = t.scriptCharset),
                    e.src = t.url,
                    e.onload = e.onreadystatechange = function(t, n) {
                        (n || !e.readyState || /loaded|complete/.test(e.readyState)) && (e.onload = e.onreadystatechange = null,
                        e.parentNode && e.parentNode.removeChild(e),
                        e = null,
                        n || o(200, "success"))
                    }
                    ,
                    n.insertBefore(e, n.firstChild)
                },
                abort: function() {
                    e && e.onload(undefined, !0)
                }
            }
        }
    });
    var pn = []
      , hn = /(=)\?(?=&|$)|\?\?/;
    pt.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var t = pn.pop() || pt.expando + "_" + We++;
            return this[t] = !0,
            t
        }
    }),
    pt.ajaxPrefilter("json jsonp", function(e, n, i) {
        var o, r, a, s = !1 !== e.jsonp && (hn.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && hn.test(e.data) && "data");
        if (s || "jsonp" === e.dataTypes[0])
            return o = e.jsonpCallback = pt.isFunction(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback,
            s ? e[s] = e[s].replace(hn, "$1" + o) : !1 !== e.jsonp && (e.url += (Ue.test(e.url) ? "&" : "?") + e.jsonp + "=" + o),
            e.converters["script json"] = function() {
                return a || pt.error(o + " was not called"),
                a[0]
            }
            ,
            e.dataTypes[0] = "json",
            r = t[o],
            t[o] = function() {
                a = arguments
            }
            ,
            i.always(function() {
                r === undefined ? pt(t).removeProp(o) : t[o] = r,
                e[o] && (e.jsonpCallback = n.jsonpCallback,
                pn.push(o)),
                a && pt.isFunction(r) && r(a[0]),
                a = r = undefined
            }),
            "script"
    }),
    pt.parseHTML = function(t, e, n) {
        if (!t || "string" != typeof t)
            return null;
        "boolean" == typeof e && (n = e,
        e = !1),
        e = e || it;
        var i = Ct.exec(t)
          , o = !n && [];
        return i ? [e.createElement(i[1])] : (i = v([t], e, o),
        o && o.length && pt(o).remove(),
        pt.merge([], i.childNodes))
    }
    ;
    var mn = pt.fn.load;
    pt.fn.load = function(t, e, n) {
        if ("string" != typeof t && mn)
            return mn.apply(this, arguments);
        var i, o, r, a = this, s = t.indexOf(" ");
        return s > -1 && (i = pt.trim(t.slice(s, t.length)),
        t = t.slice(0, s)),
        pt.isFunction(e) ? (n = e,
        e = undefined) : e && "object" == typeof e && (o = "POST"),
        a.length > 0 && pt.ajax({
            url: t,
            type: o || "GET",
            dataType: "html",
            data: e
        }).done(function(t) {
            r = arguments,
            a.html(i ? pt("<div>").append(pt.parseHTML(t)).find(i) : t)
        }).always(n && function(t, e) {
            a.each(function() {
                n.apply(this, r || [t.responseText, e, t])
            })
        }
        ),
        this
    }
    ,
    pt.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(t, e) {
        pt.fn[e] = function(t) {
            return this.on(e, t)
        }
    }),
    pt.expr.filters.animated = function(t) {
        return pt.grep(pt.timers, function(e) {
            return t === e.elem
        }).length
    }
    ,
    pt.offset = {
        setOffset: function(t, e, n) {
            var i, o, r, a, s, l, c = pt.css(t, "position"), u = pt(t), d = {};
            "static" === c && (t.style.position = "relative"),
            s = u.offset(),
            r = pt.css(t, "top"),
            l = pt.css(t, "left"),
            ("absolute" === c || "fixed" === c) && pt.inArray("auto", [r, l]) > -1 ? (a = (i = u.position()).top,
            o = i.left) : (a = parseFloat(r) || 0,
            o = parseFloat(l) || 0),
            pt.isFunction(e) && (e = e.call(t, n, pt.extend({}, s))),
            null != e.top && (d.top = e.top - s.top + a),
            null != e.left && (d.left = e.left - s.left + o),
            "using"in e ? e.using.call(t, d) : u.css(d)
        }
    },
    pt.fn.extend({
        offset: function(t) {
            if (arguments.length)
                return t === undefined ? this : this.each(function(e) {
                    pt.offset.setOffset(this, t, e)
                });
            var e, n, i = {
                top: 0,
                left: 0
            }, o = this[0], r = o && o.ownerDocument;
            return r ? (e = r.documentElement,
            pt.contains(e, o) ? ("undefined" != typeof o.getBoundingClientRect && (i = o.getBoundingClientRect()),
            n = et(r),
            {
                top: i.top + (n.pageYOffset || e.scrollTop) - (e.clientTop || 0),
                left: i.left + (n.pageXOffset || e.scrollLeft) - (e.clientLeft || 0)
            }) : i) : void 0
        },
        position: function() {
            if (this[0]) {
                var t, e, n = {
                    top: 0,
                    left: 0
                }, i = this[0];
                return "fixed" === pt.css(i, "position") ? e = i.getBoundingClientRect() : (t = this.offsetParent(),
                e = this.offset(),
                pt.nodeName(t[0], "html") || (n = t.offset()),
                n.top += pt.css(t[0], "borderTopWidth", !0),
                n.left += pt.css(t[0], "borderLeftWidth", !0)),
                {
                    top: e.top - n.top - pt.css(i, "marginTop", !0),
                    left: e.left - n.left - pt.css(i, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var t = this.offsetParent; t && !pt.nodeName(t, "html") && "static" === pt.css(t, "position"); )
                    t = t.offsetParent;
                return t || me
            })
        }
    }),
    pt.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(t, e) {
        var n = /Y/.test(e);
        pt.fn[t] = function(i) {
            return Mt(this, function(t, i, o) {
                var r = et(t);
                if (o === undefined)
                    return r ? e in r ? r[e] : r.document.documentElement[i] : t[i];
                r ? r.scrollTo(n ? pt(r).scrollLeft() : o, n ? o : pt(r).scrollTop()) : t[i] = o
            }, t, i, arguments.length, null)
        }
    }),
    pt.each(["top", "left"], function(t, e) {
        pt.cssHooks[e] = A(dt.pixelPosition, function(t, n) {
            if (n)
                return n = ve(t, e),
                pe.test(n) ? pt(t).position()[e] + "px" : n
        })
    }),
    pt.each({
        Height: "height",
        Width: "width"
    }, function(t, e) {
        pt.each({
            padding: "inner" + t,
            content: e,
            "": "outer" + t
        }, function(n, i) {
            pt.fn[i] = function(i, o) {
                var r = arguments.length && (n || "boolean" != typeof i)
                  , a = n || (!0 === i || !0 === o ? "margin" : "border");
                return Mt(this, function(e, n, i) {
                    var o;
                    return pt.isWindow(e) ? e.document.documentElement["client" + t] : 9 === e.nodeType ? (o = e.documentElement,
                    Math.max(e.body["scroll" + t], o["scroll" + t], e.body["offset" + t], o["offset" + t], o["client" + t])) : i === undefined ? pt.css(e, n, a) : pt.style(e, n, i, a)
                }, e, r ? i : undefined, r, null)
            }
        })
    }),
    pt.fn.extend({
        bind: function(t, e, n) {
            return this.on(t, null, e, n)
        },
        unbind: function(t, e) {
            return this.off(t, null, e)
        },
        delegate: function(t, e, n, i) {
            return this.on(e, t, n, i)
        },
        undelegate: function(t, e, n) {
            return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", n)
        }
    }),
    pt.fn.size = function() {
        return this.length
    }
    ,
    pt.fn.andSelf = pt.fn.addBack,
    "function" == typeof define && define.amd && define("jquery", [], function() {
        return pt
    });
    var gn = t.jQuery
      , vn = t.$;
    return pt.noConflict = function(e) {
        return t.$ === pt && (t.$ = vn),
        e && t.jQuery === pt && (t.jQuery = gn),
        pt
    }
    ,
    e || (t.jQuery = t.$ = pt),
    pt
}),
function(t, e) {
    "use strict";
    var n;
    t.rails !== e && t.error("jquery-ujs has already been loaded!");
    var i = t(document);
    t.rails = n = {
        linkClickSelector: "a[data-confirm], a[data-method], a[data-remote]:not([disabled]), a[data-disable-with], a[data-disable]",
        buttonClickSelector: "button[data-remote]:not([form]):not(form button), button[data-confirm]:not([form]):not(form button)",
        inputChangeSelector: "select[data-remote], input[data-remote], textarea[data-remote]",
        formSubmitSelector: "form",
        formInputClickSelector: "form input[type=submit], form input[type=image], form button[type=submit], form button:not([type]), input[type=submit][form], input[type=image][form], button[type=submit][form], button[form]:not([type])",
        disableSelector: "input[data-disable-with]:enabled, button[data-disable-with]:enabled, textarea[data-disable-with]:enabled, input[data-disable]:enabled, button[data-disable]:enabled, textarea[data-disable]:enabled",
        enableSelector: "input[data-disable-with]:disabled, button[data-disable-with]:disabled, textarea[data-disable-with]:disabled, input[data-disable]:disabled, button[data-disable]:disabled, textarea[data-disable]:disabled",
        requiredInputSelector: "input[name][required]:not([disabled]), textarea[name][required]:not([disabled])",
        fileInputSelector: "input[name][type=file]:not([disabled])",
        linkDisableSelector: "a[data-disable-with], a[data-disable]",
        buttonDisableSelector: "button[data-remote][data-disable-with], button[data-remote][data-disable]",
        csrfToken: function() {
            return t("meta[name=csrf-token]").attr("content")
        },
        csrfParam: function() {
            return t("meta[name=csrf-param]").attr("content")
        },
        CSRFProtection: function(t) {
            var e = n.csrfToken();
            e && t.setRequestHeader("X-CSRF-Token", e)
        },
        refreshCSRFTokens: function() {
            t('form input[name="' + n.csrfParam() + '"]').val(n.csrfToken())
        },
        fire: function(e, n, i) {
            var o = t.Event(n);
            return e.trigger(o, i),
            !1 !== o.result
        },
        confirm: function(t) {
            return confirm(t)
        },
        ajax: function(e) {
            return t.ajax(e)
        },
        href: function(t) {
            return t[0].href
        },
        isRemote: function(t) {
            return t.data("remote") !== e && !1 !== t.data("remote")
        },
        handleRemote: function(i) {
            var o, r, a, s, l, c;
            if (n.fire(i, "ajax:before")) {
                if (s = i.data("with-credentials") || null,
                l = i.data("type") || t.ajaxSettings && t.ajaxSettings.dataType,
                i.is("form")) {
                    o = i.data("ujs:submit-button-formmethod") || i.attr("method"),
                    r = i.data("ujs:submit-button-formaction") || i.attr("action"),
                    a = t(i[0]).serializeArray();
                    var u = i.data("ujs:submit-button");
                    u && (a.push(u),
                    i.data("ujs:submit-button", null)),
                    i.data("ujs:submit-button-formmethod", null),
                    i.data("ujs:submit-button-formaction", null)
                } else
                    i.is(n.inputChangeSelector) ? (o = i.data("method"),
                    r = i.data("url"),
                    a = i.serialize(),
                    i.data("params") && (a = a + "&" + i.data("params"))) : i.is(n.buttonClickSelector) ? (o = i.data("method") || "get",
                    r = i.data("url"),
                    a = i.serialize(),
                    i.data("params") && (a = a + "&" + i.data("params"))) : (o = i.data("method"),
                    r = n.href(i),
                    a = i.data("params") || null);
                return c = {
                    type: o || "GET",
                    data: a,
                    dataType: l,
                    beforeSend: function(t, o) {
                        if (o.dataType === e && t.setRequestHeader("accept", "*/*;q=0.5, " + o.accepts.script),
                        !n.fire(i, "ajax:beforeSend", [t, o]))
                            return !1;
                        i.trigger("ajax:send", t)
                    },
                    success: function(t, e, n) {
                        i.trigger("ajax:success", [t, e, n])
                    },
                    complete: function(t, e) {
                        i.trigger("ajax:complete", [t, e])
                    },
                    error: function(t, e, n) {
                        i.trigger("ajax:error", [t, e, n])
                    },
                    crossDomain: n.isCrossDomain(r)
                },
                s && (c.xhrFields = {
                    withCredentials: s
                }),
                r && (c.url = r),
                n.ajax(c)
            }
            return !1
        },
        isCrossDomain: function(t) {
            var e = document.createElement("a");
            e.href = location.href;
            var n = document.createElement("a");
            try {
                return n.href = t,
                n.href = n.href,
                !((!n.protocol || ":" === n.protocol) && !n.host || e.protocol + "//" + e.host == n.protocol + "//" + n.host)
            } catch (i) {
                return !0
            }
        },
        handleMethod: function(i) {
            var o = n.href(i)
              , r = i.data("method")
              , a = i.attr("target")
              , s = n.csrfToken()
              , l = n.csrfParam()
              , c = t('<form method="post" action="' + o + '"></form>')
              , u = '<input name="_method" value="' + r + '" type="hidden" />';
            l === e || s === e || n.isCrossDomain(o) || (u += '<input name="' + l + '" value="' + s + '" type="hidden" />'),
            a && c.attr("target", a),
            c.hide().append(u).appendTo("body"),
            c.submit()
        },
        formElements: function(e, n) {
            return e.is("form") ? t(e[0].elements).filter(n) : e.find(n)
        },
        disableFormElements: function(e) {
            n.formElements(e, n.disableSelector).each(function() {
                n.disableFormElement(t(this))
            })
        },
        disableFormElement: function(t) {
            var n, i;
            n = t.is("button") ? "html" : "val",
            (i = t.data("disable-with")) !== e && (t.data("ujs:enable-with", t[n]()),
            t[n](i)),
            t.prop("disabled", !0),
            t.data("ujs:disabled", !0)
        },
        enableFormElements: function(e) {
            n.formElements(e, n.enableSelector).each(function() {
                n.enableFormElement(t(this))
            })
        },
        enableFormElement: function(t) {
            var n = t.is("button") ? "html" : "val";
            t.data("ujs:enable-with") !== e && (t[n](t.data("ujs:enable-with")),
            t.removeData("ujs:enable-with")),
            t.prop("disabled", !1),
            t.removeData("ujs:disabled")
        },
        allowAction: function(t) {
            var e, i = t.data("confirm"), o = !1;
            if (!i)
                return !0;
            if (n.fire(t, "confirm")) {
                try {
                    o = n.confirm(i)
                } catch (r) {
                    (console.error || console.log).call(console, r.stack || r)
                }
                e = n.fire(t, "confirm:complete", [o])
            }
            return o && e
        },
        blankInputs: function(e, n, i) {
            var o, r, a, s = t(), l = n || "input,textarea", c = e.find(l), u = {};
            return c.each(function() {
                (o = t(this)).is("input[type=radio]") ? (a = o.attr("name"),
                u[a] || (0 === e.find('input[type=radio]:checked[name="' + a + '"]').length && (r = e.find('input[type=radio][name="' + a + '"]'),
                s = s.add(r)),
                u[a] = a)) : (o.is("input[type=checkbox],input[type=radio]") ? o.is(":checked") : !!o.val()) === i && (s = s.add(o))
            }),
            !!s.length && s
        },
        nonBlankInputs: function(t, e) {
            return n.blankInputs(t, e, !0)
        },
        stopEverything: function(e) {
            return t(e.target).trigger("ujs:everythingStopped"),
            e.stopImmediatePropagation(),
            !1
        },
        disableElement: function(t) {
            var i = t.data("disable-with");
            i !== e && (t.data("ujs:enable-with", t.html()),
            t.html(i)),
            t.bind("click.railsDisable", function(t) {
                return n.stopEverything(t)
            }),
            t.data("ujs:disabled", !0)
        },
        enableElement: function(t) {
            t.data("ujs:enable-with") !== e && (t.html(t.data("ujs:enable-with")),
            t.removeData("ujs:enable-with")),
            t.unbind("click.railsDisable"),
            t.removeData("ujs:disabled")
        }
    },
    n.fire(i, "rails:attachBindings") && (t.ajaxPrefilter(function(t, e, i) {
        t.crossDomain || n.CSRFProtection(i)
    }),
    t(window).on("pageshow.rails", function() {
        t(t.rails.enableSelector).each(function() {
            var e = t(this);
            e.data("ujs:disabled") && t.rails.enableFormElement(e)
        }),
        t(t.rails.linkDisableSelector).each(function() {
            var e = t(this);
            e.data("ujs:disabled") && t.rails.enableElement(e)
        })
    }),
    i.on("ajax:complete", n.linkDisableSelector, function() {
        n.enableElement(t(this))
    }),
    i.on("ajax:complete", n.buttonDisableSelector, function() {
        n.enableFormElement(t(this))
    }),
    i.on("click.rails", n.linkClickSelector, function(e) {
        var i = t(this)
          , o = i.data("method")
          , r = i.data("params")
          , a = e.metaKey || e.ctrlKey;
        if (!n.allowAction(i))
            return n.stopEverything(e);
        if (!a && i.is(n.linkDisableSelector) && n.disableElement(i),
        n.isRemote(i)) {
            if (a && (!o || "GET" === o) && !r)
                return !0;
            var s = n.handleRemote(i);
            return !1 === s ? n.enableElement(i) : s.fail(function() {
                n.enableElement(i)
            }),
            !1
        }
        return o ? (n.handleMethod(i),
        !1) : void 0
    }),
    i.on("click.rails", n.buttonClickSelector, function(e) {
        var i = t(this);
        if (!n.allowAction(i) || !n.isRemote(i))
            return n.stopEverything(e);
        i.is(n.buttonDisableSelector) && n.disableFormElement(i);
        var o = n.handleRemote(i);
        return !1 === o ? n.enableFormElement(i) : o.fail(function() {
            n.enableFormElement(i)
        }),
        !1
    }),
    i.on("change.rails", n.inputChangeSelector, function(e) {
        var i = t(this);
        return n.allowAction(i) && n.isRemote(i) ? (n.handleRemote(i),
        !1) : n.stopEverything(e)
    }),
    i.on("submit.rails", n.formSubmitSelector, function(i) {
        var o, r, a = t(this), s = n.isRemote(a);
        if (!n.allowAction(a))
            return n.stopEverything(i);
        if (a.attr("novalidate") === e)
            if (a.data("ujs:formnovalidate-button") === e) {
                if ((o = n.blankInputs(a, n.requiredInputSelector, !1)) && n.fire(a, "ajax:aborted:required", [o]))
                    return n.stopEverything(i)
            } else
                a.data("ujs:formnovalidate-button", e);
        if (s) {
            if (r = n.nonBlankInputs(a, n.fileInputSelector)) {
                setTimeout(function() {
                    n.disableFormElements(a)
                }, 13);
                var l = n.fire(a, "ajax:aborted:file", [r]);
                return l || setTimeout(function() {
                    n.enableFormElements(a)
                }, 13),
                l
            }
            return n.handleRemote(a),
            !1
        }
        setTimeout(function() {
            n.disableFormElements(a)
        }, 13)
    }),
    i.on("click.rails", n.formInputClickSelector, function(e) {
        var i = t(this);
        if (!n.allowAction(i))
            return n.stopEverything(e);
        var o = i.attr("name")
          , r = o ? {
            name: o,
            value: i.val()
        } : null
          , a = i.closest("form");
        0 === a.length && (a = t("#" + i.attr("form"))),
        a.data("ujs:submit-button", r),
        a.data("ujs:formnovalidate-button", i.attr("formnovalidate")),
        a.data("ujs:submit-button-formaction", i.attr("formaction")),
        a.data("ujs:submit-button-formmethod", i.attr("formmethod"))
    }),
    i.on("ajax:send.rails", n.formSubmitSelector, function(e) {
        this === e.target && n.disableFormElements(t(this))
    }),
    i.on("ajax:complete.rails", n.formSubmitSelector, function(e) {
        this === e.target && n.enableFormElements(t(this))
    }),
    t(function() {
        n.refreshCSRFTokens()
    }))
}(jQuery),
function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.ahoy = e()
}(this, function() {
    "use strict";
    function t(t) {
        return t === undefined
    }
    function e(t) {
        return t === Object(t)
    }
    function n(t) {
        return Array.isArray(t)
    }
    function i(t) {
        return null != t && "number" == typeof t.size && "string" == typeof t.type && "function" == typeof t.slice
    }
    function o(t) {
        return i(t) && "number" == typeof t.lastModified && "string" == typeof t.name
    }
    function r(t) {
        return t instanceof Date
    }
    function a(i, s, l) {
        return s = s || new FormData,
        t(i) ? s : (n(i) ? i.forEach(function(t) {
            a(t, s, l + "[]")
        }) : !e(i) || o(i) || r(i) ? s.append(l, i) : Object.keys(i).forEach(function(t) {
            var e = i[t];
            if (n(e))
                for (; t.length > 2 && t.lastIndexOf("[]") === t.length - 2; )
                    t = t.substring(0, t.length - 2);
            a(e, s, l ? l + "[" + t + "]" : t)
        }),
        s)
    }
    function s() {
        return R.urlPrefix + R.visitsUrl
    }
    function l() {
        return R.urlPrefix + R.eventsUrl
    }
    function c() {
        return (R.useBeacon || R.trackNow) && V && "undefined" != typeof window.navigator.sendBeacon
    }
    function u(t, e, n) {
        L.set(t, e, n, R.cookieDomain || R.domain)
    }
    function d(t) {
        return L.get(t)
    }
    function f(t) {
        L.set(t, "", -1)
    }
    function p(t) {
        d("ahoy_debug") && window.console.log(t)
    }
    function h() {
        for (var t; t = z.shift(); )
            t();
        U = !0
    }
    function m(t) {
        U ? t() : z.push(t)
    }
    function g(t, e) {
        var n = t.matches || t.matchesSelector || t.mozMatchesSelector || t.msMatchesSelector || t.oMatchesSelector || t.webkitMatchesSelector;
        return n ? n.apply(t, [e]) : (p("Unable to match"),
        !1)
    }
    function v(t, e, n) {
        document.addEventListener(t, function(t) {
            g(t.target, e) && n(t)
        })
    }
    function y(t) {
        "interactive" === document.readyState || "complete" === document.readyState ? t() : document.addEventListener("DOMContentLoaded", t)
    }
    function b() {
        return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(t) {
            var e = 16 * Math.random() | 0;
            return ("x" == t ? e : 3 & e | 8).toString(16)
        })
    }
    function w() {
        R.cookies && V && u("ahoy_events", JSON.stringify(X), 1)
    }
    function x() {
        var t = document.querySelector("meta[name=csrf-token]");
        return t && t.content
    }
    function C() {
        var t = document.querySelector("meta[name=csrf-param]");
        return t && t.content
    }
    function T(t) {
        var e = x();
        e && t.setRequestHeader("X-CSRF-Token", e)
    }
    function k(t, e, n) {
        if (V)
            if (B)
                B.ajax({
                    type: "POST",
                    url: t,
                    data: JSON.stringify(e),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    beforeSend: T,
                    success: n
                });
            else {
                var i = new XMLHttpRequest;
                i.open("POST", t, !0),
                i.setRequestHeader("Content-Type", "application/json"),
                i.onload = function() {
                    200 === i.status && n()
                }
                ,
                T(i),
                i.send(JSON.stringify(e))
            }
    }
    function S(t) {
        var e = {
            events: [t]
        };
        return R.cookies && (e.visit_token = t.visit_token,
        e.visitor_token = t.visitor_token),
        delete t.visit_token,
        delete t.visitor_token,
        e
    }
    function E(t) {
        m(function() {
            k(l(), S(t), function() {
                for (var e = 0; e < X.length; e++)
                    if (X[e].id == t.id) {
                        X.splice(e, 1);
                        break
                    }
                w()
            })
        })
    }
    function $(t) {
        m(function() {
            var e = S(t)
              , n = C()
              , i = x();
            n && i && (e[n] = i),
            e.events_json = JSON.stringify(e.events),
            delete e.events,
            window.navigator.sendBeacon(l(), I(e))
        })
    }
    function N() {
        return R.page || window.location.pathname
    }
    function D(t) {
        return t && t.length > 0 ? t : null
    }
    function j(t) {
        for (var e in t)
            t.hasOwnProperty(e) && null === t[e] && delete t[e];
        return t
    }
    function A(t) {
        var e = t.target;
        return j({
            tag: e.tagName.toLowerCase(),
            id: D(e.id),
            "class": D(e.className),
            page: N(),
            section: _(e)
        })
    }
    function _(t) {
        for (; t && t !== document; t = t.parentNode)
            if (t.hasAttribute("data-section"))
                return t.getAttribute("data-section");
        return null
    }
    function O() {
        if (U = !1,
        F = H.getVisitId(),
        P = H.getVisitorId(),
        q = d("ahoy_track"),
        !1 === R.cookies || !1 === R.trackVisits)
            p("Visit tracking disabled"),
            h();
        else if (F && P && !q)
            p("Active visit"),
            h();
        else if (F || u("ahoy_visit", F = b(), M),
        d("ahoy_visit")) {
            p("Visit started"),
            P || u("ahoy_visitor", P = b(), W);
            var t = {
                visit_token: F,
                visitor_token: P,
                platform: R.platform,
                landing_page: window.location.href,
                screen_width: window.screen.width,
                screen_height: window.screen.height,
                js: !0
            };
            document.referrer.length > 0 && (t.referrer = document.referrer),
            p(t),
            k(s(), t, function() {
                f("ahoy_track"),
                h()
            })
        } else
            p("Cookies disabled"),
            h()
    }
    var I = a
      , L = {
        set: function(t, e, n, i) {
            var o = ""
              , r = "";
            if (n) {
                var a = new Date;
                a.setTime(a.getTime() + 60 * n * 1e3),
                o = "; expires=" + a.toGMTString()
            }
            i && (r = "; domain=" + i),
            document.cookie = t + "=" + escape(e) + o + r + "; path=/"
        },
        get: function(t) {
            var e, n, i = t + "=", o = document.cookie.split(";");
            for (e = 0; e < o.length; e++) {
                for (n = o[e]; " " === n.charAt(0); )
                    n = n.substring(1, n.length);
                if (0 === n.indexOf(i))
                    return unescape(n.substring(i.length, n.length))
            }
            return null
        }
    }
      , R = {
        urlPrefix: "",
        visitsUrl: "/ahoy/visits",
        eventsUrl: "/ahoy/events",
        cookieDomain: null,
        page: null,
        platform: "Web",
        useBeacon: !0,
        startOnReady: !0,
        trackVisits: !0,
        cookies: !0
    }
      , H = window.ahoy || window.Ahoy || {};
    H.configure = function(t) {
        for (var e in t)
            t.hasOwnProperty(e) && (R[e] = t[e])
    }
    ,
    H.configure(H);
    var F, P, q, B = window.jQuery || window.Zepto || window.$, M = 240, W = 1051200, U = !1, z = [], V = "undefined" != typeof JSON && "undefined" != typeof JSON.stringify, X = [];
    H.getVisitId = H.getVisitToken = function() {
        return d("ahoy_visit")
    }
    ,
    H.getVisitorId = H.getVisitorToken = function() {
        return d("ahoy_visitor")
    }
    ,
    H.reset = function() {
        return f("ahoy_visit"),
        f("ahoy_visitor"),
        f("ahoy_events"),
        f("ahoy_track"),
        !0
    }
    ,
    H.debug = function(t) {
        return !1 === t ? f("ahoy_debug") : u("ahoy_debug", "t", 525600),
        !0
    }
    ,
    H.track = function(t, e) {
        var n = {
            name: t,
            properties: e || {},
            time: (new Date).getTime() / 1e3,
            id: b(),
            js: !0
        };
        return m(function() {
            R.cookies && !H.getVisitId() && O(),
            m(function() {
                p(n),
                n.visit_token = H.getVisitId(),
                n.visitor_token = H.getVisitorId(),
                c() ? $(n) : (X.push(n),
                w(),
                setTimeout(function() {
                    E(n)
                }, 1e3))
            })
        }),
        !0
    }
    ,
    H.trackView = function(t) {
        var e = {
            url: window.location.href,
            title: document.title,
            page: N()
        };
        if (t)
            for (var n in t)
                t.hasOwnProperty(n) && (e[n] = t[n]);
        H.track("$view", e)
    }
    ,
    H.trackClicks = function() {
        v("click", "a, button, input[type=submit]", function(t) {
            var e = t.target
              , n = A(t);
            n.text = "input" == n.tag ? e.value : (e.textContent || e.innerText || e.innerHTML).replace(/[\s\r\n]+/g, " ").trim(),
            n.href = e.href,
            H.track("$click", n)
        })
    }
    ,
    H.trackSubmits = function() {
        v("submit", "form", function(t) {
            var e = A(t);
            H.track("$submit", e)
        })
    }
    ,
    H.trackChanges = function() {
        v("change", "input, textarea, select", function(t) {
            var e = A(t);
            H.track("$change", e)
        })
    }
    ,
    H.trackAll = function() {
        H.trackView(),
        H.trackClicks(),
        H.trackSubmits(),
        H.trackChanges()
    }
    ;
    try {
        X = JSON.parse(d("ahoy_events") || "[]")
    } catch (J) {}
    for (var Q = 0; Q < X.length; Q++)
        E(X[Q]);
    return H.start = function() {
        O(),
        H.start = function() {}
    }
    ,
    y(function() {
        R.startOnReady && H.start()
    }),
    H
}),
"undefined" == typeof jQuery)
    throw new Error("Bootstrap's JavaScript requires jQuery");
!function() {
    "use strict";
    var t = jQuery.fn.jquery.split(" ")[0].split(".");
    if (t[0] < 2 && t[1] < 9 || 1 == t[0] && 9 == t[1] && t[2] < 1)
        throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
}(),
function(t) {
    "use strict";
    function e() {
        var t = document.createElement("bootstrap")
          , e = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd otransitionend",
            transition: "transitionend"
        };
        for (var n in e)
            if (t.style[n] !== undefined)
                return {
                    end: e[n]
                };
        return !1
    }
    t.fn.emulateTransitionEnd = function(e) {
        var n = !1
          , i = this;
        return t(this).one("bsTransitionEnd", function() {
            n = !0
        }),
        setTimeout(function() {
            n || t(i).trigger(t.support.transition.end)
        }, e),
        this
    }
    ,
    t(function() {
        t.support.transition = e(),
        t.support.transition && (t.event.special.bsTransitionEnd = {
            bindType: t.support.transition.end,
            delegateType: t.support.transition.end,
            handle: function(e) {
                if (t(e.target).is(this))
                    return e.handleObj.handler.apply(this, arguments)
            }
        })
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var n = t(this)
              , o = n.data("bs.alert");
            o || n.data("bs.alert", o = new i(this)),
            "string" == typeof e && o[e].call(n)
        })
    }
    var n = '[data-dismiss="alert"]'
      , i = function(e) {
        t(e).on("click", n, this.close)
    };
    i.VERSION = "3.3.5",
    i.TRANSITION_DURATION = 150,
    i.prototype.close = function(e) {
        function n() {
            a.detach().trigger("closed.bs.alert").remove()
        }
        var o = t(this)
          , r = o.attr("data-target");
        r || (r = (r = o.attr("href")) && r.replace(/.*(?=#[^\s]*$)/, ""));
        var a = t(r);
        e && e.preventDefault(),
        a.length || (a = o.closest(".alert")),
        a.trigger(e = t.Event("close.bs.alert")),
        e.isDefaultPrevented() || (a.removeClass("in"),
        t.support.transition && a.hasClass("fade") ? a.one("bsTransitionEnd", n).emulateTransitionEnd(i.TRANSITION_DURATION) : n())
    }
    ;
    var o = t.fn.alert;
    t.fn.alert = e,
    t.fn.alert.Constructor = i,
    t.fn.alert.noConflict = function() {
        return t.fn.alert = o,
        this
    }
    ,
    t(document).on("click.bs.alert.data-api", n, i.prototype.close)
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.button")
              , r = "object" == typeof e && e;
            o || i.data("bs.button", o = new n(this,r)),
            "toggle" == e ? o.toggle() : e && o.setState(e)
        })
    }
    var n = function(e, i) {
        this.$element = t(e),
        this.options = t.extend({}, n.DEFAULTS, i),
        this.isLoading = !1
    };
    n.VERSION = "3.3.5",
    n.DEFAULTS = {
        loadingText: "loading..."
    },
    n.prototype.setState = function(e) {
        var n = "disabled"
          , i = this.$element
          , o = i.is("input") ? "val" : "html"
          , r = i.data();
        e += "Text",
        null == r.resetText && i.data("resetText", i[o]()),
        setTimeout(t.proxy(function() {
            i[o](null == r[e] ? this.options[e] : r[e]),
            "loadingText" == e ? (this.isLoading = !0,
            i.addClass(n).attr(n, n)) : this.isLoading && (this.isLoading = !1,
            i.removeClass(n).removeAttr(n))
        }, this), 0)
    }
    ,
    n.prototype.toggle = function() {
        var t = !0
          , e = this.$element.closest('[data-toggle="buttons"]');
        if (e.length) {
            var n = this.$element.find("input");
            "radio" == n.prop("type") ? (n.prop("checked") && (t = !1),
            e.find(".active").removeClass("active"),
            this.$element.addClass("active")) : "checkbox" == n.prop("type") && (n.prop("checked") !== this.$element.hasClass("active") && (t = !1),
            this.$element.toggleClass("active")),
            n.prop("checked", this.$element.hasClass("active")),
            t && n.trigger("change")
        } else
            this.$element.attr("aria-pressed", !this.$element.hasClass("active")),
            this.$element.toggleClass("active")
    }
    ;
    var i = t.fn.button;
    t.fn.button = e,
    t.fn.button.Constructor = n,
    t.fn.button.noConflict = function() {
        return t.fn.button = i,
        this
    }
    ,
    t(document).on("click.bs.button.data-api", '[data-toggle^="button"]', function(n) {
        var i = t(n.target);
        i.hasClass("btn") || (i = i.closest(".btn")),
        e.call(i, "toggle"),
        t(n.target).is('input[type="radio"]') || t(n.target).is('input[type="checkbox"]') || n.preventDefault()
    }).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', function(e) {
        t(e.target).closest(".btn").toggleClass("focus", /^focus(in)?$/.test(e.type))
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.carousel")
              , r = t.extend({}, n.DEFAULTS, i.data(), "object" == typeof e && e)
              , a = "string" == typeof e ? e : r.slide;
            o || i.data("bs.carousel", o = new n(this,r)),
            "number" == typeof e ? o.to(e) : a ? o[a]() : r.interval && o.pause().cycle()
        })
    }
    var n = function(e, n) {
        this.$element = t(e),
        this.$indicators = this.$element.find(".carousel-indicators"),
        this.options = n,
        this.paused = null,
        this.sliding = null,
        this.interval = null,
        this.$active = null,
        this.$items = null,
        this.options.keyboard && this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)),
        "hover" == this.options.pause && !("ontouchstart"in document.documentElement) && this.$element.on("mouseenter.bs.carousel", t.proxy(this.pause, this)).on("mouseleave.bs.carousel", t.proxy(this.cycle, this))
    };
    n.VERSION = "3.3.5",
    n.TRANSITION_DURATION = 600,
    n.DEFAULTS = {
        interval: 5e3,
        pause: "hover",
        wrap: !0,
        keyboard: !0
    },
    n.prototype.keydown = function(t) {
        if (!/input|textarea/i.test(t.target.tagName)) {
            switch (t.which) {
            case 37:
                this.prev();
                break;
            case 39:
                this.next();
                break;
            default:
                return
            }
            t.preventDefault()
        }
    }
    ,
    n.prototype.cycle = function(e) {
        return e || (this.paused = !1),
        this.interval && clearInterval(this.interval),
        this.options.interval && !this.paused && (this.interval = setInterval(t.proxy(this.next, this), this.options.interval)),
        this
    }
    ,
    n.prototype.getItemIndex = function(t) {
        return this.$items = t.parent().children(".item"),
        this.$items.index(t || this.$active)
    }
    ,
    n.prototype.getItemForDirection = function(t, e) {
        var n = this.getItemIndex(e);
        if (("prev" == t && 0 === n || "next" == t && n == this.$items.length - 1) && !this.options.wrap)
            return e;
        var i = (n + ("prev" == t ? -1 : 1)) % this.$items.length;
        return this.$items.eq(i)
    }
    ,
    n.prototype.to = function(t) {
        var e = this
          , n = this.getItemIndex(this.$active = this.$element.find(".item.active"));
        if (!(t > this.$items.length - 1 || t < 0))
            return this.sliding ? this.$element.one("slid.bs.carousel", function() {
                e.to(t)
            }) : n == t ? this.pause().cycle() : this.slide(t > n ? "next" : "prev", this.$items.eq(t))
    }
    ,
    n.prototype.pause = function(e) {
        return e || (this.paused = !0),
        this.$element.find(".next, .prev").length && t.support.transition && (this.$element.trigger(t.support.transition.end),
        this.cycle(!0)),
        this.interval = clearInterval(this.interval),
        this
    }
    ,
    n.prototype.next = function() {
        if (!this.sliding)
            return this.slide("next")
    }
    ,
    n.prototype.prev = function() {
        if (!this.sliding)
            return this.slide("prev")
    }
    ,
    n.prototype.slide = function(e, i) {
        var o = this.$element.find(".item.active")
          , r = i || this.getItemForDirection(e, o)
          , a = this.interval
          , s = "next" == e ? "left" : "right"
          , l = this;
        if (r.hasClass("active"))
            return this.sliding = !1;
        var c = r[0]
          , u = t.Event("slide.bs.carousel", {
            relatedTarget: c,
            direction: s
        });
        if (this.$element.trigger(u),
        !u.isDefaultPrevented()) {
            if (this.sliding = !0,
            a && this.pause(),
            this.$indicators.length) {
                this.$indicators.find(".active").removeClass("active");
                var d = t(this.$indicators.children()[this.getItemIndex(r)]);
                d && d.addClass("active")
            }
            var f = t.Event("slid.bs.carousel", {
                relatedTarget: c,
                direction: s
            });
            return t.support.transition && this.$element.hasClass("slide") ? (r.addClass(e),
            r[0].offsetWidth,
            o.addClass(s),
            r.addClass(s),
            o.one("bsTransitionEnd", function() {
                r.removeClass([e, s].join(" ")).addClass("active"),
                o.removeClass(["active", s].join(" ")),
                l.sliding = !1,
                setTimeout(function() {
                    l.$element.trigger(f)
                }, 0)
            }).emulateTransitionEnd(n.TRANSITION_DURATION)) : (o.removeClass("active"),
            r.addClass("active"),
            this.sliding = !1,
            this.$element.trigger(f)),
            a && this.cycle(),
            this
        }
    }
    ;
    var i = t.fn.carousel;
    t.fn.carousel = e,
    t.fn.carousel.Constructor = n,
    t.fn.carousel.noConflict = function() {
        return t.fn.carousel = i,
        this
    }
    ;
    var o = function(n) {
        var i, o = t(this), r = t(o.attr("data-target") || (i = o.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, ""));
        if (r.hasClass("carousel")) {
            var a = t.extend({}, r.data(), o.data())
              , s = o.attr("data-slide-to");
            s && (a.interval = !1),
            e.call(r, a),
            s && r.data("bs.carousel").to(s),
            n.preventDefault()
        }
    };
    t(document).on("click.bs.carousel.data-api", "[data-slide]", o).on("click.bs.carousel.data-api", "[data-slide-to]", o),
    t(window).on("load", function() {
        t('[data-ride="carousel"]').each(function() {
            var n = t(this);
            e.call(n, n.data())
        })
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        var n, i = e.attr("data-target") || (n = e.attr("href")) && n.replace(/.*(?=#[^\s]+$)/, "");
        return t(i)
    }
    function n(e) {
        return this.each(function() {
            var n = t(this)
              , o = n.data("bs.collapse")
              , r = t.extend({}, i.DEFAULTS, n.data(), "object" == typeof e && e);
            !o && r.toggle && /show|hide/.test(e) && (r.toggle = !1),
            o || n.data("bs.collapse", o = new i(this,r)),
            "string" == typeof e && o[e]()
        })
    }
    var i = function(e, n) {
        this.$element = t(e),
        this.options = t.extend({}, i.DEFAULTS, n),
        this.$trigger = t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'),
        this.transitioning = null,
        this.options.parent ? this.$parent = this.getParent() : this.addAriaAndCollapsedClass(this.$element, this.$trigger),
        this.options.toggle && this.toggle()
    };
    i.VERSION = "3.3.5",
    i.TRANSITION_DURATION = 350,
    i.DEFAULTS = {
        toggle: !0
    },
    i.prototype.dimension = function() {
        return this.$element.hasClass("width") ? "width" : "height"
    }
    ,
    i.prototype.show = function() {
        if (!this.transitioning && !this.$element.hasClass("in")) {
            var e, o = this.$parent && this.$parent.children(".panel").children(".in, .collapsing");
            if (!(o && o.length && (e = o.data("bs.collapse")) && e.transitioning)) {
                var r = t.Event("show.bs.collapse");
                if (this.$element.trigger(r),
                !r.isDefaultPrevented()) {
                    o && o.length && (n.call(o, "hide"),
                    e || o.data("bs.collapse", null));
                    var a = this.dimension();
                    this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded", !0),
                    this.$trigger.removeClass("collapsed").attr("aria-expanded", !0),
                    this.transitioning = 1;
                    var s = function() {
                        this.$element.removeClass("collapsing").addClass("collapse in")[a](""),
                        this.transitioning = 0,
                        this.$element.trigger("shown.bs.collapse")
                    };
                    if (!t.support.transition)
                        return s.call(this);
                    var l = t.camelCase(["scroll", a].join("-"));
                    this.$element.one("bsTransitionEnd", t.proxy(s, this)).emulateTransitionEnd(i.TRANSITION_DURATION)[a](this.$element[0][l])
                }
            }
        }
    }
    ,
    i.prototype.hide = function() {
        if (!this.transitioning && this.$element.hasClass("in")) {
            var e = t.Event("hide.bs.collapse");
            if (this.$element.trigger(e),
            !e.isDefaultPrevented()) {
                var n = this.dimension();
                this.$element[n](this.$element[n]())[0].offsetHeight,
                this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded", !1),
                this.$trigger.addClass("collapsed").attr("aria-expanded", !1),
                this.transitioning = 1;
                var o = function() {
                    this.transitioning = 0,
                    this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                };
                if (!t.support.transition)
                    return o.call(this);
                this.$element[n](0).one("bsTransitionEnd", t.proxy(o, this)).emulateTransitionEnd(i.TRANSITION_DURATION)
            }
        }
    }
    ,
    i.prototype.toggle = function() {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }
    ,
    i.prototype.getParent = function() {
        return t(this.options.parent).find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]').each(t.proxy(function(n, i) {
            var o = t(i);
            this.addAriaAndCollapsedClass(e(o), o)
        }, this)).end()
    }
    ,
    i.prototype.addAriaAndCollapsedClass = function(t, e) {
        var n = t.hasClass("in");
        t.attr("aria-expanded", n),
        e.toggleClass("collapsed", !n).attr("aria-expanded", n)
    }
    ;
    var o = t.fn.collapse;
    t.fn.collapse = n,
    t.fn.collapse.Constructor = i,
    t.fn.collapse.noConflict = function() {
        return t.fn.collapse = o,
        this
    }
    ,
    t(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', function(i) {
        var o = t(this);
        o.attr("data-target") || i.preventDefault();
        var r = e(o)
          , a = r.data("bs.collapse") ? "toggle" : o.data();
        n.call(r, a)
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        var n = e.attr("data-target");
        n || (n = (n = e.attr("href")) && /#[A-Za-z]/.test(n) && n.replace(/.*(?=#[^\s]*$)/, ""));
        var i = n && t(n);
        return i && i.length ? i : e.parent()
    }
    function n(n) {
        n && 3 === n.which || (t(o).remove(),
        t(r).each(function() {
            var i = t(this)
              , o = e(i)
              , r = {
                relatedTarget: this
            };
            o.hasClass("open") && (n && "click" == n.type && /input|textarea/i.test(n.target.tagName) && t.contains(o[0], n.target) || (o.trigger(n = t.Event("hide.bs.dropdown", r)),
            n.isDefaultPrevented() || (i.attr("aria-expanded", "false"),
            o.removeClass("open").trigger("hidden.bs.dropdown", r))))
        }))
    }
    function i(e) {
        return this.each(function() {
            var n = t(this)
              , i = n.data("bs.dropdown");
            i || n.data("bs.dropdown", i = new a(this)),
            "string" == typeof e && i[e].call(n)
        })
    }
    var o = ".dropdown-backdrop"
      , r = '[data-toggle="dropdown"]'
      , a = function(e) {
        t(e).on("click.bs.dropdown", this.toggle)
    };
    a.VERSION = "3.3.5",
    a.prototype.toggle = function(i) {
        var o = t(this);
        if (!o.is(".disabled, :disabled")) {
            var r = e(o)
              , a = r.hasClass("open");
            if (n(),
            !a) {
                "ontouchstart"in document.documentElement && !r.closest(".navbar-nav").length && t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click", n);
                var s = {
                    relatedTarget: this
                };
                if (r.trigger(i = t.Event("show.bs.dropdown", s)),
                i.isDefaultPrevented())
                    return;
                o.trigger("focus").attr("aria-expanded", "true"),
                r.toggleClass("open").trigger("shown.bs.dropdown", s)
            }
            return !1
        }
    }
    ,
    a.prototype.keydown = function(n) {
        if (/(38|40|27|32)/.test(n.which) && !/input|textarea/i.test(n.target.tagName)) {
            var i = t(this);
            if (n.preventDefault(),
            n.stopPropagation(),
            !i.is(".disabled, :disabled")) {
                var o = e(i)
                  , a = o.hasClass("open");
                if (!a && 27 != n.which || a && 27 == n.which)
                    return 27 == n.which && o.find(r).trigger("focus"),
                    i.trigger("click");
                var s = " li:not(.disabled):visible a"
                  , l = o.find(".dropdown-menu" + s);
                if (l.length) {
                    var c = l.index(n.target);
                    38 == n.which && c > 0 && c--,
                    40 == n.which && c < l.length - 1 && c++,
                    ~c || (c = 0),
                    l.eq(c).trigger("focus")
                }
            }
        }
    }
    ;
    var s = t.fn.dropdown;
    t.fn.dropdown = i,
    t.fn.dropdown.Constructor = a,
    t.fn.dropdown.noConflict = function() {
        return t.fn.dropdown = s,
        this
    }
    ,
    t(document).on("click.bs.dropdown.data-api", n).on("click.bs.dropdown.data-api", ".dropdown form", function(t) {
        t.stopPropagation()
    }).on("click.bs.dropdown.data-api", r, a.prototype.toggle).on("keydown.bs.dropdown.data-api", r, a.prototype.keydown).on("keydown.bs.dropdown.data-api", ".dropdown-menu", a.prototype.keydown)
}(jQuery),
function(t) {
    "use strict";
    function e(e, i) {
        return this.each(function() {
            var o = t(this)
              , r = o.data("bs.modal")
              , a = t.extend({}, n.DEFAULTS, o.data(), "object" == typeof e && e);
            r || o.data("bs.modal", r = new n(this,a)),
            "string" == typeof e ? r[e](i) : a.show && r.show(i)
        })
    }
    var n = function(e, n) {
        this.options = n,
        this.$body = t(document.body),
        this.$element = t(e),
        this.$dialog = this.$element.find(".modal-dialog"),
        this.$backdrop = null,
        this.isShown = null,
        this.originalBodyPad = null,
        this.scrollbarWidth = 0,
        this.ignoreBackdropClick = !1,
        this.options.remote && this.$element.find(".modal-content").load(this.options.remote, t.proxy(function() {
            this.$element.trigger("loaded.bs.modal")
        }, this))
    };
    n.VERSION = "3.3.5",
    n.TRANSITION_DURATION = 300,
    n.BACKDROP_TRANSITION_DURATION = 150,
    n.DEFAULTS = {
        backdrop: !0,
        keyboard: !0,
        show: !0
    },
    n.prototype.toggle = function(t) {
        return this.isShown ? this.hide() : this.show(t)
    }
    ,
    n.prototype.show = function(e) {
        var i = this
          , o = t.Event("show.bs.modal", {
            relatedTarget: e
        });
        this.$element.trigger(o),
        this.isShown || o.isDefaultPrevented() || (this.isShown = !0,
        this.checkScrollbar(),
        this.setScrollbar(),
        this.$body.addClass("modal-open"),
        this.escape(),
        this.resize(),
        this.$element.on("click.dismiss.bs.modal", '[data-dismiss="modal"]', t.proxy(this.hide, this)),
        this.$dialog.on("mousedown.dismiss.bs.modal", function() {
            i.$element.one("mouseup.dismiss.bs.modal", function(e) {
                t(e.target).is(i.$element) && (i.ignoreBackdropClick = !0)
            })
        }),
        this.backdrop(function() {
            var o = t.support.transition && i.$element.hasClass("fade");
            i.$element.parent().length || i.$element.appendTo(i.$body),
            i.$element.show().scrollTop(0),
            i.adjustDialog(),
            o && i.$element[0].offsetWidth,
            i.$element.addClass("in"),
            i.enforceFocus();
            var r = t.Event("shown.bs.modal", {
                relatedTarget: e
            });
            o ? i.$dialog.one("bsTransitionEnd", function() {
                i.$element.trigger("focus").trigger(r)
            }).emulateTransitionEnd(n.TRANSITION_DURATION) : i.$element.trigger("focus").trigger(r)
        }))
    }
    ,
    n.prototype.hide = function(e) {
        e && e.preventDefault(),
        e = t.Event("hide.bs.modal"),
        this.$element.trigger(e),
        this.isShown && !e.isDefaultPrevented() && (this.isShown = !1,
        this.escape(),
        this.resize(),
        t(document).off("focusin.bs.modal"),
        this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),
        this.$dialog.off("mousedown.dismiss.bs.modal"),
        t.support.transition && this.$element.hasClass("fade") ? this.$element.one("bsTransitionEnd", t.proxy(this.hideModal, this)).emulateTransitionEnd(n.TRANSITION_DURATION) : this.hideModal())
    }
    ,
    n.prototype.enforceFocus = function() {
        t(document).off("focusin.bs.modal").on("focusin.bs.modal", t.proxy(function(t) {
            this.$element[0] === t.target || this.$element.has(t.target).length || this.$element.trigger("focus")
        }, this))
    }
    ,
    n.prototype.escape = function() {
        this.isShown && this.options.keyboard ? this.$element.on("keydown.dismiss.bs.modal", t.proxy(function(t) {
            27 == t.which && this.hide()
        }, this)) : this.isShown || this.$element.off("keydown.dismiss.bs.modal")
    }
    ,
    n.prototype.resize = function() {
        this.isShown ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this)) : t(window).off("resize.bs.modal")
    }
    ,
    n.prototype.hideModal = function() {
        var t = this;
        this.$element.hide(),
        this.backdrop(function() {
            t.$body.removeClass("modal-open"),
            t.resetAdjustments(),
            t.resetScrollbar(),
            t.$element.trigger("hidden.bs.modal")
        })
    }
    ,
    n.prototype.removeBackdrop = function() {
        this.$backdrop && this.$backdrop.remove(),
        this.$backdrop = null
    }
    ,
    n.prototype.backdrop = function(e) {
        var i = this
          , o = this.$element.hasClass("fade") ? "fade" : "";
        if (this.isShown && this.options.backdrop) {
            var r = t.support.transition && o;
            if (this.$backdrop = t(document.createElement("div")).addClass("modal-backdrop " + o).appendTo(this.$body),
            this.$element.on("click.dismiss.bs.modal", t.proxy(function(t) {
                this.ignoreBackdropClick ? this.ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" == this.options.backdrop ? this.$element[0].focus() : this.hide())
            }, this)),
            r && this.$backdrop[0].offsetWidth,
            this.$backdrop.addClass("in"),
            !e)
                return;
            r ? this.$backdrop.one("bsTransitionEnd", e).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION) : e()
        } else if (!this.isShown && this.$backdrop) {
            this.$backdrop.removeClass("in");
            var a = function() {
                i.removeBackdrop(),
                e && e()
            };
            t.support.transition && this.$element.hasClass("fade") ? this.$backdrop.one("bsTransitionEnd", a).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION) : a()
        } else
            e && e()
    }
    ,
    n.prototype.handleUpdate = function() {
        this.adjustDialog()
    }
    ,
    n.prototype.adjustDialog = function() {
        var t = this.$element[0].scrollHeight > document.documentElement.clientHeight;
        this.$element.css({
            paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth : "",
            paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth : ""
        })
    }
    ,
    n.prototype.resetAdjustments = function() {
        this.$element.css({
            paddingLeft: "",
            paddingRight: ""
        })
    }
    ,
    n.prototype.checkScrollbar = function() {
        var t = window.innerWidth;
        if (!t) {
            var e = document.documentElement.getBoundingClientRect();
            t = e.right - Math.abs(e.left)
        }
        this.bodyIsOverflowing = document.body.clientWidth < t,
        this.scrollbarWidth = this.measureScrollbar()
    }
    ,
    n.prototype.setScrollbar = function() {
        var t = parseInt(this.$body.css("padding-right") || 0, 10);
        this.originalBodyPad = document.body.style.paddingRight || "",
        this.bodyIsOverflowing && this.$body.css("padding-right", t + this.scrollbarWidth)
    }
    ,
    n.prototype.resetScrollbar = function() {
        this.$body.css("padding-right", this.originalBodyPad)
    }
    ,
    n.prototype.measureScrollbar = function() {
        var t = document.createElement("div");
        t.className = "modal-scrollbar-measure",
        this.$body.append(t);
        var e = t.offsetWidth - t.clientWidth;
        return this.$body[0].removeChild(t),
        e
    }
    ;
    var i = t.fn.modal;
    t.fn.modal = e,
    t.fn.modal.Constructor = n,
    t.fn.modal.noConflict = function() {
        return t.fn.modal = i,
        this
    }
    ,
    t(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', function(n) {
        var i = t(this)
          , o = i.attr("href")
          , r = t(i.attr("data-target") || o && o.replace(/.*(?=#[^\s]+$)/, ""))
          , a = r.data("bs.modal") ? "toggle" : t.extend({
            remote: !/#/.test(o) && o
        }, r.data(), i.data());
        i.is("a") && n.preventDefault(),
        r.one("show.bs.modal", function(t) {
            t.isDefaultPrevented() || r.one("hidden.bs.modal", function() {
                i.is(":visible") && i.trigger("focus")
            })
        }),
        e.call(r, a, this)
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.tooltip")
              , r = "object" == typeof e && e;
            !o && /destroy|hide/.test(e) || (o || i.data("bs.tooltip", o = new n(this,r)),
            "string" == typeof e && o[e]())
        })
    }
    var n = function(t, e) {
        this.type = null,
        this.options = null,
        this.enabled = null,
        this.timeout = null,
        this.hoverState = null,
        this.$element = null,
        this.inState = null,
        this.init("tooltip", t, e)
    };
    n.VERSION = "3.3.5",
    n.TRANSITION_DURATION = 150,
    n.DEFAULTS = {
        animation: !0,
        placement: "top",
        selector: !1,
        template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !1,
        container: !1,
        viewport: {
            selector: "body",
            padding: 0
        }
    },
    n.prototype.init = function(e, n, i) {
        if (this.enabled = !0,
        this.type = e,
        this.$element = t(n),
        this.options = this.getOptions(i),
        this.$viewport = this.options.viewport && t(t.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : this.options.viewport.selector || this.options.viewport),
        this.inState = {
            click: !1,
            hover: !1,
            focus: !1
        },
        this.$element[0]instanceof document.constructor && !this.options.selector)
            throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var o = this.options.trigger.split(" "), r = o.length; r--; ) {
            var a = o[r];
            if ("click" == a)
                this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));
            else if ("manual" != a) {
                var s = "hover" == a ? "mouseenter" : "focusin"
                  , l = "hover" == a ? "mouseleave" : "focusout";
                this.$element.on(s + "." + this.type, this.options.selector, t.proxy(this.enter, this)),
                this.$element.on(l + "." + this.type, this.options.selector, t.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = t.extend({}, this.options, {
            trigger: "manual",
            selector: ""
        }) : this.fixTitle()
    }
    ,
    n.prototype.getDefaults = function() {
        return n.DEFAULTS
    }
    ,
    n.prototype.getOptions = function(e) {
        return (e = t.extend({}, this.getDefaults(), this.$element.data(), e)).delay && "number" == typeof e.delay && (e.delay = {
            show: e.delay,
            hide: e.delay
        }),
        e
    }
    ,
    n.prototype.getDelegateOptions = function() {
        var e = {}
          , n = this.getDefaults();
        return this._options && t.each(this._options, function(t, i) {
            n[t] != i && (e[t] = i)
        }),
        e
    }
    ,
    n.prototype.enter = function(e) {
        var n = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        if (n || (n = new this.constructor(e.currentTarget,this.getDelegateOptions()),
        t(e.currentTarget).data("bs." + this.type, n)),
        e instanceof t.Event && (n.inState["focusin" == e.type ? "focus" : "hover"] = !0),
        n.tip().hasClass("in") || "in" == n.hoverState)
            n.hoverState = "in";
        else {
            if (clearTimeout(n.timeout),
            n.hoverState = "in",
            !n.options.delay || !n.options.delay.show)
                return n.show();
            n.timeout = setTimeout(function() {
                "in" == n.hoverState && n.show()
            }, n.options.delay.show)
        }
    }
    ,
    n.prototype.isInStateTrue = function() {
        for (var t in this.inState)
            if (this.inState[t])
                return !0;
        return !1
    }
    ,
    n.prototype.leave = function(e) {
        var n = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        if (n || (n = new this.constructor(e.currentTarget,this.getDelegateOptions()),
        t(e.currentTarget).data("bs." + this.type, n)),
        e instanceof t.Event && (n.inState["focusout" == e.type ? "focus" : "hover"] = !1),
        !n.isInStateTrue()) {
            if (clearTimeout(n.timeout),
            n.hoverState = "out",
            !n.options.delay || !n.options.delay.hide)
                return n.hide();
            n.timeout = setTimeout(function() {
                "out" == n.hoverState && n.hide()
            }, n.options.delay.hide)
        }
    }
    ,
    n.prototype.show = function() {
        var e = t.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(e);
            var i = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (e.isDefaultPrevented() || !i)
                return;
            var o = this
              , r = this.tip()
              , a = this.getUID(this.type);
            this.setContent(),
            r.attr("id", a),
            this.$element.attr("aria-describedby", a),
            this.options.animation && r.addClass("fade");
            var s = "function" == typeof this.options.placement ? this.options.placement.call(this, r[0], this.$element[0]) : this.options.placement
              , l = /\s?auto?\s?/i
              , c = l.test(s);
            c && (s = s.replace(l, "") || "top"),
            r.detach().css({
                top: 0,
                left: 0,
                display: "block"
            }).addClass(s).data("bs." + this.type, this),
            this.options.container ? r.appendTo(this.options.container) : r.insertAfter(this.$element),
            this.$element.trigger("inserted.bs." + this.type);
            var u = this.getPosition()
              , d = r[0].offsetWidth
              , f = r[0].offsetHeight;
            if (c) {
                var p = s
                  , h = this.getPosition(this.$viewport);
                s = "bottom" == s && u.bottom + f > h.bottom ? "top" : "top" == s && u.top - f < h.top ? "bottom" : "right" == s && u.right + d > h.width ? "left" : "left" == s && u.left - d < h.left ? "right" : s,
                r.removeClass(p).addClass(s)
            }
            var m = this.getCalculatedOffset(s, u, d, f);
            this.applyPlacement(m, s);
            var g = function() {
                var t = o.hoverState;
                o.$element.trigger("shown.bs." + o.type),
                o.hoverState = null,
                "out" == t && o.leave(o)
            };
            t.support.transition && this.$tip.hasClass("fade") ? r.one("bsTransitionEnd", g).emulateTransitionEnd(n.TRANSITION_DURATION) : g()
        }
    }
    ,
    n.prototype.applyPlacement = function(e, n) {
        var i = this.tip()
          , o = i[0].offsetWidth
          , r = i[0].offsetHeight
          , a = parseInt(i.css("margin-top"), 10)
          , s = parseInt(i.css("margin-left"), 10);
        isNaN(a) && (a = 0),
        isNaN(s) && (s = 0),
        e.top += a,
        e.left += s,
        t.offset.setOffset(i[0], t.extend({
            using: function(t) {
                i.css({
                    top: Math.round(t.top),
                    left: Math.round(t.left)
                })
            }
        }, e), 0),
        i.addClass("in");
        var l = i[0].offsetWidth
          , c = i[0].offsetHeight;
        "top" == n && c != r && (e.top = e.top + r - c);
        var u = this.getViewportAdjustedDelta(n, e, l, c);
        u.left ? e.left += u.left : e.top += u.top;
        var d = /top|bottom/.test(n)
          , f = d ? 2 * u.left - o + l : 2 * u.top - r + c
          , p = d ? "offsetWidth" : "offsetHeight";
        i.offset(e),
        this.replaceArrow(f, i[0][p], d)
    }
    ,
    n.prototype.replaceArrow = function(t, e, n) {
        this.arrow().css(n ? "left" : "top", 50 * (1 - t / e) + "%").css(n ? "top" : "left", "")
    }
    ,
    n.prototype.setContent = function() {
        var t = this.tip()
          , e = this.getTitle();
        t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e),
        t.removeClass("fade in top bottom left right")
    }
    ,
    n.prototype.hide = function(e) {
        function i() {
            "in" != o.hoverState && r.detach(),
            o.$element.removeAttr("aria-describedby").trigger("hidden.bs." + o.type),
            e && e()
        }
        var o = this
          , r = t(this.$tip)
          , a = t.Event("hide.bs." + this.type);
        if (this.$element.trigger(a),
        !a.isDefaultPrevented())
            return r.removeClass("in"),
            t.support.transition && r.hasClass("fade") ? r.one("bsTransitionEnd", i).emulateTransitionEnd(n.TRANSITION_DURATION) : i(),
            this.hoverState = null,
            this
    }
    ,
    n.prototype.fixTitle = function() {
        var t = this.$element;
        (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
    }
    ,
    n.prototype.hasContent = function() {
        return this.getTitle()
    }
    ,
    n.prototype.getPosition = function(e) {
        var n = (e = e || this.$element)[0]
          , i = "BODY" == n.tagName
          , o = n.getBoundingClientRect();
        null == o.width && (o = t.extend({}, o, {
            width: o.right - o.left,
            height: o.bottom - o.top
        }));
        var r = i ? {
            top: 0,
            left: 0
        } : e.offset()
          , a = {
            scroll: i ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()
        }
          , s = i ? {
            width: t(window).width(),
            height: t(window).height()
        } : null;
        return t.extend({}, o, a, s, r)
    }
    ,
    n.prototype.getCalculatedOffset = function(t, e, n, i) {
        return "bottom" == t ? {
            top: e.top + e.height,
            left: e.left + e.width / 2 - n / 2
        } : "top" == t ? {
            top: e.top - i,
            left: e.left + e.width / 2 - n / 2
        } : "left" == t ? {
            top: e.top + e.height / 2 - i / 2,
            left: e.left - n
        } : {
            top: e.top + e.height / 2 - i / 2,
            left: e.left + e.width
        }
    }
    ,
    n.prototype.getViewportAdjustedDelta = function(t, e, n, i) {
        var o = {
            top: 0,
            left: 0
        };
        if (!this.$viewport)
            return o;
        var r = this.options.viewport && this.options.viewport.padding || 0
          , a = this.getPosition(this.$viewport);
        if (/right|left/.test(t)) {
            var s = e.top - r - a.scroll
              , l = e.top + r - a.scroll + i;
            s < a.top ? o.top = a.top - s : l > a.top + a.height && (o.top = a.top + a.height - l)
        } else {
            var c = e.left - r
              , u = e.left + r + n;
            c < a.left ? o.left = a.left - c : u > a.right && (o.left = a.left + a.width - u)
        }
        return o
    }
    ,
    n.prototype.getTitle = function() {
        var t = this.$element
          , e = this.options;
        return t.attr("data-original-title") || ("function" == typeof e.title ? e.title.call(t[0]) : e.title)
    }
    ,
    n.prototype.getUID = function(t) {
        do {
            t += ~~(1e6 * Math.random())
        } while (document.getElementById(t));
        return t
    }
    ,
    n.prototype.tip = function() {
        if (!this.$tip && (this.$tip = t(this.options.template),
        1 != this.$tip.length))
            throw new Error(this.type + " `template` option must consist of exactly 1 top-level element!");
        return this.$tip
    }
    ,
    n.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }
    ,
    n.prototype.enable = function() {
        this.enabled = !0
    }
    ,
    n.prototype.disable = function() {
        this.enabled = !1
    }
    ,
    n.prototype.toggleEnabled = function() {
        this.enabled = !this.enabled
    }
    ,
    n.prototype.toggle = function(e) {
        var n = this;
        e && ((n = t(e.currentTarget).data("bs." + this.type)) || (n = new this.constructor(e.currentTarget,this.getDelegateOptions()),
        t(e.currentTarget).data("bs." + this.type, n))),
        e ? (n.inState.click = !n.inState.click,
        n.isInStateTrue() ? n.enter(n) : n.leave(n)) : n.tip().hasClass("in") ? n.leave(n) : n.enter(n)
    }
    ,
    n.prototype.destroy = function() {
        var t = this;
        clearTimeout(this.timeout),
        this.hide(function() {
            t.$element.off("." + t.type).removeData("bs." + t.type),
            t.$tip && t.$tip.detach(),
            t.$tip = null,
            t.$arrow = null,
            t.$viewport = null
        })
    }
    ;
    var i = t.fn.tooltip;
    t.fn.tooltip = e,
    t.fn.tooltip.Constructor = n,
    t.fn.tooltip.noConflict = function() {
        return t.fn.tooltip = i,
        this
    }
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.popover")
              , r = "object" == typeof e && e;
            !o && /destroy|hide/.test(e) || (o || i.data("bs.popover", o = new n(this,r)),
            "string" == typeof e && o[e]())
        })
    }
    var n = function(t, e) {
        this.init("popover", t, e)
    };
    if (!t.fn.tooltip)
        throw new Error("Popover requires tooltip.js");
    n.VERSION = "3.3.5",
    n.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
        placement: "right",
        trigger: "click",
        content: "",
        template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
    }),
    n.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype),
    n.prototype.constructor = n,
    n.prototype.getDefaults = function() {
        return n.DEFAULTS
    }
    ,
    n.prototype.setContent = function() {
        var t = this.tip()
          , e = this.getTitle()
          , n = this.getContent();
        t.find(".popover-title")[this.options.html ? "html" : "text"](e),
        t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof n ? "html" : "append" : "text"](n),
        t.removeClass("fade top bottom left right in"),
        t.find(".popover-title").html() || t.find(".popover-title").hide()
    }
    ,
    n.prototype.hasContent = function() {
        return this.getTitle() || this.getContent()
    }
    ,
    n.prototype.getContent = function() {
        var t = this.$element
          , e = this.options;
        return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
    }
    ,
    n.prototype.arrow = function() {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    }
    ;
    var i = t.fn.popover;
    t.fn.popover = e,
    t.fn.popover.Constructor = n,
    t.fn.popover.noConflict = function() {
        return t.fn.popover = i,
        this
    }
}(jQuery),
function(t) {
    "use strict";
    function e(n, i) {
        this.$body = t(document.body),
        this.$scrollElement = t(n).is(document.body) ? t(window) : t(n),
        this.options = t.extend({}, e.DEFAULTS, i),
        this.selector = (this.options.target || "") + " .nav li > a",
        this.offsets = [],
        this.targets = [],
        this.activeTarget = null,
        this.scrollHeight = 0,
        this.$scrollElement.on("scroll.bs.scrollspy", t.proxy(this.process, this)),
        this.refresh(),
        this.process()
    }
    function n(n) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.scrollspy")
              , r = "object" == typeof n && n;
            o || i.data("bs.scrollspy", o = new e(this,r)),
            "string" == typeof n && o[n]()
        })
    }
    e.VERSION = "3.3.5",
    e.DEFAULTS = {
        offset: 10
    },
    e.prototype.getScrollHeight = function() {
        return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
    }
    ,
    e.prototype.refresh = function() {
        var e = this
          , n = "offset"
          , i = 0;
        this.offsets = [],
        this.targets = [],
        this.scrollHeight = this.getScrollHeight(),
        t.isWindow(this.$scrollElement[0]) || (n = "position",
        i = this.$scrollElement.scrollTop()),
        this.$body.find(this.selector).map(function() {
            var e = t(this)
              , o = e.data("target") || e.attr("href")
              , r = /^#./.test(o) && t(o);
            return r && r.length && r.is(":visible") && [[r[n]().top + i, o]] || null
        }).sort(function(t, e) {
            return t[0] - e[0]
        }).each(function() {
            e.offsets.push(this[0]),
            e.targets.push(this[1])
        })
    }
    ,
    e.prototype.process = function() {
        var t, e = this.$scrollElement.scrollTop() + this.options.offset, n = this.getScrollHeight(), i = this.options.offset + n - this.$scrollElement.height(), o = this.offsets, r = this.targets, a = this.activeTarget;
        if (this.scrollHeight != n && this.refresh(),
        e >= i)
            return a != (t = r[r.length - 1]) && this.activate(t);
        if (a && e < o[0])
            return this.activeTarget = null,
            this.clear();
        for (t = o.length; t--; )
            a != r[t] && e >= o[t] && (o[t + 1] === undefined || e < o[t + 1]) && this.activate(r[t])
    }
    ,
    e.prototype.activate = function(e) {
        this.activeTarget = e,
        this.clear();
        var n = this.selector + '[data-target="' + e + '"],' + this.selector + '[href="' + e + '"]'
          , i = t(n).parents("li").addClass("active");
        i.parent(".dropdown-menu").length && (i = i.closest("li.dropdown").addClass("active")),
        i.trigger("activate.bs.scrollspy")
    }
    ,
    e.prototype.clear = function() {
        t(this.selector).parentsUntil(this.options.target, ".active").removeClass("active")
    }
    ;
    var i = t.fn.scrollspy;
    t.fn.scrollspy = n,
    t.fn.scrollspy.Constructor = e,
    t.fn.scrollspy.noConflict = function() {
        return t.fn.scrollspy = i,
        this
    }
    ,
    t(window).on("load.bs.scrollspy.data-api", function() {
        t('[data-spy="scroll"]').each(function() {
            var e = t(this);
            n.call(e, e.data())
        })
    })
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.tab");
            o || i.data("bs.tab", o = new n(this)),
            "string" == typeof e && o[e]()
        })
    }
    var n = function(e) {
        this.element = t(e)
    };
    n.VERSION = "3.3.5",
    n.TRANSITION_DURATION = 150,
    n.prototype.show = function() {
        var e = this.element
          , n = e.closest("ul:not(.dropdown-menu)")
          , i = e.data("target");
        if (i || (i = (i = e.attr("href")) && i.replace(/.*(?=#[^\s]*$)/, "")),
        !e.parent("li").hasClass("active")) {
            var o = n.find(".active:last a")
              , r = t.Event("hide.bs.tab", {
                relatedTarget: e[0]
            })
              , a = t.Event("show.bs.tab", {
                relatedTarget: o[0]
            });
            if (o.trigger(r),
            e.trigger(a),
            !a.isDefaultPrevented() && !r.isDefaultPrevented()) {
                var s = t(i);
                this.activate(e.closest("li"), n),
                this.activate(s, s.parent(), function() {
                    o.trigger({
                        type: "hidden.bs.tab",
                        relatedTarget: e[0]
                    }),
                    e.trigger({
                        type: "shown.bs.tab",
                        relatedTarget: o[0]
                    })
                })
            }
        }
    }
    ,
    n.prototype.activate = function(e, i, o) {
        function r() {
            a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1),
            e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0),
            s ? (e[0].offsetWidth,
            e.addClass("in")) : e.removeClass("fade"),
            e.parent(".dropdown-menu").length && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0),
            o && o()
        }
        var a = i.find("> .active")
          , s = o && t.support.transition && (a.length && a.hasClass("fade") || !!i.find("> .fade").length);
        a.length && s ? a.one("bsTransitionEnd", r).emulateTransitionEnd(n.TRANSITION_DURATION) : r(),
        a.removeClass("in")
    }
    ;
    var i = t.fn.tab;
    t.fn.tab = e,
    t.fn.tab.Constructor = n,
    t.fn.tab.noConflict = function() {
        return t.fn.tab = i,
        this
    }
    ;
    var o = function(n) {
        n.preventDefault(),
        e.call(t(this), "show")
    };
    t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', o).on("click.bs.tab.data-api", '[data-toggle="pill"]', o)
}(jQuery),
function(t) {
    "use strict";
    function e(e) {
        return this.each(function() {
            var i = t(this)
              , o = i.data("bs.affix")
              , r = "object" == typeof e && e;
            o || i.data("bs.affix", o = new n(this,r)),
            "string" == typeof e && o[e]()
        })
    }
    var n = function(e, i) {
        this.options = t.extend({}, n.DEFAULTS, i),
        this.$target = t(this.options.target).on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this)).on("click.bs.affix.data-api", t.proxy(this.checkPositionWithEventLoop, this)),
        this.$element = t(e),
        this.affixed = null,
        this.unpin = null,
        this.pinnedOffset = null,
        this.checkPosition()
    };
    n.VERSION = "3.3.5",
    n.RESET = "affix affix-top affix-bottom",
    n.DEFAULTS = {
        offset: 0,
        target: window
    },
    n.prototype.getState = function(t, e, n, i) {
        var o = this.$target.scrollTop()
          , r = this.$element.offset()
          , a = this.$target.height();
        if (null != n && "top" == this.affixed)
            return o < n && "top";
        if ("bottom" == this.affixed)
            return null != n ? !(o + this.unpin <= r.top) && "bottom" : !(o + a <= t - i) && "bottom";
        var s = null == this.affixed
          , l = s ? o : r.top;
        return null != n && o <= n ? "top" : null != i && l + (s ? a : e) >= t - i && "bottom"
    }
    ,
    n.prototype.getPinnedOffset = function() {
        if (this.pinnedOffset)
            return this.pinnedOffset;
        this.$element.removeClass(n.RESET).addClass("affix");
        var t = this.$target.scrollTop()
          , e = this.$element.offset();
        return this.pinnedOffset = e.top - t
    }
    ,
    n.prototype.checkPositionWithEventLoop = function() {
        setTimeout(t.proxy(this.checkPosition, this), 1)
    }
    ,
    n.prototype.checkPosition = function() {
        if (this.$element.is(":visible")) {
            var e = this.$element.height()
              , i = this.options.offset
              , o = i.top
              , r = i.bottom
              , a = Math.max(t(document).height(), t(document.body).height());
            "object" != typeof i && (r = o = i),
            "function" == typeof o && (o = i.top(this.$element)),
            "function" == typeof r && (r = i.bottom(this.$element));
            var s = this.getState(a, e, o, r);
            if (this.affixed != s) {
                null != this.unpin && this.$element.css("top", "");
                var l = "affix" + (s ? "-" + s : "")
                  , c = t.Event(l + ".bs.affix");
                if (this.$element.trigger(c),
                c.isDefaultPrevented())
                    return;
                this.affixed = s,
                this.unpin = "bottom" == s ? this.getPinnedOffset() : null,
                this.$element.removeClass(n.RESET).addClass(l).trigger(l.replace("affix", "affixed") + ".bs.affix")
            }
            "bottom" == s && this.$element.offset({
                top: a - e - r
            })
        }
    }
    ;
    var i = t.fn.affix;
    t.fn.affix = e,
    t.fn.affix.Constructor = n,
    t.fn.affix.noConflict = function() {
        return t.fn.affix = i,
        this
    }
    ,
    t(window).on("load", function() {
        t('[data-spy="affix"]').each(function() {
            var n = t(this)
              , i = n.data();
            i.offset = i.offset || {},
            null != i.offsetBottom && (i.offset.bottom = i.offsetBottom),
            null != i.offsetTop && (i.offset.top = i.offsetTop),
            e.call(n, i)
        })
    })
}(jQuery),
function() {
    this.Shared = {}
}
.call(this),
function() {
    this.Shared.Tooltip = function() {
        function t(t) {
            this.targetBlock = t.targetBlock,
            this.iconClass = t.iconClass,
            this.tooltipClass = t.tooltipClass,
            this.iconParentClass = t.iconParentClass
        }
        return t.prototype.render = function() {
            return this.toggleTooltip()
        }
        ,
        t.prototype.toggleTooltip = function() {
            return $(this.targetBlock).find(this.iconClass).hover((t = this,
            function(e) {
                return $(e.target).parents(t.iconParentClass).find(t.tooltipClass).stop().fadeIn()
            }
            ), function(t) {
                return function(e) {
                    return $(e.target).parents(t.iconParentClass).find(t.tooltipClass).stop().fadeOut()
                }
            }(this));
            var t
        }
        ,
        t
    }()
}
.call(this),
function() {
    var t = function(t, e) {
        return function() {
            return t.apply(e, arguments)
        }
    };
    this.Shared.CheckAndDownload = function() {
        function e(e) {
            this.checkCheckBox = t(this.checkCheckBox, this),
            this.documents = e.documents,
            this.documentClass = e.documentClass,
            this.inputClass = e.inputClass,
            this.downloadBtn = e.downloadBtn,
            this.type = e.type
        }
        return e.prototype.render = function() {
            return this.checkCheckBox(),
            this.clickCheckBox(),
            this.clickSubmit()
        }
        ,
        e.prototype.checkCheckBox = function() {
            var t, e, n, i, o, r;
            for (e = 0,
            i = 0,
            o = (r = this.documents).length; i < o; i++)
                n = r[i],
                t = $(this.documentClass).find($(".check-" + this.type + "-" + n.id)),
                $(t).prop("checked") ? (e += 1,
                $(t).closest(this.documentClass).addClass("active")) : $(t).closest(this.documentClass).removeClass("active");
            return e > 0 ? $(this.downloadBtn).prop("disabled", !1) : $(this.downloadBtn).prop("disabled", !0),
            $(this.downloadBtn + "-count").text("" + e)
        }
        ,
        e.prototype.clickCheckBox = function() {
            return $(".boxil-checkbox").change((t = this,
            function(e) {
                var n, i, o;
                return n = (o = $(e.currentTarget).find(".boxil-checkbox-input")).val(),
                i = o.prop("checked"),
                $(t.documentClass).find($(".check-" + t.type + "-" + n)).prop("checked", i),
                t.checkCheckBox()
            }
            ));
            var t
        }
        ,
        e.prototype.clickSubmit = function() {
            return $(".boxil-checkbox-form").submit((t = this,
            function() {
                var e, n, i, o, r, a;
                if ($(t.downloadBtn).is(":disabled"))
                    return !1;
                for (n = [],
                o = 0,
                r = (a = t.documents).length; o < r; o++)
                    i = a[o],
                    (e = $(t.documentClass).find($(".check-" + t.type + "-" + i.id))).prop("checked") && n.push(e.val());
                return t.convertHiddenField(n)
            }
            ));
            var t
        }
        ,
        e
    }()
}
.call(this),
function() {
    var t = function(t, n) {
        function i() {
            this.constructor = t
        }
        for (var o in n)
            e.call(n, o) && (t[o] = n[o]);
        return i.prototype = n.prototype,
        t.prototype = new i,
        t.__super__ = n.prototype,
        t
    }
      , e = {}.hasOwnProperty;
    this.Shared.NewServiceCheckAndDownload = function(e) {
        function n(t) {
            this.formClass = t.formClass,
            t.type = "service",
            n.__super__.constructor.call(this, t)
        }
        return t(n, e),
        n.prototype.convertHiddenField = function(t) {
            var e, n, i, o;
            for (o = [],
            n = 0,
            i = t.length; n < i; n++)
                e = "<input type='hidden' name='ids[]' value='" + t[n] + "'>",
                o.push($(this.formClass).append(e));
            return o
        }
        ,
        n
    }(Shared.CheckAndDownload)
}
.call(this),
function() {
    var t = function(t, n) {
        function i() {
            this.constructor = t
        }
        for (var o in n)
            e.call(n, o) && (t[o] = n[o]);
        return i.prototype = n.prototype,
        t.prototype = new i,
        t.__super__ = n.prototype,
        t
    }
      , e = {}.hasOwnProperty;
    this.Shared.NewCategoryDocumentCheckAndDownload = function(e) {
        function n(t) {
            t.type = "categoryDocument",
            this.formClass = t.formClass,
            n.__super__.constructor.call(this, t)
        }
        return t(n, e),
        n.prototype.convertHiddenField = function(t) {
            var e, n, i, o;
            for (o = [],
            n = 0,
            i = t.length; n < i; n++)
                e = "<input type='hidden' name='ids[]' value='" + t[n] + "'>",
                o.push($(this.formClass).append(e));
            return o
        }
        ,
        n
    }(Shared.CheckAndDownload)
}
.call(this),
function() {
    this.Shared.Truncate = function() {
        function t(t) {
            this.ele = $(t.ele),
            this.lines = t.lines
        }
        return t.prototype.render = function() {
            if (this.ele.length > 0)
                return this.trunk8()
        }
        ,
        t.prototype.trunk8 = function() {
            return this.ele.trunk8({
                lines: this.lines
            })
        }
        ,
        t
    }()
}
.call(this),
function() {
    this.Shared.Dropdown = function() {
        function t(t) {
            null == t && (t = ".dropdown-trigger"),
            this.trigerClass = t
        }
        return t.prototype.render = function() {
            return this.dropdown()
        }
        ,
        t.prototype.dropdown = function() {
            var t;
            return t = this.trigerClass,
            $(document).click(function(e) {
                var n;
                return null == (n = $(e.target).closest(t)) || n.hasClass("active") ? $(t).removeClass("active") : ($(t).removeClass("active"),
                n.addClass("active"))
            })
        }
        ,
        t
    }()
}
.call(this),
function() {
    this.Shared.TableLink = function() {
        function t() {}
        return t.prototype.render = function() {
            return $(document).on("click", ".table-link[data-href]", function() {
                return window.location = $(this).attr("data-href")
            })
        }
        ,
        t
    }()
}
.call(this),
function() {
    this.Shared.ArticleToc = function() {
        function t() {}
        var e, n, i;
        return e = [],
        t.prototype.render = function(t, e) {
            return null == e && (e = null),
            this.contentElement = t,
            this.headerElement = e,
            this.articleId = $(this.contentElement).attr("data-id"),
            this.withToc = $(this.contentElement).attr("data-with-toc"),
            this.tabletMaxWidth = 959,
            this.buildMarkToc(),
            this.scrollToTarget(),
            this.shrinkToc(),
            this.observeCurrentSidebarTocPosition(),
            this.clickTocMenu()
        }
        ,
        t.prototype.shrinkToc = function() {
            return $(".toc").each(function(t, e) {
                var n;
                return (n = $(e)).children(".toc-title").on("click", function(t) {
                    var e;
                    return n.toggleClass("closed"),
                    e = n.hasClass("closed") ? "\u76ee\u6b21\u3092\u958b\u304f" : "\u76ee\u6b21\u3092\u9589\u3058\u308b",
                    t.target.textContent = e,
                    n.children("ul").toggle("fast")
                })
            })
        }
        ,
        t.prototype.buildMarkToc = function() {
            return this.markToc(this.contentElement + " h2, " + this.contentElement + " h3")
        }
        ,
        t.prototype.observeCurrentSidebarTocPosition = function() {
            var t, n, i, o, r, a, s;
            for (a = {
                root: null,
                rootMargin: "0px 0px -60% 0px",
                threshold: 0
            },
            r = new IntersectionObserver(this.handleWhenIntersect,a),
            s = [],
            i = n = 0,
            o = e.length; n < o; i = ++n)
                t = e[i],
                s.push(r.observe(t));
            return s
        }
        ,
        t.prototype.handleWhenIntersect = function(t) {
            var e, n, i, o, r, a, s, l, c;
            for (l = [],
            o = i = 0,
            r = t.length; i < r; o = ++i)
                if ((n = t[o]).intersectionRatio) {
                    if (e = $("#sidebar-toc .js-sidebar-toc-active"),
                    (a = $("#sidebar-toc-" + n.target.id)).length > 0) {
                        e.length > 0 && e.removeClass("js-sidebar-toc-active"),
                        a.addClass("js-sidebar-toc-active"),
                        s = $(a).position().top,
                        (c = $("#sidebar-toc")).innerHeight() < s && c.animate({
                            scrollTop: c.scrollTop() - c.innerHeight() + s + 200
                        }),
                        s < 0 && c.animate({
                            scrollTop: c.scrollTop() - 200
                        });
                        break
                    }
                    l.push(void 0)
                } else
                    l.push(void 0);
            return l
        }
        ,
        t.prototype.scrollToTarget = function() {
            var t, e, o, r, a, s, l, c;
            if (-1 !== (c = $(location).attr("href")).indexOf("#") && (l = "#" + (t = c.split("#"))[t.length - 1],
            i(l),
            n(l),
            (s = $(l)).length))
                return a = 20,
                r = 300,
                e = null != this.headerElement ? $(this.headerElement).outerHeight() : 0,
                o = Math.floor(s.offset().top) - e - a,
                $("html, body").animate({
                    scrollTop: o
                }, r)
        }
        ,
        t.prototype.markToc = function(t) {
            var n, i, o;
            return n = this.articleId,
            o = new URLSearchParams(window.location.search),
            i = o.has("page") ? o.get("page") : 1,
            $(t).not(".jsIgnoreHeader").each(function(t) {
                var o;
                return o = this.textContent,
                $(this).text(""),
                $(this).append("<span>" + o + "</span>"),
                $("span", this).attr("id", n + "-" + ++t + "-" + i),
                e.push($("span", this)[0])
            })
        }
        ,
        t.prototype.clickTocMenu = function() {
            return $("a").click(function() {
                var t, e;
                if ((t = $(this).parent()).attr("id").startsWith("toc-") && (e = t.attr("id").replace("toc-", ""),
                i("#" + e),
                n("#" + e)),
                t.attr("id").startsWith("sidebar-toc-"))
                    return e = t.attr("id").replace("sidebar-toc-", ""),
                    i("#" + e),
                    n("#" + e)
            })
        }
        ,
        i = function(t) {
            var e;
            if ((e = $(t).closest(".tabContent")).length > 0)
                return $("#" + e.attr("id").replace("content", "title")).click()
        }
        ,
        n = function(t) {
            var e, n;
            if ((e = $(t).closest(".accordionTabContent")).length > 0 && !(n = $("#" + e.attr("id").replace("content", "title"))).hasClass("tabHeaderContainer--active"))
                return n.click()
        }
        ,
        t
    }()
}
.call(this),
$(function() {
    var t = 959
      , e = 95
      , n = 0
      , i = $(".js-scrolltofixed-menu")
      , o = $(".js-scrolltofixed-content")
      , r = $("#js-overlap-hidden-target");
    if (i.scrollToFixed && !($(window).width() < t && i.length > 0)) {
        var a = r[0] ? r.offset().top - $("#js-overlap-hidden").outerHeight() - 100 : o.outerHeight();
        i.scrollToFixed({
            marginTop: e + n,
            limit: a
        })
    }
}),
"#_=_" == window.location.hash && (window.location.hash = ""),
window.addEventListener("DOMContentLoaded", function() {
    var t = window.navigator.userAgent.toUpperCase()
      , e = document.getElementById("ie-display");
    if (e)
        if (-1 === t.indexOf("MSIE") && -1 === t.indexOf("TRIDENT"))
            e.style.display = "none";
        else {
            e.style.display = "block";
            var n = document.getElementById("boxil-navbar").offsetHeight;
            document.querySelector(".boxil-navbar-height-fixer").style.height = n + "px"
        }
}),
function() {
    this.Shared.Flash = function() {
        function t() {}
        return t.prototype.render = function() {
            return this.flash()
        }
        ,
        t.prototype.flash = function() {
            var t, e;
            if (gon.flash) {
                if (e = gon.flash[0][0],
                t = gon.flash[0][1],
                null == e)
                    return;
                if (null == t)
                    return;
                switch (e) {
                case "success":
                    return toastr.success(t);
                case "error":
                    return toastr.error(t);
                case "alert":
                    return toastr.warning(t);
                default:
                    return toastr.info(t)
                }
            }
        }
        ,
        t
    }(),
    $(function() {
        return (new Shared.Flash).render()
    })
}
.call(this),
("function" == typeof define && define.amd ? define : function(t, e) {
    "undefined" != typeof module && module.exports ? module.exports = e(require("jquery")) : window.toastr = e(window.jQuery)
}
)(["jquery"], function(t) {
    return function() {
        function e(t, e, n) {
            return h({
                type: w.error,
                iconClass: m().iconClasses.error,
                message: t,
                optionsOverride: n,
                title: e
            })
        }
        function n(e, n) {
            return e || (e = m()),
            (v = t("#" + e.containerId)).length ? v : (n && (v = d(e)),
            v)
        }
        function i(t, e, n) {
            return h({
                type: w.info,
                iconClass: m().iconClasses.info,
                message: t,
                optionsOverride: n,
                title: e
            })
        }
        function o(t) {
            y = t
        }
        function r(t, e, n) {
            return h({
                type: w.success,
                iconClass: m().iconClasses.success,
                message: t,
                optionsOverride: n,
                title: e
            })
        }
        function a(t, e, n) {
            return h({
                type: w.warning,
                iconClass: m().iconClasses.warning,
                message: t,
                optionsOverride: n,
                title: e
            })
        }
        function s(t) {
            var e = m();
            v || n(e),
            u(t, e) || c(e)
        }
        function l(e) {
            var i = m();
            return v || n(i),
            e && 0 === t(":focus", e).length ? void g(e) : void (v.children().length && v.remove())
        }
        function c(e) {
            for (var n = v.children(), i = n.length - 1; i >= 0; i--)
                u(t(n[i]), e)
        }
        function u(e, n) {
            return !(!e || 0 !== t(":focus", e).length || (e[n.hideMethod]({
                duration: n.hideDuration,
                easing: n.hideEasing,
                complete: function() {
                    g(e)
                }
            }),
            0))
        }
        function d(e) {
            return (v = t("<div/>").attr("id", e.containerId).addClass(e.positionClass).attr("aria-live", "polite").attr("role", "alert")).appendTo(t(e.target)),
            v
        }
        function f() {
            return {
                tapToDismiss: !0,
                toastClass: "toast",
                containerId: "toast-container",
                debug: !1,
                showMethod: "fadeIn",
                showDuration: 300,
                showEasing: "swing",
                onShown: void 0,
                hideMethod: "fadeOut",
                hideDuration: 1e3,
                hideEasing: "swing",
                onHidden: void 0,
                extendedTimeOut: 1e3,
                iconClasses: {
                    error: "toast-error",
                    info: "toast-info",
                    success: "toast-success",
                    warning: "toast-warning"
                },
                iconClass: "toast-info",
                positionClass: "toast-top-right",
                timeOut: 5e3,
                titleClass: "toast-title",
                messageClass: "toast-message",
                target: "body",
                closeHtml: "<button>&times;</button>",
                newestOnTop: !0
            }
        }
        function p(t) {
            y && y(t)
        }
        function h(e) {
            function i(e) {
                return !t(":focus", c).length || e ? c[a.hideMethod]({
                    duration: a.hideDuration,
                    easing: a.hideEasing,
                    complete: function() {
                        g(c),
                        a.onHidden && "hidden" !== h.state && a.onHidden(),
                        h.state = "hidden",
                        h.endTime = new Date,
                        p(h)
                    }
                }) : void 0
            }
            function o() {
                (a.timeOut > 0 || a.extendedTimeOut > 0) && (l = setTimeout(i, a.extendedTimeOut))
            }
            function r() {
                clearTimeout(l),
                c.stop(!0, !0)[a.showMethod]({
                    duration: a.showDuration,
                    easing: a.showEasing
                })
            }
            var a = m()
              , s = e.iconClass || a.iconClass;
            "undefined" != typeof e.optionsOverride && (a = t.extend(a, e.optionsOverride),
            s = e.optionsOverride.iconClass || s),
            b++,
            v = n(a, !0);
            var l = null
              , c = t("<div/>")
              , u = t("<div/>")
              , d = t("<div/>")
              , f = t(a.closeHtml)
              , h = {
                toastId: b,
                state: "visible",
                startTime: new Date,
                options: a,
                map: e
            };
            return e.iconClass && c.addClass(a.toastClass).addClass(s),
            e.title && (u.append(e.title).addClass(a.titleClass),
            c.append(u)),
            e.message && (d.append(e.message).addClass(a.messageClass),
            c.append(d)),
            a.closeButton && (f.addClass("toast-close-button").attr("role", "button"),
            c.prepend(f)),
            c.hide(),
            a.newestOnTop ? v.prepend(c) : v.append(c),
            c[a.showMethod]({
                duration: a.showDuration,
                easing: a.showEasing,
                complete: a.onShown
            }),
            a.timeOut > 0 && (l = setTimeout(i, a.timeOut)),
            c.hover(r, o),
            !a.onclick && a.tapToDismiss && c.click(i),
            a.closeButton && f && f.click(function(t) {
                t.stopPropagation ? t.stopPropagation() : void 0 !== t.cancelBubble && !0 !== t.cancelBubble && (t.cancelBubble = !0),
                i(!0)
            }),
            a.onclick && c.click(function() {
                a.onclick(),
                i()
            }),
            p(h),
            a.debug && console && console.log(h),
            c
        }
        function m() {
            return t.extend({}, f(), x.options)
        }
        function g(t) {
            v || (v = n()),
            t.is(":visible") || (t.remove(),
            t = null,
            0 === v.children().length && v.remove())
        }
        var v, y, b = 0, w = {
            error: "error",
            info: "info",
            success: "success",
            warning: "warning"
        }, x = {
            clear: s,
            remove: l,
            error: e,
            getContainer: n,
            info: i,
            options: {},
            subscribe: o,
            success: r,
            version: "2.0.3",
            warning: a
        };
        return x
    }()
}),
function() {
    this.Shared.Track = function() {
        function t() {
            this.trackTag = null
        }
        return t.prototype.cookieTrackKey = "user_track_path",
        t.prototype.render = function() {
            return this.getAhoyTrack(),
            this.getTrackTag()
        }
        ,
        t.prototype.getAhoyTrack = function() {
            if ("undefined" != typeof gon)
                return ahoy.track("js-ahoyTrack", gon.track_event_params)
        }
        ,
        t.prototype.getTrackTag = function() {
            return $(document).click((t = this,
            function(e) {
                var n, i, o, r, a, s, l, c;
                if (0 !== (s = $(e.target).closest(".js-track")).length && (l = s.attr("class")))
                    for (o = 0,
                    a = (c = l.split(" ")).length; o < a; o++) {
                        if (null == (n = c[o]))
                            return;
                        (i = n.match(/js-track-[a-zA-Z0-9]+/)) && (r = i.input,
                        t.trackTag = r.split("js-track-")[1],
                        t.putTrackTagIntoCookie())
                    }
            }
            ));
            var t
        }
        ,
        t.prototype.putTrackTagIntoCookie = function() {
            var t, e;
            return t = (e = Cookies.get(this.cookieTrackKey)) ? this.trackTag + "," + e : this.trackTag,
            Cookies.set(this.cookieTrackKey, t, {
                expires: 1 / 8
            })
        }
        ,
        t
    }(),
    $(function() {
        return (new Shared.Track).render()
    })
}
.call(this),
function() {
    this.Shared.LoginEight = function() {
        function t() {}
        return t.prototype.render = function() {
            if ($("#entryProfile-buttonWrapper").length > 0)
                return this.track_event_params = gon.track_event_params,
                this.click_login_eight()
        }
        ,
        t.prototype.click_login_eight = function() {
            var t;
            return $(".eight-entry-button"),
            $(".eight-entry-button").off("click").on("click", (t = this,
            function() {
                return t.post_ahoy_by_login_eight()
            }
            ))
        }
        ,
        t.prototype.post_ahoy_by_login_eight = function() {
            return this.track_event_params.phase = "client",
            this.track_event_params.params.event = {
                type: "click",
                action: "login_eight"
            },
            ahoy.track("js-ahoyTrack", this.track_event_params)
        }
        ,
        t
    }(),
    $(function() {
        return (new Shared.LoginEight).render()
    })
}
.call(this),
function(t) {
    var e = !1;
    if ("function" == typeof define && define.amd && (define(t),
    e = !0),
    "object" == typeof exports && (module.exports = t(),
    e = !0),
    !e) {
        var n = window.Cookies
          , i = window.Cookies = t();
        i.noConflict = function() {
            return window.Cookies = n,
            i
        }
    }
}(function() {
    function t() {
        for (var t = 0, e = {}; t < arguments.length; t++) {
            var n = arguments[t];
            for (var i in n)
                e[i] = n[i]
        }
        return e
    }
    function e(n) {
        function i(e, o, r) {
            var a;
            if ("undefined" != typeof document) {
                if (arguments.length > 1) {
                    if ("number" == typeof (r = t({
                        path: "/"
                    }, i.defaults, r)).expires) {
                        var s = new Date;
                        s.setMilliseconds(s.getMilliseconds() + 864e5 * r.expires),
                        r.expires = s
                    }
                    r.expires = r.expires ? r.expires.toUTCString() : "";
                    try {
                        a = JSON.stringify(o),
                        /^[\{\[]/.test(a) && (o = a)
                    } catch (g) {}
                    o = n.write ? n.write(o, e) : encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent),
                    e = (e = (e = encodeURIComponent(String(e))).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)).replace(/[\(\)]/g, escape);
                    var l = "";
                    for (var c in r)
                        r[c] && (l += "; " + c,
                        !0 !== r[c] && (l += "=" + r[c]));
                    return document.cookie = e + "=" + o + l
                }
                e || (a = {});
                for (var u = document.cookie ? document.cookie.split("; ") : [], d = /(%[0-9A-Z]{2})+/g, f = 0; f < u.length; f++) {
                    var p = u[f].split("=")
                      , h = p.slice(1).join("=");
                    '"' === h.charAt(0) && (h = h.slice(1, -1));
                    try {
                        var m = p[0].replace(d, decodeURIComponent);
                        if (h = n.read ? n.read(h, m) : n(h, m) || h.replace(d, decodeURIComponent),
                        this.json)
                            try {
                                h = JSON.parse(h)
                            } catch (g) {}
                        if (e === m) {
                            a = h;
                            break
                        }
                        e || (a[m] = h)
                    } catch (g) {}
                }
                return a
            }
        }
        return i.set = i,
        i.get = function(t) {
            return i.call(i, t)
        }
        ,
        i.getJSON = function() {
            return i.apply({
                json: !0
            }, [].slice.call(arguments))
        }
        ,
        i.defaults = {},
        i.remove = function(e, n) {
            i(e, "", t(n, {
                expires: -1
            }))
        }
        ,
        i.withConverter = e,
        i
    }
    return e(function() {})
}),
function() {
    this.Shared.LazyLoad = function() {
        function t() {
            this.intersectionObserver()
        }
        return t.prototype.intersectionObserver = function() {
            var t, e;
            return e = new IntersectionObserver(function(t) {
                return t.forEach(function(t) {
                    if (t.isIntersecting)
                        return t.target.src = t.target.dataset.src,
                        e.unobserve(t.target)
                })
            }
            ),
            t = document.querySelectorAll("img[is-lazyload]"),
            Array.prototype.slice.call(t, 0).forEach(function(t) {
                return e.observe(t)
            })
        }
        ,
        t
    }(),
    $(function() {
        var t;
        if (t = $("body"),
        ["articles show", "articles preview", "services show", "services reviews", "services reputation_answers_show", "awards lp_2021", "beyond", "keywords show", "authors show", "mangas show", "categories show", "articles preview_editor previewEditor"].some(t.hasClass, t))
            return new Shared.LazyLoad
    })
}
.call(this),
Common = {},
Common.Menu = class {
    constructor(t) {
        this.menu = $(t.menu),
        this.navbar = $("#boxil-navbar"),
        this.corp_lp_banner = $("#corporate-lp-banner"),
        this.footer = $("#boxil-footer"),
        this.paddingTop = t.paddingTop ? t.paddingTop : 10
    }
    render() {
        const t = 959;
        $(window).width() > t && this.load_menu()
    }
    load_menu() {
        if (this.menu.length > 0) {
            let t;
            const e = (t = this.navbar.height() > 0 ? this.navbar.height() : 70) + this.paddingTop;
            this.menu.scrollToFixed({
                marginTop: e,
                limit: this.scroll_limit(this.menu.outerHeight(), t, e)
            });
            let n = "";
            const i = $(".js-menu-items .js-menu-link")
              , o = i.map(function() {
                if ("#" === $(this).attr("href").slice(0, 1)) {
                    const t = $($(this).attr("href"));
                    if (t.length > 0)
                        return t
                }
            });
            return i.click(function(t) {
                const e = 65
                  , n = $(this).attr("href")
                  , i = $(n).offset().top - e;
                $("html, body").stop().animate({
                    scrollTop: i
                }, 500),
                t.preventDefault()
            }),
            $(window).scroll(function() {
                const t = 80
                  , e = $(this).scrollTop() + t;
                let r = o.map(function() {
                    if ($(this).offset().top < e)
                        return this
                });
                const a = (r = r[r.length - 1]) && r.length ? r[0].id : "";
                n !== a && (n = a,
                $(".js-menu-hover").removeClass("active").filter("[href='#" + a + "']").addClass("active"),
                i.removeClass("active").filter("[href='#" + a + "']").addClass("active"))
            })
        }
    }
    scroll_limit(t, e, n) {
        return this.corp_lp_banner.length > 0 ? this.corp_lp_banner.offset().top - e - t - n : this.footer.offset().top - e - t - n
    }
}
,
Common.Layout = class {
    render() {
        this.toggleDropdown(),
        this.toggleDrawerMenu()
    }
    toggleDropdown() {
        (new Shared.Dropdown).render()
    }
    toggleDrawerMenu() {
        const t = function() {
            $("#drawermenu-bg").fadeToggle(),
            $(".drawermenu-block").toggleClass("show")
        };
        $(".drawermenu-trigger, .drawermenu-close, #drawermenu-bg").click(()=>t())
    }
}
,
$(function() {
    (new Common.Layout).render()
}),
Service = {},
Service.Index = class {
    constructor() {
        this.DEFAULT_CATEGORY_BOX_SHOW_COUNT_PC = 5,
        this.DEFAULT_CATEGORY_BOX_SHOW_COUNT_SP = 2,
        this.category_documents = gon.category_documents
    }
    render() {
        this.objectFitImages(),
        this.interviewIcon_toggle(),
        this.heroSlider(),
        this.lazy_load(),
        this.trunk8(),
        this.handleCategoryDocumentSelect(),
        this.toggleTooltip(),
        this.toggleDepartments(),
        this.toggleCategories(),
        this.handleCategoryMoreButton()
    }
    objectFitImages() {
        objectFitImages(".object-fit")
    }
    heroSlider() {
        const t = $("#js-hero-slider").find("img")
          , e = t.length;
        let n = 0;
        const i = 4e3;
        var o = function() {
            t.eq(n).removeClass("show"),
            ++n >= e && (n = 0),
            t.eq(n).addClass("show"),
            setTimeout(o, i)
        };
        setTimeout(o, i)
    }
    interviewIcon_toggle() {
        const t = ".serviceIndex-interview-text";
        $(window).on("load resize", function() {
            window.matchMedia("(min-width:960px)").matches ? ($(t).addClass("desktop"),
            $(t).removeClass("other"),
            $(t).hide()) : ($(t).addClass("other"),
            $(t).removeClass("desktop"),
            $(t).show()),
            $("#serviceIndex-boxilTop").find(".js-serviceIndex-interview-icon").hover(function() {
                $(this).parents(".serviceIndex-interview-block").find(".desktop").stop().fadeIn()
            }, function() {
                $(this).parents(".serviceIndex-interview-block").find(".desktop").stop().fadeOut()
            })
        })
    }
    lazy_load() {
        $("img.lazy").length > 0 && $("img.lazy").lazyload({
            threshold: 200,
            effect: "fadeIn",
            effect_speed: 1e3
        })
    }
    toggleDepartments() {
        $(".js-department-more").on("click", function() {
            const t = $(".js-department-category-groups")
              , e = $(".js-department-shrinked").length > 0;
            t.toggleClass("js-department-shrinked");
            const n = e ? "\u30ab\u30c6\u30b4\u30ea\u3092\u305f\u305f\u3080" : "\u3055\u3089\u306b\u898b\u308b";
            $(".js-department-more-text").text(n),
            $(".js-department-more-icon").toggleClass("fa-chevron-down").toggleClass("fa-chevron-up")
        })
    }
    toggleCategories() {
        $(".js-category-more").on("click", function() {
            const t = $(this).closest(".js-department-category-groups")
              , e = t.find(".js-category-shrinked").length > 0;
            t.find(".js-toggle-category").toggleClass("js-category-shrinked"),
            t.find(".js-sp-toggle-category").toggleClass("display-show-default-pc");
            const n = e ? "\u9589\u3058\u308b" : "\u3055\u3089\u306b\u8868\u793a\u3059\u308b";
            t.find(".js-category-more-text").text(n),
            $(this).find(".js-category-more-icon").toggleClass("fa-chevron-down").toggleClass("fa-chevron-up")
        })
    }
    handleCategoryMoreButton() {
        $(document).ready(()=>$(".js-department-category-groups").each(function() {
            const t = $(this).find(".js-category").length || 0
              , e = t - this.DEFAULT_CATEGORY_BOX_SHOW_COUNT_PC
              , n = t - this.DEFAULT_CATEGORY_BOX_SHOW_COUNT_SP;
            e > 0 ? $(this).find(".js-category-more").addClass("js-show-pc") : $(this).find(".js-category-more").removeClass("js-show-pc"),
            n >= 0 ? $(this).find(".js-category-more").addClass("js-show-sp") : $(this).find(".js-category-more").removeClass("js-show-sp")
        }))
    }
    trunk8() {
        new Shared.Truncate({
            ele: ".trunk8-recommended-article-title",
            lines: 3
        }).render()
    }
    handleCategoryDocumentSelect() {
        new Shared.NewCategoryDocumentCheckAndDownload({
            documents: this.category_documents,
            formClass: ".boxil-checkbox-form",
            documentClass: ".servicesIndex-categoryDocument",
            downloadBtn: ".btn-categoryDocument-download-all"
        }).render()
    }
    toggleTooltip() {
        new Shared.Tooltip({
            targetBlock: "#servicesIndex-categoryDocument",
            iconClass: ".btn-categoryDocument-download-all",
            tooltipClass: ".tooltip-download-comment-wrapper",
            iconParentClass: ".categoryDocument-download-button"
        }).render()
    }
}
,
$(function() {
    if ($("body").hasClass("services index")) {
        (new Service.Index).render()
    }
});
