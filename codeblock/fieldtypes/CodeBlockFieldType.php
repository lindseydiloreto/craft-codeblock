<?php
namespace Craft;

class CodeBlockFieldType extends BaseFieldType
{
	/**
	 * @inheritDoc IComponentType::getName()
	 *
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('Code Block');
	}

	/**
	 * @inheritDoc IFieldType::defineContentAttribute()
	 *
	 * @return mixed
	 */
	public function defineContentAttribute()
	{
		return array(AttributeType::String, 'column' => ColumnType::Text);
	}

	/**
	 * @inheritDoc IFieldType::getInputHtml()
	 *
	 * @param string $name
	 * @param mixed  $value
	 *
	 * @return string
	 */
	public function getInputHtml($name, $value)
	{
		return craft()->templates->render('codeblock/input', array(
			'name'  => $name,
			'value' => $value,
		));
	}

}