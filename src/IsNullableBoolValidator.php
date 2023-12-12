<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_bool;

/**
 * Represents a validator validating if a value is a nullable boolean value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsNullableBoolValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return null === $value || is_bool( $value );
	}
}
