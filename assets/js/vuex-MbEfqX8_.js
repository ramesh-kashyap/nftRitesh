import {
    s as V
} from "./vuei18n-CA58nVJV.js";
import {
    i as H,
    w as M,
    e as U,
    l as k,
    c as B
} from "./vant-3s7b3naM.js";
/*!
 * vuex v4.1.0
 * (c) 2022 Evan You
 * @license MIT
 */
var T = "store";

function ut(e) {
    return e === void 0 && (e = null), H(e !== null ? e : T)
}

function g(e, t) {
    Object.keys(e).forEach(function (i) {
        return t(e[i], i)
    })
}

function K(e) {
    return e !== null && typeof e == "object"
}

function W(e) {
    return e && typeof e.then == "function"
}

function Y(e, t) {
    return function () {
        return e(t)
    }
}

function x(e, t, i) {
    return t.indexOf(e) < 0 && (i && i.prepend ? t.unshift(e) : t.push(e)),
        function () {
            var r = t.indexOf(e);
            r > -1 && t.splice(r, 1)
        }
}

function A(e, t) {
    e._actions = Object.create(null), e._mutations = Object.create(null), e._wrappedGetters = Object.create(null), e._modulesNamespaceMap = Object.create(null);
    var i = e.state;
    y(e, i, [], e._modules.root, !0), S(e, i, t)
}

function S(e, t, i) {
    var r = e._state,
        n = e._scope;
    e.getters = {}, e._makeLocalGettersCache = Object.create(null);
    var o = e._wrappedGetters,
        c = {},
        s = {},
        u = U(!0);
    u.run(function () {
        g(o, function (l, a) {
            c[a] = Y(l, e), s[a] = B(function () {
                return c[a]()
            }), Object.defineProperty(e.getters, a, {
                get: function () {
                    return s[a].value
                },
                enumerable: !0
            })
        })
    }), e._state = k({
        data: t
    }), e._scope = u, e.strict && Q(e), r && i && e._withCommit(function () {
        r.data = null
    }), n && n.stop()
}

function y(e, t, i, r, n) {
    var o = !i.length,
        c = e._modules.getNamespace(i);
    if (r.namespaced && (e._modulesNamespaceMap[c], e._modulesNamespaceMap[c] = r), !o && !n) {
        var s = E(t, i.slice(0, -1)),
            u = i[i.length - 1];
        e._withCommit(function () {
            s[u] = r.state
        })
    }
    var l = r.context = X(e, c, i);
    r.forEachMutation(function (a, f) {
        var h = c + f;
        q(e, h, a, l)
    }), r.forEachAction(function (a, f) {
        var h = a.root ? f : c + f,
            d = a.handler || a;
        z(e, h, d, l)
    }), r.forEachGetter(function (a, f) {
        var h = c + f;
        J(e, h, a, l)
    }), r.forEachChild(function (a, f) {
        y(e, t, i.concat(f), a, n)
    })
}

function X(e, t, i) {
    var r = t === "",
        n = {
            dispatch: r ? e.dispatch : function (o, c, s) {
                var u = b(o, c, s),
                    l = u.payload,
                    a = u.options,
                    f = u.type;
                return (!a || !a.root) && (f = t + f), e.dispatch(f, l)
            },
            commit: r ? e.commit : function (o, c, s) {
                var u = b(o, c, s),
                    l = u.payload,
                    a = u.options,
                    f = u.type;
                (!a || !a.root) && (f = t + f), e.commit(f, l, a)
            }
        };
    return Object.defineProperties(n, {
        getters: {
            get: r ? function () {
                return e.getters
            } : function () {
                return G(e, t)
            }
        },
        state: {
            get: function () {
                return E(e.state, i)
            }
        }
    }), n
}

function G(e, t) {
    if (!e._makeLocalGettersCache[t]) {
        var i = {},
            r = t.length;
        Object.keys(e.getters).forEach(function (n) {
            if (n.slice(0, r) === t) {
                var o = n.slice(r);
                Object.defineProperty(i, o, {
                    get: function () {
                        return e.getters[n]
                    },
                    enumerable: !0
                })
            }
        }), e._makeLocalGettersCache[t] = i
    }
    return e._makeLocalGettersCache[t]
}

function q(e, t, i, r) {
    var n = e._mutations[t] || (e._mutations[t] = []);
    n.push(function (c) {
        i.call(e, r.state, c)
    })
}

