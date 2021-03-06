<?php
namespace Sitegeist\Eel\Standalone;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * Package base class of the Eel package.
 *
 * @Flow\Scope("singleton")
 */
class Package
{
    const EelExpressionRecognizer = '/
			^\${(?P<exp>
				(?:
					{ (?P>exp) }			# match object literal expression recursively
					|[^{}"\']+				# simple eel expression without quoted strings
					|"[^"\\\\]*				# double quoted strings with possibly escaped double quotes
						(?:
							\\\\.			# escaped character (quote)
							[^"\\\\]*		# unrolled loop following Jeffrey E.F. Friedl
						)*"
					|\'[^\'\\\\]*			# single quoted strings with possibly escaped single quotes
						(?:
							\\\\.			# escaped character (quote)
							[^\'\\\\]*		# unrolled loop following Jeffrey E.F. Friedl
						)*\'
				)*
			)}
			$/x';
}
