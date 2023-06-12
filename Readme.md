# Markdown2HTML and HTML2Markdown

> This package is fake, he just put 2 packages together, I didn't do anything magical

Markdown to HTML and HTML to Markdown Conversion package

## Installation

```bash
 composer require tilson/md2html-html2md
```
## Usage

```php
use Tilson\Md2htmlHtml2md\Md2HtmlHtml2MdConverter;

$md = "**teste**";
(new Md2HtmlHtml2MdConverter())->toHtml($md);
//output: <p><strong>teste</strong></p>

//==================================================

$html = "<p><strong>teste</strong></p>";
(new Md2HtmlHtml2MdConverter())->toMarkdown($html);
//output: **teste**
```

## Credits
 - erusev/parsedown
 - league/html-to-markdown

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.