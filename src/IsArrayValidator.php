<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_array;

/**
 * Represents a validator validating if a value is an array value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsArrayValidator implements ValidatorInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function validate( $value ): bool
	{
		return is_array( $value );
	}
}
