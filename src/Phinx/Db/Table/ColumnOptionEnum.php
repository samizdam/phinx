<?php
/**
 * Phinx
 *
 * (The MIT license)
 * Copyright (c) 2015 Rob Morgan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated * documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 *
 * @package    Phinx
 * @subpackage Phinx\Db
 */
namespace Phinx\Db\Table;

/**
 *
 * @author samizdam <samizdam@inbox.ru>
 *
 */
interface ColumnOptionEnum
{
    const OPTION_LIMIT = 'limit';
    const OPTION_DEFAULT = 'default';
    const OPTION_NULLABLE = 'null';
    const OPTION_ID = 'identity';
    const OPTION_PRECISION = 'precision';
    const OPTION_SCALE = 'scale';
    const OPTION_AFTER = 'after';
    const OPTION_UPDATE = 'update';
    const OPTION_COMMENT = 'comment';
    const OPTION_SIGNED = 'signed';
    const OPTION_TIMEZONE = 'timezone';
    const OPTION_PROPS = 'properties';
    const OPTION_VALUES = 'values';
}