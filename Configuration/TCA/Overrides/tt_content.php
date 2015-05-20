<?php
/**********
 * Add specific icons
 */
$tca = array(
    'columns' => array(
        'icon' => array(
            'label' => 'Pradines',
            'config' => array(
                'type' => 'select',
                'selicon_cols' => 14,
                'items' => array(
                    array('Aucun', 0, 'EXT:pradines/Resources/Public/Images/Icons/none.jpg'),
                    array('people', 'people', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/people.png'),
                    array('union', 'union', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/union.png'),
                    array('animation', 'animation', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/animation.png'),
                    array('info', 'info', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/info.png'),
                    array('rencontre', 'rencontre', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rencontre.png'),
                    array('annonce', 'annonce', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/annonce.png'),
                    array('recyclage', 'recyclage', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/recyclage.png'),
                    array('contact', 'contact', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/contact.png'),
                    array('naissance', 'naissance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/naissance.png'),
                    array('individu', 'individu', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/individu.png'),
                    array('rameau', 'rameau', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/rameau.png'),
                    array('transport', 'transport', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/transport.png'),
                    array('flamme', 'flamme', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/flamme.png'),
                    array('mairie', 'mairie', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/mairie.png'),
                    array('sante', 'sante', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/sante.png'),
                    array('culture', 'culture', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/culture.png'),
                    array('finance', 'finance', 'EXT:pradines/Resources/Public/Images/Icons/pradines/png/finance.png'),
            ),
            ),
        ),
    ),
);
unset($GLOBALS['TCA']['tt_content']['columns']['icon']);
$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);
