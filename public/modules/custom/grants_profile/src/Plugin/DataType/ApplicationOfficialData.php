<?php

namespace Drupal\grants_profile\Plugin\DataType;

use Drupal\Core\TypedData\Plugin\DataType\Map;

/**
 * Address DataType.
 *
 * @DataType(
 * id = "grants_profile_application_official",
 * label = @Translation("Application Official"),
 * definition_class = "\Drupal\grants_profile\TypedData\Definition\ApplicationOfficialDefinition"
 * )
 */
class ApplicationOfficialData extends Map {

}