<?php
namespace Craft;

class LowBlocksVariable
{
    public function id($id)
    {
        $criteria = craft()->elements->getCriteria(ElementType::MatrixBlock);
        $criteria->id = $id;
        return $criteria->first();
    }
}