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
 * Enum with supported options for column.
 *
 * @author samizdam <samizdam@inbox.ru>
 *
 */
interface ColumnOptionEnum
{

    /**
     * Max length of column value
     * required value: int
     *
     * @var string
     */
    const OPTION_LIMIT      = 'limit';

    /**
     * Default value for column
     * required value: mixed
     *
     * @var string
     */
    const OPTION_DEFAULT    = 'default';

    /**
     * Can be column value is null
     * required value: boolean
     *
     * @var string
     */
    const OPTION_NULLABLE   = 'null';

    /**
     *
     * @var string
     */
    const OPTION_ID         = 'identity';

    /**
     *
     * @var string
     */
    const OPTION_PRECISION  = 'precision';

    /**
     *
     * @var string
     */
    const OPTION_SCALE      = 'scale';

    /**
     * Declare name of column, previous for current
     * require value: string
     *
     * @var string
     */
    const OPTION_AFTER      = 'after';

    /**
     *
     * @var string
     */
    const OPTION_UPDATE     = 'update';

    /**
     * Text comment for column
     * required value: string
     *
     * @var string
     */
    const OPTION_COMMENT    = 'comment';

    /**
     * Declare column signed or unsigned
     * required value: boolean
     *
     * @var string
     */
    const OPTION_SIGNED     = 'signed';

    /**
     *
     * @var string
     */
    const OPTION_TIMEZONE   = 'timezone';

    /**
     * List of properties
     * required value: array
     *
     * @var string
     */
    const OPTION_PROPS      = 'properties';

    /**
     * List of values for enum.
     * required value: array
     *
     * @var string
     */
    const OPTION_VALUES     = 'values';
}