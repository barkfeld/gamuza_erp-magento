<?php
/*
 * Gamuza ERP - ERP support for magento platform.
 * Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * Author: Eneias Ramos de Melo <eneias@gamuza.com.br>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Library General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public
 * License along with this library; if not, write to the
 * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 * Boston, MA 02110-1301, USA.
 */

/*
 * See the AUTHORS file for a list of people on the Gamuza Team.
 * See the ChangeLog files for a list of changes.
 * These files are distributed with gamuza_erp-magento at http://github.com/gamuzabrasil/.
 */

class Gamuza_ERP_Model_Config
{

const XML_PATH_STORE_INFO_NAME = 'general/store_information/name';
const XML_PATH_STORE_INFO_PHONE = 'general/store_information/phone';
const XML_PATH_STORE_INFO_ADDRESS = 'general/store_information/address';

public function getModuleVersion ()
{
    return (string) Mage::getConfig ()->getNode ('modules/Gamuza_ERP/version');
}

public function getStoreName ()
{
    return Mage::getStoreConfig (self::XML_PATH_STORE_INFO_NAME);
}

public function getStorePhone ()
{
    return Mage::getStoreConfig (self::XML_PATH_STORE_INFO_PHONE);
}

public function getStoreAddress ()
{
    return Mage::getStoreConfig (self::XML_PATH_STORE_INFO_ADDRESS);
}

}

