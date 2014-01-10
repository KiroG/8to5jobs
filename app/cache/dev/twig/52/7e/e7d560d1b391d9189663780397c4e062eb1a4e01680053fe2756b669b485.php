<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_527ee7d560d1b391d9189663780397c4e062eb1a4e01680053fe2756b669b485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  24 => 2,  76 => 13,  53 => 7,  49 => 6,  44 => 4,  39 => 3,  22 => 2,  19 => 1,  225 => 75,  222 => 74,  218 => 14,  215 => 13,  208 => 11,  205 => 10,  200 => 6,  197 => 5,  186 => 91,  168 => 82,  160 => 76,  158 => 74,  154 => 72,  142 => 68,  135 => 66,  126 => 63,  123 => 62,  119 => 61,  97 => 42,  87 => 35,  83 => 30,  62 => 24,  59 => 10,  55 => 23,  45 => 16,  37 => 13,  35 => 10,  31 => 8,  29 => 5,  23 => 1,  181 => 89,  173 => 84,  171 => 56,  166 => 54,  162 => 52,  155 => 48,  151 => 47,  145 => 69,  141 => 43,  138 => 67,  132 => 41,  124 => 39,  118 => 37,  115 => 36,  111 => 35,  105 => 32,  101 => 31,  95 => 28,  91 => 35,  88 => 26,  86 => 25,  81 => 23,  75 => 28,  70 => 26,  66 => 25,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 15,  33 => 4,  30 => 5,);
    }
}
