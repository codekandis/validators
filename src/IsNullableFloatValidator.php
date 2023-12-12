<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_float;

/**
 * Represents a validator validating if a value is a nullable float value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullableFloatValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_float( $value );
	}
}
