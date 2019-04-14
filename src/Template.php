<?php

namespace Fad;

/**
 * Class Template
 * @package Webbym
 */
class Template
{
    /**
     * @param string $view
     * @param array $context
     * @return string
     * @throws \Exception
     */
    public function render(string $view, array $context = [])
    {
        if (file_exists($view)) {

            if (!empty($context)) {
                extract($context);
            }

            ob_start();

            include ($view);

            return ob_get_clean();
        }

        throw new \Exception(sprintf('The file %s could not be found.', $view));
    }
}
