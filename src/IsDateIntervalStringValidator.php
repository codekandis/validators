<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use DateInterval;
use Throwable;

/**
 * Represents a validator validating if a value is a date interval string.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateIntervalStringValidator implements ValidatorInterface
{
	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		try
		{
			new DateInterval( $value );

			return true;
		}
		catch ( Throwable $throwable )
		{
			return false !== @DateInterval::createFromDateString( $value );
		}
	}
}
