<?php

namespace PDS\Templates;

class TemplateFactory
{
    const TEMPLATE_PATH = __DIR__
        .\DIRECTORY_SEPARATOR.'..'
        .\DIRECTORY_SEPARATOR.'..'
        .\DIRECTORY_SEPARATOR.'assets'
        .\DIRECTORY_SEPARATOR.'templates';

    public static function create(string $templateName, string $templateDir = self::TEMPLATE_PATH): TemplateInterface
    {
        $templatePath = join(
            \DIRECTORY_SEPARATOR,
            [$templateDir, $templateName]
        );

        $templatePath = str_replace(['/', '\\'], \DIRECTORY_SEPARATOR, $templatePath);

        $templatePath .= '.tpl';

        return new SimpleTemplate($templatePath);
    }

    public static function renderAll(TemplateInterface ...$templates): string
    {
        return implode(
            "\n",
            array_map(
                function ($template) { return $template->render(); },
                $templates
            )
        );
    }
}
