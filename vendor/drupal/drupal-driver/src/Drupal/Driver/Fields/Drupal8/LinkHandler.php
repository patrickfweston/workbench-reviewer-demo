<?php

namespace Drupal\Driver\Fields\Drupal8;

/**
 * Link field handler for Drupal 8.
 */
class LinkHandler extends AbstractHandler {

  /**
   * {@inheritdoc}
   */
  public function expand($values) {
    $return = array();
    foreach ($values as $value) {
      // 'options' is required to be an array, otherwise the utility class
      // Drupal\Core\Utility\UnroutedUrlAssembler::assemble() will complain.
      $options = array();
      if (!empty($value[2])) {
        parse_str($value[2], $options);
      }
      $return[] = array(
        'options' => $options,
        'title' => $value[0],
        'uri' => $value[1],
      );
    }
    return $return;
  }

}
