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
			array('Resources/Public/Images/Icons/pradines/png/culture', 'Resources/Public/Images/Icons/pradines/png/culture', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/culture.png'),
			array('Resources/Public/Images/Icons/pradines/png/union', 'Resources/Public/Images/Icons/pradines/png/union', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/union.png'),
			array('Resources/Public/Images/Icons/pradines/png/recyclage', 'Resources/Public/Images/Icons/pradines/png/recyclage', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/recyclage.png'),
			array('Resources/Public/Images/Icons/pradines/png/info', 'Resources/Public/Images/Icons/pradines/png/info', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/info.png'),
			array('Resources/Public/Images/Icons/pradines/png/annonce', 'Resources/Public/Images/Icons/pradines/png/annonce', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/annonce.png'),
			array('Resources/Public/Images/Icons/pradines/png/rameau', 'Resources/Public/Images/Icons/pradines/png/rameau', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rameau.png'),
			array('Resources/Public/Images/Icons/pradines/png/contact', 'Resources/Public/Images/Icons/pradines/png/contact', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/contact.png'),
			array('Resources/Public/Images/Icons/pradines/png/sante', 'Resources/Public/Images/Icons/pradines/png/sante', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/sante.png'),
			array('Resources/Public/Images/Icons/pradines/png/rencontre', 'Resources/Public/Images/Icons/pradines/png/rencontre', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rencontre.png'),
			array('Resources/Public/Images/Icons/pradines/png/transport', 'Resources/Public/Images/Icons/pradines/png/transport', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/transport.png'),
			array('Resources/Public/Images/Icons/pradines/png/naissance', 'Resources/Public/Images/Icons/pradines/png/naissance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/naissance.png'),
			array('Resources/Public/Images/Icons/pradines/png/animation', 'Resources/Public/Images/Icons/pradines/png/animation', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/animation.png'),
			array('Resources/Public/Images/Icons/pradines/png/people', 'Resources/Public/Images/Icons/pradines/png/people', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/people.png'),
			array('Resources/Public/Images/Icons/pradines/png/flamme', 'Resources/Public/Images/Icons/pradines/png/flamme', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/flamme.png'),
			array('Resources/Public/Images/Icons/pradines/png/individu', 'Resources/Public/Images/Icons/pradines/png/individu', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/individu.png'),
			array('Resources/Public/Images/Icons/pradines/png/finance', 'Resources/Public/Images/Icons/pradines/png/finance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/finance.png'),
			array('Resources/Public/Images/Icons/pradines/png/mairie', 'Resources/Public/Images/Icons/pradines/png/mairie', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/mairie.png'),
			array('Resources/Private/sources/png/culture', 'Resources/Private/sources/png/culture', 'EXT:pradines/Resources/Private/sources/png/culture.png'),
			array('Resources/Private/sources/png/union', 'Resources/Private/sources/png/union', 'EXT:pradines/Resources/Private/sources/png/union.png'),
			array('Resources/Private/sources/png/recyclage', 'Resources/Private/sources/png/recyclage', 'EXT:pradines/Resources/Private/sources/png/recyclage.png'),
			array('Resources/Private/sources/png/info', 'Resources/Private/sources/png/info', 'EXT:pradines/Resources/Private/sources/png/info.png'),
			array('Resources/Private/sources/png/annonce', 'Resources/Private/sources/png/annonce', 'EXT:pradines/Resources/Private/sources/png/annonce.png'),
			array('Resources/Private/sources/png/rameau', 'Resources/Private/sources/png/rameau', 'EXT:pradines/Resources/Private/sources/png/rameau.png'),
			array('Resources/Private/sources/png/contact', 'Resources/Private/sources/png/contact', 'EXT:pradines/Resources/Private/sources/png/contact.png'),
			array('Resources/Private/sources/png/sante', 'Resources/Private/sources/png/sante', 'EXT:pradines/Resources/Private/sources/png/sante.png'),
			array('Resources/Private/sources/png/rencontre', 'Resources/Private/sources/png/rencontre', 'EXT:pradines/Resources/Private/sources/png/rencontre.png'),
			array('Resources/Private/sources/png/transport', 'Resources/Private/sources/png/transport', 'EXT:pradines/Resources/Private/sources/png/transport.png'),
			array('Resources/Private/sources/png/naissance', 'Resources/Private/sources/png/naissance', 'EXT:pradines/Resources/Private/sources/png/naissance.png'),
			array('Resources/Private/sources/png/animation', 'Resources/Private/sources/png/animation', 'EXT:pradines/Resources/Private/sources/png/animation.png'),
			array('Resources/Private/sources/png/people', 'Resources/Private/sources/png/people', 'EXT:pradines/Resources/Private/sources/png/people.png'),
			array('Resources/Private/sources/png/flamme', 'Resources/Private/sources/png/flamme', 'EXT:pradines/Resources/Private/sources/png/flamme.png'),
			array('Resources/Private/sources/png/individu', 'Resources/Private/sources/png/individu', 'EXT:pradines/Resources/Private/sources/png/individu.png'),
			array('Resources/Private/sources/png/finance', 'Resources/Private/sources/png/finance', 'EXT:pradines/Resources/Private/sources/png/finance.png'),
			array('Resources/Private/sources/png/mairie', 'Resources/Private/sources/png/mairie', 'EXT:pradines/Resources/Private/sources/png/mairie.png'),
			array('Resources/Private/sources/favicon/32x32', 'Resources/Private/sources/favicon/32x32', 'EXT:pradines/Resources/Private/sources/favicon/32x32.png'),
			array('Resources/Private/sources/favicon/96x96', 'Resources/Private/sources/favicon/96x96', 'EXT:pradines/Resources/Private/sources/favicon/96x96.png'),
			array('Resources/Private/sources/favicon/512x512', 'Resources/Private/sources/favicon/512x512', 'EXT:pradines/Resources/Private/sources/favicon/512x512.png'),
			array('Resources/Private/sources/favicon/16x16', 'Resources/Private/sources/favicon/16x16', 'EXT:pradines/Resources/Private/sources/favicon/16x16.png'),
			array('Resources/Private/sources/favicon/128x128', 'Resources/Private/sources/favicon/128x128', 'EXT:pradines/Resources/Private/sources/favicon/128x128.png'),
			array('Resources/Private/sources/favicon/256x256', 'Resources/Private/sources/favicon/256x256', 'EXT:pradines/Resources/Private/sources/favicon/256x256.png'),
			array('Resources/Private/sources/favicon/24x24', 'Resources/Private/sources/favicon/24x24', 'EXT:pradines/Resources/Private/sources/favicon/24x24.png'),
			array('Resources/Private/sources/favicon/64x64', 'Resources/Private/sources/favicon/64x64', 'EXT:pradines/Resources/Private/sources/favicon/64x64.png'),
			array('Resources/Private/sources/favicon/48x48', 'Resources/Private/sources/favicon/48x48', 'EXT:pradines/Resources/Private/sources/favicon/48x48.png'),
            ),
        ),
    ),
);

t3lib_extMgm::addToAllTCATypes (
    'pages',
    'icon'
);
