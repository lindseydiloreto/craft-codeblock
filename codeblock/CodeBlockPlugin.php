<?php
namespace Craft;

class CodeBlockPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Code Block';
	}

	public function getDescription()
	{
		return 'A simple field type for code samples.';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-codeblock';
	}

	public function getVersion()
	{
		return '1.1.0';
	}

	public function getSchemaVersion()
	{
		return '1.1.0';
	}

	public function getDeveloper()
	{
		return 'Double Secret Agency';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-codeblock';
		//return 'http://doublesecretagency.com';
	}

}
