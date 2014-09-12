# Low Blocks plugin for Craft CMS

Adds a lowBlocks variable to directly get a Matrix Block by its ID:

    {% set block = craft.lowBlocks.id(123) %}
    {% set entry = block.owner %}

Or by any property, like type:

    {% set quotes = craft.lowblocks.blocks.fieldId(123).type('quote') %}

**Note:**  Matrix doesn't do a join with the content table unless you specify the field ID, so you might need to specify it explicitly.
