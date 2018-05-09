<?php

/**
 * AccessLevelPermission form base class.
 *
 * @method AccessLevelPermission getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Mekonen Berhane
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAccessLevelPermissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'token_id'          => new sfWidgetFormInputText(),
      'user_role_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'add_empty' => true)),
      'module_setting_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'add_empty' => true)),
      'access_level'      => new sfWidgetFormInputText(),
      'can_add'           => new sfWidgetFormInputCheckbox(),
      'can_delete'        => new sfWidgetFormInputCheckbox(),
      'can_edit'          => new sfWidgetFormInputCheckbox(),
      'can_view'          => new sfWidgetFormInputCheckbox(),
      'can_approve'       => new sfWidgetFormInputCheckbox(),
      'description'       => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'token_id'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'user_role_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserRole'), 'required' => false)),
      'module_setting_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ModuleSetting'), 'required' => false)),
      'access_level'      => new sfValidatorInteger(array('required' => false)),
      'can_add'           => new sfValidatorBoolean(array('required' => false)),
      'can_delete'        => new sfValidatorBoolean(array('required' => false)),
      'can_edit'          => new sfValidatorBoolean(array('required' => false)),
      'can_view'          => new sfValidatorBoolean(array('required' => false)),
      'can_approve'       => new sfValidatorBoolean(array('required' => false)),
      'description'       => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('access_level_permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AccessLevelPermission';
  }

}