function z(e, t, i, r) {
    var n = e._actions[t] || (e._actions[t] = []);
    n.push(function (c) {
        var s = i.call(e, {
            dispatch: r.dispatch,
            commit: r.commit,
            getters: r.getters,
            state: r.state,
            rootGetters: e.getters,
            rootState: e.state
        }, c);
        return W(s) || (s = Promise.resolve(s)), e._devtoolHook ? s.catch(function (u) {
            throw e._devtoolHook.emit("vuex:error", u), u
        }) : s
    })
}

function J(e, t, i, r) {
    e._wrappedGetters[t] || (e._wrappedGetters[t] = function (o) {
        return i(r.state, r.getters, o.state, o.getters)
    })
}

function Q(e) {
    M(function () {
        return e._state.data
    }, function () {}, {
        deep: !0,
        flush: "sync"
    })
}

function E(e, t) {
    return t.reduce(function (i, r) {
        return i[r]
    }, e)
}

function b(e, t, i) {
    return K(e) && e.type && (i = t, t = e, e = e.type), {
        type: e,
        payload: t,
        options: i
    }
}
var Z = "vuex bindings",
    j = "vuex:mutations",
    C = "vuex:actions",
    _ = "vuex",
    tt = 0;

function et(e, t) {
    V({
        id: "org.vuejs.vuex",
        app: e,
        label: "Vuex",
        homepage: "https://next.vuex.vuejs.org/",
        logo: "https://vuejs.org/images/icons/favicon-96x96.png",
        packageName: "vuex",
        componentStateTypes: [Z]
    }, function (i) {
        i.addTimelineLayer({
            id: j,
            label: "Vuex Mutations",
            color: I
        }), i.addTimelineLayer({
            id: C,
            label: "Vuex Actions",
            color: I
        }), i.addInspector({
            id: _,
            label: "Vuex",
            icon: "storage",
            treeFilterPlaceholder: "Filter stores..."
        }), i.on.getInspectorTree(function (r) {
            if (r.app === e && r.inspectorId === _)
                if (r.filter) {
                    var n = [];
                    D(n, t._modules.root, r.filter, ""), r.rootNodes = n
                } else r.rootNodes = [N(t._modules.root, "")]
        }), i.on.getInspectorState(function (r) {
            if (r.app === e && r.inspectorId === _) {
                var n = r.nodeId;
                G(t, n), r.state = nt(ct(t._modules, n), n === "root" ? t.getters : t._makeLocalGettersCache, n)
            }
        }), i.on.editInspectorState(function (r) {
            if (r.app === e && r.inspectorId === _) {
                var n = r.nodeId,
                    o = r.path;
                n !== "root" && (o = n.split("/").filter(Boolean).concat(o)), t._withCommit(function () {
                    r.set(t._state.data, o, r.state.value)
                })
            }
        }), t.subscribe(function (r, n) {
            var o = {};
            r.payload && (o.payload = r.payload), o.state = n, i.notifyComponentUpdate(), i.sendInspectorTree(_), i.sendInspectorState(_), i.addTimelineEvent({
                layerId: j,
                event: {
                    time: Date.now(),
                    title: r.type,
                    data: o
                }
            })
        }), t.subscribeAction({
            before: function (r, n) {
                var o = {};
                r.payload && (o.payload = r.payload), r._id = tt++, r._time = Date.now(), o.state = n, i.addTimelineEvent({
                    layerId: C,
                    event: {
                        time: r._time,
                        title: r.type,
                        groupId: r._id,
                        subtitle: "start",
                        data: o
                    }
                })
            },
            after: function (r, n) {
                var o = {},
                    c = Date.now() - r._time;
                o.duration = {
                    _custom: {
                        type: "duration",
                        display: c + "ms",
                        tooltip: "Action duration",
                        value: c
                    }
                }, r.payload && (o.payload = r.payload), o.state = n, i.addTimelineEvent({
                    layerId: C,
                    event: {
                        time: Date.now(),
                        title: r.type,
                        groupId: r._id,
                        subtitle: "end",
                        data: o
                    }
                })
            }
        })
    })
}
var I = 8702998,
    rt = 6710886,
    it = 16777215,
    L = {
        label: "namespaced",
        textColor: it,
        backgroundColor: rt
    };

function $(e) {
    return e && e !== "root" ? e.split("/").slice(-2, -1)[0] : "Root"
}

function N(e, t) {
    return {
        id: t || "root",
        label: $(t),
        tags: e.namespaced ? [L] : [],
        children: Object.keys(e._children).map(function (i) {
            return N(e._children[i], t + i + "/")
        })
    }
}

