<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_int;

/**
 * Represents a validator validating if a value is a nullable integer value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullableIntValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_int( $value );
	}
}
