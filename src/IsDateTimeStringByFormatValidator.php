<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use DateTimeImmutable;

/**
 * Represents a validator validating if a value is a date-time string of a specific format.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsDateTimeStringByFormatValidator implements ValidatorInterface
{
	/**
	 * Stores the expected date-time format.
	 * @var string
	 */
	private string $format;

	/**
	 * Constructor method.
	 * @param string $format The expected date-time format.
	 */
	public function __construct( string $format )
	{
		$this->format = $format;
	}

	/**
	 * @inheritDoc
	 */
	public function validate( $value ): bool
	{
		return false !== @DateTimeImmutable::createFromFormat( $this->format, $value );
	}
}
