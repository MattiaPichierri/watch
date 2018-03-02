<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig */
class __TwigTemplate_41a1cb7e24a5170c7b2cfb1816c72493ff0a35c19db8cf859c093b38bab6e7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_product_collection_widget' => array($this, 'block_typeahead_product_collection_widget'),
            'typeahead_product_pack_collection_widget' => array($this, 'block_typeahead_product_pack_collection_widget'),
            'typeahead_customer_collection_widget' => array($this, 'block_typeahead_customer_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cef56929bc1cbd6cd2e6659aaf1b64d17d91e371deadb3e839bbd0ffdd2f6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cef56929bc1cbd6cd2e6659aaf1b64d17d91e371deadb3e839bbd0ffdd2f6cc->enter($__internal_9cef56929bc1cbd6cd2e6659aaf1b64d17d91e371deadb3e839bbd0ffdd2f6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig"));

        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
        
        $__internal_9cef56929bc1cbd6cd2e6659aaf1b64d17d91e371deadb3e839bbd0ffdd2f6cc->leave($__internal_9cef56929bc1cbd6cd2e6659aaf1b64d17d91e371deadb3e839bbd0ffdd2f6cc_prof);

    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        $__internal_623ed81a4219496c09830fcb8077d484b4a5fede8a0e53df12c91c1e1a8eef4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623ed81a4219496c09830fcb8077d484b4a5fede8a0e53df12c91c1e1a8eef4a->enter($__internal_623ed81a4219496c09830fcb8077d484b4a5fede8a0e53df12c91c1e1a8eef4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <input type=\"text\" id=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\">
        <ul id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-xs-12 product-list\">
            ";
        // line 39
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 40
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 46
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
        <div class=\"invisible\" id=\"tplcollection-";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 54
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
        
        $__internal_623ed81a4219496c09830fcb8077d484b4a5fede8a0e53df12c91c1e1a8eef4a->leave($__internal_623ed81a4219496c09830fcb8077d484b4a5fede8a0e53df12c91c1e1a8eef4a_prof);

    }

    // line 64
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        $__internal_f00377694655078eb0bb753d537cf7423ae4d25997513aa5dd1ef2b6d13442e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00377694655078eb0bb753d537cf7423ae4d25997513aa5dd1ef2b6d13442e6->enter($__internal_f00377694655078eb0bb753d537cf7423ae4d25997513aa5dd1ef2b6d13442e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        // line 65
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 67
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 68
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 m-b-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" /> ";
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        }
        // line 78
        echo "    </ul>

    <h2>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row m-b-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">×</span>
                <input type=\"number\" id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-action btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 m-b-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 129
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 149
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 152
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 186
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                    source: this['";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
        
        $__internal_f00377694655078eb0bb753d537cf7423ae4d25997513aa5dd1ef2b6d13442e6->leave($__internal_f00377694655078eb0bb753d537cf7423ae4d25997513aa5dd1ef2b6d13442e6_prof);

    }

    // line 207
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        $__internal_650d641a4c07a9347ef435afdd5ecf64aabd4013f0fea4fcd86ba94ed70e55cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650d641a4c07a9347ef435afdd5ecf64aabd4013f0fea4fcd86ba94ed70e55cc->enter($__internal_650d641a4c07a9347ef435afdd5ecf64aabd4013f0fea4fcd86ba94ed70e55cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        // line 208
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-xs-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 231
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 234
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 254
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                source: this['";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 259
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 265
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 269
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 275
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
        
        $__internal_650d641a4c07a9347ef435afdd5ecf64aabd4013f0fea4fcd86ba94ed70e55cc->leave($__internal_650d641a4c07a9347ef435afdd5ecf64aabd4013f0fea4fcd86ba94ed70e55cc_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  575 => 279,  571 => 278,  566 => 276,  558 => 275,  549 => 269,  538 => 265,  529 => 259,  522 => 255,  518 => 254,  508 => 247,  492 => 234,  486 => 231,  479 => 227,  463 => 214,  456 => 210,  448 => 209,  443 => 208,  437 => 207,  424 => 200,  408 => 187,  404 => 186,  395 => 180,  376 => 164,  361 => 152,  355 => 149,  348 => 145,  341 => 141,  334 => 137,  329 => 135,  325 => 134,  318 => 130,  310 => 129,  300 => 122,  294 => 119,  285 => 113,  274 => 105,  262 => 96,  257 => 94,  249 => 89,  237 => 84,  230 => 80,  226 => 78,  223 => 77,  207 => 73,  197 => 72,  191 => 71,  183 => 69,  178 => 68,  176 => 67,  172 => 66,  165 => 65,  159 => 64,  148 => 59,  144 => 58,  137 => 54,  133 => 53,  130 => 52,  127 => 51,  116 => 48,  111 => 46,  105 => 43,  101 => 41,  96 => 40,  94 => 39,  90 => 38,  82 => 37,  77 => 35,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  52 => 28,  48 => 26,  42 => 25,  35 => 207,  32 => 206,  30 => 64,  27 => 63,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% block typeahead_product_collection_widget %}
    <div
      class=\"autocomplete-search\"
      data-formid=\"{{ form.vars.id }}\"
      data-fullname=\"{{ form.vars.full_name }}\"
      data-mappingvalue=\"{{ mapping_value }}\"
      data-mappingname=\"{{ mapping_name }}\"
      data-remoteurl=\"{{ remote_url|raw }}\"
      data-limit=\"{{ limit }}\"
    >
        {{ form_errors(form) }}

        <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control search typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\">
        <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list nostyle col-xs-12 product-list\">
            {% if collection is defined and collection|length > 0 %}
                {% for item in collection %}
                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"{{ item.image }}\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        {{ template_collection|format(item.name)|raw }}
                      </div>
                      <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
        <div class=\"invisible\" id=\"tplcollection-{{ form.vars.id }}\">
          {{ template_collection|raw }}
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#{{ form.vars.id }}').on('focusout', function resetSearchBar() {
        \$('#{{ form.vars.id }}').typeahead('val', '');
      });
    </script>
{% endblock %}

{% block typeahead_product_pack_collection_widget %}
    <h2 class=\"title-products {{ collection is defined and collection|length > 0 ? '' : 'hide' }}\">{{ 'List of products for this pack'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list pack nostyle row\">
        {% if collection is defined and collection|length > 0 %}
            {% for item in collection %}
                <li data-product=\"{{ item.id }}-{{ item.id_product_attribute }}\" class=\"col-xl-3 col-lg-6 m-b-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"{{ item.image }}\" /> {{ template_collection|format(item.name, item.ref, item.quantity)|raw }}
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                    </div>
                </li>
            {% endfor %}
        {% endif %}
    </ul>

    <h2>{{ form.vars.label }}</h2>

    <div class=\"row m-b-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead search {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">×</span>
                <input type=\"number\" id=\"{{ form.vars.id }}-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"{{ form.vars.id }}-curPackItemAdd\" class=\"btn btn-action btn-block\">
                    <i class=\"material-icons\">add</i>
                    {{ \"Add\"|trans({}, \"Admin.Actions\") }}
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_{{ form.vars.id }} h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#{{ form.vars.id }}-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#{{ form.vars.id }}-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 m-b-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', data.{{ mapping_name }}, data.ref, number);
                        html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#{{ form.vars.id }}-data').append(html);
                        \$('#js_{{ form.vars.id }} h4.title-products').removeClass('hide');

                        \$('#{{ form.vars.id }}').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#{{ form.vars.id }}-curPackItemQty').val(1);
                });

                //define source
                this['{{ form.vars.id }}_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.{{ mapping_value }};
                    },
                    remote: {
                        url: '{{ remote_url|raw }}',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#{{ form.vars.id }}-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#{{ form.vars.id }}').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '{{ mapping_name }}',
                    source: this['{{ form.vars.id }}_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#{{ form.vars.id }}-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
{% endblock %}

{% block typeahead_customer_collection_widget %}
    {{ form_errors(form) }}
    <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list product-list nostyle col-xs-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['{{ form.vars.id }}_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.{{ mapping_value }};
                },
                remote: {
                    url: '{{ remote_url|raw }}',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#{{ form.vars.id }}').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '{{ mapping_name }}',
                source: this['{{ form.vars.id }}_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.{{ mapping_name }} +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if({{ limit }} != 0 && \$('#{{ form.vars.id }}-data li').length >= {{ limit }}){
                    return;
                }

                var value = suggestion.{{ mapping_value }};
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', suggestion.{{ mapping_name }});
                html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#{{ form.vars.id }}-data').show();
                \$('#{{ form.vars.id }}-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
{% endblock %}
", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "D:\\xampp\\htdocs\\jms_watch\\src\\PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
