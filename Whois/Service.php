<?php

/**
 * FOSSBilling.
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   Apache-2.0
 *
 * Copyright FOSSBilling 2022
 * This software may contain code previously used in the BoxBilling project.
 * Copyright BoxBilling, Inc 2011-2021
 *
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

namespace Box\Mod\Whois;

use FOSSBilling\InformationException;

class Service
{
    protected $di;

    public function setDi(\Pimple\Container|null $di): void
    {
        $this->di = $di;
    }

    /**
     * Method to install the module. In most cases you will use this
     * to create database tables for your module.
     *
     * If your module isn't very complicated then the extension_meta
     * database table might be enough.
     *
     * @return bool
     *
     * @throws InformationException
     */
    public function install(): bool
    {
        // Execute SQL script if needed
        $db = $this->di['db'];
        $db->exec('SELECT NOW()');

        // throw new InformationException("Throw exception to terminate module installation process with a message", array(), 123);
        return true;
    }

    /**
     * Method to uninstall module. In most cases you will use this
     * to remove database tables for your module.
     *
     * You also can opt to keep the data in the database if you want
     * to keep the data for future use.
     *
     * @return bool
     *
     * @throws InformationException
     */
    public function uninstall(): bool
    {
        // throw new InformationException("Throw exception to terminate module uninstallation process with a message", array(), 124);
        return true;
    }

    /**
     * Method to update module. When you release new version to
     * extensions.fossbilling.org then this method will be called
     * after the new files are placed.
     *
     * @param array $manifest - information about the new module version
     *
     * @return bool
     *
     * @throws InformationException
     */
    public function update(array $manifest): bool
    {
        // throw new InformationException("Throw exception to terminate module update process with a message", array(), 125);
        return true;
    }

    /**
     * Methods is a delegate for one database row.
     *
     * @param array $row - array representing one database row
     * @param string $role - guest|client|admin who is calling this method
     * @param bool $deep - true|false deep or light version of result to return to API
     *
     * @return array
     */
    public function toApiArray(array $row, string $role = 'guest', bool $deep = true): array
    {
        return $row;
    }
}