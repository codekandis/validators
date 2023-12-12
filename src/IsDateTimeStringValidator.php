<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use DateTime;
use Throwable;

/**
 * Represents a validator validating if a value is a date-time string.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeStringValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		try
		{
			@new DateTime( $value );

			return true;
		}
		catch ( Throwable $throwable )
		{
			return false;
		}
	}
}
