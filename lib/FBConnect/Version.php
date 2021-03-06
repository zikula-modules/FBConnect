<?php
/**
 * Copyright Zikula Foundation 2011 - Zikula Application Framework
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package FBConnect
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Provides metadata to the Extensions module about this module.
 */
class FBConnect_Version extends Zikula_AbstractVersion
{
    /**
     * Build and return the metadata about this module for the Extensions module.
     *
     * @return array The metadata.
     */
    public function getMetaData()
    {
        $meta = array(
            // Module name
            'name'          => 'FBConnect',

            // Current module version always use the major.minor.point standard format!
            'version'       => '1.0.0-dev',

            // How the module name appears in URL
            'url'           => __('fbconnect'),

            // Display name (mostly for Extensions)
            'displayname'   => __('FBConnect for Zikula'),

            // Description (mostly for Extensions)
            'description'   => __('Provides Facebook account authentication for Zikula user accounts.'),

            // Advertised module capabilities
            'capabilities'  => array(
                'authentication'    => array(
                    'version'   => '1.0.0'
                )
            ),
            
            // Security schema help
            'securityschema' => array(
            ),
        );
        return $meta;
    }
}