<?php

/**
 * This demonstrates the deprecated static calls that might be called from procedural code like `.module` files.
 */

/**
 * A simple example.
 */
function simple_example() {
  /* @var \Drupal\node\Entity\Node $node */
  $node = \Drupal::entityTypeManager()->getStorage('node')->load(123);

  $link = $node->toLink()->toString();
}

/**
 * An example using arguments.
 */
function example_using_arguments() {
  /* @var \Drupal\node\Entity\Node $node */
  $node = \Drupal::entityTypeManager()->getStorage('node')->load(123);

  $link = $node->toLink('Hello world', 'canonical', ['absolute' => TRUE])->toString();
}
