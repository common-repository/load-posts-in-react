<?php
/**
 * Load Posts in React
 *
 * @package       LOADPOSTS
 * @author        Mohammed Ahmed
 * @license       gplv2
 * @version       1.0
 *
 * @wordpress-plugin
 * Plugin Name:   Load Posts in React
 * Plugin URI:    https://mydomain.com
 * Description:   this plugin to get posts and change URL based on post section by using this Shortcode [get-posts-react]
 * Version:       1.0
 * Author:        Mohammed Ahmed
 * Author URI:    https://www.linkedin.com/in/m-abdelfattah92/
 * Text Domain:   load-posts-in-react
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with Load Posts in React. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;


add_shortcode( 'get-posts-react','get_posts_react_function'  );
function get_posts_react_function() {
    global $post;
    // require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/era-public-display.php';
    wp_enqueue_style( "load-posts-in-react-main", plugin_dir_url( __FILE__ ) . 'static/css/main.34de6062.chunk.css');
    wp_enqueue_script( "load-posts-in-react-chunk", plugin_dir_url( __FILE__ ) . 'static/js/2.30283e7e.chunk.js' );
    wp_enqueue_script( "load-posts-in-react-main", plugin_dir_url( __FILE__ ) . 'static/js/main.9d8369e5.chunk.js' );
    return '
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root"></div>
        <script>
            var siteURL = "'.get_site_url().'";
            !(function (a) {
                function e(e) {
                    for (var r, t, n = e[0], o = e[1], u = e[2], p = 0, l = []; p < n.length; p++) (t = n[p]), Object.prototype.hasOwnProperty.call(i, t) && i[t] && l.push(i[t][0]), (i[t] = 0);
                    for (r in o) Object.prototype.hasOwnProperty.call(o, r) && (a[r] = o[r]);
                    for (s && s(e); l.length; ) l.shift()();
                    return c.push.apply(c, u || []), f();
                }
                function f() {
                    for (var e, r = 0; r < c.length; r++) {
                        for (var t = c[r], n = !0, o = 1; o < t.length; o++) {
                            var u = t[o];
                            0 !== i[u] && (n = !1);
                        }
                        n && (c.splice(r--, 1), (e = p((p.s = t[0]))));
                    }
                    return e;
                }
                var t = {},
                    i = { 1: 0 },
                    c = [];
                function p(e) {
                    if (t[e]) return t[e].exports;
                    var r = (t[e] = { i: e, l: !1, exports: {} });
                    return a[e].call(r.exports, r, r.exports, p), (r.l = !0), r.exports;
                }
                (p.m = a),
                    (p.c = t),
                    (p.d = function (e, r, t) {
                        p.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t });
                    }),
                    (p.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                    }),
                    (p.t = function (r, e) {
                        if ((1 & e && (r = p(r)), 8 & e)) return r;
                        if (4 & e && "object" == typeof r && r && r.__esModule) return r;
                        var t = Object.create(null);
                        if ((p.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: r }), 2 & e && "string" != typeof r))
                            for (var n in r)
                                p.d(
                                    t,
                                    n,
                                    function (e) {
                                        return r[e];
                                    }.bind(null, n)
                                );
                        return t;
                    }),
                    (p.n = function (e) {
                        var r =
                            e && e.__esModule
                                ? function () {
                                      return e.default;
                                  }
                                : function () {
                                      return e;
                                  };
                        return p.d(r, "a", r), r;
                    }),
                    (p.o = function (e, r) {
                        return Object.prototype.hasOwnProperty.call(e, r);
                    }),
                    (p.p = "/");
                var r = (window["webpackJsonpmy-app"] = window["webpackJsonpmy-app"] || []),
                    n = r.push.bind(r);
                (r.push = e), (r = r.slice());
                for (var o = 0; o < r.length; o++) e(r[o]);
                var s = n;
                f();
            })([]);
        </script>
    ';

   
}