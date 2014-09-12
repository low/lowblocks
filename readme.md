# Low Blocks plugin for Craft CMS

Adds a lowBlocks variable to directly get a Matrix Block by its ID:

    {% set block = craft.lowBlocks.id(123) %}
    {% set entry = block.owner %}

Or by any property, like type:

    {% set quotes = craft.lowblocks.blocks.type('quote') %}
