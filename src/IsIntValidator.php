<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use function is_int;

/**
 * Represents a validator validating if a value is an integer value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsIntValidator implements ValidatorInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function validate( $value ): bool
	{
		return is_int( $value );
	}
}
