<?php

namespace Docdress;

interface MarkdownParserInterface
{
    /**
     * Parse the given markup.
     *
     * @param  string $markup
     * @return string
     */
    public function parse($markup);
}
