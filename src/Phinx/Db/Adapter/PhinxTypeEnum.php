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
 * @subpackage Phinx\Db\Adapter
 */
namespace Phinx\Db\Adapter;

/**
 *
 * Enum with supported data types.
 *
 * @author samizdam <samizdam@inbox.ru>
 *
 */
interface PhinxTypeEnum
{
    const PHINX_TYPE_STRING         = 'string';
    const PHINX_TYPE_CHAR           = 'char';
    const PHINX_TYPE_TEXT           = 'text';
    const PHINX_TYPE_INTEGER        = 'integer';
    const PHINX_TYPE_BIG_INTEGER    = 'biginteger';
    const PHINX_TYPE_FLOAT          = 'float';
    const PHINX_TYPE_DECIMAL        = 'decimal';
    const PHINX_TYPE_DATETIME       = 'datetime';
    const PHINX_TYPE_TIMESTAMP      = 'timestamp';
    const PHINX_TYPE_TIME           = 'time';
    const PHINX_TYPE_DATE           = 'date';
    const PHINX_TYPE_BINARY         = 'binary';
    const PHINX_TYPE_BLOB           = 'blob';
    const PHINX_TYPE_BOOLEAN        = 'boolean';
    const PHINX_TYPE_JSON           = 'json';
    const PHINX_TYPE_JSONB          = 'jsonb';
    const PHINX_TYPE_UUID           = 'uuid';
    const PHINX_TYPE_FILESTREAM     = 'filestream';

    // Geospatial database types
    const PHINX_TYPE_GEOMETRY       = 'geometry';
    const PHINX_TYPE_POINT          = 'point';
    const PHINX_TYPE_LINESTRING     = 'linestring';
    const PHINX_TYPE_POLYGON        = 'polygon';

    // only for mysql so far
    const PHINX_TYPE_ENUM           = 'enum';
    const PHINX_TYPE_SET            = 'set';

}