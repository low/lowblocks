<?php
namespace Craft;

class LowBlocksVariable
{
	protected $criteria;

	public function __construct()
	{
		$this->criteria = craft()->elements->getCriteria(ElementType::MatrixBlock);
	}

	public function id($id)
	{
		$this->criteria->id = $id;
		return $this->criteria->first();
	}

	public function blocks()
	{
		return $this->criteria;
	}

	public function blocksParams($params)
	{
		return craft()->elements->getCriteria(ElementType::MatrixBlock, $params);
	}
}