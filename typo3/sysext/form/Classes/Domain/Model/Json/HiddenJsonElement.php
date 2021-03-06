<?php
namespace TYPO3\CMS\Form\Domain\Model\Json;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * JSON hidden
 */
class HiddenJsonElement extends \TYPO3\CMS\Form\Domain\Model\Json\AbstractJsonElement
{
    /**
     * The ExtJS xtype of the element
     *
     * @var string
     */
    public $xtype = 'typo3-form-wizard-elements-basic-hidden';

    /**
     * The configuration array for the xtype
     *
     * @var array
     */
    public $configuration = array(
        'attributes' => array(
            'type' => 'hidden'
        ),
        'filters' => array(),
        'label' => array(
            'value' => ''
        ),
        'layout' => 'front',
        'validation' => array()
    );

    /**
     * Allowed attributes for this object
     *
     * @var array
     */
    protected $allowedAttributes = array(
        'accesskey',
        'class',
        'contenteditable',
        'contextmenu',
        'dir',
        'draggable',
        'dropzone',
        'hidden',
        'id',
        'lang',
        'spellcheck',
        'style',
        'tabindex',
        'title',
        'translate',
        /* element specific attributes */
        'name',
        'type',
        'value'
    );
}
