<?php

namespace Tilson\Md2htmlHtml2md;

use Parsedown;
use League\HTMLToMarkdown\HtmlConverter;
 
class Md2HtmlHtml2MdConverter
{
    public function toHtml($markdown)
    {
        $parsedown = new Parsedown();
        return $parsedown->text($markdown);
    }

    public function toMarkdown($html)
    {
        $converter = new HtmlConverter();
        return $converter->convert($html);
    }
}
