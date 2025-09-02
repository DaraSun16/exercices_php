<?php

final class MathUtils {
	public static function factorielle(int $n): int {
		if ($n < 0) { throw new InvalidArgumentException('n doit être >= 0'); }
		$resultat = 1; for ($i = 2; $i <= $n; $i++) { $resultat *= $i; } return $resultat;
	}
}


echo 'Factorielle 5 = '.MathUtils::factorielle(5)."\n";