function D(e, t, i, r) {
    r.includes(i) && e.push({
        id: r || "root",
        label: r.endsWith("/") ? r.slice(0, r.length - 1) : r || "Root",
        tags: t.namespaced ? [L] : []
    }), Object.keys(t._children).forEach(function (n) {
        D(e, t._children[n], i, r + n + "/")
    })
}

function nt(e, t, i) {
    t = i === "root" ? t : t[i];
    var r = Object.keys(t),
        n = {
            state: Object.keys(e.state).map(function (c) {
                return {
                    key: c,
                    editable: !0,
                    value: e.state[c]
                }
            })
        };
    if (r.length) {
        var o = ot(t);
        n.getters = Object.keys(o).map(function (c) {
            return {
                key: c.endsWith("/") ? $(c) : c,
                editable: !1,
                value: O(function () {
                    return o[c]
                })
            }
        })
    }
    return n
}

function ot(e) {
    var t = {};
    return Object.keys(e).forEach(function (i) {
        var r = i.split("/");
        if (r.length > 1) {
            var n = t,
                o = r.pop();
            r.forEach(function (c) {
                n[c] || (n[c] = {
                    _custom: {
                        value: {},
                        display: c,
                        tooltip: "Module",
                        abstract: !0
                    }
                }), n = n[c]._custom.value
            }), n[o] = O(function () {
                return e[i]
            })
        } else t[i] = O(function () {
            return e[i]
        })
    }), t
}

function ct(e, t) {
    var i = t.split("/").filter(function (r) {
        return r
    });
    return i.reduce(function (r, n, o) {
        var c = r[n];
        if (!c) throw new Error('Missing module "' + n + '" for path "' + t + '".');
        return o === i.length - 1 ? c : c._children
    }, t === "root" ? e : e.root._children)
}

function O(e) {
    try {
        return e()
    } catch (t) {
        return t
    }
}
var p = function (t, i) {
        this.runtime = i, this._children = Object.create(null), this._rawModule = t;
        var r = t.state;
        this.state = (typeof r == "function" ? r() : r) || {}
    },
    R = {
        namespaced: {
            configurable: !0
        }
    };
R.namespaced.get = function () {
    return !!this._rawModule.namespaced
};
p.prototype.addChild = function (t, i) {
    this._children[t] = i
};
p.prototype.removeChild = function (t) {
    delete this._children[t]
};
p.prototype.getChild = function (t) {
    return this._children[t]
};
p.prototype.hasChild = function (t) {
    return t in this._children
};
p.prototype.update = function (t) {
    this._rawModule.namespaced = t.namespaced, t.actions && (this._rawModule.actions = t.actions), t.mutations && (this._rawModule.mutations = t.mutations), t.getters && (this._rawModule.getters = t.getters)
};
p.prototype.forEachChild = function (t) {
    g(this._children, t)
};
p.prototype.forEachGetter = function (t) {
    this._rawModule.getters && g(this._rawModule.getters, t)
};
p.prototype.forEachAction = function (t) {
    this._rawModule.actions && g(this._rawModule.actions, t)
};
p.prototype.forEachMutation = function (t) {
    this._rawModule.mutations && g(this._rawModule.mutations, t)
};
Object.defineProperties(p.prototype, R);
var m = function (t) {
    this.register([], t, !1)
};
m.prototype.get = function (t) {
    return t.reduce(function (i, r) {
        return i.getChild(r)
    }, this.root)
};
m.prototype.getNamespace = function (t) {
    var i = this.root;
    return t.reduce(function (r, n) {
        return i = i.getChild(n), r + (i.namespaced ? n + "/" : "")
    }, "")
};
m.prototype.update = function (t) {
    P([], this.root, t)
};
m.prototype.register = function (t, i, r) {
    var n = this;
    r === void 0 && (r = !0);
    var o = new p(i, r);
    if (t.length === 0) this.root = o;
    else {
        var c = this.get(t.slice(0, -1));
        c.addChild(t[t.length - 1], o)
    }
    i.modules && g(i.modules, function (s, u) {
        n.register(t.concat(u), s, r)
    })
};
m.prototype.unregister = function (t) {
    var i = this.get(t.slice(0, -1)),
        r = t[t.length - 1],
        n = i.getChild(r);
    n && n.runtime && i.removeChild(r)
};
m.prototype.isRegistered = function (t) {
    var i = this.get(t.slice(0, -1)),
        r = t[t.length - 1];
    return i ? i.hasChild(r) : !1
};

