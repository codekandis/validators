<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_array;

/**
 * Represents a validator validating if a value is a nullable array value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullableArrayValidator implements ValidatorInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_array( $value );
	}
}
