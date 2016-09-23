<?php

namespace Stereoide\ResolvesEntityType;

trait ResolvesEntityType
{
    public function getEntityType()
    {
        /* Determine what type of entity we are */

        if (property_exists($this, 'entityType') && !empty($this->entityType)) {
            $entityType = $this->entityType;
        } else {
            /* Get entity type from model class name */

            $entityType = get_class($this);
        }

        $entityType = collect(explode('\\', $entityType))->last();

        /* Return */

        return $entityType;
    }
}
