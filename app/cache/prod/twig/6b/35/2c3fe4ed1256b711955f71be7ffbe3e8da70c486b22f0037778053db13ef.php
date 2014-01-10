<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_6b352c3fe4ed1256b711955f71be7ffbe3e8da70c486b22f0037778053db13ef extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 70,  318 => 122,  316 => 121,  284 => 106,  279 => 104,  256 => 96,  237 => 86,  690 => 410,  676 => 401,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  595 => 354,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  550 => 326,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  422 => 250,  420 => 249,  396 => 234,  383 => 224,  366 => 210,  331 => 187,  267 => 156,  242 => 140,  351 => 135,  323 => 125,  301 => 117,  299 => 112,  281 => 105,  251 => 101,  248 => 100,  239 => 97,  225 => 87,  213 => 126,  165 => 59,  816 => 268,  813 => 267,  808 => 262,  801 => 258,  795 => 255,  791 => 253,  789 => 252,  786 => 251,  780 => 249,  778 => 248,  775 => 247,  769 => 245,  767 => 244,  764 => 243,  758 => 241,  756 => 240,  753 => 239,  747 => 237,  745 => 236,  742 => 235,  739 => 234,  735 => 189,  732 => 188,  729 => 187,  725 => 274,  723 => 267,  718 => 264,  716 => 234,  712 => 233,  709 => 232,  703 => 229,  700 => 228,  698 => 227,  693 => 224,  687 => 221,  684 => 220,  682 => 219,  679 => 218,  674 => 397,  668 => 213,  665 => 212,  662 => 211,  648 => 210,  642 => 208,  637 => 205,  631 => 203,  623 => 373,  621 => 200,  615 => 198,  597 => 197,  594 => 196,  588 => 350,  586 => 192,  582 => 190,  579 => 187,  576 => 186,  571 => 178,  567 => 337,  558 => 169,  552 => 167,  546 => 165,  540 => 162,  527 => 159,  522 => 156,  501 => 151,  496 => 149,  493 => 148,  491 => 147,  488 => 146,  485 => 145,  478 => 144,  475 => 143,  472 => 142,  454 => 136,  447 => 135,  438 => 133,  424 => 254,  418 => 128,  412 => 174,  406 => 163,  391 => 125,  373 => 118,  348 => 80,  338 => 130,  335 => 188,  317 => 70,  308 => 67,  276 => 57,  231 => 33,  210 => 75,  190 => 179,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 199,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 195,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  533 => 160,  528 => 167,  525 => 166,  516 => 155,  512 => 159,  510 => 158,  507 => 157,  505 => 152,  502 => 155,  498 => 134,  486 => 292,  483 => 129,  473 => 150,  465 => 147,  462 => 146,  456 => 273,  451 => 141,  428 => 136,  425 => 135,  414 => 127,  403 => 162,  400 => 129,  394 => 126,  371 => 113,  358 => 139,  349 => 103,  342 => 79,  339 => 100,  336 => 99,  329 => 75,  326 => 185,  321 => 123,  319 => 124,  311 => 89,  297 => 84,  289 => 112,  286 => 80,  274 => 77,  263 => 71,  250 => 93,  233 => 62,  228 => 83,  191 => 69,  178 => 123,  175 => 76,  146 => 34,  114 => 71,  572 => 180,  561 => 178,  557 => 330,  549 => 166,  544 => 172,  538 => 319,  536 => 161,  530 => 168,  521 => 162,  517 => 161,  511 => 160,  508 => 153,  504 => 302,  499 => 156,  492 => 295,  487 => 152,  477 => 150,  470 => 135,  467 => 148,  463 => 140,  460 => 139,  449 => 123,  446 => 139,  441 => 105,  426 => 102,  419 => 98,  415 => 247,  410 => 165,  395 => 84,  392 => 83,  388 => 117,  386 => 123,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  357 => 125,  347 => 134,  333 => 117,  324 => 92,  307 => 87,  300 => 113,  291 => 169,  288 => 107,  282 => 79,  275 => 103,  272 => 158,  226 => 67,  186 => 82,  148 => 63,  370 => 100,  367 => 131,  361 => 208,  352 => 121,  346 => 196,  343 => 132,  340 => 90,  332 => 97,  330 => 87,  327 => 126,  320 => 84,  315 => 123,  313 => 82,  310 => 81,  304 => 174,  302 => 114,  296 => 111,  293 => 109,  287 => 72,  280 => 59,  277 => 109,  271 => 108,  265 => 99,  262 => 105,  260 => 98,  257 => 149,  223 => 58,  192 => 55,  185 => 68,  180 => 124,  174 => 64,  137 => 58,  12 => 34,  150 => 55,  20 => 11,  129 => 56,  52 => 21,  157 => 41,  153 => 56,  139 => 31,  110 => 77,  65 => 29,  34 => 26,  96 => 40,  170 => 57,  134 => 56,  127 => 55,  100 => 36,  90 => 27,  76 => 57,  53 => 10,  270 => 110,  266 => 52,  261 => 107,  253 => 95,  249 => 70,  244 => 99,  236 => 35,  232 => 84,  216 => 28,  211 => 81,  200 => 55,  195 => 77,  188 => 178,  184 => 47,  172 => 52,  152 => 92,  120 => 46,  77 => 27,  84 => 38,  58 => 22,  222 => 81,  215 => 78,  212 => 13,  205 => 59,  202 => 77,  197 => 70,  194 => 87,  160 => 58,  126 => 55,  97 => 63,  83 => 86,  181 => 79,  155 => 52,  145 => 52,  124 => 43,  118 => 28,  81 => 26,  70 => 29,  113 => 41,  104 => 67,  74 => 33,  37 => 18,  23 => 18,  480 => 128,  474 => 285,  469 => 141,  461 => 155,  457 => 138,  453 => 142,  444 => 134,  440 => 148,  437 => 147,  435 => 258,  430 => 131,  427 => 130,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 128,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 117,  365 => 141,  362 => 110,  360 => 109,  355 => 101,  341 => 131,  337 => 103,  322 => 72,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 61,  285 => 111,  283 => 166,  278 => 115,  268 => 107,  264 => 72,  258 => 49,  252 => 80,  247 => 66,  241 => 37,  229 => 73,  220 => 80,  214 => 61,  177 => 65,  169 => 73,  140 => 41,  132 => 57,  128 => 47,  111 => 40,  107 => 24,  61 => 25,  273 => 56,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 77,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 59,  135 => 81,  131 => 48,  119 => 43,  108 => 39,  102 => 37,  71 => 29,  67 => 28,  63 => 50,  59 => 49,  47 => 21,  38 => 17,  94 => 35,  89 => 39,  85 => 34,  79 => 31,  75 => 31,  68 => 30,  56 => 24,  50 => 20,  29 => 21,  87 => 17,  72 => 56,  55 => 22,  21 => 12,  26 => 20,  98 => 43,  93 => 68,  88 => 60,  78 => 35,  46 => 35,  27 => 13,  40 => 19,  44 => 19,  35 => 16,  31 => 22,  43 => 20,  41 => 18,  28 => 13,  201 => 72,  196 => 90,  183 => 125,  171 => 63,  166 => 100,  163 => 49,  158 => 62,  156 => 57,  151 => 45,  142 => 60,  138 => 50,  136 => 39,  123 => 30,  121 => 52,  117 => 93,  115 => 49,  105 => 46,  101 => 73,  91 => 34,  69 => 50,  66 => 23,  62 => 28,  49 => 9,  24 => 13,  32 => 15,  25 => 12,  22 => 12,  19 => 11,  209 => 24,  203 => 122,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 69,  176 => 65,  173 => 116,  168 => 60,  164 => 71,  162 => 55,  154 => 66,  149 => 36,  147 => 90,  144 => 99,  141 => 98,  133 => 49,  130 => 56,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 69,  106 => 35,  103 => 45,  99 => 30,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 31,  73 => 29,  64 => 184,  60 => 15,  57 => 22,  54 => 154,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 13,  36 => 17,  33 => 16,  30 => 15,);
    }
}
