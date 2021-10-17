<?php declare( strict_types = 1 );
namespace CodeKandis\Validators;

use CodeKandis\Converters\UniDirectionalConverters\EnumClassNotFoundException;
use CodeKandis\Converters\UniDirectionalConverters\EnumToArrayUniDirectionalConverter;
use function in_array;

/**
 * Represents a validator validiation if a value is an enum value.
 * @package codekandis/validators
 * @author Christian Ramelow <info@codekandis.net>
 */
class IsInEnumValidator implements ValidatorInterface
{
	/**
	 * Stores the values of the enum.
	 * @var array
	 */
	private array $enumValues;

	/**
	 * Constructor method.
	 * @param string $enumClassName The class name of the enum.
	 * @throws EnumClassNotFoundException The enum class does not exist.
	 */
	public function __construct( string $enumClassName )
	{
		$this->enumValues = ( new EnumToArrayUniDirectionalConverter() )
			->convert( $enumClassName );
	}

	/**
	 * {@inheritDoc}
	 */
	public function validate( $value ): bool
	{
		return in_array( $value, $this->enumValues, true );
	}
}
