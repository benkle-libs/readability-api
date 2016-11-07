<?php
/**
 * Copyright (c) 2016 Benjamin Kleiner
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of
 * the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 * OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
declare(strict_types=1);

namespace Benkle\Readability;


use Kore\DataObject\DataObject;

/**
 * Class ReadablePage
 * This struct describes a page made readable.
 * While this was designed according to the result set of Postlight's Mercury, it should be sufficient for
 * most other use cases.
 * @see https://mercury.postlight.com/web-parser/
 * @package Benkle\Readability
 */
class ReadablePage extends DataObject
{
    public $title = '';
    public $author = '';
    public $content = '';
    public $datePublished = '';
    public $leadImageUrl = '';
    public $dek = '';
    public $url = '';
    public $domain = '';
    public $excerpt = '';
    public $wordCount = 0;
    public $direction = 'ltr';
    public $totalPages = 0;
    public $pagesRendered = 0;
    public $nextPageUrl = '';
}
