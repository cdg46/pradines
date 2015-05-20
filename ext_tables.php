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

$tca = array(
    'columns' => array(
        'icon' => array(
            'label' => 'Pradines',
            'config' => array(
                'type' => 'select',
                'selicon_cols' => 14,
                'items' => array(
                    array('Aucun', 0, 'EXT:pradines/Resources/Public/Images/Icons/none.jpg'),
                    array('culture', 'culture', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/culture.png'),
                    array('union', 'union', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/union.png'),
                    array('recyclage', 'recyclage', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/recyclage.png'),
                    array('info', 'info', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/info.png'),
                    array('annonce', 'annonce', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/annonce.png'),
                    array('rameau', 'rameau', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rameau.png'),
                    array('contact', 'contact', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/contact.png'),
                    array('sante', 'sante', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/sante.png'),
                    array('rencontre', 'rencontre', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rencontre.png'),
                    array('transport', 'transport', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/transport.png'),
                    array('naissance', 'naissance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/naissance.png'),
                    array('animation', 'animation', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/animation.png'),
                    array('people', 'people', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/people.png'),
                    array('flamme', 'flamme', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/flamme.png'),
                    array('individu', 'individu', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/individu.png'),
                    array('finance', 'finance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/finance.png'),
                    array('mairie', 'mairie', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/mairie.png'),
            ),
            ),
        ),
    ),
);

['TCA']['tt_content'] = array_replace_recursive(['TCA']['tt_content'], );
