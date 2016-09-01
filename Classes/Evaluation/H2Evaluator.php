<?php
namespace Clickstorm\CsSeo\Evaluation;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Marc Hirdes <hirdes@clickstorm.de>, clickstorm GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class H2Evaluator
 * @package Clickstorm\CsSeo\Evaluation
 */
class H2Evaluator extends AbstractEvaluator
{

	public function evaluate() {
		$state = self::STATE_RED;

		$count = $this->domDocument->getElementsByTagName('h2')->length;

		if($count > 0 && $count < 7) {
			$state =  self::STATE_GREEN;
		} elseif ($count > 6) {
			$state = self::STATE_YELLOW;
		}

		return [
			'count' => $count,
			'state' => $state
		];
	}

}