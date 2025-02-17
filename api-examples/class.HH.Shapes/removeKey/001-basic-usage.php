<?hh // partial

namespace Hack\UserDocumentation\API\Examples\HH\Shapes\RemoveKey;

function run(shape('x' => int, 'y' => int) $point): void {
  // Prints the value at key 'y'
  \var_dump($point['y']);

  Shapes::removeKey(&$point, 'y');

  // Prints NULL because the key 'y' doesn't exist any more
  /* HH_IGNORE_ERROR[4251] typechecker knows the key doesn't exist */
  \var_dump(Shapes::idx($point, 'y'));
}

run(shape('x' => 3, 'y' => -1));
