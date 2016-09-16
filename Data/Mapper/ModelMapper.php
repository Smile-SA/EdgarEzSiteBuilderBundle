<?php

namespace Smile\EzSiteBuilderBundle\Data\Mapper;

use Smile\EzSiteBuilderBundle\Data\Model\ModelData;
use eZ\Publish\API\Repository\Values\ValueObject;
use EzSystems\RepositoryForms\Data\Mapper\FormDataMapperInterface;

class ModelMapper implements FormDataMapperInterface
{
    /**
     * @param ValueObject $model
     * @param array       $params
     * @return ModelData
     */
    public function mapToFormData(ValueObject $model, array $params = [])
    {
        $data = new ModelData(['model' => $model]);

        return $data;
    }
}