function P(e, t, i) {
    if (t.update(i), i.modules)
        for (var r in i.modules) {
            if (!t.getChild(r)) return;
            P(e.concat(r), t.getChild(r), i.modules[r])
        }
}

function ft(e) {
    return new v(e)
}
var v = function (t) {
        var i = this;
        t === void 0 && (t = {});
        var r = t.plugins;
        r === void 0 && (r = []);
        var n = t.strict;
        n === void 0 && (n = !1);
        var o = t.devtools;
        this._committing = !1, this._actions = Object.create(null), this._actionSubscribers = [], this._mutations = Object.create(null), this._wrappedGetters = Object.create(null), this._modules = new m(t), this._modulesNamespaceMap = Object.create(null), this._subscribers = [], this._makeLocalGettersCache = Object.create(null), this._scope = null, this._devtools = o;
        var c = this,
            s = this,
            u = s.dispatch,
            l = s.commit;
        this.dispatch = function (h, d) {
            return u.call(c, h, d)
        }, this.commit = function (h, d, F) {
            return l.call(c, h, d, F)
        }, this.strict = n;
        var a = this._modules.root.state;
        y(this, a, [], this._modules.root), S(this, a), r.forEach(function (f) {
            return f(i)
        })
    },
    w = {
        state: {
            configurable: !0
        }
    };
v.prototype.install = function (t, i) {
    t.provide(i || T, this), t.config.globalProperties.$store = this;
    var r = this._devtools !== void 0 ? this._devtools : !1;
    r && et(t, this)
};
w.state.get = function () {
    return this._state.data
};
w.state.set = function (e) {};
v.prototype.commit = function (t, i, r) {
    var n = this,
        o = b(t, i, r),
        c = o.type,
        s = o.payload,
        u = {
            type: c,
            payload: s
        },
        l = this._mutations[c];
    l && (this._withCommit(function () {
        l.forEach(function (f) {
            f(s)
        })
    }), this._subscribers.slice().forEach(function (a) {
        return a(u, n.state)
    }))
};
v.prototype.dispatch = function (t, i) {
    var r = this,
        n = b(t, i),
        o = n.type,
        c = n.payload,
        s = {
            type: o,
            payload: c
        },
        u = this._actions[o];
    if (u) {
        try {
            this._actionSubscribers.slice().filter(function (a) {
                return a.before
            }).forEach(function (a) {
                return a.before(s, r.state)
            })
        } catch {}
        var l = u.length > 1 ? Promise.all(u.map(function (a) {
            return a(c)
        })) : u[0](c);
        return new Promise(function (a, f) {
            l.then(function (h) {
                try {
                    r._actionSubscribers.filter(function (d) {
                        return d.after
                    }).forEach(function (d) {
                        return d.after(s, r.state)
                    })
                } catch {}
                a(h)
            }, function (h) {
                try {
                    r._actionSubscribers.filter(function (d) {
                        return d.error
                    }).forEach(function (d) {
                        return d.error(s, r.state, h)
                    })
                } catch {}
                f(h)
            })
        })
    }
};
v.prototype.subscribe = function (t, i) {
    return x(t, this._subscribers, i)
};
v.prototype.subscribeAction = function (t, i) {
    var r = typeof t == "function" ? {
        before: t
    } : t;
    return x(r, this._actionSubscribers, i)
};
v.prototype.watch = function (t, i, r) {
    var n = this;
    return M(function () {
        return t(n.state, n.getters)
    }, i, Object.assign({}, r))
};
v.prototype.replaceState = function (t) {
    var i = this;
    this._withCommit(function () {
        i._state.data = t
    })
};
v.prototype.registerModule = function (t, i, r) {
    r === void 0 && (r = {}), typeof t == "string" && (t = [t]), this._modules.register(t, i), y(this, this.state, t, this._modules.get(t), r.preserveState), S(this, this.state)
};
v.prototype.unregisterModule = function (t) {
    var i = this;
    typeof t == "string" && (t = [t]), this._modules.unregister(t), this._withCommit(function () {
        var r = E(i.state, t.slice(0, -1));
        delete r[t[t.length - 1]]
    }), A(this)
};
v.prototype.hasModule = function (t) {
    return typeof t == "string" && (t = [t]), this._modules.isRegistered(t)
};
v.prototype.hotUpdate = function (t) {
    this._modules.update(t), A(this, !0)
};
v.prototype._withCommit = function (t) {
    var i = this._committing;
    this._committing = !0, t(), this._committing = i
};
Object.defineProperties(v.prototype, w);
export {
    ft as c, ut as u
};
