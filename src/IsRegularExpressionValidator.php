<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function preg_match;

/**
 * Represents a validator validating if a value is a regular expression.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsRegularExpressionValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return false !== @preg_match( $value, '' );
	}
}
