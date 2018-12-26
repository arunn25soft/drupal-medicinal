<?php

/* modules/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig */
class __TwigTemplate_9b72ca316535364feea3eb377216fb937f1ff0b1ac18fed22d2ffadb14ebdd44 extends Twig_Template
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
        $tags = array("if" => 26);
        $filters = array("t" => 28, "format_date" => 28);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t', 'format_date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 21
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  <div class=\"field field--name-label\">
    ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : null), "label", array()), "html", null, true));
        echo "
    <span class=\"payment-method-icon payment-method-icon--";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["payment_method_entity"]) ? $context["payment_method_entity"] : null), "card_type", array()), "value", array()), "html", null, true));
        echo "\"></span>
  </div>
  ";
        // line 26
        if (($this->getAttribute((isset($context["payment_method_entity"]) ? $context["payment_method_entity"] : null), "isReusable", array()) && $this->getAttribute((isset($context["payment_method_entity"]) ? $context["payment_method_entity"] : null), "expiresTime", array()))) {
            // line 27
            echo "    <div class=\"field field--name-expires\">
      ";
            // line 28
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Expires")));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute((isset($context["payment_method_entity"]) ? $context["payment_method_entity"] : null), "expiresTime", array()), "custom", "n/Y")), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 31
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : null), "billing_profile", array()), "html", null, true));
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  63 => 28,  60 => 27,  58 => 26,  53 => 24,  49 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig", "/Applications/MAMP/htdocs/medicinal/modules/commerce/modules/payment/templates/commerce-payment-method--credit-card.html.twig");
    }
}
