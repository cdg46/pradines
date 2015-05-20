#!/bin/bash

# Creation automatique du hichier ext_tabes.php et ext_tables.sql pour MAJ ultérieure


echo "<?php
if (!defined('TYPO3_MODE')) {
die('Access denied.');
}
/***************
* Make the extension configuration accessible
*/
if (!is_array(\$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][\$_EXTKEY])) {
\$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][\$_EXTKEY] = unserialize(\$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][\$_EXTKEY]);
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(\$_EXTKEY, 'Configuration/TypoScript/', 'pradines');

\$TCA['pages']['columns'] += array(
    'icon' => array(
        'label' => 'Pradines',
        'exclude' => 1,
        'config' => array(
            'type' => 'select',
            'selicon_cols' => 14,
            'items' => array(
                array('Aucun', 0, 'EXT:pradines/Resources/Public/Images/Icons/none.jpg')," > ext_tables.php

find . -iname '*.png' -exec echo "{}" \; | cut -d'/' -f 2,3,4,5,6,7,8 > list.txt
for i in $(cat list.txt); do
    GLYPHICON=`echo $i | cut -d'/' -f 7 | cut -d'.' -f 1`
    if [[ ! "$i" =~ "Resources/Private" ]]; then
        echo "			array('$GLYPHICON', '$GLYPHICON', 'EXT:pradines/$i')," >> ext_tables.php
    fi
done

echo "            ),
        ),
    ),
);

t3lib_extMgm::addToAllTCATypes (
    'pages',
    'icon'
);" >> ext_tables.php
