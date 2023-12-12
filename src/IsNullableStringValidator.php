<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_string;

/**
 * Represents a validator validating if a value is a nullable string value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullableStringValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_string( $value );
	}
}
