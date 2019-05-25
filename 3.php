<?php
function count_vowels(string $s): int {
  return array_sum(array_map(function ($vowel) use ($s) { 
    return substr_count($s, $vowel); 
  }, ['a', 'e', 'i', 'o', 'u']));
}

echo count_vowels('hello');