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
 * @link http://docs.phinx.org/en/latest/migrations.html#valid-column-options
 *
 * @author samizdam <samizdam@inbox.ru>
 *
 */
interface ColumnOptionEnum
{

    /**
     * Set maximum length for strings, also hints column types in adapters
     * required value: int
     *
     * @var string
     */
    const OPTION_LIMIT      = 'limit';

    /**
     * For any column type: set default value or action
     * For TIMESTAMP: set default value (use with CURRENT_TIMESTAMP)
     *
     * required value: mixed
     *
     * @var string
     */
    const OPTION_DEFAULT    = 'default';

    /**
     * Allow NULL values (should not be used with primary keys!)
     *
     * required value: boolean
     *
     * @var string
     */
    const OPTION_NULLABLE   = 'null';

    /**
     * Enable or disable automatic incrementing
     *
     * required value: boolean
     *
     * @var string
     */
    const OPTION_ID         = 'identity';

    /**
     * Combine with scale set to set decimial accuracy
     *
     * @var string
     */
    const OPTION_PRECISION  = 'precision';

    /**
     * Combine with precision to set decimial accuracy
     *
     * @var string
     */
    const OPTION_SCALE      = 'scale';

    /**
     * Specify the column that a new column should be placed after
     *
     * require value: string
     *
     * @var string
     */
    const OPTION_AFTER      = 'after';

    /**
     * Set an action to be triggered when the row is updated (use with CURRENT_TIMESTAMP)
     *
     * @var string
     */
    const OPTION_UPDATE     = 'update';

    /**
     * Set a text comment on the column
     *
     * required value: string
     *
     * @var string
     */
    const OPTION_COMMENT    = 'comment';

    /**
     * For INTEGER AND BIGINTEGER : enable or disable the unsigned option (only applies to MySQL)
     * For BOOLEAN columns: enable or disable the unsigned option (only applies to MySQL)
     * required value: boolean
     * default value: false
     *
     * @var string
     */
    const OPTION_SIGNED     = 'signed';

    /**
     * Enable or disable the with time zone option for time and timestamp columns (only applies to Postgres)
     *
     * @var string
     */
    const OPTION_TIMEZONE   = 'timezone';

    /**
     * List of properties
     *
     * required value: array
     *
     * @var string
     */
    const OPTION_PROPS      = 'properties';

    /**
     * Can be a comma separated list or an array of values
     *
     * required value: array|string
     *
     * @var string
     */
    const OPTION_VALUES     = 'values';

}