<?php
if (!defined('TYPO3_MODE')) {
die('Access denied.');
}
/***************
* Make the extension configuration accessible
*/
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'pradines');

$TCA['pages']['columns'] += array(
    'icon' => array(
        'label' => 'Pradines',
        'exclude' => 1,
        'config' => array(
            'type' => 'select',
            'selicon_cols' => 14,
            'items' => array(
                array('Aucun', 0, 'EXT:pradines/Resources/Public/Images/Icons/none.jpg'),
			array('Resources/Public/Images/Icons/favicon/32x32', 'Resources/Public/Images/Icons/favicon/32x32', 'EXT:pradines/Resources/Public/Images/Icons/favicon/32x32.png'),
			array('Resources/Public/Images/Icons/favicon/96x96', 'Resources/Public/Images/Icons/favicon/96x96', 'EXT:pradines/Resources/Public/Images/Icons/favicon/96x96.png'),
			array('Resources/Public/Images/Icons/favicon/512x512', 'Resources/Public/Images/Icons/favicon/512x512', 'EXT:pradines/Resources/Public/Images/Icons/favicon/512x512.png'),
			array('Resources/Public/Images/Icons/favicon/16x16', 'Resources/Public/Images/Icons/favicon/16x16', 'EXT:pradines/Resources/Public/Images/Icons/favicon/16x16.png'),
			array('Resources/Public/Images/Icons/favicon/128x128', 'Resources/Public/Images/Icons/favicon/128x128', 'EXT:pradines/Resources/Public/Images/Icons/favicon/128x128.png'),
			array('Resources/Public/Images/Icons/favicon/256x256', 'Resources/Public/Images/Icons/favicon/256x256', 'EXT:pradines/Resources/Public/Images/Icons/favicon/256x256.png'),
			array('Resources/Public/Images/Icons/favicon/24x24', 'Resources/Public/Images/Icons/favicon/24x24', 'EXT:pradines/Resources/Public/Images/Icons/favicon/24x24.png'),
			array('Resources/Public/Images/Icons/favicon/64x64', 'Resources/Public/Images/Icons/favicon/64x64', 'EXT:pradines/Resources/Public/Images/Icons/favicon/64x64.png'),
			array('Resources/Public/Images/Icons/favicon/48x48', 'Resources/Public/Images/Icons/favicon/48x48', 'EXT:pradines/Resources/Public/Images/Icons/favicon/48x48.png'),
            ),
        ),
    ),
);

t3lib_extMgm::addToAllTCATypes (
    'pages',
    'icon'
);
