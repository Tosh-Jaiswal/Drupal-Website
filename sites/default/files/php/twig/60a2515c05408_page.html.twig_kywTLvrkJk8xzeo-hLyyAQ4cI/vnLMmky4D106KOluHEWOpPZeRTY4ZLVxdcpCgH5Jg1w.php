<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/crud/templates/page.html.twig */
class __TwigTemplate_90f012eaaccaaa25a839536d79c6073f8737c5b7f24a94829cb0717441a6e2da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo " <h1>CRUD Operation</h1>
    <table class=\"table-primary\" id=\"table1\">
        <tr>
            <td>
                <form onsubmit=\"event.preventDefault();onFormSubmit();formDisplay();\" autocomplete=\"off\">
                    <div>
                        <label>First Name</label>
                        <input type=\"text\" name=\"name\" id=\"name\" required
                            onkeypress=\"return (event.charCode > 64 && event.charCode < 91) || 
                            (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)\"
                            onchange=\"buttonControl()\">
                    </div>
                    <div>
                        <label>Age</label>
                        <input type=\"number\" name=\"age\" id=\"age\" required>
                    </div>
                    <div class=\"form-action-buttons\">
                        <input type=\"submit\" value=\"Submit\" id=\"submit\">
                    </div>
                </form>
            </td>
            <td>
                <table class=\"table\" id=\"data\" style=\"display: none;\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src=\"script.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8\"
        crossorigin=\"anonymous\"></script>";
    }

    public function getTemplateName()
    {
        return "themes/custom/crud/templates/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/crud/templates/page.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\crud\\templates\\page.html.twig");
    }
}
