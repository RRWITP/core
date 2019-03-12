<?php
/**
 * Plasma Core component
 * Copyright 2018-2019 PlasmaPHP, All Rights Reserved
 *
 * Website: https://github.com/PlasmaPHP
 * License: https://github.com/PlasmaPHP/core/blob/master/LICENSE
*/

namespace Plasma\Types;

/**
 * Represents a successful encoding conversion as general interface.
 */
interface TypeExtensionResultInterface {
    /**
     * Get the database type.
     * @return mixed  Driver-dependent.
     */
    function getDatabaseType();
    
    /**
     * Whether it's unsigned.
     * @return bool
     */
    function isUnsigned(): bool;
    
    /**
     * Get the encoded value.
     * @return mixed
     */
    function getValue();
}
